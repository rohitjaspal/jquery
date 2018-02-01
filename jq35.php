<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery Scroll Top Method</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>
        /*This method is used to set or return the vertical scroll-bar position for selected elements. When the scroll-bar is at the top its specifies the position Zero.*/
    $(document).ready(function(){
       $("button").click(function(){
          alert($("div").scrollTop()+"px"); 
       }); 
    });
    </script>
    <style>
        div{
            border:1px solid black;
            width:150px;
            height:100px;
            overflow: auto;
            background-color: coral;
            color:white;
        }
    </style>
    </head>
    <body>
        <div>
            <p>This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.This is an example text.</p>
        </div>
        <button>Click me</button>
    </body>
</html>
