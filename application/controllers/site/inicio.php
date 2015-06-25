<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        init_sistema();
		$this->load->model('admin/site/site_model', 'site');
    }
    
    public function index(){
        $this->load->view('site/index');
    }
	
    function contato(){
    	$logo = logo_site();
		$data = array('titulo'=>$logo['titulo'],'logo'=>$logo['logo']);
        $this->load->view('site/contato',$data);
    }
	
    function error404() { 
        $this->load->view('site/layout/erro404');
    } 
    
    function enviar_email(){
    	
		$destino = explode(";", $this->input->post('destino'));
		
		$msg = "Destiando à ".$destino[1].", ".$this->input->post('message');
		
        $dados = array('nome'=>$this->input->post('name'),
        			   'remetente'=>$this->input->post('email'),
                       'destino'=>$destino[0],
                       'assunto'=>$this->input->post('subject'),
                       'msg'=>$msg);
        
		//print_r($dados);exit;
		
        $retorno = enviar_email_site($dados);
        
        if($retorno == true){
            set_msg('msg','Email enviado com sucesso','sucesso');
        }else{
            set_msg('msg','Email não enviado','erro');
        }
		redirect(base_url('site/inicio/contato'), 'refresh');
    }
	
	function detalhe(){
		$data = array('detalhe'=>$this->site->get_byIdprojeto($this->input->get('item'))->result());
		$this->load->view('site/det_portifolio',$data);
	}
	
	function sobre(){
		$logo = logo_site();
		$data = array('titulo'=>$logo['titulo'],
					  'logo'=>$logo['logo']);
        $this->load->view('site/sobre',$data);
	}
	
	function parceiros(){
		$logo = logo_site();
		$data = array('titulo'=>$logo['titulo'],
					  'logo'=>$logo['logo'],
					  'parceiros' => $this->site->get_parceiros(TRUE)->result());
        $this->load->view('site/parcerias',$data);
	}
	
	function servicos(){
		$logo = logo_site();
		$data = array('titulo'=>$logo['titulo'],
					  'logo'=>$logo['logo'],
					  'parceiros' => $this->site->get_parceiros(TRUE)->result());
        $this->load->view('site/servicos',$data);
	}
}