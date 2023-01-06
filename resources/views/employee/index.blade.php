@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-3" style="margin-left: 1000px; margin-top:5px;">
            <a href="{{route('employee.create')}}" class="btn btn-primary mb-3">Add Employee</a>
        </div>
    </div>

    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Salary</th>
                    <th>Date Birth</th>
                    <th>Details</th>
                    <th>Settings</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employee as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->salary}}</td>
                    <td>{{$item->BD}}</td>
                    <td>{{$item->details}}</td>
                    <td>
                        <a href="{{route('employee.edit',$item->id)}}" class=" btn btn-info">Edit</a>
                        <form action="{{route('employee.destroy',$item->id)}}" method='post' class="d-inline">
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