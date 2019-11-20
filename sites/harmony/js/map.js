function initMap() {
  var myLatLng = {lat: 36.62151, lng: -78.561292}; // 緯度・経度
  var map = new google.maps.Map(document.getElementById('map1'), { // HTMLのIDセレクタ名
        center: myLatLng,
        zoom: 16, // 拡大率設定
        styles: 
        // ここから
        [
          {
            "featureType": "landscape",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "color": "#c8cbec"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "color": "#cabfdb"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "color": "#f0f896"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "color": "#634181"
              },
              {
                "weight": 1.5
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "color": "#b080b7"
              },
              {
                "weight": 1
              }
            ]
          }
        ]
        // ここまで
  });
  // マーカー表示
  var icon = new google.maps.MarkerImage('https://cdn.mapmarker.io/api/v1/pin?size=80&background=%23653294&icon=fa-heart&color=%23FFFFFF&voffset=0&hoffset=0&',/*画像url*/
  new google.maps.Size(70,84),/*アイコンサイズ*/
  new google.maps.Point(0,0)/*アイコン位置*/
);

  var marker = new google.maps.Marker({
        map: map,
        icon: icon,
        position: myLatLng,
        animation: google.maps.Animation.DROP
  });


}


// function googleMap() {
//   var latlng = new google.maps.LatLng(36.621528,-78.563261);/* 座標 */
//   var myOptions = {
//     zoom: 16, /*拡大比率*/
//     center: latlng,
//     mapTypeControlOptions: { mapTypeIds: ['style', google.maps.MapTypeId.ROADMAP] }
//   };
//   var map = new google.maps.Map(document.getElementById('map1'), myOptions);
//   /*アイコン設定*/
//   var icon = new google.maps.MarkerImage('https://cdn.mapmarker.io/api/v1/pin?size=80&background=%23653294&icon=kiss-beam&color=%23FFFFFF',/*画像url*/
//       new google.maps.Size(70,84),/*アイコンサイズ*/
//       new google.maps.Point(0,0)/*アイコン位置*/
//   );
//   var markerOptions = {
//     position: latlng,
//     map: map,
//     icon: icon,
//     title: '株式会社サンプル',/*タイトル*/
//     animation: google.maps.Animation.DROP/*アニメーション*/
//   };
//   var marker = new google.maps.Marker(markerOptions);
//   /*取得スタイルの貼り付け*/
//   var styleOptions = [
//     {
//       "stylers": [
//         { "hue": '#4c3880' }
//       ]
//     }
//   ];
//   var styledMapOptions = { name: '株式会社サンプル' }/*地図右上のタイトル*/
//   var sampleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
//   map.mapTypes.set('style', sampleType);
//   map.setMapTypeId('style');
// };
// google.maps.event.addDomListener(window, 'load', function() {
//     googleMap();
// });