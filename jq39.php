<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery offset method</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>/*This method is used to get the current offset of first matched element.It provides two methods to set or return the offset coordinates for the selected elements.*/
        $(document).ready(function(){
           $("button").click(function(){
              var x = $("p").offset();
               alert("Top="+x.top + "Left="+x.left);
               alert(" " +x.bottom + "" + x.right);
           }); 
        });
    
    </script>
    </head>
    <body>
        <br><br>
        <p>             Hi i am arindam i am learning jquery</p>
        <button>Click me</button>
    </body>
</html>