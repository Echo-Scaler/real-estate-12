<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #c0bdbe, #472931);
            padding: 15px;
        }

        .wrapper {
            width: 100%;
            max-width: 420px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .form {
            padding: 30px;
        }

        .form header {
            text-align: center;
            font-size: 26px;
            font-weight: 600;
            color: #e40046;
            margin-bottom: 20px;
        }

        .field {
            margin-bottom: 15px;
            position: relative;
        }

        .field label {
            display: block;
            font-size: 14px;
            margin-bottom: 6px;
            color: #333;
        }

        .field input {
            width: 100%;
            height: 45px;
            padding: 0 12px;
            font-size: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            transition: 0.3s;
        }

        .field input:focus {
            outline: none;
            border-color: #e40046;
            box-shadow: 0 0 0 2px rgba(228, 0, 70, 0.2);
        }

        .btn {
            margin-top: 20px;
        }

        .btn input {
            width: 100%;
            height: 48px;
            border: none;
            border-radius: 6px;
            background: #e40046;
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn input:hover {
            background: #c9003e;
        }

        .link {
            margin-top: 15px;
            text-align: center;
            font-size: 14px;
        }

        .link a {
            color: #e40046;
            text-decoration: none;
            font-weight: 500;
        }

        .link a:hover {
            text-decoration: underline;
        }

        /* Eye icon style inside input */
        .eye-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            color: #e40046;
            cursor: pointer;
            z-index: 10;
        }
    </style>

    <!-- Add Font Awesome link for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script>
        // Function to toggle password visibility
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var confirmPasswordField = document.getElementById("password_confirmation");
            var eyeIcon = document.getElementById("eyeIcon");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                confirmPasswordField.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                confirmPasswordField.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
</head>

<body>

    <div class="wrapper">
        <section class="form">
            <header>Reset Password</header>

            <form action="{{ url('set_new_password/' . $token) }}" method="post">
                @csrf

                <div class="field">
                    <label for="password">Enter New Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter New Password" required>
                    <i id="eyeIcon" class="fas fa-eye eye-icon" onclick="togglePassword()"></i>
                    <span style="color: red;">{{ $errors->first('password') }}</span>
                </div>

                <div class="field">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm New Password" required>
                    <i id="eyeIcon2" class="fas fa-eye eye-icon" onclick="togglePassword()"></i>
                    <span style="color: red;">{{ $errors->first('confirm_password') }}</span>
                </div>

                <div class="btn">
                    <input type="submit" value="RESET PASSWORD">
                </div>

                <div class="link">
                    <a href="/admin/login">Back to Login</a>
                </div>
            </form>
        </section>
    </div>

</body>

</html>
