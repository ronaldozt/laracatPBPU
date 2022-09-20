<?php

namespace Andrisan\Laracat;

use Illuminate\Support\Facades\Http;

class Laracat
{
    public function getCat()
    {
        $response = Http::get('https://api.thecatapi.com/v1/images/search');
        $imgUrl = $response->json()[0]['url'];
        // get html tag for image
        return "<img src='$imgUrl' alt='cat' />";
    }
}
