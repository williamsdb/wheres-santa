latitude = document.getElementById('lat').value;
longitude = document.getElementById('long').value;

const map = L.map('map').setView([latitude, longitude], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

// Define the custom icon
const customIcon = L.icon({
    iconUrl: 'santa.png',  // Replace with the path to your custom image
    iconSize: [38, 38],                    // Size of the icon (width, height)
    iconAnchor: [19, 38],                  // Point where the icon is anchored on the map
    popupAnchor: [0, -40]                  // Point where the popup appears relative to the icon
});

// Add a marker with the custom icon
L.marker([latitude, longitude], { icon: customIcon })
    .addTo(map)
    .bindPopup('Santa is here!')
    .openPopup();