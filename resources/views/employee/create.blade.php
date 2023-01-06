@extends('layout')
@section('content')

<div class="container">
<div class="card-body">
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
           @foreach($errors->all() as $error) 
           <li>{{$error}}</li>
           @endforeach
        </ul>
    </div>
    @endif
<form action="{{route('employee.store')}}" method="post">
    
@csrf

    <div class="form-groub">
        <label class="m-2">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{old('name')}}">
    </div>

    <div class="form-groub">
        <label class="m-2">Salary</label>
        <input type="number" class="form-control" name="salary" placeholder="Salary expected by USD $" value="{{old('salary')}}">
    </div>

    <div class="form-groub">
        <label class="m-2">Birth Date</label>
        <input type="date" class="form-control" name="BD" placeholder="Your Birthday" value="{{old('BD')}}">
    </div>

    <div class="form-groub">
        <label class="m-2">Details</label>
        <input type="text" class="form-control" name="details" placeholder="Tell us something about you" value="{{old('details')}}">
    </div>

    <button type="submit" class="btn btn-primary m-2">Save</button>

</form>
</div>
</div>
@endsection