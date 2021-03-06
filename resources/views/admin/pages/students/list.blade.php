@extends('admin.layouts.admin-master')
@section('title','Danh sách sinh viên')
@section('content-header')
    <b>Danh sách sinh viên</b>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <a class="btn btn-success" href="{{route('admin.students.create')}}">Thêm Sinh Viên</a>
                    <a class="btn btn-secondary text-white" onClick="window.location.reload();">Tải lại</a>

                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">

                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ và tên</th>
                            {{--<th>Giới tính</th>--}}
                            <th>Mã số sinh viên</th>
                            <th>Lớp</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($std as $key=> $val)

                            <tr>
                                <td width="3%">{{$key}}</td>
                                <td>{{$val->name}}</td>
                                {{--<td>{{$val->gender}}</td>--}}
                                <td>{{$val->student_code}}</td>
                                <td>{{$val->show_course->name}}</td>
                                <td width="15%">
                                    <div class="dropdown dropleft float-right">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                data-toggle="dropdown">
                                            Hành động
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('admin.students.show',$val->id)}}">
                                                <i class="fas fa-info text-warning mr-2"></i>Xem chi tiết</a>
                                            <a class="dropdown-item" href="{{route('admin.students.edit',$val->id)}}">
                                                <i class="fas fa-pen text-success mr-2"></i>Sửa</a>
                                            <a class="dropdown-item confirmClick"
                                               href="{{route('admin.students.destroy',$val->id)}}">
                                                <i class="fas fa-trash-alt text-danger mr-2"></i>Xóa</a>
                                        </div>
                                    </div>
{{--                                    <div class="float-right">--}}
{{--                                        <a class="btn btn-sm btn-warning"--}}
{{--                                           href="{{route('admin.students.show',$val->id)}}"><i--}}
{{--                                                class="fas fa-info-circle text-white"></i></a>--}}
{{--                                        <a class="btn btn-sm btn-success"--}}
{{--                                           href="{{route('admin.students.edit',$val->id)}}"><i--}}
{{--                                                class="fas fa-pen"></i></a>--}}
{{--                                        <a class="btn btn-sm btn-danger confirmClick"--}}
{{--                                           href="{{route('admin.students.destroy',$val->id)}}"><i--}}
{{--                                                class="fas fa-trash-alt"></i></a>--}}
{{--                                    </div>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            {{--<th>STT</th>--}}
                            <th>Họ và tên</th>
                            {{--<th>Giới tính</th>--}}
                            <th>Mã số sinh viên</th>
                            <th>Lớp</th>
                            <th>Hành động</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        <!-- /.col -->
    </div>
@endsection
@section('js')
    <!-- DataTables -->

    <script>
        $(function () {
            $("#example2").DataTable({
                "language": {
                    "lengthMenu": "Hiển thị _MENU_ hàng mỗi trang",
                    "zeroRecords": "Không có kết quả nào - sorry :(",
                    "info": "Đang hiển thị trang _PAGE_ trong _PAGES_ trang ",
                    "infoEmpty": "Không có kết quả nào",
                    "infoFiltered": "(Lọc từ _MAX_ kết quả tổng cộng)",
                    "paginate": {
                        "previous": "<",
                        "next": ">"
                    },
                    "search": "Tìm kiếm",
                }
            });

        });

    </script>
@endsection
