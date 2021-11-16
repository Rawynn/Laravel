@extends('layouts.main')

@section('content')
<div class="container mt-5 mb-5">
        <h1 class="text-uppercase text-center mt-5 mb-5 fw-bold sw-font">Star Wars characters</h1>
        <div class="people-wrapper">
            <div class="flex flex-wrap justify-content-center">
                @foreach ($allPeople as $person)
                    <x-person-card :person="$person" />
                @endforeach
            </div>
        </div>
    </div>
@endsection