<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="shortcut icon" type="image/png" href="favicon.gif">

	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css?2690">
	<link rel="stylesheet" type="text/css" href="style.css?5068">
	<link rel="stylesheet" type="text/css" href="./css/animate.css?623">
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">

    <script src="https://cdn.tiny.cloud/1/q20me2lq324zx9ghdwurx2ubtnopvgfopgk9ncqxvwom4vja/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  	<script>
    tinymce.init({
      selector: 'textarea#formeditor',
      plugins: 'image imagetools paste',
      toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | rotateleft rotateright | flipv fliph | editimage imageoptions paste',
      paste_data_images: true,
      images_upload_url: './addimg.php',
      automatic_uploads: true,
      language: 'ru',
      height: '500',
      content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
    });
    </script>
<?php
include('config.php');
$form1 = '"'.$_POST['editarticle'].'"';
$conn = mysqli_connect($host, $username, $password, $database);
$query = "SELECT `headliner`, `description`, `contents` FROM `news` WHERE `headliner` = {$form1}";
$res = mysqli_query($conn, $query);
mysqli_close($conn);
while ($arr = mysqli_fetch_assoc($res)) {
    $resarr[] = $arr;
}
?>
</head>
<body>
    <div class="p-5"></div>
    <div class="container-md bg-light p-5 rounded-lg formbtn">
    <form action="ednews2.php" method="POST" id='theform'>
        <div class="form-group">
            <label for="headliner">Заголовок</label>
            <input id="headliner" name="headliner" type="text" class="form-control" required value="<?php echo $_POST['editarticle']?>">
            <small id="edown" class="form-text text-muted">Пожалуйста, не используйте слишком длинные заголовки</small>
        </div>
        <div class="form-group">
            <label for="headliner">Описание</label>
            <textarea id="description" name="description" type="text" class="form-control" required rows="5"><?=$resarr[0]['description']?></textarea>
        </div>
        <div>
            <textarea id="formeditor" name="formeditor">
              <?= f?>
            </textarea>
        </div>
        <div class="p-5">
            <button class="btn btn-outline-primary btn-lg btn-lg btn-block" type="submit" name="zag" value=<?=$form1?>>
            Изменить
            </button>
        </div>
    </form>
</div>
</body>

</html>
