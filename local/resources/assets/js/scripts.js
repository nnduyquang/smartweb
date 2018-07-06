var plugins = {
    doRegisterWebsite: $('.do-register')
};
$(document).ready(function () {
    function getBaseURL() {
        var url = location.href;  // entire url including querystring - also: window.location.href;
        var baseURL = url.substring(0, url.indexOf('/', 14));
        if (baseURL.indexOf('http://localhost') != -1) {
            // Base Url for localhost
            var url = location.href;  // window.location.href;
            var pathname = location.pathname;  // window.location.pathname;
            var index1 = url.indexOf(pathname);
            var index2 = url.indexOf("/", index1 + 1);
            var baseLocalUrl = url.substr(0, index2);
            return baseLocalUrl + "/";
        }
        else {
            // Root Url for domain name
            return baseURL + "/";
        }
    }
    function doRegisterWebsite() {
        $('#pl_modal_register').on('show.bs.modal', function (e) {
            var type = $(e.relatedTarget).data('id');
            $("select[name='register_type']").val(type);
            $(e.currentTarget).find('#btnRegister').click(function(){
                $('.loadingSending').css('display', 'inline-block');
                $('.input-text').removeClass('is-invalid');
                $('.input-area').removeClass('is-invalid');
                var data = new FormData($(this).get(0));
                data.append('type',$("select[name='register_type']").val());
                data.append('name', $("input[name='register_name']").val());
                data.append('email', $("input[name='register_email']").val());
                data.append('phone', $("input[name='register_phone']").val());
                data.append('note', $("textarea[name='register_note']").val());
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: getBaseURL() + "send-request-website/send",
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    data: data,
                    success: function (data) {
                        if (data.success) {
                            $('.loadingSending').css('display', 'none');
                            $('.successSending').css('display', 'inline-block');
                            $('.successSending').fadeIn(500);
                            $('.txt-success').css('display', 'inline-block');
                            $('.txt-success').fadeIn(500);
                            setTimeout("$('.successSending').fadeOut(1500);", 3000);
                            setTimeout("$('.txt-success').fadeOut(1500);", 3000);
                            $("input[name='register_name']").val("");
                            $("input[name='register_email']").val("");
                            $("input[name='register_phone']").val("");
                            $("textarea[name='register_note']").val("");
                            setTimeout("$('#pl_modal_register').modal('hide');",3500);
                        }
                        else {
                            $('.loadingSending').css('display', 'none');
                            var errors = data.validator;
                            if (errors.hasOwnProperty('email')) {
                                $('.ip-email .input-text').addClass('is-invalid');
                                $('.ip-email .invalid-feedback').html(errors['email']);
                            }
                            if (errors.hasOwnProperty('name')) {
                                $('.ip-name .input-text').addClass('is-invalid');
                                $('.ip-name .invalid-feedback').html(errors['name']);
                            }
                        }
                    }
                });
            });
        });
        $('#pl_modal_register').on('hide.bs.modal', function (e) {
            $(e.currentTarget).find('#btnRegister').unbind();
        });
    }
    if (plugins.doRegisterWebsite.length) {
        doRegisterWebsite();
    }
});