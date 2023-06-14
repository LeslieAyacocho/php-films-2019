 <div class="column middle">
<table>
        <thead>
            <tr>
            <!-- Table Header -->
            <th>Actor</th>
            <th>Character Name</th>
            <th>Character Description</th>
            <th>Film Title</th>
            <th>Role Type</th>
            <th style="width: 5%;"></th>
            </tr>
        </thead>
        <tbody>     
        <!-- Table Content -->
            <?php
                while ($row = mysqli_fetch_array($result)) { 
        
                    echo "\t<td>".$row['ActorFullName']."</td>\n";
                    echo "\t<td>".$row['CharacterName']."</td>\n";
                    echo "\t<td>".$row['CharacterDescription']."</td>\n";
                    echo "\t<td>".$row['FilmTitle']."</td>\n";
                    echo "\t<td>".$row['RoleType']."</td>\n";

                    echo "\t<td><a href='edit/edit_actorroles.php?ActorID=" .$row['ActorID']."&FilmTitleID=" .$row['FilmTitleID']."'class=\"top-menu pull-left\"> <span class=\"fa fa-pencil\" style=\"color: #e3e3e3\"></span></a>\n";
                    echo "\t<a href='delete/delete_actorroles.php?ActorID=". $row['ActorID']."&FilmTitleID=".$row['FilmTitleID']."'class=\"top-menu pull-right\"> <span class=\"fa fa-trash\" style=\"color: #f95959\"></span></a></td>\n";  
            
            echo "</tr>\n"; } 
            echo "</table>\n";
                    mysqli_free_result($result);
                    mysqli_close( $conn );
            ?>
        </tbody>
</table>
  </div>