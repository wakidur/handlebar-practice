<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">  
        <title>handlebarsjs-com</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
   
    
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel  panel-info">
                        <div class="panel-heading">
                            Handlebars js.com
                        </div>
                        <div class="panel-body">
                            <div id="BlockExpression-1"></div>
                            <hr>
                            <div id="BlockExpression-2"></div>
                            <hr>
                            <div id="Handlebars-Paths-1"></div>
                            <hr>
                            <div id="Handlebars-Pathss-2"></div>
                            
                        </div>
                        <div class="panel-footer">
                            <p> Wakidur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
         <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/jquery-1.11.3.js"></script>
    <script src="lib/bootstrap.js"></script>
    <script src="lib/handlebars-v4.0.5.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="lib/ie10-viewport-bug-workaround.js"></script>
    <script src="js/handebarsjs-com.js"></script>
    
    <script>
        $( function(){
            loadBlocks2();
            
        });
        $( function(){
            
            handlebarsPath1();
            handlebarsPath2();
        })
    </script>
    <?php include 'hbTemplate/handlebarsjs-com.php';?>
    </body>
</html>

