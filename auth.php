<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Auth {

	private $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->library('session');
	}

	public function criarAuth($login) {
		$newdata = array('username' => $login, 'logged_in' => TRUE);
		$this->CI->session->set_userdata($newdata);
	}

	public function validarAuth() {
		if ($this->CI->session->userdata('username')) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function eliminarAuth() {
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('logged_in');
	}

}
