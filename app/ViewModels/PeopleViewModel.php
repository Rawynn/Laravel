<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class PeopleViewModel extends ViewModel
{
    public $allPeople;

    public function __construct($allPeople)
    {
        $this->allPeople = $allPeople;
    }

    public function allPeople()
    {
        return $this->allPeople;
    }
 
}