<div class="row-tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="themesflat-content-box clearfix" data-margin="0 18px 0 0" data-mobilemargin="0 0 0 0">
                    <div class="themesflat-headings style-1 clearfix">
                        <h2 class="heading">OVERVIEW</h2>
                        <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                    <div class="themesflat-tabs style-1 clearfix">
                        <ul class="tab-title clearfix">
                            <li class="item-title active">
                                <span class="inner">Our focus</span>
                            </li>
                            <li class="item-title">
                                <span class="inner">Dedicated</span>
                            </li>
                            <li class="item-title">
                                <span class="inner">Committed</span>
                            </li>
                        </ul>

                        <div class="tab-content-wrap clearfix">
                            <div class="tab-content">
                                <div class="item-content">
                                    {{-- <p>{{$focus->des}}</p> --}}

                                    @php
                                        // $as = explode(',',$focus->item)
                                    @endphp
                                    <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                        {{-- @foreach($as as $a)
                                        <div class="inner">
                                            <span class="item">
                                                <span class="icon"><i class="fa fa-check-square"></i></span>
                                                <span class="text">{{$a}}</span>
                                            </span>
                                        </div>
                                            @endforeach --}}
                                    </div>
                                </div>
                            </div><!-- /.tab-content -->
                            <div class="tab-content">
                                <div class="item-content">
                                    {{-- <p>{{$dedicated->des}}</p> --}}
                                    @php
                                        // $bs = explode(',',$dedicated->item)
                                    @endphp
                                    <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                        {{-- @foreach($bs as $b)
                                        <div class="inner">
                                            <span class="item">
                                                <span class="icon"><i class="fa fa-check-square"></i></span>
                                                <span class="text">{{$b}}</span>
                                            </span>
                                        </div>
                                            @endforeach --}}
                                    </div>
                                </div>
                            </div><!-- /.tab-content -->
                            <div class="tab-content">
                                <div class="item-content">
                                    {{-- <p>{{$committed->des}}</p> --}}
                                    @php
                                        // $cs = explode(',',$committed->item)
                                    @endphp
                                    <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                        {{-- @foreach($cs as $c)
                                        <div class="inner">
                                            <span class="item">
                                                <span class="icon"><i class="fa fa-check-square"></i></span>
                                                <span class="text">{{$c}}</span>
                                            </span>
                                        </div>
                                            @endforeach --}}
                                    </div><!-- /.themeslat-list -->
                                </div>
                            </div><!-- /.tab-content -->
                        </div><!-- /.tab-content-wrap -->
                    </div><!-- /.themesflat-tabs -->
                </div><!-- /.themesflat-content-box -->
            </div><!-- /.col-md-6 -->

            <div class="col-md-6">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                <div class="themesflat-content-box" data-margin="0 0 0 18px" data-mobilemargin="0 0 0 0">
                    <div class="themesflat-headings style-1 clearfix">
                        <h2 class="heading">FAQs</h2>
                        <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                    <div class="themesflat-accordions style-1 has-icon icon-left iconstyle-1 clearfix">
                        @foreach($faqs as $faq)
                        <div class="accordion-item ">
                            <h3 class="accordion-heading"><span class="inner">{{$faq->question}}</span></h3>
                            <div class="accordion-content">
                                <div>{{$faq->answer}}</div>
                            </div>
                        </div>
                            @endforeach
                    </div><!-- /.themesflat-accordion -->
                </div><!-- /.themesflat-content-box -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
