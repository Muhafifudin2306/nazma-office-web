<?php
class Modeladminlogin extends CI_Model
{
    public function check_login($tabel, $where){
        return $this->db->get_where($tabel, $where);
    }
}
?>