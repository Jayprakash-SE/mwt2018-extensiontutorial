<?php

class TestClass extends SpecialPage {
	public function __construct() {
		parent::__construct( 'HelloWorld' , 'testgroup' );
		
	}
	
	public function execute( $sub ) {
		$out = $this->getOutput();

		$out->setPageTitle( $this->msg( 'test-hello' ) );

		$out->addHelpLink( 'Extension:lisagdfksa' );
		
		 # A formDescriptor Array to tell HTMLForm what to build
        $formDescriptor = array(
                        'simpletextfield' => array(
                                'label' => 'Simple Text Field', # What's the label of the field
                                'class' => 'HTMLTextField' # What's the input type
                        )
        );
 
        $htmlForm = new HTMLForm( $formDescriptor, $this->getContext() ); # We build the HTMLForm object
 
        $htmlForm->setSubmitText( 'Yes, Please Submit' ); # What text does the submit button display
 
        $htmlForm->show(); # Displaying the form		
		
		
	}
}
