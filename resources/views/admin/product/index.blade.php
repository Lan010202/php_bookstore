@extends('admin.layout.index')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Sản phẩm</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tên danh mục</th>
                            <th>Slug</th>
                            <th>Giá sản phẩm</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tên danh mục</th>
                            <th>Slug</th>
                            <th>Giá sản phẩm</th>
                            <th>Hành động</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Đắc nhân tâm</td>
                            <td>dac-nhan-tam</td>
                            <td>80,000 VND</td>
                            <td>
                                action
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
