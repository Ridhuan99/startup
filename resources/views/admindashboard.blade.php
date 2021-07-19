@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <section>
      <div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none;z-index:5" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
          <a href="{{ route('manageuser') }}" class="w3-bar-item w3-button">Manage User</a>
          <a href="#" class="w3-bar-item w3-button">Sales Analytics</a>
          <a href="#" class="w3-bar-item w3-button">Traffic Analytics</a>
        </div>
        <div class="w3-overlay" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
        <div>
          <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
          <div class="container-fluid">
            <h1>Dashboard</h1>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-3 col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Big Number</h4>
                        <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> -->
                        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
                      </div>
                      <img class="card-img-top" src=" {{ asset('img/big number.gif')}}" alt="Card image" style="width:100%">

                    </div>
                  </div>

                  <div class="col-sm-3 col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Big Number</h4>
                        <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> -->
                        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
                      </div>
                      <img class="card-img-top" src=" {{ asset('img/big number.gif')}}" alt="Card image" style="width:100%">

                    </div>
                  </div>

                  <div class="col-sm-3 col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Big Number</h4>
                        <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> -->
                        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
                      </div>
                      <img class="card-img-top" src=" {{ asset('img/big number.gif')}}" alt="Card image" style="width:100%">

                    </div>
                  </div>

                  <div class="col-sm-3 col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Big Number</h4>
                        <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> -->
                        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
                      </div>
                      <img class="card-img-top" src=" {{ asset('img/big number.gif')}}" alt="Card image" style="width:100%">

                    </div>
                  </div>
                </div>
              </div>
              <br>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-6 col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Bar Chart</h4>
                        <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-primary">See Profile</a> -->
                      </div>
                      <img class="card-img-top" src=" {{ asset('img/bar graph.gif')}}" alt="Card image" style="width:100%">
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Pie Chart</h4>
                        <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-primary">See Profile</a> -->
                      </div>
                      <img class="card-img-top" src=" {{ asset('img/pie graph.gif')}}" alt="Card image" style="width:100%">
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

  <script>
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
    }
    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
    }
  </script>
  </section>
@endsection
