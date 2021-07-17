@extends('layouts.app')

@section('content')


<div class="">

  <?php
      foreach ($profiles as $item) {
          $profileId = $item->profile_id;
          $name       = $item->name;
          $age        = $item->age;
          $phone      = $item->phone_number;
          $address    = $item->address;}
  ?>


</div>
<div class="profileBackground">
  <div class="profileHeader">
    <h1>Profile </h1>
    <h1 "hiUser">Hi <?php echo $name; ?> !</h1><br>
  </div>
</div>


<div class="row">
  <div class="col-md-12">
    <div class="userProfile">
      <table class="userdata">
    					<tr>
    						<td>
    							<label for="text">Name </label>
    						</td>
    						<td class="ud">
    							<label for="text">: <?php echo $name; ?></label>
    						</td>
    					</tr>
    					<tr>
    						<td>
    							<label for="text">Phone Number</label>
    						</td>
    						<td>
    							<label for="text">: <?php echo $phone; ?></label>
    						</td>
    					</tr>
              <tr>
    						<td>
    							<label for="text">Email</label>
    						</td>
    						<td>
    							<label for="text">: <?php echo $users->email; ?></label>
    						</td>
    					</tr>
              <tr>
    						<td>
    							<label for="text">Role</label>
    						</td>
    						<td>
    							<label for="text">: <?php echo $users->role; ?></label>
    						</td>
    					</tr>
    					<tr>
    						<td>
    							<label for="text">Age</label>
    						</td>
    						<td>
    							<label for="text">:  <?php echo $age; ?></label>
    						</td>
    					</tr>
    					<tr>
    						<td>
    							<label for="email">Address</label>
    						</td>
    						<td>
    							<label for="text">: <?php echo $address; ?></label>
    						</td>
    					</tr>
              <tr>
                <td colspan=2>
                  <div class="editProfileButton">
                    <a class="btn btn-primary" href="{{ route('update-profile') }}">Edit Profile</a>

                  </div>
                </td>
              </tr>
    				</table>
        </div>
      </div>
</div>



@endsection
