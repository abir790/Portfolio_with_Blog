<?php

//$conn=new mysqli('localhost','root','','abir_blog'); // sudhu atao rakhte pari othoba akta function create kore rakhte pari
                                                    // function create korle include toh kortei hobr with $conn=functionName(); call korte hoeb

function connectDB(){
	$conn=new mysqli('localhost','root','','abir_blog');
	return $conn;

}                                                    



 ?>