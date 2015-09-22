
<?php // COMMENT


//show all possible problems
error_reporting (E_ALL | E_STRICT);

//show errors
ini_set ('display_errors', 1);

echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Job Application</title>
<style type="text/css">
<!--
.style2 {color: #000000}
.style4 {font-size: 36px}
.style5 {font-size: 18px}
-->
</style>
</head>

<body>
<form action="handle_form.php" method="post" accept-charset="utf-8">


<h1>&nbsp;</h1>
<table width="1000" border="0" align="center">
  <tr>
    <td width="510" height="78"><div align="center"><span class="style4">Application For Employment</span></div></td>
    <td width="474"><div align="center"><span class="style5">Pre-Employment Questionnaire Equal Opportunity Employer</span></div></td>
  </tr>
</table>
<h1>&nbsp;</h1>
<h1><strong>Personal Information </strong></h1>
<table width="987" height="217" border="0">
  
  <tr>
    <td ><div align="left">First Name: </div></td>
    <th align="left" colspan="3"><input type= "text" name="email2" size="60" /></th>
    <td>Last Name:</td>
    <td colspan="3"><input type= "text" name="email2" size="50" /></td>
    
  </tr>
  <tr>
    <th width="113" scope="row"><div align="left">Present Address: </div></th>
    <th width="180" scope="row"><div align="left">
      <input type= "text" name="email2" size="30" />
    </div></th>
    <td width="32">City: </td>
    <td width="177"><input type= "text" name="password13" size="20" /></td>
    <td width="88">State:</td>
    <td width="115"><input type= "text" name="password24" size="10" /></td>
    <td width="27">Zip:</td>
    <td width="221"><input type= "text" name="password25" size="20" /></td>
  </tr>
  <tr>
    <th scope="row"><div align="left">Permanent Address: </div></th>
    <th scope="row"><div align="left">
      <input type= "text" name="email2" size="30" />
    </div></th>
    <td>City: </td>
    <td><input type= "text" name="password13" size="20" /></td>
    <td>State: </td>
    <td><input type= "text" name="password24" size="10" /></td>
    <td>Zip:      </td>
    <td><input type= "text" name="password26" size="20" /></td>
  </tr>
  <tr>
    <td ><div align="left">Phone Number:</div></td>
    <th scope="row"><div align="left">
      <input type= "text" name="email2" size="12" />
    </div></th>
    <td colspan="3"><div align="center">Secondary Phone Number:
        <input type= "text" name="password14" size="12" />
    </div></td>
    <td colspan="3"><div align="center">Referred By:
        <input type= "text" name="password27" size="30" />
    </div></td>
  </tr>
</table>
<h1><strong>Employment Desired </strong></h1>
<table width="100%" border="0" cellspacing="4" cellpadding="4" align="center">
<td width="28%">Position:
  <input type= "text" name="email" size="40" /></td>
<td width="36%" >Date You Can Start:
  <input type= "text" name="City" size="40" /></td>
<td width="36%">Salery Desired:
  <input type= "text" name="email" size="20" /></td>

<tr><td>
Are You Employed Now: Yes<input name="radiobutton" type="radio" value="radiobutton">No<input name="radiobutton" type="radio" value="radiobutton"></td>
<td>If So, May We Inquire Of Your Former Employer?: Yes<input name="radiobutton" type="radio" value="radiobutton">No<input name="radiobutton" type="radio" value="radiobutton"></td>
<td>Are You Legally Authorized To Work In The U.S.? Yes
  <input name="radiobutton" type="radio" value="radiobutton">
No<input name="radiobutton" type="radio" value="radiobutton"></td>
</tr> 

<td colspan="1">Have You Ever Applied Here Before?: Yes<input name="radiobutton" type="radio" value="radiobutton">No<input name="radiobutton" type="radio" value="radiobutton"></td>
<td >Where:<input type= "text" name="City" size="60" /></td>
<td>When:
  <input type= "text" name="email" size="20" /></td>
</tr>
</table>




<p>&nbsp;</p>
<h1><strong>Education History </strong></h1>
<table width="1008" border="0">
  <tr>
    <th width="287" height="50" scope="col">&nbsp;</th>
    <th width="159" scope="col"><b>Name and Location of School</b></th>
    <th width="144" scope="col"><b>Years Attended</b></th>
    <th width="136" scope="col"><b>Did You Graduate</b></th>
    <th width="248" scope="col"><b>Subjects Studied</b></th>
  </tr>
  <tr>
    <th height="46" scope="row">High School </th>
    <td><input type= "text" name="City" size="30"/></td>
    <td><input type= "text" name="City" size="30"/></td>
    <td><input type= "text" name="City" size="30"/></td>
    <td><input type= "text" name="City" size="30"/></td>
  </tr>
  <tr>
    <th height="39" scope="row">College</th>
    <td><input type= "text" name="City" size="30"/></td>
    <td><input type= "text" name="City" size="30"/></td>
    <td><input type= "text" name="City" size="30"/></td>
    <td><input type= "text" name="City" size="30"/></td>
  </tr>
  <tr>
    <th height="44" scope="row"><p>Trade, Business, or Correspondence School </p>
    </th>
    <td><input type= "text" name="City" size="30"/></td>
    <td><input type= "text" name="City" size="30"/></td>
    <td><input type= "text" name="City" size="30"/></td>
    <td><input type= "text" name="City" size="30"/></td>
  </tr>
</table>

<tr><td>&nbsp;</td></tr>
<h1><strong>General Information </strong></h1>

<table width="1009" border="0">
  <tr>
    <td width="210" height="51">Subject Of Special Study/Research Work </td>
    <td width="789"><input type= "text" name="City" size="125"/></td>
  </tr>
  <tr>
    <td height="41">Special Tranning </td>
    <td><input type= "text" name="City" size="125"/></td>
  </tr>
  <tr>
    <td height="46">Special Skills </td>
    <td><input type= "text" name="City" size="125"/></td>
  </tr>
  <tr>
    <td height="69">U.S. Military or Navel<br>Services and Rank </td>
    <td><input type= "text" name="City" size="125"/></td>
  </tr>
</table>

<h1><strong>Former Employers</strong></h1>
<p class="style2">(List Below Last Four Employers, Starting With The Last One First)</p>
<table width="1003" border="0">
  <tr>
    <th width="93" scope="col" colspan="2">Date Month And Year </th>
    <th width="278" scope="col">Name And Address Of Employer</th>
    <th width="90" scope="col">Salary</th>
    <th width="210" scope="col">Position</th>
    <th width="212" scope="col">Reason For Leaving </th>
  </tr>
  <tr>
    <th scope="row">From</th>
    <th scope="row"><div align="left">
      <input type= "text" name="City2" size="10"/>
    </div></th>
    <td rowspan="2"><input type= "text" name="City" size="50"/></td>
    <td rowspan="2"><input type= "text" name="City" size="15"/></td>
    <td rowspan="2"><input type= "text" name="City" size="35"/></td>
    <td rowspan="2"><input type= "text" name="City" size="35"/></td>
  </tr>
  <tr>
    <th scope="row">To</th>
    <th scope="row"><div align="left"><input type= "text" name="City2" size="10"/></div></th>
  </tr>
  
  <tr>
    <th scope="row">From</th>
    <th scope="row"><div align="left">
      <input type= "text" name="City2" size="10"/>
    </div></th>
    <td rowspan="2"><input type= "text" name="City" size="50"/></td>
    <td rowspan="2"><input type= "text" name="City" size="15"/></td>
    <td rowspan="2"><input type= "text" name="City" size="35"/></td>
    <td rowspan="2"><input type= "text" name="City" size="35"/></td>
  </tr>
  <tr>
    <th scope="row">To</th>
    <th scope="row"><div align="left"><input type= "text" name="City2" size="10"/></div></th>
  </tr>
  
  <tr>
    <th scope="row">From</th>
    <th scope="row"><div align="left">
      <input type= "text" name="City2" size="10"/>
    </div></th>
    <td rowspan="2"><input type= "text" name="City" size="50"/></td>
    <td rowspan="2"><input type= "text" name="City" size="15"/></td>
    <td rowspan="2"><input type= "text" name="City" size="35"/></td>
    <td rowspan="2"><input type= "text" name="City" size="35"/></td>
  </tr>
  <tr>
    <th scope="row">To</th>
    <th scope="row"><div align="left"><input type= "text" name="City2" size="10"/></div></th>
  </tr>

<tr>
    <th scope="row">From</th>
    <th scope="row"><div align="left">
      <input type= "text" name="City2" size="10"/>
    </div></th>
    <td rowspan="2"><input type= "text" name="City" size="50"/></td>
    <td rowspan="2"><input type= "text" name="City" size="15"/></td>
    <td rowspan="2"><input type= "text" name="City" size="35"/></td>
    <td rowspan="2"><input type= "text" name="City" size="35"/></td>
  </tr>
  <tr>
    <th scope="row">To</th>
    <th scope="row"><div align="left"><input type= "text" name="City2" size="10"/></div></th>
  </tr>


</table>
<p>&nbsp;</p>
<h1><strong>References </strong></h1>
<p>(Give Below The Names Of Three Persons Not Related To You, Whom You Have Know At Least One Year)</p>
<table width="990" border="0">
  <tr>
    <td width="220"><div align="center">Name</div></td>
    <td width="512"><div align="center">Address</div></td>
    <td width="120"><div align="center">Business</div></td>
    <td width="120"><div align="center">Years Known </div></td>
  </tr>
  <tr>
    <td><input type= "text" name="City" size="35"/></td>
    <td><input type= "text" name="City" size="85"/></td>
    <td><input type= "text" name="City" size="20"/></td>
    <td><input type= "text" name="City" size="20"/></td>
  </tr>
  <tr>
    <td><input type= "text" name="City" size="35"/></td>
    <td><input type= "text" name="City" size="85"/></td>
    <td><input type= "text" name="City" size="20"/></td>
    <td><input type= "text" name="City" size="20"/></td>
  </tr>
  <tr>
    <td><input type= "text" name="City" size="35"/></td>
    <td><input type= "text" name="City" size="85"/></td>
    <td><input type= "text" name="City" size="20"/></td>
    <td><input type= "text" name="City" size="20"/></td>
  </tr>
</table>

<h1><strong>Authorization</strong></h1>
<p>"I certify that the facts contained in this application are true and complete to the best of my knowledge and understand that, if employed, falsified statements on this application shall be gounds for dismissal.</p>

<p>I authorize investigation of all statements contained herein and the references and employers listed above to give you any and all information concerning my pervious employment and any pertinent information they may have, personal or otherwise, and release the company from all liability for any damage that may result from utilization of such information.</p>

<p>I understand and agree that no representative of the company has any authority to enter into any agreement for employment for any specified period of time, or make any argeement contrary to the foregoing, unless it is in writing and signed by an authorized company representative.</p>

<p>This wavier does not permit the release or use of disability-related or medical information in a manner prohibited by the Americans with Disabilites Act (ADA) and other relevant federal and state laws."</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<table width="1005" border="0" align="center">
  <tr>
    <td width="503"><div align="center">Signature:____________________________________________________</div></td>
    <td width="502"><div align="center">Date:____________________________________________________</div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div align="center">
  <input name="submit" type="submit" value="Send" />
  <input name="submitted" type="hidden" value="true" />
  <input name="form_input_array" type="hidden" value="1" />
</div>
</form>
</body>
</html>

?>
