var plugins = {
    doRegisterWebsite: $('.do-register')
};
$(document).ready(function () {
    function doRegisterWebsite() {
        $('#pl_modal_register').on('show.bs.modal', function (e) {
            var type = $(e.relatedTarget).data('id');
            $("select[name='register_type']").val(type);
            $(e.currentTarget).find('#btnRegister').click(function(){
                console.log(type)
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