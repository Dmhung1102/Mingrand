<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_Page</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./assets/icon/css/all.min.css">
    <link rel="stylesheet" href="./assets/icon/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />

</head>

<body>
    <div class="wrapper">
        <div class="navbar-property-list">
          <div class="navbar-area">
            <div class="navbar-bot">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="./assets/img/logo.png" alt="">
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li>
                                    <a href="./index.html">Home</a>
                                </li>
                                <li>
                                    <a href="./about.html">About</a>
                                </li>
                                <li>
                                    <a href="./proparty_grid.html">Properties</a>
                                </li>
                                <li>
                                    <a href="./add_page.html">Pages</a>
                                </li>
                                <li>
                                    <a href="./blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="./contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <a href="" class="btn btn-base">
                            <span class="btn-text">
                                SUBMIT
                                <i class="fa-solid fa-plus"></i>
                            </span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        </div>
        <div class="banner-newfeed">
            <div class="banner-contact" style="background: #000">
                <div class="container">
                    <div class="banner-inner">
                        <div class="section-tittle text-center">
                            <h2 class="page-tittle">Add Proparty</h2>
                            <ul class="page-list">
                                <a href="./index.html">
                                  <li>Home ></li>
                                </a>
                                <li>Add Proparty</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="add-area-property ">
            <div class="container bg-light p-0">
              <div class="add-property d-flex">
                <button class="add-property-button border-end" data-tab="#description">Description</button>
                <button class="add-property-button border-end" data-tab="#setlocation">Set Location</button>
                <button class="add-property-button border-end" data-tab="#gallary">Gallary</button>
                <button class="add-property-button border-end" data-tab="#additionalinfo">Additional Info</button>
                <button class="add-property-button" data-tab="#propertytype">Property Type</button>
              </div>
              <div class="list-property p-5 border">
                <div id="description" class="add-area active">
                  <div class="row">
                    <div class="col-12">
                      <div class="proparty-tittle">
                        <div class="form-label">Proparty Tittle</div>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="proparty-type">
                        <div class="form-label">Proparty Type</div>
                        <select class="form-select">
                          <option selected></option>
                          <option value="1">Villa</option>
                          <option value="2">Resort</option>
                          <option value="3">Bungalow</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="proparty-type">
                        <div class="form-label">Garages</div>
                        <select class="form-select">
                          <option selected></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="proparty-type">
                        <div class="form-label">Bedrooms</div>
                        <select class="form-select">
                          <option selected></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="proparty-type">
                        <div class="form-label">Bathrooms</div>
                        <select class="form-select">
                          <option selected></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="proparty-type">
                        <div class="form-label">Kitchen</div>
                        <select class="form-select">
                          <option selected></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="proparty-type">
                        <div class="form-label">Living Room</div>
                        <select class="form-select">
                          <option selected></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <a href="javascript:void(0);" onclick="setActiveTab('#setlocation')" class="btn">
                    Next
                  </a>
                </div>
                <div id="setlocation" class="add-area">
                  <div class="row">
                    <div class="col-12">
                      <div class="proparty-tittle">
                        <div class="form-label">Location</div>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="proparty-type">
                        <div class="form-label">Location Details</div>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="proparty-type">
                        <div class="form-label">Floor (Apartment)</div>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="proparty-type">
                        <div class="form-label">Area</div>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="proparty-type">
                        <div class="form-label">Price</div>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="proparty-type">
                        <div class="form-label">Floors</div>
                        <select class="form-select">
                          <option selected></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="proparty-type">
                        <div class="form-label">Orienten</div>
                        <select class="form-select">
                          <option selected></option>
                          <option value="1">East</option>
                          <option value="2">West</option>
                          <option value="3">South</option>
                          <option value="4">North</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <a href="javascript:void(0);" onclick="setActiveTab('#gallary')" class="btn">
                    Next
                  </a>
                </div>
                <div id="gallary" class="add-area">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="proparty-tittle">
                        <div class="form-label">Length</div>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="proparty-tittle">
                        <div class="form-label">Witdh</div>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="proparty-tittle">
                        <div class="form-label">Height</div>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="proparty-tittle">
                        <div class="form-label">Year Building</div>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="proparty-tittle">
                        <div class="form-label">Description</div>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <a href="javascript:void(0);" onclick="setActiveTab('#additionalinfo')" class="btn">
                    Next
                  </a>
                </div>
                <div id="additionalinfo" class="add-area">
                  <div class="row">
                    <div class="col-12">
                      <div class="proparty-type">
                        <div class="form-label">Equipment</div>
                        <select class="form-select">
                          <option selected></option>
                          <option value="1">None</option>
                          <option value="2">Full</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-label">
                      Amenities
                      <div class="col-12 border p-2 ">
                        <div class="form-check form-check-inline col-3">
                          <label class="form-check-label" for="inlineCheckbox1">Air
                            Conditioner</label>
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        </div>
                        <div class="form-check form-check-inline col-3">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">Fecing</label>
                        </div>
                        <div class="form-check form-check-inline col-3">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                          <label class="form-check-label" for="inlineCheckbox3">Fecing</label>
                        </div>
                        <div class="form-check form-check-inline col-3">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                          <label class="form-check-label" for="inlineCheckbox4">Internet</label>
                        </div>
                        <div class="form-check form-check-inline col-3">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                          <label class="form-check-label" for="inlineCheckbox5">Hospital</label>
                        </div>
                        <div class="form-check form-check-inline col-3">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                          <label class="form-check-label" for="inlineCheckbox6">School</label>
                        </div>
                        <div class="form-check form-check-inline col-3">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
                          <label class="form-check-label" for="inlineCheckbox7">Park</label>
                        </div>
                        <div class="form-check form-check-inline col-3">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
                          <label class="form-check-label" for="inlineCheckbox8">DishWater</label>
                        </div>
                        <div class="form-check form-check-inline col-3">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option9">
                          <label class="form-check-label" for="inlineCheckbox9">Floor
                            Convering</label>
                        </div>
                        <div class="form-check form-check-inline col-3">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option10">
                          <label class="form-check-label" for="inlineCheckbox10">Wardrobes</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="javascript:void(0);" onclick="setActiveTab('#propertytype')" class="btn">
                    Next
                  </a>
                </div>
                <div id="propertytype" class="add-area">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="proparty-type">
                        <div class="form-label">Image</div>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="proparty-type">
                        <div class="form-label">Purpose</div>
                        <select class="form-select">
                          <option selected></option>
                          <option value="1">Sell</option>
                          <option value="2">Relax</option>
                          <option value="3">Rent</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label">Album</div>
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label">Estate Locaiton</div>
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label">Floor Plans</div>
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label">Intro Video</div>
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
          
                      </div>
                    </div>
                  </div>
                  <a href="javascript:void(0);" onclick="setActiveTab('#propertytype')" class="btn">
                    Next
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-area mt-5">
            <div class="footer-top-contact">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <a href="./index.html">
                        <img src="./assets/img/logo.png" alt="">
                      </a>
            
                    </div>
                    <div class="col-md-8">
                      <ul class="icon-footer">
                        <li>
                          <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
            
                        </li>
                        <li>
                          <a href="https://twitter.com/home"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li>
                          <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                          <a href="https://www.skype.com/en/"><i class="fa-brands fa-skype"></i></a>
                        </li>
                        <li>
                          <a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            <div class="footer-mid-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <div class="footer-title">
                                <h4>Contact Us</h4>
                            </div>
                            <div class="footer-details-contact">
                                <p>
                                    <i class="fa-solid fa-location-dot"></i>
                                    420 Love Sreet 133/2 Mirpur City, Dhaka
                                </p>
                                <p>
                                    <i class="fa-solid fa-phone-volume"></i>
                                    +(066) 19 5017 800 628
                                </p>
                                <p>
                                    <i class="fa-solid fa-envelope"></i>
                                    info.contact@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <h4>Quick link</h4>
                            <div class="quick-link">
                                <ul>
                                    <li><a href="./about.html">About Us</a></li>
                                    <li><a href="./proparty_details.html">Property</a></li>
                                    <li><a href="./add_page.html">Add Property</a> </li>
                                    <li><a href="./contact.html">Contact Us</a> </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col-6">
                            <h4>Categories</h4>
                            <div class="quick-link">
                                <ul>
                                    <li><a href="https://idesign.vn/graphic-design/design-art-s-khac-bi-t-8740.html">Arts & Design</a> </li>
                                    <li><a href="https://www.facebook.com/hashtag/Business/">Business</a> </li>
                                    <li><a href="https://www.facebook.com/hashtag/ComputerScience/">Computer Science</a> </li>
                                    <li><a href="https://www.facebook.com/hashtag/DataScience/">Data Science</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="newslatter">
                                <h4>Newslatter</h4>
                                <div class="details">
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <div class="subscrise">
                                        <input type="text" placeholder="Your Mail">
                                        <a href="">Subscribe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bot">
                <div class="container">
                    <div class="row">
                        <div class="col-7 p-0">
                            <p>©2022, Copy Right By Solverwp. All Rights Reserved</p>
                        </div>
                        <div class="col-5 p-0 ">
                            <ul>
                                <li>
                                    <a href="./index.html">Home</a>
                                </li>
                                <li>
                                    <a href="./about.html">About</a>
                                </li>
                                <li>
                                    <a href="./blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="./contact.html"> Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button id="myBtn"><i class="fa-solid fa-chevron-up"></i></button>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.bundle.min.js"></script>
    <script>
        function setActiveTab(tab_id) {
                $('.add-property-button').removeClass('active');
                $("button[data-tab='" + tab_id +"']").addClass('active');
    
                $('.add-area').removeClass('active');
                $(tab_id).addClass('active');
            };
            jQuery(document).ready(function($)
     {
               $('.add-property-button').click( function() {
                    var tab = $(this).data('tab');
                    setActiveTab(tab);
                });
            });
      </script>
    <script>
        window.onscroll = function () { scrollFunction() };
        function scrollFunction() {

            if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        document.getElementById('myBtn').addEventListener("click", function () {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });
    </script>

</body>

</html>