$(document).ready(function(){
	



/*
var bokadetiderlength = bokadetider.Length;
	
	
for(var i = 0; i < bokadetiderlength; i++)
{
	
var search = bokadetider[i].search("/");
	

var vecka = bokadetider[i].search("v");
var dag = bokadetider[i].search("d");
var tid = bokadetider[i].search("t");



$("#"+id).css("background-color","green");
	
	
}
	
*/	
	

$(".buttonJS").click(function(){
	
	
    var id = $(this).attr('id');

	$(".buttonJS").css("background-color","blue");
		

	$(".buttonJS").css("background-color","#117A8B");

	
	$("#"+id).css("background-color","green");
	
	$("#tid").html($("#"+id).html());
	
	$("#tidvar").val($("#"+id).html());
	
    $("#vecka").html("1");
	$("#veckavar").val("1");
	$("#idVar").val("#"+id);
	
	
	if($("#"+id).hasClass("Mon"))
	{
		$("#dag").html("Måndag");
		$("#dagvar").val("Måndag");
	}
	
	if($("#"+id).hasClass("Tis"))
	{
		$("#dag").html("Tisdag");
		$("#dagvar").val("Tisdag");
	}
	
	if($("#"+id).hasClass("Ons"))
	{
		$("#dag").html("Onsdag");
		$("#dagvar").val("Onsdag");
	}
	
	if($("#"+id).hasClass("Tor"))
	{
		$("#dag").html("Torsdag");
		$("#dagvar").val("Torsdag");
	}
	
	if($("#"+id).hasClass("Fre"))
	{
		$("#dag").html("Fredag");
		$("#dagvar").val("Fredag");
	}
	if($("#"+id).hasClass("Lor"))
	{
		$("#dag").html("Lördag");
		$("#dagvar").val("Lördag");
	}
	if($("#"+id).hasClass("Son"))
	{
		$("#dag").html("Söndag");
		$("#dagvar").val("Söndag");
	}

});



	
	
	
	
	
	
	
	
	
	
	
	
});