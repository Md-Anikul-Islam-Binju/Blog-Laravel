@extends('admin.index')
@section('content')
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Sub Category</h5>
        </div>
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Basic Sub Category DataTable</h6>
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                    <tr>
                        <th class="wd-15p">ID</th>
                        <th class="wd-15p">Category name</th>
                        <th class="wd-15p">Sub Category name</th>
                        <th class="wd-15p">Satus</th>
                        <th class="wd-20p">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subCategory as $row=>$value)
                        <tr>
                            <td>{{$row + 1}}</td>
                            <td>{{$value->category->name}}</td>
                            <td>{{$value->name}}</td>
                            <td>
                                @if($value->status == 1)
                                    <div>Active</div>
                                @else
                                    <div>Inactive</div>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('blog.sub.category.delete',[$value->id]) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
