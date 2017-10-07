$message = urlencode($message);
$url = "https://www.pay2all.in/web-api/send_sms?api_token=api_token&number=mobile_number&senderid=SANJAY&route=4";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($curl);
curl_close($curl);
echo $data;

