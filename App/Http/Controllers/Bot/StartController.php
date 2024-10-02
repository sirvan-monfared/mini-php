<?php

namespace App\Http\Controllers\Bot;

use App\Http\Controllers\BotBaseController;

class StartController extends BotBaseController
{
    public function index()
    {
        $this->telegram->sendMessage('salam');
    }
}