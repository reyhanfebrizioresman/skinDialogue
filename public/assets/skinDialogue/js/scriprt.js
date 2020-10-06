   const API_URL = 'https://dev-api.skindialogue.id/';
   let PAGE_PRODUCTS = 1,
      LAST_PAGE = 1,
      EL_LIST_PRODUCTS = '#products-list',
      SEARCH_PRODUCTS = '#search-products',
      btnNext = '.next-page',
      btnPrev = '.previous-page',
      CURRENT_CATEGORY = '',
      CURRENT_BRAND = '';
      CURRENT_PAGE = 1 ;
      

    $('.page-item').on('click', function(){
        $('.page-item').removeClass('active');
          PAGE_PRODUCTS = PAGE_PRODUCTS;
          $(this).addClass('active');
          if (PAGE_PRODUCTS == 'page-1'){
            // mencari daftar menu dan menghapis data sebelumnya 
            $('.page-link').html('');
            // Tampilkan fungsi tampilkanSemuaMenu
            tampilkanProducts();
            // Mengembalikan nilai/value
            return;
        }
    
      
      });  

      
   function generateListProduct(data) {
     let template = `
      <div class="col-md-4 col-6 mb-4 mb-sm-4">
        <div class="card flex-column justify-content-center align-items-center">
          <a href="/products/${data.slug}" class="w-100">
            <img style="width: 100%; height: auto" src="https://dev-api.skindialogue.id/storage/${data.main_photo.file}"/></a>
             <a href="/detailProduct" class="mb-1 pt-4 text-body small font-weight-bold category-name">${data.category.name}</a>
              <a href="/detailProduct" class="product-link font-size-1">${data.name}</a>
               <span class="font-weight-bold mt-3 mb-1">IDR ${data.price}</span>
                <span class="font-weight-bold price-retail mb-4">
                <span class="font-weight-normal font-size-small">Reseller</span> IDR ${data.price_retail}
             <span class="font-weight-normal font-size-small"> + Point</span>
           </span>
         </div>
       </div>
       
     `;

     return template;
   }
   function tampilkanProducts (page){
     let param = `?page=${PAGE_PRODUCTS}`;
     let currentPage = page;

     let name = $(SEARCH_PRODUCTS).val();
     if(name) {
      param += `&name=${name}`;
     }
     if(CURRENT_CATEGORY) {
       param += `&category=${CURRENT_CATEGORY}`;
     }
     if(CURRENT_BRAND) {
      param += `&brand=${CURRENT_BRAND}`;
    }
     $.ajax({
         url: `${API_URL}api/v1/public/products${param}`,
         dataType: 'json',
         success: function(res) {
           LAST_PAGE = res.meta.last_page;
           $('#li-prev').removeClass('disabled');
           $('#li-next').removeClass('disabled');
           if(PAGE_PRODUCTS == 1) {
             $('#li-prev').addClass('disabled');
           }
           
           if(PAGE_PRODUCTS === LAST_PAGE) {
            $('#li-next').addClass('disabled');
           }
           for(let i = 0; i < res.data.length; i++) {
             $(EL_LIST_PRODUCTS).append(generateListProduct(res.data[i]));
                     
           }
         }
     });
  }
  
  tampilkanProducts();

  // $('body').on('click', '.page-link', function(){
  //   PAGE_PRODUCTS= $(this).data('current_page');
  //    $(EL_LIST_PRODUCTS).html('');
  //    PAGE_PRODUCTS = PAGE_PRODUCTS;
  //    if(PAGE_PRODUCTS == 'page'){
  //      $('.page-link').html();
  //      tampilkanProducts();
  //    }
   

  //  });

   $(btnPrev).click(function(){
     PAGE_PRODUCTS--;
     tampilkanProducts()
   });

   $(btnNext).click(function() {
    PAGE_PRODUCTS++;
    tampilkanProducts()
  })
 
$('#search-products').on('keyup', function(e){
  let val = $(this).val();
   if(e.which === 13){
    $(EL_LIST_PRODUCTS).html('');
    PAGE_PRODUCTS = 1;
    tampilkanProducts();


   }
});


function generateListCategory(data){
  let template = `<a class="font-size-small dropdown-nav-link font-weight-bold d-flex category-button mb-3" 
  role="button" aria-expanded="false" aria-controls="sidebarNav1Collapse" 
  data-target="#paket-perawatan-wajahNav" data-slug="${data.slug}">${data.name}<span class="ml-auto badge border badge-pill ml-2">${data.count_products}</span></a>`



  return template;
}






let EL_LIST_CATEGORY = '#list-categories',
    COUNT_CATEGORY = 1;



    function tampilkanListCategory (){
      $.ajax({
          url: `${API_URL}api/v1/public/product_categories`,
          dataType: 'json',
          success: function(res) {
            for(let i = 0; i < res.data.length; i++) {
             $(EL_LIST_CATEGORY).append(generateListCategory(res.data[i]));
              
              
            }
          }
      });
   }
 
   tampilkanListCategory();

   $('body').on('click', '.category-button', function() {
      CURRENT_CATEGORY = $(this).data('slug');
      $(EL_LIST_PRODUCTS).html('');
      PAGE_PRODUCTS = CURRENT_PAGE;
      tampilkanProducts();
   });


   $('body').on('click', '.brand-button' , function(){
     CURRENT_BRAND = $(this).data('slug')
     $(EL_LIST_PRODUCTS).html('')
     PAGE_PRODUCTS = CURRENT_PAGE;
     tampilkanProducts();
   });







   function generateDetailProduct(data){
    let template=`
    <div class="col-lg-7 mb-7 mb-lg-0">
    <img class="img-fluid w-100 rounded" src="https://dev-api.skindialogue.id/storage/${data.main_photo.file}" alt="Logo">
    </div>
    <div class="mb-5">
    <h1 class="h2">${data.name}</h1>
    </a>
    <a href="/products/paket-perawatan-wajah" class="category-link">
      <span>Paket Perawatan Wajah</span>
    </a>
    <span></span>
    <a class="category-link" href="/products/paket-perawatan-wajah/paket-jerawat-acne">
      <span>Paket Jerawat (Acne)</span>
    </a>
    <div>
    <h2 class="font-size-1 text-body mb-0">Harga member:</h2>
    <span class="text-dark font-size-2 font-weight-bold">IDR ${data.price_retail} </span>
  </div>

  <div class="mb-5 mt-4">
    <h2 class="font-size-1 text-body mb-0">Harga reseller: ${data.price}</h2>
    <span class="price-retail font-size-2 font-weight-bold">IDR ${data.price} + Point</span>
  </div>
  </div>


  
  <div class="container space-top-2 mt-5">
  <div class="row">
    <div class="col-md-12 mb-5 mb-md-0">
      <div class="pr-lg-4">
        <h4>Details</h4>
        <p><p>Acne Package Product</p><p><br></p><p><strong>Protection Cream Small</strong></p><p>Krim yang secara khusus diformulasikan dari Moisturizer dan Soothing Agent untuk melembabkan, melindungi dan</p><p>merawat kulit yang sensitif.</p><p><br></p><p><strong>Acne Milk Cleanser</strong></p><p>Susu pembersih yang khusus untuk kulit berjerawat, dapat membersihkan kulit wajah yang berjerawat dari kotoran, minyak berlebih dan sisa make-up. Menjadikan kulit lebih bersih, terasa halus dan lembut.</p><p><br></p><p><strong>Acne Wash</strong></p><p>Diformulasikan untuk kulit yang berminyak dan berjerawat. Kulit wajah menjadi kesat, bebas minyak, bebas jerawat.</p><p><br></p><p><strong>Sunscreen Gel</strong></p><p>Gel tabir surya dengan formula lembut dan ringan untuk melindungi kulit terhadap efek buruk sinar matahari yang dapat menyebabkan penuaan dini dan noda hitam.</p><p><br></p><p><strong>Acne Night Cream</strong></p><p>Cream dengan formula khusus yang dapat melindungi dan merawat kulit wajah yang berjerawat.</p></p>
      </div>
    </div>
  </div>
  </div>

  `;
  return template;  
  }
  

//   let PAGINATION = '#pagination';
//   function pagination() {
//     $.ajax({
//       url: `https://dev-api.skindialogue.id/api/v1/public/products`,
//       dataType: 'json',
//       success: function(res) {
//         for(let i = 0; i< res.meta.last_page;i++) {
//           $(PAGINATION).append(generatePage(res.meta.last_page[i]));

//        };

//       }
//   });
// }
//   pagination()
  function detailProduct (){
    $.ajax({
        url: `https://dev-api.skindialogue.id/api/v1/public${window.location.pathname}`,
        dataType: 'json',
        success: function(res) {
        $(DETAIL_PRODUCT).append(generateDetailProduct(res.data));
   
        }
    });
  }
  detailProduct();





      
  