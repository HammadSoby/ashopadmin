# Ashop Admin

## Quick Installation
Begin by installing the package through Composer.

```
composer require ashop/admin
```

Once this operation is complete, simply add the service provider class to your project's `config/app.php` file:

## Service Provider

```
Ashop\Admin\AshopAdminServiceProvider::class,
```

After that run the following commands

```
Composer dump-autoload
php artisan vendor:publish --force
```