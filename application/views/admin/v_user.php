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
                        <h3>Active Users list</h3>
                                                <div class="pull-right">
                            <a class="btn btn-primary" href="<?php echo base_url('admin/adduser')?>">Add more Users</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="section_title mb-33">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col" width="50px">No.</th>
                                <th scope="col" width="250px">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col" width="200px">Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <?php 
                            $nomor=1;
                            foreach ($user as $p):?>
                            <td><center><?php echo $p->no ?></center></td>
                            <td><?php echo $p->user ?></td>
                            <td><?php echo $p->pass ?></td>
                            <td>
                                <?php echo anchor('admin/edituser/'.$p->no,'Edit'); ?> |
                                <?php echo anchor('admin/hapususer/'.$p->no,'Delete'); ?>
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