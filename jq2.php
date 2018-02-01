<!DOCTYPE HTML>
<html>
    <head>
    <title>Bind Events</title>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        </script>
        <script>
        /*$(selector).bind(event,data,function,map)*/
        $(document).ready(function(){
           $("button").bind("click",function(){
              alert("This is a bind function");
               
           }); 
        });
        </script>
    </head>
        <body>
            <button>click me</button>
        
        </body>
</html>