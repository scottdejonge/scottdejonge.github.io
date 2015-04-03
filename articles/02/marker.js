var marker = new google.maps.Marker({
    map: map,
    title: place.name,
    position: place.geometry.location,
    animation: google.maps.Animation.DROP,
    icon: {
        path: 'M 100 0 L 0 0 L 0 100 L 35 100 L 50 120 L 65 100 L 100 100 Z',
        fillColor: '#FFFF00',
        fillOpacity: 1,
        strokeColor: '',
        strokeWeight: 0,
        scale: 1/2
    }
});