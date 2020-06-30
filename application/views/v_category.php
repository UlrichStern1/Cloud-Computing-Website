    <!-- photography_slider_area_start -->
    
    <!-- photography_slider_area_end -->

    <!-- most_recent_blog_start -->
    <div class="most_recent_blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-33">
                        <h3>Most Recent</h3>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="section_title mb-33">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col" width="50px">No.</th>
                                <th scope="col" width="250px">Judul</th>
                                <th scope="col" width="250px">Konten</th>
                                <th scope="col" width="150px">Tanggal Post</th>
                                <th scope="col" width="200px">Gambar Konten</th>
                                <th scope="col" width="200px">Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <?php 
                            $nomor=1;
                            foreach ($konten as $p):?>
                            <td><center><?php echo $p->no ?></center></td>
                            <td><?php echo $p->judul ?></td>
                            <td><?php echo $p->konten ?></td>
                            <td><?php echo $p->tanggal ?></td>
                            <td>
                            <img src="<?php echo base_url('upload/content/'.$p->gambar) ?>" width="128" />
                            </td>
                            <td>
                                <?php echo anchor('mainboard/berita/'.$p->no,'Details'); ?>
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
    
    <!-- photo_gallery_end -->

    <!-- subscribe_newsletter_start -->
    
    <!-- subscribe_newsletter_end -->

    <!-- instagram_media_area_start -->
    
    <!-- instagram_media_area_end -->