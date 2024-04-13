<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script>
    // Timer countdown function
    function startTimer(duration, display) {
        var timer = duration;
        var timerContainer = document.getElementById('timer');
        var cautionIcon = document.querySelector('.caution img');

        setInterval(function () {
            // Calculate minutes and seconds
            var minutes = Math.floor(timer / 60);
            var seconds = timer % 60;

            // Format minutes and seconds with leading zeros if necessary
            var formattedMinutes = minutes < 10 ? "0" + minutes : minutes;
            var formattedSeconds = seconds < 10 ? "0" + seconds : seconds;

            // Display the timer
            display.textContent = formattedMinutes + ":" + formattedSeconds;

            // Change container color to red and display caution icon when timer reaches 5mins
            if (timer === 300) {
                timerContainer.style.backgroundColor = 'red';
                cautionIcon.style.display = 'inline'; // Display caution icon
                cautionIcon.style.animation = 'blink 1s infinite'; // Start blinking animation
            }

            // Decrement timer
            timer--;

            // Stop the timer when it reaches 0
            if (timer < 0) {
                clearInterval(intervalId);
                timerContainer.style.backgroundColor = 'red'; // Change container color to red when timer ends
            }
        }, 1000); // Update timer every 1 second
    }

    // Execute the timer function when the window is loaded
    window.onload = function () {
        var oneHour = 60 * 60; // Duration set to 1 hour
        var display = document.getElementById('countdown');
        startTimer(oneHour, display); // Start the timer
    };


    // When the user confirms submission
    document.getElementById("confirmSubmit").onclick = function () {
        // Handle submission logic here
        // For example, submit a form or perform an AJAX request

        // Show success modal
        $('#successModal').modal('show');

        // Then close the confirmation modal
        $('#confirmModal').modal('hide');
    };

    // When the success modal is shown
    $('#successModal').on('shown.bs.modal', function (e) {
        // Close the submission modal
        $('#confirmModal').modal('hide');

        // Prevent closing of success modal when clicking outside of it
        $('.modal-backdrop').click(function (e) {
            if (e.target === this) {
                e.stopPropagation(); // Stop the propagation of the click event
                return false;
            }
        });
    });

    // When the user clicks "Yes" on the success modal
    document.getElementById("returnHome").addEventListener("click", function (e) {
        e.preventDefault(); // Prevent the default behavior of the button
        // Redirect the user to the main page
        window.location.href =
            "http://localhost/jetacbt/examy.php"; // Replace "main.html" with the URL of your main page
    });

    function redirectToRules() {
        window.location.href = "cbe-rules.php";
    }

    function redirectToExamy() {
        window.location.href = "examy.php";
    }

    // Assuming you have an array of completed question numbers
    var completedQuestions = [1, 3, 5, 50, 40, 10, 12]; // Example: Question numbers 1, 3, and 5 have been completed

    // Loop through the question numbers and add the completed class to the corresponding elements
    for (var i = 0; i < completedQuestions.length; i++) {
        var questionNumber = completedQuestions[i];
        var
            questionNumElement = document.querySelector('.questionNum:nth-child(' + questionNumber + ')');
        if (questionNumElement) {
            questionNumElement.classList.add('completed');
        }
    }



    // Update the count of attempted questions
    var attemptedCount = completedQuestions.length; // Display the updated count in the HTML
    document.getElementById("attemptedCount").textContent = attemptedCount; // Get all cbtSubject elements const
    cbtSubjects = document.querySelectorAll('.cbtSubject'); // Get the hover sound element const
    hoverSound = document.getElementById("hoverSound"); // // Attach click event listener to each cbtSubject element
    cbtSubjects.forEach(cbtSubject => {
        cbtSubject.addEventListener('click', () => {
            // Play hover sound
            hoverSound.currentTime = 0; // Reset sound to start
            hoverSound.play();
        });
    });

    // For Simple Calculator
    function appendToDisplay(value) {
        document.getElementById('display').value += value;
    }

    function clearDisplay() {
        document.getElementById('display').value = '';
    }

    function calculate() {
        var expression = document.getElementById('display').value;
        var result = eval(expression); // Note: using eval can be risky in some scenarios
        document.getElementById('display').value = result;
    }

    function calculateSquareRoot() {
        const display = document.getElementById('display');
        const value = parseFloat(display.value);
        if (!isNaN(value) && value >= 0) {
            display.value = Math.sqrt(value);
        } else {
            display.value = 'Error';
        }
    }

    // Calculator Slide in button
    document.addEventListener('DOMContentLoaded', function () {
        const calculatorToggle = document.getElementById('calculator-toggle');
        const calculator = document.getElementById('calculator');

        calculatorToggle.addEventListener('click', function () {
            calculator.classList.toggle('hidden');
            if (!calculator.classList.contains('hidden')) {
                calculator.style.transition = 'transition: transform 0.5s ease-in-out;';
                calculator.style.transform = 'translateX(0)';
            } else {
                calculator.style.transform = 'translateX(100%)';
            }
        });
    });

    // document.addEventListener('DOMContentLoaded', function () {
    //     const calculator = document.getElementById('calculator');
    //     const calculatorToggle = document.getElementById('calculator-toggle');

    //     calculatorToggle.addEventListener('click', function () {
    //         calculator.classList.toggle('hidden');
    //     });
    // });

    // document.addEventListener('DOMContentLoaded', function () {
    //     const calculator = document.getElementById('calculator');
    //     const calculatorToggle = document.getElementById('calculator-toggle');

    //     calculatorToggle.addEventListener('click', function () {
    //         calculator.classList.toggle('slide-right');
    //         calculator.classList.toggle('slide-left');
    //     });
    // });
</script>