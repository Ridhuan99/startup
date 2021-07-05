@extends('layouts.app')

@section('content')
<h1>Profile Page</h1>

@foreach ($profiles as $profile)

  <h2>{{$profile->name}}</h2>

@endforeach

@endsection
