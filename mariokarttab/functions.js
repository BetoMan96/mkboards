function individuals() 
{
var p1= parseInt(document.getElementById('p1_2h').value) + parseInt(document.getElementById('p1_3h').value) + parseInt(document.getElementById('p1_4h').value);
document.getElementById('p1_5h').value= p1;
var avg1=p1/3;
document.getElementById('p1_6h').value= (avg1.toFixed(2));
var p2= parseInt(document.getElementById('p2_2h').value) + parseInt(document.getElementById('p2_3h').value) + parseInt(document.getElementById('p2_4h').value);
document.getElementById('p2_5h').value= p2;
var avg2=p2/3;
document.getElementById('p2_6h').value= (avg2.toFixed(2));
var p3= parseInt(document.getElementById('p3_2h').value) + parseInt(document.getElementById('p3_3h').value) + parseInt(document.getElementById('p3_4h').value);
document.getElementById('p3_5h').value= p3;
var avg3=p3/3;
document.getElementById('p3_6h').value= (avg3.toFixed(2));
var p4= parseInt(document.getElementById('p4_2h').value) + parseInt(document.getElementById('p4_3h').value) + parseInt(document.getElementById('p4_4h').value);
document.getElementById('p4_5h').value= p4;
var avg4=p4/3;
document.getElementById('p4_6h').value= (avg4.toFixed(2));
var p4_1= parseInt(document.getElementById('p5_2h').value) + parseInt(document.getElementById('p5_3h').value) + parseInt(document.getElementById('p5_4h').value);
document.getElementById('p5_5h').value= p4_1;
var avg4_1=p4_1/3;
document.getElementById('p5_6h').value= (avg4_1.toFixed(2));
var p4_2= parseInt(document.getElementById('p6_2h').value) + parseInt(document.getElementById('p6_3h').value) + parseInt(document.getElementById('p6_4h').value);
document.getElementById('p6_5h').value= p4_2;
var avg4_2=p4_2/3;
document.getElementById('p6_6h').value= (avg4_2.toFixed(2));

var p5= parseInt(document.getElementById('p1_3o').value) + parseInt(document.getElementById('p1_2o').value) + parseInt(document.getElementById('p1_4o').value);
document.getElementById('p1_5o').value= p5;
var avg5=p5/3;
document.getElementById('p1_6o').value= (avg5.toFixed(2));
var p6= parseInt(document.getElementById('p2_3o').value) + parseInt(document.getElementById('p2_2o').value) + parseInt(document.getElementById('p2_4o').value);
document.getElementById('p2_5o').value= p6;
var avg6=p6/3;
document.getElementById('p2_6o').value= (avg6.toFixed(2));
var p7= parseInt(document.getElementById('p3_3o').value) + parseInt(document.getElementById('p3_2o').value) + parseInt(document.getElementById('p3_4o').value);
document.getElementById('p3_5o').value= p7;
var avg7=p7/3;
document.getElementById('p3_6o').value= (avg7.toFixed(2));
var p8= parseInt(document.getElementById('p4_3o').value) + parseInt(document.getElementById('p4_2o').value) + parseInt(document.getElementById('p4_4o').value);
document.getElementById('p4_5o').value= p8;
var avg8=p8/3;
document.getElementById('p4_6o').value= (avg8.toFixed(2));
var p4_3= parseInt(document.getElementById('p5_2o').value) + parseInt(document.getElementById('p5_3o').value) + parseInt(document.getElementById('p5_4o').value);
document.getElementById('p5_5o').value= p4_3;
var avg4_3=p4_3/3;
document.getElementById('p5_6o').value= (avg4_3.toFixed(2));
var p4_4= parseInt(document.getElementById('p6_2o').value) + parseInt(document.getElementById('p6_3o').value) + parseInt(document.getElementById('p6_4o').value);
document.getElementById('p6_5o').value= p4_4;
var avg4_4=p4_4/3;
document.getElementById('p6_6o').value= (avg4_4.toFixed(2));
}

function calc()
{
var h1 = parseInt(document.getElementById('h1').value);
var h2 = parseInt(document.getElementById('h2').value);
var h3 = parseInt(document.getElementById('h3').value);
var o1 = parseInt(document.getElementById('o1').value);
var o2 = parseInt(document.getElementById('o2').value);
var o3 = parseInt(document.getElementById('o3').value);

var toth = h1+h2+h3;
var toto = o1+o2+o3;

toth -= Math.abs(parseInt(document.getElementById('penal1').value));
toto -= Math.abs(parseInt(document.getElementById('penal2').value));

document.getElementById('htot').value= toth;
document.getElementById('otot').value= toto;


document.getElementById('diff1').value= h1-o1;
document.getElementById('diff2').value= h2-o2;
document.getElementById('diff3').value= h3-o3;
document.getElementById('difftot').value= toth-toto;

htot = document.getElementById('htot');
otot = document.getElementById('otot');

    if ( htot.value == otot.value )
    {
        htot.style.color = 'blue';
        otot.style.color = 'blue'; 
    }
    else {
    if ( htot.value > otot.value ) {
        htot.style.color = 'green';
        otot.style.color = 'red'; } else {
        otot.style.color = 'green';
        htot.style.color = 'red'; }
    }

var totals = [], indices = [];
    
for (var i=0; i<6; i++) {
    totals[i] = parseInt(document.getElementById('p'+(i+1)+'_5h').value, 10);
    indices[i] = i;
}

for (var i=6; i<12; i++) {
    totals[i] = parseInt(document.getElementById('p'+(i-5)+'_5o').value, 10);
    indices[i] = i;
}

indices.sort(function(a, b) {
    return totals[b]- totals[a];
});
for (var i=0; i<indices.length; i++) {
    document.getElementById('mvp'+(indices[i]+1)).value = (i+1);    }

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!

var yyyy = today.getFullYear();
if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = mm+'/'+dd+'/'+yyyy;


for (var i=1; i<13; i++) {
    num = parseInt(document.getElementById('mvp'+i).value);
    switch(num ){
     case 1:
      uno = document.getElementById('mvp'+i);
      uno.style.color = 'gold';
      break;  
     case 2:
      uno = document.getElementById('mvp'+i);
      uno.style.color = 'silver'; 
      break; 
     case 3:
      uno = document.getElementById('mvp'+i);
      uno.style.color = 'brown'; 
      break; 
     default:
      uno = document.getElementById('mvp'+i);
      uno.style.color = 'black'; 
      break; 
    }
   
  }
}

function update_gps() {
 
document.getElementById('h1').value = parseInt(document.getElementById('p1_2h').value) + parseInt(document.getElementById('p2_2h').value) + parseInt(document.getElementById('p3_2h').value) + parseInt(document.getElementById('p4_2h').value) + parseInt(document.getElementById('p5_2h').value) + parseInt(document.getElementById('p6_2h').value);
document.getElementById('h2').value = parseInt(document.getElementById('p1_3h').value) + parseInt(document.getElementById('p2_3h').value) + parseInt(document.getElementById('p3_3h').value) + parseInt(document.getElementById('p4_3h').value) + parseInt(document.getElementById('p5_3h').value) + parseInt(document.getElementById('p6_3h').value);
document.getElementById('h3').value = parseInt(document.getElementById('p1_4h').value) + parseInt(document.getElementById('p2_4h').value) + parseInt(document.getElementById('p3_4h').value) + parseInt(document.getElementById('p4_4h').value) + parseInt(document.getElementById('p5_4h').value) + parseInt(document.getElementById('p6_4h').value);
document.getElementById('o1').value = parseInt(document.getElementById('p1_2o').value) + parseInt(document.getElementById('p2_2o').value) + parseInt(document.getElementById('p3_2o').value) + parseInt(document.getElementById('p4_2o').value) + parseInt(document.getElementById('p5_2o').value) + parseInt(document.getElementById('p6_2o').value);
document.getElementById('o2').value = parseInt(document.getElementById('p1_3o').value) + parseInt(document.getElementById('p2_3o').value) + parseInt(document.getElementById('p3_3o').value) + parseInt(document.getElementById('p4_3o').value) + parseInt(document.getElementById('p5_3o').value) + parseInt(document.getElementById('p6_3o').value);
document.getElementById('o3').value = parseInt(document.getElementById('p1_4o').value) + parseInt(document.getElementById('p2_4o').value) + parseInt(document.getElementById('p3_4o').value) + parseInt(document.getElementById('p4_4o').value) + parseInt(document.getElementById('p5_4o').value) + parseInt(document.getElementById('p6_4o').value);

var toth = parseInt(document.getElementById('h1').value) + parseInt(document.getElementById('h2').value) +parseInt(document.getElementById('h3').value);
var toto = parseInt(document.getElementById('o1').value) + parseInt(document.getElementById('o2').value) +parseInt(document.getElementById('o3').value);

document.getElementById('htot').value= toth;
document.getElementById('otot').value= toto;

}

function tag(id,target,k) {
 if (target != '') {
  document.getElementById(id).innerHTML = target;
  document.getElementById(id).style.fontWeight = 'bold';
 } else {
  document.getElementById(id).innerHTML = k;
  document.getElementById(id).style.fontWeight = 'bold';
 }
}

function clan(id,target,k) {
 if (target != '') {
  document.getElementById(id).innerHTML = target;
  document.getElementById(id).style.fontWeight = 'bold';
 } else {
  document.getElementById(id).innerHTML = k;
  document.getElementById(id).style.fontWeight = 'bold'; 
 } 
}

function generatab() {

 for(var i = 1; i <= 4; i++){
  
  for(var j = 1; j < 13; j++) {
   if (j<7) {
    document.getElementById('indiv'+j+'_'+i).innerHTML = document.getElementById('p'+j+'_1h').value;
   } else {
    document.getElementById('indiv'+j+'_'+i).innerHTML = document.getElementById('p'+(j-6)+'_1o').value;
   }
  }
    
  for(var j = 1; j < 13; j++) {
   if (j<7) {
    document.getElementById('p'+j+'_2h_'+i).innerHTML = document.getElementById('p'+j+'_2h').value;
    document.getElementById('p'+j+'_3h_'+i).innerHTML = document.getElementById('p'+j+'_3h').value;
    document.getElementById('p'+j+'_4h_'+i).innerHTML = document.getElementById('p'+j+'_4h').value;
    document.getElementById('p'+j+'_5h_'+i).innerHTML = document.getElementById('p'+j+'_5h').value;
   } else {
    document.getElementById('p'+(j-6)+'_2o_'+i).innerHTML = document.getElementById('p'+(j-6)+'_2o').value;
    document.getElementById('p'+(j-6)+'_3o_'+i).innerHTML = document.getElementById('p'+(j-6)+'_3o').value;
    document.getElementById('p'+(j-6)+'_4o_'+i).innerHTML = document.getElementById('p'+(j-6)+'_4o').value;
    document.getElementById('p'+(j-6)+'_5o_'+i).innerHTML = document.getElementById('p'+(j-6)+'_5o').value;
   }
  }
  
  document.getElementById('total1h_'+i).innerHTML = document.getElementById('h1').value;
  document.getElementById('total2h_'+i).innerHTML = document.getElementById('h2').value;
  document.getElementById('total3h_'+i).innerHTML = document.getElementById('h3').value;
  document.getElementById('total4h_'+i).innerHTML = document.getElementById('htot').value;
  
  document.getElementById('total1o_'+i).innerHTML = document.getElementById('o1').value;
  document.getElementById('total2o_'+i).innerHTML = document.getElementById('o2').value;
  document.getElementById('total3o_'+i).innerHTML = document.getElementById('o3').value;
  document.getElementById('total4o_'+i).innerHTML = document.getElementById('otot').value;
  
  document.getElementById('clan1_1').innerHTML = document.getElementById('htag').value;
  document.getElementById('clan2_1').innerHTML = document.getElementById('otag').value;
  
  document.getElementById('clan1_2').innerHTML = document.getElementById('htag').value;
  document.getElementById('clan2_2').innerHTML = document.getElementById('otag').value;
  
  document.getElementById('pen1_1').innerHTML = document.getElementById('penal1').value;
  document.getElementById('pen2_2').innerHTML = document.getElementById('penal2').value;
  
  for(var j = 1; j < 13; j++) {
   if (j<7) {
    document.getElementById('avg'+j).innerHTML = document.getElementById('p'+j+'_6h').value;
   } else {
    document.getElementById('avg'+j).innerHTML = document.getElementById('p'+(j-6)+'_6o').value;
   }
  }
  
  for(var j = 1; j < 13; j++) {
   if (j<7) {
    document.getElementById('tag'+j).innerHTML = document.getElementById('t1k').value;
   } else {
    document.getElementById('tag'+j).innerHTML = document.getElementById('t2k').value;
   }
  }

 }
   
  document.getElementById('avg1h').innerHTML = (parseInt(document.getElementById('total4h_1').innerHTML)/3).toFixed(2);
  document.getElementById('avg2o').innerHTML = (parseInt(document.getElementById('total4o_1').innerHTML)/3).toFixed(2);
  
  document.getElementById('clantag1').innerHTML = '<font size="20">' + document.getElementById('t1k').value + '</font>';
  document.getElementById('clantag2').innerHTML = '<font size="20">' + document.getElementById('t2k').value + '</font>';
  
  document.getElementById('diff1k').innerHTML = parseInt(document.getElementById('diff1').value);
  document.getElementById('diff2k').innerHTML = parseInt(document.getElementById('diff2').value);
  document.getElementById('diff3k').innerHTML = parseInt(document.getElementById('diff3').value);
  document.getElementById('totdiff').innerHTML = parseInt(document.getElementById('difftot').value);
    
  document.getElementById('clantag1_1').innerHTML = document.getElementById('htag').value;
  document.getElementById('clantag2_2').innerHTML = document.getElementById('otag').value;
  
  document.getElementById('clt1').innerHTML = '<font size="20">' + document.getElementById('t1k').value + '</font>';
  document.getElementById('clt2').innerHTML = '<font size="20">' + document.getElementById('t2k').value + '</font>';
  
  document.getElementById('clantagr').innerHTML = '<b>'+document.getElementById('htag').value+'</b>';
  document.getElementById('clantagr2').innerHTML = '<b>'+document.getElementById('otag').value+'</b>';
  
  document.getElementById('diomerda').innerHTML = document.getElementById('tag1').innerHTML;
  document.getElementById('diomerda2').innerHTML = document.getElementById('tag7').innerHTML;
  
  document.getElementById('diff1c').innerHTML = parseInt(document.getElementById('diff1').value);
  document.getElementById('diff2c').innerHTML = parseInt(document.getElementById('diff2').value);
  document.getElementById('diff3c').innerHTML = parseInt(document.getElementById('diff3').value);
  document.getElementById('diff4c').innerHTML = parseInt(document.getElementById('difftot').value);
  
  document.getElementById('p1k').innerHTML = parseInt(document.getElementById('penal1').value);
  document.getElementById('p2k').innerHTML = parseInt(document.getElementById('penal2').value);
  document.getElementById('p3k').innerHTML = Math.abs( parseInt(document.getElementById('penal1').value) - parseInt(document.getElementById('penal2').value) );
}

 function reset_tab(i) {
  for(var j = 1; j < 13; j++) {
   if (j<7) {
    document.getElementById('p'+j+'_'+i+'h_4').style.backgroundColor = '#333399';
   } else {
    document.getElementById('p'+(j-6)+'_'+i+'o_4').style.backgroundColor = '#808080';
   }
  }            
 }

 function mvp_on() {
 
  var totals = [], indices = [];
    
  for (var i=0; i<6; i++) {
    totals[i] = parseInt(document.getElementById('p'+(i+1)+'_5h').value, 10);
    indices[i] = i;
  }

  for (var i=6; i<12; i++) {
    totals[i] = parseInt(document.getElementById('p'+(i-5)+'_5o').value, 10);
    indices[i] = i;
  }

  indices.sort(function(a, b) {
    return totals[b] - totals[a];
  });
   
  for(var i=0; i<3; i++) {
   switch (i) {
    case 0:
      if ((indices[i]+1) < 7) {
       document.getElementById('p'+(indices[i]+1)+'_5h_4').style.backgroundColor = '#FFCC00';  
      } else {
       document.getElementById('p'+((indices[i]+1)-6)+'_5o_4').style.backgroundColor = '#FFCC00';  
      }
      break;
    case 1:
      if ((indices[i]+1) < 7) {
       document.getElementById('p'+(indices[i]+1)+'_5h_4').style.backgroundColor = '#C0C0C0';  
      } else {
       document.getElementById('p'+((indices[i]+1)-6)+'_5o_4').style.backgroundColor = '#C0C0C0';  
      } 
      break;
    case 2:
      if ((indices[i]+1) < 7) {
       document.getElementById('p'+(indices[i]+1)+'_5h_4').style.backgroundColor = '#A43500';  
      } else {
       document.getElementById('p'+((indices[i]+1)-6)+'_5o_4').style.backgroundColor = '#A43500';  
      }  
      break;
   }
  }
  
 } 
 
 
 function mvp_gp() {
  for(var k=2; k<5; k++) {
  
   var totals = [], indices = [];
    
   for (var i=0; i<6; i++) {
    totals[i] = parseInt(document.getElementById('p'+(i+1)+'_'+k+'h').value, 10);
    indices[i] = i;
   }

   for (var i=6; i<12; i++) {
    totals[i] = parseInt(document.getElementById('p'+(i-5)+'_'+k+'o').value, 10);
    indices[i] = i;
   }

   indices.sort(function(a, b) {
    return totals[b] - totals[a];
   });
   
   for(var i=0; i<1; i++) {
    switch (i) {
     case 0:
       if ((indices[i]+1) < 7) {
        document.getElementById('p'+(indices[i]+1)+'_'+k+'h_4').style.backgroundColor = '#FFCC00';  
       } else {
        document.getElementById('p'+((indices[i]+1)-6)+'_'+k+'o_4').style.backgroundColor = '#FFCC00';  
       }
       break;
    }
   }
   
  }
 }
 

function tab1h(color) {
 
  for(var j = 1; j < 7; j++) {
    document.getElementById('indiv'+j+'_2').style.color = '#'+color;
  }

  for(var i = 2; i < 6; i++) {

    for(var j = 1; j < 7; j++) {

     document.getElementById('p'+j+'_'+i+'h_2').style.color = '#'+color;

    }
    
  }
  
  for(var j = 1; j < 5; j++) {
   document.getElementById('total'+j+'h_2').style.color = '#'+color;
  }
  
  document.getElementById('clantag1').style.color = '#'+color;
  document.getElementById('clan1_2').style.color = '#'+color;
  
 } 
 
 function tab2h(color) {
 
  for(var j = 1; j < 7; j++) {
    document.getElementById('indiv'+(j+6)+'_2').style.color = '#'+color;
  }

  for(var i = 2; i < 6; i++) {

    for(var j = 1; j < 7; j++) {

     document.getElementById('p'+j+'_'+i+'o_2').style.color = '#'+color;

    }
    
  }
  
  for(var j = 1; j < 5; j++) {
   document.getElementById('total'+j+'o_2').style.color = '#'+color;
  }
  
  document.getElementById('clantag2').style.color = '#'+color;
  document.getElementById('clan2_2').style.color = '#'+color;
  
 } 
 
 function tab1o(color) {
 
  for(var j = 1; j < 7; j++) {
    document.getElementById('indiv'+j+'_3').style.color = '#'+color;
  }

  for(var i = 2; i < 6; i++) {

    for(var j = 1; j < 7; j++) {

     document.getElementById('p'+j+'_'+i+'h_3').style.color = '#'+color;

    }
    
  }
  
  for(var j = 1; j < 5; j++) {
   document.getElementById('total'+j+'h_3').style.color = '#'+color;
  }
  
  document.getElementById('clt1').style.color = '#'+color;
  document.getElementById('clantag1_1').style.color = '#'+color;
  
 } 
 
 function tab2o(color) {
 
  for(var j = 1; j < 7; j++) {
    document.getElementById('indiv'+(j+6)+'_3').style.color = '#'+color;
  }

  for(var i = 2; i < 6; i++) {

    for(var j = 1; j < 7; j++) {

     document.getElementById('p'+j+'_'+i+'o_3').style.color = '#'+color;

    }
    
  }
  
  for(var j = 1; j < 5; j++) {
   document.getElementById('total'+j+'o_3').style.color = '#'+color;
  }
  
  document.getElementById('clt2').style.color = '#'+color;
  document.getElementById('clantag2_2').style.color = '#'+color;
  
 } 
 
 function tab1(color) {
 
  for(var j = 1; j < 7; j++) {
    document.getElementById('indiv'+j+'_1').style.color = '#'+color;
  }
  
  document.getElementById('total4h_1').style.color = '#'+color;
  
 } 
 
 function tab2(color) {
 
  for(var j = 1; j < 7; j++) {
    document.getElementById('indiv'+(j+6)+'_1').style.color = '#'+color;
  }
  
  document.getElementById('total4o_1').style.color = '#'+color;
  
  
} 