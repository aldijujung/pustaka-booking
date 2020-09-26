<?php
header("Content-type: application/vnd-ms-excel"); 
header("Content-Disposition: attachment; filename=$title.xls"); 
header("Pragma: no-cache");  header("Expires: 0"); 
?> 

<style type="text/css">  
    .table-data{  
        width: 100%;  
        border-collapse: collapse; 
    }  
    .table-data tr th,   
    .table-data tr td{  
        border:1px solid black;  
        font-size: 11pt;  
        font-family:Verdana; 
        padding: 10px 10px 10px 10px; 
    }   
    .table-data th{  
        background-color:grey;  
    } 
    h3{  
        font-family:Verdana;  
    }  
</style> 
 
<h3>
     <center>LAPORAN DATA MEMBER</center>
 </h3> 
        <br/>
        <table class="table-data" border=1>  
            <thead> 
                <tr> 
                    <th>No</th>  
                    <th>Nama Anggota</th> 
                    <th>Email</th>    
                    <th>Alamat</th>  
                    <th>Status</th> 
                </tr>  
            </thead>  
            <tbody>   
    <?php    
                    $a = 1;       
                    foreach ($laporan as $l) { ?>        
                    <tr>                    
                        <td><?= $a++; ?></td>  
                        <td><?= $l['nama']; ?></td>      
                        <td><?= $l['email']; ?></td>     
                        <td><?= $l['alamat']; ?></td>    
                        <td>
                           <?php 
                           if ($l['is_active']==1) {
                               echo 'Active';}
                                else {
                                echo'Not Active';
                            }?></td>       
                                </tr>               
      <?php } ?> 
            </tbody> 
        </table> 
  