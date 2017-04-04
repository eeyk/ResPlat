@extends('admin.main', array('title' => '创建用户'))

@section('master')

<div class="gray-bg">
<div class="row"> 
<div class="col-lg-12"> 
<div class="text-center fadeInDown" align="center">

<div class="ibox float-e-margins"> 

<div class="ibox-content"> 
{{ Former::setOption('default_form_type', null) }}
{{ Former::withRules(array(
    'username'              => 'required|alpha_num|max:64|unique:users',
    'nickname'              => 'required|max:64',
    'password'              => 'required|alpha_num|min:6|confirmed',
    'password_confirmation' => 'required|alpha_num|min:6',
    'group_id'              => 'required|numeric|exists:groups,id'))
}}
{{ Former::open()
         ->action(URL::route('user.store')) 
         ->class('m-t text-left')
         ->id('userForm')
}}
{{ Former::token() }}

<div class="form-group">
{{ Former::text('username')
         ->value(Input::old('email'))
         ->class('form-control')
         ->placeholder('用户名')
         ->label('用户名')
}}
</div>
    
<div class="form-group">
{{ Former::text('nickname')
         ->value(Input::old('nickname'))
         ->class('form-control')
         ->placeholder('部门')
         ->label('部门')
}}
</div>
    
<div class="form-group">
{{ Former::password('password')
         ->class('form-control')
         ->placeholder('密码')
         ->label('密码')
}}
</div>
    
<div class="form-group">
{{ Former::password('password_confirmation')
         ->class('form-control')
         ->placeholder('确认密码')
         ->label('确认密码')
}}
</div>
    
<div class="form-group">
{{ Former::select('group_id')
         ->options($groups)
         ->class('form-control')
         ->label('用户组')
}}
</div>

<div class="form-group">
{{ Former::submit('创建')
         ->class('btn btn-info block full-width m-b')
}}
{{ Former::reset('重置')
         ->class('btn btn-info block full-width m-b')
}}
</div>
        
{{ Form::close() }}
</div>
</div>
    

</div>
</div>
</div>
</div>

@stop

@section('script')
@parent
<script>
    function ajaxSubmit(frm, fn) {
        $.ajax({
            url: frm.action,
            type: 'post',
            data: $('form#userForm').serialize(),
            success: fn,
            beforeSend: function () {
                if (!($('input[name=username]').val().match(/^\w+$/))) {
                    layer.msg('请输入由英文、数字或下划线组成的用户名', 1, 2);
                    return false;
                }
                if ($('input[name=nickname]').val().length == 0) {
                    layer.msg('请输入部门名称', 1, 2);
                    return false;
                }
                if (!($('input[name=password]').val().match(/.{6,32}/))) {
                    layer.msg('请输入6位以上密码', 1, 2);
                    return false;
                }
                if ($('input[name=password_confirmation]').val().length == 0) {
                    layer.msg('请输入密码', 1, 2);
                    return false;
                }
                if ($('input[name=password_confirmation]').val() != $('input[name=password]').val()) {
                    layer.msg('密码不一致', 1, 2);
                    return false;
                } else {
                    return true;
                }
            },
        });
        return false;
    }

    (function() {
        $('#userForm').bind('submit', function() {
            ajaxSubmit(this, function(json) {
                if (json.success == true) {
                    layer.msg(json.msg, 2, 1);
                    setTimeout(
                        function() {
                            parent.location.reload();
                        }, 1500);
                } else {
                    layer.msg(json.error, 2, 2);
                }
            });
            return false;
        });
    })();
</script>
@stop
