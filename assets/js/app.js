(function($) {

  $(document).ready(function() {

    $('.slider').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true
    });


    // Leaflet Map
    var mymap = L.map('leafletMap').setView([43.848900, -79.020986], 16);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      maxZoom: 18,
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox.streets'
    }).addTo(mymap);

    L.marker([43.894260, -78.868295]).addTo(mymap)
      .bindPopup(`<div class='mapPopUp'><h1>Durham Community Legal Clinic</h1><h2>200 John Street West, Unit B1, Oshawa</h2><h3>By apointment only</h4><h3>call 905-728-7321 ext. 259</h3></div>`);

    // Diverse Financial Group
    L.marker([43.848900, -79.020986]).addTo(mymap)
      .bindPopup(`<div class='mapPopUp'><h1>Diverse Financial Group</h1><h2>190 Harwood Avenue South (inside G Centre), Ajax</h2><h3>By apointment only</h3><h4>Current and prior year returns</h4><h3>call 647-887-8725</h3></div>`).openPopup();

    L.circle([43.849875, -79.035955], 250, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("I am a circle.");

    L.polygon([
      [43.847079, -79.021547],
      [43.846071, -79.019101],
      [43.848038, -79.018435]
    ]).addTo(mymap).bindPopup("I am a polygon.");


    var popup = L.popup();

    function onMapClick(e) {
      popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
    }

    mymap.on('click', onMapClick);

    // -------     C O N T R O L L E R     -------
    $(document).on("click", "body .map-list-option", function() {

      var id = $(this).attr("data-id");
      mymap.setView(new L.LatLng(43.894260, -78.868295), 16, {
        animation: true
      });

      console.log(mymap.marker);

      console.log(id);
    });
  });





})(jQuery);