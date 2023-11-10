@extends('layout.app')
@section('content')
    <h1></h1>
     
    <form action="{{route('users.search')}}" method="POST" mt-5 class="d-inline-flex">
        @csrf
        <input type="text" class="form-control" name="id" placeholder="Enter user id">
        <button type="submit" class="btn btn-dark btn-lg">Search</button>
    </form>

    <hr>
    <h1 >User Details</h1>
    <form action="{{route('users.update', $user->id)}}" @disabled(true) mt-5>
           <div class="form-group">
             <label for="firstname" class="form-label">First Name</label>
             <input type="text" name="firstname" placeholder="Enter your first name" id="firstname" class="form-control" value="{{$user->firstname}}" disabled>
           
           </div>
           <div class="form-group">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" name="lastname" placeholder="Enter your last name" id="lastname" class="form-control" value="{{$user->lastname}}" disabled>
           
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" placeholder="Enter your email" id="email" class="form-control" value="{{$user->email}}" disabled>
           
          </div>
          <div class="form-group">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" name="mobile" placeholder="Enter your mobile no" id="mobile" class="form-control" value="{{$user->mobile}}" disabled>
          
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
            <select multiple name="roles[]" id="roles" disabled>
               
                @foreach ($roles as $role)
                    <option value="{{$role->id}}" @if (in_array($role->id, $user->roles->pluck('id')->toArray()))
                      selected
                    @endif>{{$role->name}}</option>
                @endforeach
            </select>
           
          </div>
         
        </form>

    

@endsection