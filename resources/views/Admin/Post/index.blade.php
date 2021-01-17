@extends('Admin.Layout.index')

@section('style_sweetalert2')
    <link href="/Admin/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css"/>
@endsection
@section('content')

    <div class="d-flex flex-row justify-content-between">
        <div>
            <p class="f20 m-4">محصولات</p>
        </div>

        <div class=" m-4">
            <a href="{{route('posts.create')}}">
                <button class="btn btn-outline-primary custom_box_shadow"><i class="fas fa-plus mr-2"></i>محصول جدید</button></a>
            <a href="#"><button class="btn btn-outline-danger custom_box_shadow"><i class="far fa-trash-alt mr-2"></i>حذف گروهی</button></a>

        </div>
        <!-- d-flex flex-row justify-content-between m-4 -->
    </div>




    <div class="mt-5 mb-2">
        <p class="f13 ml-4 mb-4"><i class="fas fa-search mr-2"></i>جستجوی سریع</p>
        <div class="d-flex flex-row">

            <div class="d-flex flex-row col-lg-10 col-md-9 col-sm-9 p-0">

            <div class="form-group col-3">
                <input type="text" class="form-control custom_box_shadow p-1" name="title_product" value="" placeholder="  براساس نام محصول ">
            </div>


            <div class="dataTables_wrapper m-0">
                <div class="dataTables_length">
                    <select name="multi-column-ordering_length" aria-controls="multi-column-ordering"
                            class="form-control custom_box_shadow">
                        <option disabled selected>براساس وضعیت محصول</option>
                        <option>منتشر شده</option>
                        <option>منتشر نشده</option>
                    </select>
                </div>
            </div>




            <div class="dataTables_wrapper m-0">
                <div class="dataTables_length ml-3">
                    <select name="multi-column-ordering_length" aria-controls="multi-column-ordering"
                            class="form-control custom_box_shadow">
                        <option disabled selected>مرتب سازی بر اساس</option>
                        <option> جدید ترین</option>
                        <option>پر فروش ترین</option>
                        <option>پر بازدید ترین</option>
                    </select>
                </div>
            </div>


            <div class="d-flex flex-row ml-4">
                <!-- Rounded switch -->
                <p style="margin-top:13px">فقط کالاهای موجود</p>
                <label class="switch ml-3 mt-2">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <!-- Rounded switch -->
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
        <p class="p-1">نتایج یافت شده:154 محصول</p>
    </div>

    <div class="table-responsive pt-3">
        <table class="table table-bordered mb-4">
            <thead>
            <tr class="text-center">

                <th>ردیف</th>
                <th>نام محصول</th>
                <th>تاریخ انتشار</th>
                <th> تعداد فروش</th>
                <th>تعداد نظرات</th>
                <th>تعداد بازدید</th>
                <th>موجود در انبار</th>
                <th>وضعیت</th>
                <th>عملیات</th>
                <th>علامت گذاری</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center">

                <td>1</td>
                <td>چراغ جلو خودرو گازار مدل JT123</td>
                <td>10/08/2020</td>
                <td>20</td>
                <td>20</td>
                <td>5</td>
                <td>20</td>
                <td><span class="badge badge-success">منتشر شده</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('posts.edit',1)}}">
                            <button class="btn btn-warning " title="ویرایش">ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف">حذف</button>
                    </div>
                </td>
                <th class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </th>
            </tr>
            <tr class="text-center">

                <td>2</td>
                <td>باتری اتمی خودرو صبا</td>
                <td>10/08/2020</td>
                <td>130</td>
                <td>130</td>
                <td>14</td>
                <td>20</td>
                <td><span class="badge badge-danger">منتشر نشده</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('posts.edit',1)}}">
                            <button class="btn btn-warning " title="ویرایش">ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف"> حذف
                        </button>
                    </div>
                </td>
                <th class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll2">
                        <label class="custom-control-label" for="todoAll2"></label>
                    </div>
                </th>
            </tr>
            <tr class="text-center">

                <td>3</td>
                <td>دیسک و صفحه والئو مدل VPDC20</td>
                <td>10/08/2020</td>
                <td>264</td>
                <td>264</td>
                <td>78</td>
                <td>20</td>
                <td><span class="badge badge-danger">منتشر نشده</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('posts.edit',1)}}">
                            <button class="btn btn-warning " title="ویرایش">ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف">حذف
                        </button>
                    </div>
                </td>
                <th class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll3">
                        <label class="custom-control-label" for="todoAll3"></label>
                    </div>
                </th>
            </tr>
            <tr class="text-center">

                <td>4</td>
                <td>لامپ هدلایت خودرو مدل D9H7 رنگ سفید بسته 2 عددی</td>
                <td>10/08/2020</td>
                <td>450</td>
                <td>450</td>
                <td>257</td>
                <td>20</td>
                <td><span class="badge badge-success">منتشر شده</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('posts.edit',1)}}">
                            <button class="btn btn-warning " title="ویرایش"> ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف"> حذف
                        </button>
                    </div>
                </td>
                <th class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll4">
                        <label class="custom-control-label" for="todoAll4"></label>
                    </div>
                </th>
            </tr>
            <tr class="text-center">

                <td>5</td>
                <td>چراغ جلو خودرو گازار مدل JT123</td>
                <td>10/08/2020</td>
                <td>20</td>
                <td>20</td>
                <td>5</td>
                <td>20</td>
                <td><span class="badge badge-success">منتشر شده</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('posts.edit',1)}}">
                            <button class="btn btn-warning " title="ویرایش"> ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف">حذف
                        </button>
                    </div>
                </td>
                <th class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll5">
                        <label class="custom-control-label" for="todoAll5"></label>
                    </div>
                </th>
            </tr>
            <tr class="text-center">

                <td>6</td>
                <td>باتری اتمی خودرو صبا</td>
                <td>10/08/2020</td>
                <td>130</td>
                <td>130</td>
                <td>14</td>
                <td>20</td>
                <td><span class="badge badge-success">منتشر شده</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('posts.edit',1)}}">
                            <button class="btn btn-warning " title="ویرایش">ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف">حذف
                        </button>
                    </div>
                </td>
                <th class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll6">
                        <label class="custom-control-label" for="todoAll6"></label>
                    </div>
                </th>
            </tr>
            <tr class="text-center">

                <td>7</td>
                <td>دیسک و صفحه والئو مدل VPDC20</td>
                <td>10/08/2020</td>
                <td>264</td>
                <td>264</td>
                <td>78</td>
                <td>20</td>
                <td><span class="badge badge-success">منتشر شده</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('posts.edit',1)}}">
                            <button class="btn btn-warning " title="ویرایش">ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف"> حذف
                        </button>
                    </div>
                </td>
                <th class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll7">
                        <label class="custom-control-label" for="todoAll7"></label>
                    </div>
                </th>
            </tr>
            <tr class="text-center">

                <td>8</td>
                <td>لامپ هدلایت خودرو مدل D9H7 رنگ سفید بسته 2 عددی</td>
                <td>10/08/2020</td>
                <td>450</td>
                <td>450</td>
                <td>257</td>
                <td>20</td>
                <td><span class="badge badge-success">منتشر شده</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('posts.edit',1)}}">
                            <button class="btn btn-warning " title="ویرایش"> ویرایش</button>
                        </a>
                        <button class="btn btn-danger warning confirm" title="حذف"> حذف
                        </button>
                    </div>
                </td>
                <th class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll8">
                        <label class="custom-control-label" for="todoAll8"></label>
                    </div>
                </th>
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
                title: 'آیا می خواهید این محصول را حذف نمایید؟',
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
                        title: 'محصول با موفقیت حذف شد',
                        padding: '2em',
                    })
                }
            })
        })
    </script>
@endsection
