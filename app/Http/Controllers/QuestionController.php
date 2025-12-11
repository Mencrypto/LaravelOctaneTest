<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
        public function show(Question $question) //Aqui hace la consulta with
        {
            $question->load('answers', 'category', 'user'); //Agrega las relaciones que requiere a la consulta
            //compact return same key and value name
            return view('questions.show', ['question' => $question,]);
        }
}
