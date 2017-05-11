<?php $format = filter_input(INPUT_GET, 'format', FILTER_SANITIZE_STRING);
if ($format !== 'partial') : ?><!DOCTYPE html>
<html class="no-js" lang="<?php print $language->language; ?>"><!-- InstanceBegin template="/Templates/fixed.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<?php require(DRUPAL_ROOT."/wdn/templates_4.1/includes/metanfavico.html"); ?>
<!--
    Membership and regular participation in the UNL Web Developer Network
    is required to use the UNL templates. Visit the WDN site at
    http://wdn.unl.edu/. Click the WDN Registry link to log in and
    register your unl.edu site.
    All UNL template code is the property of the UNL Web Developer Network.
    The code seen in a source code view is not, and may not be used as, a
    template. You may not use this code, a reverse-engineered version of
    this code, or its associated visual presentation in whole or in part to
    create a derivative work.
    This message may not be removed from any pages based on the UNL site template.

    $Id: fixed.dwt | 6edb0e1ee94038935f3821c6ce15dfd5c217b2e2 | Tue Dec 1 17:08:56 2015 -0600 | Kevin Abel $
 -->
<?php require(DRUPAL_ROOT."/wdn/templates_4.1/includes/scriptsandstyles.html"); ?>
<!-- InstanceBeginEditable name="doctitle" -->
<title><?php print $head_title; ?></title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<?php print $head; ?>
<?php print $styles; ?>
<?php print $scripts; ?>
<?php print theme_get_setting('head_html'); ?>
<!-- InstanceEndEditable -->
<!-- InstanceParam name="class" type="text" value="" -->
</head>
<body class="<?php print $classes; ?>" data-version="4.1" <?php print $attributes;?>>
<?php require(DRUPAL_ROOT."/wdn/templates_4.1/includes/skipnav.html"); ?>
<?php print $page_top; ?>
<?php endif; ?>
<?php print $page; ?>
<?php if ($format !== 'partial') : ?>
<?php print $page_bottom; ?>
<?php require(DRUPAL_ROOT."/wdn/templates_4.1/includes/body_scripts.html"); ?>
<?php print $body_scripts; ?>
</body>
<!-- InstanceEnd --></html>
<?php endif; ?>
