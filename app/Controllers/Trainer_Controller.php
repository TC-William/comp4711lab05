<?php
class Trainer_Controller extends CI_Controller {

    public function index()
    {
        echo 'Hello World!';
        show();

    }
    public function show() {
        $this ->load->model('Course');
    }
}
