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

        //get public api using curl
//        $url = "https://api.printful.com/countries";
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, $url);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        $output = curl_exec($ch);
//        return $output;


    }
}
