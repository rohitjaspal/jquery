<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery Methods</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
   <script>
        $(document).ready(function(){
           $("input").blur(function(){
              alert("this is blur example"); 
           }); 
        });
    
    </script>
    </head>
    <body>
        <form>
            <label>Enter your Name:</label>
            <input type="text" id="input">
        
        </form>
       
        
    </body>
</html>