$(document).ready(function() {

    //用户填写用户名后检查是否数据库中已存在
    $('#registerForm #username').change(function(){
        $this = $(this)
        var username = $this.val()

        $.get($this.attr('idAttr'),
                {
                    username: username
                },
                function(data,status){
                    if($.trim(data)){
                        validStatusChg('registerInfo', $this, '此用户名已被人使用！')
                    }
                }
                )
    });

    //实时检验用户填写邮箱格式是否合法
    $('#registerForm #email').change(function(){
        $this = $(this)
        var email = $(this).val()
        if(!isEmail(email)){
            validStatusChg('registerInfo', $this, '邮箱格式不合法！')
        }
    });

    //实时验证密码的长度
    $('#registerForm #password').change(function(){
        if($(this).val().length < 8){
            validStatusChg('registerInfo', $(this), '密码长度至少8位！')
        }
    })

    //实时检验两次输入密码是否相同
    $('#registerForm #repassword').change(function(){
        if($(this).val() != $('#password').val()){
            validStatusChg('registerInfo', $(this), '两次密码不一致！')
        }
    });

    //提交表单后检验表单内容都是否合法
    $('#registerForm').submit(function(){
        //如果存在以上的错误提示信息，直接返回false
        if($(this).find('.warnning-border').length > 0){
            return false
        }

        //判断性别是否选择
        if($('#sex').attr('idAttr') == -1){
            validStatusChg('registerInfo', $('#sex'), '性别未选择')
            return false
        }

        var email = $('#email').val()
        var username = $('#username').val();
        var password = $('#password').val();
        var repassword = $('#repassword').val();
        var sex = $('#sex').attr('idAttr')

        if(email == ''){
            validStatusChg('registerInfo', $('#email'), '邮箱不能为空')
            return false
        }
        
        if(username == '') {
            validStatusChg('registerInfo', $('#username'), '用户名不能为空')
            return false;
        }

        if(password == '') {
            validStatusChg('registerInfo', $('#password'), '密码不能为空')
            return false;
        }

        if(repassword == '') {
            validStatusChg('registerInfo', $('#repassword'), '两处密码不一致')
            return false;
        }
        
        $.post($(this).attr('idAttr'),
        	       {
        	       	username: username,
        	       	password: password,
        	       	email: email,
        	       	sex: sex,
                        formActionType: 'register'
        	       },
        	       function(data,status){
        	            if(data.code){
                           window.location.href= data.msg;
        	            }else{
        	               alert('Ohh,system error,please register after a while');
        	            }
        	       }
        	       );

        return false;
        
    });

    //在用户输入时清除空提示信息,去除TAB键的影响
    $('#registerForm input').keyup(function(e){
        var key = window.event?e.keyCode:e.which;
        if(key.toString() != '9'){
            removeWarnning('registerForm', 'registerInfo', '欢迎注册dyl')
        }
    });

    $('#sex').next().click(function(){
            removeWarnning('registerForm', 'registerInfo', '欢迎注册dyl')
    })
});

   