<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  {{-- archivo link --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  {{-- fontawesome --}}
  <script src="https://kit.fontawesome.com/c07884273f.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="/productDetail.css">
  <title>Product Details</title>
</head>
<body>
  <div class="container-fluid">
    <div class="navBar row position-sticky" id="navBar">
      <div class="col-sm-4 text-center left-navbar">
        <a href="">Men</a>
        <a href="">Women</a>
        <a href="">About</a>
        <a href="">Contact</a>
      </div>
      <div class="col-sm-4 text-center logo"><img src="/assets/logo/logo.png" alt=""></div>
      <div class="col-sm-4 text-center right-navbar">
        <a href="{{ url('/login') }}">Login</a>
        <a href="">Wishlist(0)</a>
        <a href="">Cart(0)</a>
        @if (Auth::user() && Auth::user()->role == 'admin')
        <a href="">Dashboard</a>
        @endif
      </div>
    </div>
    <div class="main-content">
      <div class="main-foto"><img src="/storage/{{ $NewProduct->FotoNew }}" alt="{{ $NewProduct->FotoNew }}"></div>
      
      <div class="details-container">
        <div class="first-line">
          <div><h3 id="product-name">{{ $NewProduct->NamaNew }}</h3></div>
          <div><del>{{ $NewProduct->DiskonNew }}</del></div>
          <div class="harga">{{ $NewProduct->HargaNew }}</div>
        </div>
        <div class="second-line">
          <div class="description">{{ $NewProduct->DescriptionNew }}
          </div>
        </div>
        <div class="third-line">
          <div class="plus-minus">
            <button class="minus-btn" id="minus">-</button>
            <div class="showNumber" id="showNumber"><p>1</p></div>
            <button class="plus-btn" id="plus">+</button>
          </div>
          <div class="addToCart">
            <button class="btn btn-primary" id="ATC-Btn"><i class="fa-solid fa-cart-shopping"></i>Add To Cart</button>
          </div>
        </div>
      </div>
    </div>

    <div class="review-title">Top Reviews</div>
    <div class="secondary-content">
      
      <div class="review1">
        <div style="display: flex">
          <div class="user-profile"><img src="/assets/user.png" alt=""></div>
  
          <div class="user-name">
            <div>Bob Marley</div>
            <div><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
          </div>
        </div>
        <div class="user-comment">This sweater feels really warm and comfy!</div>
      </div>
      
      <div class="review2">
        <div style="display: flex">
          <div class="user-profile"><img src="/assets/user.png" alt=""></div>
  
          <div class="user-name">
            <div>John Doe</div>
            <div><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
          </div>
        </div>
        <div class="user-comment">Very cheap, gonna repeat!! Thanks</div>
      </div>
      
      <div class="review3">
        <div style="display: flex;">
          <div class="user-profile"><img src="/assets/user.png" alt=""></div>
  
          <div class="user-name">
            <div>Janggar</div>
            <div><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
          </div>
        </div>
        <div class="user-comment">Love it!</div>
      </div>
      
    </div>


  </div>
  <script src="{{ asset('js/productDetail.js') }}"></script>
</body>
</html>