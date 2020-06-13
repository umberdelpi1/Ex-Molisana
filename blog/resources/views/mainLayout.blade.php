<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php Ex 9</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <script src="/js/app.js" charset="utf-8"></script>
  </head>
  <body>
      @include ("header")

    <section>
      @include ("section")
    </section>

    <main>
      @yield ("pasta")
    </main>

      @include ("footer")

    <script>

      function initMap() {

        var molise = {lat: 41.400, lng: 14.300};

        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: molise});

        var marker = new google.maps.Marker({position: molise, map: map});
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYiOF689tAwd7Py1Whl4KooEb-nUkFPpQ&callback=initMap"
    async defer></script>
  </body>
</html>
