<html lang="en">
<head>
    <title>User Registration</title>
</head>
<style>
    body{
        padding: 10px;
	    margin-top: 10px;
	    background-color: grey;
        text-align: center;
    }

    p{
        font-size: 22px;
        margin: 10px 20px;
    }
</style>
<body>
    <div>
        <?php
        if(isset($_POST['create'])){
            echo 'New User Created.';
        }
        ?>
    </div>
    <div>
        <form action="registration.php" method="post">
            <div class="container">
                <h1>Registration</h1>
                <p>Fill up form with correct values.</p>
                <label for="firstname"><b>First Name</b></label>
                <input type="text" name="firstname" required><br><br>

                <label for="lastname"><b>Last Name</b></label>
                <input type="text" name="Lastname" required><br><br>

                <label for="Email"><b>Email Address</b></label>
                <input type="text" name="email" required><br><br>

                <label for="phonenumber"><b>Phone Number</b></label>
                <input type="text" name="Phonenumber" required><br><br>

                <label for="password"><b>Password</b></label>
                <input type="password" name="password" required><br><br>

                <input type="submit" name="create" value="Sign Up">
            </div>
        </form>
    </div>
</body>
</html>