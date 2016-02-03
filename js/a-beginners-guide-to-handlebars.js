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
        //handlebars-Each-helper
            var source = $('#handlebars-Each-helper').html(),
                template = Handlebars.compile( source );
             $('#Each-helper').html( template( data ) );
            
        //handlebars-If-helper
            var source = $('#handlebars-If-helper').html(),
                template = Handlebars.compile( source );
             $('#If-helper').html( template( data ) );
             
        //handlebars-Custom-function-helper
            Handlebars.registerHelper("studyStatus", function( passingYear ) {
                if( passingYear < 2015 ) {
                    return "passed";
                } else {
                    return "not passed";
                }
            });
             Handlebars.registerHelper("stringText", function( name ) {
                if(  name === "yahoo.com" || "" ) {
                    return "yes that is compnay name";
                } else {
                    return "--------------------- ------";
                }
            });
            var source = $('#handlebars-Custom-function-helper').html(),
                template = Handlebars.compile( source );
             $('#Custom-function-helper').html( template( data ) );
             
        //handlebars-Custom-block-helper
        
            Handlebars.registerHelper( "Block", function( value, options ) {
                var lan = value.length;
                var returnData = "";
                for( var i = 0; i < lan ; i++ ) {
                    //change the value of the passingYear to passed/not passed based on the conditions
                    value[i].passingYear = ( value[i].passingYear < 2015 ) ? "passed " : "not Passed";
                    //Hear options.fn(value[i]) temporarily change the scope of the whole studystatus helper block
                    // to value[i] . so {{name}} = data[i].name
                    // in the template.
                    returnData = returnData + options.fn(value[i]);
                }
                return returnData;
            });
            
            var source = $('#handlebars-Custom-block-helper').html(),
                template = Handlebars.compile( source );
             $('#Custom-block-helper').html( template( data ) );
             
        //handlebars-Partial-Templates
            Handlebars.registerPartial(
                    "partialTemplate", 
                    '{{language}} is {{adjective}}. You are reading this article on {{website}}');      
            var source = $('#handlebars-Partial-Templates').html(),
                template = Handlebars.compile( source );
             $('#Partial-Templates').html( template( data ) );
            
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

