<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery mouse enter</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>
        /*css() method is used to get (return) or set style properties.It facilitates you to get one or more css style properties*/
      /*css(prop name)*/
        $(document).ready(function(){
           $("button").click(function(){
               alert("background color of p tag =" +$("p").css("background-color"));
               alert("background color of h2 tag =" +$("h2").css("background-color"));
               $("h2").css("background-color","blue");
               $("p").css("background-color","orange");
           }); 
        });
    </script>
    <style>
        h2{
            
        }
        p{
            
        }
    </style>
    </head>
    <body>
         <h2 style="background-color:#ff2200;">this is heading 2</h2>
        <p style="background-color:#66ff00;">This is test para This is test paraThis is test paraThis is test paraThis is test paraThis is test paraThis is test paraThis is test paraThis is test paraThis is test paraThis is test paraThis is test paraThis is test paraThis is test paraThis is test paraThis is test paraThis is test paraThis is test para</p>
        <button>click me</button>
    </body>
</html>