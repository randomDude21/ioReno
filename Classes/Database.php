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
	public static function getContractors()
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
            return $contractors;
        }
        
        //return all the rows in the customer table
        public static function getCustomers()
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
            return $customers;
        }
        
        //returns all the rows in the payments table 
          public static function getPayments()
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
            return $payments;
        }
        
        //returns all the rows in the project table 
          public static function getProjects()
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
            return $projects;
        }
        
        //return all the rows in the proposal table
         public static function getProposals()
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
            return $proposals;
        }
        



	// *************************************************************************
	// These methods are just there to help code the nexts, they dont do shit
	// *************************************************************************
	public static void insertJournal(Journal j) {
		try {
			Connection con = getConnection();
			Statement statement = con.createStatement();

			String sql = "INSERT INTO " + DB_TABLE + " VALUES ("
					+ j.getId() + ", '"
					+ j.getDriver() + "', '"
					+ j.getCopilote() + "', '"
					+ j.getTruck() + "', '"
					+ j.getTrip() + "', '"
					+ j.getState() + "', '"
					+ j.getMiles() + "')";

			statement.execute(sql);

			con.close();
		} catch (Exception e) {
			e.printStackTrace();
		}
	}

	public static void deleteJournal(int id) {
		try {
			Connection con = getConnection();
			Statement statement = con.createStatement();

			String sql = "DELETE FROM " + DB_TABLE
					+ " WHERE id = " + id;

			statement.execute(sql);

			con.close();
		} catch (Exception e) {
			e.printStackTrace();
		}
	}

	public static ArrayList<Journal> getJournalsFromDB() {
		ArrayList<Journal> journals = new ArrayList();

		try {
			Connection con = getConnection();
			Statement statement = con.createStatement();

			String sql = "SELECT * FROM " + DB_TABLE;

			ResultSet rs = statement.executeQuery(sql);

			while (rs.next()) {
				Journal j = new Journal();

				j.setId(Integer.parseInt(rs.getString(1)));
				j.setDriver(rs.getString(2));
				j.setCopilote(rs.getString(3));
				j.setTruck(rs.getString(4));
				j.setTrip(rs.getString(5));
				j.setState(rs.getString(6));
				j.setMiles(rs.getString(7));

				journals.add(j);
			}

			con.close();
		} catch (Exception e) {
			e.printStackTrace();
		}

		return journals;
	}

	public static Journal getJournalById(int id) {
		Journal j = null;

		try {
			Connection con = getConnection();
			Statement statement = con.createStatement();
			String sql = "SELECT * FROM " + DB_TABLE
					+ " WHERE id = " + id;

			ResultSet rs = statement.executeQuery(sql);

			if (rs.next()) {
				j = new Journal();
				j.setId(Integer.parseInt(rs.getString(1)));
				j.setDriver(rs.getString(2));
				j.setCopilote(rs.getString(3));
				j.setTruck(rs.getString(4));
				j.setTrip(rs.getString(5));
				j.setState(rs.getString(6));
				j.setMiles(rs.getString(7));
			}

			con.close();
		} catch (Exception e) {
			e.printStackTrace();
		}

		return j;
	}
        public static ArrayList<Journal> getJournalsByState(String code) {
		ArrayList<Journal> journals = new ArrayList();

		try {
			Connection con = getConnection();
			Statement statement = con.createStatement();

			String sql = "SELECT * FROM " + DB_TABLE
					+ " WHERE state = '" + code+"'";

			ResultSet rs = statement.executeQuery(sql);

			while (rs.next()) {
				Journal j = new Journal();

				j.setId(Integer.parseInt(rs.getString(1)));
				j.setDriver(rs.getString(2));
				j.setCopilote(rs.getString(3));
				j.setTruck(rs.getString(4));
				j.setTrip(rs.getString(5));
				j.setState(rs.getString(6));
				j.setMiles(rs.getString(7));

				journals.add(j);
			}

			con.close();
		} catch (Exception e) {
			e.printStackTrace();
		}

		return journals;
	}
}
