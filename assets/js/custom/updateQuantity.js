const updateURL = "http://localhost/new-coffee-shop/views/client/actions/order/updateQuantity.php";
function updateQuantity(productID)
  {
 
      $.ajax({
          type: "POST",
          url: updateURL,
          data: 'productID='+productID,
          cache: false,
          //  success: function()
          //  {
          //    alert("Record successfully updated");
          //  }
      });
  }

// $(document).ready(function(){
//   $("#updateQuantity").click(function(){
//      $.ajax({
//           url: updateURL,
//           method:'POST',
//           data:{
//               name:name,
//               ctgr:ctgr
//           },
//           success:function(response){
//               alert(response);
//           }
//       });
//   });
// });