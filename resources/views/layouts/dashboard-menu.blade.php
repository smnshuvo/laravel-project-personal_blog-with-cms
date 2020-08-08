<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Expandable side menu CSS Only</title>
  <!-- Styles -->
  <link href="{{ asset('css/dashboard-style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/material-icons-min.css') }}" /> 
</head>
<body>
<!-- partial:index.partial.html -->
<div id="cont">
<div id="menu-fixed">
  <div class="notes"><p>Expand the menu!</p></div>
  <a href="#cont">
    <i class="material-icons back">&#xE314;</i>
  </a>
  <a href="#menu-fixed">
    <div class="logo">
      <span></span>   
      <p>SMN</p>
    </div>
    <p class="pmenu">BLOG</p>
  </a>
  <hr>
  <ul class="menu">
    <li><i class="material-icons"><img src="{{ asset('icons/write.png') }}" alt=""></i><p>Explore</p></li>
    <li><i class="material-icons">&#xE8CC;</i><p>Shop</p></li>
    <li><i class="material-icons">&#xE8B8;</i><p>Settings</p></li>
    <li><i class="material-icons">&#xE8B6;</i><p>Search</p></li>
  </ul>
  <i class="material-icons info">&#xE88E;</i>
</div>
</div>

<div id="page">
  @yield('content')
</div>

</body>
</html>