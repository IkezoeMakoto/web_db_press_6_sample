<!DOCTYPE html>
<html lang="ja">
<head>
    <title>『WEB+DB PRESS Vol.121』「PHPのパフォーマンスチューニングをしよう」ソースコード</title>
</head>
<body>
<h1>『WEB+DB PRESS Vol.121』「PHPのパフォーマンスチューニングをしよう」ソースコード</h1>
<?php
$profile_port = getenv('PROFILE_PORT');
echo "<a href=\"$profile_port\" target=\"_blank\">プロファイリングツール「Webgrind」を見る</a>";
?>
<ul>
    <?php
    $list = ['1-phpinfo.php', '2-simple-function.php', '3-class-method.php', '4-sample-app.php', '5-sample-app.php', '6-sample-app.php'];
    foreach ($list as $link) {
        echo "<li><a href=\"/$link\" target=\"_blank\">$link</a></li>";
    }
    ?>
</ul>
</body>
</html>