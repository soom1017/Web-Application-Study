<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>JavaScript</h1>
        <ul>
        <script charset="utf-8">
            list = new Array("이", "이수", "이수민");
            i = 0;
            while(i<list.length)
            {
                document.write("<li>"+list[i]+"</li>");
                i = i + 1;
            }
            function a(input)
            {
                return input + 1;
            }
            document.write(a(6));
            prompt(a(6));
        </script>
        </ul>
        <h1>php</h1>
        <?php
            $list = array("이", "이수", "이수민");
            $i = 0;
            while($i<count($list))
            {
                echo $list[$i];
                $i = $i + 1;
            }
            function a()
            {
                echo "Hello PHP function";
            }
            a();
        ?>
    </body>
</html>