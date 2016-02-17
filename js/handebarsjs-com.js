$( function(){
    $.ajax({
        method: "POST",
        url : "data/handlebarsjs-com.json",
        dataType : "JSON",
        success: function( data ){
        //  Using While loop
           Handlebars.registerHelper( 'list' , function( items, options ){
                var out = "<ul>", 
                    max = items.length,
                    i = 0 ;
                while( i < max ) {
                    out = out + "<li>" + options.fn( items[i]) + "</li>";
                    i++;
                }
                return out + "</ul>";
            });
            var source = $("#blockExpressions-1").html(),
                template = Handlebars.compile( source );
            $("#BlockExpression-1").append( template( data ));
            
        //  Using for loop 
 //           Handlebars.registerHelper( 'list' , function( items, options ){    
//                var out = "<ul>",
//                    i = 0 , max = items.length;
//                for( i ; i < max ; i++ ) {
//                    out = out + "<li>" + options.fn( items[i]) + "</li>";
//                }
//                return out + "</ul>"
//            });
//            var source = $("#blockExpressions-1").html(),
//                template = Handlebars.compile( source );
//            $("#BlockExpression-1").append( template( data ));
        },
       error : function() {
            document.alert("There are some problem");
        },
        complete: function(){
            console.log("Good job you got your appropriate result");
        }
    });
    
    
    
});



Handlebars.registerHelper( 'fullName' , function( person ){
    return person.firstName + " " + person.lastName;
});
function loadBlocks2() {
    $.ajax({
        method: "POST",
        url : "data/handlebarsjs-com.json",
        dataType : "JSON",
        success: function( responce ) {
           
            var source = $("#blockExpressions-2").html();
            var template = Handlebars.compile( source );
            $("#BlockExpression-2").append( template ( responce));
        },
        error: function() {
            console.log("There are some problem");
            
        },
        complete: function(){
            console.log("Good job you got your appropriate result");
        }
    })
}


function handlebarsPath1(){
    $.ajax({
        method: "POST",
        url:  "data/handlebarsjs-com.json",
        dataType: "JSON",
        success : function( data ){
            var source = $("#Handlebars-path-1").html(),
                template = Handlebars.compile( source );
            $( "#Handlebars-Paths-1" ).append( template(data) );
          
        },
        error: function() {
            console.log("There are some problem");
            
        },
        complete: function(){
            console.log("Good job you got your appropriate result");
        }
    })
}
function handlebarsPath2(){
    $.ajax({
        method: "POST",
        url:  "data/handlebarsjs-com.json",
        dataType: "JSON",
        success : function( data ){
            var source = $("#Handlebars-Paths-2").html(),
                template = Handlebars.compile( source );
            $( "#Handlebars-Pathss-2" ).append( template( data ) );
          
        },
        error: function() {
            console.log("There are some problem");
            
        },
        complete: function(){
            console.log("Good job you got your appropriate result");
        }
    });
}


//var cars = ["BMW", "Volvo", "Saab", "Ford"];
//var i = 0;
//var text = "";
//
//for (;cars[i];) {
//    text += cars[i] + "<br>";
//    i++;
//}
//
//var cars = ["BMW", "Volvo", "Saab", "Ford"];
//var i = 0;
//var text = "";
//
//while (cars[i]) {
//    text += cars[i] + "<br>";
//    i++;
//}