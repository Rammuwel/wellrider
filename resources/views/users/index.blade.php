@extends('layout.app')
@section('content')
    <h1>All User</h1>
    <a href="#" class="btn btn-dark mb-2">Add User</a>
    <table class="table  table-responsive-lg table-hover">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Action</th>            
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>
                        <a  href="#" class="btn btn-sm btn-dark" >Show</a>
                        <a  href="#" class="btn btn-sm btn-dark" >Edit</a>
                         
                        <form action="#" method="POST" class="d-inline">
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
