<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery position method</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>/*This method makes you able to retrieve the current position of he element related to the parent element. It returns the position of the first matched element. It returns two properties in top and left in px */
     $(document).ready(function(){
        $("button").click(function(){
           var x = $("p").position();
            alert("Top position="+x.top + "Left POsition="+x.left);
        }); 
     });
    </script>
    </head>
    <body>
        <br><br>
            <p>        Hi i am arindam</p>
        <button>Click me</button>
    </body>
</html>