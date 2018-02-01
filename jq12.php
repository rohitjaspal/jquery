<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery mouse enter</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
           $("h1").mouseenter(function(){
              $("div").text("Mouse entered on h1 tag").show().fadeOut(2000); 
              $("span").css("background-color","#ff0022");
              $("span").css("color","#ffffff");
           }); 
            
            $("h1").mouseleave(function(){
               $("span").text("The mouse pointer is out of text").show().fadeOut(4000); 
            });
        });
    </script>
    </head>
    <body>
         <h1>Enter the mouse pointer on the heading</h1>
        <div>
        
        </div>
        <span>THis is test text</span>
    </body>
</html>