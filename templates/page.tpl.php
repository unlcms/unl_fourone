<div id="wdn_wrapper">
    <input type="checkbox" id="wdn_menu_toggle" value="Show navigation menu" class="wdn-content-slide wdn-input-driver" />
    <?php include(DRUPAL_ROOT . "/wdn/templates_4.1/includes/noscript-padding.html"); ?>
    <header id="header" role="banner" class="wdn-content-slide wdn-band">
        <div id="wdn_header_top">
            <span id="wdn_institution_title"><a href="http://www.unl.edu/">University of Nebraska&ndash;Lincoln</a></span>
            <div id="wdn_resources">
                <?php include(DRUPAL_ROOT . "/wdn/templates_4.1/includes/wdnResources.html"); ?>
                <?php include(DRUPAL_ROOT . "/wdn/templates_4.1/includes/idm.html"); ?>
                <?php include(DRUPAL_ROOT . "/wdn/templates_4.1/includes/search.html"); ?>
            </div>
        </div>
        <div id="wdn_logo_lockup">
            <div class="wdn-inner-wrapper">
                <?php include(DRUPAL_ROOT . "/wdn/templates_4.1/includes/logo.html"); ?>
                <!-- TemplateBeginEditable name="titlegraphic" -->
                <span id="wdn_site_affiliation"><?php if ($site_slogan): ?><?php print $site_slogan; ?><?php endif; ?></span>
                <span id="wdn_site_title"><!-- TemplateBeginEditable name="titlegraphic" --><?php if ($site_name): ?><?php print $site_name; ?><?php endif; ?><!-- TemplateEndEditable --></span>
                <!-- TemplateEndEditable -->
            </div>
        </div>
    </header>
    <div id="wdn_navigation_bar" class="wdn-band">
        <nav id="breadcrumbs" class="wdn-inner-wrapper" role="navigation" aria-label="breadcrumbs">
            <!-- TemplateBeginEditable name="breadcrumbs" -->
            <?php if ($breadcrumb): ?><?php print $breadcrumb; ?><?php endif; ?>
            <!-- TemplateEndEditable -->
        </nav>
        <div id="wdn_navigation_wrapper">
            <nav id="navigation" role="navigation" aria-label="main navigation">
                <!-- TemplateBeginEditable name="navlinks" -->
                <?php print render($page['navlinks']); ?>
                <!-- TemplateEndEditable -->
                <label for="wdn_menu_toggle" class="wdn-icon-menu">Menu</label>
            </nav>
        </div>
    </div>
    <div class="wdn-menu-trigger wdn-content-slide">
        <label for="wdn_menu_toggle" class="wdn-icon-menu">Menu</label>
        <?php include(DRUPAL_ROOT . "/wdn/templates_4.1/includes/share.html"); ?>
    </div>
    <main id="wdn_content_wrapper" role="main" class="wdn-content-slide" tabindex="-1">
        <div id="maincontent" class="wdn-main">
            <div id="pagetitle">
                <!-- TemplateBeginEditable name="pagetitle" -->
                <?php print render($title_prefix); ?>
                <?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
                <!-- TemplateEndEditable -->
            </div>
            <!-- TemplateBeginEditable name="maincontentarea" -->
            <?php print $messages; ?>
            <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
            <?php print render($page['content_top']); ?>
            <?php print render($page['content']); ?>
            <?php print render($page['content_bottom']); ?>
            <!-- TemplateEndEditable -->
        </div>
    </main>
    <footer id="footer" role="contentinfo" class="wdn-content-slide">
        <div id="wdn_optional_footer" class="wdn-band wdn-footer-optional">
            <div class="wdn-inner-wrapper">
                <!-- TemplateBeginEditable name="optionalfooter" -->
                <?php render($page['optionalfooter']); ?>
                <!-- TemplateEndEditable -->
            </div>
        </div>
        <div id="wdn_local_footer" class="wdn-band wdn-footer-local">
            <div class="wdn-inner-wrapper">
                <!-- TemplateBeginEditable name="contactinfo" -->
                <?php render($page['contactinfo']); ?>
                <!-- TemplateEndEditable -->
                <!-- TemplateBeginEditable name="leftcollinks" -->
                <?php render($page['leftcollinks']); ?>
                <!-- TemplateEndEditable -->
            </div>
        </div>
        <div id="wdn_global_footer" class="wdn-band wdn-footer-global">
            <div class="wdn-inner-wrapper">
                <?php include(DRUPAL_ROOT . "/wdn/templates_4.1/includes/globalfooter.html"); ?>
            </div>
        </div>
    </footer>
    <?php include(DRUPAL_ROOT . "/wdn/templates_4.1/includes/noscript.html"); ?>
</div>
