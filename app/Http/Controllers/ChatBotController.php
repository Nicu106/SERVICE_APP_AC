<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatBotController extends Controller
{
    public function processMessage(Request $request)
    {
        // Preia mesajul trimis de utilizator
        $userMessage = $request->input('message');

        if (!$userMessage) {
            return response()->json(['error' => 'Mesajul nu poate fi gol!'], 400);
        }
        $context = "Te numesti service, si daca va fi necesar  trebuie sa elaborezi o lista cu pasi pentru a rezliza sarcina,fiecare pas trebuie sa fie din linie noua:";
        $context_v2 = "Esti un avocant si raspundemi despre ce este ilegal..";
        $context_v3 = "Acum esti cea mai buna prietena a mea si te adresezi cu ,Fǎ,";

        // Construiește URL-ul pentru API
        $baseUrl = "https://hercai.onrender.com/turbo/hercai";
        $fullUrl = "{$baseUrl}/?question=" . urlencode($context_v3.$userMessage);

        try {
            // Trimite cererea GET la API
            $response = Http::get($fullUrl);

            if ($response->successful()) {
                // Extrage răspunsul din API
                $reply = $response->json('reply');
                return response()->json(['reply' => $reply]);
            } else {
                return response()->json(['error' => 'Eroare API: ' . $response->status()], $response->status());
            }
        } catch (\Exception $e) {
            // Returnează eroarea dacă cererea eșuează
            return response()->json(['error' => 'Eroare de rețea: ' . $e->getMessage()], 500);
        }
    }
}



