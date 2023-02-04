<!DOCTYPE html>
<html>
<body>

<p>Select a new car from the list.</p>

<select id="status" name="status" onchange="myFunction()">
  <option value="a">admin</option>
  <option value="e">employee</option>
  <option value="o">owner</option>
</select>


<p id="s"></p>
myFunction();
<?php
echo $status = $_GET["status"];
?>
<script>
function myFunction() {
  var status = document.getElementById("status").value;
  document.getElementById("s").innerHTML = "" + status;
}
</script>

</body>
</html>