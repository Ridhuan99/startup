@extends('layouts.app')

@section('content')

<div class="">
    <div class="top-left">
      <h5 class="topone">"A better living, through Order"</h5>
      <p>About US</p>
      <!-- <div class="sizeP"><p>Leave us message or any feedback.</p>
        <p>We'll get in touch with you</p>
      </div> -->
    </div>
    <img src={{ asset('img/contact3.jpg') }} style="width:100%" alt="Girl in a jacket">
</div>

<div class="colone">
  <h4>Our VISION of Smart hub technology   </h4><br><br>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>


</div>

<div class="afterColone">
  <img src={{ asset('img/fruit1.jpg') }} style="width:27%" alt="Girl in a jacket">

</div>

<div class="coltwo">
  <img src={{ asset('img/services.jpg') }} style="width:60%" alt="Girl in a jacket">

</div>

<div class="afterColtwo">
  <h1>OUR SERVICES</h1><br><br>
  <hr style="width:50%" align="right" >
  <h5>Smart Hardware</h5>
  <hr style="width:50%" align="right">
  <h5>Construction Services</h5>
  <hr style="width:50%" align="right">
  <h5>A Fruits HUB</h5>
  <hr style="width:50%" align="right">
</div>

<div class="director">
  <h1>Board of Directors</h1><br>
  <div class="boardImage">
      <img src={{ asset('img/wanjay2.png') }} style="width:130%" alt="Girl in a jacket"><br><br>
      <h4>Ridhuan Jaafar</h4>
      <h5>Lead Programmer</h5>
  </div>
  <div class="boardImage2">
      <img src={{ asset('img/hafiz2.png') }} style="width:42%" alt="Girl in a jacket"><br><br>
      <h4>Hafiz Aiman</h4>
      <h5>CEO</h5>
  </div>
  <div class="boardImage2">
      <img src={{ asset('img/hakim.png') }} style="width:100%" alt="Girl in a jacket"><br><br>
      <h4>Hakim Zamri</h4>
      <h5>Programmer II</h5>
  </div>



</div>



<!-- <div class="afterColtwo">
  <hr>
  <p>Smart Hardware</p>
  <hr>
  <p>Construction Services</p>
  <hr>
  <p>A fruits HUB</p>

</div> -->





@endsection
