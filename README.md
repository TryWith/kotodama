# kotodama [言霊]

日本語変換ツールライブラリー

Japanese conversion utilities

# マインドマップ

- [x] ひらがな  =>  ローマ字変換
- [x] カタカナ  =>  ローマ字変換
- [ ] ローマ字  =>  ひらがな変換
- [ ] ローマ字  =>  カタカナ変換
- [ ] 漢字  =>  ひらがな変換
- [ ] 漢字  =>  カタカナ変換
- [ ] 漢字  =>  ローマ字変換


# Reference

## 変換用関数

### ひらがな => ローマ字

```php
$kana = "あいうえお"
$kotodama = new Kotodama
$kotodama = hiraganaToRomaji($kana)
```


### カタカナ => ローマ字

```php
$kana = "アイウエオ"
$kotodama = new Kotodama
$kotodama = katakanaToRomaji($kana)
```