/**
 * Created by aaron on 11/06/2016.
 */

var map;
var geocoder;
var mapOptions = { center: new google.maps.LatLng(0.0, 0.0), zoom: 2,
    mapTypeId: google.maps.MapTypeId.ROADMAP };

function initialize() {
    var myOptions = {
        center: new google.maps.LatLng(51.3289558, 0.6154312 ),
        zoom: 10,
        draggable: false,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
    };


    var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions),
        icon = "/images/map-pin.png";

    var Ashford = new google.maps.Marker({
        map: map,
        animation: google.maps.Animation.DROP,
        position: {lat: 51.1465, lng: 0.8750},
        title: 'Ashford Branch - S&B Developments',
        icon: icon
    });
    Ashford.addListener('click', function() {
        window.location.href = "/coverage/";
    });

    var Rochester = new google.maps.Marker({
        map: map,
        animation: google.maps.Animation.DROP,
        position: {lat: 51.3891723, lng: 0.5062525},
        title: 'Medway Branch - S&B Developments',
        icon: icon
    });
    Rochester.addListener('click', function() {
        window.location.href = "/contact-us/rochester/";
    });

    var Maidstone = new google.maps.Marker({
        map: map,
        animation: google.maps.Animation.DROP,
        position: {lat: 51.2689466, lng: 0.525929},
        title: 'Maidstone Branch - S&B Developments',
        icon: icon
    });
    Maidstone.addListener('click', function() {
        window.location.href = "/contact-us/maidstone/";
    });


    var Sittingbourne = new google.maps.Marker({
        map: map,
        animation: google.maps.Animation.DROP,
        position: {lat: 51.3417055, lng: 0.7328952},
        title: 'Sittingbourne Branch - S&B Developments',
        icon: icon
    });
    Sittingbourne.addListener('click', function() {
        window.location.href = "/contact-us/sittingbourne/";
    });

}



function toggleBounce() {
    if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
    } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
    }
}
//This will render map on load
google.maps.event.addDomListener(window, 'load', initialize);