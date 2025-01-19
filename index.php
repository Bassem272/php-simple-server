<?php
// Get the port assigned by Railway, default to 8080 if not found
$port = getenv('PORT') ?: 8080;

// Start a simple PHP server on the correct port
echo "Hello from PHP server!";

// A very basic response to check if the server is working
echo "Hello from PHP server!";
