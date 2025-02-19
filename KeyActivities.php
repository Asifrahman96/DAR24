<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/stc-purple.svg">
    <title>Key Activities - Digital Annual Report 2024</title>
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-6.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/vendor/metismenu.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/css/KeyActivities.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font.css">
</head>

<body class="index-five">
    <!-- header area -->
    <?php include 'navbar.html'; ?>
    <!-- header area  -->
    <!-- rts banner five -->
    <div class="rts-banner-five-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-area-five-wrapper">
                        <div class="inner-image">
                            <img src="assets/images/banner/14.png" alt="banner">
                        </div>
                        <h1 class="title rts_hero__title purple-text">
                            <span class="ml-more">Key</span> <br>
                            <span>Activities</span><br>
                            <span class="ml-more">2024</span>
                        </h1>
                        <a href="#" class="speen-shape rts-slide-left-gsap">
                            <svg class="uni-circle-text-path uk-text-secondary uni-animation-spin" viewBox="0 0 100 100"
                                width="120" height="120">
                                <defs>
                                    <path id="circle" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0">
                                    </path>
                                </defs>
                                <text font-size="11.75">
                                    <textPath xlink:href="#circle">Dynamism • Devotion • Drive •</textPath>
                                </text>
                            </svg>
                            <i class="fa-solid fa-star-sharp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner five end -->

    <!-------------------Custom Key Activities----------------------------->

    <div class="container-fluid pt--100 pb--50">
        <div class="row">
            <div class="col-md-5">
                <div class="month-grid">
                    <div class="month" data-month="January"><p>January</p></div>
                    <div class="month" data-month="February"><p>February</p></div>
                    <div class="month" data-month="March"><p>March</p></div>
                    <div class="month" data-month="April"><p>April</p></div>
                    <div class="month" data-month="May"><p>May</p></div>
                    <div class="month" data-month="June"><p>June</p></div>
                    <div class="month" data-month="July"><p>July</p></div>
                    <div class="month" data-month="August"><p>August</p></div>
                    <div class="month" data-month="September"><p>September</p></div>
                    <div class="month" data-month="October"><p>October</p></div>
                    <div class="month" data-month="November"><p>November</p></div>
                    <div class="month" data-month="December"><p>December</p></div>
                </div>
            </div>
            <div class="col-md-7 d-flex justify-content-center">
                <div class="details" id="details">
                    <!-- <h2>Welcome!</h2>
                    <p>Select a month to see key activities.</p> -->
                </div>
            </div>
        </div>
    </div>
    <script>
        const activities = {
            January: {
                image: '/assets/images/Key Activities/Key-Jan.jpg',
                list: ["solutions by stc launched My Business, our Digital Self-Care Portal for B2B customers. The redefined portal falls in line with solutions by stc’s application of modern technologies to enable digital transformation and enrich the lifestyle of its customers."]
            },
            February: {
                image: '/assets/images/Key Activities/Key-Feb.jpg',
                list: ["stc the first operator in Kuwait succeeded in the PoC of passive IOT RF ID on 900MHz band."]
            },
            March: {
                image: '/assets/images/Key Activities/Key-Mar.jpg',
                list: ["solutions by stc and Huawei Technologies Kuwait sign Memorandum of Understanding for Enterprise Network Operations Center Services. The objective behind the ENOC is to provide comprehensive network operations services, while expanding the existing offering line available to customers with new bundles and services. The state-of-the-art ENOC aims to offer our customers the benefits of 24/7 network monitoring with troubleshooting services, proactive network optimization and maintenance services.", "stc has exclusively introduced Plume SuperPods for the first time in the GCC. The aim is to expand the Wi- Fi range of home routers using a single device, eliminating the need for customers to change networks throughout the house. Additionally, it offers amazing features such as internet schedule control, content filtering, and protection for Internet of Things (IoT) devices."]
            },
            April: {
                image: 'https://via.placeholder.com/400x200?text=April',
                list: ["Earth Day Campaign", "Outdoor Workshop", "Staff Appreciation Week"]
            },
            May: {
                image: 'https://via.placeholder.com/400x200?text=May',
                list: ["Tech Conference", "Launch New Features", "Annual Gala"]
            },
            June: {
                image: 'https://via.placeholder.com/400x200?text=June',
                list: ["Mid-Year Planning", "Team Building Retreat", "Hackathon"]
            },
            July: {
                image: 'https://via.placeholder.com/400x200?text=July',
                list: ["Summer Festival", "Customer Appreciation Day", "Partnership Announcements"]
            },
            August: {
                image: 'https://via.placeholder.com/400x200?text=August',
                list: ["Back-to-School Drive", "Innovation Awards", "Outdoor Movie Night"]
            },
            September: {
                image: 'https://via.placeholder.com/400x200?text=September',
                list: ["Industry Summit", "Quarterly Review", "Staff Training"]
            },
            October: {
                image: 'https://via.placeholder.com/400x200?text=October',
                list: ["Halloween Party", "Community Outreach", "Product Updates"]
            },
            November: {
                image: 'https://via.placeholder.com/400x200?text=November',
                list: ["Thanksgiving Campaign", "End of Year Prep", "Volunteer Week"]
            },
            December: {
                image: 'https://via.placeholder.com/400x200?text=December',
                list: ["Holiday Party", "Annual Review", "New Year's Planning"]
            }
        };
        const months = document.querySelectorAll('.month');
        const detailsDiv = document.getElementById('details');

        // Function to update details
        function updateDetails(selectedMonth) {
            const monthData = activities[selectedMonth];

            detailsDiv.innerHTML = `
                <img src="${monthData.image}" alt="${selectedMonth} Image" class="keyImage">
                <h2>Key activities in ${selectedMonth}</h2>
                <ul>
                    ${monthData.list.map(activity => `<li><i class="fas fa-chevron-right"></i> ${activity}</li>`).join('')}
                </ul>
            `;
        }

        // Set default data to January on page load
        document.addEventListener('DOMContentLoaded', () => {
            updateDetails('January'); // Assuming 'January' is the correct key in the activities object
        });

        // Add click event listeners to months
        months.forEach(month => {
            month.addEventListener('click', () => {
                updateDetails(month.dataset.month);
            });
        });
    </script>

<!-------------------------End of Key Activities --------------------------------------------->
<!-------------------------------Awards--------------------------------------------->
    <!-- portfolio-swiper center scale -->
    <div class="portfolio-center-scale-swiper-area pb--100 awards">
        <div class="water-txt-top rts-has-mask-fill text-center">
            <span>Awards</span>
        </div>
        <div class="container-full mt--50">
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-portfolio-five-wrapper">
                        <div class="swiper mySwiper_portfolio-5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- single portfolio area start -->
                                    <div class="single-portfolio-style-five">
                                        <img src="assets/images/product/29.jpg" alt="product">
                                        <div class="inner-content" style="bottom:-200px;">
                                            <h5 class="name">stc Ranked as the ideal employer of choice in Kuwait by Universum</h5>
                                            <p>stc was ranked the number one ideal employer of choice for engineers and IT professionals in Kuwait
                                            according to Universum’s custom research in comparison with 19 of the strongest brands in Kuwait.</p>
                                        </div>
                                    </div>
                                    <!-- single portfolio area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single portfolio area start -->
                                    <div class="single-portfolio-style-five">
                                        <img src="assets/images/product/80.jpg" alt="product">
                                        <div class="inner-content" style="bottom:-275px;">
                                            <h5 class="name">stc wins ‘FWA Overall Experience Award’ at SAMENA Council’s LEAD Awards
                                            2024</h5>
                                            <p>stc has won the ‘FWA Overall Experience Award’ at the SAMENA Council’s Leadership &
                                            Excellence (LEAD) Awards 2024 in Dubai, UAE. The recognition highlights stc’s exceptional
                                            developments in Fixed Wireless Access (FWA) solutions, further strengthening its position as a
                                            pioneer in providing ICT solutions and exceptional customer experience.</p>
                                        </div>
                                    </div>
                                    <!-- single portfolio area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single portfolio area start -->
                                    <div class="single-portfolio-style-five">
                                        <a href="portfolio-details.html" class="thumbnail-portfolio">
                                            <img src="assets/images/product/81.jpg" alt="product">
                                        </a>
                                        <div class="inner-content" style="bottom:-300px;">
                                            <h5 class="name">stc receives ‘ICT – Telecommunications Award - Kuwait’ at the Middle East
                                            Technology Excellence Awards</h5>
                                            <p>stc has won the ‘ICT -Telecommunications Award – Kuwait’ for the entry 5G at the Middle East
                                            Technology Excellence Awards – a distinguished platform devoted to acknowledging and
                                            celebrating the pioneers of technological innovation. The country level award reflects stc’s
                                            strategic approach to enhancing its connectivity network, especially through various upgrades
                                            and solutions related to 5G technology.</p>
                                        </div>
                                    </div>
                                    <!-- single portfolio area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single portfolio area start -->
                                    <div class="single-portfolio-style-five">
                                        <a href="portfolio-details.html" class="thumbnail-portfolio">
                                            <img src="assets/images/product/81.jpg" alt="product">
                                        </a>
                                        <div class="inner-content" style="bottom:-200px;">
                                            <h5 class="name">stc Kuwait has emerged as winners in the category “Best Entrepreneurial Landscape CSR
                                            framework – Weyak – Kuwait 2024” from International Finance Awards</h5>
                                        </div>
                                    </div>
                                    <!-- single portfolio area end -->
                                </div>
                                
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- portfolio-swiper center scale end -->


    <!-- rts News area start -->
    <div class="rts-news-area-three-start rts-section-gapBottom purple-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left-three-large">

                        <h2 class="title quote">Explore Next</h2>
                        <!-- <p class="left-m-para rts-text-anim">
                                    Irna torquent accumsan aliquet a metus netus tellus egestas, eu <br> semper tortor fusce
                                    duis massa morbi parturient ornare. apibus <br> nullam purus massa quam varius ullamcorper
                                    hac vel per,
                                </p> -->

                    </div>
                </div>
            </div>
            <div class="row g-24 mt--50 rts-slide-left-gsap">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="single-blog-area">
                        <a href="blog-details.html" class="thumbnail">
                            <div class="image-box-blog">
                                <img src="assets/images/banner/Left.webp" alt="blog-image">
                                <img src="assets/images/banner/Left.webp" alt="blog-image">
                            </div>
                        </a>
                        <div class="inner-content">
                            <!-- <div class="top">
                                        <div class="meta">
                                            <p>March 28, 2023</p>
                                        </div>
                                        <div class="time">
                                            <p>8 min read</p>
                                        </div>
                                    </div> -->
                            <a href="blog-details.html" class="title-text">
                                <h5 class="title">
                                    Company Profile
                                </h5>
                            </a>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="single-blog-area">
                        <a href="blog-details.html" class="thumbnail">
                            <div class="image-box-blog">
                                <img src="assets/images/banner/Right.webp" alt="blog-image">
                                <img src="assets/images/banner/Right.webp" alt="blog-image">
                            </div>
                        </a>
                        <div class="inner-content">
                            <a href="#" class="title-text">
                                <h5 class="title">
                                    2024 at a glance
                                </h5>
                            </a>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts News area end -->
    <!-- Scripts style two -->
    <div class="loading-screen" id="loading-screen">
        <span class="bar top-bar"></span>
        <span class="bar down-bar"></span>
        <span class="progress-line"></span>
        <span class="loading-counter"> </span>
    </div>


    <div class="bg-noise"></div>


    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- back to top end -->


    <!-- pre loader start -->
    <div class="rts-cursor cursor-outer" data-default="yes" data-link="yes" data-slider="no">
        <span class="fn-cursor"></span>
    </div>
    <div class="rts-cursor cursor-inner" data-default="yes" data-link="yes" data-slider="no">
        <span class="fn-cursor">
            <span class="fn-left"></span>
            <span class="fn-right"></span>
        </span>
    </div>
    <!-- pre loader end -->

    <!-- dark light switcher start-->
    <div class="modal-sidebar-scroll rts-dark-light">
        <ul>
            <li class="go-dark-w"><span>Dark</span><i class="rts-go-dark fal fa-moon"></i></li>
            <li class="go-light-w"><span>Light</span><i class="rts-go-light fa-light fa-brightness"></i></li>
        </ul>
    </div>

    <!-- dark light switcher end -->

    <script defer src="assets/js/vendor/jquery.min.js"></script>
    <script defer src="assets/js/plugins/bootstrap.min.js"></script>
    <script defer src="assets/js/plugins/contact.form.js"></script>
    <script defer src="assets/js/vendor/waypoint.js"></script>
    <script defer src="assets/js/plugins/swiper.js"></script>


    <!-- for side bar sticky -->
    <script defer src="assets/js/plugins/resizer-sensor.js"></script>
    <script defer src="assets/js/plugins/sticky-sidebar.js"></script>
    <!-- for side bar sticky end-->

    <script defer src="assets/js/plugins/isotop.js"></script>
    <script defer src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>

    <script defer src="assets/js/plugins/smoothscroll-varticle.js"></script>
    <script defer src="assets/js/vendor/gsap.js"></script>
    <script defer src="assets/js/plugins/scrolltiger.js"></script>
    <script defer src="assets/js/plugins/scrolltoplugin.js"></script>
    <script defer src="assets/js/plugins/splittext.js"></script>
    <script defer src="assets/js/plugins/smoothscroll.js"></script>

    <!-- title opacity scroll magix -->
    <script defer src="assets/js/plugins/scrollmagic.js"></script>
    <script defer src="assets/js/plugins/animate-scrollmagic.js"></script>
    <!-- title opacity scroll magic end -->



    <script defer src="assets/js/plugins/tilt.js"></script>
    <script defer src="assets/js/plugins/counterup.js"></script>

    <script defer src="assets/js/vendor/waw.js"></script>
    <!-- custom javascripts -->
    <script defer src="assets/js/main.js"></script>
    <!-- Scripts style two End -->
</body>
</html>