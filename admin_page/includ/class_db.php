<?php 

	if(!class_exists('DB')){

		class DB{
		public function __construct(){
				$mysqli = new mysqli("localhost", "root", "", "heat post");
			}
			
		}
	}