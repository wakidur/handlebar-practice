$(function(){
     $.ajax({
        method: "GET",
        url: "data/a-beginners-guide-to-handlebars.json",
        dataType: "json",
        success: function(data){
            var source = $('#handlebars-demo').html(),
                template = Handlebars.compile(source);
              $("#content-placeholder").html(template(data));   
        }
    });
})

