<html lang="en">
<head>
  @include('includes.head')

</head>
<body>
    
    @include('includes.menu')
     <div class="mt-5">
    @yield('content')
    </div>
    @include('includes.foot')

</body>
</html>