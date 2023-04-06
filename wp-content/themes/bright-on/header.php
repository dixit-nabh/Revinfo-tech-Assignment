<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
  <!-- Basic -->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <?php wp_head();?>

  <title><?php echo get_bloginfo('name');?></title>

</head>


<body <?php body_class();?>>

<?php $header_logo = get_field('header_logo','option');
$logo_text = get_field('logo_text','option');
// $banner_content = get_field('banner_content','option')
?>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <?php if($header_logo && $logo_text) {?>
            <a class="navbar-brand" href="<?php echo get_site_url();?>">
              <img src="<?php echo $header_logo;?>" alt="" />
              <span>
                <?php echo $logo_text;?>
              </span>
            </a>
          <?php }?>  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center ulwrap">
            <?php   wp_nav_menu(array(
                               'menu' => 'header-menu',
                               'depth' => 3,
                               'container' => false,
                               'menu_class' => 'navbar-nav cstmul'
                    )
                ); ?>
              <!-- <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">
                    Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="program.html"> Programs </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html"> Contact us</a>
                </li>
              </ul> -->
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          </ol>
        
          <?php if('banner_content'){?>
            <div class="carousel-inner">
              <?php 
              $count = 0;
              while(have_rows('banner_content','option')){ the_row();?>
                <div class="carousel-item <?php 
                            if($count==0){
                              echo "active";  
                            }
                            else{
                                echo " ";
                            }?>" data-interval='2000'>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="detail-box">
                        <h1>
                          <?php echo get_sub_field('banner_heading','option');?> <br />
                          <span>
                            <?php echo get_sub_field('banner_sub_heading','option');?>
                          </span>
                        </h1>
                        <p>
                          <?php echo get_sub_field('banner_desc','option');?>
                        </p>
                        <div class="btn-box">
                          <a href="<?php echo get_permalink();?>" class="btn-1">
                            <?php echo get_sub_field('banner_btn_one','option');?>
                          </a>
                          <a href="<?php echo get_permalink();?>" class="btn-2">
                          <?php echo get_sub_field('banner_btn_two','option');?>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php 
                        $count++;
                        }
                        ?>
              <!-- <div class="carousel-item">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        A Perfect Learning Center <br />
                        <span>
                          For Your Kids
                        </span>
                      </h1>
                      <p>
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less
                        normal distribution of letters, as
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Read More
                        </a>
                        <a href="" class="btn-2">
                          Contact us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- <div class="carousel-item">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        A Perfect Learning Center <br />
                        <span>
                          For Your Kids
                        </span>
                      </h1>
                      <p>
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less
                        normal distribution of letters, as
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Read More
                        </a>
                        <a href="" class="btn-2">
                          Contact us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- <div class="carousel-item">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        A Perfect Learning Center <br />
                        <span>
                          For Your Kids
                        </span>
                      </h1>
                      <p>
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less
                        normal distribution of letters, as
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Read More
                        </a>
                        <a href="" class="btn-2">
                          Contact us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- <div class="carousel-item">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        A Perfect Learning Center <br />
                        <span>
                          For Your Kids
                        </span>
                      </h1>
                      <p>
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less
                        normal distribution of letters, as
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Read More
                        </a>
                        <a href="" class="btn-2">
                          Contact us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          <?php }?>
        </div>


      </div>
    </section>
    <!-- end slider section -->
  </div>