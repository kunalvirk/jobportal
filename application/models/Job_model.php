<?php 

class Job_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_jobs($slug = FALSE) {
        $this->db->order_by('id', 'DESC');
        if ($slug == FALSE) {
            $query = $this->db->get('jobs');
            return $query->result_array();
        }

        $query = $this->db->get_where('jobs', array('slug' => $slug));
        return $query->row_array();
    }

    public function create_job() {
        $slug = url_title($this->input->post('jobTitle'));
        $newJob = array(
            'job_title' => $this->input->post('jobTitle'),
            'job_short_description' => $this->input->post('jobShortDescription'),
            'job_description' => $this->input->post('jobDescription'),
            'min_experience' => $this->input->post('minExperience'),
            'max_experience' => $this->input->post('maxExperience'),
            'location' => $this->input->post('location'),
            'slug' => $slug
        );

        return $this->db->insert('jobs', $newJob);

    }

    public function delete_job($id) {
        $this->db->where('id', $id);
        $this->db->delete('jobs');
        return true;
    }

    public function update_job() {
        $slug = url_title($this->input->post('jobTitle'));
        $newJob = array(
            'job_title' => $this->input->post('jobTitle'),
            'job_short_description' => $this->input->post('jobShortDescription'),
            'job_description' => $this->input->post('jobDescription'),
            'min_experience' => $this->input->post('minExperience'),
            'max_experience' => $this->input->post('maxExperience'),
            'location' => $this->input->post('location'),
            'slug' => $slug
        );

        $this->db->where('id', $this->input->post('job_id'));
        return $this->db->update('jobs', $newJob);
    }

}   