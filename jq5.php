<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        div{
            height:100px;
            width:auto;
            color:white;
            background-color: brown;
            }
    
    </style>
    </head>
            
           
    <body>
        <form>
            <input type="text" value="Arindam">
            <hr>
            <input type="text" value="Das">
            <hr>
            <textarea rows="10" cols="15"></textarea>
        </form>
        <div>
        
        </div>
        <script>
            $(document).ready(function()
            {
               $("input").select(function()
               {
                  $("div").text("The value within input tag is selected.").show().fadeOut(5000); 
               }); 
            });
        </script>
    </body>
</html>