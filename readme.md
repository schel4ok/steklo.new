# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)
Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Делаем простой поиск при помощи Laravel Scout и Vue.js
[Laravel Scout и Vue.js search RUS](https://laravel-news.ru/blog/tutorials/build-search-functionality-with-laravel-scout-and-vue-js)  
[Laravel Scout and Vue.js search ENG](https://scotch.io/tutorials/build-search-functionality-with-laravel-scout-and-vue-js)  
После клонирования репозитория надо обязательно сделать следующие операции:
```
composer install
npm install
php artisan scout:import "App\Furnitura"
```
1. Установка всех зависимостей проекта (всех доп пакетов)
2. Установка npm для работы gulp.
3. Экспорт в Algolia всех поисковых данных (это скорее всего необязательный шаг, т.к. данные на сервер Algolia уже загружены).


## Авторизация и Админка 

Встроенная авторизация работает.
Сделал AdminMiddleware и поместил его в Kernel.php, чтобы запрещать доступ в админку пользователям, у которых admin = 0. Но пока не работает.

app\User.php
```
    public function isAdmin() {
        if ($this->admin == 1) 
            return true;
    }
```

app\Http\Kernel.php
```
    protected $routeMiddleware = [
    	...
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
    ];
```

Ругается Call to undefined method Illuminate\Support\Facades\Auth::check()