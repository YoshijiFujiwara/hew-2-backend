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
curl -X POST "http://localhost/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d "email"="sEXPsuIL3JKSdsgJ" \
    -d "name"="yvUsrtSw5oMcWA6l" \
    -d "username"="AMES5ObseWFk4Xze" \
    -d "password"="QmJJXdESqYuiFnWV" 
```

```javascript
const url = new URL("http://localhost/api/auth/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

let body = JSON.stringify({
    "email": "sEXPsuIL3JKSdsgJ",
    "name": "yvUsrtSw5oMcWA6l",
    "username": "AMES5ObseWFk4Xze",
    "password": "QmJJXdESqYuiFnWV",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVnaXN0ZXIiLCJpYXQiOjE1NDk0NTM2NTAsImV4cCI6MTU0OTQ1NzI1MCwibmJmIjoxNTQ5NDUzNjUwLCJqdGkiOiJYZk5tYk1WWmhLY0gxMDVVIiwic3ViIjo3NCwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.xEJmTrhQK0ar6AtW3Os_uW9kInfRfMzkBkgfAefrAtY",
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
    name | string |  required  | 名前
    username | string |  required  | ユーザーネーム（表示される名前）
    password | string |  required  | パスワード

<!-- END_2e1c96dcffcfe7e0eb58d6408f1d619e -->

<!-- START_a925a8d22b3615f12fca79456d286859 -->
## email, password でログインし、JWTを得る

> Example request:

```bash
curl -X POST "http://localhost/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d "email"="oU4BTCVeOzMc0FMd" \
    -d "password"="Y2z9zXxTEbcgwz9J" 
```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

let body = JSON.stringify({
    "email": "oU4BTCVeOzMc0FMd",
    "password": "Y2z9zXxTEbcgwz9J",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NDk0NTM2NTAsImV4cCI6MTU0OTQ1NzI1MCwibmJmIjoxNTQ5NDUzNjUwLCJqdGkiOiJxdHpWUGQ2N2lUdnpURHJjIiwic3ViIjoxLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.rKUp2kl0fk_bzt9LjsCEmBF5b2FGC7EBvSzUolVv5OU",
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
curl -X POST "http://localhost/api/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/auth/logout");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
curl -X POST "http://localhost/api/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/auth/refresh");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVmcmVzaCIsImlhdCI6MTU0OTQ1MzY1MCwiZXhwIjoxNTQ5NDU3MjUwLCJuYmYiOjE1NDk0NTM2NTAsImp0aSI6ImNraXZGSTVCU3ZFRUNua2giLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.G75vMGURRQqrGmZvnm7RNiVnziGb31g9_PiaCAOP_eY",
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
curl -X POST "http://localhost/api/auth/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/auth/me");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
    "id": 1,
    "name": "テスト太郎",
    "username": "testuser",
    "email": "testuser@example.com",
    "email_verified_at": "2019-02-06 10:46:02",
    "created_at": "2019-02-06 10:46:04",
    "updated_at": "2019-02-06 10:46:19"
}
```

### HTTP Request
`POST api/auth/me`


<!-- END_a47210337df3b4ba0df697c115ba0c1e -->

<!-- START_7edc0e9974cb6ca47974c68a17d1938f -->
## friends.index 友達一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/friends" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/friends");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
            "id": 14,
            "name": "斉藤 太郎",
            "username": "asuka72",
            "email": "maaya86@example.org",
            "attribute_id": 4,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 15,
            "name": "杉山 太一",
            "username": "yosuke.yamamoto",
            "email": "dogaki@example.net",
            "attribute_id": 3,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 17,
            "name": "野村 里佳",
            "username": "nomura.taichi",
            "email": "fhamada@example.com",
            "attribute_id": 2,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 19,
            "name": "松本 千代",
            "username": "haruka.murayama",
            "email": "mhamada@example.net",
            "attribute_id": 2,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 23,
            "name": "井上 洋介",
            "username": "yuki.ogaki",
            "email": "yuta.yamaguchi@example.org",
            "attribute_id": 3,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 25,
            "name": "原田 太一",
            "username": "murayama.taro",
            "email": "ryohei50@example.com",
            "attribute_id": 3,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 26,
            "name": "渚 花子",
            "username": "ssasaki",
            "email": "wakamatsu.yoko@example.com",
            "attribute_id": 4,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 30,
            "name": "佐々木 さゆり",
            "username": "syamaguchi",
            "email": "yui.matsumoto@example.net",
            "attribute_id": 4,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 31,
            "name": "宇野 加奈",
            "username": "kimura.hiroshi",
            "email": "kimura.maaya@example.net",
            "attribute_id": 4,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 36,
            "name": "井上 和也",
            "username": "tsubasa67",
            "email": "mai.yamamoto@example.com",
            "attribute_id": 1,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 37,
            "name": "青田 充",
            "username": "ito.kana",
            "email": "akira02@example.org",
            "attribute_id": 1,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 38,
            "name": "津田 幹",
            "username": "takahashi.kaori",
            "email": "puno@example.com",
            "attribute_id": 1,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 45,
            "name": "加納 拓真",
            "username": "kimura.takuma",
            "email": "taichi48@example.org",
            "attribute_id": 2,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 48,
            "name": "村山 知実",
            "username": "nanami15",
            "email": "ito.hanako@example.net",
            "attribute_id": 5,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 49,
            "name": "井高 さゆり",
            "username": "maaya29",
            "email": "yamagishi.yosuke@example.net",
            "attribute_id": 5,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/friends`


<!-- END_7edc0e9974cb6ca47974c68a17d1938f -->

<!-- START_f05cf1deece1e8c35e1ec331331e3319 -->
## friends.store 友達申請する

> Example request:

```bash
curl -X POST "http://localhost/api/friends" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d "email"="u0HPi7ceNGH7qlc8" 
```

```javascript
const url = new URL("http://localhost/api/friends");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

let body = JSON.stringify({
    "email": "u0HPi7ceNGH7qlc8",
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
        "id": 2,
        "name": "大垣 美加子",
        "username": "cyamada",
        "email": "taro.kato@example.net",
        "created_at": {
            "date": "2019-01-13 09:36:18.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-01-13 09:36:18.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```
> Example response (409):

```json
{
    "error": "すでにフレンドです"
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
curl -X GET -G "http://localhost/api/friends/blocked" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/friends/blocked");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
[]
```

### HTTP Request
`GET api/friends/blocked`


<!-- END_b3cd0c5ef680836492350c2f2072c3a3 -->

<!-- START_d0f209202760e23f7254507b81d7dca5 -->
## friends.waitingFriends 申請した中で待っているユーザー一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/friends/waiting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/friends/waiting");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
[]
```

### HTTP Request
`GET api/friends/waiting`


<!-- END_d0f209202760e23f7254507b81d7dca5 -->

<!-- START_76eb010618732a67401c369843a126a8 -->
## friends.friendRequestUsers 申請してきてるユーザー

> Example request:

```bash
curl -X GET -G "http://localhost/api/friends/requested" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/friends/requested");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
[]
```

### HTTP Request
`GET api/friends/requested`


<!-- END_76eb010618732a67401c369843a126a8 -->

<!-- START_fbc14c6de0e1413d77c7983cac955138 -->
## friends.permit 友達申請を許可

> Example request:

```bash
curl -X POST "http://localhost/api/friends/permit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d "user_id"="12" 
```

```javascript
const url = new URL("http://localhost/api/friends/permit");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
[]
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
curl -X POST "http://localhost/api/friends/reject" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d "user_id"="1" 
```

```javascript
const url = new URL("http://localhost/api/friends/reject");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

let body = JSON.stringify({
    "user_id": "1",
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
[]
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
curl -X GET -G "http://localhost/api/friends/{friend}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/friends/{friend}");

    let params = {
            "friend": "L6L6w0kOtldnVYQx",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
        "id": 2,
        "name": "大垣 美加子",
        "username": "cyamada",
        "email": "taro.kato@example.net",
        "created_at": {
            "date": "2019-01-13 09:36:18.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-01-13 09:36:18.000000",
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
curl -X DELETE "http://localhost/api/friends/{friend}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/friends/{friend}");

    let params = {
            "friend": "DWuaq95rgGLPBdxX",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
{}
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
curl -X GET -G "http://localhost/api/groups" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/groups");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
                "name": "加藤 里佳",
                "username": "eaota",
                "email": "momoko48@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "eius",
            "users": [
                {
                    "id": 17,
                    "name": "野村 里佳",
                    "username": "nomura.taichi",
                    "email": "fhamada@example.com",
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 19,
                    "name": "松本 千代",
                    "username": "haruka.murayama",
                    "email": "mhamada@example.net",
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 30,
                    "name": "佐々木 さゆり",
                    "username": "syamaguchi",
                    "email": "yui.matsumoto@example.net",
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 36,
                    "name": "井上 和也",
                    "username": "tsubasa67",
                    "email": "mai.yamamoto@example.com",
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 2,
            "manager": {
                "id": 1,
                "name": "加藤 里佳",
                "username": "eaota",
                "email": "momoko48@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "tempore",
            "users": [
                {
                    "id": 14,
                    "name": "斉藤 太郎",
                    "username": "asuka72",
                    "email": "maaya86@example.org",
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 25,
                    "name": "原田 太一",
                    "username": "murayama.taro",
                    "email": "ryohei50@example.com",
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 30,
                    "name": "佐々木 さゆり",
                    "username": "syamaguchi",
                    "email": "yui.matsumoto@example.net",
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 45,
                    "name": "加納 拓真",
                    "username": "kimura.takuma",
                    "email": "taichi48@example.org",
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 3,
            "manager": {
                "id": 1,
                "name": "加藤 里佳",
                "username": "eaota",
                "email": "momoko48@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "consequuntur",
            "users": [
                {
                    "id": 36,
                    "name": "井上 和也",
                    "username": "tsubasa67",
                    "email": "mai.yamamoto@example.com",
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "name": "津田 幹",
                    "username": "takahashi.kaori",
                    "email": "puno@example.com",
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 45,
                    "name": "加納 拓真",
                    "username": "kimura.takuma",
                    "email": "taichi48@example.org",
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 48,
                    "name": "村山 知実",
                    "username": "nanami15",
                    "email": "ito.hanako@example.net",
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
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
curl -X POST "http://localhost/api/groups" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d "name"="zCsamBxDr9vJv8lb" 
```

```javascript
const url = new URL("http://localhost/api/groups");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

let body = JSON.stringify({
    "name": "zCsamBxDr9vJv8lb",
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
        "id": 151,
        "manager": {
            "id": 1,
            "name": "加藤 里佳",
            "username": "eaota",
            "email": "momoko48@example.net",
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "あたらしい",
        "users": [],
        "created_at": {
            "date": "2019-01-13 12:01:30.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-01-13 12:01:30.000000",
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
curl -X GET -G "http://localhost/api/groups/{group}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "PzfxHiclzVSxmsW9",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
        "id": 1,
        "manager": {
            "id": 1,
            "name": "加藤 里佳",
            "username": "eaota",
            "email": "momoko48@example.net",
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "eius",
        "users": [
            {
                "id": 17,
                "name": "野村 里佳",
                "username": "nomura.taichi",
                "email": "fhamada@example.com",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 19,
                "name": "松本 千代",
                "username": "haruka.murayama",
                "email": "mhamada@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 30,
                "name": "佐々木 さゆり",
                "username": "syamaguchi",
                "email": "yui.matsumoto@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 36,
                "name": "井上 和也",
                "username": "tsubasa67",
                "email": "mai.yamamoto@example.com",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-01-13 09:36:18.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-01-13 09:36:18.000000",
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
curl -X PUT "http://localhost/api/groups/{group}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d "name"="2J1hyc5mL6EIHBj5" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "gLmw8qBWaWf75OYa",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

let body = JSON.stringify({
    "name": "2J1hyc5mL6EIHBj5",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (409):

```json
{
    "error": "同じ名前は使用できません"
}
```
> Example response (200):

```json
{
    "data": {
        "id": 1,
        "manager": {
            "id": 1,
            "name": "加藤 里佳",
            "username": "eaota",
            "email": "momoko48@example.net",
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "eius",
        "users": [
            {
                "id": 17,
                "name": "野村 里佳",
                "username": "nomura.taichi",
                "email": "fhamada@example.com",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 19,
                "name": "松本 千代",
                "username": "haruka.murayama",
                "email": "mhamada@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 30,
                "name": "佐々木 さゆり",
                "username": "syamaguchi",
                "email": "yui.matsumoto@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 36,
                "name": "井上 和也",
                "username": "tsubasa67",
                "email": "mai.yamamoto@example.com",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-01-13 09:36:18.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-01-13 09:36:18.000000",
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
curl -X DELETE "http://localhost/api/groups/{group}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "py6OiprJ6nRWmurZ",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
{}
```

### HTTP Request
`DELETE api/groups/{group}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    group |  required  | グループid

<!-- END_bd4f731f3f84c755053406b8971eba1f -->

<!-- START_25cacea309e94199433ca72c489534bc -->
## groups.users.index あるグループのユーザー一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/groups/{group}/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users");

    let params = {
            "group": "IzxqNbB8BFtm4Cni",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
            "id": 17,
            "name": "野村 里佳",
            "username": "nomura.taichi",
            "email": "fhamada@example.com",
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 19,
            "name": "松本 千代",
            "username": "haruka.murayama",
            "email": "mhamada@example.net",
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 30,
            "name": "佐々木 さゆり",
            "username": "syamaguchi",
            "email": "yui.matsumoto@example.net",
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 36,
            "name": "井上 和也",
            "username": "tsubasa67",
            "email": "mai.yamamoto@example.com",
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
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
curl -X POST "http://localhost/api/groups/{group}/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users");

    let params = {
            "group": "NO82YBStq7c7OeyW",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
    "data": [
        {
            "id": 17,
            "name": "野村 里佳",
            "username": "nomura.taichi",
            "email": "fhamada@example.com",
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 19,
            "name": "松本 千代",
            "username": "haruka.murayama",
            "email": "mhamada@example.net",
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 30,
            "name": "佐々木 さゆり",
            "username": "syamaguchi",
            "email": "yui.matsumoto@example.net",
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 36,
            "name": "井上 和也",
            "username": "tsubasa67",
            "email": "mai.yamamoto@example.com",
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```
> Example response (409):

```json
{
    "error": "すでにそのグループに登録されています"
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
curl -X GET -G "http://localhost/api/groups/{group}/users/{user}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users/{user}");

    let params = {
            "group": "5M77IEfAU8KcPKKj",
            "user": "13EUBfQ5THuVApZt",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
        "id": 17,
        "name": "野村 里佳",
        "username": "nomura.taichi",
        "email": "fhamada@example.com",
        "created_at": {
            "date": "2019-01-13 09:36:18.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-01-13 09:36:18.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```
> Example response (409):

```json
{
    "error": "そのユーザーはそのグループの一員ではありません"
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
curl -X DELETE "http://localhost/api/groups/{group}/users/{user}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users/{user}");

    let params = {
            "group": "JpUl4oCKMa3dTUYJ",
            "user": "a49yGhQxW0gDMxOj",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (409):

```json
{
    "error": "そのユーザーはそのグループの一員ではありません"
}
```

### HTTP Request
`DELETE api/groups/{group}/users/{user}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    group |  required  | グループid
    user |  required  | グループに所属する一人のユーザーのid

<!-- END_5d098753a466f1ebdbceb5c54720efb3 -->

<!-- START_77bc4cbc7d1ccbd254470fad1c1498a2 -->
## sessions.index 管理しているセッション一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/sessions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
            "name": "consequatur",
            "shop_id": 349,
            "budget": 23048,
            "actual": 11930,
            "start_time": "1982-08-26 06:36:15",
            "end_time": null,
            "manager": {
                "id": 1,
                "name": "加藤 里佳",
                "username": "eaota",
                "email": "momoko48@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 17,
                    "name": "野村 里佳",
                    "username": "nomura.taichi",
                    "email": "fhamada@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 19,
                    "name": "松本 千代",
                    "username": "haruka.murayama",
                    "email": "mhamada@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 23,
                    "name": "井上 洋介",
                    "username": "yuki.ogaki",
                    "email": "yuta.yamaguchi@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "name": "津田 幹",
                    "username": "takahashi.kaori",
                    "email": "puno@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 48,
                    "name": "村山 知実",
                    "username": "nanami15",
                    "email": "ito.hanako@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 49,
                    "name": "井高 さゆり",
                    "username": "maaya29",
                    "email": "yamagishi.yosuke@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 2,
            "name": "quas",
            "shop_id": 954,
            "budget": 19513,
            "actual": 23912,
            "start_time": "2008-03-11 01:08:35",
            "end_time": null,
            "manager": {
                "id": 1,
                "name": "加藤 里佳",
                "username": "eaota",
                "email": "momoko48@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 17,
                    "name": "野村 里佳",
                    "username": "nomura.taichi",
                    "email": "fhamada@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 25,
                    "name": "原田 太一",
                    "username": "murayama.taro",
                    "email": "ryohei50@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 26,
                    "name": "渚 花子",
                    "username": "ssasaki",
                    "email": "wakamatsu.yoko@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 37,
                    "name": "青田 充",
                    "username": "ito.kana",
                    "email": "akira02@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 48,
                    "name": "村山 知実",
                    "username": "nanami15",
                    "email": "ito.hanako@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 49,
                    "name": "井高 さゆり",
                    "username": "maaya29",
                    "email": "yamagishi.yosuke@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 3,
            "name": "et",
            "shop_id": 356,
            "budget": 25903,
            "actual": 37587,
            "start_time": "1995-11-21 01:28:07",
            "end_time": null,
            "manager": {
                "id": 1,
                "name": "加藤 里佳",
                "username": "eaota",
                "email": "momoko48@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 17,
                    "name": "野村 里佳",
                    "username": "nomura.taichi",
                    "email": "fhamada@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 26,
                    "name": "渚 花子",
                    "username": "ssasaki",
                    "email": "wakamatsu.yoko@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 37,
                    "name": "青田 充",
                    "username": "ito.kana",
                    "email": "akira02@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "name": "津田 幹",
                    "username": "takahashi.kaori",
                    "email": "puno@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 45,
                    "name": "加納 拓真",
                    "username": "kimura.takuma",
                    "email": "taichi48@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 48,
                    "name": "村山 知実",
                    "username": "nanami15",
                    "email": "ito.hanako@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 4,
            "name": "neque",
            "shop_id": 175,
            "budget": 5969,
            "actual": 10843,
            "start_time": "1981-11-12 22:24:47",
            "end_time": null,
            "manager": {
                "id": 1,
                "name": "加藤 里佳",
                "username": "eaota",
                "email": "momoko48@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 15,
                    "name": "杉山 太一",
                    "username": "yosuke.yamamoto",
                    "email": "dogaki@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 17,
                    "name": "野村 里佳",
                    "username": "nomura.taichi",
                    "email": "fhamada@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 30,
                    "name": "佐々木 さゆり",
                    "username": "syamaguchi",
                    "email": "yui.matsumoto@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 36,
                    "name": "井上 和也",
                    "username": "tsubasa67",
                    "email": "mai.yamamoto@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "name": "津田 幹",
                    "username": "takahashi.kaori",
                    "email": "puno@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 49,
                    "name": "井高 さゆり",
                    "username": "maaya29",
                    "email": "yamagishi.yosuke@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-01-13 09:36:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
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
curl -X POST "http://localhost/api/sessions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d "name"="zF1SO2T319GcTxCH" \
    -d "shop_id"="4" \
    -d "budget"="17" \
    -d "actual"="6" \
    -d "start_time"="1ZKb8zbQmSuvf6XP" \
    -d "end_time"="k1M9b64TA8eiWCXc" 
```

```javascript
const url = new URL("http://localhost/api/sessions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

let body = JSON.stringify({
    "name": "zF1SO2T319GcTxCH",
    "shop_id": "4",
    "budget": "17",
    "actual": "6",
    "start_time": "1ZKb8zbQmSuvf6XP",
    "end_time": "k1M9b64TA8eiWCXc",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
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
curl -X GET -G "http://localhost/api/sessions/{session}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "vmjCsfgB7TuxRCTb",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response:

```json
null
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
curl -X PUT "http://localhost/api/sessions/{session}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d "name"="2GKSYujUfXladDHj" \
    -d "shop_id"="7" \
    -d "budget"="17" \
    -d "actual"="20" \
    -d "start_time"="BLmgUDknqGXQUN3Z" \
    -d "end_time"="XZNMZ7XUB2IsprKF" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "tKgBWGw80nrxojX9",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

let body = JSON.stringify({
    "name": "2GKSYujUfXladDHj",
    "shop_id": "7",
    "budget": "17",
    "actual": "20",
    "start_time": "BLmgUDknqGXQUN3Z",
    "end_time": "XZNMZ7XUB2IsprKF",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
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
curl -X DELETE "http://localhost/api/sessions/{session}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "CrsfA8AbU5JL0mzx",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
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
curl -X GET -G "http://localhost/api/sessions/{session}/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "pPu0CSUkQBnkbHMb",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response:

```json
null
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
curl -X POST "http://localhost/api/sessions/{session}/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d "user_id"="g1duH1tJFojt0ufn" \
    -d "join_status"="dImi46IENmKG3XQS" \
    -d "paid"="13" \
    -d "plus_minus"="2" \
    -d "ratio"="WqLN1erbXLFlbjAE" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "OdvCEkKiNznfNZ7S",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

let body = JSON.stringify({
    "user_id": "g1duH1tJFojt0ufn",
    "join_status": "dImi46IENmKG3XQS",
    "paid": "13",
    "plus_minus": "2",
    "ratio": "WqLN1erbXLFlbjAE",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
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
curl -X GET -G "http://localhost/api/sessions/{session}/users/{user}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "vTALieYcK3aLBBb0",
            "user": "jroE8hwONDhBFZiE",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response:

```json
null
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
curl -X PUT "http://localhost/api/sessions/{session}/users/{user}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d "user_id"="de7QuqQSobnsMVtL" \
    -d "join_status"="BfZFGaTfMZWC2Bzh" \
    -d "paid"="16" \
    -d "plus_minus"="2" \
    -d "ratio"="bpjn7Y0r1rFTlmaE" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "uj2xe7dsSP4HZC7C",
            "user": "Zr8x7HP8IA64yuSw",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

let body = JSON.stringify({
    "user_id": "de7QuqQSobnsMVtL",
    "join_status": "BfZFGaTfMZWC2Bzh",
    "paid": "16",
    "plus_minus": "2",
    "ratio": "bpjn7Y0r1rFTlmaE",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
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
curl -X DELETE "http://localhost/api/sessions/{session}/users/{user}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "grCxHF3Za1FfLQAl",
            "user": "piYEmQMUMnP0mL1y",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
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
curl -X GET -G "http://localhost/api/attributes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/attributes");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
                "name": "佐々木 和也",
                "username": "haoyama",
                "email": "esuzuki@example.net",
                "created_at": {
                    "date": "2019-01-13 05:43:21.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 05:43:21.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "possimus",
            "plus_minus": -1683,
            "ratio": 2,
            "created_at": {
                "date": "2019-01-13 05:43:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 05:43:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 2,
            "manager": {
                "id": 1,
                "name": "佐々木 和也",
                "username": "haoyama",
                "email": "esuzuki@example.net",
                "created_at": {
                    "date": "2019-01-13 05:43:21.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 05:43:21.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "corrupti",
            "plus_minus": 1060,
            "ratio": 2,
            "created_at": {
                "date": "2019-01-13 05:43:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 05:43:21.000000",
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
curl -X POST "http://localhost/api/attributes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d "name"="nS47Mi632wQr2UAB" \
    -d "plus_minus"="18" \
    -d "ratio"="457.054359" 
```

```javascript
const url = new URL("http://localhost/api/attributes");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

let body = JSON.stringify({
    "name": "nS47Mi632wQr2UAB",
    "plus_minus": "18",
    "ratio": "457.054359",
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
        "id": 252,
        "manager": {
            "id": 1,
            "name": "加藤 里佳",
            "username": "eaota",
            "email": "momoko48@example.net",
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "ボス!",
        "plus_minus": -1000,
        "ratio": null,
        "created_at": {
            "date": "2019-01-13 09:37:49.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-01-13 09:37:49.000000",
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
curl -X GET -G "http://localhost/api/attributes/{attribute}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "Ieh8NdFQeWjNr8VX",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
                "name": "加藤 里佳",
                "username": "eaota",
                "email": "momoko48@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "laboriosam",
            "plus_minus": -1630,
            "ratio": 1,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 2,
            "manager": {
                "id": 1,
                "name": "加藤 里佳",
                "username": "eaota",
                "email": "momoko48@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "dolor",
            "plus_minus": -2888,
            "ratio": 2,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 3,
            "manager": {
                "id": 1,
                "name": "加藤 里佳",
                "username": "eaota",
                "email": "momoko48@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "dignissimos",
            "plus_minus": 597,
            "ratio": 2,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 4,
            "manager": {
                "id": 1,
                "name": "加藤 里佳",
                "username": "eaota",
                "email": "momoko48@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "iste",
            "plus_minus": 1972,
            "ratio": 0,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 5,
            "manager": {
                "id": 1,
                "name": "加藤 里佳",
                "username": "eaota",
                "email": "momoko48@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "eligendi",
            "plus_minus": 303,
            "ratio": 2,
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 251,
            "manager": {
                "id": 1,
                "name": "加藤 里佳",
                "username": "eaota",
                "email": "momoko48@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "ボス",
            "plus_minus": -1000,
            "ratio": null,
            "created_at": {
                "date": "2019-01-13 09:37:01.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:37:01.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 252,
            "manager": {
                "id": 1,
                "name": "加藤 里佳",
                "username": "eaota",
                "email": "momoko48@example.net",
                "created_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-01-13 09:36:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "ボス!",
            "plus_minus": -1000,
            "ratio": null,
            "created_at": {
                "date": "2019-01-13 09:37:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:37:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
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
curl -X PUT "http://localhost/api/attributes/{attribute}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d "name"="2t5W4JsQF0CgNSIq" \
    -d "plus_minus"="18" \
    -d "ratio"="2.40252713" 
```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "2CdxROHOqIqypDyH",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

let body = JSON.stringify({
    "name": "2t5W4JsQF0CgNSIq",
    "plus_minus": "18",
    "ratio": "2.40252713",
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
        "id": 252,
        "manager": {
            "id": 1,
            "name": "加藤 里佳",
            "username": "eaota",
            "email": "momoko48@example.net",
            "created_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-01-13 09:36:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "ボス!",
        "plus_minus": -1000,
        "ratio": null,
        "created_at": {
            "date": "2019-01-13 09:37:49.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-01-13 09:37:49.000000",
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
curl -X DELETE "http://localhost/api/attributes/{attribute}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "veglOm03bQGixKHe",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
{}
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
curl -X GET -G "http://localhost/api/guest/sessions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/guest/sessions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response:

```json
null
```

### HTTP Request
`GET api/guest/sessions`


<!-- END_3a84a6accee6980b8f6727dfd0c9301a -->

<!-- START_f002f7656ea051619cc8b112ba27bdbd -->
## guests.sessions.show ゲストとして参加しているセッションの一つの詳細

> Example request:

```bash
curl -X GET -G "http://localhost/api/guest/sessions/{session}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/guest/sessions/{session}");

    let params = {
            "session": "jNZzdCaQS4xfBEUd",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response:

```json
null
```

### HTTP Request
`GET api/guest/sessions/{session}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    session |  required  | セッションid

<!-- END_f002f7656ea051619cc8b112ba27bdbd -->


