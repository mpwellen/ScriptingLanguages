$(document).ready(function ()
{
	$("#append").click(function ()
	{
		$("#text").append($("#content").val());
	});

	$("#replace").click(function ()
	{
		$("#text").html($("#content").val());
	});

	$("#clear").click(function ()
	{
		$("#text").html("");
	});
});
