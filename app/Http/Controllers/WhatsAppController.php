<?php

namespace App\Http\Controllers;

use App\Services\WhatsAppService;
use Illuminate\Http\Request;

class WhatsAppController extends Controller
{
    protected $whatsapp;

    public function __construct(WhatsAppService $whatsapp)
    {
        $this->whatsapp = $whatsapp;
    }

    public function send(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'message' => 'required'
        ]);

        $response = $this->whatsapp->sendMessage($request->phone, $request->message);

        return response()->json($response);
    }
}
