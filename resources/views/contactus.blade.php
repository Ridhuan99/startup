@extends('layouts.app')

@section('content')

<div class="">
    <div class="top-left">
      <p>Get in touch with US</p>
      <div class="sizeP"><p>Leave us message or any feedback.</p>
        <p>We'll get in touch with you</p>
      </div>
    </div>
    <img src={{ asset('img/about6.jpg') }} style="width:100%" alt="Girl in a jacket">
</div>

<div class="divtwo">
<h1>How can we help?</h1><br>
<h5>Below is the Frequently Asked Question (FAQ)</h5><br>
<hr class="style-one">
<p>[Logistic] Why I cant get free Shipping</p>
<hr class="style-one">
<p>[Account] How to reset password</p>
<hr class="style-one">
<p>[Payment] How to proceed payment</p>
<hr class="style-one">
</div>

<div class="formone">
  <h5>Leave your message here</h5>
  <form action="/action_page.php">
    <label for="email">Email address</label>
    <input type="text" id="fname" name="firstname" placeholder="Insert Your email..">

    <label for="Query">Your Query</label>
    <input type="text" id="lname" name="lastname" placeholder="Insert Your query..">

    <label for="country">Region</label>
    <select id="country" name="country">
      <option value="australia">Selangor</option>
      <option value="canada">Johor</option>
      <option value="usa">USA</option>
    </select>

    <input type="submit" value="Submit">
  </form>

</div>

<div class="afterForm">
  <h1>Contact us</h1><br>
  <h5>email: support@OrderLeaf.com.my</h5><br>
  <h5>Call: +60133504982</h5>


</div>


@endsection
