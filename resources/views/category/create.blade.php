
@extends('admin.main')
@section('content')

<h3>create page</h3>
@endsection
@section('button')
<hr>
    <button class="btn btn-primary ml-5"><a href="/create" style="color:white">view all Category</a></button>
    <button class="btn btn-primary"><a href="" style="color:white">new Category</a></button>
@if (Session::has('cc'))
<div class="alert alert-success mt-4">
<button class="close" data-dismiss="alert">*</button>
<strong>{{Session('cc')}}</strong>
</div>

@endif
<form method="POST" action="/store" class="form m-5">
   @csrf
   <h3>enter new cateory</h3>
        <input type="text" name="name">
        <input type="submit" name="">
    </form>

@endsection
