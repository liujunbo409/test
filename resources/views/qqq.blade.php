<html lang="en">
<head>
    <meta charset="utf-8">
    <title>document</title>
    <link href="{{asset('static/css/app.e38558be0b364c4da153.js' )}}" rel="stylesheet">
    <link href="{{asset('static/css/app.30790115300ab27614ce176899523b62.css' )}}" rel="stylesheet">
</head>
<style>* {
        margin: 0;
        padding: 0;
    }

    #main {
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
<body>
<div id="main">
    <nav><a v-for="(item,index) in items" :class="{'show': item.active}"
            @click="makeActive(item,index)">@{{item.NODE_NAME}}</a></nav>
    <p>学生ID ：</p><input  v-model="studentid" placeholder="请输入学号！" >
    <p>学生名字 ：</p><input  v-model="studentname" placeholder="请输入姓名！" >
    <p>学生所属学校 ：</p><select v-model="selected" name="fruit">
        <option value="">选择一个学校</option>
        <option value="1">清华</option>
        <option value="2">北大</option>
    </select><br>
    <input type="radio"  v-model="sex" value="1">
    <p>
    <label >男</label>
    <br>
    <input type="radio"  v-model="sex" value="2">
    <label >女</label></p>
    <p>喜欢的颜色</p>
    <input type="checkbox" id="runoob" value="1" v-model="checkednames">
    <label for="runoob">yellow</label>
    <input type="checkbox" id="google" value="2" v-model="checkednames">
    <label for="blue">blue</label>
    <input type="checkbox" id="taobao" value="3" v-model="checkednames">
    <label for="green">green</label>
    <p>你输入的信息的是: <b>@{{active}}</b></p></div>
<script>
    var myproduct = {};
    var vm = new Vue({
        el: '#main',
        data: {
            active: myproduct,
            items: {},
            studentid : '',
            studentname: '',
            selected : '',
            sex : '',
            checkednames : [2,3]
        },
        mounted: function () {
                axios.get('{{asset('api/test')}}')
                    .then(function (res) {
                        console.log(JSON.stringify(res.data.ret));
                        vm.active=JSON.stringify(res.data.ret);
                        vm.studentid=JSON.stringify(res.data.ret.studentid);
                        vm.studentname=JSON.stringify(res.data.ret.studentname);
                        vm.selected=JSON.stringify(res.data.ret.school);
                        vm.sex=JSON.stringify(res.data.ret.sex);
                        vm.checkednames=JSON.stringify(res.data.ret.checkednames);

                    })
                    .catch(function (err) {
                        console.log('1111111'+err);
                    })
        },

    });</script>
<script type="text/javascript" src="{{asset('static/js/manifest.2ae2e69a05c33dfc65f8.js' )}}"></script>
<script type="text/javascript" src="{{asset('static/js/vendor.2420502e2b2c7f321d64.js' )}}"></script>
<script type="text/javascript" src="{{asset('static/js/app.e38558be0b364c4da153.js' )}}"></script>
</body>
</html>