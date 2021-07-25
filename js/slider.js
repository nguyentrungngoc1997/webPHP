$(document).ready(function(){
	var stt=0;
	starImg = $("img.slide:first").attr("stt");
	endImg = $("img.slide:last").attr("stt");
	$("img.slide").each(function(){
		if($(this).is(':visible'))
			stt = $(this).attr("stt");
	});
	$("#next").click(function()	{
		if(stt==endImg)
		{
			stt=-1;
		}
		next=++stt;
		$("img.slide").hide();
		$("img.slide").eq(next).show();
	});

	$("#back").click(function()	{
		if(stt==0)
		{
			stt=endImg;
			back = stt++;
		}
		back=--stt;
		$("img.slide").hide();
		$("img.slide").eq(back).show();
	});
	setInterval(function(){
		$("#next").click();
	},5000);
});