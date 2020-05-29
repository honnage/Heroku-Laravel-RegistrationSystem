@extends('layouts.admin')

@section('body')

<div class="container">
    <div class="data justify-content-center">
        <div class="col-md-12">
            <div class="card my-2">
                <div class="card-header" style="background-color:#494B4B; color: white"><strong> รายการใบลงทะเบยน </strong></div>
                    {{-- <div class="card-body"> --}}
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col"><center>วัน-เวลา ลงทะเบียน</center></th>
                                <th scope="col"><center>รหัสรายการ</center></th>
                                {{-- <th scope="col"><center>รหัสผู้ลงทะเบียน</center></th> --}}
                                <th scope="col"><center>ราคา</center></th>
                                <th scope="col"><center>สถานะ</center></th>
                                <th scope="col"><center>ตัวดำเนิดการ</center></th>

                            </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $data)
                                <tr>
                                    <th scope="row">{{$data->date}}</th>
                                    <th scope="row">{{$data->id}}</th>
                                    {{-- <th scope="row">{{$data->user_id}}</th> --}}
                                    <td>{{number_format($data->price)}}</td>
                                    <td>
                                        <center>
                                        @if($data->status == "Not Paid" || $data->status == 0)
                                            <label style="color: red">{{$data->status}}</label>
                                        @elseif($data->status == 1)
                                            <label style="color: rgba(236, 198, 30, 0.753)">{{$data->status}}</label>
                                        @else
                                            <label style="color: rgba(4, 102, 20, 0.753)">{{$data->status}}</label>
                                        @endif
                                        <center>
                                    </td>
                                    <td>
                                        <center>
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="/orders/dashboardDetail/{{$data->id}}" class="btn btn-primary col-sm-4">รายละเอียด</a>
                                                <a href="/orders/editPayment/{{$data->id}}" class="btn btn-success col-sm-4">ชำระเงิน</a>
                                            </form>
                                        </center>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
