<?php
$str = "s * (s – a) * (s – b) * (s – c";

function checkMatch($str){
    $stack = new SplStack();
    $arr = str_split($str);
    foreach ($arr as $value){
        if($value == '('){
            $stack->push($value);
        }
        if ($value == ')'){
            $stack->pop();
        }
    }
    return $stack;
}
function show($str){
    if(checkMatch($str)==null){
        return "match";
    }
    return "not match";

}
print_r(show($str));
