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
                        <h2 class="text-center mb-4 fw-bold">Register </h2>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example13">Email address</label>
                            <input type="email" id="form1Example13" class="form-control form-control-lg" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example13">Password</label>
                            <input type="email" id="form1Example13" class="form-control form-control-lg" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example13">First Name</label>
                            <input type="email" id="form1Example13" class="form-control form-control-lg" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example13">Last Name</label>
                            <input type="email" id="form1Example13" class="form-control form-control-lg" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example13">I want to </label>
                            <select name="role" class="form-control form-control-lg" >
                                <option value="Seller" >    Post Offer    </option>
                                <option value="Buyer"  >    Bid On Offer    </option>
                            </select>
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