@extends('Admin.Layout.index')
@section('content')
    <p class="f20 m-4">مشاهده نظر</p>
<div class="col-lg-8 col-md-8 col-sm-12 ml-5" >
    <div class="form-group mt-4">
        <label for="user_name">  نام کاربر </label>
        <input type="text" class="form-control" id="user_name" value="حمید" readonly>
    </div>

    <div class="form-group mt-4">
        <label for="user_email">  ایمیل کاربر </label>
        <input type="text" class="form-control" id="user_email" value="test@gmail.com" readonly>
    </div>

    <div class="form-group mt-4">
        <label for="date_comment">تاریخ نظر دهی </label>
        <input type="text" class="form-control" id="date_comment" value="1399/12/12" readonly>
    </div>

    <div class="form-group mt-4">
        <label for="date_comment"> محصول </label>
        <input type="text" class="form-control" id="date_comment" value="دیسک و صفحه والئو" readonly>
    </div>

    <div class="form-group mt-4">
        <label for="desc_comment"> متن نظر </label>
        <textarea type="text" class="form-control" id="desc_comment" readonly style="max-height: 300px;min-height: 150px;overflow-y: auto;">واقعا محصول خوبی بود من که ازش راضیم</textarea>
    </div>

    <div class="form-group col-12 d-flex flex-row justify-content-between mt-5 mb-5">
        <div class="mx-auto">
            <button class="btn btn-danger">صرف نظر</button>
            <button class="btn btn-success">تایید نظر</button>
        </div>


    </div>
</div>
{{--    col-lg-8--}}

@endsection
