@extends('master')

@section('title', 'Edit car')

@section('content')
@if(Session::has('car_edited'))
<div class="alert alert-success" role="alert">
  {{Session::get('car_edited')}}  
</div>
@endif
@if(Session::has('car-deleted'))
<div class="alert alert-success" role="alert">
  {{Session::get('car-deleted')}}  
</div>
@endif
{{-- {{route('update-car')}} --}}

            <form method="post" action="{{route('car.update')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$caredit['id']}}" />
            <div class="form-group">
                <label for="fname">First name:</label>
                <input type="text" class="form-control" name="model" id="model" placeholder="{{$caredit['model']}}" value="{{$caredit['model']}}">
            </div>
            <div class="form-group">
                <label for="numplate">Number plate:</label>
                <input type="text" class="form-control" name="number_plate" id="numplate" placeholder="{{$caredit['number_plate']}}" value="{{$caredit['number_plate']}}">
            </div>
            <div class="form-group">
                <label for="colour">Colour:</label>
                <input type="text" class="form-control" name="colour" id="colour" placeholder="{{$caredit['colour']}}" value="{{$caredit['colour']}}">
            </div>
            <div class="form-group">
                <label for="payments">Payments:</label>
                <input type="text" class="form-control" name="payments" id="payments" value="{{$caredit['payments']}}">
            </div>
            <button type="submit" class="btn btn-primary">Edit payments</button>
            <a href="/delete-car/{{$caredit['id']}}" class="btn btn-danger">Delete car</a>
            <span class="float-right">
            <a href="/showAll" class="btn btn-outline-success">Show all</a>
            </span>
            </form>
 



  
@endsection