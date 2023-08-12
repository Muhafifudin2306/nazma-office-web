<?php
class Modelcreativecrew extends CI_Model
{
    
    public function get_data_creativecrew()
    {
        return $this->db->get('creativecrew')->result_array();
    }

    public function add_creativecrew($data)
    {
        return $this->db->insert('creativecrew', $data);
    }

    public function getCreativecrewById($id)
    {
        return $this->db->get_where('creativecrew', ['id' =>  $id])->row_object();
    }

    public function edit_creativecrew($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('creativecrew', $data);
    }

    public function delete_creativecrew($id)
    {
        return $this->db->delete('creativecrew', ['id' => $id]);
    }
}

?>