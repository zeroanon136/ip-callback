function logIP()
{
     $ipLog="log.txt"; // Your logfiles name here (.txt or .html extensions ok)

     // IP logging function by SP. Agent#01468
     // Originally Published 11/24/16 for use in case #A408HBC

     $register_globals = (bool) ini_get('register_gobals');
     if ($register_globals) $ip = getenv(REMOTE_ADDR);
     else $ip = $_SERVER['REMOTE_ADDR'];
     //Time & date are calcualted in central time
     $date=date ("l dS of F Y h:i:s A");
     $log=fopen("$ipLog", "a+");

     if (preg_match("/\\bhtm\\b/i", $ipLog) || preg_match("/\\bhtml\\b/i", $ipLog))
     {
          fputs($log, "Logged IP address: $ip - Date logged: $date<br>");
     }
     else fputs($log, "Logged IP address: $ip - Date logged: $date\
");

     fclose($log);
}
// Place the below function call wherever you want the script to fire.
logIp();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <!-- The code on line 34 is completely optional, it redirects the user to a site of your choice (in this case google) -->
   <meta http-equiv="refresh" content="0; URL='http://www.google.com/'" />

    </head>
    <body>
        
    </body>
</html>
