<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>JavaScript</h1>
        <ul>
        <script charset="utf-8">
            result = (1==1);
            if(result)
                document.write("참");
            else
                document.write("거짓");
            i = 0;
            while(i<10) {
                document.write("<li>hello world</li>");
                i = i + 1;
            }
        </script>
        </ul>
        <h1>php</h1>
        <?php
            $result = (1==2);
            if($result)
                echo "참";
            else
                echo "거짓";
            $i = 0;
            while($i<10) {
                echo "hello world<br />";
                $i = $i + 1;
            }
        ?>
    </body>
</html>