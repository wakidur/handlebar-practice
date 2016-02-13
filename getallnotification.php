<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        
    <title>get All notification</title>

    <!-- Bootstrap core CSS -->
    <link href="css/theme.css" rel="stylesheet">
    <!--<link href="css/bootstrap.css" rel="stylesheet">-->
    <link href="fonts/font-awesome/font-awesome.css" rel="stylesheet">
    <style>
        /*
 * jQuery Plugin: Scroller
 * Version 0.3
 *
 * Copyright (c) 2011 Shilov Vlad [Omgovich] (http://omgovich.ru)
 * No copyrights or licenses. Do what you want!
 * 
 */
            .slide-pane, .vertical-slide-pane {
                    position:relative;
                    overflow:hidden;
            }
            .slide-pane .slide-wrap {
                    position:relative;
                    width:10000px;
            }
            .vertical-slide-pane .slide-wrap {
                    position:relative;
                    height:10000px;
            }
            .slide-pane .slide-data {
                    position:absolute;
                    left:0;
            }
            .vertical-slide-pane .slide-data {
                    position:absolute;
                    top:0;
            }
    </style>
    </head>
    <body>
       <header class="navbar navbar-fixed-top bg-danger">
    <div class="container">
        <div class="navbar-header"></div>
            <ul class="nav navbar-nav">
                <li><a href="">Home</a></li>
                <li><a href="">about</a></li>

                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <div class="navbar-btn btn-group">
                        <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
                            <span class="fa fa-bell-o fs14 va-m"></span>
                            <span class="badge badge-danger lbl-count"></span>                            
                        </button>

                        <div class="dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn" role="menu">
                            <div class="panel mbn">
                                <div class="panel-menu">
                                    <span class="panel-title fw600">Notifications</span>                                   
                                    <span class="panel-controls">
                                        <span class="label label-warning lbl-count"></span>
                                    </span>
                                </div>
                                <div class="panel-scroller scroller-navbar scroller-lg scroller-overlay scroller-pn pn">
                                    <p class="not-found"></p>
                                    <ul id="notification" class="media-list w350 notification-container"></ul>
                                </div>
                                <div class="panel-menu">
                                    <span class="btn btn-sm btn-danger" onclick="clearNoti()">Mark all as Read</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </li>

                <li class="menu-divider hidden-xs"><i class="fa fa-circle"></i> </li>

                
            </ul>
            
        </div>
    </div>
</header> 
        
        
        
         <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/jquery-1.11.3.js"></script>
    <script src="lib/bootstrap.js"></script>
    <script src="lib/handlebars-v4.0.5.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="lib/ie10-viewport-bug-workaround.js"></script>
    <script src="lib/jquery.scroller.js"></script>
    <script src="lib/jquery-scrollLock.js"></script>
    <script src="js/getallnotification.js"></script>
        <?php include 'hbTemplate/getallnotification.php';?>
    </body>
</html>
