<!-- Include head content -->
<?= view('Admin/common/head'); ?>

<body>
    <!-- ======= Sidebar ======= -->
    <?= view('Admin/common/sidebar'); ?>
    <main id="main" class="main p-0">
        <?= view('Admin/common/navbar'); ?>

        <main class="container mt-2">
            <div class="mb-3 font-weight-bold">TEST MANAGEMENT</div>
            <div class="col-md-12">
                <div class="row mt-4">
                    <div class="col-md-4">
                        <a href="#new-test" class="btn btn-success btn-block shadow-sm">New Test</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#manage-users" class="btn btn-success btn-block shadow-sm">Manage Users</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#generate-reports" class="btn btn-success btn-block shadow-sm">Generate Reports</a>
                    </div>

                </div>
                <!-- Add more shortcut buttons or tiles as needed -->
            </div>
            <div class="row mb-3">
                <!-- User List Table -->
                <div class="col-md-12">
                    <table class="table">
                        <thead class="dark-theme">
                            <tr>
                                <th>TestID</th>
                                <th>Test Name</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Data Analysis</td>
                                <td>Active</td>
                                <td>
                                    <!-- Action buttons (e.g., Edit, Delete) -->
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                    <button class="btn btn-secondary btn-sm">Deactivate</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>English Language</td>
                                <td>Active</td>
                                <td>
                                    <!-- Action buttons (e.g., Edit, Delete) -->
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                    <button class="btn btn-secondary btn-sm">Deactivate</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mathematics</td>
                                <td>Active</td>
                                <td>
                                    <!-- Action buttons (e.g., Edit, Delete) -->
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                    <button class="btn btn-secondary btn-sm">Deactivate</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Circuit Theory</td>
                                <td>Active</td>
                                <td>
                                    <!-- Action buttons (e.g., Edit, Delete) -->
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                    <button class="btn btn-secondary btn-sm">Deactivate</button>
                                </td>
                            </tr>
                            <!-- More user rows will be added dynamically -->
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="row mb-3">
                <!-- Test Creation -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Create New Test
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="testName" class="form-label">Test Name:</label>
                                    <input type="text" class="form-control" id="testName">
                                </div>
                                <!-- Add more fields for test details, such as duration, instructions, etc. -->
                                <button type="submit" class="btn btn-primary">Create Test</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Test Assignment -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Assign Test to Users/Groups
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="testSelect" class="form-label">Select Test:</label>
                                    <select class="form-select" id="testSelect">
                                        <!-- Populate with available tests -->
                                        <option value="test1">Test 1</option>
                                        <option value="test2">Test 2</option>
                                        <!-- Add more options dynamically if needed -->
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="userSelect" class="form-label">Select User/Group:</label>
                                    <select class="form-select" id="userSelect">
                                        <!-- Populate with available users/groups -->
                                        <option value="user1">User 1</option>
                                        <option value="user2">User 2</option>
                                        <!-- Add more options dynamically if needed -->
                                    </select>
                                </div>
                                <!-- Add more options for test assignment as needed -->
                                <button type="submit" class="btn btn-primary">Assign Test</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Test Monitoring -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Monitor Test Progress and Results
                        </div>
                        <div class="card-body">
                            <!-- Display test progress and results here -->
                            <p>No tests assigned yet.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>



            <!-- Test Editing -->
            <!-- HTML code for test editing form -->
            <form id="editTestForm">
                <!-- Test details -->
                <input type="text" id="testName" name="testName" placeholder="Test Name" required>
                <textarea id="testDescription" name="testDescription" placeholder="Test Description"></textarea>

                <!-- Questions -->
                <!-- Add or remove question fields dynamically -->
                <div id="questionsContainer">
                    <!-- Sample question field -->
                    <div class="questionField">
                        <input type="text" class="question" name="question[]" placeholder="Question" required>
                        <input type="text" class="option" name="option1[]" placeholder="Option 1" required>
                        <input type="text" class="option" name="option2[]" placeholder="Option 2" required>
                        <!-- Add more options as needed -->
                    </div>
                </div>
                <button type="button" id="addQuestion">Add Question</button>

                <button type="submit">Save Changes</button>
            </form>

            <!-- HTML code for test deactivation -->
            <button id="deactivateTest">Deactivate Test</button>


        </main>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
        <?= view('Admin/common/js') ?>

        <!-- Bootstrap JS (optional, if you need any Bootstrap JavaScript features) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // JavaScript code to handle test editing functionality
            document.getElementById('editTestForm').addEventListener('submit', function (event) {
                event.preventDefault();
                // Fetch form data and send it to server for processing
                let formData = new FormData(this);
                // Use AJAX to send form data to server and handle response
            });
            document.getElementById('addQuestion').addEventListener('click', function () {
                // Dynamically add new question fields to the form
                let questionsContainer = document.getElementById('questionsContainer');
                let newQuestionField = document.createElement('div');
                newQuestionField.classList.add('questionField');
                newQuestionField.innerHTML = `
        <input type="text" class="question" name="question[]" placeholder="Question" required>
        <input type="text" class="option" name="option1[]" placeholder="Option 1" required>
        <input type="text" class="option" name="option2[]" placeholder="Option 2" required>
        <!-- Add more options as needed -->
    `;
                questionsContainer.appendChild(newQuestionField);
            });


            // JavaScript code to handle test deactivation
            document.getElementById('deactivateTest').addEventListener('click', function () {
                // Send request to server to deactivate the test
                // Handle response from server, e.g., display success message
            });
        </script>
</body>

</html>