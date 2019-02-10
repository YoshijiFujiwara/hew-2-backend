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
curl -X POST "http://localhost/api/auth/register"     -d "email"="G8FX4oOoXhfA4gsW" \
    -d "username"="TBzrNfqYEuwzwImJ" \
    -d "password"="zJEQX38nfZE8A3pn" 
```

```javascript
const url = new URL("http://localhost/api/auth/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "G8FX4oOoXhfA4gsW",
    "username": "TBzrNfqYEuwzwImJ",
    "password": "zJEQX38nfZE8A3pn",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVnaXN0ZXIiLCJpYXQiOjE1NDk4MDY4MTQsImV4cCI6MTU0OTgxMDQxNCwibmJmIjoxNTQ5ODA2ODE0LCJqdGkiOiJSZTRrSTZWT1hiQXRiYWtsIiwic3ViIjo2NywicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.0CtMwYtB2o3o00x9_uKM76C_87CeU8XzyPyta8x2DKM",
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
curl -X POST "http://localhost/api/auth/login"     -d "email"="OALCgZIWkElUeHs5" \
    -d "password"="FbEH4Edhg4TwVF2h" 
```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "OALCgZIWkElUeHs5",
    "password": "FbEH4Edhg4TwVF2h",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NDk4MDY4MTUsImV4cCI6MTU0OTgxMDQxNSwibmJmIjoxNTQ5ODA2ODE1LCJqdGkiOiJwZVFWaUlVcTdKbDhOVVFJIiwic3ViIjoyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.aNYqDMV2zw93msO-lrL6emt0wXVf3v8WJ1kxIst4k_o",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVmcmVzaCIsImlhdCI6MTU0OTgwNjgxNSwiZXhwIjoxNTQ5ODEwNDE1LCJuYmYiOjE1NDk4MDY4MTUsImp0aSI6IjlKczJxbmxjRkhxenN3RHYiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.kSDnJ4VZpdyNv9h3K1017sqfNoWVCRlvTS4rUIPmLCI",
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
    "id": 1,
    "unique_id": "TESTTEST",
    "username": "テスト太郎",
    "email": "testuser@example.com",
    "email_verified_at": "2019-02-10 13:49:22",
    "unique_id_search_flag": 1,
    "username_search_flag": 1,
    "created_at": "2019-02-10 13:49:25",
    "updated_at": "2019-02-10 13:49:42"
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
            "id": 2,
            "unique_id": "DDDDDDDD",
            "username": "AAAAAAAAAAA",
            "email": "new@new.com",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 17,
            "unique_id": "SyGfZWW2m4",
            "username": "加納 翔太",
            "email": "miyazawa.satomi@example.net",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 20,
            "unique_id": "y7yejzW4Ah",
            "username": "吉田 結衣",
            "email": "saito.yuki@example.org",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 23,
            "unique_id": "rcQnK7094S",
            "username": "斉藤 学",
            "email": "ryosuke06@example.net",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 31,
            "unique_id": "EFDsaenG0b",
            "username": "斉藤 英樹",
            "email": "mitsuru.yamagishi@example.com",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 36,
            "unique_id": "xXy4sEJif2",
            "username": "中島 くみ子",
            "email": "mitsuru.sasaki@example.com",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 38,
            "unique_id": "9UabRn5nX4",
            "username": "井高 陽一",
            "email": "kiriyama.yosuke@example.org",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 40,
            "unique_id": "AzPeKOoO5H",
            "username": "青田 幹",
            "email": "miki06@example.net",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 44,
            "unique_id": "5axEvpt4Wx",
            "username": "近藤 あすか",
            "email": "xwakamatsu@example.net",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 46,
            "unique_id": "YVlGF6dlPH",
            "username": "西之園 花子",
            "email": "asuka78@example.com",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
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
curl -X POST "http://localhost/api/friends"     -d "email"="8rNLZRIZO25X9HJM" 
```

```javascript
const url = new URL("http://localhost/api/friends");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "8rNLZRIZO25X9HJM",
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
        "date": "2019-02-10 13:49:25.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "updated_at": {
        "date": "2019-02-10 13:49:42.000000",
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
            "id": 35,
            "unique_id": "NYwRfBr1RG",
            "username": "喜嶋 涼平",
            "email": "ogaki.ryohei@example.net",
            "permitted": 0,
            "attribute_id": 2,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 43,
            "unique_id": "xpMOiTQRMd",
            "username": "近藤 直子",
            "email": "yoko44@example.net",
            "permitted": 0,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 48,
            "unique_id": "Zcux3Mn8R6",
            "username": "中村 篤司",
            "email": "taro89@example.org",
            "permitted": 0,
            "attribute_id": 2,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
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
            "id": 70,
            "unique_id": "h8kRcMcBvj",
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-10 13:53:35.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:53:35.000000",
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
            "unique_id": "C4XHU3GMu2",
            "username": "aaaa",
            "email": "232RE@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 57,
            "unique_id": "3osZiaq9Hr",
            "username": "aaaa",
            "email": "ntTggoK@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 63,
            "unique_id": "6elWDk0nvS",
            "username": "aaaa",
            "email": "kFwvX@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-10 13:50:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 65,
            "unique_id": "mV47oH6Edz",
            "username": "aaaa",
            "email": "XUFBYCB@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-10 13:50:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 71,
            "unique_id": "08bXjVVLYC",
            "username": "aaaa",
            "email": "zCISX@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-10 13:53:35.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:53:35.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 73,
            "unique_id": "804bqWvPDJ",
            "username": "aaaa",
            "email": "IYstjMs@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-10 13:53:35.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:53:35.000000",
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
curl -X POST "http://localhost/api/friends/permit"     -d "user_id"="19" 
```

```javascript
const url = new URL("http://localhost/api/friends/permit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "19",
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
curl -X POST "http://localhost/api/friends/reject"     -d "user_id"="13" 
```

```javascript
const url = new URL("http://localhost/api/friends/reject");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "13",
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
            "friend": "lZsyTW6B6lsI669Q",
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
        "id": 20,
        "unique_id": "y7yejzW4Ah",
        "username": "吉田 結衣",
        "email": "saito.yuki@example.org",
        "created_at": {
            "date": "2019-02-10 13:49:25.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:49:25.000000",
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
            "friend": "8mdRTmcrsGoGunJR",
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
            "id": 2,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "similique",
            "users": [
                {
                    "id": 2,
                    "unique_id": "DDDDDDDD",
                    "username": "AAAAAAAAAAA",
                    "email": "new@new.com",
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:50:56.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 36,
                    "unique_id": "xXy4sEJif2",
                    "username": "中島 くみ子",
                    "email": "mitsuru.sasaki@example.com",
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 50,
                    "unique_id": "jMHbQgWIif",
                    "username": "大垣 健一",
                    "email": "rei.saito@example.org",
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
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
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "est",
            "users": [
                {
                    "id": 17,
                    "unique_id": "SyGfZWW2m4",
                    "username": "加納 翔太",
                    "email": "miyazawa.satomi@example.net",
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 23,
                    "unique_id": "rcQnK7094S",
                    "username": "斉藤 学",
                    "email": "ryosuke06@example.net",
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 36,
                    "unique_id": "xXy4sEJif2",
                    "username": "中島 くみ子",
                    "email": "mitsuru.sasaki@example.com",
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 151,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGrouprvwT6TEi",
            "users": [],
            "created_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 152,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupeMVTo",
            "users": [
                {
                    "id": 20,
                    "unique_id": "y7yejzW4Ah",
                    "username": "吉田 結衣",
                    "email": "saito.yuki@example.org",
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 154,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupFtofp",
            "users": [],
            "created_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 155,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupcZVCPYfV",
            "users": [],
            "created_at": {
                "date": "2019-02-10 13:50:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 156,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupw0fYj",
            "users": [
                {
                    "id": 46,
                    "unique_id": "YVlGF6dlPH",
                    "username": "西之園 花子",
                    "email": "asuka78@example.com",
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:50:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 157,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupsNysp",
            "users": [
                {
                    "id": 20,
                    "unique_id": "y7yejzW4Ah",
                    "username": "吉田 結衣",
                    "email": "saito.yuki@example.org",
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:50:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 158,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroup6fbEg",
            "users": [],
            "created_at": {
                "date": "2019-02-10 13:50:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:56.000000",
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
curl -X POST "http://localhost/api/groups"     -d "name"="2TsKhGKrO6WI3Hzc" 
```

```javascript
const url = new URL("http://localhost/api/groups");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "2TsKhGKrO6WI3Hzc",
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
        "id": 159,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "newGroupLzrIA",
        "users": [],
        "created_at": {
            "date": "2019-02-10 13:53:35.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:53:35.000000",
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
curl -X GET -G "http://localhost/api/groups/{group}" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "YICd2Dk4P2xBNmps",
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
        "id": 152,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "newGroupeMVTo",
        "users": [
            {
                "id": 20,
                "unique_id": "y7yejzW4Ah",
                "username": "吉田 結衣",
                "email": "saito.yuki@example.org",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-10 13:50:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:50:15.000000",
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
curl -X PUT "http://localhost/api/groups/{group}"     -d "name"="qTqppgZnPju7j5HC" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "nHNltvvdxYpmB0H0",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "qTqppgZnPju7j5HC",
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
        "id": 157,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "newGroupllQkXFro",
        "users": [
            {
                "id": 20,
                "unique_id": "y7yejzW4Ah",
                "username": "吉田 結衣",
                "email": "saito.yuki@example.org",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-10 13:50:56.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:53:35.000000",
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
            "group": "XKpFGYOs0rNjn7ZZ",
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
curl -X GET -G "http://localhost/api/groups/{group}/users" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users");

    let params = {
            "group": "lqv1X8p3kkOZxBz0",
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
            "id": 20,
            "unique_id": "y7yejzW4Ah",
            "username": "吉田 結衣",
            "email": "saito.yuki@example.org",
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
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
curl -X POST "http://localhost/api/groups/{group}/users" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users");

    let params = {
            "group": "nv6hTUAMr8Rokvpo",
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
            "group": "dd78zz3Kf2QwFRDa",
            "user": "COqU26pbhcb9vBLV",
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
        "id": 20,
        "unique_id": "y7yejzW4Ah",
        "username": "吉田 結衣",
        "email": "saito.yuki@example.org",
        "created_at": {
            "date": "2019-02-10 13:49:25.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:49:25.000000",
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
            "group": "IbkJlx7rtodMvrtb",
            "user": "dnmGrOIdapOG4yKc",
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
            "id": 2,
            "name": "ut",
            "shop_id": 974,
            "budget": 23214,
            "actual": 28155,
            "start_time": "1979-12-07 10:16:54",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 2,
                    "unique_id": "DDDDDDDD",
                    "username": "AAAAAAAAAAA",
                    "email": "new@new.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:53:35.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 17,
                    "unique_id": "SyGfZWW2m4",
                    "username": "加納 翔太",
                    "email": "miyazawa.satomi@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 23,
                    "unique_id": "rcQnK7094S",
                    "username": "斉藤 学",
                    "email": "ryosuke06@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 31,
                    "unique_id": "EFDsaenG0b",
                    "username": "斉藤 英樹",
                    "email": "mitsuru.yamagishi@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 36,
                    "unique_id": "xXy4sEJif2",
                    "username": "中島 くみ子",
                    "email": "mitsuru.sasaki@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "unique_id": "9UabRn5nX4",
                    "username": "井高 陽一",
                    "email": "kiriyama.yosuke@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 3,
            "name": "nemo",
            "shop_id": 786,
            "budget": 21219,
            "actual": 24484,
            "start_time": "2005-05-06 14:32:57",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 20,
                    "unique_id": "y7yejzW4Ah",
                    "username": "吉田 結衣",
                    "email": "saito.yuki@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 36,
                    "unique_id": "xXy4sEJif2",
                    "username": "中島 くみ子",
                    "email": "mitsuru.sasaki@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "unique_id": "9UabRn5nX4",
                    "username": "井高 陽一",
                    "email": "kiriyama.yosuke@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 44,
                    "unique_id": "5axEvpt4Wx",
                    "username": "近藤 あすか",
                    "email": "xwakamatsu@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 46,
                    "unique_id": "YVlGF6dlPH",
                    "username": "西之園 花子",
                    "email": "asuka78@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 50,
                    "unique_id": "jMHbQgWIif",
                    "username": "大垣 健一",
                    "email": "rei.saito@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 4,
            "name": "laboriosam",
            "shop_id": 785,
            "budget": 16665,
            "actual": 9372,
            "start_time": "1989-02-05 00:37:09",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 17,
                    "unique_id": "SyGfZWW2m4",
                    "username": "加納 翔太",
                    "email": "miyazawa.satomi@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 20,
                    "unique_id": "y7yejzW4Ah",
                    "username": "吉田 結衣",
                    "email": "saito.yuki@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 23,
                    "unique_id": "rcQnK7094S",
                    "username": "斉藤 学",
                    "email": "ryosuke06@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 40,
                    "unique_id": "AzPeKOoO5H",
                    "username": "青田 幹",
                    "email": "miki06@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 44,
                    "unique_id": "5axEvpt4Wx",
                    "username": "近藤 あすか",
                    "email": "xwakamatsu@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 46,
                    "unique_id": "YVlGF6dlPH",
                    "username": "西之園 花子",
                    "email": "asuka78@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 201,
            "name": "newUpdateSessionz2MEn",
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
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [],
            "created_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:57.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 202,
            "name": "newSessionptdWD",
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
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 38,
                    "unique_id": "9UabRn5nX4",
                    "username": "井高 陽一",
                    "email": "kiriyama.yosuke@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 203,
            "name": "newSessionocbln",
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
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 20,
                    "unique_id": "y7yejzW4Ah",
                    "username": "吉田 結衣",
                    "email": "saito.yuki@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 204,
            "name": "newSessionRg0Z6",
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
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 46,
                    "unique_id": "YVlGF6dlPH",
                    "username": "西之園 花子",
                    "email": "asuka78@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 10000,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 206,
            "name": "newSessionPMXWY",
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
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [],
            "created_at": {
                "date": "2019-02-10 13:50:57.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:57.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 207,
            "name": "newSessionBsbS7",
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
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 46,
                    "unique_id": "YVlGF6dlPH",
                    "username": "西之園 花子",
                    "email": "asuka78@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:50:57.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:57.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 208,
            "name": "newSession3P9rK",
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
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 40,
                    "unique_id": "AzPeKOoO5H",
                    "username": "青田 幹",
                    "email": "miki06@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:50:57.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:57.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 209,
            "name": "newSessionQO8j8",
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
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 38,
                    "unique_id": "9UabRn5nX4",
                    "username": "井高 陽一",
                    "email": "kiriyama.yosuke@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 10000,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:50:57.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:57.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 210,
            "name": "newSessionhXVUb",
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
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [],
            "created_at": {
                "date": "2019-02-10 13:50:57.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:57.000000",
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
curl -X POST "http://localhost/api/sessions"     -d "name"="VeAo7QkxWtNXX0lh" \
    -d "shop_id"="4" \
    -d "budget"="8" \
    -d "actual"="9" \
    -d "start_time"="8tqhovfx0SAyh0i6" \
    -d "end_time"="CKwOlU1KmYCEIDh6" 
```

```javascript
const url = new URL("http://localhost/api/sessions");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "VeAo7QkxWtNXX0lh",
    "shop_id": "4",
    "budget": "8",
    "actual": "9",
    "start_time": "8tqhovfx0SAyh0i6",
    "end_time": "CKwOlU1KmYCEIDh6",
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
        "id": 211,
        "name": "newSessionG79VZ",
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
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [],
        "created_at": {
            "date": "2019-02-10 13:53:35.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:53:35.000000",
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
            "session": "OVMimCwq3QmoPZWn",
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
        "id": 202,
        "name": "newSessionptdWD",
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
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [
            {
                "id": 38,
                "unique_id": "9UabRn5nX4",
                "username": "井高 陽一",
                "email": "kiriyama.yosuke@example.org",
                "join_status": "allow",
                "paid": 0,
                "plus_minus": 0,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-10 13:50:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:50:15.000000",
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
curl -X PUT "http://localhost/api/sessions/{session}"     -d "name"="hMhqo5tdnDJKfwrH" \
    -d "shop_id"="13" \
    -d "budget"="7" \
    -d "actual"="12" \
    -d "start_time"="Bh3fq1q0MZHrfF7G" \
    -d "end_time"="MxIxl16GGIZKnuUy" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "BvJXHdJatjckgQee",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "hMhqo5tdnDJKfwrH",
    "shop_id": "13",
    "budget": "7",
    "actual": "12",
    "start_time": "Bh3fq1q0MZHrfF7G",
    "end_time": "MxIxl16GGIZKnuUy",
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
        "id": 202,
        "name": "newUpdateSessionEJA1n",
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
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [
            {
                "id": 38,
                "unique_id": "9UabRn5nX4",
                "username": "井高 陽一",
                "email": "kiriyama.yosuke@example.org",
                "join_status": "allow",
                "paid": 0,
                "plus_minus": 0,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-10 13:50:15.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:53:35.000000",
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
            "session": "DgyshniMc27q9ZIz",
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
            "session": "SkdVccaALOqZr6jd",
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
curl -X POST "http://localhost/api/sessions/{session}/users"     -d "user_id"="OXgRiBumbsjxaWMn" \
    -d "join_status"="Q6w4BF0GMSBNwoZH" \
    -d "paid"="1" \
    -d "plus_minus"="2" \
    -d "ratio"="uES9a0yykxV39reZ" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "vcfp5xKqgPPdWYtm",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "OXgRiBumbsjxaWMn",
    "join_status": "Q6w4BF0GMSBNwoZH",
    "paid": "1",
    "plus_minus": "2",
    "ratio": "uES9a0yykxV39reZ",
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
            "id": 23,
            "unique_id": "rcQnK7094S",
            "username": "斉藤 学",
            "email": "ryosuke06@example.net",
            "join_status": "allow",
            "paid": 0,
            "plus_minus": 0,
            "ratio": null,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
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
            "session": "rIsDNMhqgMDBiF7w",
            "user": "JAzFNJDsLHCawhiM",
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
        "id": 23,
        "unique_id": "rcQnK7094S",
        "username": "斉藤 学",
        "email": "ryosuke06@example.net",
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 0,
        "ratio": null,
        "created_at": {
            "date": "2019-02-10 13:49:25.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:49:25.000000",
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
curl -X PUT "http://localhost/api/sessions/{session}/users/{user}"     -d "user_id"="QoMLx45SgUSewOdX" \
    -d "join_status"="mBlVU23L58wwq2gk" \
    -d "paid"="5" \
    -d "plus_minus"="15" \
    -d "ratio"="NMUenBegeX0nmkIi" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "UpWJvWSA3UdvEFVu",
            "user": "Pvdf9NkN6nvJJYay",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "QoMLx45SgUSewOdX",
    "join_status": "mBlVU23L58wwq2gk",
    "paid": "5",
    "plus_minus": "15",
    "ratio": "NMUenBegeX0nmkIi",
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
        "id": 23,
        "unique_id": "rcQnK7094S",
        "username": "斉藤 学",
        "email": "ryosuke06@example.net",
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 10000,
        "ratio": null,
        "created_at": {
            "date": "2019-02-10 13:49:25.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:49:25.000000",
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
            "session": "mKDIaQ07dNlsVuRN",
            "user": "cGL3I62LVTQw2aOG",
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
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "veniam",
            "plus_minus": -881,
            "ratio": 1,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
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
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "update4HYZv",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:56.000000",
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
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "aut",
            "plus_minus": 1576,
            "ratio": 0,
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 251,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "attributenameHkrtm",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-10 13:50:14.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:14.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 252,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "attributename2trCt",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-10 13:50:14.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:14.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 253,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "attributename2iXCF",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-10 13:50:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 254,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "attributenameg0fDm",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-10 13:50:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:50:56.000000",
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
curl -X POST "http://localhost/api/attributes"     -d "name"="y8dRBM65f3cc9nxo" \
    -d "plus_minus"="20" \
    -d "ratio"="647562.121723" 
```

```javascript
const url = new URL("http://localhost/api/attributes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "y8dRBM65f3cc9nxo",
    "plus_minus": "20",
    "ratio": "647562.121723",
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
        "id": 256,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "attributename5wVSZ",
        "plus_minus": null,
        "ratio": null,
        "created_at": {
            "date": "2019-02-10 13:53:34.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:53:34.000000",
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
            "attribute": "K0cycGR9Mfs5i9zO",
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
        "id": 251,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "attributenameHkrtm",
        "plus_minus": null,
        "ratio": null,
        "created_at": {
            "date": "2019-02-10 13:50:14.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:50:14.000000",
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
curl -X PUT "http://localhost/api/attributes/{attribute}"     -d "name"="yvio7i0ZmtdzEZBo" \
    -d "plus_minus"="2" \
    -d "ratio"="12.934" 
```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "Bdk2VPviQyTy7uOA",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "yvio7i0ZmtdzEZBo",
    "plus_minus": "2",
    "ratio": "12.934",
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
        "id": 253,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "updateCm5uZ",
        "plus_minus": null,
        "ratio": null,
        "created_at": {
            "date": "2019-02-10 13:50:56.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:53:34.000000",
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
            "attribute": "sE9UmJ3qPBFZsEED",
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
            "id": 38,
            "name": "et",
            "shop_id": 161,
            "budget": 12343,
            "actual": 40477,
            "start_time": "1988-05-20 11:43:51",
            "end_time": null,
            "manager": {
                "id": 10,
                "unique_id": "8P8sc17jTr",
                "username": "廣川 零",
                "email": "aota.nanami@example.org",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
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
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:42.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 17,
                    "unique_id": "SyGfZWW2m4",
                    "username": "加納 翔太",
                    "email": "miyazawa.satomi@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 20,
                    "unique_id": "y7yejzW4Ah",
                    "username": "吉田 結衣",
                    "email": "saito.yuki@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 25,
                    "unique_id": "0hUNxu8T1X",
                    "username": "井上 零",
                    "email": "yoshida.naoto@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 29,
                    "unique_id": "GuG13ZM4mP",
                    "username": "宇野 知実",
                    "email": "jun33@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 48,
                    "unique_id": "Zcux3Mn8R6",
                    "username": "中村 篤司",
                    "email": "taro89@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 61,
            "name": "magni",
            "shop_id": 825,
            "budget": 15864,
            "actual": 23272,
            "start_time": "2017-03-12 07:42:04",
            "end_time": null,
            "manager": {
                "id": 16,
                "unique_id": "FpanF7r4kz",
                "username": "坂本 治",
                "email": "yamamoto.minoru@example.net",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
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
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:42.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 30,
                    "unique_id": "GDQJk6eU3A",
                    "username": "藤本 篤司",
                    "email": "hamada.taro@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 35,
                    "unique_id": "NYwRfBr1RG",
                    "username": "喜嶋 涼平",
                    "email": "ogaki.ryohei@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 45,
                    "unique_id": "bYs33rSBxI",
                    "username": "鈴木 陽子",
                    "email": "takuma.sasada@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 50,
                    "unique_id": "jMHbQgWIif",
                    "username": "大垣 健一",
                    "email": "rei.saito@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 101,
            "name": "porro",
            "shop_id": 445,
            "budget": 29549,
            "actual": 31934,
            "start_time": "1999-11-13 10:09:58",
            "end_time": null,
            "manager": {
                "id": 26,
                "unique_id": "07vvl0hKly",
                "username": "大垣 香織",
                "email": "nmurayama@example.net",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
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
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:42.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 9,
                    "unique_id": "PzQwPIamOV",
                    "username": "吉本 加奈",
                    "email": "yuki.kobayashi@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 15,
                    "unique_id": "zZyiE2IaeI",
                    "username": "田辺 京助",
                    "email": "ryohei.nakamura@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 34,
                    "unique_id": "8NmWODMq5Q",
                    "username": "井上 翔太",
                    "email": "sishida@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 49,
                    "unique_id": "naaGPWiGSW",
                    "username": "江古田 花子",
                    "email": "idaka.youichi@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 103,
            "name": "provident",
            "shop_id": 426,
            "budget": 5602,
            "actual": 49381,
            "start_time": "1992-12-18 01:25:38",
            "end_time": null,
            "manager": {
                "id": 26,
                "unique_id": "07vvl0hKly",
                "username": "大垣 香織",
                "email": "nmurayama@example.net",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
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
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:42.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 4,
                    "unique_id": "4wF666AKUJ",
                    "username": "鈴木 翼",
                    "email": "xkoizumi@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 15,
                    "unique_id": "zZyiE2IaeI",
                    "username": "田辺 京助",
                    "email": "ryohei.nakamura@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 28,
                    "unique_id": "XtzYVbn8I3",
                    "username": "佐々木 裕美子",
                    "email": "nakajima.yui@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 39,
                    "unique_id": "dozurGogZ5",
                    "username": "宮沢 知実",
                    "email": "naoki.saito@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 133,
            "name": "suscipit",
            "shop_id": 835,
            "budget": 26584,
            "actual": 31832,
            "start_time": "2006-09-23 10:34:06",
            "end_time": null,
            "manager": {
                "id": 34,
                "unique_id": "8NmWODMq5Q",
                "username": "井上 翔太",
                "email": "sishida@example.org",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
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
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:42.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 2,
                    "unique_id": "DDDDDDDD",
                    "username": "AAAAAAAAAAA",
                    "email": "new@new.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:50:56.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 9,
                    "unique_id": "PzQwPIamOV",
                    "username": "吉本 加奈",
                    "email": "yuki.kobayashi@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 29,
                    "unique_id": "GuG13ZM4mP",
                    "username": "宇野 知実",
                    "email": "jun33@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 36,
                    "unique_id": "xXy4sEJif2",
                    "username": "中島 くみ子",
                    "email": "mitsuru.sasaki@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "unique_id": "9UabRn5nX4",
                    "username": "井高 陽一",
                    "email": "kiriyama.yosuke@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:36.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:36.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 135,
            "name": "esse",
            "shop_id": 175,
            "budget": 4681,
            "actual": 7681,
            "start_time": "2016-01-02 12:00:03",
            "end_time": null,
            "manager": {
                "id": 34,
                "unique_id": "8NmWODMq5Q",
                "username": "井上 翔太",
                "email": "sishida@example.org",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
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
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:42.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 11,
                    "unique_id": "jjwvnnBXfi",
                    "username": "小泉 直人",
                    "email": "kijima.mitsuru@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 14,
                    "unique_id": "BpboHu87ta",
                    "username": "坂本 零",
                    "email": "youichi61@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 16,
                    "unique_id": "FpanF7r4kz",
                    "username": "坂本 治",
                    "email": "yamamoto.minoru@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 29,
                    "unique_id": "GuG13ZM4mP",
                    "username": "宇野 知実",
                    "email": "jun33@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 36,
                    "unique_id": "xXy4sEJif2",
                    "username": "中島 くみ子",
                    "email": "mitsuru.sasaki@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:36.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:36.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 153,
            "name": "nisi",
            "shop_id": 977,
            "budget": 27994,
            "actual": 44524,
            "start_time": "2014-04-19 15:23:52",
            "end_time": null,
            "manager": {
                "id": 39,
                "unique_id": "dozurGogZ5",
                "username": "宮沢 知実",
                "email": "naoki.saito@example.net",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
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
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:42.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 33,
                    "unique_id": "nezyabn8p0",
                    "username": "佐藤 美加子",
                    "email": "momoko58@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 50,
                    "unique_id": "jMHbQgWIif",
                    "username": "大垣 健一",
                    "email": "rei.saito@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 154,
            "name": "pariatur",
            "shop_id": 151,
            "budget": 17498,
            "actual": 20285,
            "start_time": "2016-12-31 17:36:06",
            "end_time": null,
            "manager": {
                "id": 39,
                "unique_id": "dozurGogZ5",
                "username": "宮沢 知実",
                "email": "naoki.saito@example.net",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
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
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:42.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 18,
                    "unique_id": "gqonAlC6Aw",
                    "username": "江古田 康弘",
                    "email": "mikako06@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 33,
                    "unique_id": "nezyabn8p0",
                    "username": "佐藤 美加子",
                    "email": "momoko58@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 155,
            "name": "iste",
            "shop_id": 438,
            "budget": 19987,
            "actual": 30986,
            "start_time": "2009-11-26 05:53:51",
            "end_time": null,
            "manager": {
                "id": 39,
                "unique_id": "dozurGogZ5",
                "username": "宮沢 知実",
                "email": "naoki.saito@example.net",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
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
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:42.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 33,
                    "unique_id": "nezyabn8p0",
                    "username": "佐藤 美加子",
                    "email": "momoko58@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 41,
                    "unique_id": "BvonnO3o21",
                    "username": "三宅 学",
                    "email": "ryamada@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 173,
            "name": "quia",
            "shop_id": 374,
            "budget": 14152,
            "actual": 15138,
            "start_time": "2002-10-31 07:54:42",
            "end_time": null,
            "manager": {
                "id": 44,
                "unique_id": "5axEvpt4Wx",
                "username": "近藤 あすか",
                "email": "xwakamatsu@example.net",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
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
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:42.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 31,
                    "unique_id": "EFDsaenG0b",
                    "username": "斉藤 英樹",
                    "email": "mitsuru.yamagishi@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 35,
                    "unique_id": "NYwRfBr1RG",
                    "username": "喜嶋 涼平",
                    "email": "ogaki.ryohei@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 46,
                    "unique_id": "YVlGF6dlPH",
                    "username": "西之園 花子",
                    "email": "asuka78@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 174,
            "name": "possimus",
            "shop_id": 846,
            "budget": 7138,
            "actual": 32494,
            "start_time": "1975-07-27 18:25:07",
            "end_time": null,
            "manager": {
                "id": 44,
                "unique_id": "5axEvpt4Wx",
                "username": "近藤 あすか",
                "email": "xwakamatsu@example.net",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
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
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:42.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 9,
                    "unique_id": "PzQwPIamOV",
                    "username": "吉本 加奈",
                    "email": "yuki.kobayashi@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 31,
                    "unique_id": "EFDsaenG0b",
                    "username": "斉藤 英樹",
                    "email": "mitsuru.yamagishi@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "unique_id": "9UabRn5nX4",
                    "username": "井高 陽一",
                    "email": "kiriyama.yosuke@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 175,
            "name": "vel",
            "shop_id": 153,
            "budget": 4109,
            "actual": 38961,
            "start_time": "2007-12-05 10:00:45",
            "end_time": null,
            "manager": {
                "id": 44,
                "unique_id": "5axEvpt4Wx",
                "username": "近藤 あすか",
                "email": "xwakamatsu@example.net",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
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
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:42.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 35,
                    "unique_id": "NYwRfBr1RG",
                    "username": "喜嶋 涼平",
                    "email": "ogaki.ryohei@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "unique_id": "9UabRn5nX4",
                    "username": "井高 陽一",
                    "email": "kiriyama.yosuke@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 46,
                    "unique_id": "YVlGF6dlPH",
                    "username": "西之園 花子",
                    "email": "asuka78@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 193,
            "name": "rerum",
            "shop_id": 574,
            "budget": 20256,
            "actual": 21587,
            "start_time": "2005-04-15 22:11:40",
            "end_time": null,
            "manager": {
                "id": 49,
                "unique_id": "naaGPWiGSW",
                "username": "江古田 花子",
                "email": "idaka.youichi@example.org",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
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
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:42.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 3,
                    "unique_id": "xCOdD194pb",
                    "username": "高橋 英樹",
                    "email": "yoko.kanou@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 7,
                    "unique_id": "Dv44Zj3I1f",
                    "username": "藤本 零",
                    "email": "yuki30@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 48,
                    "unique_id": "Zcux3Mn8R6",
                    "username": "中村 篤司",
                    "email": "taro89@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 194,
            "name": "totam",
            "shop_id": 230,
            "budget": 7597,
            "actual": 45891,
            "start_time": "1979-05-27 07:03:01",
            "end_time": null,
            "manager": {
                "id": 49,
                "unique_id": "naaGPWiGSW",
                "username": "江古田 花子",
                "email": "idaka.youichi@example.org",
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
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
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:42.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 7,
                    "unique_id": "Dv44Zj3I1f",
                    "username": "藤本 零",
                    "email": "yuki30@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 45,
                    "unique_id": "bYs33rSBxI",
                    "username": "鈴木 陽子",
                    "email": "takuma.sasada@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 48,
                    "unique_id": "Zcux3Mn8R6",
                    "username": "中村 篤司",
                    "email": "taro89@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-10 13:49:25.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-10 13:49:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:42.000000",
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
            "session": "YXm83qVQ9MotIXjU",
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
        "id": 135,
        "name": "esse",
        "shop_id": 175,
        "budget": 4681,
        "actual": 7681,
        "start_time": "2016-01-02 12:00:03",
        "end_time": null,
        "manager": {
            "id": 34,
            "unique_id": "8NmWODMq5Q",
            "username": "井上 翔太",
            "email": "sishida@example.org",
            "created_at": {
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:25.000000",
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
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:42.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 11,
                "unique_id": "jjwvnnBXfi",
                "username": "小泉 直人",
                "email": "kijima.mitsuru@example.org",
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 14,
                "unique_id": "BpboHu87ta",
                "username": "坂本 零",
                "email": "youichi61@example.org",
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 16,
                "unique_id": "FpanF7r4kz",
                "username": "坂本 治",
                "email": "yamamoto.minoru@example.net",
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 29,
                "unique_id": "GuG13ZM4mP",
                "username": "宇野 知実",
                "email": "jun33@example.com",
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 36,
                "unique_id": "xXy4sEJif2",
                "username": "中島 くみ子",
                "email": "mitsuru.sasaki@example.com",
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-10 13:49:25.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-10 13:49:36.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:49:36.000000",
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
curl -X PUT "http://localhost/api/profile/update"     -d "unique_id"="MiWQ2mOyNeamifVT" \
    -d "username"="IikT0zkL6WRvZ8qN" \
    -d "password"="1pNl1DUkkaXGxNF5" 
```

```javascript
const url = new URL("http://localhost/api/profile/update");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "unique_id": "MiWQ2mOyNeamifVT",
    "username": "IikT0zkL6WRvZ8qN",
    "password": "1pNl1DUkkaXGxNF5",
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
            "date": "2019-02-10 13:49:25.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:53:35.000000",
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

<!-- END_083f8e6e87f50a46d0cc30956e5b0812 -->

<!-- START_92c75eaf183c4c4ed4e57e5e74dd4ca1 -->
## search.forward_by_username ユーザーネームで検索し、複数を返す(前方一致)

> Example request:

```bash
curl -X POST "http://localhost/api/search/forward_by_username"     -d "username"="jokcTgzc3SkcxjWh" 
```

```javascript
const url = new URL("http://localhost/api/search/forward_by_username");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "username": "jokcTgzc3SkcxjWh",
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
    "data": []
}
```

### HTTP Request
`POST api/search/forward_by_username`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    username | string |  required  | 

<!-- END_92c75eaf183c4c4ed4e57e5e74dd4ca1 -->

<!-- START_fad853426f5f43e6449f8d6b81b96ff4 -->
## search.perfect_by_unique_id ユニークidで検索し、あれば一件返す(完全一致)

> Example request:

```bash
curl -X POST "http://localhost/api/search/perfect_by_unique_id"     -d "unique_id"="p6p3Y4ZOEla79YKY" 
```

```javascript
const url = new URL("http://localhost/api/search/perfect_by_unique_id");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "unique_id": "p6p3Y4ZOEla79YKY",
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
            "date": "2019-02-10 13:49:25.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-10 13:49:42.000000",
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
curl -X POST "http://localhost/api/search/forward_by_unique_id"     -d "unique_id"="n6GmetIVjqwQzVDW" 
```

```javascript
const url = new URL("http://localhost/api/search/forward_by_unique_id");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "unique_id": "n6GmetIVjqwQzVDW",
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
                "date": "2019-02-10 13:49:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-10 13:49:42.000000",
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
    unique_id | string |  required  | 

<!-- END_60eb68889571321c607a42bd711a61b9 -->


