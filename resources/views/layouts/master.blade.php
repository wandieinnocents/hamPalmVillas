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





<!-- end of floating button code -->
<!-- talk chat embed -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fe36407a8a254155ab5de59/1eq83tgkn';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- talk chat embedd -->




<!-- floating -->
</body>

</html>