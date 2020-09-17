@extends('admin._layoutNew')

@section('page-head')

@endsection

@section('page-content')
    <form class="layui-form" action="">
        <div class="layui-form-item">
            <label class="layui-form-label">用户手机号</label>
            <div class="layui-input-block">
                <input type="text" name="phone" autocomplete="off" placeholder="" class="layui-input" value="{{$result->phone}}" disabled>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">邮箱</label>
            <div class="layui-input-block">
                <input type="text" name="email" autocomplete="off" placeholder="" class="layui-input" value="{{$result->email}}" disabled>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">身份证号</label>
            <div class="layui-input-block">
                <input type="text" name="card_id" autocomplete="off" placeholder="" class="layui-input" value="@if(!empty($result->card_id)){{$result->card_id}}@endif" @if(empty($result->card_id)) disabled @endif>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-block">
                <input type="text" name="password" autocomplete="off" placeholder="" class="layui-input" value="">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">法币交易账号</label>
            <div class="layui-input-block">
                <input type="text" name="account_number" autocomplete="off" placeholder="" class="layui-input" value="{{$result->account_number}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">法币交易密码</label>
            <div class="layui-input-block">
                <input type="text" name="pay_password" autocomplete="off" placeholder="" class="layui-input" value="">
            </div>
        </div>
        
        <div class="layui-form-item">
            <label class="layui-form-label">银行卡卡号</label>
            <div class="layui-input-block">
                <input type="text" name="bank_account" autocomplete="off" placeholder="" class="layui-input" value="@if(!empty($res->bank_account)){{$res->bank_account}}@endif" >
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">银行卡所在行</label>
            <div class="layui-input-block">
                <input type="text" name="bank_name" autocomplete="off" placeholder="" class="layui-input" value="@if(!empty($res->bank_name)){{$res->bank_name}}@endif" >
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">支付宝账号</label>
            <div class="layui-input-block">
                <input type="text" name="alipay_account" autocomplete="off" placeholder="" class="layui-input" value="@if(!empty($res->alipay_account)){{$res->alipay_account}}@endif" >
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">微信昵称</label>
            <div class="layui-input-block">
                <input type="text" name="wechat_nickname" autocomplete="off" placeholder="" class="layui-input" value="@if(!empty($res->wechat_nickname)){{$res->wechat_nickname}}@endif" >
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">微信账号</label>
            <div class="layui-input-block">
                <input type="text" name="wechat_account" autocomplete="off" placeholder="" class="layui-input" value="@if(!empty($result->wechat_account)){{$result->wechat_account}}@endif" >
            </div>
        </div>
        

        <input type="hidden" name="id" value="{{$result->id}}">
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>

@endsection

@section('scripts')
    <script>
        layui.use('upload', function(){
            var upload = layui.upload;

            //执行实例
            var uploadInst = upload.render({
                elem: '#upload_test' //绑定元素
                ,url: '{{URL("api/upload")}}' //上传接口
                ,done: function(res){
                    //上传完毕回调
                    if (res.type == "ok"){
                        $("#thumbnail").val(res.message)
                        $("#img_thumbnail").show()
                        $("#img_thumbnail").attr("src",res.message)
                    } else{
                        alert(res.message)
                    }
                }
                ,error: function(){
                    //请求异常回调
                }
            });
        });


        layui.use(['form','laydate'],function () {
            var form = layui.form
                ,$ = layui.jquery
                ,laydate = layui.laydate
                ,index = parent.layer.getFrameIndex(window.name);
            //监听提交
            form.on('submit(demo1)', function(data){
                var data = data.field;
                $.ajax({
                    url:'{{url('admin/user/edit')}}'
                    ,type:'post'
                    ,dataType:'json'
                    ,data : data
                    ,success:function(res){
                        if(res.type=='error'){
                            layer.msg(res.message);
                        }else{
                            parent.layer.close(index);
                            parent.window.location.reload();
                        }
                    }
                });
                return false;
            });
        });
    </script>

@endsection