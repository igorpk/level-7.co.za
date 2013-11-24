<?php
header('content-type: text/css');
$id = $_GET['monid'];
?>

.clr {clear:both;}

/**
** global styles
**/

/* container style */
div#<?php echo $id; ?> ul.maximenuCK {
    height : 57px;
    padding : 0;
    margin : 0;
}

div#<?php echo $id; ?> ul.maximenuCK li.maximenuCK {
    background : none;
    list-style : none;
    border : none;
}

/* link image style */
div#<?php echo $id; ?> ul.maximenuCK li.maximenuCK>a img {
    margin : 3px;
    border : none;
}

/* img style without link (in separator) */
div#<?php echo $id; ?> ul.maximenuCK li.maximenuCK img {
    border : none;
}

div#<?php echo $id; ?> ul.maximenuCK li a.maximenuCK {
    text-decoration : none;
    text-indent : 2px;
    outline : none;
    background : none;
    border : none;
    padding : 0;
    cursor : pointer;
    color : #dcdcdc;
}

div#<?php echo $id; ?> ul.maximenuCK2 li a.maximenuCK {
    text-decoration : none;
    text-indent : 2px;
    outline : none;
    background : none;
    border : none;
    padding : 0;
    cursor : pointer;
    color : #bababa;
}

div#<?php echo $id; ?> ul.maximenuCK2 li a.maximenuCK:hover,
ul.maximenuCK2 li.sfhover a.maximenuCK:hover,
ul.maximenuCK2 li.sfhover a.maximenuCK{
background:#232323;
}

ul.maximenuCK2 li.parent.sfhover > a.maximenuCK{
background:#232323 !important;}

div#<?php echo $id; ?> ul.maximenuCK2 li a.maximenuCK:hover span{
color:#f0f0f0;}



/* separator item */
div#<?php echo $id; ?> ul.maximenuCK li span.separator {
    color : #bababa;
    display : block;
    text-transform : none;
    font-weight : bold;
    font-size : 14px;
    line-height : 25px;
    text-decoration : none;
    height : 25px;
    float : none !important;
    float : left;
    font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
    letter-spacing:-1px;
    padding: 0 15px;

}


/**
** active items
**/

/* current item title and description */
div#<?php echo $id; ?> ul.maximenuCK li.current>a span {
    color : #bababa;
}

/* current item title when mouseover */
div#<?php echo $id; ?> ul.maximenuCK li.current>a:hover span.titreCK {
background:#000;
}


div#<?php echo $id; ?> ul.maximenuCK li:hover,
ul.maximenuCK li.active,
ul.maximenuCK li.current {
background:#000 !important;
}

/* current item description when mouseover */
div#<?php echo $id; ?> ul.maximenuCK li.current>a:hover span.descCK {

}

/* active parent title */
div#<?php echo $id; ?> ul.maximenuCK li.active>a span.titreCK {
    color : #bababa;
}

/* active parent description */
div#<?php echo $id; ?> ul.maximenuCK li.active>a span.descCK {

}

/**
** first level items
**/

div#<?php echo $id; ?> ul.maximenuCK li.level0 {
    padding : 0 15px;
}

/* first level item title */
div#<?php echo $id; ?> ul.maximenuCK li.level0>a span.titreCK {
    color : #dcdcdc;
}

/* first level item description */
div#<?php echo $id; ?> ul.maximenuCK li.level0>a span.descCK {
    color : #dcdcdc;
}

/* first level item link */
div#<?php echo $id; ?> ul.maximenuCK li.parent.level0>a {
}

/* parent style level 0 */
div#<?php echo $id; ?> ul.maximenuCK li.parent.level0 li.parent {
}

/**
** items title and descriptions
**/

/* item title */
div#<?php echo $id; ?> span.titreCK {
    color : #dcdcdc;
    display : block;
    text-transform : uppercase;
    font-weight : bold;
    font-size : 14px;
    line-height : 57px;
    text-decoration : none;
    height : 57px;
    float : none !important;
    float : left;
    font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
    letter-spacing:-1px;
}


div#<?php echo $id; ?> ul.maximenuCK2 li  {
padding:2px 0;
}

div#<?php echo $id; ?> ul.maximenuCK2 li a span.titreCK {
    color : #bababa;
    display : block;
    text-transform : none;
    font-weight : bold;
    font-size : 14px;
    line-height : 25px;
    text-decoration : none;
    height : 25px;
    float : none !important;
    float : left;
    font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
    letter-spacing:-1px;
    padding: 0 15px;
}




/* item description */
div#<?php echo $id; ?> span.descCK {
    color : #dcdcdc;
    display : block;
    text-transform : none;
    font-size : 10px;
    text-decoration : none;
    height : 12px;
    line-height : 12px;
    float : none !important;
    float : left;
}

/* item title when mouseover */
div#<?php echo $id; ?> ul.maximenuCK  a:hover span.titreCK {
    color : #ddd;
}

/**
** child items
**/

/* child item title */
div#<?php echo $id; ?> ul.maximenuCK2  a.maximenuCK {
    width : 190px;
}

div#<?php echo $id; ?> ul.maximenuCK2 li a.maximenuCK {
    text-decoration : none;
    width : 190px;
    margin : 0 auto;
    padding : 3px 0 3px 0;
}

/* child item block */
div#<?php echo $id; ?> ul.maximenuCK ul.maximenuCK2 {
    background : #000;
    margin :0;
    padding : 0;
    border : none;
    width : 190px; /* important for Chrome and Safari compatibility */
	}

div#<?php echo $id; ?> ul.maximenuCK2 li.maximenuCK {
    width : 190px;
    padding : 2px 0 0 0;
    border : none;
    margin : 0;
    background : none;
	    height: 32px;
}

/* child item container  */
div#<?php echo $id; ?> ul.maximenuCK li div.floatCK {
    background : #000;
}

/**
** module style
**/

div#<?php echo $id; ?> div.maximenuCK_mod {
    width : 190px;
    padding : 0;
    overflow : hidden;
    color : #ddd;
    white-space : normal;
}

div#<?php echo $id; ?> div.maximenuCK_mod div.moduletable {
    border : none;
    background : none;
}

div#<?php echo $id; ?> div.maximenuCK_mod  fieldset{
    width : 160px;
    padding : 0;
    margin : 0 auto;
    overflow : hidden;
    background : #1a1a1a;
    border : none;
}

div#<?php echo $id; ?> ul.maximenuCK2 div.maximenuCK_mod a {
    border : none;
    margin : 0;
    padding : 0;
    display : inline;
    background : #1a1a1a;
    color : #888;
    font-weight : normal;
}

div#<?php echo $id; ?> ul.maximenuCK2 div.maximenuCK_mod a:hover {
    color : #f0f0f0;
}

/* module title */
div#<?php echo $id; ?> ul.maximenuCK div.maximenuCK_mod h3 {
    font-size : 14px;
    width : 170px;
    color : #aaa;
    font-size : 14px;
    font-weight : normal;
    background : #444;
    margin : 5px 0 0 0;
    padding : 3px 0 3px 0;
}

div#<?php echo $id; ?> ul.maximenuCK2 div.maximenuCK_mod ul {
    margin : 0;
    padding : 0;
    width : 170px;
    background : none;
    border : none;
    text-align : left;
}

div#<?php echo $id; ?> ul.maximenuCK2 div.maximenuCK_mod li {
    margin : 0 0 0 15px;
    padding : 0;
    width : 155px;
    background : none;
    border : none;
    text-align : left;
    font-size : 11px;
    float : none;
    display : block;
    line-height : 20px;
    white-space : normal;
}

/* login module */
div#<?php echo $id; ?> ul.maximenuCK2 div.maximenuCK_mod #form-login ul {
    left : 0;
    margin : 0;
    padding : 0;
    width : 170px;
}

div#<?php echo $id; ?> ul.maximenuCK2 div.maximenuCK_mod #form-login ul li {
    margin : 2px 0;
    padding : 0 5px;
    height : 20px;
    background : #1a1a1a;
}


/**
** columns width & child position
**/

/* child blocks position (from level2 to n) */
div#<?php echo $id; ?> ul.maximenuCK li.maximenuCK div.floatCK div.floatCK {
    margin : -38px 0 0 190px;
}

/* margin for overflown elements that rolls to the left */
div#<?php echo $id; ?> ul.maximenuCK li.maximenuCK div.floatCK div.floatCK.fixRight  {
    margin-right : 190px;
}

/* default width */
div#<?php echo $id; ?> ul.maximenuCK li div.floatCK {
    width : 190px;
    padding: 5px 0 5px 0;
}

/* 2 cols width */
div#<?php echo $id; ?> ul.maximenuCK li div.cols2 {
    width : 360px;
}

div#<?php echo $id; ?> ul.maximenuCK li div.cols2>div.maximenuCK2 {
    width : 50%;
}

/* 3 cols width */
div#<?php echo $id; ?> ul.maximenuCK li div.cols3 {
    width : 540px;
}

div#<?php echo $id; ?> ul.maximenuCK li div.cols3>div.maximenuCK2 {
    width : 33%;
}

/* 4 cols width */
div#<?php echo $id; ?> ul.maximenuCK li div.cols4 {
    width : 720px;
}

div#<?php echo $id; ?> ul.maximenuCK li div.cols4>div.maximenuCK2 {
    width : 25%;
}



/**
** fancy parameters
**/

div#<?php echo $id; ?> .maxiFancybackground {
    list-style : none;
}

div#<?php echo $id; ?> .maxiFancybackground .maxiFancycenter {
   background:#000;
    height : 57px;
}

div#<?php echo $id; ?> .maxiFancybackground .maxiFancyleft {

}

div#<?php echo $id; ?> .maxiFancybackground .maxiFancyright {

}

/**
** rounded style
**/

/* global container */
div#<?php echo $id; ?> div.maxiRoundedleft {

}

div#<?php echo $id; ?> div.maxiRoundedcenter {

}

div#<?php echo $id; ?> div.maxiRoundedright {

}

/* child container */
div#<?php echo $id; ?> div.maxidrop-top {

}

div#<?php echo $id; ?> div.maxidrop-main {

}

div#<?php echo $id; ?> div.maxidrop-bottom {

}


