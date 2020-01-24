@extends('admin.layout.app')
@section('content-box')
    <div class="row">
        <div class="col-lg-4">
            <div class="element-wrapper">
                <h6 class="element-header">
                    Manage Business
                </h6>
                <div class="element-box">
                    <form method="POST" action="{{route('admin.category.create')}}">
                        @csrf
                        <h5 class="form-header">
                            Create a Category
                        </h5>
                        <div class="form-desc">
                            Create categories for the listings
                        </div>
                        <div class="form-group">
                            <label for=""> Category name</label>
                            <input class="form-control " required name="name" placeholder="Enter Category name" type="text">
                            <div class="help-block form-text text-muted form-control-feedback">
                                {{$errors->first('name')}}
                            </div>
                        </div>
                        <div class="form-buttons-w">
                            <button class="btn btn-primary" type="submit"> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="element-wrapper">
                <h6 class="element-header"></h6>
                <div class="element-box">
                    <div class="table-responsive">
                        <!--------------------
                        START - Basic Table
                        -------------------->
                        <table class="table table-lightborder">
                            <thead>
                            <tr>
                                <th>
                                    Category name
                                </th>
                                <th>
                                   Category Slug
                                </th>

                                <th class="text-right">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>
                                    {{$category->name}}
                                </td>
                                <td>
                                    {{$category->slug}}
                                </td>
                                <td class="text-right">
                                    <form action="{{route('admin.category.delete',$category)}}" method="post">
                                        @csrf
                                        {{method_field("DELETE")}}
                                        <button class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--------------------
                        END - Basic Table
                        -------------------->
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection