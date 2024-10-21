<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'third_party/mpdf/vendor/autoload.php';

class Mpdf_lib {
    public function __construct() {
        $this->mpdf = new \Mpdf\Mpdf();
    }

    public function load() {
        return $this->mpdf;
    }
}
