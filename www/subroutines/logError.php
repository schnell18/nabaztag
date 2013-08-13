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
/**************************************************************
 * log error.  You must create file and permission in advance.
 **************************************************************/
function logError($msg)
{
    date_default_timezone_set('America/Chicago'); //for warning

    $date = date("Y-m-d H:i:s");
    $msg = "[$date] $msg \n";
    $file='../etc/nabaztag_error.log';
    error_log($msg,3,$file);
}
?>