<!-- <pre>
<?php
   // print_r($data['filter']);
   // print_r($data['halaman']);

?>
</pre> -->

<div class="row">
   <div class="col-sm-12 col-md-7">
      <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
         <ul class="pagination">
            <?php
            $page = $data['halaman']['page'];
            if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
            ?>
            <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link"><<</a></li>
            <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link"><</a></li>
            <?php
            }else{ // Jika page bukan page ke 1
              $link_prev = ($page > 1)? $page - 1 : 1;
            ?>
            <li class="paginate_button page-item previous" id="dataTable_previous"><a href="<?=$data['filter']['browseurl'].'/page/1'; ?>" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link"><<</a></li>
            <li class="paginate_button page-item previous" id="dataTable_previous"><a href="<?=$data['filter']['browseurl'].'/page/'.$link_prev; ?>" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link"><</a></li>
            <?php
            }
            ?>
            <?php
            $jumlah_page = $data['halaman']['pages']; // Hitung jumlah halamannya
            $jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
            $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
            $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
            if ($page == $jumlah_page && $jumlah_page >=5) {
               $start_number--;
            }
            if ($page == 1 && $jumlah_page >=5) {
               $end_number++;
            }
            for($i = $start_number; $i <= $end_number; $i++){
              $link_active = ($page == $i)? 'active' : '';
            ?>
              <li class="paginate_button page-item <?=$link_active; ?>"><a href="<?=$data['filter']['browseurl'].'/page/'.$i; ?>" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $i; ?></a></li>
            <?php
            }
            ?>
            <?php
            if($page == $jumlah_page){ // Jika page terakhir
            ?>
               <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">></a></li>
               <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">>></a></li>
            <?php
            }else{ // Jika Bukan page terakhir
              $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
            ?>
               <li class="paginate_button page-item next" id="dataTable_previous"><a href="<?=$data['filter']['browseurl'].'/page/'.$link_next;?>" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">></a></li>
               <li class="paginate_button page-item next" id="dataTable_previous"><a href="<?=$data['filter']['browseurl'].'/page/'.$data['halaman']['pages'];?>" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">>></a></li>
            <?php
            }
            ?>
         </ul>
      </div>
   </div>
</div>