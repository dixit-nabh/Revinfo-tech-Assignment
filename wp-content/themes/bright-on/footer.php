<!-- info section -->
<?php
$news_title = get_field('news_title','option'); 
$subscribe_btn = get_field('subscribe_btn','option');
$logo = get_field('logo','option');
$column_one_heading = get_field('column_one_heading','option');
$column_one_desc = get_field('column_one_desc','option');
$copyright_content = get_field('copyright_content','option');
$free_link = get_field('free_link','option');
?>
  <?php if('column_two_detail'){?>
    <section class="info_section layout_padding">
      <div class="container">
        <div class="info_form">

          <div class="row">
            <div class="offset-lg-3 col-lg-3">
              <h5 class="form_heading">
                <?php echo $news_title;?>
              </h5>
            </div>
            <div class="col-md-6">
              <form action="#">
                <input type="text" placeholder="Enter Your email">
                <button>
                  <?php echo $subscribe_btn;?>
                </button>
              </form>
            </div>
          </div>

        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <div>
                <a href="<?php echo get_permalink();?>">
                  <img src="<?php echo $logo;?>" alt="" />
                  <span>
                    <?php echo $column_one_heading;?>
                  </span>
                </a>
              </div>
              <p>
              <?php echo $column_one_desc;?>
              </p>
            </div>
          </div>
          <?php while(have_rows('column_two_detail','option')){ the_row();?>
            <div class="col-md-3">
              <div class="info_links ">
                <h5>
                  <?php echo get_sub_field('heading','option');?>
                </h5>
                <p class="pr-0 pr-md-4 pr-lg-5">
                  <?php echo get_sub_field('description','option');?>
                </p>
              </div>
            </div>
          <?php }?>  
          <!-- <div class="col-md-3">
            <div class="info_insta">
              <h5>
                INFORMATION
              </h5>
              <p class="pr-0 pr-md-4 pr-md-5">
                Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
                odio. Quisque volutpat mattis eros
              </p>
            </div>
          </div> -->
          <!-- <div class="col-md-3">
            <div class="pl-0 pl-lg-5 pl-md-4">
              <h5>
                MY ACCOUNT

              </h5>
              <p>
                Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
                odio. Quisque volutpat mattis eros
              </p>

            </div>
          </div> -->
        </div>
      </div>
    </section>
  <?php }?>
  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      <?php echo $copyright_content;?>
      <a href="<?php echo get_permalink();?>"><?php echo $free_link;?></a>
    </p>
  </section>
  <!-- footer section -->

  <?php wp_footer() ;?>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        }
      });

      var image = "images/maps-and-flags.png";
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>

</html>