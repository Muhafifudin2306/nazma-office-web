<?php
class Modeltestimony extends CI_Model
{
    
    public function get_data_testimony()
    {
        return $this->db->get('testimony')->result_array();
    }

    public function add_testimony($data)
    {
        return $this->db->insert('testimony', $data);
    }

    public function getTestimonyById($id)
    {
        return $this->db->get_where('testimony', ['id' =>  $id])->row_object();
    }

    public function edit_testimony($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('testimony', $data);
    }

    public function delete_testimony($id)
    {
        return $this->db->delete('testimony', ['id' => $id]);
    }
}

?>