<!DOCTYPE HTML>
<?php
$json = json_decode(file_get_contents('http://webservice.recruit.co.jp/hotpepper/genre/v1/?key=7df6830b61b650df&format=json'));
?>
<html>
    <head>
        <title>ホットペッパーAPIデモ</title>
    </head>
    <body>
        <div class="container">
            <h1>ホットペッパーAPIデモ</h1>
            <p>飲食店のジャンル一覧を表示する。</p>
            <p>リクエスト先URL: http://webservice.recruit.co.jp/hotpepper/genre/v1/?key=7df6830b61b650df&format=json</p>
            <ul class="genres">
                <?php foreach($json->results->genre as $genre): ?>
                    <li class="genre">
                        ジャンル名: <?php echo $genre->name ?><br/>
                        ジャンルコード: <?php echo $genre->code ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </body>
</html>