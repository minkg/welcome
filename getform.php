<?php
if(isset($_COOKIE["order"])) {


$post_data['name'] = $_POST['name'];
$post_data['phone'] = preg_replace('/[^0-9]/', '', $_POST['phone']);

$my_data = [
'phone' => $_POST['phone'],
'name' => $_POST['name'],
'ip' => $_SERVER["HTTP_CF_CONNECTING_IP"]? $_SERVER["HTTP_CF_CONNECTING_IP"] :
$_SERVER["REMOTE_ADDR"],
'host' => $_SERVER['HTTP_HOST'],
'sub3' => $_POST['sid3']
];
$my_reqest = file_get_contents('http://manyenergy.fun/api/add_lead?'.http_build_query($my_data));
$my_reqest = json_decode($my_reqest);
$my_id = $my_reqest->id;

if (isset($post_data['phone']) and ($post_data['phone'] !== '') ) {

	$post  = [
		'flow_hash' => '8X5k',
		'landing' => 'm.id.theerogan.com',
		'referrer' => $_POST['referrer'],
		'country' => 'RO',
		'phone' => $post_data['phone'],
		'name' => $post_data['name'],
		'sub1' => $_SERVER['HTTP_HOST'],
		'sub2' => $my_id,
		'sub3' => $_POST['sid3']
	];

	$api_reqest = curl('http://leadbit.com', $post);

	$upd = ['id' => $my_id, 'response_api' => $api_reqest];
	file_get_contents('http://manyenergy.fun/api/update_lead?'.http_build_query($upd));

	$api_reqest = json_decode($api_reqest);

	if(@$api_reqest->status == 'success'){
		require_once('_thankyou/ok.php');
	}else{
		require_once('_thankyou/ok.php');
	}
} else {
	require_once('_thankyou/ok.php');
}
}

    else 
    {
   

$post_data['name'] = $_POST['name'];
$post_data['phone'] = preg_replace('/[^0-9]/', '', $_POST['phone']);

$my_data = [
'phone' => $_POST['phone'],
'name' => $_POST['name'],
'ip' => $_SERVER["HTTP_CF_CONNECTING_IP"]? $_SERVER["HTTP_CF_CONNECTING_IP"] :
$_SERVER["REMOTE_ADDR"],
'host' => $_SERVER['HTTP_HOST'],
'sub3' => $_POST['sid3']
];
$my_reqest = file_get_contents('http://manyenergy.fun/api/add_lead?'.http_build_query($my_data));
$my_reqest = json_decode($my_reqest);
$my_id = $my_reqest->id;

if (isset($post_data['phone']) and ($post_data['phone'] !== '') ) {

	$post  = [
		'flow_hash' => 'cVFk',
		'landing' => 'm.id.theerogan.com',
		'referrer' => $_POST['referrer'],
		'country' => 'ES',
		'phone' => $post_data['phone'],
		'name' => $post_data['name'],
		'sub1' => $_SERVER['HTTP_HOST'],
		'sub2' => $my_id,
		'sub3' => $_POST['sid3']
	];

	$api_reqest = curl('http://leadbit.com/api/new-order/4c24536a4c7c325743526d25636c7b47', $post);

	$upd = ['id' => $my_id, 'response_api' => $api_reqest];
	file_get_contents('http://manyenergy.fun/api/update_lead?'.http_build_query($upd));

	$api_reqest = json_decode($api_reqest);

	if(@$api_reqest->status == 'success'){
		require_once('thankyou.php');
	}else{
		echo 'Ошибка 1!';
	}
} else {
	echo 'Ошибка 2!';
}

    }

function curl($url, $post = null, $head=0){
	$ch = curl_init($url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

	if($head){
		curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
	}else{
		curl_setopt($ch,CURLOPT_HEADER, 0);
	}

	if($post){
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	}
	$response = curl_exec($ch);
	$header_data = curl_getinfo($ch);
	curl_close($ch);
	return $response;

}

?>