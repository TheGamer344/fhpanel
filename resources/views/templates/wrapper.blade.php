@include('blueprint.dashboard.dashboard')
@yield('blueprint.lib')

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ config('app.name', 'Pterodactyl') }}</title>

        @yield('head')

        @section('meta')
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="robots" content="noindex">
            <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
            <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
            <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
            <link rel="manifest" href="/favicons/manifest.json">
            <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#bc6e3c">
            <link rel="shortcut icon" href="/favicons/favicon.ico">
            <meta name="msapplication-config" content="/favicons/browserconfig.xml">
            <meta name="theme-color" content="#0e4688">
        @show

        @section('user-data')
            @if(!is_null(Auth::user()))
                <script>
                    window.PterodactylUser = {!! json_encode(Auth::user()->toVueObject()) !!};
                </script>
            @else
                <script>
                    window.PterodactylUser = null;
                </script>
            @endif
            @if(!empty($siteConfiguration))
                <script>
                    window.SiteConfiguration = {!! json_encode($siteConfiguration) !!};
                </script>
            @endif
        @show

        <style>
            @import url('//fonts.googleapis.com/css?family=Rubik:300,400,500&display=swap');
            @import url('//fonts.googleapis.com/css?family=IBM+Plex+Mono|IBM+Plex+Sans:500&display=swap');

            /* Ad Styles */
            .ad-container {
                text-align: center;
                margin-bottom: 20px;
            }

            .left-ad, .right-ad {
                width: 160px;
                height: 600px;
                margin: 0 20px;
            }

            .top-ad {
                display: block;
                width: 100%;
                height: 90px;
                margin-bottom: 20px;
            }

            .bottom-ad {
                display: block;
                width: 100%;
                height: 90px;
            }

            .content-container {
                display: flex;
                flex-wrap: wrap;
            }

            .main-content {
                flex-grow: 1;
                padding: 20px;
            }

            .disable-page {
                pointer-events: none;
                opacity: 0.6;
            }

            /* AdBlock Message */
            .adblock-message {
                display: none;
                text-align: center;
                padding: 20px;
                background-color: #f8d7da;
                color: #721c24;
                border: 1px solid #f5c6cb;
                margin: 20px;
                font-size: 18px;
            }

            .reload-message {
                color: #155724;
                background-color: #d4edda;
                border-color: #c3e6cb;
                padding: 10px;
                margin-top: 10px;
            }

            /* GIPHY Embed Optimization */
            .giphy-container {
                width: 100%;
                max-width: 100%;
                padding-bottom: 57%;
                position: relative;
                margin-top: 20px;
            }

            .giphy-embed {
                position: absolute;
                width: 100%;
                height: 100%;
            }

            /* Mobile Optimization for Ads */
            @media (max-width: 768px) {
                .left-ad, .right-ad {
                    display: none;
                }

                .content-container {
                    flex-direction: column;
                    align-items: center;
                }
            }
        </style>

        @yield('assets')

        @include('layouts.scripts')

        <!-- AdSense Async Script -->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3308723074113679" crossorigin="anonymous"></script>
    </head>
    <body class="{{ $css['body'] ?? 'bg-neutral-50' }}">

        @if(Auth::check() && Auth::user()->freeusers > 0)
            <!-- Top Ad -->
            <div class="ad-container" id="top-ad-container">
                <ins class="adsbygoogle top-ad"
                     id="ad-element"
                     style="display: block;"
                     data-ad-client="ca-pub-3308723074113679"
                     data-ad-slot="2088652533"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        @endif

        <div class="content-container">
            @if(Auth::check() && Auth::user()->freeusers > 0)
                <!-- Left Ad -->
                <div class="left-ad" id="left-ad-container">
                    <ins class="adsbygoogle"
                         style="display: block;"
                         data-ad-client="ca-pub-3308723074113679"
                         data-ad-slot="8270981146"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            @endif

            <!-- Main Content -->
            <div class="main-content" id="main-content">
                @section('content')
                    @yield('above-container')
                    @yield('container')
                    @yield('below-container')

                    @yield('blueprint.wrappers')
                @show
            </div>

            @if(Auth::check() && Auth::user()->freeusers > 0)
                <!-- Right Ad -->
                <div class="right-ad" id="right-ad-container">
                    <ins class="adsbygoogle"
                         style="display: block;"
                         data-ad-client="ca-pub-3308723074113679"
                         data-ad-slot="1875332871"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            @endif
        </div>

        @if(Auth::check() && Auth::user()->freeusers > 0)
            <!-- Bottom Ad -->
            <div class="ad-container" id="bottom-ad-container">
                <ins class="adsbygoogle bottom-ad"
                     style="display: block;"
                     data-ad-client="ca-pub-3308723074113679"
                     data-ad-slot="5864246018"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        @endif

        <!-- AdBlock Detection Message -->
        <div class="adblock-message" id="adblock-message">
            <h2>Ad Blocker Detected</h2>
            <p>Please disable your ad blocker to continue using the website. Ads help us keep our services free for everyone.</p>
            <p class="reload-message">You will need to reload the page after disabling your ad blocker.</p>

            <!-- GIPHY Embed -->
            <div class="giphy-container">
                <iframe src="https://giphy.com/embed/h30Uk86LypXpe" class="giphy-embed" allowFullScreen></iframe>
            </div>
            <p><a href="https://giphy.com/gifs/cat-meme-pictures-h30Uk86LypXpe">via GIPHY</a></p>
        </div>

        <!-- AdBlock Detection Script using Ad Element Visibility Check -->
        <script>
            function reloadAds(adContainerId, adSlot) {
                try {
                    var adContainer = document.getElementById(adContainerId);

                    if (adContainer) {
                        // Remove the existing ad container
                        adContainer.innerHTML = '';

                        // Recreate the ad inside the container
                        var ad = document.createElement('ins');
                        ad.className = 'adsbygoogle';
                        ad.style.display = 'block';
                        ad.setAttribute('data-ad-client', 'ca-pub-3308723074113679');
                        ad.setAttribute('data-ad-slot', adSlot);
                        ad.setAttribute('data-ad-format', 'auto');
                        ad.setAttribute('data-full-width-responsive', 'true');
                        adContainer.appendChild(ad);
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    }
                } catch (error) {
                    console.log('Failed to reload ad:', error);
                }
            }

            function getRandomDelay() {
                return Math.floor(Math.random() * (10000 - 5000 + 1)) + 5000; // Random delay between 5-10 seconds
            }

            document.addEventListener('DOMContentLoaded', function() {
                var adElement = document.getElementById('ad-element');

                // Check if the ad element is hidden (blocked by ad blocker)
                if (adElement && window.getComputedStyle(adElement).display === 'none') {
                    console.log('Ad blocker detected.');
                    document.getElementById('main-content').style.display = 'none';
                    document.getElementById('adblock-message').style.display = 'block';
                } else {
                    console.log('No ad blocker detected.');
                }

                // Randomly reload ads every 5-10 seconds for different ad slots
                setInterval(() => reloadAds('top-ad-container', '2088652533'), getRandomDelay());
                setInterval(() => reloadAds('left-ad-container', '8270981146'), getRandomDelay());
                setInterval(() => reloadAds('right-ad-container', '1875332871'), getRandomDelay());
                setInterval(() => reloadAds('bottom-ad-container', '5864246018'), getRandomDelay());
            });
        </script>

        @section('scripts')
            {!! $asset->js('main.js') !!}
        @show
    </body>
</html>
