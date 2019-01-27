<?php

defined('_JEXEC') or die;

use hatemile\implementation\AccessibleAssociationImplementation;
use hatemile\implementation\AccessibleDisplayScreenReaderImplementation;
use hatemile\implementation\AccessibleEventImplementation;
use hatemile\implementation\AccessibleFormImplementation;
use hatemile\implementation\AccessibleNavigationImplementation;
use hatemile\util\Configure;
use hatemile\util\html\phpquery\PhpQueryHTMLDOMParser;

/**
 * System Plugin Agay Plugin
 *
 * @since  0.0.1
 */
class PlgSystemAgay extends JPlugin {

    /**
     * This event is triggered before the framework creates the Head section of the Document.
     *
     * @return  void
     *
     * @since   0.0.1
     */
    public function onBeforeCompileHead() {
	$doc = JFactory::getDocument();
	    if ($this->params->get('showvisiblechanges', 1))
	    {
		    $doc->addStyleSheet(JURI::root() . 'plugins/' . $this->_type . '/' . $this->_name . '/css/hide_changes.css');
	    }

	    $hatemilePathJsPath = JURI::root() . 'plugins/' . $this->_type . '/' . $this->_name . '/hatemile_for_php/src/js/';

	    $doc->addScript($hatemilePathJsPath . 'common.js');
	    $doc->addScript($hatemilePathJsPath . 'eventlistener.js');
	    $doc->addScript($hatemilePathJsPath . 'include.js');
	    $doc->addScript($hatemilePathJsPath . 'scriptlist_validation_fields.js');
	    $doc->addScript($hatemilePathJsPath . 'validation.js');
    }
    
    public function onAfterRender() {

	$app = JFactory::getApplication();
	$doc = JFactory::getDocument();
	$name = $this->_name;
	$type = $this->_type;

	// Use this plugin only in site application. TODO Do not run for robots?
	if ($app->isClient('site') 
		&& JFactory::getDocument()->getType() === 'html'
		&& !$app->client->robot)
	{

	    require_once JPATH_ROOT . '/plugins/' . $type . '/' . $name . '/phpQuery/phpQuery/phpQuery.php';

	    $hatemilePath = JPATH_ROOT . '/plugins/' . $type . '/' . $name . '/hatemile_for_php/src/hatemile';

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
	    $htmlParser = new PhpQueryHTMLDOMParser($app->getBody());

	    $accessibleEvent = new AccessibleEventImplementation(
		    $htmlParser, $configure
	    );
	    $accessibleForm = new AccessibleFormImplementation(
		    $htmlParser, $configure
	    );
	    $accessibleNavigation = new AccessibleNavigationImplementation(
		    $htmlParser, $configure
	    );
	    $accessibleAssociation = new AccessibleAssociationImplementation(
		    $htmlParser, $configure
	    );
	    $accessibleDisplay = new AccessibleDisplayScreenReaderImplementation(
		    $htmlParser, $configure
	    );

	    if ($this->params->get('markandassociate', 1))
	    {
		$accessibleAssociation->associateAllDataCellsWithHeaderCells();
		$accessibleAssociation->associateAllLabelsWithFields();

		$accessibleEvent->makeAccessibleAllDragandDropEvents();
		$accessibleEvent->makeAccessibleAllClickEvents();
		$accessibleEvent->makeAccessibleAllHoverEvents();

		$accessibleForm->markAllAutoCompleteFields();
		$accessibleForm->markAllRequiredFields();
		$accessibleForm->markAllRangeFields();
		$accessibleForm->markAllInvalidFields();
	    }
	    
	    if ($this->params->get('displayalt', 1))
	    {
		   $accessibleDisplay->displayAllAlternativeTextImages();
	    }

	    if ($this->params->get('displayariaroles', 1))
	    {
		   $accessibleDisplay->displayAllRoles();
	    }
	    
	    if ($this->params->get('displaytableheader', 1))
	    {
		   $accessibleDisplay->displayAllCellHeaders();
	    }
	    
	    if ($this->params->get('displaylanguage', 1))
	    {
		   $accessibleDisplay->displayAllLanguages();
	    }
	    
	    if ($this->params->get('displaylinkattributes', 1))
	    {
		   $accessibleDisplay->displayAllLinksAttributes();
	    }
	    
	    if ($this->params->get('displaytitles', 1))
	    {
		   $accessibleDisplay->displayAllTitles();
	    }
	    
	    if ($this->params->get('linkstolongdescription', 1))
	    {
		   $accessibleNavigation->provideNavigationToAllLongDescriptions();
	    }
	    
	    if ($this->params->get('displayariaattributes', 1))
	    {
		   $accessibleDisplay->displayAllWAIARIAStates();
	    }
	    
	    if ($this->params->get('navigationbyheading', 1))
	    {
		   $accessibleNavigation->provideNavigationByAllHeadings();
	    }
	    
	    if ($this->params->get('navigaitonbycontentskippers', 1))
	    {
		   $accessibleNavigation->provideNavigationByAllSkippers();
	    }
	    
	    if ($this->params->get('displayshortcutes', 1))
	    {
		    $accessibleDisplay->displayAllShortcuts();
	    }

	    $app->setBody($htmlParser->getHTML());

	}

	return true;
    }

}
