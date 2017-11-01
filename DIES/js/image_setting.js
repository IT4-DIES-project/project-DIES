$(function(){
    $("#footer").css("display", "none");

    $(".container").css("display", "none");
    //$(".container").slideUp();

    //画像をクリックしたら編集モード
    $(".account_img img").click(function(){
        $("#footer").toggle();
    });

    $("#file").click(function () {
        $(".container").slideDown();
    });

    $("#btnCrop").click(function () {
        $(".container").slideUp();
    });



    //カーソルを合わせたら枠線を表示させる
    $(".account_img img").hover(
        function () {
            $(this).css("border","5px solid #8cd460");
        },

        function () {
            $(this).css("border","");
        }
    )

});