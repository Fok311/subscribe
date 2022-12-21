<?php

function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=Subscribe_Form', 
        'root', 
        'zfIy4pGBfg44X1nE'
    );
}