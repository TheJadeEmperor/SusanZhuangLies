<?php
$seoUrl = 'https://susanzhuanglies.com/';
$seoSiteName = 'Scammer Susan Zhuang for City Council District 43';
$seoDesc = "Scammer Susan Zhuang's campaign is full of scams, including the biggest scam, which is the fact that she is funded by the CCP - the Chinese Communist Party. She and her supporter Communist Colton has tricked both Chinese and American citizens into thinking she's looking out for their best interests.";
$shareImg = $seoUrl.'images/scam_postcard.png';

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
  <link rel="shortcut icon" href="./images/china_flag.ico">
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
  'CN' => "骗子莊文怡"
);
$intro = array(
  'EN' => "Scammer Susan Zhuang's biggest scam is the fact that she is funded by the CCP - the Chinese Communist Party. While she has fooled you into thinking she's looking out for your best interests, she is trying to slowly turn New York into another Chinese mainland, making it a nightmare for Chinese immigrants who have escaped the mainland.",
  'CN' => "骗子庄苏珊最大的骗局是她的资金来源是CCP——中国共产党。 虽然她欺骗纽约人以为她是在照顾他们的利益，但她却试图慢慢地将纽约变成另一个中国大陆，让纽约成为逃离大陆的中国移民的噩梦。"
)
?>

    <h1 title="Scammer Susan Zhuang">
      <span>&nbsp;<?=$headline[$la] ?>&nbsp;</span>
    </h1>
    <p><?=$intro[$la]?></p>

    <?php
    $n = rand() % 100;
    
    if ($n % 2 == 0)
      $imgBG = "./images/scam_susan_zhuang.jpg";
    else 
      $imgBG = "./images/scam_postcard.jpg";
    ?>

    <img width="2048" height="1365" src="<?=$imgBG?>" class="attachment-full size-full" alt="" decoding="async" fetchpriority="high" srcset="<?=$imgBG?> 2048w, <?=$imgBG?> 300w, <?=$imgBG?> 1024w, <?=$imgBG?> 768w, <?=$imgBG?> 1536w" sizes="(max-width: 2048px) 100vw, 2048px">  </header>
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
          'EN' => "Residency Scam",
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
        'stock-photo' => array(
          'EN' => 'STOLEN STOCK PHOTOS',
          'CN' => '被盗的库存照片'
        ),
        'phony-photos' => array(
          'EN' => 'PHONY PHOTOS',
          'CN' => ''
        ),
        'commie-colton' => array(
          'EN' => "COLTON'S COMMUNISM",
          'CN' => "COLTON的共产主义"
        ),
        'susan-support' => array(
          'EN' => "UNETHICAL SUPPORT",
          'CN' => '科尔顿对苏珊的不道德支持'
        ),
        'vito-ally' => array(
          'EN' => "Secret Alliance with Vito Labella",
          'CN' => '与维托·拉贝拉的秘密联盟'
        ),
        'shsat-sadism' => array(
          'EN' => "Kill the SHSAT?",
          'CN' => '杀死SHSAT'
        ),
      );

      foreach($scamMenu as $scam => $menu) {
        echo '<li><a target="_self" href="#'.$scam.'">'.$menu[$la].'</a></li>';
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
      'EN' => '<p>Susan was in Columbus, Indiana the whole time. She secured 8,000 masks from China, but it was for residents of Columbus, Indiana, not in Bensonhurst like she claimed. Many Chinese residents who discovered this were shocked and wondered did she just lie to everybody or did she get confused about geography? Mistaking Indiana for New York is like mistaking Hong Kong for Beijing.</p>',
      'CN' => '苏珊一直在印第安纳州哥伦布。 她从中国获得了 8000 个口罩，但这些口罩是为印第安纳州哥伦布市的居民提供的，而不是像她声称的那样是在本森赫斯特。 许多中国居民发现这一情况后都感到震惊，想知道她到底是在骗大家还是对地理感到困惑？ 将印第安纳州误认为纽约就像将香港误认为北京一样.'
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
      'EN' => "<p>Susan Zhuang is running as a Democrat because she is backed by William Colton, who is a Democrat. She is claiming to have Republican values, which makes no sense, given her situation. She is trying to appeal to the values of the Asian community in District 43. But she is funded by the CCP, which makes her a communist, which consequently, makes her an enemy of all Chinese immigrants.</p>
      <p>You, who have escaped the mainland know how dirt poor the mainland was, making it unlivable for its citizens. You have started a new life here but Susan Zhuang is trying to turn New York into another Chinese mainland with her communist policies, defunding the police, and bail reform.</p>", 
      'CN' => '<p>庄苏珊作为民主党人参选，因为她得到了民主党人威廉·科尔顿的支持。 她声称拥有共和党价值观，但考虑到她的处境，这是没有道理的。 她试图迎合43区亚裔社区的价值观。但她受到中共的资助，这使她成为一名共产主义者，从而使她成为所有中国移民的敌人。</p>
      <p>逃离大陆的你都知道大陆有多穷，不适合居民居住。 你已经在这里开始了新的生活，但庄苏珊正试图通过她的共产主义政策、取消警察经费和保释改革将纽约变成另一个中国大陆。</p>'
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
    'id' => 'stock-photo',
    'title' => 'STOLEN STOCK PHOTO',
    'lie' => array(
        'EN' => "<p>Susan's social media posts are ethical and of quality</p>", 
        'CN' => '<p>苏珊的社交媒体帖子符合道德且高质量</p>'
    ),
    'truth' => array(
        'EN' => '<p>Much like using AI to answer questions, Susan is allergic to doing real work as proven when she used an Adobe stock photo during a New Years Post. As depicted below, she even forgot to erase the copyright symbol. Happy Communist New Year my Chinese comrades!</p>', 
        'CN' => '<p>就像使用人工智能来回答问题一样，苏珊对实际工作过敏，她在新年邮报中使用 Adobe 库存照片就证明了这一点。 如下图所示，她甚至忘记删除版权符号。 我的中国同志，共产主义新年快乐！</p>'
    ), 
    
    'source' => '<a target="_BLANK" href="https://www.facebook.com/susanzhuang43/posts/pfbid02bNGSVxX94M5dgFJFbdwiK516z5sqVGBJvwrKxDe4ikrPwkHoYsX65XL1K5Y55Abwl"><img src="./images/scam_stock_photo.jpg" alt="Scammer Susan Zhuang" /></a>

    <p>Source: <a target="_BLANK" href="https://www.facebook.com/susanzhuang43/posts/pfbid02bNGSVxX94M5dgFJFbdwiK516z5sqVGBJvwrKxDe4ikrPwkHoYsX65XL1K5Y55Abwl">https://www.facebook.com/susanzhuang43/posts/pfbid02bNGSVxX94M5dgFJFbdwiK516z5sqVGBJvwrKxDe4ikrPwkHoYsX65XL1K5Y55Abwl</a></p>', 
  );

  showLieTruth ($content); 

$phony_photo_embed = '<video width="320" height="240" controls>
<source src="images/scam_photo_phony.mp4" type="video/mp4"> 
Your browser does not support the video tag.
</video>';

$content = array(
    'id' => 'phony-photos',
    'title' => 'PHONY PHOTO PHOTOSHOP',
    'lie' => array(
        'EN' => '<p>Susan Zhuang claims that her previous opponent, Wai Yee Chan, and her current oppnent, Ying Tan, have formed an alliance. Wai Yee Chan is a Democrat and it is unsightly to see her team up with Ying Tan, a Republican.</p>
        '.$phony_photo_embed,
        'CN' => '<p>Susan Zhuang声称她的前对手陈惠仪和她现在的对手谭颖结成了联盟。 陈慧仪是民主党人，看到她与共和党人陈英颖合作，实在是不雅观。</p>
        '.$phony_photo_embed
    ),
    'truth' => array(
        'EN' => "<p>Susan also forgot to remove the watermark on THIS photo that she conveniently cropped just to form her nasty narrative. The cropped photo shows Ying Tan and Wai Yee Chan being friendly together. The original photo shows an extra person, one of Susan's staff, as you can clearly see Susan's name on the woman's shirt. So are Susan and Ying Tan in a secret alliance?</p>
        <p>If you follow Susan on wechat you might have seen this claim. But it is fake news.</p>", 
        'CN' => '<p>苏珊还忘记删除这张照片上的水印，她方便地剪掉了这张照片，只是为了形成她令人讨厌的叙述。 裁剪后的照片显示谭颖和陈惠仪友好地在一起。 原始照片中多了一个人，是苏珊的一名工作人员，因为你可以在该女子的衬衫上清楚地看到苏珊的名字。 那么苏珊和谭颖是秘密联盟吗？</p>
        <p>如果您在微信上关注 Susan，您可能会看到此声明。 但这是假新闻。</p>'
    ), 
    'source' => '<p><a target="_BLANK" href="https://twitter.com/JCColtin/status/1686749857044725760"><img src="./images/scam_photo_real.jpg" alt="Scammer Susan Zhuang" /></a></p>
    <p>&nbsp;</p>
    <p>Source: <a target="_BLANK" href="https://twitter.com/JCColtin/status/1686749857044725760">https://twitter.com/JCColtin/status/1686749857044725760</a></p>', 
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
    'title' => "COLTON'S UNETHICAL SUPPORT FOR SUSAN",
    'lie' => array(
        'EN' => '<p>Being an American of Chinese descent, Susan is a shining example someone who earned her position at the City Council</p>', 
        'CN' => '<p>作为一名华裔美国人，苏珊是在市议会中获得职位的光辉榜样</p>'
    ),
    'truth' => array(
        'EN' => '<p>Susan cheats and takes shortcuts whenever she can. Communist Colton has backed Susan from the beginning of her campaign until the end, even crossing ethical lines to do so. In addition, there is a pending invesigation for unreported in-kind donations in Susan\'s campaign. Most likely it is money funneled directly from the Chinese Communist Party.</p>
        <p>Colton, who is a hardcore democrat has supported to defund the NYPD and cashless bail, which puts more criminals on the street. In the past, he supported NYC being a sanctuary city for migrants, which is causing a crisis in NYC. </p>', 
        'CN' => '<p>苏珊一有机会就会作弊并走捷径。 共产党员科尔顿从竞选开始到结束都支持苏珊，甚至跨越了道德界限。 此外，对于苏珊竞选活动中未报告的实物捐赠，还有一项悬而未决的调查。 这很可能是直接来自中国共产党的资金。</p>'
    ),
   
    'source' => '
    <p>Source: <a target="_BLANK" href="https://www.politico.com/newsletters/new-york-playbook/2023/11/06/what-adams-missed-in-dc-00125492">https://www.politico.com/newsletters/new-york-playbook/2023/11/06/what-adams-missed-in-dc-00125492</a></p>
    ', 
  );

  showLieTruth ($content); 


  $content = array(
    'id' => 'vito-ally',
    'title' => "Secret Alliance with Vito Labella",
    'lie' => array(
        'EN' => '<p>Susan won the election fair and square, beating both opponents Ying Tan and Vito by a landslide</p>', 
        'CN' => '<p>苏珊公平公正地赢得了选举</p>'
    ),
    'truth' => array(
        'EN' => "<p>Politics is never what it seems on the surface. Scammer Susan on the Democratic Party has allied with Vito Labella on the Conservative party to steal the election. Vito's opponent is Ying Tan, running on the Republican Party. By having Vito steal some of Ying Tan's votes guarantees Susan's victory.</p>
        <p>While Republicans are busy fighting each other, Susan can use her CCP money to gain an easy victory. Vito never aimed to win the election to begin with, his job was to steal his opponent's votes, and though he lost, he has reached his objective. In the end, Vito still got paid so dirty politics is about the money, not the people.</p>",
        'CN' => '<p>政治从来都不是表面看上去的那样。 民主党的骗子苏珊与保守党的维托·拉贝拉结盟，以窃取选举结果。 维托的对手是同属保守党的谭颖。 让维托窃取谭鹰的一些选票就保证了苏珊的胜利。</p>
        <p>当共和党人忙着互相争斗时，苏珊可以用她的中共钱财轻松获胜。 维托本来就没有以赢得选举为目标，他的工作就是窃取对手的选票，虽然他输了，但他的目的已经达到了。 最终，维托仍然得到了报酬，所以肮脏的政治是关于金钱的，而不是关于人民的。</p>'
    ),
   
    'source' => '<p><a target="_BLANK" href="https://twitter.com/VitoLaBella4NY/status/1749183990697763261"><img src="./images/scam_vito_ally.png" alt="Scammer Susan Zhuang" class="inline" /></a>
    <a target="_BLANK" href="https://twitter.com/VitoLaBella4NY/status/1749183990697763261"><img src="./images/scam_3_way.png" alt="Scammer Susan Zhuang" class="inline" /></a>

    <p>Sources: <a target="_BLANK" href="https://twitter.com/VitoLaBella4NY/status/1749183990697763261">https://twitter.com/VitoLaBella4NY/status/1749183990697763261</a></p>
    <p>&nbsp;</p>
    <p><a target="_BLANK" href="https://ny1.com/nyc/all-boroughs/politics/2023/11/02/race-heats-up-for-an-open-city-council-seat-in-brooklyn">https://ny1.com/nyc/all-boroughs/politics/2023/11/02/race-heats-up-for-an-open-city-council-seat-in-brooklyn</a></p>
    
    <p>&nbsp;</p>
    <p>District 43 is a newly drawn district meant to represent Asians so why would an Italian guy who hates Brooklyn run for office? The only logical conclusion is that Vito made a secret alliance with Willam Communist Colton to steal the election for Susan Zhuang.</p>',
  );

  showLieTruth ($content); 


  $content = array(
    'id' => 'shsat-sadism',
    'title' => "Kill the SHSAT?",
    'lie' => array(
        'EN' => '<p>Susan supports the SHSAT and she is looking out for Chinese children</p>', 
        'CN' => '<p>Susan支持SHSAT并关心中国孩子</p>'
    ),
    'truth' => array(
        'EN' => "<p>One of Susan Zhuang's supporters and donors is Rodneyse Bichotte Hermelyn, who strongly opposes the SHSAT. Susan has proven to be incompetent in the basics, using the aid of AI to answer basic questions, and unable to remove a watermark from a stock photo. It is no wonder that Scammer Susan would want to kill the SHSAT, a measure of intelligence.</p> 
        
        <p>She is harming your children by hurting their chances of getting into a good high school and college. Do you want your children to go to a good school and get good grades? If Susan is in charge then your children's spot will be stolen by blacks and Hispanics. Did you come all the way from China just to have your children be scammed by another mainlander?</p>",
        'CN' => '<p><p>Rodneyse Bichotte Hermelyn 是 Susan Zhuang 的支持者和捐助者之一，他强烈反对 SHSAT。 事实证明，苏珊在基础知识方面不胜任，无法利用人工智能的帮助来回答基本问题，并且无法从库存照片中删除水印。 难怪骗子 Susan 会想毁掉 SHSAT（衡量智力的标准）。</p>
        
        <p>她正在伤害你的孩子，损害他们进入好高中和大学的机会。 您想让您的孩子上好学校并取得好成绩吗？ 如果苏珊掌权，那么你孩子的位置将被黑人和西班牙裔人抢走。 你千里迢迢从中国来就是为了让你的孩子被另一个大陆人骗吗？</p></p>'
    ),
   
    'source' => '<p>&nbsp;</p>
    <p><a target="_BLANK" href="https://nypost.com/2023/08/13/parents-beware-nyc-specialized-high-schools-are-coming-under-attack-again/"><img src="./images/scam_shsat_sadism.jpg" alt="Scammer Susan Zhuang" class="inline" /></a>
 
    <a target="_BLANK" href="https://nypost.com/2023/08/13/parents-beware-nyc-specialized-high-schools-are-coming-under-attack-again/"><img src="./images/scam_shsat_protest.jpg" alt="Scammer Susan Zhuang" class="inline" /></a></p>
 
    <p>&nbsp;</p>

    <p>Sources: <a target="_BLANK" href="https://nypost.com/2023/08/13/parents-beware-nyc-specialized-high-schools-are-coming-under-attack-again/
">https://nypost.com/2023/08/13/parents-beware-nyc-specialized-high-schools-are-coming-under-attack-again/</a></p>
    
    <p><a target="_BLANK" href="https://www.nydailynews.com/2023/07/30/make-education-fairer-for-all-specialized-high-schools-must-open-up/">https://www.nydailynews.com/2023/07/30/make-education-fairer-for-all-specialized-high-schools-must-open-up/</a></p>

      <p><a target="_BLANK" href="https://www.city-journal.org/article/the-next-battle-over-racial-preferences">https://www.city-journal.org/article/the-next-battle-over-racial-preferences</a></p>
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

    <nav>
      <ul id="menu-pp-footer" class=""><li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8"><a target="_BLANK" href="https://twitter.com/susanzhuangnyc">Scammer's Twitter</a></li>
    <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a target="_BLANK" href="https://susan4ny.com/">Scammer's Website</a></li>
    <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a target="_BLANK" href="https://www.facebook.com/susanzhuang43">Scammer's Facebook</a></li>
</ul>
</nav>

  </footer>

  <script type="text/javascript" src="./css/theme.js.download" id="theme-js"></script>
</body>
</html>