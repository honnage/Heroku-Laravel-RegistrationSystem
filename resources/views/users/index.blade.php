@extends('layouts.admin')
@section('body')
<div class="container">
    <div class="data justify-content-center">
        {{-- <div class="col-md-12"> --}}
            <div class="card my-1">
                <div class="card-header" style="background-color:#494B4B; color: white"><strong> ข้อมูลผู้ใช้ </strong></div>
                    {{-- <div class="card-body"> --}}
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col"><center>รหัส</center></th>
                                <th scope="col"><center>สถานะ</center></th>
                                <th scope="col"><center>Username</center></th>
                                <th scope="col"><center>Email</center></th>
                                <th scope="col"><center>คำอธิบาย</center></th>
                                <th scope="col"><center>ตัวดำเนิดการ</center></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    @if($data->id == 1)
                                        <td><center>Admin</center></td>
                                    @elseif($data->status == 2)
                                        <td><center>Admin</center></td>
                                    @elseif($data->status == 1)
                                        <td><center>Moderator</center></td>
                                    @else
                                        <td><center>User</center></td>
                                    @endif
                                    <td>{{$data->username}}</td>
                                    <td>{{$data->email}}</td>
                                    @if($data->detail == 0)
                                        <td><center><strong style="color: red">ยังไม่ได้เพื่มข้อมูลส่วนตัว</strong></center></td>
                                    @else
                                        <td><center><strong style="color: rgb(13, 212, 13)">เพื่มข้อมูลส่วนตัวแล้ว</strong></center></td>
                                    @endif
                                    {{-- <td><center>{{$data->detail}}</center></td> --}}
                                    <td>
                                        <center>
                                            <a href="/UserDetails/editStatus/{{$data->id}} " class="btn btn-success">แสดงข้อมูล</a>
                                            {{-- <a href="{{route('subjects.edit',$data->id)}}" class="btn btn-warning"></a> --}}
                                        </center>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{$subject->links()}} --}}
                    {{-- </div> --}}
                </div>
            </div>
        {{-- </div> --}}
        </div>
    </div>
</div>
@endsection
