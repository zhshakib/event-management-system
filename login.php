<?php
require_once "./database.php";
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
                            <a href="website/register.php" class="btn btn-outline-warning mt-2" >Create New</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<section class="bg-white">
    <h2>Form data section!</h2>
    
<?php
// TODO: Create Login Functionality


if (isset($_POST) & !empty($_POST)) {
    $email = $_POST["email"];
    $password = $_POST['password'];
    $response = $database->Check_User($email, $password);
    if (!empty($response["firstName"])) {
        session_start();
        $_SESSION['loggedin'] = "true";
        $_SESSION['user'] = $user_name = $response["firstName"];
        header("Location: ./index.php?message=success"); /* Redirect browser */
        exit();
    }
    else {
        echo "Email Password Didnt match! ";
    }


}
?>

</section>

    <?php
include "./layout/footer.php";
?>