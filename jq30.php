<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery prepend method </title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>
        $(document).ready(function(){
           $("#para").click(function(){
              $("p").append("<b>Appended Text</b>"); 
           }); 
            $("#row").click(function(){
               $("ul").append("<li>Content</li>"); 
            });
        });
    </script>
    </head>
    <body>
        <p>This is paragraph</p>
        <button id="para">Append para</button>
        
        <ul>
            <li>Item</li>
        </ul>
        
        
        <button id="row">Append row</button>
    </body>
    </html>