<?php
if(isset($_POST['submit']))
{
	

   $to = "rahul@sparkinfosystems.com";

   $subject = "Enquiry Form";

   $message = "Hi,<br>Sir/Madam";

   $message .= "<br>Greetings";

   $message .= "<br><br>

   <table width='300' cellspacing='0' cellpadding='4' border='1'>

	   <tbody>

			<tr>

				<td align='right'>Name :</td>

				<td>".$_REQUEST["userName"]."</td>

			</tr>
<tr>

				<td align='right'>Email Id :</td>

				<td>".$_REQUEST["userEmail"]."</td>

			</tr>
			<tr>

				<td align='right'>Mobile No. :</td>

				<td>".$_REQUEST["userPhone"]."</td>

			</tr>


		</tbody>

	</table>";

   $header = "MIME-Version: 1.0\r\n";

   $header .= "Content-type: text/html\r\n";

   $retval = mail ($to,$subject,$message,$header);

   if( $retval == true )

   { 

   	header("Location: thankyou.html");

   }

   else

   { 

   ?>

    <script language="javascript">

	alert("Sorry! Form Not Submited.");

	window.location.href="<?php echo $_SERVER['HTTP_REFERER'];?>";

	</script>

   <?php

   }	

}

?>