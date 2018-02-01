<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        var i= 0;
        $(document).ready(function(){
           $("input").keypress(function(){
              $("span").text(i+=1); 
           }); 
        });
    
    </script>
    </head>
    <body>
        <form>
            <input type="text">
        </form>
        <span>0</span>
    
    </body>
</html>