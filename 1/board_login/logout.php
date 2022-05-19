<?php
include_once "db/db_user.php";

session_start();
session_destroy();

header("Location: list.php");