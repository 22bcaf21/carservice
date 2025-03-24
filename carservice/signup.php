<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s;
        }
        input:focus {
            border-color: #667eea;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }
        button:hover {
            background: #5643a8;
        }
        .toggle-btn {
            background: none;
            color: #667eea;
            border: none;
            cursor: pointer;
            margin-top: 15px;
            font-size: 14px;
            transition: color 0.3s;
        }
        .toggle-btn:hover {
            color: #5643a8;
        }
    </style>
</head>
<body>
    <div class="container" method="post">
        <h2 id="form-title">SignUp</h2>
        <form action="method2.php" method="post">
            <input type="username" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="email" required>
            <input type="phone" name="phone" placeholder="phone" required>
            <input type="password" name="password" placeholder="Password" required>
            Have Already Account<a href="login.php">Login</a>
            <button type="submit">Login</button>
        
        </form>
       
    </div>
</body>
</html>
