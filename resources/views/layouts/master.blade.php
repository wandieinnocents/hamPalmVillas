<!-- header section -->

@include('includes.header')

@yield('mycssfile')

<!-- end of header section -->



@yield('content')




<!-- footer -->
@include('includes.footer')
<!-- end of footer  -->

<!-- scripts -->

@include('includes.scripts')

<!-- end of scripts -->

@yield('myjsfile')


</body>

</html>