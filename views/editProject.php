<?php session_start(); 
if (!$_SESSION["login"]||$_SESSION["customer"]==null){
        header("Location: index.php");
    }
else 
{
    $_SESSION["trolling"]=true;
    require "../Classes/Database.php";
    $db=new Database();
    $customer=$db->getCustomerE($_SESSION["customer"]);
    $project=$db->getProject($_GET["id"]);
    if($customer->get_email()!=$project->get_email())
    {
        $_SESSION["trolling"]=false;
        header("location:../views/index.php");
    }
    include("_header.php");
   
  
}


?>

        
            <div style="margin-top: 40px; margin-left: 65px">
           </div>
            <div style="margin-top: 50px; margin-left: 65px">
                  <?php
                 if (isset($_SESSION["error"])) {
                        echo "<div class=\"alert alert-danger text-center\">" .
                        "<strong></strong>" . $_SESSION["error"] .
                        "</div>";
                        $_SESSION["error"] = null;
                    }
                    ?>
                <form action="../php/updateProject.php" method="POST" enctype="multipart/form-data">
                    <table>
                        
                    <?php
                         $project=$db->getProject($_GET["id"]);
                         include("../Classes/ProjectTypes.php");
                         if($project!=null)
                         {
                                
                                echo '<tr><td>Project Title</td><td><input type="text" name="title" value="'.$project->getTitle().'"></td></tr>'
                                        . '<tr><td>Project Description</td><td><textarea class="form-control" name="desc">'.$project->get_description().'</textarea></td></tr>'
                                        . '<tr><td>Project Type</td><td><select class="form-control" id="type" name="type">';
                                foreach ($projectTypes as $val) {
                                    echo '<option ';
                                    if ($project->get_type() == $val)
                                        echo 'selected="selected"';
                                    echo 'value="' . $val . '">' . $val . '</option>';
                                        }
                           
                                echo '</select> </td></tr>'
                                        . '<tr><td>Address</td><td><input type="text" name="address" value="'.$project->getAddress().'"></td></tr>'
                                        . '<tr><td>City</td><td><input type="text" name="city" value="'.$project->get_city().'"></td></tr>'
                                        . '<tr><td>Project budget</td><td><input type="text" name="budget" value="'.$project->get_budget().'"></td></tr>'
                                        . '<tr><td>Image</td><td><input type="file" id="image" name="image" value="'.$project->getImages().'"></td></tr>';

                         }
                         else
                         {
                             echo "Something went wrong";
                         }
                         $_SESSION['project']=$project->get_id();
                    ?>
                    </table>
                    <div style="margin-top: 20px">
                        <a href="HomeCustomer.php" class="btn btn-danger" role="button"><strong>Go back</strong></a>

                        <input type="submit" class="btn btn-success" value="Confirm Changes"/>
                    </div>
                </form>
            </div>
<?php
    include("_footer.php");
?>