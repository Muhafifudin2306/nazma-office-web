<?php
class Modeltotaldata extends CI_Model
{
    
    public function get_total_project()
    {
        $this->db->select('COUNT(*) AS total');
		$this->db->from('project');
		$query = $this->db->get();
		return $query->row();
    }

    public function get_total_testimony()
    {
        $this->db->select('COUNT(*) AS total');
		$this->db->from('testimony');
		$query = $this->db->get();
		return $query->row();
    }

    public function get_total_certifiedtrainers()
    {
        $this->db->select('COUNT(*) AS total');
		$this->db->from('certifiedtrainers');
		$query = $this->db->get();
		return $query->row();
    }

    public function get_total_creativecrew()
    {
        $this->db->select('COUNT(*) AS total');
		$this->db->from('creativecrew');
		$query = $this->db->get();
		return $query->row();
    }

    public function get_total_partnership()
    {
        $this->db->select('COUNT(*) AS total');
		$this->db->from('partnership');
		$query = $this->db->get();
		return $query->row();
    }

    public function get_total_blog()
    {
        $this->db->select('COUNT(*) AS total');
		$this->db->from('blog');
		$query = $this->db->get();
		return $query->row();
    }

    public function get_total_event()
    {
        $this->db->select('COUNT(*) AS total');
		$this->db->from('event');
		$query = $this->db->get();
		return $query->row();
    }

}

?>