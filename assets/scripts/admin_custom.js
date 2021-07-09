$(document).ready(function()
{
  if($('#editor').length)
  {

    var quill = new Quill('#editor', {
      modules: {
        toolbar: [
          [{ header: [1, 2, false] }],
          ['bold', 'italic', 'underline'],
          ['link','image', 'code-block']
        ]
      },
      placeholder: 'Compose an epic...',
      theme: 'snow'  // or 'bubble'
    });
  }
})
$(document).ready(function(){
  $('.material_selects').material_select();
  $(".material_selects .caret").html("<i class='fa fa-chevron-down down' aria-hidden='true'></i>");
  $('.collapsible').collapsible();
  //$(".button-collapse").sideNav();
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: false // Choose whether you can drag to open on touch screens
    }
  );
  $(".side_li").click(function(){
    $(this).find(".down").toggleClass("rotate"); 
  })
  $(".close_input").click(function(){
    $("#search").val("");
  })
  $('.modal').modal();
  $(document).on("click",".delete_list",function(){
    var modal=$(this).attr('data-model');
    var trigger_class=$(this).attr('data-class');
    var redirect=$(this).attr('data');
    $(trigger_class).attr("href",APP_URL+redirect);
    $(modal).modal('open');
  })
  var user_listing_table = $('#user_listing').DataTable({
    "bLengthChange": false,
    "bInfo": false,
  });
     $('#search').on('keyup',function(){
      user_listing_table.search($(this).val()).draw() ;
  });
})
app.controller('add_user',function($scope,$http) {
  $scope.validateEmail=function(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }
  $scope.validatePageurl=function(url) {
    var res = /^[0-9a-zA-Z\_-]+$/;
    return res.test(String(url).toLowerCase());
  }

  $scope.update_user=function(type)
  {
    $("#description").val($("#editor").html());
    var title=$("#title").val();
    var description=$("#description").val();
    var url=$("#url").val();
    var short_description=$("#short_description").val();
    var meta_keyword=$("#meta_keyword").val();
    var meta_title=$("#meta_title").val();

    if(title=="")
    {
      Materialize.toast('Please enter the title', 4000);
    }
    else if(description=="")
    {
      Materialize.toast('Please enter the description', 4000);
    }
    else if(url=="")
    {
      Materialize.toast('Please enter the pageURL', 4000);
    }
    else if(!$scope.validatePageurl(url))
    {
      Materialize.toast('Please enter the valid pageURL', 4000);
    }
    // else if(short_description == "")
    // {
    //   Materialize.toast('Please enter the Meta Description', 4000);
    // }
    // else if(meta_keyword == "")
    // {
    //   Materialize.toast('Please enter the Meta Keywords', 4000);
    // }
    // else if(meta_title == "")
    // {
    //   Materialize.toast('Please enter the Meta Title', 4000);
    // }
    else
    {
      $(".login_btn").prop("disabled",true);
      $scope.btn_loading=true;
      $(".login_btn").attr("type","submit");
      $("#add_blog").submit();
    }
  }

  $scope.update_parent_category=function(type)
  {
    var name=$("#name").val();
    var id=$("#aid").val();
    if(name=="")
    {
      Materialize.toast('Please enter the category name', 4000);
    }
    else
    {
      $(".login_btn").addClass("disabled");
      $scope.btn_loading=true;
      $http.post(APP_URL+'/admin/category/parent/update',{ 
        'category_name' : name,
        'type' : type,
        'id' : id
      }).then(function(response) 
      {
        if(response.data[0].status=="fail")
        {
          $(".login_btn").removeClass("disabled");
          $scope.btn_loading=false;
          Materialize.toast(response.data[0].reason, 4000);
        }
        else
        {
          Materialize.toast(response.data[0].reason, 4000);
          window.location.href = APP_URL+"/admin/category/parent";
        }
      });
    }
  }

  $scope.update_sub_category=function(type)
  {
    var name=$("#name").val();
    var parent=$("#parent").val();
    var id=$("#aid").val();
    if(name=="")
    {
      Materialize.toast('Please enter the category name', 4000);
    }
    else
    {
      $(".login_btn").addClass("disabled");
      $scope.btn_loading=true;
      $http.post(APP_URL+'/admin/category/sub/update',{ 
        'category_name' : name,
        'parent_id' : parent,
        'type' : type,
        'id' : id
      }).then(function(response) 
      {
        if(response.data[0].status=="fail")
        {
          $(".login_btn").removeClass("disabled");
          $scope.btn_loading=false;
          Materialize.toast(response.data[0].reason, 4000);
        }
        else
        {
          Materialize.toast(response.data[0].reason, 4000);
          window.location.href = APP_URL+"/admin/category/sub";
        }
      });
    }
  }

  $scope.update_amenities=function(type)
  {
    var name=$("#name").val();
    var id=$("#aid").val();
    if(name=="")
    {
      Materialize.toast('Please enter the amenities name', 4000);
    }
    else
    {
      $(".login_btn").addClass("disabled");
      $scope.btn_loading=true;
      $http.post(APP_URL+'/admin/amenities/update',{ 
        'name' : name,
        'type' : type,
        'id' : id
      }).then(function(response) 
      {
        if(response.data[0].status=="fail")
        {
          $(".login_btn").removeClass("disabled");
          $scope.btn_loading=false;
          Materialize.toast(response.data[0].reason, 4000);
        }
        else
        {
          Materialize.toast(response.data[0].reason, 4000);
          window.location.href = APP_URL+"/admin/amenities";
        }
      });
    }
  }
  
}); 
app.controller('login_page',function($scope,$http) {
  $scope.validateEmail=function(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }
  $scope.check_login=function()
  {
    var email=$("#email").val();
    var password=$("#password").val();
    if(email=="" || password=="")
    {
      Materialize.toast('Please fill email and password', 4000);
    }
    else if(!$scope.validateEmail(email))
    {
      Materialize.toast('Invalid Email', 4000);
    }
    else
    {
      // $(".login_btn").addClass("disabled");
      $http.post(ADMIN_URL+'/check_login',{ 'email' : email,'password' : password }).then(function(response) {
        if(response.data=="fail")
        {
          $(".login_btn").removeClass("disabled");
          Materialize.toast('Invalid Credentials', 4000);
        }
        else
        {
          Materialize.toast('Login Success', 4000);
          window.location.href = ADMIN_URL+"/msme";
        }
      });
    }
  }
});
app.controller('settings',function($scope,$http) {
  $scope.update_settings=function(type)
  {
    var value=$("#value").val();
    if(value=="")
    {
      Materialize.toast('Please fill value', 4000);
    }
    else
    {
      $(".login_btn").addClass("disabled");
      $scope.btn_loading=true;
      $http.post(APP_URL+'/admin/settings/update',{ 'value' : value,'id' : $("#setting_id").val() }).then(function(response) {
        $scope.btn_loading=false;
        if(response.data=="fail")
        {
          $(".login_btn").removeClass("disabled");
          Materialize.toast('Invalid Credentials', 4000);
        }
        else
        {
          Materialize.toast('Update Successfully', 4000);
          if(type=="settings")
            type="";

          window.location.href = APP_URL+"/admin/settings/"+type;
        }
      });
    }
  }
});

// $('.send_message').on('click', function () {

$('.image_upload').on('click', function () {
  $.post(APP_URL + "/img_upload");
});

/*id of dropdown*/
// $("#opt").on('change', function () {
//   var getValue = $(this).val();
//   alert(getValue);
// });