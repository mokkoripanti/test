<!DOCTYPE HTML>
<html lang="ja">
   
  <head>
    <meta charset="UTF=8"> 
    <title>掲示板</title>
    <link rel="stylesheet"type="text/css"href="style3.css">
  </head>

    
<body> 
<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson17;host=localhost;","root","mysql");  
$stmt=$pdo->query("select*from 4each_keijiban");
?>
    
    
    
    
  <img class="4e" src="4eachblog_logo.jpg">
            

 <header>

    <ul>
       <li>トップ</li>
       <li>プロフィール</li><li>4eachについて</li><li>登録フォーム</li>
       <li>問い合わせ</li>
       <li>その他</li>
    </ul>    
 </header> 
    
<main>
  <div class="left">  
      
<h1>プログラミングに役立つ掲示板</h1>
       
    
<form method="post"action="insert.php">
    
 
   <p>入力フォーム</p>
 
    <div>
 <label>ハンドルネーム</label>
    <br>
   
<input type="text" class="text" size=35 name="handlename">
    </div>
    
    
 <div>
   <lavel>タイトル</lavel> 
     <br>
     <input type="text" class="text" size=35 name="title">
    </div>
    
    
<div>
   <label>コメント</label> 
    <br>
    <textarea colos="35" rows="7" name="comments"></textarea>
    </div>
    
    
        <div><input type="submit"clss="submit"value="送信する">
    </div>
    </form>
    


        
    <?php
        echo"<div class='kiji1'>";
      echo"<h3>タイトル</h3>";
       echo" <div class='content1'>";
       echo" 記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
        記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
        記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>";
       echo" <div class='handlename1'>posted by 通りすがり['handlename']"."</div>";
        
       echo" </div>";
    echo"</div>"
    ?>"
      
    <?php
     while($row=$stmt->fetch()){
        echo"<div class='kiji1'>";
         echo"<h3>".$row['title']."</h3>";
         echo" <div class='content1'>";
         echo $row['comments'];
         echo" <div class='handlename1'>posted by".$row['handlename']."</div>";
         echo" </div>";
         echo"</div>";
         }
    ?>

    
    <?php
        echo"<div class='kiji2'>";
      echo"<h4>タイトル</h4>";
       echo" <div class='content2'>";
       echo" 記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
        記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
        記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>";
       echo" <div class='handlename2'>posted by 通りすがり['handlename']"."</div>";
        
       echo" </div>";
    echo"</div>"
    ?>"
      
          <?php
         while($row=$stmt->fetch()){
        echo"<div class='kiji2>";
         echo"<h4>".$row['title']."</h4>";
         echo" <div class='content2'>";
         echo $row['comments'];
         echo" <div class='handlename2'>posted by".$row['handlename']."</div>";
         echo" </div>";
         echo"</div>";
         }
        ?>
      
  
    </div>
    
  <div class="right">
    <ul>
    <h2>人気の記事</h2>
      <li>PHPオススメ本</li>
      <li>PHP MyAdmireの使い方</li>
      <li>今人気のエディッタTop5</li>
      <li>HTMLの基礎</li>
    </ul>
    
    <ul>
    <h2>オススメのリンク</h2>
    <li>インターノウス株式会社</li>
      <li>XAMPPのダウンロード</li>
      <li>Ecilpseのダウンロード</li>
      <li>Bracketsのダウンロード</li>
    </ul>
    
    <ul>
    <h2>カテゴリ</h2>
    <li>HTML</li>
      <li>PHP</li>
      <li>MySQL</li>
      <li>JavaScript</li>
    </ul>
    </div> 

    

</main> 
    
  <footer>
  copyright c intrnous | 4each blog is the one which provides A to Z about programming.

      
</footer>  
    
</body>    
 </html>
        