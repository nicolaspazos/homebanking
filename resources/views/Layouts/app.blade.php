<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>{{ $title }}</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>
<body>
<nav
      class="navbar fixed-top navbar-expand-md navbar-dark bg-dark text-warning"
    >
      <a class="navbar-brand mb-0 h1" href="home">
        <img src="{{ asset('img/vault.png') }}" width="30" height="30" alt="" />
        Home Banking
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="home" id="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="balance" id="balance">Balance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="servicios" id="servicios"
              >Paga de servicios</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inversiones" id="Inversiones"
              >Inversiones</a
            >
          </li>
        </ul>
      </div>
    </nav>
<div class="jumbotron jumbotron-fluid">
       <div class="container">
           <h1 class="display-4">{{ $jumboTitle }}</h1>
           <p class="lead">{{ $jumboDesc }}</p>
       </div>
   </div>

   @yield('content')


   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

   @yield('scripts')

</body>
</html>

