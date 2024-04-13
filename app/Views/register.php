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
        height: 10px;
        margin-top: 10px;
    }

    .progress-bar {
        background-color: green;
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
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        placeholder="First Name" value="<?= old('first_name') ?>">
                                    <?php if(session()->has('validation') && session('validation')->hasError('first_name')): ?>
                                    <div class="text-danger"><?= session('validation')->getError('first_name') ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        placeholder="Last Name" value="<?= old('last_name') ?>">
                                    <?php if(session()->has('validation') && session('validation')->hasError('last_name')): ?>
                                    <div class="text-danger"><?= session('validation')->getError('last_name') ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                        value="<?= old('email') ?>">
                                    <?php if(session()->has('validation') && session('validation')->hasError('email')): ?>
                                    <div class="text-danger"><?= session('validation')->getError('email') ?></div>
                                    <?php endif; ?>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number"
                                        placeholder="Phone Number" value="<?= old('phone_number') ?>">
                                    <?php if(session()->has('validation') && session('validation')->hasError('phone_number')): ?>
                                    <div class="text-danger"><?= session('validation')->getError('phone_number') ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password">
                                    <?php if(session()->has('validation') && session('validation')->hasError('password')): ?>
                                    <div class="text-danger"><?= session('validation')->getError('password') ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password"
                                        name="confirm_password" placeholder="Confirm Password">
                                    <?php if(session()->has('validation') && session('validation')->hasError('confirm_password')): ?>
                                    <div class="text-danger"><?= session('validation')->getError('confirm_password') ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="profile_image">Profile Image</label>
                                <input type="file" class="form-control-file" name="profile_image"
                                    id="profileImageInput">
                                <?php if(session()->has('validation') && session('validation')->hasError('profile_image')): ?>
                                <div class="text-danger"><?= session('validation')->getError('profile_image') ?></div>
                                <?php endif; ?>
                                <button type="button" class="btn btn-success" id="previewButton">Upload</button>
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
                            <button type="submit" class="btn btn-success">Register</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


   


    <!-- Add jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Country request
        // JavaScript code
        // document.addEventListener("DOMContentLoaded", function () {
        //     const countrySelect = document.getElementById('country');
        //     const stateSelect = document.getElementById('state');
        //     const citySelect = document.getElementById('city');
        //     const API_USERNAME = 'your_username'; // Replace with your GeoNames username

        //     // Fetch countries from the GeoNames API
        //     fetch('http://api.geonames.org/countryInfoJSON?formatted=true&lang=en&username=' + API_USERNAME)
        //         .then(response => response.json())
        //         .then(data => {
        //             // Populate the country dropdown with country names
        //             data.geonames.forEach(country => {
        //                 const option = document.createElement('option');
        //                 option.value = country.countryCode;
        //                 option.textContent = country.countryName;
        //                 countrySelect.appendChild(option);
        //             });
        //         })
        //         .catch(error => console.error('Error fetching countries:', error));

        //     // Event listener for country selection
        //     countrySelect.addEventListener('change', function () {
        //         const countryCode = this.value;

        //         // Fetch states for the selected country
        //         fetch(
        //                 `http://api.geonames.org/childrenJSON?formatted=true&geonameId=${countryCode}&username=${API_USERNAME}`)
        //             .then(response => response.json())
        //             .then(data => {
        //                 // Clear existing options
        //                 stateSelect.innerHTML = '';

        //                 // Populate the state dropdown with state names
        //                 data.geonames.forEach(state => {
        //                     const option = document.createElement('option');
        //                     option.value = state.geonameId;
        //                     option.textContent = state.name;
        //                     stateSelect.appendChild(option);
        //                 });

        //                 // Enable state dropdown
        //                 stateSelect.disabled = false;
        //             })
        //             .catch(error => console.error('Error fetching states:', error));
        //     });

        //     // Event listener for state selection
        //     stateSelect.addEventListener('change', function () {
        //         const stateId = this.value;

        //         // Fetch cities for the selected state
        //         fetch(
        //                 `http://api.geonames.org/childrenJSON?formatted=true&geonameId=${stateId}&username=${API_USERNAME}`)
        //             .then(response => response.json())
        //             .then(data => {
        //                 // Clear existing options
        //                 citySelect.innerHTML = '';

        //                 // Populate the city dropdown with city names
        //                 data.geonames.forEach(city => {
        //                     const option = document.createElement('option');
        //                     option.value = city.geonameId;
        //                     option.textContent = city.name;
        //                     citySelect.appendChild(option);
        //                 });

        //                 // Enable city dropdown
        //                 citySelect.disabled = false;
        //             })
        //             .catch(error => console.error('Error fetching cities:', error));
        //     });
        // });





        // $(document).ready(function () {
        //     // Function to perform real-time validation
        //     function validateField(field, value) {
        //         // Send AJAX request to server for validation
        //         $.ajax({
        //             method: 'POST',
        //             data: {
        //                 field: field,
        //                 value: value
        //             },
        //             success: function (response) {
        //                 // Update UI to display validation errors
        //                 $('#' + field + '-error').html(response);
        //             }
        //         });
        //     }

        //     // Event listener for input fields
        //     $('input').on('input', function () {
        //         var field = $(this).attr('name');
        //         var value = $(this).val();
        //         validateField(field, value);
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