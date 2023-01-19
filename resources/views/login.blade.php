@extends('master')
@section("content")

<div class="container custom-login">
    <div class="myCard1">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 myCard">
                <div   div class="myLeftCtn">
                    <form action="login" method="POST" class="myForm text-center">
                        <header>Log In</header>
                        @csrf 
                        <div class="form-group">
                            <i class="fas fa-envelope"></i>
                            <input class="myInput" type="email" name="email"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <i class="fas fa-lock"></i>
                            <input class="myInput" type="password" name="password"  id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                        <!-- <div class="form-group">
                            <label>
                                <input id="check_1" name="check_1"  type="checkbox" required><small> I read and agree to Terms & Conditions</small></input> 
                                <div class="invalid-feedback">You must check the box.</div>
                            </label>
                        </div> -->
                        <input type="submit" class="butt">
                    </form>
                </div>
                
            </div>
            
        </div>
    </div>
</div>

<!-- <div style=" height:500px; padding-top:100px;" class="row custom-login">
    <div class="col-sm-4"></div>
    
</div> -->





@endsection