@extends('teacher.teacherdeshboard')
@section('content')
<div class="container">
<form method="POST"  action="{{route('submitNotes')}}" enctype="multipart/form-data" >
    @csrf



        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Subject</label>
            <input class="form-control" name="sub" id="inputEmail4" placeholder="Subject">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Subject</label>
            <input class="form-control" name="course" id="inputEmail4" placeholder="Subject">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Branch</label>
            <input class="form-control" name="branch" id="inputPassword4" placeholder="Branch">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Course</label>
          <input type="text" class="form-control" id="inputAddress" name="cd" placeholder="Course Detail">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Subject Description</label>
          <textarea type="text" name="desc" class="form-control" id="inputAddress2" placeholder="Subject Description."></textarea>
        </div>


            <div class="form-group">
              <label for="exampleFormControlFile1">Example file input</label>
              <input type="file" name="Imgname" class="form-control-file" id="exampleFormControlFile1">
            </div>




        <button type="submit" class="btn btn-primary">Add Notes</button>
      </form>




</div>
@endsection
