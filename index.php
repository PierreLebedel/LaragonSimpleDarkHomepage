<?php

/**
 * Pierre Lebedel
 * https://www.pierrelebedel.fr
 * https://github.com/PierreLebedel/LaragonSimpleDarkHomepage
 */

$laragon_title = $_SERVER['HTTP_HOST'];
$laragon_baseline = "Where everything starts.";
$laragon_extension = '.localhost';

?><!doctype html>
<head>
    <title><?php echo $laragon_title; ?> - <?php echo $laragon_baseline; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
        *, 
        *:before, 
        *:after{
            margin:0;
            padding:0;
            outline:none;
            box-sizing:border-box;
        }
        body {
            background-color: #212F45;
            font-family:Arial,Helvetica Neue,Helvetica,sans-serif;
            color: #fff;
            font-size:16px;
            line-height:1.2;
        }
        a{
            color:inherit;
            text-decoration:none;
        }
        a:hover{
            text-decoration:underline;
        }
        .muted{
            opacity:0.5;
        }

        .header{
            position:fixed;
            top:0; 
            bottom:0;
            left:0; 
            width:300px;
            padding:30px 0 30px 30px;
            background: #1B3A4B;
            border-right:2px solid #272640;
        }
        .header .header_logo{
            float:left;
            height:60px;
            width:60px;
        }
        .header .header_logo svg{
            display:block;
            height:100%;
            width:100%;
        }
        .header .header_text{
            margin-left:75px;
        }
        .header .header_title{
            font-size:24px;
            padding-top:10px;
            overflow:hidden;
            text-overflow:ellipsis;
            white-space: nowrap;
        }
        .header .header_baseline{
            display:block;
            font-size:14px;
            opacity:0.6;
            font-style: italic;
            overflow:hidden;
            text-overflow:ellipsis;
            white-space: nowrap;
            padding-top:2px;
        }
        .header .header_infos{
           position:absolute;
           right:0;
           bottom:30px;
           left:0;
           width:100%;
           text-align:center;
           font-size:13px;
           list-style-type: none;
        }
        .header .header_infos li{
            padding:1px 0;
        }

        .content{
            margin-left:300px;
            padding:64px 40px 30px;
        }
        .content ul{
            list-style-type: none;
        }
        .content ul li{
            display:block;
            padding:5px 0;
            overflow:hidden;
            text-overflow:ellipsis;
            white-space: nowrap;
        }

        @media (max-width:720px){
            .header{
                position:relative;
                top:auto;
                bottom:auto;
                left:auto;
                width:auto;
                padding:25px 0 30px 30px;
                border-right:none;
                border-bottom:2px solid #272640;
            }
            .header .header_title,
            .header .header_baseline{
                margin-right:125px;
            }
            .header .header_infos{
                top:50%;
                right:30px;
                bottom:auto;
                left:auto;
                width:auto;
                text-align:right;
                transform:translateY(-50%);
            }
            .content{
                margin-left:0;
                padding:30px;
            }
        }
        @media (max-width:400px){
            .header{
                padding:15px 20px 20px;
            }
            .header .header_title,
            .header .header_baseline{
                margin-right:0;
            }
            .header .header_infos{
                display:none;
            }
            .content{
                margin-left:0;
                padding:20px;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="header_logo">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                <g>
                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="12.0835" y1="1.7188" x2="12.0835" y2="22.5">
                        <stop offset="0.0181" style="stop-color:#3BB6FF" />
                        <stop offset="0.3023" style="stop-color:#39AFFF" />
                        <stop offset="0.5519" style="stop-color:#36A3FF" />
                        <stop offset="0.7173" style="stop-color:#359FFF" />
                        <stop offset="0.8316" style="stop-color:#3398FF" />
                        <stop offset="0.9639" style="stop-color:#3297FF" />
                    </linearGradient>
                    <path fill="url(#SVGID_1_)" d="M0.838,8.631c0.041-0.123,1.769-6.05,8.613-6.133c0,0,2.87-3.246,6.78,0 c0,0,1.061,0.872,1.643,2.682c0,0,5.134,0.779,5.965,5.022c0,0,1.732,6.987-4.133,11.896c0,0-0.826,0.661-1.376,0.968 c0,0-1.22,0.002-1.472,0c-0.537-0.004-0.876,0-1.364,0c0,0-0.75-0.268-0.781-1.125c0,0-0.063-2.98-0.046-3.495 c0,0,0.015-0.482-0.687-0.452c0,0-0.67-0.077-0.765,0.499c0,0-0.016,3.074-0.031,3.619c0,0-0.047,0.907-1.061,0.951 c0,0-3.635,0.11-4.118-0.062c0,0-0.842-0.156-0.905-0.952c0,0-0.687-4.056-0.811-5.318c0,0-2.309-1.28-2.777-1.623 c0,0,0.156,4.133,1.591,5.881c0,0,0.25,0.219-0.25,0.53c0,0-0.187,0.156-0.375,0.064c0,0-6.155-3.438-3.888-12.213" />
                    <path fill="#006699" d="M7.728,14.285c0,0,5.37,3.061,8.619-1.853c0,0,2.631-3.436,1.583-7.101c0,0,1.845,3.08-1.725,7.859 C16.206,13.191,13.178,17.451,7.728,14.285z" />
                    <path fill="#CEE6FF" d="M5.603,13.563c0,0,0.383,1.773-0.795,2.331c0,0-2.68-1.104-2.409-3.143c0,0,0.084-0.509,0.583-0.197 c0,0,1.186,0.645,2.122,0.831C5.103,13.385,5.579,13.429,5.603,13.563z" />
                    <path fill="#006699" d="M4.859,10.566c0,0,0.404-1.727,1.929-1.618c0,0,1.296,0.035,1.342,1.817 C8.13,10.766,7.109,8.1,4.859,10.566z" />
                </g>
            </svg>
        </div>
        <div class="header_text">
            <h1 class="header_title"><?php echo $laragon_title; ?></h1>
            <span class="header_baseline"><?php echo $laragon_baseline; ?></span>
        </div>
        <ul class="header_infos muted">
            <li>PHP <?php echo PHP_VERSION; ?></li>
            
            <?php if(preg_match('|Apache\\/(\\d+)\\.(\\d+)\\.(\\d+)|', apache_get_version(), $apachever)): ?>
                <li>Apache <?php echo str_replace("Apache/", "", $apachever[0]); ?></li>
            <?php endif; ?>

            <?php if($mysqlclient=mysqli_get_client_info()): ?>
            <li><?php echo ucfirst($mysqlclient); ?></li>
            <?php endif; ?>
        </ul>
    </header>

    <div class="content">
        <ul>
        <?php foreach(glob('./*', GLOB_ONLYDIR) as $directory): 
            if(in_array($directory, array('.','..')) || basename($directory) == 'localhost') continue;
            
            $https = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 'https' : 'http';
            $domain = basename($directory); ?>

            <li>
                <a href="<?php echo $https; ?>://<?php echo $domain.$laragon_extension; ?>/" class="project_link">
                    <?php echo $domain; ?><span class="muted"><?php echo $laragon_extension; ?></span>
                </a>
            </li>
            
        <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>