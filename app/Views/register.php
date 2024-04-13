<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    .progress {
        height: 20px;
        margin-top: 10px;
    }

    .progress-bar {
        background-color: #007bff;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('register') ?>" method="post" enctype="multipart/form-data">
                            <form action="<?= base_url('register/process') ?>" method="post"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="Username" value="<?= old('username') ?>">
                                    <?php if(session()->has('validation') && session('validation')->hasError('username')): ?>
                                    <div class="text-danger"><?= session('validation')->getError('username') ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                        value="<?= old('email') ?>">
                                    <?php if(session()->has('validation') && session('validation')->hasError('email')): ?>
                                    <div class="text-danger"><?= session('validation')->getError('email') ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password">
                                    <?php if(session()->has('validation') && session('validation')->hasError('password')): ?>
                                    <div class="text-danger"><?= session('validation')->getError('password') ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="profile_image">Profile Image</label>
                                    <input type="file" name="profile_image" id="profileImageInput">
                                    <button type="button" id="previewButton">Upload</button>
                                </div>
                                <!-- File upload input for profile image -->
                                <div id="previewContainer" style="display: none;">
                                    <img id="previewImage" src="#" alt="Preview"
                                        style="max-width: 50%; height: 100px; object-fit:cover; border: solid 2px green; padding: 2px;">
                                    <div class="progress">
                                        <div id="progressBar" class="progress-bar" role="progressbar" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <button type="submit">Register</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // function previewImage() {
        //     var input = document.getElementById('profile_image');
        //     var previewContainer = document.getElementById('image_preview');
        //     var previewImage = document.createElement('img');

        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();
        //         reader.onload = function (e) {
        //             previewImage.src = e.target.result;
        //             previewImage.classList.add('img-fluid');
        //             previewImage.classList.add('mb-3');
        //             previewContainer.innerHTML = '';
        //             previewContainer.appendChild(previewImage);
        //         }
        //         reader.readAsDataURL(input.files[0]);
        //     }
        // }
        // document.addEventListener("DOMContentLoaded", function () {
        //     document.getElementById("previewButton").addEventListener("click", function () {
        //         var fileInput = document.getElementById('profileImageInput');
        //         var previewContainer = document.getElementById('previewContainer');
        //         var previewImage = document.getElementById('previewImage');
        //         var progressBar = document.getElementById('progressBar');

        //         var file = fileInput.files[0];
        //         var reader = new FileReader();

        //         reader.onloadstart = function (event) {
        //             previewContainer.style.display = 'block';
        //             progressBar.style.width = '0%';
        //         };

        //         reader.onprogress = function (event) {
        //             if (event.lengthComputable) {
        //                 var progress = (event.loaded / event.total) * 100;
        //                 progressBar.style.width = progress + '%';
        //             }
        //         };

        //         reader.onload = function (event) {
        //             previewImage.src = event.target.result;
        //         };

        //         reader.readAsDataURL(file);
        //     });
        // });

        // document.addEventListener("DOMContentLoaded", function () {
        //     document.getElementById("previewButton").addEventListener("click", function () {
        //         var fileInput = document.getElementById('profileImageInput');
        //         var previewContainer = document.getElementById('previewContainer');
        //         var previewImage = document.getElementById('previewImage');
        //         var progressBar = document.getElementById('progressBar');

        //         var file = fileInput.files[0];
        //         var reader = new FileReader();

        //         reader.onloadstart = function (event) {
        //             previewContainer.style.display = 'block';
        //             progressBar.style.width = '0%';
        //         };

        //         reader.onprogress = function (event) {
        //             if (event.lengthComputable) {
        //                 var progress = (event.loaded / event.total) * 100;
        //                 progressBar.style.width = progress + '%';
        //             }
        //         };

        //         reader.onload = function (event) {
        //             previewImage.src = event.target.result;
        //             previewImage.onload = function () {
        //                 progressBar.style.width = '100%';
        //             };
        //         };

        //         reader.readAsDataURL(file);
        //     });
        // });

        // document.addEventListener("DOMContentLoaded", function () {
        //     document.getElementById("previewButton").addEventListener("click", function () {
        //         var fileInput = document.getElementById('profileImageInput');
        //         var previewContainer = document.getElementById('previewContainer');
        //         var previewImage = document.getElementById('previewImage');
        //         var progressBar = document.getElementById('progressBar');

        //         var file = fileInput.files[0];
        //         var reader = new FileReader();

        //         reader.onloadstart = function (event) {
        //             previewContainer.style.display = 'block';
        //             progressBar.style.width = '0%';
        //         };

        //         reader.onprogress = function (event) {
        //             if (event.lengthComputable) {
        //                 var progress = (event.loaded / event.total) * 100;
        //                 progressBar.style.width = progress + '%';
        //             }
        //         };

        //         reader.onload = function (event) {
        //             // Introduce a delay of 1 second (1000 milliseconds)
        //             setTimeout(function () {
        //                 previewImage.src = event.target.result;
        //                 previewImage.onload = function () {
        //                     progressBar.style.width = '100%';
        //                 };
        //             }, 1000);
        //         };

        //         reader.readAsDataURL(file);
        //     });
        // });

        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("previewButton").addEventListener("click", function () {
                var fileInput = document.getElementById('profileImageInput');
                var previewContainer = document.getElementById('previewContainer');
                var previewImage = document.getElementById('previewImage');
                var progressBar = document.getElementById('progressBar');
                var progress = 0;
                var interval;

                var file = fileInput.files[0];
                var reader = new FileReader();

                reader.onloadstart = function (event) {
                    previewContainer.style.display = 'block';
                    progressBar.style.width = '0%';
                    interval = setInterval(updateProgressBar, 100);
                };

                reader.onload = function (event) {
                    clearInterval(interval);
                    previewImage.src = event.target.result;
                    previewImage.onload = function () {
                        progressBar.style.width = '100%';
                    };
                };

                reader.readAsDataURL(file);

                function updateProgressBar() {
                    if (progress < 100) {
                        progress += 1;
                        progressBar.style.width = progress + '%';
                    } else {
                        clearInterval(interval);
                    }
                }
            });
        });
    </script>
</body>

</html>