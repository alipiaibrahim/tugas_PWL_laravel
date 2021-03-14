@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
        {{-- <img class="image" src="{{ ('img/gambar3.jpg') }}"> --}}
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="{{ ('img/gambar3.jpg') }}" class="d-block w-100">
              </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card">
              <img src="{{ ('img/4.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title" style="text-align: center;">Sakura</h3>
                    <p style="text-align: justify; color: black;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum fugiat repudiandae
                        , ratione quam dolorem optio minus enim iste consectetur</p>
                    <a class="btn btn-primary" href="#" role="button">Link</a>
                </div>
            </div>
            <div class="card">
                <img src="{{ ('img/5.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title" style="text-align: center;">Jasmine</h3>
                        <p style="text-align: justify; color: black;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum fugiat repudiandae
                            , ratione quam dolorem optio minus enim iste consectetur</p>
                        <a class="btn btn-primary" href="#" role="button">Link</a>
                    </div>
            </div>
            <div class="card">
                <img src="{{ ('img/6.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title" style="text-align: center;">Kingdom</h3>
                        <p style="text-align: justify; color: black;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum fugiat repudiandae
                            , ratione quam dolorem optio minus enim iste consectetur</p>
                        <a class="btn btn-primary" href="#" role="button">Link</a>
                    </div>
            </div>
          </div>
          <div class="card-deck">
            <div class="card">
              <img src="{{ ('img/6.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title" style="text-align: center;">Rose</h3>
                    <p style="text-align: justify; color: black;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum fugiat repudiandae
                        , ratione quam dolorem optio minus enim iste consectetur</p>
                    <a class="btn btn-primary" href="#" role="button">Link</a>
                </div>
            </div>
            <div class="card">
                <img src="{{ ('img/8.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title" style="text-align: center;">Brand</h3>
                        <p style="text-align: justify; color: black;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum fugiat repudiandae
                            , ratione quam dolorem optio minus enim iste consectetur</p>
                        <a class="btn btn-primary" href="#" role="button">Link</a>
                    </div>
            </div>
            <div class="card">
                <img src="{{ ('img/9.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title" style="text-align: center;">The Place</h3>
                        <p style="text-align: justify; color: black;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum fugiat repudiandae
                            , ratione quam dolorem optio minus enim iste consectetur</p>
                        <a class="btn btn-primary" href="#" role="button">Link</a>
                    </div>
            </div>
          </div>
        <div class="site-footer">
            <p>Copyright © 2021 Dinamika Book. All Rights Reserved </p>
        </div>
@stop

@section('js')
    <script>
        console.log('Hello');
    </script>
@stop