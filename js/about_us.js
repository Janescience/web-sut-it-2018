$(document).ready(function(){
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyA4WVo9ZjdTKHW1ALNRwbuoqx5uxP8gsWM",
    authDomain: "itms-management-system.firebaseapp.com",
    databaseURL: "https://itms-management-system.firebaseio.com",
    projectId: "itms-management-system",
    storageBucket: "itms-management-system.appspot.com",
    messagingSenderId: "131587290108"
  };
  firebase.initializeApp(config);
  var usersRef = firebase.database().ref('users');
  var latitude,longitude;


  var rootRefUser = usersRef;

rootRefUser.on("child_added",snap => {

  var image = snap.child("image").val();
  var name = snap.child("name").val();
  var telephone = snap.child("telephone").val();
  var email = snap.child("email").val();
  var office = snap.child("office").val();
  var level = snap.child("level").val();
  var status;

  if(office == "border:8px solid #00ff00;"){
  status="สามารถเข้าพบได้";
}else if(office == "border:8px solid #0099ff;"){
    status="ไม่อยู่";
  }else if(office == "border:8px solid #ffcc00;"){
    status="กรุณารอสักครู่";
  }else if(office == "border:8px solid #ff3300;"){
    status="ห้ามรบกวน";
  }

  if(level == "คณาจารย์และบุคลากร"){

  $('#list_teacher').append("<div class='"+'col-lg-4 text-center'+"'><div class='"+'hovereffect'+"'><img src='"+image+"' class='"+'avatar'+"' style='"+office+"'>"+
                            "<div class='"+'overlay'+"'><div class='"+'rotate'+"'><p id='"+snap.key+"' class='"+'group1'+"'><a class='"+'googleMap'+"' href='"+'javascript:void(0)'+"'><i class='"+'fa fa-map-marker'+"'></i></a><a href='"+'#'+"'><i class='"+'fa fa-graduation-cap'+"'></i></a></p>"+
                            "<p class='"+'group2'+"' id='"+snap.key+"'><a href='"+'#'+"'><i class='"+'fa fa-user'+"'></i></a><a class='"+'officeHour'+"'href='"+'javascript:void(0)'+"'><i class='"+'fa fa-desktop'+"'></i></a></p></div></div></div>"+
                            "<h6><span> - "+status+" - </span></h6><br><h4><span>"+name+"</span></h4>"+
                            "<button type='"+'button'+"' class='"+'btn btn-info btn-xs'+"'>"+'ประวัติและผลงาน'+"</button>"+
                            "<p><i class='"+'fa fa-envelope-o'+"' aria-hidden='"+'true'+"'></i> "+email+"<br>"+
                            "<i class='"+'fa fa-phone'+"' aria-hidden='"+'true'+"'></i> "+telephone+"</p></div>");
  }
});

$('#list_teacher').on('click','.googleMap',function(){

  var id = $(this).closest('p').attr('id');
  var dblatitude = firebase.database().ref('users').child(id).child('latitude');
  dblatitude.on('value',snap =>{
    latitude=snap.val();
  });
  var dblongitude = firebase.database().ref('users').child(id).child('longitude');
  dblongitude.on('value',snap =>{
    longitude=snap.val();
  });


$('#mapModal').modal('show');
showPosition();

});

function showPosition(){
  var lat = parseFloat(latitude);
  var long = parseFloat(longitude);
   var geocoder = new google.maps.Geocoder();
   var latLng = new google.maps.LatLng(lat,long);

   var initMap = function() {
       var map = new google.maps.Map(document.getElementById('map'), {
           center: { lat: lat, lng: long},
           scrollwheel: false,
           zoom: 20
       });
       var geocoder = new google.maps.Geocoder;
       var infowindow = new google.maps.InfoWindow;
       geocodeLatLng(geocoder, map, infowindow);

   }

   var geocodeLatLng = function(geocoder, map, infowindow) {
     var input = ""+lat+","+long+"";
     var latlngStr = input.split(',', 2);
     var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
     geocoder.geocode({'location': latlng}, function(results, status) {
       if (status === 'OK') {
         if (results[0]) {
           map.setZoom(17);
           var marker = new google.maps.Marker({
             position: latlng,
             map: map
           });
           infowindow.setContent(results[0].formatted_address);
           infowindow.open(map, marker);
         } else {
           window.alert('No results found');
         }
       } else {
         window.alert('Geocoder failed due to: ' + status);
       }
     });
   }
   initMap();
} //showPositi

$('#list_teacher').on('click','.officeHour',function(){
  var id = $(this).closest('p').attr('id');
    $('#list_day').empty();
  $('#officeHourModal').modal('show');
  var dbDay = firebase.database().ref('users').child(id).child('office_hour');
dbDay.on('child_added',snap =>{
  var day = snap.child('day').val();

  var h1 = snap.child('hour_1').val();
  var h2 = snap.child('hour_2').val();
  var h3 = snap.child('hour_3').val();
  var h4 = snap.child('hour_4').val();
  var h5 = snap.child('hour_5').val();
  var h6 = snap.child('hour_6').val();
  var h7 = snap.child('hour_7').val();
  var h8 = snap.child('hour_8').val();

  $('#list_day').append("<tr id='"+snap.key+"'><td >"+day+"</td><td width='"+'120px'+"' id='"+'h1'+"' bgcolor='"+h1+"'></td><td id='"+'h2'+"' width='"+'120px'+"' bgcolor='"+h2+"'></td><td id='"+'h3'+"' width='"+'120px'+"' bgcolor='"+h3+"'>"+
                                           "</td><td id='"+'h4'+"' width='"+'120px'+"' bgcolor='"+h4+"' ></td>"+
                                           "<td id='"+'h5'+"' width='"+'120px'+"' bgcolor='"+h5+"'></td><td id='"+'h6'+"' width='"+'120px'+"' bgcolor='"+h6+"'></td><td id='"+'h7'+"' width='"+'120px'+"' bgcolor='"+h7+"'></td>"+
                                           "<td id='"+'h8'+"' width='"+'120px'+"' bgcolor='"+h8+"'></td></tr>");
});
})

rootRefUser.on("child_added",snap => {

  var image = snap.child("image").val();
  var name = snap.child("name").val();
  var telephone = snap.child("telephone").val();
  var email = snap.child("email").val();
  var office = snap.child("office").val();
  var level = snap.child("level").val();
  var status;

  if(office == "border:8px solid #00ff00;"){
  status="สามารถเข้าพบได้";
}else if(office == "border:8px solid #0099ff;"){
    status="ไม่อยู่";
  }else if(office == "border:8px solid #ffcc00;"){
    status="กรุณารอสักครู่";
  }else if(office == "border:8px solid #ff3300;"){
    status="ห้ามรบกวน";
  }


  if(level == "เจ้าหน้าที่บริหารงานทั่วไป"){

  $('#list_admin').append("<div class='"+'col-lg-4 text-center'+"'><img src='"+image+"' class='"+'avatar'+"' style='"+office+"'>"+
                            "<h6><span> - "+status+" - </span></h6><br><h4><span>"+name+"</span></h4>"+
                            "<button type='"+'button'+"' class='"+'btn btn-info btn-xs'+"'>"+'ประวัติและผลงาน'+"</button>"+
                            "<p><i class='"+'fa fa-envelope-o'+"' aria-hidden='"+'true'+"'></i> "+email+"<br>"+
                            "<i class='"+'fa fa-phone'+"' aria-hidden='"+'true'+"'></i> "+telephone+"</p></div></div>");
  }


});

rootRefUser.on("child_added",snap => {

  var image = snap.child("image").val();
  var name = snap.child("name").val();
  var telephone = snap.child("telephone").val();
  var email = snap.child("email").val();
  var office = snap.child("office").val();
  var level = snap.child("level").val();
  var status;

  if(office == "border:8px solid #00ff00;"){
  status="สามารถเข้าพบได้";
}else if(office == "border:8px solid #0099ff;"){
    status="ไม่อยู่";
  }else if(office == "border:8px solid #ffcc00;"){
    status="กรุณารอสักครู่";
  }else if(office == "border:8px solid #ff3300;"){
    status="ห้ามรบกวน";
  }

  if(level == "ผู้ช่วยสอนและวิจัย"){

  $('#list_ta').append("<div class='"+'col-lg-4 text-center'+"'><img src='"+image+"' class='"+'avatar'+"' style='"+office+"'>"+
                            "<h6><span> - "+status+" - </span></h6><br><h4><span>"+name+"</span></h4>"+
                            "<button type='"+'button'+"' class='"+'btn btn-info btn-xs'+"'>"+'ประวัติและผลงาน'+"</button>"+
                            "<p><i class='"+'fa fa-envelope-o'+"' aria-hidden='"+'true'+"'></i> "+email+"<br>"+
                            "<i class='"+'fa fa-phone'+"' aria-hidden='"+'true'+"'></i> "+telephone+"</p></div></div>");
  }
});

})
