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

    $namae = htmlspecialchars($namae, ENT_QUOTES, 'utf-8');
    $denwa = htmlspecialchars($denwa, ENT_QUOTES, 'utf-8');
    $menkyo = htmlspecialchars($menkyo, ENT_QUOTES, 'utf-8');
    $site = htmlspecialchars($site, ENT_QUOTES, 'utf-8');
    // function h($s){
    //     echo htmlspecialchars($s, ENT_QUOTES, 'utf-8');
    // }
    // $namae = h($namae);
    // $denwa = h($denwa);
    // $menkyo = h($menkyo);
    // $site = h($site);

    echo $namae, '様、ご応募ありがとうございます。<br>';
    echo '以下の通り承りましたのでご確認ください。<br><br>'

    ?>

 <table>
    <tr>
        <th>お名前</th><td><?= $namae; ?></td>
    </tr>
    <tr>
        <th>ご連絡先</th><td><?= $denwa; ?></td>
    </tr>
    <tr>
        <th>免許の有無</th><td><?= $menkyo; ?></td>
    </tr>
    <tr>
        <th>サイトを知ったきっかけ</th><td><?= $site; ?></td>
    </tr>
 </table>
    
</body>
</html>