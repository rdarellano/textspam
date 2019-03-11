<html>
  <head>
    <link rel="stylesheet" href="style/styles.css">
    <meta name="viewport" content="width=500, initial-scale=1">
  </head>
 <body> <center> <fieldset>
<?php
$phone = $_POST['phone'];
$carrier = $_POST['carrier'];
$time = $_POST['time'];
$phone=escapeshellarg($phone);
$carrier=escapeshellarg($carrier);

	if(empty($phone ) || empty($carrier )) {
	echo "<h2>You must fill in all fields</h2>\n" ;
	die ("Click Back to start again.");
    }
	echo "<h2>Spam attack sent to:</h2>";
	echo "$phone $carrier 'for' $time 'seconds'";

if ($time < "16") {
	exec ('echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" > /dev/null &');
} elseif ($time < "31") {
	exec ('echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s > /dev/null &');
} else {
	exec ('echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s && echo "LOL" | mail -s "GOTEM!" "'.$phone.'""'.$carrier.'" && sleep 3s > /dev/null &');
}

?>
</center></fieldset></body>
</html>
