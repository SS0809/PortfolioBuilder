<?php
$servername = "172.20.0.10";
$username = "root";
$password = "root";
$dbname = "music23";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO registered_users (id, user_name, display_name, password, email, points, suggest, filename, sudo, chart_data, pay, goal, sabout, about, youtube, insta, user_browser, pointa, pointb, lastpoint, timestampp, streak, lasttime) VALUES (1, 'devil', 'Saurabh Saraswat', '5a12e5340aa481518641a39dcc6a7554', 'saurabh45215@gmail.com', 2216, '', 'https://ucarecdn.com/3396501d-4c27-4465-bf4b-e62f54f37c93/', '1', '10203040506070', 0, 'Developer && Dreamer', 'Eat phir repeat ', 'Developing php and myself', NULL, NULL, 'a:1:{i:0;s:113:\"Mozilla/5.0 (Linux; Android 11) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Mobile Safari/537.36\";}', NULL, NULL, '/view/super.php?page=4?cc=0', 1670726624, 0, 1670726624);";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>