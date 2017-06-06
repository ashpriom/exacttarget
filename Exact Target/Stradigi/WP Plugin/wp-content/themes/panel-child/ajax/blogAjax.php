<?php
require_once dirname(__FILE__).'/../include/getFunctions.php';

$action = $_POST['action'];
switch($action){
    case 'blogTagFilter':
        break;
    case 'blogAll':
        return getAllBlogs_paginated();
        break;
}


