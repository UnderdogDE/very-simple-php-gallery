<!DOCTYPE html>
<html>
<head>
<title>owo</title>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<style>
body{background-image: url('bg.jpg');background-repeat: repeat-y-x;}
img{border-radius:15px;height:200px;padding:5px;}
.center{ width:90%;margin-left:auto;margin-right:auto;}
</style>
</head>
<body>
<div class='center'>
<?php $files = scandir('img/');
    foreach($files as $file) {
        if($file !== "." && $file !== "..") {
echo "<a href='img/$file'target='_blank'><img src='img/$file'/></a>";}}?>
</div>
</body>
</html>