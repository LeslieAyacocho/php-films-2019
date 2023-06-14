<div class="column middle">
<table>
        <thead>
            <tr>
            <!-- Table Header -->
            <th>Producer</th>
            <th>Email Address</th>
            <th>Website</th>
            <th style="width: 5%;"></th>
            </tr>
        </thead>
        <tbody>     
        <!-- Table Content -->
            <?php
                while ($row = mysqli_fetch_array($result)) { 
        
            echo "<tr>\n";
            echo "\t<td>".$row['ProducerName']."</td>\n";
            echo "\t<td>".$row['ContactEmailAddress']."</td>\n";
            echo "\t<td>".$row['Website']."</td>\n";
            
            echo "\t<td><a href='edit/edit_producer.php?ProducerID=". $row['ProducerID']."'class=\"top-menu pull-left\"> <span class=\"fa fa-pencil\" style=\"color: #e3e3e3\"></span></a>\n";
            echo "\t<a href='delete/delete_producer.php?ProducerID=". $row['ProducerID']."'class=\"top-menu pull-right\"> <span class=\"fa fa-trash\" style=\"color: #f95959\"></span></a></td>\n";  
            
            echo "</tr>\n"; } 
            echo "</table>\n";
                    mysqli_free_result($result);
                    mysqli_close( $conn );
            ?>
        </tbody>
</table>
  </div>