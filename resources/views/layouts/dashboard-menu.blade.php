<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SMN Blog | Create Post</title>
  <!-- Styles -->
  <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('public/css/dashboard-style.css') }}" rel="stylesheet">
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
    
  <li><i class="material-icons"><img src="{{ asset('public/icons/dashboard.png') }}" alt=""></i><p>Reports</p></li>
    <li><i class="material-icons active"><img src="{{ asset('public/icons/write.png') }}" alt=""></i><p>Create Post</p></li>
    <li><i class="material-icons"><img src="{{ asset('public/icons/comment.png') }}" alt=""></i><p>Comments</p></li>    
    <li><i class="material-icons"><img src="{{ asset('public/icons/maintain.png') }}" alt=""></i><p>Updates</p></li>
  </ul>
  <i class="material-icons info">&#xE88E;</i>
</div>
</div>

<div id="page">
  @yield('content')
</div>

</body>
</html>