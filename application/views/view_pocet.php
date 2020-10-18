<?php
if($results){?>
<h1>Přijatí žáci - počet</h1>
<table class="table table-display table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope ="col">Obor</th>
            <th scope ="col">Škola</th>
            <th scope ="col">Počet</th>
            <th scope ="col">Rok</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        
        $query = $this->Mpocet->fetch_by_id();
        
        foreach($results as $data){
            
            echo"<tr>";
            echo"<td>" . $data->id . "</td>";
          // echo"<td>". $data->obor. "</td>";
            echo"<td>" . anchor('/obory/'.$data->obor, $data->obor)."</td>";
            //echo"<td>" . $data->skola . "</td>";
           echo"<td>". anchor('/skola/'.$data->skola, $data->skola ). "</td>";
            echo"<td>". $data->pocet. "</td>";
            echo"<td>". $data->rok. "</td>";
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
<h2>Žádní přijatí žáci nebyli nalezeni</h2>
<?php }

?>
    



