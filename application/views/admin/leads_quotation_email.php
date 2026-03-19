<?php   
	$mailstr = "";
	$mailstr .= "<html><body><form>";
	$mailstr .= "<table class=text1 width='90%' align=center border='0'  cellpadding=0 cellspacing=1><TR BGCOLOR='#FFFFFF'>
	<tr> <td> <h4> Hello , You Have Received Quotation From MTA</h4> </td> </tr>";
	$mailstr .="
	

    <tr> <td> &nbsp; </td> </tr>
	<tr> <td> &nbsp; </td> </tr>
	<tr> <td>".$MailContent."</td></tr>
	<tr> <td> &nbsp; </td> </tr>
	<tr> <td> &nbsp; </td> </tr>
	
	<tr> <td align=left><b> Thanks and Regards</b> </td> </tr>
	<tr> <td align=left> Manish Kumar <br> 08755380127 <br> info@mytouradvisor.com</td> </tr>
	</TABLE>";
	echo $mailstr .= "</form></body></html>";
?>	