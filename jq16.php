<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery mouse enter</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        /*mouseover()*/
    $(document).ready(function(){
       $("p").mouseover(function(){
          $(this).css("background-color","green");
          $(this).css("color","white");
          $(this).css("font-size","40px");
          $(this).css("font-family","cursive");
       }); 
        
        $("p").mouseout(function(){
          $(this).css("background-color","orange");
          $(this).css("color","white");
          $(this).css("font-size","30px");
          $(this).css("font-family","sans serif");
        });
    });
    </script>
    </head>
    
    <body>
        <p>Move your mouse over this paragraph</p>
    
    </body>
</html>