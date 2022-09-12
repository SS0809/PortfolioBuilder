   <style>
        .loading-gif {
            max-width: 50px;
        }

        .pre-loader {
            position: fixed;
            z-index: 100; /** make sure this is the highest value compared to all other divs **/
            top: 0;
            left: 0;
            background: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .pre-loader.hidden {
            animation: fadeOut 5s; /** change to 1s */
            animation-fill-mode: forwards;
        }

        @keyframes fadeOut {
            100% {
                opacity: 0;
                visibility: hidden;
            }
        }
    </style>
</head>
<body>
<div class='pre-loader'>
    <img class='loading-gif' alt='loading' src="https://c.tenor.com/UnFx-k_lSckAAAAM/amalie-steiness.gif"/>
</div>

<!-- js to hide preloader loading is done -->
<script type='text/javascript'>
    window.addEventListener('load', function () {
        document.querySelector('.pre-loader').className += ' hidden';
    });
</script>
