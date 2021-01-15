@extends('welcome')
@section('content')
<section class="fdb-block my-5 text-warning" style="font-family: monospace;font-weight: bold;" >

    <div class="container" >
    <form method="post" action="{{route('savestudent')}}">

      <div class="row justify-content-center ">
        <div class="col-12 col-md-8 col-lg-9 mt-2 text-center " style="background:black;border-radius:10px;opacity:0.9" data-aos="flip-left" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
          <div class="fdb-box fdb-touch" style="" >
            <div class="row" >
              <div class="col my-2">
                <h3><b>Register As Student</b></h3>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md">
                <input type="text" name="a" class="form-control" placeholder="First Name" required>
              </div>
              <div class="col-12 col-md mt-4 mt-md-0">
               <input type="text" name="b" class="form-control" placeholder="Last Name" required>
              </div>
            </div>

            <div class="row">
              <div class="col mt-4">
                <div class="row">
              <div class="col-12 col-md">
                <input type="text" name="c" class="form-control" placeholder="Course" required>
              </div>
              <div class="col-12 col-md mt-4 mt-md-0">
               <input type="text" name="d" class="form-control" placeholder="Branch" required>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
              <div class="col mt-4">
               <div class="row">
              <div class="col-12 col-md">
                <input type="text" class="form-control"name="e" placeholder="Semester" required>
              </div>
              <div class="col-12 col-md mt-4 mt-md-0">
               <input type="text" class="form-control"name="f" placeholder="Roll Number" required>

              </div>
            </div>
              </div>
            </div>
            <div class="row">
              <div class="col mt-4">
               <div class="row">
              <div class="col-12 col-md">
                <input type="text" class="form-control" name="g" placeholder="Email"required>

              </div>
              <div class="col-12 col-md mt-4 mt-md-0">
               <input type="text" class="form-control" name="h" placeholder="Mobile Number" require>
              </div>
            </div>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <input type="password" class="form-control mb-1" name="i" placeholder="Password" require>

              </div>
            </div>
             <div class="row mt-4">
              <div class="col">
                <input type="password" class="form-control mb-1" name="confirm" placeholder="Confirm Password" require>

  <div class="form-group form-check text-left">
      <!--input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Remember me</label>-->
    </div>
              </div>
            </div>

            <div class="row mt-4 my-4">
              <div class="col">
                <input class="btn" name="submit" id="sub" type="submit" value="Sumbit" >


              </div>
            </div>
          </div>
        </div>
      </div>
  </form>
    </div>
  </section>


@endsection
