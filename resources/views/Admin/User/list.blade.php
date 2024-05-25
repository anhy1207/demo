@extends('layouts.app')

@section('content')
<h1 class="text-center">Danh sách nhân viên</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(Session::has('msg'))
        <div class="alter alter-success">{{ Session::get('msg')}}</div>
        @endif
        <a href="{{route('user.create')}}" class="btn btn-primary"> + Thêm mới <a/>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Họ tên</th>
      <th scope="col">Email</th>
      <th scope="col" colspan="2">Tác vụ</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $key => $value)
    <tr>
      <th scope="row"{{ $key + 1 }}</th>
            <td>{{ $value -> name }}</td>
            <td>{{ $value -> email }}</td>
      <td><a href="{{route('user.edit', $value->id) }}" class="btn btn-info">Sửa</td>
      <td>
        <form action="{{ route('user.destroy', $value->id) }}" method="post">
        @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger" onclick="return confirm('xac nhan xoa?')">xóa</button>
        </form>
      </td>
    </tr>
  @endforeach

  </tbody>
</table>

@endsection
