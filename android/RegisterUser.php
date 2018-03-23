<?php  


	require_once('User.php');
	$response = array();

	if($_SERVET['REQUEST_METHOD'] == 'POST') {
		storeUserInformation($response);
	} else {
		invalidRequestMethod($response);
	}

	echo json_encode($response);



	

	function invalidRequestMethod($response) {
		$response['error'] = true;
		$response['message'] = 'invalid request method';
	}

	function storeUserInformation($response) {
		$user = new User();
		$user->createUserAccount(
			$_POST['name'],
			$_POST['email'],
			$_POST['password'],
			'0'
		);
		$response['error'] = false;
		$response['message'] = 'user account successfully created';
	}


?>