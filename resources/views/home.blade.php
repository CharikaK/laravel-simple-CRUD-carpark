@extends('master')

@section('title', 'Homepage')

@section('content')

<u>All the cars in the park.</u>

@if(Session::has('car-deleted'))
<div class="alert alert-success" role="alert">
  {{Session::get('car-deleted')}}  
</div>
@endif

<div class="col-md-12">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Model</th>
      <th scope="col">Number Plate</th>
      <th scope="col">Colour</th>
      <th scope="col">Payment</th>
      <th ></th>
    </tr>
  </thead>
  <tbody>
  @foreach($cars as $car)
    <tr>
      <th scope="row">{{ $car->id}}</th>
      <td>{{ $car->model}}</td>
      <td>{{ $car->number_plate}}</td>
      <td>{{$car->colour}}</td>
      <td>£{{$car->payments}} </td>
      <td><a href="/edit-car/{{$car->id}}" class="btn btn-primary btn-sm">Edit</a> <a href="/delete-car/{{$car->id}}" class="btn btn-danger">Delete car</a> </td>
    </tr>
    @endforeach
</tbody>
</table>

</div>

<hr />

<div class="col-md-6">
<u>Park a new car.</u>
<br>
@if(Session::has('car_added'))
<div class="alert alert-success" role="alert">
  {{Session::get('car_added')}}  
</div>
@endif
<!-- if there is no name for the route in the web.php form action should be this 
    <form action="/add" method="post"> -->
    <form method="post" action="{{route('add_acar')}}" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="fname">First name:</label>
            <input type="text" class="form-control" name="model" id="model" placeholder="Model of your car">
        </div>
        <div class="form-group">
            <label for="numplate">Number plate:</label>
            <input type="text" class="form-control" name="number_plate" id="numplate" placeholder="Number plate">
        </div>
        <div class="form-group">
            <label for="colour">Colour:</label>
            <input type="text" class="form-control" name="colour" id="colour" placeholder="colour">
        </div>
        
        <button type="submit" class="btn btn-primary">Insert</button>
    </form>
</div>    
    




<!-- working form -->   
  


@endsection