<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="adminPanel.css">
  <title>Admin Panel</title>
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
        <a href="{{ url('/adminPanel') }}">Dashboard</a>
      </div>
    </div>

    <div class="main-content">
      <div class="header"><h1>Admin Panel</h1></div>
      <div class="card-container">
        <a href="{{ url('/adminPanelSale') }}"><div class="cards" id="card1"><img src="assets/onSale.png" alt="On Sale Product Logo"> Edit On Sale Products</div></a>
        <a href="{{ url('/add-newProduct') }}"><div class="cards" id="card2"><img src="assets/Newest Product.png" alt="Newest Product Logo">Edit Newest Products</div></a>
        <div class="cards" id="card3"><img src="assets/Other Product.png" alt="Other Product Logo">Edit Other Products</div>
      </div>
    </div>
  </div>
</body>
</html>