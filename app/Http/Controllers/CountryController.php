<?php

namespace App\Http\Controllers;

//use App\Country;
//use App\User;

class CountryController extends Controller
{
    protected $user;

    public function index()
    {
        //get public api using Guzzle
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://api.printful.com/countries');
        $response = $request->getBody();
        return $response;


    }
}
