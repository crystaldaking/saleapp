<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
    @include('chunks.head')
</head>

<body>

<div class="preloader"></div>

<div class="wrapper">
    <header class="header">
        <div class="inner-col">
            <a href="" class="mobile-logo d-md-none">
                <img src="img/logo.png" alt="">
            </a>
            <div class="btn-menu btn-menu--left">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <form class="search">
					<span class="search__icon">
						<img src="img/search-white.svg" alt="">
					</span>
                <input class="search__input" type="text" placeholder="Search">
            </form>
        </div>


        <div class="inner-row align-right">



            <div class="d-none d-md-block">
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

            <div class="btn-menu btn-menu--right">
                <div></div>
                <div></div>
                <div></div>
            </div>

        </div>

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
                <li class="menu__item active">
                    <a class="menu__link" href="index.html">
							<span class="menu__link-icon">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="18px" height="16px" viewBox="-12 15 18 16" style="enable-background:new -12 15 18 16;" xml:space="preserve">
									   <path d="M6,19.557L-3,15l-9,4.557l9,4.318L6,19.557z M-3,16.681l5.608,2.84L-3,22.211l-5.608-2.69
										   L-3,16.681z M2.561,26.668L-3,29.336l-5.561-2.668h-3.412L-12,26.682L-3,31l9-4.318l-0.027-0.014H2.561z M2.561,23.106L-3,25.774
										   l-5.561-2.668h-3.412L-12,23.12l9,4.318l9-4.318l-0.027-0.014C5.973,23.106,2.561,23.106,2.561,23.106z"/>
							   </svg>
							</span>
                        <span class="menu__link-text">
								Dashboard
							</span>
                    </a>
                </li>
                <li class="menu__item ">
                    <a class="menu__link" href="wallets.html">
							<span class="menu__link-icon">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="15px" height="15px" viewBox="120.5 14.5 15 15" style="enable-background:new 120.5 14.5 15 15;" xml:space="preserve">

									   <path d="M133.921,18.447L123.658,14.5c-0.872,0-1.579,0.707-1.579,1.579v2.368
										   c-0.872,0-1.579,0.707-1.579,1.579v7.895c0,0.872,0.707,1.579,1.579,1.579h11.842c0.872,0,1.579-0.707,1.579-1.579v-7.895
										   C135.5,19.154,134.793,18.447,133.921,18.447z M123.657,17.088c0.001-0.436,0.354-0.789,0.79-0.788l5.526,2.146h-6.316V17.088z
											M133.921,27.13c0,0.436-0.354,0.79-0.79,0.79h-10.263c-0.436-0.001-0.789-0.354-0.789-0.79v-6.315
										   c0-0.436,0.353-0.789,0.789-0.79h10.263c0.436,0,0.79,0.354,0.79,0.79V27.13z M124.842,23.183h-0.79
										   c-0.217,0.003-0.392,0.178-0.395,0.395v0.789c0.003,0.217,0.178,0.392,0.395,0.395h0.79v0.001
										   c0.217-0.003,0.393-0.179,0.395-0.396v-0.789C125.234,23.361,125.059,23.186,124.842,23.183z"/>
							   </svg>
							</span>
                        <span class="menu__link-text">
								Wallets
							</span>
                    </a>
                </li>
                <li class="menu__item ">
                    <a class="menu__link" href="token_sales.html">
							<span class="menu__link-icon">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M454.69,161.886l-86.972-86.98c-6.272-6.281-16.264-6.63-22.946-1.084l-17.604,8.806l-6.912-6.912l9.37-18.705
			c5.751-11.81,0.811-19.379-2.654-22.852L297.805,5.001C294.588,1.775,290.304,0,285.739,0h-0.017
			c-4.557,0-8.841,1.775-12.049,5.001l-72.405,72.405c-3.226,3.217-5.001,7.509-5.001,12.066c0,4.557,1.775,8.841,5.001,12.066
			l29.286,29.286c3.413,3.422,10.914,8.294,22.801,2.492l18.628-9.327l6.912,6.912l-8.806,17.604
			c-2.534,3.046-3.917,6.861-3.917,10.88c0,4.557,1.775,8.841,5.001,12.066l34.697,34.688c3.328,3.328,8.73,3.328,12.066,0
			c3.328-3.337,3.328-8.738,0-12.066l-34.697-34.688c0.657-0.649,1.195-1.399,1.604-2.219l12.066-24.141
			c1.638-3.285,0.998-7.253-1.604-9.847l-15.607-15.607c-2.594-2.594-6.579-3.217-9.847-1.596l-24.064,12.041
			c-2.133,1.05-2.987,0.939-3.166,0.742l-29.286-29.286l72.405-72.405l29.431,29.474c0,0.008,0.145,0.862-0.853,2.91l-12.075,24.141
			c-1.638,3.277-0.998,7.253,1.596,9.847l15.607,15.599c2.611,2.603,6.579,3.234,9.856,1.604l24.132-12.066
			c0.819-0.418,1.57-0.947,2.219-1.604l87.552,87.509c0.521,0.435,51.729,43.537,51.729,90.052c0,18.671,0,31.889-6.46,50.475
			c-21.786-71.108-63.744-99.029-65.698-100.301c-2.398-1.562-5.427-1.809-8.047-0.666l-50.441,22.007
			c-2.628,1.152-4.113,1.109-4.241,1.135l-21.197-21.333c-1.596-1.621-3.678-2.901-6.05-2.517c-2.27,0-4.437,0.896-6.033,2.5
			L53.35,489.267c-1.417,1.579-6.101,5.666-10.684,5.666c-4.71,0-9.242-4.011-11.034-6.033l-8.9-8.883
			c-1.579-1.417-5.666-6.101-5.666-10.684c0-4.489,4.233-9.378,6.033-11.034l251.665-251.665c3.337-3.337,3.337-8.738,0-12.066
			c-3.328-3.337-8.73-3.337-12.066,0L11.392,445.892C10.223,446.933,0,456.414,0,469.333c0,13.099,10.274,22.46,11.034,23.1
			l8.047,8.004C20.07,501.623,29.227,512,42.667,512c13.099,0,22.46-10.274,23.1-11.034L332.783,233.95l15.181,15.283
			c5.572,5.572,14.012,6.477,23.159,2.449l45.858-20.011c11.307,9.165,46.797,42.615,61.056,111.394
			c0.742,3.558,3.652,6.255,7.262,6.733c3.55,0.427,7.108-1.399,8.73-4.651C512,309.214,512,290.475,512,264.533
			C512,209.946,456.465,163.302,454.69,161.886z"/>
	</g>
</g>

</svg>
							</span>
                        <span class="menu__link-text">
								Token sales
							</span>
                    </a>
                </li>
                <!-- Farm -->
                <li class="menu__item ">
                    <a class="menu__link" href="farms.html">
							<span class="menu__link-icon">
								<svg version="1.1" width="15.277px" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                     style="enable-background:new 0 0 512 512;width:15.277px" xml:space="preserve">
<g>
	<g>
		<path d="M499.205,244.677L449.117,233.6v-18.901c0-10.422,7.1-19.303,17.265-21.599c8.792-1.985,14.308-10.721,12.324-19.513
			c-1.985-8.792-10.723-14.31-19.513-12.324c-25.15,5.679-42.715,27.652-42.715,53.436v11.682l-85.862-18.989L301.788,73.034h0.541
			c9.012,0,16.319-7.307,16.319-16.319c0-9.012-7.307-16.319-16.319-16.319H80.674c-9.012,0-16.319,7.307-16.319,16.319
			c0,8.573,6.615,15.588,15.017,16.254V205.04c-16.392,7.415-31.307,17.821-44.068,30.871c-6.301,6.444-6.186,16.776,0.258,23.077
			c0.9,0.879,1.88,1.62,2.909,2.25c-9.029,12.211-15.922,26.091-20.122,41.087c-0.667-0.083-1.341-0.139-2.03-0.139
			C7.307,302.185,0,309.492,0,318.504v37.466c0,9.012,7.307,16.319,16.319,16.319c0.829,0,1.638-0.082,2.434-0.201
			c2.686,9.179,6.384,17.928,10.964,26.121c-4.229,6.34-3.549,14.985,2.046,20.579l26.492,26.492
			c3.187,3.187,7.363,4.78,11.539,4.78c3.156,0,6.311-0.914,9.041-2.734c8.45,4.724,17.486,8.515,26.98,11.221
			c1.512,7.449,8.096,13.056,15.991,13.056h37.465c7.895,0,14.48-5.607,15.991-13.057c9.492-2.705,18.53-6.497,26.978-11.22
			c2.729,1.82,5.884,2.734,9.041,2.734c4.177,0,8.353-1.593,11.539-4.78l26.492-26.492c5.595-5.595,6.275-14.239,2.046-20.579
			c2.766-4.948,5.216-10.094,7.309-15.419h82.836c0.005,44.436,36.158,80.587,80.596,80.587c44.442,0,80.597-36.155,80.597-80.597
			c0-0.528-0.029-1.048-0.04-1.572c5.519-2.618,9.344-8.223,9.344-14.737v-105.86C512,252.957,506.68,246.33,499.205,244.677z
			 M112.01,73.035h21.241c-0.214,1.054-0.327,2.145-0.327,3.264v115.839c-6.963,0.342-13.948,1.189-20.913,2.537V73.035z
			 M140.538,430.739c-51.961,0-94.232-42.273-94.232-94.233c0-51.961,42.271-94.233,94.232-94.233
			c51.961,0,94.233,42.273,94.233,94.233C234.771,388.467,192.497,430.739,140.538,430.739z M211.28,209.634v0.001
			c-0.578,0-1.149,0.033-1.711,0.09c-13.882-7.569-28.715-12.771-44.009-15.504V76.298c0-1.117-0.113-2.208-0.327-3.264h103.177
			l23.621,110.095l-33.83-24.308l4.402-6.31c5.156-7.391,3.343-17.565-4.048-22.72c-7.391-5.156-17.565-3.343-22.721,4.048
			l-27.274,39.1c-5.156,7.391-3.343,17.565,4.048,22.72c2.844,1.984,6.099,2.936,9.323,2.936c5.154,0,10.225-2.437,13.398-6.984
			l4.198-6.018l33.459,24.041H211.28z M285.557,350.152c1.101-13.482,0.318-27.051-2.365-40.509
			c-5.055-25.353-16.448-48.395-32.992-67.37h50.341v107.879H285.557z M422.098,430.739c-26.444,0-47.958-21.514-47.958-47.959
			s21.514-47.959,47.958-47.959c26.445,0,47.959,21.514,47.959,47.959S448.543,430.739,422.098,430.739z M422.098,302.184
			c-32.829,0-61.119,19.742-73.67,47.968h-15.25V241.386l146.183,32.329v52.415C464.744,311.356,444.474,302.184,422.098,302.184z"
        />
	</g>
</g>
<g>
	<g>
		<circle cx="422.095" cy="382.777" r="21.074"/>
	</g>
</g>
<g>
	<g>
		<path d="M140.538,288.506c-26.467,0-48.001,21.532-48.001,48c0,26.468,21.533,48.001,48.001,48.001c26.467,0,48-21.532,48-48.001
			C188.538,310.038,167.005,288.506,140.538,288.506z M140.538,351.869c-8.471,0-15.363-6.891-15.363-15.363
			c0-8.472,6.892-15.363,15.363-15.363c8.471,0,15.363,6.891,15.363,15.363C155.9,344.978,149.008,351.869,140.538,351.869z"/>
	</g>
</g>

</svg>
							</span>
                        <span class="menu__link-text">
								Farms
							</span>
                    </a>
                </li>

                <!-- End Farm -->
                <li class="menu__item">
                    <a class="menu__link" href="transactions.html">
							<span class="menu__link-icon">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="15.277px" height="12px" viewBox="18.361 16 15.277 12" style="enable-background:new 18.361 16 15.277 12;"
                                     xml:space="preserve">
							   <path d="M27.858,19.159H20.79l2.003-2.003c0.264-0.264,0.264-0.694,0-0.958
								   c-0.262-0.263-0.692-0.264-0.956-0.002l-3.334,3.303c-0.091,0.091-0.142,0.211-0.142,0.34c0,0.129,0.05,0.25,0.141,0.341l3.3,3.3
								   c0.264,0.264,0.694,0.265,0.959,0c0.262-0.263,0.264-0.691,0.003-0.955l-1.98-2.005h7.075c2.437,0,4.42,1.983,4.42,4.42v2.38
								   c0,0.375,0.305,0.68,0.68,0.68c0.375,0,0.68-0.305,0.68-0.68v-2.38C33.639,21.752,31.045,19.159,27.858,19.159z"/>
							   </svg>
							</span>
                        <span class="menu__link-text">
								Transactions
							</span>
                    </a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="buy.html">
							<span class="menu__link-icon">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="13.5px" height="18px" viewBox="0 0 13.5 18" style="enable-background:new 0 0 13.5 18;" xml:space="preserve">
							   <path d="M10.5,4.5V3.75C10.5,1.679,8.821,0,6.75,0S3,1.679,3,3.75V4.5H0v11.25C0,16.993,1.007,18,2.25,18h9
								   c1.243,0,2.25-1.007,2.25-2.25V4.5H10.5z M4.5,3.75c0-1.243,1.007-2.25,2.25-2.25S9,2.507,9,3.75V4.5H4.5V3.75z M12,15.75
								   c0,0.414-0.336,0.75-0.75,0.75h-9c-0.414,0-0.75-0.336-0.75-0.75V6H12V15.75z"/>
							   </svg>
							</span>
                        <span class="menu__link-text">
								Buy/Sale
							</span>
                    </a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="support.html">
							<span class="menu__link-icon">
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
                        <span class="menu__link-text">
								Support
							</span>
                    </a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="settings.html">
							<span class="menu__link-icon">
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
                        <span class="menu__link-text">
								Settings
							</span>
                    </a>
                </li>

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
                © 2021 Crypterium
            </div>

        </aside>

        <main class="main-content">
            <section class="wallets">
                <h2>Total Balance, $: 248 </h2>

                <div class="wallets__list">

                    <!-- USDT WALLET-->

                    <a href="wallet-usdt.html" class="wallet" style="background-color: #707bcc;">

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
										<span>Balance</span>
										<span>USDT</span>
									</span>
								</span>

								<span class="wallet__course">
									<span>248 USD</span>
									<span>248 USDT</span>
								</span>
							</span>

                        <span class="wallet__footer">
								<span>1 USDT - 1 US Dollar </span>
								<span>More</span>
							</span>

                    </a>

                    <!-- end USDT WALLET-->

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

            <section class="transactions">
                <h3>Active now</h3>

                <div class="transactions__list">
                    <div class="transaction">

                        <div class="transaction__header transaction__header--five-cols">
                            <div class="transaction__data">
                                June 26
                            </div>

                            <div class="transaction__currency">
                                <img   class="icon_tokin_sale" src="img/clover.png"  alt="">
                                Clover Sale Registration Now Open
                            </div>

                            <div class="transaction__info">

                                Registration Open Now · Sale Begins April 20 · US, Canada, China excluded
                            </div>

                            <div  class="buy_btn_blue learn_more_tokin_div" >
                                <a  style="color: #ffffff;" href="" class="">View</a>
                            </div>
                            <div  class="buy_btn_green learn_more_tokin_div " >
                                <a  href="token_sales.html" class="learn_more_tokin ">Order</a>

                            </div>
                        </div>
                    </div>

                    <div class="transaction">
                        <div class="transaction__header transaction__header--five-cols">
                            <div class="transaction__data">
                                June 26
                            </div>

                            <div class="transaction__currency">
                                <img   class="icon_tokin_sale" src="img/clover.png"  alt="">
                                Clover Sale Registration Now Open
                            </div>

                            <div class="transaction__info">

                                Registration Open Now · Sale Begins April 20 · US, Canada, China excluded
                            </div>

                            <div  class="buy_btn_blue learn_more_tokin_div" >
                                <a  href="" class="learn_more_tokin">View</a>

                            </div>
                            <div  class="buy_btn_green learn_more_tokin_div" >
                                <a  href="token_sales.html" class="learn_more_tokin">Order</a>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- <a href="" class="btn btn--blue">All transactions</a> -->
            </section>

            <!-- past activ -->

            <section class="transactions">
                <h3>Past sales</h3>

                <div class="transactions__list">
                    <div class="transaction">

                        <div class="transaction__header transaction__header--five-cols">
                            <div class="transaction__data">
                                June 26
                            </div>

                            <div class="transaction__currency">
                                <img   class="icon_tokin_sale" src="img/clover.png"  alt="">
                                Clover Sale Registration Now Open
                            </div>

                            <div class="transaction__info">

                                Registration Open Now · Sale Begins April 20 · US, Canada, China excluded
                            </div>

                            <div  class="buy_btn_blue learn_more_tokin_div" >
                                <a  style="color: #ffffff;" href="" class="">View</a>
                            </div>
                        </div>
                    </div>

                    <div class="transaction">
                        <div class="transaction__header transaction__header--five-cols">
                            <div class="transaction__data">
                                June 26
                            </div>

                            <div class="transaction__currency">
                                <img   class="icon_tokin_sale" src="img/clover.png"  alt="">
                                Clover Sale Registration Now Open
                            </div>

                            <div class="transaction__info">

                                Registration Open Now · Sale Begins April 20 · US, Canada, China excluded
                            </div>

                            <div  class="buy_btn_blue learn_more_tokin_div" >
                                <a  href="" class="learn_more_tokin">View</a>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- <a href="" class="btn btn--blue">All transactions</a> -->
            </section>


        </main>
    </div>

</div>

<div class="d-none">

    <form class="popup popup-add-wallet zoom-anim-dialog" id="add-wallet">
        <div class="popup__content">


            <img class="popup-add-wallet__img" src="img/popup-add-wallet-icon.png" alt="">
            <!-- <h3>Add new wallet</h3> -->
            <h3>Coming soon</h3>
            <!-- <div class="popup-add-wallet__row">

                <div class="input-wrap">
                    <input type="text"  placeholder="Name wallet">
                </div>

                <select class="custom-select">
                    <option value="Bitcoin">Bitcoin</option>
                    <option value="Ethereum">Ethereum</option>
                    <option value="Litecoin">Litecoin</option>
                </select>

            </div>

            <button class="btn btn--blue btn--full">Add new wallet</button> -->
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
