// ajaxLoop.js
jQuery(function($){
    var page = 1;
    var loading = true;
    var $window = $(window);
    var $content = $(".blog_inner");
    var load_posts = function(){
            $.ajax({
                type       : "GET",
                data       : {numPosts : 4, pageNumber: page},
                dataType   : "html",
                url        : "http://www.shfamilylaw.ca/wp-content/themes/sheri/loopHandler.php",
                beforeSend : function(){
                    if(page != 1){
                        $content.append('<div id="temp_load" style="text-align:center">\
                            <img src="http://www.shfamilylaw.ca/wp-content/themes/sheri/images/ajax-loader.gif" />\
                            </div>');
                    }
                },
                success    : function(data){
                    $data = $(data);
                    if($data.length){
                        $data.hide();
                        $content.append($data);
                        $data.fadeIn(500, function(){
                            $("#temp_load").remove();
                            loading = false;
                        });
                    } else {
                        $("#temp_load").remove();
                    }
                },
                error     : function(jqXHR, textStatus, errorThrown) {
                    $("#temp_load").remove();
                    alert(jqXHR + " :: " + textStatus + " :: " + errorThrown);
                }
        });
    }
    $('#load_more_articles').click(function() {
        
      
                loading = true;
                
                load_posts();
                page++;
        
    });
   // load_posts();
});