<?php
    $title = 'Courselogin-Signup';
    $status_s = 'active';
    include_once 'db/conn.php';
    include_once 'includes/header.php';
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Sign-up</h5>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">
                            <div class="form-group mb-3">
                                <label for="">First Name</label>
                                <input type="text" name="fname" class="form-control" id="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Last Name</label>
                                <input type="text" name="lname" class="form-control" id="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Phone Number</label>
                                <input type="text" name="phone" class="form-control" id="">
                            </div>
                            <div class="form-group mbb-3">
                                <label for="">Email Address</label>
                                <input type="email" name="email" class="form-control" id="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" id="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Confirm Password </label>
                                <input type="password" name="confirm_password" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="register_btn" class="btn btn-primary">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include_once 'includes/footer.php';
?>