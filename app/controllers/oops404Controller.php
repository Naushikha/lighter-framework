<?php

class oops404Controller extends Controller
{
    public function view()
    {
        http_response_code(404);
        $this->load->viewTemplate('Oops!', 'template_404');
        // logging('404', 'Accessed an unavailable resource.');

        exit();
    }
}
