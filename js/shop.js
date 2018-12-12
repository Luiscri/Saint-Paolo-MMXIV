var changeImage = function(imgSrc){
    var $imgActual = $("#mainImg").attr('src');
    if($imgActual === imgSrc){
        return;
    }else{
        $("#mainImg").fadeOut(250, function(){
            $(this).attr("src", imgSrc);
        }).fadeIn(250);
        $("#img1").zoom({
            url: imgSrc
        });
    }
};