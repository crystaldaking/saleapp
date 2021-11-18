<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
    @include('chunks.head')
</head>

<body>

<div class="preloader"></div>

<div class="wrapper">
    <header class="header">
        @include('chunks.header')
    </header>


    <div class="content">
        <aside class="sidebar">
            <div class="sidebar__close-btn">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="16" viewBox="0 0 15 16"><defs><path id="hy9fa" d="M294.49 17.58L307.92 31l-1.41 1.41L293.08 19z"/><path id="hy9fb" d="M293.08 31.01l13.43-13.43 1.41 1.41-13.43 13.43z"/></defs><g><g transform="translate(-293 -17)"><use fill="#fff" xlink:href="#hy9fa"/></g><g transform="translate(-293 -17)"><use fill="#fff" xlink:href="#hy9fb"/></g></g></svg>
            </div>

            <a href="" class="logo">
                <img class="logo__img" src="img/logo.png" alt="">
                <span class="logo__text">Crypterium</span>
            </a>

            <ul class="menu">
                @include('chunks.menu')
            </ul>

            <div class="d-md-none">
                <div class="user">
                    <div class="user__avatar">
                        <img src="img/user.png" alt="">
                        <div class="user__arr">
                            <img src="img/user-dropdown-icon.svg" alt="">
                        </div>
                    </div>
                    <p class="user__name">
                        Alex Bolden
                    </p>
                    <ul class="user-menu">
                        <li class="user-menu__item">
                            <a href="" class="user-menu__link">
									<span class="user-menu__icon">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="16.503px" height="15.001px" viewBox="0 0 16.503 15.001" style="enable-background:new 0 0 16.503 15.001;"
                                             xml:space="preserve">
									   <path d="M14.951,0H1.547C0.693,0,0,0.692,0,1.547v8.764c0,0.854,0.692,1.547,1.547,1.547h2.062v2.191
										   c0.15,0.644,0.897,1.413,2.119,0.603l3.093-2.794h6.135c0.854,0,1.547-0.692,1.547-1.547V1.547C16.503,0.693,15.811,0,14.956,0
										   C14.955,0,14.953,0,14.951,0z M15.467,9.795c0,0.569-0.462,1.031-1.031,1.031H8.507l-3.418,3.047
										   c-0.577,0.717-0.423-1.165-0.423-1.98l0,0v-1.067H2.088c-0.569,0-1.031-0.462-1.031-1.031V2.062c0-0.569,0.462-1.031,1.031-1.031
										   h12.373c0.569,0,1.031,0.462,1.031,1.031v7.733H15.467z"/>
									   </svg>
									</span>
                                <span class="user-menu__text">
										Support
									</span>
                            </a>
                        </li>
                        <li class="user-menu__item">
                            <a href="" class="user-menu__link">
									<span class="user-menu__icon">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="18px" height="18px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;" xml:space="preserve">
											   <path d="M9,6C7.343,6,6,7.343,6,9c0,1.657,1.343,3,3,3c1.657,0,3-1.343,3-3C12,7.343,10.657,6,9,6z M9,10.5
												   c-0.828,0-1.5-0.672-1.5-1.5S8.172,7.5,9,7.5s1.5,0.672,1.5,1.5S9.828,10.5,9,10.5z M15.75,6.75h-1.32l0.93-0.93
												   c0.847-0.909,0.797-2.333-0.112-3.18c-0.864-0.805-2.203-0.805-3.068,0l-0.93,0.93V2.25C11.25,1.007,10.243,0,9,0
												   C7.757,0,6.75,1.007,6.75,2.25v1.32L5.82,2.625C4.911,1.778,3.487,1.828,2.64,2.737c-0.805,0.864-0.805,2.203,0,3.068l0.93,0.93
												   H2.25C1.007,6.735,0,7.742,0,8.985c0,1.243,1.007,2.25,2.25,2.25h1.32L2.625,12.18c-0.847,0.909-0.797,2.333,0.112,3.18
												   c0.864,0.805,2.203,0.805,3.068,0l0.93-0.93v1.32c0,1.243,1.007,2.25,2.25,2.25c1.243,0,2.25-1.007,2.25-2.25v-1.32l0.93,0.93
												   c0.909,0.847,2.333,0.797,3.18-0.112c0.805-0.864,0.805-2.203,0-3.068l-0.93-0.93h1.32c1.243,0.008,2.257-0.992,2.265-2.235V9
												   C18,7.757,16.993,6.75,15.75,6.75z M15.75,9.75h-1.56c-0.125,0.868-0.465,1.69-0.99,2.393l1.102,1.102
												   c0.269,0.315,0.233,0.788-0.082,1.057c-0.281,0.241-0.695,0.241-0.976,0L12.142,13.2c-0.702,0.525-1.525,0.865-2.393,0.99v1.56
												   c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75v-1.56c-0.868-0.125-1.69-0.465-2.393-0.99l-1.102,1.102
												   c-0.315,0.269-0.788,0.233-1.057-0.082c-0.241-0.281-0.241-0.695,0-0.976l1.102-1.102c-0.525-0.702-0.865-1.525-0.99-2.393h-1.56
												   c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h1.56c0.125-0.868,0.465-1.69,0.99-2.393L3.697,4.754
												   C3.428,4.439,3.464,3.966,3.779,3.697c0.281-0.241,0.695-0.241,0.976,0l1.102,1.102c0.702-0.525,1.525-0.865,2.393-0.99v-1.56
												   c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v1.56c0.868,0.125,1.69,0.465,2.393,0.99l1.102-1.102
												   c0.315-0.269,0.788-0.233,1.057,0.082c0.241,0.281,0.241,0.695,0,0.976L13.2,5.857c0.525,0.702,0.865,1.525,0.99,2.393h1.56
												   c0.414,0,0.75,0.336,0.75,0.75S16.164,9.75,15.75,9.75z"/>
									   </svg>
									</span>
                                <span class="user-menu__text">
										Settings
									</span>
                            </a>
                        </li>
                        <li class="user-menu__item">
                            <a href="" class="user-menu__link">
									<span class="user-menu__icon">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="9.467px" height="11px" viewBox="0 0 9.467 11" style="enable-background:new 0 0 9.467 11;" xml:space="preserve">
											   <path d="M8.545,5.135H7.811V2.971C7.811,1.332,6.481,0,4.841,0H4.625C2.987,0,1.656,1.331,1.656,2.971
												   v0.721h1.231V2.971c0-0.96,0.78-1.74,1.738-1.74h0.216c0.959,0,1.738,0.781,1.738,1.74v2.165H0.922C0.416,5.135,0,5.548,0,6.056
												   v4.024C0,10.587,0.413,11,0.922,11h7.622c0.507,0,0.922-0.412,0.922-0.92V6.056C9.467,5.548,9.054,5.135,8.545,5.135z
													M8.236,9.769H1.231V6.366h7.005V9.769z"/>
									   </svg>
									</span>
                                <span class="user-menu__text">
										Sign out
									</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                © 2018 Crypterium
            </div>

        </aside>

        <main class="main-content">
            @livewire('show-transactions',['user' => auth()->user()])
        </main>
    </div>

</div>

<div class="d-none">

    <form class="popup popup-add-wallet zoom-anim-dialog" id="add-wallet">
        <div class="popup__content">


            <img class="popup-add-wallet__img" src="img/popup-add-wallet-icon.png" alt="">
            <h3>Add new wallet</h3>

            <div class="popup-add-wallet__row">

                <input type="text" placeholder="Name wallet">

            </div>

            <button class="btn btn--blue btn--full">Add new wallet</button>
        </div>
        <div class="popup__thanks">
            <img src="img/popup-success.png" alt="">
            <h3>Your wallet added successful!</h3>
        </div>
    </form>

</div>
@include('chunks.scripts')
</body>
</html>
