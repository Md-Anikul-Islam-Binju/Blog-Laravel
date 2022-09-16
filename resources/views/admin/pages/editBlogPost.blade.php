@extends('admin.index')
@section('content')

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Add Category</h5>
        </div>
        <div class="card pd-20 pd-sm-40">
            <form method="post" action="{{route('blog.post.update',[$post->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                <select name="category_id" class="form-control select2">
                                    <option value="{{$post->category->id}}">{{$post->category->name}}</option>
                                    @foreach($category as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
                                <select name="sub_category_id" id="sub_category_id" class="form-control select2">
                                    <option value="{{$post->subcategory->id}}">{{$post->subcategory->name}}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Post Title: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="title" value = "{{$post->title}}" placeholder="Enter category">
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Post Image: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="image" value="{{$post->image}}">
                                <label>Old Image</label>
                                <img style="height: 70px; width: 100px;"  src="{{ asset('storage/image/'.$post->image) }}">
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <textarea rows="3" name="details" class="form-control" placeholder="Textarea">{{$post->details}}</textarea>
                        </div>

                        <div class="col-lg-8">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Status: <span class="tx-danger">*</span></label>
                                <select name="status" class="form-control select2">
                                    @if($post->status===1)
                                    <option value="{{$post->status}}">Active</option>
                                    @elseif($post->status===2)
                                    <option value="{{$post->status}}">Inactive</option>
                                    @endif
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-layout-footer">
                        <button type="submit" name="submit"  class="btn btn-info mg-r-5">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function(){
                var category_id = $(this).val();
                console.log(category_id);
                if(category_id) {
                    $.ajax({
                        url: "{{  url('/get/subCategory/') }}/"+category_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            var d =$('select[name="sub_category_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="sub_category_id"]').append('<option value="'+ value.id +'">' + value.name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
@endsection



