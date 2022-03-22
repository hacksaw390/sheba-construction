<div class="row-partner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="83" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-carousel-box clearfix" data-gap="5" data-column="5" data-column2="3" data-column3="2" data-auto="true">
                    <div class="owl-carousel owl-theme">
                        @foreach($heppyClient as $item)
                        <div class="themesflat-partner style-1 align-center clearfix">
                            <div class="partner-item">
                                <div class="inner">
                                    <div class="thumb">
                                        <a target="_blank" href="{{$item->link}}">

                                        <img src="{{$item->image}}" alt="Image" class="partner-default">
                                        <img src="{{$item->image}}" alt="Image" class="partner-color">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div><!-- /.themesflat-carousel-box -->
                <div class="themesflat-spacer clearfix" data-desktop="66" data-mobile="60" data-smobile="60"></div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
