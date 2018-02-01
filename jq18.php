<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery load</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        /*$(selector).delegate(childSelector,event,data,function)*/
        $(document).ready(function(){
           $("body").delegate("p","click",function(){
                $(this).after("<p>Click on me to add one more</p>"); 
           }); 
        });
    </script>
    <style>
        p{
            background:yellow;
            color:black;
            font-weight: bold;
            cursor: pointer;
            padding: 5px;
        }
       
    </style>
    </head>
    <body>
        
        <p>THis is single paragraph,click on button for next</p>
    </body>
</html>