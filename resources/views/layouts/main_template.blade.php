<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.menu')
 
    <div style ="margin-top:50px">
        @yield('content')
    </div>
    @include('includes.foot')
    <div style ="margin-top:50px">
        @yield('foot')
    </div>
</body>
</html>