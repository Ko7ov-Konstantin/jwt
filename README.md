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

Next you have to add *JWTSubjectTrait* to your User model:

```php
use Konstantinkotov\jwt\Traits\JWTModelTrait;
```

If you need quickly access to token, you can add JWTControllerTrait to your controller files. Example:
```php
use Konstantinkotov\jwt\Traits\JWTControllerTrait;
```

You'll have the access to the token inside your controller. You can obtain the token, using:
```php
$token = $this->token();
```

The token will be searched in Authorization inside the headers params.

### Step 3:

If you need ready resource to your checks. You can use:

```php
return (new \Konstantinkotov\jwt\Resources\AccessAllowedResource());

or

return (new \Konstantinkotov\jwt\Resources\AccessDeniedResource());
```

AccessAllowedResource will return, with status code 200:
```json
{
  "token": "<your_api_token>",
  "request_type": "bearer"
}
```
AccessDeniedResource will return, with status code 401:
```json
{
  "error": "Unauthorized"
}
```

## How to use:

```php
$token = $user->generate();
```

This will create a token, save it to the api_token column in users table.

Or you can use it using *JWT* class. For example:
```php
\Konstantinkotov\jwt\JWT::token()->generate(<token_size>);
```

By default, the size is *100*.

### Result example:
```text
2sxxQfkefRw4XuUX3d2UoPfIEnJIzPZZy.wBL8KdljmfPMPHp5jUk59sQ5xs3cMtPK5.lhmLchEZCpCUkckgukz0AEhkQzJunrT5o.v
```