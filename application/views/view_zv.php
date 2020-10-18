<?php
if($results){?>
<h1>Zpětné vazby</h1>
<table class="table table-display table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope ="col">Text</th>
            <th scope ="col">Datum</th>
            
        </tr>
        </thead>
        <tbody>
        <?php 
        $query = $this->Mzv->fetch_by_id();
        
        foreach($query->result() as $data){
            
            echo"<tr>";
            echo"<td>" . $data->id . "</td>";
            echo"<td>". $data->text. "</td>";
            echo"<td>". $data->datum. "</td>";
           
        }
        
         ?>
    
        </tbody>
        
</table>
<br>
    <p><?php echo $links; ?></p>
<?php 
 } 
 else { ?>
<h2>Žádné zpětné vazby nebyly nalezeny</h2>
<?php }

?>
    


