<?php
class Modelcertifiedtrainers extends CI_Model
{
    
    public function get_data_certifiedtrainers()
    {
        return $this->db->get('certifiedtrainers')->result_array();
    }

    public function add_certifiedtrainers($data)
    {
        return $this->db->insert('certifiedtrainers', $data);
    }

    public function getCertifiedtrainersById($id)
    {
        return $this->db->get_where('certifiedtrainers', ['id' =>  $id])->row_object();
    }

    public function edit_certifiedtrainers($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('certifiedtrainers', $data);
    }

    public function delete_certifiedtrainers($id)
    {
        return $this->db->delete('certifiedtrainers', ['id' => $id]);
    }

}

?>