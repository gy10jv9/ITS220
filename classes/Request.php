<?php
class Request {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function getallRoleRequests() {
        $query = "SELECT tbl_approvalrequests.id, tbl_users.username,tbl_approvalrequests.type_id , tbl_requesttypes.type, tbl_approvalrequests.isdone
              FROM tbl_approvalrequests
              INNER JOIN tbl_users ON tbl_approvalrequests.user_id = tbl_users.id
              INNER JOIN tbl_requesttypes ON tbl_approvalrequests.type_id = tbl_requesttypes.id
              WHERE tbl_approvalrequests.isdone = 0";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }

    public function approveAdminRole($id) {
        $query = "UPDATE tbl_approvalrequests
                SET isdone = 1
                WHERE id = $id;
                UPDATE tbl_users
                SET role_id = 2 # admin role
                WHERE id = (SELECT user_id FROM tbl_approvalrequests WHERE id = $id)";

        $this->db->getConnection()->exec($query);
    }

    public function approveSuperAdminRole($id) {
        $query = "UPDATE tbl_approvalrequests
                SET isdone = 1
                WHERE id = $id;
                UPDATE tbl_users
                SET role_id = 3 # super admin role
                WHERE id = (SELECT user_id FROM tbl_approvalrequests WHERE id = $id)";

        $this->db->getConnection()->exec($query);
    }

    public function decline($id) {
        $query = "UPDATE tbl_approvalrequests
                SET isdone = 1
                WHERE id = $id";

        $this->db->getConnection()->exec($query);
    }

    public function getotherRequests() {
        
    }
}