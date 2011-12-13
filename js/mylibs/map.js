// JavaScript Document



function googleMapInit(map_canvas) {
      if (GBrowserIsCompatible()) {
		  
		  
		// Create the marker and corresponding information window
		function createInfoMarker(point, address) {
		   var marker = new google.maps.Marker(point);
		   google.maps.Event.addListener(marker, "click", function() {
				 marker.openInfoWindowHtml(address);
});
		   unLoaders.push(marker); //  save it for later
		  return marker;
		}

  
        var map    = new google.maps.Map2(map_canvas);
		
		var center = new google.maps.LatLng(13.702885,-89.215078);
		map.setCenter(center, 15);
		map.setUIToDefault();
		var point  = new google.maps.LatLng(13.702885,-89.215078);
		var address = "<strong>Cabrera Martinez S.A. de C.V.</strong> <br />Condominio Metro 2000 Local C21<br /> 47 Avenida Norte<br />Entre 1a Calle Poniente y Alameda Juan Pablo II<br />San Salvador, El Salvador";
		
		var marker_pin = createInfoMarker(point, address);
		
		map.addOverlay(marker_pin);
		
	    //	marker.openInfoWindowHtml(address);
		
      }
	  

    }

var unload=function(){
  for(var i=unLoaders.length-1;i>-1;i--){
    unLoaders[i].object=null; 
  }
};


