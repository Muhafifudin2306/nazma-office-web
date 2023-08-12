<?php
class Modelblog extends CI_Model
{
    public function get_other_data_blog()
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->order_by('date', 'desc');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_data_blog()
    {
        $this->db->order_by('created_at', 'desc'); 
        return $this->db->get('blog')->result_array();
    }

    public function add_blog($data)
    {
        return $this->db->insert('blog', $data);
    }

    public function getBlogBySlug($slug)
    {
        return $this->db->get_where('blog', ['slug' =>  $slug])->row_object();
    }

    public function edit_blog($data, $slug)
    {
        $this->db->where('slug', $slug);
        return $this->db->update('blog', $data);
    }

    public function delete_blog($slug)
    {
        return $this->db->delete('blog', ['slug' => $slug]);
    }
}

?>