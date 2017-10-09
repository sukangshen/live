function flash(url,w,h,bg,win,vars){
	var s=
	"<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://www.yongtu.net/swflash.cab#version=8,0,0,0' width='"+w+"' height='"+h+"' align='middle'>"+
	"<param name='movie' value='"+url+"' />"+
	"<param name='wmode' value='"+win+"' />"+
	"<param name='quality' value='high' />"+
	"<param name='FlashVars' value='"+vars+"' />"+
	"<param name='bgcolor' value='"+bg+"' />"+	
	"<embed src='"+url+"' wmode='"+win+"' menu='false' quality='high' bgcolor='"+bg+"' width='"+w+"' height='"+h+"' align='middle' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' />"+
	"</object>";
	document.write(s);
}
