<!DOCTYPE html>
<html>
<head>
    <title>{{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="{{asset('bower_components/slick-carousel/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css?version=4.4.0')}}" rel="stylesheet">
</head>
<body class="white rentals-wrapper full-screen">
<div class="all-wrapper rentals">
    <!--------------------
    START - Top Bar
    -------------------->
    <div class="top-bar-rentals">
        <div class="logo-w">
            <a class="logo" href="index.html">
                <div class="logo-element"></div>
                <div class="logo-label">
                    Business Listing
                </div>
            </a>
            <div class="filters-toggler">
                <i class="os-icon os-icon-hamburger-menu-1"></i>
            </div>
        </div>
        <div class="filters">
            <div class="filters-header">
                <h4>
                    Search By
                </h4>
            </div>
            <form class="form-inline" action="{{route("search")}}" role="search" method="GET">
                <div class="filter-w">
                    <div class="filter-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <div class="input-group">
                                <input class="form-control zip-width"  placeholder="Name" type="text" name="name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter-w">
                    <div class="filter-body">
                        <div class="form-group">
                            <label for=""> Description</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="os-icon os-icon-ui-83"></i>
                                    </div>
                                </div>
                                <input class="form-control" type="text" value="" name="description">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons-w">
                    <button class="btn btn-upper btn-primary" type="submit"><i class="os-icon os-icon-ui-37"></i><span>Search</span></button>
                </div>
            </form>
        </div>
    </div>
    <!--------------------
    END - Top bar
    --------------------><!--------------------
      START - Rentals Content
      --------------------><div class="rentals-list-w">
        <!--------------------
        START - Property Index Filters
        -------------------->

        <!--------------------
        END - Property Index Filters
        -------------------->
        <div class="rentals-list">
            <div class="list-controls">
                <div class="list-info">
                    @if(count($businesses) < 1)
                        No Result Found
                        @else
                        {{count($businesses)}} Business Listing
                        @endif
                </div>
            </div>
            <div class="property-items as-list">
                <!--------------------
                START - Property Item
                -------------------->
                @foreach($businesses as $business)
                <div class="property-item">
                    <a class="item-media-w" href="{{route('listing.show',$business)}}">
                        <div class="item-media" style="background-image: url(img/property2.jpg)"></div>
                    </a>
                    <div class="item-info">
                        <div class="item-features">
                            <div class="feature">
                                {{$business->visits}} Visits
                            </div>
                        </div>
                        <h3 class="item-title">
                            <a href="{{route('listing.show',$business)}}">{{$business->name}}</a>
                        </h3>
                        <div class="item-price-buttons">
                            <div class="item-description">
                               <p>{{$business->description}}</p>
                                <h6>Categories</h6>
                                @foreach($categories as $category)
                                    <p>{{$business->category->contains("category_id",$category->id) ? $category->name : ""}}</p>
                                @endforeach
                            </div>
                            <div class="item-buttons">
                                <a class="btn btn-outline-primary" href="{{route('listing.show',$business)}}"><span>Details</span><i class="os-icon os-icon-arrow-2-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            {!! $businesses->render() !!}
        </div>
    </div><!--------------------
      END - Rentals Content
      --------------------><!--------------------
      START - Footer
      -------------------->
    <div class="call-to-action">
        <h3 class="cta-header">
            Want to give it a try now?
        </h3>
        <div class="cta-desc">
            Purchase it now and start building your next business venture using this template
        </div>
        <div class="cta-btn">
            <a class="btn btn-primary btn-lg btn-rounded" href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin" target="_blank"><span>Purchase</span><i class="os-icon os-icon-arrow-right4"></i><i class="os-icon os-icon-arrow-right4"></i></a>
        </div>
    </div>
    <div class="footer-w">
        <div class="fade3"></div>
        <div class="os-container">
            <div class="footer-i">
                <div class="row">
                    <div class="col-sm-7 col-lg-4 b-r padded">
                        <div class="logo-element"></div>
                        <h3 class="heading-big">
                            Light Admin
                        </h3>
                        <h6 class="heading-small">
                            HTML Template
                        </h6>
                        <p>
                            We love great UI and smooth user experience, this is why we’ve spent so much time on making this Bootstrap template stand our of the rest
                        </p>
                    </div>
                    <div class="col-sm-5 col-lg-8">
                        <div class="row">
                            <div class="col-lg-4 b-r padded">
                                <h6 class="heading-small">
                                    Locations
                                </h6>
                                <p>
                                    456 Hollywood blvd, <br/>Los Angeles CA, 95543
                                </p>
                            </div>
                            <div class="col-lg-4 b-r padded">
                                <h6 class="heading-small">
                                    Phone Numbers
                                </h6>
                                <ul>
                                    <li>
                                        888.345.6362
                                    </li>
                                    <li>
                                        800.244.6272
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4 padded">
                                <h6 class="heading-small">
                                    Social Links
                                </h6>
                                <ul class="social-links">
                                    <li>
                                        <a href="#"><i class="os-icon os-icon-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="os-icon os-icon-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="deep-footer">
                Use of this site constitutes acceptance of our <a href="#">User Agreement</a> and <a href="#">Privacy Policy</a>. &copy; 2017 Pinsupreme.com All rights reserved.
            </div>
        </div>
    </div>
    <!--------------------
    END - Footer
    -------------------->
</div>
<div class="display-type"></div>
</body>
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/util.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/alert.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/button.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/carousel.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/collapse.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/dropdown.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/modal.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/tab.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/tooltip.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/popover.js')}}"></script>
<script src="{{asset('bower_components/tether/dist/js/tether.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/button.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/carousel.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('js/demo_customizer.js?version=4.4.0')}}"></script>
<script src="{{asset('js/main.js?version=4.4.0')}}"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-XXXXXXX-9', 'auto');
    ga('send', 'pageview');
</script>
<script src="{{asset('js/main_rentals.js?version=4.4.0')}}"></script>
</html>
