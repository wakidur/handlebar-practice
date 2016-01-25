$(function(){
//	Handlebars.registerHelper('link', function('text', url){
//		text = Handlebars.Utils.escapeExpression( text );
//		url = Handlebars.Utils.escapeExpression( url );
//		var result = '<a href =" '+ url + '"> ' + text + '</a>';
//		return new Handlebars.safeString( result );
//	});
	
	
	$.ajax({
		method: "POST",
        dataType: 'JSON',
        url: './data/data.json',
		success : function( value ) {
//			 section-1
			var source1 = $( "#entry-template" ).html(),
				html1 = Handlebars.compile( source1 ),
			    value1 = html1( value );
			   $("#contain1").html( value1 );
//			section -2
			var source2 = $( "#entry-template1" ).html(),
				html2 = Handlebars.compile( source2 ),
			    value2 = html2( value );
			   $("#contain2").html( value2 );
			
			//			section -3
			var source3 = $( "#entry-template2" ).html(),
				html3 = Handlebars.compile( source3 ),
			    value3 = html3( value );
			   $("#contain3").html( value3 );
		},
		error: function() {
			console.log('There are some problem');
		}
		
	 }).done(function() {
      console.log("you done you jobs well");
     });
});