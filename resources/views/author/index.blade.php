@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-3" style="margin-left: 1000px; margin-top:5px;">
            <a href="{{route('authors.create')}}" class="btn btn-primary mb-3">Add Author</a>
        </div>
    </div>


    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
            
                    <th>Settings</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pro as $pro)
                <tr>
                    <td>{{$pro->name}}</td>
                
                    <td>
                        <a href="{{route('authors.edit',$pro->id)}}" class=" btn btn-info">Edit</a>
                        <form action="{{route('authors.destroy',$pro->id)}}" method='post' class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type='submit' class=" btn btn-danger">Delete</button>
                        </form>  
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection