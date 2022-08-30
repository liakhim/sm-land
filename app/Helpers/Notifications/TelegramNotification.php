<?php


namespace App\Helpers\Notifications;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class TelegramNotification
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function send()
    {
        $chat_id = '-1001756938216';
        $bot_token = '5631003469:AAFLxmFthDybN8xdlMUstziz5MNL5f5aDic';
        $url = 'https://api.telegram.org/bot'.$bot_token.'/sendMessage';
        $params = [
            "chat_id" => $chat_id,
            "text" => $this->message,
        ];
        $context = stream_context_create([
            "http" => [
                "method" => "POST",
                "header" => [
                    "Content-Type: application/x-www-form-urlencoded\r\n"
                ],
                "content" => http_build_query($params)
            ]
        ]);
        file_get_contents($url, false, $context);
    }
}
