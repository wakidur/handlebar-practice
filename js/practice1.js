<script id="entry-template" type="text/x-handlebars-template">
    <div class="entry"> 
	<h1> {{title}} </h1>
	<div class="body">
		{{#noop}}
                    {{body}}
		{{/noop}}
	    </div>
    </div>
</script>
			
Handlebars.registerHelper( 'noop' , function( options ) {
	return options.fn( this );
});
			  

//Basic Block Variation
<script id="entry-template" type="text/x-handlebars-template">
	<div class="entry">
		<h1> {{ title }} </h1>
		<div class="body"> 
			{{#bold}}
			  {{body}}
			{{/bold}}
		</div>
	</div>
</script>
			
Handlebars.registerHelper( "bold" , function( options ){
	return new Handlebars.SafeString(
		'<div class="mybold">' + options.fn( this ) + '</div>' );
});
			  
// The with helper 
<script id="entry-template" type="text/x-handlebars-template">
	<div class="entry">
		<h1> {{ title }} </h1>
		 {{#with story}}
		 	<div class="intro">{{intro}}</div>
		 	<div class="body">{{body}}</div>
		{{/with}}
		</div>
</script>
Handlebars.registerHelper('with', function( context, optins ){
	return options.fn( context );
})

{
	"title" : "First Post",
	"story" : {
		"intro" : "Before the jump",
		"body" : "After the jump"
	}
}
		  
		  
// Simple Iterators
<div class="enter">
	<h1> {{title}} </h1>
	{{#with story}} 
	  <div class="intro">{{{intro}}} </div>
	  <div class="body"> {{{body}}}</div>
	  {{/with}}
</div>
<div class="comments">
	{{#each comments}}
	  <div class="comment">
	 	<h2>{{subject}}</h2>
		{{{body}}}
	   </div>
	  {{/each}}
</div>

Handlebars.registerHelper("")
			  