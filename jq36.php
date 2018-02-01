<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery ScrollDown Method</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>
       $(function(){
          $('a[href*=#]').on('click',function(e){
             e.preventDefault();
              $('html,body').animate({scrollTop:
                                     $($(this).attr('href')).offset().top},500,
                                    'linear');
          }); 
       });
    
    </script>
    <link href="test.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <section id="section1" class="demo">
            <h1>Scroll down Button #1</h1>
            <a href="#section2"><span></span>Scroll</a>
        </section>
        
        <section id="section2" class="demo">
            <h1>Scroll down Button #2</h1>
            <a href="#section3"><span></span>Scroll</a>
        </section>
        
        <section id="section3" class="demo">
            <h1>Scroll down Button #3</h1>
            <a href="#section4"><span></span>Scroll</a>
        </section>
        <section id="section4" class="demo">
            <h1>Scroll down Button #4</h1>
            <a href="#section5"><span></span>Scroll</a>
        </section>
        <section id="section05" class="demo">
            <h1>Scroll down Button #5</h1>
            
        </section>
        
        
    </body>
    </html>