<?php
include_once "./config.php";
include "./layout/header.php";
?>
    <section class="vh-100 bg-dark text-white">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="./assets/draw2.svg"
                        class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form class="border border-3 rounded p-5">
                        <h2 class="text-center mb-4 fw-bold">Login </h2>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form1Example13" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example13">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form1Example23" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example23">Password</label>
                        </div>
                        <!-- Submit button -->
                        <div class="d-grid">
                            <button class="btn btn-primary" type="button">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php
include "./layout/footer.php";
?>