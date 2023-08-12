<?php
class Modelpartnership extends CI_Model
{
    
    public function get_data_partnership()
    {
        return $this->db->get('partnership')->result_array();
    }

    public function add_partnership($data)
    {
        return $this->db->insert('partnership', $data);
    }

    public function getPartnershipById($id)
    {
        return $this->db->get_where('partnership', ['id' =>  $id])->row_object();
    }

    public function edit_partnership($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('partnership', $data);
    }

    public function delete_partnership($id)
    {
        return $this->db->delete('partnership', ['id' => $id]);
    }
}

?>