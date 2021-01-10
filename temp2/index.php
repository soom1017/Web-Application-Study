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
      <h1><a href="http://localhost/temp2/index.php">JavaScript</a></h1>
    </header>
    <nav>
      <ol>
        <?php
          while($row = mysqli_fetch_assoc($result))
          {
            echo '<li><a href="http://localhost/temp2/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
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
      <?php
        if(empty($_GET['id']) == false) 
        {
          $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
          $result = mysqli_query($conn, $sql); //mysqli_real_escape_string(): 보안 위협 특수문자 사용 방지(sql injection) 
          $row = mysqli_fetch_assoc($result);
          echo '<h2>'.htmlspecialchars($row['title']).'</h2>'; //htmlspecialchars(): php에서 보안 위협 태그 방지(xss)
          echo '<p>'.htmlspecialchars($row['author']).'</p>';
          echo strip_tags($row['description'], '<a><h1><h2><h3><ul><ol><li>'); //strip_tags(): php에서 보안 위협 태그 (선택적) 방지(xss)
        } 
        
      ?>
    </article>
  </body>
</html>