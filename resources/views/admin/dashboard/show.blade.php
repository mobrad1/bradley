@extends('admin.layout.app')
@section('content-box')
    <div class="row">
        <div class="col-sm-12">
            <div class="element-wrapper">
                <div class="element-actions">
                    <form class="form-inline justify-content-sm-end">
                        <select class="form-control form-control-sm rounded">
                            <option value="Pending">
                                Today
                            </option>
                            <option value="Active">
                                Last Week
                            </option>
                            <option value="Cancelled">
                                Last 30 Days
                            </option>
                        </select>
                    </form>
                </div>
                <h6 class="element-header">Platform Overview</h6>
                <div class="element-content">
                    <div class="row">
                        <div class="col-sm-4 col-xxxl-3">
                            <a class="element-box el-tablo" href="#">
                                <div class="label">
                                    Total Business
                                </div>
                                <div class="value">
                                    {{count($businesses)}}
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 col-xxxl-3">
                            <a class="element-box el-tablo" href="#">
                                <div class="label">
                                    Total Categories
                                </div>
                                <div class="value">
                                    {{count($categories)}}
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection