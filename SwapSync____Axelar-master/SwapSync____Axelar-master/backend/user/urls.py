from django.urls import path

from . import views
from rest_framework_simplejwt.views import (
    TokenObtainPairView,
    TokenRefreshView,
)

urlpatterns = [
    path('signup', views.SignUpView.as_view(), name='sign-up'),
    path('login', TokenObtainPairView.as_view(), name='token_obtain_pair'),
    path('refresh-token', TokenRefreshView.as_view(), name='token_refresh'),

    # for swapping
    path('make-swap-offer', views.MakeSwapOfferView.as_view(),
         name='make-swap-offer'),
    path('accept-swap-offer', views.AcceptSwapOfferView.as_view(),
         name='accept-swap-offer'),
    path('all-offers', views.GetSwapOffersView.as_view(), name='all-swap-offers'),
    path('user-swap-history', views.GetUserSwapHistory.as_view(), name='swap-history'),

]
