<html>
    
<style>
    /* Fullscreen dark background */
body, html {
  margin: 0;
  padding: 0;
  background-color: #020c18;
  height: 100%;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: white;
}

/* Centered content */
.overlay {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

/* Triangle warning background */
.triangle {
  width:300px;
  height: 260px;
  background-color: black;
  clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Exclamation mark inside the triangle */
.exclamation {
  font-size: 120px;
  color: #020c18;
  font-weight: bold;
  position: absolute;
  top: 40px;
}

/* Text Message */
.message {
  text-align: center;
  font-weight: bold;
  font-size: 18px;
  margin-top: 20px;
}


</style>
<body>
  <div class="overlay">
    <div class="warning-icon">
      <div class="triangle">
        <div class="exclamation">!</div>
      </div>
    </div>

    <div class="message">
     <?php
    date_default_timezone_set("asia/calcutta");
$sn="localhost";
$un="root";
$ps="";
$dn="entry";
$con=new mysqli($sn,$un,$ps,$dn);
if ($con->connect_error)
    echo " Connection failed";
else
    echo "<span style='color:yellow'>"  .  date('Y-m-d  H:i:s A'). "<span> "  ."<span style='color: #a0a0a0'>connection established <span> <br>  <span style='color:lime'>".$dn."database <span style='color:red'> Active <span> <span>";
?>
</div>
  

</body>
</html>


