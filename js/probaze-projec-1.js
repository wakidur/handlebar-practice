$(function(){
    $.ajax({
        url: 'data/probaze-data.json' ,
        dataType: 'json',
        method: "GET",
        success: function ( response ) {
            var source = $("#hb-edu-list").html();
            var template = Handlebars.compile( source ); 
             $("#TableData #hello").append(template(response));
            console.log( $('#education-row').append(template( response )) );
        },
        error : function(){
            console.log("There are some error");
        }
//        complete:function(){
//            console.log("Good Job you done you job well");
//        }
    });
});


                   