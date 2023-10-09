
$(document).ready(function () {
    let dem = 0;
    let product = JSON.parse(localStorage.getItem('product'))
    if (product == null) {
        var arrPro = [];

    } else {
        var arrPro = product;
        dem = arrPro.length
        $('#numberCart').text(dem)
    }

    $('.addToCart').click(function (e) {
        e.preventDefault();
        var img = $(this).parents('.product-item').find("img").attr("src")
        var title = $(this).parents('.product-item').find('.card-title').text()
        var price = $(this).parents('.product-item').find('#price').text()
        let id = $(this).parents('.product-item').find('#idHangHoa').val()

        let quanity = 1;

        let ob = {
            'id': id,
            'title': title,
            'img': img,
            'price': price,
            'quanity': quanity
        }

        let check = true;
        arrPro.forEach(item => {
            if (item.id == ob.id) {
                item.quanity++
                console.log(item.quanity);
                check = false
            }
        });
        if (check == true) {
            if (arrPro.push(ob)) {
                console.log('oke 3');
            }
        }

        let storage = JSON.stringify(arrPro);
        localStorage.setItem('product', storage)
        dem = arrPro.length
        $('#numberCart').text(dem)
    });

    // render html
    function renderHtmlCart() {
        let html = "";

        if (arrPro != null) {
            var totalPricess = 0;
            arrPro.forEach((item, index) => {
                var totalPrice = Number(item.price) * Number(item.quanity);
                totalPricess += totalPrice;

                html += `<tr>
                        <td>${index + 1}</td>
                        <td class="text-uppercase">${item.title}</td>
                        <td>
                            <img src='${item.img}' alt='' width='100px'>
                        </td>
                        <td>
                            <input type="number" name="quanity" class="input_custom quanity" value="${item.quanity}" min=1 style="width: 50px">
                        </td>
                        <td>
                            ${totalPrice.toFixed(3)} &#8363
                        </td>
                        <td>
                            <a href='' onclick="return confirm('Bạn có chắc muốn xóa sản phẩm ra khỏi giỏ hàng ?')" class='btn btn-outline-danger delsanpham' id="">Xóa</a>
                            <input type="hidden" name="" value="${item.id}" id="idProduct">
                        </td>
                    </tr> `

            });
            var priceFomat = totalPricess.toFixed(3);
            $('#show').html(html)
            $('.totalPrices').text(function () {
                return priceFomat + 'đ';
            });
            console.log(totalPricess);
        }
    }
    renderHtmlCart();
    // xóa sản phẩm trong giỏ hàng
    $('.delsanpham').click(function (e) {
        delSp();
    }); 

// hàm xóa sp trong cart
    function delSp() {
        arrPro.forEach((item, index) => {
            if ($('#idProduct').val() == item.id) {
                arrPro.splice(index, 1)
            }
        });
        let storage = JSON.stringify(arrPro);
        localStorage.setItem('product', storage)
    }



    // xóa sản phẩm trong admin

    $('input[name=allItem]').click(function () {
        if ($(this).prop('checked') == true) {
            $("input[name=item]").attr("checked", true);
        } else {
            $("input[name=item]").attr("checked", false);
        }
    });
    $('#selectAll').click(function (e) {
        e.$("input[name=allItem]").attr("checked", true);
    });
    $('#unchecked').click(function (e) {
        $("input[name=allItem]").attr("checked", false);
    });

    // xóa
    

    $('#changeDropdown').click(function (e) { 
        e.preventDefault();
        $('#changePassword').toggle()
    });



    // login 
    //check repassword
    $('#repassword').keyup(function () { 
       if($(this).val() != $('#password').val()){
            $(this).removeClass('border-success').addClass('border-danger')
            
       }else{
            $(this).removeClass('border-danger').addClass('border-success')
       
       }
    });


    //click lọc hàng hóa

});
