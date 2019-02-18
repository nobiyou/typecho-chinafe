<?php

//Appearance setup
function themeConfig($form)
{
    

    $switch = new Typecho_Widget_Helper_Form_Element_Checkbox('switch',
        array(
            'SmoothScroll' => _t('平滑滚动效果'),
            'ShowLoadingLine' => _t('顶部 loading 加载进度条效果'),
            'PJAX' => _t('使用 pjax'),
            'atargetblank' => _t('链接以新标签页形式打开'),
            'Pangu' => _t('引用 Pangu.js 实现中英文间自动添加空格'),
        ),

        //Default choose
        array('SmoothScroll','ShowLoadingLine','PJAX','Pangu'), _t('功能开关')
    );
    $form->addInput($switch->multiMode());

    $analysis = new Typecho_Widget_Helper_Form_Element_Textarea('analysis', null, null, _t('网站统计代码 + 自定义字体源'), _t('填入如 Google Analysis 的第三方统计代码或字体源'));
    $form->addInput($analysis);

    $loadingcolor = new Typecho_Widget_Helper_Form_Element_Text('loadingcolor', null, _t('#a0ce4e'), _t('loading 加载进度条颜色'), _t('打开 "功能开关" 中的 loading 加载进度条后, 在这里设置进度条的颜色, 默认为蓝色'));
    $form->addInput($loadingcolor);

    $loadingbuffer = new Typecho_Widget_Helper_Form_Element_Text('loadingbuffer', null, _t('800'), _t('loading 加载缓冲时间'), _t('loading 加载进度条的缓冲时间, 单位为毫秒 ms, 默认为 800ms'));
    $form->addInput($loadingbuffer);

    $BGtype = new Typecho_Widget_Helper_Form_Element_Radio('BGtype',
        array(
            '0' => _t('纯色背景 &emsp;'),
            '1' => _t('图片背景 &emsp;'),
            '2' => _t('渐变背景 &emsp;')
        ),

        //Default choose
        '1', _t('背景设置'), _t("选择背景方案, 对应填写下方的 '<b>背景颜色 / 图片</b>' 或选择 '<b>渐变样式</b>', 这里默认使用图片背景.")
    );
    $form->addInput($BGtype);

    $bgcolor = new Typecho_Widget_Helper_Form_Element_Text('bgcolor', null, _t(''), _t('背景颜色 / 图片'), _t('背景设置如果选择纯色背景, 这里就填写颜色代码; <br />背景设置如果选择图片背景, 这里就填写图片地址;<br />
    不填写则默认显示 #4ea2b4 或主题文件夹下的 /img/bg_header_02.jpg'));
    $form->addInput($bgcolor);

    $GradientType = new Typecho_Widget_Helper_Form_Element_Radio('GradientType',
        array(
            '0' => _t('Aerinite &emsp;'),
            '1' => _t('Ethereal &emsp;'),
            '2' => _t('Patrichor <br />'),
            '3' => _t('Komorebi &emsp;'),
            '4' => _t('Crepuscular &emsp;'),
            '5' => _t('Autumn <br />'),
            '6' => _t('Shore &emsp;'),
            '7' => _t('Horizon &emsp;'),
            '8' => _t('Green Beach <br />'),
            '9' => _t('Virgin <br />'),
        ),

        '5', _t('渐变样式'), _t("背景设置如果选择渐变背景, 在这里选择想要的渐变样式.")
    );
    $form->addInput($GradientType);

    $ThumbnailOption = new Typecho_Widget_Helper_Form_Element_Radio('ThumbnailOption',
        array(
            '1' => _t('显示文章内第一张图片 (若无图片则显示随机图片)<br />'),
            '2' => _t('只显示纯色 &emsp;'),
            '3' => _t('只显示随机图片'),
        ),

        //Default choose
        '1', _t('缩略图显示效果')
    );
    $form->addInput($ThumbnailOption);

    $TitleColor = new Typecho_Widget_Helper_Form_Element_Text('TitleColor', null, _t('#FFF'), _t('缩略图为纯色时的颜色'), _t('填入颜色代码'));
    $form->addInput($TitleColor);

    $RandomPicAmnt = new Typecho_Widget_Helper_Form_Element_Text('RandomPicAmnt', null, _t('19'), _t('随机缩略图数量'), _t('img/random 图片的数量'));
    $form->addInput($RandomPicAmnt);

    $commentis = new Typecho_Widget_Helper_Form_Element_Radio('commentis',
        array(
            '0' => _t('使用原生评论 &emsp;'),
            '1' => _t('使用多说评论 &emsp;')
        ),

        '0', _t('文章评论'), _t("默认使用原生评论, 如果使用多说评论, 在 <b>'多说二级域名 (short_name)'</b> 中填入多说 short_name")
    );
    $form->addInput($commentis);

    $DSshortname = new Typecho_Widget_Helper_Form_Element_Text('DSshortname', null, null, '多说二级域名 (short_name)', '要使用多说评论, 在这里填入多说的 short_name, 即二级域名.');
    $form->addInput($DSshortname);

    $CDNURL = new Typecho_Widget_Helper_Form_Element_Text('CDNURL', null, null, _t('CDN 地址'), _t("
    新建一个'chinafe 文件夹, 把'css, fonts, img, js' 文件夹放进去, 然后把'chinafe' 上传到到你的 CDN 储存空间根目录下<br />
    填入你的 CDN 地址, 如 <b>http://img.chinafe.net</b>"));
    $form->addInput($CDNURL);

    $langis = new Typecho_Widget_Helper_Form_Element_Radio('langis',
        array(
            '0' => _t('English <br />'),
            '1' => _t('简体中文 <br />'),
            '2' => _t('繁体中文 <br />')
        ),

        '1', _t('界面语言设置'), _t("默认使用英文")
    );
    $form->addInput($langis);

    $sticky_1 = new Typecho_Widget_Helper_Form_Element_Text('sticky_1', null, null, '置顶文章 1 ID', null);
    $form->addInput($sticky_1->addRule('isInteger', '请填入数字'));

    $sticky_2 = new Typecho_Widget_Helper_Form_Element_Text('sticky_2', null, null, '置顶文章 2 ID', '填写对应主题的 id 即可使文章标题在首页置顶显示');
    $form->addInput($sticky_2->addRule('isInteger', '请填入数字'));

    $ThemeColor = new Typecho_Widget_Helper_Form_Element_Text('ThemeColor', null, _t('#a0ce4e'), _t('主题颜色'), null);
    $form->addInput($ThemeColor);

    $alinkcolor = new Typecho_Widget_Helper_Form_Element_Text('alinkcolor', null, _t('#a0ce4e'), _t('超链接颜色'), null);
    $form->addInput($alinkcolor);

    $ChromeThemeColor = new Typecho_Widget_Helper_Form_Element_Text('ChromeThemeColor', null, _t('#a0ce4e'), _t('Android Chrome 地址栏颜色'), null);
    $form->addInput($ChromeThemeColor);

    $avatarURL = new Typecho_Widget_Helper_Form_Element_Text('avatarURL', null, null, '个人头像地址', '填入头像的地址, 如不填写则使用默认头像');
    $form->addInput($avatarURL);

    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', null, null, _t('favicon 地址'), _t('填入博客 favicon 的地址, 默认则不显示'));
    $form->addInput($favicon);

    $dailypic = new Typecho_Widget_Helper_Form_Element_Text('dailypic', null, null, _t('首页顶部左边的图片地址'), _t('填入图片地址, 图片显示在首页顶部左边位置'));
    $form->addInput($dailypic);

    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', null, null, _t('首页顶部右边 LOGO 图片地址'), _t('填入 LOGO 地址, 图片将显示于首页右上角板块'));
    $form->addInput($logo);

    $slogan = new Typecho_Widget_Helper_Form_Element_Text('slogan', null, _t('Nice to meet you'), _t('首页顶部左边的标语'), _t('填入自定义文字, 显示于首页顶部左边的图片上'));
    $form->addInput($slogan);
	
	$email = new Typecho_Widget_Helper_Form_Element_Text('email', null, _t('admin@chinafe.net'), _t('邮箱地址'), _t('填入自定义文字, 显示于首页顶部邮箱地址'));
    $form->addInput($email);
	
	$address = new Typecho_Widget_Helper_Form_Element_Text('address', null, _t('甘肃省兰州市城关区南关什字世纪广场A座1406'), _t('地址'), _t('填入自定义文字, 显示于首页顶部地址'));
    $form->addInput($address);
	
	$tel = new Typecho_Widget_Helper_Form_Element_Text('tel', null, _t('400-092-1288'), _t('电话号码'), _t('填入自定义文字, 显示于首页顶部400电话'));
    $form->addInput($tel);
	
	$beian = new Typecho_Widget_Helper_Form_Element_Text('beian', null, _t('ICP证：陇ICP备13000288号'), _t('备案号'), _t('填入自定义文字, 显示于首页底部备案号'));
    $form->addInput($beian);
	
	$Terms = new Typecho_Widget_Helper_Form_Element_Text('Terms', null, _t('#'), _t('使用条款'), _t('填入使用条款URL'));
    $form->addInput($Terms);	
	
	$catchword = new Typecho_Widget_Helper_Form_Element_Text('catchword', null, _t('"家庭教育", "学习方法", "国学经典"'), _t('宣传口号'), _t('填入自定义文字, "Success In Life", "a Perfect Future", "a Better Tommorow"'));
    $form->addInput($catchword);
	
	$Introduction = new Typecho_Widget_Helper_Form_Element_Text('Introduction', null, _t('掌握家庭教育的新理念，提升家庭幸福；掌握高效学习的学习方法，提升学习能力；加入家庭教育培训行业，成为家庭教育导师，去帮助更多的家庭和学校；了解中国传统文化，传承文化，促进中国富强。'), _t('宣传文案'), _t('填入自定义文字, 不能太长，不要超过300字'));
    $form->addInput($Introduction);
	
	$indexlist = new Typecho_Widget_Helper_Form_Element_Text('indexlist', null, _t('课程 &amp; <span>动态</span>'), _t('列表标题'), _t('填入自定义文字, 首页自定义标题'));
    $form->addInput($indexlist);
	
	$listtion = new Typecho_Widget_Helper_Form_Element_Text('listtion', null, _t('每天都有新发生，每天都有新足迹，一次次的刷新，只为走向更高峰，更新、更快、更强，家庭教育联盟帮助到更多的人！'), _t('列表概述'), _t('填入自定义文字, 不能太长，不要超过300字'));
    $form->addInput($listtion);
	
	$BGbanner = new Typecho_Widget_Helper_Form_Element_Radio('BGbanner',
        array(
            '0' => _t('纯色背景 &emsp;'),
            '1' => _t('渐变背景 &emsp;')
        ),

        //Default choose
        '1', _t('banner背景设置'), _t("选择背景方案, 对应填写下方的 '<b>背景颜色 / 图片</b>' 或选择 '<b>渐变样式</b>', 这里默认使用图片背景.")
    );
    $form->addInput($BGbanner);
	
	$parallaxbg = new Typecho_Widget_Helper_Form_Element_Text('parallaxbg', null, _t(''), _t('首页底部数字的图片地址'), _t('填入图片地址,默认显示主题文件夹下的/img/parallax_01.jpg, 图片显示在首页底部数字位置'));
    $form->addInput($parallaxbg);


    $footersns = new Typecho_Widget_Helper_Form_Element_Checkbox('footersns',
        array(
            'ShowTwitter' => _t('显示 Twitter 图标 &emsp;'),
            'ShowFacebook' => _t('显示 Facebook 图标 &emsp;'),
            'ShowGooglePlus' => _t('显示 Google+ 图标 &emsp;'),
            'ShowWeibo' => _t('显示新浪微博图标 &emsp;'),
            'ShowInstagram' => _t('显示 Instagram 图标 &emsp;'),
            'ShowGithub' => _t('显示 Github 图标 &emsp;'),
            'ShowTumblr' => _t('显示 Tumblr 图标 &emsp;'),
            'ShowTelegram' => _t('显示 Telegram 图标 &emsp;'),
            'ShowLinkedin' => _t('显示 Linkedin 图标 &emsp;'),
        ),

        array('ShowWeibo','ShowGithub','ShowGooglePlus'), _t('页脚 SNS 图标按钮显示设置'), _t('开启后, 按钮显示于博客页脚位置')
    );
    $form->addInput($footersns);

    $TwitterURL = new Typecho_Widget_Helper_Form_Element_Text('TwitterURL', null, _t('NULL'), _t('Twitter 地址'), null);
    $form->addInput($TwitterURL);

    $FacebookURL = new Typecho_Widget_Helper_Form_Element_Text('FacebookURL', null, _t('NULL'), _t('Facebook 地址'), null);
    $form->addInput($FacebookURL);

    $GooglePlusURL = new Typecho_Widget_Helper_Form_Element_Text('GooglePlusURL', null, _t('NULL'), _t('Google+ 地址'), null);
    $form->addInput($GooglePlusURL);

    $WeiboURL = new Typecho_Widget_Helper_Form_Element_Text('WeiboURL', null, null, _t('新浪微博地址'), null);
    $form->addInput($WeiboURL);
    
    $InstagramURL = new Typecho_Widget_Helper_Form_Element_Text('InstagramURL', null, null, _t('Instagram 地址'), null);
    $form->addInput($InstagramURL);
    
    $GithubURL = new Typecho_Widget_Helper_Form_Element_Text('GithubURL', null, null, _t('Github 地址'), null);
    $form->addInput($GithubURL);
    
    $TumblrURL = new Typecho_Widget_Helper_Form_Element_Text('TumblrURL', null, null, _t('Tumblr 地址'), null);
    $form->addInput($TumblrURL);
    
    $TelegramURL = new Typecho_Widget_Helper_Form_Element_Text('TelegramURL', null, null, _t('Telegram 地址'), null);
    $form->addInput($TelegramURL);
    
    $LinkedinURL = new Typecho_Widget_Helper_Form_Element_Text('LinkedinURL', null, null, _t('Linkedin 地址'), null);
    $form->addInput($LinkedinURL);

    $CustomFonts = new Typecho_Widget_Helper_Form_Element_Text('CustomFonts', null, _t("Roboto, 'Helvetica Neue', Helvetica, 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', '微软雅黑', Arial, sans-serif"), _t('自定义字体'), null);
    $form->addInput($CustomFonts);

    $RobotoSource = new Typecho_Widget_Helper_Form_Element_Radio('RobotoSource',
    array(
        '0' => _t('调用 Google fonts (使用 https://lug.ustc.edu.cn 中科大 https 镜像加速)<br />'),
        '1' => _t('调用主题文件夹自带的 Roboto &emsp;'),
        '2' => _t('使用自定义字体源 (在上方"网站统计代码 + 自定义字体源"填入)')
    ),

    '1', _t('Roboto 字体使用来源'), null);
    $form->addInput($RobotoSource);
}

//Homepage thumbnail
function showThumbnail($widget)
{
    //If article no include picture, display random default picture
    $rand = rand(1, $widget->widget('Widget_Options')->RandomPicAmnt); //Random number

    if (!empty($widget->widget('Widget_Options')->CDNURL)) {
        $random = $widget->widget('Widget_Options')->CDNURL. '/MaterialCDN/img/random/material-' . $rand . '.png';
    } else {
        $random = $widget->widget('Widget_Options')->themeUrl . '/img/random/material-' . $rand . '.png';
    }//Random picture path


    // If only one random default picture, delete the following "//"
    //$random = $widget->widget('Widget_Options')->themeUrl . '/img/random.jpg';

    $attach = $widget->attachments(1)->attachment;
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';

    if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
        echo $thumbUrl[1][0];
    } elseif ($attach->isImage) {
        echo $attach->url;
    } else {
        echo $random;
    }
}

//Random thumbnail
function randomThumbnail($widget)
{
    //If article no include picture, display random default picture
    $rand = rand(1, $widget->widget('Widget_Options')->RandomPicAmnt); //Random number

    if (!empty($widget->widget('Widget_Options')->CDNURL)) {
        $random = $widget->widget('Widget_Options')->CDNURL. '/MaterialCDN/img/random/material-' . $rand . '.png';
    } else {
        $random = $widget->widget('Widget_Options')->themeUrl . '/img/random/material-' . $rand . '.png';
    }//Random picture path

    echo $random;
}

//Random thumbnail
function randomBanner($widget)
{
    //If article no include picture, display random default picture
    $rand = rand(1, $widget->widget('Widget_Options')->RandomPicAmnt); //Random number

    if (!empty($widget->widget('Widget_Options')->CDNURL)) {
        $random = $widget->widget('Widget_Options')->CDNURL. '/MaterialCDN/img/random/banner-' . $rand . '.jpg';
    } else {
        $random = $widget->widget('Widget_Options')->themeUrl . '/img/random/banner-' . $rand . '.jpg';
    }//Random picture path

    echo $random;
}

function is_pjax()
{
    return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];
}

function themeFields($layout)
{ 
    //在文章编辑页面添加分类字段class
    $jigoutag = new Typecho_Widget_Helper_Form_Element_Radio('jigoutag',
    array(
        '0' => _t('幼儿园'),
        '1' => _t('课外辅导机构'),
        '2' => _t('培训机构')
    ),
    '2', _t('机构行业选择'), '默认为空');
    $layout->addItem($jigoutag);
	
	$jigoulogo = new Typecho_Widget_Helper_Form_Element_Text('jigoulogo', null, null, _t('机构logo'), _t('请输入图片完整的http地址，尺寸最好是80*80。'));
    $layout->addItem($jigoulogo);
}

//Compress the code
//Using <!--<nocompress>--><!--</nocompress>--> for compatiblity
function compressHtml($html_source) {
    $chunks = preg_split('/(<!--<nocompress>-->.*?<!--<\/nocompress>-->|<nocompress>.*?<\/nocompress>|<pre.*?\/pre>|<textarea.*?\/textarea>|<script.*?\/script>)/msi', $html_source, -1, PREG_SPLIT_DELIM_CAPTURE);
    $compress = '';
    foreach ($chunks as $c) {
        if (strtolower(substr($c, 0, 19)) == '<!--<nocompress>-->') {
            $c = substr($c, 19, strlen($c) - 19 - 20);
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 12)) == '<nocompress>') {
            $c = substr($c, 12, strlen($c) - 12 - 13);
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 4)) == '<pre' || strtolower(substr($c, 0, 9)) == '<textarea') {
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 7)) == '<script' && strpos($c, '//') != false && (strpos($c, "\r") !== false || strpos($c, "\n") !== false)) {
            $tmps = preg_split('/(\r|\n)/ms', $c, -1, PREG_SPLIT_NO_EMPTY);
            $c = '';
            foreach ($tmps as $tmp) {
                if (strpos($tmp, '//') !== false) {
                    if (substr(trim($tmp), 0, 2) == '//') {
                        continue;
                    }
                    $chars = preg_split('//', $tmp, -1, PREG_SPLIT_NO_EMPTY);
                    $is_quot = $is_apos = false;
                    foreach ($chars as $key => $char) {
                        if ($char == '"' && $chars[$key - 1] != '\\' && !$is_apos) {
                            $is_quot = !$is_quot;
                        } else if ($char == '\'' && $chars[$key - 1] != '\\' && !$is_quot) {
                            $is_apos = !$is_apos;
                        } else if ($char == '/' && $chars[$key + 1] == '/' && !$is_quot && !$is_apos) {
                            $tmp = substr($tmp, 0, $key);
                            break;
                        }
                    }
                }
                $c .= $tmp;
            }
        }
        $c = preg_replace('/[\\n\\r\\t]+/', ' ', $c);
        $c = preg_replace('/\\s{2,}/', ' ', $c);
        $c = preg_replace('/>\\s</', '> <', $c);
        $c = preg_replace('/\\/\\*.*?\\*\\//i', '', $c);
        $c = preg_replace('/<!--[^!]*-->/', '', $c);
        $compress .= $c;
    }
    return $compress;
}
