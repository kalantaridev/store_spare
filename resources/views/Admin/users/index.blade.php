@extends('Admin.Layout.index')

@section('import_for_table_user')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="/Admin/assets/css/forms/theme-checkbox-radio.css">
    <link href="/Admin/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
@endsection
@section('content')

    <div class="d-flex flex-row justify-content-between">
        <div>
            <p class="f20 m-4">کاربران</p>

        </div>

        <div class=" m-4 ">
            <a href="#"><button class="btn btn-outline-primary custom_box_shadow mb-3"><i class="far fa-envelope mr-2"></i>ارسال ایمیل </button></a>

            <a href="#"><button class="btn btn-outline-primary custom_box_shadow mb-3"><i class="far fa-comment-alt mr-2"></i> ارسال پیامک</button></a>

            <a href="#"><button class="btn btn-outline-danger custom_box_shadow mb-3"><i class="far fa-trash-alt mr-2"></i>حذف گروهی</button></a>

        </div>
        <!-- d-flex flex-row justify-content-between m-4 -->
    </div>

    <div class="mt-5 mb-2">
        <p class="f13 ml-4 mb-4"><i class="fas fa-search mr-2"></i>جستجوی سریع</p>
        <div class="d-flex flex-row">


            <div class="d-flex flex-row col-lg-10 col-md-9 col-sm-9 p-0">

                <div class="form-group col-3">
                    <input type="text" class="form-control custom_box_shadow p-1" name="title_product" value="" placeholder="  براساس نام کاربر ">
                </div>


                <div class="dataTables_wrapper m-0">
                    <div class="dataTables_length ml-3">
                        <select name="multi-column-ordering_length" aria-controls="multi-column-ordering"
                                class="form-control custom_box_shadow">
                            <option disabled selected>بر اساس نقش</option>
                            <option> مدیر </option>
                            <option>نویسنده  </option>
                            <option>کاربر عادی  </option>
                        </select>
                    </div>
                </div>


                <div class="dataTables_wrapper m-0">
                    <div class="dataTables_length ml-3">
                        <select name="multi-column-ordering_length" aria-controls="multi-column-ordering"
                                class="form-control custom_box_shadow">
                            <option disabled selected>مرتب سازی بر اساس</option>
                            <option> جدید ترین</option>
                            <option> قدیمی ترین</option>
                        </select>
                    </div>
                </div>

            </div>
            {{--d-flex flex-row--}}


            <div class="d-flex flex-row col-lg-2 justify-content-center">
                <div class="dataTables_wrapper m-0">
                    <div class="dataTables_length ml-3">
                        <select name="multi-column-ordering_length" aria-controls="multi-column-ordering"
                                class="form-control custom_box_shadow p-1">
                            <option disabled selected>تعداد نمایش</option>
                            <option>35</option>
                            <option>65</option>
                            <option>200</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
        {{--d-flex flex-row--}}




    </div>

    <div class="pr-4 pl-4">
        <p class="p-1">نتایج یافت شده:154 نظر</p>
    </div>





    <div class="table-responsive">
        <table class="table table-bordered table-striped mb-4">
            <thead>
            <tr class="text-center">
                <th>ردیف</th>
                <th>نام کاربر</th>
                <th>نقش کاربر</th>
                <th>تاریخ آخرین ورود</th>
                <th>تعداد نظرات</th>
                <th>عملیات</th>
                <th class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <td>1</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user1.png">
                        </div>
                        <p class="align-self-center mb-0">مونا</p>
                    </div>
                </td>
                <td>مدیر</td>
                <td>1399/12/12</td>
                <td>120</td>
                <td>
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('users.edit',1)}}">
                            <button class="btn btn-warning " title="ویرایش">ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف">حذف</button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>2</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user2.jpg">
                        </div>
                        <p class="align-self-center mb-0">رضا</p>
                    </div>
                </td>
                <td>نویسنده</td>
                <td>1399/12/12</td>
                <td>32</td>
                <td>
                    <div class="d-flex flex-row justify-content-center">
                        <a href="">
                            <button class="btn btn-warning " title="ویرایش">ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف">حذف</button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>3</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user4.jpg">
                        </div>
                        <p class="align-self-center mb-0">پویا</p>
                    </div>
                </td>
                <td>کاربر عادی</td>
                <td>1399/02/02</td>
                <td>0</td>
                <td>
                    <div class="d-flex flex-row justify-content-center">
                        <a href="">
                            <button class="btn btn-warning " title="ویرایش">ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف">حذف</button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>4</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user2.jpg">
                        </div>
                        <p class="align-self-center mb-0">امیر</p>
                    </div>
                </td>
                <td>کاربر عادی</td>
                <td>1399/10/14</td>
                <td>5</td>
                <td>
                    <div class="d-flex flex-row justify-content-center">
                        <a href="">
                            <button class="btn btn-warning " title="ویرایش">ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف">حذف</button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>5</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user1.png">
                        </div>
                        <p class="align-self-center mb-0">ریحانه</p>
                    </div>
                </td>
                <td>کاربر عادی</td>
                <td>1399/11/04</td>
                <td>74</td>
                <td>
                    <div class="d-flex flex-row justify-content-center">
                        <a href="">
                            <button class="btn btn-warning " title="ویرایش">ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف">حذف</button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>6</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user3.jpg">
                        </div>
                        <p class="align-self-center mb-0">فاطمه</p>
                    </div>
                </td>
                <td>نویسنده</td>
                <td>1399/12/12</td>
                <td>120</td>
                <td>
                    <div class="d-flex flex-row justify-content-center">
                        <a href="">
                            <button class="btn btn-warning " title="ویرایش">ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف">حذف</button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>7</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user4.jpg">
                        </div>
                        <p class="align-self-center mb-0">علی</p>
                    </div>
                </td>
                <td>مدیر</td>
                <td>1399/12/12</td>
                <td>120</td>
                <td>
                    <div class="d-flex flex-row justify-content-center">
                        <a href="">
                            <button class="btn btn-warning " title="ویرایش">ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف">حذف</button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>8</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user1.png">
                        </div>
                        <p class="align-self-center mb-0">نگار</p>
                    </div>
                </td>
                <td>کاربر عادی</td>
                <td>1399/10/10</td>
                <td>1</td>
                <td>
                    <div class="d-flex flex-row justify-content-center">
                        <a href="">
                            <button class="btn btn-warning " title="ویرایش">ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف">حذف</button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>

            </tbody>
        </table>
    </div>


@endsection

@section('script_sweetalert2')
<script src="/Admin/plugins/sweetalerts/promise-polyfill.js"></script>
<script src="/Admin/plugins/sweetalerts/sweetalert2.min.js"></script>
<script src="/Admin/plugins/sweetalerts/custom-sweetalert.js"></script>
<script>
    $('.warning.confirm').on('click', function () {
        swal({
            title: 'آیا می خواهید این کاربر را حذف نمایید؟',
            text: "",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'بله',
            cancelButtonText: 'لغو',
            padding: '2em'
        }).then(function (result) {
            if (result.value) {
                const toast = swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    padding: '2em'
                });
                toast({
                    type: 'success',
                    title: 'کاربر با موفقیت حذف شد',
                    padding: '2em',
                })
            }
        })
    })
</script>
@endsection
