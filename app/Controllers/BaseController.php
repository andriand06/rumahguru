<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\user_model;
/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];
	protected $user_model;
	/** 
	 * Inteliphense @mixin Solved
	 * Instance of the main request object.
	 * 
	 * @var HTTP\IncomingRequest
	*/
	protected $request;
	public function __construct()
	{
		$this->user_model = new user_model();
	}
	public function cek_status()
	{
		$session = \Config\Services::session();
		if($session->has('username') == null)
		{
			session()->setFlashdata('error','Silahkan login terlebih dahulu untuk mengakses halaman ini');
			return redirect()->to('/auth/login');
		}
	}
	public function is_admin($username) {
		$isAdmin = $this->user_model->getIsAdmin($username);
		//dd($isAdmin);
		if($isAdmin[0] !== "1") {
			return redirect()->to('/auth/login');
		}
	}
	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
	
		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();
		
	}

	
}
