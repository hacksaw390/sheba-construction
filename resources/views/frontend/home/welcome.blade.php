<div class="row-about">
    <div class="container-fluid">
        <div class="row equalize sm-equalize-auto">
            {{--<div class="col-md-6 half-background style-1" style="background-image: url('/frontend/assets/img/demo/b3.jpg'); height: 559px;">--}}
            {{-- <div class="col-md-6 half-background style-1" style="background-image: url('{{$welcome->image}}'); height: 559px;"> --}}

            </div><!-- /.col-md-6 -->
            <div class="col-md-6 bg-light-grey">
                <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-content-box clearfix" data-margin="0 25% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                    <div class="themesflat-headings style-1 clearfix">
                        <h2 class="heading">WELCOME TO SheBA</h2>
                        <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                        {{-- <p class="sub-heading margin-top-30">{{$welcome->title_des}}</p> --}}
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div>
                    @php
                    //    $items = explode(',',$welcome->title_item)
                    @endphp
                    {{-- @foreach($items as $item)
                    <div class="content-list">
                        <div class="themesflat-list has-icon style-1 icon-left clearfix">
                            <div class="inner">
                                <span class="item">
                                    <span class="icon"><i class="fa fa-check-square"></i></span>
                                    <span class="text">{{$item}}</span>
                                </span>
                            </div>
                        </div><!-- /.themeslat-list -->
                    </div><!-- /.content-list -->
                    @endforeach --}}
                    <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                    <div class="elm-button">
                        <a href="{{route('contact')}}"  class="themesflat-button bg-white">CONTACT US</a>
                    </div>
                </div><!-- /.themesflat-content-box -->
                <div class="themesflat-spacer clearfix" data-desktop="75" data-mobile="60" data-smobile="60"></div>
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

