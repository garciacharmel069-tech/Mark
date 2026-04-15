<?php
// Lechon Reservation System Homepage

// Set the timezone
date_default_timezone_set('UTC');

// Get current date and time
$currentDateTime = date('Y-m-d H:i:s');

// HTML structure
echo "<!DOCTYPE html>\n";
echo "<html lang='en'>\n";
echo "<head>\n";
echo "    <meta charset='UTF-8'>\n";
echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
echo "    <title>Lechon Reservation System</title>\n";
echo "</head>\n";
echo "<body>\n";
echo "    <header>\n";
echo "        <h1>Welcome to the Lechon Reservation System</h1>\n";
echo "    </header>\n";
echo "    <main>\n";
echo "        <p>Current Date and Time: $currentDateTime</p>\n";
echo "        <p>Make your reservation for the tastiest Lechon!</p>\n";
echo "    </main>\n";
echo "    <footer>\n";
echo "        <p>&copy; 2026 Lechon Reservation System</p>\n";
echo "    </footer>\n";
echo "</body>\n";
echo "</html>\n";