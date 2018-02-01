<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery mouse enter</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        /*$(selector).mousedown()*/
    $(document).ready(function(){
       $("h1").mousedown(function(){
          $("span").text("Mouse down event is executing").show().fadeOut(2000); 
           $("span").css("background-color", "red");
           $("span").css("color", "white");
           
       }); 
    });
    </script>
    </head>
    <body>
        
        <h1>This is test heading</h1>
        <span></span>
    </body>
</html>
