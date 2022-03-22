<div class="row-iconbox">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-headings style-1 text-center clearfix">
                    {{-- <h2 class="heading font-size-30">{{$allService->title}}</h2> --}}
                    <div class="sep has-icon width-125 clearfix">
                        <div class="sep-icon">
                            <span class="sep-icon-before sep-center sep-solid"></span>
                            <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                            <span class="sep-icon-after sep-center sep-solid"></span>
                        </div>
                    </div>
                    {{-- <p class="sub-heading font-weight-400">{{$allService->title_des}}</p> --}}
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="57" data-mobile="35" data-smobile="35"></div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

        <div class="themesflat-row gutter-30 clearfix">
            @foreach($services as $item)
            <div class="col span_1_of_4">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                <div class="themesflat-icon-box icon-left accent-color style-2 clearfix">
                    <div class="icon-wrap">
                        {{--<i class="autora-icon-building-outline"></i>--}}
                        <i class="{{$item->icon}}"></i>
                    </div>
                    <div class="text-wrap">
                        <h5 class="heading"><a href="#">{{$item->title}}</a></h5>
                        <p class="sub-heading">{{$item->des}}</p>
                    </div>
                </div><!-- /.themesflat-icon-box -->
                <div class="themesflat-spacer clearfix" data-desktop="62" data-mobile="35" data-smobile="35"></div>
            </div><!-- /.col-md-4 -->
                @endforeach
        </div><!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="72" data-mobile="60" data-smobile="60"></div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
