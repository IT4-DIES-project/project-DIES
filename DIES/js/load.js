$(function() {
	var h = $(window).height();

	$('#wrap').css('display','none');
	$('#loader-bg ,#loader').height(h).css('display','block');
});
 
$(window).load(function () { //全ての読み込みが完了したら実行
	$('#loader-bg').delay(900).fadeOut(800);
	$('#loader').delay(600).fadeOut(300);
	
	setTimeout(function(){
        $('#wrap').css('display', 'block');
		$('#side').css('z-index', '1');
		$('#side').animate({'marginLeft':'300px'},500);
    }, 1000);

});
	
//10秒たったら強制的にロード画面を非表示
$(function(){
	setTimeout('stopload()',10000);
});
 
function stopload(){	
	$('#loader-bg').delay(900).fadeOut(800);
	$('#loader').delay(600).fadeOut(300);
	
	$('#wrap').css('display','block');
	$('#side').css('z-index', '3');
	$('#side').animate({'marginLeft':'300px'},500);
}