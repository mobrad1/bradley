@extends('admin.layout.app')
@section('content-box')
    <div class="element-wrapper">
        <div class="user-profile">
            <div class="up-head-w" style="background-image:url({{asset('img/profile_bg1.jpg')}})">
                <div class="up-social">
                    <a href="#"><i class="os-icon os-icon-twitter"></i></a><a href="#"><i class="os-icon os-icon-facebook"></i></a>
                </div>
                <div class="up-main-info">
                    <h1 class="up-header">
                        {{$business->name}}
                    </h1>
                    <h5 class="up-sub-header">
                        {{$business->website}}
                    </h5>
                </div>
                <svg class="decor" width="842px" height="219px" viewBox="0 0 842 219" preserveAspectRatio="xMaxYMax meet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g transform="translate(-381.000000, -362.000000)" fill="#FFFFFF"><path class="decor-path" d="M1223,362 L1223,581 L381,581 C868.912802,575.666667 1149.57947,502.666667 1223,362 Z"></path></g></svg>
            </div>
            <div class="up-controls">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="value-pair">
                            <div class="label">
                                Status:
                            </div>
                            <div class="value badge badge-pill badge-success">
                                Offline
                            </div>
                        </div>
                        <div class="value-pair">
                            <div class="label">
                                Member Since:
                            </div>
                            <div class="value">
                                {{$business->created_at->diffForHumans()}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <form action="{{route('admin.business.suspend',$business)}}" id="verify-{{$business->id}}" method="POST">
                            @csrf
                            <button type="submit" class="mr-1 mb-1 btn {{$business->status == 0 ? 'btn-warning' : 'btn-success'}}"><a><i class="fa fa-check"></i></a></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="up-contents">
                <h5 class="element-header">
                    Profile Statistics
                </h5>
                <div class="row m-b">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-6 b-r b-b">
                                <div class="el-tablo centered padded">
                                    <div class="value">
                                        {{$business->visits}}
                                    </div>
                                    <div class="label">
                                       Visits
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 b-b b-r">
                                <div class="el-tablo centered padded">
                                    <div class="value">
                                        {{$business->likes_count}}
                                    </div>
                                    <div class="label">
                                        Likes
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 b-r">
                                <div class="el-tablo centered padded">
                                    <div class="value">
                                        5
                                    </div>
                                    <div class="label">
                                        Categories
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 b-r">
                                <div class="el-tablo centered padded">
                                    <div class="value">
                                        5
                                    </div>
                                    <div class="label">
                                        Portfolio Images
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="padded">
                            <div class="element-info-with-icon smaller">
                                <div class="element-info-icon">
                                    <div class="os-icon os-icon-bar-chart-stats-up"></div>
                                </div>
                                <div class="element-info-text">
                                    <h5 class="element-inner-header">
                                        Monthly Revenue
                                    </h5>
                                    <div class="element-inner-desc">
                                        Calculated every month
                                    </div>
                                </div>
                            </div>
                            <div class="el-chart-w"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                <canvas height="135" id="liteLineChart" width="313" class="chartjs-render-monitor" style="display: block; width: 313px; height: 135px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="os-tabs-w">
                    <div class="os-tabs-controls">
                        <ul class="nav nav-tabs bigger">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab_overview">Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab_sales">Daily Likes</a>
                            </li>
                        </ul>
                        <ul class="nav nav-pills smaller d-none d-md-flex">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#">Today</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#">7 Days</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#">14 Days</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#">Last Month</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_overview">
                           <p>{{$business->description}}</p>
                        </div>
                        <div class="tab-pane" id="tab_sales">
                            <div class="el-tablo">
                                <div class="label">
                                    Unique Visitors
                                </div>
                                <div class="value">
                                    12,537
                                </div>
                            </div>
                            <div class="el-chart-w">
                                <canvas height="0" id="lineChart" width="0" class="chartjs-render-monitor" style="display: block; width: 0px; height: 0px;"></canvas>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_conversion"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
