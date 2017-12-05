<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<title>staff</title>
<link rel="stylesheet" href="">
<script src=""></script>
</head>
<body>

<div class="w3-container w3-content">
<h1>staff</h1>
<div id="Form01" class="w3-container w3-light-grey w3-padding-large w3-margin-bottom" appml-data="coneect.php?model=model_staffform" appml-controller="myFormController" style="display:none;">
  <div appml-include-html="inc_formcommands.htm"></div>
  <p>
    <label>Last Name:</label>
    <input id="LastName" class="w3-input w3-border">
  </p>
  <p>
    <label>First Name:</label>
    <input id="FirstName" class="w3-input w3-border">
  </p>
  <p>
    <label>Date of Birth:</label>
    <input id="BirthDate" class="w3-input w3-border">
  </p>
  <p>
    <label>Photo:</label>
    <input id="Photo" class="w3-input w3-border">
  </p>
  <p>
    <label>Notes:</label>
    <input id="Notes" class="w3-input w3-border">
  </p>
</div>

<div appml-data="coneect.php?model=model_stafflist">
<div appml-include-html="inc_listcommands.htm"></div>
<div appml-include-html="inc_filter.htm"></div>
<table class="w3-table-all">
  <tr>
    <th></th>
    <th>Last Name</th>
    <th>First Name</th>
    <th>Date of Birth</th>
  </tr>
  <tr appml-repeat="records">
   <td style="cursor:pointer" onclick="appml('Form01').run({{staffID}})">&#9998;</td>
    <td>{{LastName}}</td>
    <td>{{FirstName}}</td>
    <td>{{BirthDate}}</td>
  </tr>
</table>
</div>
</div>

<script>
function myFormController($appml) {
  if ($appml.message == "ready") {return -1;}
  if ($appml.message == "loaded") {
    document.getElementById("Form01").style.display = "";
  }
}
</script>

</body>
</html>