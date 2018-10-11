@extends('admin.template')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Category Manager</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<?php
    $parent_id = 0;
    if( isset($data['cate']) && ! empty($data['cate']))
    {
        $cat_name = $data['cate']->cat_name;
        $cat_alias = $data['cate']->alias;
        $parent_id = $data['cate']->parent_id;
    }
?>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        @if (count($errors) > 0)
        <div class="panel-danger">
            <ul class="error-list">
                @foreach ($errors->all() as $key=>$err)
                    <li>{{$err}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="panel panel-default">            
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form role="form" method="post" action="{{route('postCate')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="cat_name" value="{{isset($cat_name) ? $cat_name : ''}}">
                            </div>
                            <div class="form-group">
                                <label>Alias</label>
                                <input class="form-control" name="alias" value="{{isset($cat_alias) ? $cat_alias : ''}}">
                            </div>
                            <div class="form-group">
                                <label>Category Parent</label>
                                <select class="form-control" name="parent_id">
                                    @foreach($data['list'] as $list)
                                    <option value="{{$list->id}}" {{($parent_id == $list->id) ? 'selected': ''}}>{{$list->cat_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Submit Button</button>
                        </form>
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