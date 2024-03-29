<!DOCTYPE html>
<html>
<body>

<?php
class Solution {
  
  function isValid($str)  {
        $q = new SplStack();
        foreach(str_split($str) as $s){
            if($q->isEmpty()) $q->push($s);
            else{
                if($s == ')' && $q->top() == '(') $q->pop();
                else if($s == '}' && $q->top() == '{') $q->pop();
                else if($s == ']' && $q->top() == '[') $q->pop();
                else $q->push($s);
            }
        }
        return $q->isEmpty();
  }
}

$ob = new Solution();
if($ob->isValid('()[]{}')) echo "true<br>";
else echo "false<br>";

if($ob->isValid('([)]')) echo "true<br>";
else echo "false<br>";

?>
 
</body>
</html>