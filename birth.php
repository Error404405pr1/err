 <?php

// Replace YOUR_BOT_TOKEN with your actual bot token
$botToken = '6171653091:AAG8qjK8jfi6KvYPqi8zj0NNfXqxD0YVYjw';

// Replace YOUR_CHAT_ID with your actual chat ID
$chatId = '5352623681';

// Get the name, mobile number, and description from the user
$name = $_POST['name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$father = $_POST['father'];
$mother = $_POST['mother'];
$father_adhar = $_POST['father_adhar'];
$mother_adhar = $_POST['mother_adhar'];
$address = $_POST['address'];
$postt = $_POST['postt'];
$tahseel = $_POST['tahseel'];
$district = $_POST['district'];
$pincode = $_POST['pincode'];
$wa = $_POST['wa'];

// Create the message to send
#$message = "contact now  :\nName: $name\nMobile No.: $mobile\nDescription: $description";
$message = "birth certificate\nwhatsapp no: $wa\nname: $name\ngender: $gender\ndob: $dob\nfather: $father\nmother: $mother\nfather_adhar: $father_adhar\nmother_adhar: $mother_adhar\naddress: $address\npostt: $postt\ntahseel: $tahseel\ndist: $district\npincode: $pincode";
// Set the API endpoint URL
$url = "https://api.telegram.org/bot$botToken/sendMessage";

// Set the POST parameters
$params = [
    'chat_id' => $chatId,
    'text' => $message,
];

// Send the POST request using cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

// Check if the message was sent successfully
/*if (!$result) {
    echo 'Error sending message';
} else {
    echo 'Message sent successfully';
}*/
header("Location:./thankub.html")
?>
 