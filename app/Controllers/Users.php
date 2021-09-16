<?php namespace App\Controllers;

use App\Models\UserModel;


class Users extends BaseController
{
	public function index()
	{
		$data = [];
		helper(['form']);
		//collects data from app.js
		$request= json_decode(file_get_contents('php://input'), TRUE);


		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'username' => 'required|min_length[3]|max_length[20]',
				'password' => 'required|min_length[8]|max_length[255]|validateUser[username,password]',
			];

			$errors = [
				'password' => [
					'validateUser' => 'Username or Password don\'t match'
				]
			];

			if (! $this->validate($rules, $errors)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

				$user = $model->where('username', $this->request->getVar('username'))
											->first();

				$this->setUserSession($user);
				//$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('dashboard');

			}
		}
		echo view('login', $data);
	}

	private function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'fname' => $user['fname'],
			'mname' => $user['mname'],
			'lname' => $user['lname'],
			'email' => $user['email'],
			'phonenum' => $user['phonenum'],
			'username' => $user['username'],
			'dob' => $user['dob'],
			'address' => $user['address'],
			'country' => $user['country'],
			'mstatus' => $user['mstatus'],
			'gender' => $user['gender'],
			'nok' => $user['nok'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}

	public function register(){
		$data = [];
		helper(['form']);
		//collects data from app.js
		$request= json_decode(file_get_contents('php://input'), TRUE);

		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'fname' => 'required|min_length[3]|max_length[20]',
				'mname' => 'required|min_length[3]|max_length[20]',
				'lname' => 'required|min_length[3]|max_length[20]',
				'username' => 'required|min_length[3]|max_length[20]',
				'address' => 'required|min_length[10]|max_length[255]',
				'country' => 'required|min_length[10]|max_length[20]',
				'phonenum' => 'required|min_length[14]|max_length[14]',
				'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
				'password' => 'required|min_length[8]|max_length[255]',
				'psw-repeat' => 'matches[password]',
			// mstatus, gender, dob
			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

				$newData = [
					'fname' => $this->request->getVar('fname'),
					'lname' => $this->request->getVar('lname'),
					'mname' => $this->request->getVar('mname'),
					'gender' => $this->request->getVar('gender'),
					'mstatus' => $this->request->getVar('mstatus'),
					'country' => $this->request->getVar('country'),
					'address' => $this->request->getVar('address'),
					'phonenum' => $this->request->getVar('phonenum'),
					'nok' => $this->request->getVar('nok'),
					'dob' => $this->request->getVar('dob'),
					'username' => $this->request->getVar('username'),
					'email' => $this->request->getVar('email'),
					'password' => $this->request->getVar('password'),
				
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('/');

			}
		}

		echo view('register', $data);
	}



	public function logout(){
		session()->destroy();
		return redirect()->to('/');
	}

	//--------------------------------------------------------------------

}
