<table class="table" >
       <tr>
       <th> Id commande </th>
       <th> Prix </th>
       <th> Debut opération </th>
       <th> Fin opération </th>
       </tr>   

       <?php

       while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

       echo "<tr>";
       echo "<td>".$row['']."</td>";
       echo "<td>".$row['Staff_Name']."</td>";
       echo "<td>".$row['Class']."</td>";
       echo "<td><a href='delete.php?id=".$book['Staff_ID']."'>Delete</a></td>";
       echo "</tr>";
       }// end while loop

       while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $token_count = $row["count"];

        $prep  ="SELECT event_id FROM users WHERE email=   '".$_SESSION['email']."'";

        $sql = "DELETE FROM Bookings WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: book.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
    }