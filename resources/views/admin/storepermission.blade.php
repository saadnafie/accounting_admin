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
                                            <li><span class="bread-blod">صلاحيات وباقة المتجر </span>
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
          <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>الصلاحية</th>
        <th>الاعدادت</th>
      </tr>
    </thead>
    <tbody>
      <tr>
         <td>1</td>
        <td>المالية</td>
        <td><button type="button" class="btn btn-primary">نشط</button>&nbsp;<button type="button" class="btn btn-danger">غير نشط</button></td>
        
      </tr>
      <tr>
        <td>2</td>
        <td>المبيعات</td>
 <td><button type="button" class="btn btn-primary">نشط</button>&nbsp;<button type="button" class="btn btn-danger">غير نشط</button></td>
      </tr>
      
    </tbody>
  </table>
            </div>
        </div>


    @endsection

    