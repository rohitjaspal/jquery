<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery width</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script><!--This method is used to return or set the width of the matched element.-->
    
    <script>
       
        $(document).ready(function(){
            var m = 70;
            $("div").one("click",function(){
               $(this).width(m).addClass("mod");
                m -= 5;//m=m-5;
            });
        });
    </script>
    <style>
        div{
            width:100px;
            height:90px;
            float: left;
            margin:5px;
            background-color: orangered;
            cursor: pointer;
            
        }
        .mod{
            background: green;
            cursor: default;
        }
    </style>
    </head>
    <body>
        <div>A</div>
        <div>B</div>
        <div>C</div>
        <div>D</div>
        <div>E</div>
        <div>F</div>
    </body>
</html>