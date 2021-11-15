<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PeopleController extends Controller
{
    public function index(){
        $allPeople = Http::get('https://swapi.dev/api/people/')
            ->json()['results'];

        //dump($allPeople);

        return view('index', [
            'allPeople' => $allPeople
        ]);
    }
}