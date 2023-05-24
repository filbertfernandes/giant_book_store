<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>@yield('title')</title>
    
    {{-- @vite(['resources/js/app.js']) --}}
  </head>
  <body style="background: #F5F5F5">

      <div class="row text-center text-light p-2" style="background: #5C4438">
          <div class="col-md-12">
            <h1><i class="bi bi-book-fill"></i> Giant Book Store</h1>
          </div>
      </div>
    
        <div class="row justify-content-center mt-3">
          <div class="col-md-5 text-center align-items-center align-text-center">
            <div class="row">
              <div class="col-md-3 align-center">
                <a href="/" class="text-decoration-none text-dark">Home</a>
              </div>
              <div class="col-md-3 ">
                <a class="dropdown-toggle text-decoration-none text-dark" id="category" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="category">
                  @foreach($categories as $category)
                    <li><a class="dropdown-item" href="/category?id={{ $category->id }}">{{ $category->name }}</a></li>
                  @endforeach
                </ul>
              </div>
              <div class="col-md-3 ">
                <a href="/publishers" class="text-decoration-none text-dark">Publishers</a>
              </div>
              <div class="col-md-3 ">
                <a href="/contact" class="text-decoration-none text-dark">Contact</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="container mt-4" style="min-height: 70vh">
          @yield('content')
        </div>
        
        <div class="row text-center p-2 text-light" style="background: #5C4438">
          <div class="col-md-12">
            <h5>© Giant Book Store 2023</h5>
          </div>
        </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>