<div>
    <div class="wallet-inner">
        <div class="wallet-inner__header">
            <h2>Token sales</h2>
        </div>
    </div>
    <div class="wallet-inner__row">
        <div class="wallet-inner__col">
            <div class="wallet wallet--full-width" style="background-color: #707bcc;">
                                <span class="wallet__header">
                                    <span class="wallet__currency">
                                        <span class="wallet__currency-icon">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="31.371px" height="31.371px" viewBox="0 0 31.371 31.371" style="enable-background:new 0 0 31.371 31.371;"
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
                                            <span>Аvailable  Balance</span>
                                            <span>{{$totalBalance}} USDT</span>
                                        </span>
                                    </span>
                                </span>

                <span class="wallet__footer">
                                    <a href="buy.html" class="small-btn">refill</a>

                                    <span><b>Wallet number:</b> 0x45e1D2D3C1d001aC30E9C0B10e3a9cdD35018Bf0</span>
                                </span>

                <span class="wallet__bg-img">

                                </span>
            </div>

            <div class="wallet-inner__chart">
                <h3>Invoice Order</h3>
                <div class="chart">
                        <div class="form__row">

                            <div class="form__col-xl">
                                <label class="form__label">I give an order to buy a token</label>
                                <label>
                                    <select class="custom-select">
                                        @foreach($tokens as $token)
                                            <option value="{{$token->id}}">{{$token->name}}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>

                            <div class="form__col-lg">
                                <label class="form__label">Buy for the amount in USDT</label>
                                <div class="input-wrap">
                                    <input wire:model="usdValue" type="text" value="{{$usdValue}}">
                                </div>
                            </div>
                        </div>
                        <p style="padding-bottom: 25px;">
                            <label class="radio-input">
                                <input class="radio-input__radio" name="group1" type="radio" >
                                <span class="radio-input__checkmark"></span>
                                <span>I agree with <a href="#" style="color: #F57500;">Terms of Services</a></span>
                            </label>

                        </p>
                        <button wire:click="confirm()" class="btn btn--green">Сonfirm the order</button>
                </div>

            </div>
        </div>
        <div class="wallet-inner__col">
            <section class="transactions">
                <h3>Your orders </h3>

                <div class="transactions__list">
                    <div class="transaction ">

                        <div class="transaction__header transaction__header--three-cols">
                            <div class="transaction__data">
                                June 26, 2020
                            </div>

                            <div class="transaction__info">
                                <img   class="icon_tokin_sale" src="img/clover.png"  alt="">
                                <p>Clover Round 1</p>
                            </div>

                            <div class="transaction__course">
                                <span class="rate rate--minus"> 1000 USDT</span>

                            </div>
                        </div>

                        <div class="transaction__body">
                            <ul class="transaction__details">
                                <li>
                                    <span>Token Price, $:</span> 0.25
                                </li>
                                <li>
                                    <span>Total Tokens:</span> 4000
                                </li>
                                <li>
                                    <span>Hold period :</span> 7 month
                                </li>
                                <li>
                                    <span>Start hold:</span> June 30, 2020
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="transaction ">

                        <div class="transaction__header transaction__header--three-cols">
                            <div class="transaction__data">
                                June 26, 2020
                            </div>

                            <div class="transaction__info">
                                <img class="icon_tokin_sale" src="img/mina.png" alt="">
                                <p>Mina Token </p>
                            </div>

                            <div class="transaction__course">
                                <span class="rate rate--plus"> 4000 USDT</span>

                            </div>
                        </div>

                        <div class="transaction__body">
                            <ul class="transaction__details">
                                <li>
                                    <span>Token Price, $:</span> 0.25
                                </li>
                                <li>
                                    <span>Total Tokens:</span> 16000
                                </li>
                                <li>
                                    <span>Hold period :</span> 3 month
                                </li>
                                <li>
                                    <span>Start hold:</span> June 30, 2020
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="transaction ">

                        <div class="transaction__header transaction__header--three-cols">
                            <div class="transaction__data">
                                June 26, 2020
                            </div>

                            <div class="transaction__info">
                                <img class="icon_tokin_sale" src="img/mina.png" alt="">
                                <p>Mina Token </p>
                            </div>

                            <div class="transaction__course">
                                <span class="rate rate--minus"> 4000 USDT</span>

                            </div>
                        </div>

                        <div class="transaction__body">
                            <ul class="transaction__details">
                                <li>
                                    <span>Token Price, $:</span> 0.25
                                </li>
                                <li>
                                    <span>Total Tokens:</span> 16000
                                </li>
                                <li>
                                    <span>Hold period :</span> 3 month
                                </li>
                                <li>
                                    <span>Start hold:</span> June 30, 2020
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
