# Generated by Django 4.1.2 on 2022-10-09 10:23

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('backend', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='Category',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('category_name', models.CharField(max_length=255, verbose_name='category name')),
            ],
        ),
        migrations.AlterModelOptions(
            name='user',
            options={'verbose_name': 'user', 'verbose_name_plural': 'users'},
        ),
        migrations.CreateModel(
            name='Product',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('product_name', models.CharField(max_length=255, verbose_name='product name')),
                ('product_image', models.ImageField(default='default.jpg', upload_to='product_imgs')),
                ('product_desc', models.TextField(verbose_name='product description')),
                ('product_price', models.DecimalField(decimal_places=2, max_digits=8, verbose_name='product price')),
                ('product_brand', models.CharField(max_length=255, verbose_name='product brand')),
                ('prodcut_category', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='backend.category')),
            ],
        ),
    ]