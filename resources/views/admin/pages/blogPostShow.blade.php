@extends('admin.index')
@section('content')
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Blog Post</h5>
        </div>
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Blog Post DataTable</h6>
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th class="wd-15p">Category</th>
                        <th class="wd-15p">Sub Category</th>
                        <th class="wd-15p">Image</th>
                        <th class="wd-15p">Title</th>
                        <th class="wd-15p">Details</th>
                        <th>Status</th>
                        <th class="wd-20p">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($post as $row=>$value)
                        <tr>
                            <td>{{$row+1}}</td>
                            <td>{{ $value->category->name }}</td>
                            <td>{{ $value->subcategory->name }}</td>
                            <td>
                                <img style="height: 70px; width: 100px;"  src="{{ asset('storage/image/'.$value->image) }}">
                            </td>
                            <td>{{ $value->title }}</td>
                            <td>{{ Str::limit($value->details, 20),'...' }}</td>
                            <td>
                                @if($value->status == 1)
                                    <div>Active</div>
                                @else
                                    <div>Inactive</div>
                                @endif</td>
                            <td>
                                <a href="{{ route('blog.post.edit',[$value->slug]) }}">Edit</a>
                                <a href="{{ route('blog.post.delete',[$value->id]) }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
