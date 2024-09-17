<?php

$editFormAction = $HTTP_SERVER_VARS['PHP_SELF'];

if ((isset($HTTP_POST_VARS["MM_insert"])) && ($HTTP_POST_VARS["MM_insert"] == "form1")) {
 

/* To send HTML mail, you can set the Content-type header. */
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

$message = "Contact Name: " . $HTTP_POST_VARS['contactname'] . "<br><br>";
$message .= "Company Name: " .  $HTTP_POST_VARS['companyname'] . "<br>";
$message .= "Telephone: " . $HTTP_POST_VARS['telephone'] . "<br><br>";
$message .= "Website: " . $HTTP_POST_VARS['website'] . "<br><br>";
$message .= "Email: " . $HTTP_POST_VARS['email'] . "<br><br>";
$message .= "Message: " . $HTTP_POST_VARS['message'] . "<br>";

$headers .= "From: Lease One Contact Form <website@lease-one.com>\r\n";

$success = mail("david@lease-one.com", "Prospective Client", $message , $headers);
if ($success){ 
	echo "
		<script language='JavaScript' type='text/JavaScript'>alert('Thank you for your request.  Lease One Systems will contact you shortly.')</script>
		 "; 
} 
else{ 
    echo "<script language='JavaScript' type='text/JavaScript'>alert('Error processing request.  Please call or email Lease One Systems directly.')</script>\n"; 
}

}
?>
<html>

<head>
	<title>Lease-One</title>
	<link rel="stylesheet" type="text/css" href="../Template018.css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body leftmargin="0" topmargin="0" link="#F4B500" vlink="#F4B500" alink="#F4B500">
	<p align="center" class="NoBreakBeforeAfter">
		
<table cellpadding="0" cellspacing="0" width="752">
  <tr>				
    <td><img width="5"></td>
	<td><img src="../images/Logo.gif" border="0" WIDTH="44" HEIGHT="64"></td>
	<td width="100%" align="Left"><img src="../images/YourCompanyName.jpg" border="0" WIDTH="256" HEIGHT="64"></td>
	<td class="Back2"><img src="../images/SeparadorCol1.gif" border="0" WIDTH="21" HEIGHT="64"></td>				    			
    <td class="Back2"><img width="139" height="0"></td>
  </tr>
</table>
		
<table class="TopBarBack Center" cellpadding="0" cellspacing="0"  height="25" width="752">
  <tr>				
    <td width="290" height="25"></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>							
 	<td width="10" height="25"></td>
  </tr>
</table>

<table class="Back1 Center" cellpadding="0" cellspacing="0" width="752">
  <tr>
	<td><img src="../images/Main_b.jpg" width="750" height="216"></td>
  </tr>
</table>

<table class="Back2 Center" cellpadding="0" cellspacing="0" width="752">
  <tr>
	<td valign="top" class="BottomCol1Back">
	
		<iframe scrolling="no" frameborder="0" width="147" height="260" src="../menu.htm"></iframe>
		<img src="../_blank.gif" width="147" height="0">		
	</td>
	<td valign="top">
	
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td><img src="../images/Main3.jpg" width="10" height="18"></td>
			</tr>
		</table>
		
	</td>
	<td valign="top" width="100%">
		
		<table cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td><img src="../images/Main4.jpg" width="120" height="18"></td>
				
          <td align="right"><div align="left"><img src="../images/title_onlineforms.jpg" WIDTH="199" HEIGHT="15"></div></td>
			</tr>
		</table>
		<table cellpadding="0" cellspacing="0" width="100%">
			<tr>
				
          <td valign="top">&nbsp;</td>
				
          <td><img src="../_blank.gif" width="10" height="8"></td>
				
          <td valign="top"> <p class="Justified">&nbsp;</p>
            <p align="center">The following Adobe documents may be printed out 
              and faxed to Lease One Systems.</p>
            <p align="center"> Fax #: (314) 645-2663<br>
            </p>
            <p align="center">&nbsp; </p>
            <p><a href="Lease Application LOS.pdf" target="_blank">Lease Application 
              (PDF - 26 Kb)</a></p>
            <p>&nbsp;</p>
            <p><a href="Authorization%20to%20Obtain%20Credit%20Information-2.pdf" target="_blank">Authorization 
              to Obtain Credit Information (PDF - 23 Kb)</a></p>
            <p>&nbsp;</p>
            <p><a href="BANKCRDT-MSW.pdf" target="_blank">Bank Credit Reference Request (PDF - 
              33 Kb)</a></p>
            <p>&nbsp;</p>
            <p><a href="TRADE.REF.pdf" target="_blank">Trade Credit Reference Request (PDF - 25 
              Kb)</a></p>
            <p>&nbsp;</p>
            <!--<p><a href="Vendor%20Info%20Form.pdf" target="_blank">Vendor Information (PDF - 22 Kb)</a></p>
              <p>&nbsp; </p>-->
             <p><a href="Vendor_Info_Form.pdf" target="_blank">Vendor Info Form (PDF - 71 Kb)</a></p>
            <p>&nbsp;</p>
            <p><a href="Personal%20Financial%20Statement%20LOS.pdf" target="_blank">Personal Financial Statement LOS (PDF - 23 Kb)</a></p>
            <p>&nbsp; </p>
             <p><a href="personal-fin.pdf" target="_blank">Personal Financial Statement  (PDF - 248 Kb)</a></p>
           
            <p>&nbsp; </p>
            <p class="title">&nbsp;</p>
            <p class="title"><a href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank"><img src="get_adobe_reader.gif" width="88" height="31" border="0"></a></p>
            <p class="title">&nbsp;</p>
              
            <p>You may also submit the form below and a representative will contact 
              you shortly.</p>
            <p><br>
              <br>
            </p>
            <form method="POST" action="<?php echo $editFormAction; ?>" name="form1">
              <div align="center"> 
                <table border="0" cellpadding="0" cellspacing="0" bgcolor="#003333">
                  <tr> 
                    <td> <table width="100%" border="0" cellpadding="0" cellspacing="5" bgcolor="#23415d">
                        <tr class="tah11"> 
                          <td> <div align="right">Contact Name*: </div></td>
                          <td> 
<input  name="contactname" type="text" id="contactname" size="30" maxlength="50"></td>
                        </tr>
                        <tr class="tah11"> 
                          <td height="24"> <div align="right">Name of Company: 
                            </div></td>
                          <td> <input name="companyname" type="text" id="companyname" size="30" maxlength="50"></td>
                        </tr>
                        <tr class="tah11"> 
                          <td> <div align="right">Telephone: </div></td>
                          <td> <input name="telephone" type="text" id="telephone" size="30" maxlength="50"></td>
                        </tr>
                        <tr class="tah11"> 
                          <td> <div align="right">Web site: </div></td>
                          <td> <input name="website" type="text" id="website" size="30" maxlength="50"></td>
                        </tr>
                        <tr class="tah11"> 
                          <td> <div align="right">Email*: </div></td>
                          <td> <input name="email" type="text" id="email" size="30" maxlength="50"></td>
                        </tr>
                        <tr class="tah11"> 
                          <td valign="top"> <div align="right">Your message*: 
                            </div></td>
                          <td> <textarea name="message" cols="30" rows="4" id="message"></textarea></td>
                        </tr>
                        <tr class="tah11"> 
                          <td> <div align="right"></div></td>
                          <td>* Required field</td>
                        </tr>
                        <tr class="tah11"> 
                          <td> <div align="right"></div></td>
                          <td> <input name="logdate" type="hidden" id="logdate"></td>
                        </tr>
                        <tr class="tah11"> 
                          <td height="13" colspan="2"><table width="100%" border="0" cellspacing="15" cellpadding="0">
                              <tr> 
                                <td> <div align="right"> 
                                    <input type="submit" name="Submit" value="Submit">
                                  </div></td>
                                <td> <div align="left"> 
                                    <input type="reset" name="Submit2" value="Reset">
                                  </div></td>
                              </tr>
                            </table></td>
                        </tr>
                      </table></td>
                  </tr>
                </table>
              </div>
              <input type="hidden" name="MM_insert" value="form1">
            </form>
            <p align="center">
              <?php require_once('../footer.php'); ?>
            </p></td>
			</tr>
		</table>
		
		
    </td>
	<td><img src="../_blank.gif" width="10" height="0"></td>
	<td valign="top" class="BottomCol3Back">
		
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td ><img src="../_blank.gif" width="5" height="0"></td>
			</tr>			
		</table>
				
	</td>
	<td class="Back1"><img src="../_blank.gif" width="10" height="0"></td>
	<td valign="top" class="Back1">
		
		<table cellpadding="0" cellspacing="0">
			<tr>
				
          <td height="100%" align="left" valign="top">					
            <iframe frameborder="0" scrolling="no" width="100%" height="300" src="../glossary/glossary.html"></iframe>      					
		</td>
			</tr>
			<tr>
				<td><img src="../_blank.gif" width="111" height="0"></td>
			</tr>
		</table>
				
	</td>
	<td class="Back1"><img src="../_blank.gif" width="10" height="0"></td>
  </tr>
</table>
<table class="BottomBarBack Bottom" cellpadding="0" cellspacing="0" width="752">
  <tr>
	<td><img src="../images/BottomBarraBack.jpg" WIDTH="16" HEIGHT="9"></td>
  </tr>
</table>

</body>

</html>



