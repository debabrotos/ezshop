@extends('master')
@section("content")

<div class="container custom-login">
    <div class="myCard1">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-sm-4 col-sm-offset-4 myCard">
                <div class="myLeftCtn">
                    <form action="register" method="POST" class="myForm text-center" >
                        <header>Register</header>    
                    @csrf 
                        <div class="form-group">
                        <i class="fas fa-user"></i>
                            <!-- <label for="exampleInputEmail1">User Name</label> -->
                            <input type="text" name="name" class="myInput" id="exampleInputEmail1" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-envelope"></i>
                            <!-- <label for="exampleInputEmail1">Email address</label> -->
                            <input type="email" name="email" class="myInput" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <i class="fas fa-lock"></i>
                            <!-- <label for="exampleInputPassword1">Password</label> -->
                            <input type="password" name="password" class="myInput" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="butt">Submit</button>
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