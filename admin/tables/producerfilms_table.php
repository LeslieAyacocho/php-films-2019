<div class="column middle">
<table>
        <thead>
            <tr>
            <!-- Table Header -->
            <th>Producer</th>
            <th>Film</th>
            <th style="width: 5%;"></th>
            </tr>
        </thead>
        <tbody>     
        <!-- Table Content -->
            <?php
                while ($row = mysqli_fetch_array($result)) { 
        
            echo "<tr>\n";
            echo "\t<td>".$row['ProducerName']."</td>\n";
            echo "\t<td>".$row['FilmTitle']."</td>\n";

            // echo "\t<a href='edit/edit_producerfilms.php?ProducerID=". $row['ProducerID']."&FilmTitleID=".$row['FilmTitleID']."'class=\"top-menu pull-left\"> <span class=\"fa fa-pencil\" style=\"color: #e3e3e3\"></span></a>\n";
            echo "\t<td><a href='delete/error_delete_producerfilms.php?ProducerID=". $row['ProducerID']."&FilmTitleID=".$row['FilmTitleID']."'class=\"top-menu pull-right\"> <span class=\"fa fa-trash\" style=\"color: #f95959\"></span></a></td>\n";  
            
            echo "</tr>\n"; } 
            echo "</table>\n";
                    mysqli_free_result($result);
                    mysqli_close( $conn );
            ?>
        </tbody>
</table>
  </div>