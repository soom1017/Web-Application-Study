<!DOCTYPE html>
<?php
  $conn = mysqli_connect("localhost", "root", 1111);
  mysqli_select_db($conn, "opentutorials");
  $result = mysqli_query($conn, "SELECT * FROM topic");
?>
<html>
  <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" type="text/css" href="http://localhost/css/style.css">
  </head>
  <body id="target">
    <header>
      <img src=https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png alt="생활코딩"/>
      <h1><a href="http://localhost/temp/index.php">JavaScript</a></h1>
    </header>
    <nav>
      <ol>
        <?php
          while($row = mysqli_fetch_assoc($result))
          {
            echo '<li><a href="http://localhost/temp/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
            echo "<br>";
          }
        ?>
      </ol>
    </nav>
    
    <div id="control">
      <input type="button" value="white" onclick="document.getElementById('target').className='white'" />
      <input type="button" value="black" onclick="document.getElementById('target').className='black'" />
      <a href="http://localhost/temp2/write.php">쓰기</a>
    </div>

    <article>
      <form action="http://localhost/temp2/process.php" method="POST">
        <p>
          제목: <input type="text" name="title">
        </p>
        <p>
          작성자: <input type="text" name="author">
        </p>
        <p>
          본문: <textarea name="description" id="description"></textarea>
        </p>
        <input type="hidden" role="uploadcare-uploader" />
        <input type="submit">
      </form>
    </article>
    <script>
      UPLOADCARE_PUBLIC_KEY = '...';
    </script>
    <script src="https://ucarecdn.com/libs/widget/3.x/uploadcare.full.min.js"></script>

    <script>
      //role='uploadcare-uploader'인 태그를 업로드 위젯으로 만들어라.
      var singleWidget = uploadcare.SingleWidget('[role=uploadcare-uploader]');
      //그 위젯을 통해서 업로드가 끝났을 때
      singleWidget.onUploadComplete(function(info){
      //id='description'인 태그의 값 뒤에 업로드한 이미지 파일의 주소를 이미지 태그와 함께 첨부하라.
        document.getElementById('description').value = document.getElementById('description').value 
        +'<img src="'+ info.cdnUrl +'">';
      });
    </script>
  </body>
</html>