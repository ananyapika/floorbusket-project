<?php
$base_url	= '';
$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$base_url .= "://" . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$lastUriSegment = array_pop($uriSegments);

$site_name="Agnibina School Of Pharmacy";
$site_short_name="ASP";



$favicon=$base_url.'public/images/favicon.ico';
$logo_top=$base_url.'public/img/logo/header-logo.png';
$logo_bottom=$base_url.'public/img/logo/footer-logo.png';


$breadcrumb_bg=$base_url.'public/img/shape/06.png';
$bg_404=$base_url.'public/img/bg/404-img.png';
$bg_comeingsoon=$base_url.'public/img/class/comeing.jpg';
$features_img='public/img/features/img-07.jpeg';
$admission_home_img='public/img/features/img-14.jpeg';

$page_title=[
	'home'=>'Mother Mary Institute of Nursing College in Barasat, Kolkata | WBNC Affiliated',
	'about-us'=>'About Us',
	'vision-mission'=>'Vision & Mission',
	'director-message'=>'Director Message',
	'chairman-message'=>'Chairman Message',
	'principal-message'=>'Principal Message',
	'bsc-nursing-training-course'=>'B.Sc. Nursing Course in West Bengal | Top Nursing College in WB',
	'gnm-nursing-training-course'=>'GNM Nursing Course in West Bengal | General Nursing And Midwifery',
	'admission'=>'Admission',
	'placement'=>'Placement',
	'contact-us'=>'Contact Us'
];

$bread_cumbs = array(
    'about' => array(
        $base_url => 'Home',
        '' => 'About Us'
    ),

	'principal-message' => array(
        $base_url => 'Home',
        '' => 'Pricipal Message'
    ),
	'president-message' => array(
        $base_url => 'Home',
        '' => 'President Message'
    ),
	'secretary-message' => array(
        $base_url => 'Home',
        '' => 'Secretary Message'
    ),

	'management' => array(
        $base_url => 'Home',
        '' => 'Management'
    ),
	'teaching-staff' => array(
        $base_url => 'Home',
        '' => 'Teaching Staff'
    ),
	'non-teaching-staff' => array(
        $base_url => 'Home',
        '' => 'non-teaching-staff'
    ),

	'gallery' => array(
        $base_url => 'Home',
        '' => 'Gallery'
    ),

	'infrastructure' => array(
        $base_url => 'Home',
        '' => 'Infrastructure'
    ),

	'course' => array(
        $base_url => 'Home',
        '' => 'Course'
    ),

	'method-subject' => array(
        $base_url => 'Home',
        '' => 'Method Subject'
    ),
	'fee-structure' => array(
        $base_url => 'Home',
        '' => 'Fee Structure'
    ),

	'mandatory-disclosure' => array(
        $base_url => 'Home',
        '' => 'Mandatory Disclosure'
    ),

	'notice-board' => array(
        $base_url => 'Home',
        '' => 'Notice Board'
    ),
    'contact' => array(
        $base_url => 'Home',
        '' => 'Contact Us'
    ),

	'affidavit' => array(
        $base_url => 'Home',
        '' => 'Affidavit'
    ),

	'affiliation' => array(
        $base_url => 'Home',
        '' => 'Affiliation'
    ),

	'b-ed' => array(
        $base_url => 'Home',
        '' => 'b-ed document'
    ),
    // Add other pages as needed
);


$page_heading = array(
    'about' => array(
        'page_heading' => 'About Us'
    ),
	'principal-message' => array(
        'page_heading' => 'Pricipal Message'
    ),
	'president-message' => array(
        'page_heading' => 'President Message'
    ),
	'secretary-message' => array(
        'page_heading' => 'Secretary Message'
    ),
	'management' => array(
        'page_heading' => 'Management'
    ),
	'teaching-staff' => array(
        'page_heading' => 'teaching-staff'
    ),

	'non-teaching-staff' => array(
        'page_heading' => 'non-teaching-staff'
    ),

	'gallery' => array(
        'page_heading' => 'Gallery'
    ),

	'infrastructure' => array(
        'page_heading' => 'Infrastructure'
    ),

	'course' => array(
        'page_heading' => 'Course'
    ),

	'method-subject' => array(
        'page_heading' => 'Method Subject'
    ),

	'fee-structure' => array(
        'page_heading' => 'Fee Structure'
    ),
	'mandatory-disclosure' => array(
        'page_heading' => 'Mandatory Disclosure'
    ),

    'contact' => array(
        'page_heading' => 'Contact Us'
    ),

	
    'notice-board' => array(
        'page_heading' => 'Notice Board'
    ),

	'affidavit' => array(
        'page_heading' => 'Affidavit'
    ),

	'affiliation' => array(
        'page_heading' => 'Affiliation'
    ),
	'b-ed' => array(
        'page_heading' => 'B.ed Documents'
    ),


	
    // Add more pages here
);


$menu = [
    "Home" => $base_url, // Removed unnecessary quotes
    "About Us" => "#",
    "Services" => [
        "Services" => "#",
        "Service Details" => "#"
    ],
    "Project" => [
        "Project" => "#",
        "Project Details" => "#"
    ],
    "Team" => [
        "Team" => "#",
        "Team Details" => "#"
    ],
    // "Pricing" => "#",
    "Gallery" => "#",

    
    // Uncomment the below block if you want to enable the "Shop" menu
    /*
    "Shop" => [
        "Shop" => "shop.html",
        "Shop Right Sidebar" => "shop-right-sidebar.html",
        "Shop List" => "shop-list.html",
        "Shop List Right Sidebar" => "shop-list-right-sidebar.html",
        "Shop Details" => "shop-details.html",
        "Cart" => "cart.html",
        "Checkout" => "checkout.html"
    ],
    */
    
    "Blogs" => [
        "Blog" => "#",
        "Blog Details" => "#"
    ],
    "Contact Us" => "contact"
];





$header_menu_special=array('text'=>'Contact Us','url'=>$base_url.'apply_now');

$pages_arr=[
	""=>"home",
	"about"=>"about",
	"course"=>"course",
	"d.pharma"=>"course",
	"fee-structure"=>"course",
	"method-subject"=>"course",
	"mandatory-disclosure"=>"document",
	"b-ed"=>"document",
	"notice-board"=>"document",
	"affidavit"=>"document",
	"affiliation"=>"document",
	
	"principal-message"=>"about",
	"president-message"=>"about",
	"secretary-message"=>"about",
	"management"=>"about",
	"teaching-staff"=>"about",
	"non-teaching-staff"=>"about",

	"contact"=>"others",
	"privacy_policy"=>"others",

	"infrastructure"=>"others",
	"gallery"=>"others",
	"syllabus"=>"others",
	"terms&condition"=>"others",
	"refund_policy"=>"others",
	"apply_now"=>"others",
	'coming-soon'=>"others",



];

$footer_menues=[
	'Home'=>$base_url.'',
	'About'=>$base_url.'about',
	'courses'=>$base_url.'bscn',
	'Contact-us'=>$base_url.'contact_us',
	'Blog'=>$base_url.'',

	'Terms & Condition'=>$base_url.'terms&condition',
	'privacy & Policy'=>$base_url.'Privacy_Policy',
	'refund policy'=>$base_url.'refund_policy',
];





$slides = [
    [
        'image' => 'public/img/agnibina/banner_1.webp',
        'caption' => 'It is the mission of our educational institution to provide a nurturing environment for the students. We aim to transform the youngsters through sound academic education with a distinct worldview.',
    //    'caption2'=>'Education is the best key success in life',
        'title' => 'WELCOME TO',
		'title1' => 'AGNIBINA SCHOOL OF PHARMACY',
  
    ],
    [
        'image' => 'public/img/agnibina/banner_2.webp',
		'caption' => 'It is the mission of our educational institution to provide a nurturing environment for the students. We aim to transform the youngsters through sound academic education with a distinct worldview.',
		// 'caption2'=>'Education is the best key success in life',
        'title' => 'YOUR FUTURE BEGINS AT OUR ',
		'title1' => 'AGNIBINA SCHOOL OF PHARMACY',
  
    ],

	[
        'image' => 'public/img/agnibina/banner_3.webp',
		'caption' => 'It is the mission of our educational institution to provide a nurturing environment for the students. We aim to transform the youngsters through sound academic education with a distinct worldview.',
		// 'caption2'=>'Education is the best key success in life',
        'title' => 'START YOUR FUTURE AT',
		'title1' => 'AGNIBINA SCHOOL OF PHARMACY',
  
    ],
  
];


$slides_mobile = [
    [
        'image' => 'public/img/agnibina/mobile_banner1.png',
		'caption' => 'It is the mission of our educational institution to provide a nurturing environment for the students. We aim to transform the youngsters through sound academic education with a distinct worldview.',
		//    'caption2'=>'Education is the best key success in life',
			'title' => 'WELCOME TO',
			'title1' => 'AGNIBINA SCHOOL OF PHARMACY',
    ],
    [
        'image' => 'public/img/agnibina/mobile_banner2.png',
		'caption' => 'It is the mission of our educational institution to provide a nurturing environment for the students. We aim to transform the youngsters through sound academic education with a distinct worldview.',
		// 'caption2'=>'Education is the best key success in life',
        'title' => 'YOUR FUTURE BEGINS AT ',
		'title1' => 'AGNIBINA SCHOOL OF PHARMACY',
  
    ],
    [
        'image' => 'public/img/agnibina/mobile_banner3.png',
		'caption' => 'It is the mission of our educational institution to provide a nurturing environment for the students. We aim to transform the youngsters through sound academic education with a distinct worldview.',
		// 'caption2'=>'Education is the best key success in life',
        'title' => 'START YOUR FUTURE AT',
		'title1' => 'AGNIBINA SCHOOL OF PHARMACY',
  
    ],


];


$image_urls1 = array(
	"public/img/agnibina/gal1.png",
	"public/img/agnibina/gal2.png",
	"public/img/agnibina/gal3.png",
	"public/img/agnibina/gal4.png",
	"public/img/agnibina/gal5.png",
	"public/img/agnibina/gal6.png",
	

);



// notice board

$admissions = [
    "coming soon.............",
    "coming soon.............",
    "coming soon.............",
    "coming soon.............",
    "coming soon.............",
    "coming soon............."
];


//Meta data

$page_meta=[
	"contact-us"=>array(
		"title"=>"Contact Us",
		"page_heading"=>"Contact Us"
	),
	"rules-regulation"=>array(
		"title"=>"Rules-regulation",
		"page_heading"=>"Rules-regulation"
	),
	"fee-structure"=>array(
		"title"=>"Fee Structure",
		"page_heading"=>"Fee Structure"
	),
	"admission"=>array(
		"title"=>"Admission 2024",
		"page_heading"=>"Admission"
	),
	"curriculum"=>array(
		"title"=>"Curriculum",
		"page_heading"=>"Curriculum"
	),
	"mission-vision"=>array(
		"title"=>"Mission & Vision",
		"page_heading"=>"Mission & Vision"
	),
	"management"=>array(
		"title"=>"Managing Director Message",
		"page_heading"=>"Director Message"
	),
	"courses"=>array(
		"title"=>"Courses",
		"page_heading"=>"Courses"
	),
	"classinfrastructure"=>array(
		"title"=>"Infrastructure",
		"page_heading"=>"Infrastructure"
	),
	"gallery"=>array(
		"title"=>"GPS Gallery",
		"page_heading"=>"GPS Gallery"
	),
	"mandatory-disclosure"=>array(
		"title"=>"Mandatory Disclosure",
		"page_heading"=>"Mandatory Disclosure"
	),
	"terms-conditions"=>array(
		"title"=>"Terms & Conditions",
		"page_heading"=>"Terms & Conditions"
	),
	"privacy-policy"=>array(
		"title"=>"Privacy Policy",
		"page_heading"=>"Privacy Policy"
	),
	"school-activities"=>array(
		"title"=>"School Activities",
		"page_heading"=>"School Activities"
	),
	"school-house"=>array(
		"title"=>"School House",
		"page_heading"=>"School House"
	),
	"information"=>array(
		"title"=>"About-us",
		"page_heading"=>"Information"
	),
	"students-details"=>array(
		"title"=>"Student-details",
		"page_heading"=>"Student-details"
	),
	"examination"=>array(
		"title"=>"Examination",
		"page_heading"=>"Examination"
	),
	"syllabus"=>array(
		"title"=>"Syallabus",
		"page_heading"=>"Syallabus"
	),
	"result"=>array(
		"title"=>"Result",
		"page_heading"=>"Result"
	),
	"faculty"=>array(
		"title"=>"Faculty",
		"page_heading"=>"Faculty"
	),
	"house-event"=>array(
		"title"=>"House-event",
		"page_heading"=>"House-event"
	),
	"celebration"=>array(
		"title"=>"Celebration Blog",
		"page_heading"=>"Celebration"
	),
	"project"=>array(
		"title"=>"Project",
		"page_heading"=>"School Project"
	),

	"excursion"=>array(
		"title"=>"Excursion",
		"page_heading"=>"School Excursion"
	),

	"laboratory"=>array(
		"title"=>"Laboratory",
		"page_heading"=>"School Laboratory"
	),
	"digital-classroom"=>array(
		"title"=>"digital-classroom",
		"page_heading"=>"digital-classroom"
	),
	"about-us"=>array(
		"title"=>"About-us",
		"page_heading"=>"About-Us"
	)


];

$teaching_staff['one']=[
	'public/img/class/img-08.jpeg'=>array(
		'PRINCIPAL'=>array(
			'type'=>'text',
			'text'=>'Smt. Bidisha Chatterjee'
		),
	
		'Teacher-in-Charge'=>array(
			'type'=>'text',
			'text'=>'14 (48.03sq.mtr. / 517 sq.ft.)'
		),
	
		'Co-Ordinator'=>array(
			'type'=>'text',
			'text'=>'Smt Deepika Mustafi'
		),
		'PGT'=>array(
			'type'=>'text',
			'text'=>'0'
		),
		'TGT'=>array(
			'type'=>'text',
			'text'=>'13'
		),	
		'PRT'=>array(
			'type'=>'text',
			'text'=>'2'
		)
	)
];

$teaching_staff['two']=[
	'public/img/class/img-17.jpeg'=>array(
		'PET'=>array(
			'type'=>'text',
			'text'=>'Smt. Swarnali Chakraborty ( B.A., B.P.Ed., M.P.Ed.)'
		),
		'NTT'=>array(
			'type'=>'text',
			'text'=>'4'
		),
		'DETAILS OF SPECIAL EDUCATOR'=>array(
			'type'=>'text',
			'text'=>'Smt. Tulika Das ( B.A., Spl. B.Ed.)'
		),
		'Counselor & Wellness Teacher'=>array(
			'type'=>'text',
			'text'=>'Dr. Suparna Ray (Chatterjee), MBBS, M.D. (Neuro Psyciatrist)'
		),
		'Lab Attendent'=>array(
			'type'=>'text',
			'text'=>'1'
		)
	)
];

$page_keywords=[
	"home"=>"nurse training institute in kolkata,kolkata nursing training institute,nursing college with own hospital,nursing college at hooghly",
	"about-us"=>"",
	"vision-mission"=>"",
	"director-message"=>"",
	"chairman-message"=>"",
	"principal-message"=>"",
	"bsc-nursing-training-course"=>"b sc nursing course in west bengal,b sc nursing in west bengal,best bsc nursing college in west bengal",
	"gnm-nursing-training-course"=>"admission for gnm in kolkata,general education courses for nursing,general nursing and midwifery,gnm nursing college in kolkata",
	"admission"=>"",
	"placement"=>"",
	"contact-us"=>"",
	"privacy-policy"=>"",
	"terms-conditions"=>""
];

$page_description=[
	"home"=>"At MMIN discover the best nursing training institute in Kolkata and Hooghly with its own hospital. WBNC affiliated nursing college offers comprehensive nursing programs and hands-on clinical experience. Join us to pursue a rewarding career in nursing and healthcare.",
	"about-us"=>"At $site_short_name discover the best nursing training institute in Kolkata and Hooghly with its own hospital. WBNC affiliated nursing college offers comprehensive nursing programs and hands-on clinical experience. Join us to pursue a rewarding career in nursing and healthcare.",
	"vision-mission"=>"",
	"director-message"=>"",
	"chairman-message"=>"",
	"principal-message"=>"",
	"bsc-nursing-training-course"=>"Discover the best B.Sc nursing course in West Bengal at $site_short_name, a top nursing college known for its excellence in education and practical training. Prepare for a successful nursing career with our comprehensive curriculum and state-of-the-art facilities. Enroll now to shape your future in healthcare.",
	"gnm-nursing-training-course"=>"Discover the best GNB Nursing course in West Bengal at $site_short_name, a top nursing college known for its excellence in education and practical training. Prepare for a successful nursing career with our comprehensive curriculum and state-of-the-art facilities. Enroll now to shape your future in healthcare.",
	"admission"=>"",
	"placement"=>"",
	"contact-us"=>"",
	"privacy-policy"=>"",
	"terms-conditions"=>""
];


$galleries=[
	'public/img/nursing/gallery1.jpg',
	'public/img/nursing/gallery2.jpg',
	'public/img/nursing/gallery3.jpeg',
	'public/img/nursing/gallery4.jpg',
	'public/img/nursing/gallery5.jpg',
	'public/img/nursing/gallery6.jpg'
];


//Meta data


$styles=[
	"public/css/bootstrap.min.css"=>"prefetch",
	"public/css/animate.min.css"=>"prefetch",
	"public/css/magnific-popup.css"=>"prefetch",
	"public/fontawesome/css/all.min.css"=>"prefetch",
	"public/css/dripicons.css"=>"prefetch",
	"public/css/meanmenu.css"=>"prefetch",
	"public/css/default.css"=>"prefetch",
	"public/css/style.css"=>"prefetch",
	"public/css/custom.css"=>"prefetch",
	"public/css/responsive.css"=>"prefetch"
];

$scripts=[
	"public/vendors/bootstrap/js/bootstrap.min.js"
	
];

if(empty($lastUriSegment)){

	array_push($scripts, "public/vendors/rev-slider/js/jquery.themepunch.tools.min.js",
		"public/vendors/rev-slider/js/jquery.themepunch.revolution.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.video.min.js",
		"public/js/rev-slider.js");
}





function getUrl () {
    if (!isset($_SERVER['REQUEST_URI'])) {
    $url = $_SERVER['REQUEST_URI'];
    } else {
    $url = $_SERVER['SCRIPT_NAME'];
    $url .= (!empty($_SERVER['QUERY_STRING']))? '?' . $_SERVER[ 'QUERY_STRING' ] : '';

    }
    return $url;
}


//getUrl gets the queried page with query string
function cache ($buffer) { //page's content is $buffer
    $url = getUrl();
    $filename = md5($url) . '.cache';
    $data = time() . '¦' . $buffer;
    $filew = fopen("cache/" . $filename, 'w');
    fwrite($filew, $data);
    fclose($filew);
    return $buffer;
}

function display () {
    $url = getUrl();
    $filename = md5($url) . '.cache';
    if (!file_exists("/cache/" . $filename)) {
    return false;
    }
    $filer = fopen("cache/" . $filename, 'r');
    $data = fread($filer, filesize("cache/" . $filename));
    fclose($filer);
    $content = explode('¦', $data, 2);
    if (count($content)!= 2 OR !is_numeric($content['0'])) {
        return false;
    }
    if (time()-(100) > $content['0']) { // 100 is the cache time here!!!
        return false;
    }
        echo $content['1'];
        die();
}