#!/usr/bin/php
<?php 

include 'GenCSVDocumentcloudQuery.php';

// usage
$query = "projectid:7607-poder-legislativo";
$dc = new GenCSVDocumentcloud($query);
$dc->main();

// $ php ./main.php