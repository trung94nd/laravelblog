<div class="page_slide">
    <div id="carousel-csht" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active item-slide">
              <img class="image-responsive" src="{{ asset('images/rent.jpg') }}" alt="Nội Bài Xe">
             {{--  <div class="carousel-caption caption-page">
                <h3 class="title-img-detail size18">Nội Bài Xe</h3>
              </div> --}}
            </div>
            <div class="item item-slide">
              <img class="image-responsive" src="{{ asset('images/RENTALCAR.jpg') }}" alt="Nội Bài Xe">
            </div>
        </div>
       {{--  <a class="left carousel-control customize-carousel hidden" href="#carousel-csht" role="button" data-slide="prev">
            <span class="left-pre"><i class="fa fa-angle-left fa" aria-hidden="true"></i></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control customize-carousel hidden" href="#carousel-csht" role="button" data-slide="next">
            <span class="right-next"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            <span class="sr-only">Next</span>
        </a> --}}
    </div>
    @include('frontend.home.hire_car')
</div>