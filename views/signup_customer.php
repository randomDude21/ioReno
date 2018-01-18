<?php
include("_header.php");
?>
<div class="container">
    <div class="container"  style="padding-top:2%;">
            <h1>Create an Account</h1>
            <form class="register-form" style="padding-top:5%;" action='../php/insert_customer.php' id="registerCustForm" method="POST" novalidate>
                <fieldset>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <!-- Username -->
                            <label for="username">Name</label>
                                <input type="text" id="username" name="username" placeholder="Name" class="form-control" required="required" required="required" value="<?php if (isset($_SESSION['username'])) echo $_SESSION['username']; $_SESSION["username"] = null; ?>">
                                <span name="nameErr"><?php if (isset($_SESSION['nameErr'])) echo("{$_SESSION['nameErr']}"); $_SESSION['nameErr'] = ""; ?></span>
                                <p class="help-block">Please enter your full name</p>
                        </div>

                        <div class="form-group col-md-6">
                            <!-- E-mail -->
                            <label for="email">E-mail</label>
                                <input type="email" id="email" name="email" placeholder="Email" class="form-control" required="required" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email']; $_SESSION["email"] = null; ?>">
                                <span name="nameErr"><?php if (isset($_SESSION['emailErr'])) echo("{$_SESSION['emailErr']}"); $_SESSION['emailErr'] = ""; ?></span>
                                <p class="help-block">Please provide your E-mail</p>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <!-- Phone -->
                        <div class="controls">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="phone" class="form-control" required="required" value="<?php if (isset($_SESSION['phone'])) echo $_SESSION['phone']; $_SESSION["phone"] = null; ?>">
                            <span name="nameErr"><?php if (isset($_SESSION['phoneErr'])) echo("{$_SESSION['phoneErr']}"); $_SESSION['phoneErr'] = ""; ?></span>
                            <p class="help-block">Please provide your phone number</p>
                        </div>
                    </div>

                    <div class="form-row">
                        <!-- Password-->
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control" required="required">
                            <p class="help-block">Password should be at least 4 characters</p>
                        </div>
                        <!-- Password -->
                        <div class="form-group col-md-6">
                            <label for="passwordConfirm">Password (confirm)</label>
                            <input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="Confirm" class="form-control" required="required">
                            <span name="nameErr"><?php if (isset($_SESSION['passErr'])) echo("{$_SESSION['passErr']}"); $_SESSION['passErr'] = ""; ?></span>
                            <p class="help-block">Please confirm password</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <input type="submit" name="submit" class="btn btn-success" value="Register">
                        </div>
                    </div>
                </fieldset>
            </form>    
    </div>
</div>
<?php
var_dump($_SESSION['password']);
var_dump($_SESSION['passwordConfirm']);
?>
<?php
include("_footer.php");
?>