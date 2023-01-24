<!DOCTYPE html>
<html>
  <head>
    <title>NSLookup</title>
  </head>
  <body>
    <form>
      <label for="domain">Domain:</label>
      <input type="text" id="domain" name="domain">
      <button type="button" onclick="nslookup()">Lookup</button>
    </form>
    <br>
    <div id="result"></div>
  </body>
  <script>
    function nslookup() {
      var domain = document.getElementById("domain").value;
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("result").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "nslookup.php?domain=" + domain, true);
      xhttp.send();
    }
  </script>
</html>
