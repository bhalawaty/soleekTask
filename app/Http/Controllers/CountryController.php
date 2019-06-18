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
        $someArray = json_decode($response, true);
        $someArray = $someArray['result'];
        //print_r($someArray);
        //return $someArray['result'][0]['name'];
        usort($someArray, function ($a, $b) {
            $a = strlen($a['name']);
            $b = strlen($b['name']);
            return $b - $a;
        });
        return $someArray;
    }
}
