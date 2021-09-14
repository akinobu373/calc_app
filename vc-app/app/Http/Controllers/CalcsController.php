<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function result($num1, $operator, $num2)
    {
        if ($operator == 'addition') {
            $total = $num1 + $num2;
        } elseif ($operator == 'subtraction') {
            $total = $num1 - $num2;
        } elseif ($operator == 'multiplication') {
            $total = $num1 * $num2;
        } elseif ($operator == 'division') {
            $total = $num1 / $num2;
        } else {
            $total = '正しい演算子を指定して下さい';
        }

        return view('result', ['total' => $total]);
    }
}
