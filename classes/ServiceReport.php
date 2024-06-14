<?php
class ServiceReport {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function add($report) {
        // search if may ga exist na nga beneficiary name or wala pa
        $query = "SELECT COUNT(*) FROM db_redcross.tbl_beneficiaries WHERE beneficiaryName = ?";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $report["beneficiaryName"], PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchColumn();

        if ($result > 0) {
            $query = "SELECT id FROM db_redcross.tbl_beneficiaries WHERE beneficiaryName = ?";

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $report["beneficiaryName"], PDO::PARAM_STR);
            $stmt->execute();
            $beneficiary_id = $stmt->fetchColumn();
        } else {
            $query = "INSERT INTO db_redcross.tbl_beneficiaries (beneficiaryName) VALUES (?)";

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $report["beneficiaryName"], PDO::PARAM_STR);
            $stmt->execute();
            $beneficiary_id = $this->db->getConnection()->lastInsertId();
        }


        // search if may ga exist na nga location or wala pa
        $query = "SELECT COUNT(*) FROM db_redcross.tbl_locations WHERE location = ?";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $report["location"], PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchColumn();

        if ($result > 0) {
            $query = "SELECT id FROM db_redcross.tbl_locations WHERE location = ?";

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $report["location"], PDO::PARAM_STR);
            $stmt->execute();
            $location_id = $stmt->fetchColumn();
        } else {
            $query = "INSERT INTO db_redcross.tbl_locations (location) VALUES (?)";
            
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $report["location"], PDO::PARAM_STR);
            $stmt->execute();
            $location_id = $this->db->getConnection()->lastInsertId();
        }


        $query = "INSERT INTO db_redcross.tbl_works (beneficiary_id, location_id, date, expense, description, remarks)
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $beneficiary_id, PDO::PARAM_INT);
        $stmt->bindParam(2, $location_id, PDO::PARAM_INT);
        $stmt->bindParam(3, $report["date"], PDO::PARAM_STR);
        $stmt->bindParam(4, $report["expense"], PDO::PARAM_INT);
        $stmt->bindParam(5, $report["description"], PDO::PARAM_STR);
        $stmt->bindParam(6, $report["remarks"], PDO::PARAM_STR);
        $stmt->execute();
    }

    public function countallWorks() {
        $query = "SELECT COUNT(*) 
                FROM `tbl_works`";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();

        return $stmt->fetchColumn();
    }

    public function countWorksbyDate($date) {
        $query = "SELECT COUNT(*) 
                FROM `tbl_works`
                WHERE date = :date";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(':date', $date, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchColumn();
    }

    public function displayall() {
        $query = 'SELECT tbl_works.id, tbl_beneficiaries.beneficiaryName, tbl_locations.location, tbl_works.date, tbl_works.expense, tbl_works.description, tbl_works.remarks
                FROM tbl_works
                INNER JOIN tbl_beneficiaries ON tbl_works.beneficiary_id = tbl_beneficiaries.id
                INNER JOIN tbl_locations ON tbl_works.location_id = tbl_locations.id';

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }

    public function delete($id) {
        $query = "DELETE FROM tbl_works
            WHERE id = $id";

        $this->db->getConnection()->exec($query);
    }

    public function update($id, $item) {
        // search if may ga exist na nga beneficiary name or wala pa
        $query = "SELECT COUNT(*) FROM db_redcross.tbl_beneficiaries WHERE beneficiaryName = ?";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $item["beneficiaryName"], PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchColumn();
        if ($result > 0) {
            $query = "SELECT id FROM db_redcross.tbl_beneficiaries WHERE beneficiaryName = ?";
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $item["beneficiaryName"], PDO::PARAM_STR);
            $stmt->execute();
            $beneficiary_id = $stmt->fetchColumn();
        } else {
            $query = "INSERT INTO db_redcross.tbl_beneficiaries (beneficiaryName) VALUES (?)";
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $item["beneficiaryName"], PDO::PARAM_STR);
            $stmt->execute();
            $beneficiary_id = $this->db->getConnection()->lastInsertId();
        }
        // search if may ga exist na nga location or wala pa
        $query = "SELECT COUNT(*) FROM db_redcross.tbl_locations WHERE location = ?";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $item["location"], PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchColumn();
        if ($result > 0) {
            $query = "SELECT id FROM db_redcross.tbl_locations WHERE location = ?";
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $item["location"], PDO::PARAM_STR);
            $stmt->execute();
            $location_id = $stmt->fetchColumn();
        } else {
            $query = "INSERT INTO db_redcross.tbl_locations (location) VALUES (?)";
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $item["location"], PDO::PARAM_STR);
            $stmt->execute();
            $location_id = $this->db->getConnection()->lastInsertId();
        }
        $query = "UPDATE db_redcross.tbl_works 
                SET beneficiary_id = ?, location_id = ?, date = ?, expense = ?, description = ?, remarks = ?
                WHERE id = ?";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $beneficiary_id, PDO::PARAM_INT);
        $stmt->bindParam(2, $location_id, PDO::PARAM_INT);
        $stmt->bindParam(3, $item["date"], PDO::PARAM_STR);
        $stmt->bindParam(4, $item["expense"], PDO::PARAM_INT);
        $stmt->bindParam(5, $item["description"], PDO::PARAM_STR);
        $stmt->bindParam(6, $item["remarks"], PDO::PARAM_STR);
        $stmt->bindParam(7, $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}