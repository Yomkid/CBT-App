<!-- Include head content -->
<?= view('partials/head') ?>
<body>
    <!-- ======= Sidebar ======= -->
    <?= view('partials/cbesidebar.php'); ?>


    <main id="main" class="main">
        <div class="container">
            <div class="rules-main">
                <div class="instructions">
                    <h1 class="text-green">Exam Instructions</h1>
                    <p class="text-grey-700 mb-1">Kindly read the instructions carefully and follow the rules.</p>
                    <ol>
                        <li class="text-grey-700">Click the <strong>"START"</strong> button to begin the exam.</li>
                        <li class="text-grey-700">Answer all questions by selecting the appropriate option.</li>
                        <li class="text-grey-700">Once you have answered a question, click the <strong>"NEXT"</strong>
                            button to proceed
                            to the next question.</li>
                        <li class="text-grey-700">You will have <strong>60 minutes</strong> to complete the exam.</li>
                        <li class="text-grey-700">Make sure to review your answers before submitting.</li>
                        <li class="text-grey-700">Click the <strong>"SUBMIT"</strong> button when you have completed all
                            questions.</li>
                    </ol>
                    <p class="text-lg" style="font-size: 20px;"><b>These instructions should help guide you through the
                            exam process. Good luck!</b></p>
                </div>
                <div class="button d-flex a-center j-center start-sec">
                    <button class="submitBtn" onclick="redirectToExamy()" data-toggle="modal"
                        data-target="#startExamModal">START</button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="startExamModal" tabindex="-1" role="dialog" aria-labelledby="startExamModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="startExamModalLabel">START EXAM</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to Start the Exam?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                            <button id="confirmSubmit" type="button" class="btn btn-primary">YES</button>
                        </div>
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