<?php


    
    
?>

<!DOCTYPE html>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Kraken Status - Check out if your servers are up or down</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Kraken Status - Check out if your servers are up or down.">
        <meta name="author" content="Kaushik Tirthappa, Amit Ghasghase, Shubham Soni">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon"> 
        
        <!-- Javascript includes -->        
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/uikit.js"></script> 
        <script type="text/javascript" src="js/core.js"></script> 
        <script type="text/javascript" src="js/tooltip.js"></script> 
        <script type="text/javascript" src="js/functions.js"></script> 
<!--        <script src="https://use.fontawesome.com/46b90780ff.js"></script>-->
        
        <!-- CSS includes -->
        <link rel="stylesheet" type="text/css" href="css/uikit.almost-flat.css" >
        <link rel="stylesheet" type="text/css" href="css/tooltip.almost-flat.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">                

        <link rel="stylesheet" type="text/css" href="css/custom.css" >
        
        <!--Plotly.jsCharting Library Includes-->
<!--        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>-->

        
        <!-- JQuery Sparklines Includes -->
        <script type="text/javascript" src="js/jquery.sparkline.min.js"></script>        
        <script type="text/javascript">
            /* These are settings for the chart used on index page for downtime  */            
            $(function() {
                /* Use 'html' instead of an array of values to pass options 
                to a sparkline with data in the tag */
                $('.check').sparkline('html', {
                    type: 'bar', 
                    stackedBarColor: ['#5F96FD','#E5EDF5'],
                    barWidth: 3,
                    barSpacing: 2,
                    height: 55
                } );
            });
        </script>
        
        <!-- Nice Select Dropdown Includes -->
        <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/nice-select.css" >
        <script type="text/javascript">
            $(document).ready(function() {              // This initiates and renders the fancy dropdowns for Request type
              $('select').niceSelect();
            });        
        </script>
        
        
        <!-- iON Range Slider Includes -->
        <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/ion.rangeSlider.css" >
        <link rel="stylesheet" type="text/css" href="css/ion.rangeSlider.skinFlat.css" >        
        <script type="text/javascript">
            $(document).ready(function () {
                $("#PollingDuration").ionRangeSlider({       // This initiates and renders the range slider for Polling duration field
                    min: 1,
                    max: 60,
                    from: 5                
                });
        var nameInput = document.getElementById('PollingDuration');          
            });
        console.log(nameInput.value);            
        </script>        
        
        <!-- Google Charts Includes -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>         <!-- This initiates the Google Chart library-->
        
        <!--Google Font Includes-->
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">
        
        
    </head>
    <body>

        <!--Top Navbar for Desktop-->
        <div class="uk-grid uk-grid-collapse uk-navbar navbarclean" style="border-bottom: 1px solid #eeeeee;">
            <div class="uk-width-10-10 uk-container-center" >
                <p style="margin-bottom: 0px; font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; " class="uk-text-center">
                    <a href="index.php" class="uk-navbar-brand uk-visible-large uk-margin-small-top uk-padding-remove" style="vertical-align: middle; margin-left: 10px;">
                        <span style="font-family: 'Source Sans Pro'; font-weight: 400; font-size: 14px; line-height: 30px;">KRAKEN</span>
                        <span style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; margin-left: 0px;">STATUS</span>
                    </a>                    
                    <div class="uk-navbar-flip  uk-vertical-align-middle" >
                        <ul class="uk-navbar-nav">
                            <li class="uk-parent" data-uk-dropdown="{mode:'click'}" aria-haspopup="true" aria-expanded="false">
                                <a style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; " href="">MENU<i class="uk-icon-navicon" style="margin-left: 5px;"></i></a>
                                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom" aria-hidden="true" tabindex="" style="top: 34px; left: -135px; border-radius: 0px;">
                                    <ul class="uk-nav uk-nav-navbar">
                                        <li style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; "><a href="#">ITEM 1</a></li>
                                        <li style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; "><a href="#">ITEM 2</a></li>
                                        <li style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; "><a href="#">ITEM 3</a></li>                                        
                                    </ul>
                                </div>

                            </li>
                        </ul>
                    </div>
                </p>
            </div>
        </div>        
        
        
        <!--Top Hero section-->
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-width-8-10 uk-container-center" style="height: 300px; padding: 100px 0px; border-bottom: 1px solid #dddddd;">
                <div class="uk-width-2-10 uk-container-center" style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 30px; line-height: 40px; text-align: center;">Checks</div>
                
                <!-- This line should mention the number of checks that have been configured and are visible on the screen. --> 
                <div class="uk-width-2-10 uk-container-center" style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 16px; line-height: 20px; color: #aaaaaa; text-align: center; ">You have 4 checks</div>
            </div>
        </div>
        
        
        <!--First row of existing check. This entire section gets repeated for each check that is configured-->
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-width-8-10 uk-container-center "  id="" style="padding: 30px 0px; border-bottom: 1px solid #dddddd;">
                <div class="uk-grid uk-grid-collapse ">
                    <div class="uk-width-4-10">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-10-10">
                                <!--Alias of existing checks-->
                                <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 14px; line-height: 20px; "><a href="details.php?id=1" style="text-decoration: none;">Admin ShelfJoy Bot</a></p>
                            </div>
                        </div>
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-10-10">
                                <!--URL of existing checks-->
                                <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 13px; line-height: 16px; color: #aaaaaa; ">https://admin.shelfjoy.com</p>                                
                            </div>
                        </div>                        
                    </div>
                    <div class="uk-width-2-10">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-1-3">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 12px; line-height: 14px; ">UPTIME</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <!--Uptime of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 200; font-size: 16px; line-height: 20px; color: #aaaaaa; ">100%</p>                                
                                    </div>
                                </div>                                 
                            </div>
                            <div class="uk-width-1-3">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 12px; line-height: 14px; ">MEAN</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <!--Mean Response time of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 200; font-size: 16px; line-height: 20px; color: #aaaaaa; ">775ms</p>                                
                                    </div>
                                </div>                                 
                            </div>
                            <div class="uk-width-1-3">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 12px; line-height: 14px; ">APDEX</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <!--Apdex of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 200; font-size: 16px; line-height: 20px; color: #aaaaaa; ">0.79</p>                                
                                    </div>
                                </div>                                 
                            </div>                            
                        </div>
                    </div>
                    <div class="uk-width-4-10">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-9-10">
                                <!--Server Up/Down status of existing checks. This is where the 100% stacked chart against each check is displayed on the index page. Enter the values separated by colons for each combination of the stack and separate the combinations using commas. The sum of combination should add up to 10. So to represent 40%, you'll need to enter the value 4:6, and to represent 70%, use 7:3-->
                                <div class="" id="newCheck" height="30" style="text-align: center; height: 30px; margin-top: -10px;"><span class="check" style="line-height: 60px;">8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7</span></div>
                            </div>
                            <div class="uk-width-1-10">
                                <!-- The value of attribute "data-check-id" is the id of the Check in the DB. Can be used to pull the rest of the config details about the Check when it's to be edited --> 
                                <p style="text-align: right;"><a class="" data-uk-modal href="#Check" data-check-id="1" style="text-decoration: none;"><i class="uk-icon-ellipsis-v" style="color: #444444;"></i></a></p>
                            </div>                            
                        </div>
                    </div>                        
                </div>               
            </div>
        </div>

        
        <!-- Duplicate Check 1-->
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-width-8-10 uk-container-center" style="padding: 30px 0px; border-bottom: 1px solid #dddddd;">
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-4-10">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-10-10">
                                <!--Alias of existing checks-->
                                <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 14px; line-height: 20px; "><a href="details.php?id=2" style="text-decoration: none;">Admin ShelfJoy Bot</a></p>
                            </div>
                        </div>
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-10-10">
                                <!--URL of existing checks-->
                                <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 13px; line-height: 16px; color: #aaaaaa; ">https://admin.shelfjoy.com</p>                                
                            </div>
                        </div>                        
                    </div>
                    <div class="uk-width-2-10">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-1-3">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 12px; line-height: 14px; ">UPTIME</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <!--Uptime of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 200; font-size: 16px; line-height: 20px; color: #aaaaaa; ">100%</p>                                
                                    </div>
                                </div>                                 
                            </div>
                            <div class="uk-width-1-3">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 12px; line-height: 14px; ">MEAN</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <!--Mean Response time of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 200; font-size: 16px; line-height: 20px; color: #aaaaaa; ">775ms</p>                                
                                    </div>
                                </div>                                 
                            </div>
                            <div class="uk-width-1-3">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 12px; line-height: 14px; ">APDEX</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <!--Apdex of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 200; font-size: 16px; line-height: 20px; color: #aaaaaa; ">0.79</p>                                
                                    </div>
                                </div>                                 
                            </div>                            
                        </div>
                    </div>
                    <div class="uk-width-4-10">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-9-10">
                                <!--Server Up/Down status of existing checks-->
                                <div class="" id="newCheck" style="text-align: center; height: 30px; margin-top: -10px;"><span class="check" style="line-height: 60px;">8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7</span></div>
                            </div>
                            <div class="uk-width-1-10">
                                <!-- The value of attribute "data-check-id" is the id of the Check in the DB. Can be used to pull the rest of the config details about the Check when it's to be edited --> 
                                <p style="text-align: right;"><a class="" data-uk-modal href="#Check" data-check-id="1" style="text-decoration: none;"><i class="uk-icon-ellipsis-v" style="color: #444444;"></i></a></p>
                            </div>                            
                        </div>
                    </div>                        
                </div>
                
            </div>
        </div>        
        
        
        
        <!-- Duplicate Check 2-->
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-width-8-10 uk-container-center" style="padding: 30px 0px; border-bottom: 1px solid #dddddd;">
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-4-10">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-10-10">
                                <!--Alias of existing checks-->
                                <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 14px; line-height: 20px; "><a href="details.php?id=3" style="text-decoration: none;">Admin ShelfJoy Bot</a></p>
                            </div>
                        </div>
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-10-10">
                                <!--URL of existing checks-->
                                <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 13px; line-height: 16px; color: #aaaaaa; ">https://admin.shelfjoy.com</p>                                
                            </div>
                        </div>                        
                    </div>
                    <div class="uk-width-2-10">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-1-3">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 12px; line-height: 14px; ">UPTIME</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <!--Uptime of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 200; font-size: 16px; line-height: 20px; color: #aaaaaa; ">100%</p>                                
                                    </div>
                                </div>                                 
                            </div>
                            <div class="uk-width-1-3">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 12px; line-height: 14px; ">MEAN</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <!--Mean Response time of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 200; font-size: 16px; line-height: 20px; color: #aaaaaa; ">775ms</p>                                
                                    </div>
                                </div>                                 
                            </div>
                            <div class="uk-width-1-3">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 12px; line-height: 14px; ">APDEX</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <!--Apdex of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 200; font-size: 16px; line-height: 20px; color: #aaaaaa; ">0.79</p>                                
                                    </div>
                                </div>                                 
                            </div>                            
                        </div>
                    </div>
                    <div class="uk-width-4-10">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-9-10">
                                <!--Server Up/Down status of existing checks-->
                                <div class="" id="newCheck" style="text-align: center; height: 30px; margin-top: -10px;"><span class="check" style="line-height: 60px;">8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7</span></div>
                            </div>
                            <div class="uk-width-1-10">
                                <!-- The value of attribute "data-check-id" is the id of the Check in the DB. Can be used to pull the rest of the config details about the Check when it's to be edited --> 
                                <p style="text-align: right;"><a class="" data-uk-modal href="#Check" data-check-id="1" style="text-decoration: none;"><i class="uk-icon-ellipsis-v" style="color: #444444;"></i></a></p>
                            </div>                            
                        </div>
                    </div>                        
                </div>
                
            </div>
        </div>          
        
        
        
        <!-- Duplicate Check 3-->
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-width-8-10 uk-container-center" style="padding: 30px 0px; border-bottom: 1px solid #dddddd;">
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-4-10">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-10-10">
                                <!--Alias of existing checks-->
                                <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 14px; line-height: 20px; "><a href="details.php?id=4" style="text-decoration: none;">Admin ShelfJoy Bot</a></p>
                            </div>
                        </div>
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-10-10">
                                <!--URL of existing checks-->
                                <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 13px; line-height: 16px; color: #aaaaaa; ">https://admin.shelfjoy.com</p>                                
                            </div>
                        </div>                        
                    </div>
                    <div class="uk-width-2-10">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-1-3">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 12px; line-height: 14px; ">UPTIME</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <!--Uptime of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 200; font-size: 16px; line-height: 20px; color: #aaaaaa; ">100%</p>                                
                                    </div>
                                </div>                                 
                            </div>
                            <div class="uk-width-1-3">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 12px; line-height: 14px; ">MEAN</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <!--Mean Response time of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 200; font-size: 16px; line-height: 20px; color: #aaaaaa; ">775ms</p>                                
                                    </div>
                                </div>                                 
                            </div>
                            <div class="uk-width-1-3">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 600; font-size: 12px; line-height: 14px; ">APDEX</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10">
                                        <!--Apdex of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 200; font-size: 16px; line-height: 20px; color: #aaaaaa; ">0.79</p>                                
                                    </div>
                                </div>                                 
                            </div>                            
                        </div>
                    </div>
                    <div class="uk-width-4-10">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-9-10">
                                <!--Server Up/Down status of existing checks-->
                                <div class="" id="newCheck" style="text-align: center; height: 30px; margin-top: -10px;"><span class="check" style="line-height: 60px;">8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7</span></div>
                            </div>
                            <div class="uk-width-1-10">
                                <!-- The value of attribute "data-check-id" is the id of the Check in the DB. Can be used to pull the rest of the config details about the Check when it's to be edited --> 
                                <p style="text-align: right;"><a class="" data-uk-modal href="#Check" data-check-id="1" style="text-decoration: none;"><i class="uk-icon-ellipsis-v" style="color: #444444;"></i></a></p>
                            </div>                            
                        </div>
                    </div>                        
                </div>
                
            </div>
        </div>              
        
        
        <!-- Button which triggers the modal to create a new check-->
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-width-8-10 uk-container-center" style="height: 300px; padding: 100px 0px;">
                <div class="uk-width-2-10 uk-container-center" style="text-align: center;">
                    <a class="" data-uk-modal href="#Check" style="text-decoration: none;">
                        <span style="">
                            <span style="font-family: 'Source Sans Pro'; font-weight: 200; font-size: 40px; line-height: 40px;border: 1px solid #dddddd; border-radius: 30px; padding: 0px 15px; ">
                                +
                            </span>
                        </span>                  
                    </a>
                </div>
            </div>
        </div>                 
        
        
        <!-- The following modal creates a new check. The same modal can be used to edit an existing check if you populate the current Check's config details from the DB using the ID available value for "data-check-id" attribute  --> 
        <div id="Check" class="uk-modal" style="background: rgba(255, 255, 255, 0.8);">
            <div class="uk-modal-dialog" style="position: absolute; margin: 0px; width: 100%; max-width: 100%; height: 400px; border-radius: 0px; box-shadow: none;">
                <button type="button" class="uk-modal-close uk-close"></button>
                <div class="uk-modal-header" style="background: rgba(255, 255, 255, 0.8); border-bottom: none;">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-8-10 uk-container-center" style="height: 100px; padding: 100px 0px 100px 0px;">
                            <div class="uk-width-2-10 uk-container-center" style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 30px; line-height: 40px; text-align: center;">Add Check</div>
                            <div class="uk-width-2-10 uk-container-center" style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 16px; line-height: 20px; color: #aaaaaa; text-align: center; ">Create a new check</div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer" style="background: rgba(255, 255, 255, 0.8); border-top: none;">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-4-10 uk-container-center" style="height: 300px; padding: 0px;">
                            <form class="uk-form" action="">
                                <fieldset>
                                    <div class="uk-form-row uk-align-center"><input type="text" id="Alias" placeholder="Alias" style="border-radius: 0px; border-color: #eeeeee; font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; line-height: 40px; height: 40px; width: 100%; color: #cccccc;"></div>
                                    <div class="uk-form-row uk-align-center"><input type="text" id="Url" placeholder="URL" style="border-radius: 0px; border-color: #eeeeee; font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; line-height: 40px; height: 40px; width: 100%; color: #cccccc;"></div>                                    
                                    <div class="uk-form-row uk-align-center">
                                        <select class="wide" id="RequestType" name="RequestType" style="border-radius: 0px; border-color: #eeeeee;  height: 40px; width: 100%;">
                                            <option style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; line-height: 40px; color: #cccccc;" value="GET">GET</option>
                                            <option style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; line-height: 40px; color: #cccccc;" value="POST">POST</option>
                                            <option style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; line-height: 40px; color: #cccccc;" value="PUT">PUT</option>
                                            <option style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; line-height: 40px; color: #cccccc;" value="PATCH">PATCH</option>                                            
                                            <option style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; line-height: 40px; color: #cccccc;" value="DELETE">DELETE</option>                                            
                                        </select>                                        
                                    </div>
                                    <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; line-height: 40px; color: #cccccc; margin-bottom: 0px;">Polling Duration</p>
                                    <div class="uk-form-row uk-align-center"><input type="text" id="PollingDuration" name="PollingDuration" value="" /></div>
                                    <div class="uk-form-row uk-align-center"><input type="hidden" id="CheckId" name="CheckId" value="" /></div>
                                    <div class="uk-form-row uk-align-center" style="text-align: right;"><input class="uk-button" type="submit" value="Submit" name="Create" id="Create" style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; line-height: 40px; color: #aaaaaa;"></div>                                    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
        
        

     
        
        
    </body>
</html>
