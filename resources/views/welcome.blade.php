@extends('layouts.master')

@section('title')

@endsection

<!-- extra styles -->
@section('mycssfile')

<link href="assets/css/mycssfile.css" rel="stylesheet" type="text/css">

@stop

<!-- end of extra styles  -->

@section('content')

<!-- content data -->


<!-- slider -->

@include('includes.slider')
<!-- end of slider -->




<section class="rooms rooms-style2 rooms-style3">
<div class="container">
<div class="section-title">
<h3>ESCAPE THE ORDINARY <span>EMBRACE THE LUXURY</span></h3>
<p>
Ham Palm Villas has been designed with a comprehensive understanding of the market 
ensuring awareness of every aspect that may 
have a direct influence on our residents and their objectives.
</p>
</div>
<div class="room-outer">
<div class="row team-slider">
<div class="col-md-4">
<div class="room-item">
<div class="room-image">
<img src="assets/images/room-b1.jpg" alt="image">

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
<img src="assets/images/room-b3.jpg" alt="image">

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
<img src="assets/images/room-b3.jpg" alt="image">

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

<section>
    <div class="container">
        <div class="row">

<!-- start of tabs -->
<h2>Vertical Tabs</h2>
<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Location</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Master Plan</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">E-Brocure</button>
</div>

<div id="London" class="tabcontent">
  <h3>Locatioin</h3>
  <p>Ham Palm Villas is Situated just 20km from the Entebbe International Airport, the primary international Entry into Uganda and falls within the precincts of Sekiwunga, Akright City Kakungulu and Palm View Golf Course. The site is strategically located, 40 Km from Kampala city Centre, the superb location and the increasing urbanization of Entebbe, makes Ham Palm Villas an ideal alternative for both individuals and businesses to move away from the traffic, noise and congestion of Kampala City.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Master Plan</h3>
  <p>Ham Group of Companies, as the master developers, is providing fully-serviced Residential Units with world-class infrastructure for both Local and Foreigner to purchase. Ham Palm Villas is distinctly zoned into Residential, Works and Commercial. Precincts. The Residential Precincts have beautifully designed homes in a serene and scenic environment, boasting plenty of green space. The Works Precinct contains well-planned warehousing and light industries, fully supported by quality infrastructure. The Commercial Precinct includes Apartments, an office park and retail centre, which complements the corporate and community experience at Ham Pal Villas. Other features and facilities at Ham Palm Villas include a medical centre, an international school, a park and recreational areas for the community to enjoy. All the above combined make Ham Palm Villas the ultimate address for today’s needs!</p> 
  <p>Ham Group of Companies, as the master developers, is providing fully-serviced Residential Units with world-class infrastructure for both Local and Foreigner to purchase. Ham Palm Villas is distinctly zoned into Residential, Works and Commercial. Precincts. The Residential Precincts have beautifully designed homes in a serene and scenic environment, boasting plenty of green space. The Works Precinct contains well-planned warehousing and light industries, fully supported by quality infrastructure. The Commercial Precinct includes Apartments, an office park and retail centre, which complements the corporate and community experience at Ham Pal Villas. Other features and facilities at Ham Palm Villas include a medical centre, an international school, a park and recreational areas for the community to enjoy. All the above combined make Ham Palm Villas the ultimate address for today’s needs!</p> 

</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<!-- end of tabs -->


        </div>
    </div>
</section>

<!-- end of content data -->

@endsection



<!-- vertical tab scripts -->

@section('myjsfile')

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

@stop

<!-- end of vertical tabs scripts -->


