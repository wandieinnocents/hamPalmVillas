@extends('layouts.master')

@section('title')
HOME - Ham Palm Villas
@endsection

<!-- extra styles -->
@section('mycssfile')


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- styles -->
<style>

/*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  margin-top: 5px;
  margin-left: 5px;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #5A55A3;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: grey;
  background-image: #5A55A3;
  color: #ffffff;
}

div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid grey;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 20px;
  padding-top: 10px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}
</style>
<!-- end of style -->

@stop

<!-- end of extra styles  -->

@section('content')

<!-- content data -->


<!-- slider -->

@include('includes.slider')
<!-- end of slider -->




<section class="rooms rooms-style2 rooms-style3">
<div class="container" style="margin-top:-60px;">
<div class="section-title">
<h3>ESCAPE THE ORDINARY <span>EMBRACE THE LUXURY</span></h3>
<p>
Ham Palm Villas has been designed with a comprehensive understanding of the market 
ensuring awareness of every aspect that may 
have a direct influence on our residents.
</p>
</div>
<div class="room-outer">
<div class="row team-slider" style="margin-top:-40px;">
<div class="col-md-4">
<div class="room-item">
<div class="room-image">
<img src="assets/images/custom/map2.jpg" alt="image">

<div class="room-content">
<div class="room-title">



<h4 class="white">LOCATION</h4>
<div class="text white">
Ham Palm Villas is Situated just 20km from the Entebbe International Airport,
 the primary international Entry into Uganda and falls within the precincts of Sekiwunga, 
Akright City Kakungulu and Palm View Golf Course. The site is strategically located, 
40 Km from Kampala city ,   superb location of the Villas.</div>
</div>
<div class="room-services mar-top-20">
<ul>
 
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="room-item">
<div class="room-image">
<img src="assets/images/custom/hamoverview.jpg" alt="image"> 

<div class="room-content">
<div class="room-title">


<!-- item start -->
<h4 class="white">PROJECT OVERVIEW</h4>
<div class="text white">
Ham Palm Villas is a master-planned development to be undertaken on approximately 
100-acre parcel located in Kakungulu, an Ultra-Modern 500 contemporary modern housing 
project with an exquisite lifestyle. The residential units are 
in Clusters to enhance Community living and security 
</div>
</div>
<div class="room-services mar-top-20">
<ul>
 
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="room-item">
<div class="room-image">
<img src="assets/images/custom/masterplanner.png" alt="image">

<div class="room-content">
<div class="room-title">

<!-- item end -->

<h4 class="white">MASTER PLAN</h4>
<div class="text white">
   
Ham Group of Companies, as the master developers, is providing fully-serviced Residential
 Units with world-class infrastructure for both Local and Foreigner to purchase. 
 Ham Palm Villas is distinctly zoned into Residential, 
Works and Commercial. Precincts. The Residential are beautiful.

</div>
</div>
<div class="room-services mar-top-20">
<ul>

</ul>
</div>
</div>
</div>
</div>
</div>


</div>

</div>

</div>

</section>

<!-- add tab vertical content here -->

<div class="container" style="margin-top:-60px;">
	<div class="row">
        <div class="col-md-12 bhoechie-tab-container">
            
            <div class="col-md-3 bhoechie-tab-menu">
              <div class="list-group">
              <a href="#" class="list-group-item active " style="border-radius: 0px 40px; 0px; 0px;">
                  <h4><span class="glyphicon glyphicon-map-marker" style="margin-right: 20px; color:black;"></span>Location</h4> 
                 
                  Ham Palm Villas is a place where there is a carefully curated 
                  quality corporate and community experience.
                </a>
                
                <!-- master plan  -->
                <a href="#" class="list-group-item" >
                  <h4><span class="glyphicon glyphicon-calendar" style="margin-right: 20px; color:black;"></span>Master Plan</h4> 
                

                  Ham Group of Companies, as the master developers, is providing fully-serviced 
                  Residential Units with world-class...
                </a>


                <a href="#" class="list-group-item">
                  <h4><span class="glyphicon glyphicon-file" style="margin-right: 20px;color:black;"></span>E-Brocure</h4> 
                 
                  Ham Palm Villas is a place where there is a carefully curated 
                  quality corporate and community experience.
                  
                </a>
                
                <a href="#" class="list-group-item " style="border-radius: 0px 40px; 0px; 0px;">
                  <h4><span class="glyphicon glyphicon-road" style="margin-right: 20px; color:black;"></span>Project Overview</h4> 
                 

                  Ham Palm Villas is a master-planned development to be undertaken
                  on approximately 100-acre parcel ...
                </a>
                <!-- <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Credit Card
                </a> -->
              </div>
            </div>

            <br><br>
            <div class="col-md-9 bhoechie-tab">
                <!-- location section -->
                
                <div class="bhoechie-tab-content active" style="background:url(assets/images/custom/breadcrum.png)">
                <center>
                    <h4><span class="glyphicon glyphicon-map-marker" style="margin-right: 20px; color:black;"></span>Location</h4> 
                    
                      <img src="assets/images/latest/locateus.png" alt="image" width="90%" height="100%;">

            
            
                <br>
                    </center>
                </div>
                <!-- master plan section section -->
                <div class="bhoechie-tab-content">
                    
                      <center>
                    <h4><span class="glyphicon glyphicon-map-marker" style="margin-right: 20px; color:black;"></span>Master Plan</h4> 
                    
                      <img src="assets/images/custom/plann.png" alt="image" width="70%" height="20%;">
                      <br>
                    </center>
            
                    
                 
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-file " style="font-size:12em;color:#55518a; "></h1>
                      <p>Take a look at our</p>
                      <h3 style="margin-top: 0;color:#55518a; ">E-BROCURE</h3>
                      <p>Ham Palm Villas is a master-planned development to be undertaken on approximately 100-acre parcel 
                        located in Kakungulu, an Ultra-Modern 500 contemporary modern housing project with an exquisite lifestyle. 
                        The residential units are in Clusters to enhance Community living and security</p>

                        <button   class="btn btn-primary" style="background-color:grey;" ><a href="assets/documents/brocure.pdf" style="color:#ffffff;" > DOWNLOAD </a></button>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-road" style="font-size:12em;color:#55518a"></h1>
                      <p>Take a look at our </p>
                      <h3 style="margin-top: 0;color:#55518a">PROJECT OVERVIEW</h3>
                      <p>Ham Palm Villas is a master-planned development to be undertaken on approximately 
                          100-acre parcel located in Kakungulu, an Ultra-Modern 500 contemporary modern housing 
                          project with an exquisite lifestyle. The residential units are 
                          in Clusters to enhance Community living and security </p>
                    </center>
                </div>
                <!-- <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
                    </center>
                </div> -->
            </div>
        </div>
  </div>
</div>


<!-- end of vertical tabs content here -->

<!-- end of content data -->

@endsection




<!-- vertical tab scripts -->

@section('myjsfile')

<script>

    $(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>
@stop

<!-- end of vertical tabs scripts -->


