<html lang="en">
<head>
    <meta charset="utf-8">
    <title>社会大学学生管理系统</title>
    <link href="{{asset('static/css/app.e38558be0b364c4da153.js' )}}" rel="stylesheet">
    <link href="{{asset('static/css/app.30790115300ab27614ce176899523b62.css' )}}" rel="stylesheet">
</head>
<style>* {
        margin: 0;
        padding: 0;
    }

    #index {
        width: auto;
        margin: 0 auto;
        text-align: center;
    }

    nav {
        display: inline-block;
        margin: 60px auto 45px;
        background-color: #5597b4;
        box-shadow: 0 1px 1px #ccc;
        border-radius: 2px;
    }

    nav a {
        display: inline-block;
        padding: 18px 30px;
        color: #fff !important;
        font-weight: bold;
        font-size: 16px;
        text-decoration: none !important;
        line-height: 1;
        background-color: transparent;
        -webkit-transition: background-color 0.25s;
        -moz-transition: background-color 0.25s;
        transition: background-color 0.25s;
        cursor: pointer;
    }

    p {
        margin: 0 auto;
    }

    b {
        display: inline-block;
        padding: 5px 10px;
        background-color: #c4d7e0;
        border-radius: 2px;
        font-size: 18px;
    }

    .show {
        background-color: #e35885;
    }</style>
<script src="//cdn.bootcss.com/vue/2.2.3/vue.min.js"></script>
<script src="//cdn.bootcss.com/axios/0.15.3/axios.min.js"></script>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<body bgcolor="#808080">
<div id="index">
    <img src="http://a1.att.hudong.com/28/34/01300542655433140504341316931.jpg" width="1000px" height="500px"><br/>
    <h1>你好,请登录</h1><br/>
    <p>学生ID ：<input  v-model="studentid" placeholder="请输入学号！" ></p>
    <p>密码 ：<input  v-model="password" placeholder="password" ></p>
    <p><button type="submit" v-on:click="submit(studentid, password)" >登录</button></p>

</div>
<script>
    var vm = new Vue({
        el : '#index',
        data : {
            studentid : '',
            password : ''
        },
        methods:{
            submit : function(id, password){
                //window.location.href = "../public/mypage?stuid=" + id ;
                if (vm.studentid == "" && vm.password =="")
                {
                    alert("学号或密码不能为空");
                    return false;
                }
                // if (vm.studentid != "" && vm.password !="")
                // {
                //     alert("学号或密码不能为空");
                //     return false;
                // }
                location.assign("../public/mypage?stuid=" + id +"&flag=login");
    }
        }
    });

</script>
<script type="text/javascript" src="{{asset('static/js/manifest.2ae2e69a05c33dfc65f8.js' )}}"></script>
<script type="text/javascript" src="{{asset('static/js/vendor.2420502e2b2c7f321d64.js' )}}"></script>
<script type="text/javascript" src="{{asset('static/js/app.e38558be0b364c4da153.js' )}}"></script>
</body>
</html>