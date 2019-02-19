function hargamodif(){
  var hargakembali=document.getElementById('hsl').value;
hargakembali=hargakembali.replace("Rp.", "");
hargakembali=hargakembali.replace(" ", "");
hargakembali=hargakembali.replace(".", "");
hargakembali=hargakembali.replace(".", "");
hargakembali=hargakembali.replace(".", "");
hargakembali=hargakembali.replace(".", "");


         var hargasempurna="";//string
         var bantu;//string
         var bantu1=hargakembali.length-3;//int
         var penghitung=hargakembali.length;//int
         var bantu2="";//string
         var b=hargakembali.length/3;//int
b=parseInt(b);
   console.log(hargakembali.length%3);

         var a=1;
              while(a<=b){
                   // penghitung-=3;

                    hargasempurna=hargakembali.substring(bantu1, penghitung);
                   if((hargakembali.length%3!=0)|(a+1<=b))

                    hargasempurna="."+hargasempurna;
                    hargasempurna=hargasempurna+bantu2;
                    bantu2=hargasempurna;


                        bantu1-=3;
                        penghitung-=3;
                          a++;
                    }


              hargasempurna="Rp. "+hargakembali.substring(0,hargakembali.length%3)+hargasempurna;
                   // hargasempurna="Rp. "+hargasempurna;
                document.getElementById('hsl').value = hargasempurna;
      }
