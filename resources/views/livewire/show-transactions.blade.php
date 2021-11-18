<section class="transactions">
    <div class="transactions__header">
        <h2>Transactions</h2>
    </div>

    <div class="transactions__list">
        @foreach($orders as $order)
        <div class="transaction">
            <div class="transaction__header transaction__header--six-cols">
                <div class="transaction__data">
                    <p>{{$order->order_time}}</p>
                </div>

                <div class="transaction__currency">
                    <img class="icon_tokin_sale" src="{{asset('storage/'.\App\Models\Token::find($order->token_id)->image_path)}}" alt="">
                    {{\App\Models\Token::find($order->token_id)->name}}
                </div>

                <div class="transaction__info">
                    <p>
                        Invoice Order
                    </p>
                </div>

                <div class="transaction__status">
                    <div class="status status--recived">
                        {{$order->getStatus()}}
                    </div>
                </div>

                <div class="transaction__course">
                    <span class="rate rate--minus">{{$order->price}} USDT</span>
                </div>

                <div class="transaction__actions">

                </div>
            </div>
            <div class="transaction__body">
                <ul class="transaction__details">

                    <li>
                        <span>Address:</span> 3Bhe5sbhSTNxcDpYyyWkyN76YReDs8wFv8
                    </li>

                </ul>
            </div>
        </div>
        @endforeach
    </div>
</section>
