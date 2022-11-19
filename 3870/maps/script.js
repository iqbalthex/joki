const places = document.querySelectorAll('#map-menu li a');
const map = new google.maps.Map(document.getElementById("map"), {
	center: new google.maps.LatLng(-8.5830695,116.3202515),
	zoom: 9,
});

places.forEach(el => {
	el.onclick = function(e){
		const { lat, lng } = e.target.dataset;
		// console.table({ lat, lng });
		selectPlace({ lat, lng });
	}
});

let marker;
function selectPlace(position){
	if(marker){
		marker.setPosition(position);
	} else {
		marker = new google.maps.Marker({ map, position });
	}
}
