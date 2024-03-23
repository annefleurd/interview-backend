<?php
namespace App\Http\Controllers\v1;

use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;

class RandomInfoController extends Controller
{
    public function randomJoke(): JsonResponse
    {
        $client = new Client();
        $response = $client->request('GET', 'https://official-joke-api.appspot.com/random_joke');
        $joke = json_decode($response->getBody()->getContents(), true);
        return response()->json($joke);
    }
}
