<?php
require "Contractor.php";
require "Customer.php";
require "Payment.php";
require "Project.php";
require "Proposal.php";

class Database {
    
      
	private $tableContractor= "contractor";
        private $tableCustomer="customer";
        private $tablePayment="payments";
        private $tableProject="project";
        private $tableProposal="proposal";

        //to connect from all the other methods
	public static function connect()
        {
            $conn= new mysqli('localhost', 'root', '', 'ioreno');
            return $conn;
        }

        //returns all the rows in the contractor table 
	public function getContractors()
        {
            $conn=$this->connect();
            $sql= "SELECT * FROM contractor";
            $get_result= $conn->query($sql) or die("Can't connect to the contractor table");
            $contractors=array();
            while ($cons = $get_result->fetch_array())
            {
                $contractor= new Contractor($cons["Contractor_CO_Num"], $cons["Contractor_CO_Name"], $cons["Contractor_Phone"], 
                        $cons["Contractor_Email"], $cons["Contractor_Contact_Name"], $cons["Contractor_Password"], $cons["Contractor_Date_Registered"], $cons["approved"]);
                $contractors=$contractor;
            }
            $get_result->free();
            $conn->close();
            return $contractors;
        }
        public function getContractorsNum()
        {
            $conn=$this->connect();
            $sql= "SELECT Contractor_CO_Num FROM contractor";
            $get_result= $conn->query($sql) or die("Can't connect to the contractor table");
            $contractors=array();
            $i = 0;
            while ($cons = $get_result->fetch_array())
            {                
                $contractors[$i] = $cons["Contractor_CO_Num"];
                $i++;
            }
            $get_result->free();
            $conn->close();
            return $contractors;
        }
        
        //return all the rows in the customer table
        public function getCustomers()
        {
            $conn=$this->connect();
            $sql= "SELECT * FROM customer";
            $get_result= $conn->query($sql) or die("Can't connect to the customer table");
            $customers=array();
            while ($cust = $get_result->fetch_array())
            {
                $customer= new Customer($cust["Customer_ID"], $cust["Customer_Name"], $cust["Customer_Email"], 
                        $cust["Customer_Phone"], $cust["Customer_Password"], $cust["Customer_Date_Registered"]);
                $customers=$customer;
            }
            $get_result->free();
            $conn->close();
            return $customers;
        }
        
        //returns all the rows in the payments table 
          public function getPayments()
        {
            $conn=$this->connect();
            $sql= "SELECT * FROM payments";
            $get_result= $conn->query($sql) or die("Can't connect to the payments table");
            $payments=array();
            while ($pay = $get_result->fetch_array())
            {
                $payment= new Payment($pay["Payment_ID"], $pay["Contractor_CO_Num"], $pay["Payment_Amount"], 
                        $pay["Proposal_ID"], $pay["Payment_Status"], $pay["PAYMENT_DATE"]);
                $payments=$payment;
            }
            $get_result->free();
            $conn->close();
            return $payments;
        }
       
        //returns all the rows in the project table 
          public function getProjects()
        {
            $conn=$this->connect();
            $sql= "SELECT * FROM project";
            $get_result= $conn->query($sql) or die("Can't connect to the project table");
            $projects=array();
            $i=0;
            while ($pro = $get_result->fetch_array())
            {
                $project= new Project($pro["Project_ID"], $pro["Customer_Email"], $pro["title"], $pro["Project_Description"], $pro["projectType"], $pro["Project_Budget"], $pro["address"], $pro["city"], $pro["images"], $pro["date_posted"]);
                $projects[$i]=$project;
                $i++;
            }
            $get_result->free();
            $conn->close();
            return $projects;
        }
        
        //return all the rows in the proposal table
         public function getProposals()
        {
            $conn=$this->connect();
            $sql= "SELECT * FROM proposal";
            $get_result= $conn->query($sql) or die("Can't connect to the proposal table");
            $proposals=array();
            while ($prop = $get_result->fetch_array())
            {
                $proposal= new Proposal($prop["Proposal_ID"], $prop["Contractor_CO_Num"], $prop["Project_ID"], $prop["Project_Estimate"]);
                $proposals=$proposal;
            }
            $get_result->free();
            $conn->close();
            return $proposals;
        }
        
        //return one record from the contractor table based on ID 
        public function getContractor($coNum)
        {
            $conn=$this->connect();
            $sql= "SELECT * FROM Contractor WHERE Contractor_CO_Num = ".$coNum;
            $get_result= $conn->query($sql) or die("Can't connect to the contractor table");
            if($get_result!=false)
            {
                $cons=$get_result->fetch_assoc();
                    $contractor= new Contractor($cons["Contractor_CO_Num"], $cons["Contractor_CO_Name"], $cons["Contractor_Phone"], 
                            $cons["Contractor_Email"], $cons["Contractor_Contact_Name"], $cons["Contractor_Password"], $cons["Contractor_Date_Registered"], $cons["approved"]);
                    
                $get_result->free();
                $conn->close(); 
                return $contractor;
            }
            else
            {
                return null;
            }
        }
        //return one record from the contracator table based on Email
        public function getContractorE($email)
        {
            $conn=$this->connect();
            //$sql= "SELECT * FROM Customer WHERE Customer_Email = ?";
            //$get_result= $conn->query($sql) or die ("Can't connect to the customer table");
            if($sql = $conn->prepare("SELECT Contractor_CO_Num, Contractor_CO_Name, Contractor_Phone, Contractor_Email, "
                    . "Contractor_Contact_Name, Contractor_Password, Contractor_Date_Registered, approved FROM Contractor WHERE Contractor_Email = ?"))
            {
                $sql->bind_param("s", $email);
                $sql->execute();
                $sql->bind_result($coNum, $coName, $phone, $email, $name, $password, $date, $approved);
                $sql->fetch();
                if (empty($email))
                {
                    return null;
                }
                else
                {
                    $contractor= new Contractor($coNum, $coName, $phone, $email, $name, $password, $date, $approved);

                    $sql->close();
                    $conn->close();
                    return $contractor;
                }
            }
            else
            {
                return null;
            }
        }
        
        public function getContractorEmails()
        {
            $conn=$this->connect();
            $sql= "SELECT contractor_email FROM contractor";
            $get_result= $conn->query($sql) or die("Can't connect to the CONTRACTOR table");
            $contractorEmails=array();
            $i = 0;
            while ($emails = $get_result->fetch_array())
            {                
                $contractorEmails[$i] = $emails["contractor_email"];
                $i++;
            }
            $get_result->free();
            $conn->close();
            return $contractorEmails;
        }
        
        
        //return one row in the customer table
        public function getCustomer($id)
        {
            $conn=$this->connect();
            $sql= "SELECT * FROM Customer WHERE Customer_ID = ".$id;
            $get_result= $conn->query($sql) or die("Can't connect to the customer table");
            if($get_result!=false)
            {
                $cust=$get_result->fetch_assoc();
                $customer= new Customer($cust["Customer_ID"], $cust["Customer_Name"], $cust["Customer_Email"], 
                            $cust["Customer_Phone"], $cust["Customer_Password"], $cust["Customer_Date_Registered"]);

                $get_result->free();
                $conn->close();
                return $customer;
            }
            else
            {
                return null;
            }
        }
        //return a record of the customer table based on email
        public function getCustomerE($email)
        {
            $conn=$this->connect();
            //$sql= "SELECT * FROM Customer WHERE Customer_Email = ?";
            //$get_result= $conn->query($sql) or die ("Can't connect to the customer table");
            if($sql = $conn->prepare("SELECT Customer_ID, Customer_Name, Customer_Email, Customer_Phone, Customer_Password, "
                    . "Customer_Date_Registered FROM Customer WHERE Customer_Email = ?"))
            {
                $sql->bind_param("s", $email);
                $sql->execute();
                $sql->bind_result($id, $name, $email, $phone, $password, $date);
                $sql->fetch();
                if (empty($email))
                {
                    return null;
                }
                else
                {
                    $customer= new Customer($id, $name, $email, $phone, $password, $date);
                    
                    $sql->close();
                    $conn->close();
                    return $customer;
                }
            }
            else
            {
                return null;
            }
        }
        
        public function getCustomerEmails()
        {
            $conn=$this->connect();
            $sql= "SELECT customer_email FROM customer";
            $get_result= $conn->query($sql) or die("Can't connect to the CUSTOMER table");
            $customerEmails=array();
            $i = 0;
            while ($emails = $get_result->fetch_array())
            {                
                $customerEmails[$i] = $emails["customer_email"];
                $i++;
            }
            $get_result->free();
            $conn->close();
            return $customerEmails;
        }
        
        //returns all the rows in the payments table 
          public function getPayment($id)
        {
            $conn=$this->connect();
            $sql= "SELECT * FROM payments WHERE Payment_ID = ".$id;
            $get_result= $conn->query($sql) or die("Can't connect to the payments table");
            if($get_result!=false)
            {
                $pay=$get_result->fetch_assoc();
                $payment= new Payment($pay["Payment_ID"], $pay["Contractor_CO_Num"], $pay["Payment_Amount"], 
                            $pay["Proposal_ID"], $pay["Payment_Status"], $pay["PAYMENT_DATE"]);
                $get_result->free();
                $conn->close();
                return $payment;
                
            }
            else
            {
                return null;
            }
        }
        
        //returns all the rows in the project table 
          public function getProject($id)
        {
            $conn=$this->connect();
            $sql= "SELECT * FROM project WHERE Project_ID = ".$id;
            $get_result= $conn->query($sql) or die("Can't connect to the project table");
            if ($get_result!=false)
            {
                $pro=$get_result->fetch_assoc();

                $project= new Project($pro["Project_ID"], $pro["Customer_Email"], $pro["title"], $pro["Project_Description"], $pro["projectType"], $pro["Project_Budget"], $pro["address"], $pro["city"], $pro["images"], $pro["date_posted"]);

                $get_result->free();
                $conn->close();
                return $project;
            }
            else
            {
                return null;
            }
           
        }
        
        //return all the rows in the proposal table
         public function getProposal($id)
        {
            $conn=$this->connect();
            $sql= "SELECT * FROM proposal WHERE Proposal_ID = ".$id;
            $get_result= $conn->query($sql) or die("Can't connect to the proposal table");
            if($get_result!=false)
            {
                $prop=$get_result->fetch_assoc();
                $proposal= new Proposal($prop["Proposal_ID"], $prop["Contractor_CO_Num"], $prop["Project_ID"], $prop["Project_Estimate"]);
                
                $sql->close();
                $conn->close();
                return $proposal;
            }
            else
            {
                return null;
            }
        }
        
        //insert a record in the contractor table
        public function insertContractor(Contractor $contractor)
        {
            $conn= $this->connect();
            $sql=$conn->prepare("INSERT INTO Contractor VALUES (?,?,?,?,?,?,?,?)");
        
            $coNum=$contractor->get_coNum();
            $coName=$contractor->get_coName();
            $phone=$contractor->get_phone();
            $email=$contractor->get_email();
            $name=$contractor->get_name();
            $pass=$contractor->get_password();
            $date=$contractor->get_date();
            $approved = false;
            $sql->bind_param("issssssi", $coNum, $coName, $phone, $email, $name, $pass, $date, $approved);
            
            $status = $sql->execute();
            if(!$status)
                echo trigger_error ($sql->error, E_USER_ERROR);
            $sql->close();
            $conn->close();
        }
          //insert a record in the customer table
        public function insertCustomer(Customer $customer)
        {
            $conn= $this->connect();
            $sql=$conn->prepare("INSERT INTO Customer VALUES (?,?,?,?,?,?)");
            if($sql==false)
                echo "prepare \n";
            $id=$customer->get_id();
            $name=$customer->get_name();
            $email=$customer->get_email();
            $phone=$customer->get_phone();
            $pass=$customer->get_password();
            $date=$customer->get_date();
            $sql->bind_param("isssss", $id, $name, $email, $phone, $pass, $date);
            
            $status=$sql->execute();
            if(!$status)
                echo trigger_error ($sql->error, E_USER_ERROR);
            $sql->close();
            $conn->close();
        }
        
          //insert a record in the payment table
        public  function insertPayment(Payment $payment)
        {
            $conn= $this->connect();
            $sql=$conn->prepare("INSERT INTO payments VALUES (?,?,?,?,?,?)");
            
            $id=$payment->get_id();
            $coNum=$payment->get_coNum();
            $amount=$payment->get_amount();
            $proposal=$payment->get_proposal();
            $status=$payment->get_status();
            $date=$payment->get_date();
            $sql->bind_param("iidiis", $id, $coNum, $amount, $proposal, $status, $date);
            
            $sql->execute();
            
            $sql->close();
            $conn->close();
        }
        
        //insert a record in the project table
           public function insertProject(Project $project)
        {
            $conn= $this->connect();
            $sql=$conn->prepare("INSERT INTO project VALUES (?,?,?,?,?,?,?,?,?,?)");
            
            $id=$project->get_id();
            $email=$project->get_email();
            $description=$project->get_description();
            $projectType = $project->get_type();
            $title= $project->getTitle();
            $address = $project->getAddress();
            $city = $project->get_city();
            $images = $project->getImages();
            $budget=$project->get_budget();
            $date = $project->get_date();
            $sql->bind_param("isssdsssss", $id, $email, $description, $projectType, $budget, $title, $address, $city, $images, $date);
            $status=$sql->execute();
            if(!$status)
                echo trigger_error ($sql->error, E_USER_ERROR);
            
            $sql->close();
            $conn->close();
        }
          //insert a record in the project table
           public function insertProposal(Proposal $proposal)
        {
            $conn= $this->connect();
            $sql=$conn->prepare("INSERT INTO proposal VALUES (?,?,?,?)");
            $id=$proposal->get_id();
            $coNum=$proposal->get_coNum();
            $project=$proposal->get_project();
            $estimate=$proposal->get_estimate();
            $sql->bind_param("iiid", $id, $coNum, $project, $estimate);
            
            $sql->execute();
            
            $sql->close();
            $conn->close();
        }
        //delete a record based on ID from the table contractor
        public function deleteContractor(Contractor $contractor)
        {
            $conn=$this->connect();
            $sql="DELETE FROM contractor WHERE Contractor_CO_Num = ".$contractor->get_coNum();
            $conn->query($sql) or die ("Can't connect to the contractor table");
            $conn->close();
            
        }
        //delete a record based on ID from the customer table
         public function deleteCustomer(Customer $customer)
        {
            $conn=$this->connect();
            $sql="DELETE FROM customer WHERE Customer_ID = ".$customer->get_id();
            $conn->query($sql) or die ("Can't connect to the customer table");
            $conn->close();
            
        }
        //delete a record based on ID from the payment table
         public function deletePayment(Payment $payment)
        {
            $conn=$this->connect();
            $sql="DELETE FROM payments WHERE Payment_ID = ".$payment->get_id();
            $conn->query($sql) or die ("Can't connect to the payment table");
            $conn->close();
            
        }
        //delete a record based on ID from the project table
         public function deleteProject(Project $project)
        {
            $conn=$this->connect();
            $sql="DELETE FROM project WHERE Project_ID = ".$project->get_id();
            $conn->query($sql) or die ("Can't connect to the project table");
             $conn->close();
            
        }
        //delete a record based on ID from the proposal table
          public function deleteProposal(Proposal $proposal)
        {
            $conn=$this->connect();
            $sql="DELETE FROM project WHERE Proposal_ID = ".$proposal->get_id();
            $conn->query($sql) or die ("Can't connect to the proposal table");
            $conn->close();
            
        }
        
        //update a record based on ID from the contractor table
        public function updateContractor(Contractor $contractor)
        {
            $conn=$this->connect();
            $stmt=$conn->prepare("UPDATE contractor SET Contractor_CO_Name = ?, Contractor_Phone = ?, Contractor_Email = ?, "
                    . "Contractor_Contact_Name = ?, Contractor_Password = ?, Contractor_Date_Registered = ?, approved = ? WHERE Contractor_CO_Num = ?");
            $coNum=$contractor->get_coNum();
            $coName=$contractor->get_coName();
            $phone=$contractor->get_phone();
            $email=$contractor->get_email();
            $name=$contractor->get_name();
            $password=$contractor->get_password();
            $date=$contractor->get_date();
            $approved = $contractor->get_approved();
            $stmt->bind_param('ssssssii', $coName, $phone, $email, $name, $password, $date, $coNum, $approved);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            
        }
          public function updateCustomer(Customer $customer)
        {
            $conn=$this->connect();
            $stmt=$conn->prepare("UPDATE customer SET Customer_Name = ?, Customer_Email = ?, Customer_Phone = ?, "
                    . "Customer_Password = ?, Customer_Date_Registered = ? WHERE Customer_ID = ?");
            $id=$customer->get_id();
            $name=$customer->get_name();
            $email=$customer->get_email();
            $phone=$customer->get_phone();
            $password=$customer->get_password();
            $date=$customer->get_date();
            
            $stmt->bind_param('sssssi', $name, $email, $phone, $password, $date, $id);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            
        }
         public function updatePayment(Payment $payment)
        {
            $conn=$this->connect();
            $stmt=$conn->prepare("UPDATE payments SET Contractor_CO_Num = ?, Payment_Amount = ?, Proposal_ID = ?, "
                    . "Payment_Status = ?, Payment_Date_Registered = ? WHERE Payment_ID = ?");
            $coNum=$payment->get_coNum();
            $amount=$payment->get_amount();
            $id=$payment->get_id();
            $status=$payment->get_status();
            $date=$payment->get_date();
            $proposal=$payment->get_proposal();
            
            $stmt->bind_param('sssssi', $coNum, $amount, $proposal, $status, $date, $id);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            
        }
         public function updateProject(Project $project)
        {
            $conn=$this->connect();
            $stmt=$conn->prepare("UPDATE project SET Customer_Email = ?, Project_Description = ?, "
                    . "projectType = ?, Project_Budget = ?, title = ?, address = ?, city = ?, images = ? WHERE Project_ID = ?");
            $id=$project->get_id();
            $email=$project->get_email();
            $description=$project->get_description();
            $type=$project->get_type();
            $budget=$project->get_budget();
            $title = $project->getTitle();
            $address = $project->getAddress();
            $city = $project->get_city();
            $images = $project->getImages();
            $stmt->bind_param('sssdssssi', $email, $description, $type, $budget, $title, $address, $city, $images, $id);

            $stmt->execute();
            $stmt->close();
            $conn->close();
            
        }
         public function updateProposal(Proposal $proposal)
        {
            $conn=$this->connect();
            $stmt=$conn->prepare("UPDATE proposal SET Contractor_CO_Num = ?, Project_ID = ?, "
                    . "Project_Estimate = ? WHERE Proposal_ID = ?");
            $id=$proposal->get_id();
            $coNum=$proposal->get_coNum();
            $project=$proposal->get_project();
            $estimate=$proposal->get_estimate();
            
            $stmt->bind_param('iidi', $coNum, $project, $estimate, $id);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            
        }
        public function getCustomerProject($email)
        {
            $conn= $this->connect();
            $sql="SELECT * FROM Project WHERE Customer_Email = '".$email."'";
            $get_result=$conn->query($sql);
            $projects=array();
            if ($get_result)
            {
                $i=0;
                while ($pro = $get_result->fetch_array())
                {
                    $project= new Project($pro["Project_ID"], $pro["Customer_Email"], $pro["title"], $pro["Project_Description"], $pro["projectType"], $pro["Project_Budget"], $pro["address"], $pro["city"], $pro["images"], $pro["date_posted"]);
                    $projects[$i]=$project;
                    $i++;
                }
                $get_result->free();
                $conn->close();
                return $projects;
            }
            else
            {
                return null;
            }
        }
          public function getProjectProposals($id)
        {
            $conn= $this->connect();
            $sql="SELECT * FROM Proposal WHERE Project_ID = '".$id."'";
            $get_result=$conn->query($sql);
            $proposals=array();
            if ($get_result)
            {
                $i=0;
                while ($pro = $get_result->fetch_array())
                {
                    $proposal= new Proposal($pro["Proposal_ID"], $pro["Contractor_CO_Num"], $pro["Project_ID"], $pro["Project_Estimate"]);
                    $proposals[$i]=$proposal;
                    $i++;
                }
                $get_result->free();
                $conn->close();
                return $proposals;
            }
            else
            {
                return null;
            }
        }
        public function reportCustomers()
        {
            $conn= $this->connect();
            $sql="SELECT * FROM CUSTOMER WHERE CUSTOMER_DATE_REGISTERED > DATE_FORMAT(SYSDATE(), '%Y-%m-%d')-7";
            $get_result=$conn->query($sql);
            $customers=array();
            if($get_result)
            {
                $i=0;
                while ($cust = $get_result->fetch_array())
                {
                    $customer=new Customer($cust["Customer_ID"], $cust["Customer_Name"], $cust["Customer_Email"], 
                            $cust["Customer_Phone"], $cust["Customer_Password"], $cust["Customer_Date_Registered"]);
                    $customers[$i]=$customer;
                }
                $get_result->free();
                $conn->close();
                return $customers;
            }
            else
            {
                return null;
            }
            
        }
        public function reportContractors()
        {
            $conn= $this->connect();
            $sql="SELECT * FROM Contractor WHERE Contractor_DATE_REGISTERED > DATE_FORMAT(SYSDATE(), '%Y-%m-%d')-7";
            $get_result=$conn->query($sql);
            $contractors=array();
            if($get_result)
            {
                $i=0;
                while ($cont = $get_result->fetch_array())
                {
                    $contractor=new Contractor($cont["Contractor_CO_Num"], $cont["Contractor_CO_Name"], $cont["Contractor_Phone"], 
                       $cont["Contractor_Email"], $cont["Contractor_Contact_Name"], $cont["Contractor_Password"], $cont["Contractor_Date_Registered"]);
                    $contractors[$i]=$contractor;
                }
                $get_result->free();
                $conn->close();
                return $contractors;
            }
            else
            {
                return null;
            }
            
        }
        public function reportPayments()
        {
            $conn= $this->connect();
            $sql="SELECT * FROM PAYMENTS WHERE PAYMENT_DATE> DATE_FORMAT(SYSDATE(), '%Y-%m-%d')-7";
            $get_result=$conn->query($sql);
            $payments=array();
            if($get_result)
            {
                $i=0;
                while ($pay = $get_result->fetch_array())
                {
                    $payment=new Payment($pay["Payment_ID"], $pay["Contractor_CO_Num"], $pay["Payment_Amount"], $pay["Poposal_ID"],
                            $pay["Payment_Status"], $pay["PAYMENT_DATE"]);
                    $payments[$i]=$payment;
                }
                $get_result->free();
                $conn->close();
                return $payments;
            }
            else
            {
                return null;
            }
            
        }
        public function totals()
        {
            $conn=$this->connect();
            $sql= "SELECT COUNT(PAYMENT_ID) AS NUMBER_PAYMENTS, SUM(PAYMENT_AMOUNT) AS TOTAL_PAYMENTS FROM PAYMENTS "
                    . "WHERE PAYMENT_DATE>DATE_FORMAT(SYSDATE(), '%Y-%m-%d')-7";
            $get_result=$conn->query($sql);
            $info=array();
            while ($get=$get_result->fetch_array())
            {
                $info["number"]=$get["NUMBER_PAYMENTS"];
                $info["total"]=$get["TOTAL_PAYMENTS"];
                
                $get_result->free();
                $conn->close();
                return $info;
            }
        }
        public function deniedPayments()
        {
            $conn= $this->connect();
            $sql="SELECT * FROM PAYMENTS WHERE Payment_Status = FALSE";
            $get_result=$conn->query($sql);
            $payments=array();
            if($get_result)
            {
                $i=0;
                while ($pay = $get_result->fetch_array())
                {
                    $payment=new Payment($pay["Payment_ID"], $pay["Contractor_CO_Num"], $pay["Payment_Amount"], $pay["Poposal_ID"],
                            $pay["Payment_Status"], $pay["PAYMENT_DATE"]);
                    $payments[$i]=$payment;
                }
                $get_result->free();
                $conn->close();
                return $payments;
            }
            else
            {
                return null;
            }
        }
}
        
        

