<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;500;600&display=swap" rel="stylesheet">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="{{asset('./templates/css/styles.css')}}" />
    <title>ecommerce Website: @yield('title')</title>
  </head>
  <body>
    <!-- Header -->
    <header class="header" id="header">
      <!-- Top Nav -->
      <div class="top-nav">
        <div class="container d-flex">
          <p>Online Shop </p>
          <ul class="d-flex">
            <li><a href="{{route('index')}}">All Products</a></li>
            <li><a href="{{route('categories')}}">Categories</a></li>
            <li><a href="{{ route('basket')}}">Trash</a></li>
            <li><a href="{{route('index')}}">resets</a></li>
          </ul>
          <!-- <ul><li><a href="#">Admin Panel</a></li></ul> -->
        </div>
      </div>
    </header>
    <!--conteiner-->

    <div class="product-center container">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
</html>
