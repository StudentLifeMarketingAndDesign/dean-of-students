<?php
class HomePage extends Page {

	public static $db = array(

	);

	public static $has_one = array(

	);

	public static $has_many = array(
	);

	public static $allowed_children = array("StaffPage");
	
	public function getCMSFields(){
		$f = parent::getCMSFields();
		$f->removeByName("Content");
		
		
		$gridFieldConfig = GridFieldConfig_RecordEditor::create();
		$gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
		
		
		$gridField = new GridField("HomePageFeature", "Home Page Feature", HomePageFeature::get(), $gridFieldConfig);
		$f->addFieldToTab("Root.Main", $gridField); // add the grid field to a tab in the CMS	*/
		return $f;
	}
}
class HomePage_Controller extends Page_Controller {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	public static $allowed_actions = array (
	);

	public function init() {
		parent::init();

	}
	
	public function HomePageFeatures() {
		$features = HomePageFeature::get();
		
		return $features;
		
	}

}