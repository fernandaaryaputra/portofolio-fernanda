<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class NodeServerController extends Controller
{
    public function index()
    {
        // URL dari server Node.js
        $nodeServerUrl = 'http://localhost:3000'; // Ganti dengan URL server Node.js Anda

        // Menggunakan Guzzle untuk mengirim permintaan ke server Node.js
        $client = new Client();
        $response = $client->get($nodeServerUrl);

        // Mengembalikan response dari server Node.js
        return $response->getBody()->getContents();
    }
}
