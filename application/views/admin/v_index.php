
    <!-- welcome_protomedia_start -->
    <div class="welcome_protomedia">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <h3>Welcome to Alfian Raka's <br>
                        Boring Website</h3>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="add_here">
                        <a href="https://www.cameraworld.co.uk/">
                            <img src="<?php echo base_url(); ?>asset../img/add/add.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome_protomedia_end -->

    <!-- photographi_area_start -->

    <div class="photographi_area">
        <div class="container">
            <div class="row">
                <?php foreach ($konten as $konten) {?>
                
                <div class="col-xl-6 col-md-6">
                    <div class="single_photography" style="background: url(<?php echo base_url('upload/content/'.$konten->gambar) ?>);" >

                        <div class="info">
                            <div class="info_inner">
                                <h3><a href="<?php echo base_url('admin/berita/'. $konten->no)?>"><?php echo $konten->judul ?></a></h3>
                                <div class="date_catagory d-flex align-items-center justify-content-between">
                                    <span><?php echo $konten->tanggal ?></span>
                                    <span class="catagory"><?php echo $konten->tipe ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div><hr>
                </div>

                <?php } ?>
                
                <div class="clearfix"></div><hr>

            </div>
        </div>
    </div>
    
    <!-- photographi_area_end -->

    <!-- photography_slider_area_start -->
    
    <!-- photography_slider_area_end -->

    <!-- most_recent_blog_start -->
    
    <!-- most_recent_blog_end -->

    <!-- photo_gallery_start -->
    <div class="photo_gallery">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-33">
                        <h3>Photo Gallery</h3>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="photo_gallery_active owl-carousel">
                        <div class="single_photo_gallery gallery_bg_1">
                            <div class="photo_caption">
                                <h3>Travel Camping</h3>
                            </div>
                        </div>
                        <div class="single_photo_gallery gallery_bg_2">
                            <div class="photo_caption">
                                <h3>Travel Camping</h3>
                            </div>
                        </div>
                        <div class="single_photo_gallery gallery_bg_1">
                            <div class="photo_caption">
                                <h3>Travel Camping</h3>
                            </div>
                        </div>
                        <div class="single_photo_gallery gallery_bg_2">
                            <div class="photo_caption">
                                <h3>Travel Camping</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- photo_gallery_end -->

    <!-- subscribe_newsletter_start -->
    <div class="subscribe_newsletter">
        <div class="container">
            <div class="black_bg">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="newsletter_text">
                            <h3>
                                Subscribe newsletter
                            </h3>
                            <p>Get updates to our newsletter and new articles</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="newsform">
                            <form action="#">
                                <input type="email" placeholder="Enter Your Email">
                                <button type="submit">sign up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe_newsletter_end -->

    <!-- instagram_media_area_start -->
    <div class="instagram_media_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="instagram_title text-center">
                        <i class="fa fa-instagram"></i>
                        <h3>@alfianraka@gmail.com</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-3">
                    <div class="single_instragram">
                        <img src="img/instagram/1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_instragram">
                        <img src="img/instagram/2.png" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_instragram">
                        <img src="img/instagram/3.png" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_instragram">
                        <img src="img/instagram/4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- instagram_media_area_end -->
