$(document).ready(function(){
	

var bokadetiderlength = bokadetider.length;
	

for(var i = 0; i < bokadetiderlength; i++)
{
	
var knappidpos = bokadetider[i].search("u");
var substringend = bokadetider[i].search("/");
var knappid = bokadetider[i].substring((knappidpos + 1), (substringend));



$("#"+knappid).text('.....BOKAD......');
$("#"+knappid).css("background-color","red",);
$("#"+knappid).prop("disabled",true);


	
}

	var oldid;

$(".buttonJS").click(function(){
	var id = $(this).attr('id');

	
	
	
		

	$("#"+oldid).css("background-color","#117A8B");

	
	
	$("#"+id).css("background-color","green");
	
	oldid = id;
	
	$("#tid").html($("#"+id).html());
	
	$("#tidvar").val($("#"+id).html());
	

    $("#vecka").html("1");
	$("#veckavar").val("1");
	$("#idVar").val(id);
	

	if($("#"+id).hasClass("1"))
	{
		$("#vecka").html("1");
	    $("#veckavar").val("1");
	}
	
	if($("#"+id).hasClass("2"))
	{
		$("#vecka").html("2");
	    $("#veckavar").val("2");
	}
	
	if($("#"+id).hasClass("3"))
	{
		$("#vecka").html("3");
	    $("#veckavar").val("3");
	}
	
	if($("#"+id).hasClass("4"))
	{
		$("#vecka").html("4");
	    $("#veckavar").val("4");
	}
	
	if($("#"+id).hasClass("5"))
	{
		$("#vecka").html("5");
	    $("#veckavar").val("5");
	}
	
	if($("#"+id).hasClass("6"))
	{
		$("#vecka").html("6");
	    $("#veckavar").val("6");
	}
	
	if($("#"+id).hasClass("7"))
	{
		$("#vecka").html("7");
	    $("#veckavar").val("7");
	}
	
	if($("#"+id).hasClass("8"))
	{
		$("#vecka").html("8");
	    $("#veckavar").val("8");
	}
	
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