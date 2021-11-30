@foreach($tokens as $token)
    <div class="transaction">
        <div class="transaction__header transaction__header--five-cols">
            <div class="transaction__data">
                {{$token->start_date}}
            </div>

            <div class="transaction__currency">
                <img   class="icon_tokin_sale" src="img/clover.png"  alt="">
                {{$token->name}} Sale Registration Now Open
            </div>

            <div class="transaction__info">
                Registration Open Now · Sale Begins April 20 · US, Canada, China excluded
            </div>

            <div  class="buy_btn_blue learn_more_tokin_div" >
                <a  style="color: #ffffff;" href="{{$token->view_url}}" class="">View</a>
            </div>
            <div  class="buy_btn_green learn_more_tokin_div " >
                <a  href="{{route('tokens')}}" class="learn_more_tokin ">Order</a>
            </div>
        </div>
    </div>
@endforeach
