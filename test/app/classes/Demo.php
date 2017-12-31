<?php
namespace App\classes; // what is namespace?//virtual directory create kore.


class Demo
{
    public function wordCharacterCount($data){
            $stringLength = strlen($data['given_string']);
            $wordLength=str_word_count($data['given_string']);
            $result = [
              'string_length' => $stringLength,
              'word_length' => $wordLength

            ];
            return $result;
    }
}