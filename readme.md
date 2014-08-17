## PERSEDIAN - your smart inventory

![Build Status](http://img.shields.io/badge/build-failing-red.svg)-
![Version](http://img.shields.io/badge/version-0.1a-red.svg)-
![Dependencies](http://img.shields.io/badge/dependencies-up--to--date-yellow.svg)-
![License](http://img.shields.io/badge/license-MIT-blue.svg)




## Requirements

It needs: [composer](https://getcomposer.org/) | 
[bower](http://bower.io/)

## Instalation
Once you have cloned or forked this repo, just run:

```
composer install
bower update
```

Make a copy of the `.env.local.php.sample` file and rename it to `.env.local.php`

Create your database and add its configuration data to your `.env.local.php` file. Now just run:

```
php artisan migrate
php artisan db:seed
```

In your `boostrap` folder copy the `environment.php.sample` file and rename it to `environment.php`. In this file you will have to change  the attribute `local` with the  name of the environment you are using.

#####OPTIONAL:
In order to republish the debugbar assets (stored in `public/packages`) and generate the ide-helper file called `_ide_helper.php` just run the command:
``` 

composer update

```


### License

PERSEDIAN is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
