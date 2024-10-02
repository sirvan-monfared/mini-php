<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BotInboundController;
use App\Http\Controllers\HomeController;

$router->get('/', [HomeController::class, 'index'], 'home');

$router->get('/admin', [AdminController::class, 'index'], 'admin.index');

$router->post('/inbound', [BotInboundController::class, 'inbound'], 'bot.inbound');
