$('input').val('.00');

$('input').on('click', function(){
  var val = $(this).val();
  
  if(val.replace('.00', '').length === 0) {
    $(this)[0].setSelectionRange(0, 0);
  }
});

$('input').on('keyup', function(e){
  var val = $(this).val();
  
  val = val.replace('.00', '').toString().replace(/\D/g,'').replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")+'.00';
  
  $(this).val(val);
  
  var strLength = val.length - 3;
   
  
  $(this).focus();
  $(this)[0].setSelectionRange(strLength, strLength);
  
  
});


$('.tongue').on('click', function(){
  $('.informations').toggleClass('active');
});
// // $('input').val('.00');
// // $('input').on('click', function(){
// // var val = $(this).val();

// // if(val.replace('.00', '').length === 0){
// //     $(this)[0].setSelectionRange(0, 0);
// // }
// // });
// // $('input').on('keyup', function (e) {
// //     var val = $(this).val();
// //     val = val.replace('.00','').toString().replace(/\D/g,'').replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",")+'.00';
// //     $(this).val(val);
// //     var strLength = val.length - 3;
// //     $(this).focus();
// //     $(this)[0].setSelectionRange(strLength, strLength);
// // });
// // $('.tongue').on('click',function () {
// //     $('.informations').toggleClass('active');
    
// // });





// function updateTextView(_obj){
//     var num = getNumber(_obj.val());
//     if(num==0){
//       _obj.val('');
//     }else{
//       _obj.val(num.toLocaleString());
//     }
//   }
//   function getNumber(_str){
//     var arr = _str.split('');
//     var out = new Array();
//     for(var cnt=0;cnt<arr.length;cnt++){
//       if(isNaN(arr[cnt])==false){
//         out.push(arr[cnt]);
//       }
//     }
//     return Number(out.join(''));
//   }
//   $(document).ready(function(){
//     $('input[type=text]').on('keyup',function(){
//       updateTextView($(this));
//     });
//   });



// // // function exportToexcel(tableexport, filename=''){
// // //     var downloadurl;
// // //     var dataFileType ='application/vnd.ms-excel';
// // //     var tableSelect = document.getElementById(tableexport);
// // //     var tableHTMLData = tableSelect.outerHTML.replace(/ /g,'%20');

// // //     filename = filename?filename+'.xls':'export_excel_data.xls';

// // //     downloadurl = document.createElement("a");
// // //     document.body.appendChild(downloadurl);

// // //     if(navigator.msSaveOrOpenBlog){
// // //         var blob = new Blob(['\ufeff',tableHTMLData], {
// // //             type: dataFileType
// // //         });
// // //         navigator.msSaveOrOpenBlog(blob,filename);
// // //     }else{
// // //             downloadurl.href = 'data:' + dataFileType + ','+ tableHTMLData;
// // //             downloadurl.download = filename;
// // //             //downloan.real;
// // //             downloadurl.click();
// // //         }
// // //     }
    
// //     (function ($, undefined) {
// //         "use strict";
// //         $(function() {
// //         var $form = $("#form");
// //         var $input = $form.find("input");
// //         $input.on("keyup", function (event) {
// //             var selection = window.getSelection().toString();
// //             if (selection !== ''){
// //                 return;
// //             }
    
// //             if ($.inArray(event.keyCode, [38,40,37,39]) !== -1){
// //                 return;
// //             }
// //             var $this = $(this);
// //             var input = $this.val();
// //             var input = input.replace(/[\D\s._\-]+/g,"");
// //             input = input ? parseInt(input, 10): 0;
// //             $this.val(function () {
// //                 return (input === 0 ) ? "": input.toLocaleString("en-US");
                
// //             });
// //         });
// //         // $form.on("submit", function(event){
// //         //     var $this = $(this);
// //         //     var arr = $this.serializeArray();
// //         //     for (var i = 0; i < arr.length; i++){
// //         //         arr[i].value = arr[i].value.replace(/[($)\s\._\-]+g,'');
// //         //     };
// //         //     console.log(arr);
// //         //     event.preventDefault();
// //         // });
        
// //     });
        
// //     });
// //     (jQuery);

//     // $('input[type=number]').each(function(){
//     //     $this.change(function(){
//     //         var $replace = $(this).val().toString().replace(/,/g, '.');
//     //         $(this).val($replace);


//     //     })
//     // // });
//     // isNumberKey = function(event){
//     //     var charCode = (evt.which) ? evt.which:evt.keyCode;
//     //     if (charCode !=46 && charCode > 31 && (charCode < 48 || charCode > 57))
//     //     return false;
//     //     return true;
//     // }
//     // var textInput = document.getElementById('sum');
//     // textInput.addEventListener('keyup', function(event){
//     //     var n = parseInt(this.value.replace(/\D/g,''),10);
//     //     textInput.value= n.toLocaleString();
//     // }, false);
//     // isNumberKey = function(event){
//     //     var charCode = (event.which) ? event.which :event.keyCode;
//     //     if (charCode !=46 && charCode > 31 && (charCode < 48 || charCode > 57))
//     //     return false;
//     //     return true;
//     // }
//     // var textInput = document.getElementById('Sum');
//     // textInput.addEventListener('keyup', function(event){
//     //     var n = parseInt(this.value.replace(/\D/g,''),10);
//     //     textInput.value= n.toLocaleString();
//     // }, false);
//     $("#formInput".on("keyup",function (event) {
//         var selection = window.getSelection().toString();
//         if(selection !== ''){
//             return;
//         }
//         if($.inArray(event.keyCode, [38,40,37,39]) !== -1){
//             return;
//         }
//         var $this = $(this);
//         var input = $this.val();
//         input = input.replace(/[\D\s\._\-]+/g,"");
//         input = input?parseInt(input, 10):0;
//         $this.val(function() {
//             return (input === 0)?"":input.toLocaleString("en-US");
//         });
        
//     }));
//     $('input').val('.00');
// $('input').on('click', function(){
// var val = $(this).val();

// if(val.replace('.00', '').length === 0){
//     $(this)[0].setSelectionRange(0, 0);
// }
// });
// $('input').on('keyup', function (e) {
//     var val = $(this).val();
//     val = val.replace('.00','').toString().replace(/\D/g,'').replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",")+'.00';
//     $(this).val(val);
//     var strLength = val.length - 3;
//     $(this).focus();
//     $(this)[0].setSelectionRange(strLength, strLength);
// });
// $('.tongue').on('click',function () {
//     $('.informations').toggleClass('active');
    
// });


// $("#formInput".on("keyup",function (event) {
//   var selection = window.getSelection().toString();
//   if(selection !== ''){
//       return;
//   }
//   if($.inArray(event.keyCode, [38,40,37,39]) !== -1){
//       return;
//   }
//   var $this = $(this);
//   var input = $this.val();
//   input = input.replace(/[\D\s\._\-]+/g,"");
//   input = input?parseInt(input, 10):0;
//   $this.val(function() {
//       return (input === 0)?"":input.toLocaleString("en-US");
//   });
  
// }));
//   $form.on("submit", function(event){
//       var $this = $(this);
//       var arr = $this.serializeArray();
//       for (var i = 0; i < arr.length; i++){
//           arr[i].value = arr[i].value.replace(/[($)\s\._\-]+g,'');
//       };
//       console.log(arr);
//       event.preventDefault();
//   });
  
// });
  
// });
// (jQuery);
