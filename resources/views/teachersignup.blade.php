@extends('welcome')









@section('content')




          <!-- Login Modal -->







              <section class="fdb-block my-5 text-warning" style="font-family: monospace;font-weight: bold;" >
            <div class="container" >
              <div class="row justify-content-center ">
                <div class="col-12 col-md-8 col-lg-7 col-md-5 text-center bg-dark" >

                  <div class="fdb-box fdb-touch" >


                    <div class="row">
                      <div class="col my-2">
                        <h4><b>Register As Teacher</b></h4>
                      </div>
                    </div>
                     <form method="POST" action="">

                    <div class="row">
                      <div class="col-12 col-md">
                        <input type="text" class="form-control" name="firstname"placeholder="First Name" value="" required>
                      </div>
                      <div class="col-12 col-md mt-4 mt-md-0">
                       <input type="text" class="form-control" name="lastname"placeholder="Last Name" value="" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mt-4">
                        <input type="text" class="form-control" name="phone"placeholder="Phone" value="" required>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col mt-4">
                        <input type="text" class="form-control" name="email"placeholder="Email" value="
                        " required>
                      </div>
                    </div>
          <div class="row">
                   <div class="col-12 col-md">
                    <label></label>

              <select class="form-control" id="inputState">
                <option selected>Gender</option>
                <option  value="Male" name="gen" type="radio">Male</option>
                <option value="Female" name="gen" type="radio">Female</option>

              </select>
            </div>
                    </div>
                    <div class="row mt-4">
                      <div class="col">
                        <input type="text" class="form-control mb-1" name="qualification" placeholder="Qualification" required>
                      </div>
                    </div>
                    <div class="row mt-4">
                      <div class="col">
                        <input type="text" class="form-control mb-1" name="branch" placeholder="Branch" required>
                      </div>
                    </div>

                    <div class="row mt-4">
                      <div class="col">
                        <input type="password" class="form-control mb-1" name="password_1" placeholder="Password" required>
                      </div>
                    </div>

                    <div class="row mt-4">
                      <div class="col">
                        <input type="password" class="form-control mb-1" name="password_2" placeholder="Confirm Password" required >
          <div class="form-group form-check text-left">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
                      </div>
                    </div>
                    <div class="row mt-4 my-4">
                        <div class="col">
                          <input class="btn" name="submit" id="sub" type="submit" value="Sumbit" >


                        </div>
                      </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </section>







              <!-- Optional JavaScript -->





        </div>


    @endsection
