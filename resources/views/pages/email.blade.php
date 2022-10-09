@extends('layouts.main')

@section('content')
<div class="container" style="padding: 20px">

    <ul class="nav nav-fill" style="padding: 10px;">
        <a class="nav-item" href="{{ route('email') }}">Email Address</a>&emsp;
        <a class="nav-item" href="{{ route('password') }}">Password</a>&emsp;
        <a class="nav-item" href="{{ route('profile_setting') }}">Profile Settings</a>&emsp;
		
        <a class="nav-item" href="{{ route("female_members") }}">Find Matches</a>&emsp;
        
        
        
    </ul>
    <hr class="mb-5">
<H2>Email Address</H2>
<p>Please update your email if it has changed so you do not miss any communications or match alerts.</p>
<h4 style="color:#428bca;margin-top:5px;">Change Email Address</h4>
<form class="form-inline">
    <div class="form-group mb-2">
      <label for="staticEmail2" class="sr-only">Email</label>
      <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary mb-2">Save</button>
  </form>
</div>
@endsection

