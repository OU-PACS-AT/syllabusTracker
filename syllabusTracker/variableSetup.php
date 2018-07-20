<?php
// Copyright © 2014, Utah State University’s Center for Innovative Design & Instruction (CIDI) http://cidi.usu.edu
// All rights reserved.
 
// Redistribution and use in source and binary forms, with or without modification, are permitted provided that 
// the following conditions are met:
 
// 1.  Redistributions of source code must retain the above copyright notice, this list of conditions and the 
// 	following disclaimer.
// 2.  Redistributions in binary form must reproduce the above copyright notice, this list of conditions and 
// 	the following disclaimer in the documentation and/or other materials provided with the distribution.
// 3.  Neither the name of the owner nor the names of its contributors may be used to endorse or promote products 
// derived from this software without specific prior written permission.
 
// THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, 
// INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE 
// DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, 
// EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; 
// LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)  HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER 
// IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF 
// THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

	// Root url for all api calls and links back to Canvas
	$canvasURL = 'https://canvas.ou.edu';
	// This is the authorization token from Canvas
	// $token = "8808~KqhfJC64BdGoQpwYkxYifD4qGVL23n7pQs9le7dQjzDID264C38M4NldjM6Lbi7w";
	$token = "8808~fQO2jKg6TUf2rIUBXNVl4sXhIHuHc3EY2s84el2v3dTXTQ7cz66BeSUqo8xiPKSV";
	
	// To generate this token, choose/create an admin user that you would like to generate the token from
	// 1.	Click the "profile" link in the top right menu bar, or navigate to /profile
	// 2.	Under the "Approved Integrations" section, click the button to generate a new access token.
	// 3.	Once the token is generated, you cannot view it again, and you'll have to generate a new token if you forget it. 
	// Remember that access tokens are password equivalent, so keep it secret.

	// Adjust the following code to reflect your institutions sis_term_id's
	function termDropdown(){
		// Determine current term
		$currYear = date("Y");
		$subtractYear = mktime(0,0,0,date("m"),date("d"),date("Y")-1);
		$prevYear = date("Y", $subtractYear);
		$term = "";
		$month = date("m");
		$semester = "";

		// You will need to change the following to match your institutions sis_term_id's
		// USU uses YYYY## for each term where ## is a two digit term code
		//$SpringCode = '20';
		//$SummerCode = '30';
		//$FallCode = '40';
		
		$Spring17Code = '19';
		$Summer17Code = '22';
		$Fall17Code = '28';
		$Spring18Code = '29';
		$Summer18Code = '32';
		$Fall18Code = '79';
		
		echo '<option value="'.$Spring17Code.'">Spring 2017</option>';
		echo '<option value="'.$Fall17Code.'">Fall 2017</option>';
		echo '<option value="'.$Summer17Code.'">Summer 2017</option>';
		echo '<option value="'.$Spring18Code.'" selected>Spring 2018</option>';
		echo '<option value="'.$Summer18Code.'">Summer 2018</option>';
		echo '<option value="'.$Fall18Code.'" selected>Fall 2018</option>';
		
		//echo '<option value="'.$prevYear.$SpringCode.'">Spring '.$prevYear.'</option>';

		// Spring Semester
// 		if (($month >= "01" && $month <= "03") || $month == "12"){
// 			echo '<option value="'.$currYear.$SpringCode.'">Spring '.$currYear.'</option>';
// 			echo '<option value="'.$prevYear.$FallCode.'">Fall '.$prevYear.'</option>';
// 			echo '<option value="'.$prevYear.$SummerCode.'">Summer '.$prevYear.'</option>';
// 			echo '<option value="'.$prevYear.$SpringCode.'">Spring '.$prevYear.'</option>';
// 		// Summer Semester
// 		} else if ($month >= "04" && $month <= "06"){
// 			echo '<option value="'.$currYear.$SummerCode.'">Summer '.$currYear.'</option>';
// 			echo '<option value="'.$currYear.$SpringCode.'">Spring '.$currYear.'</option>';
// 			echo '<option value="'.$prevYear.$FallCode.'">Fall '.$prevYear.'</option>';
// 			echo '<option value="'.$prevYear.$SummerCode.'">Summer '.$prevYear.'</option>';
// 		// Fall Semester
// 		} else if ($month >= "07" && $month <= "11"){
// 			echo '<option value="'.$currYear.$FallCode.'">Fall '.$currYear.'</option>';
// 			echo '<option value="'.$currYear.$SummerCode.'">Summer '.$currYear.'</option>';
// 			echo '<option value="'.$currYear.$SpringCode.'">Spring '.$currYear.'</option>';
// 			echo '<option value="'.$prevYear.$FallCode.'">Fall '.$prevYear.'</option>';
// 		}
	}

?>