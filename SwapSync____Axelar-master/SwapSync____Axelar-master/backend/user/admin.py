from django.contrib import admin
from . import models

# Register your models here.
admin.site.register(models.CustomUser)


@admin.register(models.SwapOffers)
class SwapOfferAdmin(admin.ModelAdmin):
    list_display = ['offer_maker_id',
                    'token_to_recieve',
                    'number_of_token_to_recieve',
                    'token_to_swap',
                    'number_of_token_to_swap',
                    'offer_accepter_id',
                    'offer_accepter_name',]
