<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Overzicht product bestellen</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <br><br>
        <?php
    
        function create_table($dataset, $from){
       
        if(is_array($dataset) && !empty($dataset)){ 
            // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
            $key = $from."code";
          
            ?>

            <table class="table table-striped">
            <caption style="caption-side:top"><h2>Overzicht bestelling</h2></caption>
            
            <?php 
            // DE KOLOMNAMEN WORDEN OPGEHAALD
            $columns = array_keys($dataset[0]);
            ?>
            
            <tr>
                <?php foreach($columns as $column){ ?>
                    <th>
                        <strong>
                            <?php echo $column?>
                        </strong>
                    </th>
                <?php } ?>
                <th colspan="2">action</th>

            </tr>
                <?php foreach($dataset as $rows=>$row){ 
                    $row_id = $row[$key]; ?>
                    <tr>
                    <?php foreach($row as $rowdata){ ?>
                        
                        <td><?php echo $rowdata; ?></td>
                    <?php } ?>
                    
                    <td>
                        <a href="delete-bestelling-overzicht.php?bestel_code=<?php echo trim($row['bestel_code']); ?>"
                        class="btn btn-primary" >Delete</a>
                    </td>
                   
                  
                    </tr>
            <?php }
         }
    }?>
    </table>

    <br>
    
    </body>
    
</html>