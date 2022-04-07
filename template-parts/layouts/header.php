<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>TƯ VẤN LỚP 12
        THÔNG TIN TUYỂN SINH
        & HỌC BỔNG
        ĐẠI HỌC FPT 2022  - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="<?= (isset($body))?$body:'' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <div id="offcanvas-flip-menu" class="menuMobile" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar menuMobile__bar">
            <button class="uk-offcanvas-close menuMobile__close" type="button" uk-close></button>
            <ul class="menuMobile__nav uk-nav-default uk-nav-parent-icon uk-nav-divider" uk-nav="multiple: true;toggle: .menuMobile__nav__icon">
                <li class="uk-active"><a href="#">Kinh Doanh</a></li>
                <li><a href="">Đời Sống</a></li>
                <li class="uk-parent">
                    <a href="#">Du Lịch</a>
                    <span class="menuMobile__nav__icon"></span>
                    <ul class="uk-nav-sub">
                        <li><a href="#">Đại học</a></li>
                        <li><a href="#">Cao học</a></li>
                        <li><a href="#">Nghiên cứu sinh</a></li>
                        <li><a href="#">Vừa làm vừa học</a></li>
                        <li>
                            <a href="#">Văn bằng 2</a>
                            <ul>
                                <li><a href="#">Kế hoạch đấu thầu</a></li>
                                <li><a href="#">Thông báo mời thầu</a></li>
                                <li><a href="#">Kết quả lựa chọn nhà thầu</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="">Sáng Tạo</a></li>
                <li><a href="">Trải Nghiệm</a></li>
                <li><a href="">Video</a></li>
                <li><a href="">Podcast</a></li>
                <li><a href="">Cafe Vietogether</a></li>
                <li><a href="tatcachude.php">Tất Cả Chủ Đề</a></li>
                <li><a href="">Vietogether Store</a></li>
                <li><a href="cohoivieclam.php">Cơ Hội Nghề Nghiệp</a></li>
                <li><a href="gioithieu.php">Về Vietogether</a></li>
                <li><a href="lienhe.php">Liên Hệ</a></li>
            </ul>
        </div>
    </div>