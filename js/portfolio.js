/**
 * Created by Joeri Smits on 01/05/14.
 */

$(document).ready(function(){

    $(".imgContainer").mouseenter(function() {
        var idx = $(this).hover().index();

        $('.imgContainer img:eq(' + idx + ')').delay(2000).queue(function(){
            $(this).addClass('blurImg');
        });
    });

    $(".imgContainer").mouseleave(function() {
        var idx = $(this).hover().index();

        $('.imgContainer img:eq(' + idx + ')').delay(2000).queue(function(){
            $(this).removeClass('blurImg');
        });
    });
})