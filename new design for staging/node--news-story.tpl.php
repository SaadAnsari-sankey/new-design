<!-- in-read video ads by aarti -->
<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/115394472/web_demo_home_in_image_native_ad_unit_fluid_testing', [1, 1], 'div-gpt-ad-1579683343639-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- /115394472/web_demo_home_in_image_native_ad_unit_fluid_testing -->
<div id='div-gpt-ad-1579683343639-0' style='width: 1px; height: 1px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1579683343639-0'); });
  </script>
</div>

<!-- Page: News details-->
<!-- News details - Header-->

<div class="row container-fluid">   
  <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 detail_header">
  
  
    <h1 class="detail_title"><?php print $node->title; ?></h1>
    <!-- <div class="borderbottom"></div> -->
    <div class="new-borderbottom"></div>
    <div class="col-lg-12 container-fluid new-sub-header">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 new-writer-detail">
        <div class="writer_details">
          <div class="author_details">
            <?php print render($content['field_agency']); ?>
            <?php print render($content['field_external_author']); ?>
            <?php print render($content['field_internal_author']); ?>
          </div>
          <div class="time_details">
            <?php
            $today_midnight = strtotime('today midnight');
            $node_date = intval($node->changed);
            if ($node_date < $today_midnight) {
              $time_string = format_date($node_date, $type = 'custom', 'l, j F Y', $langcode = NULL);
            }
            else {
              $time_string = format_date($node_date, $type = 'custom', 'h.i A', $langcode = NULL);
            }
            print $time_string;
            ?>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10 container-font-change">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 new-vukkle-powerbar">
            <div class="vuukle-powerbar detailpage add-pad"></div>
          </div>
        </div>
      </div>
     <div class="col-xs-2 font-buttons">
    <div class="font-change-buttons">
   <button data-toggle="tooltip" title="फॉन्ट वाढवा" data-placement="top"  id="incfont" class="btn-plus button buttonfont">A<sup>+</sup></button>
   <button data-toggle="tooltip" title="फॉन्ट कमी करा" data-placement="top" id="decfont" class="btn-minus  button buttonfont">A<sup>-</sup></button>
   </div>
  </div>
    
</div>
     
  </div>
</div> 
<!-- vukkle powerbar ends here-->
<!-- News details - Cover image-->
<!-- node--news-story.tpl.php -->
<div class="row detail_cover_image">
  <!-- news summary section here  -->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 new-adjust">
    <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 summary_height"> -->
 

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 1902 lesscardpadding">  
      <div class="summary_height">
      <p  class="new-div-content-summary"> <?php
        if (!empty($node->body[$node->language][0]['summary'])) {
          $summary_text = $node->body[$node->language][0]['summary'];
        }
        else {
          $summary = check_markup($node->body[$node->language][0]['value'], $node->body[$node->language][0]['format'], $node->language);
          $summary_text = text_summary($summary, $node->body[$node->language][0]['format']);
        }
        if (!empty($summary_text)) {
          print $summary_text;
        }
        ?> </p>
        </div>
    </div>
    <!-- <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 new-newsdetails-coverimg-div"> -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 new-newsdetails-coverimg-div lesscardpadding">    
      <?php print render($content['field_image']); ?>
      
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 new-detailed-news-content">
          <?php
          $show_detailad = variable_get('show_detailad');
          $advertise_script = variable_get("detailpage_ad");
          $ad_string = '</p><div id="' . $advertise_script['divid'] . '" class = "in-article-ad">' . $advertise_script['ad_script'] . '</div>';
          if ($show_detailad == 1) {
            $new_body = str_replace(">>", ">", str_replace("<<", "<", preg_replace('/<\/p>/', $ad_string, render($content['body']), 1)));
            echo $new_body;
          }
          else
            print render($content['body']);
          ?>
<br>
<a style="font-size: 16px;" href="https://play.google.com/store/apps/details?id=com.sakal.esakal"> स्पष्ट, नेमक्या आणि विश्वासार्ह बातम्या वाचण्यासाठी 'सकाळ'चे मोबाईल अॅप डाऊनलोड करा</a>
          <?php if (!empty($content['news_story_web_title'])) : ?>
            <div class='news-story-web-title'>Web Title:
              <span>
                <?php print render($content['news_story_web_title']); ?>
              </span>
            </div>
          <?php endif; ?>
          <!-- <div class=" row borderbottom"></div> -->
          <?php
          $advertise_script1 = variable_get("ndetail_inarticle_bottom_ad");
          $ad_inarticle = '<div id="' . $advertise_script1['divid'] . '">' . $advertise_script1['ad_script'] . '</div> <br>';
          echo $ad_inarticle;
          ?>
        </div>
	<!-- News details - tags-->
        <?php if (!empty($content['field_imported_functional_tags']) || !empty($content['field_topic_tags'])  ): ?>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 new-tags-section">
            <div class="tag_details">
              <?php if (!empty($content['field_imported_functional_tags'])) : ?>
                <div class="tag_header"><?php print t("Tags"); ?> </div>
                <div class="tag_contents clearfix">
                  <?php print render($content['field_imported_functional_tags']); ?>
                </div>
              <?php endif; ?>
              <?php if(!empty($content['field_topic_tags'])): ?>
                <div class="tag_header"><?php print t("टॉपिकस"); ?> </div>
                <?php print render($content['field_topic_tags']); ?>
              <?php endif;?>
            </div>
            <!-- END of .tag_details -->
          </div>
          <!-- <div class="borderbottom"></div> -->
        <?php endif; ?>

        <div class=" related_news">
          <div class="col col-lg-12 col-sm-12 col-md-12 col-xs-12 mnopadding new-card-related-news">
          <?php print  $related_news; ?>
        </div>
    </div>
  </div>
</div>
<!-- News details - News summary-->
<div class="row detailnews_details">
  <!-- new css classes added here with new prefix -->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 new-newsdetails-content">
    <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 summary_height"> -->
    <!-- <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs"> -->
    <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">    
      <!-- <p  class="new-div-content-summary"> < ? php
        /*if (!empty($node->body[$node->language][0]['summary'])) {
          $summary_text = $node->body[$node->language][0]['summary'];
        }
        else {
          $summary = check_markup($node->body[$node->language][0]['value'], $node->body[$node->language][0]['format'], $node->language);
          $summary_text = text_summary($summary, $node->body[$node->language][0]['format']);
        }
        if (!empty($summary_text)) {
          print $summary_text;
        }*/
        ?>
        </p> -->
    </div>
    <!-- News details - Detailed content -->
    <!-- <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 news_summary mnopadding new-newsdetails-detailed-content"> -->
    <!-- <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 news_summary mnopadding new-newsdetails-detailed-content">    
       
      

    

    </div> -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 new-news-story-vuukle-card">
      <div id="vuukle-emote" class ="vuukle-emoticons new-vuukle-emoji-section" style = "padding: 12.5px;"></div>
    </div>
    <div class="gallarycontainer">
      <?php
      $view = views_get_view('detail_widgets');
      $view->set_display('news_story_image_gallery');
      $view->set_arguments(array($node->nid));
      $view->execute();
      ?>
      <?php if (!empty($view->result)) { ?>
        <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
          <div class="header_name"> <?php print t('फोटो गॅलरी'); ?> </div>
        </div>
        <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 photogallary nopadding mnopadding">
          <div class="thumbnail">
            <span class="photogalleryimg">
              <?php print $view->preview(); ?>
            </span>
          </div>
          <div class="modal" id="modal-gallery">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" type="button" data-dismiss="modal">*</button>
                </div>
                <div class="modal-body">
                  <div class="carousel" id="modal-carousel">&nbsp;</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <?php
      $view = views_get_view('detail_widgets');
      $view->set_display('news_story_video_gallery');
      $view->set_arguments(array($node->nid));
      $view->execute();
      ?>
      <?php if (!empty($view->result)) { ?>
        <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="header_name"><?php print t('व्हिडीओ गॅलरी'); ?></div>
        </div>
        <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 videogallary nopadding mnopadding">
          <div class="thumbnail">
            <span class="videogalleryimg">
              <?php print $view->preview(); ?>
            </span>
          </div>
        </div>
      <?php } ?>
      <div class="col col-lg-12 col-sm-12 col-md-12 col-xs-12">
        <div class="borderbottom"></div>
      </div>
    </div>
    <?php
    $advertise_script = variable_get("ndetail_out_of_page1");
    $ad_out_of_page = '<div id="' . $advertise_script['divid'] . '">' . $advertise_script['ad_script'] . '</div> <br>';
    $advertise_script = variable_get("ndetail_out_of_page2");
    $ad_out_of_page .= '<div id="' . $advertise_script['divid'] . '">' . $advertise_script['ad_script'] . '</div>';
    echo $ad_out_of_page;
    ?>
    <?php
    $tags = $content['field_imported_functional_tags']['#items'][0]['value'];
    ?>
    <!-- new class new-vuukle-body added -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mnopadding new-vuukle-comments-card"  style = "overflow: hidden;">
      <div id="vuukle-comments" class="new-vuukle-body col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "margin:20px 0;overflow: hidden;"></div>
      <script>
        var VUUKLE_CONFIG = {
          apiKey: "8351539f-c8cc-4646-aed0-d7f87bf54b00",
          articleId: "<?php echo $node->nid; ?>",
          tags: "<?php echo($tags); ?>",
          title: "<?php print str_replace('"', '', str_replace("'", "", $node->title)); ?>",
          comments: {
            transliteration: {
              language: 'mr',
              enabledByDefault: true
            }
          }
        };
        // DON'T EDIT BELOW THIS LINE
        (function () {
          var d = document,
            s = d.createElement('script');
          s.src = '//cdn.vuukle.com/platform.js';
          (d.head || d.body).appendChild(s);
        })();
      </script>
    </div>
    <!-- <div class="row related_news">related news here
      <div class="col col-lg-12 col-sm-12 col-md-12 col-xs-12 mnopadding">
        <?php
        //print views_embed_view('search_view', 'related_news', $node->nid);
        ?>
      </div>
    </div> -->
  </div>
  <!-- right side column ends here-->
  
</div>