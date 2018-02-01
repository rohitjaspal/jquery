<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery mouse enter</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
           $("h1").hover(function(){
              $("div").text("Mouse is hovering on h1 element").show().fadeOut(3000); 
           }); 
            $("button").hover(function(){
               $(this).text("hovered text").show();
               $(this).css("background-color","red");
               $(this).css("color","white");
            });
        });
    </script>
    </head>
    <body>
         <h1>Enter the mouse pointer on the heading</h1>
        <button>Sample Button</button>
        <div>
        
        </div>
        
    </body>
</html>