// // Animate the element's value from x to y:
//   var value = $('#a1').html();
//   value = parseInt(value.replace(/,/g, ''));
//   $({someValue: 0}).animate({someValue: value}, {
//       duration: 3000,
//       easing:'swing', // can be anything
//       step: function() { // called on every step
//           // Update the element's text with rounded-up value:
//           $('#a1').text(commaSeparateNumber(Math.round(this.someValue)));
//       },
//       complete: function(){
//           $('#a1').text(commaSeparateNumber(value_left));
//       }
//   });

//  function commaSeparateNumber(val){
//     while (/(\d+)(\d{3})/.test(val.toString())){
//       val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
//     }
//     return val;
//   }