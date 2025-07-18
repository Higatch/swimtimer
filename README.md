## Multi-Lane Swim Lap Timer / マルチレーン スイムラップタイマー

### Overview (EN)

A lightweight, **pure-HTML + Vanilla JavaScript** lap timer for swim practice and meets.
Run it in any modern browser—no build tools, no external libraries.

| Max Lanes | Swimmers / Lane | Timing Options                                                  | Result Export                        |
| --------- | --------------- | --------------------------------------------------------------- | ------------------------------------ |
| 6         | 5               | • Cycle (sec)  <br>• Offset (sec)  <br>• Reps / Set  <br>• Sets | Optional `result.php` (requires PHP) |

*Just drop `index.html` into a folder (or GitHub Pages) and open it.*

---

### Features

* **Start / Stop / Reset** global timer (±0.1 s accuracy while visible)
* 6 **lane buttons** (2 × 3 grid) – mobile-friendly, no scrolling
* Per-lane lap recording with **automatic swimmer rotation**
* Live **feed of the last 10 laps** – 1.5× font, swimmer & time in **bold**
* “**Next**” countdown (turns red ≤ 10 s) & remaining-lap indicator
* **Export** sends all laps as JSON to `result.php` (optional)

---

### Quick Start

```bash
# 1) Clone or download
git clone https://github.com/Higatch/swimtimer.git
cd swimtimer

# 2) Just open index.html in a browser
```

GitHub Pages?
*Settings → Pages → Branch = `main`, Folder = `/`*.
Your timer will be live at `https://<user>.github.io/swimtimer/`.

---

### Optional `result.php`

`result.php` groups laps by swimmer and prints:

```
Lane 1 - Alice
  #1  29.3 s
  #2  29.0 s
  Avg 29.15 s
```

GitHub Pages won’t run PHP—host the file on any PHP-enabled server,
then change the `<form action="">` in **index.html** to its absolute URL.

---

### Customisation

* **MAX\_LANES / MAX\_SW** – edit the two constants at the top of the script.
* Change colours in the `:root { … }` CSS block.
* Replace Export with CSV / local download by tweaking `exportBtn.onclick`.

---

### Files

| File         | Purpose                                     |
| ------------ | ------------------------------------------- |
| `index.html` | All UI, CSS, and JS (single-file app)       |
| `result.php` | Optional server-side exporter (text output) |
| `README.md`  | This document                               |

---

### License

MIT License
Feel free to fork, modify, and share.

---

---

## 概要 (JP)

**HTML と純粋 JavaScript だけ** で動くスイム用ラップタイマーです。
ブラウザで開くだけで 6 レーン × 5 人まで計測できます。

*インストール不要・ライブラリ不要・ビルド不要。*

---

### 主な機能

* **Start / Stop / Reset** のグローバルタイマー（表示中は誤差 ±0.1 秒程度）
* スマホでも押しやすい **2 × 3 配列のレーンボタン**
* レーンごとに選手をローテーションしてラップを記録
* **最新10ラップ** を 1.5 倍フォントで表示（名前 & タイムは太字）
* **Next** 出発までの秒数を表示、10 秒を切ると赤色
* **Export** で全ラップを JSON 送信（`result.php` が必要）

---

### 使い方

1. このリポジトリをダウンロード or `git clone`
2. `index.html` をブラウザで開く
3. サークル・オフセット・セット数などを入力して **Start**
4. レーンボタンを押すたびにラップを計測

GitHub Pages に公開する場合は
*Settings → Pages → Branch = `main`、Folder = `/`* を選んで保存してください。
数分で `https://<ユーザー名>.github.io/swimtimer/` が発行されます。

---

### `result.php` について

*PHP が動くサーバー* に置けば、**Export** で結果をテキスト表示できます。
GitHub Pages では PHP が実行できないため、必要ならフォームの `action` を
自宅サーバーなどの絶対 URL に書き換えてください。

---

### カスタマイズ例

* レーン数や選手数 → スクリプト冒頭の `MAX_LANES`, `MAX_SW` を変更
* 配色変更 → CSS の `:root` 変数を編集
* Export を CSV ダウンロードにする → `exportBtn.onclick` を改造

---

### ライセンス

MIT License です。自由にフォーク・改変・再配布 OK。
