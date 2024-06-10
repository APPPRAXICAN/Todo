@extends('layouts.master')

@section('content')
<div class="h-screen flex justify-center items-center bg-orange-500 sm:bg-white ">
    <form action="{{route('user.register')}}" method='post'>
        @csrf
        <div class="h-fit rounded w-screen sm:w-96 shadow-none text-white sm:text-black sm:shadow-md sm:shadow-black">
            <div class="text-white p-2 text-4xl bg-orange-500 text-center">
                <h1>Sign up</h1>
            </div>
            @include('components.formGroup',['forWhat'=>'Name','forType'=>'text','forPlace'=>'Name'])
            <div class="ml-4">
                <p class="text-red-500">{{$errors->has('Name') ? $errors->first('Name'):''}}</p>
            </div>
            @include('components.formGroup',['forWhat'=>'Email','forType'=>'email','forPlace'=>'Email'])
            <div class="ml-4">
                <p class="text-red-500">{{$errors->has('Email') ? $errors->first('Email'):''}}</p>
            </div>
            @include('components.formGroup',['forWhat'=>'Password','forType'=>'password','forPlace'=>''])
            <div class="ml-4">
                <p class="text-red-500">{{$errors->has('Password') ? $errors->first('Password'):''}}</p>
            </div>
            @include('components.formGroup',['forWhat'=>'Password_confirmation','forType'=>'password','forPlace'=>''])
            <div class="ml-4">
                <p class="text-red-500">{{$errors->has('confirm_password')?$errors->first('confirm_password'):""}}</p>
            </div>
            <div class="p-2 ml-2 hover:text-blue-700 transition duration-500">
                <a href="/">Already have an account? login now!</a>
            </div>
            @include('components.submit-btn',['forVal'=>'Confirm'])
        </div>
    </form>
</div>
@endsection


