<?php
//include the class file
require 'ClassAutoLoad.php';

//call the methods
$ObjLayouts->header($conf);
$ObjLayouts->navbar($conf);
$ObjLayouts->banner($conf);
$ObjLayouts->content($conf);
$ObjLayouts->footer($conf);