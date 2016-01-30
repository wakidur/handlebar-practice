<script id="address-template" type="text/x-handlebars-template">
<h1>1. Templates </h1>
	<p> You can find me in || {{city}} ||. My address is || {{number}} ||  {{street}} ||. </p>
</script>


<script id="address-template1" type="text/x-handlebars-template">
	<h1>2. Expressions</h1>
	
	{{descritption.escaped}}
	{{example}}
	
	<br> <br>
	{{descritption.unescaped}}
	{{{example}}}
	
	<br> <br>
	{{{descritption.escape}}}
	{{example}}
	
	<br> <br>
	{{{descritption.unescap}}}
	{{{example}}}
	
	<br> <br>
</script>


<script id="address-template2" type="text/x-handlebars-template">
<h1> 3. Context </h1>
  
<ul>
 {{#each people}}
 <li>{{firstName}} {{lastName}}</li> 
 
  {{/each}}
</ul>	
	<br> <br>
</script>


<script id="built-in-helpers-template" type="text/x-handlebars-template">
<h1> 4. Helper </h1>

   {{#each animals}}
    <p>{{name}} {{noise}}</p>    
   {{/each}}

</script>