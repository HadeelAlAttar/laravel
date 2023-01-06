@extends('layout')
@section('content')

<div class="container">

<form action="{{route('employee.update', $emp->id)}}" method="post">
    
@csrf
@method('patch')
    <div class="form-groub">
        <label class="m-2">Name</label>
        <input type="text" class="form-control" name="name" value="{{$emp->name}}">
    </div>

    <div class="form-groub">
        <label class="m-2">Salary</label>
        <input type="number" class="form-control" name="salary" value="{{$emp->salary}}">
    </div>

    <div class="form-groub">
        <label class="m-2">Birth Date</label>
        <input type="date" class="form-control" name="BD" value="{{$emp->BD}}">
    </div>

    <div class="form-groub">
        <label class="m-2">Details</label>
        <input type="text" class="form-control" name="details" value="{{$emp->details}}">
    </div>

    <button type="submit" class="btn btn-primary m-2">Save</button>

</form>
</div>

@endsection