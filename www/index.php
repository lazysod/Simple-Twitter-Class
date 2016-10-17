<?php 
include 'app/config.php';

	// Declare Twitter class
    $tweet = new twitter;

    //Post text to twitter
    $response = $tweet->post('HELLO WORLD?!');

    // Generate Response
    if($response==200){
      $info_block='Success! We posted to Twitter';
    }else{
      $info_block='Fail! - OOps did not post this time.';
    }
    // Output Response 
   	echo $info_block;

   	// GET TWEETS
   	// You can replace TWITTER_USER with '@twitter_user_name of your choice'
   	$result = $tweet->getTweets(TWITTER_USER, 3);
   	echo '<pre>';
   	print_r($result);
   	echo '</pre>';

   	// Output help file
   	echo $tweet->help(); 
?>