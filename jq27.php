<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery prepend method </title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>
        /*Prepend() method is used to insert the specified content at the beginning of the selected elements.*/
    $(document).ready(function(){
       $("button").click(function(){
          $("p").prepend("<b>Prepended Text</b>"); 
       }); 
    });
    </script>
    </head>
    <body>
       <p>This is first para</p>
        <p>This is second para</p>
        <button>Prepend Text</button>
    </body>
</html>