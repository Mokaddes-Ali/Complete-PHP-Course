<?php

// alternative syntax depend on controll structure

if($condition){
    // statement
}else{
    // statment
}



if($condition){
    // statement
}elseif($Anothercondition){
    // statment
}elseif($Anothercondition){
    // statement
}else{
    
}


// Convert Alternative Syntax
if($condition):
    // statement
else:
    // statment
endif; 


if($condition):
    // statement
elseif($Anothercondition):
    // statment
elseif($Anothercondition):
    // statement
else:
    
endif;

// While control statement
while($condition){
    // statments
}

// Alternative Syntax
while($condition):
    // statments
endwhile;



// for controll statement
for( ; ; ){
    // statement
}

//Alternative Syntax
 for( ; ; ):
    // statement
 endfor;

?>