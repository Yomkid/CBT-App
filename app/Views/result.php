<!-- Include head content -->
<?= view('partials/head') ?>
<style>
    /* Style for GPA Calculator section */
    .gpa-calculator {
        background-color: #f9f9f9;
        padding: 20px;
        /* margin-top: 20px; */
    }

    .grade-inputs {
        margin-bottom: 10px;
    }

    .grade-input {
        width: 50px;
        margin-right: 10px;
    }

    #calculate-gpa {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 8px 16px;
        cursor: pointer;
    }

    #calculate-gpa:hover {
        background-color: #0056b3;
    }

    #gpa-result {
        font-weight: bold;
    }
</style>
<body>
    <!-- ======= Sidebar ======= -->
    <?= view('partials/cbesidebar.php'); ?>


    <main id="main" class="main">
        <div class="container">
            <div class="timers">
                <div class="question-timer time" id="timer">Result Sheet</div>
                <div class="caution">
                    <img src="<?= base_url('img/jeta-logo-dark.png') ?>" alt="" width="50">
                </div>
            </div>

            <div id="questionsContainer">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="pdfResult"
                            style="border: solid rgb(225, 225, 225) 1px; box-shadow: 2px 2px 10px grey; background-color:white; padding: 20px;">
                            <div style="text-align: center;">
                                <img src="<?= base_url('img/jeta-logo-dark.png') ?>" alt="Jeta Logo" width="100">
                                <!-- Student Report Card -->
                                <div class="mb-" style="font-weight: bold; font-size:large;">JETA
                                    Communications<br>Digital Digital
                                    Skills Academy</div>
                                <div class="mt-2 mb-3" style="font-weight: bold; font-size:large;">Student Report Card
                                </div>
                            </div>

                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row">Student Name:</th>
                                        <td>Adetiba Tofunmi Joyce</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Session/Course:</th>
                                        <td>Spring 2024 - Scratch Programming</td>
                                    </tr>
                                </tbody>
                            </table>
                            <strong>RESULTS</strong>
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Test Name</th>
                                        <th scope="col">Passmark</th>
                                        <th scope="col">Score</th>
                                        <th scope="col">Grade</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Data Science</th>
                                        <td>0%</td>
                                        <td>100%</td>
                                        <td>25</td>
                                        <td>Passed</td>
                                    </tr>
                                </tbody>
                            </table>
                            <strong>Total</strong>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row">Average Score:</th>
                                        <td>90%</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Average Grade:</th>
                                        <td>A</td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- Button to generate PDF -->
                            <button id="generate-pdf">Generate PDF</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="aside">
                            <div class="gpa-calculator">
                                <h3>GPA Calculator</h3>
                                <p>Calculate your Grade Point Average (GPA) by entering your grades below:</p>
                                <div class="grade-inputs">
                                    <div>Enter your grade percentage (%)</div>
                                    <label for="grade">Enter Grade:</label>
                                    <input type="number" class="grade-input" id="grade" min="0" max="100">
                                </div>

                                <!-- Button to calculate GPA -->
                                <button id="calculate-gpa">Calculate GPA</button>
                                <!-- Display GPA result -->
                                <p id="gpa-result"></p>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Function to calculate GPA
            function calculateGPA() {
                // Get all grade input fields
                var gradeInputs = document.querySelectorAll('.grade-input');

                // Initialize variables for total grade points and total subjects/courses
                var totalGradePoints = 0;
                var totalSubjects = 0;

                // Loop through each grade input
                gradeInputs.forEach(function (input) {
                    // Get the grade entered by the user
                    var grade = parseFloat(input.value);

                    // Check if the grade is valid (a number between 0 and 100)
                    if (!isNaN(grade) && grade >= 0 && grade <= 100) {
                        // Increment total subjects
                        totalSubjects++;

                        // Calculate grade points (assuming A=4, B=3, C=2, D=1, F=0)
                        var gradePoint;
                        if (grade >= 90) {
                            gradePoint = 4;
                        } else if (grade >= 80) {
                            gradePoint = 3;
                        } else if (grade >= 70) {
                            gradePoint = 2;
                        } else if (grade >= 60) {
                            gradePoint = 1;
                        } else {
                            gradePoint = 0;
                        }

                        // Add grade point to total grade points
                        totalGradePoints += gradePoint;
                    }
                });

                // Calculate GPA (if there are valid grades)
                if (totalSubjects > 0) {
                    var gpa = totalGradePoints / totalSubjects;
                    return gpa.toFixed(2); // Return GPA rounded to 2 decimal places
                } else {
                    return 'N/A'; // Return 'N/A' if no valid grades entered
                }
            }

            // Add event listener to the "Calculate GPA" button
            document.getElementById('calculate-gpa').addEventListener('click', function () {
                // Calculate GPA
                var gpa = calculateGPA();

                // Display GPA result
                document.getElementById('gpa-result').textContent = 'GPA: ' + gpa;
            });
        });
    </script>
    <?= view('partials/js.php'); ?>



</body>

</html>