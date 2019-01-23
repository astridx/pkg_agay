<?php

defined('_JEXEC') or die;
use hatemile\implementation\AccessibleAssociationImplementation;
use hatemile\implementation\AccessibleDisplayScreenReaderImplementation;
use hatemile\implementation\AccessibleEventImplementation;
use hatemile\implementation\AccessibleFormImplementation;
use hatemile\implementation\AccessibleNavigationImplementation;
use hatemile\util\Configure;
use hatemile\util\html\phpquery\PhpQueryHTMLDOMParser;
	

class PlgContentAgay extends JPlugin {

	public function onContentPrepare($context, &$row, &$params, $page = 0)
	{
//      public function onBeforeRender() {
/*	$doc = JFactory::getDocument();
	
	// Hide visual changes 
	$doc->addStyleSheet(JURI::root() . '/media/plg_content_agay/hatemile-for-javascript-3.0/css/hide_changes.css');
	
	// Configuration
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/_locales/en_US/js/configurations.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile-skippers.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile-symbols.js');
	 
	
	// Dependencies
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/eventlistener.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/CommonFunctions.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/Configure.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/IDGenerator.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/html/vanilla/VanillaHTMLDOMParser.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/html/vanilla/VanillaHTMLDOMElement.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/html/vanilla/VanillaHTMLDOMTextNode.js');
	//$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/cssParser.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/css/jscssp/JSCSSPParser.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/css/jscssp/JSCSSPRule.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/css/jscssp/JSCSSPDeclaration.js');

	// Solutions
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/implementation/AccessibleCSSImplementation.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/implementation/AccessibleEventImplementation.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/implementation/AccessibleFormImplementation.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/implementation/AccessibleDisplayScreenReaderImplementation.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/implementation/AccessibleNavigationImplementation.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/implementation/AccessibleAssociationImplementation.js');

	$doc->addScript(JURI::root() . 'media/plg_content_agay/a11y.js');*/
	
	
	
	require_once JPATH_ROOT . '/plugins/content/agay/phpQuery/phpQuery/phpQuery.php';

	$hatemilePath = JPATH_ROOT . '/plugins/content/agay/hatemile_for_php/src/hatemile';

	require_once $hatemilePath . '/implementation/AccessibleAssociationImplementation.php';
	require_once $hatemilePath . '/implementation/AccessibleCSSImplementation.php';
	require_once $hatemilePath . '/implementation/AccessibleDisplayScreenReaderImplementation.php';
	require_once $hatemilePath . '/implementation/AccessibleEventImplementation.php';
	require_once $hatemilePath . '/implementation/AccessibleFormImplementation.php';
	require_once $hatemilePath . '/implementation/AccessibleNavigationImplementation.php';

	require_once $hatemilePath . '/util/Configure.php';
	require_once $hatemilePath . '/util/css/phpcssparser/PHPCSSParser.php';
	require_once $hatemilePath . '/util/html/phpquery/PhpQueryHTMLDOMParser.php';

        $configure = new Configure();
        $htmlParser = new PhpQueryHTMLDOMParser($row->introtext);

	$doc = JFactory::getDocument();
	
	$doc->addStyleSheet( JURI::root() . 'plugins/content/agay/css/hide_changes.css');
	
	$hatemilePathJsPath = JURI::root() . '/plugins/content/agay/hatemile_for_php/src/js/';

	$doc->addScript($hatemilePathJsPath . 'common.js');
	$doc->addScript($hatemilePathJsPath . 'eventlistener.js');
	$doc->addScript($hatemilePathJsPath . 'include.js');
	$doc->addScript($hatemilePathJsPath . 'scriptlist_validation_fields.js');
	$doc->addScript($hatemilePathJsPath . 'validation.js');

	
	
        $accessibleEvent = new AccessibleEventImplementation(
            $htmlParser,
            $configure
        );
        $accessibleForm = new AccessibleFormImplementation(
            $htmlParser,
            $configure
        );
        $accessibleNavigation = new AccessibleNavigationImplementation(
            $htmlParser,
            $configure
        );
        $accessibleAssociation = new AccessibleAssociationImplementation(
            $htmlParser,
            $configure
        );
        $accessibleDisplay = new AccessibleDisplayScreenReaderImplementation(
            $htmlParser,
            $configure
        );

        $accessibleAssociation->associateAllDataCellsWithHeaderCells();
        $accessibleAssociation->associateAllLabelsWithFields();

        $accessibleEvent->makeAccessibleAllDragandDropEvents();
        $accessibleEvent->makeAccessibleAllClickEvents();
        $accessibleEvent->makeAccessibleAllHoverEvents();

        $accessibleForm->markAllAutoCompleteFields();
        $accessibleForm->markAllRequiredFields();
        $accessibleForm->markAllRangeFields();
        $accessibleForm->markAllInvalidFields();


            $accessibleDisplay->displayAllShortcuts();
            $accessibleDisplay->displayAllRoles();
            $accessibleDisplay->displayAllCellHeaders();
            $accessibleDisplay->displayAllWAIARIAStates();
            $accessibleDisplay->displayAllLinksAttributes();
            $accessibleDisplay->displayAllTitles();
            $accessibleDisplay->displayAllLanguages();
            $accessibleDisplay->displayAllAlternativeTextImages();
            $accessibleNavigation->provideNavigationByAllHeadings();
            $accessibleNavigation->provideNavigationByAllSkippers();
            $accessibleNavigation->provideNavigationToAllLongDescriptions();
            $accessibleNavigation->provideNavigationByAllSkippers();
            $accessibleDisplay->displayAllShortcuts();

        $row->text = $htmlParser->getHTML();
	
	return true;
    }

}
