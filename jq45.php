<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery Height</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>
        /* This method is used to return the current computed height for the first element or set the height of every matched element.*/
        
        $(document).ready(function(){
           $("div").one("click",function(){
              $(this).height(50).css({
                 cursor:"auto",
                  backgroundColor:"green"
              }); 
           }); 
        });
    </script>
    <style>
        div{
            width:50px;
            height:100px;
            float: left;
            margin:5px;
            background-color: rebeccapurple;
            cursor: pointer;
        }
    </style>
    </head>
    <body>
        <div></div>
         <div></div>
         <div></div>
         <div></div>
         <div></div>
         <div></div>
         <div></div>
         <div></div>
    </body>
</html>
            