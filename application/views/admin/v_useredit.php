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
                        <h3>Edit User Data</h3>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="<?php echo base_url('admin/user')?>">Back</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="section_title mb-33">
                     <form class="form-control-user" action="<?php echo base_url(). 'admin/edituserprocess'; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="form-group">

                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Judul..." name="no" value="<?php echo $user->no ?>" readonly="">

                            <label>Username</label>
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Username" name="user" value="<?php echo $user->user ?>">
                            </div>
                            
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Password..." name="pass" value="<?php echo $user->pass ?>">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Isi Konten..." name="role" hidden="" value="<?php echo $user->role ?>">
                            </div>

                            <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>Admin/user" >Batal</a>
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