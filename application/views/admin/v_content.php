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
                        <h3>Most Recent Content</h3>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="<?php echo base_url('admin/add')?>">Add more Contents</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="section_title mb-33">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col" width="50px">No.</th>
                                <th scope="col" width="250px">Judul</th>
                                <th scope="col">Konten</th>
                                <th scope="col" width="150px">Tanggal Post</th>
                                <th scope="col">Gambar Konten</th>
                                <th scope="col" width="200px">Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <?php 
                            $nomor=1;
                            foreach ($konten as $p):?>
                            <td><center><?php echo $nomor++; ?></center></td>
                            <td><?php echo $p->judul ?></td>
                            <td><?php echo $p->konten ?></td>
                            <td><?php echo $p->tanggal ?></td>
                            <td>
                            <img src="<?php echo base_url('upload/content/'.$p->gambar) ?>" width="128" />
                            </td>
                            <td>
                                <?php echo anchor('admin/edit/'.$p->no,'Edit'); ?> |
                                <?php echo anchor('admin/hapus/'.$p->no,'Delete'); ?>
                            </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
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