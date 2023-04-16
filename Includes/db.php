<?php
$conn = new mysqli("localhost", "betteras_intern", "betteras_logbook", "betteras_logbook");
if ($conn) {
    echo("database connected");
}else echo("error");
