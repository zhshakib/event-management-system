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
                        <h2 class="text-center mb-4 fw-bold">Register </h2>
                        <!-- Email input -->
                        <div class="form-outline mb-4 transparent-input">
                            <label class="form-label" for="form1Example13">Email address</label>
                            <input required  name="email" type="email" id="form1Example13" class="form-control form-control-lg" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example23">Password</label>
                            <input required  name="password" type="password" id="form1Example23" class="form-control form-control-lg" />
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <!-- First Name input -->
                            <div class="form-outline me-2">
                                <label class="form-label" for="form1Example23">First Name</label>
                                <input required  name="fname" type="text" id="form1Example23" class="form-control form-control-lg" />
                            </div>
                            <!-- Last Name input -->
                            <div class="form-outline">
                                <label class="form-label" for="form1Example23">Last Name</label>
                                <input required name="lname" type="text" id="form1Example23" class="form-control form-control-lg" />
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <!-- Gender -->
                            <div class="form-outline flex-grow-1 me-2">
                                <label class="form-label" for="form1Example23">Gender</label>
                                <select required name="gender" id="form1Example23" class="form-control form-control-lg" />
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        <!-- Age input -->
                            <div class="form-outline">
                                <label class="form-label" for="form1Example23">Age</label>
                                <input required name="age" type="number" id="form1Example23" class="form-control form-control-lg" />
                            </div>
                        </div>
                        <!-- Role Model -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example23">Role</label>
                            <select required name="role" id="form1Example23" class="form-control form-control-lg" />
                                <option value="buyer">I want to Hire</option>
                                <option value="seller">I want to be Hired</option>
                            </select>
                        </div>
                       
                        <!-- Submit button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-outline-warning" >Sign Up</button>
                            <a href="./login.php" class="btn btn-outline-danger mt-3">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
if (isset($_POST) & !empty($_POST)) {

    // Fetching all the Credentials!

    $email = $_POST["email"];
    $user_pass = $_POST['password'];
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];

    // creating HashPass! 

    $user_pass = password_hash($user_pass, PASSWORD_BCRYPT);

    // Creatingg User! 
    $response = $database->Create_User($email, $user_pass, $firstName, $lastName, $age, $gender, $role);
    if ($response) {
        echo "<script type='text/javascript'>
        window.location.replace('./login.php?message=success');
        </script>";
    }
}
?>
<?php
include "./layout/footer.php";
?>