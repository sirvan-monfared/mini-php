<?php

use App\Http\Controllers\Bot\StartController;

$bot_router->exact('/start', StartController::class, 'index');