let userAgent = navigator.userAgent, // ユーザーエージェントの読み込み
    vh = window.innerHeight, // 初期のウィンドウの高さを取得
    elem = document.getElementById('top-wrapper'); // 要素を取得
let image = document.getElementById('hero-image'); // 要素を取得

// 初期のウィンドウの高さを要素に与える
elem.style.height = vh + 'px';

if (userAgent.indexOf("iPhone") >= 0
    || userAgent.indexOf("iPad") >= 0
    || userAgent.indexOf("Android") >= 0) {
    // ユーザーエージェントがスマホの時、回転イベントを検知
    window.addEventListener("orientationchange", resizeHandler);
    // window.addEventListener("resize", resizeHandler);
}
else {
    // ユーザーエージェントがスマホでないときはリサイズイベントを検知
    window.addEventListener("resize", resizeHandler);
}

// 要素の高さをウィンドウサイズに合わせる
function resizeHandler() {
    // alert(elem.style.height)
    vh = window.innerHeight;
    elem.style.height = vh + 'px';
    // alert(elem.style.height)
    image.style.height = vh + 'px';
}