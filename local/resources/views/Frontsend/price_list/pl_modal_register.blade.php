<div class="modal fade" data-id="0" id="pl_modal_register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                {!! Form::text('register_name', null, array('placeholder' => 'Tên Quý Khách','class' => 'form-control')) !!}
                {!! Form::text('register_email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                {!! Form::text('register_phone', null, array('placeholder' => 'Số điện thoại','class' => 'form-control')) !!}
                {!! Form::textarea('register_note',null, array('placeholder' => 'Thông tin thêm','id'=>'emp-note','class' => 'form-control','rows'=>'5','style'=>'resize:none')) !!}
            </div>
            <div class="modal-footer">
                <button type="button" id="btnRegister" class="btn btn-primary">Đăng Ký</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>