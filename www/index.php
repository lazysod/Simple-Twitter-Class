<?php 
include 'app/config.php';

	// Declare Twitter class
    $tweet = new twitter;

    //Post text to twitter
    $response = $tweet->post('HELLO WORLD!!!!');

    // Generate Response
    if($response==200){
      $info_block='Success!';
    }else{
      $info_block='Fail!';
    }
    // Output Response
   	echo $info_block;

   	// GET TWEETS
   	// You can replace TWITTER_USER with '@twitter_user_name of your choice'
   	$result = $tweet->getTweets(TWITTER_USER, 3);
   	echo '<pre>';
   	print_r($result);
   	echo '</pre>';

   	echo $tweer->help();
?>