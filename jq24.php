<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery mouse enter</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(document).ready(function(){
           function displayVals()
            {
                var sin = $("#single").val();
                $("p").html("<b>Value:</b>" + sin);
            }
            $("select").change(displayVals);
            displayVals();
        });
    </script>
    <style>
        p{
            color:fuchsia;
            margin:4px;
            font-size:22px;
            font-weight: bold;
        }
        b{
            color:blue;
        }
    </style>
    </head>
    <body>
        <p></p>
  
            <select id="single">
                <option>Kannada</option>
                <option>Telugu</option>
                <option>Hindi</option>
                <option>English</option>
            </select>
       
    </body>
</html>