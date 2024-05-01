<?php

namespace Kotodama;

class Kotodama
{
    protected $hiraganaRomaji = [
        // 基本のひらがな
        'あ' => 'a', 'い' => 'i', 'う' => 'u', 'え' => 'e', 'お' => 'o',
        'か' => 'ka', 'き' => 'ki', 'く' => 'ku', 'け' => 'ke', 'こ' => 'ko',
        'さ' => 'sa', 'し' => 'shi', 'す' => 'su', 'せ' => 'se', 'そ' => 'so',
        'た' => 'ta', 'ち' => 'chi', 'つ' => 'tsu', 'て' => 'te', 'と' => 'to',
        'な' => 'na', 'に' => 'ni', 'ぬ' => 'nu', 'ね' => 'ne', 'の' => 'no',
        'は' => 'ha', 'ひ' => 'hi', 'ふ' => 'fu', 'へ' => 'he', 'ほ' => 'ho',
        'ま' => 'ma', 'み' => 'mi', 'む' => 'mu', 'め' => 'me', 'も' => 'mo',
        'や' => 'ya', 'ゆ' => 'yu', 'よ' => 'yo',
        'ら' => 'ra', 'り' => 'ri', 'る' => 'ru', 'れ' => 're', 'ろ' => 'ro',
        'わ' => 'wa', 'を' => 'wo', 'ん' => 'n', "ゎ" => "xwa",

        'が'   => 'ga', 'ぎ' => 'gi', 'ぐ' => 'gu', 'げ' => 'ge', 'ご' => 'go',
        'ざ'   => 'za', 'じ' => 'ji', 'ず' => 'zu', 'ぜ' => 'ze', 'ぞ' => 'zo',
        'だ'   => 'da', 'ぢ' => 'ji', 'づ' => 'zu', 'で' => 'de', 'ど' => 'do',
        'ば'   => 'ba', 'び' => 'bi', 'ぶ' => 'bu', 'べ' => 'be', 'ぼ' => 'bo',
        'ぱ'   => 'pa', 'ぴ' => 'pi', 'ぷ' => 'pu', 'ぺ' => 'pe', 'ぽ' => 'po',

        // 拗音
        "ちゃ" => "cha", "ちぃ" => "tyi", "ちゅ" => "chu", "ちぇ" => "che", "ちょ" => "cho",
        "ぢゃ" => "dya", "ぢぃ" => "dyi", "ぢゅ" => "dyu", "ぢぇ" => "dye", "ぢょ" => "dyo",
        "きゃ" => "kya", "きぃ" => "kyi", "きゅ" => "kyu", "きぇ" => "kye", "きょ" => "kyo",
        "ぎゃ" => "gya", "ぎぃ" => "gyi", "ぎゅ" => "gyu", "ぎぇ" => "gye", "ぎょ" => "gyo",
        "しゃ" => "sha", "しぃ" => "syi", "しゅ" => "shu", "しぇ" => "she", "しょ" => "sho",
        "じゃ" => "ja", "じぃ" => "zyi", "じゅ" => "ju", "じぇ" => "je", "じょ" => "jo",
        "てゃ" => "tha", "てぃ" => "thi", "てゅ" => "thu", "てぇ" => "the", "てょ" => "tho",
        "にゃ" => "nya", "にぃ" => "nyi", "にゅ" => "nyu", "にぇ" => "nye", "にょ" => "nyo",
        "ひゃ" => "hya", "ひぃ" => "hyi", "ひゅ" => "hyu", "ひぇ" => "hye", "ひょ" => "hyo",
        "びゃ" => "bya", "びぃ" => "byi", "びゅ" => "byu", "びぇ" => "bye", "びょ" => "byo",
        "ぴゃ" => "pya", "ぴぃ" => "pyi", "ぴゅ" => "pyu", "ぴぇ" => "pye", "ぴょ" => "pyo",
        "みゃ" => "mya", "みぃ" => "myi", "みゅ" => "myu", "みぇ" => "mye", "みょ" => "myo",
        "りゃ" => "rya", "りぃ" => "ryi", "りゅ" => "ryu", "りぇ" => "rye", "りょ" => "ryo",
        "うぃ" => "wi", "うぇ" => "we",
        "くぁ" => "kwa", "くぃ" => "kwi", "くぅ" => "kwu", "くぇ" => "kwe", "くぉ" => "kwo",
        "ぐぁ" => "gwa", "ぐぃ" => "gwi", "ぐぅ" => "gwu", "ぐぇ" => "gwe", "ぐぉ" => "gwo",
        "とぁ" => "twa", "とぃ" => "twi", "とぅ" => "twu", "とぇ" => "twe", "とぉ" => "two",
        "どぁ" => "dwa", "どぃ" => "dwi", "どぅ" => "dwu", "どぇ" => "dwe", "どぉ" => "dwo",
        "ふぁ" => "fa", "ふぃ" => "fi", "ふぇ" => "fe", "ふぉ" => "fo",

        // 促音
        'っ'   => '',
    ];

    protected $katakanaRomaji = [
        // Basic Katakana
        'ア' => 'a', 'イ' => 'i', 'ウ' => 'u', 'エ' => 'e', 'オ' => 'o',
        'カ' => 'ka', 'キ' => 'ki', 'ク' => 'ku', 'ケ' => 'ke', 'コ' => 'ko',
        'サ' => 'sa', 'シ' => 'shi', 'ス' => 'su', 'セ' => 'se', 'ソ' => 'so',
        'タ' => 'ta', 'チ' => 'chi', 'ツ' => 'tsu', 'テ' => 'te', 'ト' => 'to',
        'ナ' => 'na', 'ニ' => 'ni', 'ヌ' => 'nu', 'ネ' => 'ne', 'ノ' => 'no',
        'ハ' => 'ha', 'ヒ' => 'hi', 'フ' => 'fu', 'ヘ' => 'he', 'ホ' => 'ho',
        'マ' => 'ma', 'ミ' => 'mi', 'ム' => 'mu', 'メ' => 'me', 'モ' => 'mo',
        'ヤ' => 'ya', 'ユ' => 'yu', 'ヨ' => 'yo',
        'ラ' => 'ra', 'リ' => 'ri', 'ル' => 'ru', 'レ' => 're', 'ロ' => 'ro',
        'ワ' => 'wa', 'ヲ' => 'wo', 'ン' => 'n', 'ヮ' => 'xwa',

        'ガ' => 'ga', 'ギ' => 'gi', 'グ' => 'gu', 'ゲ' => 'ge', 'ゴ' => 'go',
        'ザ' => 'za', 'ジ' => 'ji', 'ズ' => 'zu', 'ゼ' => 'ze', 'ゾ' => 'zo',
        'ダ' => 'da', 'ヂ' => 'ji', 'ヅ' => 'zu', 'デ' => 'de', 'ド' => 'do',
        'バ' => 'ba', 'ビ' => 'bi', 'ブ' => 'bu', 'ベ' => 'be', 'ボ' => 'bo',
        'パ' => 'pa', 'ピ' => 'pi', 'プ' => 'pu', 'ペ' => 'pe', 'ポ' => 'po',

        // Palatalized sounds
        "キャ" => "kya", "キィ" => "kyi", "キュ" => "kyu", "キェ" => "kye", "キョ" => "kyo",
        "ギャ" => "gya", "ギィ" => "gyi", "ギュ" => "gyu", "ギェ" => "gye", "ギョ" => "gyo",
        "シャ" => "sha", "シィ" => "syi", "シュ" => "shu", "シェ" => "she", "ショ" => "sho",
        "ジャ" => "ja", "ジィ" => "zyi", "ジュ" => "ju", "ジェ" => "je", "ジョ" => "jo",
        "チャ" => "cha", "チィ" => "tyi", "チュ" => "chu", "チェ" => "che", "チョ" => "cho",
        "ニャ" => "nya", "ニィ" => "nyi", "ニュ" => "nyu", "ニェ" => "nye", "ニョ" => "nyo",
        "ヒャ" => "hya", "ヒィ" => "hyi", "ヒュ" => "hyu", "ヒェ" => "hye", "ヒョ" => "hyo",
        "ビャ" => "bya", "ビィ" => "byi", "ビュ" => "byu", "ビェ" => "bye", "ビョ" => "byo",
        "ピャ" => "pya", "ピィ" => "pyi", "ピュ" => "pyu", "ピェ" => "pye", "ピョ" => "pyo",
        "ミャ" => "mya", "ミィ" => "myi", "ミュ" => "myu", "ミェ" => "mye", "ミョ" => "myo",
        "リャ" => "rya", "リィ" => "ryi", "リュ" => "ryu", "リェ" => "rye", "リョ" => "ryo",
        "ウィ" => "wi", "ウェ" => "we", "ウォ" => "wo",
        "クァ" => "kwa", "クィ" => "kwi", "クゥ" => "kwu", "クェ" => "kwe", "クォ" => "kwo",
        "グァ" => "gwa", "グィ" => "gwi", "グゥ" => "gwu", "グェ" => "gwe", "グォ" => "gwo",
        "トァ" => "twa", "トィ" => "twi", "トゥ" => "twu", "トェ" => "twe", "トォ" => "two",
        "ドァ" => "dwa", "ドィ" => "dwi", "ドゥ" => "dwu", "ドェ" => "dwe", "ドォ" => "dwo",
        "ファ" => "fa", "フィ" => "fi", "フェ" => "fe", "フォ" => "fo",

        // Double consonant marker
        'ッ'   => '',
    ];


    /**
     * @param $kana
     * @return string
     */
    public function hiraganaToRomaji($kana)
    {
        $romajiData = $this->hiraganaRomaji;
        return $this->convertRomaji($kana, $romajiData);
    }

    /**
     * @param $kana
     * @return string
     */
    public function katakanaToRomaji($kana)
    {
        $romajiData = $this->katakanaRomaji;
        return $this->convertRomaji($kana, $romajiData);
    }

    /**
     * @param $kana
     * @param $romajiData
     * @return string
     */
    private function convertRomaji($kana, $romajiData)
    {
        $result = "";
        $len = mb_strlen($kana);
        for ($i = 0; $i < $len; $i++) {
            $char = mb_substr($kana, $i, 1);
            $nextChar = ($i + 1 < $len) ? mb_substr($kana, $i + 1, 1) : '';

            // 促音の処理
            if ($char === 'っ' && $nextChar) {
                $nextRomaji = isset($romajiData[$nextChar]) ? $romajiData[$nextChar] : $nextChar;
                $result .= (strlen($nextRomaji) > 0) ? $nextRomaji[0] : ''; // 次の文字の先頭文字を重ねる
                continue;
            }

            // 拗音の処理
            if (array_key_exists($char . $nextChar, $romajiData)) {
                $result .= $romajiData[$char . $nextChar];
                $i++; // 拗音の次の文字をスキップ
                continue;
            }

            $result .= isset($romajiData[$char]) ? $romajiData[$char] : $char;
        }
        return $result;
    }
}
