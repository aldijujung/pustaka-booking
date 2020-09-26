<!-- Begin Page Content -->
<div class="container-fluid"> 
 
    <?= $this->session->flashdata('pesan'); ?>    
    <div class="row">     
        <div class="col-lg-12">      
       <?php if(validation_errors()){?>    
            <div class="alert alert-danger" role="alert">      
           <?= validation_errors();?>              
            </div>     
        <?php }?> 
                
            <table class="table table-hover">      
                <thead>                
                    <tr>           
                        <th scope="col">#</th>    
                        <th scope="col">Nama Anggota</th>    
                        <th scope="col">Email</th>    
                        <th scope="col">Alamat</th>   
                        <th scope="col">Status</th>          
                    </tr>             
                </thead>            
                <tbody>  
                   <?php    
                    $a = 1;       
                    foreach ($anggota as $l) { ?>        
                    <tr>                    
                        <th scope="row"><?= $a++; ?></th>  
                        <td><?= $l['nama']; ?></td>      
                        <td><?= $l['email']; ?></td>     
                        <td><?= $l['alamat']; ?></td>    
                        <td>
                           <?php 
                           if ($l['role_id']==1) {
                               echo '<i class="btn btn-outline-warning btn-sm">Admin</i>';}
                                else {
                                echo'<i class="btn btn-outline-primary btn-sm">Member</i>';
                            }?></td>       
                                </tr>               
      <?php } ?>          
                </tbody>    
            </table>      
        </div>    
    </div>    
</div> <!-- /.container-fluid --> 
</div> <!-- End of Main Content -->