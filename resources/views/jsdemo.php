<html>
    <head>
        <title>js</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
       <script>
        $(document).ready(function(){
            $("button").keypress(function(){
                $("p").text("Hello World!");
            });            
        });
    </script>
    </head>
    <body>
        <p>Not loaded yet</p>
        <button type="button" value="button">Replace</button>
        
    </body>
</html>