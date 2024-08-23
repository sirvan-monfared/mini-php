<?php

use App\Http\Controllers\HomeController;

$router->get('/', [HomeController::class, 'index'], 'home');
