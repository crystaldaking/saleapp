<section class="wallets">
    <h2>Total Balance, $: {{$totalBalance}} </h2>
    <div class="wallets__list">
        <!-- Wallets-->
        @foreach($wallets as $wallet)
            <a href="#" class="wallet" style="background-color: #707bcc;">
            <span class="wallet__header">
                <span class="wallet__currency">
                    <span class="wallet__currency-icon">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="31.371px" height="31.371px" viewBox="0 0 31.371 31.371"
                             style="enable-background:new 0 0 31.371 31.371;"
                             xml:space="preserve">
                            <g>
                                <path d="M24.26,20.34c0,3.42-2.423,6.342-6.845,7.111v3.92h-3.768v-3.648c-2.578-0.117-5.076-0.811-6.537-1.654l1.154-4.5
                                         c1.615,0.886,3.883,1.693,6.383,1.693c2.191,0,3.691-0.848,3.691-2.385c0-1.461-1.23-2.389-4.077-3.348
                                         c-4.112-1.385-6.921-3.306-6.921-7.033c0-3.386,2.385-6.035,6.499-6.845V0h3.767v3.383c2.576,0.115,4.309,0.652,5.576,1.268
                                         l-1.115,4.348C21.07,8.575,19.3,7.688,16.531,7.688c-2.5,0-3.307,1.076-3.307,2.154c0,1.268,1.346,2.074,4.613,3.307
                                         C22.416,14.762,24.26,16.877,24.26,20.34z"/>
                            </g>
                        </svg>
                    </span>
                    <span class="wallet__currency-info">
                        <span>Balance</span>
                        <span>{{$wallet->short_name}}</span>
                    </span>
                </span>
                <span class="wallet__course">
                    <span>{{$wallet->pivot->balance}} USD</span>
                    <span>{{$wallet->pivot->balance}} {{$wallet->short_name}}</span>
                </span>
            </span>

            <span class="wallet__footer">
                <span>1 {{$wallet->short_name}} - 1 US Dollar </span>
                <span>More</span>
            </span>
        </a>
        @endforeach
        <!-- End Wallets-->

        <a href="#add-wallet" class="add-wallet popup-link">
            <span class="add-wallet__icon">
                <img src="img/add-wallet-icon.png" alt="">
            </span>
            <span class="add-wallet__text">
                Add New Wallet
            </span>
        </a>
    </div>
</section>
