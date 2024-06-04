<?php

include "Database.php";
include "Persona.php";

$database = new Database;
var_dump($database->connect());

$persona1 = new Persona(41421435, "Lautaro", "Barrera", "1999-07-24");

echo $persona1;