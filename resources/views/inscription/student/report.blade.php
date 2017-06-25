
<html>
<head>
    <title></title>

    <style>
        /*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 *//*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}abbr[title]:after{content:" (" attr(title) ")"}a[href^="javascript:"]:after,a[href^="#"]:after{content:""}blockquote,pre{border:1px solid #999;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}img{max-width:100%!important}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}.navbar{display:none}.btn>.caret,.dropup>.btn>.caret{border-top-color:#000!important}.label{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #ddd!important}}@font-face{font-family:'Glyphicons Halflings';src:url(../fonts/glyphicons-halflings-regular.eot);src:url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(../fonts/glyphicons-halflings-regular.woff2) format('woff2'),url(../fonts/glyphicons-halflings-regular.woff) format('woff'),url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'),url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.glyphicon-asterisk:before{content:"\002a"}.glyphicon-plus:before{content:"\002b"}.glyphicon-eur:before,.glyphicon-euro:before{content:"\20ac"}.glyphicon-minus:before{content:"\2212"}.glyphicon-cloud:before{content:"\2601"}.glyphicon-envelope:before{content:"\2709"}.glyphicon-pencil:before{content:"\270f"}.glyphicon-glass:before{content:"\e001"}.glyphicon-music:before{content:"\e002"}.glyphicon-search:before{content:"\e003"}.glyphicon-heart:before{content:"\e005"}.glyphicon-star:before{content:"\e006"}.glyphicon-star-empty:before{content:"\e007"}.glyphicon-user:before{content:"\e008"}.glyphicon-film:before{content:"\e009"}.glyphicon-th-large:before{content:"\e010"}.glyphicon-th:before{content:"\e011"}.glyphicon-th-list:before{content:"\e012"}.glyphicon-ok:before{content:"\e013"}.glyphicon-remove:before{content:"\e014"}.glyphicon-zoom-in:before{content:"\e015"}.glyphicon-zoom-out:before{content:"\e016"}.glyphicon-off:before{content:"\e017"}.glyphicon-signal:before{content:"\e018"}.glyphicon-cog:before{content:"\e019"}.glyphicon-trash:before{content:"\e020"}.glyphicon-home:before{content:"\e021"}.glyphicon-file:before{content:"\e022"}.glyphicon-time:before{content:"\e023"}.glyphicon-road:before{content:"\e024"}.glyphicon-download-alt:before{content:"\e025"}.glyphicon-download:before{content:"\e026"}.glyphicon-upload:before{content:"\e027"}.glyphicon-inbox:before{content:"\e028"}.glyphicon-play-circle:before{content:"\e029"}.glyphicon-repeat:before{content:"\e030"}.glyphicon-refresh:before{content:"\e031"}.glyphicon-list-alt:before{content:"\e032"}.glyphicon-lock:before{content:"\e033"}.glyphicon-flag:before{content:"\e034"}.glyphicon-headphones:before{content:"\e035"}.glyphicon-volume-off:before{content:"\e036"}.glyphicon-volume-down:before{content:"\e037"}.glyphicon-volume-up:before{content:"\e038"}.glyphicon-qrcode:before{content:"\e039"}.glyphicon-barcode:before{content:"\e040"}.glyphicon-tag:before{content:"\e041"}.glyphicon-tags:before{content:"\e042"}.glyphicon-book:before{content:"\e043"}.glyphicon-bookmark:before{content:"\e044"}.glyphicon-print:before{content:"\e045"}.glyphicon-camera:before{content:"\e046"}.glyphicon-font:before{content:"\e047"}.glyphicon-bold:before{content:"\e048"}.glyphicon-italic:before{content:"\e049"}.glyphicon-text-height:before{content:"\e050"}.glyphicon-text-width:before{content:"\e051"}.glyphicon-align-left:before{content:"\e052"}.glyphicon-align-center:before{content:"\e053"}.glyphicon-align-right:before{content:"\e054"}.glyphicon-align-justify:before{content:"\e055"}.glyphicon-list:before{content:"\e056"}.glyphicon-indent-left:before{content:"\e057"}.glyphicon-indent-right:before{content:"\e058"}.glyphicon-facetime-video:before{content:"\e059"}.glyphicon-picture:before{content:"\e060"}.glyphicon-map-marker:before{content:"\e062"}.glyphicon-adjust:before{content:"\e063"}.glyphicon-tint:before{content:"\e064"}.glyphicon-edit:before{content:"\e065"}.glyphicon-share:before{content:"\e066"}.glyphicon-check:before{content:"\e067"}.glyphicon-move:before{content:"\e068"}.glyphicon-step-backward:before{content:"\e069"}.glyphicon-fast-backward:before{content:"\e070"}.glyphicon-backward:before{content:"\e071"}.glyphicon-play:before{content:"\e072"}.glyphicon-pause:before{content:"\e073"}.glyphicon-stop:before{content:"\e074"}.glyphicon-forward:before{content:"\e075"}.glyphicon-fast-forward:before{content:"\e076"}.glyphicon-step-forward:before{content:"\e077"}.glyphicon-eject:before{content:"\e078"}.glyphicon-chevron-left:before{content:"\e079"}.glyphicon-chevron-right:before{content:"\e080"}.glyphicon-plus-sign:before{content:"\e081"}.glyphicon-minus-sign:before{content:"\e082"}.glyphicon-remove-sign:before{content:"\e083"}.glyphicon-ok-sign:before{content:"\e084"}.glyphicon-question-sign:before{content:"\e085"}.glyphicon-info-sign:before{content:"\e086"}.glyphicon-screenshot:before{content:"\e087"}.glyphicon-remove-circle:before{content:"\e088"}.glyphicon-ok-circle:before{content:"\e089"}.glyphicon-ban-circle:before{content:"\e090"}.glyphicon-arrow-left:before{content:"\e091"}.glyphicon-arrow-right:before{content:"\e092"}.glyphicon-arrow-up:before{content:"\e093"}.glyphicon-arrow-down:before{content:"\e094"}.glyphicon-share-alt:before{content:"\e095"}.glyphicon-resize-full:before{content:"\e096"}.glyphicon-resize-small:before{content:"\e097"}.glyphicon-exclamation-sign:before{content:"\e101"}.glyphicon-gift:before{content:"\e102"}.glyphicon-leaf:before{content:"\e103"}.glyphicon-fire:before{content:"\e104"}.glyphicon-eye-open:before{content:"\e105"}.glyphicon-eye-close:before{content:"\e106"}.glyphicon-warning-sign:before{content:"\e107"}.glyphicon-plane:before{content:"\e108"}.glyphicon-calendar:before{content:"\e109"}.glyphicon-random:before{content:"\e110"}.glyphicon-comment:before{content:"\e111"}.glyphicon-magnet:before{content:"\e112"}.glyphicon-chevron-up:before{content:"\e113"}.glyphicon-chevron-down:before{content:"\e114"}.glyphicon-retweet:before{content:"\e115"}.glyphicon-shopping-cart:before{content:"\e116"}.glyphicon-folder-close:before{content:"\e117"}.glyphicon-folder-open:before{content:"\e118"}.glyphicon-resize-vertical:before{content:"\e119"}.glyphicon-resize-horizontal:before{content:"\e120"}.glyphicon-hdd:before{content:"\e121"}.glyphicon-bullhorn:before{content:"\e122"}.glyphicon-bell:before{content:"\e123"}.glyphicon-certificate:before{content:"\e124"}.glyphicon-thumbs-up:before{content:"\e125"}.glyphicon-thumbs-down:before{content:"\e126"}.glyphicon-hand-right:before{content:"\e127"}.glyphicon-hand-left:before{content:"\e128"}.glyphicon-hand-up:before{content:"\e129"}.glyphicon-hand-down:before{content:"\e130"}.glyphicon-circle-arrow-right:before{content:"\e131"}.glyphicon-circle-arrow-left:before{content:"\e132"}.glyphicon-circle-arrow-up:before{content:"\e133"}.glyphicon-circle-arrow-down:before{content:"\e134"}.glyphicon-globe:before{content:"\e135"}.glyphicon-wrench:before{content:"\e136"}.glyphicon-tasks:before{content:"\e137"}.glyphicon-filter:before{content:"\e138"}.glyphicon-briefcase:before{content:"\e139"}.glyphicon-fullscreen:before{content:"\e140"}.glyphicon-dashboard:before{content:"\e141"}.glyphicon-paperclip:before{content:"\e142"}.glyphicon-heart-empty:before{content:"\e143"}.glyphicon-link:before{content:"\e144"}.glyphicon-phone:before{content:"\e145"}.glyphicon-pushpin:before{content:"\e146"}.glyphicon-usd:before{content:"\e148"}.glyphicon-gbp:before{content:"\e149"}.glyphicon-sort:before{content:"\e150"}.glyphicon-sort-by-alphabet:before{content:"\e151"}.glyphicon-sort-by-alphabet-alt:before{content:"\e152"}.glyphicon-sort-by-order:before{content:"\e153"}.glyphicon-sort-by-order-alt:before{content:"\e154"}.glyphicon-sort-by-attributes:before{content:"\e155"}.glyphicon-sort-by-attributes-alt:before{content:"\e156"}.glyphicon-unchecked:before{content:"\e157"}.glyphicon-expand:before{content:"\e158"}.glyphicon-collapse-down:before{content:"\e159"}.glyphicon-collapse-up:before{content:"\e160"}.glyphicon-log-in:before{content:"\e161"}.glyphicon-flash:before{content:"\e162"}.glyphicon-log-out:before{content:"\e163"}.glyphicon-new-window:before{content:"\e164"}.glyphicon-record:before{content:"\e165"}.glyphicon-save:before{content:"\e166"}.glyphicon-open:before{content:"\e167"}.glyphicon-saved:before{content:"\e168"}.glyphicon-import:before{content:"\e169"}.glyphicon-export:before{content:"\e170"}.glyphicon-send:before{content:"\e171"}.glyphicon-floppy-disk:before{content:"\e172"}.glyphicon-floppy-saved:before{content:"\e173"}.glyphicon-floppy-remove:before{content:"\e174"}.glyphicon-floppy-save:before{content:"\e175"}.glyphicon-floppy-open:before{content:"\e176"}.glyphicon-credit-card:before{content:"\e177"}.glyphicon-transfer:before{content:"\e178"}.glyphicon-cutlery:before{content:"\e179"}.glyphicon-header:before{content:"\e180"}.glyphicon-compressed:before{content:"\e181"}.glyphicon-earphone:before{content:"\e182"}.glyphicon-phone-alt:before{content:"\e183"}.glyphicon-tower:before{content:"\e184"}.glyphicon-stats:before{content:"\e185"}.glyphicon-sd-video:before{content:"\e186"}.glyphicon-hd-video:before{content:"\e187"}.glyphicon-subtitles:before{content:"\e188"}.glyphicon-sound-stereo:before{content:"\e189"}.glyphicon-sound-dolby:before{content:"\e190"}.glyphicon-sound-5-1:before{content:"\e191"}.glyphicon-sound-6-1:before{content:"\e192"}.glyphicon-sound-7-1:before{content:"\e193"}.glyphicon-copyright-mark:before{content:"\e194"}.glyphicon-registration-mark:before{content:"\e195"}.glyphicon-cloud-download:before{content:"\e197"}.glyphicon-cloud-upload:before{content:"\e198"}.glyphicon-tree-conifer:before{content:"\e199"}.glyphicon-tree-deciduous:before{content:"\e200"}.glyphicon-cd:before{content:"\e201"}.glyphicon-save-file:before{content:"\e202"}.glyphicon-open-file:before{content:"\e203"}.glyphicon-level-up:before{content:"\e204"}.glyphicon-copy:before{content:"\e205"}.glyphicon-paste:before{content:"\e206"}.glyphicon-alert:before{content:"\e209"}.glyphicon-equalizer:before{content:"\e210"}.glyphicon-king:before{content:"\e211"}.glyphicon-queen:before{content:"\e212"}.glyphicon-pawn:before{content:"\e213"}.glyphicon-bishop:before{content:"\e214"}.glyphicon-knight:before{content:"\e215"}.glyphicon-baby-formula:before{content:"\e216"}.glyphicon-tent:before{content:"\26fa"}.glyphicon-blackboard:before{content:"\e218"}.glyphicon-bed:before{content:"\e219"}.glyphicon-apple:before{content:"\f8ff"}.glyphicon-erase:before{content:"\e221"}.glyphicon-hourglass:before{content:"\231b"}.glyphicon-lamp:before{content:"\e223"}.glyphicon-duplicate:before{content:"\e224"}.glyphicon-piggy-bank:before{content:"\e225"}.glyphicon-scissors:before{content:"\e226"}.glyphicon-bitcoin:before{content:"\e227"}.glyphicon-btc:before{content:"\e227"}.glyphicon-xbt:before{content:"\e227"}.glyphicon-yen:before{content:"\00a5"}.glyphicon-jpy:before{content:"\00a5"}.glyphicon-ruble:before{content:"\20bd"}.glyphicon-rub:before{content:"\20bd"}.glyphicon-scale:before{content:"\e230"}.glyphicon-ice-lolly:before{content:"\e231"}.glyphicon-ice-lolly-tasted:before{content:"\e232"}.glyphicon-education:before{content:"\e233"}.glyphicon-option-horizontal:before{content:"\e234"}.glyphicon-option-vertical:before{content:"\e235"}.glyphicon-menu-hamburger:before{content:"\e236"}.glyphicon-modal-window:before{content:"\e237"}.glyphicon-oil:before{content:"\e238"}.glyphicon-grain:before{content:"\e239"}.glyphicon-sunglasses:before{content:"\e240"}.glyphicon-text-size:before{content:"\e241"}.glyphicon-text-color:before{content:"\e242"}.glyphicon-text-background:before{content:"\e243"}.glyphicon-object-align-top:before{content:"\e244"}.glyphicon-object-align-bottom:before{content:"\e245"}.glyphicon-object-align-horizontal:before{content:"\e246"}.glyphicon-object-align-left:before{content:"\e247"}.glyphicon-object-align-vertical:before{content:"\e248"}.glyphicon-object-align-right:before{content:"\e249"}.glyphicon-triangle-right:before{content:"\e250"}.glyphicon-triangle-left:before{content:"\e251"}.glyphicon-triangle-bottom:before{content:"\e252"}.glyphicon-triangle-top:before{content:"\e253"}.glyphicon-console:before{content:"\e254"}.glyphicon-superscript:before{content:"\e255"}.glyphicon-subscript:before{content:"\e256"}.glyphicon-menu-left:before{content:"\e257"}.glyphicon-menu-right:before{content:"\e258"}.glyphicon-menu-down:before{content:"\e259"}.glyphicon-menu-up:before{content:"\e260"}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}button,input,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:focus,a:hover{color:#23527c;text-decoration:underline}a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.carousel-inner>.item>a>img,.carousel-inner>.item>img,.img-responsive,.thumbnail a>img,.thumbnail>img{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{display:inline-block;max-width:100%;height:auto;padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}[role=button]{cursor:pointer}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-weight:400;line-height:1;color:#777}.h1,.h2,.h3,h1,h2,h3{margin-top:20px;margin-bottom:10px}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small{font-size:65%}.h4,.h5,.h6,h4,h5,h6{margin-top:10px;margin-bottom:10px}.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-size:75%}.h1,h1{font-size:36px}.h2,h2{font-size:30px}.h3,h3{font-size:24px}.h4,h4{font-size:18px}.h5,h5{font-size:14px}.h6,h6{font-size:12px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}@media (min-width:768px){.lead{font-size:21px}}.small,small{font-size:85%}.mark,mark{padding:.2em;background-color:#fcf8e3}.text-left{text-align:left}.text-right{text-align:right}.text-center{text-align:center}.text-justify{text-align:justify}.text-nowrap{white-space:nowrap}.text-lowercase{text-transform:lowercase}.text-uppercase{text-transform:uppercase}.text-capitalize{text-transform:capitalize}.text-muted{color:#777}.text-primary{color:#337ab7}a.text-primary:focus,a.text-primary:hover{color:#286090}.text-success{color:#3c763d}a.text-success:focus,a.text-success:hover{color:#2b542c}.text-info{color:#31708f}a.text-info:focus,a.text-info:hover{color:#245269}.text-warning{color:#8a6d3b}a.text-warning:focus,a.text-warning:hover{color:#66512c}.text-danger{color:#a94442}a.text-danger:focus,a.text-danger:hover{color:#843534}.bg-primary{color:#fff;background-color:#337ab7}a.bg-primary:focus,a.bg-primary:hover{background-color:#286090}.bg-success{background-color:#dff0d8}a.bg-success:focus,a.bg-success:hover{background-color:#c1e2b3}.bg-info{background-color:#d9edf7}a.bg-info:focus,a.bg-info:hover{background-color:#afd9ee}.bg-warning{background-color:#fcf8e3}a.bg-warning:focus,a.bg-warning:hover{background-color:#f7ecb5}.bg-danger{background-color:#f2dede}a.bg-danger:focus,a.bg-danger:hover{background-color:#e4b9b9}.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}ol,ul{margin-top:0;margin-bottom:10px}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;margin-left:-5px;list-style:none}.list-inline>li{display:inline-block;padding-right:5px;padding-left:5px}dl{margin-top:0;margin-bottom:20px}dd,dt{line-height:1.42857143}dt{font-weight:700}dd{margin-left:0}@media (min-width:768px){.dl-horizontal dt{float:left;width:160px;overflow:hidden;clear:left;text-align:right;text-overflow:ellipsis;white-space:nowrap}.dl-horizontal dd{margin-left:180px}}abbr[data-original-title],abbr[title]{cursor:help;border-bottom:1px dotted #777}.initialism{font-size:90%;text-transform:uppercase}blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid #eee}blockquote ol:last-child,blockquote p:last-child,blockquote ul:last-child{margin-bottom:0}blockquote .small,blockquote footer,blockquote small{display:block;font-size:80%;line-height:1.42857143;color:#777}blockquote .small:before,blockquote footer:before,blockquote small:before{content:'\2014 \00A0'}.blockquote-reverse,blockquote.pull-right{padding-right:15px;padding-left:0;text-align:right;border-right:5px solid #eee;border-left:0}.blockquote-reverse .small:before,.blockquote-reverse footer:before,.blockquote-reverse small:before,blockquote.pull-right .small:before,blockquote.pull-right footer:before,blockquote.pull-right small:before{content:''}.blockquote-reverse .small:after,.blockquote-reverse footer:after,.blockquote-reverse small:after,blockquote.pull-right .small:after,blockquote.pull-right footer:after,blockquote.pull-right small:after{content:'\00A0 \2014'}address{margin-bottom:20px;font-style:normal;line-height:1.42857143}code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,"Courier New",monospace}code{padding:2px 4px;font-size:90%;color:#c7254e;background-color:#f9f2f4;border-radius:4px}kbd{padding:2px 4px;font-size:90%;color:#fff;background-color:#333;border-radius:3px;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.25);box-shadow:inset 0 -1px 0 rgba(0,0,0,.25)}kbd kbd{padding:0;font-size:100%;font-weight:700;-webkit-box-shadow:none;box-shadow:none}pre{display:block;padding:9.5px;margin:0 0 10px;font-size:13px;line-height:1.42857143;color:#333;word-break:break-all;word-wrap:break-word;background-color:#f5f5f5;border:1px solid #ccc;border-radius:4px}pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;background-color:transparent;border-radius:0}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{margin-right:-15px;margin-left:-15px}.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}table{background-color:transparent}caption{padding-top:8px;padding-bottom:8px;color:#777;text-align:left}th{text-align:left}.table{width:100%;max-width:100%;margin-bottom:20px}.table>tbody>tr>td,.table>tbody>tr>th,.table>tfoot>tr>td,.table>tfoot>tr>th,.table>thead>tr>td,.table>thead>tr>th{padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #ddd}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}.table>caption+thead>tr:first-child>td,.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>td,.table>thead:first-child>tr:first-child>th{border-top:0}.table>tbody+tbody{border-top:2px solid #ddd}.table .table{background-color:#fff}.table-condensed>tbody>tr>td,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>td,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>thead>tr>th{padding:5px}.table-bordered{border:1px solid #ddd}.table-bordered>tbody>tr>td,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border:1px solid #ddd}.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border-bottom-width:2px}.table-striped>tbody>tr:nth-of-type(odd){background-color:#f9f9f9}.table-hover>tbody>tr:hover{background-color:#f5f5f5}table col[class*=col-]{position:static;display:table-column;float:none}table td[class*=col-],table th[class*=col-]{position:static;display:table-cell;float:none}.table>tbody>tr.active>td,.table>tbody>tr.active>th,.table>tbody>tr>td.active,.table>tbody>tr>th.active,.table>tfoot>tr.active>td,.table>tfoot>tr.active>th,.table>tfoot>tr>td.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>thead>tr.active>th,.table>thead>tr>td.active,.table>thead>tr>th.active{background-color:#f5f5f5}.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr.active:hover>th,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover{background-color:#e8e8e8}.table>tbody>tr.success>td,.table>tbody>tr.success>th,.table>tbody>tr>td.success,.table>tbody>tr>th.success,.table>tfoot>tr.success>td,.table>tfoot>tr.success>th,.table>tfoot>tr>td.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>thead>tr.success>th,.table>thead>tr>td.success,.table>thead>tr>th.success{background-color:#dff0d8}.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr.success:hover>th,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover{background-color:#d0e9c6}.table>tbody>tr.info>td,.table>tbody>tr.info>th,.table>tbody>tr>td.info,.table>tbody>tr>th.info,.table>tfoot>tr.info>td,.table>tfoot>tr.info>th,.table>tfoot>tr>td.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>thead>tr.info>th,.table>thead>tr>td.info,.table>thead>tr>th.info{background-color:#d9edf7}.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr.info:hover>th,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover{background-color:#c4e3f3}.table>tbody>tr.warning>td,.table>tbody>tr.warning>th,.table>tbody>tr>td.warning,.table>tbody>tr>th.warning,.table>tfoot>tr.warning>td,.table>tfoot>tr.warning>th,.table>tfoot>tr>td.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>thead>tr.warning>th,.table>thead>tr>td.warning,.table>thead>tr>th.warning{background-color:#fcf8e3}.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr.warning:hover>th,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover{background-color:#faf2cc}.table>tbody>tr.danger>td,.table>tbody>tr.danger>th,.table>tbody>tr>td.danger,.table>tbody>tr>th.danger,.table>tfoot>tr.danger>td,.table>tfoot>tr.danger>th,.table>tfoot>tr>td.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>thead>tr.danger>th,.table>thead>tr>td.danger,.table>thead>tr>th.danger{background-color:#f2dede}.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr.danger:hover>th,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover{background-color:#ebcccc}.table-responsive{min-height:.01%;overflow-x:auto}@media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;padding:0;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333;border:0;border-bottom:1px solid #e5e5e5}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}input[type=search]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input[type=checkbox],input[type=radio]{margin:4px 0 0;margin-top:1px\9;line-height:normal}input[type=file]{display:block}input[type=range]{display:block;width:100%}select[multiple],select[size]{height:auto}input[type=file]:focus,input[type=checkbox]:focus,input[type=radio]:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}output{display:block;padding-top:7px;font-size:14px;line-height:1.42857143;color:#555}.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control::-ms-expand{background-color:transparent;border:0}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{background-color:#eee;opacity:1}.form-control[disabled],fieldset[disabled] .form-control{cursor:not-allowed}textarea.form-control{height:auto}input[type=search]{-webkit-appearance:none}@media screen and (-webkit-min-device-pixel-ratio:0){input[type=date].form-control,input[type=time].form-control,input[type=datetime-local].form-control,input[type=month].form-control{line-height:34px}.input-group-sm input[type=date],.input-group-sm input[type=time],.input-group-sm input[type=datetime-local],.input-group-sm input[type=month],input[type=date].input-sm,input[type=time].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm{line-height:30px}.input-group-lg input[type=date],.input-group-lg input[type=time],.input-group-lg input[type=datetime-local],.input-group-lg input[type=month],input[type=date].input-lg,input[type=time].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg{line-height:46px}}.form-group{margin-bottom:15px}.checkbox,.radio{position:relative;display:block;margin-top:10px;margin-bottom:10px}.checkbox label,.radio label{min-height:20px;padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer}.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox],.radio input[type=radio],.radio-inline input[type=radio]{position:absolute;margin-top:4px\9;margin-left:-20px}.checkbox+.checkbox,.radio+.radio{margin-top:-5px}.checkbox-inline,.radio-inline{position:relative;display:inline-block;padding-left:20px;margin-bottom:0;font-weight:400;vertical-align:middle;cursor:pointer}.checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline{margin-top:0;margin-left:10px}fieldset[disabled] input[type=checkbox],fieldset[disabled] input[type=radio],input[type=checkbox].disabled,input[type=checkbox][disabled],input[type=radio].disabled,input[type=radio][disabled]{cursor:not-allowed}.checkbox-inline.disabled,.radio-inline.disabled,fieldset[disabled] .checkbox-inline,fieldset[disabled] .radio-inline{cursor:not-allowed}.checkbox.disabled label,.radio.disabled label,fieldset[disabled] .checkbox label,fieldset[disabled] .radio label{cursor:not-allowed}.form-control-static{min-height:34px;padding-top:7px;padding-bottom:7px;margin-bottom:0}.form-control-static.input-lg,.form-control-static.input-sm{padding-right:0;padding-left:0}.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-sm{height:30px;line-height:30px}select[multiple].input-sm,textarea.input-sm{height:auto}.form-group-sm .form-control{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.form-group-sm select.form-control{height:30px;line-height:30px}.form-group-sm select[multiple].form-control,.form-group-sm textarea.form-control{height:auto}.form-group-sm .form-control-static{height:30px;min-height:32px;padding:6px 10px;font-size:12px;line-height:1.5}.input-lg{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-lg{height:46px;line-height:46px}select[multiple].input-lg,textarea.input-lg{height:auto}.form-group-lg .form-control{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.form-group-lg select.form-control{height:46px;line-height:46px}.form-group-lg select[multiple].form-control,.form-group-lg textarea.form-control{height:auto}.form-group-lg .form-control-static{height:46px;min-height:38px;padding:11px 16px;font-size:18px;line-height:1.3333333}.has-feedback{position:relative}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center;pointer-events:none}.form-group-lg .form-control+.form-control-feedback,.input-group-lg+.form-control-feedback,.input-lg+.form-control-feedback{width:46px;height:46px;line-height:46px}.form-group-sm .form-control+.form-control-feedback,.input-group-sm+.form-control-feedback,.input-sm+.form-control-feedback{width:30px;height:30px;line-height:30px}.has-success .checkbox,.has-success .checkbox-inline,.has-success .control-label,.has-success .help-block,.has-success .radio,.has-success .radio-inline,.has-success.checkbox label,.has-success.checkbox-inline label,.has-success.radio label,.has-success.radio-inline label{color:#3c763d}.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168}.has-success .input-group-addon{color:#3c763d;background-color:#dff0d8;border-color:#3c763d}.has-success .form-control-feedback{color:#3c763d}.has-warning .checkbox,.has-warning .checkbox-inline,.has-warning .control-label,.has-warning .help-block,.has-warning .radio,.has-warning .radio-inline,.has-warning.checkbox label,.has-warning.checkbox-inline label,.has-warning.radio label,.has-warning.radio-inline label{color:#8a6d3b}.has-warning .form-control{border-color:#8a6d3b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-warning .form-control:focus{border-color:#66512c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b}.has-warning .input-group-addon{color:#8a6d3b;background-color:#fcf8e3;border-color:#8a6d3b}.has-warning .form-control-feedback{color:#8a6d3b}.has-error .checkbox,.has-error .checkbox-inline,.has-error .control-label,.has-error .help-block,.has-error .radio,.has-error .radio-inline,.has-error.checkbox label,.has-error.checkbox-inline label,.has-error.radio label,.has-error.radio-inline label{color:#a94442}.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483}.has-error .input-group-addon{color:#a94442;background-color:#f2dede;border-color:#a94442}.has-error .form-control-feedback{color:#a94442}.has-feedback label~.form-control-feedback{top:25px}.has-feedback label.sr-only~.form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}@media (min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-static{display:inline-block}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .form-control,.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn{width:auto}.form-inline .input-group>.form-control{width:100%}.form-inline .control-label{margin-bottom:0;vertical-align:middle}.form-inline .checkbox,.form-inline .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.form-inline .checkbox label,.form-inline .radio label{padding-left:0}.form-inline .checkbox input[type=checkbox],.form-inline .radio input[type=radio]{position:relative;margin-left:0}.form-inline .has-feedback .form-control-feedback{top:0}}.form-horizontal .checkbox,.form-horizontal .checkbox-inline,.form-horizontal .radio,.form-horizontal .radio-inline{padding-top:7px;margin-top:0;margin-bottom:0}.form-horizontal .checkbox,.form-horizontal .radio{min-height:27px}.form-horizontal .form-group{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.form-horizontal .control-label{padding-top:7px;margin-bottom:0;text-align:right}}.form-horizontal .has-feedback .form-control-feedback{right:15px}@media (min-width:768px){.form-horizontal .form-group-lg .control-label{padding-top:11px;font-size:18px}}@media (min-width:768px){.form-horizontal .form-group-sm .control-label{padding-top:6px;font-size:12px}}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}.btn.active.focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn:active:focus,.btn:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn.focus,.btn:focus,.btn:hover{color:#333;text-decoration:none}.btn.active,.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn.disabled,.btn[disabled],fieldset[disabled] .btn{cursor:not-allowed;filter:alpha(opacity=65);-webkit-box-shadow:none;box-shadow:none;opacity:.65}a.btn.disabled,fieldset[disabled] a.btn{pointer-events:none}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.btn-default.focus,.btn-default:focus{color:#333;background-color:#e6e6e6;border-color:#8c8c8c}.btn-default:hover{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default.active.focus,.btn-default.active:focus,.btn-default.active:hover,.btn-default:active.focus,.btn-default:active:focus,.btn-default:active:hover,.open>.dropdown-toggle.btn-default.focus,.open>.dropdown-toggle.btn-default:focus,.open>.dropdown-toggle.btn-default:hover{color:#333;background-color:#d4d4d4;border-color:#8c8c8c}.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{background-image:none}.btn-default.disabled.focus,.btn-default.disabled:focus,.btn-default.disabled:hover,.btn-default[disabled].focus,.btn-default[disabled]:focus,.btn-default[disabled]:hover,fieldset[disabled] .btn-default.focus,fieldset[disabled] .btn-default:focus,fieldset[disabled] .btn-default:hover{background-color:#fff;border-color:#ccc}.btn-default .badge{color:#fff;background-color:#333}.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4}.btn-primary.focus,.btn-primary:focus{color:#fff;background-color:#286090;border-color:#122b40}.btn-primary:hover{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary.active.focus,.btn-primary.active:focus,.btn-primary.active:hover,.btn-primary:active.focus,.btn-primary:active:focus,.btn-primary:active:hover,.open>.dropdown-toggle.btn-primary.focus,.open>.dropdown-toggle.btn-primary:focus,.open>.dropdown-toggle.btn-primary:hover{color:#fff;background-color:#204d74;border-color:#122b40}.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary{background-image:none}.btn-primary.disabled.focus,.btn-primary.disabled:focus,.btn-primary.disabled:hover,.btn-primary[disabled].focus,.btn-primary[disabled]:focus,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary.focus,fieldset[disabled] .btn-primary:focus,fieldset[disabled] .btn-primary:hover{background-color:#337ab7;border-color:#2e6da4}.btn-primary .badge{color:#337ab7;background-color:#fff}.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}.btn-success.focus,.btn-success:focus{color:#fff;background-color:#449d44;border-color:#255625}.btn-success:hover{color:#fff;background-color:#449d44;border-color:#398439}.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success{color:#fff;background-color:#449d44;border-color:#398439}.btn-success.active.focus,.btn-success.active:focus,.btn-success.active:hover,.btn-success:active.focus,.btn-success:active:focus,.btn-success:active:hover,.open>.dropdown-toggle.btn-success.focus,.open>.dropdown-toggle.btn-success:focus,.open>.dropdown-toggle.btn-success:hover{color:#fff;background-color:#398439;border-color:#255625}.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success{background-image:none}.btn-success.disabled.focus,.btn-success.disabled:focus,.btn-success.disabled:hover,.btn-success[disabled].focus,.btn-success[disabled]:focus,.btn-success[disabled]:hover,fieldset[disabled] .btn-success.focus,fieldset[disabled] .btn-success:focus,fieldset[disabled] .btn-success:hover{background-color:#5cb85c;border-color:#4cae4c}.btn-success .badge{color:#5cb85c;background-color:#fff}.btn-info{color:#fff;background-color:#5bc0de;border-color:#46b8da}.btn-info.focus,.btn-info:focus{color:#fff;background-color:#31b0d5;border-color:#1b6d85}.btn-info:hover{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info.active,.btn-info:active,.open>.dropdown-toggle.btn-info{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info.active.focus,.btn-info.active:focus,.btn-info.active:hover,.btn-info:active.focus,.btn-info:active:focus,.btn-info:active:hover,.open>.dropdown-toggle.btn-info.focus,.open>.dropdown-toggle.btn-info:focus,.open>.dropdown-toggle.btn-info:hover{color:#fff;background-color:#269abc;border-color:#1b6d85}.btn-info.active,.btn-info:active,.open>.dropdown-toggle.btn-info{background-image:none}.btn-info.disabled.focus,.btn-info.disabled:focus,.btn-info.disabled:hover,.btn-info[disabled].focus,.btn-info[disabled]:focus,.btn-info[disabled]:hover,fieldset[disabled] .btn-info.focus,fieldset[disabled] .btn-info:focus,fieldset[disabled] .btn-info:hover{background-color:#5bc0de;border-color:#46b8da}.btn-info .badge{color:#5bc0de;background-color:#fff}.btn-warning{color:#fff;background-color:#f0ad4e;border-color:#eea236}.btn-warning.focus,.btn-warning:focus{color:#fff;background-color:#ec971f;border-color:#985f0d}.btn-warning:hover{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning.active,.btn-warning:active,.open>.dropdown-toggle.btn-warning{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning.active.focus,.btn-warning.active:focus,.btn-warning.active:hover,.btn-warning:active.focus,.btn-warning:active:focus,.btn-warning:active:hover,.open>.dropdown-toggle.btn-warning.focus,.open>.dropdown-toggle.btn-warning:focus,.open>.dropdown-toggle.btn-warning:hover{color:#fff;background-color:#d58512;border-color:#985f0d}.btn-warning.active,.btn-warning:active,.open>.dropdown-toggle.btn-warning{background-image:none}.btn-warning.disabled.focus,.btn-warning.disabled:focus,.btn-warning.disabled:hover,.btn-warning[disabled].focus,.btn-warning[disabled]:focus,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning.focus,fieldset[disabled] .btn-warning:focus,fieldset[disabled] .btn-warning:hover{background-color:#f0ad4e;border-color:#eea236}.btn-warning .badge{color:#f0ad4e;background-color:#fff}.btn-danger{color:#fff;background-color:#d9534f;border-color:#d43f3a}.btn-danger.focus,.btn-danger:focus{color:#fff;background-color:#c9302c;border-color:#761c19}.btn-danger:hover{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger.active,.btn-danger:active,.open>.dropdown-toggle.btn-danger{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger.active.focus,.btn-danger.active:focus,.btn-danger.active:hover,.btn-danger:active.focus,.btn-danger:active:focus,.btn-danger:active:hover,.open>.dropdown-toggle.btn-danger.focus,.open>.dropdown-toggle.btn-danger:focus,.open>.dropdown-toggle.btn-danger:hover{color:#fff;background-color:#ac2925;border-color:#761c19}.btn-danger.active,.btn-danger:active,.open>.dropdown-toggle.btn-danger{background-image:none}.btn-danger.disabled.focus,.btn-danger.disabled:focus,.btn-danger.disabled:hover,.btn-danger[disabled].focus,.btn-danger[disabled]:focus,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger.focus,fieldset[disabled] .btn-danger:focus,fieldset[disabled] .btn-danger:hover{background-color:#d9534f;border-color:#d43f3a}.btn-danger .badge{color:#d9534f;background-color:#fff}.btn-link{font-weight:400;color:#337ab7;border-radius:0}.btn-link,.btn-link.active,.btn-link:active,.btn-link[disabled],fieldset[disabled] .btn-link{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:active,.btn-link:focus,.btn-link:hover{border-color:transparent}.btn-link:focus,.btn-link:hover{color:#23527c;text-decoration:underline;background-color:transparent}.btn-link[disabled]:focus,.btn-link[disabled]:hover,fieldset[disabled] .btn-link:focus,fieldset[disabled] .btn-link:hover{color:#777;text-decoration:none}.btn-group-lg>.btn,.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.btn-group-sm>.btn,.btn-sm{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.btn-group-xs>.btn,.btn-xs{padding:1px 5px;font-size:12px;line-height:1.5;border-radius:3px}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:5px}input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}.fade{opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear}.fade.in{opacity:1}.collapse{display:none}.collapse.in{display:block}tr.collapse.in{display:table-row}tbody.collapse.in{display:table-row-group}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition-timing-function:ease;-o-transition-timing-function:ease;transition-timing-function:ease;-webkit-transition-duration:.35s;-o-transition-duration:.35s;transition-duration:.35s;-webkit-transition-property:height,visibility;-o-transition-property:height,visibility;transition-property:height,visibility}.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px dashed;border-top:4px solid\9;border-right:4px solid transparent;border-left:4px solid transparent}.dropdown,.dropup{position:relative}.dropdown-toggle:focus{outline:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;font-size:14px;text-align:left;list-style:none;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,.175);box-shadow:0 6px 12px rgba(0,0,0,.175)}.dropdown-menu.pull-right{right:0;left:auto}.dropdown-menu .divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.dropdown-menu>li>a{display:block;padding:3px 20px;clear:both;font-weight:400;line-height:1.42857143;color:#333;white-space:nowrap}.dropdown-menu>li>a:focus,.dropdown-menu>li>a:hover{color:#262626;text-decoration:none;background-color:#f5f5f5}.dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover{color:#fff;text-decoration:none;background-color:#337ab7;outline:0}.dropdown-menu>.disabled>a,.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover{color:#777}.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover{text-decoration:none;cursor:not-allowed;background-color:transparent;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled=false)}.open>.dropdown-menu{display:block}.open>a{outline:0}.dropdown-menu-right{right:0;left:auto}.dropdown-menu-left{right:auto;left:0}.dropdown-header{display:block;padding:3px 20px;font-size:12px;line-height:1.42857143;color:#777;white-space:nowrap}.dropdown-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:990}.pull-right>.dropdown-menu{right:0;left:auto}.dropup .caret,.navbar-fixed-bottom .dropdown .caret{content:"";border-top:0;border-bottom:4px dashed;border-bottom:4px solid\9}.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:2px}@media (min-width:768px){.navbar-right .dropdown-menu{right:0;left:auto}.navbar-right .dropdown-menu-left{right:auto;left:0}}.btn-group,.btn-group-vertical{position:relative;display:inline-block;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:relative;float:left}.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:hover,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover{z-index:2}.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group{margin-left:-1px}.btn-toolbar{margin-left:-5px}.btn-toolbar .btn,.btn-toolbar .btn-group,.btn-toolbar .input-group{float:left}.btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group{margin-left:5px}.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){border-radius:0}.btn-group>.btn:first-child{margin-left:0}.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.btn-group>.btn-group{float:left}.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-bottom-left-radius:0}.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle{outline:0}.btn-group>.btn+.dropdown-toggle{padding-right:8px;padding-left:8px}.btn-group>.btn-lg+.dropdown-toggle{padding-right:12px;padding-left:12px}.btn-group.open .dropdown-toggle{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn-group.open .dropdown-toggle.btn-link{-webkit-box-shadow:none;box-shadow:none}.btn .caret{margin-left:0}.btn-lg .caret{border-width:5px 5px 0;border-bottom-width:0}.dropup .btn-lg .caret{border-width:0 5px 5px}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group,.btn-group-vertical>.btn-group>.btn{display:block;float:none;width:100%;max-width:100%}.btn-group-vertical>.btn-group>.btn{float:none}.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}.btn-group-vertical>.btn:not(:first-child):not(:last-child){border-radius:0}.btn-group-vertical>.btn:first-child:not(:last-child){border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn:last-child:not(:first-child){border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-top-right-radius:0}.btn-group-justified{display:table;width:100%;table-layout:fixed;border-collapse:separate}.btn-group-justified>.btn,.btn-group-justified>.btn-group{display:table-cell;float:none;width:1%}.btn-group-justified>.btn-group .btn{width:100%}.btn-group-justified>.btn-group .dropdown-menu{left:auto}[data-toggle=buttons]>.btn input[type=checkbox],[data-toggle=buttons]>.btn input[type=radio],[data-toggle=buttons]>.btn-group>.btn input[type=checkbox],[data-toggle=buttons]>.btn-group>.btn input[type=radio]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group{position:relative;display:table;border-collapse:separate}.input-group[class*=col-]{float:none;padding-right:0;padding-left:0}.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.input-group .form-control:focus{z-index:3}.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn{height:46px;line-height:46px}select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn,textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn{height:auto}.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{height:30px;line-height:30px}select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn,textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn{height:auto}.input-group .form-control,.input-group-addon,.input-group-btn{display:table-cell}.input-group .form-control:not(:first-child):not(:last-child),.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child){border-radius:0}.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}.input-group-addon{padding:6px 12px;font-size:14px;font-weight:400;line-height:1;color:#555;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px}.input-group-addon.input-sm{padding:5px 10px;font-size:12px;border-radius:3px}.input-group-addon.input-lg{padding:10px 16px;font-size:18px;border-radius:6px}.input-group-addon input[type=checkbox],.input-group-addon input[type=radio]{margin-top:0}.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn-group:not(:last-child)>.btn,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.input-group-addon:first-child{border-right:0}.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:first-child>.btn-group:not(:first-child)>.btn,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-addon:last-child{border-left:0}.input-group-btn{position:relative;font-size:0;white-space:nowrap}.input-group-btn>.btn{position:relative}.input-group-btn>.btn+.btn{margin-left:-1px}.input-group-btn>.btn:active,.input-group-btn>.btn:focus,.input-group-btn>.btn:hover{z-index:2}.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group{margin-right:-1px}.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group{z-index:2;margin-left:-1px}.nav{padding-left:0;margin-bottom:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.nav>li>a:focus,.nav>li>a:hover{text-decoration:none;background-color:#eee}.nav>li.disabled>a{color:#777}.nav>li.disabled>a:focus,.nav>li.disabled>a:hover{color:#777;text-decoration:none;cursor:not-allowed;background-color:transparent}.nav .open>a,.nav .open>a:focus,.nav .open>a:hover{background-color:#eee;border-color:#337ab7}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover{color:#555;cursor:default;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{color:#fff;background-color:#337ab7}.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border-bottom-color:#fff}}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1)}.navbar-collapse.in{overflow-y:auto}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}.navbar-collapse.in{overflow-y:visible}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse{padding-right:0;padding-left:0}}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:200px}}.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-static-top{z-index:1000;border-width:0 0 1px}@media (min-width:768px){.navbar-static-top{border-radius:0}}.navbar-fixed-bottom,.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-bottom,.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;height:50px;padding:15px 15px;font-size:18px;line-height:20px}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-brand>img{display:block}@media (min-width:768px){.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (max-width:767px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;-webkit-box-shadow:none;box-shadow:none}.navbar-nav .open .dropdown-menu .dropdown-header,.navbar-nav .open .dropdown-menu>li>a{padding:5px 15px 5px 25px}.navbar-nav .open .dropdown-menu>li>a{line-height:20px}.navbar-nav .open .dropdown-menu>li>a:focus,.navbar-nav .open .dropdown-menu>li>a:hover{background-image:none}}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}}.navbar-form{padding:10px 15px;margin-top:8px;margin-right:-15px;margin-bottom:8px;margin-left:-15px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1)}@media (min-width:768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}.navbar-form .form-control-static{display:inline-block}.navbar-form .input-group{display:inline-table;vertical-align:middle}.navbar-form .input-group .form-control,.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn{width:auto}.navbar-form .input-group>.form-control{width:100%}.navbar-form .control-label{margin-bottom:0;vertical-align:middle}.navbar-form .checkbox,.navbar-form .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.navbar-form .checkbox label,.navbar-form .radio label{padding-left:0}.navbar-form .checkbox input[type=checkbox],.navbar-form .radio input[type=radio]{position:relative;margin-left:0}.navbar-form .has-feedback .form-control-feedback{top:0}}@media (max-width:767px){.navbar-form .form-group{margin-bottom:5px}.navbar-form .form-group:last-child{margin-bottom:0}}@media (min-width:768px){.navbar-form{width:auto;padding-top:0;padding-bottom:0;margin-right:0;margin-left:0;border:0;-webkit-box-shadow:none;box-shadow:none}}.navbar-nav>li>.dropdown-menu{margin-top:0;border-top-left-radius:0;border-top-right-radius:0}.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{margin-bottom:0;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-btn.btn-sm{margin-top:10px;margin-bottom:10px}.navbar-btn.btn-xs{margin-top:14px;margin-bottom:14px}.navbar-text{margin-top:15px;margin-bottom:15px}@media (min-width:768px){.navbar-text{float:left;margin-right:15px;margin-left:15px}}@media (min-width:768px){.navbar-left{float:left!important}.navbar-right{float:right!important;margin-right:-15px}.navbar-right~.navbar-right{margin-right:0}}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-text{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover{color:#333;background-color:transparent}.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:focus,.navbar-default .navbar-nav>.active>a:hover{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:focus,.navbar-default .navbar-nav>.disabled>a:hover{color:#ccc;background-color:transparent}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:#e7e7e7}.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover{color:#555;background-color:#e7e7e7}@media (max-width:767px){.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#777}.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover{color:#333;background-color:transparent}.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#ccc;background-color:transparent}}.navbar-default .navbar-link{color:#777}.navbar-default .navbar-link:hover{color:#333}.navbar-default .btn-link{color:#777}.navbar-default .btn-link:focus,.navbar-default .btn-link:hover{color:#333}.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:focus,fieldset[disabled] .navbar-default .btn-link:hover{color:#ccc}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .navbar-brand{color:#9d9d9d}.navbar-inverse .navbar-brand:focus,.navbar-inverse .navbar-brand:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-text{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a:focus,.navbar-inverse .navbar-nav>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:focus,.navbar-inverse .navbar-nav>.active>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:focus,.navbar-inverse .navbar-nav>.disabled>a:hover{color:#444;background-color:transparent}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:focus,.navbar-inverse .navbar-toggle:hover{background-color:#333}.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{border-color:#101010}.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:focus,.navbar-inverse .navbar-nav>.open>a:hover{color:#fff;background-color:#080808}@media (max-width:767px){.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{border-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu .divider{background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#444;background-color:transparent}}.navbar-inverse .navbar-link{color:#9d9d9d}.navbar-inverse .navbar-link:hover{color:#fff}.navbar-inverse .btn-link{color:#9d9d9d}.navbar-inverse .btn-link:focus,.navbar-inverse .btn-link:hover{color:#fff}.navbar-inverse .btn-link[disabled]:focus,.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:focus,fieldset[disabled] .navbar-inverse .btn-link:hover{color:#444}.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}.breadcrumb>li{display:inline-block}.breadcrumb>li+li:before{padding:0 5px;color:#ccc;content:"/\00a0"}.breadcrumb>.active{color:#777}.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#337ab7;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{z-index:2;color:#23527c;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:3;color:#fff;cursor:default;background-color:#337ab7;border-color:#337ab7}.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}.pager{padding-left:0;margin:20px 0;text-align:center;list-style:none}.pager li{display:inline}.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;border-radius:15px}.pager li>a:focus,.pager li>a:hover{text-decoration:none;background-color:#eee}.pager .next>a,.pager .next>span{float:right}.pager .previous>a,.pager .previous>span{float:left}.pager .disabled>a,.pager .disabled>a:focus,.pager .disabled>a:hover,.pager .disabled>span{color:#777;cursor:not-allowed;background-color:#fff}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}a.label:focus,a.label:hover{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.btn .label{position:relative;top:-1px}.label-default{background-color:#777}.label-default[href]:focus,.label-default[href]:hover{background-color:#5e5e5e}.label-primary{background-color:#337ab7}.label-primary[href]:focus,.label-primary[href]:hover{background-color:#286090}.label-success{background-color:#5cb85c}.label-success[href]:focus,.label-success[href]:hover{background-color:#449d44}.label-info{background-color:#5bc0de}.label-info[href]:focus,.label-info[href]:hover{background-color:#31b0d5}.label-warning{background-color:#f0ad4e}.label-warning[href]:focus,.label-warning[href]:hover{background-color:#ec971f}.label-danger{background-color:#d9534f}.label-danger[href]:focus,.label-danger[href]:hover{background-color:#c9302c}.badge{display:inline-block;min-width:10px;padding:3px 7px;font-size:12px;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:middle;background-color:#777;border-radius:10px}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.btn-group-xs>.btn .badge,.btn-xs .badge{top:0;padding:1px 5px}a.badge:focus,a.badge:hover{color:#fff;text-decoration:none;cursor:pointer}.list-group-item.active>.badge,.nav-pills>.active>a>.badge{color:#337ab7;background-color:#fff}.list-group-item>.badge{float:right}.list-group-item>.badge+.badge{margin-right:5px}.nav-pills>li>a>.badge{margin-left:3px}.jumbotron{padding-top:30px;padding-bottom:30px;margin-bottom:30px;color:inherit;background-color:#eee}.jumbotron .h1,.jumbotron h1{color:inherit}.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}.jumbotron>hr{border-top-color:#d5d5d5}.container .jumbotron,.container-fluid .jumbotron{padding-right:15px;padding-left:15px;border-radius:6px}.jumbotron .container{max-width:100%}@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}.container .jumbotron,.container-fluid .jumbotron{padding-right:60px;padding-left:60px}.jumbotron .h1,.jumbotron h1{font-size:63px}}.thumbnail{display:block;padding:4px;margin-bottom:20px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:border .2s ease-in-out;-o-transition:border .2s ease-in-out;transition:border .2s ease-in-out}.thumbnail a>img,.thumbnail>img{margin-right:auto;margin-left:auto}a.thumbnail.active,a.thumbnail:focus,a.thumbnail:hover{border-color:#337ab7}.thumbnail .caption{padding:9px;color:#333}.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px}.alert h4{margin-top:0;color:inherit}.alert .alert-link{font-weight:700}.alert>p,.alert>ul{margin-bottom:0}.alert>p+p{margin-top:5px}.alert-dismissable,.alert-dismissible{padding-right:35px}.alert-dismissable .close,.alert-dismissible .close{position:relative;top:-2px;right:-21px;color:inherit}.alert-success{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.alert-success hr{border-top-color:#c9e2b3}.alert-success .alert-link{color:#2b542c}.alert-info{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.alert-info hr{border-top-color:#a6e1ec}.alert-info .alert-link{color:#245269}.alert-warning{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.alert-warning hr{border-top-color:#f7e1b5}.alert-warning .alert-link{color:#66512c}.alert-danger{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.alert-danger hr{border-top-color:#e4b9c0}.alert-danger .alert-link{color:#843534}@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.progress{height:20px;margin-bottom:20px;overflow:hidden;background-color:#f5f5f5;border-radius:4px;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);box-shadow:inset 0 1px 2px rgba(0,0,0,.1)}.progress-bar{float:left;width:0;height:100%;font-size:12px;line-height:20px;color:#fff;text-align:center;background-color:#337ab7;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);-webkit-transition:width .6s ease;-o-transition:width .6s ease;transition:width .6s ease}.progress-bar-striped,.progress-striped .progress-bar{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);-webkit-background-size:40px 40px;background-size:40px 40px}.progress-bar.active,.progress.active .progress-bar{-webkit-animation:progress-bar-stripes 2s linear infinite;-o-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite}.progress-bar-success{background-color:#5cb85c}.progress-striped .progress-bar-success{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-info{background-color:#5bc0de}.progress-striped .progress-bar-info{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-warning{background-color:#f0ad4e}.progress-striped .progress-bar-warning{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-danger{background-color:#d9534f}.progress-striped .progress-bar-danger{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.media{margin-top:15px}.media:first-child{margin-top:0}.media,.media-body{overflow:hidden;zoom:1}.media-body{width:10000px}.media-object{display:block}.media-object.img-thumbnail{max-width:none}.media-right,.media>.pull-right{padding-left:10px}.media-left,.media>.pull-left{padding-right:10px}.media-body,.media-left,.media-right{display:table-cell;vertical-align:top}.media-middle{vertical-align:middle}.media-bottom{vertical-align:bottom}.media-heading{margin-top:0;margin-bottom:5px}.media-list{padding-left:0;list-style:none}.list-group{padding-left:0;margin-bottom:20px}.list-group-item{position:relative;display:block;padding:10px 15px;margin-bottom:-1px;background-color:#fff;border:1px solid #ddd}.list-group-item:first-child{border-top-left-radius:4px;border-top-right-radius:4px}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}a.list-group-item,button.list-group-item{color:#555}a.list-group-item .list-group-item-heading,button.list-group-item .list-group-item-heading{color:#333}a.list-group-item:focus,a.list-group-item:hover,button.list-group-item:focus,button.list-group-item:hover{color:#555;text-decoration:none;background-color:#f5f5f5}button.list-group-item{width:100%;text-align:left}.list-group-item.disabled,.list-group-item.disabled:focus,.list-group-item.disabled:hover{color:#777;cursor:not-allowed;background-color:#eee}.list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading{color:inherit}.list-group-item.disabled .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text{color:#777}.list-group-item.active,.list-group-item.active:focus,.list-group-item.active:hover{z-index:2;color:#fff;background-color:#337ab7;border-color:#337ab7}.list-group-item.active .list-group-item-heading,.list-group-item.active .list-group-item-heading>.small,.list-group-item.active .list-group-item-heading>small,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading>.small,.list-group-item.active:focus .list-group-item-heading>small,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading>.small,.list-group-item.active:hover .list-group-item-heading>small{color:inherit}.list-group-item.active .list-group-item-text,.list-group-item.active:focus .list-group-item-text,.list-group-item.active:hover .list-group-item-text{color:#c7ddef}.list-group-item-success{color:#3c763d;background-color:#dff0d8}a.list-group-item-success,button.list-group-item-success{color:#3c763d}a.list-group-item-success .list-group-item-heading,button.list-group-item-success .list-group-item-heading{color:inherit}a.list-group-item-success:focus,a.list-group-item-success:hover,button.list-group-item-success:focus,button.list-group-item-success:hover{color:#3c763d;background-color:#d0e9c6}a.list-group-item-success.active,a.list-group-item-success.active:focus,a.list-group-item-success.active:hover,button.list-group-item-success.active,button.list-group-item-success.active:focus,button.list-group-item-success.active:hover{color:#fff;background-color:#3c763d;border-color:#3c763d}.list-group-item-info{color:#31708f;background-color:#d9edf7}a.list-group-item-info,button.list-group-item-info{color:#31708f}a.list-group-item-info .list-group-item-heading,button.list-group-item-info .list-group-item-heading{color:inherit}a.list-group-item-info:focus,a.list-group-item-info:hover,button.list-group-item-info:focus,button.list-group-item-info:hover{color:#31708f;background-color:#c4e3f3}a.list-group-item-info.active,a.list-group-item-info.active:focus,a.list-group-item-info.active:hover,button.list-group-item-info.active,button.list-group-item-info.active:focus,button.list-group-item-info.active:hover{color:#fff;background-color:#31708f;border-color:#31708f}.list-group-item-warning{color:#8a6d3b;background-color:#fcf8e3}a.list-group-item-warning,button.list-group-item-warning{color:#8a6d3b}a.list-group-item-warning .list-group-item-heading,button.list-group-item-warning .list-group-item-heading{color:inherit}a.list-group-item-warning:focus,a.list-group-item-warning:hover,button.list-group-item-warning:focus,button.list-group-item-warning:hover{color:#8a6d3b;background-color:#faf2cc}a.list-group-item-warning.active,a.list-group-item-warning.active:focus,a.list-group-item-warning.active:hover,button.list-group-item-warning.active,button.list-group-item-warning.active:focus,button.list-group-item-warning.active:hover{color:#fff;background-color:#8a6d3b;border-color:#8a6d3b}.list-group-item-danger{color:#a94442;background-color:#f2dede}a.list-group-item-danger,button.list-group-item-danger{color:#a94442}a.list-group-item-danger .list-group-item-heading,button.list-group-item-danger .list-group-item-heading{color:inherit}a.list-group-item-danger:focus,a.list-group-item-danger:hover,button.list-group-item-danger:focus,button.list-group-item-danger:hover{color:#a94442;background-color:#ebcccc}a.list-group-item-danger.active,a.list-group-item-danger.active:focus,a.list-group-item-danger.active:hover,button.list-group-item-danger.active,button.list-group-item-danger.active:focus,button.list-group-item-danger.active:hover{color:#fff;background-color:#a94442;border-color:#a94442}.list-group-item-heading{margin-top:0;margin-bottom:5px}.list-group-item-text{margin-bottom:0;line-height:1.3}.panel{margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05)}.panel-body{padding:15px}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px}.panel-heading>.dropdown .dropdown-toggle{color:inherit}.panel-title{margin-top:0;margin-bottom:0;font-size:16px;color:inherit}.panel-title>.small,.panel-title>.small>a,.panel-title>a,.panel-title>small,.panel-title>small>a{color:inherit}.panel-footer{padding:10px 15px;background-color:#f5f5f5;border-top:1px solid #ddd;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.list-group,.panel>.panel-collapse>.list-group{margin-bottom:0}.panel>.list-group .list-group-item,.panel>.panel-collapse>.list-group .list-group-item{border-width:1px 0;border-radius:0}.panel>.list-group:first-child .list-group-item:first-child,.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child{border-top:0;border-top-left-radius:3px;border-top-right-radius:3px}.panel>.list-group:last-child .list-group-item:last-child,.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child{border-bottom:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child{border-top-left-radius:0;border-top-right-radius:0}.panel-heading+.list-group .list-group-item:first-child{border-top-width:0}.list-group+.panel-footer{border-top-width:0}.panel>.panel-collapse>.table,.panel>.table,.panel>.table-responsive>.table{margin-bottom:0}.panel>.panel-collapse>.table caption,.panel>.table caption,.panel>.table-responsive>.table caption{padding-right:15px;padding-left:15px}.panel>.table-responsive:first-child>.table:first-child,.panel>.table:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child,.panel>.table:first-child>thead:first-child>tr:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child{border-top-left-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child{border-top-right-radius:3px}.panel>.table-responsive:last-child>.table:last-child,.panel>.table:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child{border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child{border-bottom-right-radius:3px}.panel>.panel-body+.table,.panel>.panel-body+.table-responsive,.panel>.table+.panel-body,.panel>.table-responsive+.panel-body{border-top:1px solid #ddd}.panel>.table>tbody:first-child>tr:first-child td,.panel>.table>tbody:first-child>tr:first-child th{border-top:0}.panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th{border-bottom:0}.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}.panel>.table-responsive{margin-bottom:0;border:0}.panel-group{margin-bottom:20px}.panel-group .panel{margin-bottom:0;border-radius:4px}.panel-group .panel+.panel{margin-top:5px}.panel-group .panel-heading{border-bottom:0}.panel-group .panel-heading+.panel-collapse>.list-group,.panel-group .panel-heading+.panel-collapse>.panel-body{border-top:1px solid #ddd}.panel-group .panel-footer{border-top:0}.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}.panel-default{border-color:#ddd}.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}.panel-default>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ddd}.panel-default>.panel-heading .badge{color:#f5f5f5;background-color:#333}.panel-default>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ddd}.panel-primary{border-color:#337ab7}.panel-primary>.panel-heading{color:#fff;background-color:#337ab7;border-color:#337ab7}.panel-primary>.panel-heading+.panel-collapse>.panel-body{border-top-color:#337ab7}.panel-primary>.panel-heading .badge{color:#337ab7;background-color:#fff}.panel-primary>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#337ab7}.panel-success{border-color:#d6e9c6}.panel-success>.panel-heading{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.panel-success>.panel-heading+.panel-collapse>.panel-body{border-top-color:#d6e9c6}.panel-success>.panel-heading .badge{color:#dff0d8;background-color:#3c763d}.panel-success>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#d6e9c6}.panel-info{border-color:#bce8f1}.panel-info>.panel-heading{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.panel-info>.panel-heading+.panel-collapse>.panel-body{border-top-color:#bce8f1}.panel-info>.panel-heading .badge{color:#d9edf7;background-color:#31708f}.panel-info>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#bce8f1}.panel-warning{border-color:#faebcc}.panel-warning>.panel-heading{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.panel-warning>.panel-heading+.panel-collapse>.panel-body{border-top-color:#faebcc}.panel-warning>.panel-heading .badge{color:#fcf8e3;background-color:#8a6d3b}.panel-warning>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#faebcc}.panel-danger{border-color:#ebccd1}.panel-danger>.panel-heading{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.panel-danger>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ebccd1}.panel-danger>.panel-heading .badge{color:#f2dede;background-color:#a94442}.panel-danger>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ebccd1}.embed-responsive{position:relative;display:block;height:0;padding:0;overflow:hidden}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-16by9{padding-bottom:56.25%}.embed-responsive-4by3{padding-bottom:75%}.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);box-shadow:inset 0 1px 1px rgba(0,0,0,.05)}.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,.15)}.well-lg{padding:24px;border-radius:6px}.well-sm{padding:9px;border-radius:3px}.close{float:right;font-size:21px;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;filter:alpha(opacity=20);opacity:.2}.close:focus,.close:hover{color:#000;text-decoration:none;cursor:pointer;filter:alpha(opacity=50);opacity:.5}button.close{-webkit-appearance:none;padding:0;cursor:pointer;background:0 0;border:0}.modal-open{overflow:hidden}.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;overflow:hidden;-webkit-overflow-scrolling:touch;outline:0}.modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out;-webkit-transform:translate(0,-25%);-ms-transform:translate(0,-25%);-o-transform:translate(0,-25%);transform:translate(0,-25%)}.modal.in .modal-dialog{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);-o-transform:translate(0,0);transform:translate(0,0)}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:auto;margin:10px}.modal-content{position:relative;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #999;border:1px solid rgba(0,0,0,.2);border-radius:6px;outline:0;-webkit-box-shadow:0 3px 9px rgba(0,0,0,.5);box-shadow:0 3px 9px rgba(0,0,0,.5)}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}.modal-backdrop.fade{filter:alpha(opacity=0);opacity:0}.modal-backdrop.in{filter:alpha(opacity=50);opacity:.5}.modal-header{padding:15px;border-bottom:1px solid #e5e5e5}.modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.42857143}.modal-body{position:relative;padding:15px}.modal-footer{padding:15px;text-align:right;border-top:1px solid #e5e5e5}.modal-footer .btn+.btn{margin-bottom:0;margin-left:5px}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.modal-footer .btn-block+.btn-block{margin-left:0}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:768px){.modal-dialog{width:600px;margin:30px auto}.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5)}.modal-sm{width:300px}}@media (min-width:992px){.modal-lg{width:900px}}.tooltip{position:absolute;z-index:1070;display:block;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;font-style:normal;font-weight:400;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;word-wrap:normal;white-space:normal;filter:alpha(opacity=0);opacity:0;line-break:auto}.tooltip.in{filter:alpha(opacity=90);opacity:.9}.tooltip.top{padding:5px 0;margin-top:-3px}.tooltip.right{padding:0 5px;margin-left:3px}.tooltip.bottom{padding:5px 0;margin-top:3px}.tooltip.left{padding:0 5px;margin-left:-3px}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;background-color:#000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-left .tooltip-arrow{right:5px;bottom:0;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-right .tooltip-arrow{bottom:0;left:5px;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000}.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-left .tooltip-arrow{top:0;right:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-right .tooltip-arrow{top:0;left:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.popover{position:absolute;top:0;left:0;z-index:1060;display:none;max-width:276px;padding:1px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-style:normal;font-weight:400;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;word-wrap:normal;white-space:normal;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.2);border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);box-shadow:0 5px 10px rgba(0,0,0,.2);line-break:auto}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}.popover-title{padding:8px 14px;margin:0;font-size:14px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:5px 5px 0 0}.popover-content{padding:9px 14px}.popover>.arrow,.popover>.arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}.popover>.arrow{border-width:11px}.popover>.arrow:after{content:"";border-width:10px}.popover.top>.arrow{bottom:-11px;left:50%;margin-left:-11px;border-top-color:#999;border-top-color:rgba(0,0,0,.25);border-bottom-width:0}.popover.top>.arrow:after{bottom:1px;margin-left:-10px;content:" ";border-top-color:#fff;border-bottom-width:0}.popover.right>.arrow{top:50%;left:-11px;margin-top:-11px;border-right-color:#999;border-right-color:rgba(0,0,0,.25);border-left-width:0}.popover.right>.arrow:after{bottom:-10px;left:1px;content:" ";border-right-color:#fff;border-left-width:0}.popover.bottom>.arrow{top:-11px;left:50%;margin-left:-11px;border-top-width:0;border-bottom-color:#999;border-bottom-color:rgba(0,0,0,.25)}.popover.bottom>.arrow:after{top:1px;margin-left:-10px;content:" ";border-top-width:0;border-bottom-color:#fff}.popover.left>.arrow{top:50%;right:-11px;margin-top:-11px;border-right-width:0;border-left-color:#999;border-left-color:rgba(0,0,0,.25)}.popover.left>.arrow:after{right:1px;bottom:-10px;content:" ";border-right-width:0;border-left-color:#fff}.carousel{position:relative}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner>.item{position:relative;display:none;-webkit-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.carousel-inner>.item>a>img,.carousel-inner>.item>img{line-height:1}@media all and (transform-3d),(-webkit-transform-3d){.carousel-inner>.item{-webkit-transition:-webkit-transform .6s ease-in-out;-o-transition:-o-transform .6s ease-in-out;transition:transform .6s ease-in-out;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000px;perspective:1000px}.carousel-inner>.item.active.right,.carousel-inner>.item.next{left:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}.carousel-inner>.item.active.left,.carousel-inner>.item.prev{left:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}.carousel-inner>.item.active,.carousel-inner>.item.next.left,.carousel-inner>.item.prev.right{left:0;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.prev{left:-100%}.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.active.left{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{position:absolute;top:0;bottom:0;left:0;width:15%;font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6);background-color:rgba(0,0,0,0);filter:alpha(opacity=50);opacity:.5}.carousel-control.left{background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,.0001)));background-image:linear-gradient(to right,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);background-repeat:repeat-x}.carousel-control.right{right:0;left:auto;background-image:-webkit-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.0001)),to(rgba(0,0,0,.5)));background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);background-repeat:repeat-x}.carousel-control:focus,.carousel-control:hover{color:#fff;text-decoration:none;filter:alpha(opacity=90);outline:0;opacity:.9}.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{position:absolute;top:50%;z-index:5;display:inline-block;margin-top:-10px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{left:50%;margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{right:50%;margin-right:-10px}.carousel-control .icon-next,.carousel-control .icon-prev{width:20px;height:20px;font-family:serif;line-height:1}.carousel-control .icon-prev:before{content:'\2039'}.carousel-control .icon-next:before{content:'\203a'}.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;padding-left:0;margin-left:-30%;text-align:center;list-style:none}.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;cursor:pointer;background-color:#000\9;background-color:rgba(0,0,0,0);border:1px solid #fff;border-radius:10px}.carousel-indicators .active{width:12px;height:12px;margin:0;background-color:#fff}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6)}.carousel-caption .btn{text-shadow:none}@media screen and (min-width:768px){.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{width:30px;height:30px;margin-top:-10px;font-size:30px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{margin-right:-10px}.carousel-caption{right:20%;left:20%;padding-bottom:30px}.carousel-indicators{bottom:20px}}.btn-group-vertical>.btn-group:after,.btn-group-vertical>.btn-group:before,.btn-toolbar:after,.btn-toolbar:before,.clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.dl-horizontal dd:after,.dl-horizontal dd:before,.form-horizontal .form-group:after,.form-horizontal .form-group:before,.modal-footer:after,.modal-footer:before,.modal-header:after,.modal-header:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.pager:after,.pager:before,.panel-body:after,.panel-body:before,.row:after,.row:before{display:table;content:" "}.btn-group-vertical>.btn-group:after,.btn-toolbar:after,.clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.modal-footer:after,.modal-header:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.pager:after,.panel-body:after,.row:after{clear:both}.center-block{display:block;margin-right:auto;margin-left:auto}.pull-right{float:right!important}.pull-left{float:left!important}.hide{display:none!important}.show{display:block!important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none!important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-lg,.visible-md,.visible-sm,.visible-xs{display:none!important}.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block{display:none!important}@media (max-width:767px){.visible-xs{display:block!important}table.visible-xs{display:table!important}tr.visible-xs{display:table-row!important}td.visible-xs,th.visible-xs{display:table-cell!important}}@media (max-width:767px){.visible-xs-block{display:block!important}}@media (max-width:767px){.visible-xs-inline{display:inline!important}}@media (max-width:767px){.visible-xs-inline-block{display:inline-block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block!important}table.visible-sm{display:table!important}tr.visible-sm{display:table-row!important}td.visible-sm,th.visible-sm{display:table-cell!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block!important}table.visible-md{display:table!important}tr.visible-md{display:table-row!important}td.visible-md,th.visible-md{display:table-cell!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block!important}}@media (min-width:1200px){.visible-lg{display:block!important}table.visible-lg{display:table!important}tr.visible-lg{display:table-row!important}td.visible-lg,th.visible-lg{display:table-cell!important}}@media (min-width:1200px){.visible-lg-block{display:block!important}}@media (min-width:1200px){.visible-lg-inline{display:inline!important}}@media (min-width:1200px){.visible-lg-inline-block{display:inline-block!important}}@media (max-width:767px){.hidden-xs{display:none!important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none!important}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none!important}}@media (min-width:1200px){.hidden-lg{display:none!important}}.visible-print{display:none!important}@media print{.visible-print{display:block!important}table.visible-print{display:table!important}tr.visible-print{display:table-row!important}td.visible-print,th.visible-print{display:table-cell!important}}.visible-print-block{display:none!important}@media print{.visible-print-block{display:block!important}}.visible-print-inline{display:none!important}@media print{.visible-print-inline{display:inline!important}}.visible-print-inline-block{display:none!important}@media print{.visible-print-inline-block{display:inline-block!important}}@media print{.hidden-print{display:none!important}}
        /*# sourceMappingURL=bootstrap.min.css.map */
    </style>

    <script type="text/javascript" >
        /*!
         * jQuery JavaScript Library v1.7.2
         * http://jquery.com/
         *
         * Copyright 2011, John Resig
         * Dual licensed under the MIT or GPL Version 2 licenses.
         * http://jquery.org/license
         *
         * Includes Sizzle.js
         * http://sizzlejs.com/
         * Copyright 2011, The Dojo Foundation
         * Released under the MIT, BSD, and GPL Licenses.
         *
         * Date: Wed Mar 21 12:46:34 2012 -0700
         */
        (function( window, undefined ) {

// Use the correct document accordingly with window argument (sandbox)
            var document = window.document,
                    navigator = window.navigator,
                    location = window.location;
            var jQuery = (function() {

// Define a local copy of jQuery
                var jQuery = function( selector, context ) {
                            // The jQuery object is actually just the init constructor 'enhanced'
                            return new jQuery.fn.init( selector, context, rootjQuery );
                        },

                // Map over jQuery in case of overwrite
                        _jQuery = window.jQuery,

                // Map over the $ in case of overwrite
                        _$ = window.$,

                // A central reference to the root jQuery(document)
                        rootjQuery,

                // A simple way to check for HTML strings or ID strings
                // Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
                        quickExpr = /^(?:[^#<]*(<[\w\W]+>)[^>]*$|#([\w\-]*)$)/,

                // Check if a string has a non-whitespace character in it
                        rnotwhite = /\S/,

                // Used for trimming whitespace
                        trimLeft = /^\s+/,
                        trimRight = /\s+$/,

                // Match a standalone tag
                        rsingleTag = /^<(\w+)\s*\/?>(?:<\/\1>)?$/,

                // JSON RegExp
                        rvalidchars = /^[\],:{}\s]*$/,
                        rvalidescape = /\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,
                        rvalidtokens = /"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,
                        rvalidbraces = /(?:^|:|,)(?:\s*\[)+/g,

                // Useragent RegExp
                        rwebkit = /(webkit)[ \/]([\w.]+)/,
                        ropera = /(opera)(?:.*version)?[ \/]([\w.]+)/,
                        rmsie = /(msie) ([\w.]+)/,
                        rmozilla = /(mozilla)(?:.*? rv:([\w.]+))?/,

                // Matches dashed string for camelizing
                        rdashAlpha = /-([a-z]|[0-9])/ig,
                        rmsPrefix = /^-ms-/,

                // Used by jQuery.camelCase as callback to replace()
                        fcamelCase = function( all, letter ) {
                            return ( letter + "" ).toUpperCase();
                        },

                // Keep a UserAgent string for use with jQuery.browser
                        userAgent = navigator.userAgent,

                // For matching the engine and version of the browser
                        browserMatch,

                // The deferred used on DOM ready
                        readyList,

                // The ready event handler
                        DOMContentLoaded,

                // Save a reference to some core methods
                        toString = Object.prototype.toString,
                        hasOwn = Object.prototype.hasOwnProperty,
                        push = Array.prototype.push,
                        slice = Array.prototype.slice,
                        trim = String.prototype.trim,
                        indexOf = Array.prototype.indexOf,

                // [[Class]] -> type pairs
                        class2type = {};

                jQuery.fn = jQuery.prototype = {
                    constructor: jQuery,
                    init: function( selector, context, rootjQuery ) {
                        var match, elem, ret, doc;

                        // Handle $(""), $(null), or $(undefined)
                        if ( !selector ) {
                            return this;
                        }

                        // Handle $(DOMElement)
                        if ( selector.nodeType ) {
                            this.context = this[0] = selector;
                            this.length = 1;
                            return this;
                        }

                        // The body element only exists once, optimize finding it
                        if ( selector === "body" && !context && document.body ) {
                            this.context = document;
                            this[0] = document.body;
                            this.selector = selector;
                            this.length = 1;
                            return this;
                        }

                        // Handle HTML strings
                        if ( typeof selector === "string" ) {
                            // Are we dealing with HTML string or an ID?
                            if ( selector.charAt(0) === "<" && selector.charAt( selector.length - 1 ) === ">" && selector.length >= 3 ) {
                                // Assume that strings that start and end with <> are HTML and skip the regex check
                                match = [ null, selector, null ];

                            } else {
                                match = quickExpr.exec( selector );
                            }

                            // Verify a match, and that no context was specified for #id
                            if ( match && (match[1] || !context) ) {

                                // HANDLE: $(html) -> $(array)
                                if ( match[1] ) {
                                    context = context instanceof jQuery ? context[0] : context;
                                    doc = ( context ? context.ownerDocument || context : document );

                                    // If a single string is passed in and it's a single tag
                                    // just do a createElement and skip the rest
                                    ret = rsingleTag.exec( selector );

                                    if ( ret ) {
                                        if ( jQuery.isPlainObject( context ) ) {
                                            selector = [ document.createElement( ret[1] ) ];
                                            jQuery.fn.attr.call( selector, context, true );

                                        } else {
                                            selector = [ doc.createElement( ret[1] ) ];
                                        }

                                    } else {
                                        ret = jQuery.buildFragment( [ match[1] ], [ doc ] );
                                        selector = ( ret.cacheable ? jQuery.clone(ret.fragment) : ret.fragment ).childNodes;
                                    }

                                    return jQuery.merge( this, selector );

                                    // HANDLE: $("#id")
                                } else {
                                    elem = document.getElementById( match[2] );

                                    // Check parentNode to catch when Blackberry 4.6 returns
                                    // nodes that are no longer in the document #6963
                                    if ( elem && elem.parentNode ) {
                                        // Handle the case where IE and Opera return items
                                        // by name instead of ID
                                        if ( elem.id !== match[2] ) {
                                            return rootjQuery.find( selector );
                                        }

                                        // Otherwise, we inject the element directly into the jQuery object
                                        this.length = 1;
                                        this[0] = elem;
                                    }

                                    this.context = document;
                                    this.selector = selector;
                                    return this;
                                }

                                // HANDLE: $(expr, $(...))
                            } else if ( !context || context.jquery ) {
                                return ( context || rootjQuery ).find( selector );

                                // HANDLE: $(expr, context)
                                // (which is just equivalent to: $(context).find(expr)
                            } else {
                                return this.constructor( context ).find( selector );
                            }

                            // HANDLE: $(function)
                            // Shortcut for document ready
                        } else if ( jQuery.isFunction( selector ) ) {
                            return rootjQuery.ready( selector );
                        }

                        if ( selector.selector !== undefined ) {
                            this.selector = selector.selector;
                            this.context = selector.context;
                        }

                        return jQuery.makeArray( selector, this );
                    },

                    // Start with an empty selector
                    selector: "",

                    // The current version of jQuery being used
                    jquery: "1.7.2",

                    // The default length of a jQuery object is 0
                    length: 0,

                    // The number of elements contained in the matched element set
                    size: function() {
                        return this.length;
                    },

                    toArray: function() {
                        return slice.call( this, 0 );
                    },

                    // Get the Nth element in the matched element set OR
                    // Get the whole matched element set as a clean array
                    get: function( num ) {
                        return num == null ?

                                // Return a 'clean' array
                                this.toArray() :

                                // Return just the object
                                ( num < 0 ? this[ this.length + num ] : this[ num ] );
                    },

                    // Take an array of elements and push it onto the stack
                    // (returning the new matched element set)
                    pushStack: function( elems, name, selector ) {
                        // Build a new jQuery matched element set
                        var ret = this.constructor();

                        if ( jQuery.isArray( elems ) ) {
                            push.apply( ret, elems );

                        } else {
                            jQuery.merge( ret, elems );
                        }

                        // Add the old object onto the stack (as a reference)
                        ret.prevObject = this;

                        ret.context = this.context;

                        if ( name === "find" ) {
                            ret.selector = this.selector + ( this.selector ? " " : "" ) + selector;
                        } else if ( name ) {
                            ret.selector = this.selector + "." + name + "(" + selector + ")";
                        }

                        // Return the newly-formed element set
                        return ret;
                    },

                    // Execute a callback for every element in the matched set.
                    // (You can seed the arguments with an array of args, but this is
                    // only used internally.)
                    each: function( callback, args ) {
                        return jQuery.each( this, callback, args );
                    },

                    ready: function( fn ) {
                        // Attach the listeners
                        jQuery.bindReady();

                        // Add the callback
                        readyList.add( fn );

                        return this;
                    },

                    eq: function( i ) {
                        i = +i;
                        return i === -1 ?
                                this.slice( i ) :
                                this.slice( i, i + 1 );
                    },

                    first: function() {
                        return this.eq( 0 );
                    },

                    last: function() {
                        return this.eq( -1 );
                    },

                    slice: function() {
                        return this.pushStack( slice.apply( this, arguments ),
                                "slice", slice.call(arguments).join(",") );
                    },

                    map: function( callback ) {
                        return this.pushStack( jQuery.map(this, function( elem, i ) {
                            return callback.call( elem, i, elem );
                        }));
                    },

                    end: function() {
                        return this.prevObject || this.constructor(null);
                    },

                    // For internal use only.
                    // Behaves like an Array's method, not like a jQuery method.
                    push: push,
                    sort: [].sort,
                    splice: [].splice
                };

// Give the init function the jQuery prototype for later instantiation
                jQuery.fn.init.prototype = jQuery.fn;

                jQuery.extend = jQuery.fn.extend = function() {
                    var options, name, src, copy, copyIsArray, clone,
                            target = arguments[0] || {},
                            i = 1,
                            length = arguments.length,
                            deep = false;

                    // Handle a deep copy situation
                    if ( typeof target === "boolean" ) {
                        deep = target;
                        target = arguments[1] || {};
                        // skip the boolean and the target
                        i = 2;
                    }

                    // Handle case when target is a string or something (possible in deep copy)
                    if ( typeof target !== "object" && !jQuery.isFunction(target) ) {
                        target = {};
                    }

                    // extend jQuery itself if only one argument is passed
                    if ( length === i ) {
                        target = this;
                        --i;
                    }

                    for ( ; i < length; i++ ) {
                        // Only deal with non-null/undefined values
                        if ( (options = arguments[ i ]) != null ) {
                            // Extend the base object
                            for ( name in options ) {
                                src = target[ name ];
                                copy = options[ name ];

                                // Prevent never-ending loop
                                if ( target === copy ) {
                                    continue;
                                }

                                // Recurse if we're merging plain objects or arrays
                                if ( deep && copy && ( jQuery.isPlainObject(copy) || (copyIsArray = jQuery.isArray(copy)) ) ) {
                                    if ( copyIsArray ) {
                                        copyIsArray = false;
                                        clone = src && jQuery.isArray(src) ? src : [];

                                    } else {
                                        clone = src && jQuery.isPlainObject(src) ? src : {};
                                    }

                                    // Never move original objects, clone them
                                    target[ name ] = jQuery.extend( deep, clone, copy );

                                    // Don't bring in undefined values
                                } else if ( copy !== undefined ) {
                                    target[ name ] = copy;
                                }
                            }
                        }
                    }

                    // Return the modified object
                    return target;
                };

                jQuery.extend({
                    noConflict: function( deep ) {
                        if ( window.$ === jQuery ) {
                            window.$ = _$;
                        }

                        if ( deep && window.jQuery === jQuery ) {
                            window.jQuery = _jQuery;
                        }

                        return jQuery;
                    },

                    // Is the DOM ready to be used? Set to true once it occurs.
                    isReady: false,

                    // A counter to track how many items to wait for before
                    // the ready event fires. See #6781
                    readyWait: 1,

                    // Hold (or release) the ready event
                    holdReady: function( hold ) {
                        if ( hold ) {
                            jQuery.readyWait++;
                        } else {
                            jQuery.ready( true );
                        }
                    },

                    // Handle when the DOM is ready
                    ready: function( wait ) {
                        // Either a released hold or an DOMready/load event and not yet ready
                        if ( (wait === true && !--jQuery.readyWait) || (wait !== true && !jQuery.isReady) ) {
                            // Make sure body exists, at least, in case IE gets a little overzealous (ticket #5443).
                            if ( !document.body ) {
                                return setTimeout( jQuery.ready, 1 );
                            }

                            // Remember that the DOM is ready
                            jQuery.isReady = true;

                            // If a normal DOM Ready event fired, decrement, and wait if need be
                            if ( wait !== true && --jQuery.readyWait > 0 ) {
                                return;
                            }

                            // If there are functions bound, to execute
                            readyList.fireWith( document, [ jQuery ] );

                            // Trigger any bound ready events
                            if ( jQuery.fn.trigger ) {
                                jQuery( document ).trigger( "ready" ).off( "ready" );
                            }
                        }
                    },

                    bindReady: function() {
                        if ( readyList ) {
                            return;
                        }

                        readyList = jQuery.Callbacks( "once memory" );

                        // Catch cases where $(document).ready() is called after the
                        // browser event has already occurred.
                        if ( document.readyState === "complete" ) {
                            // Handle it asynchronously to allow scripts the opportunity to delay ready
                            return setTimeout( jQuery.ready, 1 );
                        }

                        // Mozilla, Opera and webkit nightlies currently support this event
                        if ( document.addEventListener ) {
                            // Use the handy event callback
                            document.addEventListener( "DOMContentLoaded", DOMContentLoaded, false );

                            // A fallback to window.onload, that will always work
                            window.addEventListener( "load", jQuery.ready, false );

                            // If IE event model is used
                        } else if ( document.attachEvent ) {
                            // ensure firing before onload,
                            // maybe late but safe also for iframes
                            document.attachEvent( "onreadystatechange", DOMContentLoaded );

                            // A fallback to window.onload, that will always work
                            window.attachEvent( "onload", jQuery.ready );

                            // If IE and not a frame
                            // continually check to see if the document is ready
                            var toplevel = false;

                            try {
                                toplevel = window.frameElement == null;
                            } catch(e) {}

                            if ( document.documentElement.doScroll && toplevel ) {
                                doScrollCheck();
                            }
                        }
                    },

                    // See test/unit/core.js for details concerning isFunction.
                    // Since version 1.3, DOM methods and functions like alert
                    // aren't supported. They return false on IE (#2968).
                    isFunction: function( obj ) {
                        return jQuery.type(obj) === "function";
                    },

                    isArray: Array.isArray || function( obj ) {
                        return jQuery.type(obj) === "array";
                    },

                    isWindow: function( obj ) {
                        return obj != null && obj == obj.window;
                    },

                    isNumeric: function( obj ) {
                        return !isNaN( parseFloat(obj) ) && isFinite( obj );
                    },

                    type: function( obj ) {
                        return obj == null ?
                                String( obj ) :
                        class2type[ toString.call(obj) ] || "object";
                    },

                    isPlainObject: function( obj ) {
                        // Must be an Object.
                        // Because of IE, we also have to check the presence of the constructor property.
                        // Make sure that DOM nodes and window objects don't pass through, as well
                        if ( !obj || jQuery.type(obj) !== "object" || obj.nodeType || jQuery.isWindow( obj ) ) {
                            return false;
                        }

                        try {
                            // Not own constructor property must be Object
                            if ( obj.constructor &&
                                    !hasOwn.call(obj, "constructor") &&
                                    !hasOwn.call(obj.constructor.prototype, "isPrototypeOf") ) {
                                return false;
                            }
                        } catch ( e ) {
                            // IE8,9 Will throw exceptions on certain host objects #9897
                            return false;
                        }

                        // Own properties are enumerated firstly, so to speed up,
                        // if last one is own, then all properties are own.

                        var key;
                        for ( key in obj ) {}

                        return key === undefined || hasOwn.call( obj, key );
                    },

                    isEmptyObject: function( obj ) {
                        for ( var name in obj ) {
                            return false;
                        }
                        return true;
                    },

                    error: function( msg ) {
                        throw new Error( msg );
                    },

                    parseJSON: function( data ) {
                        if ( typeof data !== "string" || !data ) {
                            return null;
                        }

                        // Make sure leading/trailing whitespace is removed (IE can't handle it)
                        data = jQuery.trim( data );

                        // Attempt to parse using the native JSON parser first
                        if ( window.JSON && window.JSON.parse ) {
                            return window.JSON.parse( data );
                        }

                        // Make sure the incoming data is actual JSON
                        // Logic borrowed from http://json.org/json2.js
                        if ( rvalidchars.test( data.replace( rvalidescape, "@" )
                                        .replace( rvalidtokens, "]" )
                                        .replace( rvalidbraces, "")) ) {

                            return ( new Function( "return " + data ) )();

                        }
                        jQuery.error( "Invalid JSON: " + data );
                    },

                    // Cross-browser xml parsing
                    parseXML: function( data ) {
                        if ( typeof data !== "string" || !data ) {
                            return null;
                        }
                        var xml, tmp;
                        try {
                            if ( window.DOMParser ) { // Standard
                                tmp = new DOMParser();
                                xml = tmp.parseFromString( data , "text/xml" );
                            } else { // IE
                                xml = new ActiveXObject( "Microsoft.XMLDOM" );
                                xml.async = "false";
                                xml.loadXML( data );
                            }
                        } catch( e ) {
                            xml = undefined;
                        }
                        if ( !xml || !xml.documentElement || xml.getElementsByTagName( "parsererror" ).length ) {
                            jQuery.error( "Invalid XML: " + data );
                        }
                        return xml;
                    },

                    noop: function() {},

                    // Evaluates a script in a global context
                    // Workarounds based on findings by Jim Driscoll
                    // http://weblogs.java.net/blog/driscoll/archive/2009/09/08/eval-javascript-global-context
                    globalEval: function( data ) {
                        if ( data && rnotwhite.test( data ) ) {
                            // We use execScript on Internet Explorer
                            // We use an anonymous function so that context is window
                            // rather than jQuery in Firefox
                            ( window.execScript || function( data ) {
                                window[ "eval" ].call( window, data );
                            } )( data );
                        }
                    },

                    // Convert dashed to camelCase; used by the css and data modules
                    // Microsoft forgot to hump their vendor prefix (#9572)
                    camelCase: function( string ) {
                        return string.replace( rmsPrefix, "ms-" ).replace( rdashAlpha, fcamelCase );
                    },

                    nodeName: function( elem, name ) {
                        return elem.nodeName && elem.nodeName.toUpperCase() === name.toUpperCase();
                    },

                    // args is for internal usage only
                    each: function( object, callback, args ) {
                        var name, i = 0,
                                length = object.length,
                                isObj = length === undefined || jQuery.isFunction( object );

                        if ( args ) {
                            if ( isObj ) {
                                for ( name in object ) {
                                    if ( callback.apply( object[ name ], args ) === false ) {
                                        break;
                                    }
                                }
                            } else {
                                for ( ; i < length; ) {
                                    if ( callback.apply( object[ i++ ], args ) === false ) {
                                        break;
                                    }
                                }
                            }

                            // A special, fast, case for the most common use of each
                        } else {
                            if ( isObj ) {
                                for ( name in object ) {
                                    if ( callback.call( object[ name ], name, object[ name ] ) === false ) {
                                        break;
                                    }
                                }
                            } else {
                                for ( ; i < length; ) {
                                    if ( callback.call( object[ i ], i, object[ i++ ] ) === false ) {
                                        break;
                                    }
                                }
                            }
                        }

                        return object;
                    },

                    // Use native String.trim function wherever possible
                    trim: trim ?
                            function( text ) {
                                return text == null ?
                                        "" :
                                        trim.call( text );
                            } :

                            // Otherwise use our own trimming functionality
                            function( text ) {
                                return text == null ?
                                        "" :
                                        text.toString().replace( trimLeft, "" ).replace( trimRight, "" );
                            },

                    // results is for internal usage only
                    makeArray: function( array, results ) {
                        var ret = results || [];

                        if ( array != null ) {
                            // The window, strings (and functions) also have 'length'
                            // Tweaked logic slightly to handle Blackberry 4.7 RegExp issues #6930
                            var type = jQuery.type( array );

                            if ( array.length == null || type === "string" || type === "function" || type === "regexp" || jQuery.isWindow( array ) ) {
                                push.call( ret, array );
                            } else {
                                jQuery.merge( ret, array );
                            }
                        }

                        return ret;
                    },

                    inArray: function( elem, array, i ) {
                        var len;

                        if ( array ) {
                            if ( indexOf ) {
                                return indexOf.call( array, elem, i );
                            }

                            len = array.length;
                            i = i ? i < 0 ? Math.max( 0, len + i ) : i : 0;

                            for ( ; i < len; i++ ) {
                                // Skip accessing in sparse arrays
                                if ( i in array && array[ i ] === elem ) {
                                    return i;
                                }
                            }
                        }

                        return -1;
                    },

                    merge: function( first, second ) {
                        var i = first.length,
                                j = 0;

                        if ( typeof second.length === "number" ) {
                            for ( var l = second.length; j < l; j++ ) {
                                first[ i++ ] = second[ j ];
                            }

                        } else {
                            while ( second[j] !== undefined ) {
                                first[ i++ ] = second[ j++ ];
                            }
                        }

                        first.length = i;

                        return first;
                    },

                    grep: function( elems, callback, inv ) {
                        var ret = [], retVal;
                        inv = !!inv;

                        // Go through the array, only saving the items
                        // that pass the validator function
                        for ( var i = 0, length = elems.length; i < length; i++ ) {
                            retVal = !!callback( elems[ i ], i );
                            if ( inv !== retVal ) {
                                ret.push( elems[ i ] );
                            }
                        }

                        return ret;
                    },

                    // arg is for internal usage only
                    map: function( elems, callback, arg ) {
                        var value, key, ret = [],
                                i = 0,
                                length = elems.length,
                        // jquery objects are treated as arrays
                                isArray = elems instanceof jQuery || length !== undefined && typeof length === "number" && ( ( length > 0 && elems[ 0 ] && elems[ length -1 ] ) || length === 0 || jQuery.isArray( elems ) ) ;

                        // Go through the array, translating each of the items to their
                        if ( isArray ) {
                            for ( ; i < length; i++ ) {
                                value = callback( elems[ i ], i, arg );

                                if ( value != null ) {
                                    ret[ ret.length ] = value;
                                }
                            }

                            // Go through every key on the object,
                        } else {
                            for ( key in elems ) {
                                value = callback( elems[ key ], key, arg );

                                if ( value != null ) {
                                    ret[ ret.length ] = value;
                                }
                            }
                        }

                        // Flatten any nested arrays
                        return ret.concat.apply( [], ret );
                    },

                    // A global GUID counter for objects
                    guid: 1,

                    // Bind a function to a context, optionally partially applying any
                    // arguments.
                    proxy: function( fn, context ) {
                        if ( typeof context === "string" ) {
                            var tmp = fn[ context ];
                            context = fn;
                            fn = tmp;
                        }

                        // Quick check to determine if target is callable, in the spec
                        // this throws a TypeError, but we will just return undefined.
                        if ( !jQuery.isFunction( fn ) ) {
                            return undefined;
                        }

                        // Simulated bind
                        var args = slice.call( arguments, 2 ),
                                proxy = function() {
                                    return fn.apply( context, args.concat( slice.call( arguments ) ) );
                                };

                        // Set the guid of unique handler to the same of original handler, so it can be removed
                        proxy.guid = fn.guid = fn.guid || proxy.guid || jQuery.guid++;

                        return proxy;
                    },

                    // Mutifunctional method to get and set values to a collection
                    // The value/s can optionally be executed if it's a function
                    access: function( elems, fn, key, value, chainable, emptyGet, pass ) {
                        var exec,
                                bulk = key == null,
                                i = 0,
                                length = elems.length;

                        // Sets many values
                        if ( key && typeof key === "object" ) {
                            for ( i in key ) {
                                jQuery.access( elems, fn, i, key[i], 1, emptyGet, value );
                            }
                            chainable = 1;

                            // Sets one value
                        } else if ( value !== undefined ) {
                            // Optionally, function values get executed if exec is true
                            exec = pass === undefined && jQuery.isFunction( value );

                            if ( bulk ) {
                                // Bulk operations only iterate when executing function values
                                if ( exec ) {
                                    exec = fn;
                                    fn = function( elem, key, value ) {
                                        return exec.call( jQuery( elem ), value );
                                    };

                                    // Otherwise they run against the entire set
                                } else {
                                    fn.call( elems, value );
                                    fn = null;
                                }
                            }

                            if ( fn ) {
                                for (; i < length; i++ ) {
                                    fn( elems[i], key, exec ? value.call( elems[i], i, fn( elems[i], key ) ) : value, pass );
                                }
                            }

                            chainable = 1;
                        }

                        return chainable ?
                                elems :

                                // Gets
                                bulk ?
                                        fn.call( elems ) :
                                        length ? fn( elems[0], key ) : emptyGet;
                    },

                    now: function() {
                        return ( new Date() ).getTime();
                    },

                    // Use of jQuery.browser is frowned upon.
                    // More details: http://docs.jquery.com/Utilities/jQuery.browser
                    uaMatch: function( ua ) {
                        ua = ua.toLowerCase();

                        var match = rwebkit.exec( ua ) ||
                                ropera.exec( ua ) ||
                                rmsie.exec( ua ) ||
                                ua.indexOf("compatible") < 0 && rmozilla.exec( ua ) ||
                                [];

                        return { browser: match[1] || "", version: match[2] || "0" };
                    },

                    sub: function() {
                        function jQuerySub( selector, context ) {
                            return new jQuerySub.fn.init( selector, context );
                        }
                        jQuery.extend( true, jQuerySub, this );
                        jQuerySub.superclass = this;
                        jQuerySub.fn = jQuerySub.prototype = this();
                        jQuerySub.fn.constructor = jQuerySub;
                        jQuerySub.sub = this.sub;
                        jQuerySub.fn.init = function init( selector, context ) {
                            if ( context && context instanceof jQuery && !(context instanceof jQuerySub) ) {
                                context = jQuerySub( context );
                            }

                            return jQuery.fn.init.call( this, selector, context, rootjQuerySub );
                        };
                        jQuerySub.fn.init.prototype = jQuerySub.fn;
                        var rootjQuerySub = jQuerySub(document);
                        return jQuerySub;
                    },

                    browser: {}
                });

// Populate the class2type map
                jQuery.each("Boolean Number String Function Array Date RegExp Object".split(" "), function(i, name) {
                    class2type[ "[object " + name + "]" ] = name.toLowerCase();
                });

                browserMatch = jQuery.uaMatch( userAgent );
                if ( browserMatch.browser ) {
                    jQuery.browser[ browserMatch.browser ] = true;
                    jQuery.browser.version = browserMatch.version;
                }

// Deprecated, use jQuery.browser.webkit instead
                if ( jQuery.browser.webkit ) {
                    jQuery.browser.safari = true;
                }

// IE doesn't match non-breaking spaces with \s
                if ( rnotwhite.test( "\xA0" ) ) {
                    trimLeft = /^[\s\xA0]+/;
                    trimRight = /[\s\xA0]+$/;
                }

// All jQuery objects should point back to these
                rootjQuery = jQuery(document);

// Cleanup functions for the document ready method
                if ( document.addEventListener ) {
                    DOMContentLoaded = function() {
                        document.removeEventListener( "DOMContentLoaded", DOMContentLoaded, false );
                        jQuery.ready();
                    };

                } else if ( document.attachEvent ) {
                    DOMContentLoaded = function() {
                        // Make sure body exists, at least, in case IE gets a little overzealous (ticket #5443).
                        if ( document.readyState === "complete" ) {
                            document.detachEvent( "onreadystatechange", DOMContentLoaded );
                            jQuery.ready();
                        }
                    };
                }

// The DOM ready check for Internet Explorer
                function doScrollCheck() {
                    if ( jQuery.isReady ) {
                        return;
                    }

                    try {
                        // If IE is used, use the trick by Diego Perini
                        // http://javascript.nwbox.com/IEContentLoaded/
                        document.documentElement.doScroll("left");
                    } catch(e) {
                        setTimeout( doScrollCheck, 1 );
                        return;
                    }

                    // and execute any waiting functions
                    jQuery.ready();
                }

                return jQuery;

            })();


// String to Object flags format cache
            var flagsCache = {};

// Convert String-formatted flags into Object-formatted ones and store in cache
            function createFlags( flags ) {
                var object = flagsCache[ flags ] = {},
                        i, length;
                flags = flags.split( /\s+/ );
                for ( i = 0, length = flags.length; i < length; i++ ) {
                    object[ flags[i] ] = true;
                }
                return object;
            }

            /*
             * Create a callback list using the following parameters:
             *
             *	flags:	an optional list of space-separated flags that will change how
             *			the callback list behaves
             *
             * By default a callback list will act like an event callback list and can be
             * "fired" multiple times.
             *
             * Possible flags:
             *
             *	once:			will ensure the callback list can only be fired once (like a Deferred)
             *
             *	memory:			will keep track of previous values and will call any callback added
             *					after the list has been fired right away with the latest "memorized"
             *					values (like a Deferred)
             *
             *	unique:			will ensure a callback can only be added once (no duplicate in the list)
             *
             *	stopOnFalse:	interrupt callings when a callback returns false
             *
             */
            jQuery.Callbacks = function( flags ) {

                // Convert flags from String-formatted to Object-formatted
                // (we check in cache first)
                flags = flags ? ( flagsCache[ flags ] || createFlags( flags ) ) : {};

                var // Actual callback list
                        list = [],
                // Stack of fire calls for repeatable lists
                        stack = [],
                // Last fire value (for non-forgettable lists)
                        memory,
                // Flag to know if list was already fired
                        fired,
                // Flag to know if list is currently firing
                        firing,
                // First callback to fire (used internally by add and fireWith)
                        firingStart,
                // End of the loop when firing
                        firingLength,
                // Index of currently firing callback (modified by remove if needed)
                        firingIndex,
                // Add one or several callbacks to the list
                        add = function( args ) {
                            var i,
                                    length,
                                    elem,
                                    type,
                                    actual;
                            for ( i = 0, length = args.length; i < length; i++ ) {
                                elem = args[ i ];
                                type = jQuery.type( elem );
                                if ( type === "array" ) {
                                    // Inspect recursively
                                    add( elem );
                                } else if ( type === "function" ) {
                                    // Add if not in unique mode and callback is not in
                                    if ( !flags.unique || !self.has( elem ) ) {
                                        list.push( elem );
                                    }
                                }
                            }
                        },
                // Fire callbacks
                        fire = function( context, args ) {
                            args = args || [];
                            memory = !flags.memory || [ context, args ];
                            fired = true;
                            firing = true;
                            firingIndex = firingStart || 0;
                            firingStart = 0;
                            firingLength = list.length;
                            for ( ; list && firingIndex < firingLength; firingIndex++ ) {
                                if ( list[ firingIndex ].apply( context, args ) === false && flags.stopOnFalse ) {
                                    memory = true; // Mark as halted
                                    break;
                                }
                            }
                            firing = false;
                            if ( list ) {
                                if ( !flags.once ) {
                                    if ( stack && stack.length ) {
                                        memory = stack.shift();
                                        self.fireWith( memory[ 0 ], memory[ 1 ] );
                                    }
                                } else if ( memory === true ) {
                                    self.disable();
                                } else {
                                    list = [];
                                }
                            }
                        },
                // Actual Callbacks object
                        self = {
                            // Add a callback or a collection of callbacks to the list
                            add: function() {
                                if ( list ) {
                                    var length = list.length;
                                    add( arguments );
                                    // Do we need to add the callbacks to the
                                    // current firing batch?
                                    if ( firing ) {
                                        firingLength = list.length;
                                        // With memory, if we're not firing then
                                        // we should call right away, unless previous
                                        // firing was halted (stopOnFalse)
                                    } else if ( memory && memory !== true ) {
                                        firingStart = length;
                                        fire( memory[ 0 ], memory[ 1 ] );
                                    }
                                }
                                return this;
                            },
                            // Remove a callback from the list
                            remove: function() {
                                if ( list ) {
                                    var args = arguments,
                                            argIndex = 0,
                                            argLength = args.length;
                                    for ( ; argIndex < argLength ; argIndex++ ) {
                                        for ( var i = 0; i < list.length; i++ ) {
                                            if ( args[ argIndex ] === list[ i ] ) {
                                                // Handle firingIndex and firingLength
                                                if ( firing ) {
                                                    if ( i <= firingLength ) {
                                                        firingLength--;
                                                        if ( i <= firingIndex ) {
                                                            firingIndex--;
                                                        }
                                                    }
                                                }
                                                // Remove the element
                                                list.splice( i--, 1 );
                                                // If we have some unicity property then
                                                // we only need to do this once
                                                if ( flags.unique ) {
                                                    break;
                                                }
                                            }
                                        }
                                    }
                                }
                                return this;
                            },
                            // Control if a given callback is in the list
                            has: function( fn ) {
                                if ( list ) {
                                    var i = 0,
                                            length = list.length;
                                    for ( ; i < length; i++ ) {
                                        if ( fn === list[ i ] ) {
                                            return true;
                                        }
                                    }
                                }
                                return false;
                            },
                            // Remove all callbacks from the list
                            empty: function() {
                                list = [];
                                return this;
                            },
                            // Have the list do nothing anymore
                            disable: function() {
                                list = stack = memory = undefined;
                                return this;
                            },
                            // Is it disabled?
                            disabled: function() {
                                return !list;
                            },
                            // Lock the list in its current state
                            lock: function() {
                                stack = undefined;
                                if ( !memory || memory === true ) {
                                    self.disable();
                                }
                                return this;
                            },
                            // Is it locked?
                            locked: function() {
                                return !stack;
                            },
                            // Call all callbacks with the given context and arguments
                            fireWith: function( context, args ) {
                                if ( stack ) {
                                    if ( firing ) {
                                        if ( !flags.once ) {
                                            stack.push( [ context, args ] );
                                        }
                                    } else if ( !( flags.once && memory ) ) {
                                        fire( context, args );
                                    }
                                }
                                return this;
                            },
                            // Call all the callbacks with the given arguments
                            fire: function() {
                                self.fireWith( this, arguments );
                                return this;
                            },
                            // To know if the callbacks have already been called at least once
                            fired: function() {
                                return !!fired;
                            }
                        };

                return self;
            };




            var // Static reference to slice
                    sliceDeferred = [].slice;

            jQuery.extend({

                Deferred: function( func ) {
                    var doneList = jQuery.Callbacks( "once memory" ),
                            failList = jQuery.Callbacks( "once memory" ),
                            progressList = jQuery.Callbacks( "memory" ),
                            state = "pending",
                            lists = {
                                resolve: doneList,
                                reject: failList,
                                notify: progressList
                            },
                            promise = {
                                done: doneList.add,
                                fail: failList.add,
                                progress: progressList.add,

                                state: function() {
                                    return state;
                                },

                                // Deprecated
                                isResolved: doneList.fired,
                                isRejected: failList.fired,

                                then: function( doneCallbacks, failCallbacks, progressCallbacks ) {
                                    deferred.done( doneCallbacks ).fail( failCallbacks ).progress( progressCallbacks );
                                    return this;
                                },
                                always: function() {
                                    deferred.done.apply( deferred, arguments ).fail.apply( deferred, arguments );
                                    return this;
                                },
                                pipe: function( fnDone, fnFail, fnProgress ) {
                                    return jQuery.Deferred(function( newDefer ) {
                                        jQuery.each( {
                                            done: [ fnDone, "resolve" ],
                                            fail: [ fnFail, "reject" ],
                                            progress: [ fnProgress, "notify" ]
                                        }, function( handler, data ) {
                                            var fn = data[ 0 ],
                                                    action = data[ 1 ],
                                                    returned;
                                            if ( jQuery.isFunction( fn ) ) {
                                                deferred[ handler ](function() {
                                                    returned = fn.apply( this, arguments );
                                                    if ( returned && jQuery.isFunction( returned.promise ) ) {
                                                        returned.promise().then( newDefer.resolve, newDefer.reject, newDefer.notify );
                                                    } else {
                                                        newDefer[ action + "With" ]( this === deferred ? newDefer : this, [ returned ] );
                                                    }
                                                });
                                            } else {
                                                deferred[ handler ]( newDefer[ action ] );
                                            }
                                        });
                                    }).promise();
                                },
                                // Get a promise for this deferred
                                // If obj is provided, the promise aspect is added to the object
                                promise: function( obj ) {
                                    if ( obj == null ) {
                                        obj = promise;
                                    } else {
                                        for ( var key in promise ) {
                                            obj[ key ] = promise[ key ];
                                        }
                                    }
                                    return obj;
                                }
                            },
                            deferred = promise.promise({}),
                            key;

                    for ( key in lists ) {
                        deferred[ key ] = lists[ key ].fire;
                        deferred[ key + "With" ] = lists[ key ].fireWith;
                    }

                    // Handle state
                    deferred.done( function() {
                        state = "resolved";
                    }, failList.disable, progressList.lock ).fail( function() {
                        state = "rejected";
                    }, doneList.disable, progressList.lock );

                    // Call given func if any
                    if ( func ) {
                        func.call( deferred, deferred );
                    }

                    // All done!
                    return deferred;
                },

                // Deferred helper
                when: function( firstParam ) {
                    var args = sliceDeferred.call( arguments, 0 ),
                            i = 0,
                            length = args.length,
                            pValues = new Array( length ),
                            count = length,
                            pCount = length,
                            deferred = length <= 1 && firstParam && jQuery.isFunction( firstParam.promise ) ?
                                    firstParam :
                                    jQuery.Deferred(),
                            promise = deferred.promise();
                    function resolveFunc( i ) {
                        return function( value ) {
                            args[ i ] = arguments.length > 1 ? sliceDeferred.call( arguments, 0 ) : value;
                            if ( !( --count ) ) {
                                deferred.resolveWith( deferred, args );
                            }
                        };
                    }
                    function progressFunc( i ) {
                        return function( value ) {
                            pValues[ i ] = arguments.length > 1 ? sliceDeferred.call( arguments, 0 ) : value;
                            deferred.notifyWith( promise, pValues );
                        };
                    }
                    if ( length > 1 ) {
                        for ( ; i < length; i++ ) {
                            if ( args[ i ] && args[ i ].promise && jQuery.isFunction( args[ i ].promise ) ) {
                                args[ i ].promise().then( resolveFunc(i), deferred.reject, progressFunc(i) );
                            } else {
                                --count;
                            }
                        }
                        if ( !count ) {
                            deferred.resolveWith( deferred, args );
                        }
                    } else if ( deferred !== firstParam ) {
                        deferred.resolveWith( deferred, length ? [ firstParam ] : [] );
                    }
                    return promise;
                }
            });




            jQuery.support = (function() {

                var support,
                        all,
                        a,
                        select,
                        opt,
                        input,
                        fragment,
                        tds,
                        events,
                        eventName,
                        i,
                        isSupported,
                        div = document.createElement( "div" ),
                        documentElement = document.documentElement;

                // Preliminary tests
                div.setAttribute("className", "t");
                div.innerHTML = "   <link/><table></table><a href='/a' style='top:1px;float:left;opacity:.55;'>a</a><input type='checkbox'/>";

                all = div.getElementsByTagName( "*" );
                a = div.getElementsByTagName( "a" )[ 0 ];

                // Can't get basic test support
                if ( !all || !all.length || !a ) {
                    return {};
                }

                // First batch of supports tests
                select = document.createElement( "select" );
                opt = select.appendChild( document.createElement("option") );
                input = div.getElementsByTagName( "input" )[ 0 ];

                support = {
                    // IE strips leading whitespace when .innerHTML is used
                    leadingWhitespace: ( div.firstChild.nodeType === 3 ),

                    // Make sure that tbody elements aren't automatically inserted
                    // IE will insert them into empty tables
                    tbody: !div.getElementsByTagName("tbody").length,

                    // Make sure that link elements get serialized correctly by innerHTML
                    // This requires a wrapper element in IE
                    htmlSerialize: !!div.getElementsByTagName("link").length,

                    // Get the style information from getAttribute
                    // (IE uses .cssText instead)
                    style: /top/.test( a.getAttribute("style") ),

                    // Make sure that URLs aren't manipulated
                    // (IE normalizes it by default)
                    hrefNormalized: ( a.getAttribute("href") === "/a" ),

                    // Make sure that element opacity exists
                    // (IE uses filter instead)
                    // Use a regex to work around a WebKit issue. See #5145
                    opacity: /^0.55/.test( a.style.opacity ),

                    // Verify style float existence
                    // (IE uses styleFloat instead of cssFloat)
                    cssFloat: !!a.style.cssFloat,

                    // Make sure that if no value is specified for a checkbox
                    // that it defaults to "on".
                    // (WebKit defaults to "" instead)
                    checkOn: ( input.value === "on" ),

                    // Make sure that a selected-by-default option has a working selected property.
                    // (WebKit defaults to false instead of true, IE too, if it's in an optgroup)
                    optSelected: opt.selected,

                    // Test setAttribute on camelCase class. If it works, we need attrFixes when doing get/setAttribute (ie6/7)
                    getSetAttribute: div.className !== "t",

                    // Tests for enctype support on a form(#6743)
                    enctype: !!document.createElement("form").enctype,

                    // Makes sure cloning an html5 element does not cause problems
                    // Where outerHTML is undefined, this still works
                    html5Clone: document.createElement("nav").cloneNode( true ).outerHTML !== "<:nav></:nav>",

                    // Will be defined later
                    submitBubbles: true,
                    changeBubbles: true,
                    focusinBubbles: false,
                    deleteExpando: true,
                    noCloneEvent: true,
                    inlineBlockNeedsLayout: false,
                    shrinkWrapBlocks: false,
                    reliableMarginRight: true,
                    pixelMargin: true
                };

                // jQuery.boxModel DEPRECATED in 1.3, use jQuery.support.boxModel instead
                jQuery.boxModel = support.boxModel = (document.compatMode === "CSS1Compat");

                // Make sure checked status is properly cloned
                input.checked = true;
                support.noCloneChecked = input.cloneNode( true ).checked;

                // Make sure that the options inside disabled selects aren't marked as disabled
                // (WebKit marks them as disabled)
                select.disabled = true;
                support.optDisabled = !opt.disabled;

                // Test to see if it's possible to delete an expando from an element
                // Fails in Internet Explorer
                try {
                    delete div.test;
                } catch( e ) {
                    support.deleteExpando = false;
                }

                if ( !div.addEventListener && div.attachEvent && div.fireEvent ) {
                    div.attachEvent( "onclick", function() {
                        // Cloning a node shouldn't copy over any
                        // bound event handlers (IE does this)
                        support.noCloneEvent = false;
                    });
                    div.cloneNode( true ).fireEvent( "onclick" );
                }

                // Check if a radio maintains its value
                // after being appended to the DOM
                input = document.createElement("input");
                input.value = "t";
                input.setAttribute("type", "radio");
                support.radioValue = input.value === "t";

                input.setAttribute("checked", "checked");

                // #11217 - WebKit loses check when the name is after the checked attribute
                input.setAttribute( "name", "t" );

                div.appendChild( input );
                fragment = document.createDocumentFragment();
                fragment.appendChild( div.lastChild );

                // WebKit doesn't clone checked state correctly in fragments
                support.checkClone = fragment.cloneNode( true ).cloneNode( true ).lastChild.checked;

                // Check if a disconnected checkbox will retain its checked
                // value of true after appended to the DOM (IE6/7)
                support.appendChecked = input.checked;

                fragment.removeChild( input );
                fragment.appendChild( div );

                // Technique from Juriy Zaytsev
                // http://perfectionkills.com/detecting-event-support-without-browser-sniffing/
                // We only care about the case where non-standard event systems
                // are used, namely in IE. Short-circuiting here helps us to
                // avoid an eval call (in setAttribute) which can cause CSP
                // to go haywire. See: https://developer.mozilla.org/en/Security/CSP
                if ( div.attachEvent ) {
                    for ( i in {
                        submit: 1,
                        change: 1,
                        focusin: 1
                    }) {
                        eventName = "on" + i;
                        isSupported = ( eventName in div );
                        if ( !isSupported ) {
                            div.setAttribute( eventName, "return;" );
                            isSupported = ( typeof div[ eventName ] === "function" );
                        }
                        support[ i + "Bubbles" ] = isSupported;
                    }
                }

                fragment.removeChild( div );

                // Null elements to avoid leaks in IE
                fragment = select = opt = div = input = null;

                // Run tests that need a body at doc ready
                jQuery(function() {
                    var container, outer, inner, table, td, offsetSupport,
                            marginDiv, conMarginTop, style, html, positionTopLeftWidthHeight,
                            paddingMarginBorderVisibility, paddingMarginBorder,
                            body = document.getElementsByTagName("body")[0];

                    if ( !body ) {
                        // Return for frameset docs that don't have a body
                        return;
                    }

                    conMarginTop = 1;
                    paddingMarginBorder = "padding:0;margin:0;border:";
                    positionTopLeftWidthHeight = "position:absolute;top:0;left:0;width:1px;height:1px;";
                    paddingMarginBorderVisibility = paddingMarginBorder + "0;visibility:hidden;";
                    style = "style='" + positionTopLeftWidthHeight + paddingMarginBorder + "5px solid #000;";
                    html = "<div " + style + "display:block;'><div style='" + paddingMarginBorder + "0;display:block;overflow:hidden;'></div></div>" +
                            "<table " + style + "' cellpadding='0' cellspacing='0'>" +
                            "<tr><td></td></tr></table>";

                    container = document.createElement("div");
                    container.style.cssText = paddingMarginBorderVisibility + "width:0;height:0;position:static;top:0;margin-top:" + conMarginTop + "px";
                    body.insertBefore( container, body.firstChild );

                    // Construct the test element
                    div = document.createElement("div");
                    container.appendChild( div );

                    // Check if table cells still have offsetWidth/Height when they are set
                    // to display:none and there are still other visible table cells in a
                    // table row; if so, offsetWidth/Height are not reliable for use when
                    // determining if an element has been hidden directly using
                    // display:none (it is still safe to use offsets if a parent element is
                    // hidden; don safety goggles and see bug #4512 for more information).
                    // (only IE 8 fails this test)
                    div.innerHTML = "<table><tr><td style='" + paddingMarginBorder + "0;display:none'></td><td>t</td></tr></table>";
                    tds = div.getElementsByTagName( "td" );
                    isSupported = ( tds[ 0 ].offsetHeight === 0 );

                    tds[ 0 ].style.display = "";
                    tds[ 1 ].style.display = "none";

                    // Check if empty table cells still have offsetWidth/Height
                    // (IE <= 8 fail this test)
                    support.reliableHiddenOffsets = isSupported && ( tds[ 0 ].offsetHeight === 0 );

                    // Check if div with explicit width and no margin-right incorrectly
                    // gets computed margin-right based on width of container. For more
                    // info see bug #3333
                    // Fails in WebKit before Feb 2011 nightlies
                    // WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right
                    if ( window.getComputedStyle ) {
                        div.innerHTML = "";
                        marginDiv = document.createElement( "div" );
                        marginDiv.style.width = "0";
                        marginDiv.style.marginRight = "0";
                        div.style.width = "2px";
                        div.appendChild( marginDiv );
                        support.reliableMarginRight =
                                ( parseInt( ( window.getComputedStyle( marginDiv, null ) || { marginRight: 0 } ).marginRight, 10 ) || 0 ) === 0;
                    }

                    if ( typeof div.style.zoom !== "undefined" ) {
                        // Check if natively block-level elements act like inline-block
                        // elements when setting their display to 'inline' and giving
                        // them layout
                        // (IE < 8 does this)
                        div.innerHTML = "";
                        div.style.width = div.style.padding = "1px";
                        div.style.border = 0;
                        div.style.overflow = "hidden";
                        div.style.display = "inline";
                        div.style.zoom = 1;
                        support.inlineBlockNeedsLayout = ( div.offsetWidth === 3 );

                        // Check if elements with layout shrink-wrap their children
                        // (IE 6 does this)
                        div.style.display = "block";
                        div.style.overflow = "visible";
                        div.innerHTML = "<div style='width:5px;'></div>";
                        support.shrinkWrapBlocks = ( div.offsetWidth !== 3 );
                    }

                    div.style.cssText = positionTopLeftWidthHeight + paddingMarginBorderVisibility;
                    div.innerHTML = html;

                    outer = div.firstChild;
                    inner = outer.firstChild;
                    td = outer.nextSibling.firstChild.firstChild;

                    offsetSupport = {
                        doesNotAddBorder: ( inner.offsetTop !== 5 ),
                        doesAddBorderForTableAndCells: ( td.offsetTop === 5 )
                    };

                    inner.style.position = "fixed";
                    inner.style.top = "20px";

                    // safari subtracts parent border width here which is 5px
                    offsetSupport.fixedPosition = ( inner.offsetTop === 20 || inner.offsetTop === 15 );
                    inner.style.position = inner.style.top = "";

                    outer.style.overflow = "hidden";
                    outer.style.position = "relative";

                    offsetSupport.subtractsBorderForOverflowNotVisible = ( inner.offsetTop === -5 );
                    offsetSupport.doesNotIncludeMarginInBodyOffset = ( body.offsetTop !== conMarginTop );

                    if ( window.getComputedStyle ) {
                        div.style.marginTop = "1%";
                        support.pixelMargin = ( window.getComputedStyle( div, null ) || { marginTop: 0 } ).marginTop !== "1%";
                    }

                    if ( typeof container.style.zoom !== "undefined" ) {
                        container.style.zoom = 1;
                    }

                    body.removeChild( container );
                    marginDiv = div = container = null;

                    jQuery.extend( support, offsetSupport );
                });

                return support;
            })();




            var rbrace = /^(?:\{.*\}|\[.*\])$/,
                    rmultiDash = /([A-Z])/g;

            jQuery.extend({
                cache: {},

                // Please use with caution
                uuid: 0,

                // Unique for each copy of jQuery on the page
                // Non-digits removed to match rinlinejQuery
                expando: "jQuery" + ( jQuery.fn.jquery + Math.random() ).replace( /\D/g, "" ),

                // The following elements throw uncatchable exceptions if you
                // attempt to add expando properties to them.
                noData: {
                    "embed": true,
                    // Ban all objects except for Flash (which handle expandos)
                    "object": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",
                    "applet": true
                },

                hasData: function( elem ) {
                    elem = elem.nodeType ? jQuery.cache[ elem[jQuery.expando] ] : elem[ jQuery.expando ];
                    return !!elem && !isEmptyDataObject( elem );
                },

                data: function( elem, name, data, pvt /* Internal Use Only */ ) {
                    if ( !jQuery.acceptData( elem ) ) {
                        return;
                    }

                    var privateCache, thisCache, ret,
                            internalKey = jQuery.expando,
                            getByName = typeof name === "string",

                    // We have to handle DOM nodes and JS objects differently because IE6-7
                    // can't GC object references properly across the DOM-JS boundary
                            isNode = elem.nodeType,

                    // Only DOM nodes need the global jQuery cache; JS object data is
                    // attached directly to the object so GC can occur automatically
                            cache = isNode ? jQuery.cache : elem,

                    // Only defining an ID for JS objects if its cache already exists allows
                    // the code to shortcut on the same path as a DOM node with no cache
                            id = isNode ? elem[ internalKey ] : elem[ internalKey ] && internalKey,
                            isEvents = name === "events";

                    // Avoid doing any more work than we need to when trying to get data on an
                    // object that has no data at all
                    if ( (!id || !cache[id] || (!isEvents && !pvt && !cache[id].data)) && getByName && data === undefined ) {
                        return;
                    }

                    if ( !id ) {
                        // Only DOM nodes need a new unique ID for each element since their data
                        // ends up in the global cache
                        if ( isNode ) {
                            elem[ internalKey ] = id = ++jQuery.uuid;
                        } else {
                            id = internalKey;
                        }
                    }

                    if ( !cache[ id ] ) {
                        cache[ id ] = {};

                        // Avoids exposing jQuery metadata on plain JS objects when the object
                        // is serialized using JSON.stringify
                        if ( !isNode ) {
                            cache[ id ].toJSON = jQuery.noop;
                        }
                    }

                    // An object can be passed to jQuery.data instead of a key/value pair; this gets
                    // shallow copied over onto the existing cache
                    if ( typeof name === "object" || typeof name === "function" ) {
                        if ( pvt ) {
                            cache[ id ] = jQuery.extend( cache[ id ], name );
                        } else {
                            cache[ id ].data = jQuery.extend( cache[ id ].data, name );
                        }
                    }

                    privateCache = thisCache = cache[ id ];

                    // jQuery data() is stored in a separate object inside the object's internal data
                    // cache in order to avoid key collisions between internal data and user-defined
                    // data.
                    if ( !pvt ) {
                        if ( !thisCache.data ) {
                            thisCache.data = {};
                        }

                        thisCache = thisCache.data;
                    }

                    if ( data !== undefined ) {
                        thisCache[ jQuery.camelCase( name ) ] = data;
                    }

                    // Users should not attempt to inspect the internal events object using jQuery.data,
                    // it is undocumented and subject to change. But does anyone listen? No.
                    if ( isEvents && !thisCache[ name ] ) {
                        return privateCache.events;
                    }

                    // Check for both converted-to-camel and non-converted data property names
                    // If a data property was specified
                    if ( getByName ) {

                        // First Try to find as-is property data
                        ret = thisCache[ name ];

                        // Test for null|undefined property data
                        if ( ret == null ) {

                            // Try to find the camelCased property
                            ret = thisCache[ jQuery.camelCase( name ) ];
                        }
                    } else {
                        ret = thisCache;
                    }

                    return ret;
                },

                removeData: function( elem, name, pvt /* Internal Use Only */ ) {
                    if ( !jQuery.acceptData( elem ) ) {
                        return;
                    }

                    var thisCache, i, l,

                    // Reference to internal data cache key
                            internalKey = jQuery.expando,

                            isNode = elem.nodeType,

                    // See jQuery.data for more information
                            cache = isNode ? jQuery.cache : elem,

                    // See jQuery.data for more information
                            id = isNode ? elem[ internalKey ] : internalKey;

                    // If there is already no cache entry for this object, there is no
                    // purpose in continuing
                    if ( !cache[ id ] ) {
                        return;
                    }

                    if ( name ) {

                        thisCache = pvt ? cache[ id ] : cache[ id ].data;

                        if ( thisCache ) {

                            // Support array or space separated string names for data keys
                            if ( !jQuery.isArray( name ) ) {

                                // try the string as a key before any manipulation
                                if ( name in thisCache ) {
                                    name = [ name ];
                                } else {

                                    // split the camel cased version by spaces unless a key with the spaces exists
                                    name = jQuery.camelCase( name );
                                    if ( name in thisCache ) {
                                        name = [ name ];
                                    } else {
                                        name = name.split( " " );
                                    }
                                }
                            }

                            for ( i = 0, l = name.length; i < l; i++ ) {
                                delete thisCache[ name[i] ];
                            }

                            // If there is no data left in the cache, we want to continue
                            // and let the cache object itself get destroyed
                            if ( !( pvt ? isEmptyDataObject : jQuery.isEmptyObject )( thisCache ) ) {
                                return;
                            }
                        }
                    }

                    // See jQuery.data for more information
                    if ( !pvt ) {
                        delete cache[ id ].data;

                        // Don't destroy the parent cache unless the internal data object
                        // had been the only thing left in it
                        if ( !isEmptyDataObject(cache[ id ]) ) {
                            return;
                        }
                    }

                    // Browsers that fail expando deletion also refuse to delete expandos on
                    // the window, but it will allow it on all other JS objects; other browsers
                    // don't care
                    // Ensure that `cache` is not a window object #10080
                    if ( jQuery.support.deleteExpando || !cache.setInterval ) {
                        delete cache[ id ];
                    } else {
                        cache[ id ] = null;
                    }

                    // We destroyed the cache and need to eliminate the expando on the node to avoid
                    // false lookups in the cache for entries that no longer exist
                    if ( isNode ) {
                        // IE does not allow us to delete expando properties from nodes,
                        // nor does it have a removeAttribute function on Document nodes;
                        // we must handle all of these cases
                        if ( jQuery.support.deleteExpando ) {
                            delete elem[ internalKey ];
                        } else if ( elem.removeAttribute ) {
                            elem.removeAttribute( internalKey );
                        } else {
                            elem[ internalKey ] = null;
                        }
                    }
                },

                // For internal use only.
                _data: function( elem, name, data ) {
                    return jQuery.data( elem, name, data, true );
                },

                // A method for determining if a DOM node can handle the data expando
                acceptData: function( elem ) {
                    if ( elem.nodeName ) {
                        var match = jQuery.noData[ elem.nodeName.toLowerCase() ];

                        if ( match ) {
                            return !(match === true || elem.getAttribute("classid") !== match);
                        }
                    }

                    return true;
                }
            });

            jQuery.fn.extend({
                data: function( key, value ) {
                    var parts, part, attr, name, l,
                            elem = this[0],
                            i = 0,
                            data = null;

                    // Gets all values
                    if ( key === undefined ) {
                        if ( this.length ) {
                            data = jQuery.data( elem );

                            if ( elem.nodeType === 1 && !jQuery._data( elem, "parsedAttrs" ) ) {
                                attr = elem.attributes;
                                for ( l = attr.length; i < l; i++ ) {
                                    name = attr[i].name;

                                    if ( name.indexOf( "data-" ) === 0 ) {
                                        name = jQuery.camelCase( name.substring(5) );

                                        dataAttr( elem, name, data[ name ] );
                                    }
                                }
                                jQuery._data( elem, "parsedAttrs", true );
                            }
                        }

                        return data;
                    }

                    // Sets multiple values
                    if ( typeof key === "object" ) {
                        return this.each(function() {
                            jQuery.data( this, key );
                        });
                    }

                    parts = key.split( ".", 2 );
                    parts[1] = parts[1] ? "." + parts[1] : "";
                    part = parts[1] + "!";

                    return jQuery.access( this, function( value ) {

                        if ( value === undefined ) {
                            data = this.triggerHandler( "getData" + part, [ parts[0] ] );

                            // Try to fetch any internally stored data first
                            if ( data === undefined && elem ) {
                                data = jQuery.data( elem, key );
                                data = dataAttr( elem, key, data );
                            }

                            return data === undefined && parts[1] ?
                                    this.data( parts[0] ) :
                                    data;
                        }

                        parts[1] = value;
                        this.each(function() {
                            var self = jQuery( this );

                            self.triggerHandler( "setData" + part, parts );
                            jQuery.data( this, key, value );
                            self.triggerHandler( "changeData" + part, parts );
                        });
                    }, null, value, arguments.length > 1, null, false );
                },

                removeData: function( key ) {
                    return this.each(function() {
                        jQuery.removeData( this, key );
                    });
                }
            });

            function dataAttr( elem, key, data ) {
                // If nothing was found internally, try to fetch any
                // data from the HTML5 data-* attribute
                if ( data === undefined && elem.nodeType === 1 ) {

                    var name = "data-" + key.replace( rmultiDash, "-$1" ).toLowerCase();

                    data = elem.getAttribute( name );

                    if ( typeof data === "string" ) {
                        try {
                            data = data === "true" ? true :
                                    data === "false" ? false :
                                            data === "null" ? null :
                                                    jQuery.isNumeric( data ) ? +data :
                                                            rbrace.test( data ) ? jQuery.parseJSON( data ) :
                                                                    data;
                        } catch( e ) {}

                        // Make sure we set the data so it isn't changed later
                        jQuery.data( elem, key, data );

                    } else {
                        data = undefined;
                    }
                }

                return data;
            }

// checks a cache object for emptiness
            function isEmptyDataObject( obj ) {
                for ( var name in obj ) {

                    // if the public data object is empty, the private is still empty
                    if ( name === "data" && jQuery.isEmptyObject( obj[name] ) ) {
                        continue;
                    }
                    if ( name !== "toJSON" ) {
                        return false;
                    }
                }

                return true;
            }




            function handleQueueMarkDefer( elem, type, src ) {
                var deferDataKey = type + "defer",
                        queueDataKey = type + "queue",
                        markDataKey = type + "mark",
                        defer = jQuery._data( elem, deferDataKey );
                if ( defer &&
                        ( src === "queue" || !jQuery._data(elem, queueDataKey) ) &&
                        ( src === "mark" || !jQuery._data(elem, markDataKey) ) ) {
                    // Give room for hard-coded callbacks to fire first
                    // and eventually mark/queue something else on the element
                    setTimeout( function() {
                        if ( !jQuery._data( elem, queueDataKey ) &&
                                !jQuery._data( elem, markDataKey ) ) {
                            jQuery.removeData( elem, deferDataKey, true );
                            defer.fire();
                        }
                    }, 0 );
                }
            }

            jQuery.extend({

                _mark: function( elem, type ) {
                    if ( elem ) {
                        type = ( type || "fx" ) + "mark";
                        jQuery._data( elem, type, (jQuery._data( elem, type ) || 0) + 1 );
                    }
                },

                _unmark: function( force, elem, type ) {
                    if ( force !== true ) {
                        type = elem;
                        elem = force;
                        force = false;
                    }
                    if ( elem ) {
                        type = type || "fx";
                        var key = type + "mark",
                                count = force ? 0 : ( (jQuery._data( elem, key ) || 1) - 1 );
                        if ( count ) {
                            jQuery._data( elem, key, count );
                        } else {
                            jQuery.removeData( elem, key, true );
                            handleQueueMarkDefer( elem, type, "mark" );
                        }
                    }
                },

                queue: function( elem, type, data ) {
                    var q;
                    if ( elem ) {
                        type = ( type || "fx" ) + "queue";
                        q = jQuery._data( elem, type );

                        // Speed up dequeue by getting out quickly if this is just a lookup
                        if ( data ) {
                            if ( !q || jQuery.isArray(data) ) {
                                q = jQuery._data( elem, type, jQuery.makeArray(data) );
                            } else {
                                q.push( data );
                            }
                        }
                        return q || [];
                    }
                },

                dequeue: function( elem, type ) {
                    type = type || "fx";

                    var queue = jQuery.queue( elem, type ),
                            fn = queue.shift(),
                            hooks = {};

                    // If the fx queue is dequeued, always remove the progress sentinel
                    if ( fn === "inprogress" ) {
                        fn = queue.shift();
                    }

                    if ( fn ) {
                        // Add a progress sentinel to prevent the fx queue from being
                        // automatically dequeued
                        if ( type === "fx" ) {
                            queue.unshift( "inprogress" );
                        }

                        jQuery._data( elem, type + ".run", hooks );
                        fn.call( elem, function() {
                            jQuery.dequeue( elem, type );
                        }, hooks );
                    }

                    if ( !queue.length ) {
                        jQuery.removeData( elem, type + "queue " + type + ".run", true );
                        handleQueueMarkDefer( elem, type, "queue" );
                    }
                }
            });

            jQuery.fn.extend({
                queue: function( type, data ) {
                    var setter = 2;

                    if ( typeof type !== "string" ) {
                        data = type;
                        type = "fx";
                        setter--;
                    }

                    if ( arguments.length < setter ) {
                        return jQuery.queue( this[0], type );
                    }

                    return data === undefined ?
                            this :
                            this.each(function() {
                                var queue = jQuery.queue( this, type, data );

                                if ( type === "fx" && queue[0] !== "inprogress" ) {
                                    jQuery.dequeue( this, type );
                                }
                            });
                },
                dequeue: function( type ) {
                    return this.each(function() {
                        jQuery.dequeue( this, type );
                    });
                },
                // Based off of the plugin by Clint Helfers, with permission.
                // http://blindsignals.com/index.php/2009/07/jquery-delay/
                delay: function( time, type ) {
                    time = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
                    type = type || "fx";

                    return this.queue( type, function( next, hooks ) {
                        var timeout = setTimeout( next, time );
                        hooks.stop = function() {
                            clearTimeout( timeout );
                        };
                    });
                },
                clearQueue: function( type ) {
                    return this.queue( type || "fx", [] );
                },
                // Get a promise resolved when queues of a certain type
                // are emptied (fx is the type by default)
                promise: function( type, object ) {
                    if ( typeof type !== "string" ) {
                        object = type;
                        type = undefined;
                    }
                    type = type || "fx";
                    var defer = jQuery.Deferred(),
                            elements = this,
                            i = elements.length,
                            count = 1,
                            deferDataKey = type + "defer",
                            queueDataKey = type + "queue",
                            markDataKey = type + "mark",
                            tmp;
                    function resolve() {
                        if ( !( --count ) ) {
                            defer.resolveWith( elements, [ elements ] );
                        }
                    }
                    while( i-- ) {
                        if (( tmp = jQuery.data( elements[ i ], deferDataKey, undefined, true ) ||
                                        ( jQuery.data( elements[ i ], queueDataKey, undefined, true ) ||
                                        jQuery.data( elements[ i ], markDataKey, undefined, true ) ) &&
                                        jQuery.data( elements[ i ], deferDataKey, jQuery.Callbacks( "once memory" ), true ) )) {
                            count++;
                            tmp.add( resolve );
                        }
                    }
                    resolve();
                    return defer.promise( object );
                }
            });




            var rclass = /[\n\t\r]/g,
                    rspace = /\s+/,
                    rreturn = /\r/g,
                    rtype = /^(?:button|input)$/i,
                    rfocusable = /^(?:button|input|object|select|textarea)$/i,
                    rclickable = /^a(?:rea)?$/i,
                    rboolean = /^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,
                    getSetAttribute = jQuery.support.getSetAttribute,
                    nodeHook, boolHook, fixSpecified;

            jQuery.fn.extend({
                attr: function( name, value ) {
                    return jQuery.access( this, jQuery.attr, name, value, arguments.length > 1 );
                },

                removeAttr: function( name ) {
                    return this.each(function() {
                        jQuery.removeAttr( this, name );
                    });
                },

                prop: function( name, value ) {
                    return jQuery.access( this, jQuery.prop, name, value, arguments.length > 1 );
                },

                removeProp: function( name ) {
                    name = jQuery.propFix[ name ] || name;
                    return this.each(function() {
                        // try/catch handles cases where IE balks (such as removing a property on window)
                        try {
                            this[ name ] = undefined;
                            delete this[ name ];
                        } catch( e ) {}
                    });
                },

                addClass: function( value ) {
                    var classNames, i, l, elem,
                            setClass, c, cl;

                    if ( jQuery.isFunction( value ) ) {
                        return this.each(function( j ) {
                            jQuery( this ).addClass( value.call(this, j, this.className) );
                        });
                    }

                    if ( value && typeof value === "string" ) {
                        classNames = value.split( rspace );

                        for ( i = 0, l = this.length; i < l; i++ ) {
                            elem = this[ i ];

                            if ( elem.nodeType === 1 ) {
                                if ( !elem.className && classNames.length === 1 ) {
                                    elem.className = value;

                                } else {
                                    setClass = " " + elem.className + " ";

                                    for ( c = 0, cl = classNames.length; c < cl; c++ ) {
                                        if ( !~setClass.indexOf( " " + classNames[ c ] + " " ) ) {
                                            setClass += classNames[ c ] + " ";
                                        }
                                    }
                                    elem.className = jQuery.trim( setClass );
                                }
                            }
                        }
                    }

                    return this;
                },

                removeClass: function( value ) {
                    var classNames, i, l, elem, className, c, cl;

                    if ( jQuery.isFunction( value ) ) {
                        return this.each(function( j ) {
                            jQuery( this ).removeClass( value.call(this, j, this.className) );
                        });
                    }

                    if ( (value && typeof value === "string") || value === undefined ) {
                        classNames = ( value || "" ).split( rspace );

                        for ( i = 0, l = this.length; i < l; i++ ) {
                            elem = this[ i ];

                            if ( elem.nodeType === 1 && elem.className ) {
                                if ( value ) {
                                    className = (" " + elem.className + " ").replace( rclass, " " );
                                    for ( c = 0, cl = classNames.length; c < cl; c++ ) {
                                        className = className.replace(" " + classNames[ c ] + " ", " ");
                                    }
                                    elem.className = jQuery.trim( className );

                                } else {
                                    elem.className = "";
                                }
                            }
                        }
                    }

                    return this;
                },

                toggleClass: function( value, stateVal ) {
                    var type = typeof value,
                            isBool = typeof stateVal === "boolean";

                    if ( jQuery.isFunction( value ) ) {
                        return this.each(function( i ) {
                            jQuery( this ).toggleClass( value.call(this, i, this.className, stateVal), stateVal );
                        });
                    }

                    return this.each(function() {
                        if ( type === "string" ) {
                            // toggle individual class names
                            var className,
                                    i = 0,
                                    self = jQuery( this ),
                                    state = stateVal,
                                    classNames = value.split( rspace );

                            while ( (className = classNames[ i++ ]) ) {
                                // check each className given, space seperated list
                                state = isBool ? state : !self.hasClass( className );
                                self[ state ? "addClass" : "removeClass" ]( className );
                            }

                        } else if ( type === "undefined" || type === "boolean" ) {
                            if ( this.className ) {
                                // store className if set
                                jQuery._data( this, "__className__", this.className );
                            }

                            // toggle whole className
                            this.className = this.className || value === false ? "" : jQuery._data( this, "__className__" ) || "";
                        }
                    });
                },

                hasClass: function( selector ) {
                    var className = " " + selector + " ",
                            i = 0,
                            l = this.length;
                    for ( ; i < l; i++ ) {
                        if ( this[i].nodeType === 1 && (" " + this[i].className + " ").replace(rclass, " ").indexOf( className ) > -1 ) {
                            return true;
                        }
                    }

                    return false;
                },

                val: function( value ) {
                    var hooks, ret, isFunction,
                            elem = this[0];

                    if ( !arguments.length ) {
                        if ( elem ) {
                            hooks = jQuery.valHooks[ elem.type ] || jQuery.valHooks[ elem.nodeName.toLowerCase() ];

                            if ( hooks && "get" in hooks && (ret = hooks.get( elem, "value" )) !== undefined ) {
                                return ret;
                            }

                            ret = elem.value;

                            return typeof ret === "string" ?
                                    // handle most common string cases
                                    ret.replace(rreturn, "") :
                                    // handle cases where value is null/undef or number
                                    ret == null ? "" : ret;
                        }

                        return;
                    }

                    isFunction = jQuery.isFunction( value );

                    return this.each(function( i ) {
                        var self = jQuery(this), val;

                        if ( this.nodeType !== 1 ) {
                            return;
                        }

                        if ( isFunction ) {
                            val = value.call( this, i, self.val() );
                        } else {
                            val = value;
                        }

                        // Treat null/undefined as ""; convert numbers to string
                        if ( val == null ) {
                            val = "";
                        } else if ( typeof val === "number" ) {
                            val += "";
                        } else if ( jQuery.isArray( val ) ) {
                            val = jQuery.map(val, function ( value ) {
                                return value == null ? "" : value + "";
                            });
                        }

                        hooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

                        // If set returns undefined, fall back to normal setting
                        if ( !hooks || !("set" in hooks) || hooks.set( this, val, "value" ) === undefined ) {
                            this.value = val;
                        }
                    });
                }
            });

            jQuery.extend({
                valHooks: {
                    option: {
                        get: function( elem ) {
                            // attributes.value is undefined in Blackberry 4.7 but
                            // uses .value. See #6932
                            var val = elem.attributes.value;
                            return !val || val.specified ? elem.value : elem.text;
                        }
                    },
                    select: {
                        get: function( elem ) {
                            var value, i, max, option,
                                    index = elem.selectedIndex,
                                    values = [],
                                    options = elem.options,
                                    one = elem.type === "select-one";

                            // Nothing was selected
                            if ( index < 0 ) {
                                return null;
                            }

                            // Loop through all the selected options
                            i = one ? index : 0;
                            max = one ? index + 1 : options.length;
                            for ( ; i < max; i++ ) {
                                option = options[ i ];

                                // Don't return options that are disabled or in a disabled optgroup
                                if ( option.selected && (jQuery.support.optDisabled ? !option.disabled : option.getAttribute("disabled") === null) &&
                                        (!option.parentNode.disabled || !jQuery.nodeName( option.parentNode, "optgroup" )) ) {

                                    // Get the specific value for the option
                                    value = jQuery( option ).val();

                                    // We don't need an array for one selects
                                    if ( one ) {
                                        return value;
                                    }

                                    // Multi-Selects return an array
                                    values.push( value );
                                }
                            }

                            // Fixes Bug #2551 -- select.val() broken in IE after form.reset()
                            if ( one && !values.length && options.length ) {
                                return jQuery( options[ index ] ).val();
                            }

                            return values;
                        },

                        set: function( elem, value ) {
                            var values = jQuery.makeArray( value );

                            jQuery(elem).find("option").each(function() {
                                this.selected = jQuery.inArray( jQuery(this).val(), values ) >= 0;
                            });

                            if ( !values.length ) {
                                elem.selectedIndex = -1;
                            }
                            return values;
                        }
                    }
                },

                attrFn: {
                    val: true,
                    css: true,
                    html: true,
                    text: true,
                    data: true,
                    width: true,
                    height: true,
                    offset: true
                },

                attr: function( elem, name, value, pass ) {
                    var ret, hooks, notxml,
                            nType = elem.nodeType;

                    // don't get/set attributes on text, comment and attribute nodes
                    if ( !elem || nType === 3 || nType === 8 || nType === 2 ) {
                        return;
                    }

                    if ( pass && name in jQuery.attrFn ) {
                        return jQuery( elem )[ name ]( value );
                    }

                    // Fallback to prop when attributes are not supported
                    if ( typeof elem.getAttribute === "undefined" ) {
                        return jQuery.prop( elem, name, value );
                    }

                    notxml = nType !== 1 || !jQuery.isXMLDoc( elem );

                    // All attributes are lowercase
                    // Grab necessary hook if one is defined
                    if ( notxml ) {
                        name = name.toLowerCase();
                        hooks = jQuery.attrHooks[ name ] || ( rboolean.test( name ) ? boolHook : nodeHook );
                    }

                    if ( value !== undefined ) {

                        if ( value === null ) {
                            jQuery.removeAttr( elem, name );
                            return;

                        } else if ( hooks && "set" in hooks && notxml && (ret = hooks.set( elem, value, name )) !== undefined ) {
                            return ret;

                        } else {
                            elem.setAttribute( name, "" + value );
                            return value;
                        }

                    } else if ( hooks && "get" in hooks && notxml && (ret = hooks.get( elem, name )) !== null ) {
                        return ret;

                    } else {

                        ret = elem.getAttribute( name );

                        // Non-existent attributes return null, we normalize to undefined
                        return ret === null ?
                                undefined :
                                ret;
                    }
                },

                removeAttr: function( elem, value ) {
                    var propName, attrNames, name, l, isBool,
                            i = 0;

                    if ( value && elem.nodeType === 1 ) {
                        attrNames = value.toLowerCase().split( rspace );
                        l = attrNames.length;

                        for ( ; i < l; i++ ) {
                            name = attrNames[ i ];

                            if ( name ) {
                                propName = jQuery.propFix[ name ] || name;
                                isBool = rboolean.test( name );

                                // See #9699 for explanation of this approach (setting first, then removal)
                                // Do not do this for boolean attributes (see #10870)
                                if ( !isBool ) {
                                    jQuery.attr( elem, name, "" );
                                }
                                elem.removeAttribute( getSetAttribute ? name : propName );

                                // Set corresponding property to false for boolean attributes
                                if ( isBool && propName in elem ) {
                                    elem[ propName ] = false;
                                }
                            }
                        }
                    }
                },

                attrHooks: {
                    type: {
                        set: function( elem, value ) {
                            // We can't allow the type property to be changed (since it causes problems in IE)
                            if ( rtype.test( elem.nodeName ) && elem.parentNode ) {
                                jQuery.error( "type property can't be changed" );
                            } else if ( !jQuery.support.radioValue && value === "radio" && jQuery.nodeName(elem, "input") ) {
                                // Setting the type on a radio button after the value resets the value in IE6-9
                                // Reset value to it's default in case type is set after value
                                // This is for element creation
                                var val = elem.value;
                                elem.setAttribute( "type", value );
                                if ( val ) {
                                    elem.value = val;
                                }
                                return value;
                            }
                        }
                    },
                    // Use the value property for back compat
                    // Use the nodeHook for button elements in IE6/7 (#1954)
                    value: {
                        get: function( elem, name ) {
                            if ( nodeHook && jQuery.nodeName( elem, "button" ) ) {
                                return nodeHook.get( elem, name );
                            }
                            return name in elem ?
                                    elem.value :
                                    null;
                        },
                        set: function( elem, value, name ) {
                            if ( nodeHook && jQuery.nodeName( elem, "button" ) ) {
                                return nodeHook.set( elem, value, name );
                            }
                            // Does not return so that setAttribute is also used
                            elem.value = value;
                        }
                    }
                },

                propFix: {
                    tabindex: "tabIndex",
                    readonly: "readOnly",
                    "for": "htmlFor",
                    "class": "className",
                    maxlength: "maxLength",
                    cellspacing: "cellSpacing",
                    cellpadding: "cellPadding",
                    rowspan: "rowSpan",
                    colspan: "colSpan",
                    usemap: "useMap",
                    frameborder: "frameBorder",
                    contenteditable: "contentEditable"
                },

                prop: function( elem, name, value ) {
                    var ret, hooks, notxml,
                            nType = elem.nodeType;

                    // don't get/set properties on text, comment and attribute nodes
                    if ( !elem || nType === 3 || nType === 8 || nType === 2 ) {
                        return;
                    }

                    notxml = nType !== 1 || !jQuery.isXMLDoc( elem );

                    if ( notxml ) {
                        // Fix name and attach hooks
                        name = jQuery.propFix[ name ] || name;
                        hooks = jQuery.propHooks[ name ];
                    }

                    if ( value !== undefined ) {
                        if ( hooks && "set" in hooks && (ret = hooks.set( elem, value, name )) !== undefined ) {
                            return ret;

                        } else {
                            return ( elem[ name ] = value );
                        }

                    } else {
                        if ( hooks && "get" in hooks && (ret = hooks.get( elem, name )) !== null ) {
                            return ret;

                        } else {
                            return elem[ name ];
                        }
                    }
                },

                propHooks: {
                    tabIndex: {
                        get: function( elem ) {
                            // elem.tabIndex doesn't always return the correct value when it hasn't been explicitly set
                            // http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
                            var attributeNode = elem.getAttributeNode("tabindex");

                            return attributeNode && attributeNode.specified ?
                                    parseInt( attributeNode.value, 10 ) :
                                    rfocusable.test( elem.nodeName ) || rclickable.test( elem.nodeName ) && elem.href ?
                                            0 :
                                            undefined;
                        }
                    }
                }
            });

// Add the tabIndex propHook to attrHooks for back-compat (different case is intentional)
            jQuery.attrHooks.tabindex = jQuery.propHooks.tabIndex;

// Hook for boolean attributes
            boolHook = {
                get: function( elem, name ) {
                    // Align boolean attributes with corresponding properties
                    // Fall back to attribute presence where some booleans are not supported
                    var attrNode,
                            property = jQuery.prop( elem, name );
                    return property === true || typeof property !== "boolean" && ( attrNode = elem.getAttributeNode(name) ) && attrNode.nodeValue !== false ?
                            name.toLowerCase() :
                            undefined;
                },
                set: function( elem, value, name ) {
                    var propName;
                    if ( value === false ) {
                        // Remove boolean attributes when set to false
                        jQuery.removeAttr( elem, name );
                    } else {
                        // value is true since we know at this point it's type boolean and not false
                        // Set boolean attributes to the same name and set the DOM property
                        propName = jQuery.propFix[ name ] || name;
                        if ( propName in elem ) {
                            // Only set the IDL specifically if it already exists on the element
                            elem[ propName ] = true;
                        }

                        elem.setAttribute( name, name.toLowerCase() );
                    }
                    return name;
                }
            };

// IE6/7 do not support getting/setting some attributes with get/setAttribute
            if ( !getSetAttribute ) {

                fixSpecified = {
                    name: true,
                    id: true,
                    coords: true
                };

                // Use this for any attribute in IE6/7
                // This fixes almost every IE6/7 issue
                nodeHook = jQuery.valHooks.button = {
                    get: function( elem, name ) {
                        var ret;
                        ret = elem.getAttributeNode( name );
                        return ret && ( fixSpecified[ name ] ? ret.nodeValue !== "" : ret.specified ) ?
                                ret.nodeValue :
                                undefined;
                    },
                    set: function( elem, value, name ) {
                        // Set the existing or create a new attribute node
                        var ret = elem.getAttributeNode( name );
                        if ( !ret ) {
                            ret = document.createAttribute( name );
                            elem.setAttributeNode( ret );
                        }
                        return ( ret.nodeValue = value + "" );
                    }
                };

                // Apply the nodeHook to tabindex
                jQuery.attrHooks.tabindex.set = nodeHook.set;

                // Set width and height to auto instead of 0 on empty string( Bug #8150 )
                // This is for removals
                jQuery.each([ "width", "height" ], function( i, name ) {
                    jQuery.attrHooks[ name ] = jQuery.extend( jQuery.attrHooks[ name ], {
                        set: function( elem, value ) {
                            if ( value === "" ) {
                                elem.setAttribute( name, "auto" );
                                return value;
                            }
                        }
                    });
                });

                // Set contenteditable to false on removals(#10429)
                // Setting to empty string throws an error as an invalid value
                jQuery.attrHooks.contenteditable = {
                    get: nodeHook.get,
                    set: function( elem, value, name ) {
                        if ( value === "" ) {
                            value = "false";
                        }
                        nodeHook.set( elem, value, name );
                    }
                };
            }


// Some attributes require a special call on IE
            if ( !jQuery.support.hrefNormalized ) {
                jQuery.each([ "href", "src", "width", "height" ], function( i, name ) {
                    jQuery.attrHooks[ name ] = jQuery.extend( jQuery.attrHooks[ name ], {
                        get: function( elem ) {
                            var ret = elem.getAttribute( name, 2 );
                            return ret === null ? undefined : ret;
                        }
                    });
                });
            }

            if ( !jQuery.support.style ) {
                jQuery.attrHooks.style = {
                    get: function( elem ) {
                        // Return undefined in the case of empty string
                        // Normalize to lowercase since IE uppercases css property names
                        return elem.style.cssText.toLowerCase() || undefined;
                    },
                    set: function( elem, value ) {
                        return ( elem.style.cssText = "" + value );
                    }
                };
            }

// Safari mis-reports the default selected property of an option
// Accessing the parent's selectedIndex property fixes it
            if ( !jQuery.support.optSelected ) {
                jQuery.propHooks.selected = jQuery.extend( jQuery.propHooks.selected, {
                    get: function( elem ) {
                        var parent = elem.parentNode;

                        if ( parent ) {
                            parent.selectedIndex;

                            // Make sure that it also works with optgroups, see #5701
                            if ( parent.parentNode ) {
                                parent.parentNode.selectedIndex;
                            }
                        }
                        return null;
                    }
                });
            }

// IE6/7 call enctype encoding
            if ( !jQuery.support.enctype ) {
                jQuery.propFix.enctype = "encoding";
            }

// Radios and checkboxes getter/setter
            if ( !jQuery.support.checkOn ) {
                jQuery.each([ "radio", "checkbox" ], function() {
                    jQuery.valHooks[ this ] = {
                        get: function( elem ) {
                            // Handle the case where in Webkit "" is returned instead of "on" if a value isn't specified
                            return elem.getAttribute("value") === null ? "on" : elem.value;
                        }
                    };
                });
            }
            jQuery.each([ "radio", "checkbox" ], function() {
                jQuery.valHooks[ this ] = jQuery.extend( jQuery.valHooks[ this ], {
                    set: function( elem, value ) {
                        if ( jQuery.isArray( value ) ) {
                            return ( elem.checked = jQuery.inArray( jQuery(elem).val(), value ) >= 0 );
                        }
                    }
                });
            });




            var rformElems = /^(?:textarea|input|select)$/i,
                    rtypenamespace = /^([^\.]*)?(?:\.(.+))?$/,
                    rhoverHack = /(?:^|\s)hover(\.\S+)?\b/,
                    rkeyEvent = /^key/,
                    rmouseEvent = /^(?:mouse|contextmenu)|click/,
                    rfocusMorph = /^(?:focusinfocus|focusoutblur)$/,
                    rquickIs = /^(\w*)(?:#([\w\-]+))?(?:\.([\w\-]+))?$/,
                    quickParse = function( selector ) {
                        var quick = rquickIs.exec( selector );
                        if ( quick ) {
                            //   0  1    2   3
                            // [ _, tag, id, class ]
                            quick[1] = ( quick[1] || "" ).toLowerCase();
                            quick[3] = quick[3] && new RegExp( "(?:^|\\s)" + quick[3] + "(?:\\s|$)" );
                        }
                        return quick;
                    },
                    quickIs = function( elem, m ) {
                        var attrs = elem.attributes || {};
                        return (
                                (!m[1] || elem.nodeName.toLowerCase() === m[1]) &&
                                (!m[2] || (attrs.id || {}).value === m[2]) &&
                                (!m[3] || m[3].test( (attrs[ "class" ] || {}).value ))
                        );
                    },
                    hoverHack = function( events ) {
                        return jQuery.event.special.hover ? events : events.replace( rhoverHack, "mouseenter$1 mouseleave$1" );
                    };

            /*
             * Helper functions for managing events -- not part of the public interface.
             * Props to Dean Edwards' addEvent library for many of the ideas.
             */
            jQuery.event = {

                add: function( elem, types, handler, data, selector ) {

                    var elemData, eventHandle, events,
                            t, tns, type, namespaces, handleObj,
                            handleObjIn, quick, handlers, special;

                    // Don't attach events to noData or text/comment nodes (allow plain objects tho)
                    if ( elem.nodeType === 3 || elem.nodeType === 8 || !types || !handler || !(elemData = jQuery._data( elem )) ) {
                        return;
                    }

                    // Caller can pass in an object of custom data in lieu of the handler
                    if ( handler.handler ) {
                        handleObjIn = handler;
                        handler = handleObjIn.handler;
                        selector = handleObjIn.selector;
                    }

                    // Make sure that the handler has a unique ID, used to find/remove it later
                    if ( !handler.guid ) {
                        handler.guid = jQuery.guid++;
                    }

                    // Init the element's event structure and main handler, if this is the first
                    events = elemData.events;
                    if ( !events ) {
                        elemData.events = events = {};
                    }
                    eventHandle = elemData.handle;
                    if ( !eventHandle ) {
                        elemData.handle = eventHandle = function( e ) {
                            // Discard the second event of a jQuery.event.trigger() and
                            // when an event is called after a page has unloaded
                            return typeof jQuery !== "undefined" && (!e || jQuery.event.triggered !== e.type) ?
                                    jQuery.event.dispatch.apply( eventHandle.elem, arguments ) :
                                    undefined;
                        };
                        // Add elem as a property of the handle fn to prevent a memory leak with IE non-native events
                        eventHandle.elem = elem;
                    }

                    // Handle multiple events separated by a space
                    // jQuery(...).bind("mouseover mouseout", fn);
                    types = jQuery.trim( hoverHack(types) ).split( " " );
                    for ( t = 0; t < types.length; t++ ) {

                        tns = rtypenamespace.exec( types[t] ) || [];
                        type = tns[1];
                        namespaces = ( tns[2] || "" ).split( "." ).sort();

                        // If event changes its type, use the special event handlers for the changed type
                        special = jQuery.event.special[ type ] || {};

                        // If selector defined, determine special event api type, otherwise given type
                        type = ( selector ? special.delegateType : special.bindType ) || type;

                        // Update special based on newly reset type
                        special = jQuery.event.special[ type ] || {};

                        // handleObj is passed to all event handlers
                        handleObj = jQuery.extend({
                            type: type,
                            origType: tns[1],
                            data: data,
                            handler: handler,
                            guid: handler.guid,
                            selector: selector,
                            quick: selector && quickParse( selector ),
                            namespace: namespaces.join(".")
                        }, handleObjIn );

                        // Init the event handler queue if we're the first
                        handlers = events[ type ];
                        if ( !handlers ) {
                            handlers = events[ type ] = [];
                            handlers.delegateCount = 0;

                            // Only use addEventListener/attachEvent if the special events handler returns false
                            if ( !special.setup || special.setup.call( elem, data, namespaces, eventHandle ) === false ) {
                                // Bind the global event handler to the element
                                if ( elem.addEventListener ) {
                                    elem.addEventListener( type, eventHandle, false );

                                } else if ( elem.attachEvent ) {
                                    elem.attachEvent( "on" + type, eventHandle );
                                }
                            }
                        }

                        if ( special.add ) {
                            special.add.call( elem, handleObj );

                            if ( !handleObj.handler.guid ) {
                                handleObj.handler.guid = handler.guid;
                            }
                        }

                        // Add to the element's handler list, delegates in front
                        if ( selector ) {
                            handlers.splice( handlers.delegateCount++, 0, handleObj );
                        } else {
                            handlers.push( handleObj );
                        }

                        // Keep track of which events have ever been used, for event optimization
                        jQuery.event.global[ type ] = true;
                    }

                    // Nullify elem to prevent memory leaks in IE
                    elem = null;
                },

                global: {},

                // Detach an event or set of events from an element
                remove: function( elem, types, handler, selector, mappedTypes ) {

                    var elemData = jQuery.hasData( elem ) && jQuery._data( elem ),
                            t, tns, type, origType, namespaces, origCount,
                            j, events, special, handle, eventType, handleObj;

                    if ( !elemData || !(events = elemData.events) ) {
                        return;
                    }

                    // Once for each type.namespace in types; type may be omitted
                    types = jQuery.trim( hoverHack( types || "" ) ).split(" ");
                    for ( t = 0; t < types.length; t++ ) {
                        tns = rtypenamespace.exec( types[t] ) || [];
                        type = origType = tns[1];
                        namespaces = tns[2];

                        // Unbind all events (on this namespace, if provided) for the element
                        if ( !type ) {
                            for ( type in events ) {
                                jQuery.event.remove( elem, type + types[ t ], handler, selector, true );
                            }
                            continue;
                        }

                        special = jQuery.event.special[ type ] || {};
                        type = ( selector? special.delegateType : special.bindType ) || type;
                        eventType = events[ type ] || [];
                        origCount = eventType.length;
                        namespaces = namespaces ? new RegExp("(^|\\.)" + namespaces.split(".").sort().join("\\.(?:.*\\.)?") + "(\\.|$)") : null;

                        // Remove matching events
                        for ( j = 0; j < eventType.length; j++ ) {
                            handleObj = eventType[ j ];

                            if ( ( mappedTypes || origType === handleObj.origType ) &&
                                    ( !handler || handler.guid === handleObj.guid ) &&
                                    ( !namespaces || namespaces.test( handleObj.namespace ) ) &&
                                    ( !selector || selector === handleObj.selector || selector === "**" && handleObj.selector ) ) {
                                eventType.splice( j--, 1 );

                                if ( handleObj.selector ) {
                                    eventType.delegateCount--;
                                }
                                if ( special.remove ) {
                                    special.remove.call( elem, handleObj );
                                }
                            }
                        }

                        // Remove generic event handler if we removed something and no more handlers exist
                        // (avoids potential for endless recursion during removal of special event handlers)
                        if ( eventType.length === 0 && origCount !== eventType.length ) {
                            if ( !special.teardown || special.teardown.call( elem, namespaces ) === false ) {
                                jQuery.removeEvent( elem, type, elemData.handle );
                            }

                            delete events[ type ];
                        }
                    }

                    // Remove the expando if it's no longer used
                    if ( jQuery.isEmptyObject( events ) ) {
                        handle = elemData.handle;
                        if ( handle ) {
                            handle.elem = null;
                        }

                        // removeData also checks for emptiness and clears the expando if empty
                        // so use it instead of delete
                        jQuery.removeData( elem, [ "events", "handle" ], true );
                    }
                },

                // Events that are safe to short-circuit if no handlers are attached.
                // Native DOM events should not be added, they may have inline handlers.
                customEvent: {
                    "getData": true,
                    "setData": true,
                    "changeData": true
                },

                trigger: function( event, data, elem, onlyHandlers ) {
                    // Don't do events on text and comment nodes
                    if ( elem && (elem.nodeType === 3 || elem.nodeType === 8) ) {
                        return;
                    }

                    // Event object or event type
                    var type = event.type || event,
                            namespaces = [],
                            cache, exclusive, i, cur, old, ontype, special, handle, eventPath, bubbleType;

                    // focus/blur morphs to focusin/out; ensure we're not firing them right now
                    if ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
                        return;
                    }

                    if ( type.indexOf( "!" ) >= 0 ) {
                        // Exclusive events trigger only for the exact event (no namespaces)
                        type = type.slice(0, -1);
                        exclusive = true;
                    }

                    if ( type.indexOf( "." ) >= 0 ) {
                        // Namespaced trigger; create a regexp to match event type in handle()
                        namespaces = type.split(".");
                        type = namespaces.shift();
                        namespaces.sort();
                    }

                    if ( (!elem || jQuery.event.customEvent[ type ]) && !jQuery.event.global[ type ] ) {
                        // No jQuery handlers for this event type, and it can't have inline handlers
                        return;
                    }

                    // Caller can pass in an Event, Object, or just an event type string
                    event = typeof event === "object" ?
                            // jQuery.Event object
                            event[ jQuery.expando ] ? event :
                                    // Object literal
                                    new jQuery.Event( type, event ) :
                            // Just the event type (string)
                            new jQuery.Event( type );

                    event.type = type;
                    event.isTrigger = true;
                    event.exclusive = exclusive;
                    event.namespace = namespaces.join( "." );
                    event.namespace_re = event.namespace? new RegExp("(^|\\.)" + namespaces.join("\\.(?:.*\\.)?") + "(\\.|$)") : null;
                    ontype = type.indexOf( ":" ) < 0 ? "on" + type : "";

                    // Handle a global trigger
                    if ( !elem ) {

                        // TODO: Stop taunting the data cache; remove global events and always attach to document
                        cache = jQuery.cache;
                        for ( i in cache ) {
                            if ( cache[ i ].events && cache[ i ].events[ type ] ) {
                                jQuery.event.trigger( event, data, cache[ i ].handle.elem, true );
                            }
                        }
                        return;
                    }

                    // Clean up the event in case it is being reused
                    event.result = undefined;
                    if ( !event.target ) {
                        event.target = elem;
                    }

                    // Clone any incoming data and prepend the event, creating the handler arg list
                    data = data != null ? jQuery.makeArray( data ) : [];
                    data.unshift( event );

                    // Allow special events to draw outside the lines
                    special = jQuery.event.special[ type ] || {};
                    if ( special.trigger && special.trigger.apply( elem, data ) === false ) {
                        return;
                    }

                    // Determine event propagation path in advance, per W3C events spec (#9951)
                    // Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
                    eventPath = [[ elem, special.bindType || type ]];
                    if ( !onlyHandlers && !special.noBubble && !jQuery.isWindow( elem ) ) {

                        bubbleType = special.delegateType || type;
                        cur = rfocusMorph.test( bubbleType + type ) ? elem : elem.parentNode;
                        old = null;
                        for ( ; cur; cur = cur.parentNode ) {
                            eventPath.push([ cur, bubbleType ]);
                            old = cur;
                        }

                        // Only add window if we got to document (e.g., not plain obj or detached DOM)
                        if ( old && old === elem.ownerDocument ) {
                            eventPath.push([ old.defaultView || old.parentWindow || window, bubbleType ]);
                        }
                    }

                    // Fire handlers on the event path
                    for ( i = 0; i < eventPath.length && !event.isPropagationStopped(); i++ ) {

                        cur = eventPath[i][0];
                        event.type = eventPath[i][1];

                        handle = ( jQuery._data( cur, "events" ) || {} )[ event.type ] && jQuery._data( cur, "handle" );
                        if ( handle ) {
                            handle.apply( cur, data );
                        }
                        // Note that this is a bare JS function and not a jQuery handler
                        handle = ontype && cur[ ontype ];
                        if ( handle && jQuery.acceptData( cur ) && handle.apply( cur, data ) === false ) {
                            event.preventDefault();
                        }
                    }
                    event.type = type;

                    // If nobody prevented the default action, do it now
                    if ( !onlyHandlers && !event.isDefaultPrevented() ) {

                        if ( (!special._default || special._default.apply( elem.ownerDocument, data ) === false) &&
                                !(type === "click" && jQuery.nodeName( elem, "a" )) && jQuery.acceptData( elem ) ) {

                            // Call a native DOM method on the target with the same name name as the event.
                            // Can't use an .isFunction() check here because IE6/7 fails that test.
                            // Don't do default actions on window, that's where global variables be (#6170)
                            // IE<9 dies on focus/blur to hidden element (#1486)
                            if ( ontype && elem[ type ] && ((type !== "focus" && type !== "blur") || event.target.offsetWidth !== 0) && !jQuery.isWindow( elem ) ) {

                                // Don't re-trigger an onFOO event when we call its FOO() method
                                old = elem[ ontype ];

                                if ( old ) {
                                    elem[ ontype ] = null;
                                }

                                // Prevent re-triggering of the same event, since we already bubbled it above
                                jQuery.event.triggered = type;
                                elem[ type ]();
                                jQuery.event.triggered = undefined;

                                if ( old ) {
                                    elem[ ontype ] = old;
                                }
                            }
                        }
                    }

                    return event.result;
                },

                dispatch: function( event ) {

                    // Make a writable jQuery.Event from the native event object
                    event = jQuery.event.fix( event || window.event );

                    var handlers = ( (jQuery._data( this, "events" ) || {} )[ event.type ] || []),
                            delegateCount = handlers.delegateCount,
                            args = [].slice.call( arguments, 0 ),
                            run_all = !event.exclusive && !event.namespace,
                            special = jQuery.event.special[ event.type ] || {},
                            handlerQueue = [],
                            i, j, cur, jqcur, ret, selMatch, matched, matches, handleObj, sel, related;

                    // Use the fix-ed jQuery.Event rather than the (read-only) native event
                    args[0] = event;
                    event.delegateTarget = this;

                    // Call the preDispatch hook for the mapped type, and let it bail if desired
                    if ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
                        return;
                    }

                    // Determine handlers that should run if there are delegated events
                    // Avoid non-left-click bubbling in Firefox (#3861)
                    if ( delegateCount && !(event.button && event.type === "click") ) {

                        // Pregenerate a single jQuery object for reuse with .is()
                        jqcur = jQuery(this);
                        jqcur.context = this.ownerDocument || this;

                        for ( cur = event.target; cur != this; cur = cur.parentNode || this ) {

                            // Don't process events on disabled elements (#6911, #8165)
                            if ( cur.disabled !== true ) {
                                selMatch = {};
                                matches = [];
                                jqcur[0] = cur;
                                for ( i = 0; i < delegateCount; i++ ) {
                                    handleObj = handlers[ i ];
                                    sel = handleObj.selector;

                                    if ( selMatch[ sel ] === undefined ) {
                                        selMatch[ sel ] = (
                                                handleObj.quick ? quickIs( cur, handleObj.quick ) : jqcur.is( sel )
                                        );
                                    }
                                    if ( selMatch[ sel ] ) {
                                        matches.push( handleObj );
                                    }
                                }
                                if ( matches.length ) {
                                    handlerQueue.push({ elem: cur, matches: matches });
                                }
                            }
                        }
                    }

                    // Add the remaining (directly-bound) handlers
                    if ( handlers.length > delegateCount ) {
                        handlerQueue.push({ elem: this, matches: handlers.slice( delegateCount ) });
                    }

                    // Run delegates first; they may want to stop propagation beneath us
                    for ( i = 0; i < handlerQueue.length && !event.isPropagationStopped(); i++ ) {
                        matched = handlerQueue[ i ];
                        event.currentTarget = matched.elem;

                        for ( j = 0; j < matched.matches.length && !event.isImmediatePropagationStopped(); j++ ) {
                            handleObj = matched.matches[ j ];

                            // Triggered event must either 1) be non-exclusive and have no namespace, or
                            // 2) have namespace(s) a subset or equal to those in the bound event (both can have no namespace).
                            if ( run_all || (!event.namespace && !handleObj.namespace) || event.namespace_re && event.namespace_re.test( handleObj.namespace ) ) {

                                event.data = handleObj.data;
                                event.handleObj = handleObj;

                                ret = ( (jQuery.event.special[ handleObj.origType ] || {}).handle || handleObj.handler )
                                        .apply( matched.elem, args );

                                if ( ret !== undefined ) {
                                    event.result = ret;
                                    if ( ret === false ) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                }
                            }
                        }
                    }

                    // Call the postDispatch hook for the mapped type
                    if ( special.postDispatch ) {
                        special.postDispatch.call( this, event );
                    }

                    return event.result;
                },

                // Includes some event props shared by KeyEvent and MouseEvent
                // *** attrChange attrName relatedNode srcElement  are not normalized, non-W3C, deprecated, will be removed in 1.8 ***
                props: "attrChange attrName relatedNode srcElement altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),

                fixHooks: {},

                keyHooks: {
                    props: "char charCode key keyCode".split(" "),
                    filter: function( event, original ) {

                        // Add which for key events
                        if ( event.which == null ) {
                            event.which = original.charCode != null ? original.charCode : original.keyCode;
                        }

                        return event;
                    }
                },

                mouseHooks: {
                    props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
                    filter: function( event, original ) {
                        var eventDoc, doc, body,
                                button = original.button,
                                fromElement = original.fromElement;

                        // Calculate pageX/Y if missing and clientX/Y available
                        if ( event.pageX == null && original.clientX != null ) {
                            eventDoc = event.target.ownerDocument || document;
                            doc = eventDoc.documentElement;
                            body = eventDoc.body;

                            event.pageX = original.clientX + ( doc && doc.scrollLeft || body && body.scrollLeft || 0 ) - ( doc && doc.clientLeft || body && body.clientLeft || 0 );
                            event.pageY = original.clientY + ( doc && doc.scrollTop  || body && body.scrollTop  || 0 ) - ( doc && doc.clientTop  || body && body.clientTop  || 0 );
                        }

                        // Add relatedTarget, if necessary
                        if ( !event.relatedTarget && fromElement ) {
                            event.relatedTarget = fromElement === event.target ? original.toElement : fromElement;
                        }

                        // Add which for click: 1 === left; 2 === middle; 3 === right
                        // Note: button is not normalized, so don't use it
                        if ( !event.which && button !== undefined ) {
                            event.which = ( button & 1 ? 1 : ( button & 2 ? 3 : ( button & 4 ? 2 : 0 ) ) );
                        }

                        return event;
                    }
                },

                fix: function( event ) {
                    if ( event[ jQuery.expando ] ) {
                        return event;
                    }

                    // Create a writable copy of the event object and normalize some properties
                    var i, prop,
                            originalEvent = event,
                            fixHook = jQuery.event.fixHooks[ event.type ] || {},
                            copy = fixHook.props ? this.props.concat( fixHook.props ) : this.props;

                    event = jQuery.Event( originalEvent );

                    for ( i = copy.length; i; ) {
                        prop = copy[ --i ];
                        event[ prop ] = originalEvent[ prop ];
                    }

                    // Fix target property, if necessary (#1925, IE 6/7/8 & Safari2)
                    if ( !event.target ) {
                        event.target = originalEvent.srcElement || document;
                    }

                    // Target should not be a text node (#504, Safari)
                    if ( event.target.nodeType === 3 ) {
                        event.target = event.target.parentNode;
                    }

                    // For mouse/key events; add metaKey if it's not there (#3368, IE6/7/8)
                    if ( event.metaKey === undefined ) {
                        event.metaKey = event.ctrlKey;
                    }

                    return fixHook.filter? fixHook.filter( event, originalEvent ) : event;
                },

                special: {
                    ready: {
                        // Make sure the ready event is setup
                        setup: jQuery.bindReady
                    },

                    load: {
                        // Prevent triggered image.load events from bubbling to window.load
                        noBubble: true
                    },

                    focus: {
                        delegateType: "focusin"
                    },
                    blur: {
                        delegateType: "focusout"
                    },

                    beforeunload: {
                        setup: function( data, namespaces, eventHandle ) {
                            // We only want to do this special case on windows
                            if ( jQuery.isWindow( this ) ) {
                                this.onbeforeunload = eventHandle;
                            }
                        },

                        teardown: function( namespaces, eventHandle ) {
                            if ( this.onbeforeunload === eventHandle ) {
                                this.onbeforeunload = null;
                            }
                        }
                    }
                },

                simulate: function( type, elem, event, bubble ) {
                    // Piggyback on a donor event to simulate a different one.
                    // Fake originalEvent to avoid donor's stopPropagation, but if the
                    // simulated event prevents default then we do the same on the donor.
                    var e = jQuery.extend(
                            new jQuery.Event(),
                            event,
                            { type: type,
                                isSimulated: true,
                                originalEvent: {}
                            }
                    );
                    if ( bubble ) {
                        jQuery.event.trigger( e, null, elem );
                    } else {
                        jQuery.event.dispatch.call( elem, e );
                    }
                    if ( e.isDefaultPrevented() ) {
                        event.preventDefault();
                    }
                }
            };

// Some plugins are using, but it's undocumented/deprecated and will be removed.
// The 1.7 special event interface should provide all the hooks needed now.
            jQuery.event.handle = jQuery.event.dispatch;

            jQuery.removeEvent = document.removeEventListener ?
                    function( elem, type, handle ) {
                        if ( elem.removeEventListener ) {
                            elem.removeEventListener( type, handle, false );
                        }
                    } :
                    function( elem, type, handle ) {
                        if ( elem.detachEvent ) {
                            elem.detachEvent( "on" + type, handle );
                        }
                    };

            jQuery.Event = function( src, props ) {
                // Allow instantiation without the 'new' keyword
                if ( !(this instanceof jQuery.Event) ) {
                    return new jQuery.Event( src, props );
                }

                // Event object
                if ( src && src.type ) {
                    this.originalEvent = src;
                    this.type = src.type;

                    // Events bubbling up the document may have been marked as prevented
                    // by a handler lower down the tree; reflect the correct value.
                    this.isDefaultPrevented = ( src.defaultPrevented || src.returnValue === false ||
                    src.getPreventDefault && src.getPreventDefault() ) ? returnTrue : returnFalse;

                    // Event type
                } else {
                    this.type = src;
                }

                // Put explicitly provided properties onto the event object
                if ( props ) {
                    jQuery.extend( this, props );
                }

                // Create a timestamp if incoming event doesn't have one
                this.timeStamp = src && src.timeStamp || jQuery.now();

                // Mark it as fixed
                this[ jQuery.expando ] = true;
            };

            function returnFalse() {
                return false;
            }
            function returnTrue() {
                return true;
            }

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// http://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
            jQuery.Event.prototype = {
                preventDefault: function() {
                    this.isDefaultPrevented = returnTrue;

                    var e = this.originalEvent;
                    if ( !e ) {
                        return;
                    }

                    // if preventDefault exists run it on the original event
                    if ( e.preventDefault ) {
                        e.preventDefault();

                        // otherwise set the returnValue property of the original event to false (IE)
                    } else {
                        e.returnValue = false;
                    }
                },
                stopPropagation: function() {
                    this.isPropagationStopped = returnTrue;

                    var e = this.originalEvent;
                    if ( !e ) {
                        return;
                    }
                    // if stopPropagation exists run it on the original event
                    if ( e.stopPropagation ) {
                        e.stopPropagation();
                    }
                    // otherwise set the cancelBubble property of the original event to true (IE)
                    e.cancelBubble = true;
                },
                stopImmediatePropagation: function() {
                    this.isImmediatePropagationStopped = returnTrue;
                    this.stopPropagation();
                },
                isDefaultPrevented: returnFalse,
                isPropagationStopped: returnFalse,
                isImmediatePropagationStopped: returnFalse
            };

// Create mouseenter/leave events using mouseover/out and event-time checks
            jQuery.each({
                mouseenter: "mouseover",
                mouseleave: "mouseout"
            }, function( orig, fix ) {
                jQuery.event.special[ orig ] = {
                    delegateType: fix,
                    bindType: fix,

                    handle: function( event ) {
                        var target = this,
                                related = event.relatedTarget,
                                handleObj = event.handleObj,
                                selector = handleObj.selector,
                                ret;

                        // For mousenter/leave call the handler if related is outside the target.
                        // NB: No relatedTarget if the mouse left/entered the browser window
                        if ( !related || (related !== target && !jQuery.contains( target, related )) ) {
                            event.type = handleObj.origType;
                            ret = handleObj.handler.apply( this, arguments );
                            event.type = fix;
                        }
                        return ret;
                    }
                };
            });

// IE submit delegation
            if ( !jQuery.support.submitBubbles ) {

                jQuery.event.special.submit = {
                    setup: function() {
                        // Only need this for delegated form submit events
                        if ( jQuery.nodeName( this, "form" ) ) {
                            return false;
                        }

                        // Lazy-add a submit handler when a descendant form may potentially be submitted
                        jQuery.event.add( this, "click._submit keypress._submit", function( e ) {
                            // Node name check avoids a VML-related crash in IE (#9807)
                            var elem = e.target,
                                    form = jQuery.nodeName( elem, "input" ) || jQuery.nodeName( elem, "button" ) ? elem.form : undefined;
                            if ( form && !form._submit_attached ) {
                                jQuery.event.add( form, "submit._submit", function( event ) {
                                    event._submit_bubble = true;
                                });
                                form._submit_attached = true;
                            }
                        });
                        // return undefined since we don't need an event listener
                    },

                    postDispatch: function( event ) {
                        // If form was submitted by the user, bubble the event up the tree
                        if ( event._submit_bubble ) {
                            delete event._submit_bubble;
                            if ( this.parentNode && !event.isTrigger ) {
                                jQuery.event.simulate( "submit", this.parentNode, event, true );
                            }
                        }
                    },

                    teardown: function() {
                        // Only need this for delegated form submit events
                        if ( jQuery.nodeName( this, "form" ) ) {
                            return false;
                        }

                        // Remove delegated handlers; cleanData eventually reaps submit handlers attached above
                        jQuery.event.remove( this, "._submit" );
                    }
                };
            }

// IE change delegation and checkbox/radio fix
            if ( !jQuery.support.changeBubbles ) {

                jQuery.event.special.change = {

                    setup: function() {

                        if ( rformElems.test( this.nodeName ) ) {
                            // IE doesn't fire change on a check/radio until blur; trigger it on click
                            // after a propertychange. Eat the blur-change in special.change.handle.
                            // This still fires onchange a second time for check/radio after blur.
                            if ( this.type === "checkbox" || this.type === "radio" ) {
                                jQuery.event.add( this, "propertychange._change", function( event ) {
                                    if ( event.originalEvent.propertyName === "checked" ) {
                                        this._just_changed = true;
                                    }
                                });
                                jQuery.event.add( this, "click._change", function( event ) {
                                    if ( this._just_changed && !event.isTrigger ) {
                                        this._just_changed = false;
                                        jQuery.event.simulate( "change", this, event, true );
                                    }
                                });
                            }
                            return false;
                        }
                        // Delegated event; lazy-add a change handler on descendant inputs
                        jQuery.event.add( this, "beforeactivate._change", function( e ) {
                            var elem = e.target;

                            if ( rformElems.test( elem.nodeName ) && !elem._change_attached ) {
                                jQuery.event.add( elem, "change._change", function( event ) {
                                    if ( this.parentNode && !event.isSimulated && !event.isTrigger ) {
                                        jQuery.event.simulate( "change", this.parentNode, event, true );
                                    }
                                });
                                elem._change_attached = true;
                            }
                        });
                    },

                    handle: function( event ) {
                        var elem = event.target;

                        // Swallow native change events from checkbox/radio, we already triggered them above
                        if ( this !== elem || event.isSimulated || event.isTrigger || (elem.type !== "radio" && elem.type !== "checkbox") ) {
                            return event.handleObj.handler.apply( this, arguments );
                        }
                    },

                    teardown: function() {
                        jQuery.event.remove( this, "._change" );

                        return rformElems.test( this.nodeName );
                    }
                };
            }

// Create "bubbling" focus and blur events
            if ( !jQuery.support.focusinBubbles ) {
                jQuery.each({ focus: "focusin", blur: "focusout" }, function( orig, fix ) {

                    // Attach a single capturing handler while someone wants focusin/focusout
                    var attaches = 0,
                            handler = function( event ) {
                                jQuery.event.simulate( fix, event.target, jQuery.event.fix( event ), true );
                            };

                    jQuery.event.special[ fix ] = {
                        setup: function() {
                            if ( attaches++ === 0 ) {
                                document.addEventListener( orig, handler, true );
                            }
                        },
                        teardown: function() {
                            if ( --attaches === 0 ) {
                                document.removeEventListener( orig, handler, true );
                            }
                        }
                    };
                });
            }

            jQuery.fn.extend({

                on: function( types, selector, data, fn, /*INTERNAL*/ one ) {
                    var origFn, type;

                    // Types can be a map of types/handlers
                    if ( typeof types === "object" ) {
                        // ( types-Object, selector, data )
                        if ( typeof selector !== "string" ) { // && selector != null
                            // ( types-Object, data )
                            data = data || selector;
                            selector = undefined;
                        }
                        for ( type in types ) {
                            this.on( type, selector, data, types[ type ], one );
                        }
                        return this;
                    }

                    if ( data == null && fn == null ) {
                        // ( types, fn )
                        fn = selector;
                        data = selector = undefined;
                    } else if ( fn == null ) {
                        if ( typeof selector === "string" ) {
                            // ( types, selector, fn )
                            fn = data;
                            data = undefined;
                        } else {
                            // ( types, data, fn )
                            fn = data;
                            data = selector;
                            selector = undefined;
                        }
                    }
                    if ( fn === false ) {
                        fn = returnFalse;
                    } else if ( !fn ) {
                        return this;
                    }

                    if ( one === 1 ) {
                        origFn = fn;
                        fn = function( event ) {
                            // Can use an empty set, since event contains the info
                            jQuery().off( event );
                            return origFn.apply( this, arguments );
                        };
                        // Use same guid so caller can remove using origFn
                        fn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
                    }
                    return this.each( function() {
                        jQuery.event.add( this, types, fn, data, selector );
                    });
                },
                one: function( types, selector, data, fn ) {
                    return this.on( types, selector, data, fn, 1 );
                },
                off: function( types, selector, fn ) {
                    if ( types && types.preventDefault && types.handleObj ) {
                        // ( event )  dispatched jQuery.Event
                        var handleObj = types.handleObj;
                        jQuery( types.delegateTarget ).off(
                                handleObj.namespace ? handleObj.origType + "." + handleObj.namespace : handleObj.origType,
                                handleObj.selector,
                                handleObj.handler
                        );
                        return this;
                    }
                    if ( typeof types === "object" ) {
                        // ( types-object [, selector] )
                        for ( var type in types ) {
                            this.off( type, selector, types[ type ] );
                        }
                        return this;
                    }
                    if ( selector === false || typeof selector === "function" ) {
                        // ( types [, fn] )
                        fn = selector;
                        selector = undefined;
                    }
                    if ( fn === false ) {
                        fn = returnFalse;
                    }
                    return this.each(function() {
                        jQuery.event.remove( this, types, fn, selector );
                    });
                },

                bind: function( types, data, fn ) {
                    return this.on( types, null, data, fn );
                },
                unbind: function( types, fn ) {
                    return this.off( types, null, fn );
                },

                live: function( types, data, fn ) {
                    jQuery( this.context ).on( types, this.selector, data, fn );
                    return this;
                },
                die: function( types, fn ) {
                    jQuery( this.context ).off( types, this.selector || "**", fn );
                    return this;
                },

                delegate: function( selector, types, data, fn ) {
                    return this.on( types, selector, data, fn );
                },
                undelegate: function( selector, types, fn ) {
                    // ( namespace ) or ( selector, types [, fn] )
                    return arguments.length == 1? this.off( selector, "**" ) : this.off( types, selector, fn );
                },

                trigger: function( type, data ) {
                    return this.each(function() {
                        jQuery.event.trigger( type, data, this );
                    });
                },
                triggerHandler: function( type, data ) {
                    if ( this[0] ) {
                        return jQuery.event.trigger( type, data, this[0], true );
                    }
                },

                toggle: function( fn ) {
                    // Save reference to arguments for access in closure
                    var args = arguments,
                            guid = fn.guid || jQuery.guid++,
                            i = 0,
                            toggler = function( event ) {
                                // Figure out which function to execute
                                var lastToggle = ( jQuery._data( this, "lastToggle" + fn.guid ) || 0 ) % i;
                                jQuery._data( this, "lastToggle" + fn.guid, lastToggle + 1 );

                                // Make sure that clicks stop
                                event.preventDefault();

                                // and execute the function
                                return args[ lastToggle ].apply( this, arguments ) || false;
                            };

                    // link all the functions, so any of them can unbind this click handler
                    toggler.guid = guid;
                    while ( i < args.length ) {
                        args[ i++ ].guid = guid;
                    }

                    return this.click( toggler );
                },

                hover: function( fnOver, fnOut ) {
                    return this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
                }
            });

            jQuery.each( ("blur focus focusin focusout load resize scroll unload click dblclick " +
            "mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave " +
            "change select submit keydown keypress keyup error contextmenu").split(" "), function( i, name ) {

                // Handle event binding
                jQuery.fn[ name ] = function( data, fn ) {
                    if ( fn == null ) {
                        fn = data;
                        data = null;
                    }

                    return arguments.length > 0 ?
                            this.on( name, null, data, fn ) :
                            this.trigger( name );
                };

                if ( jQuery.attrFn ) {
                    jQuery.attrFn[ name ] = true;
                }

                if ( rkeyEvent.test( name ) ) {
                    jQuery.event.fixHooks[ name ] = jQuery.event.keyHooks;
                }

                if ( rmouseEvent.test( name ) ) {
                    jQuery.event.fixHooks[ name ] = jQuery.event.mouseHooks;
                }
            });



            /*!
             * Sizzle CSS Selector Engine
             *  Copyright 2011, The Dojo Foundation
             *  Released under the MIT, BSD, and GPL Licenses.
             *  More information: http://sizzlejs.com/
             */
            (function(){

                var chunker = /((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^\[\]]*\]|['"][^'"]*['"]|[^\[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?((?:.|\r|\n)*)/g,
                        expando = "sizcache" + (Math.random() + '').replace('.', ''),
                        done = 0,
                        toString = Object.prototype.toString,
                        hasDuplicate = false,
                        baseHasDuplicate = true,
                        rBackslash = /\\/g,
                        rReturn = /\r\n/g,
                        rNonWord = /\W/;

// Here we check if the JavaScript engine is using some sort of
// optimization where it does not always call our comparision
// function. If that is the case, discard the hasDuplicate value.
//   Thus far that includes Google Chrome.
                [0, 0].sort(function() {
                    baseHasDuplicate = false;
                    return 0;
                });

                var Sizzle = function( selector, context, results, seed ) {
                    results = results || [];
                    context = context || document;

                    var origContext = context;

                    if ( context.nodeType !== 1 && context.nodeType !== 9 ) {
                        return [];
                    }

                    if ( !selector || typeof selector !== "string" ) {
                        return results;
                    }

                    var m, set, checkSet, extra, ret, cur, pop, i,
                            prune = true,
                            contextXML = Sizzle.isXML( context ),
                            parts = [],
                            soFar = selector;

                    // Reset the position of the chunker regexp (start from head)
                    do {
                        chunker.exec( "" );
                        m = chunker.exec( soFar );

                        if ( m ) {
                            soFar = m[3];

                            parts.push( m[1] );

                            if ( m[2] ) {
                                extra = m[3];
                                break;
                            }
                        }
                    } while ( m );

                    if ( parts.length > 1 && origPOS.exec( selector ) ) {

                        if ( parts.length === 2 && Expr.relative[ parts[0] ] ) {
                            set = posProcess( parts[0] + parts[1], context, seed );

                        } else {
                            set = Expr.relative[ parts[0] ] ?
                                    [ context ] :
                                    Sizzle( parts.shift(), context );

                            while ( parts.length ) {
                                selector = parts.shift();

                                if ( Expr.relative[ selector ] ) {
                                    selector += parts.shift();
                                }

                                set = posProcess( selector, set, seed );
                            }
                        }

                    } else {
                        // Take a shortcut and set the context if the root selector is an ID
                        // (but not if it'll be faster if the inner selector is an ID)
                        if ( !seed && parts.length > 1 && context.nodeType === 9 && !contextXML &&
                                Expr.match.ID.test(parts[0]) && !Expr.match.ID.test(parts[parts.length - 1]) ) {

                            ret = Sizzle.find( parts.shift(), context, contextXML );
                            context = ret.expr ?
                                    Sizzle.filter( ret.expr, ret.set )[0] :
                                    ret.set[0];
                        }

                        if ( context ) {
                            ret = seed ?
                            { expr: parts.pop(), set: makeArray(seed) } :
                                    Sizzle.find( parts.pop(), parts.length === 1 && (parts[0] === "~" || parts[0] === "+") && context.parentNode ? context.parentNode : context, contextXML );

                            set = ret.expr ?
                                    Sizzle.filter( ret.expr, ret.set ) :
                                    ret.set;

                            if ( parts.length > 0 ) {
                                checkSet = makeArray( set );

                            } else {
                                prune = false;
                            }

                            while ( parts.length ) {
                                cur = parts.pop();
                                pop = cur;

                                if ( !Expr.relative[ cur ] ) {
                                    cur = "";
                                } else {
                                    pop = parts.pop();
                                }

                                if ( pop == null ) {
                                    pop = context;
                                }

                                Expr.relative[ cur ]( checkSet, pop, contextXML );
                            }

                        } else {
                            checkSet = parts = [];
                        }
                    }

                    if ( !checkSet ) {
                        checkSet = set;
                    }

                    if ( !checkSet ) {
                        Sizzle.error( cur || selector );
                    }

                    if ( toString.call(checkSet) === "[object Array]" ) {
                        if ( !prune ) {
                            results.push.apply( results, checkSet );

                        } else if ( context && context.nodeType === 1 ) {
                            for ( i = 0; checkSet[i] != null; i++ ) {
                                if ( checkSet[i] && (checkSet[i] === true || checkSet[i].nodeType === 1 && Sizzle.contains(context, checkSet[i])) ) {
                                    results.push( set[i] );
                                }
                            }

                        } else {
                            for ( i = 0; checkSet[i] != null; i++ ) {
                                if ( checkSet[i] && checkSet[i].nodeType === 1 ) {
                                    results.push( set[i] );
                                }
                            }
                        }

                    } else {
                        makeArray( checkSet, results );
                    }

                    if ( extra ) {
                        Sizzle( extra, origContext, results, seed );
                        Sizzle.uniqueSort( results );
                    }

                    return results;
                };

                Sizzle.uniqueSort = function( results ) {
                    if ( sortOrder ) {
                        hasDuplicate = baseHasDuplicate;
                        results.sort( sortOrder );

                        if ( hasDuplicate ) {
                            for ( var i = 1; i < results.length; i++ ) {
                                if ( results[i] === results[ i - 1 ] ) {
                                    results.splice( i--, 1 );
                                }
                            }
                        }
                    }

                    return results;
                };

                Sizzle.matches = function( expr, set ) {
                    return Sizzle( expr, null, null, set );
                };

                Sizzle.matchesSelector = function( node, expr ) {
                    return Sizzle( expr, null, null, [node] ).length > 0;
                };

                Sizzle.find = function( expr, context, isXML ) {
                    var set, i, len, match, type, left;

                    if ( !expr ) {
                        return [];
                    }

                    for ( i = 0, len = Expr.order.length; i < len; i++ ) {
                        type = Expr.order[i];

                        if ( (match = Expr.leftMatch[ type ].exec( expr )) ) {
                            left = match[1];
                            match.splice( 1, 1 );

                            if ( left.substr( left.length - 1 ) !== "\\" ) {
                                match[1] = (match[1] || "").replace( rBackslash, "" );
                                set = Expr.find[ type ]( match, context, isXML );

                                if ( set != null ) {
                                    expr = expr.replace( Expr.match[ type ], "" );
                                    break;
                                }
                            }
                        }
                    }

                    if ( !set ) {
                        set = typeof context.getElementsByTagName !== "undefined" ?
                                context.getElementsByTagName( "*" ) :
                                [];
                    }

                    return { set: set, expr: expr };
                };

                Sizzle.filter = function( expr, set, inplace, not ) {
                    var match, anyFound,
                            type, found, item, filter, left,
                            i, pass,
                            old = expr,
                            result = [],
                            curLoop = set,
                            isXMLFilter = set && set[0] && Sizzle.isXML( set[0] );

                    while ( expr && set.length ) {
                        for ( type in Expr.filter ) {
                            if ( (match = Expr.leftMatch[ type ].exec( expr )) != null && match[2] ) {
                                filter = Expr.filter[ type ];
                                left = match[1];

                                anyFound = false;

                                match.splice(1,1);

                                if ( left.substr( left.length - 1 ) === "\\" ) {
                                    continue;
                                }

                                if ( curLoop === result ) {
                                    result = [];
                                }

                                if ( Expr.preFilter[ type ] ) {
                                    match = Expr.preFilter[ type ]( match, curLoop, inplace, result, not, isXMLFilter );

                                    if ( !match ) {
                                        anyFound = found = true;

                                    } else if ( match === true ) {
                                        continue;
                                    }
                                }

                                if ( match ) {
                                    for ( i = 0; (item = curLoop[i]) != null; i++ ) {
                                        if ( item ) {
                                            found = filter( item, match, i, curLoop );
                                            pass = not ^ found;

                                            if ( inplace && found != null ) {
                                                if ( pass ) {
                                                    anyFound = true;

                                                } else {
                                                    curLoop[i] = false;
                                                }

                                            } else if ( pass ) {
                                                result.push( item );
                                                anyFound = true;
                                            }
                                        }
                                    }
                                }

                                if ( found !== undefined ) {
                                    if ( !inplace ) {
                                        curLoop = result;
                                    }

                                    expr = expr.replace( Expr.match[ type ], "" );

                                    if ( !anyFound ) {
                                        return [];
                                    }

                                    break;
                                }
                            }
                        }

                        // Improper expression
                        if ( expr === old ) {
                            if ( anyFound == null ) {
                                Sizzle.error( expr );

                            } else {
                                break;
                            }
                        }

                        old = expr;
                    }

                    return curLoop;
                };

                Sizzle.error = function( msg ) {
                    throw new Error( "Syntax error, unrecognized expression: " + msg );
                };

                /**
                 * Utility function for retreiving the text value of an array of DOM nodes
                 * @param {Array|Element} elem
                 */
                var getText = Sizzle.getText = function( elem ) {
                    var i, node,
                            nodeType = elem.nodeType,
                            ret = "";

                    if ( nodeType ) {
                        if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {
                            // Use textContent || innerText for elements
                            if ( typeof elem.textContent === 'string' ) {
                                return elem.textContent;
                            } else if ( typeof elem.innerText === 'string' ) {
                                // Replace IE's carriage returns
                                return elem.innerText.replace( rReturn, '' );
                            } else {
                                // Traverse it's children
                                for ( elem = elem.firstChild; elem; elem = elem.nextSibling) {
                                    ret += getText( elem );
                                }
                            }
                        } else if ( nodeType === 3 || nodeType === 4 ) {
                            return elem.nodeValue;
                        }
                    } else {

                        // If no nodeType, this is expected to be an array
                        for ( i = 0; (node = elem[i]); i++ ) {
                            // Do not traverse comment nodes
                            if ( node.nodeType !== 8 ) {
                                ret += getText( node );
                            }
                        }
                    }
                    return ret;
                };

                var Expr = Sizzle.selectors = {
                    order: [ "ID", "NAME", "TAG" ],

                    match: {
                        ID: /#((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,
                        CLASS: /\.((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,
                        NAME: /\[name=['"]*((?:[\w\u00c0-\uFFFF\-]|\\.)+)['"]*\]/,
                        ATTR: /\[\s*((?:[\w\u00c0-\uFFFF\-]|\\.)+)\s*(?:(\S?=)\s*(?:(['"])(.*?)\3|(#?(?:[\w\u00c0-\uFFFF\-]|\\.)*)|)|)\s*\]/,
                        TAG: /^((?:[\w\u00c0-\uFFFF\*\-]|\\.)+)/,
                        CHILD: /:(only|nth|last|first)-child(?:\(\s*(even|odd|(?:[+\-]?\d+|(?:[+\-]?\d*)?n\s*(?:[+\-]\s*\d+)?))\s*\))?/,
                        POS: /:(nth|eq|gt|lt|first|last|even|odd)(?:\((\d*)\))?(?=[^\-]|$)/,
                        PSEUDO: /:((?:[\w\u00c0-\uFFFF\-]|\\.)+)(?:\((['"]?)((?:\([^\)]+\)|[^\(\)]*)+)\2\))?/
                    },

                    leftMatch: {},

                    attrMap: {
                        "class": "className",
                        "for": "htmlFor"
                    },

                    attrHandle: {
                        href: function( elem ) {
                            return elem.getAttribute( "href" );
                        },
                        type: function( elem ) {
                            return elem.getAttribute( "type" );
                        }
                    },

                    relative: {
                        "+": function(checkSet, part){
                            var isPartStr = typeof part === "string",
                                    isTag = isPartStr && !rNonWord.test( part ),
                                    isPartStrNotTag = isPartStr && !isTag;

                            if ( isTag ) {
                                part = part.toLowerCase();
                            }

                            for ( var i = 0, l = checkSet.length, elem; i < l; i++ ) {
                                if ( (elem = checkSet[i]) ) {
                                    while ( (elem = elem.previousSibling) && elem.nodeType !== 1 ) {}

                                    checkSet[i] = isPartStrNotTag || elem && elem.nodeName.toLowerCase() === part ?
                                    elem || false :
                                    elem === part;
                                }
                            }

                            if ( isPartStrNotTag ) {
                                Sizzle.filter( part, checkSet, true );
                            }
                        },

                        ">": function( checkSet, part ) {
                            var elem,
                                    isPartStr = typeof part === "string",
                                    i = 0,
                                    l = checkSet.length;

                            if ( isPartStr && !rNonWord.test( part ) ) {
                                part = part.toLowerCase();

                                for ( ; i < l; i++ ) {
                                    elem = checkSet[i];

                                    if ( elem ) {
                                        var parent = elem.parentNode;
                                        checkSet[i] = parent.nodeName.toLowerCase() === part ? parent : false;
                                    }
                                }

                            } else {
                                for ( ; i < l; i++ ) {
                                    elem = checkSet[i];

                                    if ( elem ) {
                                        checkSet[i] = isPartStr ?
                                                elem.parentNode :
                                        elem.parentNode === part;
                                    }
                                }

                                if ( isPartStr ) {
                                    Sizzle.filter( part, checkSet, true );
                                }
                            }
                        },

                        "": function(checkSet, part, isXML){
                            var nodeCheck,
                                    doneName = done++,
                                    checkFn = dirCheck;

                            if ( typeof part === "string" && !rNonWord.test( part ) ) {
                                part = part.toLowerCase();
                                nodeCheck = part;
                                checkFn = dirNodeCheck;
                            }

                            checkFn( "parentNode", part, doneName, checkSet, nodeCheck, isXML );
                        },

                        "~": function( checkSet, part, isXML ) {
                            var nodeCheck,
                                    doneName = done++,
                                    checkFn = dirCheck;

                            if ( typeof part === "string" && !rNonWord.test( part ) ) {
                                part = part.toLowerCase();
                                nodeCheck = part;
                                checkFn = dirNodeCheck;
                            }

                            checkFn( "previousSibling", part, doneName, checkSet, nodeCheck, isXML );
                        }
                    },

                    find: {
                        ID: function( match, context, isXML ) {
                            if ( typeof context.getElementById !== "undefined" && !isXML ) {
                                var m = context.getElementById(match[1]);
                                // Check parentNode to catch when Blackberry 4.6 returns
                                // nodes that are no longer in the document #6963
                                return m && m.parentNode ? [m] : [];
                            }
                        },

                        NAME: function( match, context ) {
                            if ( typeof context.getElementsByName !== "undefined" ) {
                                var ret = [],
                                        results = context.getElementsByName( match[1] );

                                for ( var i = 0, l = results.length; i < l; i++ ) {
                                    if ( results[i].getAttribute("name") === match[1] ) {
                                        ret.push( results[i] );
                                    }
                                }

                                return ret.length === 0 ? null : ret;
                            }
                        },

                        TAG: function( match, context ) {
                            if ( typeof context.getElementsByTagName !== "undefined" ) {
                                return context.getElementsByTagName( match[1] );
                            }
                        }
                    },
                    preFilter: {
                        CLASS: function( match, curLoop, inplace, result, not, isXML ) {
                            match = " " + match[1].replace( rBackslash, "" ) + " ";

                            if ( isXML ) {
                                return match;
                            }

                            for ( var i = 0, elem; (elem = curLoop[i]) != null; i++ ) {
                                if ( elem ) {
                                    if ( not ^ (elem.className && (" " + elem.className + " ").replace(/[\t\n\r]/g, " ").indexOf(match) >= 0) ) {
                                        if ( !inplace ) {
                                            result.push( elem );
                                        }

                                    } else if ( inplace ) {
                                        curLoop[i] = false;
                                    }
                                }
                            }

                            return false;
                        },

                        ID: function( match ) {
                            return match[1].replace( rBackslash, "" );
                        },

                        TAG: function( match, curLoop ) {
                            return match[1].replace( rBackslash, "" ).toLowerCase();
                        },

                        CHILD: function( match ) {
                            if ( match[1] === "nth" ) {
                                if ( !match[2] ) {
                                    Sizzle.error( match[0] );
                                }

                                match[2] = match[2].replace(/^\+|\s*/g, '');

                                // parse equations like 'even', 'odd', '5', '2n', '3n+2', '4n-1', '-n+6'
                                var test = /(-?)(\d*)(?:n([+\-]?\d*))?/.exec(
                                        match[2] === "even" && "2n" || match[2] === "odd" && "2n+1" ||
                                        !/\D/.test( match[2] ) && "0n+" + match[2] || match[2]);

                                // calculate the numbers (first)n+(last) including if they are negative
                                match[2] = (test[1] + (test[2] || 1)) - 0;
                                match[3] = test[3] - 0;
                            }
                            else if ( match[2] ) {
                                Sizzle.error( match[0] );
                            }

                            // TODO: Move to normal caching system
                            match[0] = done++;

                            return match;
                        },

                        ATTR: function( match, curLoop, inplace, result, not, isXML ) {
                            var name = match[1] = match[1].replace( rBackslash, "" );

                            if ( !isXML && Expr.attrMap[name] ) {
                                match[1] = Expr.attrMap[name];
                            }

                            // Handle if an un-quoted value was used
                            match[4] = ( match[4] || match[5] || "" ).replace( rBackslash, "" );

                            if ( match[2] === "~=" ) {
                                match[4] = " " + match[4] + " ";
                            }

                            return match;
                        },

                        PSEUDO: function( match, curLoop, inplace, result, not ) {
                            if ( match[1] === "not" ) {
                                // If we're dealing with a complex expression, or a simple one
                                if ( ( chunker.exec(match[3]) || "" ).length > 1 || /^\w/.test(match[3]) ) {
                                    match[3] = Sizzle(match[3], null, null, curLoop);

                                } else {
                                    var ret = Sizzle.filter(match[3], curLoop, inplace, true ^ not);

                                    if ( !inplace ) {
                                        result.push.apply( result, ret );
                                    }

                                    return false;
                                }

                            } else if ( Expr.match.POS.test( match[0] ) || Expr.match.CHILD.test( match[0] ) ) {
                                return true;
                            }

                            return match;
                        },

                        POS: function( match ) {
                            match.unshift( true );

                            return match;
                        }
                    },

                    filters: {
                        enabled: function( elem ) {
                            return elem.disabled === false && elem.type !== "hidden";
                        },

                        disabled: function( elem ) {
                            return elem.disabled === true;
                        },

                        checked: function( elem ) {
                            return elem.checked === true;
                        },

                        selected: function( elem ) {
                            // Accessing this property makes selected-by-default
                            // options in Safari work properly
                            if ( elem.parentNode ) {
                                elem.parentNode.selectedIndex;
                            }

                            return elem.selected === true;
                        },

                        parent: function( elem ) {
                            return !!elem.firstChild;
                        },

                        empty: function( elem ) {
                            return !elem.firstChild;
                        },

                        has: function( elem, i, match ) {
                            return !!Sizzle( match[3], elem ).length;
                        },

                        header: function( elem ) {
                            return (/h\d/i).test( elem.nodeName );
                        },

                        text: function( elem ) {
                            var attr = elem.getAttribute( "type" ), type = elem.type;
                            // IE6 and 7 will map elem.type to 'text' for new HTML5 types (search, etc)
                            // use getAttribute instead to test this case
                            return elem.nodeName.toLowerCase() === "input" && "text" === type && ( attr === type || attr === null );
                        },

                        radio: function( elem ) {
                            return elem.nodeName.toLowerCase() === "input" && "radio" === elem.type;
                        },

                        checkbox: function( elem ) {
                            return elem.nodeName.toLowerCase() === "input" && "checkbox" === elem.type;
                        },

                        file: function( elem ) {
                            return elem.nodeName.toLowerCase() === "input" && "file" === elem.type;
                        },

                        password: function( elem ) {
                            return elem.nodeName.toLowerCase() === "input" && "password" === elem.type;
                        },

                        submit: function( elem ) {
                            var name = elem.nodeName.toLowerCase();
                            return (name === "input" || name === "button") && "submit" === elem.type;
                        },

                        image: function( elem ) {
                            return elem.nodeName.toLowerCase() === "input" && "image" === elem.type;
                        },

                        reset: function( elem ) {
                            var name = elem.nodeName.toLowerCase();
                            return (name === "input" || name === "button") && "reset" === elem.type;
                        },

                        button: function( elem ) {
                            var name = elem.nodeName.toLowerCase();
                            return name === "input" && "button" === elem.type || name === "button";
                        },

                        input: function( elem ) {
                            return (/input|select|textarea|button/i).test( elem.nodeName );
                        },

                        focus: function( elem ) {
                            return elem === elem.ownerDocument.activeElement;
                        }
                    },
                    setFilters: {
                        first: function( elem, i ) {
                            return i === 0;
                        },

                        last: function( elem, i, match, array ) {
                            return i === array.length - 1;
                        },

                        even: function( elem, i ) {
                            return i % 2 === 0;
                        },

                        odd: function( elem, i ) {
                            return i % 2 === 1;
                        },

                        lt: function( elem, i, match ) {
                            return i < match[3] - 0;
                        },

                        gt: function( elem, i, match ) {
                            return i > match[3] - 0;
                        },

                        nth: function( elem, i, match ) {
                            return match[3] - 0 === i;
                        },

                        eq: function( elem, i, match ) {
                            return match[3] - 0 === i;
                        }
                    },
                    filter: {
                        PSEUDO: function( elem, match, i, array ) {
                            var name = match[1],
                                    filter = Expr.filters[ name ];

                            if ( filter ) {
                                return filter( elem, i, match, array );

                            } else if ( name === "contains" ) {
                                return (elem.textContent || elem.innerText || getText([ elem ]) || "").indexOf(match[3]) >= 0;

                            } else if ( name === "not" ) {
                                var not = match[3];

                                for ( var j = 0, l = not.length; j < l; j++ ) {
                                    if ( not[j] === elem ) {
                                        return false;
                                    }
                                }

                                return true;

                            } else {
                                Sizzle.error( name );
                            }
                        },

                        CHILD: function( elem, match ) {
                            var first, last,
                                    doneName, parent, cache,
                                    count, diff,
                                    type = match[1],
                                    node = elem;

                            switch ( type ) {
                                case "only":
                                case "first":
                                    while ( (node = node.previousSibling) ) {
                                        if ( node.nodeType === 1 ) {
                                            return false;
                                        }
                                    }

                                    if ( type === "first" ) {
                                        return true;
                                    }

                                    node = elem;

                                    /* falls through */
                                case "last":
                                    while ( (node = node.nextSibling) ) {
                                        if ( node.nodeType === 1 ) {
                                            return false;
                                        }
                                    }

                                    return true;

                                case "nth":
                                    first = match[2];
                                    last = match[3];

                                    if ( first === 1 && last === 0 ) {
                                        return true;
                                    }

                                    doneName = match[0];
                                    parent = elem.parentNode;

                                    if ( parent && (parent[ expando ] !== doneName || !elem.nodeIndex) ) {
                                        count = 0;

                                        for ( node = parent.firstChild; node; node = node.nextSibling ) {
                                            if ( node.nodeType === 1 ) {
                                                node.nodeIndex = ++count;
                                            }
                                        }

                                        parent[ expando ] = doneName;
                                    }

                                    diff = elem.nodeIndex - last;

                                    if ( first === 0 ) {
                                        return diff === 0;

                                    } else {
                                        return ( diff % first === 0 && diff / first >= 0 );
                                    }
                            }
                        },

                        ID: function( elem, match ) {
                            return elem.nodeType === 1 && elem.getAttribute("id") === match;
                        },

                        TAG: function( elem, match ) {
                            return (match === "*" && elem.nodeType === 1) || !!elem.nodeName && elem.nodeName.toLowerCase() === match;
                        },

                        CLASS: function( elem, match ) {
                            return (" " + (elem.className || elem.getAttribute("class")) + " ")
                                            .indexOf( match ) > -1;
                        },

                        ATTR: function( elem, match ) {
                            var name = match[1],
                                    result = Sizzle.attr ?
                                            Sizzle.attr( elem, name ) :
                                            Expr.attrHandle[ name ] ?
                                                    Expr.attrHandle[ name ]( elem ) :
                                                    elem[ name ] != null ?
                                                            elem[ name ] :
                                                            elem.getAttribute( name ),
                                    value = result + "",
                                    type = match[2],
                                    check = match[4];

                            return result == null ?
                            type === "!=" :
                                    !type && Sizzle.attr ?
                                    result != null :
                                            type === "=" ?
                                            value === check :
                                                    type === "*=" ?
                                                    value.indexOf(check) >= 0 :
                                                            type === "~=" ?
                                                            (" " + value + " ").indexOf(check) >= 0 :
                                                                    !check ?
                                                                    value && result !== false :
                                                                            type === "!=" ?
                                                                            value !== check :
                                                                                    type === "^=" ?
                                                                                    value.indexOf(check) === 0 :
                                                                                            type === "$=" ?
                                                                                            value.substr(value.length - check.length) === check :
                                                                                                    type === "|=" ?
                                                                                                    value === check || value.substr(0, check.length + 1) === check + "-" :
                                                                                                            false;
                        },

                        POS: function( elem, match, i, array ) {
                            var name = match[2],
                                    filter = Expr.setFilters[ name ];

                            if ( filter ) {
                                return filter( elem, i, match, array );
                            }
                        }
                    }
                };

                var origPOS = Expr.match.POS,
                        fescape = function(all, num){
                            return "\\" + (num - 0 + 1);
                        };

                for ( var type in Expr.match ) {
                    Expr.match[ type ] = new RegExp( Expr.match[ type ].source + (/(?![^\[]*\])(?![^\(]*\))/.source) );
                    Expr.leftMatch[ type ] = new RegExp( /(^(?:.|\r|\n)*?)/.source + Expr.match[ type ].source.replace(/\\(\d+)/g, fescape) );
                }
// Expose origPOS
// "global" as in regardless of relation to brackets/parens
                Expr.match.globalPOS = origPOS;

                var makeArray = function( array, results ) {
                    array = Array.prototype.slice.call( array, 0 );

                    if ( results ) {
                        results.push.apply( results, array );
                        return results;
                    }

                    return array;
                };

// Perform a simple check to determine if the browser is capable of
// converting a NodeList to an array using builtin methods.
// Also verifies that the returned array holds DOM nodes
// (which is not the case in the Blackberry browser)
                try {
                    Array.prototype.slice.call( document.documentElement.childNodes, 0 )[0].nodeType;

// Provide a fallback method if it does not work
                } catch( e ) {
                    makeArray = function( array, results ) {
                        var i = 0,
                                ret = results || [];

                        if ( toString.call(array) === "[object Array]" ) {
                            Array.prototype.push.apply( ret, array );

                        } else {
                            if ( typeof array.length === "number" ) {
                                for ( var l = array.length; i < l; i++ ) {
                                    ret.push( array[i] );
                                }

                            } else {
                                for ( ; array[i]; i++ ) {
                                    ret.push( array[i] );
                                }
                            }
                        }

                        return ret;
                    };
                }

                var sortOrder, siblingCheck;

                if ( document.documentElement.compareDocumentPosition ) {
                    sortOrder = function( a, b ) {
                        if ( a === b ) {
                            hasDuplicate = true;
                            return 0;
                        }

                        if ( !a.compareDocumentPosition || !b.compareDocumentPosition ) {
                            return a.compareDocumentPosition ? -1 : 1;
                        }

                        return a.compareDocumentPosition(b) & 4 ? -1 : 1;
                    };

                } else {
                    sortOrder = function( a, b ) {
                        // The nodes are identical, we can exit early
                        if ( a === b ) {
                            hasDuplicate = true;
                            return 0;

                            // Fallback to using sourceIndex (in IE) if it's available on both nodes
                        } else if ( a.sourceIndex && b.sourceIndex ) {
                            return a.sourceIndex - b.sourceIndex;
                        }

                        var al, bl,
                                ap = [],
                                bp = [],
                                aup = a.parentNode,
                                bup = b.parentNode,
                                cur = aup;

                        // If the nodes are siblings (or identical) we can do a quick check
                        if ( aup === bup ) {
                            return siblingCheck( a, b );

                            // If no parents were found then the nodes are disconnected
                        } else if ( !aup ) {
                            return -1;

                        } else if ( !bup ) {
                            return 1;
                        }

                        // Otherwise they're somewhere else in the tree so we need
                        // to build up a full list of the parentNodes for comparison
                        while ( cur ) {
                            ap.unshift( cur );
                            cur = cur.parentNode;
                        }

                        cur = bup;

                        while ( cur ) {
                            bp.unshift( cur );
                            cur = cur.parentNode;
                        }

                        al = ap.length;
                        bl = bp.length;

                        // Start walking down the tree looking for a discrepancy
                        for ( var i = 0; i < al && i < bl; i++ ) {
                            if ( ap[i] !== bp[i] ) {
                                return siblingCheck( ap[i], bp[i] );
                            }
                        }

                        // We ended someplace up the tree so do a sibling check
                        return i === al ?
                                siblingCheck( a, bp[i], -1 ) :
                                siblingCheck( ap[i], b, 1 );
                    };

                    siblingCheck = function( a, b, ret ) {
                        if ( a === b ) {
                            return ret;
                        }

                        var cur = a.nextSibling;

                        while ( cur ) {
                            if ( cur === b ) {
                                return -1;
                            }

                            cur = cur.nextSibling;
                        }

                        return 1;
                    };
                }

// Check to see if the browser returns elements by name when
// querying by getElementById (and provide a workaround)
                (function(){
                    // We're going to inject a fake input element with a specified name
                    var form = document.createElement("div"),
                            id = "script" + (new Date()).getTime(),
                            root = document.documentElement;

                    form.innerHTML = "<a name='" + id + "'/>";

                    // Inject it into the root element, check its status, and remove it quickly
                    root.insertBefore( form, root.firstChild );

                    // The workaround has to do additional checks after a getElementById
                    // Which slows things down for other browsers (hence the branching)
                    if ( document.getElementById( id ) ) {
                        Expr.find.ID = function( match, context, isXML ) {
                            if ( typeof context.getElementById !== "undefined" && !isXML ) {
                                var m = context.getElementById(match[1]);

                                return m ?
                                        m.id === match[1] || typeof m.getAttributeNode !== "undefined" && m.getAttributeNode("id").nodeValue === match[1] ?
                                                [m] :
                                                undefined :
                                        [];
                            }
                        };

                        Expr.filter.ID = function( elem, match ) {
                            var node = typeof elem.getAttributeNode !== "undefined" && elem.getAttributeNode("id");

                            return elem.nodeType === 1 && node && node.nodeValue === match;
                        };
                    }

                    root.removeChild( form );

                    // release memory in IE
                    root = form = null;
                })();

                (function(){
                    // Check to see if the browser returns only elements
                    // when doing getElementsByTagName("*")

                    // Create a fake element
                    var div = document.createElement("div");
                    div.appendChild( document.createComment("") );

                    // Make sure no comments are found
                    if ( div.getElementsByTagName("*").length > 0 ) {
                        Expr.find.TAG = function( match, context ) {
                            var results = context.getElementsByTagName( match[1] );

                            // Filter out possible comments
                            if ( match[1] === "*" ) {
                                var tmp = [];

                                for ( var i = 0; results[i]; i++ ) {
                                    if ( results[i].nodeType === 1 ) {
                                        tmp.push( results[i] );
                                    }
                                }

                                results = tmp;
                            }

                            return results;
                        };
                    }

                    // Check to see if an attribute returns normalized href attributes
                    div.innerHTML = "<a href='#'></a>";

                    if ( div.firstChild && typeof div.firstChild.getAttribute !== "undefined" &&
                            div.firstChild.getAttribute("href") !== "#" ) {

                        Expr.attrHandle.href = function( elem ) {
                            return elem.getAttribute( "href", 2 );
                        };
                    }

                    // release memory in IE
                    div = null;
                })();

                if ( document.querySelectorAll ) {
                    (function(){
                        var oldSizzle = Sizzle,
                                div = document.createElement("div"),
                                id = "__sizzle__";

                        div.innerHTML = "<p class='TEST'></p>";

                        // Safari can't handle uppercase or unicode characters when
                        // in quirks mode.
                        if ( div.querySelectorAll && div.querySelectorAll(".TEST").length === 0 ) {
                            return;
                        }

                        Sizzle = function( query, context, extra, seed ) {
                            context = context || document;

                            // Only use querySelectorAll on non-XML documents
                            // (ID selectors don't work in non-HTML documents)
                            if ( !seed && !Sizzle.isXML(context) ) {
                                // See if we find a selector to speed up
                                var match = /^(\w+$)|^\.([\w\-]+$)|^#([\w\-]+$)/.exec( query );

                                if ( match && (context.nodeType === 1 || context.nodeType === 9) ) {
                                    // Speed-up: Sizzle("TAG")
                                    if ( match[1] ) {
                                        return makeArray( context.getElementsByTagName( query ), extra );

                                        // Speed-up: Sizzle(".CLASS")
                                    } else if ( match[2] && Expr.find.CLASS && context.getElementsByClassName ) {
                                        return makeArray( context.getElementsByClassName( match[2] ), extra );
                                    }
                                }

                                if ( context.nodeType === 9 ) {
                                    // Speed-up: Sizzle("body")
                                    // The body element only exists once, optimize finding it
                                    if ( query === "body" && context.body ) {
                                        return makeArray( [ context.body ], extra );

                                        // Speed-up: Sizzle("#ID")
                                    } else if ( match && match[3] ) {
                                        var elem = context.getElementById( match[3] );

                                        // Check parentNode to catch when Blackberry 4.6 returns
                                        // nodes that are no longer in the document #6963
                                        if ( elem && elem.parentNode ) {
                                            // Handle the case where IE and Opera return items
                                            // by name instead of ID
                                            if ( elem.id === match[3] ) {
                                                return makeArray( [ elem ], extra );
                                            }

                                        } else {
                                            return makeArray( [], extra );
                                        }
                                    }

                                    try {
                                        return makeArray( context.querySelectorAll(query), extra );
                                    } catch(qsaError) {}

                                    // qSA works strangely on Element-rooted queries
                                    // We can work around this by specifying an extra ID on the root
                                    // and working up from there (Thanks to Andrew Dupont for the technique)
                                    // IE 8 doesn't work on object elements
                                } else if ( context.nodeType === 1 && context.nodeName.toLowerCase() !== "object" ) {
                                    var oldContext = context,
                                            old = context.getAttribute( "id" ),
                                            nid = old || id,
                                            hasParent = context.parentNode,
                                            relativeHierarchySelector = /^\s*[+~]/.test( query );

                                    if ( !old ) {
                                        context.setAttribute( "id", nid );
                                    } else {
                                        nid = nid.replace( /'/g, "\\$&" );
                                    }
                                    if ( relativeHierarchySelector && hasParent ) {
                                        context = context.parentNode;
                                    }

                                    try {
                                        if ( !relativeHierarchySelector || hasParent ) {
                                            return makeArray( context.querySelectorAll( "[id='" + nid + "'] " + query ), extra );
                                        }

                                    } catch(pseudoError) {
                                    } finally {
                                        if ( !old ) {
                                            oldContext.removeAttribute( "id" );
                                        }
                                    }
                                }
                            }

                            return oldSizzle(query, context, extra, seed);
                        };

                        for ( var prop in oldSizzle ) {
                            Sizzle[ prop ] = oldSizzle[ prop ];
                        }

                        // release memory in IE
                        div = null;
                    })();
                }

                (function(){
                    var html = document.documentElement,
                            matches = html.matchesSelector || html.mozMatchesSelector || html.webkitMatchesSelector || html.msMatchesSelector;

                    if ( matches ) {
                        // Check to see if it's possible to do matchesSelector
                        // on a disconnected node (IE 9 fails this)
                        var disconnectedMatch = !matches.call( document.createElement( "div" ), "div" ),
                                pseudoWorks = false;

                        try {
                            // This should fail with an exception
                            // Gecko does not error, returns false instead
                            matches.call( document.documentElement, "[test!='']:sizzle" );

                        } catch( pseudoError ) {
                            pseudoWorks = true;
                        }

                        Sizzle.matchesSelector = function( node, expr ) {
                            // Make sure that attribute selectors are quoted
                            expr = expr.replace(/\=\s*([^'"\]]*)\s*\]/g, "='$1']");

                            if ( !Sizzle.isXML( node ) ) {
                                try {
                                    if ( pseudoWorks || !Expr.match.PSEUDO.test( expr ) && !/!=/.test( expr ) ) {
                                        var ret = matches.call( node, expr );

                                        // IE 9's matchesSelector returns false on disconnected nodes
                                        if ( ret || !disconnectedMatch ||
                                                // As well, disconnected nodes are said to be in a document
                                                // fragment in IE 9, so check for that
                                                node.document && node.document.nodeType !== 11 ) {
                                            return ret;
                                        }
                                    }
                                } catch(e) {}
                            }

                            return Sizzle(expr, null, null, [node]).length > 0;
                        };
                    }
                })();

                (function(){
                    var div = document.createElement("div");

                    div.innerHTML = "<div class='test e'></div><div class='test'></div>";

                    // Opera can't find a second classname (in 9.6)
                    // Also, make sure that getElementsByClassName actually exists
                    if ( !div.getElementsByClassName || div.getElementsByClassName("e").length === 0 ) {
                        return;
                    }

                    // Safari caches class attributes, doesn't catch changes (in 3.2)
                    div.lastChild.className = "e";

                    if ( div.getElementsByClassName("e").length === 1 ) {
                        return;
                    }

                    Expr.order.splice(1, 0, "CLASS");
                    Expr.find.CLASS = function( match, context, isXML ) {
                        if ( typeof context.getElementsByClassName !== "undefined" && !isXML ) {
                            return context.getElementsByClassName(match[1]);
                        }
                    };

                    // release memory in IE
                    div = null;
                })();

                function dirNodeCheck( dir, cur, doneName, checkSet, nodeCheck, isXML ) {
                    for ( var i = 0, l = checkSet.length; i < l; i++ ) {
                        var elem = checkSet[i];

                        if ( elem ) {
                            var match = false;

                            elem = elem[dir];

                            while ( elem ) {
                                if ( elem[ expando ] === doneName ) {
                                    match = checkSet[elem.sizset];
                                    break;
                                }

                                if ( elem.nodeType === 1 && !isXML ){
                                    elem[ expando ] = doneName;
                                    elem.sizset = i;
                                }

                                if ( elem.nodeName.toLowerCase() === cur ) {
                                    match = elem;
                                    break;
                                }

                                elem = elem[dir];
                            }

                            checkSet[i] = match;
                        }
                    }
                }

                function dirCheck( dir, cur, doneName, checkSet, nodeCheck, isXML ) {
                    for ( var i = 0, l = checkSet.length; i < l; i++ ) {
                        var elem = checkSet[i];

                        if ( elem ) {
                            var match = false;

                            elem = elem[dir];

                            while ( elem ) {
                                if ( elem[ expando ] === doneName ) {
                                    match = checkSet[elem.sizset];
                                    break;
                                }

                                if ( elem.nodeType === 1 ) {
                                    if ( !isXML ) {
                                        elem[ expando ] = doneName;
                                        elem.sizset = i;
                                    }

                                    if ( typeof cur !== "string" ) {
                                        if ( elem === cur ) {
                                            match = true;
                                            break;
                                        }

                                    } else if ( Sizzle.filter( cur, [elem] ).length > 0 ) {
                                        match = elem;
                                        break;
                                    }
                                }

                                elem = elem[dir];
                            }

                            checkSet[i] = match;
                        }
                    }
                }

                if ( document.documentElement.contains ) {
                    Sizzle.contains = function( a, b ) {
                        return a !== b && (a.contains ? a.contains(b) : true);
                    };

                } else if ( document.documentElement.compareDocumentPosition ) {
                    Sizzle.contains = function( a, b ) {
                        return !!(a.compareDocumentPosition(b) & 16);
                    };

                } else {
                    Sizzle.contains = function() {
                        return false;
                    };
                }

                Sizzle.isXML = function( elem ) {
                    // documentElement is verified for cases where it doesn't yet exist
                    // (such as loading iframes in IE - #4833)
                    var documentElement = (elem ? elem.ownerDocument || elem : 0).documentElement;

                    return documentElement ? documentElement.nodeName !== "HTML" : false;
                };

                var posProcess = function( selector, context, seed ) {
                    var match,
                            tmpSet = [],
                            later = "",
                            root = context.nodeType ? [context] : context;

                    // Position selectors must be done after the filter
                    // And so must :not(positional) so we move all PSEUDOs to the end
                    while ( (match = Expr.match.PSEUDO.exec( selector )) ) {
                        later += match[0];
                        selector = selector.replace( Expr.match.PSEUDO, "" );
                    }

                    selector = Expr.relative[selector] ? selector + "*" : selector;

                    for ( var i = 0, l = root.length; i < l; i++ ) {
                        Sizzle( selector, root[i], tmpSet, seed );
                    }

                    return Sizzle.filter( later, tmpSet );
                };

// EXPOSE
// Override sizzle attribute retrieval
                Sizzle.attr = jQuery.attr;
                Sizzle.selectors.attrMap = {};
                jQuery.find = Sizzle;
                jQuery.expr = Sizzle.selectors;
                jQuery.expr[":"] = jQuery.expr.filters;
                jQuery.unique = Sizzle.uniqueSort;
                jQuery.text = Sizzle.getText;
                jQuery.isXMLDoc = Sizzle.isXML;
                jQuery.contains = Sizzle.contains;


            })();


            var runtil = /Until$/,
                    rparentsprev = /^(?:parents|prevUntil|prevAll)/,
            // Note: This RegExp should be improved, or likely pulled from Sizzle
                    rmultiselector = /,/,
                    isSimple = /^.[^:#\[\.,]*$/,
                    slice = Array.prototype.slice,
                    POS = jQuery.expr.match.globalPOS,
            // methods guaranteed to produce a unique set when starting from a unique set
                    guaranteedUnique = {
                        children: true,
                        contents: true,
                        next: true,
                        prev: true
                    };

            jQuery.fn.extend({
                find: function( selector ) {
                    var self = this,
                            i, l;

                    if ( typeof selector !== "string" ) {
                        return jQuery( selector ).filter(function() {
                            for ( i = 0, l = self.length; i < l; i++ ) {
                                if ( jQuery.contains( self[ i ], this ) ) {
                                    return true;
                                }
                            }
                        });
                    }

                    var ret = this.pushStack( "", "find", selector ),
                            length, n, r;

                    for ( i = 0, l = this.length; i < l; i++ ) {
                        length = ret.length;
                        jQuery.find( selector, this[i], ret );

                        if ( i > 0 ) {
                            // Make sure that the results are unique
                            for ( n = length; n < ret.length; n++ ) {
                                for ( r = 0; r < length; r++ ) {
                                    if ( ret[r] === ret[n] ) {
                                        ret.splice(n--, 1);
                                        break;
                                    }
                                }
                            }
                        }
                    }

                    return ret;
                },

                has: function( target ) {
                    var targets = jQuery( target );
                    return this.filter(function() {
                        for ( var i = 0, l = targets.length; i < l; i++ ) {
                            if ( jQuery.contains( this, targets[i] ) ) {
                                return true;
                            }
                        }
                    });
                },

                not: function( selector ) {
                    return this.pushStack( winnow(this, selector, false), "not", selector);
                },

                filter: function( selector ) {
                    return this.pushStack( winnow(this, selector, true), "filter", selector );
                },

                is: function( selector ) {
                    return !!selector && (
                                    typeof selector === "string" ?
                                            // If this is a positional selector, check membership in the returned set
                                            // so $("p:first").is("p:last") won't return true for a doc with two "p".
                                            POS.test( selector ) ?
                                            jQuery( selector, this.context ).index( this[0] ) >= 0 :
                                            jQuery.filter( selector, this ).length > 0 :
                                    this.filter( selector ).length > 0 );
                },

                closest: function( selectors, context ) {
                    var ret = [], i, l, cur = this[0];

                    // Array (deprecated as of jQuery 1.7)
                    if ( jQuery.isArray( selectors ) ) {
                        var level = 1;

                        while ( cur && cur.ownerDocument && cur !== context ) {
                            for ( i = 0; i < selectors.length; i++ ) {

                                if ( jQuery( cur ).is( selectors[ i ] ) ) {
                                    ret.push({ selector: selectors[ i ], elem: cur, level: level });
                                }
                            }

                            cur = cur.parentNode;
                            level++;
                        }

                        return ret;
                    }

                    // String
                    var pos = POS.test( selectors ) || typeof selectors !== "string" ?
                            jQuery( selectors, context || this.context ) :
                            0;

                    for ( i = 0, l = this.length; i < l; i++ ) {
                        cur = this[i];

                        while ( cur ) {
                            if ( pos ? pos.index(cur) > -1 : jQuery.find.matchesSelector(cur, selectors) ) {
                                ret.push( cur );
                                break;

                            } else {
                                cur = cur.parentNode;
                                if ( !cur || !cur.ownerDocument || cur === context || cur.nodeType === 11 ) {
                                    break;
                                }
                            }
                        }
                    }

                    ret = ret.length > 1 ? jQuery.unique( ret ) : ret;

                    return this.pushStack( ret, "closest", selectors );
                },

                // Determine the position of an element within
                // the matched set of elements
                index: function( elem ) {

                    // No argument, return index in parent
                    if ( !elem ) {
                        return ( this[0] && this[0].parentNode ) ? this.prevAll().length : -1;
                    }

                    // index in selector
                    if ( typeof elem === "string" ) {
                        return jQuery.inArray( this[0], jQuery( elem ) );
                    }

                    // Locate the position of the desired element
                    return jQuery.inArray(
                            // If it receives a jQuery object, the first element is used
                            elem.jquery ? elem[0] : elem, this );
                },

                add: function( selector, context ) {
                    var set = typeof selector === "string" ?
                                    jQuery( selector, context ) :
                                    jQuery.makeArray( selector && selector.nodeType ? [ selector ] : selector ),
                            all = jQuery.merge( this.get(), set );

                    return this.pushStack( isDisconnected( set[0] ) || isDisconnected( all[0] ) ?
                            all :
                            jQuery.unique( all ) );
                },

                andSelf: function() {
                    return this.add( this.prevObject );
                }
            });

// A painfully simple check to see if an element is disconnected
// from a document (should be improved, where feasible).
            function isDisconnected( node ) {
                return !node || !node.parentNode || node.parentNode.nodeType === 11;
            }

            jQuery.each({
                parent: function( elem ) {
                    var parent = elem.parentNode;
                    return parent && parent.nodeType !== 11 ? parent : null;
                },
                parents: function( elem ) {
                    return jQuery.dir( elem, "parentNode" );
                },
                parentsUntil: function( elem, i, until ) {
                    return jQuery.dir( elem, "parentNode", until );
                },
                next: function( elem ) {
                    return jQuery.nth( elem, 2, "nextSibling" );
                },
                prev: function( elem ) {
                    return jQuery.nth( elem, 2, "previousSibling" );
                },
                nextAll: function( elem ) {
                    return jQuery.dir( elem, "nextSibling" );
                },
                prevAll: function( elem ) {
                    return jQuery.dir( elem, "previousSibling" );
                },
                nextUntil: function( elem, i, until ) {
                    return jQuery.dir( elem, "nextSibling", until );
                },
                prevUntil: function( elem, i, until ) {
                    return jQuery.dir( elem, "previousSibling", until );
                },
                siblings: function( elem ) {
                    return jQuery.sibling( ( elem.parentNode || {} ).firstChild, elem );
                },
                children: function( elem ) {
                    return jQuery.sibling( elem.firstChild );
                },
                contents: function( elem ) {
                    return jQuery.nodeName( elem, "iframe" ) ?
                    elem.contentDocument || elem.contentWindow.document :
                            jQuery.makeArray( elem.childNodes );
                }
            }, function( name, fn ) {
                jQuery.fn[ name ] = function( until, selector ) {
                    var ret = jQuery.map( this, fn, until );

                    if ( !runtil.test( name ) ) {
                        selector = until;
                    }

                    if ( selector && typeof selector === "string" ) {
                        ret = jQuery.filter( selector, ret );
                    }

                    ret = this.length > 1 && !guaranteedUnique[ name ] ? jQuery.unique( ret ) : ret;

                    if ( (this.length > 1 || rmultiselector.test( selector )) && rparentsprev.test( name ) ) {
                        ret = ret.reverse();
                    }

                    return this.pushStack( ret, name, slice.call( arguments ).join(",") );
                };
            });

            jQuery.extend({
                filter: function( expr, elems, not ) {
                    if ( not ) {
                        expr = ":not(" + expr + ")";
                    }

                    return elems.length === 1 ?
                            jQuery.find.matchesSelector(elems[0], expr) ? [ elems[0] ] : [] :
                            jQuery.find.matches(expr, elems);
                },

                dir: function( elem, dir, until ) {
                    var matched = [],
                            cur = elem[ dir ];

                    while ( cur && cur.nodeType !== 9 && (until === undefined || cur.nodeType !== 1 || !jQuery( cur ).is( until )) ) {
                        if ( cur.nodeType === 1 ) {
                            matched.push( cur );
                        }
                        cur = cur[dir];
                    }
                    return matched;
                },

                nth: function( cur, result, dir, elem ) {
                    result = result || 1;
                    var num = 0;

                    for ( ; cur; cur = cur[dir] ) {
                        if ( cur.nodeType === 1 && ++num === result ) {
                            break;
                        }
                    }

                    return cur;
                },

                sibling: function( n, elem ) {
                    var r = [];

                    for ( ; n; n = n.nextSibling ) {
                        if ( n.nodeType === 1 && n !== elem ) {
                            r.push( n );
                        }
                    }

                    return r;
                }
            });

// Implement the identical functionality for filter and not
            function winnow( elements, qualifier, keep ) {

                // Can't pass null or undefined to indexOf in Firefox 4
                // Set to 0 to skip string check
                qualifier = qualifier || 0;

                if ( jQuery.isFunction( qualifier ) ) {
                    return jQuery.grep(elements, function( elem, i ) {
                        var retVal = !!qualifier.call( elem, i, elem );
                        return retVal === keep;
                    });

                } else if ( qualifier.nodeType ) {
                    return jQuery.grep(elements, function( elem, i ) {
                        return ( elem === qualifier ) === keep;
                    });

                } else if ( typeof qualifier === "string" ) {
                    var filtered = jQuery.grep(elements, function( elem ) {
                        return elem.nodeType === 1;
                    });

                    if ( isSimple.test( qualifier ) ) {
                        return jQuery.filter(qualifier, filtered, !keep);
                    } else {
                        qualifier = jQuery.filter( qualifier, filtered );
                    }
                }

                return jQuery.grep(elements, function( elem, i ) {
                    return ( jQuery.inArray( elem, qualifier ) >= 0 ) === keep;
                });
            }




            function createSafeFragment( document ) {
                var list = nodeNames.split( "|" ),
                        safeFrag = document.createDocumentFragment();

                if ( safeFrag.createElement ) {
                    while ( list.length ) {
                        safeFrag.createElement(
                                list.pop()
                        );
                    }
                }
                return safeFrag;
            }

            var nodeNames = "abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|" +
                            "header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",
                    rinlinejQuery = / jQuery\d+="(?:\d+|null)"/g,
                    rleadingWhitespace = /^\s+/,
                    rxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/ig,
                    rtagName = /<([\w:]+)/,
                    rtbody = /<tbody/i,
                    rhtml = /<|&#?\w+;/,
                    rnoInnerhtml = /<(?:script|style)/i,
                    rnocache = /<(?:script|object|embed|option|style)/i,
                    rnoshimcache = new RegExp("<(?:" + nodeNames + ")[\\s/>]", "i"),
            // checked="checked" or checked
                    rchecked = /checked\s*(?:[^=]|=\s*.checked.)/i,
                    rscriptType = /\/(java|ecma)script/i,
                    rcleanScript = /^\s*<!(?:\[CDATA\[|\-\-)/,
                    wrapMap = {
                        option: [ 1, "<select multiple='multiple'>", "</select>" ],
                        legend: [ 1, "<fieldset>", "</fieldset>" ],
                        thead: [ 1, "<table>", "</table>" ],
                        tr: [ 2, "<table><tbody>", "</tbody></table>" ],
                        td: [ 3, "<table><tbody><tr>", "</tr></tbody></table>" ],
                        col: [ 2, "<table><tbody></tbody><colgroup>", "</colgroup></table>" ],
                        area: [ 1, "<map>", "</map>" ],
                        _default: [ 0, "", "" ]
                    },
                    safeFragment = createSafeFragment( document );

            wrapMap.optgroup = wrapMap.option;
            wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
            wrapMap.th = wrapMap.td;

// IE can't serialize <link> and <script> tags normally
            if ( !jQuery.support.htmlSerialize ) {
                wrapMap._default = [ 1, "div<div>", "</div>" ];
            }

            jQuery.fn.extend({
                text: function( value ) {
                    return jQuery.access( this, function( value ) {
                        return value === undefined ?
                                jQuery.text( this ) :
                                this.empty().append( ( this[0] && this[0].ownerDocument || document ).createTextNode( value ) );
                    }, null, value, arguments.length );
                },

                wrapAll: function( html ) {
                    if ( jQuery.isFunction( html ) ) {
                        return this.each(function(i) {
                            jQuery(this).wrapAll( html.call(this, i) );
                        });
                    }

                    if ( this[0] ) {
                        // The elements to wrap the target around
                        var wrap = jQuery( html, this[0].ownerDocument ).eq(0).clone(true);

                        if ( this[0].parentNode ) {
                            wrap.insertBefore( this[0] );
                        }

                        wrap.map(function() {
                            var elem = this;

                            while ( elem.firstChild && elem.firstChild.nodeType === 1 ) {
                                elem = elem.firstChild;
                            }

                            return elem;
                        }).append( this );
                    }

                    return this;
                },

                wrapInner: function( html ) {
                    if ( jQuery.isFunction( html ) ) {
                        return this.each(function(i) {
                            jQuery(this).wrapInner( html.call(this, i) );
                        });
                    }

                    return this.each(function() {
                        var self = jQuery( this ),
                                contents = self.contents();

                        if ( contents.length ) {
                            contents.wrapAll( html );

                        } else {
                            self.append( html );
                        }
                    });
                },

                wrap: function( html ) {
                    var isFunction = jQuery.isFunction( html );

                    return this.each(function(i) {
                        jQuery( this ).wrapAll( isFunction ? html.call(this, i) : html );
                    });
                },

                unwrap: function() {
                    return this.parent().each(function() {
                        if ( !jQuery.nodeName( this, "body" ) ) {
                            jQuery( this ).replaceWith( this.childNodes );
                        }
                    }).end();
                },

                append: function() {
                    return this.domManip(arguments, true, function( elem ) {
                        if ( this.nodeType === 1 ) {
                            this.appendChild( elem );
                        }
                    });
                },

                prepend: function() {
                    return this.domManip(arguments, true, function( elem ) {
                        if ( this.nodeType === 1 ) {
                            this.insertBefore( elem, this.firstChild );
                        }
                    });
                },

                before: function() {
                    if ( this[0] && this[0].parentNode ) {
                        return this.domManip(arguments, false, function( elem ) {
                            this.parentNode.insertBefore( elem, this );
                        });
                    } else if ( arguments.length ) {
                        var set = jQuery.clean( arguments );
                        set.push.apply( set, this.toArray() );
                        return this.pushStack( set, "before", arguments );
                    }
                },

                after: function() {
                    if ( this[0] && this[0].parentNode ) {
                        return this.domManip(arguments, false, function( elem ) {
                            this.parentNode.insertBefore( elem, this.nextSibling );
                        });
                    } else if ( arguments.length ) {
                        var set = this.pushStack( this, "after", arguments );
                        set.push.apply( set, jQuery.clean(arguments) );
                        return set;
                    }
                },

                // keepData is for internal use only--do not document
                remove: function( selector, keepData ) {
                    for ( var i = 0, elem; (elem = this[i]) != null; i++ ) {
                        if ( !selector || jQuery.filter( selector, [ elem ] ).length ) {
                            if ( !keepData && elem.nodeType === 1 ) {
                                jQuery.cleanData( elem.getElementsByTagName("*") );
                                jQuery.cleanData( [ elem ] );
                            }

                            if ( elem.parentNode ) {
                                elem.parentNode.removeChild( elem );
                            }
                        }
                    }

                    return this;
                },

                empty: function() {
                    for ( var i = 0, elem; (elem = this[i]) != null; i++ ) {
                        // Remove element nodes and prevent memory leaks
                        if ( elem.nodeType === 1 ) {
                            jQuery.cleanData( elem.getElementsByTagName("*") );
                        }

                        // Remove any remaining nodes
                        while ( elem.firstChild ) {
                            elem.removeChild( elem.firstChild );
                        }
                    }

                    return this;
                },

                clone: function( dataAndEvents, deepDataAndEvents ) {
                    dataAndEvents = dataAndEvents == null ? false : dataAndEvents;
                    deepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

                    return this.map( function () {
                        return jQuery.clone( this, dataAndEvents, deepDataAndEvents );
                    });
                },

                html: function( value ) {
                    return jQuery.access( this, function( value ) {
                        var elem = this[0] || {},
                                i = 0,
                                l = this.length;

                        if ( value === undefined ) {
                            return elem.nodeType === 1 ?
                                    elem.innerHTML.replace( rinlinejQuery, "" ) :
                                    null;
                        }


                        if ( typeof value === "string" && !rnoInnerhtml.test( value ) &&
                                ( jQuery.support.leadingWhitespace || !rleadingWhitespace.test( value ) ) &&
                                !wrapMap[ ( rtagName.exec( value ) || ["", ""] )[1].toLowerCase() ] ) {

                            value = value.replace( rxhtmlTag, "<$1></$2>" );

                            try {
                                for (; i < l; i++ ) {
                                    // Remove element nodes and prevent memory leaks
                                    elem = this[i] || {};
                                    if ( elem.nodeType === 1 ) {
                                        jQuery.cleanData( elem.getElementsByTagName( "*" ) );
                                        elem.innerHTML = value;
                                    }
                                }

                                elem = 0;

                                // If using innerHTML throws an exception, use the fallback method
                            } catch(e) {}
                        }

                        if ( elem ) {
                            this.empty().append( value );
                        }
                    }, null, value, arguments.length );
                },

                replaceWith: function( value ) {
                    if ( this[0] && this[0].parentNode ) {
                        // Make sure that the elements are removed from the DOM before they are inserted
                        // this can help fix replacing a parent with child elements
                        if ( jQuery.isFunction( value ) ) {
                            return this.each(function(i) {
                                var self = jQuery(this), old = self.html();
                                self.replaceWith( value.call( this, i, old ) );
                            });
                        }

                        if ( typeof value !== "string" ) {
                            value = jQuery( value ).detach();
                        }

                        return this.each(function() {
                            var next = this.nextSibling,
                                    parent = this.parentNode;

                            jQuery( this ).remove();

                            if ( next ) {
                                jQuery(next).before( value );
                            } else {
                                jQuery(parent).append( value );
                            }
                        });
                    } else {
                        return this.length ?
                                this.pushStack( jQuery(jQuery.isFunction(value) ? value() : value), "replaceWith", value ) :
                                this;
                    }
                },

                detach: function( selector ) {
                    return this.remove( selector, true );
                },

                domManip: function( args, table, callback ) {
                    var results, first, fragment, parent,
                            value = args[0],
                            scripts = [];

                    // We can't cloneNode fragments that contain checked, in WebKit
                    if ( !jQuery.support.checkClone && arguments.length === 3 && typeof value === "string" && rchecked.test( value ) ) {
                        return this.each(function() {
                            jQuery(this).domManip( args, table, callback, true );
                        });
                    }

                    if ( jQuery.isFunction(value) ) {
                        return this.each(function(i) {
                            var self = jQuery(this);
                            args[0] = value.call(this, i, table ? self.html() : undefined);
                            self.domManip( args, table, callback );
                        });
                    }

                    if ( this[0] ) {
                        parent = value && value.parentNode;

                        // If we're in a fragment, just use that instead of building a new one
                        if ( jQuery.support.parentNode && parent && parent.nodeType === 11 && parent.childNodes.length === this.length ) {
                            results = { fragment: parent };

                        } else {
                            results = jQuery.buildFragment( args, this, scripts );
                        }

                        fragment = results.fragment;

                        if ( fragment.childNodes.length === 1 ) {
                            first = fragment = fragment.firstChild;
                        } else {
                            first = fragment.firstChild;
                        }

                        if ( first ) {
                            table = table && jQuery.nodeName( first, "tr" );

                            for ( var i = 0, l = this.length, lastIndex = l - 1; i < l; i++ ) {
                                callback.call(
                                        table ?
                                                root(this[i], first) :
                                                this[i],
                                        // Make sure that we do not leak memory by inadvertently discarding
                                        // the original fragment (which might have attached data) instead of
                                        // using it; in addition, use the original fragment object for the last
                                        // item instead of first because it can end up being emptied incorrectly
                                        // in certain situations (Bug #8070).
                                        // Fragments from the fragment cache must always be cloned and never used
                                        // in place.
                                        results.cacheable || ( l > 1 && i < lastIndex ) ?
                                                jQuery.clone( fragment, true, true ) :
                                                fragment
                                );
                            }
                        }

                        if ( scripts.length ) {
                            jQuery.each( scripts, function( i, elem ) {
                                if ( elem.src ) {
                                    jQuery.ajax({
                                        type: "GET",
                                        global: false,
                                        url: elem.src,
                                        async: false,
                                        dataType: "script"
                                    });
                                } else {
                                    jQuery.globalEval( ( elem.text || elem.textContent || elem.innerHTML || "" ).replace( rcleanScript, "/*$0*/" ) );
                                }

                                if ( elem.parentNode ) {
                                    elem.parentNode.removeChild( elem );
                                }
                            });
                        }
                    }

                    return this;
                }
            });

            function root( elem, cur ) {
                return jQuery.nodeName(elem, "table") ?
                        (elem.getElementsByTagName("tbody")[0] ||
                        elem.appendChild(elem.ownerDocument.createElement("tbody"))) :
                        elem;
            }

            function cloneCopyEvent( src, dest ) {

                if ( dest.nodeType !== 1 || !jQuery.hasData( src ) ) {
                    return;
                }

                var type, i, l,
                        oldData = jQuery._data( src ),
                        curData = jQuery._data( dest, oldData ),
                        events = oldData.events;

                if ( events ) {
                    delete curData.handle;
                    curData.events = {};

                    for ( type in events ) {
                        for ( i = 0, l = events[ type ].length; i < l; i++ ) {
                            jQuery.event.add( dest, type, events[ type ][ i ] );
                        }
                    }
                }

                // make the cloned public data object a copy from the original
                if ( curData.data ) {
                    curData.data = jQuery.extend( {}, curData.data );
                }
            }

            function cloneFixAttributes( src, dest ) {
                var nodeName;

                // We do not need to do anything for non-Elements
                if ( dest.nodeType !== 1 ) {
                    return;
                }

                // clearAttributes removes the attributes, which we don't want,
                // but also removes the attachEvent events, which we *do* want
                if ( dest.clearAttributes ) {
                    dest.clearAttributes();
                }

                // mergeAttributes, in contrast, only merges back on the
                // original attributes, not the events
                if ( dest.mergeAttributes ) {
                    dest.mergeAttributes( src );
                }

                nodeName = dest.nodeName.toLowerCase();

                // IE6-8 fail to clone children inside object elements that use
                // the proprietary classid attribute value (rather than the type
                // attribute) to identify the type of content to display
                if ( nodeName === "object" ) {
                    dest.outerHTML = src.outerHTML;

                } else if ( nodeName === "input" && (src.type === "checkbox" || src.type === "radio") ) {
                    // IE6-8 fails to persist the checked state of a cloned checkbox
                    // or radio button. Worse, IE6-7 fail to give the cloned element
                    // a checked appearance if the defaultChecked value isn't also set
                    if ( src.checked ) {
                        dest.defaultChecked = dest.checked = src.checked;
                    }

                    // IE6-7 get confused and end up setting the value of a cloned
                    // checkbox/radio button to an empty string instead of "on"
                    if ( dest.value !== src.value ) {
                        dest.value = src.value;
                    }

                    // IE6-8 fails to return the selected option to the default selected
                    // state when cloning options
                } else if ( nodeName === "option" ) {
                    dest.selected = src.defaultSelected;

                    // IE6-8 fails to set the defaultValue to the correct value when
                    // cloning other types of input fields
                } else if ( nodeName === "input" || nodeName === "textarea" ) {
                    dest.defaultValue = src.defaultValue;

                    // IE blanks contents when cloning scripts
                } else if ( nodeName === "script" && dest.text !== src.text ) {
                    dest.text = src.text;
                }

                // Event data gets referenced instead of copied if the expando
                // gets copied too
                dest.removeAttribute( jQuery.expando );

                // Clear flags for bubbling special change/submit events, they must
                // be reattached when the newly cloned events are first activated
                dest.removeAttribute( "_submit_attached" );
                dest.removeAttribute( "_change_attached" );
            }

            jQuery.buildFragment = function( args, nodes, scripts ) {
                var fragment, cacheable, cacheresults, doc,
                        first = args[ 0 ];

                // nodes may contain either an explicit document object,
                // a jQuery collection or context object.
                // If nodes[0] contains a valid object to assign to doc
                if ( nodes && nodes[0] ) {
                    doc = nodes[0].ownerDocument || nodes[0];
                }

                // Ensure that an attr object doesn't incorrectly stand in as a document object
                // Chrome and Firefox seem to allow this to occur and will throw exception
                // Fixes #8950
                if ( !doc.createDocumentFragment ) {
                    doc = document;
                }

                // Only cache "small" (1/2 KB) HTML strings that are associated with the main document
                // Cloning options loses the selected state, so don't cache them
                // IE 6 doesn't like it when you put <object> or <embed> elements in a fragment
                // Also, WebKit does not clone 'checked' attributes on cloneNode, so don't cache
                // Lastly, IE6,7,8 will not correctly reuse cached fragments that were created from unknown elems #10501
                if ( args.length === 1 && typeof first === "string" && first.length < 512 && doc === document &&
                        first.charAt(0) === "<" && !rnocache.test( first ) &&
                        (jQuery.support.checkClone || !rchecked.test( first )) &&
                        (jQuery.support.html5Clone || !rnoshimcache.test( first )) ) {

                    cacheable = true;

                    cacheresults = jQuery.fragments[ first ];
                    if ( cacheresults && cacheresults !== 1 ) {
                        fragment = cacheresults;
                    }
                }

                if ( !fragment ) {
                    fragment = doc.createDocumentFragment();
                    jQuery.clean( args, doc, fragment, scripts );
                }

                if ( cacheable ) {
                    jQuery.fragments[ first ] = cacheresults ? fragment : 1;
                }

                return { fragment: fragment, cacheable: cacheable };
            };

            jQuery.fragments = {};

            jQuery.each({
                appendTo: "append",
                prependTo: "prepend",
                insertBefore: "before",
                insertAfter: "after",
                replaceAll: "replaceWith"
            }, function( name, original ) {
                jQuery.fn[ name ] = function( selector ) {
                    var ret = [],
                            insert = jQuery( selector ),
                            parent = this.length === 1 && this[0].parentNode;

                    if ( parent && parent.nodeType === 11 && parent.childNodes.length === 1 && insert.length === 1 ) {
                        insert[ original ]( this[0] );
                        return this;

                    } else {
                        for ( var i = 0, l = insert.length; i < l; i++ ) {
                            var elems = ( i > 0 ? this.clone(true) : this ).get();
                            jQuery( insert[i] )[ original ]( elems );
                            ret = ret.concat( elems );
                        }

                        return this.pushStack( ret, name, insert.selector );
                    }
                };
            });

            function getAll( elem ) {
                if ( typeof elem.getElementsByTagName !== "undefined" ) {
                    return elem.getElementsByTagName( "*" );

                } else if ( typeof elem.querySelectorAll !== "undefined" ) {
                    return elem.querySelectorAll( "*" );

                } else {
                    return [];
                }
            }

// Used in clean, fixes the defaultChecked property
            function fixDefaultChecked( elem ) {
                if ( elem.type === "checkbox" || elem.type === "radio" ) {
                    elem.defaultChecked = elem.checked;
                }
            }
// Finds all inputs and passes them to fixDefaultChecked
            function findInputs( elem ) {
                var nodeName = ( elem.nodeName || "" ).toLowerCase();
                if ( nodeName === "input" ) {
                    fixDefaultChecked( elem );
                    // Skip scripts, get other children
                } else if ( nodeName !== "script" && typeof elem.getElementsByTagName !== "undefined" ) {
                    jQuery.grep( elem.getElementsByTagName("input"), fixDefaultChecked );
                }
            }

// Derived From: http://www.iecss.com/shimprove/javascript/shimprove.1-0-1.js
            function shimCloneNode( elem ) {
                var div = document.createElement( "div" );
                safeFragment.appendChild( div );

                div.innerHTML = elem.outerHTML;
                return div.firstChild;
            }

            jQuery.extend({
                clone: function( elem, dataAndEvents, deepDataAndEvents ) {
                    var srcElements,
                            destElements,
                            i,
                    // IE<=8 does not properly clone detached, unknown element nodes
                            clone = jQuery.support.html5Clone || jQuery.isXMLDoc(elem) || !rnoshimcache.test( "<" + elem.nodeName + ">" ) ?
                                    elem.cloneNode( true ) :
                                    shimCloneNode( elem );

                    if ( (!jQuery.support.noCloneEvent || !jQuery.support.noCloneChecked) &&
                            (elem.nodeType === 1 || elem.nodeType === 11) && !jQuery.isXMLDoc(elem) ) {
                        // IE copies events bound via attachEvent when using cloneNode.
                        // Calling detachEvent on the clone will also remove the events
                        // from the original. In order to get around this, we use some
                        // proprietary methods to clear the events. Thanks to MooTools
                        // guys for this hotness.

                        cloneFixAttributes( elem, clone );

                        // Using Sizzle here is crazy slow, so we use getElementsByTagName instead
                        srcElements = getAll( elem );
                        destElements = getAll( clone );

                        // Weird iteration because IE will replace the length property
                        // with an element if you are cloning the body and one of the
                        // elements on the page has a name or id of "length"
                        for ( i = 0; srcElements[i]; ++i ) {
                            // Ensure that the destination node is not null; Fixes #9587
                            if ( destElements[i] ) {
                                cloneFixAttributes( srcElements[i], destElements[i] );
                            }
                        }
                    }

                    // Copy the events from the original to the clone
                    if ( dataAndEvents ) {
                        cloneCopyEvent( elem, clone );

                        if ( deepDataAndEvents ) {
                            srcElements = getAll( elem );
                            destElements = getAll( clone );

                            for ( i = 0; srcElements[i]; ++i ) {
                                cloneCopyEvent( srcElements[i], destElements[i] );
                            }
                        }
                    }

                    srcElements = destElements = null;

                    // Return the cloned set
                    return clone;
                },

                clean: function( elems, context, fragment, scripts ) {
                    var checkScriptType, script, j,
                            ret = [];

                    context = context || document;

                    // !context.createElement fails in IE with an error but returns typeof 'object'
                    if ( typeof context.createElement === "undefined" ) {
                        context = context.ownerDocument || context[0] && context[0].ownerDocument || document;
                    }

                    for ( var i = 0, elem; (elem = elems[i]) != null; i++ ) {
                        if ( typeof elem === "number" ) {
                            elem += "";
                        }

                        if ( !elem ) {
                            continue;
                        }

                        // Convert html string into DOM nodes
                        if ( typeof elem === "string" ) {
                            if ( !rhtml.test( elem ) ) {
                                elem = context.createTextNode( elem );
                            } else {
                                // Fix "XHTML"-style tags in all browsers
                                elem = elem.replace(rxhtmlTag, "<$1></$2>");

                                // Trim whitespace, otherwise indexOf won't work as expected
                                var tag = ( rtagName.exec( elem ) || ["", ""] )[1].toLowerCase(),
                                        wrap = wrapMap[ tag ] || wrapMap._default,
                                        depth = wrap[0],
                                        div = context.createElement("div"),
                                        safeChildNodes = safeFragment.childNodes,
                                        remove;

                                // Append wrapper element to unknown element safe doc fragment
                                if ( context === document ) {
                                    // Use the fragment we've already created for this document
                                    safeFragment.appendChild( div );
                                } else {
                                    // Use a fragment created with the owner document
                                    createSafeFragment( context ).appendChild( div );
                                }

                                // Go to html and back, then peel off extra wrappers
                                div.innerHTML = wrap[1] + elem + wrap[2];

                                // Move to the right depth
                                while ( depth-- ) {
                                    div = div.lastChild;
                                }

                                // Remove IE's autoinserted <tbody> from table fragments
                                if ( !jQuery.support.tbody ) {

                                    // String was a <table>, *may* have spurious <tbody>
                                    var hasBody = rtbody.test(elem),
                                            tbody = tag === "table" && !hasBody ?
                                            div.firstChild && div.firstChild.childNodes :

                                                    // String was a bare <thead> or <tfoot>
                                                    wrap[1] === "<table>" && !hasBody ?
                                                            div.childNodes :
                                                            [];

                                    for ( j = tbody.length - 1; j >= 0 ; --j ) {
                                        if ( jQuery.nodeName( tbody[ j ], "tbody" ) && !tbody[ j ].childNodes.length ) {
                                            tbody[ j ].parentNode.removeChild( tbody[ j ] );
                                        }
                                    }
                                }

                                // IE completely kills leading whitespace when innerHTML is used
                                if ( !jQuery.support.leadingWhitespace && rleadingWhitespace.test( elem ) ) {
                                    div.insertBefore( context.createTextNode( rleadingWhitespace.exec(elem)[0] ), div.firstChild );
                                }

                                elem = div.childNodes;

                                // Clear elements from DocumentFragment (safeFragment or otherwise)
                                // to avoid hoarding elements. Fixes #11356
                                if ( div ) {
                                    div.parentNode.removeChild( div );

                                    // Guard against -1 index exceptions in FF3.6
                                    if ( safeChildNodes.length > 0 ) {
                                        remove = safeChildNodes[ safeChildNodes.length - 1 ];

                                        if ( remove && remove.parentNode ) {
                                            remove.parentNode.removeChild( remove );
                                        }
                                    }
                                }
                            }
                        }

                        // Resets defaultChecked for any radios and checkboxes
                        // about to be appended to the DOM in IE 6/7 (#8060)
                        var len;
                        if ( !jQuery.support.appendChecked ) {
                            if ( elem[0] && typeof (len = elem.length) === "number" ) {
                                for ( j = 0; j < len; j++ ) {
                                    findInputs( elem[j] );
                                }
                            } else {
                                findInputs( elem );
                            }
                        }

                        if ( elem.nodeType ) {
                            ret.push( elem );
                        } else {
                            ret = jQuery.merge( ret, elem );
                        }
                    }

                    if ( fragment ) {
                        checkScriptType = function( elem ) {
                            return !elem.type || rscriptType.test( elem.type );
                        };
                        for ( i = 0; ret[i]; i++ ) {
                            script = ret[i];
                            if ( scripts && jQuery.nodeName( script, "script" ) && (!script.type || rscriptType.test( script.type )) ) {
                                scripts.push( script.parentNode ? script.parentNode.removeChild( script ) : script );

                            } else {
                                if ( script.nodeType === 1 ) {
                                    var jsTags = jQuery.grep( script.getElementsByTagName( "script" ), checkScriptType );

                                    ret.splice.apply( ret, [i + 1, 0].concat( jsTags ) );
                                }
                                fragment.appendChild( script );
                            }
                        }
                    }

                    return ret;
                },

                cleanData: function( elems ) {
                    var data, id,
                            cache = jQuery.cache,
                            special = jQuery.event.special,
                            deleteExpando = jQuery.support.deleteExpando;

                    for ( var i = 0, elem; (elem = elems[i]) != null; i++ ) {
                        if ( elem.nodeName && jQuery.noData[elem.nodeName.toLowerCase()] ) {
                            continue;
                        }

                        id = elem[ jQuery.expando ];

                        if ( id ) {
                            data = cache[ id ];

                            if ( data && data.events ) {
                                for ( var type in data.events ) {
                                    if ( special[ type ] ) {
                                        jQuery.event.remove( elem, type );

                                        // This is a shortcut to avoid jQuery.event.remove's overhead
                                    } else {
                                        jQuery.removeEvent( elem, type, data.handle );
                                    }
                                }

                                // Null the DOM reference to avoid IE6/7/8 leak (#7054)
                                if ( data.handle ) {
                                    data.handle.elem = null;
                                }
                            }

                            if ( deleteExpando ) {
                                delete elem[ jQuery.expando ];

                            } else if ( elem.removeAttribute ) {
                                elem.removeAttribute( jQuery.expando );
                            }

                            delete cache[ id ];
                        }
                    }
                }
            });




            var ralpha = /alpha\([^)]*\)/i,
                    ropacity = /opacity=([^)]*)/,
            // fixed for IE9, see #8346
                    rupper = /([A-Z]|^ms)/g,
                    rnum = /^[\-+]?(?:\d*\.)?\d+$/i,
                    rnumnonpx = /^-?(?:\d*\.)?\d+(?!px)[^\d\s]+$/i,
                    rrelNum = /^([\-+])=([\-+.\de]+)/,
                    rmargin = /^margin/,

                    cssShow = { position: "absolute", visibility: "hidden", display: "block" },

            // order is important!
                    cssExpand = [ "Top", "Right", "Bottom", "Left" ],

                    curCSS,

                    getComputedStyle,
                    currentStyle;

            jQuery.fn.css = function( name, value ) {
                return jQuery.access( this, function( elem, name, value ) {
                    return value !== undefined ?
                            jQuery.style( elem, name, value ) :
                            jQuery.css( elem, name );
                }, name, value, arguments.length > 1 );
            };

            jQuery.extend({
                // Add in style property hooks for overriding the default
                // behavior of getting and setting a style property
                cssHooks: {
                    opacity: {
                        get: function( elem, computed ) {
                            if ( computed ) {
                                // We should always get a number back from opacity
                                var ret = curCSS( elem, "opacity" );
                                return ret === "" ? "1" : ret;

                            } else {
                                return elem.style.opacity;
                            }
                        }
                    }
                },

                // Exclude the following css properties to add px
                cssNumber: {
                    "fillOpacity": true,
                    "fontWeight": true,
                    "lineHeight": true,
                    "opacity": true,
                    "orphans": true,
                    "widows": true,
                    "zIndex": true,
                    "zoom": true
                },

                // Add in properties whose names you wish to fix before
                // setting or getting the value
                cssProps: {
                    // normalize float css property
                    "float": jQuery.support.cssFloat ? "cssFloat" : "styleFloat"
                },

                // Get and set the style property on a DOM Node
                style: function( elem, name, value, extra ) {
                    // Don't set styles on text and comment nodes
                    if ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
                        return;
                    }

                    // Make sure that we're working with the right name
                    var ret, type, origName = jQuery.camelCase( name ),
                            style = elem.style, hooks = jQuery.cssHooks[ origName ];

                    name = jQuery.cssProps[ origName ] || origName;

                    // Check if we're setting a value
                    if ( value !== undefined ) {
                        type = typeof value;

                        // convert relative number strings (+= or -=) to relative numbers. #7345
                        if ( type === "string" && (ret = rrelNum.exec( value )) ) {
                            value = ( +( ret[1] + 1) * +ret[2] ) + parseFloat( jQuery.css( elem, name ) );
                            // Fixes bug #9237
                            type = "number";
                        }

                        // Make sure that NaN and null values aren't set. See: #7116
                        if ( value == null || type === "number" && isNaN( value ) ) {
                            return;
                        }

                        // If a number was passed in, add 'px' to the (except for certain CSS properties)
                        if ( type === "number" && !jQuery.cssNumber[ origName ] ) {
                            value += "px";
                        }

                        // If a hook was provided, use that value, otherwise just set the specified value
                        if ( !hooks || !("set" in hooks) || (value = hooks.set( elem, value )) !== undefined ) {
                            // Wrapped to prevent IE from throwing errors when 'invalid' values are provided
                            // Fixes bug #5509
                            try {
                                style[ name ] = value;
                            } catch(e) {}
                        }

                    } else {
                        // If a hook was provided get the non-computed value from there
                        if ( hooks && "get" in hooks && (ret = hooks.get( elem, false, extra )) !== undefined ) {
                            return ret;
                        }

                        // Otherwise just get the value from the style object
                        return style[ name ];
                    }
                },

                css: function( elem, name, extra ) {
                    var ret, hooks;

                    // Make sure that we're working with the right name
                    name = jQuery.camelCase( name );
                    hooks = jQuery.cssHooks[ name ];
                    name = jQuery.cssProps[ name ] || name;

                    // cssFloat needs a special treatment
                    if ( name === "cssFloat" ) {
                        name = "float";
                    }

                    // If a hook was provided get the computed value from there
                    if ( hooks && "get" in hooks && (ret = hooks.get( elem, true, extra )) !== undefined ) {
                        return ret;

                        // Otherwise, if a way to get the computed value exists, use that
                    } else if ( curCSS ) {
                        return curCSS( elem, name );
                    }
                },

                // A method for quickly swapping in/out CSS properties to get correct calculations
                swap: function( elem, options, callback ) {
                    var old = {},
                            ret, name;

                    // Remember the old values, and insert the new ones
                    for ( name in options ) {
                        old[ name ] = elem.style[ name ];
                        elem.style[ name ] = options[ name ];
                    }

                    ret = callback.call( elem );

                    // Revert the old values
                    for ( name in options ) {
                        elem.style[ name ] = old[ name ];
                    }

                    return ret;
                }
            });

// DEPRECATED in 1.3, Use jQuery.css() instead
            jQuery.curCSS = jQuery.css;

            if ( document.defaultView && document.defaultView.getComputedStyle ) {
                getComputedStyle = function( elem, name ) {
                    var ret, defaultView, computedStyle, width,
                            style = elem.style;

                    name = name.replace( rupper, "-$1" ).toLowerCase();

                    if ( (defaultView = elem.ownerDocument.defaultView) &&
                            (computedStyle = defaultView.getComputedStyle( elem, null )) ) {

                        ret = computedStyle.getPropertyValue( name );
                        if ( ret === "" && !jQuery.contains( elem.ownerDocument.documentElement, elem ) ) {
                            ret = jQuery.style( elem, name );
                        }
                    }

                    // A tribute to the "awesome hack by Dean Edwards"
                    // WebKit uses "computed value (percentage if specified)" instead of "used value" for margins
                    // which is against the CSSOM draft spec: http://dev.w3.org/csswg/cssom/#resolved-values
                    if ( !jQuery.support.pixelMargin && computedStyle && rmargin.test( name ) && rnumnonpx.test( ret ) ) {
                        width = style.width;
                        style.width = ret;
                        ret = computedStyle.width;
                        style.width = width;
                    }

                    return ret;
                };
            }

            if ( document.documentElement.currentStyle ) {
                currentStyle = function( elem, name ) {
                    var left, rsLeft, uncomputed,
                            ret = elem.currentStyle && elem.currentStyle[ name ],
                            style = elem.style;

                    // Avoid setting ret to empty string here
                    // so we don't default to auto
                    if ( ret == null && style && (uncomputed = style[ name ]) ) {
                        ret = uncomputed;
                    }

                    // From the awesome hack by Dean Edwards
                    // http://erik.eae.net/archives/2007/07/27/18.54.15/#comment-102291

                    // If we're not dealing with a regular pixel number
                    // but a number that has a weird ending, we need to convert it to pixels
                    if ( rnumnonpx.test( ret ) ) {

                        // Remember the original values
                        left = style.left;
                        rsLeft = elem.runtimeStyle && elem.runtimeStyle.left;

                        // Put in the new values to get a computed value out
                        if ( rsLeft ) {
                            elem.runtimeStyle.left = elem.currentStyle.left;
                        }
                        style.left = name === "fontSize" ? "1em" : ret;
                        ret = style.pixelLeft + "px";

                        // Revert the changed values
                        style.left = left;
                        if ( rsLeft ) {
                            elem.runtimeStyle.left = rsLeft;
                        }
                    }

                    return ret === "" ? "auto" : ret;
                };
            }

            curCSS = getComputedStyle || currentStyle;

            function getWidthOrHeight( elem, name, extra ) {

                // Start with offset property
                var val = name === "width" ? elem.offsetWidth : elem.offsetHeight,
                        i = name === "width" ? 1 : 0,
                        len = 4;

                if ( val > 0 ) {
                    if ( extra !== "border" ) {
                        for ( ; i < len; i += 2 ) {
                            if ( !extra ) {
                                val -= parseFloat( jQuery.css( elem, "padding" + cssExpand[ i ] ) ) || 0;
                            }
                            if ( extra === "margin" ) {
                                val += parseFloat( jQuery.css( elem, extra + cssExpand[ i ] ) ) || 0;
                            } else {
                                val -= parseFloat( jQuery.css( elem, "border" + cssExpand[ i ] + "Width" ) ) || 0;
                            }
                        }
                    }

                    return val + "px";
                }

                // Fall back to computed then uncomputed css if necessary
                val = curCSS( elem, name );
                if ( val < 0 || val == null ) {
                    val = elem.style[ name ];
                }

                // Computed unit is not pixels. Stop here and return.
                if ( rnumnonpx.test(val) ) {
                    return val;
                }

                // Normalize "", auto, and prepare for extra
                val = parseFloat( val ) || 0;

                // Add padding, border, margin
                if ( extra ) {
                    for ( ; i < len; i += 2 ) {
                        val += parseFloat( jQuery.css( elem, "padding" + cssExpand[ i ] ) ) || 0;
                        if ( extra !== "padding" ) {
                            val += parseFloat( jQuery.css( elem, "border" + cssExpand[ i ] + "Width" ) ) || 0;
                        }
                        if ( extra === "margin" ) {
                            val += parseFloat( jQuery.css( elem, extra + cssExpand[ i ]) ) || 0;
                        }
                    }
                }

                return val + "px";
            }

            jQuery.each([ "height", "width" ], function( i, name ) {
                jQuery.cssHooks[ name ] = {
                    get: function( elem, computed, extra ) {
                        if ( computed ) {
                            if ( elem.offsetWidth !== 0 ) {
                                return getWidthOrHeight( elem, name, extra );
                            } else {
                                return jQuery.swap( elem, cssShow, function() {
                                    return getWidthOrHeight( elem, name, extra );
                                });
                            }
                        }
                    },

                    set: function( elem, value ) {
                        return rnum.test( value ) ?
                        value + "px" :
                                value;
                    }
                };
            });

            if ( !jQuery.support.opacity ) {
                jQuery.cssHooks.opacity = {
                    get: function( elem, computed ) {
                        // IE uses filters for opacity
                        return ropacity.test( (computed && elem.currentStyle ? elem.currentStyle.filter : elem.style.filter) || "" ) ?
                        ( parseFloat( RegExp.$1 ) / 100 ) + "" :
                                computed ? "1" : "";
                    },

                    set: function( elem, value ) {
                        var style = elem.style,
                                currentStyle = elem.currentStyle,
                                opacity = jQuery.isNumeric( value ) ? "alpha(opacity=" + value * 100 + ")" : "",
                                filter = currentStyle && currentStyle.filter || style.filter || "";

                        // IE has trouble with opacity if it does not have layout
                        // Force it by setting the zoom level
                        style.zoom = 1;

                        // if setting opacity to 1, and no other filters exist - attempt to remove filter attribute #6652
                        if ( value >= 1 && jQuery.trim( filter.replace( ralpha, "" ) ) === "" ) {

                            // Setting style.filter to null, "" & " " still leave "filter:" in the cssText
                            // if "filter:" is present at all, clearType is disabled, we want to avoid this
                            // style.removeAttribute is IE Only, but so apparently is this code path...
                            style.removeAttribute( "filter" );

                            // if there there is no filter style applied in a css rule, we are done
                            if ( currentStyle && !currentStyle.filter ) {
                                return;
                            }
                        }

                        // otherwise, set new filter values
                        style.filter = ralpha.test( filter ) ?
                                filter.replace( ralpha, opacity ) :
                        filter + " " + opacity;
                    }
                };
            }

            jQuery(function() {
                // This hook cannot be added until DOM ready because the support test
                // for it is not run until after DOM ready
                if ( !jQuery.support.reliableMarginRight ) {
                    jQuery.cssHooks.marginRight = {
                        get: function( elem, computed ) {
                            // WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right
                            // Work around by temporarily setting element display to inline-block
                            return jQuery.swap( elem, { "display": "inline-block" }, function() {
                                if ( computed ) {
                                    return curCSS( elem, "margin-right" );
                                } else {
                                    return elem.style.marginRight;
                                }
                            });
                        }
                    };
                }
            });

            if ( jQuery.expr && jQuery.expr.filters ) {
                jQuery.expr.filters.hidden = function( elem ) {
                    var width = elem.offsetWidth,
                            height = elem.offsetHeight;

                    return ( width === 0 && height === 0 ) || (!jQuery.support.reliableHiddenOffsets && ((elem.style && elem.style.display) || jQuery.css( elem, "display" )) === "none");
                };

                jQuery.expr.filters.visible = function( elem ) {
                    return !jQuery.expr.filters.hidden( elem );
                };
            }

// These hooks are used by animate to expand properties
            jQuery.each({
                margin: "",
                padding: "",
                border: "Width"
            }, function( prefix, suffix ) {

                jQuery.cssHooks[ prefix + suffix ] = {
                    expand: function( value ) {
                        var i,

                        // assumes a single number if not a string
                                parts = typeof value === "string" ? value.split(" ") : [ value ],
                                expanded = {};

                        for ( i = 0; i < 4; i++ ) {
                            expanded[ prefix + cssExpand[ i ] + suffix ] =
                                    parts[ i ] || parts[ i - 2 ] || parts[ 0 ];
                        }

                        return expanded;
                    }
                };
            });




            var r20 = /%20/g,
                    rbracket = /\[\]$/,
                    rCRLF = /\r?\n/g,
                    rhash = /#.*$/,
                    rheaders = /^(.*?):[ \t]*([^\r\n]*)\r?$/mg, // IE leaves an \r character at EOL
                    rinput = /^(?:color|date|datetime|datetime-local|email|hidden|month|number|password|range|search|tel|text|time|url|week)$/i,
            // #7653, #8125, #8152: local protocol detection
                    rlocalProtocol = /^(?:about|app|app\-storage|.+\-extension|file|res|widget):$/,
                    rnoContent = /^(?:GET|HEAD)$/,
                    rprotocol = /^\/\//,
                    rquery = /\?/,
                    rscript = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,
                    rselectTextarea = /^(?:select|textarea)/i,
                    rspacesAjax = /\s+/,
                    rts = /([?&])_=[^&]*/,
                    rurl = /^([\w\+\.\-]+:)(?:\/\/([^\/?#:]*)(?::(\d+))?)?/,

            // Keep a copy of the old load method
                    _load = jQuery.fn.load,

            /* Prefilters
             * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
             * 2) These are called:
             *    - BEFORE asking for a transport
             *    - AFTER param serialization (s.data is a string if s.processData is true)
             * 3) key is the dataType
             * 4) the catchall symbol "*" can be used
             * 5) execution will start with transport dataType and THEN continue down to "*" if needed
             */
                    prefilters = {},

            /* Transports bindings
             * 1) key is the dataType
             * 2) the catchall symbol "*" can be used
             * 3) selection will start with transport dataType and THEN go to "*" if needed
             */
                    transports = {},

            // Document location
                    ajaxLocation,

            // Document location segments
                    ajaxLocParts,

            // Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
                    allTypes = ["*/"] + ["*"];

// #8138, IE may throw an exception when accessing
// a field from window.location if document.domain has been set
            try {
                ajaxLocation = location.href;
            } catch( e ) {
                // Use the href attribute of an A element
                // since IE will modify it given document.location
                ajaxLocation = document.createElement( "a" );
                ajaxLocation.href = "";
                ajaxLocation = ajaxLocation.href;
            }

// Segment location into parts
            ajaxLocParts = rurl.exec( ajaxLocation.toLowerCase() ) || [];

// Base "constructor" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
            function addToPrefiltersOrTransports( structure ) {

                // dataTypeExpression is optional and defaults to "*"
                return function( dataTypeExpression, func ) {

                    if ( typeof dataTypeExpression !== "string" ) {
                        func = dataTypeExpression;
                        dataTypeExpression = "*";
                    }

                    if ( jQuery.isFunction( func ) ) {
                        var dataTypes = dataTypeExpression.toLowerCase().split( rspacesAjax ),
                                i = 0,
                                length = dataTypes.length,
                                dataType,
                                list,
                                placeBefore;

                        // For each dataType in the dataTypeExpression
                        for ( ; i < length; i++ ) {
                            dataType = dataTypes[ i ];
                            // We control if we're asked to add before
                            // any existing element
                            placeBefore = /^\+/.test( dataType );
                            if ( placeBefore ) {
                                dataType = dataType.substr( 1 ) || "*";
                            }
                            list = structure[ dataType ] = structure[ dataType ] || [];
                            // then we add to the structure accordingly
                            list[ placeBefore ? "unshift" : "push" ]( func );
                        }
                    }
                };
            }

// Base inspection function for prefilters and transports
            function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR,
                                                    dataType /* internal */, inspected /* internal */ ) {

                dataType = dataType || options.dataTypes[ 0 ];
                inspected = inspected || {};

                inspected[ dataType ] = true;

                var list = structure[ dataType ],
                        i = 0,
                        length = list ? list.length : 0,
                        executeOnly = ( structure === prefilters ),
                        selection;

                for ( ; i < length && ( executeOnly || !selection ); i++ ) {
                    selection = list[ i ]( options, originalOptions, jqXHR );
                    // If we got redirected to another dataType
                    // we try there if executing only and not done already
                    if ( typeof selection === "string" ) {
                        if ( !executeOnly || inspected[ selection ] ) {
                            selection = undefined;
                        } else {
                            options.dataTypes.unshift( selection );
                            selection = inspectPrefiltersOrTransports(
                                    structure, options, originalOptions, jqXHR, selection, inspected );
                        }
                    }
                }
                // If we're only executing or nothing was selected
                // we try the catchall dataType if not done already
                if ( ( executeOnly || !selection ) && !inspected[ "*" ] ) {
                    selection = inspectPrefiltersOrTransports(
                            structure, options, originalOptions, jqXHR, "*", inspected );
                }
                // unnecessary when only executing (prefilters)
                // but it'll be ignored by the caller in that case
                return selection;
            }

// A special extend for ajax options
// that takes "flat" options (not to be deep extended)
// Fixes #9887
            function ajaxExtend( target, src ) {
                var key, deep,
                        flatOptions = jQuery.ajaxSettings.flatOptions || {};
                for ( key in src ) {
                    if ( src[ key ] !== undefined ) {
                        ( flatOptions[ key ] ? target : ( deep || ( deep = {} ) ) )[ key ] = src[ key ];
                    }
                }
                if ( deep ) {
                    jQuery.extend( true, target, deep );
                }
            }

            jQuery.fn.extend({
                load: function( url, params, callback ) {
                    if ( typeof url !== "string" && _load ) {
                        return _load.apply( this, arguments );

                        // Don't do a request if no elements are being requested
                    } else if ( !this.length ) {
                        return this;
                    }

                    var off = url.indexOf( " " );
                    if ( off >= 0 ) {
                        var selector = url.slice( off, url.length );
                        url = url.slice( 0, off );
                    }

                    // Default to a GET request
                    var type = "GET";

                    // If the second parameter was provided
                    if ( params ) {
                        // If it's a function
                        if ( jQuery.isFunction( params ) ) {
                            // We assume that it's the callback
                            callback = params;
                            params = undefined;

                            // Otherwise, build a param string
                        } else if ( typeof params === "object" ) {
                            params = jQuery.param( params, jQuery.ajaxSettings.traditional );
                            type = "POST";
                        }
                    }

                    var self = this;

                    // Request the remote document
                    jQuery.ajax({
                        url: url,
                        type: type,
                        dataType: "html",
                        data: params,
                        // Complete callback (responseText is used internally)
                        complete: function( jqXHR, status, responseText ) {
                            // Store the response as specified by the jqXHR object
                            responseText = jqXHR.responseText;
                            // If successful, inject the HTML into all the matched elements
                            if ( jqXHR.isResolved() ) {
                                // #4825: Get the actual response in case
                                // a dataFilter is present in ajaxSettings
                                jqXHR.done(function( r ) {
                                    responseText = r;
                                });
                                // See if a selector was specified
                                self.html( selector ?
                                        // Create a dummy div to hold the results
                                        jQuery("<div>")
                                        // inject the contents of the document in, removing the scripts
                                        // to avoid any 'Permission Denied' errors in IE
                                                .append(responseText.replace(rscript, ""))

                                                // Locate the specified elements
                                                .find(selector) :

                                        // If not, just inject the full result
                                        responseText );
                            }

                            if ( callback ) {
                                self.each( callback, [ responseText, status, jqXHR ] );
                            }
                        }
                    });

                    return this;
                },

                serialize: function() {
                    return jQuery.param( this.serializeArray() );
                },

                serializeArray: function() {
                    return this.map(function(){
                                return this.elements ? jQuery.makeArray( this.elements ) : this;
                            })
                            .filter(function(){
                                return this.name && !this.disabled &&
                                        ( this.checked || rselectTextarea.test( this.nodeName ) ||
                                        rinput.test( this.type ) );
                            })
                            .map(function( i, elem ){
                                var val = jQuery( this ).val();

                                return val == null ?
                                        null :
                                        jQuery.isArray( val ) ?
                                                jQuery.map( val, function( val, i ){
                                                    return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
                                                }) :
                                        { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
                            }).get();
                }
            });

// Attach a bunch of functions for handling common AJAX events
            jQuery.each( "ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split( " " ), function( i, o ){
                jQuery.fn[ o ] = function( f ){
                    return this.on( o, f );
                };
            });

            jQuery.each( [ "get", "post" ], function( i, method ) {
                jQuery[ method ] = function( url, data, callback, type ) {
                    // shift arguments if data argument was omitted
                    if ( jQuery.isFunction( data ) ) {
                        type = type || callback;
                        callback = data;
                        data = undefined;
                    }

                    return jQuery.ajax({
                        type: method,
                        url: url,
                        data: data,
                        success: callback,
                        dataType: type
                    });
                };
            });

            jQuery.extend({

                getScript: function( url, callback ) {
                    return jQuery.get( url, undefined, callback, "script" );
                },

                getJSON: function( url, data, callback ) {
                    return jQuery.get( url, data, callback, "json" );
                },

                // Creates a full fledged settings object into target
                // with both ajaxSettings and settings fields.
                // If target is omitted, writes into ajaxSettings.
                ajaxSetup: function( target, settings ) {
                    if ( settings ) {
                        // Building a settings object
                        ajaxExtend( target, jQuery.ajaxSettings );
                    } else {
                        // Extending ajaxSettings
                        settings = target;
                        target = jQuery.ajaxSettings;
                    }
                    ajaxExtend( target, settings );
                    return target;
                },

                ajaxSettings: {
                    url: ajaxLocation,
                    isLocal: rlocalProtocol.test( ajaxLocParts[ 1 ] ),
                    global: true,
                    type: "GET",
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    processData: true,
                    async: true,
                    /*
                     timeout: 0,
                     data: null,
                     dataType: null,
                     username: null,
                     password: null,
                     cache: null,
                     traditional: false,
                     headers: {},
                     */

                    accepts: {
                        xml: "application/xml, text/xml",
                        html: "text/html",
                        text: "text/plain",
                        json: "application/json, text/javascript",
                        "*": allTypes
                    },

                    contents: {
                        xml: /xml/,
                        html: /html/,
                        json: /json/
                    },

                    responseFields: {
                        xml: "responseXML",
                        text: "responseText"
                    },

                    // List of data converters
                    // 1) key format is "source_type destination_type" (a single space in-between)
                    // 2) the catchall symbol "*" can be used for source_type
                    converters: {

                        // Convert anything to text
                        "* text": window.String,

                        // Text to html (true = no transformation)
                        "text html": true,

                        // Evaluate text as a json expression
                        "text json": jQuery.parseJSON,

                        // Parse text as xml
                        "text xml": jQuery.parseXML
                    },

                    // For options that shouldn't be deep extended:
                    // you can add your own custom options here if
                    // and when you create one that shouldn't be
                    // deep extended (see ajaxExtend)
                    flatOptions: {
                        context: true,
                        url: true
                    }
                },

                ajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
                ajaxTransport: addToPrefiltersOrTransports( transports ),

                // Main method
                ajax: function( url, options ) {

                    // If url is an object, simulate pre-1.5 signature
                    if ( typeof url === "object" ) {
                        options = url;
                        url = undefined;
                    }

                    // Force options to be an object
                    options = options || {};

                    var // Create the final options object
                            s = jQuery.ajaxSetup( {}, options ),
                    // Callbacks context
                            callbackContext = s.context || s,
                    // Context for global events
                    // It's the callbackContext if one was provided in the options
                    // and if it's a DOM node or a jQuery collection
                            globalEventContext = callbackContext !== s &&
                            ( callbackContext.nodeType || callbackContext instanceof jQuery ) ?
                                    jQuery( callbackContext ) : jQuery.event,
                    // Deferreds
                            deferred = jQuery.Deferred(),
                            completeDeferred = jQuery.Callbacks( "once memory" ),
                    // Status-dependent callbacks
                            statusCode = s.statusCode || {},
                    // ifModified key
                            ifModifiedKey,
                    // Headers (they are sent all at once)
                            requestHeaders = {},
                            requestHeadersNames = {},
                    // Response headers
                            responseHeadersString,
                            responseHeaders,
                    // transport
                            transport,
                    // timeout handle
                            timeoutTimer,
                    // Cross-domain detection vars
                            parts,
                    // The jqXHR state
                            state = 0,
                    // To know if global events are to be dispatched
                            fireGlobals,
                    // Loop variable
                            i,
                    // Fake xhr
                            jqXHR = {

                                readyState: 0,

                                // Caches the header
                                setRequestHeader: function( name, value ) {
                                    if ( !state ) {
                                        var lname = name.toLowerCase();
                                        name = requestHeadersNames[ lname ] = requestHeadersNames[ lname ] || name;
                                        requestHeaders[ name ] = value;
                                    }
                                    return this;
                                },

                                // Raw string
                                getAllResponseHeaders: function() {
                                    return state === 2 ? responseHeadersString : null;
                                },

                                // Builds headers hashtable if needed
                                getResponseHeader: function( key ) {
                                    var match;
                                    if ( state === 2 ) {
                                        if ( !responseHeaders ) {
                                            responseHeaders = {};
                                            while( ( match = rheaders.exec( responseHeadersString ) ) ) {
                                                responseHeaders[ match[1].toLowerCase() ] = match[ 2 ];
                                            }
                                        }
                                        match = responseHeaders[ key.toLowerCase() ];
                                    }
                                    return match === undefined ? null : match;
                                },

                                // Overrides response content-type header
                                overrideMimeType: function( type ) {
                                    if ( !state ) {
                                        s.mimeType = type;
                                    }
                                    return this;
                                },

                                // Cancel the request
                                abort: function( statusText ) {
                                    statusText = statusText || "abort";
                                    if ( transport ) {
                                        transport.abort( statusText );
                                    }
                                    done( 0, statusText );
                                    return this;
                                }
                            };

                    // Callback for when everything is done
                    // It is defined here because jslint complains if it is declared
                    // at the end of the function (which would be more logical and readable)
                    function done( status, nativeStatusText, responses, headers ) {

                        // Called once
                        if ( state === 2 ) {
                            return;
                        }

                        // State is "done" now
                        state = 2;

                        // Clear timeout if it exists
                        if ( timeoutTimer ) {
                            clearTimeout( timeoutTimer );
                        }

                        // Dereference transport for early garbage collection
                        // (no matter how long the jqXHR object will be used)
                        transport = undefined;

                        // Cache response headers
                        responseHeadersString = headers || "";

                        // Set readyState
                        jqXHR.readyState = status > 0 ? 4 : 0;

                        var isSuccess,
                                success,
                                error,
                                statusText = nativeStatusText,
                                response = responses ? ajaxHandleResponses( s, jqXHR, responses ) : undefined,
                                lastModified,
                                etag;

                        // If successful, handle type chaining
                        if ( status >= 200 && status < 300 || status === 304 ) {

                            // Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
                            if ( s.ifModified ) {

                                if ( ( lastModified = jqXHR.getResponseHeader( "Last-Modified" ) ) ) {
                                    jQuery.lastModified[ ifModifiedKey ] = lastModified;
                                }
                                if ( ( etag = jqXHR.getResponseHeader( "Etag" ) ) ) {
                                    jQuery.etag[ ifModifiedKey ] = etag;
                                }
                            }

                            // If not modified
                            if ( status === 304 ) {

                                statusText = "notmodified";
                                isSuccess = true;

                                // If we have data
                            } else {

                                try {
                                    success = ajaxConvert( s, response );
                                    statusText = "success";
                                    isSuccess = true;
                                } catch(e) {
                                    // We have a parsererror
                                    statusText = "parsererror";
                                    error = e;
                                }
                            }
                        } else {
                            // We extract error from statusText
                            // then normalize statusText and status for non-aborts
                            error = statusText;
                            if ( !statusText || status ) {
                                statusText = "error";
                                if ( status < 0 ) {
                                    status = 0;
                                }
                            }
                        }

                        // Set data for the fake xhr object
                        jqXHR.status = status;
                        jqXHR.statusText = "" + ( nativeStatusText || statusText );

                        // Success/Error
                        if ( isSuccess ) {
                            deferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
                        } else {
                            deferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
                        }

                        // Status-dependent callbacks
                        jqXHR.statusCode( statusCode );
                        statusCode = undefined;

                        if ( fireGlobals ) {
                            globalEventContext.trigger( "ajax" + ( isSuccess ? "Success" : "Error" ),
                                    [ jqXHR, s, isSuccess ? success : error ] );
                        }

                        // Complete
                        completeDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

                        if ( fireGlobals ) {
                            globalEventContext.trigger( "ajaxComplete", [ jqXHR, s ] );
                            // Handle the global AJAX counter
                            if ( !( --jQuery.active ) ) {
                                jQuery.event.trigger( "ajaxStop" );
                            }
                        }
                    }

                    // Attach deferreds
                    deferred.promise( jqXHR );
                    jqXHR.success = jqXHR.done;
                    jqXHR.error = jqXHR.fail;
                    jqXHR.complete = completeDeferred.add;

                    // Status-dependent callbacks
                    jqXHR.statusCode = function( map ) {
                        if ( map ) {
                            var tmp;
                            if ( state < 2 ) {
                                for ( tmp in map ) {
                                    statusCode[ tmp ] = [ statusCode[tmp], map[tmp] ];
                                }
                            } else {
                                tmp = map[ jqXHR.status ];
                                jqXHR.then( tmp, tmp );
                            }
                        }
                        return this;
                    };

                    // Remove hash character (#7531: and string promotion)
                    // Add protocol if not provided (#5866: IE7 issue with protocol-less urls)
                    // We also use the url parameter if available
                    s.url = ( ( url || s.url ) + "" ).replace( rhash, "" ).replace( rprotocol, ajaxLocParts[ 1 ] + "//" );

                    // Extract dataTypes list
                    s.dataTypes = jQuery.trim( s.dataType || "*" ).toLowerCase().split( rspacesAjax );

                    // Determine if a cross-domain request is in order
                    if ( s.crossDomain == null ) {
                        parts = rurl.exec( s.url.toLowerCase() );
                        s.crossDomain = !!( parts &&
                                ( parts[ 1 ] != ajaxLocParts[ 1 ] || parts[ 2 ] != ajaxLocParts[ 2 ] ||
                                ( parts[ 3 ] || ( parts[ 1 ] === "http:" ? 80 : 443 ) ) !=
                                ( ajaxLocParts[ 3 ] || ( ajaxLocParts[ 1 ] === "http:" ? 80 : 443 ) ) )
                        );
                    }

                    // Convert data if not already a string
                    if ( s.data && s.processData && typeof s.data !== "string" ) {
                        s.data = jQuery.param( s.data, s.traditional );
                    }

                    // Apply prefilters
                    inspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

                    // If request was aborted inside a prefilter, stop there
                    if ( state === 2 ) {
                        return false;
                    }

                    // We can fire global events as of now if asked to
                    fireGlobals = s.global;

                    // Uppercase the type
                    s.type = s.type.toUpperCase();

                    // Determine if request has content
                    s.hasContent = !rnoContent.test( s.type );

                    // Watch for a new set of requests
                    if ( fireGlobals && jQuery.active++ === 0 ) {
                        jQuery.event.trigger( "ajaxStart" );
                    }

                    // More options handling for requests with no content
                    if ( !s.hasContent ) {

                        // If data is available, append data to url
                        if ( s.data ) {
                            s.url += ( rquery.test( s.url ) ? "&" : "?" ) + s.data;
                            // #9682: remove data so that it's not used in an eventual retry
                            delete s.data;
                        }

                        // Get ifModifiedKey before adding the anti-cache parameter
                        ifModifiedKey = s.url;

                        // Add anti-cache in url if needed
                        if ( s.cache === false ) {

                            var ts = jQuery.now(),
                            // try replacing _= if it is there
                                    ret = s.url.replace( rts, "$1_=" + ts );

                            // if nothing was replaced, add timestamp to the end
                            s.url = ret + ( ( ret === s.url ) ? ( rquery.test( s.url ) ? "&" : "?" ) + "_=" + ts : "" );
                        }
                    }

                    // Set the correct header, if data is being sent
                    if ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
                        jqXHR.setRequestHeader( "Content-Type", s.contentType );
                    }

                    // Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
                    if ( s.ifModified ) {
                        ifModifiedKey = ifModifiedKey || s.url;
                        if ( jQuery.lastModified[ ifModifiedKey ] ) {
                            jqXHR.setRequestHeader( "If-Modified-Since", jQuery.lastModified[ ifModifiedKey ] );
                        }
                        if ( jQuery.etag[ ifModifiedKey ] ) {
                            jqXHR.setRequestHeader( "If-None-Match", jQuery.etag[ ifModifiedKey ] );
                        }
                    }

                    // Set the Accepts header for the server, depending on the dataType
                    jqXHR.setRequestHeader(
                            "Accept",
                            s.dataTypes[ 0 ] && s.accepts[ s.dataTypes[0] ] ?
                            s.accepts[ s.dataTypes[0] ] + ( s.dataTypes[ 0 ] !== "*" ? ", " + allTypes + "; q=0.01" : "" ) :
                                    s.accepts[ "*" ]
                    );

                    // Check for headers option
                    for ( i in s.headers ) {
                        jqXHR.setRequestHeader( i, s.headers[ i ] );
                    }

                    // Allow custom headers/mimetypes and early abort
                    if ( s.beforeSend && ( s.beforeSend.call( callbackContext, jqXHR, s ) === false || state === 2 ) ) {
                        // Abort if not done already
                        jqXHR.abort();
                        return false;

                    }

                    // Install callbacks on deferreds
                    for ( i in { success: 1, error: 1, complete: 1 } ) {
                        jqXHR[ i ]( s[ i ] );
                    }

                    // Get transport
                    transport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

                    // If no transport, we auto-abort
                    if ( !transport ) {
                        done( -1, "No Transport" );
                    } else {
                        jqXHR.readyState = 1;
                        // Send global event
                        if ( fireGlobals ) {
                            globalEventContext.trigger( "ajaxSend", [ jqXHR, s ] );
                        }
                        // Timeout
                        if ( s.async && s.timeout > 0 ) {
                            timeoutTimer = setTimeout( function(){
                                jqXHR.abort( "timeout" );
                            }, s.timeout );
                        }

                        try {
                            state = 1;
                            transport.send( requestHeaders, done );
                        } catch (e) {
                            // Propagate exception as error if not done
                            if ( state < 2 ) {
                                done( -1, e );
                                // Simply rethrow otherwise
                            } else {
                                throw e;
                            }
                        }
                    }

                    return jqXHR;
                },

                // Serialize an array of form elements or a set of
                // key/values into a query string
                param: function( a, traditional ) {
                    var s = [],
                            add = function( key, value ) {
                                // If value is a function, invoke it and return its value
                                value = jQuery.isFunction( value ) ? value() : value;
                                s[ s.length ] = encodeURIComponent( key ) + "=" + encodeURIComponent( value );
                            };

                    // Set traditional to true for jQuery <= 1.3.2 behavior.
                    if ( traditional === undefined ) {
                        traditional = jQuery.ajaxSettings.traditional;
                    }

                    // If an array was passed in, assume that it is an array of form elements.
                    if ( jQuery.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {
                        // Serialize the form elements
                        jQuery.each( a, function() {
                            add( this.name, this.value );
                        });

                    } else {
                        // If traditional, encode the "old" way (the way 1.3.2 or older
                        // did it), otherwise encode params recursively.
                        for ( var prefix in a ) {
                            buildParams( prefix, a[ prefix ], traditional, add );
                        }
                    }

                    // Return the resulting serialization
                    return s.join( "&" ).replace( r20, "+" );
                }
            });

            function buildParams( prefix, obj, traditional, add ) {
                if ( jQuery.isArray( obj ) ) {
                    // Serialize array item.
                    jQuery.each( obj, function( i, v ) {
                        if ( traditional || rbracket.test( prefix ) ) {
                            // Treat each array item as a scalar.
                            add( prefix, v );

                        } else {
                            // If array item is non-scalar (array or object), encode its
                            // numeric index to resolve deserialization ambiguity issues.
                            // Note that rack (as of 1.0.0) can't currently deserialize
                            // nested arrays properly, and attempting to do so may cause
                            // a server error. Possible fixes are to modify rack's
                            // deserialization algorithm or to provide an option or flag
                            // to force array serialization to be shallow.
                            buildParams( prefix + "[" + ( typeof v === "object" ? i : "" ) + "]", v, traditional, add );
                        }
                    });

                } else if ( !traditional && jQuery.type( obj ) === "object" ) {
                    // Serialize object item.
                    for ( var name in obj ) {
                        buildParams( prefix + "[" + name + "]", obj[ name ], traditional, add );
                    }

                } else {
                    // Serialize scalar item.
                    add( prefix, obj );
                }
            }

// This is still on the jQuery object... for now
// Want to move this to jQuery.ajax some day
            jQuery.extend({

                // Counter for holding the number of active queries
                active: 0,

                // Last-Modified header cache for next request
                lastModified: {},
                etag: {}

            });

            /* Handles responses to an ajax request:
             * - sets all responseXXX fields accordingly
             * - finds the right dataType (mediates between content-type and expected dataType)
             * - returns the corresponding response
             */
            function ajaxHandleResponses( s, jqXHR, responses ) {

                var contents = s.contents,
                        dataTypes = s.dataTypes,
                        responseFields = s.responseFields,
                        ct,
                        type,
                        finalDataType,
                        firstDataType;

                // Fill responseXXX fields
                for ( type in responseFields ) {
                    if ( type in responses ) {
                        jqXHR[ responseFields[type] ] = responses[ type ];
                    }
                }

                // Remove auto dataType and get content-type in the process
                while( dataTypes[ 0 ] === "*" ) {
                    dataTypes.shift();
                    if ( ct === undefined ) {
                        ct = s.mimeType || jqXHR.getResponseHeader( "content-type" );
                    }
                }

                // Check if we're dealing with a known content-type
                if ( ct ) {
                    for ( type in contents ) {
                        if ( contents[ type ] && contents[ type ].test( ct ) ) {
                            dataTypes.unshift( type );
                            break;
                        }
                    }
                }

                // Check to see if we have a response for the expected dataType
                if ( dataTypes[ 0 ] in responses ) {
                    finalDataType = dataTypes[ 0 ];
                } else {
                    // Try convertible dataTypes
                    for ( type in responses ) {
                        if ( !dataTypes[ 0 ] || s.converters[ type + " " + dataTypes[0] ] ) {
                            finalDataType = type;
                            break;
                        }
                        if ( !firstDataType ) {
                            firstDataType = type;
                        }
                    }
                    // Or just use first one
                    finalDataType = finalDataType || firstDataType;
                }

                // If we found a dataType
                // We add the dataType to the list if needed
                // and return the corresponding response
                if ( finalDataType ) {
                    if ( finalDataType !== dataTypes[ 0 ] ) {
                        dataTypes.unshift( finalDataType );
                    }
                    return responses[ finalDataType ];
                }
            }

// Chain conversions given the request and the original response
            function ajaxConvert( s, response ) {

                // Apply the dataFilter if provided
                if ( s.dataFilter ) {
                    response = s.dataFilter( response, s.dataType );
                }

                var dataTypes = s.dataTypes,
                        converters = {},
                        i,
                        key,
                        length = dataTypes.length,
                        tmp,
                // Current and previous dataTypes
                        current = dataTypes[ 0 ],
                        prev,
                // Conversion expression
                        conversion,
                // Conversion function
                        conv,
                // Conversion functions (transitive conversion)
                        conv1,
                        conv2;

                // For each dataType in the chain
                for ( i = 1; i < length; i++ ) {

                    // Create converters map
                    // with lowercased keys
                    if ( i === 1 ) {
                        for ( key in s.converters ) {
                            if ( typeof key === "string" ) {
                                converters[ key.toLowerCase() ] = s.converters[ key ];
                            }
                        }
                    }

                    // Get the dataTypes
                    prev = current;
                    current = dataTypes[ i ];

                    // If current is auto dataType, update it to prev
                    if ( current === "*" ) {
                        current = prev;
                        // If no auto and dataTypes are actually different
                    } else if ( prev !== "*" && prev !== current ) {

                        // Get the converter
                        conversion = prev + " " + current;
                        conv = converters[ conversion ] || converters[ "* " + current ];

                        // If there is no direct converter, search transitively
                        if ( !conv ) {
                            conv2 = undefined;
                            for ( conv1 in converters ) {
                                tmp = conv1.split( " " );
                                if ( tmp[ 0 ] === prev || tmp[ 0 ] === "*" ) {
                                    conv2 = converters[ tmp[1] + " " + current ];
                                    if ( conv2 ) {
                                        conv1 = converters[ conv1 ];
                                        if ( conv1 === true ) {
                                            conv = conv2;
                                        } else if ( conv2 === true ) {
                                            conv = conv1;
                                        }
                                        break;
                                    }
                                }
                            }
                        }
                        // If we found no converter, dispatch an error
                        if ( !( conv || conv2 ) ) {
                            jQuery.error( "No conversion from " + conversion.replace(" "," to ") );
                        }
                        // If found converter is not an equivalence
                        if ( conv !== true ) {
                            // Convert with 1 or 2 converters accordingly
                            response = conv ? conv( response ) : conv2( conv1(response) );
                        }
                    }
                }
                return response;
            }




            var jsc = jQuery.now(),
                    jsre = /(\=)\?(&|$)|\?\?/i;

// Default jsonp settings
            jQuery.ajaxSetup({
                jsonp: "callback",
                jsonpCallback: function() {
                    return jQuery.expando + "_" + ( jsc++ );
                }
            });

// Detect, normalize options and install callbacks for jsonp requests
            jQuery.ajaxPrefilter( "json jsonp", function( s, originalSettings, jqXHR ) {

                var inspectData = ( typeof s.data === "string" ) && /^application\/x\-www\-form\-urlencoded/.test( s.contentType );

                if ( s.dataTypes[ 0 ] === "jsonp" ||
                        s.jsonp !== false && ( jsre.test( s.url ) ||
                        inspectData && jsre.test( s.data ) ) ) {

                    var responseContainer,
                            jsonpCallback = s.jsonpCallback =
                                    jQuery.isFunction( s.jsonpCallback ) ? s.jsonpCallback() : s.jsonpCallback,
                            previous = window[ jsonpCallback ],
                            url = s.url,
                            data = s.data,
                            replace = "$1" + jsonpCallback + "$2";

                    if ( s.jsonp !== false ) {
                        url = url.replace( jsre, replace );
                        if ( s.url === url ) {
                            if ( inspectData ) {
                                data = data.replace( jsre, replace );
                            }
                            if ( s.data === data ) {
                                // Add callback manually
                                url += (/\?/.test( url ) ? "&" : "?") + s.jsonp + "=" + jsonpCallback;
                            }
                        }
                    }

                    s.url = url;
                    s.data = data;

                    // Install callback
                    window[ jsonpCallback ] = function( response ) {
                        responseContainer = [ response ];
                    };

                    // Clean-up function
                    jqXHR.always(function() {
                        // Set callback back to previous value
                        window[ jsonpCallback ] = previous;
                        // Call if it was a function and we have a response
                        if ( responseContainer && jQuery.isFunction( previous ) ) {
                            window[ jsonpCallback ]( responseContainer[ 0 ] );
                        }
                    });

                    // Use data converter to retrieve json after script execution
                    s.converters["script json"] = function() {
                        if ( !responseContainer ) {
                            jQuery.error( jsonpCallback + " was not called" );
                        }
                        return responseContainer[ 0 ];
                    };

                    // force json dataType
                    s.dataTypes[ 0 ] = "json";

                    // Delegate to script
                    return "script";
                }
            });




// Install script dataType
            jQuery.ajaxSetup({
                accepts: {
                    script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
                },
                contents: {
                    script: /javascript|ecmascript/
                },
                converters: {
                    "text script": function( text ) {
                        jQuery.globalEval( text );
                        return text;
                    }
                }
            });

// Handle cache's special case and global
            jQuery.ajaxPrefilter( "script", function( s ) {
                if ( s.cache === undefined ) {
                    s.cache = false;
                }
                if ( s.crossDomain ) {
                    s.type = "GET";
                    s.global = false;
                }
            });

// Bind script tag hack transport
            jQuery.ajaxTransport( "script", function(s) {

                // This transport only deals with cross domain requests
                if ( s.crossDomain ) {

                    var script,
                            head = document.head || document.getElementsByTagName( "head" )[0] || document.documentElement;

                    return {

                        send: function( _, callback ) {

                            script = document.createElement( "script" );

                            script.async = "async";

                            if ( s.scriptCharset ) {
                                script.charset = s.scriptCharset;
                            }

                            script.src = s.url;

                            // Attach handlers for all browsers
                            script.onload = script.onreadystatechange = function( _, isAbort ) {

                                if ( isAbort || !script.readyState || /loaded|complete/.test( script.readyState ) ) {

                                    // Handle memory leak in IE
                                    script.onload = script.onreadystatechange = null;

                                    // Remove the script
                                    if ( head && script.parentNode ) {
                                        head.removeChild( script );
                                    }

                                    // Dereference the script
                                    script = undefined;

                                    // Callback if not abort
                                    if ( !isAbort ) {
                                        callback( 200, "success" );
                                    }
                                }
                            };
                            // Use insertBefore instead of appendChild  to circumvent an IE6 bug.
                            // This arises when a base node is used (#2709 and #4378).
                            head.insertBefore( script, head.firstChild );
                        },

                        abort: function() {
                            if ( script ) {
                                script.onload( 0, 1 );
                            }
                        }
                    };
                }
            });




            var // #5280: Internet Explorer will keep connections alive if we don't abort on unload
                    xhrOnUnloadAbort = window.ActiveXObject ? function() {
                        // Abort all pending requests
                        for ( var key in xhrCallbacks ) {
                            xhrCallbacks[ key ]( 0, 1 );
                        }
                    } : false,
                    xhrId = 0,
                    xhrCallbacks;

// Functions to create xhrs
            function createStandardXHR() {
                try {
                    return new window.XMLHttpRequest();
                } catch( e ) {}
            }

            function createActiveXHR() {
                try {
                    return new window.ActiveXObject( "Microsoft.XMLHTTP" );
                } catch( e ) {}
            }

// Create the request object
// (This is still attached to ajaxSettings for backward compatibility)
            jQuery.ajaxSettings.xhr = window.ActiveXObject ?
                    /* Microsoft failed to properly
                     * implement the XMLHttpRequest in IE7 (can't request local files),
                     * so we use the ActiveXObject when it is available
                     * Additionally XMLHttpRequest can be disabled in IE7/IE8 so
                     * we need a fallback.
                     */
                    function() {
                        return !this.isLocal && createStandardXHR() || createActiveXHR();
                    } :
                    // For all other browsers, use the standard XMLHttpRequest object
                    createStandardXHR;

// Determine support properties
            (function( xhr ) {
                jQuery.extend( jQuery.support, {
                    ajax: !!xhr,
                    cors: !!xhr && ( "withCredentials" in xhr )
                });
            })( jQuery.ajaxSettings.xhr() );

// Create transport if the browser can provide an xhr
            if ( jQuery.support.ajax ) {

                jQuery.ajaxTransport(function( s ) {
                    // Cross domain only allowed if supported through XMLHttpRequest
                    if ( !s.crossDomain || jQuery.support.cors ) {

                        var callback;

                        return {
                            send: function( headers, complete ) {

                                // Get a new xhr
                                var xhr = s.xhr(),
                                        handle,
                                        i;

                                // Open the socket
                                // Passing null username, generates a login popup on Opera (#2865)
                                if ( s.username ) {
                                    xhr.open( s.type, s.url, s.async, s.username, s.password );
                                } else {
                                    xhr.open( s.type, s.url, s.async );
                                }

                                // Apply custom fields if provided
                                if ( s.xhrFields ) {
                                    for ( i in s.xhrFields ) {
                                        xhr[ i ] = s.xhrFields[ i ];
                                    }
                                }

                                // Override mime type if needed
                                if ( s.mimeType && xhr.overrideMimeType ) {
                                    xhr.overrideMimeType( s.mimeType );
                                }

                                // X-Requested-With header
                                // For cross-domain requests, seeing as conditions for a preflight are
                                // akin to a jigsaw puzzle, we simply never set it to be sure.
                                // (it can always be set on a per-request basis or even using ajaxSetup)
                                // For same-domain requests, won't change header if already provided.
                                if ( !s.crossDomain && !headers["X-Requested-With"] ) {
                                    headers[ "X-Requested-With" ] = "XMLHttpRequest";
                                }

                                // Need an extra try/catch for cross domain requests in Firefox 3
                                try {
                                    for ( i in headers ) {
                                        xhr.setRequestHeader( i, headers[ i ] );
                                    }
                                } catch( _ ) {}

                                // Do send the request
                                // This may raise an exception which is actually
                                // handled in jQuery.ajax (so no try/catch here)
                                xhr.send( ( s.hasContent && s.data ) || null );

                                // Listener
                                callback = function( _, isAbort ) {

                                    var status,
                                            statusText,
                                            responseHeaders,
                                            responses,
                                            xml;

                                    // Firefox throws exceptions when accessing properties
                                    // of an xhr when a network error occured
                                    // http://helpful.knobs-dials.com/index.php/Component_returned_failure_code:_0x80040111_(NS_ERROR_NOT_AVAILABLE)
                                    try {

                                        // Was never called and is aborted or complete
                                        if ( callback && ( isAbort || xhr.readyState === 4 ) ) {

                                            // Only called once
                                            callback = undefined;

                                            // Do not keep as active anymore
                                            if ( handle ) {
                                                xhr.onreadystatechange = jQuery.noop;
                                                if ( xhrOnUnloadAbort ) {
                                                    delete xhrCallbacks[ handle ];
                                                }
                                            }

                                            // If it's an abort
                                            if ( isAbort ) {
                                                // Abort it manually if needed
                                                if ( xhr.readyState !== 4 ) {
                                                    xhr.abort();
                                                }
                                            } else {
                                                status = xhr.status;
                                                responseHeaders = xhr.getAllResponseHeaders();
                                                responses = {};
                                                xml = xhr.responseXML;

                                                // Construct response list
                                                if ( xml && xml.documentElement /* #4958 */ ) {
                                                    responses.xml = xml;
                                                }

                                                // When requesting binary data, IE6-9 will throw an exception
                                                // on any attempt to access responseText (#11426)
                                                try {
                                                    responses.text = xhr.responseText;
                                                } catch( _ ) {
                                                }

                                                // Firefox throws an exception when accessing
                                                // statusText for faulty cross-domain requests
                                                try {
                                                    statusText = xhr.statusText;
                                                } catch( e ) {
                                                    // We normalize with Webkit giving an empty statusText
                                                    statusText = "";
                                                }

                                                // Filter status for non standard behaviors

                                                // If the request is local and we have data: assume a success
                                                // (success with no data won't get notified, that's the best we
                                                // can do given current implementations)
                                                if ( !status && s.isLocal && !s.crossDomain ) {
                                                    status = responses.text ? 200 : 404;
                                                    // IE - #1450: sometimes returns 1223 when it should be 204
                                                } else if ( status === 1223 ) {
                                                    status = 204;
                                                }
                                            }
                                        }
                                    } catch( firefoxAccessException ) {
                                        if ( !isAbort ) {
                                            complete( -1, firefoxAccessException );
                                        }
                                    }

                                    // Call complete if needed
                                    if ( responses ) {
                                        complete( status, statusText, responses, responseHeaders );
                                    }
                                };

                                // if we're in sync mode or it's in cache
                                // and has been retrieved directly (IE6 & IE7)
                                // we need to manually fire the callback
                                if ( !s.async || xhr.readyState === 4 ) {
                                    callback();
                                } else {
                                    handle = ++xhrId;
                                    if ( xhrOnUnloadAbort ) {
                                        // Create the active xhrs callbacks list if needed
                                        // and attach the unload handler
                                        if ( !xhrCallbacks ) {
                                            xhrCallbacks = {};
                                            jQuery( window ).unload( xhrOnUnloadAbort );
                                        }
                                        // Add to list of active xhrs callbacks
                                        xhrCallbacks[ handle ] = callback;
                                    }
                                    xhr.onreadystatechange = callback;
                                }
                            },

                            abort: function() {
                                if ( callback ) {
                                    callback(0,1);
                                }
                            }
                        };
                    }
                });
            }




            var elemdisplay = {},
                    iframe, iframeDoc,
                    rfxtypes = /^(?:toggle|show|hide)$/,
                    rfxnum = /^([+\-]=)?([\d+.\-]+)([a-z%]*)$/i,
                    timerId,
                    fxAttrs = [
                        // height animations
                        [ "height", "marginTop", "marginBottom", "paddingTop", "paddingBottom" ],
                        // width animations
                        [ "width", "marginLeft", "marginRight", "paddingLeft", "paddingRight" ],
                        // opacity animations
                        [ "opacity" ]
                    ],
                    fxNow;

            jQuery.fn.extend({
                show: function( speed, easing, callback ) {
                    var elem, display;

                    if ( speed || speed === 0 ) {
                        return this.animate( genFx("show", 3), speed, easing, callback );

                    } else {
                        for ( var i = 0, j = this.length; i < j; i++ ) {
                            elem = this[ i ];

                            if ( elem.style ) {
                                display = elem.style.display;

                                // Reset the inline display of this element to learn if it is
                                // being hidden by cascaded rules or not
                                if ( !jQuery._data(elem, "olddisplay") && display === "none" ) {
                                    display = elem.style.display = "";
                                }

                                // Set elements which have been overridden with display: none
                                // in a stylesheet to whatever the default browser style is
                                // for such an element
                                if ( (display === "" && jQuery.css(elem, "display") === "none") ||
                                        !jQuery.contains( elem.ownerDocument.documentElement, elem ) ) {
                                    jQuery._data( elem, "olddisplay", defaultDisplay(elem.nodeName) );
                                }
                            }
                        }

                        // Set the display of most of the elements in a second loop
                        // to avoid the constant reflow
                        for ( i = 0; i < j; i++ ) {
                            elem = this[ i ];

                            if ( elem.style ) {
                                display = elem.style.display;

                                if ( display === "" || display === "none" ) {
                                    elem.style.display = jQuery._data( elem, "olddisplay" ) || "";
                                }
                            }
                        }

                        return this;
                    }
                },

                hide: function( speed, easing, callback ) {
                    if ( speed || speed === 0 ) {
                        return this.animate( genFx("hide", 3), speed, easing, callback);

                    } else {
                        var elem, display,
                                i = 0,
                                j = this.length;

                        for ( ; i < j; i++ ) {
                            elem = this[i];
                            if ( elem.style ) {
                                display = jQuery.css( elem, "display" );

                                if ( display !== "none" && !jQuery._data( elem, "olddisplay" ) ) {
                                    jQuery._data( elem, "olddisplay", display );
                                }
                            }
                        }

                        // Set the display of the elements in a second loop
                        // to avoid the constant reflow
                        for ( i = 0; i < j; i++ ) {
                            if ( this[i].style ) {
                                this[i].style.display = "none";
                            }
                        }

                        return this;
                    }
                },

                // Save the old toggle function
                _toggle: jQuery.fn.toggle,

                toggle: function( fn, fn2, callback ) {
                    var bool = typeof fn === "boolean";

                    if ( jQuery.isFunction(fn) && jQuery.isFunction(fn2) ) {
                        this._toggle.apply( this, arguments );

                    } else if ( fn == null || bool ) {
                        this.each(function() {
                            var state = bool ? fn : jQuery(this).is(":hidden");
                            jQuery(this)[ state ? "show" : "hide" ]();
                        });

                    } else {
                        this.animate(genFx("toggle", 3), fn, fn2, callback);
                    }

                    return this;
                },

                fadeTo: function( speed, to, easing, callback ) {
                    return this.filter(":hidden").css("opacity", 0).show().end()
                            .animate({opacity: to}, speed, easing, callback);
                },

                animate: function( prop, speed, easing, callback ) {
                    var optall = jQuery.speed( speed, easing, callback );

                    if ( jQuery.isEmptyObject( prop ) ) {
                        return this.each( optall.complete, [ false ] );
                    }

                    // Do not change referenced properties as per-property easing will be lost
                    prop = jQuery.extend( {}, prop );

                    function doAnimation() {
                        // XXX 'this' does not always have a nodeName when running the
                        // test suite

                        if ( optall.queue === false ) {
                            jQuery._mark( this );
                        }

                        var opt = jQuery.extend( {}, optall ),
                                isElement = this.nodeType === 1,
                                hidden = isElement && jQuery(this).is(":hidden"),
                                name, val, p, e, hooks, replace,
                                parts, start, end, unit,
                                method;

                        // will store per property easing and be used to determine when an animation is complete
                        opt.animatedProperties = {};

                        // first pass over propertys to expand / normalize
                        for ( p in prop ) {
                            name = jQuery.camelCase( p );
                            if ( p !== name ) {
                                prop[ name ] = prop[ p ];
                                delete prop[ p ];
                            }

                            if ( ( hooks = jQuery.cssHooks[ name ] ) && "expand" in hooks ) {
                                replace = hooks.expand( prop[ name ] );
                                delete prop[ name ];

                                // not quite $.extend, this wont overwrite keys already present.
                                // also - reusing 'p' from above because we have the correct "name"
                                for ( p in replace ) {
                                    if ( ! ( p in prop ) ) {
                                        prop[ p ] = replace[ p ];
                                    }
                                }
                            }
                        }

                        for ( name in prop ) {
                            val = prop[ name ];
                            // easing resolution: per property > opt.specialEasing > opt.easing > 'swing' (default)
                            if ( jQuery.isArray( val ) ) {
                                opt.animatedProperties[ name ] = val[ 1 ];
                                val = prop[ name ] = val[ 0 ];
                            } else {
                                opt.animatedProperties[ name ] = opt.specialEasing && opt.specialEasing[ name ] || opt.easing || 'swing';
                            }

                            if ( val === "hide" && hidden || val === "show" && !hidden ) {
                                return opt.complete.call( this );
                            }

                            if ( isElement && ( name === "height" || name === "width" ) ) {
                                // Make sure that nothing sneaks out
                                // Record all 3 overflow attributes because IE does not
                                // change the overflow attribute when overflowX and
                                // overflowY are set to the same value
                                opt.overflow = [ this.style.overflow, this.style.overflowX, this.style.overflowY ];

                                // Set display property to inline-block for height/width
                                // animations on inline elements that are having width/height animated
                                if ( jQuery.css( this, "display" ) === "inline" &&
                                        jQuery.css( this, "float" ) === "none" ) {

                                    // inline-level elements accept inline-block;
                                    // block-level elements need to be inline with layout
                                    if ( !jQuery.support.inlineBlockNeedsLayout || defaultDisplay( this.nodeName ) === "inline" ) {
                                        this.style.display = "inline-block";

                                    } else {
                                        this.style.zoom = 1;
                                    }
                                }
                            }
                        }

                        if ( opt.overflow != null ) {
                            this.style.overflow = "hidden";
                        }

                        for ( p in prop ) {
                            e = new jQuery.fx( this, opt, p );
                            val = prop[ p ];

                            if ( rfxtypes.test( val ) ) {

                                // Tracks whether to show or hide based on private
                                // data attached to the element
                                method = jQuery._data( this, "toggle" + p ) || ( val === "toggle" ? hidden ? "show" : "hide" : 0 );
                                if ( method ) {
                                    jQuery._data( this, "toggle" + p, method === "show" ? "hide" : "show" );
                                    e[ method ]();
                                } else {
                                    e[ val ]();
                                }

                            } else {
                                parts = rfxnum.exec( val );
                                start = e.cur();

                                if ( parts ) {
                                    end = parseFloat( parts[2] );
                                    unit = parts[3] || ( jQuery.cssNumber[ p ] ? "" : "px" );

                                    // We need to compute starting value
                                    if ( unit !== "px" ) {
                                        jQuery.style( this, p, (end || 1) + unit);
                                        start = ( (end || 1) / e.cur() ) * start;
                                        jQuery.style( this, p, start + unit);
                                    }

                                    // If a +=/-= token was provided, we're doing a relative animation
                                    if ( parts[1] ) {
                                        end = ( (parts[ 1 ] === "-=" ? -1 : 1) * end ) + start;
                                    }

                                    e.custom( start, end, unit );

                                } else {
                                    e.custom( start, val, "" );
                                }
                            }
                        }

                        // For JS strict compliance
                        return true;
                    }

                    return optall.queue === false ?
                            this.each( doAnimation ) :
                            this.queue( optall.queue, doAnimation );
                },

                stop: function( type, clearQueue, gotoEnd ) {
                    if ( typeof type !== "string" ) {
                        gotoEnd = clearQueue;
                        clearQueue = type;
                        type = undefined;
                    }
                    if ( clearQueue && type !== false ) {
                        this.queue( type || "fx", [] );
                    }

                    return this.each(function() {
                        var index,
                                hadTimers = false,
                                timers = jQuery.timers,
                                data = jQuery._data( this );

                        // clear marker counters if we know they won't be
                        if ( !gotoEnd ) {
                            jQuery._unmark( true, this );
                        }

                        function stopQueue( elem, data, index ) {
                            var hooks = data[ index ];
                            jQuery.removeData( elem, index, true );
                            hooks.stop( gotoEnd );
                        }

                        if ( type == null ) {
                            for ( index in data ) {
                                if ( data[ index ] && data[ index ].stop && index.indexOf(".run") === index.length - 4 ) {
                                    stopQueue( this, data, index );
                                }
                            }
                        } else if ( data[ index = type + ".run" ] && data[ index ].stop ){
                            stopQueue( this, data, index );
                        }

                        for ( index = timers.length; index--; ) {
                            if ( timers[ index ].elem === this && (type == null || timers[ index ].queue === type) ) {
                                if ( gotoEnd ) {

                                    // force the next step to be the last
                                    timers[ index ]( true );
                                } else {
                                    timers[ index ].saveState();
                                }
                                hadTimers = true;
                                timers.splice( index, 1 );
                            }
                        }

                        // start the next in the queue if the last step wasn't forced
                        // timers currently will call their complete callbacks, which will dequeue
                        // but only if they were gotoEnd
                        if ( !( gotoEnd && hadTimers ) ) {
                            jQuery.dequeue( this, type );
                        }
                    });
                }

            });

// Animations created synchronously will run synchronously
            function createFxNow() {
                setTimeout( clearFxNow, 0 );
                return ( fxNow = jQuery.now() );
            }

            function clearFxNow() {
                fxNow = undefined;
            }

// Generate parameters to create a standard animation
            function genFx( type, num ) {
                var obj = {};

                jQuery.each( fxAttrs.concat.apply([], fxAttrs.slice( 0, num )), function() {
                    obj[ this ] = type;
                });

                return obj;
            }

// Generate shortcuts for custom animations
            jQuery.each({
                slideDown: genFx( "show", 1 ),
                slideUp: genFx( "hide", 1 ),
                slideToggle: genFx( "toggle", 1 ),
                fadeIn: { opacity: "show" },
                fadeOut: { opacity: "hide" },
                fadeToggle: { opacity: "toggle" }
            }, function( name, props ) {
                jQuery.fn[ name ] = function( speed, easing, callback ) {
                    return this.animate( props, speed, easing, callback );
                };
            });

            jQuery.extend({
                speed: function( speed, easing, fn ) {
                    var opt = speed && typeof speed === "object" ? jQuery.extend( {}, speed ) : {
                        complete: fn || !fn && easing ||
                        jQuery.isFunction( speed ) && speed,
                        duration: speed,
                        easing: fn && easing || easing && !jQuery.isFunction( easing ) && easing
                    };

                    opt.duration = jQuery.fx.off ? 0 : typeof opt.duration === "number" ? opt.duration :
                            opt.duration in jQuery.fx.speeds ? jQuery.fx.speeds[ opt.duration ] : jQuery.fx.speeds._default;

                    // normalize opt.queue - true/undefined/null -> "fx"
                    if ( opt.queue == null || opt.queue === true ) {
                        opt.queue = "fx";
                    }

                    // Queueing
                    opt.old = opt.complete;

                    opt.complete = function( noUnmark ) {
                        if ( jQuery.isFunction( opt.old ) ) {
                            opt.old.call( this );
                        }

                        if ( opt.queue ) {
                            jQuery.dequeue( this, opt.queue );
                        } else if ( noUnmark !== false ) {
                            jQuery._unmark( this );
                        }
                    };

                    return opt;
                },

                easing: {
                    linear: function( p ) {
                        return p;
                    },
                    swing: function( p ) {
                        return ( -Math.cos( p*Math.PI ) / 2 ) + 0.5;
                    }
                },

                timers: [],

                fx: function( elem, options, prop ) {
                    this.options = options;
                    this.elem = elem;
                    this.prop = prop;

                    options.orig = options.orig || {};
                }

            });

            jQuery.fx.prototype = {
                // Simple function for setting a style value
                update: function() {
                    if ( this.options.step ) {
                        this.options.step.call( this.elem, this.now, this );
                    }

                    ( jQuery.fx.step[ this.prop ] || jQuery.fx.step._default )( this );
                },

                // Get the current size
                cur: function() {
                    if ( this.elem[ this.prop ] != null && (!this.elem.style || this.elem.style[ this.prop ] == null) ) {
                        return this.elem[ this.prop ];
                    }

                    var parsed,
                            r = jQuery.css( this.elem, this.prop );
                    // Empty strings, null, undefined and "auto" are converted to 0,
                    // complex values such as "rotate(1rad)" are returned as is,
                    // simple values such as "10px" are parsed to Float.
                    return isNaN( parsed = parseFloat( r ) ) ? !r || r === "auto" ? 0 : r : parsed;
                },

                // Start an animation from one number to another
                custom: function( from, to, unit ) {
                    var self = this,
                            fx = jQuery.fx;

                    this.startTime = fxNow || createFxNow();
                    this.end = to;
                    this.now = this.start = from;
                    this.pos = this.state = 0;
                    this.unit = unit || this.unit || ( jQuery.cssNumber[ this.prop ] ? "" : "px" );

                    function t( gotoEnd ) {
                        return self.step( gotoEnd );
                    }

                    t.queue = this.options.queue;
                    t.elem = this.elem;
                    t.saveState = function() {
                        if ( jQuery._data( self.elem, "fxshow" + self.prop ) === undefined ) {
                            if ( self.options.hide ) {
                                jQuery._data( self.elem, "fxshow" + self.prop, self.start );
                            } else if ( self.options.show ) {
                                jQuery._data( self.elem, "fxshow" + self.prop, self.end );
                            }
                        }
                    };

                    if ( t() && jQuery.timers.push(t) && !timerId ) {
                        timerId = setInterval( fx.tick, fx.interval );
                    }
                },

                // Simple 'show' function
                show: function() {
                    var dataShow = jQuery._data( this.elem, "fxshow" + this.prop );

                    // Remember where we started, so that we can go back to it later
                    this.options.orig[ this.prop ] = dataShow || jQuery.style( this.elem, this.prop );
                    this.options.show = true;

                    // Begin the animation
                    // Make sure that we start at a small width/height to avoid any flash of content
                    if ( dataShow !== undefined ) {
                        // This show is picking up where a previous hide or show left off
                        this.custom( this.cur(), dataShow );
                    } else {
                        this.custom( this.prop === "width" || this.prop === "height" ? 1 : 0, this.cur() );
                    }

                    // Start by showing the element
                    jQuery( this.elem ).show();
                },

                // Simple 'hide' function
                hide: function() {
                    // Remember where we started, so that we can go back to it later
                    this.options.orig[ this.prop ] = jQuery._data( this.elem, "fxshow" + this.prop ) || jQuery.style( this.elem, this.prop );
                    this.options.hide = true;

                    // Begin the animation
                    this.custom( this.cur(), 0 );
                },

                // Each step of an animation
                step: function( gotoEnd ) {
                    var p, n, complete,
                            t = fxNow || createFxNow(),
                            done = true,
                            elem = this.elem,
                            options = this.options;

                    if ( gotoEnd || t >= options.duration + this.startTime ) {
                        this.now = this.end;
                        this.pos = this.state = 1;
                        this.update();

                        options.animatedProperties[ this.prop ] = true;

                        for ( p in options.animatedProperties ) {
                            if ( options.animatedProperties[ p ] !== true ) {
                                done = false;
                            }
                        }

                        if ( done ) {
                            // Reset the overflow
                            if ( options.overflow != null && !jQuery.support.shrinkWrapBlocks ) {

                                jQuery.each( [ "", "X", "Y" ], function( index, value ) {
                                    elem.style[ "overflow" + value ] = options.overflow[ index ];
                                });
                            }

                            // Hide the element if the "hide" operation was done
                            if ( options.hide ) {
                                jQuery( elem ).hide();
                            }

                            // Reset the properties, if the item has been hidden or shown
                            if ( options.hide || options.show ) {
                                for ( p in options.animatedProperties ) {
                                    jQuery.style( elem, p, options.orig[ p ] );
                                    jQuery.removeData( elem, "fxshow" + p, true );
                                    // Toggle data is no longer needed
                                    jQuery.removeData( elem, "toggle" + p, true );
                                }
                            }

                            // Execute the complete function
                            // in the event that the complete function throws an exception
                            // we must ensure it won't be called twice. #5684

                            complete = options.complete;
                            if ( complete ) {

                                options.complete = false;
                                complete.call( elem );
                            }
                        }

                        return false;

                    } else {
                        // classical easing cannot be used with an Infinity duration
                        if ( options.duration == Infinity ) {
                            this.now = t;
                        } else {
                            n = t - this.startTime;
                            this.state = n / options.duration;

                            // Perform the easing function, defaults to swing
                            this.pos = jQuery.easing[ options.animatedProperties[this.prop] ]( this.state, n, 0, 1, options.duration );
                            this.now = this.start + ( (this.end - this.start) * this.pos );
                        }
                        // Perform the next step of the animation
                        this.update();
                    }

                    return true;
                }
            };

            jQuery.extend( jQuery.fx, {
                tick: function() {
                    var timer,
                            timers = jQuery.timers,
                            i = 0;

                    for ( ; i < timers.length; i++ ) {
                        timer = timers[ i ];
                        // Checks the timer has not already been removed
                        if ( !timer() && timers[ i ] === timer ) {
                            timers.splice( i--, 1 );
                        }
                    }

                    if ( !timers.length ) {
                        jQuery.fx.stop();
                    }
                },

                interval: 13,

                stop: function() {
                    clearInterval( timerId );
                    timerId = null;
                },

                speeds: {
                    slow: 600,
                    fast: 200,
                    // Default speed
                    _default: 400
                },

                step: {
                    opacity: function( fx ) {
                        jQuery.style( fx.elem, "opacity", fx.now );
                    },

                    _default: function( fx ) {
                        if ( fx.elem.style && fx.elem.style[ fx.prop ] != null ) {
                            fx.elem.style[ fx.prop ] = fx.now + fx.unit;
                        } else {
                            fx.elem[ fx.prop ] = fx.now;
                        }
                    }
                }
            });

// Ensure props that can't be negative don't go there on undershoot easing
            jQuery.each( fxAttrs.concat.apply( [], fxAttrs ), function( i, prop ) {
                // exclude marginTop, marginLeft, marginBottom and marginRight from this list
                if ( prop.indexOf( "margin" ) ) {
                    jQuery.fx.step[ prop ] = function( fx ) {
                        jQuery.style( fx.elem, prop, Math.max(0, fx.now) + fx.unit );
                    };
                }
            });

            if ( jQuery.expr && jQuery.expr.filters ) {
                jQuery.expr.filters.animated = function( elem ) {
                    return jQuery.grep(jQuery.timers, function( fn ) {
                        return elem === fn.elem;
                    }).length;
                };
            }

// Try to restore the default display value of an element
            function defaultDisplay( nodeName ) {

                if ( !elemdisplay[ nodeName ] ) {

                    var body = document.body,
                            elem = jQuery( "<" + nodeName + ">" ).appendTo( body ),
                            display = elem.css( "display" );
                    elem.remove();

                    // If the simple way fails,
                    // get element's real default display by attaching it to a temp iframe
                    if ( display === "none" || display === "" ) {
                        // No iframe to use yet, so create it
                        if ( !iframe ) {
                            iframe = document.createElement( "iframe" );
                            iframe.frameBorder = iframe.width = iframe.height = 0;
                        }

                        body.appendChild( iframe );

                        // Create a cacheable copy of the iframe document on first call.
                        // IE and Opera will allow us to reuse the iframeDoc without re-writing the fake HTML
                        // document to it; WebKit & Firefox won't allow reusing the iframe document.
                        if ( !iframeDoc || !iframe.createElement ) {
                            iframeDoc = ( iframe.contentWindow || iframe.contentDocument ).document;
                            iframeDoc.write( ( jQuery.support.boxModel ? "<!doctype html>" : "" ) + "<html><body>" );
                            iframeDoc.close();
                        }

                        elem = iframeDoc.createElement( nodeName );

                        iframeDoc.body.appendChild( elem );

                        display = jQuery.css( elem, "display" );
                        body.removeChild( iframe );
                    }

                    // Store the correct default display
                    elemdisplay[ nodeName ] = display;
                }

                return elemdisplay[ nodeName ];
            }




            var getOffset,
                    rtable = /^t(?:able|d|h)$/i,
                    rroot = /^(?:body|html)$/i;

            if ( "getBoundingClientRect" in document.documentElement ) {
                getOffset = function( elem, doc, docElem, box ) {
                    try {
                        box = elem.getBoundingClientRect();
                    } catch(e) {}

                    // Make sure we're not dealing with a disconnected DOM node
                    if ( !box || !jQuery.contains( docElem, elem ) ) {
                        return box ? { top: box.top, left: box.left } : { top: 0, left: 0 };
                    }

                    var body = doc.body,
                            win = getWindow( doc ),
                            clientTop  = docElem.clientTop  || body.clientTop  || 0,
                            clientLeft = docElem.clientLeft || body.clientLeft || 0,
                            scrollTop  = win.pageYOffset || jQuery.support.boxModel && docElem.scrollTop  || body.scrollTop,
                            scrollLeft = win.pageXOffset || jQuery.support.boxModel && docElem.scrollLeft || body.scrollLeft,
                            top  = box.top  + scrollTop  - clientTop,
                            left = box.left + scrollLeft - clientLeft;

                    return { top: top, left: left };
                };

            } else {
                getOffset = function( elem, doc, docElem ) {
                    var computedStyle,
                            offsetParent = elem.offsetParent,
                            prevOffsetParent = elem,
                            body = doc.body,
                            defaultView = doc.defaultView,
                            prevComputedStyle = defaultView ? defaultView.getComputedStyle( elem, null ) : elem.currentStyle,
                            top = elem.offsetTop,
                            left = elem.offsetLeft;

                    while ( (elem = elem.parentNode) && elem !== body && elem !== docElem ) {
                        if ( jQuery.support.fixedPosition && prevComputedStyle.position === "fixed" ) {
                            break;
                        }

                        computedStyle = defaultView ? defaultView.getComputedStyle(elem, null) : elem.currentStyle;
                        top  -= elem.scrollTop;
                        left -= elem.scrollLeft;

                        if ( elem === offsetParent ) {
                            top  += elem.offsetTop;
                            left += elem.offsetLeft;

                            if ( jQuery.support.doesNotAddBorder && !(jQuery.support.doesAddBorderForTableAndCells && rtable.test(elem.nodeName)) ) {
                                top  += parseFloat( computedStyle.borderTopWidth  ) || 0;
                                left += parseFloat( computedStyle.borderLeftWidth ) || 0;
                            }

                            prevOffsetParent = offsetParent;
                            offsetParent = elem.offsetParent;
                        }

                        if ( jQuery.support.subtractsBorderForOverflowNotVisible && computedStyle.overflow !== "visible" ) {
                            top  += parseFloat( computedStyle.borderTopWidth  ) || 0;
                            left += parseFloat( computedStyle.borderLeftWidth ) || 0;
                        }

                        prevComputedStyle = computedStyle;
                    }

                    if ( prevComputedStyle.position === "relative" || prevComputedStyle.position === "static" ) {
                        top  += body.offsetTop;
                        left += body.offsetLeft;
                    }

                    if ( jQuery.support.fixedPosition && prevComputedStyle.position === "fixed" ) {
                        top  += Math.max( docElem.scrollTop, body.scrollTop );
                        left += Math.max( docElem.scrollLeft, body.scrollLeft );
                    }

                    return { top: top, left: left };
                };
            }

            jQuery.fn.offset = function( options ) {
                if ( arguments.length ) {
                    return options === undefined ?
                            this :
                            this.each(function( i ) {
                                jQuery.offset.setOffset( this, options, i );
                            });
                }

                var elem = this[0],
                        doc = elem && elem.ownerDocument;

                if ( !doc ) {
                    return null;
                }

                if ( elem === doc.body ) {
                    return jQuery.offset.bodyOffset( elem );
                }

                return getOffset( elem, doc, doc.documentElement );
            };

            jQuery.offset = {

                bodyOffset: function( body ) {
                    var top = body.offsetTop,
                            left = body.offsetLeft;

                    if ( jQuery.support.doesNotIncludeMarginInBodyOffset ) {
                        top  += parseFloat( jQuery.css(body, "marginTop") ) || 0;
                        left += parseFloat( jQuery.css(body, "marginLeft") ) || 0;
                    }

                    return { top: top, left: left };
                },

                setOffset: function( elem, options, i ) {
                    var position = jQuery.css( elem, "position" );

                    // set position first, in-case top/left are set even on static elem
                    if ( position === "static" ) {
                        elem.style.position = "relative";
                    }

                    var curElem = jQuery( elem ),
                            curOffset = curElem.offset(),
                            curCSSTop = jQuery.css( elem, "top" ),
                            curCSSLeft = jQuery.css( elem, "left" ),
                            calculatePosition = ( position === "absolute" || position === "fixed" ) && jQuery.inArray("auto", [curCSSTop, curCSSLeft]) > -1,
                            props = {}, curPosition = {}, curTop, curLeft;

                    // need to be able to calculate position if either top or left is auto and position is either absolute or fixed
                    if ( calculatePosition ) {
                        curPosition = curElem.position();
                        curTop = curPosition.top;
                        curLeft = curPosition.left;
                    } else {
                        curTop = parseFloat( curCSSTop ) || 0;
                        curLeft = parseFloat( curCSSLeft ) || 0;
                    }

                    if ( jQuery.isFunction( options ) ) {
                        options = options.call( elem, i, curOffset );
                    }

                    if ( options.top != null ) {
                        props.top = ( options.top - curOffset.top ) + curTop;
                    }
                    if ( options.left != null ) {
                        props.left = ( options.left - curOffset.left ) + curLeft;
                    }

                    if ( "using" in options ) {
                        options.using.call( elem, props );
                    } else {
                        curElem.css( props );
                    }
                }
            };


            jQuery.fn.extend({

                position: function() {
                    if ( !this[0] ) {
                        return null;
                    }

                    var elem = this[0],

                    // Get *real* offsetParent
                            offsetParent = this.offsetParent(),

                    // Get correct offsets
                            offset       = this.offset(),
                            parentOffset = rroot.test(offsetParent[0].nodeName) ? { top: 0, left: 0 } : offsetParent.offset();

                    // Subtract element margins
                    // note: when an element has margin: auto the offsetLeft and marginLeft
                    // are the same in Safari causing offset.left to incorrectly be 0
                    offset.top  -= parseFloat( jQuery.css(elem, "marginTop") ) || 0;
                    offset.left -= parseFloat( jQuery.css(elem, "marginLeft") ) || 0;

                    // Add offsetParent borders
                    parentOffset.top  += parseFloat( jQuery.css(offsetParent[0], "borderTopWidth") ) || 0;
                    parentOffset.left += parseFloat( jQuery.css(offsetParent[0], "borderLeftWidth") ) || 0;

                    // Subtract the two offsets
                    return {
                        top:  offset.top  - parentOffset.top,
                        left: offset.left - parentOffset.left
                    };
                },

                offsetParent: function() {
                    return this.map(function() {
                        var offsetParent = this.offsetParent || document.body;
                        while ( offsetParent && (!rroot.test(offsetParent.nodeName) && jQuery.css(offsetParent, "position") === "static") ) {
                            offsetParent = offsetParent.offsetParent;
                        }
                        return offsetParent;
                    });
                }
            });


// Create scrollLeft and scrollTop methods
            jQuery.each( {scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, function( method, prop ) {
                var top = /Y/.test( prop );

                jQuery.fn[ method ] = function( val ) {
                    return jQuery.access( this, function( elem, method, val ) {
                        var win = getWindow( elem );

                        if ( val === undefined ) {
                            return win ? (prop in win) ? win[ prop ] :
                            jQuery.support.boxModel && win.document.documentElement[ method ] ||
                            win.document.body[ method ] :
                                    elem[ method ];
                        }

                        if ( win ) {
                            win.scrollTo(
                                    !top ? val : jQuery( win ).scrollLeft(),
                                    top ? val : jQuery( win ).scrollTop()
                            );

                        } else {
                            elem[ method ] = val;
                        }
                    }, method, val, arguments.length, null );
                };
            });

            function getWindow( elem ) {
                return jQuery.isWindow( elem ) ?
                        elem :
                        elem.nodeType === 9 ?
                        elem.defaultView || elem.parentWindow :
                                false;
            }




// Create width, height, innerHeight, innerWidth, outerHeight and outerWidth methods
            jQuery.each( { Height: "height", Width: "width" }, function( name, type ) {
                var clientProp = "client" + name,
                        scrollProp = "scroll" + name,
                        offsetProp = "offset" + name;

                // innerHeight and innerWidth
                jQuery.fn[ "inner" + name ] = function() {
                    var elem = this[0];
                    return elem ?
                            elem.style ?
                                    parseFloat( jQuery.css( elem, type, "padding" ) ) :
                                    this[ type ]() :
                            null;
                };

                // outerHeight and outerWidth
                jQuery.fn[ "outer" + name ] = function( margin ) {
                    var elem = this[0];
                    return elem ?
                            elem.style ?
                                    parseFloat( jQuery.css( elem, type, margin ? "margin" : "border" ) ) :
                                    this[ type ]() :
                            null;
                };

                jQuery.fn[ type ] = function( value ) {
                    return jQuery.access( this, function( elem, type, value ) {
                        var doc, docElemProp, orig, ret;

                        if ( jQuery.isWindow( elem ) ) {
                            // 3rd condition allows Nokia support, as it supports the docElem prop but not CSS1Compat
                            doc = elem.document;
                            docElemProp = doc.documentElement[ clientProp ];
                            return jQuery.support.boxModel && docElemProp ||
                                    doc.body && doc.body[ clientProp ] || docElemProp;
                        }

                        // Get document width or height
                        if ( elem.nodeType === 9 ) {
                            // Either scroll[Width/Height] or offset[Width/Height], whichever is greater
                            doc = elem.documentElement;

                            // when a window > document, IE6 reports a offset[Width/Height] > client[Width/Height]
                            // so we can't use max, as it'll choose the incorrect offset[Width/Height]
                            // instead we use the correct client[Width/Height]
                            // support:IE6
                            if ( doc[ clientProp ] >= doc[ scrollProp ] ) {
                                return doc[ clientProp ];
                            }

                            return Math.max(
                                    elem.body[ scrollProp ], doc[ scrollProp ],
                                    elem.body[ offsetProp ], doc[ offsetProp ]
                            );
                        }

                        // Get width or height on the element
                        if ( value === undefined ) {
                            orig = jQuery.css( elem, type );
                            ret = parseFloat( orig );
                            return jQuery.isNumeric( ret ) ? ret : orig;
                        }

                        // Set the width or height on the element
                        jQuery( elem ).css( type, value );
                    }, type, value, arguments.length, null );
                };
            });




// Expose jQuery to the global object
            window.jQuery = window.$ = jQuery;

// Expose jQuery as an AMD module, but only for AMD loaders that
// understand the issues with loading multiple versions of jQuery
// in a page that all might call define(). The loader will indicate
// they have special allowances for multiple jQuery versions by
// specifying define.amd.jQuery = true. Register as a named module,
// since jQuery can be concatenated with other files that may use define,
// but not use a proper concatenation script that understands anonymous
// AMD modules. A named AMD is safest and most robust way to register.
// Lowercase jquery is used because AMD module names are derived from
// file names, and jQuery is normally delivered in a lowercase file name.
// Do this after creating the global so that if an AMD module wants to call
// noConflict to hide this version of jQuery, it will work.
            if ( typeof define === "function" && define.amd && define.amd.jQuery ) {
                define( "jquery", [], function () { return jQuery; } );
            }



        })( window );

    </script>

    <script>
        /*!
         * Bootstrap v3.3.7 (http://getbootstrap.com)
         * Copyright 2011-2016 Twitter, Inc.
         * Licensed under the MIT license
         */
        if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(a){"use strict";var b=a.fn.jquery.split(" ")[0].split(".");if(b[0]<2&&b[1]<9||1==b[0]&&9==b[1]&&b[2]<1||b[0]>3)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4")}(jQuery),+function(a){"use strict";function b(){var a=document.createElement("bootstrap"),b={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var c in b)if(void 0!==a.style[c])return{end:b[c]};return!1}a.fn.emulateTransitionEnd=function(b){var c=!1,d=this;a(this).one("bsTransitionEnd",function(){c=!0});var e=function(){c||a(d).trigger(a.support.transition.end)};return setTimeout(e,b),this},a(function(){a.support.transition=b(),a.support.transition&&(a.event.special.bsTransitionEnd={bindType:a.support.transition.end,delegateType:a.support.transition.end,handle:function(b){if(a(b.target).is(this))return b.handleObj.handler.apply(this,arguments)}})})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var c=a(this),e=c.data("bs.alert");e||c.data("bs.alert",e=new d(this)),"string"==typeof b&&e[b].call(c)})}var c='[data-dismiss="alert"]',d=function(b){a(b).on("click",c,this.close)};d.VERSION="3.3.7",d.TRANSITION_DURATION=150,d.prototype.close=function(b){function c(){g.detach().trigger("closed.bs.alert").remove()}var e=a(this),f=e.attr("data-target");f||(f=e.attr("href"),f=f&&f.replace(/.*(?=#[^\s]*$)/,""));var g=a("#"===f?[]:f);b&&b.preventDefault(),g.length||(g=e.closest(".alert")),g.trigger(b=a.Event("close.bs.alert")),b.isDefaultPrevented()||(g.removeClass("in"),a.support.transition&&g.hasClass("fade")?g.one("bsTransitionEnd",c).emulateTransitionEnd(d.TRANSITION_DURATION):c())};var e=a.fn.alert;a.fn.alert=b,a.fn.alert.Constructor=d,a.fn.alert.noConflict=function(){return a.fn.alert=e,this},a(document).on("click.bs.alert.data-api",c,d.prototype.close)}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.button"),f="object"==typeof b&&b;e||d.data("bs.button",e=new c(this,f)),"toggle"==b?e.toggle():b&&e.setState(b)})}var c=function(b,d){this.$element=a(b),this.options=a.extend({},c.DEFAULTS,d),this.isLoading=!1};c.VERSION="3.3.7",c.DEFAULTS={loadingText:"loading..."},c.prototype.setState=function(b){var c="disabled",d=this.$element,e=d.is("input")?"val":"html",f=d.data();b+="Text",null==f.resetText&&d.data("resetText",d[e]()),setTimeout(a.proxy(function(){d[e](null==f[b]?this.options[b]:f[b]),"loadingText"==b?(this.isLoading=!0,d.addClass(c).attr(c,c).prop(c,!0)):this.isLoading&&(this.isLoading=!1,d.removeClass(c).removeAttr(c).prop(c,!1))},this),0)},c.prototype.toggle=function(){var a=!0,b=this.$element.closest('[data-toggle="buttons"]');if(b.length){var c=this.$element.find("input");"radio"==c.prop("type")?(c.prop("checked")&&(a=!1),b.find(".active").removeClass("active"),this.$element.addClass("active")):"checkbox"==c.prop("type")&&(c.prop("checked")!==this.$element.hasClass("active")&&(a=!1),this.$element.toggleClass("active")),c.prop("checked",this.$element.hasClass("active")),a&&c.trigger("change")}else this.$element.attr("aria-pressed",!this.$element.hasClass("active")),this.$element.toggleClass("active")};var d=a.fn.button;a.fn.button=b,a.fn.button.Constructor=c,a.fn.button.noConflict=function(){return a.fn.button=d,this},a(document).on("click.bs.button.data-api",'[data-toggle^="button"]',function(c){var d=a(c.target).closest(".btn");b.call(d,"toggle"),a(c.target).is('input[type="radio"], input[type="checkbox"]')||(c.preventDefault(),d.is("input,button")?d.trigger("focus"):d.find("input:visible,button:visible").first().trigger("focus"))}).on("focus.bs.button.data-api blur.bs.button.data-api",'[data-toggle^="button"]',function(b){a(b.target).closest(".btn").toggleClass("focus",/^focus(in)?$/.test(b.type))})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.carousel"),f=a.extend({},c.DEFAULTS,d.data(),"object"==typeof b&&b),g="string"==typeof b?b:f.slide;e||d.data("bs.carousel",e=new c(this,f)),"number"==typeof b?e.to(b):g?e[g]():f.interval&&e.pause().cycle()})}var c=function(b,c){this.$element=a(b),this.$indicators=this.$element.find(".carousel-indicators"),this.options=c,this.paused=null,this.sliding=null,this.interval=null,this.$active=null,this.$items=null,this.options.keyboard&&this.$element.on("keydown.bs.carousel",a.proxy(this.keydown,this)),"hover"==this.options.pause&&!("ontouchstart"in document.documentElement)&&this.$element.on("mouseenter.bs.carousel",a.proxy(this.pause,this)).on("mouseleave.bs.carousel",a.proxy(this.cycle,this))};c.VERSION="3.3.7",c.TRANSITION_DURATION=600,c.DEFAULTS={interval:5e3,pause:"hover",wrap:!0,keyboard:!0},c.prototype.keydown=function(a){if(!/input|textarea/i.test(a.target.tagName)){switch(a.which){case 37:this.prev();break;case 39:this.next();break;default:return}a.preventDefault()}},c.prototype.cycle=function(b){return b||(this.paused=!1),this.interval&&clearInterval(this.interval),this.options.interval&&!this.paused&&(this.interval=setInterval(a.proxy(this.next,this),this.options.interval)),this},c.prototype.getItemIndex=function(a){return this.$items=a.parent().children(".item"),this.$items.index(a||this.$active)},c.prototype.getItemForDirection=function(a,b){var c=this.getItemIndex(b),d="prev"==a&&0===c||"next"==a&&c==this.$items.length-1;if(d&&!this.options.wrap)return b;var e="prev"==a?-1:1,f=(c+e)%this.$items.length;return this.$items.eq(f)},c.prototype.to=function(a){var b=this,c=this.getItemIndex(this.$active=this.$element.find(".item.active"));if(!(a>this.$items.length-1||a<0))return this.sliding?this.$element.one("slid.bs.carousel",function(){b.to(a)}):c==a?this.pause().cycle():this.slide(a>c?"next":"prev",this.$items.eq(a))},c.prototype.pause=function(b){return b||(this.paused=!0),this.$element.find(".next, .prev").length&&a.support.transition&&(this.$element.trigger(a.support.transition.end),this.cycle(!0)),this.interval=clearInterval(this.interval),this},c.prototype.next=function(){if(!this.sliding)return this.slide("next")},c.prototype.prev=function(){if(!this.sliding)return this.slide("prev")},c.prototype.slide=function(b,d){var e=this.$element.find(".item.active"),f=d||this.getItemForDirection(b,e),g=this.interval,h="next"==b?"left":"right",i=this;if(f.hasClass("active"))return this.sliding=!1;var j=f[0],k=a.Event("slide.bs.carousel",{relatedTarget:j,direction:h});if(this.$element.trigger(k),!k.isDefaultPrevented()){if(this.sliding=!0,g&&this.pause(),this.$indicators.length){this.$indicators.find(".active").removeClass("active");var l=a(this.$indicators.children()[this.getItemIndex(f)]);l&&l.addClass("active")}var m=a.Event("slid.bs.carousel",{relatedTarget:j,direction:h});return a.support.transition&&this.$element.hasClass("slide")?(f.addClass(b),f[0].offsetWidth,e.addClass(h),f.addClass(h),e.one("bsTransitionEnd",function(){f.removeClass([b,h].join(" ")).addClass("active"),e.removeClass(["active",h].join(" ")),i.sliding=!1,setTimeout(function(){i.$element.trigger(m)},0)}).emulateTransitionEnd(c.TRANSITION_DURATION)):(e.removeClass("active"),f.addClass("active"),this.sliding=!1,this.$element.trigger(m)),g&&this.cycle(),this}};var d=a.fn.carousel;a.fn.carousel=b,a.fn.carousel.Constructor=c,a.fn.carousel.noConflict=function(){return a.fn.carousel=d,this};var e=function(c){var d,e=a(this),f=a(e.attr("data-target")||(d=e.attr("href"))&&d.replace(/.*(?=#[^\s]+$)/,""));if(f.hasClass("carousel")){var g=a.extend({},f.data(),e.data()),h=e.attr("data-slide-to");h&&(g.interval=!1),b.call(f,g),h&&f.data("bs.carousel").to(h),c.preventDefault()}};a(document).on("click.bs.carousel.data-api","[data-slide]",e).on("click.bs.carousel.data-api","[data-slide-to]",e),a(window).on("load",function(){a('[data-ride="carousel"]').each(function(){var c=a(this);b.call(c,c.data())})})}(jQuery),+function(a){"use strict";function b(b){var c,d=b.attr("data-target")||(c=b.attr("href"))&&c.replace(/.*(?=#[^\s]+$)/,"");return a(d)}function c(b){return this.each(function(){var c=a(this),e=c.data("bs.collapse"),f=a.extend({},d.DEFAULTS,c.data(),"object"==typeof b&&b);!e&&f.toggle&&/show|hide/.test(b)&&(f.toggle=!1),e||c.data("bs.collapse",e=new d(this,f)),"string"==typeof b&&e[b]()})}var d=function(b,c){this.$element=a(b),this.options=a.extend({},d.DEFAULTS,c),this.$trigger=a('[data-toggle="collapse"][href="#'+b.id+'"],[data-toggle="collapse"][data-target="#'+b.id+'"]'),this.transitioning=null,this.options.parent?this.$parent=this.getParent():this.addAriaAndCollapsedClass(this.$element,this.$trigger),this.options.toggle&&this.toggle()};d.VERSION="3.3.7",d.TRANSITION_DURATION=350,d.DEFAULTS={toggle:!0},d.prototype.dimension=function(){var a=this.$element.hasClass("width");return a?"width":"height"},d.prototype.show=function(){if(!this.transitioning&&!this.$element.hasClass("in")){var b,e=this.$parent&&this.$parent.children(".panel").children(".in, .collapsing");if(!(e&&e.length&&(b=e.data("bs.collapse"),b&&b.transitioning))){var f=a.Event("show.bs.collapse");if(this.$element.trigger(f),!f.isDefaultPrevented()){e&&e.length&&(c.call(e,"hide"),b||e.data("bs.collapse",null));var g=this.dimension();this.$element.removeClass("collapse").addClass("collapsing")[g](0).attr("aria-expanded",!0),this.$trigger.removeClass("collapsed").attr("aria-expanded",!0),this.transitioning=1;var h=function(){this.$element.removeClass("collapsing").addClass("collapse in")[g](""),this.transitioning=0,this.$element.trigger("shown.bs.collapse")};if(!a.support.transition)return h.call(this);var i=a.camelCase(["scroll",g].join("-"));this.$element.one("bsTransitionEnd",a.proxy(h,this)).emulateTransitionEnd(d.TRANSITION_DURATION)[g](this.$element[0][i])}}}},d.prototype.hide=function(){if(!this.transitioning&&this.$element.hasClass("in")){var b=a.Event("hide.bs.collapse");if(this.$element.trigger(b),!b.isDefaultPrevented()){var c=this.dimension();this.$element[c](this.$element[c]())[0].offsetHeight,this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded",!1),this.$trigger.addClass("collapsed").attr("aria-expanded",!1),this.transitioning=1;var e=function(){this.transitioning=0,this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")};return a.support.transition?void this.$element[c](0).one("bsTransitionEnd",a.proxy(e,this)).emulateTransitionEnd(d.TRANSITION_DURATION):e.call(this)}}},d.prototype.toggle=function(){this[this.$element.hasClass("in")?"hide":"show"]()},d.prototype.getParent=function(){return a(this.options.parent).find('[data-toggle="collapse"][data-parent="'+this.options.parent+'"]').each(a.proxy(function(c,d){var e=a(d);this.addAriaAndCollapsedClass(b(e),e)},this)).end()},d.prototype.addAriaAndCollapsedClass=function(a,b){var c=a.hasClass("in");a.attr("aria-expanded",c),b.toggleClass("collapsed",!c).attr("aria-expanded",c)};var e=a.fn.collapse;a.fn.collapse=c,a.fn.collapse.Constructor=d,a.fn.collapse.noConflict=function(){return a.fn.collapse=e,this},a(document).on("click.bs.collapse.data-api",'[data-toggle="collapse"]',function(d){var e=a(this);e.attr("data-target")||d.preventDefault();var f=b(e),g=f.data("bs.collapse"),h=g?"toggle":e.data();c.call(f,h)})}(jQuery),+function(a){"use strict";function b(b){var c=b.attr("data-target");c||(c=b.attr("href"),c=c&&/#[A-Za-z]/.test(c)&&c.replace(/.*(?=#[^\s]*$)/,""));var d=c&&a(c);return d&&d.length?d:b.parent()}function c(c){c&&3===c.which||(a(e).remove(),a(f).each(function(){var d=a(this),e=b(d),f={relatedTarget:this};e.hasClass("open")&&(c&&"click"==c.type&&/input|textarea/i.test(c.target.tagName)&&a.contains(e[0],c.target)||(e.trigger(c=a.Event("hide.bs.dropdown",f)),c.isDefaultPrevented()||(d.attr("aria-expanded","false"),e.removeClass("open").trigger(a.Event("hidden.bs.dropdown",f)))))}))}function d(b){return this.each(function(){var c=a(this),d=c.data("bs.dropdown");d||c.data("bs.dropdown",d=new g(this)),"string"==typeof b&&d[b].call(c)})}var e=".dropdown-backdrop",f='[data-toggle="dropdown"]',g=function(b){a(b).on("click.bs.dropdown",this.toggle)};g.VERSION="3.3.7",g.prototype.toggle=function(d){var e=a(this);if(!e.is(".disabled, :disabled")){var f=b(e),g=f.hasClass("open");if(c(),!g){"ontouchstart"in document.documentElement&&!f.closest(".navbar-nav").length&&a(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(a(this)).on("click",c);var h={relatedTarget:this};if(f.trigger(d=a.Event("show.bs.dropdown",h)),d.isDefaultPrevented())return;e.trigger("focus").attr("aria-expanded","true"),f.toggleClass("open").trigger(a.Event("shown.bs.dropdown",h))}return!1}},g.prototype.keydown=function(c){if(/(38|40|27|32)/.test(c.which)&&!/input|textarea/i.test(c.target.tagName)){var d=a(this);if(c.preventDefault(),c.stopPropagation(),!d.is(".disabled, :disabled")){var e=b(d),g=e.hasClass("open");if(!g&&27!=c.which||g&&27==c.which)return 27==c.which&&e.find(f).trigger("focus"),d.trigger("click");var h=" li:not(.disabled):visible a",i=e.find(".dropdown-menu"+h);if(i.length){var j=i.index(c.target);38==c.which&&j>0&&j--,40==c.which&&j<i.length-1&&j++,~j||(j=0),i.eq(j).trigger("focus")}}}};var h=a.fn.dropdown;a.fn.dropdown=d,a.fn.dropdown.Constructor=g,a.fn.dropdown.noConflict=function(){return a.fn.dropdown=h,this},a(document).on("click.bs.dropdown.data-api",c).on("click.bs.dropdown.data-api",".dropdown form",function(a){a.stopPropagation()}).on("click.bs.dropdown.data-api",f,g.prototype.toggle).on("keydown.bs.dropdown.data-api",f,g.prototype.keydown).on("keydown.bs.dropdown.data-api",".dropdown-menu",g.prototype.keydown)}(jQuery),+function(a){"use strict";function b(b,d){return this.each(function(){var e=a(this),f=e.data("bs.modal"),g=a.extend({},c.DEFAULTS,e.data(),"object"==typeof b&&b);f||e.data("bs.modal",f=new c(this,g)),"string"==typeof b?f[b](d):g.show&&f.show(d)})}var c=function(b,c){this.options=c,this.$body=a(document.body),this.$element=a(b),this.$dialog=this.$element.find(".modal-dialog"),this.$backdrop=null,this.isShown=null,this.originalBodyPad=null,this.scrollbarWidth=0,this.ignoreBackdropClick=!1,this.options.remote&&this.$element.find(".modal-content").load(this.options.remote,a.proxy(function(){this.$element.trigger("loaded.bs.modal")},this))};c.VERSION="3.3.7",c.TRANSITION_DURATION=300,c.BACKDROP_TRANSITION_DURATION=150,c.DEFAULTS={backdrop:!0,keyboard:!0,show:!0},c.prototype.toggle=function(a){return this.isShown?this.hide():this.show(a)},c.prototype.show=function(b){var d=this,e=a.Event("show.bs.modal",{relatedTarget:b});this.$element.trigger(e),this.isShown||e.isDefaultPrevented()||(this.isShown=!0,this.checkScrollbar(),this.setScrollbar(),this.$body.addClass("modal-open"),this.escape(),this.resize(),this.$element.on("click.dismiss.bs.modal",'[data-dismiss="modal"]',a.proxy(this.hide,this)),this.$dialog.on("mousedown.dismiss.bs.modal",function(){d.$element.one("mouseup.dismiss.bs.modal",function(b){a(b.target).is(d.$element)&&(d.ignoreBackdropClick=!0)})}),this.backdrop(function(){var e=a.support.transition&&d.$element.hasClass("fade");d.$element.parent().length||d.$element.appendTo(d.$body),d.$element.show().scrollTop(0),d.adjustDialog(),e&&d.$element[0].offsetWidth,d.$element.addClass("in"),d.enforceFocus();var f=a.Event("shown.bs.modal",{relatedTarget:b});e?d.$dialog.one("bsTransitionEnd",function(){d.$element.trigger("focus").trigger(f)}).emulateTransitionEnd(c.TRANSITION_DURATION):d.$element.trigger("focus").trigger(f)}))},c.prototype.hide=function(b){b&&b.preventDefault(),b=a.Event("hide.bs.modal"),this.$element.trigger(b),this.isShown&&!b.isDefaultPrevented()&&(this.isShown=!1,this.escape(),this.resize(),a(document).off("focusin.bs.modal"),this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"),this.$dialog.off("mousedown.dismiss.bs.modal"),a.support.transition&&this.$element.hasClass("fade")?this.$element.one("bsTransitionEnd",a.proxy(this.hideModal,this)).emulateTransitionEnd(c.TRANSITION_DURATION):this.hideModal())},c.prototype.enforceFocus=function(){a(document).off("focusin.bs.modal").on("focusin.bs.modal",a.proxy(function(a){document===a.target||this.$element[0]===a.target||this.$element.has(a.target).length||this.$element.trigger("focus")},this))},c.prototype.escape=function(){this.isShown&&this.options.keyboard?this.$element.on("keydown.dismiss.bs.modal",a.proxy(function(a){27==a.which&&this.hide()},this)):this.isShown||this.$element.off("keydown.dismiss.bs.modal")},c.prototype.resize=function(){this.isShown?a(window).on("resize.bs.modal",a.proxy(this.handleUpdate,this)):a(window).off("resize.bs.modal")},c.prototype.hideModal=function(){var a=this;this.$element.hide(),this.backdrop(function(){a.$body.removeClass("modal-open"),a.resetAdjustments(),a.resetScrollbar(),a.$element.trigger("hidden.bs.modal")})},c.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove(),this.$backdrop=null},c.prototype.backdrop=function(b){var d=this,e=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var f=a.support.transition&&e;if(this.$backdrop=a(document.createElement("div")).addClass("modal-backdrop "+e).appendTo(this.$body),this.$element.on("click.dismiss.bs.modal",a.proxy(function(a){return this.ignoreBackdropClick?void(this.ignoreBackdropClick=!1):void(a.target===a.currentTarget&&("static"==this.options.backdrop?this.$element[0].focus():this.hide()))},this)),f&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),!b)return;f?this.$backdrop.one("bsTransitionEnd",b).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION):b()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass("in");var g=function(){d.removeBackdrop(),b&&b()};a.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one("bsTransitionEnd",g).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION):g()}else b&&b()},c.prototype.handleUpdate=function(){this.adjustDialog()},c.prototype.adjustDialog=function(){var a=this.$element[0].scrollHeight>document.documentElement.clientHeight;this.$element.css({paddingLeft:!this.bodyIsOverflowing&&a?this.scrollbarWidth:"",paddingRight:this.bodyIsOverflowing&&!a?this.scrollbarWidth:""})},c.prototype.resetAdjustments=function(){this.$element.css({paddingLeft:"",paddingRight:""})},c.prototype.checkScrollbar=function(){var a=window.innerWidth;if(!a){var b=document.documentElement.getBoundingClientRect();a=b.right-Math.abs(b.left)}this.bodyIsOverflowing=document.body.clientWidth<a,this.scrollbarWidth=this.measureScrollbar()},c.prototype.setScrollbar=function(){var a=parseInt(this.$body.css("padding-right")||0,10);this.originalBodyPad=document.body.style.paddingRight||"",this.bodyIsOverflowing&&this.$body.css("padding-right",a+this.scrollbarWidth)},c.prototype.resetScrollbar=function(){this.$body.css("padding-right",this.originalBodyPad)},c.prototype.measureScrollbar=function(){var a=document.createElement("div");a.className="modal-scrollbar-measure",this.$body.append(a);var b=a.offsetWidth-a.clientWidth;return this.$body[0].removeChild(a),b};var d=a.fn.modal;a.fn.modal=b,a.fn.modal.Constructor=c,a.fn.modal.noConflict=function(){return a.fn.modal=d,this},a(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',function(c){var d=a(this),e=d.attr("href"),f=a(d.attr("data-target")||e&&e.replace(/.*(?=#[^\s]+$)/,"")),g=f.data("bs.modal")?"toggle":a.extend({remote:!/#/.test(e)&&e},f.data(),d.data());d.is("a")&&c.preventDefault(),f.one("show.bs.modal",function(a){a.isDefaultPrevented()||f.one("hidden.bs.modal",function(){d.is(":visible")&&d.trigger("focus")})}),b.call(f,g,this)})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.tooltip"),f="object"==typeof b&&b;!e&&/destroy|hide/.test(b)||(e||d.data("bs.tooltip",e=new c(this,f)),"string"==typeof b&&e[b]())})}var c=function(a,b){this.type=null,this.options=null,this.enabled=null,this.timeout=null,this.hoverState=null,this.$element=null,this.inState=null,this.init("tooltip",a,b)};c.VERSION="3.3.7",c.TRANSITION_DURATION=150,c.DEFAULTS={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1,viewport:{selector:"body",padding:0}},c.prototype.init=function(b,c,d){if(this.enabled=!0,this.type=b,this.$element=a(c),this.options=this.getOptions(d),this.$viewport=this.options.viewport&&a(a.isFunction(this.options.viewport)?this.options.viewport.call(this,this.$element):this.options.viewport.selector||this.options.viewport),this.inState={click:!1,hover:!1,focus:!1},this.$element[0]instanceof document.constructor&&!this.options.selector)throw new Error("`selector` option must be specified when initializing "+this.type+" on the window.document object!");for(var e=this.options.trigger.split(" "),f=e.length;f--;){var g=e[f];if("click"==g)this.$element.on("click."+this.type,this.options.selector,a.proxy(this.toggle,this));else if("manual"!=g){var h="hover"==g?"mouseenter":"focusin",i="hover"==g?"mouseleave":"focusout";this.$element.on(h+"."+this.type,this.options.selector,a.proxy(this.enter,this)),this.$element.on(i+"."+this.type,this.options.selector,a.proxy(this.leave,this))}}this.options.selector?this._options=a.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},c.prototype.getDefaults=function(){return c.DEFAULTS},c.prototype.getOptions=function(b){return b=a.extend({},this.getDefaults(),this.$element.data(),b),b.delay&&"number"==typeof b.delay&&(b.delay={show:b.delay,hide:b.delay}),b},c.prototype.getDelegateOptions=function(){var b={},c=this.getDefaults();return this._options&&a.each(this._options,function(a,d){c[a]!=d&&(b[a]=d)}),b},c.prototype.enter=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget).data("bs."+this.type);return c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c)),b instanceof a.Event&&(c.inState["focusin"==b.type?"focus":"hover"]=!0),c.tip().hasClass("in")||"in"==c.hoverState?void(c.hoverState="in"):(clearTimeout(c.timeout),c.hoverState="in",c.options.delay&&c.options.delay.show?void(c.timeout=setTimeout(function(){"in"==c.hoverState&&c.show()},c.options.delay.show)):c.show())},c.prototype.isInStateTrue=function(){for(var a in this.inState)if(this.inState[a])return!0;return!1},c.prototype.leave=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget).data("bs."+this.type);if(c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c)),b instanceof a.Event&&(c.inState["focusout"==b.type?"focus":"hover"]=!1),!c.isInStateTrue())return clearTimeout(c.timeout),c.hoverState="out",c.options.delay&&c.options.delay.hide?void(c.timeout=setTimeout(function(){"out"==c.hoverState&&c.hide()},c.options.delay.hide)):c.hide()},c.prototype.show=function(){var b=a.Event("show.bs."+this.type);if(this.hasContent()&&this.enabled){this.$element.trigger(b);var d=a.contains(this.$element[0].ownerDocument.documentElement,this.$element[0]);if(b.isDefaultPrevented()||!d)return;var e=this,f=this.tip(),g=this.getUID(this.type);this.setContent(),f.attr("id",g),this.$element.attr("aria-describedby",g),this.options.animation&&f.addClass("fade");var h="function"==typeof this.options.placement?this.options.placement.call(this,f[0],this.$element[0]):this.options.placement,i=/\s?auto?\s?/i,j=i.test(h);j&&(h=h.replace(i,"")||"top"),f.detach().css({top:0,left:0,display:"block"}).addClass(h).data("bs."+this.type,this),this.options.container?f.appendTo(this.options.container):f.insertAfter(this.$element),this.$element.trigger("inserted.bs."+this.type);var k=this.getPosition(),l=f[0].offsetWidth,m=f[0].offsetHeight;if(j){var n=h,o=this.getPosition(this.$viewport);h="bottom"==h&&k.bottom+m>o.bottom?"top":"top"==h&&k.top-m<o.top?"bottom":"right"==h&&k.right+l>o.width?"left":"left"==h&&k.left-l<o.left?"right":h,f.removeClass(n).addClass(h)}var p=this.getCalculatedOffset(h,k,l,m);this.applyPlacement(p,h);var q=function(){var a=e.hoverState;e.$element.trigger("shown.bs."+e.type),e.hoverState=null,"out"==a&&e.leave(e)};a.support.transition&&this.$tip.hasClass("fade")?f.one("bsTransitionEnd",q).emulateTransitionEnd(c.TRANSITION_DURATION):q()}},c.prototype.applyPlacement=function(b,c){var d=this.tip(),e=d[0].offsetWidth,f=d[0].offsetHeight,g=parseInt(d.css("margin-top"),10),h=parseInt(d.css("margin-left"),10);isNaN(g)&&(g=0),isNaN(h)&&(h=0),b.top+=g,b.left+=h,a.offset.setOffset(d[0],a.extend({using:function(a){d.css({top:Math.round(a.top),left:Math.round(a.left)})}},b),0),d.addClass("in");var i=d[0].offsetWidth,j=d[0].offsetHeight;"top"==c&&j!=f&&(b.top=b.top+f-j);var k=this.getViewportAdjustedDelta(c,b,i,j);k.left?b.left+=k.left:b.top+=k.top;var l=/top|bottom/.test(c),m=l?2*k.left-e+i:2*k.top-f+j,n=l?"offsetWidth":"offsetHeight";d.offset(b),this.replaceArrow(m,d[0][n],l)},c.prototype.replaceArrow=function(a,b,c){this.arrow().css(c?"left":"top",50*(1-a/b)+"%").css(c?"top":"left","")},c.prototype.setContent=function(){var a=this.tip(),b=this.getTitle();a.find(".tooltip-inner")[this.options.html?"html":"text"](b),a.removeClass("fade in top bottom left right")},c.prototype.hide=function(b){function d(){"in"!=e.hoverState&&f.detach(),e.$element&&e.$element.removeAttr("aria-describedby").trigger("hidden.bs."+e.type),b&&b()}var e=this,f=a(this.$tip),g=a.Event("hide.bs."+this.type);if(this.$element.trigger(g),!g.isDefaultPrevented())return f.removeClass("in"),a.support.transition&&f.hasClass("fade")?f.one("bsTransitionEnd",d).emulateTransitionEnd(c.TRANSITION_DURATION):d(),this.hoverState=null,this},c.prototype.fixTitle=function(){var a=this.$element;(a.attr("title")||"string"!=typeof a.attr("data-original-title"))&&a.attr("data-original-title",a.attr("title")||"").attr("title","")},c.prototype.hasContent=function(){return this.getTitle()},c.prototype.getPosition=function(b){b=b||this.$element;var c=b[0],d="BODY"==c.tagName,e=c.getBoundingClientRect();null==e.width&&(e=a.extend({},e,{width:e.right-e.left,height:e.bottom-e.top}));var f=window.SVGElement&&c instanceof window.SVGElement,g=d?{top:0,left:0}:f?null:b.offset(),h={scroll:d?document.documentElement.scrollTop||document.body.scrollTop:b.scrollTop()},i=d?{width:a(window).width(),height:a(window).height()}:null;return a.extend({},e,h,i,g)},c.prototype.getCalculatedOffset=function(a,b,c,d){return"bottom"==a?{top:b.top+b.height,left:b.left+b.width/2-c/2}:"top"==a?{top:b.top-d,left:b.left+b.width/2-c/2}:"left"==a?{top:b.top+b.height/2-d/2,left:b.left-c}:{top:b.top+b.height/2-d/2,left:b.left+b.width}},c.prototype.getViewportAdjustedDelta=function(a,b,c,d){var e={top:0,left:0};if(!this.$viewport)return e;var f=this.options.viewport&&this.options.viewport.padding||0,g=this.getPosition(this.$viewport);if(/right|left/.test(a)){var h=b.top-f-g.scroll,i=b.top+f-g.scroll+d;h<g.top?e.top=g.top-h:i>g.top+g.height&&(e.top=g.top+g.height-i)}else{var j=b.left-f,k=b.left+f+c;j<g.left?e.left=g.left-j:k>g.right&&(e.left=g.left+g.width-k)}return e},c.prototype.getTitle=function(){var a,b=this.$element,c=this.options;return a=b.attr("data-original-title")||("function"==typeof c.title?c.title.call(b[0]):c.title)},c.prototype.getUID=function(a){do a+=~~(1e6*Math.random());while(document.getElementById(a));return a},c.prototype.tip=function(){if(!this.$tip&&(this.$tip=a(this.options.template),1!=this.$tip.length))throw new Error(this.type+" `template` option must consist of exactly 1 top-level element!");return this.$tip},c.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},c.prototype.enable=function(){this.enabled=!0},c.prototype.disable=function(){this.enabled=!1},c.prototype.toggleEnabled=function(){this.enabled=!this.enabled},c.prototype.toggle=function(b){var c=this;b&&(c=a(b.currentTarget).data("bs."+this.type),c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c))),b?(c.inState.click=!c.inState.click,c.isInStateTrue()?c.enter(c):c.leave(c)):c.tip().hasClass("in")?c.leave(c):c.enter(c)},c.prototype.destroy=function(){var a=this;clearTimeout(this.timeout),this.hide(function(){a.$element.off("."+a.type).removeData("bs."+a.type),a.$tip&&a.$tip.detach(),a.$tip=null,a.$arrow=null,a.$viewport=null,a.$element=null})};var d=a.fn.tooltip;a.fn.tooltip=b,a.fn.tooltip.Constructor=c,a.fn.tooltip.noConflict=function(){return a.fn.tooltip=d,this}}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.popover"),f="object"==typeof b&&b;!e&&/destroy|hide/.test(b)||(e||d.data("bs.popover",e=new c(this,f)),"string"==typeof b&&e[b]())})}var c=function(a,b){this.init("popover",a,b)};if(!a.fn.tooltip)throw new Error("Popover requires tooltip.js");c.VERSION="3.3.7",c.DEFAULTS=a.extend({},a.fn.tooltip.Constructor.DEFAULTS,{placement:"right",trigger:"click",content:"",template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'}),c.prototype=a.extend({},a.fn.tooltip.Constructor.prototype),c.prototype.constructor=c,c.prototype.getDefaults=function(){return c.DEFAULTS},c.prototype.setContent=function(){var a=this.tip(),b=this.getTitle(),c=this.getContent();a.find(".popover-title")[this.options.html?"html":"text"](b),a.find(".popover-content").children().detach().end()[this.options.html?"string"==typeof c?"html":"append":"text"](c),a.removeClass("fade top bottom left right in"),a.find(".popover-title").html()||a.find(".popover-title").hide()},c.prototype.hasContent=function(){return this.getTitle()||this.getContent()},c.prototype.getContent=function(){var a=this.$element,b=this.options;return a.attr("data-content")||("function"==typeof b.content?b.content.call(a[0]):b.content)},c.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".arrow")};var d=a.fn.popover;a.fn.popover=b,a.fn.popover.Constructor=c,a.fn.popover.noConflict=function(){return a.fn.popover=d,this}}(jQuery),+function(a){"use strict";function b(c,d){this.$body=a(document.body),this.$scrollElement=a(a(c).is(document.body)?window:c),this.options=a.extend({},b.DEFAULTS,d),this.selector=(this.options.target||"")+" .nav li > a",this.offsets=[],this.targets=[],this.activeTarget=null,this.scrollHeight=0,this.$scrollElement.on("scroll.bs.scrollspy",a.proxy(this.process,this)),this.refresh(),this.process()}function c(c){return this.each(function(){var d=a(this),e=d.data("bs.scrollspy"),f="object"==typeof c&&c;e||d.data("bs.scrollspy",e=new b(this,f)),"string"==typeof c&&e[c]()})}b.VERSION="3.3.7",b.DEFAULTS={offset:10},b.prototype.getScrollHeight=function(){return this.$scrollElement[0].scrollHeight||Math.max(this.$body[0].scrollHeight,document.documentElement.scrollHeight)},b.prototype.refresh=function(){var b=this,c="offset",d=0;this.offsets=[],this.targets=[],this.scrollHeight=this.getScrollHeight(),a.isWindow(this.$scrollElement[0])||(c="position",d=this.$scrollElement.scrollTop()),this.$body.find(this.selector).map(function(){var b=a(this),e=b.data("target")||b.attr("href"),f=/^#./.test(e)&&a(e);return f&&f.length&&f.is(":visible")&&[[f[c]().top+d,e]]||null}).sort(function(a,b){return a[0]-b[0]}).each(function(){b.offsets.push(this[0]),b.targets.push(this[1])})},b.prototype.process=function(){var a,b=this.$scrollElement.scrollTop()+this.options.offset,c=this.getScrollHeight(),d=this.options.offset+c-this.$scrollElement.height(),e=this.offsets,f=this.targets,g=this.activeTarget;if(this.scrollHeight!=c&&this.refresh(),b>=d)return g!=(a=f[f.length-1])&&this.activate(a);if(g&&b<e[0])return this.activeTarget=null,this.clear();for(a=e.length;a--;)g!=f[a]&&b>=e[a]&&(void 0===e[a+1]||b<e[a+1])&&this.activate(f[a])},b.prototype.activate=function(b){
            this.activeTarget=b,this.clear();var c=this.selector+'[data-target="'+b+'"],'+this.selector+'[href="'+b+'"]',d=a(c).parents("li").addClass("active");d.parent(".dropdown-menu").length&&(d=d.closest("li.dropdown").addClass("active")),d.trigger("activate.bs.scrollspy")},b.prototype.clear=function(){a(this.selector).parentsUntil(this.options.target,".active").removeClass("active")};var d=a.fn.scrollspy;a.fn.scrollspy=c,a.fn.scrollspy.Constructor=b,a.fn.scrollspy.noConflict=function(){return a.fn.scrollspy=d,this},a(window).on("load.bs.scrollspy.data-api",function(){a('[data-spy="scroll"]').each(function(){var b=a(this);c.call(b,b.data())})})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.tab");e||d.data("bs.tab",e=new c(this)),"string"==typeof b&&e[b]()})}var c=function(b){this.element=a(b)};c.VERSION="3.3.7",c.TRANSITION_DURATION=150,c.prototype.show=function(){var b=this.element,c=b.closest("ul:not(.dropdown-menu)"),d=b.data("target");if(d||(d=b.attr("href"),d=d&&d.replace(/.*(?=#[^\s]*$)/,"")),!b.parent("li").hasClass("active")){var e=c.find(".active:last a"),f=a.Event("hide.bs.tab",{relatedTarget:b[0]}),g=a.Event("show.bs.tab",{relatedTarget:e[0]});if(e.trigger(f),b.trigger(g),!g.isDefaultPrevented()&&!f.isDefaultPrevented()){var h=a(d);this.activate(b.closest("li"),c),this.activate(h,h.parent(),function(){e.trigger({type:"hidden.bs.tab",relatedTarget:b[0]}),b.trigger({type:"shown.bs.tab",relatedTarget:e[0]})})}}},c.prototype.activate=function(b,d,e){function f(){g.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!1),b.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded",!0),h?(b[0].offsetWidth,b.addClass("in")):b.removeClass("fade"),b.parent(".dropdown-menu").length&&b.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!0),e&&e()}var g=d.find("> .active"),h=e&&a.support.transition&&(g.length&&g.hasClass("fade")||!!d.find("> .fade").length);g.length&&h?g.one("bsTransitionEnd",f).emulateTransitionEnd(c.TRANSITION_DURATION):f(),g.removeClass("in")};var d=a.fn.tab;a.fn.tab=b,a.fn.tab.Constructor=c,a.fn.tab.noConflict=function(){return a.fn.tab=d,this};var e=function(c){c.preventDefault(),b.call(a(this),"show")};a(document).on("click.bs.tab.data-api",'[data-toggle="tab"]',e).on("click.bs.tab.data-api",'[data-toggle="pill"]',e)}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.affix"),f="object"==typeof b&&b;e||d.data("bs.affix",e=new c(this,f)),"string"==typeof b&&e[b]()})}var c=function(b,d){this.options=a.extend({},c.DEFAULTS,d),this.$target=a(this.options.target).on("scroll.bs.affix.data-api",a.proxy(this.checkPosition,this)).on("click.bs.affix.data-api",a.proxy(this.checkPositionWithEventLoop,this)),this.$element=a(b),this.affixed=null,this.unpin=null,this.pinnedOffset=null,this.checkPosition()};c.VERSION="3.3.7",c.RESET="affix affix-top affix-bottom",c.DEFAULTS={offset:0,target:window},c.prototype.getState=function(a,b,c,d){var e=this.$target.scrollTop(),f=this.$element.offset(),g=this.$target.height();if(null!=c&&"top"==this.affixed)return e<c&&"top";if("bottom"==this.affixed)return null!=c?!(e+this.unpin<=f.top)&&"bottom":!(e+g<=a-d)&&"bottom";var h=null==this.affixed,i=h?e:f.top,j=h?g:b;return null!=c&&e<=c?"top":null!=d&&i+j>=a-d&&"bottom"},c.prototype.getPinnedOffset=function(){if(this.pinnedOffset)return this.pinnedOffset;this.$element.removeClass(c.RESET).addClass("affix");var a=this.$target.scrollTop(),b=this.$element.offset();return this.pinnedOffset=b.top-a},c.prototype.checkPositionWithEventLoop=function(){setTimeout(a.proxy(this.checkPosition,this),1)},c.prototype.checkPosition=function(){if(this.$element.is(":visible")){var b=this.$element.height(),d=this.options.offset,e=d.top,f=d.bottom,g=Math.max(a(document).height(),a(document.body).height());"object"!=typeof d&&(f=e=d),"function"==typeof e&&(e=d.top(this.$element)),"function"==typeof f&&(f=d.bottom(this.$element));var h=this.getState(g,b,e,f);if(this.affixed!=h){null!=this.unpin&&this.$element.css("top","");var i="affix"+(h?"-"+h:""),j=a.Event(i+".bs.affix");if(this.$element.trigger(j),j.isDefaultPrevented())return;this.affixed=h,this.unpin="bottom"==h?this.getPinnedOffset():null,this.$element.removeClass(c.RESET).addClass(i).trigger(i.replace("affix","affixed")+".bs.affix")}"bottom"==h&&this.$element.offset({top:g-b-f})}};var d=a.fn.affix;a.fn.affix=b,a.fn.affix.Constructor=c,a.fn.affix.noConflict=function(){return a.fn.affix=d,this},a(window).on("load",function(){a('[data-spy="affix"]').each(function(){var c=a(this),d=c.data();d.offset=d.offset||{},null!=d.offsetBottom&&(d.offset.bottom=d.offsetBottom),null!=d.offsetTop&&(d.offset.top=d.offsetTop),b.call(c,d)})})}(jQuery);
    </script>

</head>
<body>
<div class="container" >
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading center">
                    <label>
                        @lang('form.infoInserted')
                    </label>
                </div>

                <div class="panel-body">
                    <label>
                        @lang('form.personalData')
                    </label>
                    <div class="well">

                        <table>

                            <tr>
                                <td>
                                    <div class="col-md-6" style="padding: 0px">
                                        <div class="form-group">
                                            <label>
                                                @lang('form.carne')
                                            </label>
                                            <label class="form-control">
                                                {{session()->get('personal')[0]}}
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                @lang('form.name')
                                            </label>
                                            <label class="form-control">
                                                {{session()->get('personal')[1]}}
                                            </label>
                                        </div>
                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <div class="col-md-6" style="padding: 0px">
                                        <div class="form-group">
                                            <label>
                                                @lang('form.phone')
                                            </label>
                                            <label class="form-control">
                                                {{session()->get('personal')[2]}}
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                @lang('form.email')
                                            </label>
                                            <label class="form-control">
                                                {{session()->get('personal')[3]}}
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label>
                                            @lang('form.average')
                                        </label>
                                        <label class="form-control" style="width: 50%;">
                                            {{session()->get('personal')[4]}}
                                        </label>
                                    </div>
                                </td>
                                <td></td>
                            </tr>

                        </table>

                    </div>

                    <hr style="width:100%;">
                    <label>
                        @lang('form.inscriptionData')
                    </label>
                    <div class="well">
                        <div class="form-group">
                            <label>
                                @lang('form.carrer')
                            </label>
                            <label class="form-control">
                                {{session()->get('career')}}
                            </label>
                        </div>
                        <div class="well" style="background-color: white">
                            <div class="form-group">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="tabla" name="tabla">
                                        <thead>
                                        <tr>
                                            <th style="width: 50%">@lang('form.courses')</th>
                                            <th style="width: 25%">@lang('form.group')</th>
                                            <th style="width: 25%">@lang('form.location')</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(session()->get('inscript') as $item)
                                            <tr>
                                                <th>{{$item[1]}}</th>
                                                <th>{{$item[2]}}</th>
                                                <th>{{$item[0]}}</th>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr style="width:100%;">

                    <label class="center">
                        @lang('form.promotionalConsult')
                    </label>


                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>

