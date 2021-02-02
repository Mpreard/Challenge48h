
//------------------chrono-----------------
var iHour = 0; var iMin = 0; var iSec = 0;
var iCount = 0; var iM=0; var iS=0;
function startCount(){
             iCount++;
             iSec = iCount;
             if ( iSec>59 ) { iMin= iMin+1 ;  iSec=0 ; iCount=0;}
             if (  iSec<10 ) {  iS= "0" +iSec;} else {iS=iSec;}
             if ( iMin>59 ) { iHour= iHour+1 ; iMin=0;}
             if (  iMin<10 ) {  iM= "0" +iMin;} else {iM=iMin;}
var chrono="..." +iHour+ ":" +iM+ ":" +iS;
document.getElementById('clock').value=chrono;
setTimeout("startCount()",1000);
}
//------------------game-----------------
var colors= new Array('r','r','r','r','g','g','g','g','b','b','b','b','w','y','y','y');
//-----------------(images dans le zip)------------------------
var pics= new Array('red.gif','green.gif','blue.gif','yellow.gif','pix.gif');
var col=""; var nr; 
var pos; var valid= false;
var size = colors.length;
function delete_element(array) {
   size = colors.length;
   var validNo = (nr != "NaN");
   var inRange = ( (nr>=0) && (nr<size) );
   if (validNo && inRange) {
       for (var i= 0; i<=size-1; i++) {
              colors[i] = ((i == nr) ? "delete" : colors[i]);}
       for (var j= nr; j<size-1; j++) {
              if (j!= size) {colors[j] = colors[j+1];}}
colors.length = size-1;
}}
function get_col(k) {
   nr= Math.floor(Math.random()*(size-1));
   if (colors[nr]=='r') {col=pics[0];}
   if (colors[nr]=='g') {col=pics[1];}
   if (colors[nr]=='b') {col=pics[2];}
   if (colors[nr]=='y') {col=pics[3];}
   if (colors[nr]=='w') {col=pics[4]; pos=k;}
delete_element(colors);
}
function mix_colors() {
    self.location.reload(true);
}
function check_validity(k) {
    var Ck=parseInt(k); 
    valid= false;
    if ((pos==(Ck-4)) || (pos==Ck+4)) {
          valid= true;} 
    if ((pos==(Ck-1)) && (pos!=3) && (pos!=7) && (pos!=11)) {
          valid= true;}
    if ((pos==(Ck+1)) && (pos!=4) && (pos!=8) && (pos!=12)) {
          valid= true;}
}
var temp = new Image();
function run_game(k) {
  check_validity(k);
  if (valid==true) {
            temp.src= document.images[k].src; 
            document.images[k].src= document.images[pos].src; 
            document.images[pos].src= temp.src;
            pos =k; valid= false;}
}

     document.write('<table style="cursor:pointer;"><tr>');
     for (i=0; i<16; i++) {
           get_col(i);
           if ((i==4) || (i==8) || (i==12)) {document.write('</tr><tr>');};
           document.write('<td><img src="'+col+'" name="'+i+'" width=40px height=40px onmousedown="run_game('+i+')"></td>');}
document.write('</tr></table>');