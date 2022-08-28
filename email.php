<?php
  require 'vendor/autoload.php';
  use \Mailjet\Resources;
  function sender($email){
  $mj = new \Mailjet\Client('d723ca51192f011a577e3bc37cef491a','95f0e57488e2d7d4a31ec4f9a465bc0d',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "saurabh45215@gmail.com",
          'Name' => "saurabh"
        ],
        'To' => [
          [
            'Email' => "$email",
            'Name' => "saurabh"
          ]
        ],
        'Subject' => "Greetings from Mailjet.",
        'TextPart' => "My first Mailjet email",
        'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
}
?>
