    <!-- Preloader Start -->
    <!-- <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="F" class="letters-loading">
                    F
                </span>
                <span data-text-preloader="L" class="letters-loading">
                    L
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="R" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    R
                </span>
                <span data-text-preloader="M" class="letters-loading">
                    B
                </span>
                <span data-text-preloader="M" class="letters-loading">
                    U
                </span>
                <span data-text-preloader="M" class="letters-loading">
                    S
                </span>
                <span data-text-preloader="M" class="letters-loading">
                    K
                </span>
                <span data-text-preloader="M" class="letters-loading">
                    E
                </span>
                <span data-text-preloader="M" class="letters-loading">
                    T
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Mouse Cursor Start -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-solid fa-chevron-up"></i>
    </button>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="<?php echo $base_url?>">
                                <img src="public/images/logo/logo.png" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
    FloorBusket offers professional facility management solutions in Kolkata, including expert marble polishing, granite floor care, and premium housekeeping services. Our trained team ensures spotless spaces with reliable, on-time service that transforms your floors and enhances cleanliness.
</p>

                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">(Indiro Hospitality solution)Chridaynath Appartment, Teghoria Main Road, Kolkata, New Town, North Twenty Four Parganas, West Bengal, 700157</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@example.com"><span
                                            class="mailto:tatkun@gmail.com">tatkun@gmail.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:9007786309">9007786309</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="<?php echo 
                            $base_url?>contact" class="theme-btn text-center">
                                <span>Get A Quote<i class="fa-solid fa-arrow-right-long"></i></span>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="https://www.facebook.com/INDIRO123"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    <header class="header-section-1">
        <div id="header-sticky" class="header-1 ">
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="<?php echo $base_url?>" class="header-logo">
                                    <img src="public/images/logo/main-logo-floorbusket.png" alt="logo-img">
                                </a>
                            </div>
                        </div>
                        <div class="header-middle">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                <nav id="mobile-menu">
    <ul class=" m-auto mb-2 mb-lg-0">
        <?php foreach ($menu as $key => $value): ?>
            <?php if (is_array($value)): ?>
                <li class="nav-item has-dropdown">
                    <a href="javascript:void(0);" class="nav-link">
                        <?php echo $key; ?> <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="submenu">
                        <?php foreach ($value as $subKey => $subValue): ?>
                            <?php if (is_array($subValue)): ?>
                                <li class="has-dropdown">
                                    <a href="javascript:void(0);">
                                        <?php echo $subKey; ?> <i class="fas fa-angle-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <?php foreach ($subValue as $childKey => $childValue): ?>
                                            <li><a href="<?php echo $childValue; ?>"><?php echo $childKey; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li><a href="<?php echo $subValue; ?>"><?php echo $subKey; ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $value; ?>"><?php echo $key; ?></a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</nav>

                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="header-contact-info style2 d-flex">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_133_4493)">
                                            <path
                                                d="M18.7719 14.1213C18.7388 14.0938 14.9913 11.4275 13.9794 11.5906C13.4913 11.6769 13.2125 12.01 12.6531 12.6762C12.4985 12.8617 12.3403 13.0443 12.1788 13.2238C11.8252 13.1086 11.4804 12.9682 11.1469 12.8038C9.42533 11.9656 8.03437 10.5747 7.19625 8.85312C7.03179 8.51964 6.89143 8.1748 6.77625 7.82125C6.96 7.65312 7.2175 7.43625 7.3275 7.34375C7.99062 6.7875 8.32312 6.50812 8.40938 6.01937C8.58625 5.0075 5.90625 1.26125 5.87875 1.2275C5.7567 1.05441 5.59775 0.910578 5.41336 0.806386C5.22897 0.702193 5.02374 0.640241 4.8125 0.625C3.72625 0.625 0.625 4.6475 0.625 5.32562C0.625 5.365 0.681875 9.3675 5.6175 14.3881C10.6325 19.3181 14.635 19.375 14.6744 19.375C15.3519 19.375 19.375 16.2737 19.375 15.1875C19.3596 14.9762 19.2975 14.771 19.1932 14.5866C19.0889 14.4022 18.945 14.2433 18.7719 14.1213ZM14.605 18.1213C14.0625 18.075 10.7 17.6319 6.5 13.5063C2.35437 9.28563 1.9225 5.9175 1.87937 5.39563C2.69861 4.10978 3.68799 2.94064 4.82062 1.92C4.84562 1.945 4.87875 1.9825 4.92125 2.03125C5.78989 3.21702 6.53817 4.48642 7.155 5.82062C6.95441 6.02242 6.7424 6.21253 6.52 6.39C6.17512 6.65278 5.85843 6.95063 5.575 7.27875C5.52704 7.34604 5.4929 7.42217 5.47456 7.50274C5.45621 7.5833 5.45403 7.66671 5.46812 7.74813C5.60039 8.32108 5.80297 8.87549 6.07125 9.39875C7.03243 11.3725 8.62735 12.9672 10.6012 13.9281C11.1244 14.1968 11.6788 14.3996 12.2519 14.5319C12.3333 14.5463 12.4168 14.5443 12.4974 14.5259C12.578 14.5075 12.6541 14.4732 12.7213 14.425C13.0505 14.1404 13.3494 13.8225 13.6131 13.4762C13.8094 13.2425 14.0712 12.9306 14.1706 12.8425C15.5082 13.4587 16.7805 14.2079 17.9681 15.0787C18.02 15.1225 18.0569 15.1562 18.0812 15.1781C17.0606 16.3111 15.8912 17.3007 14.605 18.12V18.1213ZM14.375 9.375H15.625C15.6235 8.04937 15.0962 6.77847 14.1589 5.84111C13.2215 4.90375 11.9506 4.37649 10.625 4.375V5.625C11.6193 5.62599 12.5725 6.0214 13.2756 6.72445C13.9786 7.42749 14.374 8.38074 14.375 9.375Z"
                                                fill="white" />
                                            <path
                                                d="M17.5 9.375H18.75C18.7475 7.22088 17.8907 5.15569 16.3675 3.6325C14.8443 2.1093 12.7791 1.25248 10.625 1.25V2.5C12.4477 2.50215 14.1951 3.22717 15.484 4.51602C16.7728 5.80486 17.4978 7.5523 17.5 9.375Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_133_4493">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="content">
                                    <h6>Request A Call</h6>
                                    <h5><a href="tel:9007786309">9007786309</a></h5>
                                </div>
                            </div>
                        
                         

                            <div class="header__hamburger d-xl-block my-auto">
                                <div class="sidebar__toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="21" viewBox="0 0 30 21" fill="none">
                                        <line y1="0.5" x2="20" y2="0.5" stroke="#2B1E16" />
                                        <line y1="10.5" x2="30" y2="10.5" stroke="#2B1E16" />
                                        <line y1="20.5" x2="20" y2="20.5" stroke="#2B1E16" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>