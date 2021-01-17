@extends('Admin.Layout.index')
@section('select2_css')
    <link href="/Admin/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/Admin/plugins/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="/Admin/css/persian_datepicker.min.css">
@endsection

@section('content')

    <p class="f20 m-3">ایجاد کد تخفیف جدید</p>
    <div class='col-lg-7 col-md-8 col-sm-8 m-5'>

        <div class="form-group">
            <label for="discount_code_title"> عنوان </label>
            <input type="text" class="form-control" id="discount_code_title" value=""
                   placeholder="عنوان کد تخفیف را وارد نمایید">
        </div><!--form-group-->

        <div class="form-group">
            <label for="discount_percent"> مقدار تخفیف (درصد) </label>
            <input type="text" class="form-control" id="discount_percent" value=""
                   placeholder="مقدار تخفیف را وارد نمایید">
        </div><!--form-group-->

        <div class="form-group">
            <label for="name_product">نام محصول </label>
            <select class="form-control basic" id="name_product">
                <option>انتخاب نام محصول</option>
                <option>صفحه کلاچ</option>
                <option>هدلایت</option>
                <option>باتری</option>
            </select>
        </div><!--form-group-->

        <div class="form-group">
            <label for="code_discount">کد تخفیف </label>
            <input type="text" class="form-control" id="code_discount" value="" placeholder="کد تخفیف را وارد نمایید">
        </div><!--form-group-->

        <div class="form-group">
            <p class="mt-4"> وضعیت کد تخفیف</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" value="1" name="publish" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline1"> فعال</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" value='0' name="publish" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2"> غیر فعال</label>
            </div>
        </div><!--form-group-->


        <div class="form-group mt-4">
            <label for="use_code">حداکثر تعداد استفاده </label>
            <input type="text" class="form-control" id="use_code" value=""
                   placeholder="حداکثر تعداد استفاده از کد تخفیف را وارد نمایید">
        </div><!--form-group-->


        <div class="d-flex justify-content-between">
            <div class="form-group col-6 pl-0">
                <label for="start_date">تاریخ شروع </label>
                <input type="text" class="form-control date_picker" id="start_date" value=""
                       placeholder="تاریخ شروع کد تخفیف را وارد نمایید">
            </div>

            <div class="form-group col-6 pr-0">
                <label for="end_date">تاریخ پایان </label>
                <input type="text" class="form-control date_picker" id="end_date" value=""
                       placeholder="تاریخ پایان کد تخفیف را وارد نمایید">
            </div>
        </div>
{{--        form-group col-6 pr-0--}}


        <div class="d-flex flex-row justify-content-end mt-5 mb-5">
            <button class="btn btn-success ">ثبت کد تخفیف</button>
        </div>


    </div>
    {{--    col-lg-7 col-md-8 col-sm-8 m-5--}}

@endsection

@section('select2_js')
    <script src="/Admin/plugins/select2/select2.min.js"></script>
    <script src="/Admin/plugins/select2/custom-select2.js"></script>
    <script src="/Admin/js/persian_date.min.js"></script>
    <script src="/Admin/js/persian_datepicker.min.js"></script>

    {{--    for select2--}}
    <script>
        var ss = $(".basic").select2({
            tags: true,
        });
    </script>


    {{--for persian date picker--}}
    <script>
        $(".date_picker").pDatepicker({
            initialValue: true,
            format: 'YYYY/MM/DD',
            persianDigit: false,
        });
    </script>

@endsection
