<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo asset('js/jquery.js')?>"><\/script>')</script>
<script src="<?php echo asset('js/less.js')?>"></script>
<script src="<?php echo asset('js/shadowbox.js')?>"></script>
<script src="<?php echo asset('js/plugins.js')?>"></script>


<script>

  $('html, body').animate({scrollTop:0}, 'slow');
  $('a#header-logo').click(function() {
    $('html, body').animate({scrollTop:0}, 'slow');
  });

  $('a.company_profile').click(function() {
    $('html, body').animate({scrollTop:760}, 'slow');
  });

  $('a.project_benefits').click(function() {
    $('html, body').animate({scrollTop:1090}, 'slow');
  });

  $('button.btn-form-top').click(function() {
    $('html, body').animate({scrollTop:1840}, 'slow');
  });

  $('input[name="myfile"]').change( function(){
    $('input[name="submitBtn"]').removeClass('hide');
  });


  // validate form
  $("button.btn-primary").click(function(e) {
    e.preventDefault;

    $('.form-message')
      .removeClass('hide')
      .find('p')
      .html('<img src="img/shadowbox/loading.gif">');

    $.ajax({
      type: "POST",
      url: "/",
      data: $(".application_form").serialize(),
      success: function(data) {
        if ( data == 'sent' ) {
          // form successfully submited
          $('#application_form')
            .html('<p class="text-success"><img src="img/success.png"> 多谢申请，我们会尽快与您联系！</p>');
        } else if ( data == 'validation' ) {
          // information not complete in form
          $('.form-message')
            .find('p')
            .text('加盟申请表填写有误，请核查后重新填写！');
        } else {
          // file could not be sent! ( provide upload form again )
          $('.form-message')
            .find('p')
            .removeClass('text-warning')
            .addClass('text-error')
            .text('无法发送文件！请再次尝试使用不同的文件！');
          document
            .getElementById('f1_upload_form')
            .innerHTML = '<input name="myfile" type="file" size="30" /><input type="submit" name="submitBtn" class="btn" value="Upload" />';
        }
      }
    });

    return false;
});


  function startUpload( success ){
      document
        .getElementById('f1_upload_process')
        .style
        .visibility = 'visible';
      document
        .getElementById('f1_upload_form')
        .style
        .visibility = 'hidden';

      return true;
  }

  function stopUpload(success){
      var result = '';
      if (success == 0){
        result = '<span class="text-error">There was an error during file upload!<\/span><br/><br/>';
      }
      else {
        result = '<span class="text-success">The file "' + success + '" was uploaded successfully!<\/span><br/><br/>';
      }
      document
        .getElementById('f1_upload_process')
        .style
        .visibility = 'hidden';
      document
        .getElementById('f1_upload_form')
        .innerHTML = result;
      document
        .getElementById('f1_upload_form')
        .style
        .visibility = 'visible';   

      $('input[name="file"]').val( success );

      return true;   
  }


  Shadowbox.init();

</script>