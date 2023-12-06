<?php
if (!isset($badWords) || empty($badWords)) {
    $badWords = array(
        "badWords" => array(),
        "badWordsLength" => 0,
    );
}
if (!isset($badPhrases) || empty($badPhrases)) {
    $badPhrases = array(
        "badPhrases" => array(),
        "badPhrasesLength" => 0,
    );
}
$badWords['badWords'] = array_merge_recursive($badWords['badWords'], array (
  'p' => true,
  '兼' => true,
  '卍' => true,
  '女' => true,
  '柄' => true,
  '王' => true,
  '糞' => true,
  '膣' => true,
  '裸' => true,
  '隅' => true,
  '隙' => true,
  'sm' => true,
  'xx' => true,
  'お尻' => true,
  'くそ' => true,
  'なめ' => true,
  'クソ' => true,
  'グロ' => true,
  'シテ' => true,
  'シパ' => true,
  'デブ' => true,
  'ナチ' => true,
  'ノブ' => true,
  'バカ' => true,
  'パブ' => true,
  'ホモ' => true,
  'マゾ' => true,
  'リム' => true,
  'ロバ' => true,
  '両刀' => true,
  '両性' => true,
  '中絶' => true,
  '乱交' => true,
  '乳首' => true,
  '二穴' => true,
  '人妻' => true,
  '人種' => true,
  '倒錯' => true,
  '偽物' => true,
  '剃毛' => true,
  '勃起' => true,
  '吸う' => true,
  '噴出' => true,
  '地獄' => true,
  '堕胎' => true,
  '堤防' => true,
  '変態' => true,
  '夢精' => true,
  '奴隷' => true,
  '娼婦' => true,
  '嫌い' => true,
  '子宮' => true,
  '射精' => true,
  '小便' => true,
  '尿道' => true,
  '巨乳' => true,
  '巨根' => true,
  '幼児' => true,
  '強姦' => true,
  '性交' => true,
  '性別' => true,
  '愚痴' => true,
  '拷問' => true,
  '挿入' => true,
  '支配' => true,
  '放尿' => true,
  '放棄' => true,
  '曇り' => true,
  '最悪' => true,
  '欲望' => true,
  '沈む' => true,
  '浸透' => true,
  '淫乱' => true,
  '獣姦' => true,
  '男色' => true,
  '盗撮' => true,
  '直立' => true,
  '直腸' => true,
  '私刑' => true,
  '精子' => true,
  '精液' => true,
  '糞便' => true,
  '緊縛' => true,
  '縛り' => true,
  '肛門' => true,
  '脱衣' => true,
  '覗き' => true,
  '誘惑' => true,
  '輪姦' => true,
  '迷い' => true,
  '遅延' => true,
  '野獣' => true,
  '陰唇' => true,
  '陰嚢' => true,
  '陰核' => true,
  '陰毛' => true,
  '陰茎' => true,
  '雌犬' => true,
  '震え' => true,
  'aho' => true,
  'ama' => true,
  'che' => true,
  'iku' => true,
  '×定格' => true,
  'うんち' => true,
  'おしり' => true,
  'くそー' => true,
  'しばり' => true,
  'ちんこ' => true,
  'のどか' => true,
  'ほこり' => true,
  'まんこ' => true,
  'やおい' => true,
  'アナル' => true,
  'エッチ' => true,
  'オカマ' => true,
  'オシリ' => true,
  'オタク' => true,
  'カント' => true,
  'クーン' => true,
  'コック' => true,
  'シャグ' => true,
  'ソドム' => true,
  'ツバメ' => true,
  'ナチス' => true,
  'ニガー' => true,
  'ニンフ' => true,
  'ヌード' => true,
  'ビッチ' => true,
  'フック' => true,
  'ブセタ' => true,
  'ペニス' => true,
  'ボール' => true,
  'ポルノ' => true,
  'ラバー' => true,
  'ランプ' => true,
  'リンチ' => true,
  'レイプ' => true,
  '中出し' => true,
  '堕胎医' => true,
  '売春婦' => true,
  '大陰唇' => true,
  '女の子' => true,
  '女王様' => true,
  '強姦犯' => true,
  '後背位' => true,
  '怒って' => true,
  '手コキ' => true,
  '正常位' => true,
  '殺し方' => true,
  '毛深い' => true,
  '気楽な' => true,
  '泌尿器' => true,
  '玉なめ' => true,
  '玉舐め' => true,
  '生殖器' => true,
  '私生児' => true,
  '角質の' => true,
  '貞操帯' => true,
  '際どい' => true,
  '革抑制' => true,
  '飼い主' => true,
  '騎上位' => true,
  'baka' => true,
  'busu' => true,
  'dabo' => true,
  'dobe' => true,
  'hage' => true,
  'kuso' => true,
  'mara' => true,
  'sm女王' => true,
  'teme' => true,
  'unko' => true,
  'usse' => true,
  'いたずら' => true,
  'おしっこ' => true,
  'おっぱい' => true,
  'おもらし' => true,
  'がらくた' => true,
  'たわごと' => true,
  'ねじ込み' => true,
  'ばかげた' => true,
  'ふたなり' => true,
  'ぶっかけ' => true,
  'やりまん' => true,
  'オッパイ' => true,
  'オナニー' => true,
  'オマンコ' => true,
  'クソ野郎' => true,
  'クッカー' => true,
  'ゴックン' => true,
  'ザーメン' => true,
  'ジャーク' => true,
  'スカトロ' => true,
  'スカンク' => true,
  'スナッチ' => true,
  'スパンク' => true,
  'スマット' => true,
  'スメグマ' => true,
  'スラット' => true,
  'スリット' => true,
  'セックス' => true,
  'ソドミー' => true,
  'ソドム化' => true,
  'ディック' => true,
  'ディルド' => true,
  'ネオナチ' => true,
  'パイパン' => true,
  'ヒトラー' => true,
  'ファック' => true,
  'ファニー' => true,
  'ファルス' => true,
  'フィスト' => true,
  'フェッチ' => true,
  'フランジ' => true,
  'プッシー' => true,
  'プリック' => true,
  'ペッカー' => true,
  'ポルノの' => true,
  'ユダヤ人' => true,
  'リミング' => true,
  'レイパー' => true,
  'ロゼット' => true,
  'ロリータ' => true,
  'ローター' => true,
  '下衆野郎' => true,
  '両性具有' => true,
  '公爵夫人' => true,
  '刺します' => true,
  '勃起する' => true,
  '女子高生' => true,
  '射精した' => true,
  '射精する' => true,
  '小児性愛' => true,
  '平手打ち' => true,
  '怒り狂う' => true,
  '殺人事件' => true,
  '殺人方法' => true,
  '潮吹き女' => true,
  '突き通る' => true,
  '自己愛性' => true,
  '自慰行為' => true,
  '裸の女性' => true,
  '足フェチ' => true,
  '近親相姦' => true,
  '遅らせる' => true,
  'baita' => true,
  'bokki' => true,
  'etchi' => true,
  'fakku' => true,
  'kimoi' => true,
  'kouno' => true,
  'manko' => true,
  'onani' => true,
  'oppai' => true,
  'unchi' => true,
  'yarou' => true,
  'おしゃべり' => true,
  'ぽっちゃり' => true,
  'やけどする' => true,
  'ろくでなし' => true,
  'アスホール' => true,
  'イラマチオ' => true,
  'インセスト' => true,
  'エゴイズム' => true,
  'エスコート' => true,
  'オルガシム' => true,
  'オーガズム' => true,
  'クリトリス' => true,
  'ゲイの男性' => true,
  'ゲイボーイ' => true,
  'コック吸盤' => true,
  'サディスト' => true,
  'サディズム' => true,
  'シーメール' => true,
  'スパンキー' => true,
  'セクシーな' => true,
  'ハードコア' => true,
  'パンティー' => true,
  'フェラチオ' => true,
  'ベアバック' => true,
  'ボンテージ' => true,
  'ラティーナ' => true,
  '児童性虐待' => true,
  '動物性愛者' => true,
  '合意の性交' => true,
  '小児性愛者' => true,
  '尿道プレイ' => true,
  '幼児性愛者' => true,
  '潮吹き男性' => true,
  '神だらけの' => true,
  '糞尿愛好症' => true,
  '血まみれの' => true,
  '足を広げる' => true,
  'bakane' => true,
  'chichi' => true,
  'chinko' => true,
  'chinpo' => true,
  'chitsu' => true,
  'damare' => true,
  'kisama' => true,
  'omanko' => true,
  'oshiri' => true,
  'saseko' => true,
  'sukebe' => true,
  'takuta' => true,
  'tansho' => true,
  'urusei' => true,
  'おしりのあな' => true,
  'お尻クッカー' => true,
  'ふしだらな女' => true,
  'めちゃくちゃ' => true,
  'アナリングス' => true,
  'ウェブカメラ' => true,
  'エクスタシー' => true,
  'エロティズム' => true,
  'エロティック' => true,
  'クニリンガス' => true,
  'ゲイセックス' => true,
  'ジャークオフ' => true,
  'ジークハイル' => true,
  'スウィンガー' => true,
  'スカートの中' => true,
  'ズーフィリア' => true,
  'デートレイプ' => true,
  'ファンタジー' => true,
  'プレイボーイ' => true,
  'ヘベフィリア' => true,
  'ペニスバンド' => true,
  'ボーイズラブ' => true,
  'ボールを蹴る' => true,
  'ボールギャグ' => true,
  'ボールバッグ' => true,
  'ランジェリー' => true,
  '新しいポルノ' => true,
  'abazure' => true,
  'aishiau' => true,
  'chikubi' => true,
  'gyuufun' => true,
  'hakuchi' => true,
  'kintama' => true,
  'makeinu' => true,
  'mantama' => true,
  'manzuri' => true,
  'ochinko' => true,
  'oshikko' => true,
  'paizuri' => true,
  'senzuri' => true,
  'shimata' => true,
  'shomben' => true,
  'yariman' => true,
  'カーマスートラ' => true,
  'クンニリングス' => true,
  'ストラップオン' => true,
  'ストリップ劇場' => true,
  'ドッグスタイル' => true,
  'ニンフォマニア' => true,
  'バイブレーター' => true,
  'バックスタイル' => true,
  'パンセクシャル' => true,
  'ヒットラー万歳' => true,
  'フェティッシュ' => true,
  'ヘベフィリック' => true,
  'ポルノグラフィ' => true,
  '自慰行為をする' => true,
  '茶色のシャワー' => true,
  'bakayaro' => true,
  'chikusho' => true,
  'chinkasu' => true,
  'kusodebu' => true,
  'kusogaki' => true,
  'kusoyaro' => true,
  'kutabare' => true,
  'namename' => true,
  'nameruna' => true,
  'otokonna' => true,
  'shimatta' => true,
  'tawagoto' => true,
  'アンビセクシャル' => true,
  'アンボセクシャル' => true,
  'グループセックス' => true,
  'ディープスロート' => true,
  'ドッグファッカー' => true,
  'ファッジパッカー' => true,
  'ポルノグラフィー' => true,
  'マザーファッカー' => true,
  'baishunfu' => true,
  'bakayarou' => true,
  'bukkorosu' => true,
  'kusokurae' => true,
  'kusottare' => true,
  'kusoyarou' => true,
  'yowamushi' => true,
  'zakennayo' => true,
  'アクロトモフィリア' => true,
  'ゴールデンシャワー' => true,
  'テレフォンセックス' => true,
  'マスターベーション' => true,
  'ketsunoana' => true,
  'okiesawada' => true,
  'shakuhachi' => true,
  'カーペットマンチャー' => true,
  'アジアのかわいい女の子' => true,
  'アンビセクシュアリティ' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'butsu',
      1 => 'korosu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'butsu' => 1,
      'korosu' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chan',
      1 => 'ba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chan' => 1,
      'ba' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chin',
      1 => 'chin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chin' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'g',
      1 => 'スポット',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'g' => 1,
      'スポット' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hafuna',
      1 => 'me',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hafuna' => 1,
      'me' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ichaicha',
      1 => 'suru',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ichaicha' => 1,
      'suru' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'itte',
      1 => 'yoshi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'itte' => 1,
      'yoshi' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kin',
      1 => 'tama',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kin' => 1,
      'tama' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kusateru',
      1 => 'oyaji',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kusateru' => 1,
      'oyaji' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mokamoka',
      1 => 'susu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mokamoka' => 1,
      'susu' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'muramura',
      1 => 'suru',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'muramura' => 1,
      'suru' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nampa',
      1 => 'suru',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nampa' => 1,
      'suru' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'neboken',
      1 => 'janeyo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'neboken' => 1,
      'janeyo' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'notare',
      1 => 'jine',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'notare' => 1,
      'jine' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pai',
      1 => 'pai',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pai' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 's',
      1 => 'm',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      's' => 1,
      'm' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'seshe',
      1 => 'speruma',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'seshe' => 1,
      'speruma' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shi',
      1 => 'ne',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shi' => 1,
      'ne' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shine',
      1 => 'shinay',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shine' => 1,
      'shinay' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shiri',
      1 => 'garu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shiri' => 1,
      'garu' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'stupid',
      1 => 'bitch',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'stupid' => 1,
      'bitch' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'urusai',
      1 => 'gaki',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'urusai' => 1,
      'gaki' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'usero',
      1 => 'yo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'usero' => 1,
      'yo' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => '自慰',
      1 => '行為',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      '自慰' => 1,
      '行為' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => '近親',
      1 => '相姦',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      '近親' => 1,
      '相姦' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'buchi',
      1 => 'korosuzo',
      2 => 'konoyaro',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'buchi' => 2,
      'korosuzo' => 1,
      'konoyaro' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chi',
      1 => 'ki',
      2 => 'sho',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chi' => 2,
      'ki' => 1,
      'sho' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jigoku',
      1 => 'e',
      2 => 'ike',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jigoku' => 2,
      'e' => 1,
      'ike' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ki',
      1 => 'sa',
      2 => 'ma',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ki' => 2,
      'sa' => 1,
      'ma' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'okama',
      1 => 'or',
      2 => 'homo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'okama' => 2,
      'or' => 1,
      'homo' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'プリンス',
      1 => 'アルバート',
      2 => 'ピアス',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'プリンス' => 2,
      'アルバート' => 1,
      'ピアス' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'watashiwa',
      1 => 'fucketsu',
      2 => 'desu',
      3 => 'ne',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'watashiwa' => 3,
      'fucketsu' => 2,
      'desu' => 1,
      'ne' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 32;

