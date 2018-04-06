<?php
header('Content-Type:application/xml');
$str = "<?xml version='1.0' encoding='UTF-8' ?>";
$str .= "<bookstore>";
$str .='<book category="COOKING">';
$str .='<title lang="en">Everyday Italian</title>';
$str .='<author>Giada De Laurentiis</author>';
$str .='<year>2005</year>';
$str .='<price>30.00</price>';
$str .='</book>';
$str .='<book category="CHILDREN">';
$str .='<title lang="en">Harry Potter</title>';
$str .='<author>J K. Rowling</author>';
$str .='<year>2005</year>';
$str .='<price>29.99</price>';
$str .='</book>';
$str .='<book category="CHILDREN">';
$str .='<title lang="en">Harry Potter</title>';
$str .='<author>J K. Rowling</author>';
$str .='<year>2005</year>';
$str .='<price>29.99</price>';
$str .='</book>';
$str .="</bookstore>";
echo $str;

