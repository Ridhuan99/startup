@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<div class="container">
  <h2>Users</h2>
  <!-- <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p> -->
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Is Active</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $members)
        <tr>
          <td>{{ $members->user_id }}</td>
          <td>{{ $members->name }}</td>
          <td>{{ $members->email }}</td>
          <td>{{ $members->role }}</td>
          <td>
            <form class="needs-validation" action="{{route('manageuser2',['user_id'=>$members->user_id])}}" method="post">
                @csrf
                <select class="form-control" name="is_active">
                    <option value=1 {{ $members->is_active==1? 'selected' : '' }}>True</option>
                    <option value=2 {{ $members->is_active==2? 'selected' : '' }}>False</option>
                </select>
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
            </form>
          </td>
          <td>
            <a class="btn btn-sm  btn-success btn-block" href="{{url('update-profile',['user_id'=>$members->user_id])}}">Go</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
