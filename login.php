<?php
require_once "./database.php";
include "./layout/header.php";
?>

    <section class="vh-100 bg-dark text-white">
        <div class="container py-5 h-100">
        <?php

if (!empty($_GET['message'])) { ?>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>You have Succesfully Signed Up! || Now you can Login</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>   
<?php
}
?>
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="./assets/draw2.svg"
                        class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form class="border border-3 rounded p-5" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <h2 class="text-center mb-4 fw-bold">Login </h2>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input  name="email" type="email" id="form1Example13" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example13">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input  name="password" type="password" id="form1Example23" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example23">Password</label>
                        </div>
                        <!-- Submit button -->
                        <div class="d-grid">
                            <button class="btn btn-outline-danger" type="submit">Login</button>
                            <a href="./register.php" class="btn btn-outline-warning mt-2" >Create New</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
if (isset($_POST) & !empty($_POST)) {
    $email = $_POST["email"];
    $password = $_POST['password'];
    $response = $database->Check_User($email, $password);
    if (!empty($response["firstName"])) {
        session_start();
        $_SESSION['loggedin'] = "true";
        $_SESSION['user'] = $user_name = $response["firstName"];
        echo "<script type='text/javascript'>
        window.location.replace('./index.php?message=success');
        </script>";
    }
    else {
        echo "Email Password Didnt match! ";
    }


}
?>
    <?php
include "./layout/footer.php";
?>

