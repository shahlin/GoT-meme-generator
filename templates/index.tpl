<html>
    <head>
        <title>Meeemeess</title>
        <style>

            #post_container {
                width: 90%;
                height: 90%;

                position:absolute;
                left:0; right:0;
                top:0; bottom:0;
                /* margin-top: 10px;
                margin-left: 10px; */

                /*this to solve "the content will not be cut when the window is smaller than the content": */
                max-width:100%;
                max-height:100%;

                margin: 0 auto;
            }

            #post_img {
                max-width:100%;
                max-height:100%;
            }

            #post_title {
                text-align: center;
                margin-top: 10px;
                margin-bottom: 20px;
            }

            .subtitle_text {
                font-size: 14px;
                color: #fb3b3b;
            }

            .post_content {
                display: block;
                margin: 0 auto;
                background-color: #f5f5f5;
                padding: 10px;
                color: #191919;
                border-radius: 7px;
            }
        </style>
    </head>
    <body>
        <div id="post_container">
            <h2 class="post_content" id="post_title">
                {$post_title}<br><br>
                <span class="subtitle_text">Refresh for another one</span>
            </h2>
            <img src="{$post_url}" alt="Broken meme content" class="post_content" id="post_img">
        </div>
    </body>
</html>