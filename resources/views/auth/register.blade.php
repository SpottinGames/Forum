@extends('layouts.masters.main')

@section('page-content')
<div class="container">

        @include('layouts.partials.nav')

<form class="form-signin" action="http://localhost/codehub/public/register" method="POST">

          {!! Form::label('name', 'Full Name') !!}
          {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Full Name', 'required']) !!}
          <br/>
          {!! Form::label('email', 'Email Address') !!}
          {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email Address', 'required']) !!}
          <br/>
          {!! Form::label('password', 'Password') !!}
          {!! Form::password('password', null, ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'required']) !!}
          <br/>
          {!! Form::button('Register', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}

        {!! form::close() !!}
<!--
    <form class="form-signin">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <label for="inputEmail" class="sr-only">Full Name</label>
      <input type="email" id="inputName" class="form-control" placeholder="Full Name" required autofocus>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> 
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
    </form>-->

</div>   

@stop