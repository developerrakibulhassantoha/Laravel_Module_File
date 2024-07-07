<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--------------- Bootstrap CSS ------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="text-center card-header">Registration Form</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control">
                            </div>

                            <div class="form-group">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control">
                            </div>
                                
                            <button type="login" class="btn btn-success">Login</button>

                            <a href="#" class="btn btn-primary">Sign Up</a>
                                
                            <a href="#" class="float-right"> Forget Your Password?</a>
                        </form>
                        <hr>
                            <h5>Did not receive your verification email? <a href="#">Resend</a></h5>
                    </div>     
                </div>
            </div>
        </div>
    </div>

    







    <!------------- Bootstrap js --------------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>