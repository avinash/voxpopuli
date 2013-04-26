<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Register</title>
<style type="text/css">
<!--
.style52 {color: #98AFEA}
.style3 {font-family: Arial, Helvetica, sans-serif}
.bot {COLOR:#BDB39C;
		font-family:tahoma;
		font-size:11px;	 
}
.style53 {color: #666666}
.style54 {color: #0000FF}
-->
</style>
<script language="JavaScript">


function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

/*
	This function is called when
	the 'register' button is pressed
	Output : true if all input are correct, false otherwise
*/

</script>

<script type="text/javascript">
<!--

function validate_form ( )
{
    valid = true;

    if ( document.register.txtloginname.value == "" )
    {
        
        alert ( "Please fill in your loginname." );
        
        document.register.txtloginname.focus ( );
        
        valid = false;
       
      
    
    }

   
else if ( document.register.txtname.value == "" )
    {
        alert ( "Please fill in your name." );
		document.register.txtname.focus ( );
        
        valid = false;
    }

    


else if ( document.register.txtsurname.value == "" )
    {
        alert ( "Please fill in your surname." );
		document.register.txtsurname.focus ( );
        
        valid = false;
    }



else if ( document.register.txtpseudo.value == "" )
    {
        alert ( "Please fill in your pesudo." );
		document.register.txtpseudo.focus ( );
         valid = false;
    }

   

else if ( document.register.txtpassword.value == "" )
    {
        alert ( "Please fill in a password." );
		document.register.txtpassword.focus ( );
        
        valid = false;
    }
else if ( document.register.txtemail.value == "" )
    {
        alert ( "Please fill in your email address." );
		document.register.txtemail.focus ( );
        valid = false;
    }
  
else if ( document.register.terms.checked == false )
    {
        alert ( "Please check the Terms & Conditions." );
		document.register.checkbox.focus ( );
        
        valid = false;
    }


 return valid;


}




//-->
</script>



</head>

<body background="images/bg.gif">
<div align="center">
  <table width=992 border=0 cellpadding=0 cellspacing=0 bgcolor="#666666">
    <!--DWLayoutTable-->
    <tr>
      <td width="992" height="205" valign=top bgcolor="#2267B5"><p align="left"><img src="images/top1.jpg" width="684" height="205"><br>
      </p></td>
    </tr>
    <tr>
      <td height="27" valign=top>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="23">
          <param name="BGCOLOR" value="">
          <param name="movie" value="btindex.swf">
          <param name="quality" value="high">
          <embed src="btindex.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="23" ></embed>
        </object>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div align="left"><span class="style52">        </span></div></td>
    </tr>
  </table>
  <span class="style52"><img src="images/top2.gif" width="992" height="19"></span>
  <table width="991" height="447" border="1" bgcolor="#FFFFFF">
    <tr>
      <td width="981" height="443"><div align="center">
        <table width="674" border="0">
          <tr>
            <td width="668"><div align="center" class="style15">
                <h3 align="center" class="style54"> Registration Form </h3>
				<?php
				  if($_POST['error'])
				  {
				  echo '<p align="center">	 <h3>' .$_POST['error']	 .'</h3>	</p>	';
				}
				?>
                
                    <form name="register" method="post" action="insert.php" onsubmit="document.getElementById('txtname').disabled=false;return validate_form();">
		
                    <p align="left" class="style16"><strong>Login name : &nbsp;&nbsp;&nbsp; &nbsp;   <strong><strong>

                    <input name="txtloginname" type="text" id="txtloginname" size="20" value="<?php echo $_POST["txtloginname"]?>" >

                    </strong></strong><span class="style53">*You will use your loginname to login to the system </span></strong></p>

                    <p align="left" class="style16"><strong>Name : &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;   <strong><strong><strong> <strong><strong><strong><strong>
                    
                    <input name="txtname" type="text" id="txtname"  size="20" value="<?php echo $_POST["txtname"]?>">

                    </strong></strong></strong></strong></strong></strong></strong></strong></p>

                    <p align="left" class="style16"><strong>Surname :</strong>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>
                    
                    <input name="txtsurname" type="text" id="txtsurname" size="20" value="<?php echo $_POST["txtsurname"]?>">
</strong></p>
                    <p align="left" class="style16"><strong>Pseudo : </strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  
                    
                    <input name="txtpseudo" type="text" id="txtpseudo" size="20" value="<?php echo $_POST["txtpseudo"]?>">
                    
                    <span class="style53"><strong>*You will use your pseudo to post comments</strong></span></p>
                  
                    <p align="left" class="style16"><strong>Password : &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;   <strong>
                    
                    <input name="txtpassword" type="password" id="txtpassword" size="20" value="<?php echo $_POST["txtpassword"]?>">
                    
                    <span class="style53">*Your password is required for confidentiality </span></strong></strong></p>
                    
                    <p align="left" class="style16"><strong>Email address :&nbsp;</strong>
                    
                    <input name="txtemail" type="text" id="txtemail"size="20"  value="<?php echo $_POST["txtemail"]?>">
                    
                    <span class="style53"><strong> *We will send you an email for password confirmation</strong></span></p>
                  
                    <p align="center" class="style16">                    
                    
                    <input type="checkbox" name="terms" value="terms" id="checkbox">
                    
                    I accept with the terms and conditions of the website </p>
                    
                    <p align="center" class="style3"> 
                    
		    <input type="submit" value="register" name="register">
                    
		    <input type="reset" value="cancel" name="cancel">
                    
                    </p>
                
                    </form>
                
<p>&nbsp;</p>
            </div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
        <p>&nbsp;</p>
      </div></td>
    </tr>
  </table>
  <table width="990" height="63" border="0" background="images/bg_bot.gif">
    <tr>
      <td height="59"><div align="center">
          <div>
            <div align="center"></div>
          </div>
          <div style="color:#999999;padding-top:0px">Copyright &copy; 2008- Vox Populi, Inc. All rights are reserved</div>
      </div></td>
    </tr>
  </table>
  <p class="style52">&nbsp;
  </p>
  <p class="style52">&nbsp;</p>
  <p class="style52">&nbsp;
  </p>
  <p class="style52">&nbsp;</p>
  <p class="style52">&nbsp;</p>
  <p class="style52">&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>
