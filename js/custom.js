jQuery(function ($) {
    //
    let url_page = window.location.href;
    if(url_page.indexOf('dashboard') > 1) {
        console.log('true');    
        console.log(url_page.indexOf('dashboard'))
        
    } else {
        console.log('fal');  
        // $('.default_menu').removeClass('true');
        $('.default_menu').addClass('true');
        $('.burger').addClass('active');
    }
    //

  $(document).ready(function () {
    let ppp = 3; // Post per page
    let pageNumber = 1;

    function load_posts() {
      pageNumber++;
      let str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
      $.ajax({
        type: "POST",
        dataType: "html",
        url: ajaxurl,
        data: str,
        success: function (data) {
          var $data = $(data);
          if ($data.length) {
            $("#ajax-posts").append($data);
            $("#more_posts").attr("disabled", false);
          } else {
            $("#more_posts").attr("disabled", true);
          }
          if ($data.length === 0) {
            $("#more_posts").addClass('false');
          }
        },
        beforeSend: function () {
          $('.lds-ellipsis').show();
          $('.btn_span_ajax').hide();
        },
        complete: function () {
          $('.lds-ellipsis').hide();
          $('.btn_span_ajax').show();
        },
        error: function (jqXHR, textStatus, errorThrown) {
          $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        }

      });
      return false;
    }

    function load_posts_news() {
      pageNumber++;
      let str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_news_ajax';
      $.ajax({
        type: "POST",
        dataType: "html",
        url: ajaxurl,
        data: str,
        success: function (data) {
          var $data = $(data);
          if ($data.length) {
            $("#ajax-posts").append($data);
            $("#more_posts_news").attr("disabled", false);
          } else {
            $("#more_posts_news").attr("disabled", true);
          }
          if ($data.length === 0) {
            $("#more_posts_news").addClass('false');
          }

        },
        beforeSend: function () {
          $('.lds-ellipsis').show();
          $('.btn_span_ajax').hide();
        },
        complete: function () {
          $('.lds-ellipsis').hide();
          $('.btn_span_ajax').show();
        },
        error: function (jqXHR, textStatus, errorThrown) {
          $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        }

      });
      return false;
    }

    $("#more_posts").on("click", function () { // When btn is pressed.
      $("#more_posts").attr("disabled", true); // Disable the button, temp.
      load_posts();

    });
    $("#more_posts_news").on("click", function () { // When btn is pressed.
      $("#more_posts_news").attr("disabled", true); // Disable the button, temp.
      load_posts_news();
    });


    console.log("ready!");


    $('.toggle-account-forms').click(() => {
      $('.checkout-account-register').addClass('is-visible')
      $('.checkout-account-login').removeClass('is-visible')
    })

    let $count = 0;
    let $arr = [];
    let $arr2 = [];
    $('.woocommerce-address-fields .woocommerce-address-fields__field-wrapper .form-row').each((index, value) => {
      $count++
      if ($count < 7) {
        $arr.push(value);
      } else {
        $arr2.push(value);
      }
    })


    $('.woocommerce-address-fields__field-wrapper').append('<div class="fields_item"></div>')
    $('.woocommerce-address-fields__field-wrapper').append('<div class="fields_item_two"></div>')
    $('.fields_item').html($arr);
    $('.fields_item_two').html($arr2);

    $('.page-id-446 #billing_address_1_field').addClass('form-row-first');
    $('.page-id-446 #billing_address_1_field').removeClass('address-field');

    $('.page-id-446 #billing_address_2_field').addClass('form-row-last');
    $('.page-id-446 #billing_address_2_field').removeClass('address-field form-row-wide');

    $('.page-id-446 #billing_state_field').addClass('form-row-last');
    $('.page-id-446 #billing_state_field').removeClass('address-field form-row-wide');

    $('.page-id-446 #billing_city_field').addClass('form-row-last');
    $('.page-id-446 #billing_city_field').removeClass('address-field form-row-wide');


    $('.woocommerce-billing-fields__field-wrapper .form-row').removeClass('address-field form-row-wide')
    $('.woocommerce-billing-fields__field-wrapper .form-row').addClass('form-row-first')

    /** */
    $(window).scroll(function () {
      if ($(window).scrollTop() > 100) {
        $(".checkout-cart .card").css({
          'position': 'fixed',
          'top': '50px',
          'width': '340px',
          'z-index': '99',
          'height': 'max-content'
        })
      } else {
        $(".checkout-cart .card").css({
          'position': 'relative',
          'background': '#FFFFFF',
          'width': '340px'
        })
      }
    });
    /** */

	  
// 	  
    $(".burger").click(function() {  //use a class, since your ID gets mangled
		$(this).toggleClass("true");      //add the class to the clicked element
		$('.dashboard__nav-primary').toggleClass("dashboard-menu-open");        //add the class to the clicked element
		$('.dashboard__nav-secondary').toggleClass("dashboard-menu-open");      //add the class to the clicked element
		$('.dashboard__overlay').toggleClass("dashboard-menu-open");            //add the class to the clicked element

		 $('.hfe-nav-menu__toggle').click();
    });
	  
    $(".dashboard__overlay").click(function() {  //use a class, since your ID gets mangled
		$(this).toggleClass("dashboard-menu-open");      //add the class to the clicked element
		$('.dashboard__nav-primary').toggleClass("dashboard-menu-open");        //add the class to the clicked element
		$('.dashboard__nav-secondary').toggleClass("dashboard-menu-open");      //add the class to the clicked element
		$('.burger').toggleClass("true");            //add the class to the clicked element
    });
	  
// 	  



// 

    
    



// 

  });

});




