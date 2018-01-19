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


  <!--======================================= Header ==========================================-->

var dbImageHeaderSlide = firebase.database().ref('website/index/header').child('imageSlideFirst');
  dbImageHeaderSlide.on('value',snap => {
  $('#imgSlideFirst').attr("style","background-image:url('"+snap.val()+"');");
  });

var dbImageHeaderSlide = firebase.database().ref('website/index/header').child('imageSlideSecond');
  dbImageHeaderSlide.on('value',snap => {
    $('#imgSlideSecond').attr("style","background-image:url('"+snap.val()+"');");
  });

var dbTopicHeaderSlide = firebase.database().ref('website/index/header').child('textTopicFirst');
  dbTopicHeaderSlide.on('value',snap => {
    $('#topicHeaderFirst').text(snap.val());
  });

var dbTopicHeaderSlide = firebase.database().ref('website/index/header').child('textTopicSecond');
  dbTopicHeaderSlide.on('value',snap => {
    $('#topicHeaderSecond').text(snap.val());
  });

var dbDetailHeaderSlide = firebase.database().ref('website/index/header').child('textDetailFirst');
  dbDetailHeaderSlide.on('value',snap => {
    $('#detailHeaderFirst').text(snap.val());
  });

var dbDetailHeaderSlide = firebase.database().ref('website/index/header').child('textDetailSecond');
  dbDetailHeaderSlide.on('value',snap => {
    $('#detailHeaderSecond').text(snap.val());
  });

  <!--=======================================================================================-->

  <!--======================================= Course Offered ==========================================-->

var dbDetailHeaderSlide = firebase.database().ref('website/index/courseoffered').child('imageBachelor');
  dbDetailHeaderSlide.on('value',snap => {
    $('#imgBachelor').attr("src",snap.val());
  });

var dbDetailHeaderSlide = firebase.database().ref('website/index/courseoffered').child('imageMaster');
  dbDetailHeaderSlide.on('value',snap => {
    $('#imgMaster').attr("src",snap.val());
  });

var dbDetailHeaderSlide = firebase.database().ref('website/index/courseoffered').child('imageDoctor');
  dbDetailHeaderSlide.on('value',snap => {
    $('#imgDoctor').attr("src",snap.val());
  });

  <!--==============================================================================================-->


  <!--======================================= Info ==========================================-->

  <!------------------------------------ Bachelor First ---------------------------------------->

  var dbInfoBachelor = firebase.database().ref('website/index/info/infobachelor').child('img_first');
    dbInfoBachelor.on('value',snap => {
      $('#imgInfoBachelorFirst').attr("src",snap.val());
    });

  var dbInfoBachelor = firebase.database().ref('website/index/info/infobachelor').child('topic_first');
    dbInfoBachelor.on('value',snap => {
      $('#topicInfoBachelorFirst').text(snap.val());
    });

  var dbInfoBachelor = firebase.database().ref('website/index/info/infobachelor').child('link_first');
    dbInfoBachelor.on('value',snap => {
      $('#linkInfoBachelorFirst').attr("href",snap.val());
    });
    <!-------------------------------------------------------------------------------------------->

    <!------------------------------------ Bachelor Second ---------------------------------------->

    var dbInfoBachelor = firebase.database().ref('website/index/info/infobachelor').child('img_second');
      dbInfoBachelor.on('value',snap => {
        $('#imgInfoBachelorSecond').attr("src",snap.val());
      });

    var dbInfoBachelor = firebase.database().ref('website/index/info/infobachelor').child('topic_second');
      dbInfoBachelor.on('value',snap => {
        $('#topicInfoBachelorSecond').text(snap.val());
      });

    var dbInfoBachelor = firebase.database().ref('website/index/info/infobachelor').child('link_second');
      dbInfoBachelor.on('value',snap => {
        $('#linkInfoBachelorSecond').attr("href",snap.val());
      });
    <!-------------------------------------------------------------------------------------------->

    <!------------------------------------ Bachelor Third ---------------------------------------->

      var dbInfoBachelor = firebase.database().ref('website/index/info/infobachelor').child('img_third');
        dbInfoBachelor.on('value',snap => {
          $('#imgInfoBachelorThird').attr("src",snap.val());
        });

      var dbInfoBachelor = firebase.database().ref('website/index/info/infobachelor').child('topic_third');
        dbInfoBachelor.on('value',snap => {
          $('#topicInfoBachelorThird').text(snap.val());
        });

      var dbInfoBachelor = firebase.database().ref('website/index/info/infobachelor').child('link_third');
        dbInfoBachelor.on('value',snap => {
          $('#linkInfoBachelorThird').attr("href",snap.val());
        });

      <!------------------------------------------------------------------------------------------>


      <!------------------------------------ Graduate First ---------------------------------------->

      var dbInfoGraduate = firebase.database().ref('website/index/info/infograduate').child('img_first');
        dbInfoGraduate.on('value',snap => {
          $('#imgInfoGraduateFirst').attr("src",snap.val());
        });

      var dbInfoGraduate = firebase.database().ref('website/index/info/infograduate').child('topic_first');
        dbInfoGraduate.on('value',snap => {
          $('#topicInfoGraduateFirst').text(snap.val());
        });

      var dbInfoGraduate = firebase.database().ref('website/index/info/infograduate').child('link_first');
        dbInfoGraduate.on('value',snap => {
          $('#linkInfoGraduateFirst').attr("href",snap.val());
        });
        <!-------------------------------------------------------------------------------------------->

        <!------------------------------------ Graduate Second ---------------------------------------->

        var dbInfoGraduate = firebase.database().ref('website/index/info/infograduate').child('img_second');
          dbInfoGraduate.on('value',snap => {
            $('#imgInfoGraduateSecond').attr("src",snap.val());
          });

        var dbInfoGraduate = firebase.database().ref('website/index/info/infograduate').child('topic_second');
          dbInfoGraduate.on('value',snap => {
            $('#topicInfoGraduateSecond').text(snap.val());
          });

        var dbInfoGraduate = firebase.database().ref('website/index/info/infograduate').child('link_second');
          dbInfoGraduate.on('value',snap => {
            $('#linkInfoGraduateSecond').attr("href",snap.val());
          });
        <!-------------------------------------------------------------------------------------------->

        <!------------------------------------ Graduate Third ---------------------------------------->

          var dbInfoGraduate = firebase.database().ref('website/index/info/infograduate').child('img_third');
            dbInfoGraduate.on('value',snap => {
              $('#imgInfoGraduateThird').attr("src",snap.val());
            });

          var dbInfoGraduate = firebase.database().ref('website/index/info/infograduate').child('topic_third');
            dbInfoGraduate.on('value',snap => {
              $('#topicInfoGraduateThird').text(snap.val());
            });

          var dbInfoGraduate = firebase.database().ref('website/index/info/infograduate').child('link_third');
            dbInfoGraduate.on('value',snap => {
              $('#linkInfoGraduateThird').attr("href",snap.val());
            });

          <!------------------------------------------------------------------------------------------>

<!--==============================================================================================-->


});
