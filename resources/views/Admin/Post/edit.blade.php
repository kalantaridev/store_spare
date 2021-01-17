@extends('Admin.Layout.index')
@section('select2_css')
    <link href="/Admin/plugins/select2/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/css/Dropify_min.css" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    <p class="f20 m-3"> ویرایش محصول </p>
    <div class="col-10 mx-auto">
    <div class='col-lg-8 col-md-12 col-sm-12'>

        <div class="form-group">
            <label for="post_title"> عنوان محصول</label>
            <input type="text" class="form-control" id="post_title" value="چراغ جلو خودرو گازار مدل JT123" placeholder="عنوان محصول را وارد نمایید">
        </div>

        <div class="form-group">
            <label for="slug"> نام مستعار </label>
            <input type="text" class="form-control" id="slug" value="چراغ-جلو-خودرو-گازار-مدل-JT123" placeholder="نام مستعار را وارد نمایید">
        </div>

        <div class="form-group">
            <label for="category"> دسته بندی محصول را انتخاب کنید</label>
            <select class="form-control" id="category">
                <option>دیسک و صفحه کلاچ</option>
                <option selected=selected>چراغ خودرو</option>
                <option>کمک فنر  </option>
                <option>  لاستیک و تایر</option>
            </select>
        </div>

        <p class="mt-4"> وضعیت انتشار مطلب</p>

        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" value="1" name="publish" class="custom-control-input" checked>
            <label class="custom-control-label" for="customRadioInline1">منتشر کردن</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" value='0' name="publish" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline2">منتشر نکردن</label>
        </div>

        <div class="form-group mt-4">
            <label for="seo_title"> عنوان سئو </label>
            <input type="text" class="form-control" id="seo_title" value="چراغ خودرو" placeholder=" عنوان سئو را وارد نمایید">
        </div>

        <div class="form-group mt-4">
            <label for="description_seo"> توضیحات سئو </label>
            <input type="text" class="form-control" id="description_seo" value=""
                   placeholder=" توضیحات سئو را وارد نمایید">
        </div>
        <div class="form-group mt-4">
            <label for="description_seo"> کلمات کلیدی </label>
            <select class="form-control tagging" id='metaTag' multiple="multiple">
                <option> چراغ</option>
                <option>چراغ خودرو</option>
                <option>چراغ پراید</option>
            </select>
        </div>



        <div class="form-group mt-2">
            <label for="img_product"> تصویر محصول </label>
            <input type="file" class="form-control dropify" id="img_product" value="">
        </div>


        <div class="d-flex flex-row justify-content-end mt-5">
            <button class="btn btn-success mb-2 ">انتشار</button>
        </div>



    </div>
    <!-- col-lg-8 -->
    </div>

@section('select2_js')
    <script src="/Admin/plugins/select2/select2.min.js"></script>
    <script src="/Admin/plugins/select2/custom-select2.js"></script>
    <script src="/Admin/js/Dropify_min.js"></script>
    <script>
        let ss = $(".tagging").select2({
            tags: true,
            maximumSelectionLength: 5,
        });


        $('.dropify').dropify();
    </script>
@endsection
@endsection
