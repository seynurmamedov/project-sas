$('#search').on('keyup',function(){
    $value=$(this).val();
    $.ajax({
       type : 'get',
       url : config.routes.search,
       data:{'search':$value},
       success:function(data){
          $('.searchAjax').html(data);
       }
    });
 })
 $(".color-change > button").click(function(){
  $(this).siblings('button').children('p').css({"color":"black"});
  $(this).children('p').css({"color":"#fb5c42"});
  $(this).siblings('input').data('data',$(this).data('data'));
  $category=$(this).siblings('.category-ajax').data('data');
  $size=$(this).siblings('.size-ajax').data('data');
  $color=$(this).siblings('.color-ajax').data('data');
  $sort=$(this).siblings('.sort-ajax').data('data');
  $gender=$(this).siblings('.gender-ajax').data('data');
  $.ajax({
     type : 'get',
     url : config.routes.filter,
     data:{
     'category':$category,
     'size':$size,
     'color':$color,
     'sort':$sort,
     'gender':$gender
    },
     success:function(data){
        $('.filter-ajax').html(data);
     }
  });
})





var shoppingCart = (function() {
   cart = [];
   
   // Constructor
   function Item(code, name, img, size, color, price, count, link) {
     this.code = code;
     this.name = name;
     this.img = img;
     this.size = size;
     this.color = color;
     this.price = price;
     this.count = count;
     this.link = link;
   }
   
   // Save cart
   function saveCart() {
     localStorage.setItem('shoppingCart', JSON.stringify(cart));
   }
   
     // Load cart
   function loadCart() {
     cart = JSON.parse(localStorage.getItem('shoppingCart'));
   }
   if (localStorage.getItem("shoppingCart") != null) {
     loadCart();
   }
   
 
   // =============================
   // Public methods and propeties
   // =============================
   var obj = {};
   
   // Add to cart
   obj.addItemToCart = function(code, name, img, size, color, price, count, link) {
    for(var item in cart) {
       if(cart[item].code === code && cart[item].size == size && cart[item].color == color) {
         cart[item].count ++;
         saveCart();
         return;
       }
     }

     var item = new Item(code, name, img, size, color, price, count, link);
     cart.push(item);
     saveCart();
   }
   obj.addItemToCartCount = function(code, size, color) {
    for(var item in cart) {
       if(cart[item].code === code && cart[item].size == size && cart[item].color == color) {
         cart[item].count ++;
         saveCart();
         return;
       }
     }
    }
   // Set count from item
   obj.setCountForItem = function(code, count) {
     for(var i in cart) {
       if (cart[i].code === code) {
         cart[i].count = count;
         break;
       }
     }
   };
   
   // Remove for count item from cart
   obj.removeItemFromCart = function(code,size,color) {
       for(var item in cart) {
         if(cart[item].code === code && cart[item].size == size && cart[item].color == color) {
           cart[item].count --;
           if(cart[item].count === 0) {
             cart.splice(item, 1);
           }
           break;
         }
     }
     saveCart();
   }
 
   // Remove for button all items from cart
   obj.removeItemFromCartAll = function(code,size,color) {
     for(var item in cart) {
       if(cart[item].code === code && cart[item].size == size && cart[item].color == color) {
         cart.splice(item, 1);
         break;
       }
     }
     saveCart();
    }
 
   // Count cart 
   obj.totalCount = function() {
     var totalCount = 0;
     for(var item in cart) {
       totalCount += cart[item].count;
     }
     return totalCount;
   }
 
   // Total cart price
   obj.totalCart = function() {
     var totalCart = 0;
     for(var item in cart) {
       totalCart += cart[item].price * cart[item].count;
     }
     return Number(totalCart.toFixed(2));
   }
 
   // List cart
   obj.listCart = function() {
     var cartCopy = [];
     for(i in cart) {
       item = cart[i];
       itemCopy = {};
       for(p in item) {
         itemCopy[p] = item[p];
 
       }
       itemCopy.total = Number(item.price * item.count).toFixed(2);
       cartCopy.push(itemCopy)
     }
     return cartCopy;
   }
   return obj;
 })();
 
 
 // *****************************************
 // Triggers / Events
 // ***************************************** 
 // Add item
 $('body').on("click",".add-to-cart",function(event) {
   event.preventDefault();
   var code = $(this).data('code');
   var name = $(this).data('name');
   var img = $(this).data('img');
   var size = $(this).parent('form').parent('.items-home-page-btn').siblings('.items-home-page-sizeNcolor').children('.items-home-page-size').children('.size-data').data('size');
   var color = $(this).parent('form').parent('.items-home-page-btn').siblings('.items-home-page-sizeNcolor').children('.items-home-page-color').children('.color-data').data('color');
   var price = Number($(this).data('price'));
   var link = $(this).data('link');

   if(size!="" && color!=""){
      shoppingCart.addItemToCart(code, name, img, size, color, price, 1, link);
      displayCart();
   }
   else if(size=="" ) alert('Select product size!');
   else  alert('Select product color!');
 });
 
 $('body').on("click",".add-to-cart-product",function(event) {
  event.preventDefault();
  var code = $(this).data('code');
  var name = $(this).data('name');
  var img = $(this).data('img');
  var size = $('.items-product-page-sizeNcolor').children('.d-flex').children('.items-home-page-size').children('.size-data').data('size');
  var color = $('.items-product-page-sizeNcolor').children('.d-flex').children('.items-home-page-color').children('.color-data').data('color');
  var price = Number($(this).data('price'));
  var link = $(this).data('link');

  if(size!="" && color!=""){
     shoppingCart.addItemToCart(code, name, img, size, color, price, 1, link);
     displayCart();
  }
  else if(size=="" ) alert('Select product size!');
  else  alert('Select product color!');
});
 
 
 function displayCart() {
   var cartArray = shoppingCart.listCart();
   var output = "";

   for(var i in cartArray) {
     output +=  
        "<div class='col-lg-6 col-md-12 col-sm-12 d-flex pr-0'><div class='col-5 p-0 mb-5'><div class='mini-cart-product-image'>"
   
          +"<a href='"+assetProductLink+"/"+cartArray[i].link+"'><img src='"+assetImgLink+"/"+cartArray[i].img+"' width='100%'></a>"
        +"</div></div>"
       +"<div class='col-7'><div class='mb-2'>"
        +"<a href='"+assetProductLink+"/"+cartArray[i].link+"' class='my-link h5 font-weight-bold'>"+ cartArray[i].name +" / "+cartArray[i].size+" / "+cartArray[i].color+"</a>"
       +"</div>"
            +"<div class='h5 mb-4'><span class='money'>Price: $"+ cartArray[i].price + ".00</span></div>"            
            +"<div class='input-group'><button class='minus-item input-group-addon btn border' data-code=" + cartArray[i].code + "  data-size=" + cartArray[i].size + "  data-color=" + cartArray[i].color +" style='border-top-right-radius:0; border-bottom-right-radius:0;'>-</button>"
            +"<input type='number' class='item-count form-control text-center col-3 p-0 border border-left-0 border-right-0' data-code=" + cartArray[i].code + "  value=" + cartArray[i].count + ">"
            +"<button class='plus-item btn input-group-addon border' data-code=" + cartArray[i].code + " ' data-size=" + cartArray[i].size + "  data-color=" + cartArray[i].color +" 'style='border-top-left-radius:0; border-bottom-left-radius:0;'>+</button></div>"  
            +"<div class='d-flex mt-5 justify-content-between align-items-center mt-4'> <span class='total-price'>Total: $"+ cartArray[i].total + " </span><button class='delete-item btn btn-primary float-right' data-code=" + cartArray[i].code + " data-size=" + cartArray[i].size + "  data-color=" + cartArray[i].color +">Delete</button></div>"                     
       +"</div></div>";

   }
   if(cart=='' ){
    output ="<div class=' col-12'>Your cart is currently empty.</div>"
    $('.show-desired').html(output);
    $('.t-price').addClass('d-none')
  } 
  else 
  $('.t-price').addClass('d-flex');
   $('.show-cart').html(output);
   $('.total-cart').html(shoppingCart.totalCart());
   $('.total-count').html(shoppingCart.totalCount());
 }
 
 // Delete item button
 $('.show-cart').on("click", ".delete-item", function(event) {
   var code = $(this).data('code')
   var size = $(this).data('size')
   var color = $(this).data('color')
   shoppingCart.removeItemFromCartAll(code,size,color);
   displayCart();
 })
 
 // -1
 $('.show-cart').on("click", ".minus-item", function(event) {
   var code = $(this).data('code')
   var size = $(this).data('size')
   var color = $(this).data('color')
   shoppingCart.removeItemFromCart(code,size,color);
   displayCart();
 })
 
 // +1
 $('.show-cart').on("click", ".plus-item", function(event) {
   var code = $(this).data('code')
   var size = $(this).data('size')
   var color = $(this).data('color')
   shoppingCart.addItemToCartCount(code,size,color);
   displayCart();
 })
 
 // Item count input
 $('.show-cart').on("change", ".item-count", function(event) {
    var code = $(this).data('code');
    var count = Number($(this).val());
   shoppingCart.setCountForItem(code, count);
   displayCart();
 });
 
 displayCart();


 var  shoppingDesired= (function() {
  desired = [];
  // Constructor
  function ItemDesired(codeD, nameD, imgD, priceD, linkD) {
    this.codeD = codeD;
    this.nameD = nameD;
    this.imgD = imgD;
    this.priceD = priceD;
    this.linkD = linkD;
  }
  // Save desired
  function saveDesired() {
    localStorage.setItem('shoppingDesired', JSON.stringify(desired));
  }
  
  // Load desired
  function loadDesired() {
    desired = JSON.parse(localStorage.getItem('shoppingDesired'));
  }
  if (localStorage.getItem("shoppingDesired") != null) {
    loadDesired();
  }localStorage
  

  // =============================
  // Public methods and propeties
  // =============================
  var objDesired = {};
  
  // Add to Desired
  objDesired.addItemToDesired = function(codeD, nameD, imgD, priceD, linkD) {
    for(var item in desired) {
      if(desired[item].codeD === codeD) {
        return;
      }
    }
    var itemDesired = new ItemDesired(codeD, nameD, imgD, priceD, linkD);
    desired.push(itemDesired);
    saveDesired();
  }
  
  // Remove for button all items from desired
  objDesired.removeItemFromDesiredAll = function(codeD) {
    for(var item in desired) {
      if(desired[item].codeD === codeD ) {
        desired.splice(item, 1);
        break;
      }
    }
    saveDesired();
   }

  // Count desired 
  objDesired.totalCountDesired = function() {
    var totalCountDesired  = desired.length;
    return totalCountDesired;
  }
  
  // List Desired
  objDesired.listDesired = function() {
    var DesiredCopy = [];
    for(i in desired) {
      item = desired[i];
      itemCopy = {};
      for(p in item) {
        itemCopy[p] = item[p];

      }
      DesiredCopy.push(itemCopy)
    }
    return DesiredCopy;
  }
  return objDesired;
})();


// *****************************************
// Triggers / Events
// ***************************************** 
// Add item
$('body').on("click",".add-to-desired",function(event) {
  event.preventDefault();
  var codeD = $(this).data('code');
  var nameD = $(this).data('name');
  var imgD = $(this).data('img');
  var priceD = Number($(this).data('price'));
  var linkD = $(this).data('link');
  shoppingDesired.addItemToDesired(codeD, nameD, imgD, priceD, linkD);
      displayDesired();
});




function displayDesired() {
  var DesiredArray = shoppingDesired.listDesired();
  var output = "";

  for(var i in DesiredArray) {
    output +=  
       "<div class='col-lg-6 col-md-12 col-sm-12 d-flex pr-0'><div class='col-5 p-0 mb-5'><div class='mini-cart-product-image'>"
  
         +"<a href='"+assetProductLink+"/"+DesiredArray[i].linkD+"'><img src='"+assetImgLink+"/"+DesiredArray[i].imgD+"' width='100%'></a>"
       +"</div></div>"
      +"<div class='col-7'><div class='mb-2'>"
       +"<a href='"+assetProductLink+"/"+DesiredArray[i].linkD+"' class='my-link h5 font-weight-bold'>"+ DesiredArray[i].nameD +"</a>"
      +"</div>"
           +"<div class='h5 mb-4'><span class='money'>Price: $"+ DesiredArray[i].priceD + ".00</span></div>"            
           +"<div class='d-flex mt-5 justify-content-between align-items-center mt-4'><button class='delete-item-desired btn btn-primary float-right' data-code=" + DesiredArray[i].codeD + ">Delete</button></div>"                     
      +"</div></div>";

  }
  if(desired==''){
    output ="<div class=' col-12'>Don't have any products to show.</div>"
    $('.show-desired').html(output);
  } 
  $('.show-desired').html(output);
  $('.total-count-desired').html(shoppingDesired.totalCountDesired());
}

// Delete item button
$('.show-desired').on("click", ".delete-item-desired", function(event) {
  var codeD = $(this).data('code')
  shoppingDesired.removeItemFromDesiredAll(codeD);
  displayDesired();
})

displayDesired();