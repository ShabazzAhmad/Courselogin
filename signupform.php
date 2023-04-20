<!-- Signup Form -->
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Sign-up</h5>
                        <?php if (isset($exist)): echo $exist; endif; ?>
                        <?php if (isset($erroempty)): echo $erroempty; endif;?>
                    </div>
                    <div class="card-body">
                        <form action="<?php htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
                            <div class="form-group mb-3">
                                <label for="">First Name</label>
                                <input type="text" name="fname" class="form-control" id="" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST')  echo $_POST['fname']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Last Name</label>
                                <input type="text" name="lname" class="form-control" id="" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST')  echo $_POST['lname']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Phone Number</label>
                                <input type="text" name="phone" class="form-control" id="" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST')  echo $_POST['phone']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Gender</label>
                                <select name="gender" id="" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST')  echo $_POST['gender']; ?>">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Trans">Trans</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <input type="email" name="email" class="form-control" id="" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST')  echo $_POST['email']; ?>">
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