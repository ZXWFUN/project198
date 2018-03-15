@include('home.public.head')
        <link rel="stylesheet" type="text/css" href="/home/css/jq22.css" />
        <link rel="stylesheet" type="text/css" href="/home/css/jq33.css" />


        <div class="container">

            <div class="demo clearfix">

                <!---左边座位列表----->

                <div id="seat_area">

                    <div class="front">屏幕</div>					

                </div>

                <!-- 右边选座信息  -->
                @foreach($films as $v)
                <div class="ding"><img style="float:right;margin-left:50px;" src="{{$v['pic']}}" alt=""></div>
                <div class="booking_area">

                    <p>电影：<span>{{$v['filmname']}}</span></p>
                @endforeach
                @foreach($cinema as $v)
                    <p>时间：<span>03月15日 {{$v['fytime']}}</span></p>
                @endforeach
                    <p>座位：</p>
                    <form action="mai" method="post">
                    {{csrf_field()}}
                    <ul id="seats_chose"></ul>
                    @foreach($yid as $k=>$v)
                     <input type="hidden" class="yingcang{{$k}}"  value="{{$v}}">
                     @endforeach
                    <p>票数：<span id="tickects_num">0</span></p>

                    <p>总价：<b>￥<span id="total_price">0</span></b></p>

                    <!--<input type="button" class="btn" value="确定购买"/>-->
                    <button>提交</button>
                    <div id="legend"></div>
                    </form>
                    
                </div>

            </div>

        </div>
@include('home.public.footer')

        <script src="/home/js/jquery-3.2.1.min.js"></script>

        <script type="text/javascript" src="home/js/jquery.seat-charts.min.js"></script>

        <script type="text/javascript">

            var price = 33; //电影票价

            $(document).ready(function() {

                var $cart = $('#seats_chose'), //座位区

                        $tickects_num = $('#tickects_num'), //票数

                        $total_price = $('#total_price'); //票价总额



                var sc = $('#seat_area').seatCharts({

                    map: [//座位结构图 a 代表座位; 下划线 "_" 代表过道

                        'cccccccccc',

                        'cccccccccc',

                        '__________',

                        'cccccccccc',

                        'cccccccccc',

                        'cccccccccc',

                        'cccccccccc',

                        '__________',

                        'cccccccccc',

                        'cc__cc__cc'

                    ],

                    naming: {//设置行列等信息

                        top: false, //不显示顶部横坐标（行） 

                        getLabel: function(character, row, column) { //返回座位信息 

                            return column;

                        }

                    },

                    legend: {//定义图例

                        node: $('#legend'),

                        items: [

                            ['c', 'available', '可选座'],

                            ['c', 'unavailable', '已售出']

                        ]

                    },

                    click: function() {

                        if (this.status() == 'available') { //若为可选座状态，添加座位
                            var piaoshu = parseInt($('#tickects_num').text())+1;
                            var yingcang0 = $('.yingcang0').val();
                            var yingcang1 = $('.yingcang1').val();
                            var zongjia = parseInt($('#total_price').text())+33;
                            // console.log(yingcang0)
                            // console.log(yingcang1)
                            $('<li>' + (this.settings.row + 1) + '排' + this.settings.label + '座</li>')

                                    .attr('id', 'cart-item-' + this.settings.id)

                                    .attr('zuoweihao', this.settings.id)

                                    .data('seatId', this.settings.id)

                                    .appendTo($cart);
                                    
                             $("<input type='hidden'>")
                                    .attr('value', this.settings.id)
                                    .attr('id', 'zuowei-' + this.settings.id)
                                    .attr('name', 'zuowei[]')
                                    .appendTo($cart);
                            $("<input type='hidden'>")
                                    .attr('name','piao')
                                    .attr('value',piaoshu)
                                    .appendTo($cart);

                            $("<input type='hidden'>")
                                     .attr('name','yingcang0')
                                    .attr('value',yingcang0)
                                    .appendTo($cart);
                            $("<input type='hidden'>")
                                     .attr('name','yingcang1')
                                    .attr('value',yingcang1)
                                    .appendTo($cart);
                             $("<input type='hidden'>")
                                     .attr('name','jia')
                                    .attr('value',zongjia)
                                    .appendTo($cart);             
                            $tickects_num.text(sc.find('selected').length + 1); //统计选票数量
                          
                            $total_price.text(getTotalPrice(sc) + price);//计算票价总金额

                           console.log($('#tickects_num').text());
                           
                        
                            return 'selected';


                        } else if (this.status() == 'selected') { //若为选中状态



                            $tickects_num.text(sc.find('selected').length - 1);//更新票数量

                            $total_price.text(getTotalPrice(sc) - price);//更新票价总金额

                            $('#cart-item-' + this.settings.id).remove();//删除已预订座位
                            $('#zuowei-' + this.settings.id).remove();//删除已预订座位 
                           
                            return 'available';

                        } else if (this.status() == 'unavailable') { //若为已售出状态

                            return 'unavailable';

                        } else {

                            return this.style();

                        }

                    }

                });

                //设置已售出的座位

                sc.get(['4_8']).status('unavailable');
            });
            

            function getTotalPrice(sc) { //计算票价总额

                var total = 0;

                sc.find('selected').each(function() {

                    total += price;

                });
                return total;
            }
        </script>
       



