<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        /*$(selector).keydown(),$(selector).keydown(function)*/
    
        $(document).ready(function(){
            $("input").keydown(function(){
               $("input").css("background-color","green");
               $("input").css("color","white");
            });
            
            $("input").keyup(function(){
               $("input").css("background-color","violet");
               $("input").css("height","80px");
               $("input").css("width","200px");
            });   
        });
    </script>
    </head>
    <body>
        <form>
            <label>Name</label>
            <input type="text">
        </form>
    </body> 
    </html>
        
    