<?php

$old_name = $_FILES['image']['tmp_name'];
$new_name = $_FILES['image']['name'];

if(!empty($_FILES['image'])){
$upload = is_uploaded_file('name');
$move = move_uploaded_file($old_name , 'album/'. $new_name);

var_dump($move);
$handle = opendir('./album');
$entry = readdir($handle);

while($entry = readdir($handle)){
  $images[] = $entry;
  unlink("..");
  unlink(".DS_Store");  
}
var_dump($images);

closedir($handle);
}



?>

<!DOCTYPE html>
<html lang="jp">
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

<?php foreach($images as $image): ?>
    <img src="<?php echo $image; ?> " alt="" srcset="" width="200">
<?php endforeach ?>
</body>
</html>