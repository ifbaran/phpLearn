<?php
    declare(strict_types = 1);

    include 'myFile.php'; // no path
    include 'myFolder/myFile.php'; // relative path
    include 'C:\www\myFolder\myFile.php'; // absolute path

    require 'myFile.php'; // no path
    require 'myFolder/myFile.php'; // relative path
    require 'C:\www\myFolder\myFile.php'; // absolute path


    // When we write include_once or require_once we can use only one php file.
    include_once 'myFile.php'; // no path
    include_once 'myFolder/myFile.php'; // relative path
    include_once 'C:\www\myFolder\myFile.php'; // absolute path

    require_once 'myFile.php'; // no path
    require_once 'myFolder/myFile.php'; // relative path
    require_once 'C:\www\myFolder\myFile.php'; // absolute path


    /* Difference include and require

        The require and include functions do the same task, i.e. includes and evaluates the specified file,
        but the difference is require will cause a fatal error when the specified file location is invalid
        or for any error whereas include will generate a warning and continue the code execution.

        SOURCE = https://stackoverflow.com/questions/2418473/difference-between-require-include-require-once-and-include-once#:~:text=The%20require%20and%20include%20functions,and%20continue%20the%20code%20execution.
        
    */