<!-- start of the slider -->
<div id="fwslider">
        <script src="js/responsiveslides.min.js"></script>
                <script>
                $(function () {
                    $("#sliderone").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: false,
                    });
                });
                </script>
        <div class="callbacks_container">
            <ul class="rslides" id="sliderone">
                <li>
                    <div class="slide"> 
                        <!-- Slide image -->
                        <center><img src="images/JimKennyPic.jpg" class="img-responsive" alt=""/></center>
                        <!-- Texts goes here, it will show up on the slide in a colored text -->
                        <div class="slide_content">
                            <div class="slide_content_wrap">
                                <h1 class="title">Jim Kenny<br>For Fire Commissioner</h1>
                                <div class="button"><a href="policies.php">See Details</a></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slide">
                        <center><img src="images/JimKennyPic.jpg" class="img-responsive" alt=""/></center>
                        <div class="slide_content">
                            <div class="slide_content_wrap">
                                <h1 class="title">Vote For<br>Jim Kenny</h1>
                                <div class="button"><a href="policies.php">See Details</a></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- end of the slider -->