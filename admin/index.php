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
    <script src="https://cdn.tiny.cloud/1/q20me2lq324zx9ghdwurx2ubtnopvgfopgk9ncqxvwom4vja/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>


    <title>Система управления</title>

    <?php
    include('config.php');
    $conn = mysqli_connect($host, $username, $password, $database);
    mysqli_set_charset($conn, "utf8");
    if (!$conn) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    $mainquery = 'SELECT `headliner`, `id` FROM `news`';
    $query1 = 'SELECT `headliner`, `id` FROM `news` WHERE `imp_place` = 1';
    $query2 = 'SELECT `headliner`, `id` FROM `news` WHERE `imp_place` = 2';
    $query3 = 'SELECT `headliner`, `id` FROM `news` WHERE `imp_place` = 3';
    $query4 = 'SELECT `headliner`, `id` FROM `news` WHERE `imp_place` = 4';
    $mainresult = mysqli_query($conn, $mainquery);
    $result1 = mysqli_query($conn, $query1);
    $result2 = mysqli_query($conn, $query2);
    $result3 = mysqli_query($conn, $query3);
    $result4 = mysqli_query($conn, $query4);
    while ($mainarray = mysqli_fetch_assoc($mainresult)) {
        $mainres[] = $mainarray;
    }
    $res_array1 = mysqli_fetch_assoc($result1);
    $res_array2 = mysqli_fetch_assoc($result2);
    $res_array3 = mysqli_fetch_assoc($result3);
    $res_array4 = mysqli_fetch_assoc($result4);
    mysqli_close($conn);
    $imp_news_1 = "";
    $imp_news_2 = "";
    $imp_news_3 = "";
    $imp_news_4 = "";
    if (isset($res_array1)) {
    $imp_news_1 = $res_array1['headliner'];
  }
    if (isset($res_array2)) {
    $imp_news_2 = $res_array2['headliner'];
  }
    if (isset($res_array3)) {
    $imp_news_3 = $res_array3['headliner'];
  }
    if (isset($res_array4)) {
    $imp_news_4 = $res_array4['headliner'];
  }
    ?>

    <!-- Analytics -->

    <!-- Analytics END -->

</head>
<body>
<!-- Main container -->
<div class="page-container">

    <!-- bloc-25 -->
    <div class="bloc l-bloc" id="bloc-25">
        <div class="container bloc-lg">
            <div class="row">
                <div class="col bgc-white-2 admpanel">
                    <h1 class="mg-md text-lg-center">
                        Админ-панель
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- bloc-25 END -->

    <!-- bloc-25 -->
    <div class="bloc l-bloc" id="bloc-25">
        <div class="container bloc-lg">
            <div class="row">
                <div class="col-md-6 order-lg-0 offset-lg-0">
                    <a href="#" class="btn adm-btn btn-white-2 btn-lg float-lg-none none btn-block" data-toggle="modal"
                       data-target="#modal-40867">Добавить новость<br></a>
                    <div class="divider-h">
                        <span class="divider"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <a href="#" class="btn btn-lg btn-block adm-btn btn-white-2" data-toggle="modal"
                           data-target="#ffsdffsd">Изменить список важных новостей</a>
                        <div class="divider-h">
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="#" class="btn btn-lg adm-btn btn-white-2 float-lg-none btn-block" data-toggle="modal"
                       data-target="#modal-21049">Редактировать новости</a>
                </div>
            </div>
        </div>
    </div>
    <!-- bloc-25 END -->

    <!-- bloc-27 -->
    <div class="bloc l-bloc" id="bloc-27">
        <div class="container bloc-lg">
            <div class="row">
                <div class="col">
                    <div id="modal-21049" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-fill modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="mg-clear">
                                        Редактировать новости
                                    </h3><a href="#" class="btn btn-d btn-lg btn-style-none" data-dismiss="modal"
                                            aria-label="Close"><span class="fa fa-close close"></span></a>
                                </div>
                                <div class="modal-body">
                                    <form id="form_3" data-form-type="blocs-form" novalidate
                                          data-success-msg="Your message has been sent."
                                          data-fail-msg="Sorry it seems that our mail server is not responding, Sorry for the inconvenience!"
                                          action="editnews.php" method="POST">
                                        <select class="form-control" name="editarticle">
                                            <?php
                                            foreach ($mainres as $v) {
                                                echo '<option value="' . $v['headliner'] . '">
										' . $v['headliner'] . '
										</option>';
                                            } ?>
                                        </select>
                                        <div class="divider-h">
                                            <span class="divider"></span>
                                        </div>
                                        <button class="bloc-button btn btn-lg float-lg-right btn6 btn-d" type="submit">
                                            Изменить
                                        </button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bloc-27 END -->

    <!-- bloc-28 -->
    <div class="bloc l-bloc" id="bloc-28">
        <div class="container bloc-lg">
            <div class="row">
                <div class="col">
                    <div id="ffsdffsd" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-fill modal-dialog-centered" role="document">
                            <div class="rwer modal-content">
                                <div class="modal-header">
                                    <h3 class="mg-clear">
                                        Изменить важные новости
                                    </h3><a href="#" class="btn btn-d btn-lg btn-style-none" data-dismiss="modal"
                                            aria-label="Close"><span class="fa fa-close close"></span></a>
                                </div>
                                <form action="impnews.php" method="POST">
                                    <div class="modal-body">
                                        <b>Первая новость</b>
                                        <select class="form-control" id="impnews-1" name="impnews-1">
                                            <option value="<?= $res_array1['id']; ?>">
                                                <?= $imp_news_1; ?>
                                            </option>
                                            <?php
                                            foreach ($mainres as $v) {
                                                echo
                                                    '<option value="' . $v['id'] . '">
										' . $v['headliner'] . '
										</option>';
                                            } ?>
                                        </select>
                                        <div class="divider-h">
                                            <span class="divider"></span>
                                        </div>
                                        <b>Вторая новость</b>
                                        <select class="form-control" id="impnews-2" name="impnews-2">
                                            <option value="<?= $res_array2['id']; ?>">
                                                <?= $imp_news_2; ?>
                                            </option>
                                            <?php
                                            foreach ($mainres as $v) {
                                                echo
                                                    '<option value="' . $v['id'] . '">
										' . $v['headliner'] . '
										</option>';
                                            } ?>
                                            <option value="0">
                                            </option>
                                        </select>
                                        <div class="divider-h">
                                            <span class="divider"></span>
                                        </div>
                                        <b>Третья новость</b>
                                        <select class="form-control" id="impnews-3" name="impnews-3">
                                            <option value="<?= $res_array3['id']; ?>">
                                                <?= $imp_news_3; ?>
                                            </option>
                                            <?php
                                            foreach ($mainres as $v) {
                                                echo
                                                    '<option value="' . $v['id'] . '">
										' . $v['headliner'] . '
										</option>';
                                            } ?>
                                        </select>
                                        <div class="divider-h">
                                            <span class="divider"></span>
                                        </div>
                                        <b>Четвертая новость</b>
                                        <select class="form-control" id="impnews-4" id="impnews-4" name="impnews-4">
                                            <option value="<?= $res_array4['id']; ?>">
                                                <?= $imp_news_4; ?>
                                            </option>
                                            <?php
                                            foreach ($mainres as $v) {
                                                echo
                                                    '<option value="' . $v['id'] . '">
										' . $v['headliner'] . '
										</option>';
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="bgc-carrot-orange modal-footer">
                                        <button type="submit" class="btn btn-d btn-lg btn6">Изменить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bloc-28 END -->

<!-- bloc-26 -->
<div class="bloc full-width-bloc l-bloc" id="bloc-26">
    <div class="container bloc-md">
        <div class="row">
            <div class="col">
                <div id="modal-40867" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-fill modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="mg-clear">
                                    Добавить новость
                                </h3><a href="#" class="btn btn-d btn-lg btn-style-none" data-dismiss="modal"
                                        aria-label="Close"><span class="fa fa-close close"></span></a>
                            </div>
                            <div class="modal-body">
                                <form id="form_1" data-form-type="blocs-form" novalidate
                                      data-success-msg="Your message has been sent."
                                      data-fail-msg="Sorry it seems that our mail server is not responding, Sorry for the inconvenience!"
                                      action="newsadd.php" method="POST">
                                    <div class="form-group">
                                        <label>
                                            Заголовок
                                        </label>
                                        <input id="headliner" class="form-control formstyle" required name="headliner"/>
                                          <small id="edown" class="form-text text-muted">Пожалуйста, не используйте слишком длинные заголовки</small>
                                    </div>
                                    <div class="form-group container-div-style">
                                        <label>
                                            Описание
                                        </label>
                                        <textarea id="description" class="form-control formstyle" required name="description" rows="5" style="resize: none;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="formeditor">Содержание</label>
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
                                        <textarea id="formeditor" name="formeditor">
                  </textarea>
                                    </div>
                                    <div class="p-5">
                                        <button class="btn btn-lg bloc-button btn6 float-lg-right" type="submit">
                                            Добавить
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bloc-26 END -->

<!-- ScrollToTop Button -->
<a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1',this)"><span
            class="fa fa-chevron-up"></span></a>
<!-- ScrollToTop Button END-->


</div>
<!-- Main container END -->


<!-- Additional JS -->
<script src="./js/jquery-3.5.1.js?4857"></script>
<script src="./js/bootstrap.bundle.js?9590"></script>
<script src="./js/blocs.js?9530"></script>
<script src="./js/jqBootstrapValidation.js"></script>
<script src="./js/formHandler.js?4102"></script>
<script src="./js/lazysizes.min.js" defer></script>
<script src="./js/page-scroll-progress.js?7215"></script>
<script src="./js/phone_publish.js?1290"></script>
<!-- Additional JS END -->


<!-- Preloader -->
<div id="page-loading-blocs-notifaction" class="page-preloader"></div>
<!-- Preloader END -->

</body>
</html>
