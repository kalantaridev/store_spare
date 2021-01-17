@extends('Admin.Layout.index')
@section('style_sweetalert2')
    <link href="/Admin/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css"/>
@endsection
@section('content')

    <div class="d-flex flex-row justify-content-between">
        <div>
            <p class="f20 m-4">نظرات</p>

        </div>

        <div class=" m-4">
            <a href="#"><button class="btn btn-outline-danger custom_box_shadow"><i class="far fa-trash-alt mr-2"></i>حذف گروهی</button></a>

        </div>
        <!-- d-flex flex-row justify-content-between m-4 -->
    </div>

    <div class="mt-5 mb-2">
        <p class="f13 ml-4 mb-4"><i class="fas fa-search mr-2"></i>جستجوی سریع</p>
        <div class="d-flex flex-row">


            <div class="d-flex flex-row col-lg-10 p-0">

                <div class="form-group col-3">
                    <input type="text" class="form-control custom_box_shadow p-1" name="title_product" value="" placeholder="  براساس نام محصول ">
                </div>


                <div class="dataTables_wrapper m-0">
                    <div class="dataTables_length">
                        <select name="multi-column-ordering_length" aria-controls="multi-column-ordering"
                                class="form-control custom_box_shadow">
                            <option disabled selected>براساس وضعیت نظر</option>
                            <option>تایید شده</option>
                            <option> در انتظار تایید</option>
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
                <th>ایمیل کاربر</th>
                <th> متن نظر</th>
                <th> محصول</th>
                <th>تاریخ نظر دهی</th>
                <th>وضعیت</th>
                <th class="text-center">عملیات</th>
                <th class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll">
                        <label class="custom-control-label" for="todoAll"></label>
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
                        <p class="align-self-center mb-0">الناز</p>
                    </div>
                </td>
                <td>test@gmail.com</td>
                <td>واقعا محصول خوبی بود من که ازش راضیم...</td>
                <td>دیسک و صفحه والئو</td>
                <td>1399/12/12</td>
                <td class="text-center"><span class="badge badge-success">تایید شده</span></td>
                <td class=" text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('comments.show',1)}}"><button class="btn-sm btn-info " title="نمایش"><i class="fas fa-eye"></i></button></a>
                        <button class="btn-sm btn-danger warning confirm " title="حذف"><i class="far fa-trash-alt"></i>
                        </button>
                    </div>

                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="selectAll">
                        <label class="custom-control-label" for="selectAll"></label>
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
                        <p class="align-self-center mb-0">محمد</p>
                    </div>
                </td>
                <td>test@gmail.com</td>
                <td>این محصول خیلی بی کیفیت بود</td>
                <td>باتری اتمی خودرو صبا</td>
                <td>1399/05/07</td>
                <td class="text-center"><span class="badge badge-warning"> در انتظار تایید</span></td>
                <td class=" text-center">
                    <div class="d-flex flex-row justify-content-center">
                    <a href=""><button class="btn-sm  btn-info " title="نمایش"><i class="fas fa-eye"></i></button></a>
                    <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="selectAll">
                        <label class="custom-control-label" for="selectAll"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>3</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user3.jpg">
                        </div>
                        <p class="align-self-center mb-0">مونا</p>
                    </div>
                </td>
                <td>test@gmail.com</td>
                <td>واقعا محصول خوبی بود من که ازش راضیم...</td>
                <td>چراغ جلو خودرو گازار مدل JT123</td>
                <td>1399/12/12</td>
                <td class="text-center"><span class="badge badge-warning"> در انتظار تایید</span></td>
                <td class=" text-center">
                    <div class="d-flex flex-row justify-content-center">
                   <a href=""><button class="btn-sm btn-info " title="نمایش"><i class="fas fa-eye"></i></button></a>
                    <button class="btn-sm btn-danger warning confirm " title="حذف"><i class="far fa-trash-alt"></i>
                    </button>
                    </div>
                </td>
                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="selectAll">
                        <label class="custom-control-label" for="selectAll"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>4</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user4.jpg">
                        </div>
                        <p class="align-self-center mb-0">محمد</p>
                    </div>
                </td>
                <td>test@gmail.com</td>
                <td>این محصول خیلی بی کیفیت بود</td>
                <td>باتری اتمی خودرو صبا</td>
                <td>1399/05/07</td>
                <td class="text-center"><span class="badge badge-success">تایید شده</span></td>
                <td class=" text-center">
                    <div class="d-flex flex-row justify-content-center">
                    <a href=""><button class="btn-sm btn-info " title="نمایش"><i class="fas fa-eye"></i></button></a>
                    <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>
                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="selectAll">
                        <label class="custom-control-label" for="selectAll"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>5</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/img/man-user.png">
                        </div>
                        <p class="align-self-center mb-0">حمید</p>
                    </div>
                </td>
                <td>test@gmail.com</td>
                <td>واقعا محصول خوبی بود من که ازش راضیم...</td>
                <td>دیسک و صفحه والئو</td>
                <td>1399/12/12</td>
                <td class="text-center"><span class="badge badge-success">تایید شده</span></td>
                <td class=" text-center">
                    <div class="d-flex flex-row justify-content-center">
                   <a href=""><button class="btn-sm btn-info " title="نمایش"><i class="fas fa-eye"></i></button></a>
                    <button class="btn-sm btn-danger warning confirm " title="حذف"><i class="far fa-trash-alt"></i>
                    </button>
                    </div>
                </td>
                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="selectAll">
                        <label class="custom-control-label" for="selectAll"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>6</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user1.png">
                        </div>
                        <p class="align-self-center mb-0">نگار</p>
                    </div>
                </td>
                <td>test@gmail.com</td>
                <td>این محصول خیلی بی کیفیت بود</td>
                <td>چراغ جلو خودرو گازار مدل JT123</td>
                <td>1399/05/07</td>
                <td class="text-center"><span class="badge badge-success">تایید شده</span></td>
                <td class=" text-center">
                    <div class="d-flex flex-row justify-content-center">
                    <a href=""><button class="btn-sm btn-info " title="نمایش"><i class="fas fa-eye"></i></button></a>
                    <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>
                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="selectAll">
                        <label class="custom-control-label" for="selectAll"></label>
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
                title: 'آیا می خواهید این نظر را حذف نمایید؟',
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
                        title: 'نظر با موفقیت حذف شد',
                        padding: '2em',
                    })
                }
            })
        })
    </script>
@endsection
