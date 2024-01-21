<?php
$seoUrl = 'https://susanzhuanglies.com/';
$seoSiteName = 'Scammer Susan Zhuang for City Council District 43';
$seoDesc = "Scammer Susan Zhuang's campaign is full of scams, including the biggest scam, which is the fact that she is funded by the CCP - the Chinese Communist Party. She and her supporter Communist Colton has tricked both Chinese and American citizens into thinking she's looking out for their best interests.";
$shareImg = $seoUrl.'images/scam_susan_share.png';

global $la;

if($_GET['la'] == 'CN') {
    $la = 'CN';
}
else {
    $la = 'EN';
}
 
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

	<title><?=$seoSiteName?></title>
	<meta name="description" content="<?=$seoDesc?>">
	<link rel="canonical" href="<?=$seoUrl?>">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="website">
  <meta property="og:title" content="<?=$seoSiteName?>">
	<meta property="og:description" content="<?=$seoDesc?>">
	<meta property="og:url" content="<?=$seoUrl?>">
	<meta property="og:site_name" content="<?=$seoSiteName?>">
	<meta property="og:image" content="<?=$shareImg?>">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta property="og:image:type" content="image/jpeg">
	<meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?=$seoSiteName?>">
	<meta name="twitter:description" content="<?=$seoDesc?>">
	<meta name="twitter:image" content="<?=$shareImg?>"> 

	<!-- / Yoast SEO plugin. -->
	<script type="application/ld+json" class="yoast-schema-graph">
   </script>
	<!-- / Yoast SEO plugin. -->

<link rel="dns-prefetch" href="https://use.typekit.net/">
<link rel="dns-prefetch" href="https://kit.fontawesome.com/">
<link rel="stylesheet" id="wp-block-library-css" href="./css/style.min.css" type="text/css" media="all">

<link rel="stylesheet" id="font-css" href="./css/rtu1nhg.css" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-css" href="./css/a4f2ef1f09.css" type="text/css" media="all">

<link rel="stylesheet" id="theme-css" href="./css/theme.css" type="text/css" media="all">

<script type="text/javascript" src="./css/jquery.min.js.download" id="jquery-core-js"></script>
<script type="text/javascript" src="./css/jquery-migrate.min.js.download" id="jquery-migrate-js"></script>

</head>

<body title="Scammer Susan Zhuang" class="home page-template page-template-templates page-template-home page-template-templateshome-php page page-id-2">
  <header>
 
    <nav>
      <ul id="menu-main" class="">
        <!--<li id="menu-item-10" class="btn menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="#">Donate</a></li>-->
        <li><a href="./">En</a> <a href="./?la=CN">中文</a></li>
      </ul>    
    </nav>


<?php
$headline = array(
  'EN' => "Susan Zhuang the Scammer",
  'CN' => "骗子庄苏珊"
);
$intro = array(
  'EN' => "Scammer Susan Zhuang's campaign is full of scams, including the biggest scam, which is the fact that she is funded by the CCP - the Chinese Communist Party. She and her supporter Communist Colton has tricked both Chinese and American citizens into thinking she's looking out for their best interests.",
  'CN' => "骗子庄苏珊的竞选活动充满了骗局，其中最大的一个骗局，就是她的资金来源是中共——中国共产党。 她和她的支持者共产主义科尔顿欺骗了中国和美国公民，让他们认为她在照顾他们的最大利益。"
)
?>

    <h1 title="Scammer Susan Zhuang">
      <span>&nbsp;<?=$headline[$la] ?>&nbsp;</span>
    </h1>
    <p><?=$intro[$la]?></p>

    <img width="2048" height="1365" src="./images/scam_susan_zhuang.jpg" class="attachment-full size-full" alt="" decoding="async" fetchpriority="high" srcset="./images/scam_susan_zhuang.jpg 2048w, ./images/scam_susan_zhuang.jpg 300w, ./images/scam_susan_zhuang.jpg 1024w, ./images/scam_susan_zhuang.jpg 768w, ./images/scam_susan_zhuang.jpg 1536w" sizes="(max-width: 2048px) 100vw, 2048px">  </header>
<main>
  <div class="lies">
    <div class=" arrow">
      <img src="./images/arrow.webp">
    </div>

<?php
$scamSubheadline = array(
  'EN' => "Susan's Scam List",
  'CN' => "苏珊的诈骗名单",
);
?>

    <h2 id="lies">&nbsp;<?=$scamSubheadline[$la] ?>&nbsp;</h2>
    <ul>

      <?php
      $scamMenu = array(
        'covid-communism' => array(
          'EN' => 'Covid Communism',
          'CN' => '新冠共产主义'
        ),
        'residency' => array(
          'EN' => "Susan's Residency Scam",
          'CN' => '苏珊的居住骗局'
        ),
        'republican-values' => array(
          'EN' => 'REPUBLICAN VALUES',
          'CN' => '共和价值观'
        ),
        'chatgpt-chump' => array(
          'EN' => 'AI ANSWERS',
          'CN' => '人工智能解答'
        ),
        'commie-colton' => array(
          'EN' => "COLTON'S COMMUNIST LIES",
          'CN' => "COLTON的共产主义谎言"
        ),
        'susan-support' => array(
          'EN' => "SUSAN'S SUPPORT",
          'CN' => '苏珊的支持'
        ),
      );

      foreach($scamMenu as $scam => $menu) {
        echo '<li><a target="_self" href="#'.$scam.'">'.$menu[$la].'</a></li>
        ';
      }
      ?>
        
        </ul>
  </div>

  <?php
  function showLieTruth($content) {
    global $la;
    
    $textScam = array('EN' => 'Scam', 'CN' => '骗局');
    $textTruth = array('EN' => 'Truth', 'CN' => '真相');

    echo '<article id="'.$content['id'].'">
      
      <div class="header">
        <img src="./images/x.png">
        <h3>'.$content['title'].'</h3>
      </div>
      <div class="lie">
        <h4>&nbsp;'.$textScam[$la].'&nbsp;</h4>
        '.$content['lie'][$la].'
      </div>
      <div class="truth">
        <h4>&nbsp;'.$textTruth[$la].'&nbsp;</h4>
        '.$content['truth'][$la].'
        '.$content['source'].'
      </div>
    </article>';

  }

  $content = array(
    'id' => 'covid-communism',
    'title' => 'Covid19 Communism',
    'lie' => array(
      'EN' => '<p>Susan Zhuang claims to have helped New Yorkers during the Covid19 Crisis</p>', 
      'CN' => 'Susan Zhuang 声称在 Covid19 危机期间帮助了纽约人'
    ),

    'truth' => array(
      'EN' => '<p>Susan was in Columbus, Indiana the whole time. She secured 8,000 masks from China, but it was for residents of Columbus, Indiana, not in Bensonhurst like she claimed. </p>',
      'CN' => '苏珊一直在印第安纳州哥伦布。 她从中国获得了 8000 个口罩，但这些口罩是为印第安纳州哥伦布市的居民提供的，而不是像她声称的那样是在本森赫斯特。'
    ),

    'source' => '
    <p>Source: <a target="_BLANK" href="https://nypost.com/2023/03/25/nyc-council-candidate-ripped-for-lying-about-helping-nyers-during-covid/">https://nypost.com/2023/03/25/nyc-council-candidate-ripped-for-lying-about-helping-nyers-during-covid/</a></p>

    <p>&nbsp;</p>
    
    <p><a target="_BLANK" href="https://nypost.com/2023/03/25/nyc-council-candidate-ripped-for-lying-about-helping-nyers-during-covid/"><img src="./images/covid_communism.png" alt="Susan Zhuang Scam" width="50%" /></a></p>', 
  );

  showLieTruth ($content); 

  $content = array(
    'id' => 'residency',
    'title' => 'Residency Scam',

    'lie' => array(
      'EN' => '<p>Susan Zhuang Claims to be a New Yorker</p>', 
      'CN' => '<p>Susan Zhuang 自称是纽约人</p>'
    ),
    'truth' => array(
      'EN' => '<p>Scammer Susan has been living in Indiana for several years. She changed her address from Indiana to NY no earlier than November 5, 2022. She has stayed in NY for a very short time before running for City Council. She has no understanding of New York, especially Brooklyn. </p>', 
      'CN' => '<p>骗子苏珊已经在印第安纳州生活了几年。 她不早于 2022 年 11 月 5 日将地址从印第安纳州更改为纽约州。在竞选市议会议员之前，她在纽约州停留了很短的时间。 她对纽约，尤其是布鲁克林不了解。 </p>'
    ),
    
    'source' => '
    <p>Source: <a target="_BLANK" href="https://twitter.com/yingtanforny/status/1716585186526187975">https://twitter.com/yingtanforny/status/1716585186526187975</a></p>

    <p>&nbsp;</p>
    ', 
  );
    
  showLieTruth ($content); 

  
  $content = array(
    'id' => 'republican-values',
    'title' => 'Republican Values',
    'lie' => array(
      'EN' => '<p>Susan Zhuang claims to have Republican Values even though she\'s running as a Democrat</p>', 
      'CN' => '<p>苏珊·庄 (Susan Zhuang) 声称自己拥有共和党价值观，尽管她以民主党身份参选</p>'
    ),

    'truth' => array(
      'EN' => '<p>Susan Zhuang is running as a Democrat because she is backed by William Colton, who is a Democrat. She is claiming to have Republican values, which makes no sense, given her situation. She is trying to appeal to the values of the Asian community in District 43. But she is funded by the CCP, which makes her a communist, which consequently, makes her an enemy of all Asian Americans.</p>', 
      'CN' => '<p>苏珊·庄 (Susan Zhuang) 作为民主党人参选，因为她得到了民主党人威廉·科尔顿 (William Colton) 的支持。 她声称拥有共和党价值观，但考虑到她的处境，这是没有道理的。 她试图迎合43区亚裔社区的价值观。但她受到中共的资助，这使她成为一名共产主义者，从而使她成为所有亚裔美国人的敌人。</p>'
    ),

    'source' => '
      <p>Source: <a target="_BLANK" href="https://nypost.com/2023/06/17/video-shows-brooklyn-dem-council-candidate-is-wannabe-gop/">https://nypost.com/2023/06/17/video-shows-brooklyn-dem-council-candidate-is-wannabe-gop/</a></p>', 
  );

  showLieTruth ($content); 


  $content = array(
    'id' => 'chatgpt-chump',
    'title' => 'AI Answers',
    'lie' => array(
        'EN' => '<p>Susan Zhuang is a hard worker who does her own work</p>', 
        'CN' => '<p>庄苏珊是一个勤奋的人，做好自己的工作</p>'
    ),
    'truth' => array(
        'EN' => '<p>Susan Zhuang admitted to using AI to help her answer basic questions. Although she did not lie, it is still scammy to have her use AI instead of answering questions herself.</p>

        <p>She was not able to answer a basic question like "What makes a New Yorker?" It\'s no surprise she can\'t answer it since she\'s a resident of Indiana, and before that, a resident of Communist China. This chatgpt chump has never been a New Yorker.</p>', 
        'CN' => '<p>庄苏珊承认使用人工智能来帮助她回答基本问题。 虽然她没有撒谎，但让她使用人工智能而不是自己回答问题，这仍然是骗人的。</p>

        <p>她无法回答诸如“什么是纽约人？”之类的基本问题。 她无法回答这个问题并不奇怪，因为她是印第安纳州的居民，而在此之前，她是共产主义中国的居民。 这个聊天傻瓜从来都不是纽约人。</p>'
    ),
    
    'source' => '
    <p>Source: <a target="_BLANK" href="https://nypost.com/2023/12/16/metro/nyc-councilwoman-elect-susan-zhuang-admits-to-quietly-using-ai-to-communicate-with-the-public-answer-media-questions/amp/">https://nypost.com/2023/12/16/metro/nyc-councilwoman-elect-susan-zhuang-admits-to-quietly-using-ai-to-communicate-with-the-public-answer-media-questions/amp/</a></p>', 
  );

  showLieTruth ($content); 


  $content = array(
    'id' => 'commie-colton',
    'title' => 'WILLIAM COLTON THE COMMUNIST',
    'lie' => array(
        'EN' => '<p>William Colton wrote a letter to voters that say "Susan\'s opponent is spreading smears funded by wealth pro-homeless shelter business groups and radical defund NYPD activists from Queens."</p>', 
        'CN' => '<p>威廉·科尔顿给选民写了一封信，称“苏珊的对手正在散布由财富支持无家可归者收容所商业团体资助的诽谤，并从皇后区撤资激进的纽约警察活动人士。</p>'
    ),
    'truth' => array(
        'EN' => '<p>In the letter, Colton refers to Susan\'s opponent, Ying Tan, who is running for the Republican Party. There is no evidence Ying Tan is funded by the so called wealthy pro-homeless shelter groups, which doesn\'t exist nor does it make sense. Also she was not funded by radical defund NYPD activists, as that is what Democrats do. Ironically, Colton is the one who supports defunding the police.</p>', 
        'CN' => '<p>科尔顿在信中提到了苏珊的对手、正在竞选共和党的谭颖。 没有证据表明鹰潭是由所谓的富裕的无家可归者收容所团体资助的，这种说法不存在，也没有意义。 此外，她也没有得到纽约警察局激进分子的资助，而民主党正是这么做的。 具有讽刺意味的是，科尔顿是支持取消警察经费的人</p>'
    ),
 
    'source' => '
    <p>Source: <a target="_BLANK" href="https://twitter.com/jccoltin/status/1721540043674681847">https://twitter.com/jccoltin/status/1721540043674681847</a></p>

    <p>&nbsp;</p>
    
    <a target="_BLANK" href="https://twitter.com/jccoltin/status/1721540043674681847"><img src="./images/scam_colton.jpg" alt="Susan Zhuang Scam" /></a>', 
  );

  showLieTruth ($content); 


  $content = array(
    'id' => 'susan-support',
    'title' => 'SUSAN\'S SUPPORT IS COMMUNIST COLTON',
    'lie' => array(
        'EN' => '<p>Being an American of Chinese descent, Susan is a shining example someone who earned her position at the City Council</p>', 
        'CN' => '<p>作为一名华裔美国人，苏珊是在市议会中获得职位的光辉榜样</p>'
    ),
    'truth' => array(
        'EN' => '<p>Susan cheats and takes shortcuts whenever she can. Communist Colton has backed Susan from the beginning of her campaign until the end, even crossing ethical lines to do so. In addition, there is a pending invesigation for unreported in-kind donations in Susan\'s campaign. Most likely it is money funneled directly from the Chinese Communist Party.</p>', 
        'CN' => '<p>苏珊一有机会就会作弊并走捷径。 共产党员科尔顿从竞选开始到结束都支持苏珊，甚至跨越了道德界限。 此外，对于苏珊竞选活动中未报告的实物捐赠，还有一项悬而未决的调查。 这很可能是直接来自中国共产党的资金。</p>'
    ),
   
    'source' => '
    
    <p>Source: <a target="_BLANK" href="https://www.politico.com/newsletters/new-york-playbook/2023/11/06/what-adams-missed-in-dc-00125492">https://www.politico.com/newsletters/new-york-playbook/2023/11/06/what-adams-missed-in-dc-00125492</a></p>
 
    ', 
  );

  showLieTruth ($content); 


  ?>

  </main>

<a class="top" target="_self" href="#">
  <i class="fa-solid fa-arrow-up"></i>
  Top
</a>

  <footer>
    <div class="disclaimer">
      Paid for by A Brooklyn Resident Scammed by Susan 
    </div>

    <!--<nav>
      <ul id="menu-pp-footer" class=""><li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8"><a href="https://privacy-policy/">Privacy Policy</a></li>
<li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="https://terms-and-conditions/">Terms and Conditions</a></li>
</ul>    </nav>-->

  </footer>

  <script type="text/javascript" src="./css/theme.js.download" id="theme-js"></script>
</body>
</html>