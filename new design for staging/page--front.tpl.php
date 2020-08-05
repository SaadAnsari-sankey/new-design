<?php
    /**
     * @file
     * Default theme implementation to display a single Drupal page.
     *
     * The doctype, html, head and body tags are not in this template. Instead they
     * can be found in the html.tpl.php template in this directory.
     *
     * Available variables:
     *
     * General utility variables:
     * - $base_path: The base URL path of the Drupal installation. At the very
     *   least, this will always default to /.
     * - $directory: The directory the template is located in, e.g. modules/system
     *   or themes/bartik.
     * - $is_front: TRUE if the current page is the front page.
     * - $logged_in: TRUE if the user is registered and signed in.
     * - $is_admin: TRUE if the user has permission to access administration pages.
     *
     * Site identity:
     * - $front_page: The URL of the front page. Use this instead of $base_path,
     *   when linking to the front page. This includes the language domain or
     *   prefix.
     * - $logo: The path to the logo image, as defined in theme configuration.
     * - $site_name: The name of the site, empty when display has been disabled
     *   in theme settings.
     * - $site_slogan: The slogan of the site, empty when display has been disabled
     *   in theme settings.
     *
     * Navigation:
     * - $main_menu (array): An array containing the Main menu links for the
     *   site, if they have been configured.
     * - $secondary_menu (array): An array containing the Secondary menu links for
     *   the site, if they have been configured.
     * - $breadcrumb: The breadcrumb trail for the current page.
     *
     * Page content (in order of occurrence in the default page.tpl.php):
     * - $title_prefix (array): An array containing additional output populated by
     *   modules, intended to be displayed in front of the main title tag that
     *   appears in the template.
     * - $title: The page title, for use in the actual HTML content.
     * - $title_suffix (array): An array containing additional output populated by
     *   modules, intended to be displayed after the main title tag that appears in
     *   the template.
     * - $messages: HTML for status and error messages. Should be displayed
     *   prominently.
     * - $tabs (array): Tabs linking to any sub-pages beneath the current page
     *   (e.g., the view and edit tabs when displaying a node).
     * - $action_links (array): Actions local to the page, such as 'Add menu' on the
     *   menu administration interface.
     * - $feed_icons: A string of all feed icons for the current page.
     * - $node: The node object, if there is an automatically-loaded node
     *   associated with the page, and the node ID is the second argument
     *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
     *   comment/reply/12345).
     *
     * Regions:
     * - $page['help']: Dynamic help text, mostly for admin pages.
     * - $page['highlighted']: Items for the highlighted content region.
     * - $page['content']: The main content of the current page.
     * - $page['sidebar_first']: Items for the first sidebar.
     * - $page['sidebar_second']: Items for the second sidebar.
     * - $page['header']: Items for the header region.
     * - $page['footer']: Items for the footer region.
     *
     * @see bootstrap_preprocess_page()
     * @see template_preprocess()
     * @see template_preprocess_page()
     * @see bootstrap_process_page()
     * @see template_process()
     * @see html.tpl.php
     *
     * @ingroup templates
     */
    ?>
 <?php render($page['content']['metatags']); ?>
 <?php
    if ($_GET["version"] == 1) {
        ?>

 <link rel="stylesheet" type="text/css" href="sites/esakal/themes/smg980/css/marvelad.css">

 <div class="home-page-wrapper">

     <!-- start marvel ad changes -->
     <div class="adspace">
         <img class="ad-image"
             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/marvel-ad.jpg">
     </div>
     <div class="top-gap-page-wrapper"></div>
     <!-- end marvel ad changes -->

     <div id="mobile-hamburger" class="d-flex justify-content-center transparent-hamburger">
         <div class="d-block main-container">
             <div class="mobile-side-nav p-2">
                 <div id="close-side-nav-btn" class="close-side-nav">
                     <div class="hamburger-logo"></div>
                     <div class="x-style">X</div>
                 </div>
                 <div class="side-nav-item px-2"></div>
                 <div class="side-nav-content">ताज्या</div>
                 <div class="side-nav-content">पुणे</div>
                 <div class="side-nav-content">मुंबई</div>
                 <div class="side-nav-content">देश</div>
                 <div class="side-nav-content">लाईव्ह टीव्ही</div>
                 <div class="side-nav-content">ग्लोबल</div>
                 <div class="side-nav-content">कोरोना</div>
                 <div class="side-nav-content">क्रीडा</div>
             </div>
         </div>
     </div>
     <div class="mobile-global-nav">
         <div id="mobile-side-menu-btn" class="mobile-side-menu"><i class="fa fa-2x fa-bars"></i></div>
         <div class="mobile-logo"></div>
         <div class="mobile-user-login "><i class="fa fa-2x fa-user"></i></div>
     </div>

     <div class="mobile-nav-wrapper flex-column align-items-center justify-content-center">
         <nav class="w-100 h-100 nav mobile-nav justify-content-around align-items-center">
             <div class="mobile-nav-link active" href="#">मुंबई</div>
             <div class="mobile-nav-link active" href="#">ताज्या </div>
             <div class="mobile-nav-link active" href="#">मुख्य</div>
             <div class="mobile-nav-link active" href="#">देश</div>
             <div class="mobile-nav-link active" href="#">जग </div>
             <div class="mobile-nav-link active" href="#">क्रीडा </div>
             <div class="mobile-nav-link active" href="#">पुणे</div>
             <div class="mobile-nav-link active" href="#">कोकण</div>
         </nav>
     </div>

     <div class="global-nav-wrapper">
         <div class="ten"></div>
         <div class="global-nav d-flex align-items-center">
             <div class="global-nav-search d-flex justify-content-end pb-md-1">
                 <i class="fa fa fa-search"></i>
             </div>
             <nav class="nav">
                 <div id="desktop-side-menu-btn" class="nav-link active" href="#">
                     <span>Sections</span>
                     <i class="fa fa-bars " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                     <div class="dropdown-menu dropdown-menu-bottom" x-placement="bottom-start"
                         style="position: absolute; transform: translate3d(0px, 1760px, 0px); top: 0px; left: 0px; will-change: transform;"
                         x-out-of-boundaries="">
                         <a class="dropdown-item" href="#">Action</a>
                         <a class="dropdown-item" href="#">Another action</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                 </div>
                 <div class="nav-link active" href="#">राजकारण</div>
                 <div class="nav-link active" href="#">ताज्या </div>
                 <div class="nav-link active" href="#">मुख्य</div>
                 <div class="nav-link active" href="#">देश</div>
                 <div class="nav-link active" href="#">जग </div>
                 <div class="nav-link active" href="#">क्रीडा </div>
                 <div class="nav-link active" href="#">पुणे</div>
                 <div class="nav-link active" href="#">मुंबई</div>
                 <div class="nav-link active" href="#">कोकण</div>
             </nav>
         </div>
         <div class="ten">
             <div class="user-login d-flex justify-content-center align-items-center ml-auto">
                 <div style="margin-right: 10px;">Sign In</div>
                 <i class="fa fa-user"></i>
             </div>
         </div>
     </div>

     <div id="main-container-id" class="main-container pt-2 pt-md-0">

         <div class="header mb-2">
             <div class="header-logo d-flex align-items-end py-1">
                 <div class="day-date ">Tuesday, March 24, 2020</div>
             </div>
             <div class="header-nav pt-md-2">
                 <nav class="nav">
                     <div class="nav-link active py-1 pl-0" href="#">ताज्या </div>
                     <div class="nav-link active py-1 pl-0" href="#">मुख्य</div>
                     <div class="nav-link active py-1 pl-0" href="#">राजकारण</div>
                     <div class="nav-link active py-1 pl-0" href="#">महाराष्ट्र</div>
                     <div class="nav-link active py-1 pl-0" href="#">नागपूर</div>
                     <div class="nav-link active py-1 pl-0" href="#">संपादकीय</div>
                     <div class="nav-link active py-1 pl-0" href="#">अर्थसंकल्प</div>
                     <div class="nav-link active py-1 pl-0" href="#">जग </div>
                 </nav>
             </div>
         </div>

         <div class="inner-section-width ad-block-top-desktop mt-0" style="height: 200px;margin-bottom: 25px;"></div>
         <div class="ad-block-mobile mt-2" style="height: 50px;"></div>

         <!-- start breaking-news-1 section -->
         <section class="inner-section-width p-0 breaking-news my-2">

             <!-- <div class="container inner-container p-0 d-flex"> -->

             <div class="left-box d-block d-md-flex flex-column pr-2 row1-block1">

                 <div class="left-box-top w-100 d-flex align-items-end justify-content-center">

                     <div class="row m-0 w-100">

                         <div class="my-1 my-md-0 my-lg-1 section-type-1-image d-none d-md-block"></div>

                         <div class="n1 my-md-1 py-2 py-md-2 right-border-zero pt-md-3 pl-md-4"
                             style="background-color: white;">
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">पंतप्रधान मोदींना आवडतात फक्त मराठी दिग्गजांची ही 2
                                 गाणी</div>
                             <div
                                 class="col-lg-1 col-md-0 my-1 my-md-0 my-lg-1 section-type-1-image mb-md-3  d-md-none">
                             </div>
                             <div class="source-container mb-2 d-md-none">source : संतोषचं आयुष्य, टप्प्याटप्प्यानं वळणं
                                 घेत घेत कुणीकडे गेलं हे त्याच्या सगळ्या हकीकतीवरून कळलं.संतोषचं आयुष्य,
                                 टप्प्याटप्प्यानं</div>
                             <div class="news-description mb-1 mb-md-0">
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये
                                 चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                 हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>

                         <div class="n2 py-2 my-md-1 py-md-2 pr-0 pt-md-3" style="background-color: white;">
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">पंतप्रधान मोदींना आवडतात फक्त मराठी दिग्गजांची ही 2
                                 गाणी</div>
                             <div class="news-description mb-1 mb-md-0">
                                 मुंबई : मुंबई कृषी उत्पन्न बाजार समितीच्या वाशी येथील फळ बाजारात फळांच्या राजा हापूस
                                 आंबा दाखल झाला आहे. वातावरणाचा फटका बसल्याने यावर्षी हापूस आंब्याची बाजारातील आवक
                                 नेहमीच्या मानाने घटलेली आहे. त्यातच कोरोनाच्या प्रभावाने बाजारात आंब्याला आता उठावही
                                 नाही, निर्यातही कमी ठप्प असल्याने कोकणातील हापूस आंबा बागायतदार आणि व्यापाऱ्यांची चिंता
                                 वाढली आहे.
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>
                     </div>

                 </div>

                 <div class="left-box-bottom w-100 d-block d-md-flex flex-column align-items-center">

                     <div class="row m-0 h-md-50 w-100">

                         <div class="nl py-2 my-md-1 py-md-2 pl-lg-0 right-border-1">

                             <!-- <div class="d-block"> -->
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन
                                 दहशतवाद्यांचा केला खात्मा</div>

                             <div class="news-description mb-1 mb-md-0">
                                 मुंबई :महाराष्ट्रासह मुंबईत कोरोनाग्रस्तांचा आकडा वाढत चालला आहे. मुंबईत कोरोनाचे
                                 सर्वात जास्त रुग्ण आढळले आहेत. त्यामुळे खरबदारीचा उपाय म्हणून प्रशासन योग्य ती पावलं
                                 उचलत आहे. आशिया खंडातील सर्वात गजबजलेला आणि दाट लोकवस्तीचा भाग म्हणून ओळख असलेल्या
                                 धारावीमध्ये
                                 तब्बल ७ कोरोनाचे रुग्ण आढळले आहेत त्यामुळे प्रशासन अधिकच सतर्क झालं आहे..
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>

                         <div class="nr my-md-1 py-2 py-md-2 pr-lg-0">
                             <!-- <div class="d-block"> -->
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">पती-पत्नी आणि ती ! अपूर्वानं 'या' कारणामुळं रोहित
                                 तिवारीची केली हत्या</div>


                             <div class="news-description mb-1 mb-md-0 d-block d-lg-none">
                                 कोरोना व्हायरस सगळीकडे सध्या थैमान घालत आहे. त्यामुळे सर्व यंत्रणा डोळ्यात तेल घालून
                                 काम करीत आहे. आरोग्य यंत्रणेतील मनुष्यबळ कमी पडतंय वाटायला लागल्यावर सरकारने 'आशा'
                                 वर्कर्स यांना आरोग्य विभागाच्या मदतीसाठी बोलावले आहे. सरकार त्यांना कामांसाठी महिन्याला
                                 एक हजार वेतन देणार आहे. शासनाकडून बोलावणे आल्यानंतर आशा वर्कर्स 'कोरोना'शी धैर्याने लढत
                                 आहेत. खरं तर ग्रामीण व शहरी भागात आशा वर्कर्स गरोदर महिलांची तपासणी करणे, नवजात
                                 बालकांची काळजी घेणे, बालकांचे लसिकरण करणे,
                                 माता-बालमृत्यू दर कमी करणे, गरोदर महिलांना पोषक आहाराबाबत मार्गदर्शन करणे, किशोरवयीन
                                 मुलींना मार्गदर्शन करणे यासह टि.बी., एचआयव्ही, मलेरीया, डेंग्यू यासारख्या साथीच्या
                                 आजारांमध्ये लोकांचे आरोग्य सांभाळन्याचे काम
                                 करतात. आशा वर्कर्स 'कोरोना' संदर्भात आपलं कर्तव्य पार पडत असताना त्यांच्यावर हल्ले होत
                                 आहेत. काही जणींना तर यापेक्षा वाईट प्रसंगाला सामोरे जावे लागत आहे. त्यामुळे या आशा
                                 वर्कर्स कोरोनाच्या काळात कोणत्या परिस्थितीत
                                 काम करत आहेत याचा आढावा इ
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>


                         <!-- ad-row1 -->
                         <div class="ad-block-mobile my-3 inner-section-width d-md-none"></div>
                         <!-- end-ad-row1 -->

                     </div>

                     <div class="row m-0 h-md-50 w-100">
                         <div class="row3nl my-md-1 py-2 py-md-2 pl-lg-0 right-border-2">
                             <!-- <div class="d-block"> -->
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दोन दोन
                                 दहशतवाद्यांचा केला खात्मा</div>

                             <div class="news-description mb-1 mb-md-0">
                                 छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन १५०० के बाद से अभी तक इस उद्योग का
                                 मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन १५०० के बाद से
                                 अभी तक इस उद्योग का मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग का एक साधारण डमी
                                 पाठ है.सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन.
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>

                         <div class="row3nr my-md-1 py-2 py-md-2 pr-lg-0">
                             <!-- <div class="d-block"> -->
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">पंतप्रधान मोदींना आवडतात फक्त मराठी दिग्गजांची ही 2
                                 गाणी</div>

                             <div class="news-description mb-1 mb-md-0">
                                 छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन १५०० के बाद से अभी तक इस उद्योग का
                                 मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन १५०० के बाद से
                                 अभी तक इस उद्योग का मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग का एक साधारण डमी
                                 पाठ है.सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन.
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>
                     </div>

                 </div>

             </div>
             <div class="right-box d-none d-md-flex flex-column justify-content p-0">
                 <div class="mb-2 w-100 d-flex justify-content-center align-items-center" style="height: 8%;"></div>
                 <div class="mb-2 w-100 video-title">Video</div>
                 <div class="right-box-sub w-100 d-flex justify-content-center align-items-center" style="height: 22%;">
                     <iframe width="100%" height="100%" src="https://www.youtube.com/embed/bbNFwiSY05g" frameborder="0"
                         allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                         allowfullscreen></iframe></div>
                 <div class="right-box-sub w-100 e-paper" style="background-color: aqua; height: 18.5%;"></div>
                 <div class="right-box-sub w-100 d-flex justify-content-center align-items-center"
                     style="background-color: gray;height: 250px;width: 320px;">Advertisement-2(320 * 250)</div>
             </div>
             <!-- </div> -->
         </section>
         <!-- end breaking-news-1 section -->
         <div class="inner-section-width ad-block-top-desktop d-md-flex d-sm-none" style="height: 100px;"></div>


         <!-- start breaking-news-2 section -->
         <section class="inner-section-width breaking-news-2 my-2 p-0 pb-md-1">
             <div class="left-box row ml-0 pr-lg-2 ">
                 <div class="col-md-6 col-sm-12 pl-lg-0 mb-lg-2 my-1">
                     <div class="card-img-top mb-2">
                         <img class="w-100 h-100"
                             src="https://www.faz.net/ppmedia/aktuell/technik-motor/3131404806/1.5896418/mmo-uebersichtsseite-aufmacher-retina/teaser-bild-fuer-f-a-z.jpg"
                             alt="Card image cap">
                     </div>
                     <div class="mobile-overlap p-2 pl-3 p-md-0">
                         <div class="news-section-title mb-2">साधारण</div>
                         <div class="news-title mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद दहशतवादयांचा केला खातमा
                         </div>
                     </div>
                     <div class="news-description mb-1">
                         वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत मुलांना हा अधिकार मिळतो.
                         त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची
                         आहे, असे स्पष्ट मुंबई उच्च न्यायालयाने व्यक्त केले व वडिलोपार्जित
                         मालमत्तेपासून वंचित ठेवण्याविरोधात मुलाने केलेली याचिका फेटाळली.
                     </div>
                     <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                 </div>
                 <div class="col-md-6 col-sm-12 pr-lg-0 mb-lg-2 my-1">
                     <div class="card-img-top mb-2">
                         <img class="w-100 h-100"
                             src="https://www.ccn.com/wp-content/uploads/2019/08/stock-market-bubble-ap-768x512.jpg"
                             alt="Card image cap">
                     </div>
                     <div class="mobile-overlap p-2 pl-3 p-md-0">
                         <div class="news-section-title mb-2">साधारण</div>
                         <div class="news-title mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद दहशतवादयांचा केला खातमा
                         </div>
                     </div>
                     <div class="news-description mb-1">
                         कोरोना या विषाणूचा प्रादुर्भाव रोखण्यासाठी केंद्र व राज्य सरकारने जाहीर केलेला लॉकडाउन
                         वाढण्याची शक्&zwj;यता आता दाट वाटू लागली आहे. या पार्श्&zwj;वभूमीवर महाराष्ट्र लोकसेवा आयोगाने
                         मंगळवारी (ता. 7) महत्त्वाचा निर्णय जाहीर करीत राज्यसेवेची पूर्व परीक्षा
                         व महाराष्ट्र राज्य दुय्यम सेवा अराजपत्रित गट-ब संयुक्&zwj;त पूर्व परीक्षा पुढे ढकलण्याचा निर्णय
                         घेतला. मात्र, पुढे कधी परीक्षा होणार हे स्पष्ट केलेले नाही.
                     </div>
                     <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                 </div>
             </div>
             <div class="right-box pl-md-0 d-none d-md-flex flex-column justify-content-start align-items-center">
                 <div class="advertisement-4 w-100 d-flex justify-content-center align-items-center"
                     style="background-color: gray; height: 250px;">
                     Advertisement-4 (320 * 250)
                 </div>
                 <div class="newsletter w-100 d-flex flex-column justify-content-around">
                     <div class="section-title mb-md-2">Newsletter</div>
                     <div class="input-group mb-1">
                         <input type="email" class="form-control newsletter-input"
                             placeholder="ENTER YOUR EMAIL ADDRESS" aria-label="Recipient's username"
                             aria-describedby="basic-addon2">
                         <div class="input-group-append">
                             <button class="btn newsletter-button" type="button">GO</button>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- end breaking-news-2 section -->

         <!-- more top Stories -->
         <div class="d-flex flex-column flex-md-row mf-md-3 mt-md-2 section-top-stories mts-section">
             <div class="more-top-stories pr-md-0 pt-2 pb-2 pt-md-0 more-top-stories-right-container">
                 <center class="d-md-block float-md-right"><span>More Top Stories</span></center>
             </div>
             <div class="mts-articles pr-md-0 pt-md-1">
                 <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">
                     <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pr-md-5">
                         <div class="top-stories-art-img">
                             <a href="#"><img data-adaptive-image-breakpoint="1280"
                                     src="https://www.sltrib.com/resizer/mLRVbM95hdlLoDQjUj6c1RRFP_w=/1200x630/filters:quality(85)/arc-anglerfish-arc2-prod-sltrib.s3.amazonaws.com/public/ZNG7LL4U7FEIRNLOQL5C26M66M.jpg"
                                     alt="4dog_26.jpg" title="4dog_26.jpg" style="display: block;">
                             </a>
                         </div>
                     </div>
                     <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                         <div class="d-inline-block d-md-block news-section-title mb-2">
                             अनंतनाग
                         </div>
                         <div class="article-title mb-1 mb-md-2">
                             अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी
                         </div>
                         <div class="article-description">
                             अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत जवानांनी अजिवलीच्या
                             दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा
                             केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                         </div>
                         <div class="post-time-and-comment mt-1 mt-md-2">
                             <span class="time mr-md-1">
                                 6 h ago
                             </span>
                             <span class="time d-none d-md-inline">
                                 633 Comments
                             </span>
                         </div>
                     </div>
                 </div>
                 <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">

                     <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pr-md-5">
                         <div class="top-stories-art-img">
                             <a href="#"><img class="adaptive-image img-responsive"
                                     data-adaptive-image-breakpoint="1280"
                                     src="https://media.npr.org/assets/img/2018/11/27/ap_18325053082002_wide-54c4601d9682527bdc0f43a5f5596079dd2c24b1-s800-c85.jpg"
                                     width="205" height="115" alt="4dog_26.jpg" title="4dog_26.jpg"
                                     style="display: block;">
                             </a>
                         </div>
                     </div>
                     <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                         <div class="d-inline-block d-md-block news-section-title mb-2">
                             अनंतनाग
                         </div>
                         <div class="article-title mb-1 mb-md-2">
                             अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी
                         </div>
                         <div class="article-description">
                             अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत जवानांनी अजिवलीच्या
                             दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा
                             केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                         </div>
                         <div class="post-time-and-comment mt-1 mt-md-2">
                             <span class="time mr-md-1">
                                 6 h ago
                             </span>
                             <span class="time d-none d-md-inline">
                                 633 Comments
                             </span>
                         </div>
                     </div>
                 </div>
                 <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">
                     <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pr-md-5">
                         <div class="top-stories-art-img">
                             <a href="#"><img class="adaptive-image img-responsive"
                                     data-adaptive-image-breakpoint="1280"
                                     src="https://i.guim.co.uk/img/media/3b854be00205da69cc353f70d5e8f806a574a1b4/0_77_4000_2400/master/4000.jpg?width=300&quality=85&auto=format&fit=max&s=da6ea3439077622c641c0a4b91104f30"
                                     width="205" height="115" alt="4dog_26.jpg" title="4dog_26.jpg"
                                     style="display: block;">
                             </a>
                         </div>
                     </div>
                     <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                         <div class="d-inline-block d-md-block news-section-title mb-2">
                             अनंतनाग
                         </div>
                         <div class="article-title mb-1 mb-md-2">
                             अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी
                         </div>
                         <div class="article-description">
                             अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत जवानांनी अजिवलीच्या
                             दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा
                             केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                         </div>
                         <div class="post-time-and-comment mt-1 mt-md-2">
                             <span class="time mr-md-1">
                                 6 h ago
                             </span>
                             <span class="time d-none d-md-inline">
                                 633 Comments
                             </span>
                         </div>
                     </div>
                 </div>
                 <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">
                     <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pr-md-5">
                         <div class="top-stories-art-img">
                             <a href="#"><img class="adaptive-image img-responsive"
                                     data-adaptive-image-breakpoint="1280"
                                     src="https://static.standard.co.uk/s3fs-public/thumbnails/image/2018/07/29/15/robertmugabe2907.jpg"
                                     width="205" height="115" alt="4dog_26.jpg" title="4dog_26.jpg"
                                     style="display: block;">
                             </a>
                         </div>
                     </div>
                     <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                         <div class="d-inline-block d-md-block news-section-title mb-2">
                             अनंतनाग
                         </div>
                         <div class="article-title mb-1 md-md-2">
                             अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी
                         </div>
                         <div class="article-description">
                             अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत जवानांनी अजिवलीच्या
                             दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा
                             केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                         </div>
                         <div class="post-time-and-comment mt-1 mt-md-2">
                             <span class="time mr-md-1">
                                 6 h ago
                             </span>
                             <span class="time d-none d-md-inline">
                                 633 Comments
                             </span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- end more top stories -->
         <!-- ad -->
         <div class="ad-block-mobile my-3 d-md-none"></div>
         <!-- creative-lab -->
         <div class="d-flex mt-md-4">
             <div class="ctl-right-bar-dsk d-none d-md-block"></div>

             <div class="d-flex flex-column flex-md-row cl-section mt-md-0">

                 <div class="more-top-stories pr-md-0 pt-1 pb-1 pb-md-0 pt-md-0 pl-md-0 cl-title-section">
                     <div class="cl-bg">
                         <center class="d-inline-block float-left mt-md-3">
                             <span class="mr-3">Paid content</span><span class="d-none d-md-inline">About</span>
                             <span class="d-block c-innovatn-m-top">Creative innovation</span></center>
                         <div class="ca-sak-lab">
                             <div class="title d-none d-md-block">Sakal Labs</div>
                             <div class="mobile title mr-2 d-md-none">Sakal Brand Studio</div>
                             <div class="angular-bracket d-md-none"><i class="fa fa-angle-right"></i></div>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex flex-wrap cl-right-section">
                     <div
                         class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-3">

                         <div class="pl-2 pt-3 pt-md-0 p-md-0">
                             <div class="top-stories-art-img">

                                 <a href="/"><img
                                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/4aag_475.jpg"
                                         alt="4dog_26.jpg" title="4dog_26.jpg">
                                 </a>

                             </div>
                         </div>
                         <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                             <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                 अनंतनाग
                             </div>
                             <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                 दहशदवाद्यांचा केला खात्मा</div>
                             <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                 केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                             <div class="post-time-and-comment mt-1 mt-md-2">
                                 <span class="time mr-md-1">
                                     6 h ago
                                 </span>
                                 <span class="time d-none d-md-inline">
                                     633 Comments
                                 </span>
                             </div>
                         </div>
                     </div>
                     <div
                         class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-3">
                         <div class="pl-2 pt-3 pt-md-0 p-md-0">
                             <div class="top-stories-art-img">
                                 <a href="/"><img
                                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/2mpsc_650_081614125408.jpg"
                                         alt="4dog_26.jpg" title="4dog_26.jpg">
                                 </a>
                             </div>
                         </div>
                         <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                             <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                 अनंतनाग
                             </div>
                             <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                 दहशदवाद्यांचा केला खात्मा</div>
                             <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                 केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                             <div class="post-time-and-comment mt-1 mt-md-2">
                                 <span class="time mr-md-1">
                                     6 h ago
                                 </span>
                                 <span class="time d-none d-md-inline">
                                     633 Comments
                                 </span>
                             </div>
                         </div>
                     </div>
                     <div
                         class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-3">
                         <div class="pl-2 pt-3 pt-md-0 p-md-0">
                             <div class="top-stories-art-img">
                                 <a href="/"><img
                                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/0bank_20ok.JPG"
                                         alt="4dog_26.jpg" title="4dog_26.jpg">
                                 </a>
                             </div>
                         </div>
                         <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                             <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                 अनंतनाग
                             </div>
                             <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                 दहशदवाद्यांचा केला खात्मा</div>
                             <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                 केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                             <div class="post-time-and-comment mt-1 mt-md-2">
                                 <span class="time mr-md-1">
                                     6 h ago
                                 </span>
                                 <span class="time d-none d-md-inline">
                                     633 Comments
                                 </span>
                             </div>
                         </div>
                     </div>
                     <div
                         class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-3">
                         <div class="pl-2 pt-3 pt-md-0 p-md-0">
                             <div class="top-stories-art-img">
                                 <a href="/"><img
                                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/32Mahavitaran_h_30_8.jpg"
                                         alt="4dog_26.jpg" title="4dog_26.jpg">
                                 </a>
                             </div>
                         </div>
                         <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                             <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                 अनंतनाग
                             </div>
                             <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                 दहशदवाद्यांचा केला खात्मा</div>
                             <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                 केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                             <div class="post-time-and-comment mt-1 mt-md-2">
                                 <span class="time mr-md-1">
                                     6 h ago
                                 </span>
                                 <span class="time d-none d-md-inline">
                                     633 Comments
                                 </span>
                             </div>
                         </div>

                     </div>
                 </div>

             </div>
         </div>
         <!-- end creative lab -->
         <!-- ad -->
         <div class="ad-block-mobile my-3 d-md-none"></div>
         <!-- reader's favourite -->
         <div class="d-flex flex-column flex-md-row cl-section rf-section mt-md-3">

             <div class="more-top-stories pr-md-0 pt-2 pb-2 pb-md-1 pt-md-0 pl-md-0">
                 <div class="cl-bg">
                     <div class="rf-bg">
                         <center class="d-inline-block float-left mt-md-2">
                             <span class="ml-md-0 mr-1 d-md-block">Reader's</span>
                             <span class="d-md-block">Favourite</span></center>
                         <div class="rf-angular-backet d-md-none"><i class="fa fa-angle-right"></i></div>
                     </div>
                 </div>
             </div>
             <div class="d-flex flex-wrap rf-section-right">
                 <div
                     class="more-top-stories-articles rf-sub-section d-flex flex-wrap cb-articles col-12 col-md-4 pb-md-1 pr-md-0 pt-0 pb-0 pl-md-3">
                     <div class="rf-sub-section-title mr-title mt-md-2 mb-md-2">
                         <div class="d-md-none plus-sign"><i class="fa fa-minus"></i></div>
                         <div class="rf-title">
                             Most Read Articles</div>
                         <div class="d-md-none angle-sign"><i class="fa fa-angle-down"></i></div>
                     </div>
                     <div class="rf-section-news-container mr-new-container">
                         <div class="rf-blocks-article-one mb-2">
                             <div class="pl-2 pt-md-0 p-md-0 d-none d-md-block">
                                 <div class="top-stories-art-img">
                                     <a href="/"><img
                                             src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/0bus_accident_1_0.jpg"
                                             alt="4dog_26.jpg" title="4dog_26.jpg">
                                     </a>
                                 </div>
                             </div>
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1 mt-2">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-eye pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> views </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-eye pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> views </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-eye pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> views </spann>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
                 <div
                     class="more-top-stories-articles rf-sub-section d-flex flex-wrap cb-articles col-12 col-md-4 pb-md-1 pr-md-0 pt-0 pb-0 pl-md-3">
                     <div class="rf-sub-section-title mc-title mt-md-2 mb-md-2">
                         <div class="d-md-none plus-sign"><i class="fa fa-minus"></i></div>
                         <div class="rf-title">
                             Most commented Articles</div>
                         <div class="d-md-none angle-sign"><i class="fa fa-angle-down"></i></div>
                     </div>
                     <div class="rf-section-news-container mc-new-container">
                         <div class="rf-blocks-article-one mb-2">
                             <div class="pl-2 pt-md-0 p-md-0 d-none d-md-block">
                                 <div class="top-stories-art-img">
                                     <a href="/"><img
                                             src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/4b9fb2f64_4f36_4a71_ad25_e063d050bde5.jpg"
                                             alt="4dog_26.jpg" title="4dog_26.jpg">
                                     </a>
                                 </div>
                             </div>
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1 mt-2">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="pr-1"><img
                                             src="https://sankey-bucket.s3-ap-southeast-1.amazonaws.com/comments-icon.png"
                                             style="width: 11px;"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> comments </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="pr-1"><img
                                             src="https://sankey-bucket.s3-ap-southeast-1.amazonaws.com/comments-icon.png"
                                             style="width: 11px;"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> comments </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="pr-1"><img
                                             src="https://sankey-bucket.s3-ap-southeast-1.amazonaws.com/comments-icon.png"
                                             style="width: 11px;"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> comments </spann>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
                 <div
                     class="more-top-stories-articles rf-sub-section d-flex flex-wrap cb-articles col-12 col-md-4 pb-md-1 pr-md-0 pt-0 pb-0 pl-md-3">
                     <div class="rf-sub-section-title ms-title mt-md-2 mb-md-2">
                         <div class="d-md-none plus-sign"><i class="fa fa-minus"></i></div>
                         <div class="rf-title">
                             Most Shared Articles</div>
                         <div class="d-md-none angle-sign"><i class="fa fa-angle-down"></i></div>
                     </div>
                     <div class="rf-section-news-container ms-new-container">
                         <div class="rf-blocks-article-one mb-2">
                             <div class="pl-2 pt-md-0 p-md-0 d-none d-md-block">
                                 <div class="top-stories-art-img">
                                     <a href="/"><img
                                             src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/000000006_4.jpg"
                                             alt="4dog_26.jpg" title="4dog_26.jpg">
                                     </a>
                                 </div>
                             </div>
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1 mt-2">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-share-square-o pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> shared </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-share-square-o pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> shared </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-share-square-o pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> shared </spann>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>

         </div>
         <!-- end reader's favourite -->


         <!--- ad -->


         <div class="ad-block-top-desktop d-none d-md-flex d-sm-none mt-md-0" style="height: 100px;width:83%;"></div>

         <!---end ad--->

         <!-- start video-story section-->
         <!-- start video-story section-->
         <section class="d-flex flex-column align-items-center w-100 mt-2 my-md-2 pt-md-3 pb-md-2 video-story">

             <div class="section-title-mobile d-flex d-md-none justify-content-between m-0">
                 <span class="mx-3">Videos</span>
                 <i class="fa fa-angle-right mx-3"></i>
             </div>

             <div class="px-0 flex-column inner-section-width">

                 <span class="section-title-desktop">Videos</span>

                 <div class="d-flex align-items-start px-0 pb-2 py-md-2 video-box">

                     <div class="d-flex d-md-block flex-column main-v-story-container">

                         <div class="video-main-desktop mb-4 mb-md-0">
                             <img class="w-100 h-100"
                                 src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/smg_980news_story_section/public/news-story/cover-images/1baramatinagarparishad_1.jpg">
                             <div class="d-flex flex-column justify-content-end w-100 video-overlay">
                                 <div class="ml-4 mb-2 d-inline-block video-item-info main-video">
                                     <span class="news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                         केला</span>
                                     <span class="d-inline-block mr-2 v-time">1 d ago</span>
                                     <span class="d-inline-block mr-2 v-views">
                                         <i class="fa fa-eye pr-1"></i> 12,002 views
                                     </span>
                                     <span class="d-inline-block mr-2 v-views">
                                         <i class="fa fa-comment pr-1"></i> 6,383 comments
                                     </span>
                                 </div>
                             </div>
                             <div
                                 class="d-flex flex-column justify-content-center align-items-center w-100 video-overlay b-0">
                                 <img class="m-2 play-icon"
                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                             </div>
                         </div>

                         <div class="d-none my-2 py-1 d-md-flex social-icons">
                             <span class="s-icon mr-1" style="background-color: #3b5998;">
                                 <i class="fa fa-facebook fa-social-custom"></i>
                             </span>
                             <span class="s-icon mr-1" style="background-color: #00acee;">
                                 <i class="fa fa-twitter fa-social-custom"></i>
                             </span>
                             <span class="s-icon mr-1" style="background-color: #003300;">
                                 <i class="fa fa-linkedin fa-social-custom"></i>
                             </span>
                             <span class="s-icon mr-1" style="background-color: #060d13;">
                                 <img class="s-icon-img"
                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/email.svg">
                             </span>
                         </div>

                         <div class="d-flex py-3 px-1 px-md-0 py-md-0 my-md-2 justify-content-between video-item-card">
                             <div class="v-image">
                                 <img class="w-100 h-100"
                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/maxresdefault.jpg">
                                 <div class="d-flex align-items-end video-overlay">
                                     <img class="m-2 play-icon"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                                 </div>
                             </div>
                             <div class="ml-2 ml-md-4 d-inline-block video-item-info">
                                 <span class="upnext d-none d-md-block">Up Next</span>
                                 <span class="mb-1 news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                     केला</span>
                                 <span class="v-time mt-1 mb-0 mt-md-2 mb-md-1">1 d ago</span>
                                 <span class="v-views mr-md-2">
                                     <i class="fa fa-eye pr-1"></i> 12,002 views
                                 </span>
                                 <span class="v-views">
                                     <i class="fa fa-comment pr-1"></i> 6,383 comments
                                 </span>
                             </div>
                         </div>
                     </div>

                     <div class="d-flex flex-column other-v-story-container">
                         <div class="d-flex py-3 px-1 px-md-0 py-md-0 mb-md-3 justify-content-between video-item-card">
                             <div class="v-image">
                                 <img class="w-100 h-100"
                                     src="https://img.freepik.com/free-vector/successful-business-woman-vector-illustration_107173-4215.jpg?size=626&ext=jpg">
                                 <div
                                     class="d-flex align-items-end align-items-md-center justify-content-md-center video-overlay">
                                     <img class="m-2 d-md-none play-icon"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                                     <img class="m-2 d-none d-md-block play-icon-white"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play-white.svg">
                                 </div>
                             </div>
                             <div class="mt-0 mt-md-2 ml-2 ml-md-0 d-inline-block video-item-info">
                                 <span class="news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                     केला</span>
                                 <span class="v-time mt-1 mb-0 mt-md-1 mb-md-1">1 d ago</span>
                                 <span class="v-views">
                                     <i class="fa fa-eye pr-1"></i> 12,002 views
                                 </span>
                                 <span class="v-views">
                                     <i class="fa fa-comment pr-1"></i> 6,383 comments
                                 </span>
                             </div>
                         </div>
                         <div class="d-flex py-3 px-1 px-md-0 py-md-0 mb-md-3 justify-content-between video-item-card">
                             <div class="v-image">
                                 <img class="w-100 h-100"
                                     src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/2TIGER_2.jpg">
                                 <div
                                     class="d-flex align-items-end align-items-md-center justify-content-md-center video-overlay">
                                     <img class="m-2 d-md-none play-icon"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                                     <img class="m-2 d-none d-md-block play-icon-white"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play-white.svg">
                                 </div>
                             </div>
                             <div class="mt-0 mt-md-2 ml-2 ml-md-0 d-inline-block video-item-info">
                                 <span class="news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                     केला</span>
                                 <span class="v-time mt-1 mb-0 mt-md-1 mb-md-1">1 d ago</span>
                                 <span class="v-views">
                                     <i class="fa fa-eye pr-1"></i> 12,003 views
                                 </span>
                                 <span class="v-views">
                                     <i class="fa fa-comment pr-1"></i> 6,383 comments
                                 </span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </section>
         <div class="ad-block-mobile mb-3 mt-2"></div>
         <!-- end video-story section -->

         <!-- start categories section -->
         <section class="inner-section-width categories d-flex flex-column align-items-center my-md-2">
             <span class="align-self-start section-title-desktop">Categories</span>

             <div class="row adjust-categories">

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">POLITICS</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">Politics</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/0Car_30.jpg"
                         alt="Card image cap">

                     <div id="category1" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा
                         </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा
                         </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा
                         </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा
                         </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">WORLD</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">World</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/0Corona_20V_8.jpg"
                         alt="Card image cap">

                     <div id="category2" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">NATIONAL</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">National</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/4personal_finance.jpg"
                         alt="Card image cap">

                     <div id="category3" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">POST EVERYTHING</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">PostEverything</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/1hapus_mango_2.jpg"
                         alt="Card image cap">

                     <div id="category4" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

             </div>

             <div class="ad-block-top-desktop"></div>

             <div class="row adjust-categories">

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">POLITICS</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">Politics</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/4personal_finance.jpg"
                         alt="Card image cap">

                     <div id="category5" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">WORLD</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">World</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/3hyundai_i20.jpg"
                         alt="Card image cap">

                     <div id="category6" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">NATIONAL</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">National</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/image-story/gallery-images/11_322.jpg"
                         alt="Card image cap">

                     <div id="category7" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">POST EVERYTHING</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">PostEverything</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/smg_980large_m/public/news-story/cover-images/2Vegitables_0.gif"
                         alt="Card image cap">

                     <div id="category8" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

             </div>

         </section>
         <!-- end categories section -->

         <!-- start entertaiment section -->
         <section class="w-100 my-md-2 entertainment">
             <div class="section-title-mobile d-flex d-md-none justify-content-between">
                 <span class="mx-3">ENTERTAINMENT</span>
                 <i class="fa fa-angle-right mx-3"></i>
             </div>

             <div class="inner-container px-0">
                 <span class="section-title-desktop">Entertainment</span>
                 <div class="row mx-0 mb-md-3">
                     <div class="px-0 pr-md-2 pt-md-1 pb-md-2 col-md-8 entertainment-container">
                         <div id="entertainment-carousel" class="carousel slide" data-ride="carousel">

                             <ol class="carousel-indicators c-indicator">
                                 <li data-slide-to="0" class="dot-indicators active"></li>
                                 <li data-slide-to="1" class="dot-indicators"></li>
                                 <li data-slide-to="2" class="dot-indicators"></li>
                                 <li data-slide-to="3" class="dot-indicators"></li>
                                 <li data-slide-to="4" class="dot-indicators"></li>
                                 <li data-slide-to="5" class="dot-indicators"></li>
                             </ol>

                             <ol class="carousel-indicators v-story-indicators">
                                 <li data-slide-to="0" class="triangle active"></li>
                                 <li data-slide-to="1" class="triangle"></li>
                                 <li data-slide-to="2" class="triangle"></li>
                             </ol>

                             <div class="carousel-inner">
                                 <div class="carousel-item active">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                             alt="First slide">
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                             alt="Second slide">
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                             alt="Third slide">
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                             alt="Fourth slide">
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                             alt="Fourth slide">
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                             alt="Fourth slide">
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="entertainment-list-box">
                             <ul class="list-unstyled">
                                 <li class="entertainment-list d-md-flex align-items-center">
                                     <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                     <div class="news-description">
                                         <span class="v-time mb-2">4 h ago</span>
                                         <!-- <span class="v-time">1234 comments</span> -->
                                     </div>
                                 </li>
                                 <li class="entertainment-list d-md-flex align-items-center">
                                     <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                     <div class="news-description">
                                         <span class="v-time mb-2">4 h ago</span>
                                         <!-- <span class="v-time">1234 comments</span> -->
                                     </div>
                                 </li>
                                 <li class="entertainment-list d-md-flex align-items-center">
                                     <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                     <div class="news-description">
                                         <span class="v-time mb-2">4 h ago</span>
                                         <!-- <span class="v-time">1234 comments</span> -->
                                     </div>
                                 </li>
                                 <li class="entertainment-list d-md-none align-items-center">
                                     <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                     <div class="news-description">
                                         <span class="v-time mb-2">4 h ago</span>
                                         <!-- <span class="v-time">1234 comments</span> -->
                                     </div>
                                 </li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-md-4 py-2 pr-0 pt-md-1 pb-md-2 ad-block-desktop">
                         <div class="ad-block"></div>
                     </div>
                 </div>
                 <div class="row mx-0">
                     <div class="col-md-4 py-2 pl-0 ad-block-desktop">
                         <div class="ad-block"></div>
                     </div>
                     <div class="col-md-4 py-2 ad-block-desktop">
                         <div class="ad-block"></div>
                     </div>
                     <div class="col-md-4 py-2 pr-0 ad-block-desktop">
                         <div class="ad-block"></div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- end entertaiment section -->

         <div class="ad-block-mobile mb-2"></div>

         <!-- start footer-top section-->
         <section class="w-100 mt-2 footer-top">
             <div class="inner-container px-0 px-md-4 pt-md-3 pb-md-3 icon-container">
                 <div class="row mx-0">
                     <div id="menu-1"
                         class="d-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                         <ul class="m-0 p-0">
                             <li>
                                 <i class="fa fa-envelope" aria-hidden="true"></i>
                                 <span>Newsletter</span>
                             </li>
                             <li>
                                 <i class="fa fa-phone" aria-hidden="true"></i>
                                 <span>SAAM TV</span>
                             </li>
                             <li>
                                 <i class="fa fa-pencil" aria-hidden="true"></i>
                                 <span>SAKAL TIMES</span>
                             </li>
                             <li>
                                 <i class="fa fa-book" aria-hidden="true"></i>
                                 <span>SARKARNAMA</span>
                             </li>
                             <li>
                                 <i class="fa fa-square" aria-hidden="true"></i>
                                 <span>YINBUZZ</span>
                             </li>
                         </ul>
                     </div>
                     <div id="menu-2"
                         class="d-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                         <ul class="m-0 p-0">
                             <li>
                                 <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                 <span>SAKAL Printer</span>
                             </li>
                             <li>
                                 <i class="fa fa-certificate" aria-hidden="true"></i>
                                 <span>Subscribe</span>
                             </li>
                             <li>
                                 <i class="fa fa-bank" aria-hidden="true"></i>
                                 <span>Advertise with us</span>
                             </li>
                             <li>
                                 <i class="fa fa-headphones" aria-hidden="true"></i>
                                 <span>Newsletter</span>
                             </li>
                             <li>
                                 <i class="fa fa-cubes" aria-hidden="true"></i>
                                 <span>Contact us</span>
                             </li>
                         </ul>
                     </div>
                     <div id="menu-3"
                         class="d-none d-md-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                         <ul class="m-0 p-0">
                             <li>
                                 <i class="fa fa-envelope" aria-hidden="true"></i>
                                 <span>Newsletter</span>
                             </li>
                             <li>
                                 <i class="fa fa-phone" aria-hidden="true"></i>
                                 <span>SAAM TV</span>
                             </li>
                             <li>
                                 <i class="fa fa-pencil" aria-hidden="true"></i>
                                 <span>SAKAL TIMES</span>
                             </li>
                             <li>
                                 <i class="fa fa-book" aria-hidden="true"></i>
                                 <span>SARKARNAMA</span>
                             </li>
                             <li>
                                 <i class="fa fa-square" aria-hidden="true"></i>
                                 <span>YINBUZZ</span>
                             </li>
                         </ul>
                     </div>
                     <div id="menu-4"
                         class="d-none d-md-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                         <ul class="m-0 p-0">
                             <li>
                                 <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                 <span>SAKAL Printer</span>
                             </li>
                             <li>
                                 <i class="fa fa-certificate" aria-hidden="true"></i>
                                 <span>Subscribe</span>
                             </li>
                             <li>
                                 <i class="fa fa-bank" aria-hidden="true"></i>
                                 <span>Advertise with us</span>
                             </li>
                             <li>
                                 <i class="fa fa-headphones" aria-hidden="true"></i>
                                 <span>Newsletter</span>
                             </li>
                             <li>
                                 <i class="fa fa-cubes" aria-hidden="true"></i>
                                 <span>Contact us</span>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </section>
         <!-- end footer-top section -->

         <!-- start footer-bottom section -->
         <section class="w-100 pt-md-0 pb-md-4 footer-bottom">
             <div class="d-flex flex-column align-items-center inner-container">
                 <div class="d-none d-md-block footer-logo-div"></div>

                 <div class="d-none d-md-block px-5 text-center footer-breadcrumbs-container">
                     <span>Start</span>
                     <span class="mx-2">&gt;</span>
                     <span>Digital</span>
                     <span class="mx-2">&gt;</span>
                     <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span>
                 </div>

                 <div class="grey-line"></div>
                 <div class="mt-md-4 py-2 py-md-0 footer-links-div">
                     <ul class="m-0 p-0 text-center">
                         <li class="mr-1 mx-md-2 d-inline-block">SUBSCRIPTION</li>
                         <li class="mr-1 mx-md-2 d-inline-block">PUBLISHING COMPANY</li>
                         <li class="mr-1 mx-md-2 d-inline-block">ADVERTISEMENT</li>
                         <li class="mr-1 mx-md-2 d-inline-block">MEDIA</li>
                         <li class="mr-1 mx-md-2 d-inline-block">PRESS</li>
                         <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                         <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                         <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                         <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                     </ul>
                 </div>
                 <div class="grey-line"></div>
             </div>
         </section>
         <!-- end footer-bottom section -->


         <!-- start copyright section -->
         <section class="w-100 d-flex copyright">
             <div class="d-flex flex-column inner-container pt-3 pt-md-3 pb-4 copy-pad">
                 <div class="d-flex mb-4 mb-md-2 justify-content-center">
                     <div class="p-1 py-md-1 px-md-2 go-top-box">
                         <!-- <span class="d-block">^</span> -->
                         <span id="go-top-btn" class="d-flex flex-column align-items-center go-top-text">
                             <span class="mb-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="10" height="10"
                                     viewBox="0 0 24 24" style=" fill:#000000;">
                                     <path
                                         d="M 12.005859 3.765625 L 3.0507812 12.535156 L 4.4492188 13.964844 L 11.994141 6.5761719 L 19.544922 14.083984 L 20.955078 12.666016 L 12.005859 3.765625 z M 11.998047 9.4023438 L 3.0351562 18.550781 L 4.4648438 19.949219 L 12.001953 12.255859 L 19.537109 19.904297 L 20.962891 18.501953 L 11.998047 9.4023438 z">
                                     </path>
                                 </svg>
                             </span>
                             <!-- <i class="fa fa-sort-asc" aria-hidden="true"></i>		 -->
                             <span class="my-1">Go to Top</span>
                         </span>
                     </div>
                 </div>
                 <div
                     class="d-flex flex-column align-items-center d-md-none justify-content-center sakal-logo-footer-box">
                     <div class="my-1 grey-line"></div>
                     <div class="sakal-logo-bottom-footer"></div>
                     <div class="my-1 grey-line"></div>
                 </div>
                 <div
                     class="d-flex px-2 mt-4 mb-2 mt-md-2 justify-content-around justify-content-md-center social-icons-container">
                     <div class="rounded-circle social-icon">
                         <i class="fa fa-twitter fa-social-custom"></i>
                     </div>
                     <div class="rounded-circle social-icon">
                         <i class="fa fa-linkedin fa-social-custom"></i>
                     </div>
                     <div class="rounded-circle social-icon">
                         <i class="fa fa-facebook fa-social-custom"></i>
                     </div>
                     <div class="rounded-circle social-icon">
                         <!-- <img class="social-icon-img" src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/email.svg"> -->
                         <i class="fa fa-envelope fa-social-custom"></i>
                     </div>
                     <div class="rounded-circle social-icon">
                         <img class="social-icon-img"
                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/share.svg">
                         <!-- <i class="fa fa-share fa-social-custom"></i> -->
                     </div>
                     <div class="rounded-circle social-icon">
                         <img class="social-icon-img"
                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/youtube.svg">
                         <!-- <i class="fa fa-youtube fa-social-custom"></i> -->
                     </div>
                 </div>
                 <div class="mt-md-2 nopadding text-center news-description copyright-text">
                     Copyright Sakal Media Group – All Rights Reserved
                 </div>
             </div>
         </section>
         <!-- end copyright section -->

         <!-- end main-container -->
     </div>


 </div>

 <?php
    } elseif ($_GET["version"] == 2) {
        ?>

 <link rel="stylesheet" type="text/css" href="sites/esakal/themes/smg980/css/otherad.css">

 <div class="home-page-wrapper">

     <!-- start other ad changes -->
     <div class="main-container top-jacket-ad"></div>
     <div class="left-jacket-ad"></div>
     <div class="right-jacket-ad"></div>
     <!-- <div class="transparent-div"></div> -->
     <!-- end other ad changes -->


     <div id="mobile-hamburger" class="d-flex justify-content-center transparent-hamburger">
         <div class="d-block main-container">
             <div class="mobile-side-nav p-2">
                 <div id="close-side-nav-btn" class="close-side-nav">
                     <div class="hamburger-logo"></div>
                     <div class="x-style">X</div>
                 </div>
                 <div class="side-nav-item px-2"></div>
                 <div class="side-nav-content">ताज्या</div>
                 <div class="side-nav-content">पुणे</div>
                 <div class="side-nav-content">मुंबई</div>
                 <div class="side-nav-content">देश</div>
                 <div class="side-nav-content">लाईव्ह टीव्ही</div>
                 <div class="side-nav-content">ग्लोबल</div>
                 <div class="side-nav-content">कोरोना</div>
                 <div class="side-nav-content">क्रीडा</div>
             </div>
         </div>
     </div>
     <div class="mobile-global-nav">
         <div id="mobile-side-menu-btn" class="mobile-side-menu"><i class="fa fa-2x fa-bars"></i></div>
         <div class="mobile-logo"></div>
         <div class="mobile-user-login "><i class="fa fa-2x fa-user"></i></div>
     </div>
     <!-- <div class="mobile-content-nav d-flex flex-column justify-content-center mb-2">

                <div class="menu nav navbar-nav">

                    <ul class="links">
                        <li class="menu-30647 first"><a href="/tajya-batmya/marathi-news" title="">ताज्या</a></li>
                        <li class="menu-39525"><a href="/coronavirus" class="menu-item-yellow-dot-blinker"> कोरोना</a></li>
                        <li class="menu-30648"><a href="/mukhya-news">मुख्य</a></li>
                        <li class="menu-30649"><a href="/pune-news">पुणे</a></li>
                        <li class="menu-30650"><a href="/mumbai-news">मुंबई</a></li>
                        <li class="menu-30652"><a href="/maharashtra-news"> महाराष्ट्र</a></li>
                        <li class="menu-32719"><a href="/viral-satya">व्हायरल सत्य</a></li>
                        <li class="menu-30653"><a href="/global">ग्लोबल</a></li>
                        <li class="menu-30654"><a href="/blog">ब्लॉग</a></li>
                        <li class="menu-30655"><a href="/desh">देश</a></li>
                        <li class="menu-31762"><a href="http://esakal.in/srf/" title="सकाळ रिलीफ फंड">रिलीफ फंड</a></li>
                        <li class="menu-30656"><a href="/manoranjan">मनोरंजन</a></li>
                        <li class="menu-30657"><a href="/krida">क्रीडा</a></li>
                        <li class="menu-37707"><a href="https://www.esakal.com/news-topics/union-budget-updates">अर्थसंकल्प</a></li>
                        <li class="menu-35888"><a href="https://www.esakal.com/myfa">MYFA</a></li>
                        <li class="menu-32743"><span class="live-tv nolink">LIVE TV</span></li>
                        <li class="menu-30658"><a href="/image-story">फोटो</a></li>
                        <li class="menu-30659"><a href="/video-story">व्हिडिओ</a></li>
                        <li class="menu-34890"><a href="/education-jobs">एज्युकेशन जॉब्स</a></li>
                        <li class="menu-34886"><a href="/tourism-news">टुरिझम</a></li>
                        <li class="menu-34889"><a href="/food-news">फूड </a></li>
                        <li class="menu-34887"><a href="/lifestyle-news">लाईफस्टाईल</a></li>
                        <li class="menu-34888"><a href="/health-fitness-wellness">हेल्थ फिटनेस</a></li>
                        <li class="menu-36347"><a href="/marathwada-news/aurangabad" target="_blank">औरंगाबाद</a></li>
                        <li class="menu-36368"><a href="/vidarbha-news/nagpur" target="_blank">नागपूर</a></li>
                        <li class="menu-36369"><a href="/uttar-maharashtra-news/nashik" target="_blank">नाशिक</a></li>
                        <li class="menu-36762"><a href="/womens-corner" target="_blank">मैत्रीण</a></li>
                        <li class="menu-36763"><a href="/youths-corner" target="_blank">जल्लोष</a></li>
                        <li class="menu-36905"><a href="/sampadakiya/editorial-articles" target="_blank">अग्रलेख</a></li>
                        <li class="menu-36906"><a href="/sampadakiya/satirical-news" target="_blank">ढिंग टांग</a></li>
                        <li class="menu-36907"><a href="/sampadakiya/happening-news-india" target="_blank">जगाच्या नजरेतून</a></li>
                        <li class="menu-36908"><a href="/sampadakiya/legal-law-views-news" target="_blank">कायदा विश्व</a></li>
                        <li class="menu-36909"><a href="/sampadakiya/mumbai-life" target="_blank">रंग मुंबईचे</a></li>
                        <li class="menu-37706 last"><a href="https://www.esakal.com/arthavishwa">धन की बात</a></li>
                    </ul>
                </div>

            </div> -->

     <div class="mobile-nav-wrapper flex-column align-items-center justify-content-center">
         <nav class="w-100 h-100 nav mobile-nav justify-content-around align-items-center">
             <div class="mobile-nav-link active" href="#">मुंबई</div>
             <div class="mobile-nav-link active" href="#">ताज्या </div>
             <div class="mobile-nav-link active" href="#">मुख्य</div>
             <div class="mobile-nav-link active" href="#">देश</div>
             <div class="mobile-nav-link active" href="#">जग </div>
             <div class="mobile-nav-link active" href="#">क्रीडा </div>
             <div class="mobile-nav-link active" href="#">पुणे</div>
             <div class="mobile-nav-link active" href="#">कोकण</div>
         </nav>
     </div>

     <div class="global-nav-wrapper">
         <div class="ten"></div>
         <div class="global-nav d-flex align-items-center">
             <div class="global-nav-search d-flex justify-content-end pb-md-1">
                 <i class="fa fa fa-search"></i>
             </div>
             <nav class="nav">
                 <div id="desktop-side-menu-btn" class="nav-link active" href="#">
                     <span>Sections</span>
                     <i class="fa fa-bars " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                     <div class="dropdown-menu dropdown-menu-bottom" x-placement="bottom-start"
                         style="position: absolute; transform: translate3d(0px, 1760px, 0px); top: 0px; left: 0px; will-change: transform;"
                         x-out-of-boundaries="">
                         <a class="dropdown-item" href="#">Action</a>
                         <a class="dropdown-item" href="#">Another action</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                 </div>
                 <div class="nav-link active" href="#">राजकारण</div>
                 <div class="nav-link active" href="#">ताज्या </div>
                 <div class="nav-link active" href="#">मुख्य</div>
                 <div class="nav-link active" href="#">देश</div>
                 <div class="nav-link active" href="#">जग </div>
                 <div class="nav-link active" href="#">क्रीडा </div>
                 <div class="nav-link active" href="#">पुणे</div>
                 <div class="nav-link active" href="#">मुंबई</div>
                 <div class="nav-link active" href="#">कोकण</div>
             </nav>
         </div>
         <div class="ten">
             <div class="user-login d-flex justify-content-center align-items-center ml-auto">
                 <div style="margin-right: 10px;">Sign In</div>
                 <i class="fa fa-user"></i>
             </div>
         </div>
     </div>

     <div id="main-container-id" class="main-container pt-2 pt-md-0">

         <div class="header mb-2">
             <div class="header-logo d-flex align-items-end py-1">
                 <div class="day-date ">Tuesday, March 24, 2020</div>
             </div>
             <div class="header-nav pt-md-2">
                 <nav class="nav">
                     <div class="nav-link active py-1 pl-0" href="#">ताज्या </div>
                     <div class="nav-link active py-1 pl-0" href="#">मुख्य</div>
                     <div class="nav-link active py-1 pl-0" href="#">राजकारण</div>
                     <div class="nav-link active py-1 pl-0" href="#">महाराष्ट्र</div>
                     <div class="nav-link active py-1 pl-0" href="#">नागपूर</div>
                     <div class="nav-link active py-1 pl-0" href="#">संपादकीय</div>
                     <div class="nav-link active py-1 pl-0" href="#">अर्थसंकल्प</div>
                     <div class="nav-link active py-1 pl-0" href="#">जग </div>
                 </nav>
             </div>
         </div>

         <div class="inner-section-width ad-block-top-desktop mt-0" style="height: 200px;margin-bottom: 25px;"></div>
         <div class="ad-block-mobile mt-2" style="height: 50px;"></div>

         <!-- start breaking-news-1 section -->
         <section class="inner-section-width p-0 breaking-news my-2">

             <!-- <div class="container inner-container p-0 d-flex"> -->

             <div class="left-box d-block d-md-flex flex-column pr-2 row1-block1">

                 <div class="left-box-top w-100 d-flex align-items-end justify-content-center">

                     <div class="row m-0 w-100">

                         <div class="my-1 my-md-0 my-lg-1 section-type-1-image d-none d-md-block"></div>

                         <div class="n1 my-md-1 py-2 py-md-2 right-border-zero pt-md-3 pl-md-4"
                             style="background-color: white;">
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">पंतप्रधान मोदींना आवडतात फक्त मराठी दिग्गजांची ही 2
                                 गाणी</div>
                             <div
                                 class="col-lg-1 col-md-0 my-1 my-md-0 my-lg-1 section-type-1-image mb-md-3  d-md-none">
                             </div>
                             <div class="source-container mb-2 d-md-none">source : संतोषचं आयुष्य, टप्प्याटप्प्यानं वळणं
                                 घेत घेत कुणीकडे गेलं हे त्याच्या सगळ्या हकीकतीवरून कळलं.संतोषचं आयुष्य,
                                 टप्प्याटप्प्यानं</div>
                             <div class="news-description mb-1 mb-md-0">
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये
                                 चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                 हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>

                         <div class="n2 py-2 my-md-1 py-md-2 pr-0 pt-md-3" style="background-color: white;">
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">पंतप्रधान मोदींना आवडतात फक्त मराठी दिग्गजांची ही 2
                                 गाणी</div>
                             <div class="news-description mb-1 mb-md-0">
                                 मुंबई : मुंबई कृषी उत्पन्न बाजार समितीच्या वाशी येथील फळ बाजारात फळांच्या राजा हापूस
                                 आंबा दाखल झाला आहे. वातावरणाचा फटका बसल्याने यावर्षी हापूस आंब्याची बाजारातील आवक
                                 नेहमीच्या मानाने घटलेली आहे. त्यातच कोरोनाच्या प्रभावाने बाजारात आंब्याला आता उठावही
                                 नाही, निर्यातही कमी ठप्प असल्याने कोकणातील हापूस आंबा बागायतदार आणि व्यापाऱ्यांची चिंता
                                 वाढली आहे.
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>
                     </div>

                 </div>

                 <div class="left-box-bottom w-100 d-block d-md-flex flex-column align-items-center">

                     <div class="row m-0 h-md-50 w-100">

                         <div class="nl py-2 my-md-1 py-md-2 pl-lg-0 right-border-1">

                             <!-- <div class="d-block"> -->
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन
                                 दहशतवाद्यांचा केला खात्मा</div>

                             <div class="news-description mb-1 mb-md-0">
                                 मुंबई :महाराष्ट्रासह मुंबईत कोरोनाग्रस्तांचा आकडा वाढत चालला आहे. मुंबईत कोरोनाचे
                                 सर्वात जास्त रुग्ण आढळले आहेत. त्यामुळे खरबदारीचा उपाय म्हणून प्रशासन योग्य ती पावलं
                                 उचलत आहे. आशिया खंडातील सर्वात गजबजलेला आणि दाट लोकवस्तीचा भाग म्हणून ओळख असलेल्या
                                 धारावीमध्ये
                                 तब्बल ७ कोरोनाचे रुग्ण आढळले आहेत त्यामुळे प्रशासन अधिकच सतर्क झालं आहे..
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>

                         <div class="nr my-md-1 py-2 py-md-2 pr-lg-0">
                             <!-- <div class="d-block"> -->
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">पती-पत्नी आणि ती ! अपूर्वानं 'या' कारणामुळं रोहित
                                 तिवारीची केली हत्या</div>


                             <div class="news-description mb-1 mb-md-0 d-block d-lg-none">
                                 कोरोना व्हायरस सगळीकडे सध्या थैमान घालत आहे. त्यामुळे सर्व यंत्रणा डोळ्यात तेल घालून
                                 काम करीत आहे. आरोग्य यंत्रणेतील मनुष्यबळ कमी पडतंय वाटायला लागल्यावर सरकारने 'आशा'
                                 वर्कर्स यांना आरोग्य विभागाच्या मदतीसाठी बोलावले आहे. सरकार त्यांना कामांसाठी महिन्याला
                                 एक हजार वेतन देणार आहे. शासनाकडून बोलावणे आल्यानंतर आशा वर्कर्स 'कोरोना'शी धैर्याने लढत
                                 आहेत. खरं तर ग्रामीण व शहरी भागात आशा वर्कर्स गरोदर महिलांची तपासणी करणे, नवजात
                                 बालकांची काळजी घेणे, बालकांचे लसिकरण करणे,
                                 माता-बालमृत्यू दर कमी करणे, गरोदर महिलांना पोषक आहाराबाबत मार्गदर्शन करणे, किशोरवयीन
                                 मुलींना मार्गदर्शन करणे यासह टि.बी., एचआयव्ही, मलेरीया, डेंग्यू यासारख्या साथीच्या
                                 आजारांमध्ये लोकांचे आरोग्य सांभाळन्याचे काम
                                 करतात. आशा वर्कर्स 'कोरोना' संदर्भात आपलं कर्तव्य पार पडत असताना त्यांच्यावर हल्ले होत
                                 आहेत. काही जणींना तर यापेक्षा वाईट प्रसंगाला सामोरे जावे लागत आहे. त्यामुळे या आशा
                                 वर्कर्स कोरोनाच्या काळात कोणत्या परिस्थितीत
                                 काम करत आहेत याचा आढावा इ
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>


                         <!-- ad-row1 -->
                         <div class="ad-block-mobile my-3 inner-section-width d-md-none"></div>
                         <!-- end-ad-row1 -->

                     </div>

                     <div class="row m-0 h-md-50 w-100">
                         <div class="row3nl my-md-1 py-2 py-md-2 pl-lg-0 right-border-2">
                             <!-- <div class="d-block"> -->
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दोन दोन
                                 दहशतवाद्यांचा केला खात्मा</div>

                             <div class="news-description mb-1 mb-md-0">
                                 छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन १५०० के बाद से अभी तक इस उद्योग का
                                 मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन १५०० के बाद से
                                 अभी तक इस उद्योग का मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग का एक साधारण डमी
                                 पाठ है.सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन.
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>

                         <div class="row3nr my-md-1 py-2 py-md-2 pr-lg-0">
                             <!-- <div class="d-block"> -->
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">पंतप्रधान मोदींना आवडतात फक्त मराठी दिग्गजांची ही 2
                                 गाणी</div>

                             <div class="news-description mb-1 mb-md-0">
                                 छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन १५०० के बाद से अभी तक इस उद्योग का
                                 मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन १५०० के बाद से
                                 अभी तक इस उद्योग का मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग का एक साधारण डमी
                                 पाठ है.सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन.
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>
                     </div>

                 </div>

             </div>
             <div class="right-box d-none d-md-flex flex-column justify-content p-0">
                 <div class="mb-2 w-100 d-flex justify-content-center align-items-center" style="height: 8%;"></div>
                 <div class="mb-2 w-100 video-title">Video</div>
                 <div class="right-box-sub w-100 d-flex justify-content-center align-items-center" style="height: 22%;">
                     <iframe width="100%" height="100%" src="https://www.youtube.com/embed/bbNFwiSY05g" frameborder="0"
                         allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                         allowfullscreen></iframe></div>
                 <div class="right-box-sub w-100 e-paper" style="background-color: aqua; height: 18.5%;"></div>
                 <div class="right-box-sub w-100 d-flex justify-content-center align-items-center"
                     style="background-color: gray;height: 250px;width: 320px;">Advertisement-2(320 * 250)</div>
             </div>
             <!-- </div> -->
         </section>
         <!-- end breaking-news-1 section -->
         <div class="inner-section-width ad-block-top-desktop d-md-flex d-sm-none" style="height: 100px;"></div>


         <!-- start breaking-news-2 section -->
         <section class="inner-section-width breaking-news-2 my-2 p-0 pb-md-1">
             <div class="left-box row ml-0 pr-lg-2 ">
                 <div class="col-md-6 col-sm-12 pl-lg-0 mb-lg-2 my-1">
                     <div class="card-img-top mb-2">
                         <img class="w-100 h-100"
                             src="https://www.faz.net/ppmedia/aktuell/technik-motor/3131404806/1.5896418/mmo-uebersichtsseite-aufmacher-retina/teaser-bild-fuer-f-a-z.jpg"
                             alt="Card image cap">
                     </div>
                     <div class="mobile-overlap p-2 pl-3 p-md-0">
                         <div class="news-section-title mb-2">साधारण</div>
                         <div class="news-title mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद दहशतवादयांचा केला खातमा
                         </div>
                     </div>
                     <div class="news-description mb-1">
                         वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत मुलांना हा अधिकार मिळतो.
                         त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची
                         आहे, असे स्पष्ट मुंबई उच्च न्यायालयाने व्यक्त केले व वडिलोपार्जित
                         मालमत्तेपासून वंचित ठेवण्याविरोधात मुलाने केलेली याचिका फेटाळली.
                     </div>
                     <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                 </div>
                 <div class="col-md-6 col-sm-12 pr-lg-0 mb-lg-2 my-1">
                     <div class="card-img-top mb-2">
                         <img class="w-100 h-100"
                             src="https://www.ccn.com/wp-content/uploads/2019/08/stock-market-bubble-ap-768x512.jpg"
                             alt="Card image cap">
                     </div>
                     <div class="mobile-overlap p-2 pl-3 p-md-0">
                         <div class="news-section-title mb-2">साधारण</div>
                         <div class="news-title mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद दहशतवादयांचा केला खातमा
                         </div>
                     </div>
                     <div class="news-description mb-1">
                         कोरोना या विषाणूचा प्रादुर्भाव रोखण्यासाठी केंद्र व राज्य सरकारने जाहीर केलेला लॉकडाउन
                         वाढण्याची शक्&zwj;यता आता दाट वाटू लागली आहे. या पार्श्&zwj;वभूमीवर महाराष्ट्र लोकसेवा आयोगाने
                         मंगळवारी (ता. 7) महत्त्वाचा निर्णय जाहीर करीत राज्यसेवेची पूर्व परीक्षा
                         व महाराष्ट्र राज्य दुय्यम सेवा अराजपत्रित गट-ब संयुक्&zwj;त पूर्व परीक्षा पुढे ढकलण्याचा निर्णय
                         घेतला. मात्र, पुढे कधी परीक्षा होणार हे स्पष्ट केलेले नाही.
                     </div>
                     <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                 </div>
             </div>

             <div class="right-box pl-md-0 d-none d-md-flex flex-column justify-content-start align-items-center">
                 <div class="advertisement-4 w-100 d-flex justify-content-center align-items-center"
                     style="background-color: gray; height: 250px;">
                     Advertisement-4 (320 * 250)
                 </div>
                 <div class="newsletter w-100 d-flex flex-column justify-content-around">
                     <div class="section-title mb-md-2">Newsletter</div>
                     <div class="input-group mb-1">
                         <input type="email" class="form-control newsletter-input"
                             placeholder="ENTER YOUR EMAIL ADDRESS" aria-label="Recipient's username"
                             aria-describedby="basic-addon2">
                         <div class="input-group-append">
                             <button class="btn newsletter-button" type="button">GO</button>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- end breaking-news-2 section -->
         <!-- more top Stories -->
         <div class="d-flex flex-column flex-md-row mf-md-3 mt-md-2 section-top-stories mts-section">
             <div class="more-top-stories pr-md-0 pt-2 pb-2 pt-md-0 more-top-stories-right-container">

                 <center class="d-md-block float-md-right"><span>More Top Stories</span></center>
             </div>
             <div class="mts-articles pr-md-0 pt-md-1">
                 <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">

                     <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pr-md-5">
                         <div class="top-stories-art-img">
                             <a href="#"><img data-adaptive-image-breakpoint="1280"
                                     src="https://www.sltrib.com/resizer/mLRVbM95hdlLoDQjUj6c1RRFP_w=/1200x630/filters:quality(85)/arc-anglerfish-arc2-prod-sltrib.s3.amazonaws.com/public/ZNG7LL4U7FEIRNLOQL5C26M66M.jpg"
                                     alt="4dog_26.jpg" title="4dog_26.jpg" style="display: block;">
                             </a>

                         </div>
                     </div>
                     <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                         <div class="d-inline-block d-md-block news-section-title mb-2">
                             अनंतनाग
                         </div>
                         <div class="article-title mb-1 mb-md-2">
                             अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी
                         </div>
                         <div class="article-description">

                             अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत जवानांनी अजिवलीच्या
                             दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा
                             केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                         </div>
                         <div class="post-time-and-comment mt-1 mt-md-2">
                             <span class="time mr-md-1">
                                 6 h ago
                             </span><span class="time d-none d-md-inline">
                                 633 Comments

                             </span>
                         </div>
                     </div>

                 </div>
                 <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">

                     <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pr-md-5">
                         <div class="top-stories-art-img">

                             <a href="#"><img class="adaptive-image img-responsive"
                                     data-adaptive-image-breakpoint="1280"
                                     src="https://media.npr.org/assets/img/2018/11/27/ap_18325053082002_wide-54c4601d9682527bdc0f43a5f5596079dd2c24b1-s800-c85.jpg"
                                     width="205" height="115" alt="4dog_26.jpg" title="4dog_26.jpg"
                                     style="display: block;">
                             </a>

                         </div>
                     </div>
                     <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                         <div class="d-inline-block d-md-block news-section-title mb-2">
                             अनंतनाग
                         </div>
                         <div class="article-title mb-1 mb-md-2">
                             अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी
                         </div>
                         <div class="article-description">

                             अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत जवानांनी अजिवलीच्या
                             दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा
                             केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                         </div>
                         <div class="post-time-and-comment mt-1 mt-md-2">
                             <span class="time mr-md-1">
                                 6 h ago
                             </span><span class="time d-none d-md-inline">
                                 633 Comments

                             </span>
                         </div>
                     </div>

                 </div>
                 <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">

                     <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pr-md-5">
                         <div class="top-stories-art-img">

                             <a href="#"><img class="adaptive-image img-responsive"
                                     data-adaptive-image-breakpoint="1280"
                                     src="https://i.guim.co.uk/img/media/3b854be00205da69cc353f70d5e8f806a574a1b4/0_77_4000_2400/master/4000.jpg?width=300&quality=85&auto=format&fit=max&s=da6ea3439077622c641c0a4b91104f30"
                                     width="205" height="115" alt="4dog_26.jpg" title="4dog_26.jpg"
                                     style="display: block;">
                             </a>

                         </div>
                     </div>
                     <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                         <div class="d-inline-block d-md-block news-section-title mb-2">
                             अनंतनाग
                         </div>
                         <div class="article-title mb-1 mb-md-2">
                             अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी
                         </div>
                         <div class="article-description">

                             अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत जवानांनी अजिवलीच्या
                             दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा
                             केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                         </div>
                         <div class="post-time-and-comment mt-1 mt-md-2">
                             <span class="time mr-md-1">
                                 6 h ago
                             </span><span class="time d-none d-md-inline">
                                 633 Comments

                             </span>
                         </div>
                     </div>

                 </div>
                 <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">

                     <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pr-md-5">
                         <div class="top-stories-art-img">

                             <a href="#"><img class="adaptive-image img-responsive"
                                     data-adaptive-image-breakpoint="1280"
                                     src="https://static.standard.co.uk/s3fs-public/thumbnails/image/2018/07/29/15/robertmugabe2907.jpg"
                                     width="205" height="115" alt="4dog_26.jpg" title="4dog_26.jpg"
                                     style="display: block;">
                             </a>

                         </div>
                     </div>
                     <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                         <div class="d-inline-block d-md-block news-section-title mb-2">
                             अनंतनाग
                         </div>
                         <div class="article-title mb-1 md-md-2">
                             अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी
                         </div>
                         <div class="article-description">

                             अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत जवानांनी अजिवलीच्या
                             दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा
                             केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                         </div>
                         <div class="post-time-and-comment mt-1 mt-md-2">
                             <span class="time mr-md-1">
                                 6 h ago
                             </span><span class="time d-none d-md-inline">
                                 633 Comments

                             </span>
                         </div>
                     </div>

                 </div>


             </div>
         </div>
         <!-- end more top stories -->
         <!-- ad -->
         <div class="ad-block-mobile my-3 d-md-none"></div>
         <!-- creative-lab -->
         <div class="d-flex mt-md-4">
             <div class="ctl-right-bar-dsk d-none d-md-block"></div>

             <div class="d-flex flex-column flex-md-row cl-section mt-md-0">

                 <div class="more-top-stories pr-md-0 pt-1 pb-1 pb-md-0 pt-md-0 pl-md-0 cl-title-section">
                     <div class="cl-bg">
                         <center class="d-inline-block float-left mt-md-3">
                             <span class="mr-3">Paid content</span><span class="d-none d-md-inline">About</span>
                             <span class="d-block c-innovatn-m-top">Creative innovation</span></center>
                         <div class="ca-sak-lab">
                             <div class="title d-none d-md-block">Sakal Labs</div>
                             <div class="mobile title mr-2 d-md-none">Sakal Brand Studio</div>
                             <div class="angular-bracket d-md-none"><i class="fa fa-angle-right"></i></div>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex flex-wrap cl-right-section">
                     <div
                         class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-3">

                         <div class="pl-2 pt-3 pt-md-0 p-md-0">
                             <div class="top-stories-art-img">

                                 <a href="/"><img
                                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/4aag_475.jpg"
                                         alt="4dog_26.jpg" title="4dog_26.jpg">
                                 </a>

                             </div>
                         </div>
                         <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                             <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                 अनंतनाग
                             </div>
                             <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                 दहशदवाद्यांचा केला खात्मा</div>
                             <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                 केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                             <div class="post-time-and-comment mt-1 mt-md-2">
                                 <span class="time mr-md-1">
                                     6 h ago
                                 </span><span class="time d-none d-md-inline">
                                     633 Comments

                                 </span>
                             </div>
                         </div>

                     </div>
                     <div
                         class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-3">

                         <div class="pl-2 pt-3 pt-md-0 p-md-0">
                             <div class="top-stories-art-img">

                                 <a href="/"><img
                                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/2mpsc_650_081614125408.jpg"
                                         alt="4dog_26.jpg" title="4dog_26.jpg">
                                 </a>

                             </div>
                         </div>
                         <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                             <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                 अनंतनाग
                             </div>
                             <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                 दहशदवाद्यांचा केला खात्मा</div>
                             <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                 केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                             <div class="post-time-and-comment mt-1 mt-md-2">
                                 <span class="time mr-md-1">
                                     6 h ago
                                 </span><span class="time d-none d-md-inline">
                                     633 Comments

                                 </span>
                             </div>
                         </div>

                     </div>
                     <div
                         class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-3">

                         <div class="pl-2 pt-3 pt-md-0 p-md-0">
                             <div class="top-stories-art-img">

                                 <a href="/"><img
                                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/0bank_20ok.JPG"
                                         alt="4dog_26.jpg" title="4dog_26.jpg">
                                 </a>

                             </div>
                         </div>
                         <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                             <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                 अनंतनाग
                             </div>
                             <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                 दहशदवाद्यांचा केला खात्मा</div>
                             <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                 केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                             <div class="post-time-and-comment mt-1 mt-md-2">
                                 <span class="time mr-md-1">
                                     6 h ago
                                 </span><span class="time d-none d-md-inline">
                                     633 Comments

                                 </span>
                             </div>
                         </div>

                     </div>
                     <div
                         class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-3">

                         <div class="pl-2 pt-3 pt-md-0 p-md-0">
                             <div class="top-stories-art-img">

                                 <a href="/"><img
                                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/32Mahavitaran_h_30_8.jpg"
                                         alt="4dog_26.jpg" title="4dog_26.jpg">
                                 </a>

                             </div>
                         </div>
                         <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                             <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                 अनंतनाग
                             </div>
                             <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                 दहशदवाद्यांचा केला खात्मा</div>
                             <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                 केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                             <div class="post-time-and-comment mt-1 mt-md-2">
                                 <span class="time mr-md-1">
                                     6 h ago
                                 </span><span class="time d-none d-md-inline">
                                     633 Comments

                                 </span>
                             </div>
                         </div>

                     </div>
                 </div>

             </div>
         </div>
         <!-- end creative lab -->
         <!-- ad -->
         <div class="ad-block-mobile my-3 d-md-none"></div>
         <!-- reader's favourite -->
         <div class="d-flex flex-column flex-md-row cl-section rf-section mt-md-3">

             <div class="more-top-stories pr-md-0 pt-2 pb-2 pb-md-1 pt-md-0 pl-md-0">
                 <div class="cl-bg">
                     <div class="rf-bg">
                         <center class="d-inline-block float-left mt-md-2">
                             <span class="ml-md-0 mr-1 d-md-block">Reader's</span>
                             <span class="d-md-block">Favourite</span></center>
                         <div class="rf-angular-backet d-md-none"><i class="fa fa-angle-right"></i></div>
                     </div>
                 </div>
             </div>
             <div class="d-flex flex-wrap rf-section-right">
                 <div   
                     class="more-top-stories-articles rf-sub-section d-flex flex-wrap cb-articles col-12 col-md-4 pb-md-1 pr-md-0 pt-0 pb-0 pl-md-3">
                     <div class="rf-sub-section-title mr-title mt-md-2 mb-md-2">
                         <div class="d-md-none plus-sign"><i class="fa fa-minus"></i></div>
                         <div class="rf-title">
                             Most Read Articles</div>
                         <div class="d-md-none angle-sign"><i class="fa fa-angle-down"></i></div>
                     </div>
                     <div class="rf-section-news-container mr-new-container">
                         <div class="rf-blocks-article-one mb-2">
                             <div class="pl-2 pt-md-0 p-md-0 d-none d-md-block">
                                 <div class="top-stories-art-img">

                                     <a href="/"><img
                                             src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/0bus_accident_1_0.jpg"
                                             alt="4dog_26.jpg" title="4dog_26.jpg">
                                     </a>

                                 </div>
                             </div>
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1 mt-2">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-eye pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> views </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-eye pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> views </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-eye pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> views </spann>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
                 <div
                     class="more-top-stories-articles rf-sub-section d-flex flex-wrap cb-articles col-12 col-md-4 pb-md-1 pr-md-0 pt-0 pb-0 pl-md-3">
                     <div class="rf-sub-section-title mc-title mt-md-2 mb-md-2">
                         <div class="d-md-none plus-sign"><i class="fa fa-minus"></i></div>
                         <div class="rf-title">
                             Most commented Articles</div>
                         <div class="d-md-none angle-sign"><i class="fa fa-angle-down"></i></div>
                     </div>
                     <div class="rf-section-news-container mc-new-container">
                         <div class="rf-blocks-article-one mb-2">
                             <div class="pl-2 pt-md-0 p-md-0 d-none d-md-block">
                                 <div class="top-stories-art-img">

                                     <a href="/"><img
                                             src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/4b9fb2f64_4f36_4a71_ad25_e063d050bde5.jpg"
                                             alt="4dog_26.jpg" title="4dog_26.jpg">
                                     </a>

                                 </div>
                             </div>
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1 mt-2">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="pr-1"><img
                                             src="https://sankey-bucket.s3-ap-southeast-1.amazonaws.com/comments-icon.png"
                                             style="width: 11px;"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> comments </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="pr-1"><img
                                             src="https://sankey-bucket.s3-ap-southeast-1.amazonaws.com/comments-icon.png"
                                             style="width: 11px;"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> comments </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="pr-1"><img
                                             src="https://sankey-bucket.s3-ap-southeast-1.amazonaws.com/comments-icon.png"
                                             style="width: 11px;"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> comments </spann>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
                 <div
                     class="more-top-stories-articles rf-sub-section d-flex flex-wrap cb-articles col-12 col-md-4 pb-md-1 pr-md-0 pt-0 pb-0 pl-md-3">
                     <div class="rf-sub-section-title ms-title mt-md-2 mb-md-2">
                         <div class="d-md-none plus-sign"><i class="fa fa-minus"></i></div>
                         <div class="rf-title">
                             Most Shared Articles</div>
                         <div class="d-md-none angle-sign"><i class="fa fa-angle-down"></i></div>
                     </div>
                     <div class="rf-section-news-container ms-new-container">
                         <div class="rf-blocks-article-one mb-2">
                             <div class="pl-2 pt-md-0 p-md-0 d-none d-md-block">
                                 <div class="top-stories-art-img">

                                     <a href="/"><img
                                             src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/000000006_4.jpg"
                                             alt="4dog_26.jpg" title="4dog_26.jpg">
                                     </a>

                                 </div>
                             </div>
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1 mt-2">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-share-square-o pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> shared </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-share-square-o pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> shared </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-share-square-o pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> shared </spann>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>

         </div>
         <!-- end reader's favourite -->


         <!--- ad -->


         <div class="ad-block-top-desktop d-none d-md-flex d-sm-none mt-md-0" style="height: 100px;width:83%;"></div>

         <!---end ad--->

         <!-- start video-story section-->
         <!-- start video-story section-->
         <section class="d-flex flex-column align-items-center w-100 mt-2 my-md-2 pt-md-3 pb-md-2 video-story">

             <div class="section-title-mobile d-flex d-md-none justify-content-between m-0">
                 <span class="mx-3">Videos</span>
                 <i class="fa fa-angle-right mx-3"></i>
             </div>

             <div class="px-0 flex-column inner-section-width">

                 <span class="section-title-desktop">Videos</span>

                 <div class="d-flex align-items-start px-0 pb-2 py-md-2 video-box">

                     <div class="d-flex d-md-block flex-column main-v-story-container">

                         <div class="video-main-desktop mb-4 mb-md-0">
                             <img class="w-100 h-100"
                                 src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/smg_980news_story_section/public/news-story/cover-images/1baramatinagarparishad_1.jpg">
                             <div class="d-flex flex-column justify-content-end w-100 video-overlay">
                                 <div class="ml-4 mb-2 d-inline-block video-item-info main-video">
                                     <span class="news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                         केला</span>
                                     <span class="d-inline-block mr-2 v-time">1 d ago</span>
                                     <span class="d-inline-block mr-2 v-views">
                                         <i class="fa fa-eye pr-1"></i> 12,002 views
                                     </span>
                                     <span class="d-inline-block mr-2 v-views">
                                         <i class="fa fa-comment pr-1"></i> 6,383 comments
                                     </span>
                                 </div>
                             </div>
                             <div
                                 class="d-flex flex-column justify-content-center align-items-center w-100 video-overlay b-0">
                                 <img class="m-2 play-icon"
                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                             </div>
                         </div>

                            <div class="d-none my-2 py-1 d-md-flex social-icons">
                                <span class="s-icon mr-1" style="background-color: #3b5998;">
                                    <i class="fa fa-facebook fa-social-custom"></i>
                                </span>
                                <span class="s-icon mr-1" style="background-color: #00acee;">
                                    <i class="fa fa-twitter fa-social-custom"></i>
                                </span>
                                <span class="s-icon mr-1" style="background-color: #003300;">
                                    <i class="fa fa-linkedin fa-social-custom"></i>
                                </span>
                                <span class="s-icon mr-1" style="background-color: #060d13;">
                                    <img class="s-icon-img"
                                        src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/email.svg">
                                </span>
                            </div>

                         <div class="d-flex py-3 px-1 px-md-0 py-md-0 my-md-2 justify-content-between video-item-card">
                             <div class="v-image">
                                 <img class="w-100 h-100"
                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/maxresdefault.jpg">
                                 <div class="d-flex align-items-end video-overlay">
                                     <img class="m-2 play-icon"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                                 </div>
                             </div>
                             <div class="ml-2 ml-md-4 d-inline-block video-item-info">
                                 <span class="upnext d-none d-md-block">Up Next</span>
                                 <span class="mb-1 news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                     केला</span>
                                 <span class="v-time mt-1 mb-0 mt-md-2 mb-md-1">1 d ago</span>
                                 <span class="v-views mr-md-2">
                                     <i class="fa fa-eye pr-1"></i> 12,002 views
                                 </span>
                                 <span class="v-views">
                                     <i class="fa fa-comment pr-1"></i> 6,383 comments
                                 </span>
                             </div>
                         </div>
                     </div>

                     <div class="d-flex flex-column other-v-story-container">
                         <div class="d-flex py-3 px-1 px-md-0 py-md-0 mb-md-3 justify-content-between video-item-card">
                             <div class="v-image">
                                 <img class="w-100 h-100"
                                     src="https://img.freepik.com/free-vector/successful-business-woman-vector-illustration_107173-4215.jpg?size=626&ext=jpg">
                                 <div
                                     class="d-flex align-items-end align-items-md-center justify-content-md-center video-overlay">
                                     <img class="m-2 d-md-none play-icon"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                                     <img class="m-2 d-none d-md-block play-icon-white"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play-white.svg">
                                 </div>
                             </div>
                             <div class="mt-0 mt-md-2 ml-2 ml-md-0 d-inline-block video-item-info">
                                 <span class="news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                     केला</span>
                                 <span class="v-time mt-1 mb-0 mt-md-1 mb-md-1">1 d ago</span>
                                 <span class="v-views">
                                     <i class="fa fa-eye pr-1"></i> 12,002 views
                                 </span>
                                 <span class="v-views">
                                     <i class="fa fa-comment pr-1"></i> 6,383 comments
                                 </span>
                             </div>
                         </div>
                         <div class="d-flex py-3 px-1 px-md-0 py-md-0 mb-md-3 justify-content-between video-item-card">
                             <div class="v-image">
                                 <img class="w-100 h-100"
                                     src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/2TIGER_2.jpg">
                                 <div
                                     class="d-flex align-items-end align-items-md-center justify-content-md-center video-overlay">
                                     <img class="m-2 d-md-none play-icon"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                                     <img class="m-2 d-none d-md-block play-icon-white"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play-white.svg">
                                 </div>
                             </div>
                             <div class="mt-0 mt-md-2 ml-2 ml-md-0 d-inline-block video-item-info">
                                 <span class="news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                     केला</span>
                                 <span class="v-time mt-1 mb-0 mt-md-1 mb-md-1">1 d ago</span>
                                 <span class="v-views">
                                     <i class="fa fa-eye pr-1"></i> 12,003 views
                                 </span>
                                 <span class="v-views">
                                     <i class="fa fa-comment pr-1"></i> 6,383 comments
                                 </span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </section>
         <div class="ad-block-mobile mb-3 mt-2"></div>
         <!-- end video-story section -->

         <!-- start categories section -->
         <section class="inner-section-width categories d-flex flex-column align-items-center my-md-2">
             <span class="align-self-start section-title-desktop">Categories</span>

             <div class="row adjust-categories">

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">POLITICS</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">Politics</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/0Car_30.jpg"
                         alt="Card image cap">

                     <div id="category1" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा
                         </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा
                         </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा
                         </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा
                         </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">WORLD</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">World</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/0Corona_20V_8.jpg"
                         alt="Card image cap">

                     <div id="category2" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">NATIONAL</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">National</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/4personal_finance.jpg"
                         alt="Card image cap">

                     <div id="category3" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">POST EVERYTHING</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">PostEverything</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/1hapus_mango_2.jpg"
                         alt="Card image cap">

                     <div id="category4" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

             </div>

             <div class="ad-block-top-desktop"></div>

             <div class="row adjust-categories">

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">POLITICS</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">Politics</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/4personal_finance.jpg"
                         alt="Card image cap">

                     <div id="category5" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">WORLD</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">World</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/3hyundai_i20.jpg"
                         alt="Card image cap">

                     <div id="category6" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">NATIONAL</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">National</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/image-story/gallery-images/11_322.jpg"
                         alt="Card image cap">

                     <div id="category7" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">POST EVERYTHING</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">PostEverything</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/smg_980large_m/public/news-story/cover-images/2Vegitables_0.gif"
                         alt="Card image cap">

                     <div id="category8" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

             </div>

         </section>
         <!-- end categories section -->

         <!-- start entertaiment section -->
         <section class="w-100 my-md-2 entertainment">
             <div class="section-title-mobile d-flex d-md-none justify-content-between">
                 <span class="mx-3">ENTERTAINMENT</span>
                 <i class="fa fa-angle-right mx-3"></i>
             </div>

             <div class="inner-container px-0">
                 <span class="section-title-desktop">Entertainment</span>
                 <div class="row mx-0 mb-md-3">
                     <div class="px-0 pr-md-2 pt-md-1 pb-md-2 col-md-8 entertainment-container">
                         <div id="entertainment-carousel" class="carousel slide" data-ride="carousel">

                             <ol class="carousel-indicators c-indicator">
                                 <li data-slide-to="0" class="dot-indicators active"></li>
                                 <li data-slide-to="1" class="dot-indicators"></li>
                                 <li data-slide-to="2" class="dot-indicators"></li>
                                 <li data-slide-to="3" class="dot-indicators"></li>
                                 <li data-slide-to="4" class="dot-indicators"></li>
                                 <li data-slide-to="5" class="dot-indicators"></li>
                             </ol>

                             <ol class="carousel-indicators v-story-indicators">
                                 <li data-slide-to="0" class="triangle active"></li>
                                 <li data-slide-to="1" class="triangle"></li>
                                 <li data-slide-to="2" class="triangle"></li>
                             </ol>

                             <div class="carousel-inner">
                                 <div class="carousel-item active">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                             alt="First slide">
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                             alt="Second slide">
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                             alt="Third slide">
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                             alt="Fourth slide">
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                             alt="Fourth slide">
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                             alt="Fourth slide">
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="entertainment-list-box">
                             <ul class="list-unstyled">
                                 <li class="entertainment-list d-md-flex align-items-center">
                                     <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                     <div class="news-description">
                                         <span class="v-time mb-2">4 h ago</span>
                                         <!-- <span class="v-time">1234 comments</span> -->
                                     </div>
                                 </li>
                                 <li class="entertainment-list d-md-flex align-items-center">
                                     <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                     <div class="news-description">
                                         <span class="v-time mb-2">4 h ago</span>
                                         <!-- <span class="v-time">1234 comments</span> -->
                                     </div>
                                 </li>
                                 <li class="entertainment-list d-md-flex align-items-center">
                                     <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                     <div class="news-description">
                                         <span class="v-time mb-2">4 h ago</span>
                                         <!-- <span class="v-time">1234 comments</span> -->
                                     </div>
                                 </li>
                                 <li class="entertainment-list d-md-none align-items-center">
                                     <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                     <div class="news-description">
                                         <span class="v-time mb-2">4 h ago</span>
                                         <!-- <span class="v-time">1234 comments</span> -->
                                     </div>
                                 </li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-md-4 py-2 pr-0 pt-md-1 pb-md-2 ad-block-desktop">
                         <div class="ad-block"></div>
                     </div>
                 </div>
                 <div class="row mx-0">
                     <div class="col-md-4 py-2 pl-0 ad-block-desktop">
                         <div class="ad-block"></div>
                     </div>
                     <div class="col-md-4 py-2 ad-block-desktop">
                         <div class="ad-block"></div>
                     </div>
                     <div class="col-md-4 py-2 pr-0 ad-block-desktop">
                         <div class="ad-block"></div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- end entertaiment section -->

         <div class="ad-block-mobile mb-2"></div>

         <!-- start footer-top section-->
         <section class="w-100 mt-2 footer-top">
             <div class="inner-container px-0 px-md-4 pt-md-3 pb-md-3 icon-container">
                 <div class="row mx-0">
                     <div id="menu-1"
                         class="d-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                         <ul class="m-0 p-0">
                             <li>
                                 <i class="fa fa-envelope" aria-hidden="true"></i>
                                 <span>Newsletter</span>
                             </li>
                             <li>
                                 <i class="fa fa-phone" aria-hidden="true"></i>
                                 <span>SAAM TV</span>
                             </li>
                             <li>
                                 <i class="fa fa-pencil" aria-hidden="true"></i>
                                 <span>SAKAL TIMES</span>
                             </li>
                             <li>
                                 <i class="fa fa-book" aria-hidden="true"></i>
                                 <span>SARKARNAMA</span>
                             </li>
                             <li>
                                 <i class="fa fa-square" aria-hidden="true"></i>
                                 <span>YINBUZZ</span>
                             </li>
                         </ul>
                     </div>
                     <div id="menu-2"
                         class="d-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                         <ul class="m-0 p-0">
                             <li>
                                 <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                 <span>SAKAL Printer</span>
                             </li>
                             <li>
                                 <i class="fa fa-certificate" aria-hidden="true"></i>
                                 <span>Subscribe</span>
                             </li>
                             <li>
                                 <i class="fa fa-bank" aria-hidden="true"></i>
                                 <span>Advertise with us</span>
                             </li>
                             <li>
                                 <i class="fa fa-headphones" aria-hidden="true"></i>
                                 <span>Newsletter</span>
                             </li>
                             <li>
                                 <i class="fa fa-cubes" aria-hidden="true"></i>
                                 <span>Contact us</span>
                             </li>
                         </ul>
                     </div>
                     <div id="menu-3"
                         class="d-none d-md-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                         <ul class="m-0 p-0">
                             <li>
                                 <i class="fa fa-envelope" aria-hidden="true"></i>
                                 <span>Newsletter</span>
                             </li>
                             <li>
                                 <i class="fa fa-phone" aria-hidden="true"></i>
                                 <span>SAAM TV</span>
                             </li>
                             <li>
                                 <i class="fa fa-pencil" aria-hidden="true"></i>
                                 <span>SAKAL TIMES</span>
                             </li>
                             <li>
                                 <i class="fa fa-book" aria-hidden="true"></i>
                                 <span>SARKARNAMA</span>
                             </li>
                             <li>
                                 <i class="fa fa-square" aria-hidden="true"></i>
                                 <span>YINBUZZ</span>
                             </li>
                         </ul>
                     </div>
                     <div id="menu-4"
                         class="d-none d-md-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                         <ul class="m-0 p-0">
                             <li>
                                 <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                 <span>SAKAL Printer</span>
                             </li>
                             <li>
                                 <i class="fa fa-certificate" aria-hidden="true"></i>
                                 <span>Subscribe</span>
                             </li>
                             <li>
                                 <i class="fa fa-bank" aria-hidden="true"></i>
                                 <span>Advertise with us</span>
                             </li>
                             <li>
                                 <i class="fa fa-headphones" aria-hidden="true"></i>
                                 <span>Newsletter</span>
                             </li>
                             <li>
                                 <i class="fa fa-cubes" aria-hidden="true"></i>
                                 <span>Contact us</span>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </section>
         <!-- end footer-top section -->

         <!-- start footer-bottom section -->
         <section class="w-100 pt-md-0 pb-md-4 footer-bottom">
             <div class="d-flex flex-column align-items-center inner-container">
                 <div class="d-none d-md-block footer-logo-div"></div>

                 <div class="d-none d-md-block px-5 text-center footer-breadcrumbs-container">
                     <span>Start</span>
                     <span class="mx-2">&gt;</span>
                     <span>Digital</span>
                     <span class="mx-2">&gt;</span>
                     <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span>
                 </div>

                 <div class="grey-line"></div>
                 <div class="mt-md-4 py-2 py-md-0 footer-links-div">
                     <ul class="m-0 p-0 text-center">
                         <li class="mr-1 mx-md-2 d-inline-block">SUBSCRIPTION</li>
                         <li class="mr-1 mx-md-2 d-inline-block">PUBLISHING COMPANY</li>
                         <li class="mr-1 mx-md-2 d-inline-block">ADVERTISEMENT</li>
                         <li class="mr-1 mx-md-2 d-inline-block">MEDIA</li>
                         <li class="mr-1 mx-md-2 d-inline-block">PRESS</li>
                         <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                         <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                         <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                         <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                     </ul>
                 </div>
                 <div class="grey-line"></div>
             </div>
         </section>
         <!-- end footer-bottom section -->


         <!-- start copyright section -->
         <section class="w-100 d-flex copyright">
             <div class="d-flex flex-column inner-container pt-3 pt-md-3 pb-4 copy-pad">
                 <div class="d-flex mb-4 mb-md-2 justify-content-center">
                     <div class="p-1 py-md-1 px-md-2 go-top-box">
                         <!-- <span class="d-block">^</span> -->
                         <span id="go-top-btn" class="d-flex flex-column align-items-center go-top-text">
                             <span class="mb-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="10" height="10"
                                     viewBox="0 0 24 24" style=" fill:#000000;">
                                     <path
                                         d="M 12.005859 3.765625 L 3.0507812 12.535156 L 4.4492188 13.964844 L 11.994141 6.5761719 L 19.544922 14.083984 L 20.955078 12.666016 L 12.005859 3.765625 z M 11.998047 9.4023438 L 3.0351562 18.550781 L 4.4648438 19.949219 L 12.001953 12.255859 L 19.537109 19.904297 L 20.962891 18.501953 L 11.998047 9.4023438 z">
                                     </path>
                                 </svg>
                             </span>
                             <!-- <i class="fa fa-sort-asc" aria-hidden="true"></i>		 -->
                             <span class="my-1">Go to Top</span>
                         </span>
                     </div>
                 </div>
                 <div
                     class="d-flex flex-column align-items-center d-md-none justify-content-center sakal-logo-footer-box">
                     <div class="my-1 grey-line"></div>
                     <div class="sakal-logo-bottom-footer"></div>
                     <div class="my-1 grey-line"></div>
                 </div>
                 <div
                     class="d-flex px-2 mt-4 mb-2 mt-md-2 justify-content-around justify-content-md-center social-icons-container">
                     <div class="rounded-circle social-icon">
                         <i class="fa fa-twitter fa-social-custom"></i>
                     </div>
                     <div class="rounded-circle social-icon">
                         <i class="fa fa-linkedin fa-social-custom"></i>
                     </div>
                     <div class="rounded-circle social-icon">
                         <i class="fa fa-facebook fa-social-custom"></i>
                     </div>
                     <div class="rounded-circle social-icon">
                         <!-- <img class="social-icon-img" src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/email.svg"> -->
                         <i class="fa fa-envelope fa-social-custom"></i>
                     </div>
                     <div class="rounded-circle social-icon">
                         <img class="social-icon-img"
                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/share.svg">
                         <!-- <i class="fa fa-share fa-social-custom"></i> -->
                     </div>
                     <div class="rounded-circle social-icon">
                         <img class="social-icon-img"
                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/youtube.svg">
                         <!-- <i class="fa fa-youtube fa-social-custom"></i> -->
                     </div>
                 </div>
                 <div class="mt-md-2 nopadding text-center news-description copyright-text">
                     Copyright Sakal Media Group – All Rights Reserved
                 </div>
             </div>
         </section>
         <!-- end copyright section -->

         <!-- end main-container -->
     </div>


 </div>


 <?php
    } elseif ($_GET["version"] == 5 || $_GET["version"] == 4) {
        ?>

 <link rel="stylesheet" type="text/css" href="sites/esakal/themes/smg980/css/otherad9993.css">

 <div class="home-page-wrapper">

     <!-- start other ad changes -->
     <div class="ht-zero sticky-nav-helper"></div>
     <div class="main-container top-jacket-ad other-sticky"></div>
     <div class="main-container tenpx d-none d-md-block" style="height: 10px; background-color: #f2f4fc;z-index: 20;">
     </div>
     <div class="left-jacket-ad"></div>
     <div class="right-jacket-ad"></div>
     <!-- <div class="transparent-div"></div> -->
     <!-- end other ad changes -->

     <div id="mobile-hamburger" class="d-flex justify-content-center transparent-hamburger">
         <div class="d-block main-container">
             <div class="mobile-side-nav p-2">
                 <div id="close-side-nav-btn" class="close-side-nav">
                     <div class="hamburger-logo"></div>
                     <div class="x-style">X</div>
                 </div>
                 <div class="side-nav-item px-2"></div>
                 <div class="side-nav-content"><a href="/tajya-batmya/marathi-news" target="_blank">ताज्या </a></div>
                 <div class="side-nav-content"><a href="/pune-news" target="_blank">पुणे </a></div>
                 <div class="side-nav-content"><a href="/mumbai-news" target="_blank">मुंबई </a></div>
                 <div class="side-nav-content"><a href="/desh" target="_blank">देश </a></div>
                 <div class="side-nav-content"><a href="" target="_blank">लाईव्ह टीव्ही </a></div>
                 <div class="side-nav-content"><a href="/global" target="_blank">ग्लोबल </a></div>
                 <div class="side-nav-content"><a href="/coronavirus" target="_blank">कोरोना </a></div>
                 <div class="side-nav-content"><a href="/krida" target="_blank">क्रीडा </a></div>
             </div>
         </div>
     </div>
     <div class="mobile-global-nav">
         <div id="mobile-side-menu-btn" class="mobile-side-menu"><i class="fa fa-2x fa-bars"></i></div>
         <div class="mobile-logo d-flex justify-content-center align-items-end">
             <div class="tagline">उदय भविष्यपत्राचा</div>
         </div>
         <div class="mobile-user-login "><i class="fa fa-2x fa-user"></i></div>
     </div>

     <div class="mobile-nav-wrapper flex-column align-items-center justify-content-center">
         <nav class="w-100 h-100 nav mobile-nav justify-content-around align-items-center">
             <div class="mobile-nav-link active"><a href="/mumbai-news" target="_blank">मुंबई</a></div>
             <div class="mobile-nav-link active"><a href="/tajya-batmya/marathi-news" target="_blank">ताज्या </a></div>
             <div class="mobile-nav-link active"><a href="/mukhya-news" target="_blank">मुख्य</a></div>
             <div class="mobile-nav-link active"><a href="/desh" target="_blank">देश</a></div>
             <div class="mobile-nav-link active"><a href="/global" target="_blank">जग </a></div>
             <div class="mobile-nav-link active"><a href="/krida" target="_blank">क्रीडा </a></div>
             <div class="mobile-nav-link active"><a href="/pune-news" target="_blank">पुणे</a></div>
             <div class="mobile-nav-link active"><a href="/kokan-news" target="_blank">कोकण</a></div>
         </nav>
     </div>

     <div class="global-nav-wrapper global-nav-space">
         <div class="global-nav d-flex align-items-center">

             <nav class="nav">
                 <div id="desktop-side-menu-btn" class="nav-link active" href="#">
                     <i class="fa fa-bars " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                     <div class="dropdown-menu dropdown-menu-bottom" x-placement="bottom-start"
                         style="position: absolute; transform: translate3d(0px, 1760px, 0px); top: 0px; left: 0px; will-change: transform;"
                         x-out-of-boundaries="">
                         <a class="dropdown-item" href="#">Action</a>
                         <a class="dropdown-item" href="#">Another action</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                 </div>
                 <div class="nav-link active"><a href="/manoranjan" target="_blank">S+</a></div>
                 <div class="nav-link active"><a href="/manoranjan" target="_blank">मनोरंजन </a></div>
                 <div class="nav-link active"><a href="/tajya-batmya/marathi-news" target="_blank">ताज्या </a></div>
                 <div class="nav-link active"><a href="/mukhya-news" target="_blank">मुख्य </a></div>
                 <div class="nav-link active"><a href="/desh" target="_blank">देश </a></div>
                 <div class="nav-link active"><a href="/global" target="_blank">जग </a> </div>
                 <div class="nav-link active"><a href="/krida" target="_blank">क्रीडा </a></div>
                 <div class="nav-link active"><a href="/pune-news" target="_blank">पुणे </a></div>
                 <div class="nav-link active"><a href="/mumbai-news" target="_blank">मुंबई </a></div>
                 <div class="nav-link active"><a href="/kokan-news" target="_blank">कोकण </a></div>
             </nav>
         </div>
         <div class="global-nav-right-div">
             <div class="user-login d-flex justify-content-end align-items-center ml-auto">
                 <div class="voice-search pr-md-3">
                     <span class="icon glyphicon fa fa-microphone" role="application" aria-hidden="true"
                         id="edit-submit-search-view" data-toggle="" aria-haspopup="true" aria-expanded="true"></span>
                 </div>
                 <div class="siteSearch pr-md-3">
                     <span class="icon glyphicon glyphicon-search pull-right cursor-pointer" role="application"
                         aria-hidden="true" id="edit-submit-search-view" data-toggle="" aria-haspopup="true"
                         aria-expanded="true">
                         <i class="fa fa fa-search"></i>
                     </span>
                     <?php print $search_form; ?>
                 </div>
                 <i class="fa fa-user"></i>
             </div>
         </div>
     </div>

     <div id="main-container-id" class="main-container pt-2 pt-md-0">

         <div class="header mb-2">
             <div class="inner-container">
                 <div class="header-logo d-flex align-items-end justify-content-between py-1">
                     <div class="day-date font-weight-bold english-font">Tuesday, March 24, 2020</div>
                     <div class="day-date center-div">उदय भविष्यपत्राचा</div>
                     <div class="day-date font-weight-bold english-font">EPAPER</div>
                 </div>
                 <div class="header-nav pt-md-2">
                     <nav class="nav">
                         <div class="nav-link active py-1 pl-0"><a href="/tajya-batmya/marathi-news"
                                 target="_blank">ताज्या </a></div>
                         <div class="nav-link active py-1 pl-0"><a href="/mukhya-news" target="_blank">मुख्य</a></div>
                         <div class="nav-link active py-1 pl-0"><a href="/manoranjan" target="_blank">मनोरंजन</a></div>
                         <div class="nav-link active py-1 pl-0"><a href="/maharashtra-news"
                                 target="_blank">महाराष्ट्र</a></div>
                         <div class="nav-link active py-1 pl-0"><a href="/vidarbha-news/nagpur"
                                 target="_blank">नागपूर</a></div>
                         <div class="nav-link active py-1 pl-0"><a href="/sampadakiya" target="_blank">संपादकीय</a>
                         </div>
                         <div class="nav-link active py-1 pl-0"><a href="/news-topics/union-budget-updates"
                                 target="_blank">अर्थसंकल्प</a></div>
                         <div class="nav-link active py-1 pl-0"><a href="/global" target="_blank">जग</a></div>
                     </nav>
                 </div>
             </div>
         </div>

         <div class="inner-section-width ad-block-top-desktop mt-0" style="height: 200px;margin-bottom: 25px;"></div>
         <div class="ad-block-mobile mt-2" style="height: 50px;"></div>

         <!-- start breaking-news-1 section -->
         <section class="inner-section-width p-0 breaking-news my-2">

             <!-- <div class="container inner-container p-0 d-flex"> -->

             <div class="left-box d-block d-md-flex flex-column pr-2 row1-block1">

                 <div class="left-box-top w-100 d-flex align-items-end justify-content-center">

                     <div class="row m-0 w-100">

                         <div class="my-1 my-md-0 my-lg-1 section-type-1-image d-none d-md-block"></div>

                         <div class="n1 my-md-1 py-2 py-md-2 right-border-zero pt-md-3 pl-md-4"
                             style="background-color: white;">
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">पंतप्रधान मोदींना आवडतात फक्त मराठी दिग्गजांची ही 2
                                 गाणी</div>
                             <div
                                 class="col-lg-1 col-md-0 my-1 my-md-0 my-lg-1 section-type-1-image mb-md-3  d-md-none">
                             </div>
                             <div class="source-container mb-2 d-md-none">source : संतोषचं आयुष्य, टप्प्याटप्प्यानं वळणं
                                 घेत घेत कुणीकडे गेलं हे त्याच्या सगळ्या हकीकतीवरून कळलं.संतोषचं आयुष्य,
                                 टप्प्याटप्प्यानं</div>
                             <div class="news-description mb-1 mb-md-0">
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये
                                 चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                 हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>

                         <div class="n2 py-2 my-md-1 py-md-2 pr-0 pt-md-3" style="background-color: white;">
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">पंतप्रधान मोदींना आवडतात फक्त मराठी दिग्गजांची ही 2
                                 गाणी</div>
                             <div class="news-description mb-1 mb-md-0">
                                 मुंबई : मुंबई कृषी उत्पन्न बाजार समितीच्या वाशी येथील फळ बाजारात फळांच्या राजा हापूस
                                 आंबा दाखल झाला आहे. वातावरणाचा फटका बसल्याने यावर्षी हापूस आंब्याची बाजारातील आवक
                                 नेहमीच्या मानाने घटलेली आहे. त्यातच कोरोनाच्या प्रभावाने बाजारात आंब्याला आता उठावही
                                 नाही, निर्यातही कमी ठप्प असल्याने कोकणातील हापूस आंबा बागायतदार आणि व्यापाऱ्यांची चिंता
                                 वाढली आहे.
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>
                     </div>

                 </div>

                 <div class="left-box-bottom w-100 d-block d-md-flex flex-column align-items-center">

                     <div class="row m-0 h-md-50 w-100">

                         <div class="nl py-2 my-md-1 py-md-2 pl-lg-0 right-border-1">

                             <!-- <div class="d-block"> -->
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन
                                 दहशतवाद्यांचा केला खात्मा</div>

                             <div class="news-description mb-1 mb-md-0">
                                 मुंबई :महाराष्ट्रासह मुंबईत कोरोनाग्रस्तांचा आकडा वाढत चालला आहे. मुंबईत कोरोनाचे
                                 सर्वात जास्त रुग्ण आढळले आहेत. त्यामुळे खरबदारीचा उपाय म्हणून प्रशासन योग्य ती पावलं
                                 उचलत आहे. आशिया खंडातील सर्वात गजबजलेला आणि दाट लोकवस्तीचा भाग म्हणून ओळख असलेल्या
                                 धारावीमध्ये
                                 तब्बल ७ कोरोनाचे रुग्ण आढळले आहेत त्यामुळे प्रशासन अधिकच सतर्क झालं आहे..
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>

                         <div class="nr my-md-1 py-2 py-md-2 pr-lg-0">
                             <!-- <div class="d-block"> -->
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">पती-पत्नी आणि ती ! अपूर्वानं 'या' कारणामुळं रोहित
                                 तिवारीची केली हत्या</div>


                             <div class="news-description mb-1 mb-md-0 d-block d-lg-none">
                                 कोरोना व्हायरस सगळीकडे सध्या थैमान घालत आहे. त्यामुळे सर्व यंत्रणा डोळ्यात तेल घालून
                                 काम करीत आहे. आरोग्य यंत्रणेतील मनुष्यबळ कमी पडतंय वाटायला लागल्यावर सरकारने 'आशा'
                                 वर्कर्स यांना आरोग्य विभागाच्या मदतीसाठी बोलावले आहे. सरकार त्यांना कामांसाठी महिन्याला
                                 एक हजार वेतन देणार आहे. शासनाकडून बोलावणे आल्यानंतर आशा वर्कर्स 'कोरोना'शी धैर्याने लढत
                                 आहेत. खरं तर ग्रामीण व शहरी भागात आशा वर्कर्स गरोदर महिलांची तपासणी करणे, नवजात
                                 बालकांची काळजी घेणे, बालकांचे लसिकरण करणे,
                                 माता-बालमृत्यू दर कमी करणे, गरोदर महिलांना पोषक आहाराबाबत मार्गदर्शन करणे, किशोरवयीन
                                 मुलींना मार्गदर्शन करणे यासह टि.बी., एचआयव्ही, मलेरीया, डेंग्यू यासारख्या साथीच्या
                                 आजारांमध्ये लोकांचे आरोग्य सांभाळन्याचे काम
                                 करतात. आशा वर्कर्स 'कोरोना' संदर्भात आपलं कर्तव्य पार पडत असताना त्यांच्यावर हल्ले होत
                                 आहेत. काही जणींना तर यापेक्षा वाईट प्रसंगाला सामोरे जावे लागत आहे. त्यामुळे या आशा
                                 वर्कर्स कोरोनाच्या काळात कोणत्या परिस्थितीत
                                 काम करत आहेत याचा आढावा इ
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>


                         <!-- ad-row1 -->
                         <div class="ad-block-mobile my-3 inner-section-width d-md-none"></div>
                         <!-- end-ad-row1 -->

                     </div>

                     <div class="row m-0 h-md-50 w-100">
                         <div class="row3nl my-md-1 py-2 py-md-2 pl-lg-0 right-border-2">
                             <!-- <div class="d-block"> -->
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दोन दोन
                                 दहशतवाद्यांचा केला खात्मा</div>

                             <div class="news-description mb-1 mb-md-0">
                                 छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन १५०० के बाद से अभी तक इस उद्योग का
                                 मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन १५०० के बाद से
                                 अभी तक इस उद्योग का मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग का एक साधारण डमी
                                 पाठ है.सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन.
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>

                         <div class="row3nr my-md-1 py-2 py-md-2 pr-lg-0">
                             <!-- <div class="d-block"> -->
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">पंतप्रधान मोदींना आवडतात फक्त मराठी दिग्गजांची ही 2
                                 गाणी</div>

                             <div class="news-description mb-1 mb-md-0">
                                 छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन १५०० के बाद से अभी तक इस उद्योग का
                                 मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन १५०० के बाद से
                                 अभी तक इस उद्योग का मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग का एक साधारण डमी
                                 पाठ है.सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन.
                             </div>
                             <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                         </div>
                     </div>

                 </div>

             </div>
             <div class="right-box d-none d-md-flex flex-column justify-content p-0">
                 <div class="mb-2 w-100 d-flex justify-content-center align-items-center" style="height: 8%;"></div>
                 <div class="mb-2 w-100 video-title">Video</div>
                 <div class="right-box-sub w-100 d-flex justify-content-center align-items-center" style="height: 23%;">
                     <iframe width="100%" height="100%" src="https://www.youtube.com/embed/bbNFwiSY05g" frameborder="0"
                         allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                         allowfullscreen></iframe></div>
                 <div class="right-box-sub w-100 e-paper" style="background-color: aqua; height: 18.5%;"></div>
                 <div class="right-box-sub w-100 d-flex justify-content-center align-items-center"
                     style="background-color: gray;height: 250px;width: 320px;">Advertisement-2(320 * 250)</div>
             </div>
             <!-- </div> -->
         </section>
         <!-- end breaking-news-1 section -->
         <div class="inner-section-width ad-block-top-desktop d-md-flex d-sm-none" style="height: 100px;"></div>


         <!-- start breaking-news-2 section -->
         <section class="inner-section-width breaking-news-2 my-2 p-0 pb-md-1">
             <div class="left-box row ml-0 pr-lg-2 ">
                 <div class="col-md-6 col-sm-12 pl-lg-0 mb-lg-2 my-1 mt-md-0">
                     <div class="card-img-top mb-2">
                         <img class="w-100 h-100"
                             src="https://www.faz.net/ppmedia/aktuell/technik-motor/3131404806/1.5896418/mmo-uebersichtsseite-aufmacher-retina/teaser-bild-fuer-f-a-z.jpg"
                             alt="Card image cap">
                     </div>
                     <div class="mobile-overlap p-2 pl-3 p-md-0">
                         <div class="news-section-title mb-2">साधारण</div>
                         <div class="news-title mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद दहशतवादयांचा केला खातमा
                         </div>
                     </div>
                     <div class="news-description mb-1">
                         वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत मुलांना हा अधिकार मिळतो.
                         त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची
                         आहे, असे स्पष्ट मत मुंबई उच्च न्यायालयाने व्यक्त केले व वडिलोपार्जित
                         मालमत्तेपासून वंचित ठेवण्याविरोधात मुलाने केलेली याचिका फेटाळली.
                     </div>
                     <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                 </div>
                 <div class="col-md-6 col-sm-12 pr-lg-0 mb-lg-2 my-1 mt-md-0">
                     <div class="card-img-top mb-2">
                         <img class="w-100 h-100"
                             src="https://www.ccn.com/wp-content/uploads/2019/08/stock-market-bubble-ap-768x512.jpg"
                             alt="Card image cap">
                     </div>
                     <div class="mobile-overlap p-2 pl-3 p-md-0">
                         <div class="news-section-title mb-2">साधारण</div>
                         <div class="news-title mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद दहशतवादयांचा केला खातमा
                         </div>
                     </div>
                     <div class="news-description mb-1">
                         कोरोना या विषाणूचा प्रादुर्भाव रोखण्यासाठी केंद्र व राज्य सरकारने जाहीर केलेला लॉकडाउन
                         वाढण्याची शक्&zwj;यता आता दाट वाटू लागली आहे. या पार्श्&zwj;वभूमीवर महाराष्ट्र लोकसेवा आयोगाने
                         मंगळवारी (ता. 7) महत्त्वाचा निर्णय जाहीर करीत राज्यसेवेची पूर्व परीक्षा
                         व महाराष्ट्र राज्य दुय्यम सेवा अराजपत्रित गट-ब संयुक्&zwj;त पूर्व परीक्षा पुढे ढकलण्याचा निर्णय
                         घेतला. मात्र, पुढे कधी परीक्षा होणार हे स्पष्ट केलेले नाही.
                     </div>
                     <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                 </div>
             </div>

             <div class="right-box pl-md-0 d-none d-md-flex flex-column justify-content-start align-items-center">
                 <div class="advertisement-4 w-100 d-flex justify-content-center align-items-center"
                     style="background-color: gray; height: 250px;">
                     Advertisement-4 (320 * 250)
                 </div>
                 <div class="newsletter w-100 d-flex flex-column justify-content-around">
                     <div class="section-title-desktop mb-md-2">Newsletter</div>
                     <div class="input-group mb-1">
                         <input type="email" class="form-control newsletter-input"
                             placeholder="ENTER YOUR EMAIL ADDRESS" aria-label="Recipient's username"
                             aria-describedby="basic-addon2">
                         <div class="input-group-append">
                             <button class="btn newsletter-button" type="button">GO</button>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- end breaking-news-2 section -->

         <!-- start podcast section -->
         <section class="podcast">
             <div class="section-title-mobile d-flex d-md-none justify-content-between">
                 <span class="mx-3">Podcast</span>
                 <i class="fa fa-angle-right mx-3"></i>
             </div>
             <div class="inner-container d-block d-md-flex justify-content-between my-2 mt-md-4 mb-md-2">
                 <div class="our-services-div">
                     <div class="section-title-desktop">
                         Podcast
                     </div>
                 </div>
                 <div class="right-full-div d-block d-md-flex flex-column">

                     <div class="horizontal-struct d-block d-md-flex justify-content-between pb-md-4">
                         <div class="news-box px-0 col-md-4 col-sm-12 px-md-0 mb-4 mt-2 mb-md-2 mt-md-0">
                             <div class="news-box-container"></div>
                             <div class="card-img-top mb-2">
                                 <img class="w-100 h-100"
                                     src="https://techcrunch.com/wp-content/uploads/2019/02/podcast-mic-blue.png"
                                     alt="Card image cap">
                             </div>
                             <div class="news-section-title mb-1">साधारण</div>
                             <div class="news-title mb-md-2">जवानांनी</div>
                             <div class="news-description mb-1">
                                 वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत मुलांना हा
                                 अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान.
                             </div>
                             <div class="podcast-footer english-font mt-2 mt-md-3">
                                 <span>Apple Podcast | </span>
                                 <span>Google Podcast | </span>
                                 <span>Spotify | </span>
                                 <span>Sticher</span>
                             </div>
                         </div>
                         <div class="news-box px-0 col-md-4 col-sm-12 px-md-0 mb-4 mt-2 mb-md-2 mt-md-0">
                             <div class="news-box-container"></div>
                             <div class="card-img-top mb-2">
                                 <img class="w-100 h-100"
                                     src="https://rachelcorbett.com.au/wp-content/uploads/2018/07/Neon-podcast-logo.jpg"
                                     alt="Card image cap">
                             </div>
                             <div class="news-section-title mb-1">साधारण</div>
                             <div class="news-title mb-md-2">अनंतनागमधये</div>
                             <div class="news-description mb-1">
                                 वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत मुलांना हा
                                 अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि त्यांच्यासाठी
                                 संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च न्यायालयाने व्यक्त केले व
                                 वडिलोपार्जित मालमत्तेपासून वंचित ठेवण्याविरोधात मुलाने केलेली याचिका फेटाळली.
                             </div>
                             <div class="podcast-footer english-font mt-2 mt-md-3">
                                 <span>Apple Podcast | </span>
                                 <span>Google Podcast | </span>
                                 <span>Spotify | </span>
                                 <span>Sticher</span>
                             </div>
                         </div>

                         <div class="news-box px-0 col-md-4 col-sm-12 px-md-0 mb-2 mt-2 mb-md-2 mt-md-0">
                             <div class="news-box-container"></div>
                             <div class="card-img-top mb-2">
                                 <img class="w-100 h-100"
                                     src="https://blogs.nvidia.com/wp-content/uploads/2017/02/ai-podcast-social-tw-li-2048x1024.jpg"
                                     alt="Card image cap">
                             </div>
                             <div class="news-section-title mb-1">साधारण</div>
                             <div class="news-title mb-md-2">दहशतवाद</div>
                             <div class="news-description mb-1">
                                 वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत मुलांना हा
                                 अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि त्यांच्यासाठी
                                 संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च न्यायालयाने व्यक्त केले.
                             </div>
                             <div class="podcast-footer english-font mt-2 mt-md-3">
                                 <span>Apple Podcast | </span>
                                 <span>Google Podcast | </span>
                                 <span>Spotify | </span>
                                 <span>Sticher</span>
                             </div>
                         </div>
                     </div>

                     <div class="podcast-bar horizontal-struct d-flex justify-content-between align-items-end"
                         style="height:70px; width:100%; background-color:#0060aa;">

                     </div>
                 </div>
             </div>
         </section>
         <!-- End podcast section -->

         <!-- start premium section -->
         <section class="premium">
             <div class="section-title-mobile d-flex d-md-none justify-content-between">
                 <span class="mx-3">Premium</span>
                 <i class="fa fa-angle-right mx-3"></i>
             </div>
             <div class="inner-container mobile-full-width d-flex justify-content-between mt-md-4 mb-md-2">
                 <div class="our-services-div">
                     <div class="section-title-desktop">
                         Premium
                     </div>
                 </div>
                 <div class="right-full-div d-block d-md-flex flex-column">
                     <div class="image-div horizontal-struct d-flex justify-content-between align-items-end">
                         <div class="my-1 my-md-0 my-lg-1 d-md-block spacing-left-overlap"></div>
                         <div class="right-overlap p-3 p-md-3 pr-md-5" style="background-color: white;">
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1" style="font-size: 25px;">पंतप्रधान मोदींना
                                 आवडतात फक्त मराठी दिग्गजांची ही 2 गाणी</div>
                             <div class="col-lg-1 col-md-0 my-1 my-md-0 my-lg-1 section-type-1-image mb-md-3 d-none"
                                 style="background-image:url(https://theintercept.imgix.net/wp-uploads/sites/1/2020/04/GettyImages-1217449615-crop.jpg?auto=compress%2Cformat&q=90&fit=crop&w=1440&h=720);">
                             </div>
                             <div class="source-container mb-2 d-none">source : संतोषचं आयुष्य,
                                 टप्प्याटप्प्यानं वळणं घेत घेत कुणीकडे गेलं हे त्याच्या सगळ्या हकीकतीवरून
                                 कळलं.संतोषचं आयुष्य,टप्प्याटप्प्यानं</div>
                             <div class="news-description mt-3 mb-1 my-md-0">
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                             </div>
                             <div class="news-footer d-block d-md-none mb-2 mb-md-2">6 h ago</div>
                         </div>
                     </div>

                     <div
                         class="inner-container desktop-full-width horizontal-struct d-block d-md-flex justify-content-between">
                         <div
                             class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                             <div class="d-flex d-md-block card-img-top mb-2">
                                 <img class="w-100 h-100"
                                     src="https://www.hindustantimes.com/rf/image_size_444x250/HT/p2/2020/05/19/Pictures/response-briefing-washington-coronavirus-president-trump-leads_1a12f216-99ae-11ea-b5cf-22f71a9413fe.jpg"
                                     alt="Card image cap">
                             </div>
                             <div class="news-box-container pl-3 pr-2 p-md-0">
                                 <div class="news-section-title mb-1">साधारण</div>
                                 <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                     दहशतवादयांचा केला खातमा
                                 </div>
                                 <div class="news-description d-none d-md-block mb-1">
                                     वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                     मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                     त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                     न्यायालयाने व्यक्त केले.
                                 </div>
                                 <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                             </div>
                         </div>
                         <div
                             class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                             <div class="d-flex d-md-block card-img-top mb-2">
                                 <img class="w-100 h-100"
                                     src="https://images.pexels.com/photos/1083895/pexels-photo-1083895.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                     alt="Card image cap">
                             </div>
                             <div class="news-box-container pl-3 pr-2 p-md-0">
                                 <div class="news-section-title mb-1">साधारण</div>
                                 <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                     दहशतवादयांचा केला खातमा
                                 </div>
                                 <div class="news-description d-none d-md-block mb-1">
                                     वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                     मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                     त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                     न्यायालयाने व्यक्त केले व वडिलोपार्जित मालमत्तेपासून वंचित ठेवण्याविरोधात
                                     मुलाने केलेली याचिका फेटाळली.
                                 </div>
                                 <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                             </div>
                         </div>

                         <div
                             class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                             <div class="d-flex d-md-block card-img-top mb-2">
                                 <img class="w-100 h-100"
                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/machine.png"
                                     alt="Card image cap">
                             </div>
                             <div class="news-box-container pl-3 pr-2 p-md-0">
                                 <div class="news-section-title mb-1">साधारण</div>
                                 <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                     दहशतवादयांचा केला खातमा
                                 </div>
                                 <div class="news-description d-none d-md-block mb-1">
                                     वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                     मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                     त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                     न्यायालयाने व्यक्त केले.
                                 </div>
                                 <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- End premium section -->

         <!-- Start Agriculture sections -->
         <section class="agriculture">
             <div class="section-title-mobile d-flex d-md-none justify-content-between">
                 <span class="mx-3">Agriculture</span>
                 <i class="fa fa-angle-right mx-3"></i>
             </div>
             <div class="inner-container d-flex mt-md-2 mb-md-2">
                 <div class="our-services-div">
                     <div class="section-title-desktop">
                         Agriculture
                     </div>
                 </div>
                 <div class="horizontal-div d-block d-md-flex justify-content-between">
                     <div
                         class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                         <div class="d-flex d-md-block card-img-top mb-2">
                             <img class="w-100 h-100"
                                 src="https://www.solvay.com/sites/g/files/srpend221/files/styles/header/https/media.solvay.com/medias/domain1446/media403/61160-8sbe5pbpfw.jpg"
                                 alt="Card image cap">
                         </div>
                         <div class="news-box-container pl-3 pr-2 p-md-0">
                             <div class="news-section-title mb-1">साधारण</div>
                             <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                 दहशतवादयांचा केला खातमा
                             </div>
                             <div class="news-description d-none d-md-block mb-1">
                                 वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                 मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                 त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                 न्यायालयाने व्यक्त केले.
                             </div>
                             <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                         </div>
                     </div>
                     <div
                         class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                         <div class="d-flex d-md-block card-img-top mb-2">
                             <img class="w-100 h-100"
                                 src="https://qrius.com/wp-content/uploads/2014/09/agriculture1.jpg"
                                 alt="Card image cap">
                         </div>
                         <div class="news-box-container pl-3 pr-2 p-md-0">
                             <div class="news-section-title mb-1">साधारण</div>
                             <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                 दहशतवादयांचा केला खातमा
                             </div>
                             <div class="news-description d-none d-md-block mb-1">
                                 वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                 मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                 त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                 न्यायालयाने व्यक्त केले व वडिलोपार्जित मालमत्तेपासून वंचित ठेवण्याविरोधात
                                 मुलाने केलेली याचिका फेटाळली.
                             </div>
                             <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                         </div>
                     </div>

                     <div
                         class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                         <div class="d-flex d-md-block card-img-top mb-2">
                             <img class="w-100 h-100"
                                 src="https://www.ozseals.com/wp-content/uploads/2017/10/agriculture.jpg"
                                 alt="Card image cap">
                         </div>
                         <div class="news-box-container pl-3 pr-2 p-md-0">
                             <div class="news-section-title mb-1">साधारण</div>
                             <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                 दहशतवादयांचा केला खातमा
                             </div>
                             <div class="news-description d-none d-md-block mb-1">
                                 वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                 मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                 त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                 न्यायालयाने व्यक्त केले.
                             </div>
                             <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- End Agriculture sections -->

         <!-- Start Follow Us sections -->
         <section class="follow-us w-100">
             <div class="section-title-mobile d-flex d-md-none justify-content-between">
                 <span class="mx-3">Follow Us</span>
                 <i class="fa fa-angle-right mx-3"></i>
             </div>
             <div class="inner-container d-block d-md-flex my-2 mt-md-4 mb-md-2">
                 <div class="our-services-div">
                     <div class="section-title-desktop">
                         Follow Us
                     </div>
                 </div>
                 <div class="horizontal-div d-flex justify-content-between">

                     <div class="follow-us-container d-flex flex-column align-items-center">
                         <div class="follow-us-icons"
                             style="background-image:url(https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/social/fb.png);">
                         </div>
                         <span class="social-text english-font">Facebook</span>
                     </div>
                     <div class="follow-us-container d-flex flex-column align-items-center">
                         <div class="follow-us-icons"
                             style="background-image:url(https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/social/insta.png);">
                         </div>
                         <span class="social-text english-font">Instagram</span>
                     </div>
                     <div class="follow-us-container d-flex flex-column align-items-center">
                         <div class="follow-us-icons"
                             style="background-image:url(https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/social/twitter.png);">
                         </div>
                         <span class="social-text english-font">Twitter</span>
                     </div>
                     <div class="follow-us-container d-flex flex-column align-items-center">
                         <div class="follow-us-icons"
                             style="background-image:url(https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/social/whatsapp.png);">
                         </div>
                         <span class="social-text english-font"><span>WhatsApp</span>
                             <span class="d-none d-md-inline"> & Co.</span></span>
                     </div>
                     <div class="follow-us-container d-flex flex-column align-items-center">
                         <div class="follow-us-icons"
                             style="background-image:url(https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/social/linkdin.png);">
                         </div>
                         <span class="social-text english-font">Linkdin</span>
                     </div>
                     <div class="follow-us-container d-flex flex-column align-items-center">
                         <div class="follow-us-icons"
                             style="background-image:url(https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/social/xing.png);">
                         </div>
                         <span class="social-text english-font">Xing</span>
                     </div>
                 </div>
             </div>
         </section>
         <!-- End Follow Us sections -->

         <!-- Start Travel sections -->
         <section class="travel">
             <div class="section-title-mobile d-flex d-md-none justify-content-between">
                 <span class="mx-3">Travel</span>
                 <i class="fa fa-angle-right mx-3"></i>
             </div>
             <div class="inner-container d-flex mt-md-4 mb-md-2">
                 <div class="our-services-div">
                     <div class="section-title-desktop">
                         Travel
                     </div>
                 </div>
                 <div class="horizontal-div d-block d-md-flex justify-content-between">
                     <div
                         class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                         <div class="d-flex d-md-block card-img-top mb-2">
                             <img class="w-100 h-100"
                                 src="https://specials-images.forbesimg.com/imageserve/1024724898/960x0.jpg"
                                 alt="Card image cap">
                         </div>
                         <div class="news-box-container pl-3 pr-2 p-md-0">
                             <div class="news-section-title mb-1">साधारण</div>
                             <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                 दहशतवादयांचा केला खातमा
                             </div>
                             <div class="news-description d-none d-md-block mb-1">
                                 वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                 मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                 त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                 न्यायालयाने व्यक्त केले.
                             </div>
                             <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                         </div>
                     </div>
                     <div
                         class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                         <div class="d-flex d-md-block card-img-top mb-2">
                             <img class="w-100 h-100"
                                 src="https://www.frommers.com/system/media_items/attachments/000/864/971/s980/Island_question_mark.jpg"
                                 alt="Card image cap">
                         </div>
                         <div class="news-box-container pl-3 pr-2 p-md-0">
                             <div class="news-section-title mb-1">साधारण</div>
                             <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                 दहशतवादयांचा केला खातमा
                             </div>
                             <div class="news-description d-none d-md-block mb-1">
                                 वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                 मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                 त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                 न्यायालयाने व्यक्त केले व वडिलोपार्जित मालमत्तेपासून वंचित ठेवण्याविरोधात
                                 मुलाने केलेली याचिका फेटाळली.
                             </div>
                             <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                         </div>
                     </div>

                     <div
                         class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                         <div class="d-flex d-md-block card-img-top mb-2">
                             <img class="w-100 h-100"
                                 src="https://img.etimg.com/thumb/msid-65975178,width-643,imgsize-201359,resizemode-4/travellinginagroup.jpg"
                                 alt="Card image cap">
                         </div>
                         <div class="news-box-container pl-3 pr-2 p-md-0">
                             <div class="news-section-title mb-1">साधारण</div>
                             <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                 दहशतवादयांचा केला खातमा
                             </div>
                             <div class="news-description d-none d-md-block mb-1">
                                 वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                 मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                 त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                 न्यायालयाने व्यक्त केले.
                             </div>
                             <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- End Travel sections -->

         <!-- Start Real Estate sections -->
         <section class="real-estate">
             <div class="section-title-mobile d-flex d-md-none justify-content-between">
                 <span class="mx-3">Real Estate</span>
                 <i class="fa fa-angle-right mx-3"></i>
             </div>
             <div class="inner-container d-flex mt-md-4 mb-md-2">
                 <div class="our-services-div">
                     <div class="section-title-desktop">
                         Real Estate
                     </div>
                 </div>
                 <div class="horizontal-div d-block d-md-flex justify-content-between">
                     <div
                         class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                         <div class="d-flex d-md-block card-img-top mb-2">
                             <img class="w-100 h-100"
                                 src="https://blog.hubspot.com/hubfs/Sales_Blog/best-real-estate-websites.jpg"
                                 alt="Card image cap">
                         </div>
                         <div class="news-box-container pl-3 pr-2 p-md-0">
                             <div class="news-section-title mb-1">साधारण</div>
                             <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                 दहशतवादयांचा केला खातमा
                             </div>
                             <div class="news-description d-none d-md-block mb-1">
                                 वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                 मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                 त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                 न्यायालयाने व्यक्त केले.
                             </div>
                             <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                         </div>
                     </div>
                     <div
                         class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                         <div class="d-flex d-md-block card-img-top mb-2">
                             <img class="w-100 h-100"
                                 src="https://cdn.zeebiz.com/sites/default/files/styles/zeebiz_850x478/public/2019/10/21/103639-real-estate-investments-pixabay.jpeg"
                                 alt="Card image cap">
                         </div>
                         <div class="news-box-container pl-3 pr-2 p-md-0">
                             <div class="news-section-title mb-1">साधारण</div>
                             <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                 दहशतवादयांचा केला खातमा
                             </div>
                             <div class="news-description d-none d-md-block mb-1">
                                 वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                 मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                 त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                 न्यायालयाने व्यक्त केले व वडिलोपार्जित मालमत्तेपासून वंचित ठेवण्याविरोधात
                                 मुलाने केलेली याचिका फेटाळली.
                             </div>
                             <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                         </div>
                     </div>

                     <div
                         class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                         <div class="d-flex d-md-block card-img-top mb-2">
                             <img class="w-100 h-100"
                                 src="https://smedia2.intoday.in/aajtak/images/stories/012015/real_estate_-650_010915041949.jpg"
                                 alt="Card image cap">
                         </div>
                         <div class="news-box-container pl-3 pr-2 p-md-0">
                             <div class="news-section-title mb-1">साधारण</div>
                             <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                 दहशतवादयांचा केला खातमा
                             </div>
                             <div class="news-description d-none d-md-block mb-1">
                                 वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                 मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                 त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                 न्यायालयाने व्यक्त केले.
                             </div>
                             <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- End Real Estate sections -->

         <!-- start Education section -->
         <section class="education">
             <div class="section-title-mobile d-flex d-md-none justify-content-between">
                 <span class="mx-3">Education</span>
                 <i class="fa fa-angle-right mx-3"></i>
             </div>
             <div class="inner-container mobile-full-width d-flex justify-content-between mt-md-4 mb-md-2">
                 <div class="our-services-div">
                     <div class="section-title-desktop">
                         Education
                     </div>
                 </div>
                 <div class="right-full-div d-block d-md-flex flex-column">
                     <div class="image-div horizontal-struct d-flex justify-content-between align-items-end"
                         style="background-image:url(https://images.squarespace-cdn.com/content/55cdbe83e4b0abb42a0efc90/1540799507602-BV94ZNHZPFITH79EHE3A/IAFOR_Journal_of_Education-1100x550.jpg);">
                         <div class="my-1 my-md-0 my-lg-1 d-md-block spacing-left-overlap"></div>
                         <div class="right-overlap p-3 p-md-3 pr-md-5" style="background-color: white;">
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1" style="font-size: 25px;">पंतप्रधान मोदींना
                                 आवडतात फक्त मराठी दिग्गजांची ही 2 गाणी</div>
                             <div class="col-lg-1 col-md-0 my-1 my-md-0 my-lg-1 section-type-1-image mb-md-3 d-none"
                                 style="background-image:url(https://images.squarespace-cdn.com/content/55cdbe83e4b0abb42a0efc90/1540799507602-BV94ZNHZPFITH79EHE3A/IAFOR_Journal_of_Education-1100x550.jpg);">
                             </div>
                             <div class="source-container mb-2 d-none">source : संतोषचं आयुष्य,
                                 टप्प्याटप्प्यानं वळणं घेत घेत कुणीकडे गेलं हे त्याच्या सगळ्या हकीकतीवरून
                                 कळलं.संतोषचं आयुष्य,टप्प्याटप्प्यानं</div>
                             <div class="news-description mt-3 mb-1 my-md-0">
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                             </div>
                             <div class="news-footer d-block d-md-none mb-2 mb-md-2">6 h ago</div>
                         </div>
                     </div>

                     <div
                         class="inner-container desktop-full-width horizontal-struct d-block d-md-flex justify-content-between">
                         <div
                             class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                             <div class="d-flex d-md-block card-img-top mb-2">
                                 <img class="w-100 h-100"
                                     src="https://www.forbesindia.com/media/images/2017/Aug/img_98887_education.jpg"
                                     alt="Card image cap">
                             </div>
                             <div class="news-box-container pl-3 pr-2 p-md-0">
                                 <div class="news-section-title mb-1">साधारण</div>
                                 <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                     दहशतवादयांचा केला खातमा
                                 </div>
                                 <div class="news-description d-none d-md-block mb-1">
                                     वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                     मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                     त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                     न्यायालयाने व्यक्त केले.
                                 </div>
                                 <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                             </div>
                         </div>
                         <div
                             class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                             <div class="d-flex d-md-block card-img-top mb-2">
                                 <img class="w-100 h-100"
                                     src="https://res.cloudinary.com/www-virgin-com/virgin-com-prod/sites/virgin.com/files/Articles/Getty/finland_education_getty_0.jpg"
                                     alt="Card image cap">
                             </div>
                             <div class="news-box-container pl-3 pr-2 p-md-0">
                                 <div class="news-section-title mb-1">साधारण</div>
                                 <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                     दहशतवादयांचा केला खातमा
                                 </div>
                                 <div class="news-description d-none d-md-block mb-1">
                                     वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                     मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                     त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                     न्यायालयाने व्यक्त केले व वडिलोपार्जित मालमत्तेपासून वंचित ठेवण्याविरोधात
                                     मुलाने केलेली याचिका फेटाळली.
                                 </div>
                                 <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                             </div>
                         </div>

                         <div
                             class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                             <div class="d-flex d-md-block card-img-top mb-2">
                                 <img class="w-100 h-100"
                                     src="https://www.timeshighereducation.com/sites/default/files/styles/the_breaking_news_image_style/public/istock-499343530.jpg"
                                     alt="Card image cap">
                             </div>
                             <div class="news-box-container pl-3 pr-2 p-md-0">
                                 <div class="news-section-title mb-1">साधारण</div>
                                 <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                     दहशतवादयांचा केला खातमा
                                 </div>
                                 <div class="news-description d-none d-md-block mb-1">
                                     वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                     मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                     त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                     न्यायालयाने व्यक्त केले.
                                 </div>
                                 <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- End Education section -->

         <!-- more top Stories -->
         <div class="d-flex flex-column flex-md-row mf-md-3 mt-md-2 section-top-stories mts-section">
             <div class="more-top-stories pr-md-0 pt-2 pb-2 pt-md-0 more-top-stories-right-container">

                 <center class="d-md-block float-md-right"><span>More Top Stories</span></center>
             </div>
             <div class="mts-articles pr-md-0 pt-md-1">
                 <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">

                     <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pl-md-5 pr-md-5">
                         <div class="top-stories-art-img">
                             <a href="#"><img data-adaptive-image-breakpoint="1280"
                                     src="https://www.sltrib.com/resizer/mLRVbM95hdlLoDQjUj6c1RRFP_w=/1200x630/filters:quality(85)/arc-anglerfish-arc2-prod-sltrib.s3.amazonaws.com/public/ZNG7LL4U7FEIRNLOQL5C26M66M.jpg"
                                     alt="4dog_26.jpg" title="4dog_26.jpg" style="display: block;">
                             </a>

                         </div>
                     </div>
                     <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                         <div class="d-inline-block d-md-block news-section-title mb-2">
                             अनंतनाग
                         </div>
                         <div class="article-title mb-1 mb-md-2">
                             अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी
                         </div>
                         <div class="article-description">

                             अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत जवानांनी अजिवलीच्या
                             दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा
                             केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                         </div>
                         <div class="post-time-and-comment mt-1 mt-md-2">
                             <span class="time mr-md-1">
                                 6 h ago
                             </span><span class="time d-none d-md-inline">
                                 633 Comments

                             </span>
                         </div>
                     </div>

                 </div>
                 <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">

                     <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pl-md-5 pr-md-5">
                         <div class="top-stories-art-img">

                             <a href="#"><img class="adaptive-image img-responsive"
                                     data-adaptive-image-breakpoint="1280"
                                     src="https://media.npr.org/assets/img/2018/11/27/ap_18325053082002_wide-54c4601d9682527bdc0f43a5f5596079dd2c24b1-s800-c85.jpg"
                                     width="205" height="115" alt="4dog_26.jpg" title="4dog_26.jpg"
                                     style="display: block;">
                             </a>

                         </div>
                     </div>
                     <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                         <div class="d-inline-block d-md-block news-section-title mb-2">
                             अनंतनाग
                         </div>
                         <div class="article-title mb-1 mb-md-2">
                             अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी
                         </div>
                         <div class="article-description">

                             अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत जवानांनी अजिवलीच्या
                             दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा
                             केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                         </div>
                         <div class="post-time-and-comment mt-1 mt-md-2">
                             <span class="time mr-md-1">
                                 6 h ago
                             </span><span class="time d-none d-md-inline">
                                 633 Comments

                             </span>
                         </div>
                     </div>

                 </div>
                 <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">

                     <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pl-md-5 pr-md-5">
                         <div class="top-stories-art-img">

                             <a href="#"><img class="adaptive-image img-responsive"
                                     data-adaptive-image-breakpoint="1280"
                                     src="https://i.guim.co.uk/img/media/3b854be00205da69cc353f70d5e8f806a574a1b4/0_77_4000_2400/master/4000.jpg?width=300&quality=85&auto=format&fit=max&s=da6ea3439077622c641c0a4b91104f30"
                                     width="205" height="115" alt="4dog_26.jpg" title="4dog_26.jpg"
                                     style="display: block;">
                             </a>

                         </div>
                     </div>
                     <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                         <div class="d-inline-block d-md-block news-section-title mb-2">
                             अनंतनाग
                         </div>
                         <div class="article-title mb-1 mb-md-2">
                             अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी
                         </div>
                         <div class="article-description">

                             अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत जवानांनी अजिवलीच्या
                             दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा
                             केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                         </div>
                         <div class="post-time-and-comment mt-1 mt-md-2">
                             <span class="time mr-md-1">
                                 6 h ago
                             </span><span class="time d-none d-md-inline">
                                 633 Comments

                             </span>
                         </div>
                     </div>

                 </div>
                 <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">

                     <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pl-md-5 pr-md-5">
                         <div class="top-stories-art-img">

                             <a href="#"><img class="adaptive-image img-responsive"
                                     data-adaptive-image-breakpoint="1280"
                                     src="https://static.standard.co.uk/s3fs-public/thumbnails/image/2018/07/29/15/robertmugabe2907.jpg"
                                     width="205" height="115" alt="4dog_26.jpg" title="4dog_26.jpg"
                                     style="display: block;">
                             </a>

                         </div>
                     </div>
                     <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                         <div class="d-inline-block d-md-block news-section-title mb-2">
                             अनंतनाग
                         </div>
                         <div class="article-title mb-1 md-md-2">
                             अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी
                         </div>
                         <div class="article-description">

                             अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत
                             जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत जवानांनी अजिवलीच्या
                             दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा
                             केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                         </div>
                         <div class="post-time-and-comment mt-1 mt-md-2">
                             <span class="time mr-md-1">
                                 6 h ago
                             </span><span class="time d-none d-md-inline">
                                 633 Comments

                             </span>
                         </div>
                     </div>

                 </div>


             </div>
         </div>
         <!-- end more top stories -->
         <!-- ad -->
         <div class="ad-block-mobile my-3 d-md-none"></div>
         <!-- creative-lab -->
         <div class="d-flex mt-md-4">
             <div class="ctl-right-bar-dsk d-none d-md-block"></div>

             <div class="d-flex flex-column flex-md-row cl-section mt-md-0">

                 <div class="more-top-stories pr-md-0 pt-1 pb-1 pb-md-0 pt-md-0 pl-md-0 cl-title-section">
                     <div class="cl-bg">
                         <center class="d-inline-block float-left mt-md-3">
                             <span class="mr-3">Paid content</span><span class="d-none d-md-inline">About</span>
                             <span class="d-block d-md-inline-block c-innovatn-m-top">Creative innovation</span>
                         </center>
                         <div class="ca-sak-lab">
                             <div class="title d-none d-md-block">Sakal Labs</div>
                             <div class="mobile title mr-2 d-md-none">Sakal Brand Studio</div>
                             <div class="angular-bracket d-md-none"><i class="fa fa-angle-right"></i></div>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex flex-wrap cl-right-section">
                     <div
                         class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-4">

                         <div class="pl-2 pt-3 pt-md-0 p-md-0">
                             <div class="top-stories-art-img">

                                 <a href="/"><img
                                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/4aag_475.jpg"
                                         alt="4dog_26.jpg" title="4dog_26.jpg">
                                 </a>

                             </div>
                         </div>
                         <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                             <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                 अनंतनाग
                             </div>
                             <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                 दहशदवाद्यांचा केला खात्मा</div>
                             <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                 केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                             <div class="post-time-and-comment mt-1 mt-md-2">
                                 <span class="time mr-md-1">
                                     6 h ago
                                 </span><span class="time d-none d-md-inline">
                                     633 Comments

                                 </span>
                             </div>
                         </div>

                     </div>
                     <div
                         class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-4">

                         <div class="pl-2 pt-3 pt-md-0 p-md-0">
                             <div class="top-stories-art-img">

                                 <a href="/"><img
                                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/2mpsc_650_081614125408.jpg"
                                         alt="4dog_26.jpg" title="4dog_26.jpg">
                                 </a>

                             </div>
                         </div>
                         <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                             <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                 अनंतनाग
                             </div>
                             <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                 दहशदवाद्यांचा केला खात्मा</div>
                             <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                 केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                             <div class="post-time-and-comment mt-1 mt-md-2">
                                 <span class="time mr-md-1">
                                     6 h ago
                                 </span><span class="time d-none d-md-inline">
                                     633 Comments

                                 </span>
                             </div>
                         </div>

                     </div>
                     <div
                         class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-4">

                         <div class="pl-2 pt-3 pt-md-0 p-md-0">
                             <div class="top-stories-art-img">

                                 <a href="/"><img
                                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/0bank_20ok.JPG"
                                         alt="4dog_26.jpg" title="4dog_26.jpg">
                                 </a>

                             </div>
                         </div>
                         <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                             <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                 अनंतनाग
                             </div>
                             <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                 दहशदवाद्यांचा केला खात्मा</div>
                             <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                 केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                             <div class="post-time-and-comment mt-1 mt-md-2">
                                 <span class="time mr-md-1">
                                     6 h ago
                                 </span><span class="time d-none d-md-inline">
                                     633 Comments

                                 </span>
                             </div>
                         </div>

                     </div>
                     <div
                         class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-4">

                         <div class="pl-2 pt-3 pt-md-0 p-md-0">
                             <div class="top-stories-art-img">

                                 <a href="/"><img
                                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/32Mahavitaran_h_30_8.jpg"
                                         alt="4dog_26.jpg" title="4dog_26.jpg">
                                 </a>

                             </div>
                         </div>
                         <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                             <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                 अनंतनाग
                             </div>
                             <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                 दहशदवाद्यांचा केला खात्मा</div>
                             <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                 केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                             <div class="post-time-and-comment mt-1 mt-md-2">
                                 <span class="time mr-md-1">
                                     6 h ago
                                 </span><span class="time d-none d-md-inline">
                                     633 Comments

                                 </span>
                             </div>
                         </div>

                     </div>
                 </div>

             </div>
         </div>
         <!-- end creative lab -->
         <!-- ad -->
         <div class="ad-block-mobile my-3 d-md-none"></div>
         <!-- reader's favourite -->
         <div class="d-flex flex-column flex-md-row cl-section rf-section mt-md-3">

             <div class="more-top-stories pr-md-0 pt-2 pb-2 pb-md-1 pt-md-0 pl-md-0">
                 <div class="cl-bg">
                     <div class="rf-bg">
                         <center class="d-inline-block float-left mt-md-2">
                             <span class="ml-md-0 mr-1 d-md-block">Reader's</span>
                             <span class="d-md-block">Favourite</span></center>
                         <div class="rf-angular-backet d-md-none"><i class="fa fa-angle-right"></i></div>
                     </div>
                 </div>
             </div>
             <div class="d-flex flex-wrap rf-section-right">
                 <div
                     class="more-top-stories-articles rf-sub-section d-flex flex-wrap cb-articles col-12 col-md-4 pb-md-1 pr-md-0 pt-0 pb-0 pl-md-4">
                     <div class="rf-sub-section-title mr-title mt-md-2 mb-md-2">
                         <div class="d-md-none plus-sign"><i class="fa fa-minus"></i></div>
                         <div class="rf-title">
                             Most Read Articles</div>
                         <div class="d-md-none angle-sign"><i class="fa fa-angle-down"></i></div>
                     </div>
                     <div class="rf-section-news-container mr-new-container">
                         <div class="rf-blocks-article-one mb-2">
                             <div class="pl-2 pt-md-0 p-md-0 d-none d-md-block">
                                 <div class="top-stories-art-img">

                                     <a href="/"><img
                                             src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/0bus_accident_1_0.jpg"
                                             alt="4dog_26.jpg" title="4dog_26.jpg">
                                     </a>

                                 </div>
                             </div>
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1 mt-2">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-eye pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> views </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-eye pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> views </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-eye pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> views </spann>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
                 <div
                     class="more-top-stories-articles rf-sub-section d-flex flex-wrap cb-articles col-12 col-md-4 pb-md-1 pr-md-0 pt-0 pb-0 pl-md-4">
                     <div class="rf-sub-section-title mc-title mt-md-2 mb-md-2">
                         <div class="d-md-none plus-sign"><i class="fa fa-minus"></i></div>
                         <div class="rf-title">
                             Most commented Articles</div>
                         <div class="d-md-none angle-sign"><i class="fa fa-angle-down"></i></div>
                     </div>
                     <div class="rf-section-news-container mc-new-container">
                         <div class="rf-blocks-article-one mb-2">
                             <div class="pl-2 pt-md-0 p-md-0 d-none d-md-block">
                                 <div class="top-stories-art-img">

                                     <a href="/"><img
                                             src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/4b9fb2f64_4f36_4a71_ad25_e063d050bde5.jpg"
                                             alt="4dog_26.jpg" title="4dog_26.jpg">
                                     </a>

                                 </div>
                             </div>
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1 mt-2">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="pr-1"><img
                                             src="https://sankey-bucket.s3-ap-southeast-1.amazonaws.com/comments-icon.png"
                                             style="
    width: 11px;
"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> comments </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="pr-1"><img
                                             src="https://sankey-bucket.s3-ap-southeast-1.amazonaws.com/comments-icon.png"
                                             style="
    width: 11px;
"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> comments </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="pr-1"><img
                                             src="https://sankey-bucket.s3-ap-southeast-1.amazonaws.com/comments-icon.png"
                                             style="
    width: 11px;
"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> comments </spann>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
                 <div
                     class="more-top-stories-articles rf-sub-section d-flex flex-wrap cb-articles col-12 col-md-4 pb-md-1 pr-md-0 pt-0 pb-0 pl-md-4">
                     <div class="rf-sub-section-title ms-title mt-md-2 mb-md-2">
                         <div class="d-md-none plus-sign"><i class="fa fa-minus"></i></div>
                         <div class="rf-title">
                             Most Shared Articles</div>
                         <div class="d-md-none angle-sign"><i class="fa fa-angle-down"></i></div>
                     </div>
                     <div class="rf-section-news-container ms-new-container">
                         <div class="rf-blocks-article-one mb-2">
                             <div class="pl-2 pt-md-0 p-md-0 d-none d-md-block">
                                 <div class="top-stories-art-img">

                                     <a href="/"><img
                                             src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/000000006_4.jpg"
                                             alt="4dog_26.jpg" title="4dog_26.jpg">
                                     </a>

                                 </div>
                             </div>
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1 mt-2">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-share-square-o pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> shared </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-share-square-o pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> shared </spann>
                                 </div>
                             </div>
                         </div>
                         <div class="rf-blocks-article-others mb-2">
                             <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                 <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत चकमकीत
                                     जवानांनी चकमकीत चकमकीत </div>
                                 <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                     दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा केला
                                 </div>
                                 <div class="post-time-and-comment mt-2 pb-2">
                                     <span class="fa fa-share-square-o pr-1"></span>
                                     <span class="views">
                                         12,000
                                     </span>
                                     <spann> shared </spann>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>

         </div>
         <!-- end reader's favourite -->


         <!--- ad -->


         <div class="ad-block-top-desktop d-none d-md-flex d-sm-none mt-md-0" style="height: 100px;width:93%;"></div>

         <!---end ad--->

         <!-- start video-story section-->
         <!-- start video-story section-->
         <section class="d-flex flex-column align-items-center w-100 mt-2 my-md-2 pt-md-3 pb-md-2 video-story">

             <div class="section-title-mobile d-flex d-md-none justify-content-between m-0">
                 <span class="mx-3">Videos</span>
                 <i class="fa fa-angle-right mx-3"></i>
             </div>

             <div class="px-0 flex-column inner-section-width">

                 <span class="section-title-desktop">Videos</span>

                 <div class="d-flex align-items-start px-0 pb-2 py-md-2 video-box">

                     <div class="d-flex d-md-block flex-column main-v-story-container">

                         <div class="video-main-desktop mb-4 mb-md-0">
                             <img class="w-100 h-100"
                                 src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/smg_980news_story_section/public/news-story/cover-images/1baramatinagarparishad_1.jpg">
                             <div class="d-flex flex-column justify-content-end w-100 video-overlay">
                                 <div class="ml-4 mb-2 d-inline-block video-item-info main-video">
                                     <span class="news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                         केला</span>
                                     <span class="d-inline-block mr-2 v-time">1 d ago</span>
                                     <span class="d-inline-block mr-2 v-views">
                                         <i class="fa fa-eye pr-1"></i> 12,002 views
                                     </span>
                                     <span class="d-inline-block mr-2 v-views">
                                         <i class="fa fa-comment pr-1"></i> 6,383 comments
                                     </span>
                                 </div>
                             </div>
                             <div
                                 class="d-flex flex-column justify-content-center align-items-center w-100 video-overlay b-0">
                                 <img class="m-2 play-icon"
                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                             </div>
                         </div>

                         <div class="d-none my-2 py-1 d-md-flex social-icons">
                             <span class="s-icon mr-1" style="background-color: #3b5998;">
                                 <i class="fa fa-facebook fa-social-custom"></i>
                             </span>
                             <span class="s-icon mr-1" style="background-color: #00acee;">
                                 <i class="fa fa-twitter fa-social-custom"></i>
                             </span>
                             <span class="s-icon mr-1" style="background-color: #003300;">
                                 <i class="fa fa-linkedin fa-social-custom"></i>
                             </span>
                             <span class="s-icon mr-1" style="background-color: #060d13;">
                                 <img class="s-icon-img"
                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/email.svg">
                             </span>
                         </div>

                         <div class="d-flex py-3 px-1 px-md-0 py-md-0 my-md-2 justify-content-between video-item-card">
                             <div class="v-image">
                                 <img class="w-100 h-100"
                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/maxresdefault.jpg">
                                 <div class="d-flex align-items-end video-overlay">
                                     <img class="m-2 play-icon"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                                 </div>
                             </div>
                             <div class="ml-2 ml-md-4 d-inline-block video-item-info">
                                 <span class="upnext d-none d-md-block">Up Next</span>
                                 <span class="mb-1 news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                     केला</span>
                                 <span class="v-time mt-1 mb-0 mt-md-2 mb-md-1">1 d ago</span>
                                 <span class="v-views mr-md-2">
                                     <i class="fa fa-eye pr-1"></i> 12,002 views
                                 </span>
                                 <span class="v-views">
                                     <i class="fa fa-comment pr-1"></i> 6,383 comments
                                 </span>
                             </div>
                         </div>
                     </div>

                     <div class="d-flex flex-column other-v-story-container">
                         <div class="d-flex py-3 px-1 px-md-0 py-md-0 mb-md-3 justify-content-between video-item-card">
                             <div class="v-image">
                                 <img class="w-100 h-100"
                                     src="https://img.freepik.com/free-vector/successful-business-woman-vector-illustration_107173-4215.jpg?size=626&ext=jpg">
                                 <div
                                     class="d-flex align-items-end align-items-md-center justify-content-md-center video-overlay">
                                     <img class="m-2 d-md-none play-icon"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                                     <img class="m-2 d-none d-md-block play-icon-white"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play-white.svg">
                                 </div>
                             </div>
                             <div class="mt-0 mt-md-2 ml-2 ml-md-0 d-inline-block video-item-info">
                                 <span class="news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                     केला</span>
                                 <span class="v-time mt-1 mb-0 mt-md-1 mb-md-1">1 d ago</span>
                                 <span class="v-views">
                                     <i class="fa fa-eye pr-1"></i> 12,002 views
                                 </span>
                                 <span class="v-views">
                                     <i class="fa fa-comment pr-1"></i> 6,383 comments
                                 </span>
                             </div>
                         </div>
                         <div class="d-flex py-3 px-1 px-md-0 py-md-0 mb-md-3 justify-content-between video-item-card">
                             <div class="v-image">
                                 <img class="w-100 h-100"
                                     src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/2TIGER_2.jpg">
                                 <div
                                     class="d-flex align-items-end align-items-md-center justify-content-md-center video-overlay">
                                     <img class="m-2 d-md-none play-icon"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                                     <img class="m-2 d-none d-md-block play-icon-white"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play-white.svg">
                                 </div>
                             </div>
                             <div class="mt-0 mt-md-2 ml-2 ml-md-0 d-inline-block video-item-info">
                                 <span class="news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                     केला</span>
                                 <span class="v-time mt-1 mb-0 mt-md-1 mb-md-1">1 d ago</span>
                                 <span class="v-views">
                                     <i class="fa fa-eye pr-1"></i> 12,003 views
                                 </span>
                                 <span class="v-views">
                                     <i class="fa fa-comment pr-1"></i> 6,383 comments
                                 </span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </section>
         <div class="ad-block-mobile mb-3 mt-2"></div>
         <!-- end video-story section -->

         <!-- start categories section -->
         <section class="inner-section-width categories d-flex flex-column align-items-center my-md-2">
             <span class="align-self-start section-title-desktop">Categories</span>

             <div class="row adjust-categories">

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">POLITICS</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">Politics</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/0Car_30.jpg"
                         alt="Card image cap">

                     <div id="category1" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा
                         </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा
                         </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा
                         </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा
                         </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">WORLD</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">World</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/0Corona_20V_8.jpg"
                         alt="Card image cap">

                     <div id="category2" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा </div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">NATIONAL</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">National</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/4personal_finance.jpg"
                         alt="Card image cap">

                     <div id="category3" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">POST EVERYTHING</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">PostEverything</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/1hapus_mango_2.jpg"
                         alt="Card image cap">

                     <div id="category4" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

             </div>

             <div class="ad-block-top-desktop"></div>

             <div class="row adjust-categories">

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">POLITICS</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">Politics</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/4personal_finance.jpg"
                         alt="Card image cap">

                     <div id="category5" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">WORLD</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">World</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/3hyundai_i20.jpg"
                         alt="Card image cap">

                     <div id="category6" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">NATIONAL</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">National</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/image-story/gallery-images/11_322.jpg"
                         alt="Card image cap">

                     <div id="category7" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

                 <div class="section-title-mobile d-flex d-md-none justify-content-between">
                     <span class="mx-3">POST EVERYTHING</span>
                     <i class="fa fa-angle-right mx-3"></i>
                 </div>

                 <div
                     class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                     <div class="d-none d-md-block category-title pl-2 mb-2">PostEverything</div>

                     <img class="card-img-top"
                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/smg_980large_m/public/news-story/cover-images/2Vegitables_0.gif"
                         alt="Card image cap">

                     <div id="category8" class="carousel slide d-md-none" data-ride="carousel">
                         <ol class="carousel-indicators c-indicator">
                             <li data-slide-to="0" class="dot-indicators active"></li>
                             <li data-slide-to="1" class="dot-indicators"></li>
                             <li data-slide-to="2" class="dot-indicators"></li>
                             <li data-slide-to="3" class="dot-indicators"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                         alt="First slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Second slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                         alt="Third slide">
                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="d-flex align-items-center carousel-image">
                                     <img class="d-block w-100 h-100"
                                         src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                         alt="Fourth slide">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                     <div class="news-content-div py-2 py-md-3">
                         <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या दहशतवाद्यांचा केला
                             खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</div>
                         <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा केला
                         </div>
                         <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                     </div>
                 </div>
                 <div class="ad-block-mobile mt-0 mb-3"></div>

             </div>

         </section>
         <!-- end categories section -->

         <!-- start entertaiment section -->
         <section class="w-100 my-md-2 entertainment">
             <div class="section-title-mobile d-flex d-md-none justify-content-between">
                 <span class="mx-3">ENTERTAINMENT</span>
                 <i class="fa fa-angle-right mx-3"></i>
             </div>

             <div class="inner-container px-0">
                 <span class="section-title-desktop">Entertainment</span>
                 <div class="row mx-0 mb-md-3">
                     <div class="px-0 pr-md-2 pt-md-1 pb-md-2 col-md-8 entertainment-container">
                         <div id="entertainment-carousel" class="carousel slide" data-ride="carousel">

                             <ol class="carousel-indicators c-indicator">
                                 <li data-slide-to="0" class="dot-indicators active"></li>
                                 <li data-slide-to="1" class="dot-indicators"></li>
                                 <li data-slide-to="2" class="dot-indicators"></li>
                                 <li data-slide-to="3" class="dot-indicators"></li>
                                 <li data-slide-to="4" class="dot-indicators"></li>
                                 <li data-slide-to="5" class="dot-indicators"></li>
                             </ol>

                             <ol class="carousel-indicators v-story-indicators">
                                 <li data-slide-to="0" class="triangle active"></li>
                                 <li data-slide-to="1" class="triangle"></li>
                                 <li data-slide-to="2" class="triangle"></li>
                             </ol>

                             <div class="carousel-inner">
                                 <div class="carousel-item active">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                             alt="First slide">
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                             alt="Second slide">
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                             alt="Third slide">
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                             alt="Fourth slide">
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                             alt="Fourth slide">
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <div class="d-flex align-items-center carousel-image">
                                         <img class="d-block w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                             alt="Fourth slide">
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="entertainment-list-box">
                             <ul class="list-unstyled">
                                 <li class="entertainment-list d-md-flex align-items-center">
                                     <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                     <div class="news-description">
                                         <span class="v-time mb-2">4 h ago</span>
                                         <!-- <span class="v-time">1234 comments</span> -->
                                     </div>
                                 </li>
                                 <li class="entertainment-list d-md-flex align-items-center">
                                     <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                     <div class="news-description">
                                         <span class="v-time mb-2">4 h ago</span>
                                         <!-- <span class="v-time">1234 comments</span> -->
                                     </div>
                                 </li>
                                 <li class="entertainment-list d-md-flex align-items-center">
                                     <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                     <div class="news-description">
                                         <span class="v-time mb-2">4 h ago</span>
                                         <!-- <span class="v-time">1234 comments</span> -->
                                     </div>
                                 </li>
                                 <li class="entertainment-list d-md-none align-items-center">
                                     <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                         हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                     <div class="news-description">
                                         <span class="v-time mb-2">4 h ago</span>
                                         <!-- <span class="v-time">1234 comments</span> -->
                                     </div>
                                 </li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-md-4 py-2 pr-0 pt-md-1 pb-md-2 ad-block-desktop">
                         <div class="ad-block mr-0"></div>
                     </div>
                 </div>
                 <div class="row mx-0">
                     <div class="col-md-4 py-2 pl-0 ad-block-desktop">
                         <div class="ad-block ml-0"></div>
                     </div>
                     <div class="col-md-4 py-2 ad-block-desktop">
                         <div class="ad-block"></div>
                     </div>
                     <div class="col-md-4 py-2 pr-0 ad-block-desktop">
                         <div class="ad-block mr-0"></div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- end entertaiment section -->

         <div class="ad-block-mobile mb-2"></div>

         <!-- start photo section -->
         <div class="photography-section pb-md-2">
             <div class="section-title-mobile d-flex d-md-none justify-content-between">
                 <span class="mx-3">Photography</span>
                 <i class="fa fa-angle-right mx-3"></i>
             </div>
             <div class="inner-container photography mobile-full-width d-flex align-items-end">
                 <div class="section-title-desktop align-self-start m-md-3" style="color:white">Photography
                 </div>
                 <div class="spacing-left-overlap my-1 my-md-0 my-lg-1"></div>

                 <div class="right-overlap p-3 p-md-3 pr-md-5" style="background-color: white;">
                     <div class="news-section-title mb-md-2">साधारण</div>
                     <div class="news-title mb-2 mb-md-1">पंतप्रधान मोदींना आवडतात फक्त मराठी दिग्गजांची ही 2
                         गाणी</div>
                     <div class="col-lg-1 col-md-0 my-1 my-md-0 my-lg-1 section-type-1-image mb-md-3 d-none"
                         style="background-image:url(https://composeclick.com/wp-content/uploads/2018/05/nature-1-1024x637.jpg)">
                     </div>
                     <div class="source-container mb-2 d-none">source : संतोषचं आयुष्य, टप्प्याटप्प्यानं वळणं
                         घेत घेत कुणीकडे गेलं हे त्याच्या सगळ्या हकीकतीवरून कळलं.संतोषचं आयुष्य,
                         टप्प्याटप्प्यानं</div>
                     <div class="news-description mt-3 mb-1 my-md-0">
                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये
                         चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                         हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन
                         दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा
                         केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                     </div>
                     <div class="news-footer d-block d-md-none mb-2 mb-md-2">6 h ago</div>
                 </div>
             </div>
         </div>
         <!-- End Photo section -->

         <!-- start publications section-->
         <section class="publications mt-2 w-100">
             <div class="section-title-mobile d-flex d-md-none justify-content-between">
                 <span class="mx-3">Our Publications</span>
                 <i class="fa fa-angle-right mx-3"></i>
             </div>
             <div class="inner-container d-flex">
                 <div class="our-services-div mt-md-3">
                     <span class="section-title-desktop">Our Publications</span>
                 </div>
                 <div class="px-0 px-md-4 pt-md-3 pb-md-3 d-flex justify-content-center justify-content-md-between"
                     style="flex:1;">
                     <div class="book-div d-flex flex-column align-items-center">
                         <div class="book-cover">
                             <img src="http://sakalpublications.com/img/p/4/5/4/9/4549-home_default.jpg" alt=""
                                 class="w-100 h-100">
                         </div>
                         <span class="book-name mt-md-1">Book</span>
                     </div>
                     <div class="book-div d-none d-md-flex flex-column align-items-center">
                         <div class="book-cover">
                             <img src="http://sakalpublications.com/img/p/4/5/5/7/4557-home_default.jpg" alt=""
                                 class="w-100 h-100">
                         </div>
                         <span class="book-name mt-md-1">Book</span>
                     </div>
                     <div class="book-div d-none d-md-flex flex-column align-items-center">
                         <div class="book-cover">
                             <img src="http://sakalpublications.com/img/p/4/5/6/5/4565-home_default.jpg" alt=""
                                 class="w-100 h-100">
                         </div>
                         <span class="book-name mt-md-1">Book</span>
                     </div>
                     <div class="book-div d-none d-md-flex flex-column align-items-center">
                         <div class="book-cover">
                             <img src="http://sakalpublications.com/img/p/4/5/6/7/4567-home_default.jpg" alt=""
                                 class="w-100 h-100">
                         </div>
                         <span class="book-name mt-md-1">Book</span>
                     </div>
                 </div>
             </div>
         </section>
         <!-- end publications section -->

         <!-- start footer-first section -->
         <section class="w-100 footer-first"
             style="height: 115px; display: flex; align-items: center; justify-content: center;">
             <div class="px-0 px-md-4 pt-md-3 pb-md-3" style="background-color: #0060aa;">
                 <div style="font-size: 36px; margin-left: auto; margin-right:  auto; color: #fff; text-align: center;">
                     <img src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/bottomLogo.png"
                         style="width: 175px;">
                 </div>
             </div>
         </section>
         <!-- End footer-first section -->

         <!-- start footer-top section-->
         <section class="inner-section-width footer-top d-flex">
             <div class="our-services-div mt-md-4" style="width:15%">
                 <span class="section-title-desktop">Our Services</span>
             </div>
             <div class="px-0 px-md-4 pt-md-3 pb-md-3 icon-container w-100">
                 <div class="row mx-0">
                     <div id="menu-1"
                         class="d-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                         <ul class="m-0 p-0">
                             <li>
                                 <i class="fa fa-envelope" aria-hidden="true"></i>
                                 <span>Newsletter</span>
                             </li>
                             <li>
                                 <i class="fa fa-phone" aria-hidden="true"></i>
                                 <span>SAAM TV</span>
                             </li>
                             <li>
                                 <i class="fa fa-pencil" aria-hidden="true"></i>
                                 <span>SAKAL TIMES</span>
                             </li>
                             <li>
                                 <i class="fa fa-book" aria-hidden="true"></i>
                                 <span>SARKARNAMA</span>
                             </li>
                             <li>
                                 <i class="fa fa-square" aria-hidden="true"></i>
                                 <span>YINBUZZ</span>
                             </li>
                         </ul>
                     </div>
                     <div id="menu-2"
                         class="d-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                         <ul class="m-0 p-0">
                             <li>
                                 <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                 <span>SAKAL Printer</span>
                             </li>
                             <li>
                                 <i class="fa fa-certificate" aria-hidden="true"></i>
                                 <span>Subscribe</span>
                             </li>
                             <li>
                                 <i class="fa fa-bank" aria-hidden="true"></i>
                                 <span>Advertise with us</span>
                             </li>
                             <li>
                                 <i class="fa fa-headphones" aria-hidden="true"></i>
                                 <span>Newsletter</span>
                             </li>
                             <li>
                                 <i class="fa fa-cubes" aria-hidden="true"></i>
                                 <span>Contact us</span>
                             </li>
                         </ul>
                     </div>
                     <div id="menu-3"
                         class="d-none d-md-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                         <ul class="m-0 p-0">
                             <li>
                                 <i class="fa fa-envelope" aria-hidden="true"></i>
                                 <span>Newsletter</span>
                             </li>
                             <li>
                                 <i class="fa fa-phone" aria-hidden="true"></i>
                                 <span>SAAM TV</span>
                             </li>
                             <li>
                                 <i class="fa fa-pencil" aria-hidden="true"></i>
                                 <span>SAKAL TIMES</span>
                             </li>
                             <li>
                                 <i class="fa fa-book" aria-hidden="true"></i>
                                 <span>SARKARNAMA</span>
                             </li>
                             <li>
                                 <i class="fa fa-square" aria-hidden="true"></i>
                                 <span>YINBUZZ</span>
                             </li>
                         </ul>
                     </div>
                     <div id="menu-4"
                         class="d-none d-md-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                         <ul class="m-0 p-0">
                             <li>
                                 <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                 <span>SAKAL Printer</span>
                             </li>
                             <li>
                                 <i class="fa fa-certificate" aria-hidden="true"></i>
                                 <span>Subscribe</span>
                             </li>
                             <li>
                                 <i class="fa fa-bank" aria-hidden="true"></i>
                                 <span>Advertise with us</span>
                             </li>
                             <li>
                                 <i class="fa fa-headphones" aria-hidden="true"></i>
                                 <span>Newsletter</span>
                             </li>
                             <li>
                                 <i class="fa fa-cubes" aria-hidden="true"></i>
                                 <span>Contact us</span>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </section>
         <!-- end footer-top section -->

         <!-- start footer-bottom section -->
         <section class="w-100 pt-md-0 pb-md-4 footer-bottom d-none">
             <div class="d-flex flex-column align-items-center inner-container">
                 <div class="d-none d-md-block footer-logo-div"></div>

                 <div class="d-none d-md-block px-5 text-center footer-breadcrumbs-container">
                     <span>Start</span>
                     <span class="mx-2">&gt;</span>
                     <span>Digital</span>
                     <span class="mx-2">&gt;</span>
                     <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span>
                 </div>

                 <div class="grey-line"></div>
                 <div class="mt-md-4 py-2 py-md-0 footer-links-div">
                     <ul class="m-0 p-0 text-center">
                         <li class="mr-1 mx-md-2 d-inline-block">SUBSCRIPTION</li>
                         <li class="mr-1 mx-md-2 d-inline-block">PUBLISHING COMPANY</li>
                         <li class="mr-1 mx-md-2 d-inline-block">ADVERTISEMENT</li>
                         <li class="mr-1 mx-md-2 d-inline-block">MEDIA</li>
                         <li class="mr-1 mx-md-2 d-inline-block">PRESS</li>
                         <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                         <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                         <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                         <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                     </ul>
                 </div>
                 <div class="grey-line"></div>
             </div>
         </section>
         <!-- end footer-bottom section -->


         <!-- start copyright section -->
         <section class="w-100 d-flex copyright">
             <div class="d-flex flex-column inner-container pt-3 pt-md-3 pb-4 copy-pad">
                 <div class="d-none mb-4 mb-md-2 justify-content-center">
                     <div class="p-1 py-md-1 px-md-2 go-top-box d-md-none">
                         <!-- <span class="d-block">^</span> -->
                         <span id="go-top-btn" class="d-flex flex-column align-items-center go-top-text">
                             <span class="mb-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="10" height="10"
                                     viewBox="0 0 24 24" style=" fill:#000000;">
                                     <path
                                         d="M 12.005859 3.765625 L 3.0507812 12.535156 L 4.4492188 13.964844 L 11.994141 6.5761719 L 19.544922 14.083984 L 20.955078 12.666016 L 12.005859 3.765625 z M 11.998047 9.4023438 L 3.0351562 18.550781 L 4.4648438 19.949219 L 12.001953 12.255859 L 19.537109 19.904297 L 20.962891 18.501953 L 11.998047 9.4023438 z">
                                     </path>
                                 </svg>
                             </span>
                             <!-- <i class="fa fa-sort-asc" aria-hidden="true"></i>		 -->
                             <span class="my-1">Go to Top</span>
                         </span>
                     </div>
                 </div>
                 <div
                     class="d-none flex-column align-items-center d-md-none justify-content-center sakal-logo-footer-box">
                     <div class="my-1 grey-line"></div>
                     <div class="sakal-logo-bottom-footer"></div>
                     <div class="my-1 grey-line"></div>
                 </div>
                 <div
                     class="d-none px-2 mt-4 mb-2 mt-md-2 justify-content-around justify-content-md-center social-icons-container">
                     <div class="rounded-circle social-icon">
                         <i class="fa fa-twitter fa-social-custom"></i>
                     </div>
                     <div class="rounded-circle social-icon">
                         <i class="fa fa-linkedin fa-social-custom"></i>
                     </div>
                     <div class="rounded-circle social-icon">
                         <i class="fa fa-facebook fa-social-custom"></i>
                     </div>
                     <div class="rounded-circle social-icon">
                         <!-- <img class="social-icon-img" src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/email.svg"> -->
                         <i class="fa fa-envelope fa-social-custom"></i>
                     </div>
                     <div class="rounded-circle social-icon">
                         <img class="social-icon-img"
                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/share.svg">
                         <!-- <i class="fa fa-share fa-social-custom"></i> -->
                     </div>
                     <div class="rounded-circle social-icon">
                         <img class="social-icon-img"
                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/youtube.svg">
                         <!-- <i class="fa fa-youtube fa-social-custom"></i> -->
                     </div>
                 </div>
                 <div class="mt-md-5 mb-md-4 text-center news-description copyright-text">
                     Our History | Contact us | Advertise | Press | Terms and Conditions | Media Kit | Privacy Policy
                 </div>
                 <div class="mt-md-1 mb-md-2 text-center news-description copyright-text">
                     &copy; 2000-2020 Sakal Media Group
                 </div>
             </div>
         </section>
         <!-- end copyright section -->

         <!-- end main-container -->
     </div>
 </div>


 <?php
    } else {
        ?>

 <link rel="stylesheet" type="text/css" href="sites/esakal/themes/smg980/css/marvelad9993.css">

 <!-- start marvel ad changes -->
 <div class="full-fixed-wrapper">
     <div class="adspace">
         <img class="ad-image"
             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/marvel-ad.jpg">
     </div>

     <div class="second-fixed-wrapper">
         <div class="top-gap-page-wrapper sticky-nav-helper"></div>
         <div class="fixed-top-gap other-sticky"></div>

         <div class="home-page-wrapper">

             <div id="mobile-hamburger" class="d-flex justify-content-center transparent-hamburger">
                 <div class="d-block main-container">
                     <div class="mobile-side-nav p-2">
                         <div id="close-side-nav-btn" class="close-side-nav">
                             <div class="hamburger-logo"></div>
                             <div class="x-style">X</div>
                         </div>
                         <div class="side-nav-item px-2"></div>
                         <div class="side-nav-content"><a href="/tajya-batmya/marathi-news" target="_blank">ताज्या </a>
                         </div>
                         <div class="side-nav-content"><a href="/pune-news" target="_blank">पुणे </a></div>
                         <div class="side-nav-content"><a href="/mumbai-news" target="_blank">मुंबई </a></div>
                         <div class="side-nav-content"><a href="/desh" target="_blank">देश </a></div>
                         <div class="side-nav-content"><a href="" target="_blank">लाईव्ह टीव्ही </a></div>
                         <div class="side-nav-content"><a href="/global" target="_blank">ग्लोबल </a></div>
                         <div class="side-nav-content"><a href="/coronavirus" target="_blank">कोरोना </a></div>
                         <div class="side-nav-content"><a href="/krida" target="_blank">क्रीडा </a></div>
                     </div>
                 </div>
             </div>
             <div class="mobile-global-nav">
                 <div id="mobile-side-menu-btn" class="mobile-side-menu"><i class="fa fa-2x fa-bars"></i></div>
                 <div class="mobile-logo d-flex justify-content-center align-items-end">
                     <div class="tagline">उदय भविष्यपत्राचा</div>
                 </div>
                 <div class="mobile-user-login "><i class="fa fa-2x fa-user"></i></div>
             </div>

             <div class="mobile-nav-wrapper flex-column align-items-center justify-content-center">
                 <nav class="w-100 h-100 nav mobile-nav justify-content-around align-items-center">
                     <div class="mobile-nav-link active"><a href="/mumbai-news" target="_blank">मुंबई</a></div>
                     <div class="mobile-nav-link active"><a href="/tajya-batmya/marathi-news" target="_blank">ताज्या
                         </a></div>
                     <div class="mobile-nav-link active"><a href="/mukhya-news" target="_blank">मुख्य</a></div>
                     <div class="mobile-nav-link active"><a href="/desh" target="_blank">देश</a></div>
                     <div class="mobile-nav-link active"><a href="/global" target="_blank">जग </a></div>
                     <div class="mobile-nav-link active"><a href="/krida" target="_blank">क्रीडा </a></div>
                     <div class="mobile-nav-link active"><a href="/pune-news" target="_blank">पुणे</a></div>
                     <div class="mobile-nav-link active"><a href="/kokan-news" target="_blank">कोकण</a></div>
                 </nav>
             </div>

             <div class="global-nav-wrapper global-nav-space">
                 <div class="global-nav d-flex align-items-center">

                     <nav class="nav">
                         <div id="desktop-side-menu-btn" class="nav-link active" href="#">
                             <i class="fa fa-bars " data-toggle="dropdown" aria-haspopup="true"
                                 aria-expanded="false"></i>
                             <div class="dropdown-menu dropdown-menu-bottom" x-placement="bottom-start"
                                 style="position: absolute; transform: translate3d(0px, 1760px, 0px); top: 0px; left: 0px; will-change: transform;"
                                 x-out-of-boundaries="">
                                 <a class="dropdown-item" href="#">Action</a>
                                 <a class="dropdown-item" href="#">Another action</a>
                                 <a class="dropdown-item" href="#">Something else here</a>
                                 <a class="dropdown-item" href="#">Something else here</a>
                                 <a class="dropdown-item" href="#">Something else here</a>
                                 <a class="dropdown-item" href="#">Something else here</a>
                                 <a class="dropdown-item" href="#">Something else here</a>
                                 <a class="dropdown-item" href="#">Something else here</a>
                             </div>
                         </div>
                         <div class="nav-link active"><a href="/manoranjan" target="_blank">S+</a></div>
                         <div class="nav-link active"><a href="/manoranjan" target="_blank">मनोरंजन </a></div>
                         <div class="nav-link active"><a href="/tajya-batmya/marathi-news" target="_blank">ताज्या </a>
                         </div>
                         <div class="nav-link active"><a href="/mukhya-news" target="_blank">मुख्य </a></div>
                         <div class="nav-link active"><a href="/desh" target="_blank">देश </a></div>
                         <div class="nav-link active"><a href="/global" target="_blank">जग </a> </div>
                         <div class="nav-link active"><a href="/krida" target="_blank">क्रीडा </a></div>
                         <div class="nav-link active"><a href="/pune-news" target="_blank">पुणे </a></div>
                         <div class="nav-link active"><a href="/mumbai-news" target="_blank">मुंबई </a></div>
                         <div class="nav-link active"><a href="/kokan-news" target="_blank">कोकण </a></div>
                     </nav>
                 </div>
                 <div class="global-nav-right-div">
                     <div class="user-login d-flex justify-content-end align-items-center ml-auto">
                         <div class="voice-search pr-md-3">
                             <span class="icon glyphicon fa fa-microphone" role="application" aria-hidden="true"
                                 id="edit-submit-search-view" data-toggle="" aria-haspopup="true"
                                 aria-expanded="true"></span>
                         </div>
                         <div class="siteSearch pr-md-3">
                             <span class="icon glyphicon glyphicon-search pull-right cursor-pointer" role="application"
                                 aria-hidden="true" id="edit-submit-search-view" data-toggle="" aria-haspopup="true"
                                 aria-expanded="true">
                                 <i class="fa fa fa-search"></i>
                             </span>
                             <?php print $search_form; ?>
                         </div>
                         <i class="fa fa-user"></i>
                     </div>
                 </div>
             </div>

             <div id="main-container-id" class="main-container pt-2 pt-md-0">

                 <div class="header mb-2">
                     <div class="inner-container">
                         <div class="header-logo d-flex align-items-end justify-content-between py-1">
                             <div class="day-date font-weight-bold english-font">Tuesday, March 24, 2020</div>
                             <div class="day-date center-div">उदय भविष्यपत्राचा</div>
                             <div class="day-date font-weight-bold english-font">EPAPER</div>
                         </div>
                         <div class="header-nav pt-md-2">
                             <nav class="nav">
                                 <div class="nav-link active py-1 pl-0"><a href="/tajya-batmya/marathi-news"
                                         target="_blank">ताज्या </a></div>
                                 <div class="nav-link active py-1 pl-0"><a href="/mukhya-news" target="_blank">मुख्य</a>
                                 </div>
                                 <div class="nav-link active py-1 pl-0"><a href="/manoranjan"
                                         target="_blank">मनोरंजन</a></div>
                                 <div class="nav-link active py-1 pl-0"><a href="/maharashtra-news"
                                         target="_blank">महाराष्ट्र</a></div>
                                 <div class="nav-link active py-1 pl-0"><a href="/vidarbha-news/nagpur"
                                         target="_blank">नागपूर</a></div>
                                 <div class="nav-link active py-1 pl-0"><a href="/sampadakiya"
                                         target="_blank">संपादकीय</a></div>
                                 <div class="nav-link active py-1 pl-0"><a href="/news-topics/union-budget-updates"
                                         target="_blank">अर्थसंकल्प</a></div>
                                 <div class="nav-link active py-1 pl-0"><a href="/global" target="_blank">जग</a></div>
                             </nav>
                         </div>
                     </div>
                 </div>

                 <div class="inner-section-width ad-block-top-desktop mt-0" style="height: 200px;margin-bottom: 25px;">
                 </div>
                 <div class="ad-block-mobile mt-2" style="height: 50px;"></div>

                 <!-- start breaking-news-1 section -->
                 <section class="inner-section-width p-0 breaking-news my-2">

                     <!-- <div class="container inner-container p-0 d-flex"> -->

                     <div class="left-box d-block d-md-flex flex-column pr-2 row1-block1">

                         <div class="left-box-top w-100 d-flex align-items-end justify-content-center">

                             <div class="row m-0 w-100">

                                 <div class="my-1 my-md-0 my-lg-1 section-type-1-image d-none d-md-block"></div>

                                 <div class="n1 my-md-1 py-2 py-md-2 right-border-zero pt-md-3 pl-md-4"
                                     style="background-color: white;">
                                     <div class="news-section-title mb-md-2">साधारण</div>
                                     <div class="news-title mb-2 mb-md-1">पंतप्रधान मोदींना आवडतात फक्त मराठी दिग्गजांची
                                         ही 2 गाणी</div>
                                     <div class="col-lg-1 col-md-0 my-1 my-md-0 my-lg-1 section-type-1-image mb-md-3  d-md-none">
                                     </div>
                                     <div class="source-container mb-2 d-md-none">source : संतोषचं आयुष्य,
                                         टप्प्याटप्प्यानं वळणं घेत घेत कुणीकडे गेलं हे त्याच्या सगळ्या हकीकतीवरून
                                         कळलं.संतोषचं आयुष्य, टप्प्याटप्प्यानं</div>
                                     <div class="news-description mb-1 mb-md-0">
                                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                     </div>
                                     <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                                 </div>

                                 <div class="n2 py-2 my-md-1 py-md-2 pr-0 pt-md-3" style="background-color: white;">
                                     <div class="news-section-title mb-md-2">साधारण</div>
                                     <div class="news-title mb-2 mb-md-1">पंतप्रधान मोदींना आवडतात फक्त मराठी दिग्गजांची
                                         ही 2 गाणी</div>
                                     <div class="news-description mb-1 mb-md-0">
                                         मुंबई : मुंबई कृषी उत्पन्न बाजार समितीच्या वाशी येथील फळ बाजारात फळांच्या राजा
                                         हापूस आंबा दाखल झाला आहे. वातावरणाचा फटका बसल्याने यावर्षी हापूस आंब्याची
                                         बाजारातील आवक नेहमीच्या मानाने घटलेली आहे. त्यातच कोरोनाच्या प्रभावाने बाजारात
                                         आंब्याला आता उठावही
                                         नाही, निर्यातही कमी ठप्प असल्याने कोकणातील हापूस आंबा बागायतदार आणि
                                         व्यापाऱ्यांची चिंता वाढली आहे.
                                     </div>
                                     <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                                 </div>
                             </div>

                         </div>

                         <div class="left-box-bottom w-100 d-block d-md-flex flex-column align-items-center">

                             <div class="row m-0 h-md-50 w-100">

                                 <div class="nl py-2 my-md-1 py-md-2 pl-lg-0 right-border-1">

                                     <!-- <div class="d-block"> -->
                                     <div class="news-section-title mb-md-2">साधारण</div>
                                     <div class="news-title mb-2 mb-md-1">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन
                                         दहशतवाद्यांचा केला खात्मा</div>

                                     <div class="news-description mb-1 mb-md-0">
                                         मुंबई :महाराष्ट्रासह मुंबईत कोरोनाग्रस्तांचा आकडा वाढत चालला आहे. मुंबईत
                                         कोरोनाचे सर्वात जास्त रुग्ण आढळले आहेत. त्यामुळे खरबदारीचा उपाय म्हणून प्रशासन
                                         योग्य ती पावलं उचलत आहे. आशिया खंडातील सर्वात गजबजलेला आणि दाट लोकवस्तीचा भाग
                                         म्हणून ओळख असलेल्या धारावीमध्ये
                                         तब्बल ७ कोरोनाचे रुग्ण आढळले आहेत त्यामुळे प्रशासन अधिकच सतर्क झालं आहे..
                                     </div>
                                     <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                                 </div>

                                 <div class="nr my-md-1 py-2 py-md-2 pr-lg-0">
                                     <!-- <div class="d-block"> -->
                                     <div class="news-section-title mb-md-2">साधारण</div>
                                     <div class="news-title mb-2 mb-md-1">पती-पत्नी आणि ती ! अपूर्वानं 'या' कारणामुळं
                                         रोहित तिवारीची केली हत्या</div>


                                     <div class="news-description mb-1 mb-md-0 d-block d-lg-none">
                                         कोरोना व्हायरस सगळीकडे सध्या थैमान घालत आहे. त्यामुळे सर्व यंत्रणा डोळ्यात तेल
                                         घालून काम करीत आहे. आरोग्य यंत्रणेतील मनुष्यबळ कमी पडतंय वाटायला लागल्यावर
                                         सरकारने 'आशा' वर्कर्स यांना आरोग्य विभागाच्या मदतीसाठी बोलावले आहे. सरकार
                                         त्यांना कामांसाठी महिन्याला
                                         एक हजार वेतन देणार आहे. शासनाकडून बोलावणे आल्यानंतर आशा वर्कर्स 'कोरोना'शी
                                         धैर्याने लढत आहेत. खरं तर ग्रामीण व शहरी भागात आशा वर्कर्स गरोदर महिलांची
                                         तपासणी करणे, नवजात बालकांची काळजी घेणे, बालकांचे लसिकरण करणे,
                                         माता-बालमृत्यू दर कमी करणे, गरोदर महिलांना पोषक आहाराबाबत मार्गदर्शन करणे,
                                         किशोरवयीन मुलींना मार्गदर्शन करणे यासह टि.बी., एचआयव्ही, मलेरीया, डेंग्यू
                                         यासारख्या साथीच्या आजारांमध्ये लोकांचे आरोग्य सांभाळन्याचे काम
                                         करतात. आशा वर्कर्स 'कोरोना' संदर्भात आपलं कर्तव्य पार पडत असताना त्यांच्यावर
                                         हल्ले होत आहेत. काही जणींना तर यापेक्षा वाईट प्रसंगाला सामोरे जावे लागत आहे.
                                         त्यामुळे या आशा वर्कर्स कोरोनाच्या काळात कोणत्या परिस्थितीत
                                         काम करत आहेत याचा आढावा इ
                                     </div>
                                     <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                                 </div>


                                 <!-- ad-row1 -->
                                 <div class="ad-block-mobile my-3 inner-section-width d-md-none"></div>
                                 <!-- end-ad-row1 -->

                             </div>

                             <div class="row m-0 h-md-50 w-100">
                                 <div class="row3nl my-md-1 py-2 py-md-2 pl-lg-0 right-border-2">
                                     <!-- <div class="d-block"> -->
                                     <div class="news-section-title mb-md-2">साधारण</div>
                                     <div class="news-title mb-2 mb-md-1">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन
                                         दोन दोन दहशतवाद्यांचा केला खात्मा</div>

                                     <div class="news-description mb-1 mb-md-0">
                                         छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन १५०० के बाद से अभी तक इस
                                         उद्योग का मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन
                                         १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग
                                         का एक साधारण डमी
                                         पाठ है.सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन.
                                     </div>
                                     <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                                 </div>

                                 <div class="row3nr my-md-1 py-2 py-md-2 pr-lg-0">
                                     <!-- <div class="d-block"> -->
                                     <div class="news-section-title mb-md-2">साधारण</div>
                                     <div class="news-title mb-2 mb-md-1">पंतप्रधान मोदींना आवडतात फक्त मराठी दिग्गजांची
                                         ही 2 गाणी</div>

                                     <div class="news-description mb-1 mb-md-0">
                                         छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन १५०० के बाद से अभी तक इस
                                         उद्योग का मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.सन
                                         १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन. छपाई और अक्षर योजन उद्योग
                                         का एक साधारण डमी
                                         पाठ है.सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन.
                                     </div>
                                     <div class="news-footer d-block d-md-none mb-md-2">6 h ago</div>
                                 </div>
                             </div>

                         </div>

                     </div>
                     <div class="right-box d-none d-md-flex flex-column justify-content p-0">
                         <div class="mb-2 w-100 d-flex justify-content-center align-items-center" style="height: 8%;">
                         </div>
                         <div class="mb-2 w-100 video-title">Video</div>
                         <div class="right-box-sub w-100 d-flex justify-content-center align-items-center"
                             style="height: 23%;"><iframe width="100%" height="100%"
                                 src="https://www.youtube.com/embed/bbNFwiSY05g" frameborder="0"
                                 allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                 allowfullscreen></iframe></div>
                         <div class="right-box-sub w-100 e-paper" style="background-color: aqua; height: 18.5%;"></div>
                         <div class="right-box-sub w-100 d-flex justify-content-center align-items-center"
                             style="background-color: gray;height: 250px;width: 320px;">Advertisement-2(320 * 250)</div>
                     </div>
                     <!-- </div> -->
                 </section>
                 <!-- end breaking-news-1 section -->
                 <div class="inner-section-width ad-block-top-desktop d-md-flex d-sm-none" style="height: 100px;"></div>


                 <!-- start breaking-news-2 section -->
                 <section class="inner-section-width breaking-news-2 my-2 p-0 pb-md-1">
                     <div class="left-box row ml-0 pr-lg-2 ">
                         <div class="col-md-6 col-sm-12 pl-lg-0 mb-lg-2 my-1 mt-md-0">
                             <div class="card-img-top mb-2">
                                 <img class="w-100 h-100"
                                     src="https://www.faz.net/ppmedia/aktuell/technik-motor/3131404806/1.5896418/mmo-uebersichtsseite-aufmacher-retina/teaser-bild-fuer-f-a-z.jpg"
                                     alt="Card image cap">
                             </div>
                             <div class="mobile-overlap p-2 pl-3 p-md-0">
                                 <div class="news-section-title mb-2">साधारण</div>
                                 <div class="news-title mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद दहशतवादयांचा
                                     केला खातमा</div>
                             </div>
                             <div class="news-description mb-1">
                                 वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत मुलांना हा
                                 अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि त्यांच्यासाठी संपत्ती
                                 सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च न्यायालयाने व्यक्त केले व
                                 वडिलोपार्जित मालमत्तेपासून वंचित ठेवण्याविरोधात मुलाने केलेली याचिका फेटाळली.
                             </div>
                             <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                         </div>
                         <div class="col-md-6 col-sm-12 pr-lg-0 mb-lg-2 my-1 mt-md-0">
                             <div class="card-img-top mb-2">
                                 <img class="w-100 h-100"
                                     src="https://www.ccn.com/wp-content/uploads/2019/08/stock-market-bubble-ap-768x512.jpg"
                                     alt="Card image cap">
                             </div>
                             <div class="mobile-overlap p-2 pl-3 p-md-0">
                                 <div class="news-section-title mb-2">साधारण</div>
                                 <div class="news-title mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद दहशतवादयांचा
                                     केला खातमा</div>
                             </div>
                             <div class="news-description mb-1">
                                 कोरोना या विषाणूचा प्रादुर्भाव रोखण्यासाठी केंद्र व राज्य सरकारने जाहीर केलेला लॉकडाउन
                                 वाढण्याची शक्&zwj;यता आता दाट वाटू लागली आहे. या पार्श्&zwj;वभूमीवर महाराष्ट्र लोकसेवा
                                 आयोगाने मंगळवारी (ता. 7) महत्त्वाचा निर्णय जाहीर करीत राज्यसेवेची पूर्व परीक्षा
                                 व महाराष्ट्र राज्य दुय्यम सेवा अराजपत्रित गट-ब संयुक्&zwj;त पूर्व परीक्षा पुढे
                                 ढकलण्याचा निर्णय घेतला. मात्र, पुढे कधी परीक्षा होणार हे स्पष्ट केलेले नाही.
                             </div>
                             <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                         </div>
                     </div>

                     <div
                         class="right-box pl-md-0 d-none d-md-flex flex-column justify-content-start align-items-center">
                         <div class="advertisement-4 w-100 d-flex justify-content-center align-items-center"
                             style="background-color: gray; height: 250px;">
                             Advertisement-4 (320 * 250)
                         </div>
                         <div class="newsletter w-100 d-flex flex-column justify-content-around">
                             <div class="section-title-desktop mb-md-2">Newsletter</div>
                             <div class="input-group mb-1">
                                 <input type="email" class="form-control newsletter-input"
                                     placeholder="ENTER YOUR EMAIL ADDRESS" aria-label="Recipient's username"
                                     aria-describedby="basic-addon2">
                                 <div class="input-group-append">
                                     <button class="btn newsletter-button" type="button">GO</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- end breaking-news-2 section -->

                 <!-- start podcast section -->
                 <section class="podcast">
                     <div class="section-title-mobile d-flex d-md-none justify-content-between">
                         <span class="mx-3">Podcast</span>
                         <i class="fa fa-angle-right mx-3"></i>
                     </div>
                     <div class="inner-container d-block d-md-flex justify-content-between my-2 mt-md-4 mb-md-2">
                         <div class="our-services-div">
                             <div class="section-title-desktop">
                                 Podcast
                             </div>
                         </div>
                         <div class="right-full-div d-block d-md-flex flex-column">

                             <div class="horizontal-struct d-block d-md-flex justify-content-between pb-md-4">
                                 <div class="news-box px-0 col-md-4 col-sm-12 px-md-0 mb-4 mt-2 mb-md-2 mt-md-0">
                                     <div class="news-box-container"></div>
                                     <div class="card-img-top mb-2">
                                         <img class="w-100 h-100"
                                             src="https://techcrunch.com/wp-content/uploads/2019/02/podcast-mic-blue.png"
                                             alt="Card image cap">
                                     </div>
                                     <div class="news-section-title mb-1">साधारण</div>
                                     <div class="news-title mb-md-2">जवानांनी</div>
                                     <div class="news-description mb-1">
                                         वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत मुलांना
                                         हा
                                         अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान.
                                     </div>
                                     <div class="podcast-footer english-font mt-2 mt-md-3">
                                         <span>Apple Podcast | </span>
                                         <span>Google Podcast | </span>
                                         <span>Spotify | </span>
                                         <span>Sticher</span>
                                     </div>
                                 </div>
                                 <div class="news-box px-0 col-md-4 col-sm-12 px-md-0 mb-4 mt-2 mb-md-2 mt-md-0">
                                     <div class="news-box-container"></div>
                                     <div class="card-img-top mb-2">
                                         <img class="w-100 h-100"
                                             src="https://rachelcorbett.com.au/wp-content/uploads/2018/07/Neon-podcast-logo.jpg"
                                             alt="Card image cap">
                                     </div>
                                     <div class="news-section-title mb-1">साधारण</div>
                                     <div class="news-title mb-md-2">अनंतनागमधये</div>
                                     <div class="news-description mb-1">
                                         वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत मुलांना
                                         हा
                                         अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि त्यांच्यासाठी
                                         संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च न्यायालयाने व्यक्त
                                         केले व
                                         वडिलोपार्जित मालमत्तेपासून वंचित ठेवण्याविरोधात मुलाने केलेली याचिका फेटाळली.
                                     </div>
                                     <div class="podcast-footer english-font mt-2 mt-md-3">
                                         <span>Apple Podcast | </span>
                                         <span>Google Podcast | </span>
                                         <span>Spotify | </span>
                                         <span>Sticher</span>
                                     </div>
                                 </div>

                                 <div class="news-box px-0 col-md-4 col-sm-12 px-md-0 mb-2 mt-2 mb-md-2 mt-md-0">
                                     <div class="news-box-container"></div>
                                     <div class="card-img-top mb-2">
                                         <img class="w-100 h-100"
                                             src="https://blogs.nvidia.com/wp-content/uploads/2017/02/ai-podcast-social-tw-li-2048x1024.jpg"
                                             alt="Card image cap">
                                     </div>
                                     <div class="news-section-title mb-1">साधारण</div>
                                     <div class="news-title mb-md-2">दहशतवाद</div>
                                     <div class="news-description mb-1">
                                         वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत मुलांना
                                         हा
                                         अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि त्यांच्यासाठी
                                         संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च न्यायालयाने व्यक्त
                                         केले.
                                     </div>
                                     <div class="podcast-footer english-font mt-2 mt-md-3">
                                         <span>Apple Podcast | </span>
                                         <span>Google Podcast | </span>
                                         <span>Spotify | </span>
                                         <span>Sticher</span>
                                     </div>
                                 </div>
                             </div>

                             <div class="podcast-bar horizontal-struct d-flex justify-content-between align-items-end"
                                 style="height:70px; width:100%; background-color:#0060aa;">

                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- End podcast section -->

                 <!-- start premium section -->
                 <section class="premium">
                     <div class="section-title-mobile d-flex d-md-none justify-content-between">
                         <span class="mx-3">Premium</span>
                         <i class="fa fa-angle-right mx-3"></i>
                     </div>
                     <div class="inner-container mobile-full-width d-flex justify-content-between mt-md-4 mb-md-2">
                         <div class="our-services-div">
                             <div class="section-title-desktop">
                                 Premium
                             </div>
                         </div>
                         <div class="right-full-div d-block d-md-flex flex-column">
                             <div class="image-div horizontal-struct d-flex justify-content-between align-items-end">
                                 <div class="my-1 my-md-0 my-lg-1 d-md-block spacing-left-overlap"></div>
                                 <div class="right-overlap p-3 p-md-3 pr-md-5" style="background-color: white;">
                                     <div class="news-section-title mb-md-2">साधारण</div>
                                     <div class="news-title mb-2 mb-md-1" style="font-size: 25px;">पंतप्रधान मोदींना
                                         आवडतात फक्त मराठी दिग्गजांची ही 2 गाणी</div>
                                     <div class="col-lg-1 col-md-0 my-1 my-md-0 my-lg-1 section-type-1-image mb-md-3 d-none"
                                         style="background-image:url(https://theintercept.imgix.net/wp-uploads/sites/1/2020/04/GettyImages-1217449615-crop.jpg?auto=compress%2Cformat&q=90&fit=crop&w=1440&h=720);">
                                     </div>
                                     <div class="source-container mb-2 d-none">source : संतोषचं आयुष्य,
                                         टप्प्याटप्प्यानं वळणं घेत घेत कुणीकडे गेलं हे त्याच्या सगळ्या हकीकतीवरून
                                         कळलं.संतोषचं आयुष्य,टप्प्याटप्प्यानं</div>
                                     <div class="news-description mt-3 mb-1 my-md-0">
                                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                     </div>
                                     <div class="news-footer d-block d-md-none mb-2 mb-md-2">6 h ago</div>
                                 </div>
                             </div>

                             <div
                                 class="inner-container desktop-full-width horizontal-struct d-block d-md-flex justify-content-between">
                                 <div
                                     class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                                     <div class="d-flex d-md-block card-img-top mb-2">
                                         <img class="w-100 h-100"
                                             src="https://www.hindustantimes.com/rf/image_size_444x250/HT/p2/2020/05/19/Pictures/response-briefing-washington-coronavirus-president-trump-leads_1a12f216-99ae-11ea-b5cf-22f71a9413fe.jpg"
                                             alt="Card image cap">
                                     </div>
                                     <div class="news-box-container pl-3 pr-2 p-md-0">
                                         <div class="news-section-title mb-1">साधारण</div>
                                         <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                             दहशतवादयांचा केला खातमा
                                         </div>
                                         <div class="news-description d-none d-md-block mb-1">
                                             वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                             मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                             त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                             न्यायालयाने व्यक्त केले.
                                         </div>
                                         <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                                     </div>
                                 </div>
                                 <div
                                     class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                                     <div class="d-flex d-md-block card-img-top mb-2">
                                         <img class="w-100 h-100"
                                             src="https://images.pexels.com/photos/1083895/pexels-photo-1083895.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                             alt="Card image cap">
                                     </div>
                                     <div class="news-box-container pl-3 pr-2 p-md-0">
                                         <div class="news-section-title mb-1">साधारण</div>
                                         <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                             दहशतवादयांचा केला खातमा
                                         </div>
                                         <div class="news-description d-none d-md-block mb-1">
                                             वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                             मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                             त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                             न्यायालयाने व्यक्त केले व वडिलोपार्जित मालमत्तेपासून वंचित ठेवण्याविरोधात
                                             मुलाने केलेली याचिका फेटाळली.
                                         </div>
                                         <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                                     </div>
                                 </div>

                                 <div
                                     class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                                     <div class="d-flex d-md-block card-img-top mb-2">
                                         <img class="w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/machine.png"
                                             alt="Card image cap">
                                     </div>
                                     <div class="news-box-container pl-3 pr-2 p-md-0">
                                         <div class="news-section-title mb-1">साधारण</div>
                                         <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                             दहशतवादयांचा केला खातमा
                                         </div>
                                         <div class="news-description d-none d-md-block mb-1">
                                             वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                             मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                             त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                             न्यायालयाने व्यक्त केले.
                                         </div>
                                         <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- End premium section -->

                 <!-- Start Agriculture sections -->
                 <section class="agriculture">
                     <div class="section-title-mobile d-flex d-md-none justify-content-between">
                         <span class="mx-3">Agriculture</span>
                         <i class="fa fa-angle-right mx-3"></i>
                     </div>
                     <div class="inner-container d-flex mt-md-2 mb-md-2">
                         <div class="our-services-div">
                             <div class="section-title-desktop">
                                 Agriculture
                             </div>
                         </div>
                         <div class="horizontal-div d-block d-md-flex justify-content-between">
                             <div
                                 class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                                 <div class="d-flex d-md-block card-img-top mb-2">
                                     <img class="w-100 h-100"
                                         src="https://www.solvay.com/sites/g/files/srpend221/files/styles/header/https/media.solvay.com/medias/domain1446/media403/61160-8sbe5pbpfw.jpg"
                                         alt="Card image cap">
                                 </div>
                                 <div class="news-box-container pl-3 pr-2 p-md-0">
                                     <div class="news-section-title mb-1">साधारण</div>
                                     <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                         दहशतवादयांचा केला खातमा
                                     </div>
                                     <div class="news-description d-none d-md-block mb-1">
                                         वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                         मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                         त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                         न्यायालयाने व्यक्त केले.
                                     </div>
                                     <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                                 </div>
                             </div>
                             <div
                                 class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                                 <div class="d-flex d-md-block card-img-top mb-2">
                                     <img class="w-100 h-100"
                                         src="https://qrius.com/wp-content/uploads/2014/09/agriculture1.jpg"
                                         alt="Card image cap">
                                 </div>
                                 <div class="news-box-container pl-3 pr-2 p-md-0">
                                     <div class="news-section-title mb-1">साधारण</div>
                                     <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                         दहशतवादयांचा केला खातमा
                                     </div>
                                     <div class="news-description d-none d-md-block mb-1">
                                         वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                         मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                         त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                         न्यायालयाने व्यक्त केले व वडिलोपार्जित मालमत्तेपासून वंचित ठेवण्याविरोधात
                                         मुलाने केलेली याचिका फेटाळली.
                                     </div>
                                     <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                                 </div>
                             </div>

                             <div
                                 class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                                 <div class="d-flex d-md-block card-img-top mb-2">
                                     <img class="w-100 h-100"
                                         src="https://www.ozseals.com/wp-content/uploads/2017/10/agriculture.jpg"
                                         alt="Card image cap">
                                 </div>
                                 <div class="news-box-container pl-3 pr-2 p-md-0">
                                     <div class="news-section-title mb-1">साधारण</div>
                                     <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                         दहशतवादयांचा केला खातमा
                                     </div>
                                     <div class="news-description d-none d-md-block mb-1">
                                         वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                         मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                         त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                         न्यायालयाने व्यक्त केले.
                                     </div>
                                     <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- End Agriculture sections -->

                 <!-- Start Follow Us sections -->
                 <section class="follow-us w-100">
                     <div class="section-title-mobile d-flex d-md-none justify-content-between">
                         <span class="mx-3">Follow Us</span>
                         <i class="fa fa-angle-right mx-3"></i>
                     </div>
                     <div class="inner-container d-block d-md-flex my-2 mt-md-4 mb-md-2">
                         <div class="our-services-div">
                             <div class="section-title-desktop">
                                 Follow Us
                             </div>
                         </div>
                         <div class="horizontal-div d-flex justify-content-between">

                             <div class="follow-us-container d-flex flex-column align-items-center">
                                 <div class="follow-us-icons"
                                     style="background-image:url(https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/social/fb.png);">
                                 </div>
                                 <span class="social-text english-font">Facebook</span>
                             </div>
                             <div class="follow-us-container d-flex flex-column align-items-center">
                                 <div class="follow-us-icons"
                                     style="background-image:url(https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/social/insta.png);">
                                 </div>
                                 <span class="social-text english-font">Instagram</span>
                             </div>
                             <div class="follow-us-container d-flex flex-column align-items-center">
                                 <div class="follow-us-icons"
                                     style="background-image:url(https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/social/twitter.png);">
                                 </div>
                                 <span class="social-text english-font">Twitter</span>
                             </div>
                             <div class="follow-us-container d-flex flex-column align-items-center">
                                 <div class="follow-us-icons"
                                     style="background-image:url(https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/social/whatsapp.png);">
                                 </div>
                                 <span class="social-text english-font"><span>WhatsApp</span>
                                     <span class="d-none d-md-inline"> & Co.</span></span>
                             </div>
                             <div class="follow-us-container d-flex flex-column align-items-center">
                                 <div class="follow-us-icons"
                                     style="background-image:url(https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/social/linkdin.png);">
                                 </div>
                                 <span class="social-text english-font">Linkdin</span>
                             </div>
                             <div class="follow-us-container d-flex flex-column align-items-center">
                                 <div class="follow-us-icons"
                                     style="background-image:url(https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/social/xing.png);">
                                 </div>
                                 <span class="social-text english-font">Xing</span>
                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- End Follow Us sections -->

                 <!-- Start Travel sections -->
                 <section class="travel">
                     <div class="section-title-mobile d-flex d-md-none justify-content-between">
                         <span class="mx-3">Travel</span>
                         <i class="fa fa-angle-right mx-3"></i>
                     </div>
                     <div class="inner-container d-flex mt-md-4 mb-md-2">
                         <div class="our-services-div">
                             <div class="section-title-desktop">
                                 Travel
                             </div>
                         </div>
                         <div class="horizontal-div d-block d-md-flex justify-content-between">
                             <div
                                 class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                                 <div class="d-flex d-md-block card-img-top mb-2">
                                     <img class="w-100 h-100"
                                         src="https://specials-images.forbesimg.com/imageserve/1024724898/960x0.jpg"
                                         alt="Card image cap">
                                 </div>
                                 <div class="news-box-container pl-3 pr-2 p-md-0">
                                     <div class="news-section-title mb-1">साधारण</div>
                                     <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                         दहशतवादयांचा केला खातमा
                                     </div>
                                     <div class="news-description d-none d-md-block mb-1">
                                         वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                         मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                         त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                         न्यायालयाने व्यक्त केले.
                                     </div>
                                     <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                                 </div>
                             </div>
                             <div
                                 class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                                 <div class="d-flex d-md-block card-img-top mb-2">
                                     <img class="w-100 h-100"
                                         src="https://www.frommers.com/system/media_items/attachments/000/864/971/s980/Island_question_mark.jpg"
                                         alt="Card image cap">
                                 </div>
                                 <div class="news-box-container pl-3 pr-2 p-md-0">
                                     <div class="news-section-title mb-1">साधारण</div>
                                     <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                         दहशतवादयांचा केला खातमा
                                     </div>
                                     <div class="news-description d-none d-md-block mb-1">
                                         वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                         मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                         त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                         न्यायालयाने व्यक्त केले व वडिलोपार्जित मालमत्तेपासून वंचित ठेवण्याविरोधात
                                         मुलाने केलेली याचिका फेटाळली.
                                     </div>
                                     <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                                 </div>
                             </div>

                             <div
                                 class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                                 <div class="d-flex d-md-block card-img-top mb-2">
                                     <img class="w-100 h-100"
                                         src="https://img.etimg.com/thumb/msid-65975178,width-643,imgsize-201359,resizemode-4/travellinginagroup.jpg"
                                         alt="Card image cap">
                                 </div>
                                 <div class="news-box-container pl-3 pr-2 p-md-0">
                                     <div class="news-section-title mb-1">साधारण</div>
                                     <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                         दहशतवादयांचा केला खातमा
                                     </div>
                                     <div class="news-description d-none d-md-block mb-1">
                                         वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                         मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                         त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                         न्यायालयाने व्यक्त केले.
                                     </div>
                                     <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- End Travel sections -->

                 <!-- Start Real Estate sections -->
                 <section class="real-estate">
                     <div class="section-title-mobile d-flex d-md-none justify-content-between">
                         <span class="mx-3">Real Estate</span>
                         <i class="fa fa-angle-right mx-3"></i>
                     </div>
                     <div class="inner-container d-flex mt-md-4 mb-md-2">
                         <div class="our-services-div">
                             <div class="section-title-desktop">
                                 Real Estate
                             </div>
                         </div>
                         <div class="horizontal-div d-block d-md-flex justify-content-between">
                             <div
                                 class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                                 <div class="d-flex d-md-block card-img-top mb-2">
                                     <img class="w-100 h-100"
                                         src="https://blog.hubspot.com/hubfs/Sales_Blog/best-real-estate-websites.jpg"
                                         alt="Card image cap">
                                 </div>
                                 <div class="news-box-container pl-3 pr-2 p-md-0">
                                     <div class="news-section-title mb-1">साधारण</div>
                                     <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                         दहशतवादयांचा केला खातमा
                                     </div>
                                     <div class="news-description d-none d-md-block mb-1">
                                         वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                         मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                         त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                         न्यायालयाने व्यक्त केले.
                                     </div>
                                     <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                                 </div>
                             </div>
                             <div
                                 class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                                 <div class="d-flex d-md-block card-img-top mb-2">
                                     <img class="w-100 h-100"
                                         src="https://cdn.zeebiz.com/sites/default/files/styles/zeebiz_850x478/public/2019/10/21/103639-real-estate-investments-pixabay.jpeg"
                                         alt="Card image cap">
                                 </div>
                                 <div class="news-box-container pl-3 pr-2 p-md-0">
                                     <div class="news-section-title mb-1">साधारण</div>
                                     <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                         दहशतवादयांचा केला खातमा
                                     </div>
                                     <div class="news-description d-none d-md-block mb-1">
                                         वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                         मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                         त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                         न्यायालयाने व्यक्त केले व वडिलोपार्जित मालमत्तेपासून वंचित ठेवण्याविरोधात
                                         मुलाने केलेली याचिका फेटाळली.
                                     </div>
                                     <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                                 </div>
                             </div>

                             <div
                                 class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                                 <div class="d-flex d-md-block card-img-top mb-2">
                                     <img class="w-100 h-100"
                                         src="https://smedia2.intoday.in/aajtak/images/stories/012015/real_estate_-650_010915041949.jpg"
                                         alt="Card image cap">
                                 </div>
                                 <div class="news-box-container pl-3 pr-2 p-md-0">
                                     <div class="news-section-title mb-1">साधारण</div>
                                     <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                         दहशतवादयांचा केला खातमा
                                     </div>
                                     <div class="news-description d-none d-md-block mb-1">
                                         वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                         मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                         त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                         न्यायालयाने व्यक्त केले.
                                     </div>
                                     <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- End Real Estate sections -->

                 <!-- start Education section -->
                 <section class="education">
                     <div class="section-title-mobile d-flex d-md-none justify-content-between">
                         <span class="mx-3">Education</span>
                         <i class="fa fa-angle-right mx-3"></i>
                     </div>
                     <div class="inner-container mobile-full-width d-flex justify-content-between mt-md-4 mb-md-2">
                         <div class="our-services-div">
                             <div class="section-title-desktop">
                                 Education
                             </div>
                         </div>
                         <div class="right-full-div d-block d-md-flex flex-column">
                             <div class="image-div horizontal-struct d-flex justify-content-between align-items-end"
                                 style="background-image:url(https://images.squarespace-cdn.com/content/55cdbe83e4b0abb42a0efc90/1540799507602-BV94ZNHZPFITH79EHE3A/IAFOR_Journal_of_Education-1100x550.jpg);">
                                 <div class="my-1 my-md-0 my-lg-1 d-md-block spacing-left-overlap"></div>
                                 <div class="right-overlap p-3 p-md-3 pr-md-5" style="background-color: white;">
                                     <div class="news-section-title mb-md-2">साधारण</div>
                                     <div class="news-title mb-2 mb-md-1" style="font-size: 25px;">पंतप्रधान मोदींना
                                         आवडतात फक्त मराठी दिग्गजांची ही 2 गाणी</div>
                                     <div class="col-lg-1 col-md-0 my-1 my-md-0 my-lg-1 section-type-1-image mb-md-3 d-none"
                                         style="background-image:url(https://images.squarespace-cdn.com/content/55cdbe83e4b0abb42a0efc90/1540799507602-BV94ZNHZPFITH79EHE3A/IAFOR_Journal_of_Education-1100x550.jpg);">
                                     </div>
                                     <div class="source-container mb-2 d-none">source : संतोषचं आयुष्य,
                                         टप्प्याटप्प्यानं वळणं घेत घेत कुणीकडे गेलं हे त्याच्या सगळ्या हकीकतीवरून
                                         कळलं.संतोषचं आयुष्य,टप्प्याटप्प्यानं</div>
                                     <div class="news-description mt-3 mb-1 my-md-0">
                                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                         अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                                     </div>
                                     <div class="news-footer d-block d-md-none mb-2 mb-md-2">6 h ago</div>
                                 </div>
                             </div>

                             <div
                                 class="inner-container desktop-full-width horizontal-struct d-block d-md-flex justify-content-between">
                                 <div
                                     class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                                     <div class="d-flex d-md-block card-img-top mb-2">
                                         <img class="w-100 h-100"
                                             src="https://www.forbesindia.com/media/images/2017/Aug/img_98887_education.jpg"
                                             alt="Card image cap">
                                     </div>
                                     <div class="news-box-container pl-3 pr-2 p-md-0">
                                         <div class="news-section-title mb-1">साधारण</div>
                                         <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                             दहशतवादयांचा केला खातमा
                                         </div>
                                         <div class="news-description d-none d-md-block mb-1">
                                             वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                             मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                             त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                             न्यायालयाने व्यक्त केले.
                                         </div>
                                         <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                                     </div>
                                 </div>
                                 <div
                                     class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                                     <div class="d-flex d-md-block card-img-top mb-2">
                                         <img class="w-100 h-100"
                                             src="https://res.cloudinary.com/www-virgin-com/virgin-com-prod/sites/virgin.com/files/Articles/Getty/finland_education_getty_0.jpg"
                                             alt="Card image cap">
                                     </div>
                                     <div class="news-box-container pl-3 pr-2 p-md-0">
                                         <div class="news-section-title mb-1">साधारण</div>
                                         <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                             दहशतवादयांचा केला खातमा
                                         </div>
                                         <div class="news-description d-none d-md-block mb-1">
                                             वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                             मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                             त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                             न्यायालयाने व्यक्त केले व वडिलोपार्जित मालमत्तेपासून वंचित ठेवण्याविरोधात
                                             मुलाने केलेली याचिका फेटाळली.
                                         </div>
                                         <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                                     </div>
                                 </div>

                                 <div
                                     class="news-box d-flex d-md-block align-items-center px-0 col-md-4 col-sm-12 px-md-0 mb-lg-2 my-1 mt-md-0">
                                     <div class="d-flex d-md-block card-img-top mb-2">
                                         <img class="w-100 h-100"
                                             src="https://www.timeshighereducation.com/sites/default/files/styles/the_breaking_news_image_style/public/istock-499343530.jpg"
                                             alt="Card image cap">
                                     </div>
                                     <div class="news-box-container pl-3 pr-2 p-md-0">
                                         <div class="news-section-title mb-1">साधारण</div>
                                         <div class="news-title mb-1 mb-md-2">अनंतनागमधये चकमकीत जवानांनी दोन दहशतवाद
                                             दहशतवादयांचा केला खातमा
                                         </div>
                                         <div class="news-description d-none d-md-block mb-1">
                                             वडिलोपार्जित मालमत्तेवर पहिला अधिकार आई-वडिलांचा असतो. आई-वडिलांमार्फत
                                             मुलांना हा अधिकार मिळतो. त्यामुळे आई-वडिलांचा सन्मान, प्रतिष्ठा, आयुष्य आणि
                                             त्यांच्यासाठी संपत्ती सर्वाधिक महत्त्वाची आहे, असे स्पष्ट मत मुंबई उच्च
                                             न्यायालयाने व्यक्त केले.
                                         </div>
                                         <div class="news-footer mb-3 mb-md-1">6 h ago</div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- End Education section -->

                 <!-- more top Stories -->
                 <div class="d-flex flex-column flex-md-row mf-md-3 mt-md-2 section-top-stories mts-section">
                     <div class="more-top-stories pr-md-0 pt-2 pb-2 pt-md-0 more-top-stories-right-container">

                         <center class="d-md-block float-md-right"><span>More Top Stories</span></center>
                     </div>
                     <div class="mts-articles pr-md-0 pt-md-1">
                         <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">

                             <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pl-md-5 pr-md-5">
                                 <div class="top-stories-art-img">
                                     <a href="#"><img data-adaptive-image-breakpoint="1280"
                                             src="https://www.sltrib.com/resizer/mLRVbM95hdlLoDQjUj6c1RRFP_w=/1200x630/filters:quality(85)/arc-anglerfish-arc2-prod-sltrib.s3.amazonaws.com/public/ZNG7LL4U7FEIRNLOQL5C26M66M.jpg"
                                             alt="4dog_26.jpg" title="4dog_26.jpg" style="display: block;">
                                     </a>

                                 </div>
                             </div>
                             <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                                 <div class="d-inline-block d-md-block news-section-title mb-2">
                                     अनंतनाग
                                 </div>
                                 <div class="article-title mb-1 mb-md-2">
                                     अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये
                                     चकमकीत जवानांनी
                                 </div>
                                 <div class="article-description">

                                     अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये
                                     चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत
                                     जवानांनी अजिवलीच्या दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन
                                     दहशतवाद्यांचा
                                     केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                                 </div>
                                 <div class="post-time-and-comment mt-1 mt-md-2">
                                     <span class="time mr-md-1">
                                         6 h ago
                                     </span><span class="time d-none d-md-inline">
                                         633 Comments

                                     </span>
                                 </div>
                             </div>

                         </div>
                         <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">

                             <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pl-md-5 pr-md-5">
                                 <div class="top-stories-art-img">

                                     <a href="#"><img class="adaptive-image img-responsive"
                                             data-adaptive-image-breakpoint="1280"
                                             src="https://media.npr.org/assets/img/2018/11/27/ap_18325053082002_wide-54c4601d9682527bdc0f43a5f5596079dd2c24b1-s800-c85.jpg"
                                             width="205" height="115" alt="4dog_26.jpg" title="4dog_26.jpg"
                                             style="display: block;">
                                     </a>

                                 </div>
                             </div>
                             <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                                 <div class="d-inline-block d-md-block news-section-title mb-2">
                                     अनंतनाग
                                 </div>
                                 <div class="article-title mb-1 mb-md-2">
                                     अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये
                                     चकमकीत जवानांनी
                                 </div>
                                 <div class="article-description">

                                     अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये
                                     चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत
                                     जवानांनी अजिवलीच्या दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन
                                     दहशतवाद्यांचा
                                     केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                                 </div>
                                 <div class="post-time-and-comment mt-1 mt-md-2">
                                     <span class="time mr-md-1">
                                         6 h ago
                                     </span><span class="time d-none d-md-inline">
                                         633 Comments

                                     </span>
                                 </div>
                             </div>

                         </div>
                         <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">

                             <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pl-md-5 pr-md-5">
                                 <div class="top-stories-art-img">

                                     <a href="#"><img class="adaptive-image img-responsive"
                                             data-adaptive-image-breakpoint="1280"
                                             src="https://i.guim.co.uk/img/media/3b854be00205da69cc353f70d5e8f806a574a1b4/0_77_4000_2400/master/4000.jpg?width=300&quality=85&auto=format&fit=max&s=da6ea3439077622c641c0a4b91104f30"
                                             width="205" height="115" alt="4dog_26.jpg" title="4dog_26.jpg"
                                             style="display: block;">
                                     </a>

                                 </div>
                             </div>
                             <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                                 <div class="d-inline-block d-md-block news-section-title mb-2">
                                     अनंतनाग
                                 </div>
                                 <div class="article-title mb-1 mb-md-2">
                                     अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये
                                     चकमकीत जवानांनी
                                 </div>
                                 <div class="article-description">

                                     अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये
                                     चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत
                                     जवानांनी अजिवलीच्या दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन
                                     दहशतवाद्यांचा
                                     केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                                 </div>
                                 <div class="post-time-and-comment mt-1 mt-md-2">
                                     <span class="time mr-md-1">
                                         6 h ago
                                     </span><span class="time d-none d-md-inline">
                                         633 Comments

                                     </span>
                                 </div>
                             </div>

                         </div>
                         <div class="more-top-stories-articles d-flex flex-row-reverse flex-md-row pb-md-4">

                             <div class="col-5 pl-2 pt-4 pt-md-0 pr-0 pl-md-5 pr-md-5">
                                 <div class="top-stories-art-img">

                                     <a href="#"><img class="adaptive-image img-responsive"
                                             data-adaptive-image-breakpoint="1280"
                                             src="https://static.standard.co.uk/s3fs-public/thumbnails/image/2018/07/29/15/robertmugabe2907.jpg"
                                             width="205" height="115" alt="4dog_26.jpg" title="4dog_26.jpg"
                                             style="display: block;">
                                     </a>

                                 </div>
                             </div>
                             <div class="article-title-description col-7 p-0 pb-md-4 pr-md-2">
                                 <div class="d-inline-block d-md-block news-section-title mb-2">
                                     अनंतनाग
                                 </div>
                                 <div class="article-title mb-1 md-md-2">
                                     अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये
                                     चकमकीत जवानांनी
                                 </div>
                                 <div class="article-description">

                                     अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये
                                     चकमकीत जवानांनी हजिबुलच्या दोन दहशतवाद्यांनी केला खात्माअनंतनागमध्ये चकमकीत
                                     जवानांनी अजिवलीच्या दोन दहशतवाद्यांचा अनंतनागमधये चकमकीत जवानांनी हजिबुलच्या दोन
                                     दहशतवाद्यांचा
                                     केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हजिबुलच्या
                                 </div>
                                 <div class="post-time-and-comment mt-1 mt-md-2">
                                     <span class="time mr-md-1">
                                         6 h ago
                                     </span><span class="time d-none d-md-inline">
                                         633 Comments

                                     </span>
                                 </div>
                             </div>

                         </div>


                     </div>
                 </div>
                 <!-- end more top stories -->
                 <!-- ad -->
                 <div class="ad-block-mobile my-3 d-md-none"></div>
                 <!-- creative-lab -->
                 <div class="d-flex mt-md-4">
                     <div class="ctl-right-bar-dsk d-none d-md-block"></div>

                     <div class="d-flex flex-column flex-md-row cl-section mt-md-0">

                         <div class="more-top-stories pr-md-0 pt-1 pb-1 pb-md-0 pt-md-0 pl-md-0 cl-title-section">
                             <div class="cl-bg">
                                 <center class="d-inline-block float-left mt-md-3">
                                     <span class="mr-3">Paid content</span><span class="d-none d-md-inline">About</span>
                                     <span class="d-block d-md-inline-block c-innovatn-m-top">Creative innovation</span>
                                 </center>
                                 <div class="ca-sak-lab">
                                     <div class="title d-none d-md-block">Sakal Labs</div>
                                     <div class="mobile title mr-2 d-md-none">Sakal Brand Studio</div>
                                     <div class="angular-bracket d-md-none"><i class="fa fa-angle-right"></i></div>
                                 </div>
                             </div>
                         </div>
                         <div class="d-flex flex-wrap cl-right-section">
                             <div
                                 class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-4">

                                 <div class="pl-2 pt-3 pt-md-0 p-md-0">
                                     <div class="top-stories-art-img">

                                         <a href="/"><img
                                                 src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/4aag_475.jpg"
                                                 alt="4dog_26.jpg" title="4dog_26.jpg">
                                         </a>

                                     </div>
                                 </div>
                                 <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                                     <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                         अनंतनाग
                                     </div>
                                     <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                         दहशदवाद्यांचा केला खात्मा</div>
                                     <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                         दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                                     <div class="post-time-and-comment mt-1 mt-md-2">
                                         <span class="time mr-md-1">
                                             6 h ago
                                         </span><span class="time d-none d-md-inline">
                                             633 Comments

                                         </span>
                                     </div>
                                 </div>

                             </div>
                             <div
                                 class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-4">

                                 <div class="pl-2 pt-3 pt-md-0 p-md-0">
                                     <div class="top-stories-art-img">

                                         <a href="/"><img
                                                 src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/2mpsc_650_081614125408.jpg"
                                                 alt="4dog_26.jpg" title="4dog_26.jpg">
                                         </a>

                                     </div>
                                 </div>
                                 <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                                     <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                         अनंतनाग
                                     </div>
                                     <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                         दहशदवाद्यांचा केला खात्मा</div>
                                     <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                         दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                                     <div class="post-time-and-comment mt-1 mt-md-2">
                                         <span class="time mr-md-1">
                                             6 h ago
                                         </span><span class="time d-none d-md-inline">
                                             633 Comments

                                         </span>
                                     </div>
                                 </div>

                             </div>
                             <div
                                 class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-4">

                                 <div class="pl-2 pt-3 pt-md-0 p-md-0">
                                     <div class="top-stories-art-img">

                                         <a href="/"><img
                                                 src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/0bank_20ok.JPG"
                                                 alt="4dog_26.jpg" title="4dog_26.jpg">
                                         </a>

                                     </div>
                                 </div>
                                 <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                                     <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                         अनंतनाग
                                     </div>
                                     <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                         दहशदवाद्यांचा केला खात्मा</div>
                                     <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                         दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                                     <div class="post-time-and-comment mt-1 mt-md-2">
                                         <span class="time mr-md-1">
                                             6 h ago
                                         </span><span class="time d-none d-md-inline">
                                             633 Comments

                                         </span>
                                     </div>
                                 </div>

                             </div>
                             <div
                                 class="more-top-stories-articles d-flex flex-row-reverse flex-md-column cb-articles col-12 col-md-3 py-3 pt-md-0 pb-md-4 pl-md-0 pr-0 pl-0 pl-md-4">

                                 <div class="pl-2 pt-3 pt-md-0 p-md-0">
                                     <div class="top-stories-art-img">

                                         <a href="/"><img
                                                 src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/32Mahavitaran_h_30_8.jpg"
                                                 alt="4dog_26.jpg" title="4dog_26.jpg">
                                         </a>

                                     </div>
                                 </div>
                                 <div class="article-title-description p-0 ml-0 col-7 col-md-12">
                                     <div class="d-none d-md-inline-block news-section-title mb-2 mb-md-2 mt-md-2">
                                         अनंतनाग
                                     </div>
                                     <div class="article-title mb-2 mb-md-3">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                         दहशदवाद्यांचा केला खात्मा</div>
                                     <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                         दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत नागमध्ये चकमकीत</div>
                                     <div class="post-time-and-comment mt-1 mt-md-2">
                                         <span class="time mr-md-1">
                                             6 h ago
                                         </span><span class="time d-none d-md-inline">
                                             633 Comments

                                         </span>
                                     </div>
                                 </div>

                             </div>
                         </div>

                     </div>
                 </div>
                 <!-- end creative lab -->
                 <!-- ad -->
                 <div class="ad-block-mobile my-3 d-md-none"></div>
                 <!-- reader's favourite -->
                 <div class="d-flex flex-column flex-md-row cl-section rf-section mt-md-3">

                     <div class="more-top-stories pr-md-0 pt-2 pb-2 pb-md-1 pt-md-0 pl-md-0">
                         <div class="cl-bg">
                             <div class="rf-bg">
                                 <center class="d-inline-block float-left mt-md-2">
                                     <span class="ml-md-0 mr-1 d-md-block">Reader's</span>
                                     <span class="d-md-block">Favourite</span></center>
                                 <div class="rf-angular-backet d-md-none"><i class="fa fa-angle-right"></i></div>
                             </div>
                         </div>
                     </div>
                     <div class="d-flex flex-wrap rf-section-right">
                         <div
                             class="more-top-stories-articles rf-sub-section d-flex flex-wrap cb-articles col-12 col-md-4 pb-md-1 pr-md-0 pt-0 pb-0 pl-md-4">
                             <div class="rf-sub-section-title mr-title mt-md-2 mb-md-2">
                                 <div class="d-md-none plus-sign"><i class="fa fa-minus"></i></div>
                                 <div class="rf-title">
                                     Most Read Articles</div>
                                 <div class="d-md-none angle-sign"><i class="fa fa-angle-down"></i></div>
                             </div>
                             <div class="rf-section-news-container mr-new-container">
                                 <div class="rf-blocks-article-one mb-2">
                                     <div class="pl-2 pt-md-0 p-md-0 d-none d-md-block">
                                         <div class="top-stories-art-img">

                                             <a href="/"><img
                                                     src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/0bus_accident_1_0.jpg"
                                                     alt="4dog_26.jpg" title="4dog_26.jpg">
                                             </a>

                                         </div>
                                     </div>
                                     <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                         <div class="article-title mb-1 mt-2">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत
                                             चकमकीत जवानांनी चकमकीत चकमकीत </div>
                                         <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                             दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                             केला</div>
                                         <div class="post-time-and-comment mt-2 pb-2">
                                             <span class="fa fa-eye pr-1"></span>
                                             <span class="views">
                                                 12,000
                                             </span>
                                             <spann> views </spann>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="rf-blocks-article-others mb-2">
                                     <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                         <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत
                                             चकमकीत जवानांनी चकमकीत चकमकीत </div>
                                         <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                             दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                             केला</div>
                                         <div class="post-time-and-comment mt-2 pb-2">
                                             <span class="fa fa-eye pr-1"></span>
                                             <span class="views">
                                                 12,000
                                             </span>
                                             <spann> views </spann>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="rf-blocks-article-others mb-2">
                                     <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                         <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत
                                             चकमकीत जवानांनी चकमकीत चकमकीत </div>
                                         <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                             दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                             केला</div>
                                         <div class="post-time-and-comment mt-2 pb-2">
                                             <span class="fa fa-eye pr-1"></span>
                                             <span class="views">
                                                 12,000
                                             </span>
                                             <spann> views </spann>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                         </div>
                         <div
                             class="more-top-stories-articles rf-sub-section d-flex flex-wrap cb-articles col-12 col-md-4 pb-md-1 pr-md-0 pt-0 pb-0 pl-md-4">
                             <div class="rf-sub-section-title mc-title mt-md-2 mb-md-2">
                                 <div class="d-md-none plus-sign"><i class="fa fa-minus"></i></div>
                                 <div class="rf-title">
                                     Most commented Articles</div>
                                 <div class="d-md-none angle-sign"><i class="fa fa-angle-down"></i></div>
                             </div>
                             <div class="rf-section-news-container mc-new-container">
                                 <div class="rf-blocks-article-one mb-2">
                                     <div class="pl-2 pt-md-0 p-md-0 d-none d-md-block">
                                         <div class="top-stories-art-img">

                                             <a href="/"><img
                                                     src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/4b9fb2f64_4f36_4a71_ad25_e063d050bde5.jpg"
                                                     alt="4dog_26.jpg" title="4dog_26.jpg">
                                             </a>

                                         </div>
                                     </div>
                                     <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                         <div class="article-title mb-1 mt-2">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत
                                             चकमकीत जवानांनी चकमकीत चकमकीत </div>
                                         <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                             दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                             केला</div>
                                         <div class="post-time-and-comment mt-2 pb-2">
                                             <span class="pr-1"><img
                                                     src="https://sankey-bucket.s3-ap-southeast-1.amazonaws.com/comments-icon.png"
                                                     style="width: 11px;"></span>
                                             <span class="views">
                                                 12,000
                                             </span>
                                             <spann> comments </spann>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="rf-blocks-article-others mb-2">
                                     <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                         <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत
                                             चकमकीत जवानांनी चकमकीत चकमकीत </div>
                                         <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                             दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                             केला</div>
                                         <div class="post-time-and-comment mt-2 pb-2">
                                             <span class="pr-1"><img
                                                     src="https://sankey-bucket.s3-ap-southeast-1.amazonaws.com/comments-icon.png"
                                                     style="width: 11px;"></span>
                                             <span class="views">
                                                 12,000
                                             </span>
                                             <spann> comments </spann>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="rf-blocks-article-others mb-2">
                                     <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                         <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत
                                             चकमकीत जवानांनी चकमकीत चकमकीत </div>
                                         <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                             दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                             केला</div>
                                         <div class="post-time-and-comment mt-2 pb-2">
                                             <span class="pr-1"><img
                                                     src="https://sankey-bucket.s3-ap-southeast-1.amazonaws.com/comments-icon.png"
                                                     style="width: 11px;"></span>
                                             <span class="views">
                                                 12,000
                                             </span>
                                             <spann> comments </spann>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                         </div>
                         <div
                             class="more-top-stories-articles rf-sub-section d-flex flex-wrap cb-articles col-12 col-md-4 pb-md-1 pr-md-0 pt-0 pb-0 pl-md-4">
                             <div class="rf-sub-section-title ms-title mt-md-2 mb-md-2">
                                 <div class="d-md-none plus-sign"><i class="fa fa-minus"></i></div>
                                 <div class="rf-title">
                                     Most Shared Articles</div>
                                 <div class="d-md-none angle-sign"><i class="fa fa-angle-down"></i></div>
                             </div>
                             <div class="rf-section-news-container ms-new-container">
                                 <div class="rf-blocks-article-one mb-2">
                                     <div class="pl-2 pt-md-0 p-md-0 d-none d-md-block">
                                         <div class="top-stories-art-img">

                                             <a href="/"><img
                                                     src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/news-story/cover-images/000000006_4.jpg"
                                                     alt="4dog_26.jpg" title="4dog_26.jpg">
                                             </a>

                                         </div>
                                     </div>
                                     <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                         <div class="article-title mb-1 mt-2">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत
                                             चकमकीत जवानांनी चकमकीत चकमकीत </div>
                                         <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                             दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                             केला</div>
                                         <div class="post-time-and-comment mt-2 pb-2">
                                             <span class="fa fa-share-square-o pr-1"></span>
                                             <span class="views">
                                                 12,000
                                             </span>
                                             <spann> shared </spann>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="rf-blocks-article-others mb-2">
                                     <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                         <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत
                                             चकमकीत जवानांनी चकमकीत चकमकीत </div>
                                         <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                             दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                             केला</div>
                                         <div class="post-time-and-comment mt-2 pb-2">
                                             <span class="fa fa-share-square-o pr-1"></span>
                                             <span class="views">
                                                 12,000
                                             </span>
                                             <spann> shared </spann>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="rf-blocks-article-others mb-2">
                                     <div class="article-title-description pr-2 pl-4 pl-md-3 ml-0 col-md-12">
                                         <div class="article-title mb-1">अनंतनागमध्ये चकमकीत जवानांनी चकमकीत चकमकीत
                                             चकमकीत जवानांनी चकमकीत चकमकीत </div>
                                         <div class="article-description">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                             दहशदवाद्यांचा केला अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन दहशदवाद्यांचा
                                             केला</div>
                                         <div class="post-time-and-comment mt-2 pb-2">
                                             <span class="fa fa-share-square-o pr-1"></span>
                                             <span class="views">
                                                 12,000
                                             </span>
                                             <spann> shared </spann>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                         </div>
                     </div>

                 </div>
                 <!-- end reader's favourite -->


                 <!--- ad -->


                 <div class="ad-block-top-desktop d-none d-md-flex d-sm-none mt-md-0" style="height: 100px;width:93%;">
                 </div>

                 <!---end ad--->

                 <!-- start video-story section-->
                 <!-- start video-story section-->
                 <section class="d-flex flex-column align-items-center w-100 mt-2 my-md-2 pt-md-3 pb-md-2 video-story">

                     <div class="section-title-mobile d-flex d-md-none justify-content-between m-0">
                         <span class="mx-3">Videos</span>
                         <i class="fa fa-angle-right mx-3"></i>
                     </div>

                     <div class="px-0 flex-column inner-section-width">

                         <span class="section-title-desktop">Videos</span>

                         <div class="d-flex align-items-start px-0 pb-2 py-md-2 video-box">

                             <div class="d-flex d-md-block flex-column main-v-story-container">

                                 <div class="video-main-desktop mb-4 mb-md-0">
                                     <img class="w-100 h-100"
                                         src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/smg_980news_story_section/public/news-story/cover-images/1baramatinagarparishad_1.jpg">
                                     <div class="d-flex flex-column justify-content-end w-100 video-overlay">
                                         <div class="ml-4 mb-2 d-inline-block video-item-info main-video">
                                             <span class="news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                                 दहशदवाद्यांचा केला</span>
                                             <span class="d-inline-block mr-2 v-time">1 d ago</span>
                                             <span class="d-inline-block mr-2 v-views">
                                                 <i class="fa fa-eye pr-1"></i> 12,002 views
                                             </span>
                                             <span class="d-inline-block mr-2 v-views">
                                                 <i class="fa fa-comment pr-1"></i> 6,383 comments
                                             </span>
                                         </div>
                                     </div>
                                     <div
                                         class="d-flex flex-column justify-content-center align-items-center w-100 video-overlay b-0">
                                         <img class="m-2 play-icon"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                                     </div>
                                 </div>

                                 <div class="d-none my-2 py-1 d-md-flex social-icons">
                                     <span class="s-icon mr-1" style="background-color: #3b5998;">
                                         <i class="fa fa-facebook fa-social-custom"></i>
                                     </span>
                                     <span class="s-icon mr-1" style="background-color: #00acee;">
                                         <i class="fa fa-twitter fa-social-custom"></i>
                                     </span>
                                     <span class="s-icon mr-1" style="background-color: #003300;">
                                         <i class="fa fa-linkedin fa-social-custom"></i>
                                     </span>
                                     <span class="s-icon mr-1" style="background-color: #060d13;">
                                         <img class="s-icon-img"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/email.svg">
                                     </span>
                                 </div>

                                 <div
                                     class="d-flex py-3 px-1 px-md-0 py-md-0 my-md-2 justify-content-between video-item-card">
                                     <div class="v-image">
                                         <img class="w-100 h-100"
                                             src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/maxresdefault.jpg">
                                         <div class="d-flex align-items-end video-overlay">
                                             <img class="m-2 play-icon"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                                         </div>
                                     </div>
                                     <div class="ml-2 ml-md-4 d-inline-block video-item-info">
                                         <span class="upnext d-none d-md-block">Up Next</span>
                                         <span class="mb-1 news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                             दहशदवाद्यांचा केला</span>
                                         <span class="v-time mt-1 mb-0 mt-md-2 mb-md-1">1 d ago</span>
                                         <span class="v-views mr-md-2">
                                             <i class="fa fa-eye pr-1"></i> 12,002 views
                                         </span>
                                         <span class="v-views">
                                             <i class="fa fa-comment pr-1"></i> 6,383 comments
                                         </span>
                                     </div>
                                 </div>
                             </div>

                             <div class="d-flex flex-column other-v-story-container">
                                 <div
                                     class="d-flex py-3 px-1 px-md-0 py-md-0 mb-md-3 justify-content-between video-item-card">
                                     <div class="v-image">
                                         <img class="w-100 h-100"
                                             src="https://img.freepik.com/free-vector/successful-business-woman-vector-illustration_107173-4215.jpg?size=626&ext=jpg">
                                         <div
                                             class="d-flex align-items-end align-items-md-center justify-content-md-center video-overlay">
                                             <img class="m-2 d-md-none play-icon"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                                             <img class="m-2 d-none d-md-block play-icon-white"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play-white.svg">
                                         </div>
                                     </div>
                                     <div class="mt-0 mt-md-2 ml-2 ml-md-0 d-inline-block video-item-info">
                                         <span class="news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                             दहशदवाद्यांचा केला</span>
                                         <span class="v-time mt-1 mb-0 mt-md-1 mb-md-1">1 d ago</span>
                                         <span class="v-views">
                                             <i class="fa fa-eye pr-1"></i> 12,002 views
                                         </span>
                                         <span class="v-views">
                                             <i class="fa fa-comment pr-1"></i> 6,383 comments
                                         </span>
                                     </div>
                                 </div>
                                 <div
                                     class="d-flex py-3 px-1 px-md-0 py-md-0 mb-md-3 justify-content-between video-item-card">
                                     <div class="v-image">
                                         <img class="w-100 h-100"
                                             src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/2TIGER_2.jpg">
                                         <div
                                             class="d-flex align-items-end align-items-md-center justify-content-md-center video-overlay">
                                             <img class="m-2 d-md-none play-icon"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play.svg">
                                             <img class="m-2 d-none d-md-block play-icon-white"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/play-white.svg">
                                         </div>
                                     </div>
                                     <div class="mt-0 mt-md-2 ml-2 ml-md-0 d-inline-block video-item-info">
                                         <span class="news-title">अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलचा दोन
                                             दहशदवाद्यांचा केला</span>
                                         <span class="v-time mt-1 mb-0 mt-md-1 mb-md-1">1 d ago</span>
                                         <span class="v-views">
                                             <i class="fa fa-eye pr-1"></i> 12,003 views
                                         </span>
                                         <span class="v-views">
                                             <i class="fa fa-comment pr-1"></i> 6,383 comments
                                         </span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </section>
                 <div class="ad-block-mobile mb-3 mt-2"></div>
                 <!-- end video-story section -->

                 <!-- start categories section -->
                 <section class="inner-section-width categories d-flex flex-column align-items-center my-md-2">
                     <span class="align-self-start section-title-desktop">Categories</span>

                     <div class="row adjust-categories">

                         <div class="section-title-mobile d-flex d-md-none justify-content-between">
                             <span class="mx-3">POLITICS</span>
                             <i class="fa fa-angle-right mx-3"></i>
                         </div>

                         <div
                             class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                             <div class="d-none d-md-block category-title pl-2 mb-2">Politics</div>

                             <img class="card-img-top"
                                 src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/0Car_30.jpg"
                                 alt="Card image cap">

                             <div id="category1" class="carousel slide d-md-none" data-ride="carousel">
                                 <ol class="carousel-indicators c-indicator">
                                     <li data-slide-to="0" class="dot-indicators active"></li>
                                     <li data-slide-to="1" class="dot-indicators"></li>
                                     <li data-slide-to="2" class="dot-indicators"></li>
                                     <li data-slide-to="3" class="dot-indicators"></li>
                                 </ol>
                                 <div class="carousel-inner">
                                     <div class="carousel-item active">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                                 alt="First slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Second slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                                 alt="Third slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Fourth slide">
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा
                                 </div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा
                                 </div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा
                                 </div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा
                                 </div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                         </div>
                         <div class="ad-block-mobile mt-0 mb-3"></div>

                         <div class="section-title-mobile d-flex d-md-none justify-content-between">
                             <span class="mx-3">WORLD</span>
                             <i class="fa fa-angle-right mx-3"></i>
                         </div>

                         <div
                             class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                             <div class="d-none d-md-block category-title pl-2 mb-2">World</div>

                             <img class="card-img-top"
                                 src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/0Corona_20V_8.jpg"
                                 alt="Card image cap">

                             <div id="category2" class="carousel slide d-md-none" data-ride="carousel">
                                 <ol class="carousel-indicators c-indicator">
                                     <li data-slide-to="0" class="dot-indicators active"></li>
                                     <li data-slide-to="1" class="dot-indicators"></li>
                                     <li data-slide-to="2" class="dot-indicators"></li>
                                     <li data-slide-to="3" class="dot-indicators"></li>
                                 </ol>
                                 <div class="carousel-inner">
                                     <div class="carousel-item active">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                                 alt="First slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Second slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                                 alt="Third slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Fourth slide">
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा </div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा </div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा </div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                         </div>
                         <div class="ad-block-mobile mt-0 mb-3"></div>

                         <div class="section-title-mobile d-flex d-md-none justify-content-between">
                             <span class="mx-3">NATIONAL</span>
                             <i class="fa fa-angle-right mx-3"></i>
                         </div>

                         <div
                             class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                             <div class="d-none d-md-block category-title pl-2 mb-2">National</div>

                             <img class="card-img-top"
                                 src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/4personal_finance.jpg"
                                 alt="Card image cap">

                             <div id="category3" class="carousel slide d-md-none" data-ride="carousel">
                                 <ol class="carousel-indicators c-indicator">
                                     <li data-slide-to="0" class="dot-indicators active"></li>
                                     <li data-slide-to="1" class="dot-indicators"></li>
                                     <li data-slide-to="2" class="dot-indicators"></li>
                                     <li data-slide-to="3" class="dot-indicators"></li>
                                 </ol>
                                 <div class="carousel-inner">
                                     <div class="carousel-item active">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                                 alt="First slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Second slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                                 alt="Third slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Fourth slide">
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                         </div>
                         <div class="ad-block-mobile mt-0 mb-3"></div>

                         <div class="section-title-mobile d-flex d-md-none justify-content-between">
                             <span class="mx-3">POST EVERYTHING</span>
                             <i class="fa fa-angle-right mx-3"></i>
                         </div>

                         <div
                             class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 pt-md-1 pb-md-2 px-0 pl-md-4 mobile-inner-container">

                             <div class="d-none d-md-block category-title pl-2 mb-2">PostEverything</div>

                             <img class="card-img-top"
                                 src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/1hapus_mango_2.jpg"
                                 alt="Card image cap">

                             <div id="category4" class="carousel slide d-md-none" data-ride="carousel">
                                 <ol class="carousel-indicators c-indicator">
                                     <li data-slide-to="0" class="dot-indicators active"></li>
                                     <li data-slide-to="1" class="dot-indicators"></li>
                                     <li data-slide-to="2" class="dot-indicators"></li>
                                     <li data-slide-to="3" class="dot-indicators"></li>
                                 </ol>
                                 <div class="carousel-inner">
                                     <div class="carousel-item active">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                                 alt="First slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Second slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                                 alt="Third slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Fourth slide">
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                         </div>
                         <div class="ad-block-mobile mt-0 mb-3"></div>

                     </div>

                     <div class="ad-block-top-desktop"></div>

                     <div class="row adjust-categories">

                         <div class="section-title-mobile d-flex d-md-none justify-content-between">
                             <span class="mx-3">POLITICS</span>
                             <i class="fa fa-angle-right mx-3"></i>
                         </div>

                         <div
                             class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                             <div class="d-none d-md-block category-title pl-2 mb-2">Politics</div>

                             <img class="card-img-top"
                                 src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/4personal_finance.jpg"
                                 alt="Card image cap">

                             <div id="category5" class="carousel slide d-md-none" data-ride="carousel">
                                 <ol class="carousel-indicators c-indicator">
                                     <li data-slide-to="0" class="dot-indicators active"></li>
                                     <li data-slide-to="1" class="dot-indicators"></li>
                                     <li data-slide-to="2" class="dot-indicators"></li>
                                     <li data-slide-to="3" class="dot-indicators"></li>
                                 </ol>
                                 <div class="carousel-inner">
                                     <div class="carousel-item active">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                                 alt="First slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Second slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                                 alt="Third slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Fourth slide">
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                         </div>
                         <div class="ad-block-mobile mt-0 mb-3"></div>

                         <div class="section-title-mobile d-flex d-md-none justify-content-between">
                             <span class="mx-3">WORLD</span>
                             <i class="fa fa-angle-right mx-3"></i>
                         </div>

                         <div
                             class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                             <div class="d-none d-md-block category-title pl-2 mb-2">World</div>

                             <img class="card-img-top"
                                 src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_xs_100/public/news-story/cover-images/3hyundai_i20.jpg"
                                 alt="Card image cap">

                             <div id="category6" class="carousel slide d-md-none" data-ride="carousel">
                                 <ol class="carousel-indicators c-indicator">
                                     <li data-slide-to="0" class="dot-indicators active"></li>
                                     <li data-slide-to="1" class="dot-indicators"></li>
                                     <li data-slide-to="2" class="dot-indicators"></li>
                                     <li data-slide-to="3" class="dot-indicators"></li>
                                 </ol>
                                 <div class="carousel-inner">
                                     <div class="carousel-item active">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                                 alt="First slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Second slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                                 alt="Third slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Fourth slide">
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला </div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                         </div>
                         <div class="ad-block-mobile mt-0 mb-3"></div>

                         <div class="section-title-mobile d-flex d-md-none justify-content-between">
                             <span class="mx-3">NATIONAL</span>
                             <i class="fa fa-angle-right mx-3"></i>
                         </div>

                         <div
                             class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                             <div class="d-none d-md-block category-title pl-2 mb-2">National</div>

                             <img class="card-img-top"
                                 src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/generic_md_75/public/image-story/gallery-images/11_322.jpg"
                                 alt="Card image cap">

                             <div id="category7" class="carousel slide d-md-none" data-ride="carousel">
                                 <ol class="carousel-indicators c-indicator">
                                     <li data-slide-to="0" class="dot-indicators active"></li>
                                     <li data-slide-to="1" class="dot-indicators"></li>
                                     <li data-slide-to="2" class="dot-indicators"></li>
                                     <li data-slide-to="3" class="dot-indicators"></li>
                                 </ol>
                                 <div class="carousel-inner">
                                     <div class="carousel-item active">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                                 alt="First slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Second slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                                 alt="Third slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Fourth slide">
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                         </div>
                         <div class="ad-block-mobile mt-0 mb-3"></div>

                         <div class="section-title-mobile d-flex d-md-none justify-content-between">
                             <span class="mx-3">POST EVERYTHING</span>
                             <i class="fa fa-angle-right mx-3"></i>
                         </div>

                         <div
                             class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column pt-0 pb-2 px-0 pl-md-4 mobile-inner-container">

                             <div class="d-none d-md-block category-title pl-2 mb-2">PostEverything</div>

                             <img class="card-img-top"
                                 src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/styles/smg_980large_m/public/news-story/cover-images/2Vegitables_0.gif"
                                 alt="Card image cap">

                             <div id="category8" class="carousel slide d-md-none" data-ride="carousel">
                                 <ol class="carousel-indicators c-indicator">
                                     <li data-slide-to="0" class="dot-indicators active"></li>
                                     <li data-slide-to="1" class="dot-indicators"></li>
                                     <li data-slide-to="2" class="dot-indicators"></li>
                                     <li data-slide-to="3" class="dot-indicators"></li>
                                 </ol>
                                 <div class="carousel-inner">
                                     <div class="carousel-item active">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                                 alt="First slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Second slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                                 alt="Third slide">
                                         </div>
                                     </div>
                                     <div class="carousel-item">
                                         <div class="d-flex align-items-center carousel-image">
                                             <img class="d-block w-100 h-100"
                                                 src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                 alt="Fourth slide">
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                             <div class="news-content-div py-2 py-md-3">
                                 <div class="news-title mb-1 mt-1 mb-md-1 mt-md-0">कमकीत जवानांनी हिजबुलच्या
                                     दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला खात्मा</div>
                                 <div class="news-description">अनंतनागमध्ये चकमकीत जवानांनी हिजबुलच्या दोन दहशतवाद्यांचा
                                     केला</div>
                                 <div class="d-block d-md-none mb-1 mb-md-1 news-footer">6 h ago</div>
                             </div>
                         </div>
                         <div class="ad-block-mobile mt-0 mb-3"></div>

                     </div>

                 </section>
                 <!-- end categories section -->

                 <!-- start entertaiment section -->
                 <section class="w-100 my-md-2 entertainment">
                     <div class="section-title-mobile d-flex d-md-none justify-content-between">
                         <span class="mx-3">ENTERTAINMENT</span>
                         <i class="fa fa-angle-right mx-3"></i>
                     </div>

                     <div class="inner-container px-0">
                         <span class="section-title-desktop">Entertainment</span>
                         <div class="row mx-0 mb-md-3">
                             <div class="px-0 pr-md-2 pt-md-1 pb-md-2 col-md-8 entertainment-container">
                                 <div id="entertainment-carousel" class="carousel slide" data-ride="carousel">

                                     <ol class="carousel-indicators c-indicator">
                                         <li data-slide-to="0" class="dot-indicators active"></li>
                                         <li data-slide-to="1" class="dot-indicators"></li>
                                         <li data-slide-to="2" class="dot-indicators"></li>
                                         <li data-slide-to="3" class="dot-indicators"></li>
                                         <li data-slide-to="4" class="dot-indicators"></li>
                                         <li data-slide-to="5" class="dot-indicators"></li>
                                     </ol>

                                     <ol class="carousel-indicators v-story-indicators">
                                         <li data-slide-to="0" class="triangle active"></li>
                                         <li data-slide-to="1" class="triangle"></li>
                                         <li data-slide-to="2" class="triangle"></li>
                                     </ol>

                                     <div class="carousel-inner">
                                         <div class="carousel-item active">
                                             <div class="d-flex align-items-center carousel-image">
                                                 <img class="d-block w-100 h-100"
                                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                                     alt="First slide">
                                             </div>
                                         </div>
                                         <div class="carousel-item">
                                             <div class="d-flex align-items-center carousel-image">
                                                 <img class="d-block w-100 h-100"
                                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                     alt="Second slide">
                                             </div>
                                         </div>
                                         <div class="carousel-item">
                                             <div class="d-flex align-items-center carousel-image">
                                                 <img class="d-block w-100 h-100"
                                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                                     alt="Third slide">
                                             </div>
                                         </div>
                                         <div class="carousel-item">
                                             <div class="d-flex align-items-center carousel-image">
                                                 <img class="d-block w-100 h-100"
                                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img1.jpg"
                                                     alt="Fourth slide">
                                             </div>
                                         </div>
                                         <div class="carousel-item">
                                             <div class="d-flex align-items-center carousel-image">
                                                 <img class="d-block w-100 h-100"
                                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img2.jpg"
                                                     alt="Fourth slide">
                                             </div>
                                         </div>
                                         <div class="carousel-item">
                                             <div class="d-flex align-items-center carousel-image">
                                                 <img class="d-block w-100 h-100"
                                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/images/img3.jpg"
                                                     alt="Fourth slide">
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="entertainment-list-box">
                                     <ul class="list-unstyled">
                                         <li class="entertainment-list d-md-flex align-items-center">
                                             <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                                 हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                                 हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                             <div class="news-description">
                                                 <span class="v-time mb-2">4 h ago</span>
                                                 <!-- <span class="v-time">1234 comments</span> -->
                                             </div>
                                         </li>
                                         <li class="entertainment-list d-md-flex align-items-center">
                                             <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                                 हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                                 हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                             <div class="news-description">
                                                 <span class="v-time mb-2">4 h ago</span>
                                                 <!-- <span class="v-time">1234 comments</span> -->
                                             </div>
                                         </li>
                                         <li class="entertainment-list d-md-flex align-items-center">
                                             <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                                 हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                                 हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                             <div class="news-description">
                                                 <span class="v-time mb-2">4 h ago</span>
                                                 <!-- <span class="v-time">1234 comments</span> -->
                                             </div>
                                         </li>
                                         <li class="entertainment-list d-md-none align-items-center">
                                             <span class="news-title mb-1 mt-2 mb-md-1 mt-md-0 mb-md-0">कमकीत जवानांनी
                                                 हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                                 हिजबुलच्या दोन दहशतवाद्यांचा केला खात्मा</span>
                                             <div class="news-description">
                                                 <span class="v-time mb-2">4 h ago</span>
                                                 <!-- <span class="v-time">1234 comments</span> -->
                                             </div>
                                         </li>
                                     </ul>
                                 </div>
                             </div>

                             <div class="col-md-4 py-2 pr-0 pt-md-1 pb-md-2 ad-block-desktop">
                                 <div class="ad-block mr-0"></div>
                             </div>
                         </div>
                         <div class="row mx-0">
                             <div class="col-md-4 py-2 pl-0 ad-block-desktop">
                                 <div class="ad-block ml-0"></div>
                             </div>
                             <div class="col-md-4 py-2 ad-block-desktop">
                                 <div class="ad-block"></div>
                             </div>
                             <div class="col-md-4 py-2 pr-0 ad-block-desktop">
                                 <div class="ad-block mr-0"></div>
                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- end entertaiment section -->

                 <div class="ad-block-mobile mb-2"></div>

                 <!-- start photo section -->
                 <div class="photography-section pb-md-2">
                     <div class="section-title-mobile d-flex d-md-none justify-content-between">
                         <span class="mx-3">Photography</span>
                         <i class="fa fa-angle-right mx-3"></i>
                     </div>
                     <div class="inner-container mobile-full-width photography d-flex align-items-end">
                         <div class="section-title-desktop align-self-start m-md-3" style="color:white">Photography
                         </div>
                         <div class="spacing-left-overlap my-1 my-md-0 my-lg-1"></div>

                         <div class="right-overlap p-3 p-md-3 pr-md-5" style="background-color: white;">
                             <div class="news-section-title mb-md-2">साधारण</div>
                             <div class="news-title mb-2 mb-md-1">पंतप्रधान मोदींना आवडतात फक्त मराठी दिग्गजांची ही 2
                                 गाणी</div>
                             <div class="col-lg-1 col-md-0 my-1 my-md-0 my-lg-1 section-type-1-image mb-md-3 d-none"
                                 style="background-image:url(https://composeclick.com/wp-content/uploads/2018/05/nature-1-1024x637.jpg)">
                             </div>
                             <div class="source-container mb-2 d-none">source : संतोषचं आयुष्य, टप्प्याटप्प्यानं वळणं
                                 घेत घेत कुणीकडे गेलं हे त्याच्या सगळ्या हकीकतीवरून कळलं.संतोषचं आयुष्य,
                                 टप्प्याटप्प्यानं</div>
                             <div class="news-description mt-3 mb-1 my-md-0">
                                 अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये
                                 चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी
                                 हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन
                                 दहशदवाद्यांचा केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा
                                 केला खात्मा अनंतनागमध्ये चकमकीत जवानांनी हाजीबुलच्या दोन दहशदवाद्यांचा केला खात्मा
                             </div>
                             <div class="news-footer d-block d-md-none mb-2 mb-md-2">6 h ago</div>
                         </div>
                     </div>
                 </div>
                 <!-- End Photo section -->

                 <!-- start publications section-->
                 <section class="publications mt-2 w-100">
                     <div class="section-title-mobile d-flex d-md-none justify-content-between">
                         <span class="mx-3">Our Publications</span>
                         <i class="fa fa-angle-right mx-3"></i>
                     </div>
                     <div class="inner-container d-flex">
                         <div class="our-services-div mt-md-3">
                             <span class="section-title-desktop">Our Publications</span>
                         </div>
                         <div class="px-0 px-md-4 pt-md-3 pb-md-3 d-flex justify-content-center justify-content-md-between"
                             style="flex:1;">
                             <div class="book-div d-flex flex-column align-items-center">
                                 <div class="book-cover">
                                     <img src="http://sakalpublications.com/img/p/4/5/4/9/4549-home_default.jpg" alt=""
                                         class="w-100 h-100">
                                 </div>
                                 <span class="book-name mt-md-1">Book</span>
                             </div>
                             <div class="book-div d-none d-md-flex flex-column align-items-center">
                                 <div class="book-cover">
                                     <img src="http://sakalpublications.com/img/p/4/5/5/7/4557-home_default.jpg" alt=""
                                         class="w-100 h-100">
                                 </div>
                                 <span class="book-name mt-md-1">Book</span>
                             </div>
                             <div class="book-div d-none d-md-flex flex-column align-items-center">
                                 <div class="book-cover">
                                     <img src="http://sakalpublications.com/img/p/4/5/6/5/4565-home_default.jpg" alt=""
                                         class="w-100 h-100">
                                 </div>
                                 <span class="book-name mt-md-1">Book</span>
                             </div>
                             <div class="book-div d-none d-md-flex flex-column align-items-center">
                                 <div class="book-cover">
                                     <img src="http://sakalpublications.com/img/p/4/5/6/7/4567-home_default.jpg" alt=""
                                         class="w-100 h-100">
                                 </div>
                                 <span class="book-name mt-md-1">Book</span>
                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- end publications section -->

                 <!-- start footer-first section -->
                 <section class="w-100 footer-first"
                     style="height: 115px; display: flex; align-items: center; justify-content: center;">
                     <div class="px-0 px-md-4 pt-md-3 pb-md-3" style="background-color: #0060aa;">
                         <div
                             style="font-size: 36px; margin-left: auto; margin-right:  auto; color: #fff; text-align: center;">
                             <img src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/bottomLogo.png"
                                 style="width: 175px;">
                         </div>
                     </div>
                 </section>
                 <!-- End footer-first section -->

                 <!-- start footer-top section-->
                 <section class="inner-section-width footer-top d-flex">
                     <div class="our-services-div mt-md-4" style="width:15%">
                         <span class="section-title-desktop">Our Services</span>
                     </div>
                     <div class="px-0 px-md-4 pt-md-3 pb-md-3 icon-container w-100">
                         <div class="row mx-0">
                             <div id="menu-1"
                                 class="d-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                                 <ul class="m-0 p-0">
                                     <li>
                                         <i class="fa fa-envelope" aria-hidden="true"></i>
                                         <span>Newsletter</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-phone" aria-hidden="true"></i>
                                         <span>SAAM TV</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-pencil" aria-hidden="true"></i>
                                         <span>SAKAL TIMES</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-book" aria-hidden="true"></i>
                                         <span>SARKARNAMA</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-square" aria-hidden="true"></i>
                                         <span>YINBUZZ</span>
                                     </li>
                                 </ul>
                             </div>
                             <div id="menu-2"
                                 class="d-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                                 <ul class="m-0 p-0">
                                     <li>
                                         <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                         <span>SAKAL Printer</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-certificate" aria-hidden="true"></i>
                                         <span>Subscribe</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-bank" aria-hidden="true"></i>
                                         <span>Advertise with us</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-headphones" aria-hidden="true"></i>
                                         <span>Newsletter</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-cubes" aria-hidden="true"></i>
                                         <span>Contact us</span>
                                     </li>
                                 </ul>
                             </div>
                             <div id="menu-3"
                                 class="d-none d-md-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                                 <ul class="m-0 p-0">
                                     <li>
                                         <i class="fa fa-envelope" aria-hidden="true"></i>
                                         <span>Newsletter</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-phone" aria-hidden="true"></i>
                                         <span>SAAM TV</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-pencil" aria-hidden="true"></i>
                                         <span>SAKAL TIMES</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-book" aria-hidden="true"></i>
                                         <span>SARKARNAMA</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-square" aria-hidden="true"></i>
                                         <span>YINBUZZ</span>
                                     </li>
                                 </ul>
                             </div>
                             <div id="menu-4"
                                 class="d-none d-md-inline-flex flex-column align-items-center col-6 col-md-3 p-0 m-0 footer-menu">
                                 <ul class="m-0 p-0">
                                     <li>
                                         <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                         <span>SAKAL Printer</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-certificate" aria-hidden="true"></i>
                                         <span>Subscribe</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-bank" aria-hidden="true"></i>
                                         <span>Advertise with us</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-headphones" aria-hidden="true"></i>
                                         <span>Newsletter</span>
                                     </li>
                                     <li>
                                         <i class="fa fa-cubes" aria-hidden="true"></i>
                                         <span>Contact us</span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- end footer-top section -->

                 <!-- start footer-bottom section -->
                 <section class="w-100 pt-md-0 pb-md-4 footer-bottom d-none">
                     <div class="d-flex flex-column align-items-center inner-container">
                         <div class="d-none d-md-block footer-logo-div"></div>

                         <div class="d-none d-md-block px-5 text-center footer-breadcrumbs-container">
                             <span>Start</span>
                             <span class="mx-2">&gt;</span>
                             <span>Digital</span>
                             <span class="mx-2">&gt;</span>
                             <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span>
                         </div>

                         <div class="grey-line"></div>
                         <div class="mt-md-4 py-2 py-md-0 footer-links-div">
                             <ul class="m-0 p-0 text-center">
                                 <li class="mr-1 mx-md-2 d-inline-block">SUBSCRIPTION</li>
                                 <li class="mr-1 mx-md-2 d-inline-block">PUBLISHING COMPANY</li>
                                 <li class="mr-1 mx-md-2 d-inline-block">ADVERTISEMENT</li>
                                 <li class="mr-1 mx-md-2 d-inline-block">MEDIA</li>
                                 <li class="mr-1 mx-md-2 d-inline-block">PRESS</li>
                                 <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                                 <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                                 <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                                 <li class="mr-1 mx-md-2 d-inline-block">LOREM</li>
                             </ul>
                         </div>
                         <div class="grey-line"></div>
                     </div>
                 </section>
                 <!-- end footer-bottom section -->


                 <!-- start copyright section -->
                 <section class="w-100 d-flex copyright">
                     <div class="d-flex flex-column inner-container pt-3 pt-md-3 pb-4 copy-pad">
                         <div class="d-none mb-4 mb-md-2 justify-content-center">
                             <div class="d-none p-1 py-md-1 px-md-2 go-top-box">
                                 <!-- <span class="d-block">^</span> -->
                                 <span id="go-top-btn-2" class="d-flex flex-column align-items-center go-top-text">
                                     <span class="mb-1">
                                         <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="10" height="10"
                                             viewBox="0 0 24 24" style=" fill:#000000;">
                                             <path
                                                 d="M 12.005859 3.765625 L 3.0507812 12.535156 L 4.4492188 13.964844 L 11.994141 6.5761719 L 19.544922 14.083984 L 20.955078 12.666016 L 12.005859 3.765625 z M 11.998047 9.4023438 L 3.0351562 18.550781 L 4.4648438 19.949219 L 12.001953 12.255859 L 19.537109 19.904297 L 20.962891 18.501953 L 11.998047 9.4023438 z">
                                             </path>
                                         </svg>
                                     </span>
                                     <!-- <i class="fa fa-sort-asc" aria-hidden="true"></i> -->
                                     <span class="my-1">Go to Top</span>
                                 </span>
                             </div>
                         </div>
                         <div
                             class="d-none flex-column align-items-center d-md-none justify-content-center sakal-logo-footer-box">
                             <div class="my-1 grey-line"></div>
                             <div class="sakal-logo-bottom-footer"></div>
                             <div class="my-1 grey-line"></div>
                         </div>
                         <div
                             class="d-none px-2 mt-4 mb-2 mt-md-2 justify-content-around justify-content-md-center social-icons-container">
                             <div class="rounded-circle social-icon">
                                 <i class="fa fa-twitter fa-social-custom"></i>
                             </div>
                             <div class="rounded-circle social-icon">
                                 <i class="fa fa-linkedin fa-social-custom"></i>
                             </div>
                             <div class="rounded-circle social-icon">
                                 <i class="fa fa-facebook fa-social-custom"></i>
                             </div>
                             <div class="rounded-circle social-icon">
                                 <!-- <img class="social-icon-img" src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/email.svg"> -->
                                 <i class="fa fa-envelope fa-social-custom"></i>
                             </div>
                             <div class="rounded-circle social-icon">
                                 <img class="social-icon-img"
                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/share.svg">
                                 <!-- <i class="fa fa-share fa-social-custom"></i> -->
                             </div>
                             <div class="rounded-circle social-icon">
                                 <img class="social-icon-img"
                                     src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/icons/youtube.svg">
                                 <!-- <i class="fa fa-youtube fa-social-custom"></i> -->
                             </div>
                         </div>
                         <div class="mt-md-5 mb-md-4 text-center news-description copyright-text">
                             Our History | Contact us | Advertise | Press | Terms and Conditions | Media Kit | Privacy
                             Policy
                         </div>
                         <div class="mt-md-1 mb-md-2 text-center news-description copyright-text">
                             &copy; 2000-2020 Sakal Media Group
                         </div>
                     </div>
                 </section>
                 <!-- end copyright section -->

                 <!-- end main-container -->
             </div>
         </div>
     </div>
 </div>

 <?php
    }
