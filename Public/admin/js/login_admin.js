$(document).ready(function(){
    //登陆表单提交
    $('#loginForm').submit(function(){
        $this = $(this)
        var remember_me = 0
        if($('#remember_me').attr('checked') == 'checked'){
            remember_me = 1
        }
        // console.log($this.attr('idAttr'))
        $.post($this.attr('idAttr'),
                  {
                      username: $.trim($('#username').val()),
                      password: $.trim($('#password').val()),
                      remember_me: remember_me,
                      admin: '1',
                      formActionType: 'login'
                  },
                  function(data, status){
                    console.log(data)
                    if($.trim(data.code) == 1){
                        window.location.href = data.msg
                    }else{
                        validStatusChg('loginInfo', '', data.msg)
                    }
                  }
                  )
        return false
    })
})