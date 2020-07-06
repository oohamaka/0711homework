<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>画像のアップロード</title>
</head>
<body>
    <form action=index.php method='post' enctype='multipart/form-data'>
    <input type='file' name='image'>
    <input type='submit' value='送信'>
    </form>
</body>
</html>

<?php
$old_name = $_FILES['image']['tmp_name'];
$new_name = $_FILES['image']['name'];

var_dump($new_name);

$upload = is_uploaded_file('name');
$move = move_uploaded_file($old_name,'album/' . $new_name);

var_dump($move);//trueなのでuploadされている


$images = array();
$handle = $opendir('./album');
$enrtry = readdir($handle);
$images = $entry;

var_dump($images);


closedir($handle);



//foreach ($images as $img){
//    echo '<img src="./index.php' . $img .'">';
//}

?>
