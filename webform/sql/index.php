<html>
<head>
<title>PHP User Registration Form</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form  class="box" name="frmRegistration" method="post" action="">
        <div class="demo-table">
        <div class="form-head">Sign Up</div>
            
<?php
if (! empty($errorMessage) && is_array($errorMessage)) {
    ?>	
            <div class="error-message">
            <?php 
            foreach($errorMessage as $message) {
                echo $message . "<br/>";
            }
            ?>
            </div>
<?php
}
?>
            
                <h1>Username</h1>
                <div>
                    <input type="text" class="demo-input-box"
                        name="userName"
                        value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
                </div>
            
            
         
                <h1>Password</h1>
                <div><input type="password" class="demo-input-box"
                    name="password" value=""></div>
            
           
                <h1>Confirm Password</h1>
                <div>
                    <input type="password" class="demo-input-box"
                        name="confirm_password" value="">
                </div>
            
          
                <h1>Display Name</h1>
                <div>
                    <input type="text" class="demo-input-box"
                        name="firstName"
                        value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>">
                </div>

            
            <div class="field-column">
                <h1>Email</h1>
                <div>
                    <input type="text" class="demo-input-box"
                        name="userEmail"
                        value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>">
                </div>
            </div>
            <div class="field-column">
                <div class="terms">
                    <input type="checkbox" name="terms"> I accept terms
                    and conditions
                </div>
                <div>
                    <input type="submit"
                        name="register-user" value="Register"
                        class="btnRegister">
                </div>
            </div>
        </div>
    </form>
</body>
</html>