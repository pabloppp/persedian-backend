## PERSEDIAN - your smart inventory

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)

## Requirements

It needs: [composer](https://getcomposer.org/) | 
[bower](http://bower.io/)

## Instalation
Once you have cloned or forked this repo, just run:

```

composer update
bower update

```

Make a copy of the `.env.local.php.sample` file and rename it to `.env.local.php`

Create your database and add its configuration data to your `.env.local.php` file. Now just run:

```

php artisan db:fireup


```

In your `boostrap` folder copy the `environment.php.sample` file and rename it to `environment.php`. In this file you will have to change  the attribute `local` with the  name of the environment you are using.


### License

PERSEDIAN is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
