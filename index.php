<html>
<head>
<title>Cloud computing Assignment </title>
<script LANGUAGE="JavaScript" type="text/javascript">
function showInput() {
        document.getElementById('one').innerHTML = 
                    document.getElementById("user_inputone").value;
        document.getElementById('two').innerHTML = 
                    document.getElementById("user_inputtwo").value;
        document.getElementById('three').innerHTML = 
                    document.getElementById("user_inputthree").value;

    }


</script>
</head>
<body>
<h1>A book store.</h1>

<form name="form1">
<p><b>Title:</b> <input id = 'user_inputone'TYPE="TEXT" SIZE="20" NAME="yourname">
</p>
<p><b>Author:</b> <input id = 'user_inputtwo' TYPE="TEXT" SIZE="30" NAME="address">
</p>
<p><b>Quantity: </b> <input id = 'user_inputthree'TYPE="TEXT" SIZE="15" NAME="phone">
</p>
<p><input TYPE="BUTTON" VALUE="Display" onClick="showInput();"></p>


<table>
    <tr>
      <th>Firstname</th>
      <th>Lastname</th> 
      <th>Age</th>
    </tr>
    <tr>
      <td id="one"></td>
      <td id="two"><p></span></p></td>
      <td id="three"><p></span></p></td>
    </tr>
    <tr>
      <td><p></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</form>
</body>
</html>