@extends('layout')
@section('content')

<div class="container">

<div class="card-body">
<form action="{{route('authors.update',$pro->id)}}" method="post">
    
    @csrf
    @method('patch')
    
        <div class="form-groub">
            <label class="m-2">Name</label>
            <input type="text" class="form-control" name="name" value='{{$pro->name}}'>
        </div>
    
       
    
    
        <button type="submit" class="btn btn-primary m-2">Save</button>
    
    </form>
                              
  </div>
</div>

@endsection