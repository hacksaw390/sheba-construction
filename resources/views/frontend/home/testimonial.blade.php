<div class="row-testimonials parallax-2" style="background-image: url(/frontend/assets/img/demo/b6.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-carousel-box has-arrows arrow-center arrow-circle offset-v-24 clearfix" data-gap="30" data-column="1" data-column2="1" data-column3="1" data-auto="true">
                    <div class="owl-carousel owl-theme">
                    @foreach($testimonials as $item)
                        <div class="themesflat-testimonials style-1 max-width-70 align-center has-width w100 circle border-solid clearfix">
                            <div class="testimonial-item">
                                <div class="inner">
                                    <div class="icon-wrap">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <blockquote class="text">
                                        <p>“ {{$item->des}} ”</p>
                                        <div class="sep has-width w80 accent-bg clearfix"></div>
                                        <h6 class="name"></h6>
                                    </blockquote>
                                </div>
                            </div>
                        </div><!-- /.themesflat-testimonials -->
                        @endforeach
                    </div>
                </div><!-- /.themesflat-carousel-box -->
                <div class="themesflat-spacer clearfix" data-desktop="68" data-mobile="60" data-smobile="60"></div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
