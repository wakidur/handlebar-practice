<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Handlebars Example</title>
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
     					 <div id="contain1"></div>
     					 <hr/>
     					 <div id="contain2"></div>
     					 <hr>
     					 <div id="contain3"></div>
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
<script type="text/javascript" src="js/script.js"></script>

<script>
//	{
//		people : [
//			{ firstName : "Yehud", lastName : "Katz" },
//			{ firstName : "Carl", lastName : "Lerche" },
//			{ firstName : "Alan", lastName : "Johnson" }
//		]
//	}
//	 Handlebars.registerHelper( 'list', function( items , optins) {
//		 var out = "<ul>";
//		 for( var i = 0; l = items.length; i < l; i++ ) {
//			 out = out + "<li>" + optins.fn( items[i] ) + "</li>";
//		 }
//		 return out + "</ul>";
//		 
//	 } )
	</script>
<?php include 'template/hbTemplate.php';?>
	
</body>
</html>
