//１．クリックイベントの設定
$(document).on('click', function(e) {
    // ２．クリックされた場所の判定
    if(!$(e.target).closest('#index_contents').length && !$(e.target).closest('#arrow_btn').length){
        $('#index_contents').slideUp();
		$('#form_back').fadeOut();
		$('#arrow_btn').show();
    }else if($(e.target).closest('#arrow_btn').length){
        // ３．ポップアップの表示状態の判定
        if($('#index_contents').is(':hidden')){
            $('#index_contents').slideDown();
			$('#form_back').fadeIn();
			$('#arrow_btn').fadeOut();
        }else{
            $('#index_contents').slideUp();
			$('#form_back').fadeOut();
			$('#arrow_btn').fadeIn();
        }
    }
});