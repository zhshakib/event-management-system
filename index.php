<?php
session_start();
require_once "./database.php";
include "./layout/header.php";
include "./layout/navbar.php";
?>
<?php

if (!empty($_GET['message'])) {
    $UserName = $_SESSION["user"];
    if ($_GET['message'] === "signout") {
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();
    }
?>
<div class="mt-2 container alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Welcome! <?php echo $UserName; ?></strong> You have Succesfully Logged in!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>   
<?php

}
?>

<div class="container">
    <div class="card text-white bg-dark my-2">
        <h5 class="card-header">Urgent Birthday Party Arrangement</h5>
        <div class="card-body">
            <h5 class="card-title">Budget: 200$-250$</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt alias ipsa molestiae illum inventore aperiam, omnis neque officiis. Veritatis, cupiditate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt voluptatem ipsam ducimus maiores ad reiciendis totam velit veniam dolorum, quibusdam eos beatae, maxime repudiandae sint placeat. Omnis possimus at quod. </p>
            <a href="#" class="btn btn-primary">Place Offer</a>
        </div>
    </div>
    <div class="card text-white bg-dark my-2">
        <h5 class="card-header">Rag Day Event</h5>
        <div class="card-body">
            <h5 class="card-title">Budget: 200$-250$</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt alias ipsa molestiae illum inventore aperiam, omnis neque officiis. Veritatis, cupiditate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt voluptatem ipsam ducimus maiores ad reiciendis totam velit veniam dolorum, quibusdam eos beatae, maxime repudiandae sint placeat. Omnis possimus at quod. </p>
            <a href="#" class="btn btn-primary">Place Offer</a>
        </div>
    </div>  
</div>

<?php
include "./layout/footer.php";
?>