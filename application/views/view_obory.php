<?php
if($results){ ?>
<h1>Obory</h1>
<table class="table table-display table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope ="col">Název</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $query = $this->obory->fetch_by_id();
        
        foreach($query->result() as $data){
            
            echo"<tr>";
            echo"<td>" . $data->id . "</td>";
            //echo"<td>". $data->nazev. "</td>";
            echo "<td>" . anchor('/obor/' . $data->id, $data->nazev) . "</td>";
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
<h2>Žádné obory nebyly nalezeny</h2>
<?php }

?>
    


