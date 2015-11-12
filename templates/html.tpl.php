<!DOCTYPE html>
<html class="no-js" lang="<?php print $language->language; ?>"><!-- TemplateBegin template="/Templates/debug.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <?php virtual("/wdn/templates_4.1/includes/metanfavico.html"); ?>
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

        $Id: debug.dwt | 252c2891a48c70db689be6d897d4f34768b8258a | Thu Aug 1 15:08:19 2013 -0500 | Kevin Abel  $
    -->
    <?php virtual("/wdn/templates_4.1/includes/scriptsandstyles_debug.html"); ?>
    <!-- TemplateBeginEditable name="doctitle" -->
    <title><?php print $head_title; ?></title>
    <!-- TemplateEndEditable -->
    <!-- TemplateBeginEditable name="head" -->
    <?php print $head; ?>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <?php print theme_get_setting('head_html'); ?>
    <!-- TemplateEndEditable -->
    <!-- TemplateParam name="class" type="text" value="debug" -->
</head>
<body class="debug <?php print $classes; ?>" data-version="4.1" <?php print $attributes;?>>
<?php virtual("/wdn/templates_4.1/includes/skipnav.html"); ?>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
<?php virtual("/wdn/templates_4.1/includes/body_scripts.html"); ?>
</body>
<!-- TemplateEnd --></html>
