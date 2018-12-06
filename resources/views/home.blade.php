@extends('layouts.app')

@section('content')
  <div class="mx-auto bg-warning" style="width:100%">
    <h1 class="bg-primary text-white">Home</h1>
  </div>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
@endsection
@section('sidebar')
  <div class="buttonf">
   <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
     Fill Up Forms
   </button>
   <div class="dropdown-menu">
     <a class="dropdown-item" href="#">Business Registration Form</a>
     <a class="dropdown-item" href="#">Building Permit Form</a>
     {{-- <a class="dropdown-item" href="#">Link 3</a> --}}
   </div>
  </div>
  @parent
  <p>This is appended to the sidebar</p>
@endsection
