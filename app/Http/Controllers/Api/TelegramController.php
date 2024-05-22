<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function sendMessage(Request $request) {
        $text = $request->text ?? '';
        $telegram = Telegram::bot('notifications_bot');
        $telegram->sendMessage([
            'chat_id' => config('telegram.bots.notifications_bot.chat_id'),
            'text' => $text,
        ]);
    }
}
