<?php
session_start();
include_once "./config.php";
include "./layout/header.php";
include "./layout/navbar.php";
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