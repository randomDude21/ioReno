<?php
session_start();
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
                            <input type="text" id="username" name="username" placeholder="Name" class="form-control" required="required" maxlength="30" value="<?php if (isset($_SESSION['username'])) echo $_SESSION['username']; $_SESSION["username"] = null; ?>">
                            <span name="nameErr" class="text-danger"><?php if (isset($_SESSION['nameErr'])) echo("{$_SESSION['nameErr']}"); $_SESSION['nameErr'] = ""; ?></span>
                            <p class="help-block">Please enter your full name</p>
                        </div>
                        <!-- Company name -->
                        <div class="form-group col-md-6">
                            <label for="companyName">Company name</label>
                            <input type="text" id="companyName" name="companyName" placeholder="Company" class="form-control" required="required" maxlength="40" value="<?php if (isset($_SESSION['compname'])) echo $_SESSION['compname']; $_SESSION["compname"] = null; ?>">                           
                            <p class="help-block">Please enter your company's name</p>
                        </div>
                    </div>
                
                    <div class="form-row form-group">
                        <!-- Company Number -->
                        <label for="companyNumber">Company number</label>
                        <input type="text" id="companyNumber" name="companyNumber" placeholder="Company Number" class="form-control" required="required" maxlength="10" value="<?php if (isset($_SESSION['compnum'])) echo $_SESSION['compnum']; $_SESSION["compnum"] = null; ?>">
                        <span name="companyErr1"  class="text-danger"><?php if (isset($_SESSION['companyErr1'])) echo("{$_SESSION['companyErr1']}"); $_SESSION['companyErr1'] = ""; ?></span>
                        <span name="companyErr2"  class="text-danger"><?php if (isset($_SESSION['companyErr2'])) echo("{$_SESSION['companyErr2']}"); $_SESSION['companyErr2'] = ""; ?></span>
                        <p class="help-block">Please enter your company number (Quebec Entreprise Number)</p>
                    </div>
                    
                    <div class="form-row">
                        <!-- E-mail -->
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input type="text" id="email" name="email" placeholder="" class="form-control" required="required" required="required" maxlength="30" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email']; $_SESSION["email"] = null; ?>">
                            <span name="emailErr"  class="text-danger"><?php if (isset($_SESSION['emailErr'])) echo("{$_SESSION['emailErr']}"); $_SESSION['emailErr'] = ""; ?></span>
                            <span name="emailErr2"  class="text-danger"><?php if (isset($_SESSION['emailErr2'])) echo("{$_SESSION['emailErr2']}"); $_SESSION['emailErr2'] = ""; ?></span>
                            
                            <p class="help-block">Please provide your E-mail</p>
                        </div>
                        <!-- Phone -->
                        <div class="form-group col-md-6">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="Phone" class="form-control" required="required" required="required" maxlength="14" value="<?php if (isset($_SESSION['phone'])) echo $_SESSION['phone']; $_SESSION["phone"] = null; ?>">
                            <span name="phoneErr"  class="text-danger"><?php if (isset($_SESSION['phoneErr'])) echo("{$_SESSION['phoneErr']}"); $_SESSION['phoneErr'] = ""; ?></span>
                            <p class="help-block">Please provide your phone number</p>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <!-- Password-->
                            <label class="control-label" for="password">Password</label>
                            <input type="password" id="password" maxlength="40" name="password" placeholder="" class="form-control" required="required">
                            <p class="help-block">Password should be at least 8 characters and contain at least one letter and number</p>
                        </div>
                        <div class="form-group col-md-6">
                            <!-- Password Conf -->
                            <label class="control-label"  for="passwordConfirm">Password (confirm)</label>
                            <input type="password" id="passwordConfirm" maxlength="40" name="passwordConfirm" placeholder="" class="form-control" required="required">
                            <p class="help-block">Please confirm password</p>
                            <span name="passErr" class="text-danger"><?php if (isset($_SESSION['passErr'])) echo("{$_SESSION['passErr']}"); $_SESSION['passErr'] = ""; ?></span>
                            <span name="passErr1" class="text-danger"><?php if (isset($_SESSION['passErr1'])) echo("{$_SESSION['passErr1']}"); $_SESSION['passErr1'] = ""; ?></span>
                            <span name="passErr2" class="text-danger"><?php if (isset($_SESSION['passErr2'])) echo("{$_SESSION['passErr2']}"); $_SESSION['passErr2'] = ""; ?></span>
                            <span name="passErr3" class="text-danger"><?php if (isset($_SESSION['passErr3'])) echo("{$_SESSION['passErr3']}"); $_SESSION['passErr3'] = ""; ?></span>
                            
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