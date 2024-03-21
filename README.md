## jwt
A custom jwt token generator

## Installation via Composer:

```bash
composer require konstantinkotov/jwt
```

## Settings:

### Step 1:
You must start a command below:
```bash
php artisan jwt:install
php artisan migrate
```
This will copy the necessary migration file to your database/migrations folder.

### Step 2:

Next you must add *JWTSubjectTrait* to your User model from *konstantinkotov/jwt/src/Traits* folder:

```bash
use JWTSubjectTrait.php
```

## How to use:

```php
$token = $user->generate();
```

This will create a token, save it to the api_token column in users table.