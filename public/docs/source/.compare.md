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
curl -X POST "http://localhost/api/auth/register"     -d "email"="w7lhubVMTLDYmzrO" \
    -d "username"="OpWVvZDH88NZu7ef" \
    -d "password"="K5P9y6AfacbD4Jmj" 
```

```javascript
const url = new URL("http://localhost/api/auth/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "w7lhubVMTLDYmzrO",
    "username": "OpWVvZDH88NZu7ef",
    "password": "K5P9y6AfacbD4Jmj",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVnaXN0ZXIiLCJpYXQiOjE1NDk3MTk5NzMsImV4cCI6MTU0OTcyMzU3MywibmJmIjoxNTQ5NzE5OTczLCJqdGkiOiJWbmYwR1dNdHd5NjVrZjdqIiwic3ViIjoxMDcsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.EKGTboQBI-1icBqvnbuw4CYYL3jATq36axn6fit3Cks",
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
curl -X POST "http://localhost/api/auth/login"     -d "email"="l0PpwUo2uNRHqZgn" \
    -d "password"="xwbAFG83CDQn6JfE" 
```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "l0PpwUo2uNRHqZgn",
    "password": "xwbAFG83CDQn6JfE",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NDk3MTk5NzQsImV4cCI6MTU0OTcyMzU3NCwibmJmIjoxNTQ5NzE5OTc0LCJqdGkiOiJkRm9QZGhoTTk2YzRXR2F4Iiwic3ViIjoyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.0dA0YWxV8My1J_FHu5w9lLErxRBl4-nGhtY89aJBQNk",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVmcmVzaCIsImlhdCI6MTU0OTcxOTk3MywiZXhwIjoxNTQ5NzIzNTczLCJuYmYiOjE1NDk3MTk5NzMsImp0aSI6InlwUWh2ZUFhbWdoZkxyZTgiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.IYH5_DO3bVHiLsjVO1iObr8VYh2WlaXd6e0dGas7Pu4",
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
    "email_verified_at": "2019-02-09 13:44:36",
    "created_at": "2019-02-09 13:44:38",
    "updated_at": "2019-02-09 13:44:55"
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
            "id": 23,
            "unique_id": "GnmIFzTuJI",
            "username": "宇野 修平",
            "email": "lkato@example.com",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:38.000000",
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
curl -X POST "http://localhost/api/friends"     -d "email"="fW7sTun3A9b2E5OF" 
```

```javascript
const url = new URL("http://localhost/api/friends");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "fW7sTun3A9b2E5OF",
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
        "date": "2019-02-09 13:44:38.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "updated_at": {
        "date": "2019-02-09 13:44:55.000000",
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
            "id": 2,
            "unique_id": "DDDDDDDD",
            "username": "AAAAAAAAAAA",
            "email": "new@new.com",
            "permitted": 0,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 13,
            "unique_id": "WfYTmHEEeM",
            "username": "佐々木 洋介",
            "email": "koizumi.maaya@example.net",
            "permitted": 0,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 17,
            "unique_id": "NhYmcLnRnh",
            "username": "山本 舞",
            "email": "rkijima@example.com",
            "permitted": 0,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 30,
            "unique_id": "HDXpfxuOJT",
            "username": "斉藤 治",
            "email": "ekoda.nanami@example.com",
            "permitted": 0,
            "attribute_id": 2,
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 35,
            "unique_id": "S0Ctd0gALR",
            "username": "小泉 裕美子",
            "email": "suzuki.asuka@example.org",
            "permitted": 0,
            "attribute_id": 3,
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 44,
            "unique_id": "2C5M5tZTYL",
            "username": "井上 翼",
            "email": "nakatsugawa.minoru@example.net",
            "permitted": 0,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 47,
            "unique_id": "yuRoF1pHXJ",
            "username": "山口 くみ子",
            "email": "fsugiyama@example.net",
            "permitted": 0,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:38.000000",
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
            "id": 110,
            "unique_id": "3bp0bxdyhc",
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:46:13.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:13.000000",
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
            "unique_id": "x0XMB10Qvw",
            "username": "aaaa",
            "email": "OxAqn@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:45:59.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:45:59.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 57,
            "unique_id": "1aLrdYpmVl",
            "username": "aaaa",
            "email": "DWoJaXP@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:45:59.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:45:59.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 63,
            "unique_id": "RWBpY9C8Ti",
            "username": "aaaa",
            "email": "KJ1Wm@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:46:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 65,
            "unique_id": "mjL6aO2WWX",
            "username": "aaaa",
            "email": "zlXwj9K@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:46:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 71,
            "unique_id": "nAvVizbZnZ",
            "username": "aaaa",
            "email": "PT6FI@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:46:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 73,
            "unique_id": "fSV70AFDz7",
            "username": "aaaa",
            "email": "FahGfYJ@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:46:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 79,
            "unique_id": "eBClDs7PAA",
            "username": "aaaa",
            "email": "c49yT@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:46:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 81,
            "unique_id": "NRwKfJ1Qqu",
            "username": "aaaa",
            "email": "FlHgIld@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:46:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 87,
            "unique_id": "d4691M8yVr",
            "username": "aaaa",
            "email": "Cj4Y0@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 89,
            "unique_id": "0lIB8sr9L7",
            "username": "aaaa",
            "email": "jFqd2jG@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 95,
            "unique_id": "wpfLKQVHQF",
            "username": "aaaa",
            "email": "XAu3z@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 97,
            "unique_id": "iSGINDezpj",
            "username": "aaaa",
            "email": "fZ7qBZg@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 103,
            "unique_id": "alkGyuA61y",
            "username": "aaaa",
            "email": "pJD5A@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:46:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 105,
            "unique_id": "JbmijZXPXB",
            "username": "aaaa",
            "email": "ZI3Yixp@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:46:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 111,
            "unique_id": "8XEsD8jXo7",
            "username": "aaaa",
            "email": "iZcMX@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:46:13.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:13.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 113,
            "unique_id": "YwxziDvvEC",
            "username": "aaaa",
            "email": "Agjhe1q@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-09 13:46:13.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:13.000000",
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
curl -X POST "http://localhost/api/friends/permit"     -d "user_id"="8" 
```

```javascript
const url = new URL("http://localhost/api/friends/permit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "8",
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
curl -X POST "http://localhost/api/friends/reject"     -d "user_id"="6" 
```

```javascript
const url = new URL("http://localhost/api/friends/reject");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "6",
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
            "friend": "eK0izaXOuBjmLNoM",
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
        "unique_id": "GnmIFzTuJI",
        "username": "宇野 修平",
        "email": "lkato@example.com",
        "created_at": {
            "date": "2019-02-09 13:44:38.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:44:38.000000",
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
            "friend": "wbXB24srzQ9uQIqy",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupkKaHEySo",
            "users": [
                {
                    "id": 24,
                    "unique_id": "Qrs5NJzHIW",
                    "username": "井上 七夏",
                    "email": "jun.kiriyama@example.net",
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 32,
                    "unique_id": "APxWG9QJ3K",
                    "username": "小林 七夏",
                    "email": "yoko.sato@example.net",
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:05.000000",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupikgv1RYD",
            "users": [
                {
                    "id": 14,
                    "unique_id": "HlT8OfKn0v",
                    "username": "西之園 翼",
                    "email": "kazuya73@example.org",
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 24,
                    "unique_id": "Qrs5NJzHIW",
                    "username": "井上 七夏",
                    "email": "jun.kiriyama@example.net",
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:03.000000",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupmJPhU",
            "users": [
                {
                    "id": 20,
                    "unique_id": "HGluGi5gu3",
                    "username": "吉田 裕美子",
                    "email": "dkimura@example.com",
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:00.000000",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupHNYar",
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:00.000000",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGrouptDzA19Gc",
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 159,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroup0DeGVjhV",
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 160,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroup6Vf0x",
            "users": [
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 162,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupyBfis",
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 163,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupbmU1s",
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 164,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupwwSO8",
            "users": [
                {
                    "id": 20,
                    "unique_id": "HGluGi5gu3",
                    "username": "吉田 裕美子",
                    "email": "dkimura@example.com",
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 165,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupC3qat",
            "users": [
                {
                    "id": 7,
                    "unique_id": "diCEwmBGfd",
                    "username": "佐々木 裕美子",
                    "email": "ryosuke86@example.org",
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 166,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupD74ru",
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 167,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupBvGhb",
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 168,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupzjBDt",
            "users": [
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 169,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroup2UcAq",
            "users": [
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 170,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroup8zDTk",
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 171,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupgCcnF",
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 172,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupDdgee",
            "users": [
                {
                    "id": 7,
                    "unique_id": "diCEwmBGfd",
                    "username": "佐々木 裕美子",
                    "email": "ryosuke86@example.org",
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 173,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupK3eUt",
            "users": [
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 174,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupCGKtE",
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 175,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGrouplpcOAMSG",
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 176,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupPO9wB",
            "users": [
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 177,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupomZ3b",
            "users": [
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 178,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "newGroupXlLl2",
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:12.000000",
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
curl -X POST "http://localhost/api/groups"     -d "name"="PLhcqpHl5OOsxkIY" 
```

```javascript
const url = new URL("http://localhost/api/groups");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "PLhcqpHl5OOsxkIY",
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
        "id": 179,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "newGroupc5gAO",
        "users": [],
        "created_at": {
            "date": "2019-02-09 13:46:13.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:46:13.000000",
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
            "group": "qHuF6Nb1lfROvCZo",
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
        "id": 176,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "newGroupPO9wB",
        "users": [
            {
                "id": 23,
                "unique_id": "GnmIFzTuJI",
                "username": "宇野 修平",
                "email": "lkato@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-09 13:46:12.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:46:12.000000",
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
curl -X PUT "http://localhost/api/groups/{group}"     -d "name"="d50aI9nHz2ABkWVS" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "1laGXc4wS93KEUNa",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "d50aI9nHz2ABkWVS",
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
        "id": 176,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "newGroupMsVlYwq1",
        "users": [
            {
                "id": 23,
                "unique_id": "GnmIFzTuJI",
                "username": "宇野 修平",
                "email": "lkato@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-09 13:46:12.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:46:13.000000",
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
            "group": "GwrLk4hkvUX6ngxV",
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
            "group": "lEWNlanfDD2R7jsb",
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
            "group": "hi2ouWqbJcv0lim0",
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
            "group": "JNZTfTwgrkadCSie",
            "user": "9eTGyT0XRLSQQBVk",
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
        "unique_id": "GnmIFzTuJI",
        "username": "宇野 修平",
        "email": "lkato@example.com",
        "created_at": {
            "date": "2019-02-09 13:44:38.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:44:38.000000",
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
            "group": "CYic0Fy8Y1WXNdpL",
            "user": "4qNnJiQoCwhUDQCU",
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
            "name": "quo",
            "shop_id": 366,
            "budget": 7783,
            "actual": 28805,
            "start_time": "2003-10-28 19:56:00",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "diCEwmBGfd",
                    "username": "佐々木 裕美子",
                    "email": "ryosuke86@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 20,
                    "unique_id": "HGluGi5gu3",
                    "username": "吉田 裕美子",
                    "email": "dkimura@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 24,
                    "unique_id": "Qrs5NJzHIW",
                    "username": "井上 七夏",
                    "email": "jun.kiriyama@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 4,
            "name": "nihil",
            "shop_id": 237,
            "budget": 12789,
            "actual": 16128,
            "start_time": "1984-02-01 16:49:33",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 6,
                    "unique_id": "fv3cL2YDS6",
                    "username": "高橋 亮介",
                    "email": "kobayashi.shuhei@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 7,
                    "unique_id": "diCEwmBGfd",
                    "username": "佐々木 裕美子",
                    "email": "ryosuke86@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 14,
                    "unique_id": "HlT8OfKn0v",
                    "username": "西之園 翼",
                    "email": "kazuya73@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 24,
                    "unique_id": "Qrs5NJzHIW",
                    "username": "井上 七夏",
                    "email": "jun.kiriyama@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 202,
            "name": "newSessionsHgSs",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 6,
                    "unique_id": "fv3cL2YDS6",
                    "username": "高橋 亮介",
                    "email": "kobayashi.shuhei@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 203,
            "name": "newSessionnUtcJ",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 45,
                    "unique_id": "xoS5xAccDD",
                    "username": "浜田 太一",
                    "email": "hamada.hanako@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 205,
            "name": "newSessionvNWuz",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 207,
            "name": "newSessionHB3R5",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 20,
                    "unique_id": "HGluGi5gu3",
                    "username": "吉田 裕美子",
                    "email": "dkimura@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 208,
            "name": "newUpdateSession4OUZE",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 209,
            "name": "newSessionjPKHx",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 14,
                    "unique_id": "HlT8OfKn0v",
                    "username": "西之園 翼",
                    "email": "kazuya73@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 10000,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 210,
            "name": "newSessionK6DzR",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 211,
            "name": "newSession9dvOR",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 212,
            "name": "newSessionaEieD",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "diCEwmBGfd",
                    "username": "佐々木 裕美子",
                    "email": "ryosuke86@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 213,
            "name": "newUpdateSession3bAGt",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 32,
                    "unique_id": "APxWG9QJ3K",
                    "username": "小林 七夏",
                    "email": "yoko.sato@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 216,
            "name": "newSessionnlIXn",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 217,
            "name": "newSession79lpy",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 218,
            "name": "newSessionhEGoo",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 219,
            "name": "newSession3KimW",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 10000,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 220,
            "name": "newUpdateSessionhLZHP",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 221,
            "name": "newSessionHqRY9",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 222,
            "name": "newSessionRqvLi",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 20,
                    "unique_id": "HGluGi5gu3",
                    "username": "吉田 裕美子",
                    "email": "dkimura@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 223,
            "name": "newSession6VXDA",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 20,
                    "unique_id": "HGluGi5gu3",
                    "username": "吉田 裕美子",
                    "email": "dkimura@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 224,
            "name": "newSessiontV8Xv",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 20,
                    "unique_id": "HGluGi5gu3",
                    "username": "吉田 裕美子",
                    "email": "dkimura@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 10000,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 225,
            "name": "newSessionb722F",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 226,
            "name": "newSessionm9hyK",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 227,
            "name": "newSessionuUQ4K",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 228,
            "name": "newSessionOdwv1",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "diCEwmBGfd",
                    "username": "佐々木 裕美子",
                    "email": "ryosuke86@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 229,
            "name": "newSessionfFunU",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 10000,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 230,
            "name": "newSessionNb0Fb",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 231,
            "name": "newSession6Krsj",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 232,
            "name": "newSession80Wep",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 233,
            "name": "newSessiontKY5N",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 0,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 234,
            "name": "newSession5T9Lp",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 23,
                    "unique_id": "GnmIFzTuJI",
                    "username": "宇野 修平",
                    "email": "lkato@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": 10000,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 235,
            "name": "newSessionm0fJN",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [],
            "created_at": {
                "date": "2019-02-09 13:46:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:12.000000",
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
curl -X POST "http://localhost/api/sessions"     -d "name"="ziabITpngjYt5ztw" \
    -d "shop_id"="10" \
    -d "budget"="13" \
    -d "actual"="15" \
    -d "start_time"="kHXnDdrgVeYp0KFe" \
    -d "end_time"="INDcuM8FlqUB8jIW" 
```

```javascript
const url = new URL("http://localhost/api/sessions");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "ziabITpngjYt5ztw",
    "shop_id": "10",
    "budget": "13",
    "actual": "15",
    "start_time": "kHXnDdrgVeYp0KFe",
    "end_time": "INDcuM8FlqUB8jIW",
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
        "id": 236,
        "name": "newSessionJdkgc",
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
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [],
        "created_at": {
            "date": "2019-02-09 13:46:14.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:46:14.000000",
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
            "session": "LNsJ6yCG0qw6MBoO",
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
        "id": 232,
        "name": "newSession80Wep",
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
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [
            {
                "id": 23,
                "unique_id": "GnmIFzTuJI",
                "username": "宇野 修平",
                "email": "lkato@example.com",
                "join_status": "allow",
                "paid": 0,
                "plus_minus": 0,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-09 13:46:12.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:46:12.000000",
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
curl -X PUT "http://localhost/api/sessions/{session}"     -d "name"="wT1K83eoebksk9aj" \
    -d "shop_id"="2" \
    -d "budget"="6" \
    -d "actual"="5" \
    -d "start_time"="MPv5EVYXE9aF5FVw" \
    -d "end_time"="clBKXVPvq5nqwSWS" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "ADiALVhdn08dhFTj",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "wT1K83eoebksk9aj",
    "shop_id": "2",
    "budget": "6",
    "actual": "5",
    "start_time": "MPv5EVYXE9aF5FVw",
    "end_time": "clBKXVPvq5nqwSWS",
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
        "id": 209,
        "name": "newUpdateSessionVqPKp",
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
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [
            {
                "id": 14,
                "unique_id": "HlT8OfKn0v",
                "username": "西之園 翼",
                "email": "kazuya73@example.org",
                "join_status": "allow",
                "paid": 0,
                "plus_minus": 10000,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-09 13:46:03.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:46:14.000000",
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
            "session": "Jkts0NKhZ7JDDDh0",
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
            "session": "wB5hD2yhguA2JAcr",
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
            "unique_id": "HGluGi5gu3",
            "username": "吉田 裕美子",
            "email": "dkimura@example.com",
            "join_status": "allow",
            "paid": 0,
            "plus_minus": 0,
            "ratio": null,
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:38.000000",
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
curl -X POST "http://localhost/api/sessions/{session}/users"     -d "user_id"="MmEnm0AskAMFsEC1" \
    -d "join_status"="4YX3vHJ3F3th72kL" \
    -d "paid"="6" \
    -d "plus_minus"="20" \
    -d "ratio"="gnXhjF6LjddHkQDc" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "iOY0awLWFWpEa7Yf",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "MmEnm0AskAMFsEC1",
    "join_status": "4YX3vHJ3F3th72kL",
    "paid": "6",
    "plus_minus": "20",
    "ratio": "gnXhjF6LjddHkQDc",
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
            "unique_id": "GnmIFzTuJI",
            "username": "宇野 修平",
            "email": "lkato@example.com",
            "join_status": "allow",
            "paid": 0,
            "plus_minus": 0,
            "ratio": null,
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:38.000000",
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
            "session": "Wo2ea1oN28zwuf5D",
            "user": "iXi9ytLh6vZeOxoV",
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
        "unique_id": "GnmIFzTuJI",
        "username": "宇野 修平",
        "email": "lkato@example.com",
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 0,
        "ratio": null,
        "created_at": {
            "date": "2019-02-09 13:44:38.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:44:38.000000",
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
curl -X PUT "http://localhost/api/sessions/{session}/users/{user}"     -d "user_id"="nTZmG5ysqpVeEfpn" \
    -d "join_status"="rGbiimIVoUu0wec3" \
    -d "paid"="17" \
    -d "plus_minus"="14" \
    -d "ratio"="ySu0pvfn5LklVC2a" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "NTq4QS4a7OhXfqLX",
            "user": "ixWYU84LJ9UtmBz4",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "nTZmG5ysqpVeEfpn",
    "join_status": "rGbiimIVoUu0wec3",
    "paid": "17",
    "plus_minus": "14",
    "ratio": "ySu0pvfn5LklVC2a",
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
        "unique_id": "GnmIFzTuJI",
        "username": "宇野 修平",
        "email": "lkato@example.com",
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 10000,
        "ratio": null,
        "created_at": {
            "date": "2019-02-09 13:44:38.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:44:38.000000",
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
            "session": "lgxQnXHMSDGACxrJ",
            "user": "nbWkyLWpodErYNdx",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "nam",
            "plus_minus": -1456,
            "ratio": 1,
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:38.000000",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "updates8h0A",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:06.000000",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "update8RfMm",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-09 13:46:02.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 255,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "updateIDRwy",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-09 13:46:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 256,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "updatebVbuS",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-09 13:46:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 258,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "attributenameTRTJj",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-09 13:46:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 259,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "attributenameOExbG",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 260,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "attributenamew8IIG",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 261,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "attributenamedZsFh",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-09 13:46:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 262,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "attributenameTPFnJ",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-09 13:46:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 263,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "attributenamensYGR",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-09 13:46:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 264,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "attributename35noE",
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-09 13:46:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:11.000000",
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
curl -X POST "http://localhost/api/attributes"     -d "name"="yD4WQLpfHuETvG6e" \
    -d "plus_minus"="15" \
    -d "ratio"="3427.1199514" 
```

```javascript
const url = new URL("http://localhost/api/attributes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "yD4WQLpfHuETvG6e",
    "plus_minus": "15",
    "ratio": "3427.1199514",
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
        "id": 266,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "attributenameMSrIb",
        "plus_minus": null,
        "ratio": null,
        "created_at": {
            "date": "2019-02-09 13:46:13.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:46:13.000000",
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
            "attribute": "6LRhBimYn9kUSr9t",
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
        "id": 253,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "update8RfMm",
        "plus_minus": null,
        "ratio": null,
        "created_at": {
            "date": "2019-02-09 13:46:02.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:46:09.000000",
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
curl -X PUT "http://localhost/api/attributes/{attribute}"     -d "name"="TwbiL8k8nwQx5kYG" \
    -d "plus_minus"="10" \
    -d "ratio"="2410477.560148" 
```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "HGVpqmiDCuMhc0Z7",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "TwbiL8k8nwQx5kYG",
    "plus_minus": "10",
    "ratio": "2410477.560148",
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
        "id": 258,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "updateNBf2W",
        "plus_minus": null,
        "ratio": null,
        "created_at": {
            "date": "2019-02-09 13:46:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:46:13.000000",
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
            "attribute": "EJt0jUmzwvxItQc4",
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
            "id": 5,
            "name": "rem",
            "shop_id": 674,
            "budget": 5234,
            "actual": 47639,
            "start_time": "1979-08-16 04:50:42",
            "end_time": null,
            "manager": {
                "id": 2,
                "unique_id": "DDDDDDDD",
                "username": "AAAAAAAAAAA",
                "email": "new@new.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:46:12.000000",
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
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:55.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 4,
                    "unique_id": "FL0376OV1L",
                    "username": "斉藤 花子",
                    "email": "taichi69@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 10,
                    "unique_id": "j8kEk7zYeM",
                    "username": "津田 舞",
                    "email": "hanako52@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 11,
                    "unique_id": "KHp4xElOlb",
                    "username": "桐山 修平",
                    "email": "minoru.kudo@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 14,
                    "unique_id": "HlT8OfKn0v",
                    "username": "西之園 翼",
                    "email": "kazuya73@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 36,
                    "unique_id": "CLvWlf6mnT",
                    "username": "桐山 陽子",
                    "email": "kyosuke50@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 6,
            "name": "dolores",
            "shop_id": 792,
            "budget": 1957,
            "actual": 27124,
            "start_time": "1984-06-03 02:16:58",
            "end_time": null,
            "manager": {
                "id": 2,
                "unique_id": "DDDDDDDD",
                "username": "AAAAAAAAAAA",
                "email": "new@new.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:46:12.000000",
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
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:55.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 3,
                    "unique_id": "WXt7j8l61A",
                    "username": "廣川 幹",
                    "email": "baoyama@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 10,
                    "unique_id": "j8kEk7zYeM",
                    "username": "津田 舞",
                    "email": "hanako52@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 18,
                    "unique_id": "yXgIXwcHoU",
                    "username": "山本 太一",
                    "email": "hideki84@example.net",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 19,
                    "unique_id": "lydbL0n76U",
                    "username": "廣川 学",
                    "email": "asuka02@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 26,
                    "unique_id": "ivFZ4sUMH3",
                    "username": "佐々木 康弘",
                    "email": "manabu.yoshimoto@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 8,
            "name": "veniam",
            "shop_id": 879,
            "budget": 2099,
            "actual": 38115,
            "start_time": "1991-03-19 21:22:08",
            "end_time": null,
            "manager": {
                "id": 2,
                "unique_id": "DDDDDDDD",
                "username": "AAAAAAAAAAA",
                "email": "new@new.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:46:12.000000",
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
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:55.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 18,
                    "unique_id": "yXgIXwcHoU",
                    "username": "山本 太一",
                    "email": "hideki84@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 19,
                    "unique_id": "lydbL0n76U",
                    "username": "廣川 学",
                    "email": "asuka02@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 26,
                    "unique_id": "ivFZ4sUMH3",
                    "username": "佐々木 康弘",
                    "email": "manabu.yoshimoto@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 33,
                    "unique_id": "AK8VnHM6HD",
                    "username": "加納 翔太",
                    "email": "shuhei70@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 36,
                    "unique_id": "CLvWlf6mnT",
                    "username": "桐山 陽子",
                    "email": "kyosuke50@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 57,
            "name": "quo",
            "shop_id": 447,
            "budget": 18109,
            "actual": 10962,
            "start_time": "1970-12-19 07:41:31",
            "end_time": null,
            "manager": {
                "id": 15,
                "unique_id": "7rpCtQgG2b",
                "username": "吉本 あすか",
                "email": "kyosuke.sakamoto@example.net",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
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
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:55.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 7,
                    "unique_id": "diCEwmBGfd",
                    "username": "佐々木 裕美子",
                    "email": "ryosuke86@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 11,
                    "unique_id": "KHp4xElOlb",
                    "username": "桐山 修平",
                    "email": "minoru.kudo@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 30,
                    "unique_id": "HDXpfxuOJT",
                    "username": "斉藤 治",
                    "email": "ekoda.nanami@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 31,
                    "unique_id": "1ddSB5PC3v",
                    "username": "吉田 花子",
                    "email": "wito@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 37,
                    "unique_id": "JR1BPrVrK5",
                    "username": "坂本 花子",
                    "email": "knakajima@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 47,
                    "unique_id": "yuRoF1pHXJ",
                    "username": "山口 くみ子",
                    "email": "fsugiyama@example.net",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 59,
            "name": "optio",
            "shop_id": 491,
            "budget": 8410,
            "actual": 2757,
            "start_time": "1986-04-13 18:17:14",
            "end_time": null,
            "manager": {
                "id": 15,
                "unique_id": "7rpCtQgG2b",
                "username": "吉本 あすか",
                "email": "kyosuke.sakamoto@example.net",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
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
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:55.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 7,
                    "unique_id": "diCEwmBGfd",
                    "username": "佐々木 裕美子",
                    "email": "ryosuke86@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 17,
                    "unique_id": "NhYmcLnRnh",
                    "username": "山本 舞",
                    "email": "rkijima@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 22,
                    "unique_id": "eIZbr8EnIQ",
                    "username": "藤本 真綾",
                    "email": "yamaguchi.asuka@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 27,
                    "unique_id": "HNEVGPuel0",
                    "username": "小林 太一",
                    "email": "mitsuru84@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 31,
                    "unique_id": "1ddSB5PC3v",
                    "username": "吉田 花子",
                    "email": "wito@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 37,
                    "unique_id": "JR1BPrVrK5",
                    "username": "坂本 花子",
                    "email": "knakajima@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 60,
            "name": "fugiat",
            "shop_id": 622,
            "budget": 12074,
            "actual": 18950,
            "start_time": "1986-02-13 10:04:11",
            "end_time": null,
            "manager": {
                "id": 15,
                "unique_id": "7rpCtQgG2b",
                "username": "吉本 あすか",
                "email": "kyosuke.sakamoto@example.net",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
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
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:55.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 7,
                    "unique_id": "diCEwmBGfd",
                    "username": "佐々木 裕美子",
                    "email": "ryosuke86@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 11,
                    "unique_id": "KHp4xElOlb",
                    "username": "桐山 修平",
                    "email": "minoru.kudo@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "fR4sc07mvx",
                    "username": "吉田 零",
                    "email": "inakamura@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 27,
                    "unique_id": "HNEVGPuel0",
                    "username": "小林 太一",
                    "email": "mitsuru84@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 31,
                    "unique_id": "1ddSB5PC3v",
                    "username": "吉田 花子",
                    "email": "wito@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 34,
                    "unique_id": "BnWDWTXfEq",
                    "username": "鈴木 結衣",
                    "email": "matsumoto.mai@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 78,
            "name": "occaecati",
            "shop_id": 140,
            "budget": 28851,
            "actual": 32056,
            "start_time": "2005-09-14 10:47:59",
            "end_time": null,
            "manager": {
                "id": 20,
                "unique_id": "HGluGi5gu3",
                "username": "吉田 裕美子",
                "email": "dkimura@example.com",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
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
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:55.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 3,
                    "unique_id": "WXt7j8l61A",
                    "username": "廣川 幹",
                    "email": "baoyama@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 18,
                    "unique_id": "yXgIXwcHoU",
                    "username": "山本 太一",
                    "email": "hideki84@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 30,
                    "unique_id": "HDXpfxuOJT",
                    "username": "斉藤 治",
                    "email": "ekoda.nanami@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 31,
                    "unique_id": "1ddSB5PC3v",
                    "username": "吉田 花子",
                    "email": "wito@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:45.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:45.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 97,
            "name": "sint",
            "shop_id": 805,
            "budget": 26862,
            "actual": 9828,
            "start_time": "1978-04-10 03:24:19",
            "end_time": null,
            "manager": {
                "id": 25,
                "unique_id": "KdoWeV3WMZ",
                "username": "三宅 翼",
                "email": "hishida@example.org",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
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
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:55.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 7,
                    "unique_id": "diCEwmBGfd",
                    "username": "佐々木 裕美子",
                    "email": "ryosuke86@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 43,
                    "unique_id": "fVskLU5Abn",
                    "username": "山岸 太郎",
                    "email": "minoru.hamada@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:46.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:46.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 99,
            "name": "tempora",
            "shop_id": 778,
            "budget": 21491,
            "actual": 20272,
            "start_time": "2015-07-27 13:43:57",
            "end_time": null,
            "manager": {
                "id": 25,
                "unique_id": "KdoWeV3WMZ",
                "username": "三宅 翼",
                "email": "hishida@example.org",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
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
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:55.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 28,
                    "unique_id": "4TM7AjFHaN",
                    "username": "藤本 桃子",
                    "email": "shuhei24@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 43,
                    "unique_id": "fVskLU5Abn",
                    "username": "山岸 太郎",
                    "email": "minoru.hamada@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:46.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:46.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 100,
            "name": "occaecati",
            "shop_id": 381,
            "budget": 2858,
            "actual": 28066,
            "start_time": "2014-02-02 20:31:22",
            "end_time": null,
            "manager": {
                "id": 25,
                "unique_id": "KdoWeV3WMZ",
                "username": "三宅 翼",
                "email": "hishida@example.org",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
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
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:55.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 7,
                    "unique_id": "diCEwmBGfd",
                    "username": "佐々木 裕美子",
                    "email": "ryosuke86@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 43,
                    "unique_id": "fVskLU5Abn",
                    "username": "山岸 太郎",
                    "email": "minoru.hamada@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:46.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:46.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 161,
            "name": "eos",
            "shop_id": 652,
            "budget": 25443,
            "actual": 45883,
            "start_time": "1970-04-20 13:09:41",
            "end_time": null,
            "manager": {
                "id": 41,
                "unique_id": "qLf8Sqpfnv",
                "username": "山田 明美",
                "email": "uhamada@example.org",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
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
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:55.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 11,
                    "unique_id": "KHp4xElOlb",
                    "username": "桐山 修平",
                    "email": "minoru.kudo@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 25,
                    "unique_id": "KdoWeV3WMZ",
                    "username": "三宅 翼",
                    "email": "hishida@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 28,
                    "unique_id": "4TM7AjFHaN",
                    "username": "藤本 桃子",
                    "email": "shuhei24@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 42,
                    "unique_id": "dxNBOaH5Dy",
                    "username": "伊藤 健一",
                    "email": "minoru90@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 49,
                    "unique_id": "VO4cz8B6YJ",
                    "username": "若松 直人",
                    "email": "zmurayama@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 162,
            "name": "fugiat",
            "shop_id": 684,
            "budget": 25350,
            "actual": 48397,
            "start_time": "1988-01-24 10:11:46",
            "end_time": null,
            "manager": {
                "id": 41,
                "unique_id": "qLf8Sqpfnv",
                "username": "山田 明美",
                "email": "uhamada@example.org",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
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
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:55.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 2,
                    "unique_id": "DDDDDDDD",
                    "username": "AAAAAAAAAAA",
                    "email": "new@new.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:46:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 11,
                    "unique_id": "KHp4xElOlb",
                    "username": "桐山 修平",
                    "email": "minoru.kudo@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "fR4sc07mvx",
                    "username": "吉田 零",
                    "email": "inakamura@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 25,
                    "unique_id": "KdoWeV3WMZ",
                    "username": "三宅 翼",
                    "email": "hishida@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 42,
                    "unique_id": "dxNBOaH5Dy",
                    "username": "伊藤 健一",
                    "email": "minoru90@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 163,
            "name": "saepe",
            "shop_id": 604,
            "budget": 26435,
            "actual": 24706,
            "start_time": "2000-02-27 06:19:21",
            "end_time": null,
            "manager": {
                "id": 41,
                "unique_id": "qLf8Sqpfnv",
                "username": "山田 明美",
                "email": "uhamada@example.org",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
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
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:55.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
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
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:46:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 10,
                    "unique_id": "j8kEk7zYeM",
                    "username": "津田 舞",
                    "email": "hanako52@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 25,
                    "unique_id": "KdoWeV3WMZ",
                    "username": "三宅 翼",
                    "email": "hishida@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 45,
                    "unique_id": "xoS5xAccDD",
                    "username": "浜田 太一",
                    "email": "hamada.hanako@example.net",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 49,
                    "unique_id": "VO4cz8B6YJ",
                    "username": "若松 直人",
                    "email": "zmurayama@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 164,
            "name": "atque",
            "shop_id": 927,
            "budget": 27521,
            "actual": 35845,
            "start_time": "2010-04-18 22:07:59",
            "end_time": null,
            "manager": {
                "id": 41,
                "unique_id": "qLf8Sqpfnv",
                "username": "山田 明美",
                "email": "uhamada@example.org",
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
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
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:55.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 2,
                    "unique_id": "DDDDDDDD",
                    "username": "AAAAAAAAAAA",
                    "email": "new@new.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:46:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 5,
                    "unique_id": "GwVOEbPu25",
                    "username": "笹田 香織",
                    "email": "kaori36@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 10,
                    "unique_id": "j8kEk7zYeM",
                    "username": "津田 舞",
                    "email": "hanako52@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 42,
                    "unique_id": "dxNBOaH5Dy",
                    "username": "伊藤 健一",
                    "email": "minoru90@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 49,
                    "unique_id": "VO4cz8B6YJ",
                    "username": "若松 直人",
                    "email": "zmurayama@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-09 13:44:38.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-09 13:44:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:51.000000",
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
            "session": "PoqiOYsmJdMb1tDB",
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
        "id": 57,
        "name": "quo",
        "shop_id": 447,
        "budget": 18109,
        "actual": 10962,
        "start_time": "1970-12-19 07:41:31",
        "end_time": null,
        "manager": {
            "id": 15,
            "unique_id": "7rpCtQgG2b",
            "username": "吉本 あすか",
            "email": "kyosuke.sakamoto@example.net",
            "created_at": {
                "date": "2019-02-09 13:44:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:44:38.000000",
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
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 7,
                "unique_id": "diCEwmBGfd",
                "username": "佐々木 裕美子",
                "email": "ryosuke86@example.org",
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 11,
                "unique_id": "KHp4xElOlb",
                "username": "桐山 修平",
                "email": "minoru.kudo@example.org",
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 30,
                "unique_id": "HDXpfxuOJT",
                "username": "斉藤 治",
                "email": "ekoda.nanami@example.com",
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 31,
                "unique_id": "1ddSB5PC3v",
                "username": "吉田 花子",
                "email": "wito@example.com",
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 37,
                "unique_id": "JR1BPrVrK5",
                "username": "坂本 花子",
                "email": "knakajima@example.com",
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 47,
                "unique_id": "yuRoF1pHXJ",
                "username": "山口 くみ子",
                "email": "fsugiyama@example.net",
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-09 13:44:38.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-09 13:44:43.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:44:43.000000",
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
curl -X PUT "http://localhost/api/profile/update"     -d "unique_id"="BkKtFnWz8ZnI6X7I" \
    -d "username"="07Nc33qIkumOS4xn" \
    -d "password"="hlbF0wGonEYsXnvQ" 
```

```javascript
const url = new URL("http://localhost/api/profile/update");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "unique_id": "BkKtFnWz8ZnI6X7I",
    "username": "07Nc33qIkumOS4xn",
    "password": "hlbF0wGonEYsXnvQ",
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
            "date": "2019-02-09 13:44:38.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:46:14.000000",
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

<!-- START_f0d03b6b20c3299d8d88805dc9813381 -->
## search.byusername ユーザーネームで検索し、複数を返す

> Example request:

```bash
curl -X POST "http://localhost/api/search/by_username"     -d "username"="iCTGJ6iXYAGOEntx" 
```

```javascript
const url = new URL("http://localhost/api/search/by_username");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "username": "iCTGJ6iXYAGOEntx",
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
            "id": 109,
            "unique_id": "8pUVdvdfwd",
            "username": "testuser3",
            "email": "nofriend@nofriend.com",
            "created_at": {
                "date": "2019-02-09 13:46:13.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:13.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 110,
            "unique_id": "3bp0bxdyhc",
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "created_at": {
                "date": "2019-02-09 13:46:13.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-09 13:46:13.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`POST api/search/by_username`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    username | string |  required  | 

<!-- END_f0d03b6b20c3299d8d88805dc9813381 -->

<!-- START_eeea26c85f172c6811eb2ad7b09c12c5 -->
## search.byUniqueId ユニークidで検索し、あれば一件返す

> Example request:

```bash
curl -X POST "http://localhost/api/search/by_unique_id"     -d "unique_id"="tvQH5SKlKc6BcSpY" 
```

```javascript
const url = new URL("http://localhost/api/search/by_unique_id");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "unique_id": "tvQH5SKlKc6BcSpY",
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
            "date": "2019-02-09 13:44:38.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-09 13:44:55.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`POST api/search/by_unique_id`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    unique_id | string |  required  | 

<!-- END_eeea26c85f172c6811eb2ad7b09c12c5 -->


