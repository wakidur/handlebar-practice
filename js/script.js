//wait for page to load
//    $(document).ready(function(){
//      // Extract the text from the template .html() is the jquery helper method for that
//      var raw_template = $('#simple-template').html();
//      // Compile that into an handlebars template
//      var template = Handlebars.compile(raw_template);
//      // Retrieve the placeHolder where the Posts will be displayed 
//      var placeHolder = $("#main");
//      // Fetch all Blog Posts data from server in JSON
//      $.get("posts.json",function(data,status,xhr){
//        $.each(data,function(index,element){
//          // Generate the HTML for each post
//          var html = template(element);
//          // Render the posts into the page
//          placeHolder.append(html);
//        });
//      });
//    });


$( function() {
   
    $.ajax({
        method: "GET",
        url: "data/posts.json",
        dataType: "json",
        success: function(data){
             var raw_template = $('#simple-template').html(),
                 template = Handlebars.compile(raw_template),
                 placeHolder = $("#main");
            $.each(data,function(index,element){
          // Generate the HTML for each post
          var html = template(element);
          // Render the posts into the page
          placeHolder.append(html);
        });
        }
    });
})