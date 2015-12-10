<?php

use Illuminate\Routing\Router;
use Orchestra\Support\Facades\Foundation;

/*
|--------------------------------------------------------------------------
| Routing
|--------------------------------------------------------------------------
*/

Foundation::group('bluschool/dashboard', 'dashboard', ['namespace' => 'Bluschool\Dashboard\Http\Controllers'], function (Router $router) {

    $router->post('news/create', 'DashboardController@storeNews');
    $router->get('news/create', 'DashboardController@createNews');
    $router->get('news/update/{id}', 'DashboardController@updateNews');
    $router->get('news/delete/{id}', 'DashboardController@deleteNews');
    $router->get('news', 'DashboardController@news');

    $router->post('create/create', 'DashboardController@storeEvent');
    $router->get('event/create', 'DashboardController@createEvent');
    $router->get('event/update/{id}', 'DashboardController@updateEvent');
    $router->get('event/delete/{id}', 'DashboardController@deleteEvent');
    $router->get('event', 'DashboardController@event');
    $router->get('/', 'HomeController@index');

});