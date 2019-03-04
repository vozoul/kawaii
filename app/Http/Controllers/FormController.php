<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 04/03/2019
 * Time: 10:01
 */

namespace App\Http\Controllers;


class FormController extends PagesController
{
   public function viewForm()
   {
       return view(forms);
   }

   public function store()
   {

   }



}