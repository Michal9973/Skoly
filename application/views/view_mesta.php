<?php 

if ($results){ ?>
<h1>Města</h1>
<table class="table table-display table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope ="col">Název</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $query = $this->mesta->fetch_by_id();
        
        foreach($results as $data)//$query->result()
        {
            
            echo"<tr>";
            echo"<td>" . $data->id . "</td>";
            echo"<td>". $data->nazev. "</td>";
            echo "</tr>";
        }
        
         ?>
    
        </tbody>
        
</table>
<br>
    <p><?php echo $links; ?></p>
<?php 
 } 
 else { ?>
<h2>Žádné města nebyly nalezeny</h2>
<?php }

?>





