<?php  
namespace App\Http\Controllers;


class HomeController extends controller{


   function showberanda(){
   	   return view('admin.beranda');
   }

   function showproduk(){
   	return view('admin.produk.index');
   }

   function showtemplate(){
   	return view('admin.template.index');
   }

   function showkategori(){
   	return view('admin.kategori.index');
   }

   function showprofil(){
   	return view('admin.profil.index');
   }

   function test($produk, $hargaMin = 0, $hargaMax = 0){
      if($produk == 'payung'){
         echo "Tampilkan produk Payung";
      }elseif($produk == 'mouse'){
         echo "Produk mouse";
      }
      echo "<br>";
      echo "Harga Min adalah $hargaMin <br>";
       echo "Harga Max  adalah $hargaMax <br>";
   }

}
