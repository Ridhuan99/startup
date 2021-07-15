@extends('layouts.app')

@section('content')



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

          <div class="form-group profileform">
            <label for="email">Email address: </label>
            <input type="email" name="email"  value="{{ $users->email }}" />
          </div>
            <button type="submit">Submit</button>

      </form>

    </div>
  </div>
</div>





@endsection
