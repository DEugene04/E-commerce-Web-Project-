<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add On Sale Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- link Noto Serif --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wdth,wght@0,62.5..100,100..900;1,62.5..100,100..900&display=swap" rel="stylesheet">

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/c07884273f.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="addNewProduct.css">
  </head>
  <body>
    <div class="container">
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
          <a href="">Dashboard</a>
        </div>
      </div>
      <h1 class="title">Add On Sale Product</h1>


      <form action="/store-baju" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="foto-box">
          <div class="bigBox-container">
            
            <div class="bigBox-1">
              <img src="#" id="image-preview" alt="">
              <label for="Foto" class="form-label">
                <i class="fa-solid fa-pencil" id="fa-pencil"></i>
              </label>
            </div>
            @error('Foto')
            <p style="color: red">{{ $message }}</p>
          @enderror
          </div>
        </div>
        <div class="mb-3">
          
          <input type="file" class="form-control foto-input" id="Foto" aria-describedby="emailHelp" value="{{ old('Foto') }}" name="Foto">
          
        <table>
          <tr>
            <td><label for="Harga" class="form-label">Harga Setelah Diskon</label></td>
            <td><input type="text" class="form-control w-100"   id="Harga" aria-describedby="emailHelp" value="{{ old('Harga') }}" name="Harga">
            @error('Harga')
              <p style="color: red">{{ $message }}</p>
            @enderror</td>
          </tr>
          <tr>
            <td><label for="Diskon" class="form-label">Harga Awal</label></td>
            <td><input type="text" class="form-control w-100" id="Diskon" aria-describedby="emailHelp" value="{{ old('Diskon') }}" name="Diskon">
            @error('Diskon')
              <p style="color: red">{{ $message }}</p>
            @enderror</td>
          </tr>
          <tr>
            <td><label for="Nama" class="form-label">Nama</label></td>
            <td><input type="text" class="form-control w-100" id="Nama" aria-describedby="emailHelp" value="{{ old('Nama') }}" name="Nama">
            @error('Nama')
              <p style="color: red">{{ $message }}</p>
            @enderror</td>
          </tr>
          <tr>
            <td><label for="Description" class="form-label">Description</label></td>
            <td><input type="text" class="form-control w-100" id="Description" aria-describedby="emailHelp" value="{{ old('Description') }}" name="Description">
            @error('Description')
              <p style="color: red">{{ $message }}</p>
            @enderror</td>
          </tr>
        </table>

        </div>
        <button type="submit" class="btn btn-primary w-100 add-button">Add</button>
      </form>
     
    {{-- </div> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="{{ asset('js/addSaleProduct.js') }}"></script>
  </body>
</html>