@extends('layout.app')
@section('content')
    <h1>Edit User</h1>
    <form action="{{route('users.update', $user->id)}}" method="POST">
    @csrf
    @method('PUT')
       <div class="form-group">
         <label for="firstname" class="form-label">First Name</label>
         <input type="text" name="firstname" placeholder="Enter your first name" id="firstname" class="form-control" value="{{$user->firstname}}">
         @error('firstname')
             <span class="text-danger">{{$message}}</span>
         @enderror
       </div>
       <div class="form-group">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" name="lastname" placeholder="Enter your last name" id="lastname" class="form-control" value="{{$user->lastname}}">
        @error('lastname')
            <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" placeholder="Enter your email" id="email" class="form-control" value="{{$user->email}}">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="mobile" class="form-label">Mobile</label>
        <input type="text" name="mobile" placeholder="Enter your mobile no" id="mobile" class="form-control" value="{{$user->mobile}}">
        @error('mobile')
            <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      {{-- <div class="form-group">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password"  id="password" class="form-control">
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
      </div> --}}
      <div class="form-group">
        <label for="roles" class="form-label">Roles</label>
        <select multiple name="roles[]" id="roles">
           
            @foreach ($roles as $role)
                <option value="{{$role->id}}" @if (in_array($role->id, $user->roles->pluck('id')->toArray()))
                  selected
                @endif>{{$role->name}}</option>
            @endforeach
        </select>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <button type="submit" class="btn btn-dark btn-lg">Update User</button>
    </form>
@endsection