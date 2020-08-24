@extends('admin_layout')
@section('admin_content')
<link href="{{asset('public/fornt end/css/bootstrap.min.css')}}" rel="stylesheet">
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhập Danh Mục Sản Phẩm
                        </header>
                        <?php
                                $message = Session::get('message');
                                if ($message) {
                                    # code...
                                    echo '<span class="text-alert">'.$message.'</span>';
                                    Session::put('message',null);
                                }
                            ?>
                        <div class="panel-body">
                            @foreach($edit_category_product as $key =>$edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
                                 {{(csrf_field())}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input type="text" value="{{$edit_value ->category_name}}" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                              <textarea style="resize: none;" rows="8" class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô tả danh mục">{{$edit_value ->category_desc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Từ khóa danh mục</label>
                              <textarea style="resize: none;" rows="8" class="form-control" name="category_product_keywords" id="exampleInputPassword1" placeholder="Mô tả danh mục">{{$edit_value ->meta_keywords}}</textarea>
                                </div>
                                <!-- <div class="form-group">
                                <label for="exampleInputPassword1">Hiển Thị</label>
                                    <select name="category_product_status" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiển thị</option>
                                    </select>
                                </div> -->

                                <button type="submit" name="add_category_product" class="btn btn-info">Cập Nhập Danh Mục</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>

@endsection
