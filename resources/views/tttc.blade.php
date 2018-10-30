<html>
<head>
    <meta charset="utf-8">
    <title>Vue 测试实例 - 菜鸟教程(runoob.com)</title>
    <script src="https://cdn.staticfile.org/vue/2.4.2/vue.min.js"></script>
    <link href="{{asset('static/css/app.30790115300ab27614ce176899523b62.css' )}}" rel="stylesheet">

</head>
<body>
<div id="app"><p style="font-size:25px;">计数器: @{{ counter }}</p>
    <button @click="counter++" style="font-size:25px;">点我</button>
</div>
<script type="text/javascript">var vm = new Vue({
        el: '#app',
        data: {
            counter: 1
        }
    });
    vm.$watch('counter', function (nval, oval) {
        alert('计数器值的变化 :' + oval + ' 变为 ' + nval + '!');
    });
    setTimeout(
        function () {
            vm.counter = 20;
        }, 2000
    );</script>
<script type="text/javascript" src="{{asset('static/js/manifest.2ae2e69a05c33dfc65f8.js' )}}"></script>
<script type="text/javascript" src="{{asset('static/js/vendor.2420502e2b2c7f321d64.js' )}}"></script>
<script type="text/javascript" src="{{asset('static/js/app.e38558be0b364c4da153.js' )}}"></script>
</body>
</html>