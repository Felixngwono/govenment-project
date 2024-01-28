<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preferences</title>
    <!-- Include Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">User Preferences</h1>

        <!-- Notification Preferences -->
        <div class="form-group">
            <h2>Notification Preferences</h2>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="emailNotifications">
                <label class="custom-control-label" for="emailNotifications">Receive Email Notifications</label>
            </div>
        </div>

        <!-- Language Preferences -->
        <div class="form-group">
            <h2>Language Preferences</h2>
            <select class="form-control" id="language">
                <option value="english">English</option>
                <option value="spanish">Spanish</option>
                <option value="french">French</option>
            </select>
        </div>

        <!-- Theme and Appearance -->
        <div class="form-group">
            <h2>Theme and Appearance</h2>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="lightTheme" name="theme" value="light">
                <label class="custom-control-label" for="lightTheme">Light Theme</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="darkTheme" name="theme" value="dark">
                <label class="custom-control-label" for="darkTheme">Dark Theme</label>
            </div>
        </div>

        <!-- Email Subscription Preferences -->
        <div class="form-group">
            <h2>Email Subscription Preferences</h2>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="newsletter">
                <label class="custom-control-label" for="newsletter">Subscribe to Newsletter</label>
            </div>
        </div>

        <!-- Privacy Settings -->
        <div class="form-group">
            <h2>Privacy Settings</h2>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="publicProfile">
                <label class="custom-control-label" for="publicProfile">Make Profile Public</label>
            </div>
        </div>

        <!-- Password and Security -->
        <div class="form-group">
            <h2>Password and Security</h2>
            <button class="btn btn-primary" id="changePassword">Change Password</button>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="twoFactorAuth">
                <label class="custom-control-label" for="twoFactorAuth">Enable Two-Factor Authentication</label>
            </div>
        </div>

        <!-- Accessibility Options -->
        <div class="form-group">
            <h2>Accessibility Options</h2>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="screenReader">
                <label class="custom-control-label" for="screenReader">Screen Reader Compatibility</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="keyboardNav">
                <label class="custom-control-label" for="keyboardNav">Keyboard Navigation</label>
            </div>
        </div>

        <!-- Default Landing Page -->
        <div class="form-group">
            <h2>Default Landing Page</h2>
            <select class="form-control" id="landingPage">
                <option value="dashboard">Dashboard</option>
                <option value="projectList">Project List</option>
            </select>
        </div>

        <!-- Data and Analytics Preferences -->
        <div class="form-group">
            <h2>Data and Analytics Preferences</h2>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="analytics">
                <label class="custom-control-label" for="analytics">Allow Data Analytics</label>
            </div>
        </div>

        <!-- Time Zone and Date Format -->
        <div class="form-group">
            <h2>Time Zone and Date Format</h2>
            <select class="form-control" id="timeZone">
                <option value="gmt">GMT</option>
                <option value="est">EST</option>
                <option value="pst">PST</option>
            </select>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="dateFormat1" name="dateFormat" value="ddmmyyyy">
                <label class="custom-control-label" for="dateFormat1">DD/MM/YYYY</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="dateFormat2" name="dateFormat" value="mmddyyyy">
                <label class="custom-control-label" for="dateFormat2">MM/DD/YYYY</label>
            </div>
        </div>

        <button class="btn btn-primary" id="savePreferences">Save Preferences</button>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
