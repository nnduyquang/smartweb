<div class="modal fade" data-id="0" id="pl_modal_register" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Đăng Ký Mua Website</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::select('register_type', array(
                '1' => 'Gói chuyên nghiệp',
                '2' => 'Gói nâng cao',
                '3' => 'Gói cao cấp',
                '4' => 'Gói theo yêu cầu',
                )); !!}
                <div class="ip-name input-group">
                    {!! Form::text('register_name', null, array('placeholder' => 'Tên Quý Khách','class' => 'form-control input-text')) !!}
                    <div class="invalid-feedback" style="font-size: 15px;font-weight:  bold;">
                    </div>
                </div>
                <div class="ip-email input-group">
                    {!! Form::text('register_email', null, array('placeholder' => 'Email','class' => 'form-control input-text')) !!}
                    <div class="invalid-feedback" style="font-size: 15px;font-weight:  bold;">
                    </div>
                </div>
                <div class="ip-phone input-phone">
                    {!! Form::text('register_phone', null, array('placeholder' => 'Số điện thoại','class' => 'form-control input-text')) !!}
                    <div class="invalid-feedback" style="font-size: 15px;font-weight:  bold;">
                    </div>
                </div>
                {!! Form::textarea('register_note',null, array('placeholder' => 'Thông tin thêm','id'=>'emp-note','class' => 'form-control','rows'=>'5','style'=>'resize:none')) !!}
            </div>
            <div class="modal-footer">
                <button type="button" id="btnRegister" class="btn btn-primary">Đăng Ký<i
                            class="fa fa-spinner fa-spin fa-3x fa-fw loadingSending" style="
    font-size: 15px;display: none"></i><i
                            class="fa fa-check-circle successSending" aria-hidden="true"
                            style="display: none"></i></button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>

            </div>
            <span class="txt-success" style="display: none;color:  green;font-weight:  bold;padding: 0 20px;font-size: 18px">Chúng tôi đã nhận được yêu cầu và sẽ phản hồi quý khách trong 24h. Xin cảm ơn.</span>

        </div>
    </div>
</div>