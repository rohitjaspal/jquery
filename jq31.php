<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery prepend method </title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>
        $(document).ready(function(){
           $("button").click(function(){
              $("<b>This is appendTo</b>").appendTo("p"); 
           }); 
        });
    </script>
    </head>
    <body>
        <button>Click me</button>
        <p>Sample text</p>
    </body>
</html>