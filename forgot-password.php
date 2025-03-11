<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .emailSendBtn {
            font-size: 1.1rem;
            padding: 8px 0px;
            border-radius: 10px;
            background-color: #0066CC  ;
            color: white;
            width: 20%;
            border: none;
            outline: none;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 1em;
            margin-left: -2.4em;
        }
        .emailSendBtn:hover {
            background-color: #004C99;
            text-decoration: none;
        }
        button:hover {
            color:white;
        }
        label {

            top: -3em;
        }
    </style>
</head>
<body>

<div class="container" id="signIn">
        <h1 class="register_text">Forgot Password</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
                <button class="emailSendBtn" style = >Send</button>
            </div>
    </form>
</div>
</body>
</html>