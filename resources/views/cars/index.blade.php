@extends('layout.app')
@section('content')
    <h1>Cars</h1>
    
    <a href="{{ route('cars.create') }}" class="btn btn-dark mb-2">Add User</a>
    <table class="table  table-responsive-lg table-hover">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Car Name</th>
                <th scope="col">Model</th>
                <th scope="col">Car No</th>
                <th scope="col">Fuel Type</th>
                <th scope="col">Rent</th>
                <th scope="col">Action</th>            
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <th scope="row">{{ $car->id }}</th>
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->carnumber }}</td>
                    <td>{{ $car->fueltype}}</td>
                    <td>{{ $car->rent}}</td>                   
                    <td>
                        <a  href="{{route('cars.show', $car->id)}}" class="btn btn-sm btn-dark" >Show</a>
                        <a  href="{{route('cars.edit', $car->id)}}" class="btn btn-sm btn-dark" >Edit</a>
                         
                        <form action="{{route('cars.destroy', $car->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection