<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
	public function index()
	{	
        $data['title'] = "Latest Job Openings";
        $data['jobs'] = $this->job_model->get_jobs();

		$this->load->view('template/header');
		$this->load->view('jobs/index', $data);
		$this->load->view('template/footer');
    }
    
    public function view($slug = NULL) {
        $data['job'] = $this->job_model->get_jobs($slug);

        if (empty($data['job'])) {
            show_404();
        }

        $this->load->view('template/header');
		$this->load->view('jobs/view', $data);
		$this->load->view('template/footer');

    }

    public function create() {

        $this->form_validation->set_rules('jobTitle', 'Job Title', 'required');
        $this->form_validation->set_rules('jobShortDescription', 'Short Description', 'required');
        $this->form_validation->set_rules('minExperience', 'Min Experience', 'required');
        $this->form_validation->set_rules('maxExperience', 'Max Experience', 'required');
        $this->form_validation->set_rules('jobDescription','Job Description','required');
        $this->form_validation->set_rules('location', 'Job Location', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header');
            $this->load->view('jobs/create');
            $this->load->view('template/footer');
        } else {
            $this->job_model->create_job();
            $formSuccess = 'A new job has been created!';
            $this->load->view('template/header');
            $this->load->view('jobs/create', $formSuccess);
            $this->load->view('template/footer');
        }

    }

    public function delete($job_id) {
        $this->job_model->delete_job($job_id);
        redirect('jobs');
    }

    public function edit($slug) {
        $data['job'] = $this->job_model->get_jobs($slug);
        
        if (empty($data['job'])) {
            show_404();
        }

        $this->load->view('template/header');
		$this->load->view('jobs/edit', $data);
		$this->load->view('template/footer');

    }

    public function update() {
        $this->job_model->update_job();
        redirect('jobs');
    }
}
