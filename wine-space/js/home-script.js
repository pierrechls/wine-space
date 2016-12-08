function simulate_remove(){
	$('#link_remove_first_product').trigger( 'click' );
}

function initialize() {

	var styles = [
	    {
	        "featureType": "all",
	        "elementType": "labels.text.fill",
	        "stylers": [
	            {
	                "saturation": 36
	            },
	            {
	                "color": "#ffffff"
	            },
	            {
	                "lightness": 40
	            }
	        ]
	    },
	    {
	        "featureType": "all",
	        "elementType": "labels.text.stroke",
	        "stylers": [
	            {
	                "visibility": "on"
	            },
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 16
	            }
	        ]
	    },
	    {
	        "featureType": "all",
	        "elementType": "labels.icon",
	        "stylers": [
	            {
	                "visibility": "off"
	            }
	        ]
	    },
	    {
	        "featureType": "administrative",
	        "elementType": "geometry.fill",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 20
	            },
	            {
	                "gamma": "1.00"
	            }
	        ]
	    },
	    {
	        "featureType": "administrative",
	        "elementType": "geometry.stroke",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 17
	            },
	            {
	                "weight": 1.2
	            }
	        ]
	    },
	    {
	        "featureType": "landscape",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 20
	            },
	            {
	                "gamma": "0.00"
	            }
	        ]
	    },
	    {
	        "featureType": "poi",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 21
	            },
	            {
	                "gamma": "0.00"
	            }
	        ]
	    },
	    {
	        "featureType": "road.highway",
	        "elementType": "geometry.fill",
	        "stylers": [
	            {
	                "color": "#b7a56d"
	            },
	            {
	                "lightness": 17
	            },
	            {
	                "gamma": "0.00"
	            }
	        ]
	    },
	    {
	        "featureType": "road.highway",
	        "elementType": "geometry.stroke",
	        "stylers": [
	            {
	                "color": "#b7a56d"
	            },
	            {
	                "lightness": 29
	            },
	            {
	                "weight": "0.01"
	            },
	            {
	                "saturation": "0"
	            },
	            {
	                "gamma": "0.00"
	            }
	        ]
	    },
	    {
	        "featureType": "road.arterial",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "color": "#b7a56d"
	            },
	            {
	                "lightness": 18
	            }
	        ]
	    },
	    {
	        "featureType": "road.local",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "color": "#b7a56d"
	            },
	            {
	                "lightness": 16
	            }
	        ]
	    },
	    {
	        "featureType": "transit",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 19
	            }
	        ]
	    },
	    {
	        "featureType": "water",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 17
	            },
	            {
	                "gamma": "1.00"
	            }
	        ]
	    }
	];

	var styledMap = new google.maps.StyledMapType(styles, {name: "Gmap stylée"});
	var myLatlng = new google.maps.LatLng(43.085800, 2.226390);
	var mapOptions = {
		center: new google.maps.LatLng(43.085800, 2.226390),
		zoom: 12,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
	};
        
	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'My Home'
	});
		
	map.mapTypes.set('map_style', styledMap);
	map.setMapTypeId('map_style');
}

google.maps.event.addDomListener(window, 'load', initialize);