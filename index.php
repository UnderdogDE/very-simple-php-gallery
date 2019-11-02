<!DOCTYPE html>
<html>
<head>
<title>owo</title>
<meta charset='utf-8'>
<style>
body{background-image: url('bg.jpg');
background-repeat: repeat-y-x;
}

img{border-radius:15px;height:150px;
padding:5px;
}

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto ;
  padding: 0px;
  grid-gap: 10px;
  width: auto;
  height: auto;
  margin-left: auto;
  margin-right: auto;
}

.grid-item {
  background-color: #b6b6b64f;
  border: 1px solid #5a5a5acc;
  border-radius: 20px;
  padding: 20px;
  font-size: 30px;
  text-align: center;
  height: auto;
  width: auto;
}

a.date {
  background-color: #222222;
  color: #ffffff;
  padding: 5px;
  border-radius: 20px;
}
</style>
</head>

<body>
<div class='center'>
<div class='grid-container'>
<?php $files = scandir('img/');
    foreach($files as $file) {
        if($file !== "." && $file !== "..") {
echo "<div id='$file' class='grid-item'><a href='img/$file'target='_blank'><img src='img/$file'/></a></div>";}}?>
</div>
<br>
<center><a class='date'> &copy; 2018-<?php echo date("Y");?></a></center>
</body>
</html>>