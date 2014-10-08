/**
 * Created by Joeri Smits on 04/05/14.
 */

(function (window, undefined) {
    // Prepare our Variables
    var $ = window.jQuery,
        document = window.document;

    // Wait for Document
    $(function () {
        var $map = $('#map'),
            point = new google.maps.LatLng(51.866861, 5.765711),
            MY_MAPTYPE_ID = 'custom_style',
            MY_COLOURS = {
                white: '#ffffff',
                black: '#212328',
                dark: '#80807e',
                mid: '#e4e4e4',
                light: '#ededeb',
                blue: '#cadce7'
            },
            featureOpts = [
                {
                    stylers: [
                        { saturation: -100 },
                        { weight: 1 }]
                },
                {
                    featureType: 'water',
                    stylers: [
                        { color: MY_COLOURS.blue },
                        { weight: 0.1 }]
                },
                {
                    elementType: 'labels',
                    stylers: [
                        { visibility: 'off' }]
                },
                {
                    featureType: 'administrative.locality',
                    elementType: 'labels',
                    stylers: [
                        { visibility: 'on' }]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'labels',
                    stylers: [
                        { visibility: 'off' }]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'labels.text',
                    stylers: [
                        { visibility: 'on' }]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry.fill',
                    stylers: [
                        { color: MY_COLOURS.white },
                        { weight: 5 }]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry.stroke',
                    stylers: [
                        { color: MY_COLOURS.mid },
                        { weight: 2 }]
                },
                {
                    featureType: 'road.arterial',
                    elementType: 'geometry.fill',
                    stylers: [
                        { color: MY_COLOURS.white },
                        { weight: 4 }]
                },
                {
                    featureType: 'road.arterial',
                    elementType: 'geometry.stroke',
                    stylers: [
                        { color: MY_COLOURS.mid },
                        { weight: 2, }]
                },
                {
                    featureType: 'road.arterial',
                    elementType: 'labels',
                    stylers: [
                        { visibility: 'on' }]
                }],
            myMapOptions = {
                zoom: 12,
                center: point,
                mapTypeControl: false,
                mapTypeId: MY_MAPTYPE_ID,
                scrollwheel: true,
                panControl: false,
                zoomControl: false,
                streetViewControl: false
            },
            map = new google.maps.Map($map.get(0), myMapOptions),
            image = {
                url: 'img/slide4/marker.png',
                size: new google.maps.Size(85, 100),
                scaledSize: new google.maps.Size(43, 50),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(15, 41)
            },
            marker = new google.maps.Marker({
                draggable: false,
                icon: image,
                map: map,
                position: point
            }),
            customMapType = new google.maps.StyledMapType(featureOpts);

        map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
        $(window).on('resized', function () {
            map.setCenter(point);
        });

    }); // end onDomLoad

})(window); // end closure