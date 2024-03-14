<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>

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
        <a href="{{ url('/login') }}">Login</a>
        <a href="">Wishlist(0)</a>
        <a href="">Cart(0)</a>
        @if (Auth::user() && Auth::user()->role == 'admin')
        <a href="">Dashboard</a>
        @endif
      </div>
    </div>

    <div class="main-title" id="main-title">
      @if (Auth::user())
        <h1 class="text-center" id="welcome-text">Welcome {{ Auth::user()->name }}</h1>
        @endif
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
      <a class="category-content bold" onclick="textClicked(this); return false;" href="">All</a>
      <a class="category-content" onclick="textClicked(this); return false;" href="">Sweatshirts</a>
      <a class="category-content" onclick="textClicked(this); return false;" href="">Knitwear</a>
      <a class="category-content" onclick="textClicked(this); return false;" href="">Polo Shirts</a>
      <a class="category-content" onclick="textClicked(this); return false;" href="">T-shirts</a>
      <a class="category-content" onclick="textClicked(this); return false;" href="">Shirts</a>
      <a class="category-content" onclick="textClicked(this); return false;" href="">Trousers</a>
      <a class="category-content" onclick="textClicked(this); return false;" href="">Hats</a>
    </div>
    
    <div class="on-sale" id="onSale">
      <h2 class="product-row-title">On Sale</h2>
      
      <div class="card-container">
        @forelse ($sale as $s)
        <div class="col-md-2 col-sm-6 product-card">
          <div class="card">
            <a href="/SaleProductDetail/{{ $s->id }}"><img src="storage/{{ $s->Foto }}" alt="{{ $s->Foto }}"></a>
            <p>{{ $s->Nama }}</p>
          
            <div class="price">
              <span class="text-danger price-text">{{ $s->Harga }}</span>
              <span><del>{{ $s->Diskon }}</del></span>
            </div>
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
          @endforelse  
        </div>   
      </div>
    </div>

    <div class="new-product">
      <h2 class="product-row-title">Newest Product</h2>
      
      <div class="card-container">
        @forelse ($NewProduct as $N)
          <div class="col-md-3 col-sm-6 row">
            <div class="card">
              <a href="/NewProductDetail/{{ $N->id }}">
              <img src="storage/{{ $N->FotoNew }}" alt="{{ $N->FotoNew }}"></a>
            <p>{{ $N->NamaNew }}</p>
              <div class="price">
                <span>{{ $N->HargaNew }}</span>
              </div>
            </div>
          </div>
        @empty
          <p>{{ "No clothes added" }}</p>
        @endforelse 
      </div>
    </div>
      

    <div class="other-products">
      <h2 class="product-row-title">Other Product</h2>
      <div class="card-container">
        @forelse ($OtherProduct as $O)
          <div class="col-md-2 col-sm-6 row">
            <div class="card">
              <a href="/OtherProductDetail/{{ $O->id }}"><img src="storage/{{ $O->FotoOther }}" alt="{{ $O->FotoOther }}"></a>
              <p>{{ $O->NamaOther }}</p>
                <div class="price">
                  <span>{{ $O->HargaOther }}</span>
                </div>
            </div>
          </div>
        @empty
          <p>{{ "No clothes added" }}</p>
        @endforelse 
      </div>
    </div>

    <div class="invert-arrow text-center"><a href="#"><img src="assets/logo/arrow.png" alt=""></a></div>
  </div>
  <script src="{{ asset('js/homepage.js') }}"></script>
</body>
</html>