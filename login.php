<?php
    $title = 'Courselogin-login';
    $status_l = 'active';
    include_once 'includes/header.php';
?>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Login</h5>
                    </div>
                    <div class="card-body">
                        <form action="success.php" method="get">
                            <div class="form-group mbb-3">
                                <label for="">Email Address</label>
                                <input type="email" name="email" class="form-control" id="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Login</button>
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