<div class="column middle">
<table>
        <thead>
            <tr>
            <!-- Table Header -->
            <th style="width: 20%;">Film Title</th>
            <th>Film Story</th>
            <th>Film Release Date</th>
            <th>Film Duration</th>
            <th>Additional Info</th>
            <th>Certificate</th>
            <th>Genre</th>
            <th style="width: 5%;"></th>
            </tr>
        </thead>
        <tbody>     
        <!-- Table Content -->
            <?php
                while ($row = mysqli_fetch_array($result)) { 
        
                echo "\t<td>".$row['FilmTitle']."</td>\n";
                echo "\t<td>".$row['FilmStory']."</td>\n";
                echo "\t<td>".$row['FilmReleaseDate']."</td>\n";
                echo "\t<td>".$row['FilmDuration']."</td>\n";
                echo "\t<td>".$row['FilmAdditionalInfo']."</td>\n";
                echo "\t<td>".$row['Certificate']."</td>\n";
                echo "\t<td>".$row['Genre']."</td>\n";
                echo "\t<td><a href='edit/edit_film.php?FilmTitleID=" .$row['FilmTitleID']."'class=\"top-menu pull-left\"> <span class=\"fa fa-pencil\" style=\"color: #e3e3e3\"></span></a>\n";
                echo "\t<a href='delete/delete_film.php?FilmTitleID=". $row['FilmTitleID']."'class=\"top-menu pull-right\"> <span class=\"fa fa-trash\" style=\"color: #f95959\"></span></a></td>\n";  
            
            echo "</tr>\n"; } 
            echo "</table>\n";
                    mysqli_free_result($result);
                    mysqli_close( $conn );
            ?>
        </tbody>
</table>
  </div>