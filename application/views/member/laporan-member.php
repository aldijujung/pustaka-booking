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
             <?= $this->session->flashdata('pesan'); ?>    
            <a href="<?= base_url('laporan/cetak_laporan_member'); ?>" class="btn btn-primary mb-3">
                <i class="fas fa-print"></i> </a>   
            <a href="<?= base_url('laporan/laporan_member_pdf'); ?>" class="btn btn-warning mb-3">
                <i class="far fa-file-pdf"></i> </a>     
            <a href="<?= base_url('laporan/export_excel_member'); ?>" class="btn btn-success mb-3">
                <i class="far fa-file-excel"></i> </a>      
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
                    foreach ($laporan as $l) { ?>        
                    <tr>                    
                        <th scope="row"><?= $a++; ?></th>  
                        <td><?= $l['nama']; ?></td>      
                        <td><?= $l['email']; ?></td>     
                        <td><?= $l['alamat']; ?></td>    
                        <td>
                           <?php 
                           if ($l['is_active']==1) {
                               echo '<i class="btn btn-outline-warning btn-sm">Active</i>';}
                                else {
                                echo'<i class="btn btn-outline-secoundary btn-sm">Not Active</i>';
                            }?></td>       
                                </tr>               
      <?php } ?>          
                </tbody>    
            </table>      
        </div>    
    </div>    
</div> <!-- /.container-fluid --> 
</div> <!-- End of Main Content -->