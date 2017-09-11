<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.adminhead')
</head>
<body id="page-top" class="index">

@include('includes.adminnavigation')

{{--@include('includes.header')--}}

@yield('content')

@include('includes.adminfooter')

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>