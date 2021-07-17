@extends('layouts.app')

@section('content')

  <?php
      foreach ($profiles as $item) {
          $profileId = $item->profile_id;
          $name       = $item->name;
          $age        = $item->age;
          $phone      = $item->phone_number;
          $address    = $item->address;}
  ?>



  {{-- <form method="POST" action="{{ route('edit-profile', Auth::user()->user_id) }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-btn fa-sign-in"></i>Update
    </button>
</form> --}}

@if(session('success'))
  <div class="alert alert-success" role="alert">
    <strong>{{session('success')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

<div class="col-md-12">
  <div class="card profilecard">
    <div class="updateForm">
      <form method="post" action="{{route('update.user.profile')}}">
          @csrf

          <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label">Name:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="username" id="profilName" value="{{ $name }}">
            </div>
          </div>

          <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label">Email address:</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" name="email" id="profileEmail" value="{{ $users->email }}">
            </div>
          </div>

          <div class="form-group row">
            <label for="profilePhone" class="col-sm-4 col-form-label">Phone Number:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="phone" id="profilePhone" value="{{ $phone }}">
            </div>
          </div>

          <div class="form-group row">
            <label for="profileAge" class="col-sm-4 col-form-label">Age:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="age" id="profileAge" value="{{ $age }}">
            </div>
          </div>

          <div class="form-group row">
            <label for="profileAddress" class="col-sm-4 col-form-label">Address:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="address" id="profileAddress" value="{{ $address }}">
            </div>
          </div>





            <button type="submit" class="profilesubmit">Submit</button>

      </form>

    </div>
  </div>
</div>





@endsection
