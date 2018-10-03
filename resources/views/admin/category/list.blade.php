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
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables Advanced Tables
            </div>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $list)
                            <tr class="odd gradeX">
                                <td>{{$list->id}}</td>
                                <td>{{$list->cat_name}}</td>
                                <td>{{$list->parent_id}}</td>
                                <td class="center">{{$list->created_at}}</td>
                                <td class="center">{{$list->updated_at}}</td>
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