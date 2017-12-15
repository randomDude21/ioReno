<?php
include("_header.php");
?>
<div class="container-fluid">

    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">Create an Account</div>
            <form class="form-horizontal register-form" action='../php/insert_customer.php' id="registerCustForm" method="POST">
                <fieldset>
                    <div class="control-group">
                        <!-- Username -->
                        <label class="control-label"  for="username">Name</label>
                        <div class="controls">
                            <input type="text" id="username" name="username" placeholder="" class="input-xlarge" required="required">
                            <span name="nameErr"><?php if (isset($_SESSION['nameErr'])) echo("{$_SESSION['nameErr']}"); $_SESSION['nameErr'] = ""; ?></span>
                            <p class="help-block">Please enter your full name</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- E-mail -->
                        <label class="control-label" for="email">E-mail</label>
                        <div class="controls">
                            <input type="text" id="email" name="email" placeholder="" class="input-xlarge" required="required">
                            <span name="nameErr"><?php if (isset($_SESSION['emailErr'])) echo("{$_SESSION['emailErr']}"); $_SESSION['emailErr'] = ""; ?></span>
                            <p class="help-block">Please provide your E-mail</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- Phone -->
                        <label class="control-label" for="phone">Phone Number</label>
                        <div class="controls">
                            <input type="tel" id="phone" name="phone" placeholder="" class="input-xlarge" required="required">
                            <span name="nameErr"><?php if (isset($_SESSION['phoneErr'])) echo("{$_SESSION['phoneErr']}"); $_SESSION['phoneErr'] = ""; ?></span>
                            <p class="help-block">Please provide your phone number</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- Password-->
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            <input type="password" id="password" name="password" placeholder="" class="input-xlarge" required="required">
                            <p class="help-block">Password should be at least 4 characters</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- Password -->
                        <label class="control-label"  for="password_confirm">Password (confirm)</label>
                        <div class="controls">
                            <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge" required="required">
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
</div>

<?php
include("_footer.php");
?>