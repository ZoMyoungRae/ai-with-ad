<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>AI Demo</title>
<style>
body {
    font-family: Arial;
    padding: 20px;
}
#answer {
    margin-top: 20px;
    padding: 15px;
    border: 1px solid #ddd;
    min-height: 100px;
}
#popup {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 250px;
    padding: 15px;
    background: #111;
    color: #fff;
    display: none;
    border-radius: 10px;
    font-size: 14px;
    opacity: 0.95;
}
button {
    padding: 10px;
    margin-top: 10px;
}
</style>
</head>
<body>
<h2>AI Demo</h2>
<input type="text" id="question" placeholder="질문 입력" style="width:300px;">
<br>
<button onclick="ask()">질문하기</button>
<div id="answer">답변이 여기에 표시됩니다</div>
<div id="popup">
    📢 Sponsored<br><br>
    이 광고는 더 빠르고 안정적인 서비스를 위한<br>
    서버 증설에 사용됩니다.
</div>
<script>
let startTime = Date.now();
let freeLimit = 0; // ← 0으로 설정 = 즉시 경고창 (실제 서비스시 30 * 60 * 1000 = 30분)
function ask() {
    let now = Date.now();
    let used = now - startTime;
    document.getElementById("answer").innerText = "답변 생성 중...";
    if (used > freeLimit) {
        let confirmUse = confirm("무료 사용량 초과\n광고 포함으로 계속하시겠습니까?");
        if (!confirmUse) return;
        showAd();
    }
    setTimeout(() => {
        document.getElementById("answer").innerText =
        "여기에 AI 답변이 표시됩니다 😏";
    }, 3000);
}
function showAd() {
    let popup = document.getElementById("popup");
    setTimeout(() => {
        popup.style.display = "block";
        setTimeout(() => {
            popup.style.display = "none";
        }, 5000); // 5초
    }, 800);
}
</script>
</body>
</html>