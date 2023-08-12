<?php
class Modelevent extends CI_Model
{
    
    public function get_data_event()
    {
        return $this->db->get('event')->result_array();
    }

    public function add_event($data)
    {
        return $this->db->insert('event', $data);
    }

    public function getEventById($id)
    {
        return $this->db->get_where('event', ['id' =>  $id])->row_object();
    }

    public function edit_event($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('event', $data);
    }

    public function delete_event($id)
    {
        return $this->db->delete('event', ['id' => $id]);
    }
}

?>