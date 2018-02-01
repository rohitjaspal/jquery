<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery prepend method </title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>
    $(document).ready (function(){
        $("button").click(function(){
           $("p").after("<p><b>This is inserted text</b></p>"); 
        });
    });
    </script>
    </head>
    <body>
    <button>click me </button>
        <p>This is para first</p>
        <p>This is para second</p>
        <p>This is para third</p>
    
    </body>
</html>