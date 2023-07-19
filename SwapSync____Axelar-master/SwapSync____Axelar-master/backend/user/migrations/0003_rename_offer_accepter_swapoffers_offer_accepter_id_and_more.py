# Generated by Django 4.2.2 on 2023-06-24 07:51

from django.db import migrations, models
import django.utils.timezone


class Migration(migrations.Migration):

    dependencies = [
        ('user', '0002_swapoffers'),
    ]

    operations = [
        migrations.RenameField(
            model_name='swapoffers',
            old_name='offer_accepter',
            new_name='offer_accepter_id',
        ),
        migrations.RenameField(
            model_name='swapoffers',
            old_name='offer_maker',
            new_name='offer_maker_id',
        ),
        migrations.AddField(
            model_name='swapoffers',
            name='offer_accepter_name',
            field=models.CharField(blank=True, max_length=30, null=True),
        ),
        migrations.AddField(
            model_name='swapoffers',
            name='offer_maker_name',
            field=models.CharField(default=django.utils.timezone.now, max_length=20),
            preserve_default=False,
        ),
    ]