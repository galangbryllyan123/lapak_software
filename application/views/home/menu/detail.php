    <section class="site-section">
      <div class="container">
        <div class="row">
          <?php foreach ($data->result() as $key => $value);
            $ket = json_decode($value->keterangan);
          ?>
          <div class="col-md-12">
            <div class="col-md-12 col-lg-12">
              <div class="h-entry">
                <center><img src="<?=base_url($ket->img)?>" alt="Image" class="img-fluid">
                <!-- <h2 class="font-size-regular"><a href="#">Warehousing Your Packages</a></h2> -->
                <div class="meta mb-4"><span class="mx-2"></span>Gambar &bullet; <?=$value->tanggal_upload?><span class="mx-2">&bullet;</span> </div></center>
                

                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="email">Harga</label> 
                    <input type="text" id="email" class="form-control" value="Rp. <?=number_format($ket->harga)?> / source" disabled="">
                  </div>
                </div>

                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="subject">ui dan ux</label> 
                    <select class="form-control">
                      <option>remote</option>
                      <option>custom sendiri</option>
                      <option>random</option>
                    </select>
                  </div>
                </div>

                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="subject">kombinasi</label> 
                    <select class="form-control">
                      <option>website dengan ios/android </option>
                      <option>website saja </option>
                      <option>full stack/full senyum</option>
                    </select>
                  </div>
                </div>
                <center><a href="<?=base_url()?>home/project"><button type="button" class="btn btn-warning btn-md text-white"><b>Kembali</b></button></a></center>

              </div> 
            </div>
             
            
          </div> 

          

        </div>
      </div>
    </section>