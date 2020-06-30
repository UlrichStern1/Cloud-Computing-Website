    <!-- photography_slider_area_start -->
<div class="col-xl-12">
</div>
<div class="clearfix"></div><hr>
    <!-- photography_slider_area_end -->

    <!-- most_recent_blog_start -->
    <div class="most_recent_blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-33">
                        <h3>Add More Contents</h3>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="<?php echo base_url('admin/content')?>">Back</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="section_title mb-33">
                     <form class="form-control-user" action="<?php echo base_url(). 'admin/addprocess'; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">

                            <div class="form-group">
                                <label>nomor seri</label>
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Judul..." name="seri" value="<?php $rand = mt_rand(10, 9999); echo $rand;?>" readonly="">
                            </div>

                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Judul..." name="judul">
                            </div>
                            
                            <div class="form-group">
                                <label>Isi Konten</label>
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Isi Konten..." name="konten">
                            </div>

                            <div class="form-group">
                                <label>Tipe</label>
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Tipe Konten..." name="tipe">

                            <div class="form-group">
                                <label>Tanggal Post</label>
                                <input type="date" class="form-control form-control-user" id="exampleFirstName" placeholder="Isi Konten..." name="tanggal">
                            </div>

                            <div class="form-group">
                                <label>Upload Gambar</label>
                                <input class="form-control-file" type="file" name="gambar">
                                <input type="hidden" name="gambar"/>
                            </div>

                            <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>Admin/content" >Batal</a>
                            <button type="reset" class="btn btn-secondary">Reset Data</button>

                        </div>

                        </div>
                    </div>
                </div>

                    </div>
                </div>
            </div>
                        
    <!-- most_recent_blog_end -->

    <!-- photo_gallery_start -->
    
    <!-- subscribe_newsletter_end -->

    <!-- instagram_media_area_start -->
    
    <!-- instagram_media_area_end -->