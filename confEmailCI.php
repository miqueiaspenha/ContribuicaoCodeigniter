<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
-------------------------------------------------------------------
 EMAIL CONFING
-------------------------------------------------------------------
 Configuration of outgoing mail server.
*/

$config['protocol']='smtp';
$config['smtp_host']='ssl://smtp.googlemail.com';
$config['smtp_port']='465';
$config['smtp_timeout']='60';
$config['smtp_user']='seu email gmail aqui';
$config['smtp_pass']='sua senha gmail';
$config['charset']='utf-8';
$config['newline']="\r\n";
 
/* End of file email.php */
/* Location: ./system/application/config/email.php */

?>