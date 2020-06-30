    <!-- photography_slider_area_start -->
<div class="col-xl-12">
</div>
    <!-- photography_slider_area_end -->

    <!-- most_recent_blog_start -->
    <div class="most_recent_blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-33">
                        <h3>Edit Contents</h3>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="<?php echo base_url('admin/content')?>">Back</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="section_title mb-33">
                     <form class="form-control-user" action="<?php echo base_url(). 'admin/editprocess'; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="form-group">

                                <input type="hidden" class="form-control form-control-user" id="exampleFirstName" placeholder="Judul..." name="no" value="<?php echo $konten->no ?>" readonly="">

                                 <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Judul..." name="seri" value="<?php echo $konten->seri ?>" readonly="">

                            <label>Judul</label>
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Judul..." name="judul" value="<?php echo $konten->judul ?>">
                            </div>
                            
                            <div class="form-group">
                                <label>Isi Konten</label>
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Isi Konten..." name="konten" value="<?php echo $konten->konten ?>">
                            </div>

                            <div class="form-group">
                                <label>Tipe</label>
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Isi Konten..." name="tipe" value="<?php echo $konten->tipe ?>">
                            </div>

                            <div class="form-group">
                                <label>Tanggal Post</label>
                                <input type="date" class="form-control form-control-user" id="exampleFirstName" placeholder="Isi Konten..." name="tanggal" value="<?php echo $konten->tanggal ?>">
                            </div>

                            <div class="form-group">
                                <label>Upload Gambar</label>
                                <input class="form-control-file" type="file" name="gambar">
                                <input type="hidden" name="old_image" value="<?php echo $konten->gambar ?>"/>
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