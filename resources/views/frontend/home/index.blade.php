@extends('frontend/layouts/master')
@section('main-content')
    <div class="container-fluid m-container">
        <div class="row m-row">
            @include('frontend/home/slider')
            <div class="service">
                <div class="container container-wrap">
                    <div class="wrap-content row">
                        <div class="col-xs-4 col-sm-4 service-item">
                            <div class="m-pd-l0 img-service col-sm-4">
                                <img class="image-responsive" src="{{ asset('images/price_cheapest.png') }}" alt="Cam kết giá rẻ nhất">
                            </div>
                            <div class="content-service col-sm-8 customize-col-8 m-pd-r0">
                                <h3 class="title-service">Cam kết giá rẻ nhất</h3>
                                <p class="describe-service hidden-xs">Chúng tôi cam kết 100% giá của chúng tôi là thấp nhất...</p>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 service-item">
                            <div class="m-pd-l0 img-service col-sm-4">
                                <img class="image-responsive" src="{{ asset('images/quality.png') }}" alt="Cam kết giá rẻ nhất">
                            </div>
                            <div class="content-service col-sm-8 customize-col-8 m-pd-r0">
                                <h3 class="title-service">Cam kết chất lượng</h3>
                                <p class="describe-service hidden-xs">Luôn có xe nếu đặt trước. Bồi thường nếu đón muộn</p>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 service-item">
                            <div class="m-pd-l0 img-service col-sm-4">
                                <img class="image-responsive" src="{{ asset('images/support.png') }}" alt="Cam kết giá rẻ nhất">
                            </div>
                            <div class="content-service col-sm-8 customize-col-8 m-pd-r0">
                                <h3 class="title-service">Chăm sóc 24/7</h3>
                                <p class="describe-service hidden-xs">Bất cứ thời gian nào. Chúng tôi sẵn lòng được phục vụ các bạn.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="species">
                <div class="container m-container m-pd-r0">
                    <div class="container-wrap owl-nh">
                        <h3 class="headding-main text-center"><a href="" title="">Các dòng xe</a></h3>
                        <div id="galleryCarousel" class="owl-carousel owl-theme" data-ride="carousel">
                            <div class="species-item padding-30 text-center">
                                <a class="gallery-item" href="" title=""><img class="image-responsive" src="{{ asset('images/aventador_S.jpg') }}" alt=""></a>
                                <h3 class="gallery-title hidden-xs"><a href="" title="">THE AVENTADOR S COUPÉ. CERTAIN ICONS ARE NEVER REINVENTED. THEY ARE REVITALIZED.</a></h3>
                            </div>
                            <div class="species-item padding-30 text-center">
                                <a class="gallery-item" href="" title=""><img class="image-responsive" src="{{ asset('images/maxres.jpg') }}" alt=""></a>
                                <h3 class="gallery-title hidden-xs"><a href="" title="">THE AVENTADOR S COUPÉ. CERTAIN ICONS ARE NEVER REINVENTED. THEY ARE REVITALIZED.</a></h3>
                            </div>
                            <div class="species-item padding-30 text-center">
                                <a class="gallery-item" href="" title=""><img class="image-responsive" src="{{ asset('images/Huracan_Spyder.jpg') }}" alt=""></a>
                                <h3 class="gallery-title hidden-xs"><a href="" title="">Automobili Lamborghini achieves another record year in 2016</a></h3>
                            </div>
                            <div class="species-item padding-30 text-center">
                                <a class="gallery-item" href="" title=""><img class="image-responsive" src="{{ asset('images/aventador_S.jpg') }}" alt=""></a>
                                <h3 class="gallery-title hidden-xs"><a href="" title="">THE AVENTADOR S COUPÉ. CERTAIN ICONS ARE NEVER REINVENTED. THEY ARE REVITALIZED.</a></h3>
                            </div>
                            <div class="species-item padding-30 text-center">
                                <a class="gallery-item" href="" title=""><img class="image-responsive" src="{{ asset('images/maxres.jpg') }}" alt=""></a>
                                <h3 class="gallery-title hidden-xs"><a href="" title="">THE AVENTADOR S COUPÉ. CERTAIN ICONS ARE NEVER REINVENTED. THEY ARE REVITALIZED.</a></h3>
                            </div>
                            <div class="species-item padding-30 text-center">
                                <a class="gallery-item" href="" title=""><img class="image-responsive" src="{{ asset('images/Huracan_Spyder.jpg') }}" alt=""></a>
                                <h3 class="gallery-title hidden-xs"><a href="" title="">Automobili Lamborghini achieves another record year in 2016</a></h3>
                            </div>
                        </div>
                        <div class="owl-nav">
                            <img class="customize-nh-left hidden-xs" src="{{ asset('images/controll-left.png') }}"></img>
                            <img class="customize-nh-right hidden-xs" src="{{ asset('images/controll-right.png') }}"></img>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news">
                <div class="container container-wrap m-container">
                    <h3 class="headding-main text-center"><a href="" title="">Tin tức - sự kiện</a></h3>
                    <div class="wrap-content row">
                        <div class="col-sm-4 new-item hidden-xs">
                            <a class="image-item display-block" href="" title="">
                                <img class="image-responsive" src="{{ asset('images/NinhBinh.jpg') }}" alt="">
                            </a>
                            <div class="content-item text-justify">
                                <h3 class="title-item"><a href="">Say lòng trước sắc màu thiên nhiên của Ninh Bình</a></h3>
                                <p class="describe-item">Ninh Bình nằm ở vùng giao thoa giữa các khu vực: Tây Bắc, đồng bằng sông Hồng và Bắc Trung Bộ. Đặc điểm đó đã tạo ra một nền văn hóa Ninh Bình tương đối năng động, phát triển trên nền tảng văn minh...</p>
                            </div>
                        </div>
                        <div class="col-sm-4 new-item">
                            <a class="image-item display-block" href="" title="">
                                <img class="image-responsive" src="{{ asset('images/hoang_hon.JPG') }}" alt="">
                            </a>
                            <div class="content-item text-justify">
                                <h3 class="title-item"><a href="">Đắm mình chiều hoàng hôn nơi biển xa</a></h3>
                                <p class="describe-item">Những ai từng đặt chân lên thành phố biển Nha Trang, đắm mình trong làn nước biển xanh ngắt. Dưới ánh nắng mặt trời nhiệt đới, màu xanh của những triền núi ...</p>
                            </div>
                        </div>
                        <div class="col-sm-4 new-item hidden-xs">
                            <a class="image-item display-block" href="" title="">
                                <img class="image-responsive" src="{{ asset('images/thien_nhien.jpg') }}" alt="">
                            </a>
                            <div class="content-item text-justify">
                                <h3 class="title-item"><a href="">Say đắm lòng người với vẻ đẹp của mẹ thiên nhiên</a></h3>
                                <p class="describe-item">Thung lũng này nổi tiếng những hồ nước nhỏ nằm rải rác dưới chân núi, được hình thành từ các dòng suối và thác nước đổ xuống...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop