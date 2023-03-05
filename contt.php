
<?php

// Replace YOUR_BOT_TOKEN with your actual bot token
$botToken = '6171653091:AAG8qjK8jfi6KvYPqi8zj0NNfXqxD0YVYjw';

// Replace YOUR_CHAT_ID with your actual chat ID
$chatId = '5352623681';

// Get the name, mobile number, and description from the user
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$sub = $_POST['subject'];
$description = $_POST['message'];

// Create the message to send
$message = "contact now  :\nName: $name\nMobile No.: $mobile\nsubject: $sub\nDescription: $description";

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

?>
