(function (L) {

    const mapid = 'leaflet-map';
    const element = document.getElementById(mapid);

    if (L === undefined) {
        return;
    }

    if (!element) {
        console.error('Cannot find Leaflet Map target element.');
        return;
    }

    element.style.height = '300px';

    const map = L.map(mapid).setView([34.504050, 69.246456], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([34.504050, 69.246456])
        .addTo(map)
        .bindPopup('Afghan Evaluation Society')
        .openPopup();

}(L));
