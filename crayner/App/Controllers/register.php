<?php
namespace App\Controllers;

use System\Controller;
/**
*
*		Created by icetea
*
*/
class register extends Controller
{
	/**
	* Controller constructor
	*/
	public function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->helper('rstr');
        $this->load->helper('teacrypt');
        $this->load->helper('cookiemgr');
	}
	
	/**
	* Default method
	*/
	public function index()
	{
		$login = new \App\Models\Login();
        if ($login->login_status()) {
            $this->load->error(404);
        } else {
         	$this->load->view('register',array('tanggal_lahir'=>$this->tanggal_lahir()));
        }
	}

	private function tanggal_lahir()
	{
		$a = '<select required name="tanggal"><option></option>';
		for ($i=1; $i <= 31; $i++) { 
			$a.='<option>'.$i.'</option>';
		}
		$a .= '</select>';
		$a.= '<select required name="bulan"><option></option>';
		$bln = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		$q = 1;
		foreach ($bln as $val) {
			$a.='<option value="'.($q++).'">'.$val.'</option>';
		}
		$a.='</select>';
		$a.= '<select required name="tahun"><option></option>';
		for ($i=(int)date('Y');$i>=1965;$i--) { 
			$a.='<option>'.($i).'</option>';
		}
		return $a.'</select>';
	}
}