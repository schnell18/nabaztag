<?php
/*
NabaztagLives 

Copyright (C) 2013 Pokey (Pokey@nabaztaglives.com)

Comments, questions, and bug reports should be submitted via
http://sourceforge.net/projects/nabaztaglives/

More details can be found at the project home page:
http://nabaztaglives.com

This file is part of NabaztagLives.

NabaztagLives is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

NabaztagLives is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with NabaztagLives.  If not, see <http://www.gnu.org/licenses/>.
*/
////////////////////////////////////////////////////
//clean the field by removing invalid chars
////////////////////////////////////////////////////
function clean($field)
{
	$field = str_replace(':','',$field);
	$field = str_replace('\\','',$field);
	$field = str_replace("\0",'',$field);
	$field = str_replace(';','',$field);
    //$field = addslashes($field);
	$field  = trim($field);
	$field = str_replace('\'','`',$field);
	$field = str_ireplace('<script','',$field);
	$field = str_ireplace('<object','',$field);
	$field = str_ireplace('<html','',$field);
	$field = str_ireplace('<embed','',$field);
	
	//note add anti-xss
	return $field;
}

////////////////////////////////////////////////
// forum clean allows colons
////////////////////////////////////////////////
function clean2($field)
{
	$field = str_replace('\\','',$field);
	//$field = str_replace(':','',$field);
	$field = str_replace("\0",'',$field);
	//$field = str_replace(';','',$field);
	//$field = addslashes($field);
    $field  = trim($field);
	$field = str_replace('\'','`',$field);
	$field = str_ireplace('<script','',$field);
	$field = str_ireplace('<object','',$field);
	$field = str_ireplace('<html','',$field);
	$field = str_ireplace('<embed','',$field);

   	//note add anti-xss
	return $field;
}

?>
