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
<form action="{{route('authors.store')}}" method="post">
    
    @csrf
    
        <div class="form-groub">
            <label class="m-2">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter product name" value="{{old('name')}}">
        </div>
    
    
        <button type="submit" class="btn btn-primary m-2">Save</button>
    
    </form>
                              
  </div>
</div>

@endsection