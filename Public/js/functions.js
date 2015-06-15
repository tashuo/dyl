    //测试邮箱格式是否合法
    function isEmail(str){
        var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_])+((\.[a-zA-Z0-9_]{2,3}){1,2})$/;
        return reg.test(str);
    }

    //bootstrap下拉列表模拟下拉框
    function changeSex(num, val){
        $('#sex').attr('idAttr', num)
        $('#sex').text(val);
    }

    //实时验证合法状态切换
    function validStatusChg(type, node, msg){
        if(node != ''){
            node.addClass('warnning-border')
        }
        $this = $('#'+type)
        $this.children('p').text(msg)
        $this.removeClass('alert-success')
        $this.addClass('alert-danger')
    }

    //每次用户输入时清除所有提示信息
    function removeWarnning(type, node, text){
        $this = $('#'+type)
        $this.find('.warnning-border').each(function(index, el) {
            $(this).removeClass('warnning-border')
        });

        $this = $('#'+node)
        $this.children('p').text(text)
        $this.removeClass('alert-danger')
        $this.addClass('alert-success')
    }