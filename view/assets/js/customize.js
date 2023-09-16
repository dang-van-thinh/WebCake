
$(document).ready(function(){
    let dem = 0;
    let product = JSON.parse(localStorage.getItem('product'))
    if(product == null){
        var arrPro = [];
    
    }else{
        var arrPro = product;
         dem = arrPro.length
         console.log(dem);
         $('#numberCart').text(dem)
    }

    $('.addToCart').click(function (e) { 
        e.preventDefault();
        let img =$(this).parents('.product-item').find("img").attr("src")
        let title = $(this).parents('.product-item').find('.card-title').text()
        var price = $(this).parents('.product-item').find('#price').text()
        let id = $(this).parents('.product-item').find('#idHangHoa').val()
        
        let quanity = 1;
        
        let ob = {
            'id':id,
            'title':title,
            'img':img,
            'price':price,
            'quanity':quanity
        }

        let check = true;
        arrPro.forEach(item => {
            if(item.id == ob.id){
                item.quanity++
                console.log(item.quanity);
               check =false
            }
        });
        if(check == true){
            if(arrPro.push(ob)){
                console.log('oke 3');
            }
        }
           

       
        
        let storage = JSON.stringify(arrPro);
        localStorage.setItem('product',storage)
        console.log(JSON.parse(localStorage.getItem('product')));
        dem= arrPro.length
        $('#numberCart').text(dem)
      });

      // render html
      let html = "";
     
      if(arrPro != null){
        let totalPricess = 0;
        arrPro.forEach((item,index) => {
            let totalPrice = Number(item.price)*Number(item.quanity);
                totalPricess+=totalPrice;
            html += `<tr class="">
                        <td>${index+1}</td>
                        <td class="text-uppercase">${item.title}</td>
                        <td>
                            <img src='${item.img}' alt='' width='100px'>
                        </td>
                        <td>
                            <input type="number" name="" id="" class="input_custom" value="${item.quanity}" min=1 style="width: 50px">
                        </td>
                        <td>${totalPrice}</td>
                        <td>
                            <a href='' class='btn btn-outline-danger delsanpham' id="">Xóa</a>
                            <input type="hidden" name="" value="${item.id}" id="idProduct">
                        </td>
                    </tr>   
                    `
        });
        $('#show').html(html)
        $('.totalPrices').text(totalPricess)
        console.log(totalPricess);
        
      }
// xóa sản phẩm trong giỏ hàng
    $('.delsanpham').click(function(){
        arrPro.forEach((item,index) => {
            if($('#idProduct').val() == item.id){
                arrPro.splice(index,1)
            }
        });
        let storage = JSON.stringify(arrPro);
        localStorage.setItem('product',storage)
    });




// active nav-link
$('.nav-link').click(function (e) {  
    $(this).addClass('.active')
});
    });
