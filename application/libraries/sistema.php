<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_sistema{
    
    protected $CI;
    public $tema = array();

    public function __construct(){
        $this->CI =& get_instance();
        $this->CI->load->helper('funcoes');
    }
    
    
	
    
}

/* End of file sistema.php */
/* Location: ./application/labrarys/sistemas.php */