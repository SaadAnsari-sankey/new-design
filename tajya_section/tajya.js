function time_diff(e) {
    var i = Date.now();
    current_time = Math.floor(i / 1e3);
    var t = current_time - e,
        a = Math.floor(t / 86400),
        s = Math.floor(t / 3600),
        l = Math.round(t / 60 % 60);
    return !(a >= 1) && (0 != s || 0 != l || void 0)
}

function tajya_batmya(e) {
    var i = [];
    var j = [];
    var cnt = 0;
    var rowcnt = 0;

    jQuery.each(e, function(e, t) {
        var a = time_diff(t.timestamp_published),
            title = t.title,
            description = t.description,
            subheadline = t.subheadline,
            date = t.date_published,
            link = t.link,
            image = t.image;

        if (cnt < 6) {
            if (cnt == 0) { //first row first container
                i.push("<div class=\"left-box-top w-100 d-flex align-items-end justify-content-center\" style=\" background-image: url(" + image + ") !important;\">");
                i.push("<div class=\"row m-0 w-100\">");
            }
            if (cnt == 2) { //second container
                i.push("<div class=\"left-box-bottom w-100 d-block d-md-flex flex-column align-items-center\">");
            }
            if (cnt % 2 == 0 && cnt > 0) { //second and third row
                i.push("<div class=\"row m-0 h-md-50 w-100\">");
            }

            //start data
            if (cnt == 0) {
                i.push("<div class = \"my-1 my-md-0 my-lg-1 section-type-1-image d-none d-md-block\"></div>");
                i.push("<div class=\"n1 my-md-1 py-2 py-md-2 right-border-zero pt-md-3 pl-md-4\"style=\"background-color: white;\">");
            }
            if (cnt == 1) {
                i.push("<div class=\"n2 py-2 my-md-1 py-md-2 pr-0 pt-md-3\" style=\"background-color: white;\">");
            }
            if (cnt == 2) {
                i.push("<div class=\"nl py-2 my-md-1 py-md-2 pl-lg-0 right-border-1\">");
            }
            if (cnt == 3) {
                i.push("<div class=\"nr my-md-1 py-2 py-md-2 pr-lg-0\">");
            }
            if (cnt == 4) {
                i.push("<div class=\"row3nl my-md-1 py-2 py-md-2 pl-lg-0 right-border-2\">");
            }
            if (cnt == 5) {
                i.push("<div class=\"row3nr my-md-1 py-2 py-md-2 pr-lg-0\">");
            }

            i.push("<div class=\"news-section-title mb-md-2\">");
            i.push(subheadline);
            i.push("</div>");
            i.push("<a href = \"" + link + "\" target=\"_blank\">");
            i.push("<div class=\"news-title mb-2 mb-md-1\">");
            i.push(title);
            i.push("</a>");
            i.push("</div>");
            i.push("<div class=\"col-lg-1 col-md-0 my-1 my-md-0 my-lg-1 section-type-1-image mb-md-3 d-md-none\"></div>");
            // i.push("</div>");
            // i.push("</div>");
            if (cnt == 0) {
                // i.push("<div class=\"source-container mb-2 d-md-none\">");
                // i.push("source : संतोषचं आयुष्य,टप्प्याटप्प्यानं वळणं घेत घेत कुणीकडे गेलं हे त्याच्या सगळ्या हकीकतीवरून कळलं.संतोषचं आयुष्य, टप्प्याटप्प्यानं");
                // i.push("</div>");
            }
            i.push("<div class=\"news-description mb-1 mb-md-0\">");
            i.push(description);
            i.push("</div>");
            i.push("<div class=\"news-footer d-block d-md-none mb-md-2\">");
            i.push(date);
            i.push("</div>");
            i.push("</div>");

            //end data

            if (cnt % 2 != 0) { //end rows
                i.push("</div>");
            }
            if (cnt == 1 || cnt == 5) { //end containers
                i.push("</div>");
            }
        } else if (cnt >= 6 && cnt < 8) {
            j.push("<div class=\"col-md-6 col-sm-12 pl-lg-0 mb-lg-2 my-1 mt-md-0\">");

            j.push("<div class=\"card-img-top mb-2\">");
            j.push("<img class=\"w-100 h-100\" src =\"" + image + "\">");
            j.push("</div>");

            j.push("<div class=\"mobile-overlap p-2 pl-3 p-md-0\">");

            j.push("<div class=\"news-section-title mb-2\">");
            j.push(subheadline);
            j.push("</div>");

            j.push("<div class=\"news-title mb-md-2\">");
            j.push(title);
            j.push("</div>");

            j.push("<div class=\"news-description mb-1\">");
            j.push(description);
            j.push("</div>");

            j.push("<div class=\"news-footer mb-3 mb-md-1\">");
            j.push(date);
            j.push("</div>");

            j.push("</div>");

            j.push("</div>");
        }
        ++cnt;
        console.log(cnt);
        // "home_tajyabatamya_news_ad" == t.title ? i.push("<div class='newsindetail'><div class='views-field views-field-title'><span class='field-content'><div id='div-gpt-ad-1510051529483-7'><script>googletag.cmd.push(function() { googletag.display('div-gpt-ad-1510051529483-7'); });<\/script></div></span></div></div>") : a ? 1 == l ? i.push("<div class='newsindetail'><div class='views-field views-field-title'><a href='" + t.link + "' data-toggle='tooltip' title='" + s + "' target='_blank'><span class='tajya-json-premium field-content'>" + t.title + "</span><span class='tajya-batmya-right-arrow tb1'></span></a></div></div>") : i.push("<div class='newsindetail'><div class='views-field views-field-title'><a href='" + t.link + "' data-toggle='tooltip' title='" + s + "' target='_blank'><span class='field-content'>" + t.title + "</span><span class='tajya-batmya-right-arrow tb1'></span></a></div></div>") : 1 == l ? i.push("<div class='newsindetail'><div class='views-field views-field-title'><span class='field-content fullwidth'><a href='" + t.link + "' data-toggle='tooltip' title='" + s + "' target='_blank'><span class='tajya-json-premium field-content'>" + t.title + "</span><span class='tajya-batmya-right-arrow else-tb'></span></span></a></div><div class='views-field views-field-changed'><span class='field-content hidden'> </span></div></div>") : i.push("<div class='newsindetail'><div class='views-field views-field-title'><span class='field-content fullwidth'><a href='" + t.link + "' data-toggle='tooltip' title='" + s + "' target='_blank'><span class='field-content'>" + t.title + "</span><span class='tajya-batmya-right-arrow else-tb'></span></span></a></div><div class='views-field views-field-changed'><span class='field-content hidden'> </span></div></div>")
    });
    var t = i.join("");
    var t2 = j.join("");
    jQuery("#tajya_news_data").html(t);
    jQuery("#tajya_news_row2").html(t2);
}

jQuery(document).ready(function() {
    jQuery.getJSON('https://sankey-esakal.s3.ap-south-1.amazonaws.com/esakal-new-design/json/tajya.json', function(result) {
        tajya_batmya(result);
        console.log(result);
    });
});