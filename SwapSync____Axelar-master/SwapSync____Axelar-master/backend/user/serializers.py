from . import models
from rest_framework import serializers
from django.contrib.auth import get_user_model

User = get_user_model()


class SignUpSerializer(serializers.ModelSerializer):
    class Meta:
        model = models.CustomUser
        fields = ['username', 'email', 'password']
        extra_kwargs = {'password': {'write_only': True}}

    def validate_email(self, value):
        qs = User.objects.filter(email__iexact=value)
        if qs.exists():
            raise serializers.ValidationError(
                "User with this email already exists")
        return value

    def create(self, validated_data):
        password = validated_data.pop('password', None)
        instance = self.Meta.model(**validated_data)
        if password is not None:
            instance.set_password(password)
        instance.save()
        return instance


class MakeSwapOfferSerializer(serializers.ModelSerializer):

    class Meta:
        model = models.SwapOffers
        fields = ['token_to_recieve',
                  'number_of_token_to_recieve',
                  'token_to_swap',
                  'number_of_token_to_swap',]


class GetSwapOfferSerializer(serializers.ModelSerializer):

    class Meta:
        model = models.SwapOffers
        fields = ['id', 'offer_maker_id', 'offer_maker_name','isAccepted', 'token_to_recieve',
                  'number_of_token_to_recieve', 'token_to_swap',
                  'number_of_token_to_swap', 'offer_accepter_id', 'offer_accepter_name',
                  'created_at',]


class AcceptSwapOfferSerializer(serializers.ModelSerializer):

    class Meta:
        model = models.SwapOffers
        fields = ['id']
