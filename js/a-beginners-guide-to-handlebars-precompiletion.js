$(function(){
     $.ajax({
        method: "GET",
        type: 'GET',
        context: document.body,
        url: "data/a-beginners-guide-to-handlebars.json",
        catch:false,
        async: true,
        data: {
            format: 'json'
           },
        dataType: "json",
        success: function(data){
            //handlebars-Precompilation
            var templateScritp = Handlebars.templates.demo1( data );
             $('#Precompilation').html( templateScritp );
            
        },
        error: function(){
            console.log("There are some porblem");
        },
        complete: function(){
            console.log("Good job you done");
        }
    });
});


