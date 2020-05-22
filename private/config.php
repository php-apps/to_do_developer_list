<?php
// autoload classes

spl_autoload_register(function ($class_name) {
    require "classes/{$class_name}.class.php";
});

const HOST = 'localhost';
const USER = 'root';
const PASS = '';
const DB   = 'to_do_developer_list'; 