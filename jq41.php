<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery addClass</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>/* This method is used to add one or more class name to the selected element */
    $(document).ready(function(){
       $("button").click(function(){
          $("p:last").addClass("second"); 
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
        <p>This is another para</p>
        <button>Click me</button>
    </body>
    
    </html>