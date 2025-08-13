<?php


/**
 * It is to restrict the instantiation of a class to a single object
 * 
 * Useful when only one object is required across the system
 * 
 *Ensures a single class instance and than is global its point of access
 * 
 * @Traditional Way
 * 
 * $user1 = new User();
 * $user2 = new User();
 * $user3 = new User();
 * $user4 = new User();
 * 
 * 
 * singleton
 * $user = new User();
 * $user1 = User::get_instance();
 * $user2 = User::get_instance();
 * $user3 =User::get_instance();
 */

 
class User {
    private static $instance;

    // Prevent direct creation
    private function __construct() {
        echo "New instance created\n";
    }
    // Singleton method
    public static function get_instance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

// Singleton ব্যবহার
$user1 = User::get_instance();
$user2 = User::get_instance();
$user3 = User::get_instance();

var_dump($user1 === $user2); // true
var_dump($user2 === $user3); // true
