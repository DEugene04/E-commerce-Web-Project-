<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <a href="">Wishlist</a>
        <a href="">Cart</a>
          @if (Auth::user() && Auth::user()->role == 'admin')
            <a href="{{ url('/adminPanel') }}">Dashboard</a>
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
  
    {{-- Category HTML --}}
    <div class="gender">
      <button class="btn btn-primary gender-btn w-100" id="men-btn">Men</button>
      <button class="btn btn-outline-primary gender-btn w-100" id="women-btn">Women</button>
    </div>
  
    <div class="category">
      <a class="category-content bold" href="">All</a>
      <a class="category-content"  href="">Sweatshirts</a>
      <a class="category-content"  href="">Knitwear</a>
      <a class="category-content"  href="">Polo Shirts</a>
      <a class="category-content" href="">T-shirts</a>
      <a class="category-content" href="">Shirts</a>
      <a class="category-content" href="">Trousers</a>
      <a class="category-content" href="">Hats</a>
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
          </div>
          @empty
            <p>{{ "No clothes added" }}</p> 
        @endforelse  
      </div>
    </div>
    
    <div class="new-product" id="new-product">
      <h2 class="product-row-title">Newest Product</h2>
      <div class="card-container">
        @forelse ($NewProduct as $N)
          <div class="col-md-2 col-sm-6 product-card">
            <div class="card">
              <a href="/NewProductDetail/{{ $N->id }}"><img src="storage/{{ $N->FotoNew }}" alt="{{ $N->FotoNew }}"></a>
              <p>{{ $N->NamaNew }}</p>
              <div class="price">
                <span>{{ $N->HargaNew }}</span>
              </div>
            </div>
          @if(Auth::user() && Auth::user()->role == 'admin')
            <a href="/edit-newest-product/{{ $N->id }}">Edit</a>

            <form action="/delete-newest-product/{{ $N->id }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit">Delete</button>
            </form>
            @endif
          </div>
          @empty
            <p>{{ "No clothes added" }}</p> 
        @endforelse  
      </div>
    </div>

  <div class="other-products" id="other-products">
    <h2 class="product-row-title">Other Products</h2>
    <div class="card-container">
      @forelse ($OtherProduct as $O)
          <div class="col-md-2 col-sm-6 product-card">
            <div class="card">
              <a href="/OtherProductDetail/{{ $O->id }}"><img src="storage/{{ $O->FotoOther }}" alt="{{ $O->FotoOther }}"></a>
              <p>{{ $O->NamaOther }}</p>
              <div class="price">
                <span>{{ $O->HargaOther }}</span>
              </div>
            </div>
          @if(Auth::user() && Auth::user()->role == 'admin')
            <a href="/edit-other-product/{{ $O->id }}">Edit</a>

            <form action="/delete-other-product/{{ $O->id }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit">Delete</button>
            </form>
            @endif
          </div>
          @empty
            <p>{{ "No clothes added" }}</p> 
        @endforelse  
    </div>
  </div>
</div>

  <script src="{{ asset('js/homepage.js') }}"></script>
</body>
</html>
