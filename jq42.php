<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery hasClass</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script> /*This method is used to check whether selected elements have specified class name or not. It returns true if specified class is present in any of the elements otherwise it returns false.*/
    
    $(document).ready(function(){
       $("button").click(function(){
          alert($("p").hasClass("second"));
           alert($("p").hasClass("one"));
       }); 
    });
    </script>
    <style>
        .second{
            font-size:20px;
                color:red;
            font-family:cursive;
        }
    </style>
    </head>
    <body>
       <h1>This is heading</h1>
        <p>This is paragraph</p>
        <p class="second">This is another para</p>
        <button>Click me</button>
    </body>
    
    </html>