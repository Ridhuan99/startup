@extends('layouts.app')

@section('content')
  <section >
      <div class="kotak">

        <div class="input-group p-3 mx-auto homesearch" >
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
            aria-describedby="search-addon" />
          <button type="button" class="btn btn-warning">search</button>
        </div>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">

            <div class="carousel-item active">
              <img class="d-block w-100" src=" {{ asset('img/wallpaper bg.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src=" {{ asset('img/wallpaper bg.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src=" {{ asset('img/wallpaper bg.jpg')}}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
  </section>
  <section>
    <h2 class="tajuk p-3">Category</h2>
    <div class="">

    </div>
  </section>
  <section>
    <h2 class="tajuk p-3">Product</h2>
    <div class="">

    </div>
  </section>
@endsection
