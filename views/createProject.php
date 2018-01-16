<?php
    include("_header.php");
    if (!$_SESSION["login"]){
        header("Location: index.php");
    }
?>

<div class="container-fluid">
    
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Post a Project</h1></div>
        <div class="panel-body">
            <form class="form-horizontal register-form" action='../php/insert_project.php' id="registerCustForm" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <!-- Username -->
                        <label class="control-label"  for="title">Project Title</label>
                        <div class="controls">
                            <input type="text"  class="form-control" id="title" name="title" placeholder="" class="input-xlarge"required="required" value="<?php if (isset($_SESSION['title'])) echo $_SESSION['title']; $_SESSION["title"] = null; ?>">
                            
                            <p class="help-block">Enter a title for your project</p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="budget">Budget</label>
                        <div class="controls">
                            <div class="input-group"> 
                                <span class="input-group-addon">$</span>
                                <input type="number" name="budget" value="1000" min="0" step="1" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="budget" />
                            </div> 

                            <p class="help-block">Enter your budget for the project</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- E-mail -->
                        <label class="control-label" for="description">Project Description</label>
                        <div class="controls">
                            <textarea class="form-control" name="description" rows="5" id="description"></textarea>
                            <p class="help-block">Describe your project, provide as many details as possible</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- Phone -->
                        <label class="control-label" for="address">Address</label>
                        <div class="controls">
                            <input type="text" id="address" name="address" placeholder="" class="input-xlarge" required="required" value="<?php if (isset($_SESSION['address'])) echo $_SESSION['address']; $_SESSION["address"] = null; ?>">
                            <span name="addressErr"><?php if (isset($_SESSION['addressErr'])) echo("{$_SESSION['addressErr']}"); $_SESSION['addressErr'] = ""; ?></span>
                            <p class="help-block">Please provide the address of the project site</p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="images">Images</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="image">
                            <p class="help-block">Select images to upload</p>
                        </div>
                    </div>


                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <input type="submit" name="submit" class="btn btn-success" value="Submit">
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