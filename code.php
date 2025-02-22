<?php
	/*
	* Author: Dr. Jake Rodriguez Pomperada, MAED-IT, MIT, PHD-TM
	* URL: https://www.jakerpomperada.com
	* Email: jakerpomperada@gmail.com
    * Date: February 22, 2025   Saturday  
	* Description: This is a simple CRUD(Create, Read, Update, Delete) using OOP(Object Oriented Programming) in PHP and MySQL
	*/
	class Users {
		public $db;
		public function __construct() {
			// Mysql connection
			$this->db = new mysqli("localhost", "root","","crud_oop");
		}

		// inserting data
		public function insert($name,$address, $age, $gender) {
			// creating prepared statement
			$sql = $this->db->prepare("INSERT INTO tbl_users (name,address, age, gender) VALUES(?, ?, ?, ?)");
			$sql->bind_param('ssis', $name,$address, $age, $gender);
			return $sql->execute();
		}

		public function getData() {
			$data = array();
			$sql = $this->db->prepare("SELECT * FROM tbl_users");
			$sql->execute();

			// fetch result
			$get_result = $sql->get_result();
			// fetching data and storing to array
			while($res = $get_result->fetch_object()) {
				$data[] = $res;
			}
			// return array
			return $data;
		}

		public function getUserById($id) {
			$data = array();
			$sql = $this->db->prepare("SELECT * FROM tbl_users WHERE id = ?");
			$sql->bind_param('i', $id);
			$sql->execute();

			// fetch result
			$get_result = $sql->get_result();
			// fetching data and storing to array
			$res = $get_result->fetch_object();
			return $res;
		}

		// updating data
		public function updateUserById($data) {
			$sql = $this->db->prepare("UPDATE tbl_users SET name = ?,address = ?, age = ?, gender = ? WHERE id = ?");
			$sql->bind_param('ssisi', $data['name'],$data['address'], $data['age'], $data['gender'], $data['id']);
			return $sql->execute();
		}

		// deleting data
		public function delete($id) {
			$return = false;
			$sql = $this->db->prepare("DELETE FROM tbl_users WHERE id = ?");
			$sql->bind_param('i', $id);
			$sql->execute();

			// Count affected rows
			if($sql->affected_rows > 0) {
				$return = true;
			}
			return $return;
		}
	}