function problem(numeral) {
  return "■■■問" + numeral + "■■■";
};

function dw(get) {
  document.write(get);
};

dw(problem(1));

dw(`<p>半径 5cm の円、半径 7cm の円、半径 10cm の円の面積をそれぞれ求めてください。 円周率は、3.14 とします。</p>`);

function calculation(X) {
  return dw(X * X * 3.14);
};

dw("5の面積");
dw("<br>");
calculation(5);
dw("<br>");

dw("7の面積");
dw("<br>");
calculation(7);
dw("<br>");

dw("10の面積");
dw("<br>");
calculation(10);
dw("<br>");


dw(problem(2));

dw(`<p>大人料金が 500 円、子供料金が 200 円の遊園地があります。 A グループは、大人 2 人、子供 4 人
B グループは、大人 1 人、子供 5 人
C グループは、大人 3 人、子供 7 人
です。
</p>`);
// 大人の人数＝X 子供の人数＝Y

function accounting(X, Y) {
  return 500 * X + 200 * Y + "円";
}
function b(group, X, Y) {
  return "<p>" + group + " group の合計金額</p>" + accounting(X, Y) + "<br>";
}

dw(`<p>A group の合計金額</p>`);
dw(accounting(2, 4));
dw("<br>");

dw(`<p>B グループの合計金額</p>`);
dw(accounting(1, 5));
dw("<br>");

dw(`<p>C グループの合計金額</p>`);
dw(accounting(3, 7));

dw(b("D", 100, 100));
