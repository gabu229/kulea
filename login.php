<!DOCTYPE html>
<html lang="en">

<?php
$page_title = "Login";

include "./includes/views/head.php";


?>


<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 bg-cover min-vh-100"></div>

            <div class="col-md-8 bg-light min-vh-100">
                <div class="row">
                    <div class="col-sm-10 mx-auto pt-5 mt-5">

                        <h2 class="h2 fw-bolder">Sign in</h2>

                        <form action="" autocomplete="off">
                            <div class="col-12 my-3">
                                <label for="email">Email address</label>
                                <div class="col-sm-10 col-md-6 input-group mb-3">
                                    <span class="input-group-text">-</span>
                                    <input type="text" id="email" class="form-control" aria-label="Email address" />
                                </div>

                            </div>
                            <div class="col-12 my-3">
                                <label for="password">Password</label>
                                <div class="col-sm-10 col-md-6 input-group mb-3">
                                    <span class="input-group-text">-</span>
                                    <input type="password" id="password" class="form-control" aria-label="Password" />
                                </div>

                            </div>
                            <div class="col-12 my-3">
                                <div class="col-sm-10 col-md-6 input-group mb-3 text-end">
                                    <button type="submit" id="" class="btn btn-primary" aria-label="Password">Submit </button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BOOTSTRAP JS CDN HERE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>