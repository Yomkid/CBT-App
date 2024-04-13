<!-- Include head content -->
<?= view('partials/head') ?>
<body>
    <!-- ======= Sidebar ======= -->
    <?= view('partials/cbesidebar.php'); ?>


    <main id="main" class="main">
        <div class="container">
            <div class="timers">
                <div class="question-timer time" id="timer">Question Review and Answer</div>
                <div class="caution">
                    <img src="./assets/img/caution.png" alt="" width="50">
                </div>
                <div class="question-timer attempts" id="questionsAttempted">Score: <span
                        id="attemptedCountr">25</span>/50</div>
            </div>


            <div id="questionsContainer">
                <div class="row">
                    <div class="col-lg-8">
                        <hr>
                        <div class="questions" style="max-width: 100%; overflow-x: auto;">
                            <div class="question" id="questionText">
                                <span>Question 50</span><br>
                                <div>
                                    Given the equation <strong>2x<sup>2</sup> + 5x - 3 = 0</strong>, what are the
                                    solutions for <em>x</em>?
                                </div>
                            </div>
                            <div class="answer">
                                <div class="answer-label">
                                    <input type="radio" name="ans" id="answerA1" disabled>
                                    <label for="answerA1">A</label>
                                </div>
                                <div class="answer-text">
                                    x = -3, x = 1/2
                                </div>
                            </div>
                            <div class="answer">
                                <div class="answer-label">
                                    <input type="radio" name="ans" id="answerA1" disabled checked>
                                    <label for="answerA1">B</label>
                                </div>
                                <div class="answer-text" style="color: red;">
                                    x = -1/2, x = 3 <span style="color: red; margin-left: 5px;">&#10060;</span>
                                </div>

                            </div>
                            <div class="answer">
                                <div class="answer-label">
                                    <input type="radio" name="ans" id="answerA1" disabled>
                                    <label for="answerA1">C</label>
                                </div>
                                <div class="answer-text font-weight-bold" style="color: green;">
                                    x = -3/2, x = 1 <span
                                        style="color: green; margin-left: 5px; border:none;">&#10004;</span>
                                </div>
                            </div>
                            <div class="answer">
                                <div class="answer-label">
                                    <input type="radio" name="ans" id="answerA1" disabled>
                                    <label for="answerA1">D</label>
                                </div>
                                <div class="answer-text">
                                    x = 3/2, x = -1
                                </div>
                            </div>
                            <div class="answer">
                                <div class="answer-label">
                                    <input type="radio" name="ans" id="answerA1" disabled>
                                    <label for="answerA1">E</label>
                                </div>
                                <div class="answer-text">
                                    x = 3/4, x = -1
                                </div>
                            </div>
                            <hr>
                            <div class="explanation">
                                <div>
                                    <div><strong>Explanation on Answer:</strong></div>
                                    <p>To solve the quadratic equation 2x^2 + 5x - 3 = 0, we use the quadratic formula:
                                        x = (-b ± √(b^2 - 4ac)) / (2a),
                                        where a = 2, b = 5, and c = -3.
                                    </p>
                                    <p>Substituting these values into the formula, we get:
                                        x = (-5 ± √(5^2 - 4(2)(-3))) / (2(2)),
                                        x = (-5 ± √(25 + 24)) / 4,
                                        x = (-5 ± √(49)) / 4,
                                        x = (-5 ± 7) / 4.</p>

                                    <p>This gives us two possible values for x:
                                    </p>
                                    <ol>
                                        <li>When using the positive square root: <br>
                                            x = (-5 + 7) / 4 = 2/4 = 1/2.
                                        </li>
                                        <li>When using the negative square root:
                                            x = (-5 - 7) / 4 = -12/4 = -3/2.
                                        </li>
                                    </ol>
                                    <p>So the solutions for x are x = -3/2 and x = 1. Therefore, option C is correct.
                                    </p>
                                </div>
                            </div>
                            <div class="questionBtns">
                                <a style="text-decoration: none;" href="exam.php?id='.$row['id'].'">
                                    <div class="submitBtn d-flex a-center j-center"><i class="fas fa-chevron-left"></i>
                                        &nbsp; Previous</div>
                                </a>
                                <a style="text-decoration: none;" href="exam.php?id='.$row['id'].'">
                                    <div class="submitBtn d-flex a-center j-center"> Next &nbsp;<i
                                            class="fas fa-chevron-right"></i> </div>
                                </a>
                            </div>

                            <!-- <div class="d-flex a-center j-center g-4 submitExamBtn mt-4">
                                <button id="submitBtn" class="submitBtn submitExam" data-toggle="modal"
                                    data-target="#confirmModal"><a
                                        style="text-decoration: none; color: white;">Print</a></button>
                                <button id="submitBtn" class="submitBtn submitExam" data-toggle="modal"
                                    data-target="#confirmModal"><a
                                        style="text-decoration: none; color: white;">Downlaod</a></button>
                                <button id="submitBtn" class="submitBtn submitExam" data-toggle="modal"
                                    data-target="#confirmModal"><a
                                        style="text-decoration: none; color: white;">Explanation</a></button>
                            </div> -->


                            <!-- Modal -->
                            <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog"
                                aria-labelledby="confirmModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmModalLabel">Confirm Submission</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to submit?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <button id="confirmSubmit" type="button"
                                                class="btn btn-primary">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Success Modal -->
                            <div class="modal fade" id="successModal" tabindex="-1" role="dialog"
                                aria-labelledby="successModalLabel" aria-hidden="true" data-backdrop="static">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="successModalLabel">Success</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Your test has been submitted successfully.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="returnHome" class="btn btn-primary"
                                                data-dismiss="modal">Close Exam</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="questionNums">
                            <?php                          
                            // Define arrays for correct and incorrect answers
                                $correctAnswers = range(1, 50); // Example: Correct answers
                                $incorrectAnswers = range(1, 50); // Example: Incorrect answers

                                // Shuffle the arrays
                                shuffle($correctAnswers);
                                shuffle($incorrectAnswers);

                                // Ensure no overlap between correct and incorrect answers
                                $correctAnswers = array_slice($correctAnswers, 0, 25); // Select first 25 elements
                                $incorrectAnswers = array_diff(range(1, 50), $correctAnswers); // Exclude correct answers from incorrect answers

                                // Initialize variables for tracking correct attempts
                                $correctCount = 0;

                                // Loop through question numbers
                                for ($i = 1; $i <= 50; $i++) {
                                    // Check if the current question number is in the correct or incorrect arrays
                                    $class = '';
                                    if (in_array($i, $correctAnswers)) {
                                        $class = 'correct';
                                        $correctCount++; // Increment correct count
                                    } elseif (in_array($i, $incorrectAnswers)) {
                                        $class = 'incorrect';
                                    }
                                    // Output the question number with the appropriate CSS class
                                    echo '<div class="questionNum ' . $class . '">' . $i . '</div>';
                                }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <?= view('partials/js.php'); ?>



</body>

</html>