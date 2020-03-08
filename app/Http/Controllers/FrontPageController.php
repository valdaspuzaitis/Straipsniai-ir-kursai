<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FrontPageController extends Controller
{   
    public function index()
    {       
        $currency = Cache::remember('currency', 600, function (){
            return json_decode(file_get_contents('https://api.exchangeratesapi.io/latest?symbols=USD,GBP,RUB'), true);
        });       
        
        $articles = \DB::table('articles')->orderBy('created_at', 'desc')->get();

        return view('index', ['currency' => $currency, 'articles' => $articles]);
    }
}
