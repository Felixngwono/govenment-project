// Initialize and display the map
function initMap() {
    // Specify the coordinates where you want to center the map on Kenya
    const mapCenter = { lat: 1.2921, lng: 36.8219 }; // Coordinates for Kenya

    // Create a new map instance
    const map = new google.maps.Map(document.getElementById("map"), {
        center: mapCenter, // Set the map center to Kenya
        zoom: 6, // Adjust the zoom level as needed
    });

    // You can add markers, polygons, and other map elements here
    // Example marker:
    const marker = new google.maps.Marker({
        position: mapCenter, // Marker position (centered on Kenya)
        map: map, // Map to attach the marker to
        title: "Kenya", // Tooltip text
    });
}
