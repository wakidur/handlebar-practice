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
        // Basic Exmaple
            //Retrieve the template data from the HTML
            var template = $('#handlebars-demo').html()
            //compile the template data into a function
            var templateScript = Handlebars.compile( template );
            // the template with their corresponding values
            var html = templateScript( data );
            // get result withing existing DOM
            $("#content-placeholder").html( html ); 
            
        //    handlebars-Expressions
            var source = $('#handlebars-Expressions').html(),
                template = Handlebars.compile( source );
             $('#Expressions').html( template( data ) );
        //  handlebars-Escaping
            var source = $('#handlebars-Escaping').html(),
                template = Handlebars.compile( source );
             $('#Escaping').html( template( data ) );
        //handlebars-Comments
            var source = $('#handlebars-Comments').html(),
                template = Handlebars.compile( source );
             $('#Comments').html( template( data ) );
        //handlebars-Block
            var source = $('#handlebars-Block').html(),
                template = Handlebars.compile( source );
             $('#Block').html( template( data ) );
        //handlebars-Paths
            var source = $('#handlebars-Paths').html(),
                template = Handlebars.compile( source );
             $('#Paths').html( template( data ) );
            
        },
        error: function(){
            console.log("There are some porblem");
        },
        complete: function(){
            $bar = $("#content-placeholder1");
            $bar.text( "The page has been successfully loaded");
            $bar
            .slideDown('normal')
            .delay(2000)
            .slideUp('fast');
            //$("#content-placeholder1").text("hello Wakid you done your job well");
        }
    });
});

