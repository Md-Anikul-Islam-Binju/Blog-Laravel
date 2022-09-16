@extends('admin.index')
@section('content')

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update Category</h5>
        </div>
        <div class="card pd-20 pd-sm-40">
            <form method="post" action="{{ route('blog.category.update',[$category->id]) }}">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">

                        <div class="col-lg-8">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name" value="{{ $category->name }}"  placeholder="Enter category">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Status: <span class="tx-danger">*</span></label>
                                    <select  name="status" class="form-control select2" data-placeholder="Choose Status">
                                        @if($category->status===1)
                                        <option value="{{$category->status}}">Active</option>
                                        @elseif($category->status===2)
                                        <option value="{{$category->status}}">Inactive</option>
                                        @endif
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-layout-footer">
                        <button type="submit" name="submit" class="btn btn-info mg-r-5">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
