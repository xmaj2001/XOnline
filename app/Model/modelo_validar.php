<?php

namespace App\Model;
trait modelo_validar{
     //Validar campos
     public static function validar_campo($texto, $conector = null)
     {
         $db = null;
         if (isset($conector)) {
             $db = $conector;
         } else {
             $db = self::Get_Conector();
         }
         if ($db != null) {
             return mysqli_escape_string($db, htmlspecialchars(addslashes($texto)));
         }
     }
 
     public static function validar_post($conector = null)
     {
         $db = null;
         if (isset($conector)) {
             $db = $conector;
         } else {
             $db = self::Get_Conector();
         }
         if ($db != null) {
             if (isset($_POST)) {
                 foreach ($_POST as $key => $value) {
                     $_POST[$key] = mysqli_escape_string($db, htmlspecialchars(addslashes($_POST[$key])));
                 }
             }
         }
     }
     //-------
}