<?php
	interface IUser
	{
  		function getName();
	}
 
	//Variation 1
	class User implements IUser
	{
  		public function __construct( $id ) { }
 
  		public function getName()
 		{
    		return "Kisiara Francis";
  		}
	}
 
	class UserFactory
	{
  		public static function Create( $id )
  		{
    		return new User( $id );
  		}
	}
 
	$user = UserFactory::Create( 1 );
	echo $user->getName()."\n" ;
 
	// Variation 2 - Remove comments to see it in action
	// class User implements IUser
	// {
 //  		public static function Load( $id ) 
 //  		{
 //        	return new User( $id );
 //  		}
 
 //  		public function __construct( $id ) { }
 
 //  		public function getName()
 //  		{
 //    		return "Kisiara Francis";
 //  		}
	// }
 
	// $user = User::Load( 1 );
	// echo( $user->getName()."\n" );
?>