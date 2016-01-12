<!-- resources/views/auth/register.blade.php -->
@extends('layouts.master')

@section('content')
  <div class="container-fluid">
    <form class="form-horizontal col-sm-6 col-sm-offset-3 col-xs-12" method="POST" action="/auth/register">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="inputName" class="control-label">Name</label>
            <div>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="control-label">Email</label>
            <div>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label">Password</label>
            <div>
                <input class="form-control" type="password" name="password">
            </div>
        </div>

        <div class="form-group">
            <label for="inputConfirmPassword" class="control-label">Confirm Password</label>
            <div>
                <input class="form-control" type="password" name="password_confirmation">
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-raised btn-primary btn-lg" type="submit">Register</button>
        </div>
    </form>
  </div>
@endsection
