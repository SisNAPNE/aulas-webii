<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HTTPClientController extends Controller
{
    public function getApiData() {

        $response = Http::get('https://randomuser.me/api/');

        $data = json_decode($response->body());
        return $data;
    }
}
