<?php 
require_once'laptop.php';

$identitas=new laptop('adit','Asus');
echo "Pemilik Laptop..".$identitas->get_pemilik().'<br>';
echo "Merek Laptop..".$identitas->get_merek().'<br>'.'<br>';
$identitas=new laptop('ahmad','lenovo');
echo "Pemilik Laptop..".$identitas->get_pemilik().'<br>';
echo "Merek Laptop..".$identitas->get_merek().'<br>'.'<br>';
$identitas=new laptop('gema','apple');
echo "Pemilik Laptop..".$identitas->get_pemilik().'<br>';
echo "Merek Laptop..".$identitas->get_merek().'<br>'.'<br>';
?>