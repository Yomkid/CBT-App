
<!-- Include head content -->
<?= view('partials/head') ?>

<body>
    <div class="sidebar login-sidebar">
        <div class="logo">
            <img src="<?= base_url('img/jeta-logo-dark.png') ?>" alt="Jeta Logo">
        </div>
        <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-app text-light fw-bold">CBT APP</h1>
                </div>
            </div>
        </div>

        <footer class="main-footer">
            <p class="text-light text-center">&copy; 2022 <br> JETA Communications TechHub</p>
        </footer>
    </div>
    <main id="main" class="login-main">
        <div class="container">
            <div class="col-lg-12">
                <div class="overlay">
                    <form action="<?= base_url('your_controller/your_method') ?>" method="POST"
                        class="d-flex a-center j-center">

                        <div class="regContainer">
                            <!-- Include error messages -->
                            <?php //include "errors.php"; ?>
                        </div>

                        <div class="regContainer">
                            <input type="text" class="regInput" name="appnum"
                                placeholder="Enter Your Registration Number">
                            <input type="submit" value="Login" class="loginBtn" name="cbelogin">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- Include any additional scripts or libraries -->
</body>

</html>
