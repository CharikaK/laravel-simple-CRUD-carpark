@extends('master')

@section('title', 'Car details')

@section('content')

        {{-- one car by id
            Here, $cardetail is an array Not an object --}}

        @isset($cardetail)        
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Model: {{ $cardetail['model'] }}</li>
                    <li class="list-group-item">Number plate: {{ $cardetail['number_plate']}}</li>
                    <li class="list-group-item">Colour: {{ $cardetail['colour'] }}</li>
                    <li class="list-group-item">Amount: £</li>
                    <li class="list-group-item"><a href="/edit-car/{{$cardetail['id']}}" class="btn btn-primary btn-sm">Update Payments</a></li>
                </ul>
            </div>         
        @endisset

        {{-- one car by colour--}}
        @isset($carByColour)
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Model: {{ $carByColour->model }}</li>
                <li class="list-group-item">Number plate: {{ $carByColour->number_plate }}</li>
                <li class="list-group-item">Colour: {{ $carByColour->colour }}</li>
                <li class="list-group-item">Amount: £<a href="/edit-car/{{$car->id}}" class="btn btn-info">Update Payments</a></li>
            </ul>
        </div>
        
        @endisset


   
@endsection
