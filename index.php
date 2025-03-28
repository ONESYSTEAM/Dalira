<?php include realpath(__DIR__ . '/app/layout/header.php'); ?>

<style>
    body {
        background-image: radial-gradient(#cdd9e7 1.05px, #e5e5f7 1.05px);
        background-size: 21px 21px;
    }
</style>

<div class="container d-flex align-items-center vh-100">
    <div class="row text-start">
        <div class="col-lg-12">
            <h1 class="display-3 fw-bold">Congratulations!</h1>
            <p class="lead pt-3">Your <?= $settings["app_name"] ?> project has been created successfully. <br class="d-none d-sm-block"> If you&rsquo;re new to <?= $settings["app_name"] ?>, it&rsquo;s advisable to read the <a href="https://appworks-co.github.io/dalira/" class="text-decoration-none" target="_blank">documentation</a>.</p>
        </div>
    </div>
</div>

<?php include realpath(__DIR__ . '/app/layout/footer.php'); ?>