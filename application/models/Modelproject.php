<?php
class Modelproject extends CI_Model
{
    
    public function get_data_project()
    {
        return $this->db->get('project')->result_array();
    }

    public function add_project($data)
    {
        return $this->db->insert('project', $data);
    }

    public function getProjectById($id)
    {
        return $this->db->get_where('project', ['id' =>  $id])->row_object();
    }

    public function edit_project($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('project', $data);
    }

    public function delete_project($id)
    {
        return $this->db->delete('project', ['id' => $id]);
    }
}

?>