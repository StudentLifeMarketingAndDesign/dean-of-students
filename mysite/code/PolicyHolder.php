<?php
class PolicyHolder extends Page {

	private static $db = array(
		"Policies"   => "HTMLText",
		"PolicyYear" => "Text",
	);

	private static $has_one = array(

	);

	private static $has_many = array(
	);

	static $singular_name = 'Policy Holder';

	static $plural_name = 'Policy Holders';

	private static $allowed_children = array("PolicyPage");

	public function getCMSFields() {
		$f = parent::getCMSFields();
		//$f->removeByName("Content");
		//$gridFieldConfig = GridFieldConfig_RecordEditor::create();
		//$gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));

		/*$gridField = new GridField("StaffTeam", "Staff Teams", StaffTeam::get(), GridFieldConfig_RecordEditor::create());
		$f->addFieldToTab("Root.Main", $gridField); // add the grid field to a tab in the CMS	*/
		$f->addFieldToTab("Root.Main", new TextField("PolicyYear", "Archive Policy Year (Only fill out if these policies are archived)"), "Content");
		$f->addFieldToTab("Root.Main", new HTMLEditorField("Policies", "Policies"), "Metadata");
		return $f;
	}
}
class PolicyHolder_Controller extends Page_Controller {

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
	private static $allowed_actions = array(
	);

	public function init() {
		parent::init();

	}

}