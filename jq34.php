<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery Detach Method</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>
        
    $(document).ready(function(){
        $("#btn1").click(function(){
           $("body").append($("#p1").detach()); 
        });
        $("#btn2").click(function(){
            $("body").append($("#p2").remove());
        });
    });
    </script>
    </head>
    <body>
       <p id="p1"><b>This para will keep its click event even after it is moved</b></p>
        <p id="p2">This para will not keep its click event after it is moved</p>
        
        <button id="btn1">Detach</button>
        <button id="btn2">Remove</button>
    </body>
</html>