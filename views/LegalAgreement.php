<!DOCTYPE html>
<html>
<head>
    <title>****Legal Agreement****</title>
    <link rel="stylesheet" href="style21.css">
    <script>
        //Validation using JavaScript
        function validateForm() {
            // Get the checkbox element
            var acceptTermsCheckbox = document.getElementById("accept_terms");

            // Check if the checkbox is checked
            if (acceptTermsCheckbox.checked) {
                // If checked, display a success message
                alert("Successfully accepted the terms and conditions. Redirecting to login page.");

                // Redirect to the login page
                window.location.href = "login.php";
            } else {
                // If not checked, display an error message
                alert("Please accept the terms and conditions to proceed.");
            }
        }
    </script>
</head>
<body>
    <center>
    </div>
    <h1>Library Management System Terms and Conditions</h1>
    </div>
    <div class="legal">
    <form action="" method="post" onsubmit="validateForm(); return false;">
        <p>Library Management System. Before proceeding, please read and accept our terms and conditions:</p>

        <h1>Terms and Conditions</h1>
        <ul>
        
        <li>By using our services, you agree to be bound by these terms and conditions. Please read them carefully.</li>
        <li>You are responsible for maintaining the confidentiality of your account and password.</li>
         <li>We may change or update these terms. Any changes will be effective immediately.</li>
         <li>You agree not to use our services for any illegal or unauthorized purpose.</li>
        <li>We reserve the right to terminate your account at our discretion.</li>
       </ul>

         <h1> Acceptance</h1>
        <p><input type="checkbox" id="accept_terms" required> I have read and accept the terms and conditions.</p>

        <p><input type="submit" value="Proceed to Login"></p>
    </form>
    </div>
    <div>
   
    </div>
    </center>
    
</body>
</html>
