<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Handlebar-Practice</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="lib/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>Probaze-project-1</h1>
                    </div>
                    <div class="panel-body">
                        <!-- Insertion point for handlebars template -->
                        <table id="TableData" class="table">
                            <thead>
                                <tr>
                                    <td>Course and Degrees</td>
                                    <td>Passing Year</td>
                                    <td> Institute </td>
                                    <td> Subjects </td>
                                    <td> Grade </td>
                                </tr>
                            </thead>
                            <tbody id="hello">
                            
                            </tbody>
                            
                        </table>
                        <hr>
                       
                       
                    </div>
                    <div class="panel-footer"><p>&copy; 2016 wakidur</p></div>
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
    <script src="js/probaze-projec-1.js"></script>
    <?php include 'hbTemplate/probaze-project-1.php';?>
</body>
</html>
