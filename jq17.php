<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery load</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
               $(window).load(function(){
                    alert("Page is loading"); 
               }); 
            
            $("p").click(function(){
                  $(window).unload(function(){
                   alert("Page is closing"); 
                }); 
            });
                
            });
            
            
        </script>
    </head>
    <body>
        <p>click on me</p>
    </body>
</html>
