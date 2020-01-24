@extends('admin.layout.app')
@section('content-box')
    <div class="element-wrapper">
        <h6 class="element-header">
            businesses
        </h6>
        <div class="element-box">
            <h5 class="form-header">
                Manage businesss
            </h5>
            <div class="form-desc">
                Easily delete, suspend and change status of a business
            </div>
            <div class="table-responsive">
                <div id="dataTable1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="dataTable1" width="100%" class="table table-striped table-lightfont dataTable"
                                   role="grid" aria-describedby="dataTable1_info" style="width: 100%;">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTable1" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 182px;">Business name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending" style="width: 269px;">
                                        Email
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="width: 135px;">
                                        Telephone
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1"
                                        aria-label="Age: activate to sort column ascending" style="width: 54px;">Website
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1"
                                        aria-label="Start date: activate to sort column ascending"
                                        style="width: 114px;">Visits
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1"
                                        aria-label="Salary: activate to sort column ascending" style="width: 109px;">

                                    </th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Name</th>
                                    <th rowspan="1" colspan="1">Email</th>
                                    <th rowspan="1" colspan="1">Telephone</th>
                                    <th rowspan="1" colspan="1">Website</th>
                                    <th rowspan="1" colspan="1">Visits</th>
                                    <th rowspan="1" colspan="1">Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($businesses as $business)
                                    <tr role="row" class="even">
                                        <td><a href="{{route('admin.business.show',$business)}}">{{$business->name}}</a></td>
                                        <td>{{$business->email}}</td>
                                        <td>{{$business->telephone}}</td>
                                        <td>{{$business->website}}</td>
                                        <td>{{$business->visits}}</td>
                                        <td style="display: flex;">

                                            <button class="mr-1 mb-1 btn btn-danger" onclick="document.getElementById('delete-{{$business->id}}').submit()"><a><i class="fa fa-trash-o"></i></a></button>

                                            <button onclick="document.getElementById('suspend-{{$business->id}}').submit()" class="mr-1 mb-1 btn {{$business->status ? 'btn-success' : 'btn-warning'}}"><a><i class="fa {{$business->status ? 'fa-lock' : 'fa-unlock'}}"></i></a></button>
                                            <button class="btn btn-primary" data-target="#edit-{{$business->id}}" data-toggle="modal" type="button">Edit</button>


                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{--Delete form--}}
                            @foreach($businesses as $business)
                                <form action="{{route('admin.business.delete',$business)}}" id="delete-{{$business->id}}" method="POST">
                                    {{method_field('DELETE')}}
                                    @csrf
                                </form>
                                <form action="{{route('admin.business.suspend',$business)}}" id="suspend-{{$business->id}}" method="POST">
                                    @csrf
                                </form>
                            @endforeach
                            @foreach($businesses as $business)
                                <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="edit-{{$business->id}}" role="dialog" tabindex="-1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    {{$business->name}}
                                                </h5>
                                                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> &times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('admin.business.update',$business)}}" method="POST" id="form-{{$business->id}}">
                                                    {{method_field("PATCH")}}
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for=""> Business name</label
                                                        ><input class="form-control @error('name') is-invalid @enderror" name="name" value="{{$business->name}}" placeholder="Enter Business name" type="text">
                                                        <div class="help-block form-text text-muted form-control-feedback">
                                                            {{$errors->first('name')}}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="">Business Description</label>
                                                                <input class="form-control @error('description') is-invalid @enderror" value="{{$business->description}}" name="description" placeholder="Enter Description " type="text">
                                                                <div class="help-block form-text text-muted form-control-feedback">
                                                                    {{$errors->first('description')}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="">Business Email</label>
                                                                <input class="form-control @error('email') is-invalid @enderror" value="{{$business->email}}" name="email" placeholder="Enter Email address" type="email">
                                                                <div class="help-block form-text text-muted form-control-feedback">
                                                                    {{$errors->first('email')}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for=""> Business Telephone</label>
                                                        <input type="text" class="form-control  @error('telephone') is-invalid @enderror" value="{{$business->telephone}}" name="telephone" placeholder="Enter Business Telephone">
                                                        <div class="help-block form-text text-muted form-control-feedback">
                                                            {{$errors->first('telephone')}}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for=""> Website</label>
                                                        <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" placeholder="Enter Business website" value="{{ $business->website}}">
                                                        <div class="help-block form-text text-muted form-control-feedback">
                                                            {{$errors->first('website')}}
                                                        </div>
                                                    </div>

                                                            <div class="form-group">
                                                                <label for="">Category</label>
                                                                <select class="form-control select2 @error('website') is-invalid @enderror" multiple="true" name="categories[]">
                                                                    @foreach($categories as $category)
                                                                        <option value="{{$category->id}}" {{($business->category->contains("category_id",$category->id)) ? "selected" :""}}>
                                                                            {{$category->name}}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <div class="help-block form-text text-muted form-control-feedback">
                                                                    {{$errors->first('categories')}}
                                                                </div>
                                                            </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" data-dismiss="modal" type="button"> Close</button><button class="btn btn-primary" type="button" onclick="document.getElementById('form-{{$business->id}}').submit()"> Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            {{--End Delete form--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection