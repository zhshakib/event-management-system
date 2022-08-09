<nav class="container navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="/website" class="text-decoration-none"> 
                    <h2 class="navbar-brand fs-2">Evento</h2>
                </a>
                <?php if ($_SESSION['loggedin'] === "true") { ?>
                    <div class="d-flex">
                        <a href="#" class="btn btn-success mx-2">Create Offer</a>
                        <a href="/website/login.php?message=signout" class="btn btn-primary mx-2">Sign Out</a>
                    </div>
                <?php
}
else { ?>
                    <div class="d-flex">
                        <a href="/website/login.php" class="btn btn-success mx-2">Login</a>
                        <a href="/website/register.php" class="btn btn-primary mx-2">Register</a>
                    </div>

<?php
}?> 
            </div>
        </nav>
    </header>
