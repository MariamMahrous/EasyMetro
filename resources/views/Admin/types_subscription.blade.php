@extends('Admin.index')
@section('types')
<!--/sidebar-->
<br><br><br>
                            <!-- from here -->    
                            <div class="Design">
                                <form action="" method="post" action="{{ url('/admin/types_subscription')}}" name="types_subscription" id="types_subs" novalidate="novalidate">
                                {{csrf_field()}}
                                    <br>
                                    <br>
                                    <h2>  انواع الاشتراكات </h2>
                        
                                    <label> نوع الاشتراك 
                                    </label>

                                    <select name="type_sub" id="First" >
                                       
                                        <optgroup label=" الاشتراكات">

                                            <option>  شهرى</option>
                                            <option>3 شهور</option>
                                            <option> سنوى</option>
                                            <option> ذو اجتياجات خاصه</option>

                                    </select>

                                    
                                    <select name="type_line" id="First" >
                                       
                                        <optgroup label=" اسعار الخطوط">

                                            <option>  الخط الاول و الثانى</option>
                                            <option> الخط الثالث</option>

                                    </select>

                                    <br><br><br>

                                    <label> 
                                         سعر منطقه واحده
                                    </label>
                                    <br>

                                    <input type="text" name="station1"  class="form-control" />
                                    <br>

                                    <label> 
                                          سعر منطقتين
                                    </label>
                                    <br>

                                    <input type="text" name="station2" class="form-control" />
                                    <br>

                                    <label> 
                                         سعر 3 او 4 مناطق 
                                    </label>
                                    <br>

                                    <input type="text" name="station3_4"  class="form-control" />
                                    <br>

                                    <label> 
                                    سعر 5 او 6 مناطق 
                                    </label>
                                    <br>

                                    <input type="text" name="station5_6" class="form-control" />
                                    <br>
                                    <input type="submit" class="login_button" value="ارسال">
                                </form>
                            </div>
                         

                            <!-- to here -->
        

                        </div>
                       
                    

@endsection