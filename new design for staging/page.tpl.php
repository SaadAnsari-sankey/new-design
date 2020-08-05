<style>
.corona-dktp{
margin-top: 10px;
}
.corona-mobile{
margin-top: 10px;
}
.election-teaser-mobile{
margin-top:0!important;
}
/*  purchased products  */

.view-purchased-articles .views-exposed-widget.views-submit-button {
    float: left;
    padding: 5px 0 0;
    display: unset;
    margin-top: 25px;
}
/* end */

</style>
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


<?php
  $canonical_value= $page['content']['metatags']['node:news_story']['canonical']['#attached']['drupal_add_html_head'][0][0]['#value'];
  $canonicalJson = '{"#attached":{"drupal_add_html_head":[[{"#theme":"metatag_link_rel","#tag":"link","#id":"metatag_canonical","#name":"canonical","#value":"","#weight":13,"#attached":{"drupal_add_http_header":[["Link","; rel=\"canonical\"",true]]}},"metatag_canonical"]]}}';

  if ( !isset($canonical_value) || $canonical_value === NULL ) {
          $page['content']['metatags']['node:news_story']['canonical'] = json_decode($canonicalJson, TRUE);
          $page['content']['metatags']['node:news_story']['canonical']['#attached']['drupal_add_html_head'][0][0]['#value'] = 'https://www.esakal.com'.parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }
  if($canonical_value == '[current-page:url:absolute' ){

          $page['content']['metatags']['node:news_story']['canonical']['#attached']['drupal_add_html_head'][0][0]['#value'] = 'https://www.esakal.com'.parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }
  render($page['content']['metatags']);
?>
<?php
$show_loadbanner = variable_get('show_loadbanner');
$advertise_script = variable_get("loader_ad");
if ($show_loadbanner == 1 && arg(0) == "node" && is_numeric(arg(1))) {
    ?>
<div class="preload">
    <div id="<?php echo ($advertise_script['divid']); ?>" class='loader_ad'></div>
</div>
<div class="onflycontainer">
    <?php } ?>
    <div class="container">
        <?php if (!empty($page['top_expnd_ad'])) : ?>
        <?php print render($page['top_expnd_ad']); ?>
        <?php endif; ?>
    </div>
    <!-- <header id="navbar" role="banner" class="navbar navbar-default top-header container"> commented -->
    <!-- <header id="navbar" role="banner" class="navbar navbar-default top-header container">
        <div class="row flex-container"> -->

            <div id="pageWrapper">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 noadding-left addmobilepadding-left" id="nav-top-ad">

                    <div class="topadvt">

                        <?php if (!empty($page['top_header'])) : ?>

                        <?php print render($page['top_header']); ?>

                        <?php endif; ?>

                    </div>
                    <!-- End of topadvt -->

                </div>
                <!-- End of addmobilepadding-left -->
                <div id="pageHeader">

                    <div id="logo"><a href="/">Sakal</a></div>
                    <div class="details">
                        <?php smg980_newsletter_box(); ?>
                        <?php print $epaper_link; ?>
                        <span><?php print $dateline; ?></span>
                    </div>
                    <!-- END of .details -->

                    <div class="social-icon">

                        <?php print $socialgrid; ?>

                    </div>

                    <!-- END of .social-icon -->



                    <button id="mainNavToggle" type="button" class="navbar-toggle mobile-menu" data-toggle="collapse" data-target=".navbar-collapse">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <!-- END of #mainNavToggle -->



                </div>

                <!-- END of #pageHeader -->



                <div id="pageSubHeader">
    
                    <div id="mainNav" class="navbar-collapse">

                        <div class="head">

                            <img src="/sites/esakal/themes/smg980/logo.png" class="logo" />

                            <button class="hamburger-close navbar-toggle mobile-menu" data-toggle="collapse" data-target=".navbar-collapse">x</button>

                        </div>
                        <!-- End of .head -->

                        <ul class="menu nav navbar-nav">

                            <?php print render($primary_nav); ?>

                        </ul>
                        <!-- End of menu nav navbar-nav -->

                    </div>
                    <!-- End of navbar-collapse -->

                    <div class="social-icon">

                        <?php print $socialgrid; ?>

                    </div>
                    <!-- END of .social-icon -->

                    <div class="siteSearch">

                        <span class="icon glyphicon glyphicon-search pull-right cursor-pointer" aria-hidden="true" id="edit-submit-search-view" data-toggle="" aria-haspopup="true" aria-expanded="true">

                        </span>

                        <?php print $search_form; ?>

                    </div>

                    <!-- END of .searchdiv -->

                    <div class="voice-search">

<span class="icon glyphicon fa fa-microphone" role="application" aria-hidden="true" id="edit-submit-search-view" data-toggle="" aria-haspopup="true" aria-expanded="true">

</span>



</div>

                    

                </div>

                <!-- END of #pageSubHeader -->



                <div class="scrollable-navigation-bar"  id="mob-navigation">

                    <ul class="menu nav navbar-nav">

                        <?php

                        $scrollable_menu = menu_navigation_links('menu-scrollable-menu');

                        print theme('links__menu_scrollable_menu', array('links' => $scrollable_menu));

                        ?>
                        <?php print render($scrollable_menu); ?>



                    </ul>
                    <!-- End of .menu nav navbar-nav -->

                </div>
                <!-- End of .scrollable-navigation-bar -->
            </div>
            <!-- End of .pagewrapper -->
        <!-- </div> -->
        <!-- End of .row flex-container -->
    <!-- </header> -->
    <!-- End of  header here -->

    <div class="main-container <?php print $container_class; ?>">

            <!-- <div class="corona-dktp visible-lg-block visible-md-block hidden-sm hidden-xs">
                <a href="https://www.youtube.com/channel/UC-AY02VQo-F_trSeTKUu_QQ?view_as=subscriber" target="_blank"><img width="100%" src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/sankey_esakal/s3fs-public/coronavirus_img/corona-banner/GIF-Horizontal-970-x-125.gif"></a>

            </div>

            <div class="corona-mobile visible-xs-block visible-sm-block hidden-md hidden-lg">
                <a href="https://www.youtube.com/channel/UC-AY02VQo-F_trSeTKUu_QQ?view_as=subscriber" target="_blank"><img width="100%" src="https://sankey-esakal.s3.ap-south-1.amazonaws.com/sankey_esakal/s3fs-public/coronavirus_img/corona-banner/GIF-Horizontal-300-x-100.gif"></a>

            </div> -->

        <header role="banner" id="page-header">
            <?php if (!empty($site_slogan)) : ?>
            <p class="lead"><?php print $site_slogan; ?></p>
            <?php endif; ?>

            <?php print render($page['header']); ?>
        </header> 
        <!-- /#page-header -->
        <div class="row">
            <?php if (!empty($page['sidebar_first'])) : ?>
            <aside class="col-sm-3 nss-page-tpl" role="complementary">
                <?php print render($page['sidebar_first']); ?>
            </aside> 
            <!-- /#sidebar-first -->
            <?php endif; ?>
            <section <?php print $content_column_class; ?>>
                <?php if (!empty($page['highlighted'])) : ?>
                <div class="highlighted jumbotron">
                    <?php print render($page['highlighted']); ?>
                </div>
                <?php endif; ?>
                <?php
                // if (!empty($breadcrumb)): 
                if ($breadcrumb != "") :
                    print "<div class='breadcrumb-details'>";
                    print $breadcrumb;
                    print "</div>";
                endif;
                ?>
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if (!empty($title)) : ?>
                <h1 class="page-header"><?php print $title; ?></h1>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php print $messages; ?>
                <?php if (!empty($tabs)) : ?>
                <?php print render($tabs); ?>
                <?php endif; ?>
                <?php if (!empty($page['help'])) : ?>
                <?php print render($page['help']); ?>
                <?php endif; ?>
                <?php if (!empty($action_links)) : ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
                <?php endif; ?>
                <?php print render($page['content']); ?>
            </section>
            <!-- End of Section -->
                <?php if (!empty($page['sidebar_second'])) : ?>
                <aside class="col-sm-3" role="complementary">
                    <?php print render($page['sidebar_second']); ?>
                </aside>
                 <!-- /#sidebar-second -->
                <?php endif; ?>
        </div>
        <!-- End of Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bottomadvt">
                <div> <?php if (!empty($page['top_footer'])) : ?>
                    <?php print render($page['top_footer']); ?>
                    <?php endif; ?>
                </div>
            </div>
            <!-- End of bottomadvt -->
        </div>
        <!-- End of row -->
    </div>
    <!-- End of main-container -->
    <?php if (!empty($page['left_jacket'])) : ?>
    <!-- Jacket Advt section for left and right side start here-->
    <div id="left_jacket" class="left-jacket">
        <?php print render($page['left_jacket']); ?>
    </div>
    <?php endif; ?>
    <?php if (!empty($page['right_jacket'])) : ?>
    <div id="right_jacket" class="right-jacket">
        <?php print render($page['right_jacket']); ?>
    </div>
    <!-- Jacket Advt section for left and right side ends here-->
    <?php endif; ?>
    <div class="container mnopadding footercontainer">
        <footer class="footer container-fluid">
            <?php if (!empty($page['footer'])) : ?>
            <?php print render($page['footer']); ?>
            <?php endif; ?>

            <?php if (!empty($page['sub_footer'])) : ?>
            <?php print render($page['sub_footer']); ?>
            <?php endif; ?>
        </footer>
        <?php if (!empty($page['bottom_footer'])) : ?>
        <?php print render($page['bottom_footer']); ?>
        <?php endif; ?>
    </div>
    <?php if ($show_loadbanner == true && arg(0) == "node" && is_numeric(arg(1))) { ?>
</div>
<!-- End of onflycontainer -->
<?php } ?>
<?php 
     include(drupal_get_path('theme', 'smg980').'/templates/system/TopScroll.tpl.php');
         ?>