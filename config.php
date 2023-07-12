<?php

/**
 * Configuration for database connection
 *
 */

$host       = "localhost";
$username   = "purchasing";
$password   = "xXP}#48E3fHrZR@D8TM8";
$dbname     = "po-order";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
