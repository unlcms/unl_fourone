<?php $format = filter_input(INPUT_GET, 'format', FILTER_SANITIZE_STRING);
if ($format !== 'partial') : ?>
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
                <!-- InstanceBeginEditable name="titlegraphic" -->
                <span id="wdn_site_affiliation"><?php if ($site_slogan): ?><?php print $site_slogan; ?><?php endif; ?></span>
                <span id="wdn_site_title"><!-- InstanceBeginEditable name="titlegraphic" --><?php if ($site_name): ?><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a><?php endif; ?><!-- InstanceEndEditable --></span>
                <!-- InstanceEndEditable -->
            </div>
        </div>
    </header>
    <div id="wdn_navigation_bar" class="wdn-band">
        <nav id="breadcrumbs" class="wdn-inner-wrapper" role="navigation" aria-label="breadcrumbs">
            <!-- InstanceBeginEditable name="breadcrumbs" -->
            <?php if ($breadcrumb): ?><?php print $breadcrumb; ?><?php endif; ?>
            <!-- InstanceEndEditable -->
        </nav>
        <div id="wdn_navigation_wrapper">
            <nav id="navigation" role="navigation" aria-label="main navigation">
                <!-- InstanceBeginEditable name="navlinks" -->
                <?php print render($page['navlinks']); ?>
                <!-- InstanceEndEditable -->
                <?php include(DRUPAL_ROOT . "/wdn/templates_4.1/includes/navigation-addons.html"); ?>
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
                <!-- InstanceBeginEditable name="pagetitle" -->
                <?php print render($title_prefix); ?>
                <?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
                <!-- InstanceEndEditable -->
            </div>
            <!-- InstanceBeginEditable name="maincontentarea" -->
            <?php print $messages; ?>
            <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
<?php endif; ?>
            <?php print render($page['content_top']); ?>

            <?php if ($unl_remove_inner_wrapper): ?>
            <div class="wdn-band">
            <?php endif; ?>

                <?php if ($page['sidebar_first'] || $page['sidebar_second']): ?>
                <section class="wdn-grid-set">
                <?php endif; ?>

                    <?php if($page['sidebar_first']): ?>
                        <?php print render($page['sidebar_first']); ?>
                    <?php endif; ?>

                    <?php if (isset($page['sidebar_first']['#region']) && isset($page['sidebar_second']['#region'])): ?>
                        <div class="<?php print theme_get_setting('grid_class_content_two_sidebars'); ?>">
                            <?php print render($page['content']); ?>
                        </div>
                    <?php elseif (isset($page['sidebar_first']['#region']) || isset($page['sidebar_second']['#region'])): ?>
                        <div class="<?php print theme_get_setting('grid_class_content_one_sidebar'); ?>">
                            <?php print render($page['content']); ?>
                        </div>
                    <?php else: ?>
                        <?php print render($page['content']); ?>
                    <?php endif; ?>

                    <?php if($page['sidebar_second']): ?>
                        <?php print render($page['sidebar_second']); ?>
                    <?php endif; ?>

                <?php if ($page['sidebar_first'] || $page['sidebar_second']): ?>
                </section>
                <?php endif; ?>

            <?php if ($unl_remove_inner_wrapper): ?>
            </div>
            <?php endif; ?>

            <?php print render($page['content_bottom']); ?>
<?php if ($format !== 'partial') : ?>
            <!-- InstanceEndEditable -->
        </div>
    </main>

    <?php // @TODO Move this to template.php

    $related_links_block = block_get_blocks_by_region('leftcollinks');

    preg_match('/wdn-related-links-v(?<digit>\d+)/', render($related_links_block), $related_links);

    $digit = array_key_exists('digit', $related_links) ? $related_links['digit'] : null;

    switch ($digit) {
        case '1' :
            $wrapper_class = 'wdn-col-full bp640-wdn-col-two-thirds bp960-wdn-col-one-half';
            $contact_class = 'wdn-grid-set-halves bp960-wdn-grid-set-halves';
            $rl_class = 'wdn-col-full bp640-wdn-col-one-third bp960-wdn-col-one-half';
            break;
        case '2' :
            $wrapper_class = 'wdn-col-full bp640-wdn-col-two-thirds bp960-wdn-col-one-half';
            $contact_class = 'wdn-grid-set-halves bp960-wdn-grid-set-halves';
            $rl_class = 'wdn-col-full bp960-wdn-col-one-half';
            break;
        case '3' :
            $wrapper_class = 'wdn-col-full bp960-wdn-col-three-fourths';
            $contact_class = 'wdn-grid-set-halves bp640-wdn-grid-set-thirds bp960-wdn-grid-set-thirds';
            $rl_class = 'wdn-col-full bp960-wdn-col-one-fourth';
            break;
        case '4' :
        default :
            $wrapper_class = 'wdn-col-full bp960-wdn-col-one-half';
            $contact_class = 'wdn-grid-set-full';
            $rl_class = 'wdn-col-full bp960-wdn-col-one-half';
    }

?>

    <footer id="footer" role="contentinfo" class="wdn-content-slide">
        <div id="wdn_optional_footer" class="wdn-band wdn-footer-optional">
            <div class="wdn-inner-wrapper">
                <!-- InstanceBeginEditable name="optionalfooter" -->
                <?php print render($page['optionalfooter']); ?>
                <!-- InstanceEndEditable -->
            </div>
        </div>
        <div id="wdn_local_footer" class="wdn-band wdn-footer-local">
            <div class="wdn-inner-wrapper">
                <!-- InstanceBeginEditable name="contactinfo" -->
                <div class="wdn-grid-set wdn-footer-links-local">
                    <div class="<?php print $wrapper_class; ?>">
                        <div class="wdn-footer-module">
                            <span class="wdn-footer-heading" role="heading"><?php print $site_name; ?><span class="wdn-text-hidden"> Contact Information</span></span>
                            <div class="<?php print $contact_class; ?>">
                                <div class="wdn-col">
                                <?php print render($page['contactinfo']); ?>
                                </div>
                                <div class="wdn-col">
                                <?php print render($page['contactinfo_additional']); ?>
                                </div>
                                <div class="wdn-col">
                                <?php print render($page['socialmedia']); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- InstanceEndEditable -->
                    <!-- InstanceBeginEditable name="leftcollinks" -->
                    <?php if ($page['leftcollinks']): ?>
                    <div class="<?php print $rl_class; ?>">
                        <div class="wdn-footer-module">
                            <?php print render($page['leftcollinks']); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <!-- InstanceEndEditable -->
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
<?php endif; ?>
