<?php defined('_JEXEC') or die;
// JPlugin::loadLanguage( 'tpl_SG1' );
JHTML::_('behavior.mootools');
define('Jmasterframework', dirname(__FILE__));
require(Jmasterframework . DS . "config.php");
$path = $this->baseurl . '/templates/' . $this->template;
$siteName = JFactory::getApplication()->getCfg('sitename');
$sidecol_width = $this->params->get('sidecol_width');
$templateparams = JFactory::getApplication()->getTemplate(true)->params;
$browser = JBrowser::getInstance()->getBrowser();
$browserVersion = JBrowser::getInstance()->getMajor();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>"
      lang="<?php echo $this->language; ?>">
<head>
    <jdoc:include type="head"/>
    <title><?php echo $this->getTitle()?></title>
    <script type="text/javascript" src="<?php echo $path?>/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="<?php echo $path?>/js/accordion.js"></script>
        <script type="text/javascript" src="<?php echo $path?>/js/accordion_clicker.js"></script>
    <link rel="icon" href="<?php echo $path?>/images/favicon.png" type="image/png"/>
    <link rel="shortcut icon" href="<?php echo $path?>/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="<?php echo $path?>/css/menu.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $path?>/css/masterlayout.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $path?>/css/accordion.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $path?>/css/events.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $path?>/css/clients.css" type="text/css"/>
    <link rel="stylesheet" href="plugins/content/jw_sigpro/jw_sigpro/includes/js/jquery_fancybox/fancybox/jquery.fancybox-1.3.4.css" type="text/css" />
    <link rel="stylesheet" href="plugins/content/jw_sigpro/jw_sigpro/tmpl/Elegant/css/template.css" type="text/css" media="screen"  />
    <link rel="stylesheet" href="plugins/content/jw_sigpro/jw_sigpro/includes/css/print.css" type="text/css" media="print"  />
    <script src="media/system/js/core.js" type="text/javascript"></script>
    <script src="media/system/js/mootools-core.js" type="text/javascript"></script>
    <script src="media/system/js/caption.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo $path?>/js/jquery-1.4.3.min.js"></script>
    <script src="plugins/content/jw_sigpro/jw_sigpro/includes/js/jquery_fancybox/fancybox/jquery.mousewheel-3.0.4.pack.js" type="text/javascript"></script>
    <script src="plugins/content/jw_sigpro/jw_sigpro/includes/js/jquery_fancybox/fancybox/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
    <script src="plugins/content/jw_sigpro/jw_sigpro/includes/js/behaviour.js" type="text/javascript"></script>
    <script src="media/system/js/mootools-more.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery.noConflict();
        jQuery(function($) {
            $("a.fancybox").fancybox({
                'transitionIn'	: 'none', // elastic | none
                'transitionOut'	: 'none', // elastic | none
                'titlePosition' : 'inside', // inside | over
                'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
                    return '<span id="fancybox-title-over"><b>Image ' + (currentIndex + 1) + ' of ' + currentArray.length + '</b><br />' + (title.length ? title : '') + '</span>';
                }
            });
        });
    </script>
</head>

<?php $this->countModules('sidecolumn') == 0 ? $contentwidth = "100" : $contentwidth = "80"; ?>

<body>
<div id="base_wrapper">
    <div id="wrapper">
        <?php if ($this->countModules('accordionheader')) : ?>
            <div id="accordionheader">
                <jdoc:include type="modules" name="accordionheader"/>
            </div>
        <?php endif; ?>
        <?php if ($this->countModules('header')) : ?>
            <div id="header">
                <jdoc:include type="modules" name="header"/>
            </div>
        <?php endif; ?>
        <?php if ($this->countModules('menu')) : ?>
            <div id="menu">
                <jdoc:include type="modules" name="menu"/>
            </div>
        <?php endif; ?>
        <?php if ($this->countModules('breadcrumbs')) : ?>
            <div id="breadcrumbs">
                <jdoc:include type="modules" name="breadcrumbs"/>
            </div>
        <?php endif; ?>
        <?php if ($this->countModules('accordion')) : ?>
            <div id="accordionholder">
                <jdoc:include type="modules" name="accordion"/>
            </div>
        <?php endif; ?>
        <?php if ($this->countModules('sidecolumn')) : ?>
        <div id="sidecolumn">
            <jdoc:include type="modules" name="sidecolumn"/>
        </div>
        <?php endif; ?>
        <div id="content<?php echo $contentwidth; ?>">
            <jdoc:include type="component" />
        </div>
        <?php if ($this->countModules('sidecolumn')) : ?>
            <div id="separator"></div>
        <?php endif; ?>
    </div>
    <?php if ($this->countModules('footer')) : ?>
    <div id="footer">
        <jdoc:include type="modules" name="footer"/>
    </div>
    <?php endif; ?>
</div>
</body>
</html>
