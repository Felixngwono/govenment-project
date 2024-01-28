<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Development Projects Tracker</title>
    <!-- Include Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <style>
        /* Adjust sidebar height to match content area */
        .sidebar-sticky {
            height: 100vh;
            overflow-x: hidden;
            overflow-y: auto;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                            <i class="fas fa-tachometer-alt"></i> Dashboard/Home
                            </a>
                            <ul class="nav flex-column ml-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Overview</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Projects
                            </a>
                            <ul class="nav flex-column ml-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Ongoing Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Completed Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Upcoming Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Filters and Search</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Project Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Progress Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Related Documents</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Reports
                            </a>
                            <ul class="nav flex-column ml-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Project Progress</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Budget Allocation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Impact Assessment</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Budget and Funding
                            </a>
                            <ul class="nav flex-column ml-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Budget Breakdown</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Funding Sources</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Expenditure Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Government Agencies
                            </a>
                            <ul class="nav flex-column ml-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">List of Agencies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Agency Profiles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact Information</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Notifications
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Settings
                            </a>
                            <ul class="nav flex-column ml-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">User Preferences</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Profile Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Account Management</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                User Management
                            </a>
                            <ul class="nav flex-column ml-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">User Roles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Add User</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Edit User</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Remove User</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Help and Support
                            </a>
                            <ul class="nav flex-column ml-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">FAQs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Guides</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Technical Support</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Feedback
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!-- Main content area -->
                <h1>Welcome to the Government Development Projects Tracker</h1>
                <!-- Content goes here -->
            </main>
        </div>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
