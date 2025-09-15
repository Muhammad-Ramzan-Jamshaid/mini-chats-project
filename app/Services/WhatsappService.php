<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WhatsAppService
{
    protected $apiUrl;
    protected $accessToken;
    protected $phoneNumberId;

    public function __construct()
    {
        $this->apiUrl = env('WHATSAPP_API_URL');
        $this->accessToken = env('WHATSAPP_ACCESS_TOKEN');
        $this->phoneNumberId = env('WHATSAPP_PHONE_NUMBER_ID');
    }

    public function sendMessage($to, $message)
    {
        $response = Http::withToken($this->accessToken)->post($this->apiUrl, [
            "messaging_product" => "whatsapp",
            "to" => $to,
            "type" => "text",
            "text" => [
                "body" => $message
            ]
        ]);

        return $response->json();
    }
}
