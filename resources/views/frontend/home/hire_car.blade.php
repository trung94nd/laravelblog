<div class="container container-wrap">
    <div class="padding0-10">
        <div class="hire-car">
            <div class="hire-car-content m-container">
                <h2 class="hire-car-title text-center">Đặt xe giá rẻ</h2>
                <p class="hire-car-description text-center m-row">Hãy nhập thông tin của bạn chúng tôi sẽ liên hệ sớm nhất.</p>
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-3 control-label hire-car-label hidden-xs" for="name">Họ tên</label>
                        <div class="col-sm-9 hire-car-input">
                            <input type="text" name="name" value="" class="form-control fix-input" placeholder="Nhập họ tên">
                            {!! $errors->first('name', '<span class="help-inline text-danger">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label hire-car-label hidden-xs ">Điện thoại</label>
                        <div class="col-sm-9 hire-car-input">
                            <input type="text" name="phone" value="" class="form-control fix-input" placeholder="Nhập số điện thoại">
                            {!! $errors->first('phone', '<span class="help-inline text-danger">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="species" class="col-sm-3 control-label hire-car-label hidden-xs">Dòng xe</label>
                        <div class="col-sm-9 hire-car-input">
                            <select name="species" class="form-control fix-input" placeholder="Dòng xe">
                                <option value="">4 chỗ, 16 chỗ...</option>
                               {{--  @foreach ($species as $specie)
                                    <option value=""></option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label hire-car-label hidden-xs" for="create_at">Ngày đặt</label>
                        <div id="sandbox-container" class="col-sm-9 hire-car-input" >
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control fix-input date-control" placeholder="Chọn ngày đặt">
                                <div class="input-group-addon group_addon">
                                    <i class="fa fa-calendar-o fa_calendar" aria-hidden="true">
                                        <i class="fa_square"></i>
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary hire-car-button">Đặt Xe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>