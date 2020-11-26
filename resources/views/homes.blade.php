@extends('master')
@section('title', 'NgeReview.com')

@section('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>NgeReview.com</h1>
            <span class="subheading">Tempatnya Review Semua Gadget</span>
          </div>
        </div>
      </div>
    </div>
  </header>
 
  <!-- Main Content -->
 @foreach($articles as $home)
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="{{$home->link}}">
            <h2 class="post-title">
              {{$home -> title}}
            </h2>
            <p class="post-subtitle">
            <a href="{{$home->link}}">
            <img class="img-fluid" src="{{asset('storage/'.$home->image)}}">
          </a>
              {{$home->content}}
            </p>
          </a>
          
        </div>
        <!-- More -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="{{$home->link}}">Read More &rarr;</a>
        </div>
        <p class="post-meta">Posted by
            <a href="#">Admin</a>
            on October 4, 2020</p>
        <hr>
      </div>
    </div>
  </div>
  @endforeach
  @endsection

