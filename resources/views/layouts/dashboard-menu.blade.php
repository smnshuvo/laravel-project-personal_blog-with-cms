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
    
  <li><i class="material-icons"><img src="{{ asset('icons/dashboard.png') }}" alt=""></i><p>Reports</p></li>
    <li><i class="material-icons active"><img src="{{ asset('icons/write.png') }}" alt=""></i><p>Create Post</p></li>
    <li><i class="material-icons"><img src="{{ asset('icons/comment.png') }}" alt=""></i><p>Comments</p></li>    
    <li><i class="material-icons"><img src="{{ asset('icons/maintain.png') }}" alt=""></i><p>Updates</p></li>
  </ul>
  <i class="material-icons info">&#xE88E;</i>
</div>
</div>

<div id="page">
  @yield('content')
</div>

</body>
</html>