# Lararunner 
A way to run fast in Laravel Starter.


### Start with 3 steps 

Assuming you have *php* and *composer* installed.

Install the packages:

1. `composer install`
2. `php artisan migrate`
3. `php artisan serv`

On Production:
```shell
$ composer install --optimize-autoloader --no-dev
```

## Register
## User
## Login
route: ```/api/auth/token```<br>
method: ```POST``` <br>
payload:
```
email: 'example@email.com',
password: 'secret',
device_name: 'any'
```

response:
```json
{
    "token": "8|OH1E7M72It5V3oMs8EGp2VrJVGyZg5XpXL3vaYr0"
}
```



## About Lararunner

Lararunner Base on Laravel framework and advance packages


## License

Is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
