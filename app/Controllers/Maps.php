<?php

namespace App\Controllers;

class Maps extends BaseController {

    public function index()
    {
        $data['title'] = 'Welcome !!';
        return view('/Maps/IndexView', $data);
    }

    public function action() {
        $this->$validation = \Config\Services::validation();

        $this->$validation ->set_rules('select_file', 'Select File', 'required');

        if ($this->$validation ->run() == TRUE) {
            if (isset($_FILES['select_file']['name'])) {
                $config['upload_path'] = './kml/';
                $config['allowed_types'] = '*';
                $config['file_name'] = random_string('alnum', 8) . '.' . pathinfo($_FILES['select_file']['name'], PATHINFO_EXTENSION);

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('select_file')) {
                    $uploaded_data = $this->upload->data();

                    $response = array(
                        'message' => 'File Uploaded Successfully',
                        'uploaded_file' => 'kml/' . $uploaded_data['file_name'],
                        'class_name' => 'alert-success'
                    );

                    $this->output->set_content_type('application/json')->set_output(json_encode($response));
                } else {
                    $response = array(
                        'message' => $this->upload->display_errors(),
                        'uploaded_image' => '',
                        'class_name' => 'alert-danger'
                    );

                    $this->output->set_content_type('application/json')->set_output(json_encode($response));
                }
            }
        } else {
            $response = array(
                'message' => validation_errors(),
                'uploaded_image' => '',
                'class_name' => 'alert-danger'
            );

            $this->output->set_content_type('application/json')->set_output(json_encode($response));
        }
    }
}


