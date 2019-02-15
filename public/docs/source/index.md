---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_2e1c96dcffcfe7e0eb58d6408f1d619e -->
## email, password, usernameでユーザー登録し、JWTを得る

> Example request:

```bash
curl -X POST "http://localhost/api/auth/register"     -d "email"="oXwcUklAV9c34EEl" \
    -d "username"="Rgb1lEB3D2NA3qXz" \
    -d "password"="IKi4FlVKwb2XGjQI" 
```

```javascript
const url = new URL("http://localhost/api/auth/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "oXwcUklAV9c34EEl",
    "username": "Rgb1lEB3D2NA3qXz",
    "password": "IKi4FlVKwb2XGjQI",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVnaXN0ZXIiLCJpYXQiOjE1NTAxOTU3NTEsImV4cCI6MTU1MDE5OTM1MSwibmJmIjoxNTUwMTk1NzUxLCJqdGkiOiJhend6M29YeDFxZnZlcEZzIiwic3ViIjo1MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.EYU8Zidf7FBySW0-Xn6J5041wCDcB4BxuaUpK8tS8RI",
    "token_type": "bearer",
    "expires_in": 3600
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "email": [
            "The email must be a valid email address."
        ]
    }
}
```

### HTTP Request
`POST api/auth/register`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  required  | メールアドレス
    username | string |  required  | ユーザーネーム（表示される名前）
    password | string |  required  | パスワード

<!-- END_2e1c96dcffcfe7e0eb58d6408f1d619e -->

<!-- START_a925a8d22b3615f12fca79456d286859 -->
## email, password でログインし、JWTを得る

> Example request:

```bash
curl -X POST "http://localhost/api/auth/login"     -d "email"="ZQ5gVsKDQ1s5myiv" \
    -d "password"="4I1dGszL6qCZ3MJJ" 
```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "ZQ5gVsKDQ1s5myiv",
    "password": "4I1dGszL6qCZ3MJJ",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTAxOTU3NTIsImV4cCI6MTU1MDE5OTM1MiwibmJmIjoxNTUwMTk1NzUyLCJqdGkiOiJ4QldWcTRkWm9SVzhOS3k1Iiwic3ViIjoyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.oXkXo8p_q_hHI3R2lVkqiQ6OmGWthSCBEg7ivbTfIvA",
    "token_type": "bearer",
    "expires_in": 3600
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```

### HTTP Request
`POST api/auth/login`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  required  | メールアドレス
    password | string |  required  | パスワード

<!-- END_a925a8d22b3615f12fca79456d286859 -->

<!-- START_19ff1b6f8ce19d3c444e9b518e8f7160 -->
## logout ログアウト

> Example request:

```bash
curl -X POST "http://localhost/api/auth/logout" 
```

```javascript
const url = new URL("http://localhost/api/auth/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Successfully logged out"
}
```

### HTTP Request
`POST api/auth/logout`


<!-- END_19ff1b6f8ce19d3c444e9b518e8f7160 -->

<!-- START_994af8f47e3039ba6d6d67c09dd9e415 -->
## refresh token トークンのリフレッシュ

> Example request:

```bash
curl -X POST "http://localhost/api/auth/refresh" 
```

```javascript
const url = new URL("http://localhost/api/auth/refresh");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVmcmVzaCIsImlhdCI6MTU1MDE5NTc1MSwiZXhwIjoxNTUwMTk5MzUxLCJuYmYiOjE1NTAxOTU3NTEsImp0aSI6IkRvNnkwNWE5VExRWEFKZ3MiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.oiz9-WVVXz-3N-GiliwR31GGVeBSsq-GMnu42Bj7G8o",
    "token_type": "bearer",
    "expires_in": 3600
}
```

### HTTP Request
`POST api/auth/refresh`


<!-- END_994af8f47e3039ba6d6d67c09dd9e415 -->

<!-- START_a47210337df3b4ba0df697c115ba0c1e -->
## me 現在ログインしているユーザーの情報を得る

> Example request:

```bash
curl -X POST "http://localhost/api/auth/me" 
```

```javascript
const url = new URL("http://localhost/api/auth/me");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "unique_id": "TESTTEST",
        "username": "テスト太郎",
        "email": "testuser@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-02-15 01:55:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:32.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`POST api/auth/me`


<!-- END_a47210337df3b4ba0df697c115ba0c1e -->

<!-- START_7edc0e9974cb6ca47974c68a17d1938f -->
## friends.index 友達一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/friends" 
```

```javascript
const url = new URL("http://localhost/api/friends");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 8,
            "unique_id": "ARLqBBkr3n",
            "username": "笹田 真綾",
            "email": "ewatanabe@example.com",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 17,
            "unique_id": "PrxJp86ipe",
            "username": "井上 裕樹",
            "email": "tomoya.suzuki@example.com",
            "permitted": 1,
            "attribute_id": 3,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 21,
            "unique_id": "eiWBHglgqD",
            "username": "鈴木 晃",
            "email": "kato.youichi@example.org",
            "permitted": 1,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 29,
            "unique_id": "HCbJagEyeN",
            "username": "笹田 裕樹",
            "email": "nidaka@example.net",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 33,
            "unique_id": "RwowfUIUrM",
            "username": "村山 知実",
            "email": "akemi26@example.com",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 37,
            "unique_id": "xLb3wWTRqf",
            "username": "加納 太郎",
            "email": "nkanou@example.org",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 38,
            "unique_id": "FLTs7cYI2Y",
            "username": "小泉 くみ子",
            "email": "yumiko03@example.net",
            "permitted": 1,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 44,
            "unique_id": "pjffE6tDuR",
            "username": "工藤 裕美子",
            "email": "yamada.nanami@example.org",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```
> Example response (204):

```json
[]
```

### HTTP Request
`GET api/friends`


<!-- END_7edc0e9974cb6ca47974c68a17d1938f -->

<!-- START_f05cf1deece1e8c35e1ec331331e3319 -->
## friends.store 友達申請する

> Example request:

```bash
curl -X POST "http://localhost/api/friends"     -d "email"="jp1tZqVuEc6SHOY7" 
```

```javascript
const url = new URL("http://localhost/api/friends");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "jp1tZqVuEc6SHOY7",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (201):

```json
{
    "id": 1,
    "unique_id": "TESTTEST",
    "username": "テスト太郎",
    "email": "testuser@example.com",
    "permitted": null,
    "attribute_id": null,
    "created_at": {
        "date": "2019-02-15 01:55:15.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "updated_at": {
        "date": "2019-02-15 01:55:32.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    }
}
```
> Example response (409):

```json
{
    "error": "すでにフレンドか、申請中です"
}
```

### HTTP Request
`POST api/friends`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  required  | 追加する友達のメールアドレス

<!-- END_f05cf1deece1e8c35e1ec331331e3319 -->

<!-- START_b3cd0c5ef680836492350c2f2072c3a3 -->
## friends.blockedUsers 申請した中でブロックされているユーザー一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/friends/blocked" 
```

```javascript
const url = new URL("http://localhost/api/friends/blocked");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 19,
            "unique_id": "DRNU2E9zIW",
            "username": "渡辺 稔",
            "email": "nakamura.kumiko@example.org",
            "permitted": 0,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 24,
            "unique_id": "3gLFsF2mSK",
            "username": "井上 春香",
            "email": "sugiyama.yumiko@example.com",
            "permitted": 0,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 25,
            "unique_id": "Q89K4jr9Nq",
            "username": "高橋 加奈",
            "email": "chiyo.tsuda@example.com",
            "permitted": 0,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 26,
            "unique_id": "EkPxZIPg6u",
            "username": "木村 あすか",
            "email": "nharada@example.org",
            "permitted": 0,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 39,
            "unique_id": "9HFxURn1bh",
            "username": "村山 健一",
            "email": "harada.mitsuru@example.org",
            "permitted": 0,
            "attribute_id": 4,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 45,
            "unique_id": "rqNQdDJmsE",
            "username": "西之園 治",
            "email": "ksuzuki@example.org",
            "permitted": 0,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 47,
            "unique_id": "NhXLHkPLg6",
            "username": "斉藤 陽子",
            "email": "kaori53@example.net",
            "permitted": 0,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/friends/blocked`


<!-- END_b3cd0c5ef680836492350c2f2072c3a3 -->

<!-- START_d0f209202760e23f7254507b81d7dca5 -->
## friends.waitingFriends 申請した中で待っているユーザー一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/friends/waiting" 
```

```javascript
const url = new URL("http://localhost/api/friends/waiting");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 54,
            "unique_id": "0ZKfj5sRx8",
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/friends/waiting`


<!-- END_d0f209202760e23f7254507b81d7dca5 -->

<!-- START_76eb010618732a67401c369843a126a8 -->
## friends.friendRequestUsers 申請してきてるユーザー

> Example request:

```bash
curl -X GET -G "http://localhost/api/friends/requested" 
```

```javascript
const url = new URL("http://localhost/api/friends/requested");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 55,
            "unique_id": "1oelEOBOxa",
            "username": "aaaa",
            "email": "0HEUl@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 57,
            "unique_id": "9yOX6f0JP5",
            "username": "aaaa",
            "email": "2NxA9hs@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/friends/requested`


<!-- END_76eb010618732a67401c369843a126a8 -->

<!-- START_fbc14c6de0e1413d77c7983cac955138 -->
## friends.permit 友達申請を許可

> Example request:

```bash
curl -X POST "http://localhost/api/friends/permit"     -d "user_id"="5" 
```

```javascript
const url = new URL("http://localhost/api/friends/permit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "5",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "招待を許可しました"
}
```
> Example response (409):

```json
{
    "error": "そのユーザーからは招待されていません"
}
```

### HTTP Request
`POST api/friends/permit`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | integer |  required  | 友達申請してきてる人のユーザーID

<!-- END_fbc14c6de0e1413d77c7983cac955138 -->

<!-- START_8283675255190daaedee86bae7f6e419 -->
## friends.reject 友達申請を拒否

> Example request:

```bash
curl -X POST "http://localhost/api/friends/reject"     -d "user_id"="12" 
```

```javascript
const url = new URL("http://localhost/api/friends/reject");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "12",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "招待をキャンセルしました"
}
```
> Example response (409):

```json
{
    "error": "そのユーザーからは招待されていません"
}
```

### HTTP Request
`POST api/friends/reject`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | integer |  required  | 友達申請してきてる人のユーザーID

<!-- END_8283675255190daaedee86bae7f6e419 -->

<!-- START_21d33fd99fad4620b704e1c5c2326a37 -->
## friends.show 特定の友達の詳細情報

> Example request:

```bash
curl -X GET -G "http://localhost/api/friends/{friend}" 
```

```javascript
const url = new URL("http://localhost/api/friends/{friend}");

    let params = {
            "friend": "u0R6z3J1ICkPlmpG",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 38,
        "unique_id": "FLTs7cYI2Y",
        "username": "小泉 くみ子",
        "email": "yumiko03@example.net",
        "permitted": 1,
        "attribute_id": 5,
        "created_at": {
            "date": "2019-02-15 01:55:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`GET api/friends/{friend}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    friend |  required  | 友達のid

<!-- END_21d33fd99fad4620b704e1c5c2326a37 -->

<!-- START_5256ac7cddbd9267236aaa0874cb6a49 -->
## friends.destory 友達から削除

> Example request:

```bash
curl -X DELETE "http://localhost/api/friends/{friend}" 
```

```javascript
const url = new URL("http://localhost/api/friends/{friend}");

    let params = {
            "friend": "Hwzqyfz3SB4roSlH",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (204):

```json
[]
```

### HTTP Request
`DELETE api/friends/{friend}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    friend |  required  | 友達のid

<!-- END_5256ac7cddbd9267236aaa0874cb6a49 -->

<!-- START_007018a8a9f15c2d47fcb105431ffeee -->
## groups.index 自分が管理しているグループ一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/groups" 
```

```javascript
const url = new URL("http://localhost/api/groups");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "velit",
            "users": [
                {
                    "id": 38,
                    "unique_id": "FLTs7cYI2Y",
                    "username": "小泉 くみ子",
                    "email": "yumiko03@example.net",
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 44,
                    "unique_id": "pjffE6tDuR",
                    "username": "工藤 裕美子",
                    "email": "yamada.nanami@example.org",
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 2,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "quas",
            "users": [
                {
                    "id": 29,
                    "unique_id": "HCbJagEyeN",
                    "username": "笹田 裕樹",
                    "email": "nidaka@example.net",
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "unique_id": "FLTs7cYI2Y",
                    "username": "小泉 くみ子",
                    "email": "yumiko03@example.net",
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 3,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "asperiores",
            "users": [
                {
                    "id": 8,
                    "unique_id": "ARLqBBkr3n",
                    "username": "笹田 真綾",
                    "email": "ewatanabe@example.com",
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "eiWBHglgqD",
                    "username": "鈴木 晃",
                    "email": "kato.youichi@example.org",
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/groups`


<!-- END_007018a8a9f15c2d47fcb105431ffeee -->

<!-- START_15c22564ad248f952405021410fd1d25 -->
## groups.store グループを追加

> Example request:

```bash
curl -X POST "http://localhost/api/groups"     -d "name"="5xT0O38dTHFSW5kB" 
```

```javascript
const url = new URL("http://localhost/api/groups");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "5xT0O38dTHFSW5kB",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (201):

```json
{
    "data": {
        "id": 152,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "quas",
        "users": [],
        "created_at": {
            "date": "2019-02-15 01:55:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`POST api/groups`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 新規グループの名前

<!-- END_15c22564ad248f952405021410fd1d25 -->

<!-- START_a209a43173c7c4aaf7ab070d77fb7f0c -->
## groups.show グループ詳細

> Example request:

```bash
curl -X GET -G "http://localhost/api/groups/{group}" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "HxCWdx4yGs4YHdRH",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 151,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "newGroupqxTbH",
        "users": [],
        "created_at": {
            "date": "2019-02-15 01:55:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`GET api/groups/{group}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    group |  required  | グループid

<!-- END_a209a43173c7c4aaf7ab070d77fb7f0c -->

<!-- START_5b84408c838201930093112a7621935c -->
## groups.update グループの情報を更新

> Example request:

```bash
curl -X PUT "http://localhost/api/groups/{group}"     -d "name"="Cfroik7DFm4twbYw" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "SKPN4PSJ0kijcsz8",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "Cfroik7DFm4twbYw",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "newGroupA88jaNLP",
        "users": [
            {
                "id": 38,
                "unique_id": "FLTs7cYI2Y",
                "username": "小泉 くみ子",
                "email": "yumiko03@example.net",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 44,
                "unique_id": "pjffE6tDuR",
                "username": "工藤 裕美子",
                "email": "yamada.nanami@example.org",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-15 01:55:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`PUT api/groups/{group}`

`PATCH api/groups/{group}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 新たにつけるグループ名
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    group |  required  | グループid

<!-- END_5b84408c838201930093112a7621935c -->

<!-- START_bd4f731f3f84c755053406b8971eba1f -->
## groups.destory グループを削除

> Example request:

```bash
curl -X DELETE "http://localhost/api/groups/{group}" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "t0Aew09kLwIpzjTB",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (204):

```json
[]
```
> Example response (409):

```json
{
    "error": "このグループを使用しているデフォルト設定があるので、削除できません"
}
```

### HTTP Request
`DELETE api/groups/{group}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    group |  required  | グループid

<!-- END_bd4f731f3f84c755053406b8971eba1f -->

<!-- START_7abc713c473ec0e612bd83b515b63b1d -->
## groups.can_add_users  対象のグループに追加できるユーザー一覧を返す（自分のフレンド−そのグループのメンバー）

> Example request:

```bash
curl -X GET -G "http://localhost/api/groups/{group}/users/can_add" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users/can_add");

    let params = {
            "group": "uqGknHNy5JeL0b94",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 8,
            "unique_id": "ARLqBBkr3n",
            "username": "笹田 真綾",
            "email": "ewatanabe@example.com",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 17,
            "unique_id": "PrxJp86ipe",
            "username": "井上 裕樹",
            "email": "tomoya.suzuki@example.com",
            "permitted": 1,
            "attribute_id": 3,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 21,
            "unique_id": "eiWBHglgqD",
            "username": "鈴木 晃",
            "email": "kato.youichi@example.org",
            "permitted": 1,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 29,
            "unique_id": "HCbJagEyeN",
            "username": "笹田 裕樹",
            "email": "nidaka@example.net",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 33,
            "unique_id": "RwowfUIUrM",
            "username": "村山 知実",
            "email": "akemi26@example.com",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 37,
            "unique_id": "xLb3wWTRqf",
            "username": "加納 太郎",
            "email": "nkanou@example.org",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/groups/{group}/users/can_add`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    group |  required  | グループid

<!-- END_7abc713c473ec0e612bd83b515b63b1d -->

<!-- START_25cacea309e94199433ca72c489534bc -->
## groups.users.index あるグループのユーザー一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/groups/{group}/users" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users");

    let params = {
            "group": "AfqX5rNkDIRSjnEK",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": []
}
```

### HTTP Request
`GET api/groups/{group}/users`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    group |  required  | グループid

<!-- END_25cacea309e94199433ca72c489534bc -->

<!-- START_f40148555e0e5ae9fd501d8c12dd032c -->
## groups.users.store グループにユーザーを追加する

> Example request:

```bash
curl -X POST "http://localhost/api/groups/{group}/users" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users");

    let params = {
            "group": "sKvYqKC8GI10kwTf",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": []
}
```

### HTTP Request
`POST api/groups/{group}/users`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    group |  required  | グループid

<!-- END_f40148555e0e5ae9fd501d8c12dd032c -->

<!-- START_193dc746eafa37d49a04e41e8a28bb43 -->
## groups.users.show あるグループの中のひとりのユーザー情報を得る

> Example request:

```bash
curl -X GET -G "http://localhost/api/groups/{group}/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users/{user}");

    let params = {
            "group": "UTOQqeye3lat3589",
            "user": "BAsPmqOSSq60ZltS",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 37,
        "unique_id": "xLb3wWTRqf",
        "username": "加納 太郎",
        "email": "nkanou@example.org",
        "created_at": {
            "date": "2019-02-15 01:55:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`GET api/groups/{group}/users/{user}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    group |  required  | グループid
    user |  required  | グループに所属する一人のユーザーのid

<!-- END_193dc746eafa37d49a04e41e8a28bb43 -->

<!-- START_5d098753a466f1ebdbceb5c54720efb3 -->
## groups.users.destory ユーザーをグループから削除

> Example request:

```bash
curl -X DELETE "http://localhost/api/groups/{group}/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users/{user}");

    let params = {
            "group": "Eo0trLos9cQWDK9t",
            "user": "avpefzQl37TQRJ2i",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (204):

```json
[]
```

### HTTP Request
`DELETE api/groups/{group}/users/{user}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    group |  required  | グループid
    user |  required  | グループに所属する一人のユーザーのid

<!-- END_5d098753a466f1ebdbceb5c54720efb3 -->

<!-- START_a436107cbaaa107d55c5d5db3d5e2dd9 -->
## default_settings.index デフォルト設定の一覧を取得する

> Example request:

```bash
curl -X GET -G "http://localhost/api/default_settings" 
```

```javascript
const url = new URL("http://localhost/api/default_settings");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "QCV8TTx",
            "timer": "01:00:00",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/default_settings`


<!-- END_a436107cbaaa107d55c5d5db3d5e2dd9 -->

<!-- START_36cc79ce9a383a7588678684a551a6f5 -->
## default_settings.store 新規デフォルト設定を作成する

> Example request:

```bash
curl -X POST "http://localhost/api/default_settings"     -d "name"="GWD2u5hByostHoNC" \
    -d "timer"="9" \
    -d "group_id"="11" 
```

```javascript
const url = new URL("http://localhost/api/default_settings");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "GWD2u5hByostHoNC",
    "timer": "9",
    "group_id": "11",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (201):

```json
{
    "data": {
        "id": 51,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "bEnQc4",
        "timer": "01:00:00",
        "created_at": {
            "date": "2019-02-15 01:55:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`POST api/default_settings`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 設定名
    timer | integer |  required  | 始まるまでの時間'01:00:00'形式
    group_id | integer |  required  | この設定を適用するグループid

<!-- END_36cc79ce9a383a7588678684a551a6f5 -->

<!-- START_72e63016f90edb1f9e183a491b8a3953 -->
## default_settings.show 一つのデフォルト設定の詳細を得る

> Example request:

```bash
curl -X GET -G "http://localhost/api/default_settings/{default_setting}" 
```

```javascript
const url = new URL("http://localhost/api/default_settings/{default_setting}");

    let params = {
            "default_setting": "6mlYKTr2MjMgcs8t",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 51,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "bEnQc4",
        "timer": "01:00:00",
        "created_at": {
            "date": "2019-02-15 01:55:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`GET api/default_settings/{default_setting}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    default_setting |  required  | 設定のid

<!-- END_72e63016f90edb1f9e183a491b8a3953 -->

<!-- START_108e89ba25f8435d33422f2e6276f453 -->
## default_settings.update 一つのデフォルト設定情報のupdate

> Example request:

```bash
curl -X PUT "http://localhost/api/default_settings/{default_setting}"     -d "name"="ohYYk42kbJvOvsmD" \
    -d "timer"="14" \
    -d "group_id"="16" 
```

```javascript
const url = new URL("http://localhost/api/default_settings/{default_setting}");

    let params = {
            "default_setting": "a3t0EgTyt0omnocs",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "ohYYk42kbJvOvsmD",
    "timer": "14",
    "group_id": "16",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "newSettings2iJR79Ak",
        "timer": "01:00:00",
        "created_at": {
            "date": "2019-02-15 01:55:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`PUT api/default_settings/{default_setting}`

`PATCH api/default_settings/{default_setting}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 設定名
    timer | integer |  required  | 始まるまでの時間'01:00:00'形式
    group_id | integer |  required  | この設定を適用するグループid
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    default_setting |  required  | 設定のid

<!-- END_108e89ba25f8435d33422f2e6276f453 -->

<!-- START_fe7a18e854551327301cd1f7609b1572 -->
## default_settings.destroy 一つのデフォルト設定を削除する

> Example request:

```bash
curl -X DELETE "http://localhost/api/default_settings/{default_setting}" 
```

```javascript
const url = new URL("http://localhost/api/default_settings/{default_setting}");

    let params = {
            "default_setting": "QwPr8Z4xCEb9bJ2g",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (204):

```json
[]
```

### HTTP Request
`DELETE api/default_settings/{default_setting}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    default_setting |  required  | 設定のid

<!-- END_fe7a18e854551327301cd1f7609b1572 -->

<!-- START_77bc4cbc7d1ccbd254470fad1c1498a2 -->
## sessions.index 管理しているセッション一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions" 
```

```javascript
const url = new URL("http://localhost/api/sessions");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "ad",
            "shop_id": 944,
            "budget": 23668,
            "actual": 47168,
            "start_time": "1993-12-24 07:04:42",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 8,
                    "unique_id": "ARLqBBkr3n",
                    "username": "笹田 真綾",
                    "email": "ewatanabe@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 29,
                    "unique_id": "HCbJagEyeN",
                    "username": "笹田 裕樹",
                    "email": "nidaka@example.net",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 33,
                    "unique_id": "RwowfUIUrM",
                    "username": "村山 知実",
                    "email": "akemi26@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 44,
                    "unique_id": "pjffE6tDuR",
                    "username": "工藤 裕美子",
                    "email": "yamada.nanami@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 2,
            "name": "itaque",
            "shop_id": 639,
            "budget": 7106,
            "actual": 30917,
            "start_time": "2016-11-04 03:35:53",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 8,
                    "unique_id": "ARLqBBkr3n",
                    "username": "笹田 真綾",
                    "email": "ewatanabe@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "eiWBHglgqD",
                    "username": "鈴木 晃",
                    "email": "kato.youichi@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 29,
                    "unique_id": "HCbJagEyeN",
                    "username": "笹田 裕樹",
                    "email": "nidaka@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "unique_id": "FLTs7cYI2Y",
                    "username": "小泉 くみ子",
                    "email": "yumiko03@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 3,
            "name": "sapiente",
            "shop_id": 287,
            "budget": 22710,
            "actual": 44125,
            "start_time": "1983-09-28 05:39:03",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 17,
                    "unique_id": "PrxJp86ipe",
                    "username": "井上 裕樹",
                    "email": "tomoya.suzuki@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "eiWBHglgqD",
                    "username": "鈴木 晃",
                    "email": "kato.youichi@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 33,
                    "unique_id": "RwowfUIUrM",
                    "username": "村山 知実",
                    "email": "akemi26@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 37,
                    "unique_id": "xLb3wWTRqf",
                    "username": "加納 太郎",
                    "email": "nkanou@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 4,
            "name": "ut",
            "shop_id": 110,
            "budget": 18458,
            "actual": 39387,
            "start_time": "1974-06-12 09:02:39",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 8,
                    "unique_id": "ARLqBBkr3n",
                    "username": "笹田 真綾",
                    "email": "ewatanabe@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "eiWBHglgqD",
                    "username": "鈴木 晃",
                    "email": "kato.youichi@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 33,
                    "unique_id": "RwowfUIUrM",
                    "username": "村山 知実",
                    "email": "akemi26@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 37,
                    "unique_id": "xLb3wWTRqf",
                    "username": "加納 太郎",
                    "email": "nkanou@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/sessions`


<!-- END_77bc4cbc7d1ccbd254470fad1c1498a2 -->

<!-- START_b0309e45a2af0a1e9b599219dbce6d98 -->
## sessions.store セッションを作成

> Example request:

```bash
curl -X POST "http://localhost/api/sessions"     -d "name"="063kqYDNRKYCr5xA" \
    -d "shop_id"="6" \
    -d "budget"="9" \
    -d "actual"="14" \
    -d "start_time"="vNluTqKVLMJHTj4T" \
    -d "end_time"="Ht4QxRhil15qPSTL" 
```

```javascript
const url = new URL("http://localhost/api/sessions");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "063kqYDNRKYCr5xA",
    "shop_id": "6",
    "budget": "9",
    "actual": "14",
    "start_time": "vNluTqKVLMJHTj4T",
    "end_time": "Ht4QxRhil15qPSTL",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (201):

```json
{
    "data": {
        "id": 201,
        "name": "newSessionIpIas",
        "shop_id": 34,
        "budget": 3000,
        "actual": 3000,
        "start_time": null,
        "end_time": null,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [],
        "created_at": {
            "date": "2019-02-15 01:55:52.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:52.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`POST api/sessions`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 新規セッションの名前
    shop_id | integer |  optional  | ショップのID(ぐるなび？)
    budget | integer |  optional  | 予算額
    actual | integer |  optional  | 実際の金額
    start_time | datetime |  optional  | セッションの開始時刻
    end_time | datetime |  optional  | セッションの終了時刻

<!-- END_b0309e45a2af0a1e9b599219dbce6d98 -->

<!-- START_de7ab2ee5e93bb1ef0dadb0e40c75c35 -->
## sessions.show 一つのセッションの詳細

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions/{session}" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "qfkDfsZDA66nDrDj",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 201,
        "name": "newSessionIpIas",
        "shop_id": 34,
        "budget": 3000,
        "actual": 3000,
        "start_time": null,
        "end_time": null,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [],
        "created_at": {
            "date": "2019-02-15 01:55:52.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:52.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`GET api/sessions/{session}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    session |  required  | セッションid

<!-- END_de7ab2ee5e93bb1ef0dadb0e40c75c35 -->

<!-- START_01d1a457f56b8ac4134ff996daf9e9ab -->
## sessions.update セッション情報を更新

> Example request:

```bash
curl -X PUT "http://localhost/api/sessions/{session}"     -d "name"="rrLfmLdAo4xN4XeJ" \
    -d "shop_id"="19" \
    -d "budget"="4" \
    -d "actual"="2" \
    -d "start_time"="Ez2CafnfC8fGBqRd" \
    -d "end_time"="mkanIllsI2JfeHum" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "hZz65tLwEMqFHawu",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "rrLfmLdAo4xN4XeJ",
    "shop_id": "19",
    "budget": "4",
    "actual": "2",
    "start_time": "Ez2CafnfC8fGBqRd",
    "end_time": "mkanIllsI2JfeHum",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "newUpdateSessionJNLzI",
        "shop_id": 34,
        "budget": 5000,
        "actual": 3000,
        "start_time": null,
        "end_time": null,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [
            {
                "id": 8,
                "unique_id": "ARLqBBkr3n",
                "username": "笹田 真綾",
                "email": "ewatanabe@example.com",
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 29,
                "unique_id": "HCbJagEyeN",
                "username": "笹田 裕樹",
                "email": "nidaka@example.net",
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 33,
                "unique_id": "RwowfUIUrM",
                "username": "村山 知実",
                "email": "akemi26@example.com",
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 44,
                "unique_id": "pjffE6tDuR",
                "username": "工藤 裕美子",
                "email": "yamada.nanami@example.org",
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-15 01:55:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:52.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`PUT api/sessions/{session}`

`PATCH api/sessions/{session}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 新規セッションの名前
    shop_id | integer |  optional  | ショップのID(ぐるなび？)
    budget | integer |  optional  | 予算額
    actual | integer |  optional  | 実際の金額
    start_time | datetime |  optional  | セッションの開始時刻
    end_time | datetime |  optional  | セッションの終了時刻
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    session |  required  | セッションid

<!-- END_01d1a457f56b8ac4134ff996daf9e9ab -->

<!-- START_4fd1093757d2141b14b2cd8666e3e281 -->
## sessions.destory セッションを削除

> Example request:

```bash
curl -X DELETE "http://localhost/api/sessions/{session}" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "zuwVeQiWkPlj7us9",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (204):

```json
[]
```

### HTTP Request
`DELETE api/sessions/{session}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    session |  required  | セッションid

<!-- END_4fd1093757d2141b14b2cd8666e3e281 -->

<!-- START_b2c8f3f41fac647952bc19177cbb6dd9 -->
## sessions.users.index あるセッションのユーザー一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions/{session}/users" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "KRnVsB9zAMebqwLR",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 8,
            "unique_id": "ARLqBBkr3n",
            "username": "笹田 真綾",
            "email": "ewatanabe@example.com",
            "join_status": "wait",
            "paid": null,
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 29,
            "unique_id": "HCbJagEyeN",
            "username": "笹田 裕樹",
            "email": "nidaka@example.net",
            "join_status": "allow",
            "paid": 1,
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 33,
            "unique_id": "RwowfUIUrM",
            "username": "村山 知実",
            "email": "akemi26@example.com",
            "join_status": "wait",
            "paid": null,
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 44,
            "unique_id": "pjffE6tDuR",
            "username": "工藤 裕美子",
            "email": "yamada.nanami@example.org",
            "join_status": "allow",
            "paid": 0,
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/sessions/{session}/users`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    session |  required  | セッションid

<!-- END_b2c8f3f41fac647952bc19177cbb6dd9 -->

<!-- START_5daba3574b7419977eed93c2d276b285 -->
## sessions.users.store セッションにユーザーを追加する

> Example request:

```bash
curl -X POST "http://localhost/api/sessions/{session}/users"     -d "user_id"="L9ZjiJX7tUHEGplA" \
    -d "join_status"="CXksNXmxLnfsnDFt" \
    -d "paid"="4" \
    -d "plus_minus"="15" \
    -d "ratio"="qUqz38e27k8M4nTf" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "zzcPKRUlngV1gZig",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "L9ZjiJX7tUHEGplA",
    "join_status": "CXksNXmxLnfsnDFt",
    "paid": "4",
    "plus_minus": "15",
    "ratio": "qUqz38e27k8M4nTf",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 37,
            "unique_id": "xLb3wWTRqf",
            "username": "加納 太郎",
            "email": "nkanou@example.org",
            "join_status": "allow",
            "paid": 0,
            "plus_minus": 0,
            "ratio": null,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```
> Example response (403):

```json
{
    "message": "This action is unauthorized.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException",
    "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
    "line": 202,
    "trace": [
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
            "line": 176,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/Exceptions\/Handler.php",
            "line": 49,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 83,
            "function": "render",
            "class": "App\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 32,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/Middleware\/Authorize.php",
            "line": 45,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Auth\\Middleware\\Authorize",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/Http\/Middleware\/JWT.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "App\\Http\\Middleware\\JWT",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 684,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 659,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 614,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/Http\/Middleware\/RecordResponse.php",
            "line": 24,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "App\\Http\\Middleware\\RecordResponse",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Testing\/Concerns\/MakesHttpRequests.php",
            "line": 345,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Testing\/Concerns\/MakesHttpRequests.php",
            "line": 317,
            "function": "call",
            "class": "Illuminate\\Foundation\\Testing\\TestCase",
            "type": "->"
        },
        {
            "file": "\/var\/www\/tests\/TestCase.php",
            "line": 27,
            "function": "json",
            "class": "Illuminate\\Foundation\\Testing\\TestCase",
            "type": "->"
        },
        {
            "file": "\/var\/www\/tests\/TestCase.php",
            "line": 21,
            "function": "api",
            "class": "Tests\\TestCase",
            "type": "->"
        },
        {
            "file": "\/var\/www\/tests\/Unit\/SessionUserTest.php",
            "line": 68,
            "function": "apiAs",
            "class": "Tests\\TestCase",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/phpunit\/phpunit\/src\/Framework\/TestCase.php",
            "line": 1153,
            "function": "testShow",
            "class": "Tests\\Unit\\SessionUserTest",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/phpunit\/phpunit\/src\/Framework\/TestCase.php",
            "line": 842,
            "function": "runTest",
            "class": "PHPUnit\\Framework\\TestCase",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/phpunit\/phpunit\/src\/Framework\/TestResult.php",
            "line": 675,
            "function": "runBare",
            "class": "PHPUnit\\Framework\\TestCase",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/phpunit\/phpunit\/src\/Framework\/TestCase.php",
            "line": 796,
            "function": "run",
            "class": "PHPUnit\\Framework\\TestResult",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/phpunit\/phpunit\/src\/Framework\/TestSuite.php",
            "line": 746,
            "function": "run",
            "class": "PHPUnit\\Framework\\TestCase",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/phpunit\/phpunit\/src\/Framework\/TestSuite.php",
            "line": 746,
            "function": "run",
            "class": "PHPUnit\\Framework\\TestSuite",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/phpunit\/phpunit\/src\/TextUI\/TestRunner.php",
            "line": 629,
            "function": "run",
            "class": "PHPUnit\\Framework\\TestSuite",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/phpunit\/phpunit\/src\/TextUI\/Command.php",
            "line": 206,
            "function": "doRun",
            "class": "PHPUnit\\TextUI\\TestRunner",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/phpunit\/phpunit\/src\/TextUI\/Command.php",
            "line": 162,
            "function": "run",
            "class": "PHPUnit\\TextUI\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/phpunit\/phpunit\/phpunit",
            "line": 61,
            "function": "main",
            "class": "PHPUnit\\TextUI\\Command",
            "type": "::"
        }
    ]
}
```

### HTTP Request
`POST api/sessions/{session}/users`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | string |  required  | 追加するユーザーのID
    join_status | required |  optional  | integer 参加状況のステータス
    paid | integer |  optional  | 支払いしたか
    plus_minus | integer |  optional  | 加減算
    ratio | datetime |  optional  | 割合（加減算と重複しないほうが良いでしょう）
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    session |  required  | セッションid

<!-- END_5daba3574b7419977eed93c2d276b285 -->

<!-- START_f2c83404c04fc70752a6cac97faeaf89 -->
## sessions.users.show セッションの中の一人のユーザーの詳細を得る（属性とか見たりするでしょう）

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions/{session}/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "6kKNjxvwP8VHv85l",
            "user": "cU7wFXqryoCOmRIX",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 37,
        "unique_id": "xLb3wWTRqf",
        "username": "加納 太郎",
        "email": "nkanou@example.org",
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 0,
        "ratio": null,
        "created_at": {
            "date": "2019-02-15 01:55:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`GET api/sessions/{session}/users/{user}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    session |  required  | セッションid
    user |  required  | セッションに属するユーザーのid

<!-- END_f2c83404c04fc70752a6cac97faeaf89 -->

<!-- START_1156464718907736210a026360f1182b -->
## sessions.users.update セッションの中のユーザーのステータスなどを更新する

> Example request:

```bash
curl -X PUT "http://localhost/api/sessions/{session}/users/{user}"     -d "user_id"="2fwedar1V9OpB1JN" \
    -d "join_status"="aX6xq1pZDnCvIrXy" \
    -d "paid"="9" \
    -d "plus_minus"="7" \
    -d "ratio"="WmfBOnR8fDqA5Nie" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "5xoe0qt5M1Jd8eyi",
            "user": "EdSwR7rhTZDVTjuD",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "2fwedar1V9OpB1JN",
    "join_status": "aX6xq1pZDnCvIrXy",
    "paid": "9",
    "plus_minus": "7",
    "ratio": "WmfBOnR8fDqA5Nie",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 35,
        "unique_id": "6xhyhUCrzo",
        "username": "西之園 陽一",
        "email": "dyamamoto@example.com",
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 10000,
        "ratio": null,
        "created_at": {
            "date": "2019-02-15 01:50:20.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:50:20.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`PUT api/sessions/{session}/users/{user}`

`PATCH api/sessions/{session}/users/{user}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | string |  required  | 追加するユーザーのID
    join_status | required |  optional  | integer 参加状況のステータス
    paid | integer |  optional  | 支払いしたか
    plus_minus | integer |  optional  | 加減算
    ratio | datetime |  optional  | 割合（加減算と重複しないほうが良いでしょう）
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    session |  required  | セッションid
    user |  required  | セッションに属するユーザーのid

<!-- END_1156464718907736210a026360f1182b -->

<!-- START_eaedfe94c6aa4eb87de54290a553fe2e -->
## sessions.users.destory セッションからユーザーを削除する

> Example request:

```bash
curl -X DELETE "http://localhost/api/sessions/{session}/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "MR74HjxaycJalFDo",
            "user": "6tC3ouCueh5o63Ww",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (204):

```json
[]
```

### HTTP Request
`DELETE api/sessions/{session}/users/{user}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    session |  required  | セッションid
    user |  required  | セッションに属するユーザーのid

<!-- END_eaedfe94c6aa4eb87de54290a553fe2e -->

<!-- START_03c20e5ac43ca78ea06bde43541c6522 -->
## attributes.index 自分が管理している属性一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/attributes" 
```

```javascript
const url = new URL("http://localhost/api/attributes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "praesentium",
            "plus_minus": 2855,
            "ratio": 1,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 2,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "dolor",
            "plus_minus": -1770,
            "ratio": 1,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 3,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "pariatur",
            "plus_minus": 1604,
            "ratio": 1,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 4,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "quia",
            "plus_minus": 568,
            "ratio": 1,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 5,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "nulla",
            "plus_minus": 862,
            "ratio": 0,
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/attributes`


<!-- END_03c20e5ac43ca78ea06bde43541c6522 -->

<!-- START_abc4770376dd728225ce9843bc74360e -->
## attributes.store 属性追加

> Example request:

```bash
curl -X POST "http://localhost/api/attributes"     -d "name"="dPaSX4mgW9U8nOfB" \
    -d "plus_minus"="19" \
    -d "ratio"="1692125.69" 
```

```javascript
const url = new URL("http://localhost/api/attributes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "dPaSX4mgW9U8nOfB",
    "plus_minus": "19",
    "ratio": "1692125.69",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (201):

```json
{
    "data": {
        "id": 252,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "attributenameMRwjD",
        "plus_minus": null,
        "ratio": null,
        "created_at": {
            "date": "2019-02-15 01:55:50.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:50.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```
> Example response (409):

```json
{
    "error": "同じ名前は使用できません"
}
```

### HTTP Request
`POST api/attributes`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 属性名。必須
    plus_minus | integer |  optional  | 加減算
    ratio | float |  optional  | 割合。加減算と割合はどちらかのみの設定にしたほうがいいような気がする

<!-- END_abc4770376dd728225ce9843bc74360e -->

<!-- START_85b732dd345201c742119d9c4b34ca8e -->
## attributes.show 属性の一つの詳細を得る

> Example request:

```bash
curl -X GET -G "http://localhost/api/attributes/{attribute}" 
```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "qjZBIQM2tR84K6yt",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 5,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "nulla",
        "plus_minus": 862,
        "ratio": 0,
        "created_at": {
            "date": "2019-02-15 01:55:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`GET api/attributes/{attribute}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    attribute |  required  | 属性id

<!-- END_85b732dd345201c742119d9c4b34ca8e -->

<!-- START_5bed01b4fc768cd179c6ed6f42562e64 -->
## attributes.update 対象の属性をアップデート

> Example request:

```bash
curl -X PUT "http://localhost/api/attributes/{attribute}"     -d "name"="kgUHzTUC7WzNjtRe" \
    -d "plus_minus"="11" \
    -d "ratio"="665.6746332" 
```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "IrsbEPc5cXSyhRq8",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "kgUHzTUC7WzNjtRe",
    "plus_minus": "11",
    "ratio": "665.6746332",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 5,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "updatebK7vZ",
        "plus_minus": null,
        "ratio": null,
        "created_at": {
            "date": "2019-02-15 01:55:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:50.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`PUT api/attributes/{attribute}`

`PATCH api/attributes/{attribute}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 属性名。必須
    plus_minus | integer |  optional  | 加減算
    ratio | float |  optional  | 割合。加減算と割合はどちらかのみの設定にしたほうがいいような気がする
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    attribute |  required  | 属性id

<!-- END_5bed01b4fc768cd179c6ed6f42562e64 -->

<!-- START_03afcd8c669e225fdb1d3490f7759c85 -->
## attributes.destory 属性の削除

> Example request:

```bash
curl -X DELETE "http://localhost/api/attributes/{attribute}" 
```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "HjwjBsKDCwV5gVJN",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (204):

```json
[]
```

### HTTP Request
`DELETE api/attributes/{attribute}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    attribute |  required  | 属性id

<!-- END_03afcd8c669e225fdb1d3490f7759c85 -->

<!-- START_3a84a6accee6980b8f6727dfd0c9301a -->
## guests.sessions.index ゲストとして参加しているセッション一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/guest/sessions" 
```

```javascript
const url = new URL("http://localhost/api/guest/sessions");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 31,
            "name": "aperiam",
            "shop_id": 262,
            "budget": 15363,
            "actual": 15505,
            "start_time": "1976-08-07 11:44:05",
            "end_time": null,
            "manager": {
                "id": 8,
                "unique_id": "ARLqBBkr3n",
                "username": "笹田 真綾",
                "email": "ewatanabe@example.com",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:32.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 26,
                    "unique_id": "EkPxZIPg6u",
                    "username": "木村 あすか",
                    "email": "nharada@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 35,
                    "unique_id": "skVEGJ641B",
                    "username": "田辺 直樹",
                    "email": "ryohei.kiriyama@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 43,
                    "unique_id": "BpKzkE9PHV",
                    "username": "田辺 くみ子",
                    "email": "sasaki.hideki@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 44,
                    "unique_id": "pjffE6tDuR",
                    "username": "工藤 裕美子",
                    "email": "yamada.nanami@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 39,
            "name": "nam",
            "shop_id": 930,
            "budget": 19229,
            "actual": 28516,
            "start_time": "1974-03-07 14:04:56",
            "end_time": null,
            "manager": {
                "id": 10,
                "unique_id": "TKjl5yVWMo",
                "username": "田辺 七夏",
                "email": "yamagishi.kana@example.org",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:32.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 11,
                    "unique_id": "B2ujAlwT77",
                    "username": "吉本 くみ子",
                    "email": "akira30@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 16,
                    "unique_id": "yBfQ6ua3cJ",
                    "username": "坂本 京助",
                    "email": "kiriyama.takuma@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 18,
                    "unique_id": "02jF5qjkIj",
                    "username": "若松 里佳",
                    "email": "sakamoto.shuhei@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 34,
                    "unique_id": "9a8H64CWjb",
                    "username": "桐山 翼",
                    "email": "bkiriyama@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 40,
            "name": "ut",
            "shop_id": 155,
            "budget": 29419,
            "actual": 39129,
            "start_time": "1999-02-17 15:33:19",
            "end_time": null,
            "manager": {
                "id": 10,
                "unique_id": "TKjl5yVWMo",
                "username": "田辺 七夏",
                "email": "yamagishi.kana@example.org",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:32.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 11,
                    "unique_id": "B2ujAlwT77",
                    "username": "吉本 くみ子",
                    "email": "akira30@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "eiWBHglgqD",
                    "username": "鈴木 晃",
                    "email": "kato.youichi@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 32,
                    "unique_id": "eNrBjQ5Dqf",
                    "username": "青田 桃子",
                    "email": "uno.yasuhiro@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 49,
                    "unique_id": "fhTkckZ5Rd",
                    "username": "斉藤 明美",
                    "email": "uno.taichi@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 146,
            "name": "provident",
            "shop_id": 279,
            "budget": 27267,
            "actual": 14955,
            "start_time": "2007-05-19 12:59:11",
            "end_time": null,
            "manager": {
                "id": 37,
                "unique_id": "xLb3wWTRqf",
                "username": "加納 太郎",
                "email": "nkanou@example.org",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:32.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 23,
                    "unique_id": "YLcc6uy0kw",
                    "username": "原田 美加子",
                    "email": "kaori04@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 31,
                    "unique_id": "r5czpeKnUj",
                    "username": "中津川 桃子",
                    "email": "miki68@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 49,
                    "unique_id": "fhTkckZ5Rd",
                    "username": "斉藤 明美",
                    "email": "uno.taichi@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 148,
            "name": "molestiae",
            "shop_id": 234,
            "budget": 1313,
            "actual": 9031,
            "start_time": "2007-01-25 22:37:10",
            "end_time": null,
            "manager": {
                "id": 37,
                "unique_id": "xLb3wWTRqf",
                "username": "加納 太郎",
                "email": "nkanou@example.org",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:32.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 44,
                    "unique_id": "pjffE6tDuR",
                    "username": "工藤 裕美子",
                    "email": "yamada.nanami@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 45,
                    "unique_id": "rqNQdDJmsE",
                    "username": "西之園 治",
                    "email": "ksuzuki@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 50,
                    "unique_id": "hHQcqwbqs0",
                    "username": "加納 太一",
                    "email": "saito.tsubasa@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 161,
            "name": "et",
            "shop_id": 314,
            "budget": 9949,
            "actual": 43009,
            "start_time": "1981-05-14 22:23:12",
            "end_time": null,
            "manager": {
                "id": 41,
                "unique_id": "6r7CdSPmT4",
                "username": "佐藤 結衣",
                "email": "kenichi.nakajima@example.com",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:32.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 3,
                    "unique_id": "uGDiItPKJW",
                    "username": "伊藤 翔太",
                    "email": "kato.chiyo@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 5,
                    "unique_id": "049uBphK51",
                    "username": "伊藤 翔太",
                    "email": "shuhei10@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 37,
                    "unique_id": "xLb3wWTRqf",
                    "username": "加納 太郎",
                    "email": "nkanou@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:29.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:29.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 170,
            "name": "eos",
            "shop_id": 433,
            "budget": 13197,
            "actual": 49495,
            "start_time": "1987-05-21 21:01:16",
            "end_time": null,
            "manager": {
                "id": 43,
                "unique_id": "BpKzkE9PHV",
                "username": "田辺 くみ子",
                "email": "sasaki.hideki@example.net",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:32.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 5,
                    "unique_id": "049uBphK51",
                    "username": "伊藤 翔太",
                    "email": "shuhei10@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 22,
                    "unique_id": "geyXLWVgbY",
                    "username": "加藤 涼平",
                    "email": "miyazawa.hiroshi@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 32,
                    "unique_id": "eNrBjQ5Dqf",
                    "username": "青田 桃子",
                    "email": "uno.yasuhiro@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 46,
                    "unique_id": "wPGBH3N5Rg",
                    "username": "伊藤 直子",
                    "email": "owakamatsu@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 172,
            "name": "dolorum",
            "shop_id": 230,
            "budget": 11234,
            "actual": 5923,
            "start_time": "2005-07-05 16:25:38",
            "end_time": null,
            "manager": {
                "id": 43,
                "unique_id": "BpKzkE9PHV",
                "username": "田辺 くみ子",
                "email": "sasaki.hideki@example.net",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:32.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 20,
                    "unique_id": "HHx88bnRgz",
                    "username": "山口 七夏",
                    "email": "hideki12@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 22,
                    "unique_id": "geyXLWVgbY",
                    "username": "加藤 涼平",
                    "email": "miyazawa.hiroshi@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 36,
                    "unique_id": "mGNPrMxizy",
                    "username": "山本 裕樹",
                    "email": "lfujimoto@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 46,
                    "unique_id": "wPGBH3N5Rg",
                    "username": "伊藤 直子",
                    "email": "owakamatsu@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 200,
            "name": "amet",
            "shop_id": 744,
            "budget": 10805,
            "actual": 48254,
            "start_time": "2006-02-17 15:11:25",
            "end_time": null,
            "manager": {
                "id": 50,
                "unique_id": "hHQcqwbqs0",
                "username": "加納 太一",
                "email": "saito.tsubasa@example.org",
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:32.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 4,
                    "unique_id": "EdWnTphTK9",
                    "username": "若松 稔",
                    "email": "takuma.nishinosono@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 5,
                    "unique_id": "049uBphK51",
                    "username": "伊藤 翔太",
                    "email": "shuhei10@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "eiWBHglgqD",
                    "username": "鈴木 晃",
                    "email": "kato.youichi@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 35,
                    "unique_id": "skVEGJ641B",
                    "username": "田辺 直樹",
                    "email": "ryohei.kiriyama@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 49,
                    "unique_id": "fhTkckZ5Rd",
                    "username": "斉藤 明美",
                    "email": "uno.taichi@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-15 01:55:15.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/guest/sessions`


<!-- END_3a84a6accee6980b8f6727dfd0c9301a -->

<!-- START_f002f7656ea051619cc8b112ba27bdbd -->
## guests.sessions.show ゲストとして参加しているセッションの一つの詳細

> Example request:

```bash
curl -X GET -G "http://localhost/api/guest/sessions/{session}" 
```

```javascript
const url = new URL("http://localhost/api/guest/sessions/{session}");

    let params = {
            "session": "QRUwT4ZhG9ow71lc",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 200,
        "name": "amet",
        "shop_id": 744,
        "budget": 10805,
        "actual": 48254,
        "start_time": "2006-02-17 15:11:25",
        "end_time": null,
        "manager": {
            "id": 50,
            "unique_id": "hHQcqwbqs0",
            "username": "加納 太一",
            "email": "saito.tsubasa@example.org",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [
            {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 4,
                "unique_id": "EdWnTphTK9",
                "username": "若松 稔",
                "email": "takuma.nishinosono@example.net",
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 5,
                "unique_id": "049uBphK51",
                "username": "伊藤 翔太",
                "email": "shuhei10@example.net",
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 21,
                "unique_id": "eiWBHglgqD",
                "username": "鈴木 晃",
                "email": "kato.youichi@example.org",
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 35,
                "unique_id": "skVEGJ641B",
                "username": "田辺 直樹",
                "email": "ryohei.kiriyama@example.org",
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 49,
                "unique_id": "fhTkckZ5Rd",
                "username": "斉藤 明美",
                "email": "uno.taichi@example.org",
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-15 01:55:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-15 01:55:32.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:32.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`GET api/guest/sessions/{session}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    session |  required  | セッションid

<!-- END_f002f7656ea051619cc8b112ba27bdbd -->

<!-- START_083f8e6e87f50a46d0cc30956e5b0812 -->
## profiles.update 自分の情報を更新

> Example request:

```bash
curl -X PUT "http://localhost/api/profile/update"     -d "unique_id"="BvA3gtNbVSKnB7P1" \
    -d "username"="pnNvu9l0ZyRC6htK" \
    -d "password"="ers0U09BHn9xA0Ge" \
    -d "unique_id_search_flag"="1" \
    -d "username_search_flag"="1" 
```

```javascript
const url = new URL("http://localhost/api/profile/update");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "unique_id": "BvA3gtNbVSKnB7P1",
    "username": "pnNvu9l0ZyRC6htK",
    "password": "ers0U09BHn9xA0Ge",
    "unique_id_search_flag": "1",
    "username_search_flag": "1",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 2,
        "unique_id": "DDDDDDDD",
        "username": "AAAAAAAAAAA",
        "email": "new@new.com",
        "created_at": {
            "date": "2019-02-15 01:55:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:52.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`PUT api/profile/update`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    unique_id | string |  required  | 
    username | string |  required  | 
    password | string |  required  | 
    unique_id_search_flag | boolean |  required  | 
    username_search_flag | boolean |  required  | 

<!-- END_083f8e6e87f50a46d0cc30956e5b0812 -->

<!-- START_3ebc59d382c61f686685e2fdb4c0de18 -->
## search.can_add_friend_users 友達追加可能なユーザー一覧を返す

> Example request:

```bash
curl -X GET -G "http://localhost/api/search/can_add_friend_users" 
```

```javascript
const url = new URL("http://localhost/api/search/can_add_friend_users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 2,
            "unique_id": "DDDDDDDD",
            "username": "AAAAAAAAAAA",
            "email": "new@new.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:52.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 3,
            "unique_id": "uGDiItPKJW",
            "username": "伊藤 翔太",
            "email": "kato.chiyo@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 4,
            "unique_id": "EdWnTphTK9",
            "username": "若松 稔",
            "email": "takuma.nishinosono@example.net",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 5,
            "unique_id": "049uBphK51",
            "username": "伊藤 翔太",
            "email": "shuhei10@example.net",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 6,
            "unique_id": "XiymXYSmTj",
            "username": "喜嶋 あすか",
            "email": "suzuki.kenichi@example.net",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 7,
            "unique_id": "ODOq1sX1Mh",
            "username": "杉山 千代",
            "email": "ogaki.sayuri@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 9,
            "unique_id": "CS9DpDM2qL",
            "username": "高橋 零",
            "email": "ztsuda@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 10,
            "unique_id": "TKjl5yVWMo",
            "username": "田辺 七夏",
            "email": "yamagishi.kana@example.org",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 11,
            "unique_id": "B2ujAlwT77",
            "username": "吉本 くみ子",
            "email": "akira30@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 12,
            "unique_id": "DXNI4j0uHh",
            "username": "山田 翔太",
            "email": "rei74@example.org",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 13,
            "unique_id": "Qfni0x9pip",
            "username": "津田 さゆり",
            "email": "atsushi33@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 14,
            "unique_id": "pndhxXfjjn",
            "username": "田辺 治",
            "email": "rei67@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 15,
            "unique_id": "171yYbepJL",
            "username": "加藤 明美",
            "email": "koizumi.kumiko@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 16,
            "unique_id": "yBfQ6ua3cJ",
            "username": "坂本 京助",
            "email": "kiriyama.takuma@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 18,
            "unique_id": "02jF5qjkIj",
            "username": "若松 里佳",
            "email": "sakamoto.shuhei@example.net",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 20,
            "unique_id": "HHx88bnRgz",
            "username": "山口 七夏",
            "email": "hideki12@example.net",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 22,
            "unique_id": "geyXLWVgbY",
            "username": "加藤 涼平",
            "email": "miyazawa.hiroshi@example.org",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 23,
            "unique_id": "YLcc6uy0kw",
            "username": "原田 美加子",
            "email": "kaori04@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 27,
            "unique_id": "ORQuvG53FE",
            "username": "坂本 太一",
            "email": "rei49@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 28,
            "unique_id": "lBDsrXSdBw",
            "username": "小泉 結衣",
            "email": "taichi.yamagishi@example.org",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 30,
            "unique_id": "4mL5eh8yS1",
            "username": "藤本 裕美子",
            "email": "yasuhiro40@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 31,
            "unique_id": "r5czpeKnUj",
            "username": "中津川 桃子",
            "email": "miki68@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 32,
            "unique_id": "eNrBjQ5Dqf",
            "username": "青田 桃子",
            "email": "uno.yasuhiro@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 34,
            "unique_id": "9a8H64CWjb",
            "username": "桐山 翼",
            "email": "bkiriyama@example.org",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 35,
            "unique_id": "skVEGJ641B",
            "username": "田辺 直樹",
            "email": "ryohei.kiriyama@example.org",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 36,
            "unique_id": "mGNPrMxizy",
            "username": "山本 裕樹",
            "email": "lfujimoto@example.org",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 40,
            "unique_id": "IfdzbUAREU",
            "username": "近藤 幹",
            "email": "tsubasa78@example.org",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 41,
            "unique_id": "6r7CdSPmT4",
            "username": "佐藤 結衣",
            "email": "kenichi.nakajima@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 42,
            "unique_id": "wqPOVOIgO9",
            "username": "加納 知実",
            "email": "xkondo@example.org",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 43,
            "unique_id": "BpKzkE9PHV",
            "username": "田辺 くみ子",
            "email": "sasaki.hideki@example.net",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 44,
            "unique_id": "pjffE6tDuR",
            "username": "工藤 裕美子",
            "email": "yamada.nanami@example.org",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 46,
            "unique_id": "wPGBH3N5Rg",
            "username": "伊藤 直子",
            "email": "owakamatsu@example.org",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 48,
            "unique_id": "aTh93kkgL7",
            "username": "松本 美加子",
            "email": "kana.idaka@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 49,
            "unique_id": "fhTkckZ5Rd",
            "username": "斉藤 明美",
            "email": "uno.taichi@example.org",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 50,
            "unique_id": "hHQcqwbqs0",
            "username": "加納 太一",
            "email": "saito.tsubasa@example.org",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 53,
            "unique_id": "LJvKyNL8Z1",
            "username": "testuser3",
            "email": "nofriend@nofriend.com",
            "created_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 55,
            "unique_id": "1oelEOBOxa",
            "username": "aaaa",
            "email": "0HEUl@new.com",
            "created_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 56,
            "unique_id": "PN6VkIFgjJ",
            "username": "aaaa",
            "email": "vsd3lj@new.com",
            "created_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 57,
            "unique_id": "9yOX6f0JP5",
            "username": "aaaa",
            "email": "2NxA9hs@new.com",
            "created_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 58,
            "unique_id": "FSOaXlGhv4",
            "username": "aaaa",
            "email": "SBbb7NS1@new.com",
            "created_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/search/can_add_friend_users`


<!-- END_3ebc59d382c61f686685e2fdb4c0de18 -->

<!-- START_92c75eaf183c4c4ed4e57e5e74dd4ca1 -->
## search.forward_by_username ユーザーネームで検索し、複数を返す(前方一致)

> Example request:

```bash
curl -X POST "http://localhost/api/search/forward_by_username"     -d "username"="Cp8NgvVXOhe0DVn3" 
```

```javascript
const url = new URL("http://localhost/api/search/forward_by_username");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "username": "Cp8NgvVXOhe0DVn3",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`POST api/search/forward_by_username`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    username | string |  optional  | 

<!-- END_92c75eaf183c4c4ed4e57e5e74dd4ca1 -->

<!-- START_fad853426f5f43e6449f8d6b81b96ff4 -->
## search.perfect_by_unique_id ユニークidで検索し、あれば一件返す(完全一致)

> Example request:

```bash
curl -X POST "http://localhost/api/search/perfect_by_unique_id"     -d "unique_id"="BanQROS6XQ3qvKq5" 
```

```javascript
const url = new URL("http://localhost/api/search/perfect_by_unique_id");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "unique_id": "BanQROS6XQ3qvKq5",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "unique_id": "TESTTEST",
        "username": "テスト太郎",
        "email": "testuser@example.com",
        "created_at": {
            "date": "2019-02-15 01:55:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-15 01:55:32.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`POST api/search/perfect_by_unique_id`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    unique_id | string |  required  | 

<!-- END_fad853426f5f43e6449f8d6b81b96ff4 -->

<!-- START_60eb68889571321c607a42bd711a61b9 -->
## search.forward_by_unique_id ユニークidで検索し、あれば一件返す(前方一致)

> Example request:

```bash
curl -X POST "http://localhost/api/search/forward_by_unique_id"     -d "unique_id"="eclWZw3zEH50YQt1" 
```

```javascript
const url = new URL("http://localhost/api/search/forward_by_unique_id");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "unique_id": "eclWZw3zEH50YQt1",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 10,
            "unique_id": "TKjl5yVWMo",
            "username": "田辺 七夏",
            "email": "yamagishi.kana@example.org",
            "created_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-15 01:55:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`POST api/search/forward_by_unique_id`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    unique_id | string |  optional  | 

<!-- END_60eb68889571321c607a42bd711a61b9 -->


