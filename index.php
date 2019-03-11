<html>
 <head>
	<title>Attack your homie</title>
	<link rel="stylesheet" href="style/styles.css">
	<script src="js/scripts.js"></script>
    <meta name="viewport" content="width=500, initial-scale=1">
 </head>
  <body><br><p>
  <center>Send a short spam attack to your homies. 
  <br>Type in their phone number. Select their phone carrier. Select the duration of the attack. Click on Submit</center>

    <iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe"></iframe>
    <form action="action.php" method="post" onsubmit="return checkForm(this);">
    <div class="submitTop">
    <div class="center">
    <fieldset>
      Phone Number: <input name="phone" type="text" placeholder="xxx-xxx-xxxx"/>
        <br>
  Phone Carrier: <select name="carrier" type="text">
                <option value="@tmomail.net">T-Mobile</option>
                <option value="@txt.att.net">AT&T</option>
                <option value="@messaging.sprintpcs.com">Sprint</option>
                <option value="@myboostmobile.com">Boost</option>
                <option value="@msg.fi.google.com">Google Fi
	        </select>
        <br>
  Attack Duration: <select name="time" type="text">
                <option value="15">15 seconds</option>
                <option value="30">30 seconds</option>
                <option value="60">60 seconds</option>
                </select>
        <center>
  <br> <input type="submit" name="myButton" value="Submit">
   </div> </form></div>
  </body>
</html>
