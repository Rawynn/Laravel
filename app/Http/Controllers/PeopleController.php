<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModels\PeopleViewModel;
use Illuminate\Support\Facades\Http;

class PeopleController extends Controller
{
    public function index(){
        $allPeople = Http::get('https://swapi.dev/api/people/')
            ->json()['results'];

        //dump($allPeople);

        $viewModel = new PeopleViewModel(
            $allPeople,
        );

        return view('people.index', $viewModel);
    }
}