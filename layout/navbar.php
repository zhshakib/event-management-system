<nav class="container navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <h2 class="navbar-brand">Evento</h2>
                <?php if ($_SESSION['loggedin'] === "False") { ?>
                    <div class="d-flex">
                        <a href="#" class="btn btn-success mx-2">Create Offer</a>
                        <a href="#" class="btn btn-primary mx-2">Sign Out</a>
                    </div>
                <?php
}
else { ?>
                    <div class="d-flex">
                        <a href="#" class="btn btn-success mx-2">Login</a>
                        <a href="#" class="btn btn-primary mx-2">Register</a>
                    </div>

<?php
}?> 
            </div>
        </nav>
    </header>
