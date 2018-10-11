@extends('admin.template')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">List Category</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('message'))
        <div class="show_message panel panel-success">
            <div class="panel-heading">
                {{Session::get('message')}}
            </div>
        </div>
        @endif
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Parent</th>
                                <th>Created Date</th>
                                <th>Updated Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $list)
                            <tr class="odd gradeX">
                                <td>{{$list->id}}</td>
                                <td>
                                    <a href="">
                                        {{$list->cat_name}}</td>
                                    </a>
                                <td>{{$list->parent_id}}</td>
                                <td class="center">{{$list->created_at}}</td>
                                <td class="center">{{$list->updated_at}}</td>
                                <td class="center">
                                    <a href="{{url('admin/category/edit/'.$list->id)}}">
                                        <i class="fa fa-edit" title="Remove Category"></i> Edit
                                    </a>
                                </td>
                                <td class="center">
                                    <a href="{{url('admin/category/del/'.$list->id)}}">
                                        <i class="fa fa-remove" title="Remove Category"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>  
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
                <!-- /.row --> 
@endsection