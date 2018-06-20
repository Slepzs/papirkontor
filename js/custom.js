/*  function totalIt() {
      var input = document.getElementsByName("product");
      var total = 100;
      for (var i = 0; i < input.length; i++) {
          if (input[i].checked) {
            total += parseFloat(input[i].value);
          }
        }
        document.getElementById("total").value = total.toFixed(2) + " Kr";
      }

      function totalhoodie() {
        var input = document.getElementsByName("product");
        var total = 130;
        for (var i = 0; i < input.length; i++) {
          if (input[i].checked) {
            total += parseFloat(input[i].value);
          }
        }
        document.getElementById("total").value = total.toFixed(2) + " Kr";
      } */


  $("#calc").hide();
$('input[type=file]').change(function(e){
  $("#calc").show();
});
















































  var $date = new Date();
  var $time = $date.getUTCHours() + 2;

  if($time >= 22) {
  function initMap() {
    var Belgiensvej = {lat: 54.74799059999999, lng: 11.889566699999932};
    var map = new google.maps.Map(document.getElementById('map'), {
      scrollwheel: false,
      zoom: 16,
      center: Belgiensvej,
      styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#242f3e"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#746855"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#242f3e"
      }
    ]
  },
  {
    "featureType": "administrative.locality",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#d59563"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#d59563"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#263c3f"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#6b9a76"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#38414e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#212a37"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9ca5b3"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#746855"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#1f2835"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#f3d19c"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#2f3948"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#d59563"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#17263c"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#515c6d"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#17263c"
      }
    ]
  }
]
    });
    var marker = new google.maps.Marker({
      position: Belgiensvej,
      map: map
    });
  }
} else if($time <= 22) {
  function initMap() {
    var Belgiensvej = {lat: 54.74799059999999, lng: 11.889566699999932};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: Belgiensvej
    });
    var marker = new google.maps.Marker({
      position: Belgiensvej,
      map: map
    });
  }
}

/*  $(document).ready(function() {
    $(window).scroll(function () {
if ( $(this).scrollTop() > 50) {
   $(".uk-navbar").css("height", "95px");
   $(".logo img").css("width", "80px");
   $(".uk-navbar-nav li a").css("font-size", "1em");
} else if( $(this).scrollTop() > 0) {
  $(".uk-navbar").css("height", "116px");
  $(".logo img").css("width", "120px");
  $(".uk-navbar-nav li a").css("font-size", "1.2em");
}
  });
}); */

  $(document).ready(function() {
    $("#lightSlider").lightSlider({
      item: 1,
      autoWidth: false,
      slideMove: 1, // slidemove will be 1 if loop is true
      slideMargin: 10,
      mode: "slide",

      useCSS: true,
      cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
      easing: 'linear', //'for jquery animation',////
      loop: true,
      speed: 800, //ms'
      auto: true,
      slideEndAnimation: true,
      pause: 6000,
    });
  });

  $(document).ready(function() {
    $(".lightslide-tshirt").lightSlider({
    item: 1,
    loop:true,
    slideMargin: 5,
    });
  });


  $(document).ready(function() {
    var $date = new Date();
    var $day = $date.getDay();

    switch($day) {
      case 0:
      $("#Sondag").addClass("idag");
      break;
      case 1:
      $("#Mandag").addClass("idag");
      break;
      case 2:
      $("#Tirsdag").addClass("idag");
      break;
      case 3:
      $("#Onsdag").addClass("idag");
      break;
      case 4:
      $("#Torsdag").addClass("idag");
      break;
      case 5:
      $("#Fredag").addClass("idag");
      break;
      case 6:
      $("#Lordag").addClass("idag");
      break;
    }
  });



    var bar = document.getElementById('js-progressbar');

    UIkit.upload('.js-upload', {

        url: '',
        multiple: true,

        beforeSend: function () {
            console.log('beforeSend', arguments);
        },
        beforeAll: function () {
            console.log('beforeAll', arguments);
        },
        load: function () {
            console.log('load', arguments);
        },
        error: function () {
            console.log('error', arguments);
        },
        complete: function () {
            console.log('complete', arguments);
        },

        loadStart: function (e) {
            console.log('loadStart', arguments);

            bar.removeAttribute('hidden');
            bar.max = e.total;
            bar.value = e.loaded;
        },

        progress: function (e) {
            console.log('progress', arguments);

            bar.max = e.total;
            bar.value = e.loaded;
        },

        loadEnd: function (e) {
            console.log('loadEnd', arguments);

            bar.max = e.total;
            bar.value = e.loaded;
        },

        completeAll: function () {
            console.log('completeAll', arguments);

            setTimeout(function () {
                bar.setAttribute('hidden', 'hidden');
            }, 1000);

            alert('Upload Completed');
        }

    });
