@extends('layout')
@section('content')

<div class="container">

<div class="card-body">
<form action="{{route('books.update',$pro->id)}}" method="post">
    
    @csrf
    @method('patch')
    
        <div class="form-groub">
            <label class="m-2">Name</label>
            <input type="text" class="form-control" name="name" value='{{$pro->name}}'>
        </div>
    
        <div class="form-groub">
            <label class="m-2">Authors</label>
            <select name='author_id'>
                @foreach($authors as $a)
                <option value="{{$a->id}}" {{ $pro->author_id == $a->id ? 'selected' : '' }}>{{$a->name}}</option>
                @endforeach
           </select>
        </div>
    
    
        <button type="submit" class="btn btn-primary m-2">Save</button>
    
    </form>
                              
  </div>
</div>

@endsection