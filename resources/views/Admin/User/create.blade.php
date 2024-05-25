@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Them moi thanh vien</h1>
            <form method="post" action="{{ route('user.store') }}">
            @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Họ tên</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Mật khẩu</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Nhập lại mật</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="re_password">
              </div>
              @if(Session::has('err'))
              <span class="alter alter-danger">{{Session::get('err')}}</span>
              @endif
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
