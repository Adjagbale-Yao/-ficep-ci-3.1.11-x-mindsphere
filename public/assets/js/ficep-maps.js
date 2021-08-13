(function($) {

    $("#map").ready(function() {

        //set coords
        var coords = [
            new ol.geom.Point(ol.proj.fromLonLat([9.167256012477948, 45.46584585379254])),
            new ol.geom.Point(ol.proj.fromLonLat([5.37366658814396, 43.29471766918078])),
            new ol.geom.Point(ol.proj.fromLonLat([16.395785112686955, 48.24463816025241])),
            new ol.geom.Point(ol.proj.fromLonLat([2.4154874455329494, 48.85037897331464])),
            new ol.geom.Point(ol.proj.fromLonLat([-0.3587451695384301, 39.46032249703744]))
        ]
        var attribution = new ol.control.Attribution({
            collapsible: false
        });

        var markerStyle = new ol.style.Style({
            image: new ol.style.Icon({
                anchor: [0.5, 1],
                anchorXUnits: 'fraction',
                anchorYUnits: 'fraction',
                scale:1.1,
                src: 'https://upload.wikimedia.org/wikipedia/commons/9/92/Map_marker_icon_%E2%80%93_Nicolas_Mollet_%E2%80%93_Factory_%E2%80%93_Industry_%E2%80%93_Default.png'
            })
        });
        var machines = data;
        var map = new ol.Map({
            controls: ol.control.defaults({ attribution: false }).extend([attribution]),
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM({
                        attributions: [ol.source.OSM.ATTRIBUTION, 'Tiles courtesy of <a href="https://geo6.be/">GEO-6</a>'],
                        maxZoom: 18
                    })
                })
            ],
            target: 'map',
            view: new ol.View({
                center: ol.proj.fromLonLat([12.496366, 41.902782]), //langitude,longitude
                maxZoom: 18,
                zoom: 5
            })
        });

        // MARKERS
        var layer;
        for (let i = 0; i < $(machines).length; i++) {
            layer = new ol.layer.Vector({
                source: new ol.source.Vector({
                    features: [
                        new ol.Feature({
                            geometry: coords[i],
                            color: 'red',
                            name: $(machines).eq(i).attr('name'),
                            customer: $(machines).eq(i).attr('customer'),
                            location: $(machines).eq(i).attr('plant')
                        }),
                    ]
                }),
                style: markerStyle
            });
            map.addLayer(layer);
        }

        const overlayCard = document.querySelector(".overlay-card");
        const overlayLayer = new ol.Overlay({
            element: overlayCard
        })
        map.addOverlay(overlayLayer);

        map.on('click', function(e) {
            overlayLayer.setPosition(undefined);
            map.forEachFeatureAtPixel(e.pixel, function(feature, layer) {
                let clickeCoordinate = e.coordinate;
                let clickedFeatureName = feature.get('name');
                let clickedFeatureCustomer = feature.get('customer');
                let clickedFeatureLocation = feature.get('location');
                overlayLayer.setPosition(clickeCoordinate);
                document.getElementById('machine-name').innerHTML = clickedFeatureName;
                document.getElementById('machine-customer').innerHTML = clickedFeatureCustomer;
                document.getElementById('machine-location').innerHTML = clickedFeatureLocation;
                document.getElementById('machine-supervision-link').href = baseurl + '/' + clickedFeatureName;

            })
        })


    });

})(jQuery);