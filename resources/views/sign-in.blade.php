<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/sign-in.css">
</head>
<body>
    <main>
        <div class="sign-in">
            <form action="#" method="post">
                <label for="Fullname">Volledige naam:</label>
                <input type="text" id="Fullname" name="Fullname" required>

                <label for="Email">E-mailadres:</label>
                <input type="email" id="Email" name="Email" required>

                <button type="submit">sign-in</button>
            </form>

            <div class="container">

            <form method="post" action="{{ route('login') }}">
            @csrf 
            <label>Login</label>
            <label>Username</label>
            <input type="text" id="username" name="username" required>
            <label>Password</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" name="submit">
            </form>


            <?php if (isset($_GET['error'])): ?>
                <div class="error">
                 <?php
                if ($_GET['error'] == 'invalid_password') {
                echo "Invalid password. Please try again.";
                } elseif ($_GET['error'] == 'no_user') {
                echo "No user found with that username. Please try again.";
            }
            ?>
        </div>
    <?php endif; ?>
    
    </div>



        </div>
    </main>
</body>
</html>

