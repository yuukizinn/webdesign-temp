<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>プログラミングに役立つ書籍</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <img src="4eachblog_logo.jpg" class="logo">
        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
        
        <main>
            <div class="container1">
                
                <h1>プログラミングに役立つ掲示板</h1>
            
                <form method="post" action="insert.php"> 
                    <h3 class="abc">入力フォーム</h3>
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" name="handlename" size="40" class="name">
                    </div>
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" name="title" size="40" class="title">
                    </div>
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea name="comments" rows="15" cols="60"></textarea> 
                    </div> 
                    <div>
                        <input type="submit" value="送信する" class="submit">
                    </div>
                </form>
            </div>
            
            <div class="container2">
                <ul>
                    <h3>人気の記事</h3>
                    <li>PHP おすすめ本</li>
                    <li>PHP MYAdminの使い方</li>
                    <li>今人気のエディタTop5</li>
                    <li>HTMLの基礎</li>
                </ul>
                <ul>
                    <h3>オススメリンク</h3>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
                <ul>
                    <h3>カテゴリ</h3>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </div>
            
            
            
            <?php
        
            mb_internal_encoding("utf8");
            $pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root","mysql");
            $stmt = $pdo->query("select * from 4each_keijiban");
            
            while($row = $stmt->fetch()){

                echo "<div class='container3'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div class='contents'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
            }
            
            ?>


        </main>
        
        <footer>
            <p>copyright © internous | 4each blog is the one which provides A to Z about programming.</p>
        </footer>

    </body>
</html>