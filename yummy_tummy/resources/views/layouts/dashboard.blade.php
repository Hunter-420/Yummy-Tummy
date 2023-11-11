<!-- layouts/dashboard.blade.php -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashbord.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Add your other stylesheets and head elements here -->
</head>
<body class="bg-white">
        <!-- Sidebar -->
        

  <div class="text-center bg-white  h-screen"  id="wrapper">

<div class="row ">
  <div class="col-3">
  <div class="container text-left ">
<div class="col align-items-start">
  <div class="col mt-10 pt-10 d-flex">
  <a href="{{ route('dashboard') }}" class="d-flex"><img src="{{ url('icons/house-solid.svg') }}"
                                style="height: 30px; width: 30px;"/> <h1 class="ml-3 font-weight-bolder h3">Dashboard</h1></a>    </div>
                                <div class="col mt-5">
    <div class="d-flex align-items-center" onclick="toggleSubMenu()">
        <img src="{{ url('icons/p-solid.svg') }}" style="height: 30px; width: 30px;"/>
        <button><h1 class="ml-3 font-weight-bolder h3">Products</h1></button>
    </div>

    <ul class="list-unstyled mt-3" id="submenu" style="display: none;">
        <li>
            <a href="{{ route('admin.viewProduct') }}"  class="ml-10 font-weight-bold h4 pb-5">Products List</a>
        </li>
        <li>
            <a href="{{ route('admin.addProduct') }}"  class="ml-10 font-weight-bold h4 ">Add Product</a>
        </li>
    </ul>
</div>



  
  <div class="col mt-5">
  <a href="{{ route('admin.viewProduct') }}"  class="d-flex"><img src="{{ url('icons/cart-shopping-solid.svg') }}"
                                style="height: 30px; width: 30px;"/> <h1 class="ml-3 font-weight-bolder h3">Orders</h1></a>
  </div>
  <div class="col mt-5">
  <a href="{{ route('admin.viewProduct') }}"  class="d-flex"><img src="{{ url('icons/user-solid.svg') }}"
                                style="height: 30px; width: 30px;"/> <h1 class="ml-3 font-weight-bolder h3">Customers</h1></a>
  </div>
  <div class="col mt-5">
  <a href="{{ route('admin.viewProduct') }}"  class="d-flex"><img src="{{ url('icons/bell-solid.svg') }}"
                                style="height: 30px; width: 30px;"/> <h1 class="ml-3 font-weight-bolder h3">Notificaions</h1></a>
  </div>
  <div class="col mt-5 ">
  @livewire('navigation-menu')
 
  <h1 class="font-weight-bolder h4">{{ auth()->user()->name }}</h1>
  </div>
</div>
</div>
  </div>


  <div class="col-9" id="page-content">@yield('content')</div>
</div>
</div>



<script>
    function toggleSubMenu() {
        var submenu = document.getElementById('submenu');
        submenu.style.display = submenu.style.display === 'none' ? 'block' : 'none';
    }
</script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</body>
</html>

