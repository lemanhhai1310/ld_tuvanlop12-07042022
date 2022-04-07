<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
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
<!---->
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
<!--/-->
<?php require "template-parts/layouts/footer.php"; ?>