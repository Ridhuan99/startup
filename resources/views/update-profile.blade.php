@extends('layouts.app')

@section('content')

  <?php
      foreach ($profiles as $item) {
          $profileId = $item->profile_id;
          $name       = $item->name;
          $age        = $item->age;
          $phone_number = $item->phone_number;
          $address    = $item->address;}
  ?>

  <?php
      foreach ($email as $email) {
          $email = $email->email;
         }
  ?>


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
    <div class="card-title">
      <h4>Change Profile</h4>
    </div>
    <div class="updateForm">
      <form class="needs-validation" action="{{route('profiles.update', Auth::user()->user_id)}}" method="post">
          @csrf
          @method('PUT')


          <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label">Name:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="name" id="profilName" value="{{ $name }}">
              @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror

            </div>
          </div>

          <div class="form-group row">
            <label for="profilePhone" class="col-sm-4 col-form-label">Phone Number:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="phone_number" id="profilePhone" value="{{ $phone_number }}">
              @error('phone_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="profileAge" class="col-sm-4 col-form-label">Age:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="age" id="profileAge" value="{{ $age }}">
              @error('age')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="profileAddress" class="col-sm-4 col-form-label">Address:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="address" id="profileAddress" value="{{ $address }}">
              @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>


            <button type="submit" class="profilesubmit">Submit</button>

      </form>

    </div>
  </div>
</div>




<div class="col-md-12">
  <div class="card profilecard">
    <div class="card-title">
      <h4>Change Password</h4>
    </div>
    <div class="updateForm">
      <form class="needs-validation" action="{{route('update.user.password', Auth::user()->user_id)}}" method="post">
          @csrf

          <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

              <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

              <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
              </div>
          </div>

      <button type="submit" class="profilesubmit">Submit</button>

      </form>

    </div>


  </div>

</div>





@endsection
