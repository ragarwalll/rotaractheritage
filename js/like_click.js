$('.post--like-unlike').on('submit',function(e){
    e.preventDefault();
    $.ajax({
        type     : "POST",
        cache    : false,
        url      : $(this).attr('action'),
        success  : function(data) {
              
        }
    });
    var str1=$(this).html().replace(/\s/g,'');
    var y ="<inputtype=\"submit\"value=\"Like\"class=\"post-like-form\">";
    var n ="<inputtype=\"submit\"value=\"Unlike\"class=\"post-like-form\">";  
    if(str1 == n){
        $(this).html("<input type='submit' value='Like' class='post-like-form'>");
    }
    else{
        $(this).html("<input type='submit' value='Unlike' class='post-like-form'>");
    }
    

}); 