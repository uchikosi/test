let black = "★";
let white = "☆";

function dw(get) {
  document.write(get);
};

function problem(numeral) {
  return "■■■問" + numeral + "■■■";
};

function result(result) {
  return "問 " + result + "の実行結果";
};

function strart() {
  document.write("<p>ココカラ────────</p>");
};

function goal() {
  document.write("<p>────────ココマデ</p>");
};

dw(problem(1));
dw("<br>");
dw(result(1));
dw("<br>");

strart();
for (var star = 1; star <= 5; star++) {
  dw(black);
};
goal();


dw(problem(2));
dw("<br>");
dw(result(2));
dw("<br>");

strart();
for (var row = 1; row <= 2; row++) {
  for (var star = 1; star <= 3; star++) {
    dw(black);
  }
  dw("<br>");
}
goal();


dw(problem(3));
dw("<br>");
dw(result(3));
dw("<br>");

strart();
for (var row = 1; row <= 2; row++) {
  for (var star = 1; star <= 5; star++) {
    dw(white);
  }
  dw("<br>");
}
goal();


dw(problem(4));
dw("<br>");
dw(result(4));
dw("<br>");

strart();
for (var row = 1; row <= 4; row++) {
  for (var star = 1; star <= 5; star++) {
    dw(black);
  }
  dw("<br>");
}
goal();


dw(problem(5));
dw("<br>");
dw(result(5));
dw("<br>");

strart();
for (var row = 1; row <= 4; row++) {
  for (var star = 1; star <= 3; star++) {
    dw(black);
  }
  dw("<br>");
}
goal();


dw(problem(6));
dw("<br>");
dw(result(6));
dw("<br>");

strart();
for (var row = 1; row <= 3; row++) {
  for (var star = 1; star <= 3; star++) {
    document.write(star % 2);
    if (star % 2 == 0) {
      dw(white);
    }
    else {
      dw(black);
    }
  } dw("<br>");
};
goal();


dw(problem(7));
dw("<br>");
dw(result(7));
dw("<br>");

strart();
for (var row = 1; row <= 4; row++) {
  for (var star = 1; star <= 5; star++) {
    // document.write(star % 2);
    if (star % 2 != 1) {
      dw(white);
    }
    else {
      dw(black);
    }
  } dw("<br>");
};
goal();

// 余剰演算子 1ならtrue ０ならfualse
// 奇数なのか偶数なのか％あまりを0か見ている、綺麗に割れるかあまりがあるかを見る

dw(problem(8));
dw("<br>");
dw(result(8));
dw("<br>");

strart();
for (let star = 1; star <= 5; star++) {
  dw(black.repeat(star));
  dw("<br>")
}
for (let row = 0; row < 5; row++) {
  // document.write(row);
  for (let star = 0; star <= row; star++) {
    document.write(black);
  }
  document.write("<br>");
}
goal();

// repeat 指定された文字列を繰り替えす
// for文２つでうまくできなかった
