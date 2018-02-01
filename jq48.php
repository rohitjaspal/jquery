<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery Wrap</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>
        /*This method is used to wrap specified HTML elements around each selected element. The wrap function can accept any string or object that could be passed through $ factory function. */
        $(document).ready(function(){
           $("button").click(function(){
              $("p").wrap("<div></div>"); 
              $("p").wrapInner("<em></em");
           }); 
        });
        
        $(document).ready(function(){
           $("#btn1").click(function(){
              $("#p1").wrapAll("<div></div>"); 
              $("#p1").wrapInner("<em></em");
           }); 
        });
    </script>
    <style>
        div{
            background-color: blue;
        }
    </style>
    </head>
    <body>
     <p>This is first para</p>
        <p>This is arindam learning jquery</p>
        
        <button>Click me</button>
       <hr> 
        <h1 id="p1">This is first para</h1>
        <p id="p1">This is arindam learning jquery</p>
        
        <button id="btn1">Click me</button>
    </body>
</html>