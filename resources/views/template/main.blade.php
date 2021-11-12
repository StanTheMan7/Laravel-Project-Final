<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home Page || Handstand</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- All css here -->
        
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/shortcode/shortcodes.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
      
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>

        @include('partials.header')
        @yield('content')


    		<!-- All js here -->
       
            <script src="{{asset('js/app.js')}}"></script>
            <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <script src="{{asset('js/owl.carousel.min.js')}}"></script>
            <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
            <script src="{{asset('js/ajax-mail.js')}}"></script>
            <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>   		
            <script src="{{asset('js/slick.min.js')}}"></script>    
            <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
            <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>  
            <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>  
            <script src="{{asset('js/plugins.js')}}"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM "></script> 
            <script src="{{asset('js/main.js')}}"></script>
            <script>
                function initialize() {
                  var mapOptions = {
                    zoom: 15,
                    scrollwheel: false,
                    center: new google.maps.LatLng(23.763494, 90.432226)
                  };
    
                  var map = new google.maps.Map(document.getElementById('googleMap'),
                      mapOptions);
    
    
                  var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation:google.maps.Animation.BOUNCE,
                    icon: 'img/map-marker.png',
                    map: map
                  });
                    
                }
                    
                google.maps.event.addDomListener(window, 'load', initialize);
            </script>
        </body>
    </html>
    