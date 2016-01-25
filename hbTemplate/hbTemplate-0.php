<script id="entry-template" type="text/x-handlebars-template">
   <div class="entry">
		<p1> Title:  {{title}} </p>
		<p class="body">Body:   {{body}} </p>
	</div>

</script>

<script id="entry-template1" type="text/x-handlebars-template">
     <div class="entry">
		<p> Title:  {{title1}} </p>
		<p class="body">Body:  {{{body1}}} </p>
	</div>
</script>

<script id="entry-template2" type="text/x-handlebars-template">
     <div class="">
		<p>{{productName}}</p>
		<p>{{peoductId}}</p>
		<ul>
		  {{#AllCategory}}
		    <li> {{.}}</li>
			{{/AllCategory}}
	</div>
</script>


