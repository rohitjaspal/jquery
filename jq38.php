<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery prop method</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <style>
        p{
            margin:20px 0 0;
        }
        b{
            color:red;
        }
    </style>
    <script>
        $(document).ready(function(){ 
        $("input").change(function(){
           var $input = $(this);
            $("p").html(
            ".attr(\"checked\"):<b>" + $input.attr("checked") + "</b><br>" +
            ".prop(\":checked\"):<b>" + $input.prop("checked") + "</b><br>"+
            ".is(\":checked\"):<b>" + $input.is(":checked")) + "</b>";
        }).change();
            });
    </script>
    </head>
    <body>
        <input id="check1" type="checkbox" checked="checked" value="">
        <label for="check1">Check me</label>
        <p></p>
    </body>
</html>