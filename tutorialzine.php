<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Handlebars Example - 1</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
     <div class="container">
     	<div class="row">
     		<div class="col-xs-12">
     			<div class="panel panel-default">
     				<div class="panel-heading ">
     					<h3 style="margin-top: 5px;">Handlebars provides the power necessary to let you build semantic templates</h3>
     				</div>
     				<div class="panel-body">
     					 <h1>My Example go in here</h1>
     					 <div id="content-placeholder"></div>
     					 <hr/>
     					<div id="content-placeholder1"></div>
     					 <hr>
     					 <div id="content-placeholder2"></div>
     					 <hr>
     					 <div id="content-placeholder3"></div>
     					 <hr>
     					 <div class="content-placeholder"></div>
     				</div>
     				<div class="panel-footer">
     					<p>Up-to-date with Handlebars</p>
     				</div>
     			</div>
     		</div>
     	</div>
     </div>




<script type="text/javascript" src="lib/jquery-1.11.3.js"></script>
<script type="text/javascript" src="lib/handlebars-v4.0.5.js"></script>
<script type="text/javascript" src="js/script-1.js"></script>

<script>
	//$(function () {

  // Register a helper
  //Handlebars.registerHelper('capitalize', function(str){
    // str is the argument passed to the helper when called
  //  str = str || '';
  //  return str.slice(0,1).toUpperCase() + str.slice(1);
  //});

  // Grab the template script
  //var theTemplateScript = $("#built-in-helpers-template").html();

  // Compile the template
 // var theTemplate = Handlebars.compile(theTemplateScript);

  // We will call this template on an array of objects
 // var context = {
  //  animals:[
//      {
//        name: "cow",
//        noise: "moooo"
//      },
//      {
//        name: "cat",
//        noise: "meow"
//      },
//      {
//        name: "fish",
//        noise: ""
//      },
//      {
//        name: "farmer",
//        noise: "Get off my property!"
//      }
//    ]
//  };

  // Pass our data to the template
 // var theCompiledHtml = theTemplate(context);

  // Add the compiled html to the page
  //$('.content-placeholder').html(theCompiledHtml);

//});
	
	</script>
<!--
<script id="built-in-helpers-template" type="text/x-handlebars-template">
  {{#each animals}}
    <p>
      The {{capitalize this.name}} says
      {{#if this.noise}}
        "{{this.noise}}".
      {{else}}
        nothing since its a {{this.name}}.
      {{/if}}
    </p>
  {{/each}}
</script>
-->




<?php include 'template/hbTemplate-1.php';?>
	
</body>
</html>
