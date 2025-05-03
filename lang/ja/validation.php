<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | バリデーションクラスで使用されるデフォルトのエラーメッセージが含まれています。
    | 一部のルールには複数のバリエーションが存在します。ここでこれらのメッセージを調整することができます。
    |
    */

    'accepted' => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認する必要があります。',
    'active_url' => ':attributeは有効なURLでなければなりません。',
    'after' => ':attributeは:date以降の日付でなければなりません。',
    'after_or_equal' => ':attributeは:date以降、または同日の日付でなければなりません。',
    'alpha' => ':attributeには文字のみ使用できます。',
    'alpha_dash' => ':attributeには文字、数字、ダッシュ、アンダースコアのみ使用できます。',
    'alpha_num' => ':attributeには文字と数字のみ使用できます。',
    'array' => ':attributeは配列でなければなりません。',
    'ascii' => ':attributeはASCII文字のみ含むことができます。',
    'before' => ':attributeは:date以前の日付でなければなりません。',
    'before_or_equal' => ':attributeは:date以前、または同日の日付でなければなりません。',
    'between' => [
        'array' => ':attributeは:minから:maxのアイテムを含む必要があります。',
        'file' => ':attributeは:minから:maxキロバイトでなければなりません。',
        'numeric' => ':attributeは:minから:maxの間でなければなりません。',
        'string' => ':attributeは:minから:max文字でなければなりません。',
    ],
    'boolean' => ':attributeは真または偽でなければなりません。',
    'can' => ':attributeが許可されていません。',
    'confirmed' => ':attributeの確認が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeは有効な日付でなければなりません。',
    'date_equals' => ':attributeは:dateと同じ日付でなければなりません。',
    'date_format' => ':attributeは:format形式と一致している必要があります。',
    'decimal' => ':attributeは:decimal小数点以下の数でなければなりません。',
    'declined' => ':attributeは拒否されなければなりません。',
    'declined_if' => ':otherが:valueの場合、:attributeは拒否されなければなりません。',
    'different' => ':attributeと:otherは異なる必要があります。',
    'digits' => ':attributeは:digits桁でなければなりません。',
    'digits_between' => ':attributeは:minから:max桁の間でなければなりません。',
    'dimensions' => ':attributeの画像サイズが無効です。',
    'distinct' => ':attributeに重複する値があります。',
    'doesnt_end_with' => ':attributeは:valuesのいずれかで終わってはいけません。',
    'doesnt_start_with' => ':attributeは:valuesのいずれかで始まってはいけません。',
    'email' => ':attributeは有効なメールアドレスでなければなりません。',
    'ends_with' => ':attributeは:valuesのいずれかで終わる必要があります。',
    'enum' => '選択された:attributeは無効です。',
    'exists' => '選択された:attributeは無効です。',
    'extensions' => ':attributeは次の拡張子のいずれかを持っている必要があります: :values。',
    'file' => ':attributeはファイルでなければなりません。',
    'filled' => ':attributeには値が必要です。',
    'gt' => [
        'array' => ':attributeは:valueアイテム以上でなければなりません。',
        'file' => ':attributeは:valueキロバイト以上でなければなりません。',
        'numeric' => ':attributeは:value以上でなければなりません。',
        'string' => ':attributeは:value文字以上でなければなりません。',
    ],
    'gte' => [
        'array' => ':attributeは:valueアイテム以上でなければなりません。',
        'file' => ':attributeは:valueキロバイト以上でなければなりません。',
        'numeric' => ':attributeは:value以上でなければなりません。',
        'string' => ':attributeは:value文字以上でなければなりません。',
    ],
    'hex_color' => ':attributeは有効な16進数の色でなければなりません。',
    'image' => ':attributeは画像でなければなりません。',
    'in' => '選択された:attributeは無効です。',
    'in_array' => ':attributeは:otherに存在している必要があります。',
    'integer' => ':attributeは整数でなければなりません。',
    'ip' => ':attributeは有効なIPアドレスでなければなりません。',
    'ipv4' => ':attributeは有効なIPv4アドレスでなければなりません。',
    'ipv6' => ':attributeは有効なIPv6アドレスでなければなりません。',
    'json' => ':attributeは有効なJSON文字列でなければなりません。',
    'list' => ':attributeはリストでなければなりません。',
    'lowercase' => ':attributeは小文字でなければなりません。',
    'lt' => [
        'array' => ':attributeは:valueアイテム未満でなければなりません。',
        'file' => ':attributeは:valueキロバイト未満でなければなりません。',
        'numeric' => ':attributeは:value未満でなければなりません。',
        'string' => ':attributeは:value文字未満でなければなりません。',
    ],
    'lte' => [
        'array' => ':attributeは:valueアイテム以下でなければなりません。',
        'file' => ':attributeは:valueキロバイト以下でなければなりません。',
        'numeric' => ':attributeは:value以下でなければなりません。',
        'string' => ':attributeは:value文字以下でなければなりません。',
    ],
    'mac_address' => ':attributeは有効なMACアドレスでなければなりません。',
    'max' => [
        'array' => ':attributeは:maxアイテムを超えてはいけません。',
        'file' => ':attributeは:maxキロバイトを超えてはいけません。',
        'numeric' => ':attributeは:maxを超えてはいけません。',
        'string' => ':attributeは:max文字を超えてはいけません。',
    ],
    'max_digits' => ':attributeは:max桁を超えてはいけません。',
    'mimes' => ':attributeは:typeのファイルでなければなりません。',
    'mimetypes' => ':attributeは:typeのファイルでなければなりません。',
    'min' => [
        'array' => ':attributeは少なくとも:minアイテムが必要です。',
        'file' => ':attributeは少なくとも:minキロバイトでなければなりません。',
        'numeric' => ':attributeは少なくとも:minでなければなりません。',
        'string' => ':attributeは少なくとも:min文字でなければなりません。',
    ],
    'min_digits' => ':attributeは少なくとも:min桁が必要です。',
    'missing' => ':attributeが必要です。',
    'missing_if' => ':otherが:valueの場合、:attributeが必要です。',
    'missing_unless' => ':otherが:valuesにない限り、:attributeが必要です。',
    'missing_with' => ':valuesが存在する場合、:attributeが必要です。',
    'missing_with_all' => ':valuesがすべて存在する場合、:attributeが必要です。',
    'multiple_of' => ':attributeは:valueの倍数でなければなりません。',
    'not_in' => '選択された:attributeは無効です。',
    'not_regex' => ':attributeの形式が無効です。',
    'numeric' => ':attributeは数値でなければなりません。',
    'password' => [
        'letters' => ':attributeには少なくとも1つの文字が含まれている必要があります。',
        'mixed' => ':attributeには少なくとも1つの大文字と小文字が含まれている必要があります。',
        'numbers' => ':attributeには少なくとも1つの数字が含まれている必要があります。',
        'symbols' => ':attributeには少なくとも1つの記号が含まれている必要があります。',
        'uncompromised' => '提供された:attributeはデータ漏洩に出現しています。別の:attributeを選んでください。',
    ],
    'present' => ':attributeが存在する必要があります。',
    'present_if' => ':otherが:valueの場合、:attributeが存在する必要があります。',
    'present_unless' => ':otherが:valuesに含まれていない限り、:attributeが存在する必要があります。',
    'present_with' => ':valuesが存在する場合、:attributeが存在する必要があります。',
    'present_with_all' => ':valuesがすべて存在する場合、:attributeが存在する必要があります。',
    'prohibited' => ':attributeは禁止されています。',
    'prohibited_if' => ':otherが:valueの場合、:attributeは禁止されています。',
    'prohibited_unless' => ':otherが:valuesに含まれていない限り、:attributeは禁止されています。',
    'prohibits' => ':attributeは:otherの存在を禁止しています。',
    'regex' => ':attributeの形式が無効です。',
    'required' => ':attributeは必須です。',
    'required_array_keys' => ':attributeは:valuesのエントリを含む必要があります。',
    'required_if' => ':otherが:valueの場合、:attributeが必要です。',
    'required_if_accepted' => ':otherが承認された場合、:attributeが必要です。',
    'required_if_declined' => ':otherが拒否された場合、:attributeが必要です。',
    'required_unless' => ':otherが:valuesに含まれている限り、:attributeは必要です。',
    'required_with' => ':valuesが存在する場合、:attributeが必要です。',
    'required_with_all' => ':valuesがすべて存在する場合、:attributeが必要です。',
    'required_without' => ':valuesが存在しない場合、:attributeが必要です。',
    'required_without_all' => ':valuesのいずれも存在しない場合、:attributeが必要です。',
    'same' => ':attributeと:otherが一致する必要があります。',
    'size' => [
        'array' => ':attributeは:sizeアイテムを含む必要があります。',
        'file' => ':attributeは:sizeキロバイトでなければなりません。',
        'numeric' => ':attributeは:sizeでなければなりません。',
        'string' => ':attributeは:size文字でなければなりません。',
    ],
    'starts_with' => ':attributeは次のいずれかで始まる必要があります: :values。',
    'string' => ':attributeは文字列でなければなりません。',
    'timezone' => ':attributeは有効なタイムゾーンでなければなりません。',
    'unique' => ':attributeは既に取得されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attributeは大文字でなければなりません。',
    'url' => ':attributeは有効なURLでなければなりません。',
    'ulid' => ':attributeは有効なULIDでなければなりません。',
    'uuid' => ':attributeは有効なUUIDでなければなりません。',

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション言語行
    |--------------------------------------------------------------------------
    |
    | ここでは属性に使用されるカスタムバリデーションメッセージを指定できます。
    | 属性名とルール名を使用して行を名前付けすることで、特定の属性ルールに対して
    | クイックに特定のカスタム言語行を指定することができます。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'カスタムメッセージ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性名
    |--------------------------------------------------------------------------
    |
    | 以下の言語行は、属性のプレースホルダーを、"E-Mail Address"のような
    | より読者に優しいものに置き換えるために使用されます。これにより、
    | メッセージをより表現力豊かにすることができます。
    |
    */

    'attributes' => [
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'terms' => '利用規約とプライバシーポリシー',
        'account_name' => '会社名',
        'last_name' => '姓',
        'first_name' => '名',
        'last_kana' => '姓(フリガナ)',
        'first_kana' => '名(フリガナ)',
        'department' => '部署名',
        'position' => '役職名',
        'account_tel' => '電話番号(会社)',
        'user_tel' => '電話番号(個人)',
        'fax' => 'FAX',
        'postal_code' => '郵便番号',
        'prefecture_id' => '都道府県',
        'address1' => '市区町村',
        'address2' => '番地以降',
        'account_feature' => '特徴',
        'product_information' => '製品/サービス詳細',
        'account_overview' => '会社概要',
        'homepage_url' => 'ホームページURL',
        'prefecture_ids' => '都道府県',
        'available_date_ids' => '利用可能日時',
        'business_type' => '部品加工メーカー',
        'account_type' => 'チェックボックス',
    ],

];
