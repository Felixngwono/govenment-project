
    document.getElementById("confirmpassword").addEventListener("input", function() {
        var password = document.getElementById("password").value;
        var confirm_password = document.getElementById("confirmpassword").value;
        var password_error = document.getElementById("password-error");

        if (password === confirm_password) {
            password_error.textContent = "";
        } else {
            password_error.textContent = "Passwords do not match";
        }
    });


    function validateForm() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmpassword").value;
        var passwordError = document.getElementById("password-error");

        if (password !== confirmPassword) {
            passwordError.textContent = "Passwords do not match";
            return false; // Prevent form submission
        } else {
            passwordError.textContent = ""; // Clear the error message
            return true; // Allow form submission
        }
    }
