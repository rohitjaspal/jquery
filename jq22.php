<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery mouse enter</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("p").click(function(){
               var htmlString = $(this).html();
                $(this).text(htmlString);
                
            });
        });
    </script>
    <style>
        p{
            margin:8px;
            font-size:20px;
            font-weight: bold;
            color:red;
            cursor: pointer;
        }
        b{
            text-decoration: underline;
        }
    </style>
    </head>
    <body>
        <p>
            <b>Click Me</b>Here to chage the <span id="tag">HTML</span> tag element to text.
        </p>
    </body>
</html>