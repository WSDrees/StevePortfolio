/* Google Maps API */
(function(){
var map;
var marker;
    function initialize() {
    var myLatLng = new google.maps.LatLng(28.57440, -81.30503);
    var mapOptions = {
        zoom: 12,
        center: myLatLng
    };

    map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
    marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: "Jennings GP"
        });
    }
    
    google.maps.event.addDomListener(window, 'load', initialize);

})();