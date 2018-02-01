<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery Remove and Empty</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>
        /*This method is used to remove the selected elements out of DOM. THis mehod removes the data and events of the selected elements.*/
        
    $(document).ready(function(){
       $("button").click(function(){
          /*$("p").remove(); 
          $("h1").remove();*/
           $("div").empty();
       }); 
    });
    </script>
    <style>
        div{
            height:300px;
            width:300px;
            background-color: black;
            color:white;
        }
    </style>
</head>
    <body>
     <div>
       <p>this is a first para</p>
        <p>this is second para</p>
        <h1>This is header one
       </h1>
    </div>
        <button>Remove</button>
    </body>
</html>