<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-position-top uk-position-z-index header" uk-sticky>
    <div class="uk-container uk-padding-remove">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

            <div class="uk-navbar-left">
                <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas-flip-menu" uk-toggle>
                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                </a>
                <a href="" class="uk-navbar-item uk-logo uk-background-default uk-visible@m"><img src="images/1x/logo.png" alt=""></a>
            </div>

            <div class="uk-navbar-center">
                <a href="" class="uk-navbar-item uk-logo uk-background-default uk-hidden@m"><img src="images/1x/logo.png" alt=""></a>
            </div>

            <div class="uk-navbar-right">

                <ul class="uk-navbar-nav uk-visible@m" uk-scrollspy-nav="closest: li; scroll: true; offset: 80">
                    <li><a href="#home">TRANG CHỦ</a></li>
                    <li><a href="#taisao">TẠI SAO CHỌN ĐH FPT?</a></li>
                    <li><a href="#">THÔNG BÁO TUYỂN SINH</a></li>
                    <li><a href="#chuyennganh">CHUYÊN NGÀNH ĐÀO TẠO</a></li>
                    <li><a href="#">ĐĂNG KÝ HỌC</a></li>
                    <li><a href="#">ĐĂNG NHẬP</a></li>
                </ul>

            </div>

        </nav>
    </div>
</div>
<div id="home" class="uk-height-viewport uk-flex uk-flex-middle uk-overflow-hidden uk-position-relative">
    <div class="home__section1__bg1 uk-position-cover uk-background-norepeat uk-background-bottom-center" data-src="images/1x/bg1.png" uk-img></div>
    <div class="home__section1__bg2 uk-position-cover uk-background-image@m"></div>
    <div class="uk-position-bottom-center">
        <div class="uk-container">
            <img uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true" src="images/1x/img1.png" alt="">
        </div>
    </div>
    <div class="home__section1__content uk-section-large uk-width-1-1 uk-position-relative">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-1-3@m">
                    <div class="home__section1__txt1">
                        TƯ VẤN LỚP 12 <br class="uk-visible@m">
                        THÔNG TIN TUYỂN SINH <br class="uk-visible@m">
                        & HỌC BỔNG <br class="uk-visible@m">
                        ĐẠI HỌC FPT 2022
                    </div>
                </div>
                <div class="uk-width-expand uk-visible@m">

                </div>
                <div class="uk-width-1-3@m">
                    <div class="home__section6__card uk-card uk-card-body uk-card-default">
                        <form>
                            <fieldset class="uk-fieldset">

                                <legend class="uk-legend uk-text-center home__section6__card__title">ĐĂNG KÝ TƯ VẤN</legend>

                                <div class="uk-margin-small">
                                    <input class="uk-input home__section6__card__input" type="text" placeholder="Họ và tên">
                                </div>
                                <div class="uk-margin-small">
                                    <input class="uk-input home__section6__card__input" type="text" placeholder="Điện thoại">
                                </div>
                                <div class="uk-margin-small">
                                    <input class="uk-input home__section6__card__input" type="text" placeholder="Email">
                                </div>
                                <div class="uk-margin-small">
                                    <input class="uk-input home__section6__card__input" type="text" placeholder="Tỉnh / Thành phố">
                                </div>

                                <div class="uk-margin-small-top uk-text-center">
                                    <button class="uk-button uk-button-default uk-border-pill home__section6__card__btnSubmit"><span>ĐĂNG KÝ</span></button>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-large home__section2">
    <div class="uk-container">
        <div class="item__80">
            <div class="uk-flex-center uk-flex-middle uk-child-width-auto" uk-grid>
                <div>
                    <div class="uk-cover-container uk-border-circle home__section2__box">
                        <canvas width="239" height="239"></canvas>
                        <div class="uk-position-center uk-text-center">
                            <div class="home__section2__box__txt1">100%</div>
                            <div class="home__section2__box__txt2">Cơ hội</div>
                            <div class="home__section2__box__txt2">thực chiến tại</div>
                            <div class="home__section2__box__txt2"><span>DOANH NGHIỆP</span></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-cover-container uk-border-circle home__section2__box">
                        <canvas width="239" height="239"></canvas>
                        <div class="uk-position-center uk-text-center">
                            <div class="home__section2__box__txt1">100%</div>
                            <div class="home__section2__box__txt2">Cơ hội</div>
                            <div class="home__section2__box__txt2">trải nghiệm thực tập</div>
                            <div class="home__section2__box__txt2">tại <span>NƯỚC NGOÀI</span></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-cover-container uk-border-circle home__section2__box">
                        <canvas width="239" height="239"></canvas>
                        <div class="uk-position-center uk-text-center">
                            <div class="home__section2__box__txt1">100%</div>
                            <div class="home__section2__box__txt2">Cơ hội</div>
                            <div class="home__section2__box__txt2"><span>đào tạo TIẾNG ANH</span></div>
                            <div class="home__section2__box__txt2">NGAY TỪ ĐẦU</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item__80" id="taisao">
            <div class="uk-margin">
                <h2 class="home__title1 uk-h2 uk-text-uppercase uk-text-center">TẠI SAO LỚP 12 NÊN CHỌN XÉT TUYỂN HỌC BẠ?</h2>
            </div>
            <div class="uk-margin">
                <div class="uk-position-relative">
                    <img src="images/1x/bg22.png" alt="">
                    <div class="uk-card uk-card-body" uk-toggle="cls: uk-position-cover; mode: media; media: @m">
                        <div uk-grid>
                            <div class="uk-width-1-3@m">
                                <ul class="uk-list home__section2__list">
                                    <li><span class="home__section2__txt">Nắm chắc cơ hội vào đại học</span></li>
                                    <li><span class="home__section2__txt">Đá bay áp lực kỳ thi THPT Quốc gia</span></li>
                                    <li><span class="home__section2__txt">Chọn ngành hot, lương cao,
                                        việc làm toàn cầu
                                        ngay từ khi còn lớp 12</span>
                                    </li>
                                    <li>
                                        <a href="" class="home__section2__btn uk-border-pill uk-button uk-button-default uk-button-small"><span>Đăng ký tư vấn ngay</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--HỌC NGÀNH GÌ TẠI ĐẠI HỌC FPT?-->
<div id="chuyennganh" class="home__section3 uk-section uk-light">
    <div class="uk-container">
        <div class="uk-margin">
            <h2 class="home__title1 uk-h2 uk-text-uppercase uk-text-center">HỌC NGÀNH GÌ TẠI ĐẠI HỌC FPT?</h2>
        </div>
        <div class="uk-margin">
            <div class="uk-grid-match uk-grid-10 uk-child-width-1-3@m" uk-grid>
                <div>
                    <div class="home__section3__card uk-card uk-flex uk-flex-column uk-card-default">
                        <div class="home__section3__card__header uk-card-header uk-text-center">
                            <div>CÔNG NGHỆ THÔNG TIN</div>
                        </div>
                        <div class="home__section3__card__body uk-card-body uk-flex-auto">
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="home__section3__card__body__box home__section3__card__body__box--cntt uk-cover-container uk-border-rounded">
                                        <canvas width="88" height="88"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <ul class="uk-list home__section3__card__body__list uk-list-circle">
                                        <li>Kỹ thuật phần mềm</li>
                                        <li>Hệ thống thông tin</li>
                                        <li>Trí tuệ nhân tạo</li>
                                        <li>An toàn thông tin</li>
                                        <li>Thiết kế Mỹ thuật số</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home__section3__card uk-card uk-flex uk-flex-column uk-card-default">
                        <div class="home__section3__card__header uk-card-header uk-text-center">
                            <div>Quản trị kinh doanh</div>
                        </div>
                        <div class="home__section3__card__body uk-card-body uk-flex-auto">
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="home__section3__card__body__box home__section3__card__body__box--qtkd uk-cover-container uk-border-rounded">
                                        <canvas width="88" height="88"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <ul class="uk-list home__section3__card__body__list uk-list-circle">
                                        <li>Digital Marketing</li>
                                        <li>Kinh doanh quốc tế</li>
                                        <li>Quản trị khách sạn</li>
                                        <li>QT truyền thông đa phương tiện</li>
                                        <li>Tài chính</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home__section3__card uk-card uk-flex uk-flex-column uk-card-default">
                        <div class="home__section3__card__header uk-card-header uk-text-center">
                            <div>Ngôn Ngữ</div>
                        </div>
                        <div class="home__section3__card__body uk-card-body uk-flex-auto">
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="home__section3__card__body__box home__section3__card__body__box--ngonngu uk-cover-container uk-border-rounded">
                                        <canvas width="88" height="88"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <ul class="uk-list home__section3__card__body__list uk-list-circle">
                                        <li>Ngôn ngữ Anh</li>
                                        <li>Ngôn ngữ Nhật</li>
                                        <li>Ngôn ngữ Hàn Quốc</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/HỌC NGÀNH GÌ TẠI ĐẠI HỌC FPT?-->

<!--LÀ SINH VIÊN ĐẠI HỌC FPT,BẠN ĐƯỢC GÌ?-->
<div class="home__section4">
    <div class="uk-container">
        <div class="uk-section-large uk-background-norepeat uk-background-top-right uk-background-image@m" data-src="images/1x/bg4.png" uk-img>
            <div uk-grid>
                <div class="uk-width-2-5@m" uk-scrollspy="target: .home__section4__box1; cls: uk-animation-slide-bottom-small; delay: 500; repeat: true">
                    <h2 class="home__title1 uk-h2 uk-text-uppercase">LÀ SINH VIÊN ĐẠI HỌC FPT, <br class="uk-visible@m"> BẠN ĐƯỢC GÌ?</h2>
                    <div class="uk-margin uk-border-rounded uk-padding-small home__section4__box1">
                        <div class="home__section4__txt1">ĐƯỢC ĐÀO TẠO TRONG DOANH NGHIỆP</div>
                        <div class="home__section4__txt2">100% sinh viên làm việc trực tiếp tại doanh nghiệp từ năm 3</div>
                    </div>
                    <div class="uk-margin uk-border-rounded uk-padding-small home__section4__box1">
                        <div class="home__section4__txt1">TRẢI NGHIỆM MÔI TRƯỜNG CHUẨN QUỐC TẾ</div>
                        <div class="home__section4__txt2">Sinh viên được sử dụng giáo trình bản quyền quốc tế.Trở thành công dân toàn cầu.</div>
                    </div>
                    <div class="uk-margin uk-border-rounded uk-padding-small home__section4__box1">
                        <div class="home__section4__txt1">TRẢI NGHIỆM THÀNH CÔNG</div>
                        <div class="home__section4__txt2">Sinh viên được tạo cơ hội tham gia nhiều cuộc thi chuyên môn, hoạt động khởi nghiệp để tích lũy kiến thức, kỹ năng.</div>
                    </div>
                    <div class="uk-margin uk-border-rounded uk-padding-small home__section4__box1">
                        <div class="home__section4__txt1">TRẢI NGHIỆM TIỆN NGHI CƠ SỞ VẬT CHẤT HIỆN ĐẠI</div>
                        <div class="home__section4__txt2">Sinh viên học tập với trang thiết bị hiện đại. Campus xanh, sạch, đẹp với nhiều tiện ích phục vụ tối đa nhu cầu của sinh viên.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/LÀ SINH VIÊN ĐẠI HỌC FPT,BẠN ĐƯỢC GÌ?-->

<!--HỌC ĐẠI HỌC FPT – SẴN SÀNG CHO SỰ NGHIỆP TOÀN CẦU-->
<div class="home__section5 uk-background-default uk-section">
    <div class="uk-container">
        <div class="item__40">
            <h2 class="home__title1 uk-h2 uk-text-center uk-text-uppercase">HỌC ĐẠI HỌC FPT – SẴN SÀNG CHO SỰ NGHIỆP TOÀN CẦU</h2>
        </div>
        <div class="item__40">
            <div class="uk-child-width-1-4@m uk-child-width-1-2" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'images/1x/user1.png',
                        'boys' => true,
                        'name' => 'Nguyễn Thành Trung',
                        'chucvu' => 'Tỷ phú đô la công nghệ đầu tiên tại Việt Nam năm 29 tuổi',
                    ),
                    array(
                        'src' => 'images/1x/user2.png',
                        'boys' => true,
                        'name' => 'Đỗ Tiến Hưng ',
                        'chucvu' => 'CEO công ty phần mềm GVN Technology.',
                    ),
                    array(
                        'src' => 'images/1x/user3.png',
                        'boys' => false,
                        'name' => 'Thái Ngọc Diễm Phương',
                        'chucvu' => 'Software Engineer tại Google Earth Outreach và Google Earth Engine',
                    ),
                    array(
                        'src' => 'images/1x/user4.png',
                        'boys' => true,
                        'name' => 'Dương Thanh Long',
                        'chucvu' => 'Học bổng thạc sĩ Erasmus Mundus của Liên minh Châu Âu',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="home__section5__bg uk-text-center uk-background-norepeat uk-background-contain" data-src="images/bg1.png" uk-img>
                        <div class="home__section5__coverImg uk-cover-container uk-border-circle uk-display-inline-block">
                            <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                            <canvas width="145" height="145"></canvas>
                        </div>
                    </div>
                    <div class="uk-text-center">
                        <div class="item__10">
                            <div class="uk-text-uppercase"><span class="home__section5__txt1"><?= ($v['boys'])?'Anh.':'CHỊ.' ?></span> <span class="home__section5__name"><?= $v['name'] ?></span></div>
                            <div class="home__section5__txt2">Cựu Sinh viên ĐH FPT</div>
                        </div>
                        <div class="item__10">
                            <div class="home__section5__chucvu"><?= $v['chucvu'] ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/HỌC ĐẠI HỌC FPT – SẴN SÀNG CHO SỰ NGHIỆP TOÀN CẦU-->

<!--Xét tuyển học bạ lớp 11-->
<div class="home__section6">
    <div class="uk-container">
        <div class="uk-grid-match uk-flex-middle" uk-grid>
            <div class="uk-width-expand">
                <div class="home__section6__box1 uk-light uk-section-small uk-background-image@m uk-text-center uk-background-norepeat uk-background-bottom-center" data-src="images/1x/bg2.png" uk-img>
                    <div class="item__15">
                        <div class="uk-flex-center" uk-grid>
                            <div class="uk-width-4-5@m">
                                <img src="images/dhfpt_xethocbanganhhot.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item__15 home__section6__box1__txt1">
                        Xét tuyển học bạ lớp 11 <br class="uk-visible@m">
                        và học kỳ 1 lớp 12
                    </div>

                    <div class="item__15 home__section6__box1__txt2">
                        Nộp hồ sơ online qua email, facebook, zalo… <br class="uk-visible@m">

                        Hỗ trợ thí sinh 24/7, mọi lúc mọi nơi
                    </div>
                </div>
            </div>
            <div class="uk-width-1-3@m">
                <div class="uk-section-small">
                    <div class="home__section6__card uk-card uk-card-body uk-card-default">
                        <form>
                            <fieldset class="uk-fieldset">

                                <legend class="uk-legend uk-text-center home__section6__card__title">ĐĂNG KÝ TƯ VẤN</legend>

                                <div class="uk-margin-small">
                                    <input class="uk-input home__section6__card__input" type="text" placeholder="Họ và tên">
                                </div>
                                <div class="uk-margin-small">
                                    <input class="uk-input home__section6__card__input" type="text" placeholder="Điện thoại">
                                </div>
                                <div class="uk-margin-small">
                                    <input class="uk-input home__section6__card__input" type="text" placeholder="Tên trường THPT">
                                </div>
                                <div class="uk-margin-small">
                                    <input class="uk-input home__section6__card__input" type="text" placeholder="Link facebook (nếu có)">
                                </div>
                                <div class="uk-margin-small">
                                    <label class="uk-form-label home__section6__card__label" for="form-stacked-text">Đăng ký:</label>
                                    <div class="uk-form-controls">
                                        <div class="uk-grid-small uk-child-width-auto uk-grid">
                                            <label class="home__section6__card__label"><input class="uk-radio" type="radio" name="radio2" checked> Xét học bạ</label>
                                            <label class="home__section6__card__label"><input class="uk-radio" type="radio" name="radio2"> Học bổng </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-margin-small-top uk-text-center">
                                    <button class="uk-button uk-button-default uk-border-pill home__section6__card__btnSubmit"><span>ĐĂNG KÝ</span></button>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Xét tuyển học bạ lớp 11-->

<?php $ratio = 0.9; ?>
<div class="footer uk-section-xsmall">
    <div class="uk-container uk-container-small">
        <div class="uk-flex-middle uk-child-width-auto uk-flex-between uk-grid-5" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div; delay: 300; repeat: false">
            <div>
                <div class="uk-flex-middle uk-grid-5 uk-grid-10-m" uk-grid>
                    <div class="uk-width-auto">
                        <a href="" class="uk-icon-button footer__icon" uk-icon="icon: mail; ratio: <?= $ratio ?>"></a>
                    </div>
                    <div class="uk-width-expand">
                        <span class="footer__txt">daihocfpt@fpt.edu.vn</span>
                    </div>
                </div>
            </div>
            <div>
                <a href="" class="uk-button footer__btn uk-button-default uk-button-large uk-border-pill">
                    <div class="uk-flex-middle uk-grid-5 uk-grid-10-m" uk-grid>
                        <div class="uk-width-auto">
                            <span class="uk-icon-button footer__icon" uk-icon="icon: receiver; ratio: <?= $ratio ?>"></span>
                        </div>
                        <div class="uk-width-expand">
                            <span class="footer__txt">024/028 73001866</span>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <div class="uk-flex-middle uk-grid-5 uk-grid-10-m" uk-grid>
                    <div class="uk-width-auto">
                        <a href="" class="uk-icon-button footer__icon" uk-icon="icon: facebook; ratio: <?= $ratio ?>"></a>
                    </div>
                    <div class="uk-width-expand">
                        <span class="footer__txt">FPT University</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>