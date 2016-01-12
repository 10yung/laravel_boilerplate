<!-- resources/views/auth/login.blade.php -->

@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <form class="form-horizontal col-sm-6 col-sm-offset-3 col-xs-12" method="POST" action="/auth/login">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="inputEmail" class="control-label">Email</label>
            <div>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
            </div>
        </div>

        <div class="form-group">
          <label for="inputPassword" class="control-label">Password</label>
          <div>
              <input class="form-control" type="password" name="password" id="password">
          </div>
        </div>
        <br>
        <div class="checkbox text-center">
          <label>
            <input type="checkbox" name="remember"> Remember Me
          </label>
        </div>
        <br>
        <div class="text-center">
            <button class="btn btn-lg btn-primary btn-raised" type="submit">Login</button>
        </div>
    </form>
</div>
@endsection
