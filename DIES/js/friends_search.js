
$(document).ready(function(){
    $(".arrow_box").css("display","none");
    $("#search_button").click(function(e){
        e.preventDefault();
        data_check()
    });
    $("#search_text").keyup(function(e){
        e.preventDefault();
        data_check()
    });

});
function ajax_search(){
    $(".arrow_box").show();
    var search_val=$("#search_text").val();
    $.post("./php/friends_search.php", {search_text : search_val}, function(data){
        if (data.length>0){
            $("#search_results").html(data);
        }
    })
}

function  data_check() {
    if( document.getElementById('search_text').value == "" ){
        $(".arrow_box").css("display","none");
    } else {
        ajax_search();

    }
}