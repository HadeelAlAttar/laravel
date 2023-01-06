@extends('layout')
@section('content')

<div class="container">

<div class="card-body">
<form action="{{route('products.update',$pro->id)}}" method="post" enctype="maltipart/form-data">
    
    @csrf
    @method('patch')
    
        <div class="form-groub">
            <label class="m-2">Name</label>
            <input type="text" class="form-control" name="name" value='{{$pro->name}}'>
        </div>
    
        <div class="form-groub">
            <label class="m-2">Price</label>
            <input type="number" class="form-control" name="price" value='{{$pro->price}}'>
        </div>
    
        <div class="form-groub">
            <label class="m-2">quantity</label>
            <input type="number" class="form-control" name="qty" value='{{$pro->qty}}'>
        </div>
       
        <div class="form-groub">
            <label class="m-2">Image</label>
            <input type="file" class="form-control" name="image" >
            <img src="{{asset('storage/uploads/'. $pro->imag)}}" width="60px" height="60px"></div>
    
        <button type="submit" class="btn btn-primary m-2">Save</button>
    
    </form>
                              
  </div>
</div>

@endsection