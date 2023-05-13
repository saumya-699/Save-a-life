<div class="box">

<!-- <form action="Enter Blood testing result1.php" method="POST"> -->

<?php

if ($result->num_rows > 0) {

  echo  "<div class='tab'>";
  echo  "<table border=1>" . "<tr>" . "<th style='text-align:center;'>" . "Donation Date" . "</th>" . "<th style='text-align:center;'>" . "Batch Number" . "</th>" . "<th style='text-align:center;width:120px;'>" . "Donar ID" . "</th>" . "<th>" . "Donation ID" . "</th>" . "<th>" . "Blood Packet ID" . "</th>" . "<th>" . "Action" . "</th>" . "</tr>";
  echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=8'>" . "</td>" . "</tr>";
  while ($row = $result->fetch_assoc()) {


    echo  "<tr>" . "<td>" . $row["Donation_date"] . "</td>" . "<td>" . $row["Batch"] . "</td>" . "<td>" . $row["Donor_Id"] . "</td>" . "<td>" . $row["Donation_ID"] . "</td>" . "<td>" . $row["packet_no"] .  "</td>";
    echo "<td class='tb'><form method='POST' action ='Enter Blood testing result1.php'>
       <input type=hidden name=DID value=" . $row["Donor_Id"] . " >
       <input type=hidden name=PID value=" . $row["packet_no"] . " >
       <input type=hidden name=BID value=" . $row["Batch"] . " >
       <button type=submit value=add name=add  class='fp'><i class='fa-solid fa-pen-to-square'></i></button>
      </form>  </td>";

    echo "</div>";
    echo "</tr>";

    echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=8'>" . "</td>" . "</tr>";
  }
  echo  "</font>";
  echo  "</font>";
  echo "</table>";
} else {

  echo "no results";
}

$conn->close();
?>
</div>
<style>
table {
  width: 750px;
  height: 15px;
  border-collapse: collapse;
  margin-top: 40px;
  margin-left: 20px;
  border: 0px transparent;
}

h1 {

  margin-top: 70px;
  margin-left: 320px;
  margin-bottom: 100px;
}



th {

  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  text-align: center;
  padding-top: 25px;
  padding-bottom: 25px;
  padding-left: 20px;
  padding-right: 10px;
  border: 0px transparent;

}



td {
  text-align: center;
  padding: 1px;


}



.midiv {

  margin-left: 150px;
  margin-bottom: 120px;
  padding: 15px 10px 30px 20px;
  margin-top: -100px;
  outline: none;
  width: 774.5px;
}









.f2 {

  margin-left: 50px;
  margin-top: -100px;
  background-color: transparent;
  border: none;
  cursor: pointer;
  margin-bottom: 0px;


}


.f1 {

  background-color: transparent;
  margin-left: 10px;
  margin-right: 20px;
  margin-bottom: 10px;
  margin-top: 10px;
  border: none;
  cursor: pointer;


}

.fp {
  margin-top: 0px;
  margin-left: 30px;
  margin-bottom: -100px;
  background-color: transparent;
  border: none;
  cursor: pointer;
  font-size: 20px;
  padding: 10px 20px;
}

.tb {
  display: inline-flex;
  justify-content: space-evenly;
  flex-wrap: nowrap;
  align-items: baseline;
  flex-direction: row;
}

.tab {

  background-color: #F5F5F5;
  margin-top: -50px;
  margin-left: 60px;
  padding-left: 0px;
  padding-right: 0px;



}


.ta {

  background-color: #F5F5F5;
  margin-top: 60px;
  margin-bottom: 0px;
  margin-left: 370px;
  margin-right: 119px;
  padding-left: 20px;

}



tr {

  background-color: white;


}

.visible {
  cursor: pointer;


}

.layout {
  background-color: #d9dbdb;
}
.icon-button__badge {
  position: absolute;
  top: 7px;
  right: 220px;
  width: 15px;
  height: 18px;
  background: red;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
}



.icon-button__badge1 {
  position: absolute;
  top: 0;
  right: 228;
  width: 15px;
  height: 18px;
  background: green;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
}

.icon-button__badge2 {
  position: absolute;
  top: 4px;
  right: 239;
  width: 15px;
  height: 18px;
  background: purple;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
}

.icon-button__badge3 {
  position: absolute;
  top: 15;
  right: 235px;
  width: 15px;
  height: 18px;
  background: red;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
}


.icon-button__badge5 {
  position: absolute;
  top: 115;
  right: 235px;
  width: 15px;
  height: 18px;
  background: purple;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
}

</style>


</div>
</main>

</div>
</div>
<!-- partial -->
<script src='https://unpkg.com/@popperjs/core@2'></script>
<script src="./script.js"></script>

</body>

</html>