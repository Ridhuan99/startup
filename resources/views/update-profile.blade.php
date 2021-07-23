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





@endsection
