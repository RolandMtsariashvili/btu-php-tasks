<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function calculate(Request $request) {
        $numberOne = $request->get('numberOne');
        $numberTwo = $request->get('numberTwo');
        $action = $request->get('action');

        $result = $this->performOperation($numberOne, $numberTwo, $action);
        return view('calculate', compact('result'));
    }

    public function performOperation($numberOne, $numberTwo, $action) {
        if ($action == 'plus') {
            return $numberOne + $numberTwo;
        } elseif ($action == 'minus') {
            return $numberOne - $numberTwo;
        } elseif ($action == 'multiply') {
            return $numberOne * $numberTwo;
        } elseif ($action == 'divide') {
            return $numberOne / $numberTwo;
        } else {
            return 'unsupported action. supported actions are: "plus", "minus", "divide", "multiply"';
        }
    }
}
