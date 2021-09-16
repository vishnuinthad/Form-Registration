<html>
<title>registration</title>
<head>

<link rel="stylesheet" href="style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<script>
function myfun()
{
    var a=document.getElementById("password").value;
    var b=document.getElementById("cpassword").value;
    if(a!=b){
        document.getElementById("message").innerHTML="password does not match";
        return false;
    }

    var c=document.getElementById("mobile").value;
    if(isnan(c)){
        document.getElementById("msg").innerHTML="please enter digit";
        return false;
    }

}
</script>
<script>
function myFunction() {
  location.replace("login.php")
}
</script>
<body>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Already Registered?</p>
                        <input type="submit" onclick="myFunction()" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <!-- <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        </ul> -->
                        <form action="insert.php" method="post" onsubmit="return myfun()">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Registration Form</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="cpassword" id="cpassword"  placeholder="Confirm Password " value="">
                                            <span id="message" style="color:red;"></span>
                                        </div>
                                        <!-- <span id="message" style="color:red;"></span> -->
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="other">
                                                    <span>Other</span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" id="mobile" placeholder="Phone" value="" />
                                        <span id="msg" style="color:red;"></span>
                                        </div>
                                        <div class="form-group">
                                            <textarea  rows="3" cols="40" class="form-control" name="adress" placeholder="Address" value=""></textarea>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="state" >
                                                <option class="hidden" selected disabled>Select State</option>
                                                <option value="kerala">Kerala</option>
                                                <option value="tamilnadu">Tamilnadu</option>
                                                <option value="karnataka">Karnataka</option>
                                            </select>
                                        </div>
                                        <!-- <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                                        </div> -->
                                        <input type="submit"  name="btnn" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                            </form>
                            
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </body>
            </head>