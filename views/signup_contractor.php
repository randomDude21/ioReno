<?php
include("_header.php");
?>
<div class="container">
    <div class="container" style="padding-top:2%;">
            <h1>Register your Company</h1>
            <form class="register-form" style="padding-top:5%;" action='../php/insert_contractor.php' id="registerCustForm" method="POST">
                <fieldset>
                    <div class="form-row">
                        <!-- Username -->
                        <div class="form-group col-md-6">
                            <label for="username">Your name</label>
                            <input type="text" id="username" name="username" placeholder="Name" class="form-control" required="required" value="<?php if (isset($_SESSION['username'])) echo $_SESSION['username']; $_SESSION["username"] = null; ?>">
                            <span name="nameErr"><?php if (isset($_SESSION['nameErr'])) echo("{$_SESSION['nameErr']}"); $_SESSION['nameErr'] = ""; ?></span>
                            <p class="help-block">Please enter your full name</p>
                        </div>
                        <!-- Username -->
                        <div class="form-group col-md-6">
                            <label for="companyName">Company name</label>
                            <input type="text" id="companyName" name="companyName" placeholder="Company" class="form-control" required="required" value="<?php if (isset($_SESSION['compname'])) echo $_SESSION['compname']; $_SESSION["compname"] = null; ?>">                           
                            <p class="help-block">Please enter your company's name</p>
                        </div>
                    </div>
                
                    <div class="form-row form-group">
                        <!-- Username -->
                        <label for="companyNumber">Company number</label>
                        <input type="text" id="companyNumber" name="companyNumber" placeholder="Company Number" class="form-control" required="required" value="<?php if (isset($_SESSION['compnum'])) echo $_SESSION['compnum']; $_SESSION["compnum"] = null; ?>">
                        <span name="companyErr1"><?php if (isset($_SESSION['companyErr1'])) echo("{$_SESSION['companyErr1']}"); $_SESSION['companyErr1'] = ""; ?></span>
                        <span name="companyErr2"><?php if (isset($_SESSION['companyErr2'])) echo("{$_SESSION['companyErr2']}"); $_SESSION['companyErr2'] = ""; ?></span>
                        <p class="help-block">Please enter your company number (Quebec Entreprise Number)</p>
                    </div>
                    
                    <div class="form-row">
                        <!-- E-mail -->
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input type="text" id="email" name="email" placeholder="" class="form-control" required="required" required="required" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email']; $_SESSION["email"] = null; ?>">
                            <span name="nameErr"><?php if (isset($_SESSION['emailErr'])) echo("{$_SESSION['emailErr']}"); $_SESSION['emailErr'] = ""; ?></span>
                            <p class="help-block">Please provide your E-mail</p>
                        </div>
                        <!-- Phone -->
                        <div class="form-group col-md-6">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="Phone" class="form-control" required="required" required="required" value="<?php if (isset($_SESSION['phone'])) echo $_SESSION['phone']; $_SESSION["phone"] = null; ?>">
                            <span name="nameErr"><?php if (isset($_SESSION['phoneErr'])) echo("{$_SESSION['phoneErr']}"); $_SESSION['phoneErr'] = ""; ?></span>
                            <p class="help-block">Please provide your phone number</p>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <!-- Password-->
                            <label class="control-label" for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="" class="form-control" required="required">
                            <p class="help-block">Password should be at least 4 characters</p>
                        </div>
                        <div class="form-group col-md-6">
                            <!-- Password -->
                            <label class="control-label"  for="passwordConfirm">Password (confirm)</label>
                            <input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="" class="form-control" required="required">
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
</div>

<?php
include("_footer.php");
?>