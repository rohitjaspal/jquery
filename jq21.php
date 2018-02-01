<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery mouse enter</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
           /*Jquery html()
             1. $(selector).html() 
             2. $(selector).html(content)
             3. $(selector).html(function(index,currentcontent))
           */
        
        $(document).ready(function(){
           $("button").click(function(){
                $("h1").html("<span>We are replacing paragraph text</span>"); 
           }); 
            
           $("#alr").click(function(){
                alert($("h1").html()); 
           });
        });
    </script>
    </head>
    <body>
    
        <button>click me</button>
        <button id="alr">Alert Me</button>
        <p>This is first para</p>
        <p>This is second para</p>
        <p>This is third para</p>
        <h1>This is header tag</h1>
    </body>
</html>
