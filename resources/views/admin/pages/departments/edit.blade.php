@extends('admin.layouts.admin-master')
@section('title','Sửa thông tin khoa')
@section('content-header')
    <b>Sửa thông tin khoa: {{$dep->name}}</b>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    {!! Form::open(['method'=>'POST','route'=>['admin.departments.update',$dep->id]]) !!}
                    {!! Form::submit('Cập nhật',['class'=>'btn btn-success']) !!}
                    <a class="btn btn-secondary text-white" onClick="window.location.reload();">Tải lại</a>
                    <a href="{{route('admin.departments.index')}}" class="btn btn-primary">DS khoa</a>
                </div>
            </div>
        </div>


        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="m-0 text-center"><b>Thông tin khoa</b></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('department_code', 'Mã khoa:',['class'=>'required','required']) !!}
                                {!! Form::text('department_code',$dep->department_code,['class'=>'form-control ','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Tên khoa:',['class'=>'required','required']) !!}
                                {!! Form::text('name',$dep->name,['class'=>'form-control ','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('description', 'Mô tả:') !!}
                                {!! Form::textarea('description',$dep->description,['class'=>'form-control','rows'=>3]) !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.col-md-12 -->

        {!! Form::close() !!}
    </div>
    <!-- /.row -->
@endsection
@section('js')

@endsection
