@extends('Admin.Layout.index')

@section('content')

    <p class="f20 m-3">اطلاعات تماس با ما</p>
    <div class='col-lg-7 col-md-8 col-sm-8 m-5'>

        <div class="form-group">
            <label for="address_company">  آدرس شرکت</label>
            <input type="text" class="form-control" id="address_company" value="" placeholder="آدرس شرکت را وارد نمایید">
        </div>

        <div class="form-group">
            <label for="email_company">  ایمیل شرکت</label>
            <input type="email" class="form-control" id="email_company" value="" placeholder="ایمیل شرکت را وارد نمایید">
        </div>


        <div class="form-group">
            <label for="tel_company"> شماره تماس شرکت</label>
            <input type="text" class="form-control" id="tel_company" value="" placeholder="شماره تماس شرکت را وارد نمایید" maxlength="11">
        </div>

        <div class="form-group">
            <label for="telegram">Telegram</label>
            <input type="text" class="form-control" id="telegram" value="" placeholder="آدرس کانال تلگرام شرکت را وارد نمایید" >
        </div>

        <div class="form-group">
            <label for="whatsup">Whatsup</label>
            <input type="text" class="form-control" id="whatsup" value="" placeholder=" آدرس واتس آپ شرکت را وارد نمایید" >
        </div>

        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" id="instagram" value="" placeholder="آدرس اینستاگرام شرکت را وارد نمایید" max="11">
        </div>


        <div class="form-group d-flex flex-row justify-content-end">
            <button class="btn btn-success">ثبت اطلاعات</button>
        </div>




        </div>
{{--    col-lg-7 col-md-8 col-sm-8 m-5--}}
 @endsection
