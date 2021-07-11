@extends('layouts.app')

@section('content')

<section>
  <div class="row">
    <div class="col-md-12 parentDivOne">
      <img src={{ asset('img/about6.jpg') }} style="width:100%" alt="Girl in a jacket">
      <div class="contactDivone">
        <p class="aboutustag">Get in touch with US </p>
        <h3>Leave us message or any feedback We'll get in touch with you</h3>
      </div>
    </div>
  </div>
</section>

<section >
  <div class="row">
    <div class="col-md-12">
      <div class="contactdivtwo">
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
    </div>
  </div>

</section>


<section style="background-color:#A4D6D1">
  <div class="row">
    <div class="col-md-6">

      <div class="card card2">
        <div class="contactForm">
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
      </div>
    </div>

    <div class="col-md-6">
      <div class="contactDivThree">
        <h1>Contact us</h1><br>
        <h5>email: support@OrderLeaf.com.my</h5><br>
        <h5>Call: +60133504982</h5>
      </div>
    </div>
  </div>
</section>








@endsection
