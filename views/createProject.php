<?php
    session_start();
    if (!$_SESSION["login"]){
        header("Location: index.php");
    }
    include("_header.php");
    
?>

    <div class="container-fluid">

        <h1>Post a Project</h1>
        <form class="register-form" action='../php/insert_project.php' id="registerCustForm" method="POST" enctype="multipart/form-data">
            <fieldset>
                <div class="control-group">
                    <!-- Username -->
                    <label class="control-label" for="title">Project Title</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="title" name="title" placeholder="" class="input-xlarge" required="required" value="<?php if (isset($_SESSION['title'])) echo $_SESSION['title']; $_SESSION["title"] = null; ?>">

                        <p class="help-block">Enter a title for your project</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="budget">Budget</label>
                    <div class="controls">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="number" required="required" name="budget" value="<?php if (isset($_SESSION['budget'])) echo $_SESSION['budget']; $_SESSION["budget"] = null; ?>" min="0" step="1" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="budget" />
                            <span name="bugetErr" class="text-danger"><?php if (isset($_SESSION['budgetErr'])) echo("{$_SESSION['budgetErr']}"); $_SESSION['budgetErr'] = ""; ?></span>
                        </div>

                        <p class="help-block">Enter your budget for the project</p>
                    </div>
                </div>

                <div class="control-group">
                    <!-- E-mail -->
                    <label class="control-label" for="projectType">Project Type</label>
                    <div class="form-group">
                        <select class="form-control" id="projectType" name="projectType">
                                <?php
                                include("../Classes/ProjectTypes.php");
                                foreach ($projectTypes as $val) {
                                    ?><option value="<?php echo $val; ?>"<?php
                                    ?>><?php echo $val; ?></option><?php
                                        }
                                        ?>
                            </select>

                        <p class="help-block">Select the best fitting project type</p>
                    </div>

                </div>

                <div class="control-group">
                    <!-- E-mail -->
                    <label class="control-label" for="description">Project Description</label>
                    <div class="controls">
                        <textarea class="form-control" required="required" name="description" rows="5" id="description"><?php if (isset($_SESSION['description'])) echo $_SESSION['description']; $_SESSION["description"] = null; ?></textarea>
                        <p class="help-block">Describe your project, provide as many details as possible</p>
                    </div>
                </div>


                    <div class="control-group">
                        <!-- Address -->
                        <label class="control-label" for="address">Address</label>
                        <div class="controls">
                            <input type="text" id="address" name="address" placeholder="" class="input-xlarge form-control" required="required" value="<?php if (isset($_SESSION['address'])) echo $_SESSION['address']; $_SESSION["address"] = null; ?>">
                            <span name="addressErr"><?php if (isset($_SESSION['addressErr'])) echo("{$_SESSION['addressErr']}"); $_SESSION['addressErr'] = ""; ?></span>
                            <p class="help-block">Please provide the address of the project site</p>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <!-- City -->
                        <label class="control-label" for="city">City</label>
                        <div class="controls">
                            <input type="text" id="city" name="city" placeholder="" class="input-xlarge form-control" required="required" value="<?php if (isset($_SESSION['city'])) echo $_SESSION['city']; $_SESSION["city"] = null; ?>">
                            <span name="cityErr"><?php if (isset($_SESSION['cityErr'])) echo("{$_SESSION['cityErr']}"); $_SESSION['cityErr'] = ""; ?></span>
                            <p class="help-block">Please provide the city of the project site</p>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <!-- Image -->
                        <label class="control-label" for="image">Images</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="image">
                            <span name="imgErr1" class="text-danger"><?php if (isset($_SESSION['imgErr1'])) echo("{$_SESSION['imgErr1']}"); $_SESSION['imgErr1'] = ""; ?></span>
                            <span name="imgErr2" class="text-danger"><?php if (isset($_SESSION['imgErr2'])) echo("{$_SESSION['imgErr2']}"); $_SESSION['imgErr2'] = ""; ?></span>
                            <label class="custom-file-label" for="image">Choose File</span>
                        </div>
                        <p class="help-block">Select images to upload</p>
                    </div>
        
                    <div class="control-group">
                        <!-- Submit -->
                        <div class="controls">
                            <input type="submit" name="submit" class="btn btn-success" value="Submit">
                            <a href="HomeCustomer.php" class="btn btn-danger" role="button"><strong>Go back</strong></a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
 
<?php
    include("_footer.php");
?>