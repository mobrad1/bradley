@extends('admin.layout.app')
@section('content-box')
    <div class="row">
        <div class="col-lg-9">
            <div class="element-wrapper">
                <h6 class="element-header">
                    Manage Business
                </h6>
                <div class="element-box">
                    <form action="{{route('admin.business.create')}}" method="POST">
                        @csrf
                        <h5 class="form-header">
                            Create a business
                        </h5>
                        <div class="form-desc">
                            Create a business and you can also create a business into multiple categories
                        </div>
                        <div class="form-group">
                            <label for=""> Business name</label
                            ><input class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="Enter Business name" type="text">
                            <div class="help-block form-text text-muted form-control-feedback">
                                {{$errors->first('name')}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Business Description</label>
                                    <input class="form-control @error('description') is-invalid @enderror" value="{{old("description")}}" name="description" placeholder="Enter Description " type="text">
                                    <div class="help-block form-text text-muted form-control-feedback">
                                        {{$errors->first('description')}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Business Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" placeholder="Enter Email address" type="email">
                                    <div class="help-block form-text text-muted form-control-feedback">
                                        {{$errors->first('email')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for=""> Business Telephone</label>
                            <input type="text" class="form-control  @error('telephone') is-invalid @enderror" value="{{old("telephone")}}" name="telephone" placeholder="Enter Business Telephone">
                            <div class="help-block form-text text-muted form-control-feedback">
                                {{$errors->first('telephone')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for=""> Website</label>
                            <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" placeholder="Enter Business website" value="{{ old('website') }}">
                            <div class="help-block form-text text-muted form-control-feedback">
                                {{$errors->first('website')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for=""> Listing Category</label>
                            <select class="form-control select2 @error('website') is-invalid @enderror" multiple="true" name="categories[]">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">
                                        {{$category->name}}
                                    </option>
                                    @endforeach
                            </select>
                            <div class="help-block form-text text-muted form-control-feedback">
                                {{$errors->first('categories')}}
                            </div>
                        </div>



                        <div class="form-buttons-w">
                            <button class="btn btn-primary" type="submit"> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection