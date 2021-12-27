<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplaces</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 40px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">Marketplace</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        @auth
            
            <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link @if (request()->is('admin/stores*')) active @endif" href="{{route('admin.stores.index')}}">Lojas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (request()->is('admin/products*')) active @endif" href="{{route('admin.products.index')}}">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (request()->is('admin/products*')) active @endif" href="{{route('admin.categories.index')}}">Categorias</a>
        </li>
        </ul>
       
      </div>
      <div class="my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                    <span class="nav-link">{{auth()->user()->name}}</span>
                </li>
                <li class="nav-item">
                    <a href="#" onclick="event.preventDefault();
                     document.querySelector('form.logout').submit();" class="nav-link">Sair</a>
                    <form action="{{route('logout')}}" class="logout" method="POST" style="display:none;">
                        @csrf
                    </form>
                </li>
                
            </ul>
            @endauth
        </div>
</nav>


    <div class="container">   
    @include('flash::message')
    @yield ('content')
    </div>


    
</body>
</html>