<?php

namespace TryWith\Kotodama;

class Kotodama
{
    protected $romaji = [
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
        'わ' => 'wa', 'を' => 'wo', 'ん' => 'n',

        // 拗音
        'きゃ' => 'kya', 'きゅ' => 'kyu', 'きょ' => 'kyo',
        'しゃ' => 'sha', 'しゅ' => 'shu', 'しょ' => 'sho',
        'ちゃ' => 'cha', 'ちゅ' => 'chu', 'ちょ' => 'cho',
        'にゃ' => 'nya', 'にゅ' => 'nyu', 'にょ' => 'nyo',
        'ひゃ' => 'hya', 'ひゅ' => 'hyu', 'ひょ' => 'hyo',
        'みゃ' => 'mya', 'みゅ' => 'myu', 'みょ' => 'myo',
        'りゃ' => 'rya', 'りゅ' => 'ryu', 'りょ' => 'ryo',
        'ぎゃ' => 'gya', 'ぎゅ' => 'gyu', 'ぎょ' => 'gyo',
        'じゃ' => 'ja', 'じゅ' => 'ju', 'じょ' => 'jo',
        'びゃ' => 'bya', 'びゅ' => 'byu', 'びょ' => 'byo',
        'ぴゃ' => 'pya', 'ぴゅ' => 'pyu', 'ぴょ' => 'pyo',
        'ふぁ' => 'fa', 'ふぃ' => 'fi', 'ふぇ' => 'fe', 'ふぉ' => 'fo',

        // 促音
        'っ' => ''
    ];

    public function kanaToRomaji($kana) {
        $result = "";
        $len = mb_strlen($kana);
        for ($i = 0; $i < $len; $i++) {
            $char = mb_substr($kana, $i, 1);
            $nextChar = ($i + 1 < $len) ? mb_substr($kana, $i + 1, 1) : '';

            // 促音の処理
            if ($char === 'っ' && $nextChar) {
                $nextRomaji = isset($this->$romaji[$nextChar]) ? $this->$romaji[$nextChar] : $nextChar;
                $result .= (strlen($nextRomaji) > 0) ? $nextRomaji[0] : ''; // 次の文字の先頭文字を重ねる
                continue;
            }

            // 拗音の処理
            if (array_key_exists($char . $nextChar, $this->romaji)) {
                $result .= $this->romaji[$char . $nextChar];
                $i++; // 拗音の次の文字をスキップ
                continue;
            }

            $result .= isset($this->romaji[$char]) ? $this->romaji[$char] : $char;
        }
        return $result;
    }
}