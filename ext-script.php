
<!--
<script src="bootstrap/js/jquery.js"></script>
-->
<script src="http://hammerjs.github.io/dist/hammer.min.js"></script>
<script src="http://hammerjs.github.io/dist/hammer-time.min.js"></script>
<script>

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#searchbox").slideToggle(100);
    $("#wrapper").toggleClass("toggled");

});



$(document).on('keyup','#searchbox',function(){
	var searchbox = $(this).val();
	var parentwidth = $(this).width();

	$("#display").empty();

	if(searchbox=='')
	{
		$("#display").hide();
	}
	else
	{
		$.ajax({

			url     : "home-data.php",
			type    : "POST",
			data    : 'loadsearch=1' + '&search=' + searchbox + '&fid=' + fid,
			success : function(data)
			{
				if(data.length == 0)
				{
					$("#display").width(parentwidth+24);
					$("#display").text("No Result Found.").show();
				}
				else
				{
					$("#display").width(parentwidth+24);
					$("#display").append(data).show();
				}
			}
		});
	}
});







// $(document).on('click','.connectionstopbtn',function(){
// 	$(".connectionstopbtn").addClass('active');
// 	$(".requesttopbtn").removeClass('active');
// 	$(".suggestionstopbtn").removeClass('active');
//
// 	$("#requestdiv").empty();
// 	$("#connectionsdiv").empty();
// 	$("#findotherconnectionsdiv").empty();
// 	loadconnections();
// })
//
// $(document).on('click','.requesttopbtn',function(){
// 	$(".connectionstopbtn").removeClass('active');
// 	$(".requesttopbtn").addClass('active');
// 	$(".suggestionstopbtn").removeClass('active');
//
// 	$("#requestdiv").empty();
// 	$("#connectionsdiv").empty();
// 	$("#findotherconnectionsdiv").empty();
// 	loadrequest();
// })
//
// $(document).on('click','.suggestionstopbtn',function(){
// 	$(".connectionstopbtn").removeClass('active');
// 	$(".requesttopbtn").removeClass('active');
// 	$(".suggestionstopbtn").addClass('active');
//
// 	$("#requestdiv").empty();
// 	$("#connectionsdiv").empty();
// 	$("#findotherconnectionsdiv").empty();
// 	loadteacheryoumayknow();
// })



//
// $(function(){
// var connectionsdiv = document.getElementById("connectionsdiv");
// Hammer(connectionsdiv).on("swipeleft", function() {
//   if ($('#wrapper').hasClass('toggled')){
//
//   } else {
//       $(".requesttopbtn").trigger('click');
//       $(".connectionstopbtn").removeClass('active');
//     }
//
//
// });
// });
//
// $(function(){
// var requestdiv = document.getElementById("requestdiv");
// Hammer(requestdiv).on("swipeleft", function() {
//   if ($('#wrapper').hasClass('toggled')){
//
//   } else {
//       $(".suggestionstopbtn").trigger('click');
//     }
//
// });
// });


// //Right
// $(function(){
// var requestdiv = document.getElementById("requestdiv");
// Hammer(requestdiv).on("swiperight", function() {
//   if ($('#wrapper').hasClass('toggled')){
//
//   } else {
//       $(".connectionstopbtn").trigger('click');
//     }
//
// });
// });


$(function(){
var body = document.getElementById("body");
Hammer(body).on("swipeleft", function() {
  $("#searchbox").slideDown(100);
  $("#wrapper").removeClass("toggled");
  $("#page-content-wrapper").fadeTo(100, 1);

});

Hammer(body).on("swiperight", function() {
  $("#searchbox").slideUp(100);
  $("#wrapper").addClass("toggled");
  $("#page-content-wrapper").fadeTo(100, 0.6);


});
});


</script>
