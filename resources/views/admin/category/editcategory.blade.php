@extends('admin.template')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Category Manager</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Book Category Information
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-4">
                        <form role="form" method="post" action="{{url('admin/addcategory')}}">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="cat_name">
                            </div>
                            <div class="form-group">
                                <label>Selects</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Submit Button</button>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-8">
                        <h3>Category List</h3>
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Parent Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
            
@endsection