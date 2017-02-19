/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


            $(document).ready(function()
            {                          
                
//------------------------------------------------------------------------------------------------------------------------------------------------------
//     JS Code to make hero div visible in viewport starts here
//------------------------------------------------------------------------------------------------------------------------------------------------------                                

                var divheightdesktop = ($(window).height()-84)+'px';
                $("#herodesktop").height(divheightdesktop);
                
                var divheighttablet = ($(window).height()-51-36)+'px';
                $("#herotablet").height(divheighttablet);
                
                var divheightmobile = ($(window).height()-51-36)+'px';
                $("#heromobile").height(divheightmobile);
                
//------------------------------------------------------------------------------------------------------------------------------------------------------
//     JS Code to make hero div visible in viewport ends here
//------------------------------------------------------------------------------------------------------------------------------------------------------                                                
                
                
//------------------------------------------------------------------------------------------------------------------------------------------------------
//     JS Code for Sign Up Modal form submit starts here
//------------------------------------------------------------------------------------------------------------------------------------------------------                                
                
//                Sign Up Modal Form Submit for Desktop                
                $("#desktopsignupsubmit").click(function()
                {   
                    var desktopfirstname=$("#desktopfname").val();
                    var desktoplastname=$("#desktoplname").val();
                    var desktopemail=$("#desktopemail").val();
                    var desktopmodalevent=$("#desktopmodalevent").val();
                    $.ajax(
                    {
                        type:"post",
                        url:"signup.php",
                        data:"fname="+desktopfirstname+"&lname="+desktoplastname+"&email="+desktopemail+"&event="+desktopmodalevent,
                        success:function(data)
                        {                                                      
                            $("#desktopmodalcontent").html(data);
                            $("#desktopmodalcontent").hide().fadeIn(500);
                        }
                    });                                                                                
                });
                
//                Sign Up Modal Form Submit for Tablet
                $("#tabletsignupsubmit").click(function()
                {   
                    var tabletfirstname=$("#tabletfname").val();
                    var tabletlastname=$("#tabletlname").val();
                    var tabletemail=$("#tabletemail").val();
                    var tabletmodalevent=$("#tabletmodalevent").val();
                    $.ajax(
                    {
                        type:"post",
                        url:"signup.php",
                        data:"fname="+tabletfirstname+"&lname="+tabletlastname+"&email="+tabletemail+"&event="+tabletmodalevent,
                        success:function(data)
                        {                                                      
                            $("#tabletmodalcontent").html(data);
                            $("#tabletmodalcontent").hide().fadeIn(500);
                        }
                    });                                                                                
                });
                
//                Sign Up Modal Form Submit for Mobile
                $("#mobilesignupsubmit").click(function()
                {   
                    var mobilefirstname=$("#mobilefname").val();
                    var mobilelastname=$("#mobilelname").val();
                    var mobileemail=$("#mobileemail").val();
                    var mobilemodalevent=$("#mobilemodalevent").val();
                    $.ajax(
                    {
                        type:"post",
                        url:"signup.php",
                        data:"fname="+mobilefirstname+"&lname="+mobilelastname+"&email="+mobileemail+"&event="+mobilemodalevent,
                        success:function(data)
                        {                                                      
                            $("#mobilemodalcontent").html(data);
                            $("#mobilemodalcontent").hide().fadeIn(500);
                        }
                    });                                                                                
                });
                
                
                
//------------------------------------------------------------------------------------------------------------------------------------------------------
//     JS Code for Sign Up Modal form submit ends here
//------------------------------------------------------------------------------------------------------------------------------------------------------                                                
                
                
//------------------------------------------------------------------------------------------------------------------------------------------------------
//     JS Code for Footer Sign Up form submit starts here
//------------------------------------------------------------------------------------------------------------------------------------------------------                                                
                
//                JS Code for Footer Sign Up Form Submit for Desktop                
                $("#desktopfootersignupsubmit").click(function()
                {   
                    var desktopfooterfirstname=$("#desktopfooterfname").val();
                    var desktopfooterlastname=$("#desktopfooterlname").val();
                    var desktopfooteremail=$("#desktopfooteremail").val();
                    var desktopfooterevent=$("#desktopfooterevent").val();
                    $.ajax(
                    {
                        type:"post",
                        url:"signup.php",
                        data:"fname="+desktopfooterfirstname+"&lname="+desktopfooterlastname+"&email="+desktopfooteremail+"&event="+desktopfooterevent,
                        success:function(data1)
                        {                                                      
                            $("#desktopfootersignupcontent").html(data1);
                            $("#desktopfootersignupcontent").hide().fadeIn(500);
                        }
                    });                                                                                
                });
                
//                JS Code for Footer Sign Up Form Submit for Tablet
                $("#tabletfootersignupsubmit").click(function()
                {   
                    var tabletfooterfirstname=$("#tabletfooterfname").val();
                    var tabletfooterlastname=$("#tabletfooterlname").val();
                    var tabletfooteremail=$("#tabletfooteremail").val();
                    var tabletfooterevent=$("#tabletfooterevent").val();
                    $.ajax(
                    {
                        type:"post",
                        url:"signup.php",
                        data:"fname="+tabletfooterfirstname+"&lname="+tabletfooterlastname+"&email="+tabletfooteremail+"&event="+tabletfooterevent,
                        success:function(data1)
                        {                                                      
                            $("#tabletfootersignupcontent").html(data1);
                            $("#tabletfootersignupcontent").hide().fadeIn(500);
                        }
                    });                                                                                
                });
                
//                JS Code for Footer Sign Up Form Submit for Mobile
                $("#mobilefootersignupsubmit").click(function()
                {   
                    var mobilefooterfirstname=$("#mobilefooterfname").val();
                    var mobilefooterlastname=$("#mobilefooterlname").val();
                    var mobilefooteremail=$("#mobilefooteremail").val();
                    var mobilefooterevent=$("#mobilefooterevent").val();
                    $.ajax(
                    {
                        type:"post",
                        url:"signup.php",
                        data:"fname="+mobilefooterfirstname+"&lname="+mobilefooterlastname+"&email="+mobilefooteremail+"&event="+mobilefooterevent,
                        success:function(data1)
                        {                                                      
                            $("#mobilefootersignupcontent").html(data1);
                            $("#mobilefootersignupcontent").hide().fadeIn(500);
                        }
                    });                                                                                
                });

                
                
//------------------------------------------------------------------------------------------------------------------------------------------------------
//     JS Code for Footer Sign Up form submit ends here
//------------------------------------------------------------------------------------------------------------------------------------------------------                                                                
                
                
                
//------------------------------------------------------------------------------------------------------------------------------------------------------
//     JS Code for Contact Us form submit starts here
//------------------------------------------------------------------------------------------------------------------------------------------------------                
                
//                Contact Us Form Submit for Desktop
                $("#desktopcontactsubmit").click(function()
                {   
                    var desktopcontactfirstname=$("#desktopcontactfname").val();
                    var desktopcontactlastname=$("#desktopcontactlname").val();
                    var desktopcontactemail=$("#desktopcontactemail").val();
                    var desktopcontactmessage=$("#desktopcontactmessage").val();
                    var desktopcontactevent=$("#desktopcontactevent").val();
                    $.ajax(
                    {
                        type:"post",
                        url:"signup.php",
                        data:"fname="+desktopcontactfirstname+"&lname="+desktopcontactlastname+"&email="+desktopcontactemail+"&message="+desktopcontactmessage+"&event="+desktopcontactevent,
                        success:function(data1)
                        {                                                      
                            $("#desktopmodalcontact").html(data1);
                            $("#htmlemail").remove();
                            $("#desktopmodalcontact").hide().fadeIn(500);
                        }
                    });                                                                                
                });
                
//                Contact Us Form Submit for Tablet                
                $("#tabletcontactsubmit").click(function()
                {   
                    var tabletcontactfirstname=$("#tabletcontactfname").val();
                    var tabletcontactlastname=$("#tabletcontactlname").val();
                    var tabletcontactemail=$("#tabletcontactemail").val();
                    var tabletcontactmessage=$("#tabletcontactmessage").val();
                    var tabletcontactevent=$("#tabletcontactevent").val();
                    $.ajax(
                    {
                        type:"post",
                        url:"signup.php",
                        data:"fname="+tabletcontactfirstname+"&lname="+tabletcontactlastname+"&email="+tabletcontactemail+"&message="+tabletcontactmessage+"&event="+tabletcontactevent,
                        success:function(data1)
                        {                                                      
                            $("#tabletmodalcontact").html(data1);
                            $("#htmlemail").remove();
                            $("#tabletmodalcontact").hide().fadeIn(500);
                        }
                    });                                                                                
                });
                
//                Contact Us Form Submit for Mobile                
                $("#mobilecontactsubmit").click(function()
                {   
                    var mobilecontactfirstname=$("#mobilecontactfname").val();
                    var mobilecontactlastname=$("#mobilecontactlname").val();
                    var mobilecontactemail=$("#mobilecontactemail").val();
                    var mobilecontactmessage=$("#mobilecontactmessage").val();
                    var mobilecontactevent=$("#mobilecontactevent").val();
                    $.ajax(
                    {
                        type:"post",
                        url:"signup.php",
                        data:"fname="+mobilecontactfirstname+"&lname="+mobilecontactlastname+"&email="+mobilecontactemail+"&message="+mobilecontactmessage+"&event="+mobilecontactevent,
                        success:function(data1)
                        {                                                      
                            $("#mobilemodalcontact").html(data1);
                            $("#htmlemail").remove();
                            $("#mobilemodalcontact").hide().fadeIn(500);
                        }
                    });                                                                                
                });
                
//------------------------------------------------------------------------------------------------------------------------------------------------------
//     JS Code for Contact Us form submit ends here
//------------------------------------------------------------------------------------------------------------------------------------------------------                
                
                
                return false;
                
                
                
//                $("#opensignupmodal,#signupbtn").click(function()
//                {            
//                    if(submitbool===true)
//                    {
//                        var originalcontent='<p class="modalheading uk-text-center">Sign up for free</p><input class="signupmodalfirstname uk-width-1-1 uk-form-large " type="text" id="fname" placeholder="First name" style=""><input class="uk-width-1-1 uk-form-large signupmodallastname" type="text" id="lname" placeholder="Last name" style=""><input class="uk-width-1-1 uk-form-large uk-margin-small-top signupmodalemail" type="text" id="email" placeholder="Email" style=""><button type="button" id="signupsubmit" class="uk-button uk-button-primary maincta uk-width-1-1 uk-margin-small-top">SIGNUP FOR FREE</button>';
//                        $("#modalcontent").html(originalcontent);    
//                        submitbool=false;
//                    };
//
//                });                
            });  