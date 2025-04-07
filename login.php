<!DOCTYPE html>
<html>
<head>
    <title>Login - LoveConnect</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 320px;
            text-align: center;
        }
        h2 {
            color: #333;
            margin-top: 0;
            margin-bottom: 24px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-bottom: 20px;
        }
        input {
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.2s;
        }
        input:focus {
            border-color: #ff4b85;
            outline: none;
        }
        .password-container {
            position: relative;
        }
        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            color: #777;
        }
        .password-toggle:hover {
            color: #ff4b85;
        }
        .password-toggle svg {
            width: 20px;
            height: 20px;
        }
        .primary-btn {
            background-color: #ff4b85;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.2s;
        }
        .primary-btn:hover {
            background-color: #e43975;
        }
        a {
            color: #ff4b85;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .discord-login {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        .discord-btn {
            display: inline-block;
            background-color: #5865F2;
            color: white;
            padding: 12px 20px;
            border-radius: 4px;
            font-weight: 600;
            transition: background-color 0.2s;
        }
        .discord-btn:hover {
            background-color: #4752c4;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <!-- Success message that appears after registration -->
        <p style="color: green; display: none;">Registration successful! Please log in.</p>
        <!-- Error message that appears when credentials are invalid -->
        <p style="color: red; display: none;">Invalid email or password.</p>
        <form method="post">
            <input type="email" name="email" placeholder="Email Address" required>
            <div class="password-container">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="button" class="password-toggle" onclick="togglePassword()">
                    <!-- Eye icon (show password) -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>
            <button type="submit" class="primary-btn">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
        <!-- Discord Login Button -->
        <div class="discord-login">
            <a href="login-discord.php" class="discord-btn">Login with Discord</a>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordToggle = document.querySelector('.password-toggle svg');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                // Change to "hide password" icon (eye with slash)
                passwordToggle.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                `;
            } else {
                passwordInput.type = 'password';
                // Change back to "show password" icon (eye)
                passwordToggle.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                `;
            }
        }
    </script>
</body>
</html>
