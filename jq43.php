<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery toggle Class</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>/*This method is used to add and remove one or more classes from the selected elements. It will work b/w adding and removing one or more class name. */
     $(document).ready(function(){
        $("p").click(function(){
           $(this).toggleClass("hi"); 
        }); 
     });
    </script>
    <style>
        p{
            margin:4px;
            font-size:16px;
            font-weight:bolder;
            cursor: pointer;
        }
        .one{
            color:black;
        }
        
        .hi{
          background:pink;  
        }
        
    </style>
    </head>
    <body>
        <p class="one hi">This is para - 1</p>
        <p class="one">This is para - 2</p>
        <p class="one">This is para - 3</p>
        <p class="one">This is para - 4</p>
        <p class="one">This is para - 5</p>
        <p class="one">This is para - 6</p>
        <p class="one">This is para - 7</p>
        
    </body>
</html>