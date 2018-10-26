$(document).ready(function(){
	

$(".buttonJS").click(function(){
	
	var id = $(this).attr('id');

	$(".buttonJS").css("background-color","blue");
	
	$("#"+id).css("background-color","green");
	
	$("#tid").html($("#"+id).html());
	
	if($("#"+id).hasClass("Mon"))
	{
		$("#dag").html("Måndag");
	}
	
	if($("#"+id).hasClass("Tis"))
	{
		$("#dag").html("Tisdag");
	}
	
	if($("#"+id).hasClass("Ons"))
	{
		$("#dag").html("Onsdag");
	}
	
	if($("#"+id).hasClass("Tor"))
	{
		$("#dag").html("Torsdag");
	}
	
	if($("#"+id).hasClass("Fre"))
	{
		$("#dag").html("Fredag");
	}
	if($("#"+id).hasClass("Lor"))
	{
		$("#dag").html("Lördag");
	}
	if($("#"+id).hasClass("Son"))
	{
		$("#dag").html("Söndag");
	}
	
});
	
	
	
	
	
	
	
	
	
	
	
	
	
});