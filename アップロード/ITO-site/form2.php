<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>応募受付</title>
</head>
<body>
    <?php

    $namae = $_POST['namae'];
    $denwa = $_POST['denwa'];
    $menkyo = $_POST['menkyo'];
    $site = $_POST['site'];

    function h($s){
        echo htmlspecialchars($s, ENT_QUOTES, 'utf-8');
    }
    $namae = h($namae);
    $denwa = h($denwa);
    $menkyo = h($menkyo);
    $site = h($site);

    echo $namae, '様、ご応募ありがとうございます。<br>';
    echo '以下の通り承りましたのでご確認ください。<br><br>'

    ?>
    
</body>
</html>