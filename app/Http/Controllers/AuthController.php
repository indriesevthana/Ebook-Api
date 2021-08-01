<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119091,
        'name' => 'Indrie Sevthana Azzahra',
        'gender' => 'Female',
        'phone' => '082325631662',
        'class' => 'XII RPL 3'];
  }
}