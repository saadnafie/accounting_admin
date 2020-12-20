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
                                            <li><span class="bread-blod">اضافة مشترك جديد</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     
        
            <div class="container-fluid">
  <div class="row">
                    <div class="col-lg-4">
<form action="#">
    <div class="form-group">
      <label for="email">اسم المحل:</label>
      <input type="text" class="form-control" id="email" placeholder="" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">اسم المالك:</label>
      <input type="text" class="form-control" id="pwd" placeholder="" name="pswd">
    </div>
    <div class="form-group">
      <label for="pwd">البريد الإلكتروني للمالك:</label>
      <input type="text" class="form-control" id="pwd" placeholder="" name="pswd">
    </div>
    <div class="form-group">
      <label for="pwd">تاريخ بدء المشاركة:</label>
      <input type="date" class="form-control" id="pwd" placeholder="" name="pswd">
    </div>
    <div class="form-group">
      <label for="pwd">تاريخ انتهاء المشاركة:</label>
      <input type="date" class="form-control" id="pwd" placeholder="" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember">&nbsp;&nbsp;&nbsp;&nbsp; نشط
      </label>
    </div>
    <div class="form-group">
      <label for="pwd">اسم db:</label>
      <input type="text" class="form-control" id="pwd" placeholder="" name="pswd">
    </div>
    <div class="form-group">
      <label for="pwd">اسم مستخدم db:</label>
      <input type="text" class="form-control" id="pwd" placeholder="" name="pswd">
    </div>

     <div class="form-group">
      <label for="pwd">كلمة مرور db:</label>
      <input type="password" class="form-control" id="pwd" placeholder="" name="pswd">
    </div>
    
	<button type="button" class="btn btn-primary">حفظ البيانات</button>
  </form>
  </div>
  </div>
            </div>
      


    @endsection

    