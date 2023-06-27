from django.db import models
from django.contrib.auth.models import AbstractUser

# Create your models here.


class CustomUser(AbstractUser):
    username = models.CharField(max_length=20)
    email = models.EmailField(unique=True)

    USERNAME_FIELD = 'email'
    REQUIRED_FIELDS = ['username']

    def __str__(self) -> str:
        return self.username


class SwapOffers(models.Model):
    offer_maker_id = models.ForeignKey(CustomUser, on_delete=models.CASCADE)
    offer_maker_name = models.CharField(max_length=20)
    isAccepted = models.BooleanField(default=False)
    token_to_recieve = models.CharField(max_length=30)
    number_of_token_to_recieve = models.CharField(max_length=30)
    token_to_swap = models.CharField(max_length=30)
    number_of_token_to_swap = models.CharField(max_length=30)
    offer_accepter_id = models.CharField(max_length=30, blank=True, null=True)
    offer_accepter_name = models.CharField(max_length=30, blank=True, null=True)


    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)