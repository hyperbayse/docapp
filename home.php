<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width" initial-scale=1.0>
        <title>doc_home</title>
        <link rel="stylesheet" type="text/css" href="stf/css/home.css">
        <script type="module" src="stf/js/home.js" defer></script>
    </head>
    <body>
    <?php include 'ext/head.php';?>

        <!-- Homepage image slide -->
        <div id="image_slides">
            <div class="images">
                <img src="stf/img/vision.jpg" alt="vision">
                <img src="stf/img/mission.jpg" alt="mission">
                <img src="stf/img/value.jpg" alt="value">
            </div>
            <div class="home_about">
                <div class="coreValue">
                <h4>Our Core Value</h4>
                <ul>
                    <li>Integrity</li>
                    <li>Honesty</li>
                    <li>Professionalism</li>
                    <li>Excellent Customer Delivery</li>
                </ul>
                </div>

                <div class="vision">
                    <h4>Our Vision</h4>
                    <p>A provider of real estate solution  that ensures clients&#39;  achieve maximum return on their investments.</p>
                </div>

                <div class="mission">
                    <h4>Our Mission</h4>
                    <p>To offer our clients the best professional services which are dependent upon our expertise and up to date knowledge of the market.</p>
                </div>
            </div>
            
            <span class="property_search">
                <input onfocus="this.style.outline = 'none'" type="text" placeholder="search for properties">
                <img src="stf/img/searchIcon.svg" alt="search icon">
            </span>
        </div>
    
        <!-- Box containing most recent added properties -->
        <div id="new_listings">
            <div class="nl_head">
                <p>New Listings...</p>
                <p>Checkout for the recently added properties</p>
            </div>
            
            
            <div class="new_listings">
                <div class="new_list">
                    <img src="properties/prop/lpce1.jpeg" alt="List Image">
                    <p class="descr">Newly Built 5 Bedroom Detached House</p>
                    <p class="tag">For Sale</p>
                    <p class="price">#90,000,000</p>
                    <p class="info infos">
                        <ul>
                            <li>xNo Bedroom</li>
                            <li>xNo Bath</li>
                            <li>xNo Land Size</li>
                            <li>Others: </li>
                            <li>Address: </li>
                        </ul>
                    </p>
                    <input type="button" value="View Details">
                </div>

                <div class="new_list">
                    <img src="properties/prop/bgel4.jpeg" alt="List Image">
                    <p class="descr">Bridgegate Estate Lekki, Nigeria</p>
                    <p class="tag">For Sale</p>
                    <p class="price">#55,000,000</p>
                    <p class="info infos">
                        <ul>
                            <li>xNo Bedroom</li>
                            <li>xNo Bath</li>
                            <li>xNo Land Size</li>
                            <li>Others: </li>
                            <li>Address: </li>
                        </ul>
                    </p>
                    <input type="button" value="View Details">
                </div>

                <div class="new_list">
                    <img src="properties/prop/shan2.jpeg" alt="List Image">
                    <p class="descr">Shangisha Fully Ensuite House</p>
                    <p class="tag">For Rent</p>
                    <p class="price">#2,000,000</p>
                    <p class="info infos">
                        <ul>
                            <li>xNo Bedroom</li>
                            <li>xNo Bath</li>
                            <li>xNo Land Size</li>
                            <li>Others: </li>
                            <li>Address: </li>
                        </ul>
                    </p>
                    <input type="button" value="View Details">
                </div>

                <div class="new_list">
                    <img src="properties/prop/wlie1.jpeg" alt="List Image">
                    <p class="descr">Westlink Iconic Estate</p>
                    <p class="tag">For Sale
                    </p>
                    <p class="price">#25,000,000</p>
                    <p class="info infos">
                        <ul>
                            <li>xNo Bedroom</li>
                            <li>xNo Bath</li>
                            <li>xNo Land Size</li>
                            <li>Others: </li>
                            <li>Address: </li>
                        </ul>
                    </p>
                    <input type="button" value="View Details">
                </div>

                <div class="new_list">
                    <img src="properties/prop/abl1.jpeg" alt="List Image">
                    <p class="descr">Land</p>
                    <p class="tag">For Sale
                    </p>
                    <p class="price">#85,000,000</p>
                    <p class="info infos">
                        <ul>
                            <li>xNo Bedroom</li>
                            <li>xNo Bath</li>
                            <li>xNo Land Size</li>
                            <li>Others: </li>
                            <li>Address: </li>
                        </ul>
                    </p>
                    <input type="button" value="View Details">
                </div>
              
            </div>
        </div>

        <!-- Explore more -->
        <div class="explore">
            <p>Let's get it done for you</p>
            <p>Value your property | Have a property to develop | Management ...</p>
            <a href="services/services.php"><p>Start exploring</p></a>
        </div>
        <!-- Property market and news division -->
        <div id="property_market">
            <div class="p_market">
                <p>Property Market</p>
                <embed src="https://www.pwc.com/us/en/industries/financial-services/asset-wealth-management/real-estate/emerging-trends-in-real-estate.html">
                
            </div>
            
            <div class="blog">
                <p>Blog</p>
                <embed src="https://www.forbes.com/advisor/mortgages/real-estate/housing-market-predictions/">
            </div>
            
        </div>

        <!-- Ongoing project -->
        <div id="project">
            <p>Ongoing Project</p>
            <div class="o_project">
                <video src="stf/vid/vid_p.mp4" controls>
                    <track>property at magodo estate</track>
                </video>
                <div class="op_detail">
                    <p>Westlink Iconic Villa</p>
                    <p>Under Development</p>
                    <p>Alakia Ibadan, Oyo State, Nigeria</p>
                    <a href="">View details</a>
                </div>
            </div>
        </div>

        <!-- We DOC -->
        <div id="we_doc">
            <p>We DAPO OKEOWO & CO</p>
            <div class="we_doc">
                <div class="image">
                    <img src="stf/img/we_doc.jpg" alt="image">
                </div>
                <div class="content">
                    <p>Our firm - Dapo Okeowo & Co. Estate Surveyors & Valuers is registered and
                    recognized by The Estate Surveyors & Valuers Registration Board of Nigeria
                    (ESVARBON) under the Decree No. 24 of 1975 to practice estate surveying and
                    valuation within the length and breadth of the Federal Republic of Nigeria as
                    evidenced by the attached Certificate of Compliance issued by the Registration
                    Board. Our firm is equally approved and recognized to practice the profession <a href="about/about.php">Read more...</a>
                </div>
            </div>
        </div>

        
        <!-- Partners -->
        <div id="partners">
            <p>Our Partners</p>
            <div class="partners">
                <img src="stf/img/niesv.jpg" alt="image1">
                <img src="stf/img/lagos.jpg" alt="image1">
                <img src="stf/img/jtc.jpg" alt="image1">
                <img src="stf/img/immigration.jpg" alt="image1">
            </div>
        </div>
        
    <?php include 'ext/base.php'; ?>
    </body>
</html>