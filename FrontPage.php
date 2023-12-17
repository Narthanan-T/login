<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATI Batticaloa</title>
    <style>
        body {
            background-color: #c0c0c0;
            color: #808000;
            font-family: Times New Roman, Bold Italic;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #00ff00;
            padding: 1em 0;
        }
        header h1 {
            margin: 0;
            color: #000000;
            font-size: 1.5em;
        }
        header a {
            color: #ffff00;
            text-decoration: none;
        }
        header ul {
            padding: 0;
            margin: 0;
            list-style: none;
            overflow: hidden;
        }
        header li {
            display: inline;
            margin-right: 20px;
            font-size: 1.2em;
        }
        .main {
            padding: 2em 0;
        }
        .login-form {
            background-color: #808080;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 300px;
            margin: auto;
        }
        .register-link {
            display: block;
            margin-top: 20px;
            color: #0000ff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>ATI Batticaloa</h1>
            
        </header>
        <div class="main">
             <div id="login-header">
            <img src="C:\Users\Rishe\Downloads\download-removebg-preview.png" alt="ATI Batticaloa Logo">

            <h2>ATI Batticaloa Login</h2>
        </div>
        <div id="login-form">
            <form action="login.php" method="post">
                <label for="email">Email:</label>
                <input type="text" name="email" required>

                <label for="password">Password:</label>
                <input type="password" name="password" required>

                <input type="submit" value="Login">
            </form>
        </div>
        <div id="login-footer">
            <p>Advanced Technological Institute - Batticaloa</p>
        
                <a class="register-link" href="register.php">Register</a>
            </div>
        </div>
    </div>
	


	
	
	
</body>
</html>
