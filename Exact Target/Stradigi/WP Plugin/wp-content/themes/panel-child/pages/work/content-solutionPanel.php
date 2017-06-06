<?php
$post_header = get_post(1313);
$titleMobile = explode(" ", $post_header->post_title);
$title = $post_header->post_title;
$content = $post_header->post_content;
$text_1 = $post_header->text_1;
$text_2 = $post_header->text_2;
$text_3 = $post_header->text_3;
$text_4 = $post_header->text_4;

$learnmore = 'Learn more about our services';
$buttonNavLink = 'contact';
$buttonText = 'Contact Us';


$header_image = get_header_image();
$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id($post_header->ID), 'large');
$featuredImage2 = wp_get_attachment_image_src($post_header->mainImage2, 'large');

$solutionsHTMLstr1 = '';
$solutionsHTMLstr2 = '';

//Box 1
$solutionsHTMLstr1 .= createPointsBox($post_header->section1_title, $post_header->section1_pointlist, 'mL', $post_header->section1_text, $post_header->section1_icon);

//Box 2
$solutionsHTMLstr1 .= createPointsBox($post_header->section2_title, $post_header->section2_pointlist, 'mL', $post_header->section2_text, $post_header->section2_icon);

//Box 3
$solutionsHTMLstr2 .= createPointsBox($post_header->section3_title, $post_header->section3_pointlist, 'mR', $post_header->section3_text, $post_header->section3_icon);

//Box 4
$solutionsHTMLstr2 .= createPointsBox($post_header->section4_title, $post_header->section4_pointlist, 'mR', $post_header->section4_text, $post_header->section4_icon);

$solutionsHTMLMobilstr = '';
$solutionsHTMLMobilstr .= createPointsBox_titleonly($post_header->section1_title);
$solutionsHTMLMobilstr .= createPointsBox_titleonly($post_header->section2_title);
$solutionsHTMLMobilstr .= createPointsBox_titleonly($post_header->section3_title);
$solutionsHTMLMobilstr .= createPointsBox_titleonly($post_header->section4_title);

function createPointsBox($title, $pointslist, $css, $text, $iconID = '') {
    if (strlen($iconID) > 0) {
        $icon = wp_get_attachment_image_src($iconID, 'large');
    }
    $pointsListArr = explode(';', $pointslist);
    $HTMLstr = '<div class="pointBox ' . $css . '">';
    if (strlen($iconID) > 0) {
        $HTMLstr .= '<img class="icon" src="' . $icon[0] . '" alt=""/>';
    }
    $HTMLstr .= '<span class="title">' . $title . '</span>';
    $HTMLstr .= '<span class="text">' . $text . '</span>';

    if (is_array($pointsListArr)) {
        foreach ($pointsListArr as $key => $value) {
            $HTMLstr .= '<span class="point">' . $value . '</span>';
        }
    }
    $HTMLstr .= '</div>';

    return $HTMLstr;
}

function createPointsBox_titleonly($title) {

    $HTMLstr = '<div class="pointBox">';
    $HTMLstr .= '<span class="point">' . $title . '</span>';
    $HTMLstr .= '</div>';

    return $HTMLstr;
}



?>

<div  class="mainPanel  solutionsPanel"  >
    <div class="contentWidth">  
        <div class="titlePanel">
            <div class="text1 orangeText "><?php echo $text_1 ?></div> 
            <div class="title"><?php echo $text_2 ?></div>
            <div class="orangeBorderContainer"><div class="orangeSmallBorder"></div></div>
            <div class="text"><?php echo $text_3 ?></div>   
        </div>
        <div class="display-table ">
            <div class="display-table-cell img">
                <div class="mainImage"   style="background-image:url('<?= $featuredImage[0] ?>')"></div>
                <!--<img src="<?php echo $featuredImage[0]; ?>" alt="" class="largeImage"/>-->
            </div> 
            <div class="display-table-cell content">
                <div class="listsBoxWhite clearfix" >
                    <?php echo $solutionsHTMLstr1; ?>
                </div>
            </div> 
   
        </div>
        <div class="marginSpace"></div>
        <div class="display-table ">
            <div class="display-table-cell content">
                <div class="listsBoxWhite clearfix" >
                    <?php echo $solutionsHTMLstr2; ?>
                </div>
            </div> 
            <div class="display-table-cell img">
                <div class="mainImage"   style="background-image:url('<?= $featuredImage2[0] ?>')"></div>
                <!--<img src="<?php echo $featuredImage2[0]; ?>" alt="" class="largeImage"/>-->
            </div>
        </div> 
    </div> 
    <!--    <div class="contentWidth list">
            <div class="listsBox clearfix" >
    <?php echo $solutionsHTMLstr; ?>
            </div>
        </div>-->
    <div class="contentWidth ">
        <div class="buttonContainer">
            <div class="title"><?php echo $learnmore; ?></div>
            <a href="<?php echo $buttonNavLink; ?>">
                <button class="navButton arrow"><?php echo $buttonText; ?></button>
            </a>
        </div>
    </div>

</div>



