<?php

namespace App\Http\Controllers;
use App\Country;
use App\User;
use Illuminate\Http\Request;
use JWTAuth;
class CountryController extends Controller
{
    protected $user;

    public function __construct()
    {
//        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function index()
    {
        //using public api
        $url="https://api.printful.com/countries";
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $output=curl_exec($ch);
        return $output;

        //fetch data from database
//        return $this->user
//            ->countries()
//            ->get(['name'])
//            ->toArray();

    }
}
