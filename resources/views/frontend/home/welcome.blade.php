@extends('frontend.layouts.app')

@section('content')
    <div class="row d-flex align-items-center justify-content-end mr-1 mt-2 fixed-top">
        <div class="col-1 text-right">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right loginToggle"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </div>
        <div class="col-2 text-center d-flex flex-column py-3 loginBar">
            <p class="text-white">Your Account</p>
            <a type="button" class="btn btn-primary mb-3" href="{{ route('login') }}">Login</a>
            <a type="button" class="btn btn-primary" href="{{ route('register') }}">Register</a>
        </div>
    </div>

    <header class="container-fluid mx-0 px-0">
      <div class="row d-flex align-items-center flex-row flex-md-row-reverse">
        <div class="col-12 col-md-6 text-center">
          <h1 class="overlayHeadline p-3">Fancy</h1>
          <img src="{{ secure_asset('images/head.jpg') }}" class="img-fluid w-100 h-100">
        </div>
        <nav class="col-12 col-md-6 text-left my-5 d-flex flex-column pl-5">
            <a href="#categories">01 Categories.</a>
            <a href="#" class="mx-0 my-5">02 Our Vision.</a>
            <a href="#" class="mx-0 mb-5">03 Our Mission.</a>
            <a href="#">04 Meet Us.</a>
        </nav>
      </div>
      <div class="row mx-0 px-0">
        <div class="col-12 highlight text-center w-100 mx-0 px-0 py-2">
          <h1>+++NEWS+++</h1>
        </div>
      </div>
    </header>

    <main class="container">
      <div class="row py-5 justify-content-center w-100">
        <div class="col-8 d-flex justify-content-center flex-nowrap">
          <!-- Search Bar -->
          <form class="form-inline my-2 my-lg-0 d-flex justify-content-center flex-row flex-nowrap w-100">
            <input class="form-control mr-sm-2 search w-100" type="search" placeholder="Keyword..." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 w-50" type="submit">Search</button>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <p>Male / Female</p>
        </div>
      </div>


<!-- GENERATE! -->
      <div class="row overflow-auto mb-5" style="height: 550px;" id="categories">
      @foreach ($category as $cat)
        <div class="col-12 col-md-6 px-0 mx-0 cat w-100">
          <a href="{{ route('$cat->route') }}">
            <img src="{{ $cat->imgPath }}" alt="" class="img-fluid">
            <div class="cat-overlay d-flex justify-content-center align-items-center w-100">
              <div class="overlay-header h-100 w-100 pl-4">{{ $cat->title }}
                <p class="overlay-text">{{ $cat->description }}</p>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
</main>

<div class="container blog">
      <div class="row mb-5">
        <div class="col-12 d-none d-md-flex justify-content-center my-4">
          <h2>Our Vision.</h2>
        </div>
<!-- MOBILE -->
        <div class="col-12 d-flex d-md-none flex-row justify-content-center my-4">
          <h2>Our Vision.</h2>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down mt-1" data-toggle="collapse" data-target="#vision" aria-expanded="false" aria-controls="collapseExample"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </div>

        <div class="collapse" id="vision">
          <div class="card card-body">
              <img src="{{ secure_asset('images/vision_small.jpg') }}" class="img-fluid">
              <p class="card-title">Copper mug photo booth</p>
              <p class="card-txt">Intelligentsia health goth affogato activated charcoal. Pop-up four dollar toast lumbersexual semiotics austin microdosing... </p>
              <a href="{{ route('vision') }}" class="card-txt text-right">Read more</a>
          </div>
          <div class="card card-body">
            <img src="{{ secure_asset('images/vision_small.jpg') }}" class="img-fluid">
            <p class="card-title">Copper mug photo booth 2</p>
            <p class="card-txt">Intelligentsia health goth affogato activated charcoal. Pop-up four dollar toast lumbersexual semiotics austin microdosing... </p>
            <p><a href="{{ route('vision') }}" class="card-txt text-right">Read more</a></p>
          </div>
        </div>

      <div class="col-12 d-flex d-md-none flex-row justify-content-center my-4">
          <h2>Our Mission.</h2>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down mt-1" data-toggle="collapse" data-target="#mission" aria-expanded="false" aria-controls="collapseExample"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </div>

        <div class="collapse" id="mission">
          <div class="card card-body">
              <img src="http://via.placeholder.com/600x300" class="img-fluid">
              <p class="card-title">Copper mug photo booth</p>
              <p class="card-txt">Intelligentsia health goth affogato activated charcoal. Pop-up four dollar toast lumbersexual semiotics austin microdosing... </p>
              <a href="#" class="card-txt text-right">Read more</a>
          </div>
          <div class="card card-body">
            <img src="http://via.placeholder.com/600x300" class="img-fluid">
            <p class="card-title">Copper mug photo booth 2</p>
            <p class="card-txt">Intelligentsia health goth affogato activated charcoal. Pop-up four dollar toast lumbersexual semiotics austin microdosing... </p>
            <a href="#" class="card-txt text-right">Read more</a>
          </div>
        </div>

<!-- DESKTOP -->
        <div class="col-6 d-none d-md-flex flex-column">
          <img src="{{ secure_asset('images/vision_small.jpg') }}" class="img-fluid">
          <div class="px-3 pt-3">
            <p class="card-title">Copper mug photo booth</p>
            <p class="card-txt">Intelligentsia health goth affogato activated charcoal. Pop-up four dollar toast lumbersexual semiotics austin microdosing... </p>
            <a href="{{ route('vision') }}" class="card-txt text-right">Read more</a>
          </div>
        </div>
        <div class="col-6 d-none d-md-flex flex-column">
          <img src="{{ secure_asset('images/vision_small.jpg') }}" class="img-fluid">
          <div class="px-3 pt-3">
            <p class="card-title">Copper mug photo booth 2</p>
            <p class="card-txt">Intelligentsia health goth affogato activated charcoal. Pop-up four dollar toast lumbersexual semiotics austin microdosing... </p>
            <a href="{{ route('vision') }}#2" class="card-txt text-right">Read more</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-none d-md-flex justify-content-center my-4">
          <h2>Our Mission.</h2>
        </div>
        <div class="col-6 d-none d-md-flex justify-content-center flex-column">
          <img src="http://via.placeholder.com/600x300" class="img-fluid">
          <div class="px-3 pt-3">
            <p class="card-title">Copper mug photo booth</p>
            <p class="card-txt">Intelligentsia health goth affogato activated charcoal. Pop-up four dollar toast lumbersexual semiotics austin microdosing... </p>
            <a href="#" class="card-txt text-right">Read more</a>
          </div>
        </div>
        <div class="col-6 d-none d-md-flex justify-content-center flex-column">
          <img src="http://via.placeholder.com/600x300" class="img-fluid">
          <div class="px-3 pt-3">
            <p class="card-title">Copper mug photo booth 2</p>
            <p class="card-txt">Intelligentsia health goth affogato activated charcoal. Pop-up four dollar toast lumbersexual semiotics austin microdosing... </p>
            <a href="#" class="card-txt text-right">Read more</a>
          </div>
        </div>
      </div>
    </main>
  </div>

  <div class="container-fluid">
    <div class="row mx-0 px-0 mt-5">
      <div class="col-12 text-center mx-0 px-0 py-2">
        <h2 class="w-50 mx-auto">Meet us</h2>
      </div>
        <div class="col-12 text-center w-100 mx-0 px-0 py-2">
          <p>Asymmetrical keffiyeh copper mug, fashion axe cray taxidermy four loko YOLO church-key chambray etsy palo santo dreamcatcher. Mumblecore kitsch skateboard squid, polaroid austin craft beer hell of flexitarian.</p>
        </div>
      </div>
    </div>

    <footer class="container-fluid py-5 mt-5">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-7 flex-column text-center text-md-left">
            <img src="http://via.placeholder.com/150x150" class="img-fluid"><br>
            <small>Lorem ipsum dolor sit amet, et populo delectus nam. Nec te duis clita conclusionemque. Ut voluptua mediocritatem usu, ad novum nostro pericula cum.</small><br>
            <small>@2019 Lorem ipsum dolor</small>
        </div>
      </div>

      <div class="row">
        <div class="col-6 d-flex justify-content-center my-5">
          <ul class="text-left flex-column">
            <li>About Us</li>
            <li>Store Locator</li>
            <li>Contact</li>
            <li>Affiliate</li>
            <li>Terms & Conditions</li>
            <li>Privacy Policy</li>
            </ul>
          </div>
          <div class="col-6 d-flex justify-content-center my-5">
            <ul class="text-left flex-column">
            <li>Accessibility</li>
            <li>Recycling</li>
            <li>FAQs</li>
            <li>Delivery methods</li>
            <li>Order Tracking</li>
            <li>Returns & Exchanges</li>
          </ul>
          </div>
        </div>

    <div class="row d-flex justify-content-end justify-content-md-center">
        <div class="col-12 col-md-4">
            <h2 class="w-100 text-center text-md-right">Connect with us</h2>
            <ul class="social d-flex justify-content-center justify-content-md-end  mx-0 px-0">
              <li class="pr-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
              </li>

              <li class="pr-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
              </li>

              <li class="pr-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
              </li>

              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
            </li>
          </ul>
        </div>
      </div>
    </footer>
@endsection

