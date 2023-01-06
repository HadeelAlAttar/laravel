@extends('layout')
@section('content')

<div class="container">

<div class="card-body">
    <br><br>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
           @foreach($errors->all() as $error) 
           <li>{{$error}}</li>
           @endforeach
        </ul>
    </div>
    @endif
   <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
    
    @csrf
    
        <div class="form-groub">
            <label class="m-2">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter product name" value="{{old('name')}}">
        </div>
    
        <div class="form-groub">
            <label class="m-2">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Enter the price" value="{{old('price')}}">
        </div>
    
        <div class="form-groub">
            <label class="m-2">quantity</label>
            <input type="number" class="form-control" name="qty" placeholder="Enter the quantity" value="{{old('qty')}}">
        </div>

        <div class="form-groub">
            <label class="m-2">Image</label>
            <input type="file" class="form-control" name="image" >
        </div>
    
    
        <button type="submit" class="btn btn-primary m-2">Save</button>
    
    </form>
                              
  </div>
</div>

@endsection