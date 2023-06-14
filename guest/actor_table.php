  <div class="column middle">
<table>
        <thead>
            <tr>
            <!-- Table Header -->
            <th>Actor Names</th>
            </tr>
        </thead>
        <tbody>     
        <!-- Table Content -->
            <?php
                while ($row = mysqli_fetch_array($result)) { 
        
            echo "<tr>\n";
            echo "\t<td><a class= 'link' href='view/view_actor_details.php?ActorID=".$row['ActorID']."'>".$row['ActorFullName']."</a></td>\n";
            echo "</tr>\n"; } 
            echo "</table>\n";
                    mysqli_free_result($result);
                    mysqli_close( $conn );
            ?>
        </tbody>
</table>
  </div>