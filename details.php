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
            /* These are settings for the chart used on details page for Apdex  */
            $(function() {
                /* Use 'html' instead of an array of values to pass options 
                to a sparkline with data in the tag */
                $('.check').sparkline('html', {
                    type: 'bar', 
                    stackedBarColor: ['#888888','#E5EDF5'],
                    barWidth: 3,
                    barSpacing: 2,
                    height: 140
                } );
            });
        
            /* These are settings for the chart used on details page for Response Time  */        
            $(function() {
                /* Use 'html' instead of an array of values to pass options 
                to a sparkline with data in the tag */
                $('.check1').sparkline('html', {
                    type: 'bar', 
                    stackedBarColor: ['#D74CD3','#F6F9FC'],
                    barWidth: 10,
                    barSpacing: 2,
                    height: 200
                } );
            });    

            /* These are settings for the chart used on details page for Latency  */
            $(function() {
                /* Use 'html' instead of an array of values to pass options 
                to a sparkline with data in the tag */
                $('.check2').sparkline('html', {
                    type: 'bar', 
                    stackedBarColor: ['#5597FD','#E5EDF5'],
                    barWidth: 3,
                    barSpacing: 2,
                    height: 140
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
            <div class="uk-width-10-10 uk-container-center" style="height: 500px; padding: 100px 0px; border-bottom: 1px solid #dddddd;">
                <div class="uk-width-3-10 uk-container-center" style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 30px; line-height: 40px; text-align: center;">Admin ShelfJoy Bot</div>
                <div class="uk-width-3-10 uk-container-center" style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 16px; line-height: 20px; color: #aaaaaa; text-align: center; margin-bottom: 50px;">This check has seen 100% uptime withing the past day, and a mean response time of 775ms.</div>
                <div class="uk-width-3-10 uk-container-center" id="newCheck" style="text-align: center; height: 30px; margin-top: -10px; margin: 50px 100px ;"><span class="check1" style="line-height: 60px;">8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9</span></div>
                <div class="uk-width-3-10 uk-container-center" style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 16px; line-height: 20px; color: #aaaaaa; text-align: center; margin-top: 180px;">Uptime Distribution</div>                
            </div>
        </div>
        
        
        <!--First row of existing check. This entire section gets repeated for each check that is configured-->
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-width--10 uk-container-center "  id="" style=" border-bottom: 1px solid #dddddd; background-color: #1B2024;">
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-5-10">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-1-2">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10" style="border-right: 1px solid #444444; padding: 20px 0px 0px 0px;">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 12px; line-height: 14px; color: #95a5a6; text-align: center;">UPTIME</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10" style="border-right: 1px solid #444444; padding: 0px 0px 20px 0px;">
                                        <!--Uptime of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 36px; line-height: 40px; color: #ffffff; text-align: center;">100%</p>                                
                                    </div>
                                </div>                                 
                            </div>
                            <div class="uk-width-1-2">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10" style="border-right: 1px solid #444444; padding: 20px 0px 0px 0px;">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 12px; line-height: 14px; color: #95a5a6; text-align: center;">DOWNTIME</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10" style="border-right: 1px solid #444444; padding: 0px 0px 20px 0px;">
                                        <!--Mean Response time of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 36px; line-height: 40px; color: #ffffff; text-align: center;">0s</p>                                
                                    </div>
                                </div>                                 
                            </div>                          
                        </div>
                    </div>
                    <div class="uk-width-5-10">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-1-2">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10" style="border-right: 1px solid #444444; padding: 20px 0px 0px 0px;">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 12px; line-height: 14px; color: #95a5a6; text-align: center;">MEAN RESPONSE TIME</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10" style="border-right: 1px solid #444444; padding: 0px 0px 20px 0px;">
                                        <!--Uptime of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 36px; line-height: 40px; color: #ffffff; text-align: center;">775MS</p>                                
                                    </div>
                                </div>                                 
                            </div>
                            <div class="uk-width-1-2">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10" style="border-right: 1px solid #444444; padding: 20px 0px 0px 0px;">
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 12px; line-height: 14px; color: #95a5a6; text-align: center;">APDEX</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-10-10" style="border-right: 1px solid #444444; padding: 0px 0px 20px 0px;">
                                        <!--Mean Response time of existing checks-->
                                        <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 36px; line-height: 40px; color: #ffffff; text-align: center;">0.79</p>                                
                                    </div>
                                </div>                                 
                            </div>                          
                        </div>
                    </div>                       
                </div>               
            </div>
        </div>
            
        
        <!-- Apdex Performance in detail --> 
        <div class="uk-grid uk-grid-collapse" style="border-bottom: 1px solid #eeeeee; padding: 100px;">
            <div class="uk-width-1-3">
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-10-10" style="padding: 20px 0px 0px 0px;">
                        <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 30px; line-height: 40px; color: #95a5a6; ">Apdex</p>
                    </div>
                </div>
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-10-10" style="padding: 0px 0px 20px 0px;">
                        <!--Mean Response time of existing checks-->
                        <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; line-height: 16px; color: #95a5a6; ">Apdex measures user satisfaction based on the configured target latency of 1000ms.</p>                                
                    </div>
                </div>                  
            </div>
            <div class="uk-width-2-3">
                <div class="" id="newCheck" height="30" style="text-align: center; height: 30px; margin-top: -10px;"><span class="check" style="line-height: 60px;">8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7</span></div>
            </div>            
        </div>
        
        
        <!-- Mean Response Time Performance in detail --> 
        <div class="uk-grid uk-grid-collapse" style="border-bottom: 1px solid #eeeeee; padding: 100px;">
            <div class="uk-width-1-3">
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-10-10" style="padding: 20px 0px 0px 0px;">
                        <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 30px; line-height: 40px; color: #95a5a6; ">Latency</p>
                    </div>
                </div>
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-10-10" style="padding: 0px 0px 20px 0px;">
                        <!--Mean Response time of existing checks-->
                        <p style="font-family: 'Source Sans Pro'; font-weight: 300; font-size: 14px; line-height: 16px; color: #95a5a6; ">Response time distribution.</p>                                
                    </div>
                </div>                  
            </div>
            <div class="uk-width-2-3">
                <div class="" id="newCheck" height="30" style="text-align: center; height: 30px; margin-top: -10px;"><span class="check2" style="line-height: 60px;">8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7,8:2,3:7,4:6,1:9,6:4,3:7,7:3,8:2,3:7,4:6,1:9,5:5,0:10,6:4,8:2,5:5,3:7</span></div>              
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
