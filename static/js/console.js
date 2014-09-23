window.app=window.app||{};
app.log=function(msg)
{
	var debug=true;
	if(window.console&&debug)
	{
		console.log(msg);
	}
}
app.console=
{
	init:function()
	{
		app.log('init');
	},
	start:function()
	{

	},
	show:function(num)
	{
		$('#page-1,#page-2,#page-3,#page-4').hide();
		switch(num)
		{
			case 1:
			$('#page-1').slideDown();
			$('#page-2').css({'left':'100%','top':'0'});
			$('#page-3').css({'left':'0','top':'100%'});
			$('#page-4').css({'left':'100%','top':'100%'});
			break;
			case 2:
			$('#page-2').show().animate({left:0,top:0});
			$('#page-3').css({'left':0,'top':'100%'});
			$('#page-4').css({'left':'100%','top':'100%'});
			case 3:
			$('#page-2').css({'left':'100%','top':0});
			$('#page-3').show().animate({'left':0,'top':0});
			$('#page-4').css({'left':'100%','top':'100%'});
			break;
			case 4:
			$('#page-2').css({'left':'100%','top':0});
			$('#page-3').css({'left':0,'top':'100%'});
			$('#page-4').show().animate({'left':0,'top':0});
			break;
		}
	}
}