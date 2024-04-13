<!-- Include head content -->
<?= view('partials/head') ?>
<body>
    <!-- ======= Sidebar ======= -->
    <?= view('partials/cbesidebar.php'); ?>


    <main id="main" class="main">
        <div class="container">
            <div class="timers">
                <div class="question-timer time">Course Selection: You will need to select a course or search for the course before you can continue the test</div>
                <div class="caution">
                    <img src="<?= base_url('img/caution.png') ?>" alt="" width="50">
                </div>

            </div>


            <!-- Modal -->
            <div class="modal fade" id="subjectModal" tabindex="-1" role="dialog" aria-labelledby="subjectModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold text-green" id="subjectModalLabel">Data Science and Mathematics</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Image Container -->
                            <div class="image-container" style="height: 200px; overflow: hidden;">
                                <!-- Image with Object Fit -->
                                <img src="<?= base_url('img/datascience.jpg') ?>" alt="" class="img-fluid"
                                    style="object-fit: cover; width: 100%; height: 100%;">
                            </div>
                            <!-- Course Description -->
                            <p>Data science is an interdisciplinary field that uses scientific methods, algorithms,
                                processes, and systems to extract knowledge and insights from structured and
                                unstructured data. It combines elements of statistics, computer science, and domain
                                expertise to analyze complex data sets and uncover patterns, trends, and insights that
                                can inform decision-making and solve problems across various industries and domains.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success" id="continueToRule" data-dismiss="modal" style="background-color: green; color: white;" onclick="redirectToRules()">Take Test</button>
                        </div>
                    </div>
                </div>
            </div>



            <div id="questionsContainer">
                <div class="search-wrapper mb-2 mr-2">
                    <input type="text" id="searchInput" placeholder="Search any course..." />
                    <button id="searchButton">Search</button>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="cbtSubjects">
                    <div class="cbtSubject" id="hover1" data-toggle="modal" data-target="#subjectModal">Frontend Web Development</div>
                    <div class="cbtSubject" id="hover2" data-toggle="modal" data-target="#subjectModal">Backend Web Development</div>
                    <div class="cbtSubject" id="hover3" data-toggle="modal" data-target="#subjectModal">Full-Stack Web Development</div>
                    <div class="cbtSubject" id="hover4" data-toggle="modal" data-target="#subjectModal">Mobile App Development</div>
                    <div class="cbtSubject" id="hover5" data-toggle="modal" data-target="#subjectModal">Game Development</div>
                    <div class="cbtSubject" id="hover6" data-toggle="modal" data-target="#subjectModal">Data Science and Analytics</div>
                    <div class="cbtSubject" id="hover7" data-toggle="modal" data-target="#subjectModal">Machine Learning</div>
                    <div class="cbtSubject" id="hover8" data-toggle="modal" data-target="#subjectModal">Artificial Intelligence</div>
                    <div class="cbtSubject" id="hover9" data-toggle="modal" data-target="#subjectModal">Cybersecurity</div>
                    <div class="cbtSubject" id="hover10" data-toggle="modal" data-target="#subjectModal">Cloud Computing</div>
                    <div class="cbtSubject" id="hover11" data-toggle="modal" data-target="#subjectModal">Blockchain Development</div>
                    <div class="cbtSubject" id="hover12" data-toggle="modal" data-target="#subjectModal">DevOps</div>
                    <div class="cbtSubject" id="hover13" data-toggle="modal" data-target="#subjectModal">Internet of Things (IoT)</div>
                    <div class="cbtSubject" id="hover14" data-toggle="modal" data-target="#subjectModal">Big Data</div>
                    <div class="cbtSubject" id="hover15" data-toggle="modal" data-target="#subjectModal">UI/UX Design</div>
                    <div class="cbtSubject" id="hover16" data-toggle="modal" data-target="#subjectModal">Data Engineering</div>
                    <div class="cbtSubject" id="hover17" data-toggle="modal" data-target="#subjectModal">Artificial Intelligence and Robotics</div>
                    <div class="cbtSubject" id="hover18" data-toggle="modal" data-target="#subjectModal">Natural Language Processing</div>
                    <div class="cbtSubject" id="hover19" data-toggle="modal" data-target="#subjectModal">Virtual Reality (VR) Development</div>
                    <div class="cbtSubject" id="hover20" data-toggle="modal" data-target="#subjectModal">Augmented Reality (AR) Development</div>
                    <div class="cbtSubject" id="hover21" data-toggle="modal" data-target="#subjectModal">Quantum Computing</div>
                    <div class="cbtSubject" id="hover22" data-toggle="modal" data-target="#subjectModal">Computer Vision</div>
                    <div class="cbtSubject" id="hover23" data-toggle="modal" data-target="#subjectModal">Embedded Systems</div>
                    <div class="cbtSubject" id="hover24" data-toggle="modal" data-target="#subjectModal">Microservices Architecture</div>
                    <div class="cbtSubject" id="hover25" data-toggle="modal" data-target="#subjectModal">Edge Computing</div>
                    <div class="cbtSubject" id="hover26" data-toggle="modal" data-target="#subjectModal">Software Testing and Quality Assurance</div>
                    <div class="cbtSubject" id="hover27" data-toggle="modal" data-target="#subjectModal">Data Visualization</div>
                    <div class="cbtSubject" id="hover28" data-toggle="modal" data-target="#subjectModal">Quantitative Finance and Algorithmic Trading</div>
                    <div class="cbtSubject" id="hover29" data-toggle="modal" data-target="#subjectModal">Bioinformatics</div>
                    <div class="cbtSubject" id="hover30" data-toggle="modal" data-target="#subjectModal">Geographic Information Systems (GIS)</div>
                    <audio id="hoverSound">
                    <source src="<?= base_url('audio/hover-sound.mp3') ?>" type="audio/mpeg">
                    <!-- <source src="./<?= base_url('audio/aye.mp3') ?>" type="audio/mpeg"> -->
                    Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>
    </main>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <?= view('partials/js.php'); ?>



</body>

</html>