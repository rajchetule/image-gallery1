<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('my_gallery/assets/css/bootstrap.min.css') }}" >

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('my_gallery/assets/css/style.css') }}">

    <title>Image Gallary</title>
  </head>
  <body >
    <!-- header section -->
    @include('website.elements.header')

    <!-- main section -->
    @yield('content')

    <!-- footer  section -->
    @include('website.elements.footer')


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
    <script src="{{ asset('my_gallery/assets/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('my_gallery/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script> speed = 600</script> -->
    <script type="text/javascript">

      $(document).ready(function(){
      $(".reviews").each(function(){
        var This = $(this) ;
        var Nums = This.find(".panel").size() ;
        This.find(".panel:first").addClass("PanelAct");
        This.append("<div class='control'></div>") ;
        This.find(".panel").not(".PanelAct")
          .css("left","100%")
        for ( i=0 ; i<Nums ; i++) {
          This.find(".control").append("<span></span>") ;
        }
        This.find(".control span:eq(0)").addClass("ContActive");

        This.find(".control span").click(Reviews);

        function Reviews(){
          var loc = $(this).index();
          var ActivLoc = This.find(".ContActive").index();

          $(this).addClass("ContActive")
            .siblings().removeAttr("class");

          if ( loc > ActivLoc ) {
            var Dire = '100%'
            var IDire = '-100%'
          }
          if ( loc < ActivLoc ) {
            var Dire = '-100%'
            var IDire = '100%'
          }

          This.find(".panel").not(".PanelAct")
          .css("left",Dire) ;
          This.find(".panel:eq("+loc+")")
          .animate({'left':'0'},speed)
          .addClass("PanelAct")
          .siblings(".PanelAct")
          .removeClass("PanelAct")
          .animate({'left':IDire},speed);
        }
      });
    });

    </script>



  </body>
</html>

