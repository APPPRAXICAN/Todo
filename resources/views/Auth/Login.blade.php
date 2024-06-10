@extends('layouts.master')
{{-- @section('top-bar')
<div class="text-white sm:text-orange-500 dbg-orange-500 p-2 w-screen text-5xl text-center border-b-2 border-black sm:border-none">
    <h1>TodoList</h1>
</div>
@endsection --}}
@section('content')
<div class="h-screen flex justify-center items-center bg-orange-500 sm:bg-white">
    <form action="{{route('user.login')}}" method="POST">
        @csrf
      <div class="bg-orange-500 w-screen h-fit border-none shadow-none text-white rounded sm:bg-white sm:text-black sm:w-96 sm:border-[#242323] sm:border-2 sm:shadow-black sm:shadow-md">
          <div class="p-2 text-white text-4xl text-center bg-orange-500">
              <h1>Login</h1>
          </div>
          @include('components.formGroup',[
            'forWhat'=>'Email',
            'forType'=>'email',
            'forPlace'=>'Email'
          ])
          <div class="text-red-500 ml-4">
            <p>{{session('emailErr')??''}}{{$errors->has('Email')? $errors->first('Email'): ''}}</p>
          </div>
          @include('components.formGroup',[
            'forWhat'=>'Password',
            'forType'=>'password',
            'forPlace'=>'Password'
          ])
          <div class="text-red-500 ml-4">
            <p>{{session('passwordErr')??''}}{{$errors->has('Password')? $errors->first('Password'): ''}}</p>
          </div>
          <div class="p-2 ml-2 hover:text-blue-700 transition duration-500">
            <a href="register">don't have an account? Register Now!</a>
          </div>
         @include('components.submit-btn',['forVal'=>'Sgin in'])
      </div>
    </form>
  </div>
@endsection