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
            $conn=@new mysqli('localhost', 'root', '', 'ioreno');
            return $conn;
        }

        //returns all the rows in the contractor table 
	public function getContractors()
        {
            $conn=connect();
            $sql= "SELECT * FROM contractor";
            $get_result= $conn->query($sql) or die("Can't connect to the contractor table");
            $contractors=array();
            while ($cons = $get_result->fetch_array())
            {
                $contractor= new Contractor($cons["Contractor_CO_Num"], $cons["Contractor_CO_Name"], $cons["Contractor_Phone"], 
                        $cons["Contractor_Email"], $cons["Contractor_Contact_Name"], $cons["Contractor_Password"], $cons["Contractor_Date_Registered"]);
                $contractors=$contractor;
            }
              $get_result->free();
            $sql->close();
            $conn->close();
            return $contractors;
        }
        
        //return all the rows in the customer table
        public function getCustomers()
        {
            $conn=connect();
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
            $sql->close();
            $conn->close();
            return $customers;
        }
        
        //returns all the rows in the payments table 
          public function getPayments()
        {
            $conn=connect();
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
            $sql->close();
            $conn->close();
            return $payments;
        }
        
        //returns all the rows in the project table 
          public function getProjects()
        {
            $conn=connect();
            $sql= "SELECT * FROM project";
            $get_result= $conn->query($sql) or die("Can't connect to the project table");
            $projects=array();
            while ($pro = $get_result->fetch_array())
            {
                $project= new Project($pro["Project_ID"], $pro["Customer_Email"], $pro["Project_Description"], $pro["Project_Budget"]);
                $projects=$project;
            }
              $get_result->free();
            $sql->close();
            $conn->close();
            return $projects;
        }
        
        //return all the rows in the proposal table
         public function getProposals()
        {
            $conn=connect();
            $sql= "SELECT * FROM proposal";
            $get_result= $conn->query($sql) or die("Can't connect to the proposal table");
            $proposals=array();
            while ($prop = $get_result->fetch_array())
            {
                $proposal= new Proposal($prop["Proposal_ID"], $prop["Contractor_CO_Num"], $prop["Project_ID"], $prop["Project_Estimate"]);
                $proposals=$proposal;
            }
              $get_result->free();
            $sql->close();
            $conn->close();
            return $proposals;
        }
        
        //return one record from the contractor table based on ID 
        public function getContractor($coNum)
        {
            $conn=connect();
            $sql= "SELECT * FROM contractor WHERE Contractor_CO_Num = ".$coNum;
            $get_result= $conn->query($sql) or die("Can't connect to the contractor table");
            $cons=$get_result->fetch_assoc();
                $contractor= new Contractor($cons["Contractor_CO_Num"], $cons["Contractor_CO_Name"], $cons["Contractor_Phone"], 
                        $cons["Contractor_Email"], $cons["Contractor_Contact_Name"], $cons["Contractor_Password"], $cons["Contractor_Date_Registered"]);
               $get_result->free();
            $sql->close();
            $conn->close(); 
            return $contractor;
        }
        //return one record from the contracator table based on Email
        public function getContractorE($email)
        {
            $conn=connect();
            $sql= "SELECT * FROM contractor WHERE Contractor_Email = ".$email;
            $get_result= $conn->query($sql) or die("Can't connect to the contractor table");
            $cons=$get_result->fetch_assoc();
                $contractor= new Contractor($cons["Contractor_CO_Num"], $cons["Contractor_CO_Name"], $cons["Contractor_Phone"], 
                        $cons["Contractor_Email"], $cons["Contractor_Contact_Name"], $cons["Contractor_Password"], $cons["Contractor_Date_Registered"]);
               $get_result->free();
            $sql->close();
            $conn->close(); 
            return $contractor;
        }
        
        //return one row in the customer table
        public function getCustomer($id)
        {
            $conn=connect();
            $sql= "SELECT * FROM customer WHERE Customer_ID = ".$id;
            $get_result= $conn->query($sql) or die("Can't connect to the customer table");
            $cust=$get_result->fetch_assoc();
                $customer= new Customer($cust["Customer_ID"], $cust["Customer_Name"], $cust["Customer_Email"], 
                        $cust["Customer_Phone"], $cust["Customer_Password"], $cust["Customer_Date_Registered"]);
           
              $get_result->free();
            $sql->close();
            $conn->close();
            return $customer;
        }
        //return a record of the customer table based on email
        public function getCustomerE($email)
        {
            $conn=connect();
            $sql= "SELECT * FROM customer WHERE Customer_Email = ".$email;
            $get_result= $conn->query($sql) or die("Can't connect to the customer table");
            $cust=$get_result->fetch_assoc();
                $customer= new Customer($cust["Customer_ID"], $cust["Customer_Name"], $cust["Customer_Email"], 
                        $cust["Customer_Phone"], $cust["Customer_Password"], $cust["Customer_Date_Registered"]);
           
              $get_result->free();
            $sql->close();
            $conn->close();
            return $customer;
        }
        
        //returns all the rows in the payments table 
          public function getPayment($id)
        {
            $conn=connect();
            $sql= "SELECT * FROM payments WHERE Payment_ID = ".$id;
            $get_result= $conn->query($sql) or die("Can't connect to the payments table");
            $pay=$get_result->fetch_assoc();
                $payment= new Payment($pay["Payment_ID"], $pay["Contractor_CO_Num"], $pay["Payment_Amount"], 
                        $pay["Proposal_ID"], $pay["Payment_Status"], $pay["PAYMENT_DATE"]);
      
            return $payment;
            $get_result->free();
            $sql->close();
            $conn->close();
        }
        
        //returns all the rows in the project table 
          public function getProject($id)
        {
            $conn=connect();
            $sql= "SELECT * FROM project WHERE Project_ID = ".$id;
            $get_result= $conn->query($sql) or die("Can't connect to the project table");
            $pro=$get_result->fetch_assoc();
                $project= new Project($pro["Project_ID"], $pro["Customer_Email"], $pro["Project_Description"], $pro["Project_Budget"]);
         
            return $project;
            $get_result->free();
            $sql->close();
            $conn->close();
        }
        
        //return all the rows in the proposal table
         public function getProposal($id)
        {
            $conn=connect();
            $sql= "SELECT * FROM proposal WHERE Proposal_ID = ".$id;
            $get_result= $conn->query($sql) or die("Can't connect to the proposal table");
            $prop=$get_result->fetch_assoc();
                $proposal= new Proposal($prop["Proposal_ID"], $prop["Contractor_CO_Num"], $prop["Project_ID"], $prop["Project_Estimate"]);
              
            return $proposal;
            $sql->close();
            $conn->close();
        }
        
        //insert a record in the contractor table
        public function insertContractor(Contractor $contractor)
        {
            $conn= connect();
            $sql=$conn->prepare("INSERT INTO Contractor VALUES (?,?,?,?,?,?,?)");
           
            $coNum=$contractor->get_coNum();
            $coName=$contractor->get_coName();
            $phone=$contractor->get_phone();
            $email=$contractor->get_email();
            $name=$contractor->get_name();
            $pass=$contractor->get_password();
            $date=$contractor->get_date();
            $sql->bind_param("issssss", $coNum, $coName, $phone, $email, $name, $pass, $date);
            
            $sql->execute();
            
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
            $conn= connect();
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
            $conn= connect();
            $sql=$conn->prepare("INSERT INTO project VALUES (?,?,?,?)");
            
            $id=$project->get_id();
            $email=$project->get_email();
            $description=$project->get_description();
            $budget=$project->get_budget();
            $sql->bind_param("issd", $id, $email, $description, $budget);
            
            $sql->execute();
            
            $sql->close();
            $conn->close();
        }
          //insert a record in the project table
           public function insertProposal(Proposal $proposal)
        {
            $conn= connect();
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
            $conn=connect();
            $sql="DELETE FROM contractor WHERE Contractor_CO_Num = ".$contractor->get_coNum();
            $conn->query($sql) or die ("Can't connect to the contractor table");
            $conn->close();
            
        }
        //delete a record based on ID from the customer table
         public function deleteCustomer(Customer $customer)
        {
            $conn=connect();
            $sql="DELETE FROM customer WHERE Customer_ID = ".$customer->get_id();
            $conn->query($sql) or die ("Can't connect to the customer table");
             $conn->close();
            
        }
        //delete a record based on ID from the payment table
         public function deletePayment(Payment $payment)
        {
            $conn=connect();
            $sql="DELETE FROM payments WHERE Payment_ID = ".$payment->get_id();
            $conn->query($sql) or die ("Can't connect to the payment table");
             $conn->close();
            
        }
        //delete a record based on ID from the project table
         public function deleteProject(Project $project)
        {
            $conn=connect();
            $sql="DELETE FROM project WHERE Project_ID = ".$project->get_id();
            $conn->query($sql) or die ("Can't connect to the project table");
             $conn->close();
            
        }
        //delete a record based on ID from the proposal table
          public function deleteProposal(Proposal $proposal)
        {
            $conn=connect();
            $sql="DELETE FROM project WHERE Proposal_ID = ".$proposal->get_id();
            $conn->query($sql) or die ("Can't connect to the proposal table");
             $conn->close();
            
        }
        
        //update a record based on ID from the contractor table
        public function updateContractor(Contractor $contractor)
        {
            $conn=connect();
            $stmt=$conn->prepare("UPDATE contractor SET Contractor_CO_Name = ?, Contractor_Phone = ?, Contractor_Email = ?, "
                    . "Contractor_Contact_Name = ?, Contractor_Password = ?, Contractor_Date_Registered = ? WHERE Contractor_CO_Num = ?");
            $coNum=$contractor->get_coNum();
            $coName=$contractor->get_coName();
            $phone=$contractor->get_phone();
            $email=$contractor->get_email();
            $name=$contractor->get_name();
            $password=$contractor->get_password();
            $date=$contractor->get_date();
            
            $stmt->bind_param('ssssssi', $coName, $phone, $email, $name, $password, $date, $coNum);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            
        }
          public function updateCustomer(Customer $customer)
        {
            $conn=connect();
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
            $conn=connect();
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
            $conn=connect();
            $stmt=$conn->prepare("UPDATE project SET Customer_Email = ?, Project_Description = ?, "
                    . "Project_Budget = ? WHERE Project_ID = ?");
            $id=$project->get_id();
            $email=$project->get_email();
            $description=$project->get_description();
            $budget=$project->get_budget();
            
            $stmt->bind_param('issd', $email, $description, $budget, $id);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            
        }
         public function updateProposal(Proposal $proposal)
        {
            $conn=connect();
            $stmt=$conn->prepare("UPDATE proposal SET Contractor_CO_Num = ?, Project_ID = ?, "
                    . "Project_Estimate = ? WHERE Proposal_ID = ?");
            $id=$proposal->get_id();
            $coNum=$proposal->get_coNum();
            $project=$proposal->get_project();
            $estimate=$proposal->get_estimate();
            
            $stmt->bind_param('issd', $coNum, $project, $estimate, $id);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            
        }
}
        
        

