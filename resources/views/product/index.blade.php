@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-3" style="margin-left: 1000px; margin-top:5px;">
            <a href="{{route('products.create')}}" class="btn btn-primary mb-3">Add Product</a>
        </div>
    </div>


    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>image</th>
                    <th>id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pro as $pro)
                <tr>

                     <th>  <img src="{{asset('storage/uploads/'. $pro->imag)}}" width="60px" height="60px">
                    <a href="{{asset('storage/uploads/'. $pro->imag)}}">click</a>
                     
                    </th>

                    
                    <th>{{$pro->id}}</th>
                    <th>{{$pro->name}}</th>
                    <th>{{$pro->price}}</th>
                    <th>{{$pro->qty}}</th>

                    <th>
                        <a href="{{route('products.edit',$pro->id)}}" class=" btn btn-info">Edit</a>
                    </th>

                    <th>
                        <form action="{{route('products.destroy',$pro->id)}}" method='post' class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type='submit' class=" btn btn-danger">Delete</button>
                        </form>  
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection