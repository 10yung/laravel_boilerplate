<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="/css/ripples.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <title>TengsLaravel</title>
  </head>
  <body>
    <!--nav bar area-->
    <div class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Teng's Laravel</a>
        </div>
      </div>
    </div>

      <!--content area-->
      <div class="container-fluid">
          @yield('content')
      </div>
      <!--script area-->
      <script src="/js/jquery.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
      <!-- Material Design for Bootstrap -->
      <script src="/js/material.js"></script>
      <script src="/js/ripples.min.js"></script>
      <script>
        $.material.init();
      </script>
  </body>
</html>
