<?php



can_vote(15);
function can_vote($num){
if($num<18){
echo "is no eligible to vote";
}else{
    echo "iseligible to vote";
}
}
?>