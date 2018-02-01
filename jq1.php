<!DOCTYPE HTML>
<html>
    <head>
    <title>Events</title>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    
    </script>
        <style>
            h1,h2,h3{
                cursor: pointer;
            }
            #demo{
                border:1px solid red;
                padding: 22px;
                width:500px;
            }
        </style>
    <script>
    /*$(selector).click()
        $(selector).click(function())
    */
        $(document).ready(function(){
            $("button").click(function(){
               alert("Function click method output"); 
            });
        }); 
        
        $(document).ready(function(){
           $("h1,h2,h3").click(function(){
             $(this).hide();  
           });
        });
        
        $(document).ready(function(){
            $("#demo").click(function(){
               $(this).hide();
                setTimeout(function()
                {
                    $("#demo").show();
                },2000);
            });
        });
    </script>
        

    </head>
    <body>
        <button>Click on me</button>
        <h1>This heading will disappear if you click on this</h1>
        <h2>Hi click on me i will disappear</h2>
        <h3>Mee too...</h3>
        
        <hr>
        <div id="demo">
            <h1>This heading will disappear if you click on this</h1>
        <h2>Hi click on me i will disappear</h2>
        <h3>Mee too...</h3>
        </div>
    </body>
    </html>