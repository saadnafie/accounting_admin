@extends('admin.layouts.header')

@section('content')
          <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <!--<li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>-->
                                            <li><span class="bread-blod">بيانات المشتركين</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
          <a href="{{url('newstore')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;اضافة متجر</a>
<br><br>
<table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>اسم المحل</th>
        <th>اسم المالك</th>
        <th>البريد الإلكتروني للمالك</th>
        <th>تاريخ انتهاء المشاركة</th>
        <th>نشط</th>
        <th>الاعدادات</th>
      </tr>
    </thead>
    <tbody>
      <tr>
         <td>1</td>
        <td>John</td>
        <td>Doe</td>
        <td>John</td>
        <td>Doe</td>
        <td><button type="button" class="btn btn-success">نشط</button>&nbsp;<button type="button" class="btn btn-danger">غير نشط</button></td>
        <td>  <a href="{{url('storepermission')}}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Mary</td>
        <td>Moe</td>
         <td>Mary</td>
        <td>Moe</td>
 <td><button type="button" class="btn btn-success">نشط</button>&nbsp;<button type="button" class="btn btn-danger">غير نشط</button></td>
 <td>  <button type="button" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
      </tr>
      <tr>
        <td>3</td>
        <td>July</td>
        <td>Dooley</td>
         <td>Mary</td>
        <td>Moe</td>
 <td><button type="button" class="btn btn-success">نشط</button>&nbsp;<button type="button" class="btn btn-danger">غير نشط</button></td>
 <td>  <button type="button" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
       </tr>

      <tr>
        <td>4</td>
        <td>July</td>
        <td>Dooley</td>
         <td>Mary</td>
        <td>Moe</td>
 <td><button type="button" class="btn btn-success">نشط</button>&nbsp;<button type="button" class="btn btn-danger">غير نشط</button></td>
 <td>  <button type="button" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
      </tr>

      <tr>
        <td>5</td>
        <td>July</td>
        <td>Dooley</td>
         <td>Mary</td>
        <td>Moe</td>
 <td><button type="button" class="btn btn-success">نشط</button>&nbsp;<button type="button" class="btn btn-danger">غير نشط</button></td>
 <td>  <button type="button" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
      </tr>
    </tbody>
  </table>
            </div>
        </div>


    @endsection

    