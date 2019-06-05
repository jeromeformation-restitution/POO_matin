<?php
require('../inc/header.php');
require ('register_check.php');
?>


<main class="container">
    <?php
    if (isset($success) && $success === 1){
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hello <?= $user->getUserName() ?></strong> Bienvenue!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
    }
?>

<form method="post">
    <div class="form-group">
        <label for="name">nom</label>
        <input type="text" class="form-control" id="name" name="name" >
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input type="email" class="form-control" id="email" name="email" >
    </div>

    <div class="form-group">
        <label for="password">password</label>
        <input type="password" class="form-control" id="password" name="password" >
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</main>


<?php
require ('../inc/footer.php');
?>