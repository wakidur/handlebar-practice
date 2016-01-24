$(document).ready(function() {
    $.ajax({
        method: "GET",
        url: "data/index1.json",
        dataType: "json",
        success: function(data){
            var source   = $("#grid-row-template").html(),
                template = Handlebars.compile(source);
                var html = template( data );
                $("#employeesTable").append(html);

          // Render the posts into the page
          // placeHolder.append(html);
                
        }
    })
                    
                    
});