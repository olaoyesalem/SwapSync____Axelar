from . import serializers
from django.shortcuts import render
from rest_framework.views import APIView
from rest_framework import status
from rest_framework.response import Response
from rest_framework.permissions import IsAuthenticated

from . import models


from django.contrib.auth import get_user_model

User = get_user_model()


# Create your views here.


class SignUpView(APIView):
    serializer_class = serializers.SignUpSerializer

    def post(self, request, *args, **kwargs):
        serializer = self.serializer_class(data=request.data)
        serializer.is_valid(raise_exception=True)
        serializer.save()
        return Response({"status": True, "message": "User created successfully"}, status=status.HTTP_200_OK)


class GetSwapOffersView(APIView):
    serializer_class = serializers.GetSwapOfferSerializer
    # permission_classes = [IsAuthenticated]

    def get(self, request):
        queryset = models.SwapOffers.objects.filter(isAccepted=False)
        qs = self.serializer_class(queryset, many=True)
        return Response({"status": True, "message": "Data retrieved successfuly", "data": qs.data})


class MakeSwapOfferView(APIView):
    serializer_class = serializers.MakeSwapOfferSerializer
    permission_classes = [IsAuthenticated]

    def post(self, request):
        serializer = self.serializer_class(data=request.data)
        serializer.is_valid(raise_exception=True)
        if self.request.user.is_authenticated:
            swap_offer = models.SwapOffers.objects.create(
                offer_maker_id=self.request.user,
                offer_maker_name=self.request.user.username,
                token_to_recieve=serializer.data.get("token_to_recieve"),
                number_of_token_to_recieve=serializer.data.get(
                    "number_of_token_to_recieve"),
                token_to_swap=serializer.data.get("token_to_swap"),
                number_of_token_to_swap=serializer.data.get(
                    "number_of_token_to_swap"),
            )
            swap_offer.save()
            return Response({"status": True, "message": "offer created successfully"}, status=status.HTTP_200_OK)
        else:
            return Response({"status": False, "message": "You are not authenticated"}, status=status.HTTP_400_BAD_REQUEST)


class AcceptSwapOfferView(APIView):
    serializer_class = serializers.AcceptSwapOfferSerializer
    permission_classes = [IsAuthenticated]

    def post(self, request):
        serializer = self.serializer_class(data=request.data)
        serializer.is_valid(raise_exception=True)
        # if self.request.user.is_authenticated:
        swap_offer = models.SwapOffers.objects.get(
            id=request.data.get('id'))
        if swap_offer:
            if swap_offer.offer_maker_id == self.request.user:
                return Response({"status": False, "message": "You cannot accept an offer that you made"}, status=status.HTTP_400_BAD_REQUEST)
            swap_offer.offer_accepter_id = self.request.user
            swap_offer.offer_accepter_name = self.request.user.username
            swap_offer.isAccepted = True
            # when user that made the swap offer send his token
            # the transaction should be marked as done
            # add a boolean IsTranxnDone to be marked as done
            swap_offer.save()
            return Response({"status": True, "message": "offer created successfully"}, status=status.HTTP_200_OK)
        if not swap_offer:
            return Response({"status": False, "message": "Swap offer does not exist"}, status=status.HTTP_400_BAD_REQUEST)

class GetUserSwapHistory(APIView):
    serializer_class = serializers.GetSwapOfferSerializer
    permission_classes = [IsAuthenticated]

    def get(self, request):
        user_id = User.objects.get(id=self.request.user.id)
        queryset = models.SwapOffers.objects.filter(offer_maker_id=user_id)
        qs = self.serializer_class(queryset, many=True)
        return Response({"status": True, "message": "Data retrieved successfuly", "data": qs.data})
