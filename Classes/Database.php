<?php


class Database {
    
      
	private $tableContractor= "contractor";
        private $tableCustomer="customer";
        private $tablePayment="payments";
        private $tableProject="project";
        private $tableProposal="proposal";


	function connect()
        {
            $conn=@new mysqli('localhost', 'root', '', 'ioreno');
            return $conn;
        }

	function

	public static ArrayList<Journal> retrieveArrayFromDB() {
		Connection con = getConnection();

		// Reset array before refilling it
		resetArray();

		try {
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

				addJournal(j);

				rs.next();
			}

			con.close();
		} catch (Exception e) {
			e.printStackTrace();
		}

		return journals;
	}

	public static void commitArrayToDB() {
		Connection con = getConnection();

		// Checks whether or not there are journals to commit to the DB
		if (journals.size() > 0) {
			// Recreate DB table
			createDBTable();
			// Commit journals to DB
			for (Journal j : journals) {
				try {
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
		}
	}

	public static void addJournal(Journal journal) {
		retrieveArrayFromDB();

		boolean uniqueId = true;

		for (Journal j : journals) {
			if (journal.getId() == j.getId()) {
				uniqueId = false;
			}
		}

		if (uniqueId) {
			journals.add(journal);
			commitArrayToDB();
		}
	}

	public static void delJournal(Journal journal) {
		retrieveArrayFromDB();
		journals.remove(journal.getId());
		commitArrayToDB();
	}

	public static void resetArray() {
		journals = null;
		journals = new ArrayList<Journal>();
	}

	public static void setJournals(ArrayList<Journal> journals) {
		JournalIO.journals = journals;
	}

	public static ArrayList<Journal> getJournals() {
		return journals;
	}

	// *************************************************************************
	// Methods that aren't shit
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
