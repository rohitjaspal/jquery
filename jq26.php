<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery before </title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>
        /*before() and insertBefore()
            $(selector).before(content,function(index))
        
        */
    $(document).ready(function(){
        $("button").click(function(){
           $("p").before("<p><b style='color:red;'>This is inserted text</b></p>"); 
          /* $("p").insertBefore("<h1>This is sample header text</h1>");*/
            
        }); 
    });
    </script>
    </head>
    <body>
        <p>This is test para-1</p>
                <p>This is test para-2</p>
                <p>This is test para-3</p>
                <p>This is test para-4</p>
        <button>Insert content before each p tag</button>
        
        
    </body>
</html>
