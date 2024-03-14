<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboardpage</title>

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="home.css">
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
      <div class="col-sm-4 text-center logo"><img src="assets/logo/logo.png" alt=""></div>
      <div class="col-sm-4 text-center right-navbar">
        <a href="">Login</a>
        <a href="">Wishlist(0)</a>
        <a href="">Cart(0)</a>
      </div>
    </div>

    <div class="main-title">
      <h1 class="text-center">Quality meets style </h1>
      <h1 class="text-center">with feline finesse</h1>
      <p class="text-center">Our Garments, Woven with Whiskered</p>
      <p class="text-center">Precision and Hat-tastic Flair, Promise a</p>
      <p class="text-center">Purrmanence of Quality and Durability</p>
      <div class="text-center down-arrow"><a href="#onSale"><img src="assets/logo/arrow.png" alt="Arrow down"></a></div>
    </div>

    <!-- category html -->
    <div class="row">
      <div class="col-6">
        <div><button id="men-btn" class="btn btn-primary gender-btn w-100">Men</button></div>
      </div>
      <div class="col-6">
        <div><button id="women-btn" class="btn btn-outline-primary gender-btn w-100">Women</button></div>
      </div>
    </div>
    <div class="category">
      <a href="">All</a>
      <a href="">Sweatshirts</a>
      <a href="">Knitwear</a>
      <a href="">Polo Shirts</a>
      <a href="">T-shirts</a>
      <a href="">Shirts</a>
      <a href="">Trousers</a>
      <a href="">Hats</a>
    </div>
    
    <div class="on-sale" id="onSale">
      <div></div>
      <div class="card-container">
        @forelse ($sale as $s)
          <div class="col-md-2 col-sm-6 card">
              <a href="/SaleProductDetail/{{ $s->id }}"><img src="storage/{{ $s->Foto }}" alt="{{ $s->Foto }}"></a>
              <p>{{ $s->Nama }}</p>
              <div class="price">
                <span class="text-danger price-text">{{ $s->Harga }}</span>
                <span><del>{{ $s->Diskon }}</del></span>
              </div>


          @if(Auth::user() && Auth::user()->role == 'admin')
            <a href="/edit-baju/{{ $s->id }}">Edit</a>

            <form action="/delete-baju/{{ $s->id }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit">Delete</button>
            </form>
          @endif
          @empty
            <p>{{ "No clothes added" }}</p>
          </div> 
        @endforelse 
      </div>
    </div>
    
  </div>

    <div class="invert-arrow text-center"><a href="#navBar"><img src="assets/logo/arrow.png" alt=""></a></div>
  </div>
  
</body>
</html>