<?php

return [
    'alipay' => [
        'app_id'         => '2016091600527335',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqezjjFgYiMrbCWugQqthGzZSk/8JsIJZlLEm6TAfg2CLFQ4Ks3czKaJ7O1Oe6X4X7vVA18KbOKVfI+a0MypWNRcHpqVhbO4jrdawhXQJAgTDgkRZh2UAPZw4aELz1fQxCIto7itY0vQfU94P5tljLX755eFPIbzWfkVHD1pKLlg/Ylrbv0gHXRRuSPDGDznO/hmhsyO+2XqZokqqLDT0lPVDkdHWEGgF+tWRZAza9CEif4/Hs2Gj2z8DO1FF6ieEikC0ywuQDCvSAxUy7cl5AnpzbqzFsSIZgU0+ag+VtfYbV2KQIgJawHziOT9WLJYhSNeHRQBa6jL7e/3VZyyATQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAxG42Ea9YCkCMyRCB/ZJE9eE4VjI0iAmPB9JV6h1Za5drR9nrBrkYW/9mQd8LxeUzFyVCapWDUe88x6UUYSPaatcsmr6IW8xzrgcWJWszfRaGr3MzMLsQHnV02zyviqNkIlgsgoRApkLWEPwNRlwXGxyg4HtdQIjHeNL4VvOBBNKitI0cO9GNlGXwO8EkA82HZh2TIP6d9emxIzBHs6wJ6CbgmJ2dkAVGeBl7PXtS4/kcg+6fYm/0Xtbq8LL9jOhvR67QhGkXDRU0WU5gAx3Y+xoLs0eR1XXwtHWl45L1vxWGrNI1m+p5ng6Q2d0SRiKrMBNRM6VlqWFICW8HGROUBwIDAQABAoIBAQCrEJgB2sQ/WWvCBqBOJj3sK9GWL27UMg7f7utnUVv4eQuyrTMizbtLEycIoqhsFWji9U3b6I1Oo5w4+ai/2Ct09CMiOGAkIe90VTOSLsPOYfm1fgvMmnw1KnE0JKtzf0vLJSLOH0L2CCrI69jbt4Nf1xS7qnPRqcydio0/nBx2BzuLarZmnePKJ0P4UmsYgQG8J/JLOuULyLNXmwaIodaunj563/bkdHNiBBg2tC/nTb44AR8iY/RAxJW+hnmMnpWvNGpbumI1RaZPepzyrTmHGreB0x656V7b/doub3KSCtPZjwusxVPftS6muzG4tUQ0YM2ftL97iJQvQfrfb4WhAoGBAOQcTO/HYqN68X1iBkykYcJVswOiZhHAVnCnoMjqgt7nJVtnPbvvAl1Igv8BXEND8oSZ7xCV2LXy1xbozWQkLQ/RRLWt8mNZqFbnKFtJ+eUp7dpuyOqW12dmQM2njmmnM4FVZN3MYeobKHDYJlDo07XASmQ0oHbct5NO4DHJ+ELfAoGBANxyWQzvNNqCCnLxKzijm45kCydo712vAVYsNkn1TfONpWl8adJyzkDBwGekrKBs25uA5jOBZICGR7DsT4a3zxt5RpUXX4WMMASUmetdrFyTpAffsib5r+jLLPMXfYOb9C/u5S2z2FN98Tqx+2XfI3bTAag7jXjgfPX5Y4WGdrvZAoGAFekd/r4hHGDXx1peDoiPl1ISAtxbf4MBCosfZ40XCwAa13/AL0gS6xDm/EWOLivdpJ0AmJA8I6XywRGVgPP0nBtWxTizGpXnFInZl4MwjLGNVjjj9ZyNjjIFMXvRsxZLXTXtnVxfX1RCeyxX6dejVkblHmDrtN8Yhv7BjCbBQPMCgYEAvVGqrpQERR/nD12U69h+MGQ0vAy/fSpdsH7ZxNxZrK/Z/eSuEOEtxqleruPaqQ+z7jFeAZ+/Cy3HBed8SMs0n3igqEvhahTB7D0ejubsrrjQ5z4yhoxqiTdsC/0BevSFWmEFCyHnx5RihjDyIUPn9hUy2CME1Wmdh7U8xiB7eckCgYBmyckGg4B8qnnn9fV66wIsaqypb2tPHnXFBbOEfC4u3xHNLU8QCUZc6qoK3wyuVVWs+75yztpZzFE/TYrL9CXi4MjrY38nHFLwvsIXOFTxEnvXbog2T8ECT2Gj1xlOX6Z0vjTV9rLCmw9uq0nYiQ/dSJ4GjaUqtdYPKtdnpz62Qw==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id' => 'wx426b3015555a46be',
        'mch_id' => '1900009851',
        'key' => '8934e7d15453e97507ef794cf7b0519d',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
