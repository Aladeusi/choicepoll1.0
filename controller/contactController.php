<?php
	
 require("libraryController.php");
 
 class contactController extends libraryController{
 }

 $titanicObject=new contactController();
 if( $titanicObject->saveData($titanicObject->getAjaxData(true)))
 {
 	$status=base64_encode("Data saved successfully");
 	$titanicObject->redirect("../view/contact?status=$status");
 }



?>