var path = window.location.pathname;
var page = path.split("/").slice(-2, -1);
$('#showBanner2').hide();
$(".btn").hover(function () {

            
    $(this).css("background-color", "#FF9C53"); 
    
    
    }, function () { //executes when done hovering
    
    $(this).css("background-color", "#FF9C53");
    });
if ($(window).scrollTop() > 100 && $(window).width() > 768) { //initial check of how far user has scrolled
    $('#showBanner1').hide();                                 //when refreshing page.
    $("#showBanner2").show();
    //  $(".navbar").css("margin-top", "-50px");
  }
  ///////////////Function to animate banner when scrolling.
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(window).scrollTop() > 100 && $(window).width() > 768) {
        $('#showBanner1').hide();
        $('#showBanner2').show();
        // $(".navbar").css("margin-top", "-50px");
      }
      else {
        $('#showBanner1').show();
        $('#showBanner2').hide();
        // $(".navbar").css("margin-top", "-80px");

      }
    });
  });
  console.log("yo");