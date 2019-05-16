document.write("問１<br>");
for(var i=1;i<=5;i++){
    document.write("★");
}

document.write("<br>問2<br>");
for(var z=1;z<=3;z++){
   
    for(var x=1;x<=3;x++){
    document.write("★");
}
  document.write("<br>");
}
    
    
document.write("問3<br>");    
for(var y=1;y<=2;y++){
    
    for(var v=1;v<=5;v++){
    document.write("☆");  
}
    document.write("<br>");
}

document.write("問4<br>");
for(var zx=1;zx<=4;zx++){
   
    for(var xy=1;xy<=5;xy++){
    document.write("★");
}
  document.write("<br>");
}


document.write("問5<br>");
for(var a=1;a<=4;a++){
   
    for(var b=1;b<=3;b++){
    document.write("★");
}
  document.write("<br>");
}

document.write("問6<br>");
for(var bc=0;bc<3;bc++){
    
for(var cd=0;cd<=2;cd++) {
    if(cd%2==0){
     document.write("★");}
     else{
    document.write("☆");}
}
    document.write("<br>");
}

document.write("問7<br>");
for(var bc=0;bc<5;bc++){
    
for(var cd=0;cd<=5;cd++) {
    if(cd%2==0){
     document.write("★");}
     else{
    document.write("☆");}
}
    document.write("<br>");
}


document.write("問8<br>");
for(var df=1;df<=5;df++){
    
 for(var fg=2;fg<=df+1;fg++){
     document.write("★");}
    document.write("<br>");} 

document.write("問1<br>");
function maru(maru1,enritu=3.14){
    return("円の面積は"+maru1*maru1*enritu);
}
document.write(maru(5) );
document.write("<br>");
document.write(maru(7));
document.write("<br>");
document.write(maru(10));
document.write("<br>");


document.write("問2<br>");
function 
all(nu1,nu2){
return"合計金額は"+(500*nu1+200*nu2)+"円です";}

document.write(all(2,1) );
document.write("<br>");
document.write(all(1,5));
document.write("<br>");
document.write(all(3,7));
document.write("<br>");
   
    