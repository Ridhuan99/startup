@extends('layouts.app')

@section('content')

<section>
  <div class="row">
    <div class="col-md-12">
      <div class="taglineDiv">
        <h5 >"A better living, through Order"</h5>
        <h1 class="aboutustag">About US</h1>
      </div>
      <img src={{ asset('img/contact3.jpg') }} style="width:100%" alt="Girl in a jacket">
    </div>
  </div>
</section>

<section>
  <div class="row p-3">
    <div class="col-md-6 ">
      <div class="aboutdivone">
        <h2>Our VISION of Smart hub technology</h2><br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishingz software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="aboutdivonecoltwo">
        <img src={{ asset('img/fruit1.jpg') }} style="width:70%" alt="Girl in a jacket">
      </div>
    </div>
  </div>
</section>



<section style="background-color:#A4D6D1" >
  <div class="row">
    <div class="col-md-6">
      <div class="aboutdivtwo">
          <img src={{ asset('img/services.jpg') }} style="width:70%" alt="Girl in a jacket">
      </div>
    </div>

    <div class="col-md-6">
      <div class="aboutdivtwocoltwo">
        <h1>OUR SERVICES</h1><br>
        <hr style="width:50%" align="center" >
        <img src={{ asset('img/hardware.png') }} style="width:70%" alt="hardware">
        <h5>Smart Hardware</h5>
        <hr style="width:50%" align="center">
        <img src={{ asset('img/construction.png') }} style="width:70%" alt="construction">
        <h5>Construction Services</h5>
        <hr style="width:50%" align="center">
        <img src={{ asset('img/fruit.png') }} style="width:70%" alt="Fruit">
        <h5>A Fruits HUB</h5>
        <hr style="width:50%" align="center">
      </div>
    </div>
  </div>
</section>


<section>
  <div class="row">
    <div class="col-md-12 my-3">
      <div class="BoardTitle">
        <h4>Board of Directors</h4>
      </div>
    </div>

  </div>
  <div class="row">
      <div class="col-md-4">
        <div class="gambarWanj">
          <img src={{ asset('img/wanjay2.png') }} style="width:50%" alt="Girl in a jacket"><br><br>
          <h4>Ridhuan Jaafar</h4>
          <h5>Lead Programmer</h5>
        </div>
      </div>

      <div class="col-md-4">
        <div class="gambarHafiz">
          <img src={{ asset('img/hafiz2.png') }} style="width:55%" alt="Girl in a jacket"><br><br>
          <h4>Hafiz Aiman</h4>
          <h5>CEO</h5>
        </div>
      </div>

      <div class="col-md-4">
        <div class="gambarHakim">
          <img src={{ asset('img/hakim.png') }} style="width:50%" alt="Girl in a jacket"><br><br>
          <h4>Hakim Zamri</h4>
          <h5>Programmer II</h5>
        </div>
      </div>

  </div>
</section>








@endsection
