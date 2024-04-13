<!-- Include head content -->
<?= view('partials/head') ?>
<body>
    <!-- ======= Sidebar ======= -->
    <?= view('partials/cbesidebar.php'); ?>


    <main id="main" class="main">
        <div class="container">
            <div class="timers">
                <div class="question-timer time" id="timer">Timer: <span id="countdown">60:00</span></div>
                <div class="caution">
                    <img src="./assets/img/caution.png" alt="" width="50">
                </div>
                <div class="question-timer attempts" id="questionsAttempted">Questions Attempted: <span
                        id="attemptedCount">0</span>/50</div>

                <!-- <div class="question-timer time" id="timer">Timer: <span id="countdown">05:00</span><i
                        class="fa fa-exclamation-triangle caution-icon"></i></div>
                        <div class="caution">
                            <img src="./assets/img/caution.png" alt="" width="50">
                        </div>
                <div class="question-timer attrempts">Questions Attempted: 04/50</div> -->
            </div>


            <div id="questionsContainer">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="questions" style="max-width: 100%; overflow-x: auto;">
                            <div class="question" id="questionText">
                                <span>Question 50</span><br>
                                Given the equation <strong>2x<sup>2</sup> + 5x - 3 = 0</strong>, what are the solutions
                                for <em>x</em>?
                            </div>
                            <div class="answer">
                                <div class="answer-label">
                                    <input type="radio" name="ans" id="answerA1">
                                    <label for="answerA1">A</label>
                                </div>
                                <div class="answer-text">
                                    x = -3, x = 1/2
                                </div>
                            </div>
                            <div class="answer">
                                <div class="answer-label">
                                    <input type="radio" name="ans" id="answerA1">
                                    <label for="answerA1">B</label>
                                </div>
                                <div class="answer-text">
                                    x = -1/2, x = 3
                                </div>
                            </div>
                            <div class="answer">
                                <div class="answer-label">
                                    <input type="radio" name="ans" id="answerA1">
                                    <label for="answerA1">C</label>
                                </div>
                                <div class="answer-text">
                                    x = -3/2, x = 1
                                </div>
                            </div>
                            <div class="answer">
                                <div class="answer-label">
                                    <input type="radio" name="ans" id="answerA1">
                                    <label for="answerA1">D</label>
                                </div>
                                <div class="answer-text">
                                    x = 3/2, x = -1
                                </div>
                            </div>
                            <div class="answer">
                                <div class="answer-label">
                                    <input type="radio" name="ans" id="answerA1">
                                    <label for="answerA1">E</label>
                                </div>
                                <div class="answer-text">
                                    x = 3/4, x = -1
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

                            <div class="d-flex a-center j-center submitExamBtn">
                                <button id="submitBtn" class="submitBtn submitExam" data-toggle="modal"
                                    data-target="#confirmModal"><a
                                        style="text-decoration: none; color: white;">Submit</a></button>
                            </div>


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
                            <?php for ($i = 1; $i <= 50; $i++): ?>
                            <div class="questionNum"><?php echo $i; ?></div>
                            <?php endfor; ?>
                        </div>


                        <div id="calculator" class="calculator hidden bg-light slide-right">
                            <div><strong>Calculator</strong></div>
                            <input type="text" id="display" readonly>
                            <div class="buttons">
                                <button onclick="appendToDisplay('7')">7</button>
                                <button onclick="appendToDisplay('8')">8</button>
                                <button onclick="appendToDisplay('9')">9</button>
                                <button onclick="appendToDisplay('+')">+</button>
                                <button onclick="appendToDisplay('4')">4</button>
                                <button onclick="appendToDisplay('5')">5</button>
                                <button onclick="appendToDisplay('6')">6</button>
                                <button onclick="appendToDisplay('-')">-</button>
                                <button onclick="appendToDisplay('1')">1</button>
                                <button onclick="appendToDisplay('2')">2</button>
                                <button onclick="appendToDisplay('3')">3</button>
                                <button onclick="appendToDisplay('*')">*</button>
                                <button onclick="appendToDisplay('0')">0</button>
                                <button onclick="appendToDisplay('.')">.</button>
                                <button onclick="appendToDisplay('/')">÷</button>
                                <button onclick="calculate()">=</button>
                                <button onclick="clearDisplay()">C</button>
                                <button onclick="calculateSquareRoot()">√</button>
                                <button onclick="appendToDisplay('(')">(</button>
                                <button onclick="appendToDisplay(')')">)</button>
                            </div>
                        </div>
                        <button id="calculator-toggle" class="floating-button">Open Calculator <i
                                class="fas fa-calculator"></i></button>
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