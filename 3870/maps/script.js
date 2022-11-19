const places = document.querySelectorAll('#map-menu a');
places.forEach(el => {
	el.onclick = e => {
		const { lat, lng } = e.target.dataset;
		selectPlace([ lat, lng ]);
	}
});

const map = L.map('map', {
	center: [0.478491, 101.380996],
	zoom: 16
});
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

let marker;
const selectPlace = position => {
	marker && map.removeLayer(marker);
	marker = L.marker(position).addTo(map);
	map.setView(position, 16.5);
}
