@extends('admin.layout.index')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Đơn hàng</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách đơn hàng</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Ngày đặt hàng</th>
                            <th>Người dùng</th>
                            <th>Địa chỉ</th>
                            <th>Tổng giá trị</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ngày đặt hàng</th>
                            <th>Người dùng</th>
                            <th>Địa chỉ</th>
                            <th>Tổng giá trị</th>
                            <th>Trạng thái</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->user->last_name ?? "" }} {{ $order->user->first_name ?? "" }}</td>
                            <td>{{ $order->address ?? "" }}</td>
                            <td>{{ number_format($order->total_price()) ?? 0 }}</td>
                            <td>Đang xử lý</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
