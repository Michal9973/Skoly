<?php

if ($results){ ?>
<h1>Školy<?php if (isset($mesto)) echo " - " . $mesto->nazev; ?></h1>
<table class="table table-display table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope ="col">Název</th>
            <th scope="col">Město</th>
            <th scope="col">Geo-lat</th>
            <th scope="col">Geo-long</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $this->load->model("skoly");
        $query = $this->skoly->view_by_mesto();//fetch_by_id();
        
        
        foreach($results as $data){
            
            echo"<tr>";
            echo"<td>" . $data->id . "</td>";
            echo"<td>". $data->nazev. "</td>";
            //echo "<td>". $data->mesto.anchor($data->mesto). "</td>";
            echo"<td>". anchor('/mesto/'.$data->mesto,$data->mesto). "</td>";
            echo"<td>". $data->geolat . "</td>";
            echo"<td>". $data->geolong . "</td>";
            //echo "<td>" . anchor('/mesta/' . $data->nazev) . "</td>";
           
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
<h2>Žádné školy nebyly nalezeny</h2>
<?php }

?>

