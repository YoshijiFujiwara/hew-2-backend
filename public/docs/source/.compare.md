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

#attribute 属性
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
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "excepturi",
            "plus_minus": -507,
            "ratio": 0,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
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
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "voluptatem",
            "plus_minus": -1884,
            "ratio": 2,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
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
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "at",
            "plus_minus": -2038,
            "ratio": 1,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
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
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "laudantium",
            "plus_minus": -2814,
            "ratio": 0,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
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
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "ratione",
            "plus_minus": -826,
            "ratio": 1,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
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
curl -X POST "http://localhost/api/attributes"     -d "name"="PnrUczKQV3xh2rJ0" \
    -d "plus_minus"="10" \
    -d "ratio"="10774.468651" 
```

```javascript
const url = new URL("http://localhost/api/attributes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "PnrUczKQV3xh2rJ0",
    "plus_minus": "10",
    "ratio": "10774.468651",
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
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "attributename8WU2w",
        "plus_minus": null,
        "ratio": null,
        "created_at": {
            "date": "2019-02-16 00:49:57.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:57.000000",
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
            "attribute": "nzIJwnlTbQULNDF2",
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
        "id": 3,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "at",
        "plus_minus": -2038,
        "ratio": 1,
        "created_at": {
            "date": "2019-02-16 00:49:31.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:31.000000",
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
curl -X PUT "http://localhost/api/attributes/{attribute}"     -d "name"="0rQW7MNVWwAbu2I8" \
    -d "plus_minus"="5" \
    -d "ratio"="569653894.27" 
```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "5AMInUtGnPqX0Yjr",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "0rQW7MNVWwAbu2I8",
    "plus_minus": "5",
    "ratio": "569653894.27",
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
        "id": 4,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "updateonJC5",
        "plus_minus": null,
        "ratio": null,
        "created_at": {
            "date": "2019-02-16 00:49:31.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:57.000000",
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
            "attribute": "HZFYQk9xhEKRLUq6",
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

#auth 認証
<!-- START_2e1c96dcffcfe7e0eb58d6408f1d619e -->
## email, password, usernameでユーザー登録し、JWTを得る

> Example request:

```bash
curl -X POST "http://localhost/api/auth/register"     -d "email"="MwXbYbbQJoNyfUq6" \
    -d "username"="9bwKAKLgUQxG0Mo4" \
    -d "password"="SIBvDjdzDezNmCT9" 
```

```javascript
const url = new URL("http://localhost/api/auth/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "MwXbYbbQJoNyfUq6",
    "username": "9bwKAKLgUQxG0Mo4",
    "password": "SIBvDjdzDezNmCT9",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVnaXN0ZXIiLCJpYXQiOjE1NTAyNzgxOTcsImV4cCI6MTU1MDI4MTc5NywibmJmIjoxNTUwMjc4MTk3LCJqdGkiOiJ3bW9mSTZRYzFsU3l1cTQ4Iiwic3ViIjo1MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.qxjXGZJNSoJ_e53Z8X7sZnNKap1l1CkmodFPGYbdn58",
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
curl -X POST "http://localhost/api/auth/login"     -d "email"="3ULtVSwmkqGCWfyV" \
    -d "password"="20YPdYQNISnbdMFy" 
```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "3ULtVSwmkqGCWfyV",
    "password": "20YPdYQNISnbdMFy",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTAyNzgxOTgsImV4cCI6MTU1MDI4MTc5OCwibmJmIjoxNTUwMjc4MTk4LCJqdGkiOiIwYnBjbmFMcUhMYTJUSGo2Iiwic3ViIjoyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.Su6XS3g7rVTQ-hhPPX3rXVy3iHwQDwKbCkF8v4pD7aU",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVmcmVzaCIsImlhdCI6MTU1MDI3ODE5NywiZXhwIjoxNTUwMjgxNzk3LCJuYmYiOjE1NTAyNzgxOTcsImp0aSI6IkJITDBKb1NuTEdWWnhGWU4iLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.Sns2kyWGtTaGtgcndIBVgFRrpoLNvU-K5ifXyrsDdWE",
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
            "date": "2019-02-16 00:49:31.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:49.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`POST api/auth/me`


<!-- END_a47210337df3b4ba0df697c115ba0c1e -->

#default_settings デフォルト設定
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
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "fPRdk7h",
            "timer": "01:00:00",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
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
curl -X POST "http://localhost/api/default_settings"     -d "name"="UgLttWEAKnHVSJ3L" \
    -d "timer"="18" \
    -d "group_id"="9" 
```

```javascript
const url = new URL("http://localhost/api/default_settings");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "UgLttWEAKnHVSJ3L",
    "timer": "18",
    "group_id": "9",
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
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "lPMzXV",
        "timer": "01:00:00",
        "created_at": {
            "date": "2019-02-16 00:49:57.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:57.000000",
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
            "default_setting": "wpoVmYn3UyAgK1M7",
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
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "lPMzXV",
        "timer": "01:00:00",
        "created_at": {
            "date": "2019-02-16 00:49:57.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:57.000000",
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
curl -X PUT "http://localhost/api/default_settings/{default_setting}"     -d "name"="dJmx1i5Eg9lgayOO" \
    -d "timer"="1" \
    -d "group_id"="18" 
```

```javascript
const url = new URL("http://localhost/api/default_settings/{default_setting}");

    let params = {
            "default_setting": "vTuZXcFNnlSWXpln",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "dJmx1i5Eg9lgayOO",
    "timer": "1",
    "group_id": "18",
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
        "id": 51,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "newSettingsfN7261WN",
        "timer": "01:00:00",
        "created_at": {
            "date": "2019-02-16 00:49:57.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:57.000000",
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
            "default_setting": "Wtf4FHIDoaBDqdO6",
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

#friends 友達
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
            "id": 4,
            "unique_id": "8f0UwvSDb3",
            "username": "若松 充",
            "email": "zmatsumoto@example.org",
            "permitted": 1,
            "attribute_id": 4,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 5,
            "unique_id": "UcjafRbtxw",
            "username": "宇野 明美",
            "email": "hideki.nakamura@example.net",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 10,
            "unique_id": "skWDGt47yB",
            "username": "青田 結衣",
            "email": "momoko40@example.org",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 11,
            "unique_id": "q8pZqELTRR",
            "username": "江古田 健一",
            "email": "watanabe.maaya@example.org",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 12,
            "unique_id": "HV8NZnBenT",
            "username": "山岸 幹",
            "email": "tanabe.taro@example.net",
            "permitted": 1,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 13,
            "unique_id": "mhEEPmslEl",
            "username": "工藤 さゆり",
            "email": "wakamatsu.tomoya@example.org",
            "permitted": 1,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 35,
            "unique_id": "SDmZKgF2dQ",
            "username": "大垣 陽子",
            "email": "nanami.sato@example.net",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 37,
            "unique_id": "fyl8PPQ81f",
            "username": "藤本 舞",
            "email": "ksugiyama@example.net",
            "permitted": 1,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 38,
            "unique_id": "2zML2qv2yQ",
            "username": "吉田 直人",
            "email": "yasuhiro65@example.net",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 42,
            "unique_id": "iem5Mz6wCp",
            "username": "宇野 香織",
            "email": "ogaki.tsubasa@example.net",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 47,
            "unique_id": "Wq3fnYKbFg",
            "username": "村山 くみ子",
            "email": "manabu44@example.com",
            "permitted": 1,
            "attribute_id": 4,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
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
curl -X POST "http://localhost/api/friends"     -d "email"="FXcXBdnZ2Bc0SZ4h" 
```

```javascript
const url = new URL("http://localhost/api/friends");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "FXcXBdnZ2Bc0SZ4h",
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
        "date": "2019-02-16 00:49:31.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "updated_at": {
        "date": "2019-02-16 00:49:49.000000",
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
            "id": 21,
            "unique_id": "VMUnPdjhck",
            "username": "宇野 翼",
            "email": "saito.kaori@example.net",
            "permitted": 0,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 24,
            "unique_id": "WY9SHN2tI4",
            "username": "佐々木 太郎",
            "email": "haruka53@example.net",
            "permitted": 0,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 39,
            "unique_id": "rGDgGsfenI",
            "username": "浜田 健一",
            "email": "oyamada@example.org",
            "permitted": 0,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 45,
            "unique_id": "hxSR3DFwlr",
            "username": "野村 康弘",
            "email": "dkanou@example.net",
            "permitted": 0,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
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
            "unique_id": "JcYkJzT4Sb",
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 00:49:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:58.000000",
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
            "unique_id": "gU4eiXQzsa",
            "username": "aaaa",
            "email": "fBe2G@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 00:49:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 57,
            "unique_id": "BbZtcVmyyq",
            "username": "aaaa",
            "email": "eLQbQvN@new.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 00:49:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:58.000000",
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
curl -X POST "http://localhost/api/friends/reject"     -d "user_id"="9" 
```

```javascript
const url = new URL("http://localhost/api/friends/reject");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "9",
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
            "friend": "68rc1D2voVYIHnS9",
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
        "id": 11,
        "unique_id": "q8pZqELTRR",
        "username": "江古田 健一",
        "email": "watanabe.maaya@example.org",
        "permitted": 1,
        "attribute_id": null,
        "created_at": {
            "date": "2019-02-16 00:49:31.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:31.000000",
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
            "friend": "oHZEFbrs3ZdWIHXs",
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

#general
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
            "id": 17,
            "name": "unde",
            "shop_id": 863,
            "budget": 8882,
            "actual": 6187,
            "start_time": "2008-08-02 22:25:57",
            "end_time": null,
            "manager": {
                "id": 5,
                "unique_id": "UcjafRbtxw",
                "username": "宇野 明美",
                "email": "hideki.nakamura@example.net",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 4,
                    "unique_id": "8f0UwvSDb3",
                    "username": "若松 充",
                    "email": "zmatsumoto@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "VMUnPdjhck",
                    "username": "宇野 翼",
                    "email": "saito.kaori@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 23,
                    "unique_id": "iaQpWuMwHr",
                    "username": "廣川 舞",
                    "email": "takuma.aota@example.net",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 39,
                    "unique_id": "rGDgGsfenI",
                    "username": "浜田 健一",
                    "email": "oyamada@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 46,
                    "unique_id": "Gub6Ztf39U",
                    "username": "高橋 里佳",
                    "email": "chiyo.ogaki@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 19,
            "name": "nisi",
            "shop_id": 680,
            "budget": 7771,
            "actual": 5544,
            "start_time": "1992-07-22 06:16:10",
            "end_time": null,
            "manager": {
                "id": 5,
                "unique_id": "UcjafRbtxw",
                "username": "宇野 明美",
                "email": "hideki.nakamura@example.net",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 7,
                    "unique_id": "plCDVUWVU1",
                    "username": "松本 智也",
                    "email": "kyosuke.hamada@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 17,
                    "unique_id": "SdE9cxuyyn",
                    "username": "江古田 里佳",
                    "email": "unishinosono@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "VMUnPdjhck",
                    "username": "宇野 翼",
                    "email": "saito.kaori@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 39,
                    "unique_id": "rGDgGsfenI",
                    "username": "浜田 健一",
                    "email": "oyamada@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 45,
                    "unique_id": "hxSR3DFwlr",
                    "username": "野村 康弘",
                    "email": "dkanou@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 20,
            "name": "omnis",
            "shop_id": 539,
            "budget": 16767,
            "actual": 19534,
            "start_time": "2013-09-08 18:54:24",
            "end_time": null,
            "manager": {
                "id": 5,
                "unique_id": "UcjafRbtxw",
                "username": "宇野 明美",
                "email": "hideki.nakamura@example.net",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 7,
                    "unique_id": "plCDVUWVU1",
                    "username": "松本 智也",
                    "email": "kyosuke.hamada@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 9,
                    "unique_id": "hkFudbdvCc",
                    "username": "吉本 春香",
                    "email": "yamada.asuka@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 12,
                    "unique_id": "HV8NZnBenT",
                    "username": "山岸 幹",
                    "email": "tanabe.taro@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "VMUnPdjhck",
                    "username": "宇野 翼",
                    "email": "saito.kaori@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 23,
                    "unique_id": "iaQpWuMwHr",
                    "username": "廣川 舞",
                    "email": "takuma.aota@example.net",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 58,
            "name": "repudiandae",
            "shop_id": 368,
            "budget": 14225,
            "actual": 2215,
            "start_time": "2012-06-07 16:33:49",
            "end_time": null,
            "manager": {
                "id": 15,
                "unique_id": "Igv93VdSG6",
                "username": "佐藤 桃子",
                "email": "tanabe.kaori@example.org",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 2,
                    "unique_id": "kzIC85advH",
                    "username": "山岸 洋介",
                    "email": "zsuzuki@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 17,
                    "unique_id": "SdE9cxuyyn",
                    "username": "江古田 里佳",
                    "email": "unishinosono@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 48,
                    "unique_id": "HKEAttW8ZK",
                    "username": "杉山 陽子",
                    "email": "ogaki.momoko@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:36.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:36.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 59,
            "name": "minima",
            "shop_id": 671,
            "budget": 2536,
            "actual": 31139,
            "start_time": "2014-12-29 00:20:39",
            "end_time": null,
            "manager": {
                "id": 15,
                "unique_id": "Igv93VdSG6",
                "username": "佐藤 桃子",
                "email": "tanabe.kaori@example.org",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 14,
                    "unique_id": "uugFTDCic1",
                    "username": "杉山 淳",
                    "email": "hanako.matsumoto@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 28,
                    "unique_id": "dgvRCKATYp",
                    "username": "若松 亮介",
                    "email": "tsuda.yuki@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 46,
                    "unique_id": "Gub6Ztf39U",
                    "username": "高橋 里佳",
                    "email": "chiyo.ogaki@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:36.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:36.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 69,
            "name": "qui",
            "shop_id": 651,
            "budget": 27875,
            "actual": 47853,
            "start_time": "2001-12-25 00:36:53",
            "end_time": null,
            "manager": {
                "id": 18,
                "unique_id": "DnNREHLJPp",
                "username": "村山 さゆり",
                "email": "sato.kaori@example.com",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 5,
                    "unique_id": "UcjafRbtxw",
                    "username": "宇野 明美",
                    "email": "hideki.nakamura@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 16,
                    "unique_id": "E8e4Jbhfr6",
                    "username": "佐々木 加奈",
                    "email": "maaya.yoshimoto@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 45,
                    "unique_id": "hxSR3DFwlr",
                    "username": "野村 康弘",
                    "email": "dkanou@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:37.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:37.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 71,
            "name": "esse",
            "shop_id": 632,
            "budget": 18603,
            "actual": 11347,
            "start_time": "1988-11-12 06:12:11",
            "end_time": null,
            "manager": {
                "id": 18,
                "unique_id": "DnNREHLJPp",
                "username": "村山 さゆり",
                "email": "sato.kaori@example.com",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 5,
                    "unique_id": "UcjafRbtxw",
                    "username": "宇野 明美",
                    "email": "hideki.nakamura@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 16,
                    "unique_id": "E8e4Jbhfr6",
                    "username": "佐々木 加奈",
                    "email": "maaya.yoshimoto@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 45,
                    "unique_id": "hxSR3DFwlr",
                    "username": "野村 康弘",
                    "email": "dkanou@example.net",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:37.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:37.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 72,
            "name": "fuga",
            "shop_id": 553,
            "budget": 29548,
            "actual": 41657,
            "start_time": "2017-03-07 05:48:09",
            "end_time": null,
            "manager": {
                "id": 18,
                "unique_id": "DnNREHLJPp",
                "username": "村山 さゆり",
                "email": "sato.kaori@example.com",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 16,
                    "unique_id": "E8e4Jbhfr6",
                    "username": "佐々木 加奈",
                    "email": "maaya.yoshimoto@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 23,
                    "unique_id": "iaQpWuMwHr",
                    "username": "廣川 舞",
                    "email": "takuma.aota@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 45,
                    "unique_id": "hxSR3DFwlr",
                    "username": "野村 康弘",
                    "email": "dkanou@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:37.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:37.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 103,
            "name": "ea",
            "shop_id": 148,
            "budget": 23275,
            "actual": 30174,
            "start_time": "2018-05-09 21:55:45",
            "end_time": null,
            "manager": {
                "id": 26,
                "unique_id": "9oYDP0tVRH",
                "username": "佐々木 学",
                "email": "tsubasa11@example.net",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "VMUnPdjhck",
                    "username": "宇野 翼",
                    "email": "saito.kaori@example.net",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 35,
                    "unique_id": "SDmZKgF2dQ",
                    "username": "大垣 陽子",
                    "email": "nanami.sato@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 45,
                    "unique_id": "hxSR3DFwlr",
                    "username": "野村 康弘",
                    "email": "dkanou@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 47,
                    "unique_id": "Wq3fnYKbFg",
                    "username": "村山 くみ子",
                    "email": "manabu44@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 104,
            "name": "quibusdam",
            "shop_id": 155,
            "budget": 29258,
            "actual": 1190,
            "start_time": "2011-05-31 03:10:07",
            "end_time": null,
            "manager": {
                "id": 26,
                "unique_id": "9oYDP0tVRH",
                "username": "佐々木 学",
                "email": "tsubasa11@example.net",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 13,
                    "unique_id": "mhEEPmslEl",
                    "username": "工藤 さゆり",
                    "email": "wakamatsu.tomoya@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "VMUnPdjhck",
                    "username": "宇野 翼",
                    "email": "saito.kaori@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 29,
                    "unique_id": "UR3uvVRj8p",
                    "username": "鈴木 拓真",
                    "email": "atsushi67@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 35,
                    "unique_id": "SDmZKgF2dQ",
                    "username": "大垣 陽子",
                    "email": "nanami.sato@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 105,
            "name": "perspiciatis",
            "shop_id": 820,
            "budget": 27579,
            "actual": 47025,
            "start_time": "1972-07-29 17:06:29",
            "end_time": null,
            "manager": {
                "id": 27,
                "unique_id": "1cjjCHmCq1",
                "username": "小林 洋介",
                "email": "jidaka@example.net",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 10,
                    "unique_id": "skWDGt47yB",
                    "username": "青田 結衣",
                    "email": "momoko40@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 24,
                    "unique_id": "WY9SHN2tI4",
                    "username": "佐々木 太郎",
                    "email": "haruka53@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 43,
                    "unique_id": "hUcqtfEJfB",
                    "username": "渡辺 さゆり",
                    "email": "mai16@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 50,
                    "unique_id": "JQQIaWDxTL",
                    "username": "藤本 聡太郎",
                    "email": "kumiko.tanaka@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 108,
            "name": "ab",
            "shop_id": 245,
            "budget": 5742,
            "actual": 19910,
            "start_time": "2014-02-25 21:35:03",
            "end_time": null,
            "manager": {
                "id": 27,
                "unique_id": "1cjjCHmCq1",
                "username": "小林 洋介",
                "email": "jidaka@example.net",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 10,
                    "unique_id": "skWDGt47yB",
                    "username": "青田 結衣",
                    "email": "momoko40@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 20,
                    "unique_id": "fwIdSgUwop",
                    "username": "松本 明美",
                    "email": "yamada.shuhei@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 31,
                    "unique_id": "k79Qp2Jf2x",
                    "username": "喜嶋 美加子",
                    "email": "sayuri.matsumoto@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 43,
                    "unique_id": "hUcqtfEJfB",
                    "username": "渡辺 さゆり",
                    "email": "mai16@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 123,
            "name": "quas",
            "shop_id": 629,
            "budget": 3070,
            "actual": 49852,
            "start_time": "2004-10-30 17:55:27",
            "end_time": null,
            "manager": {
                "id": 31,
                "unique_id": "k79Qp2Jf2x",
                "username": "喜嶋 美加子",
                "email": "sayuri.matsumoto@example.org",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 40,
                    "unique_id": "aUPFFuVBsC",
                    "username": "中津川 千代",
                    "email": "inakajima@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 41,
                    "unique_id": "2Xpk82kQ4P",
                    "username": "小林 康弘",
                    "email": "bsasada@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 42,
                    "unique_id": "iem5Mz6wCp",
                    "username": "宇野 香織",
                    "email": "ogaki.tsubasa@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 130,
            "name": "explicabo",
            "shop_id": 918,
            "budget": 27691,
            "actual": 40221,
            "start_time": "1976-10-09 09:53:03",
            "end_time": null,
            "manager": {
                "id": 33,
                "unique_id": "fwnizppIZm",
                "username": "鈴木 加奈",
                "email": "hirokawa.osamu@example.com",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 2,
                    "unique_id": "kzIC85advH",
                    "username": "山岸 洋介",
                    "email": "zsuzuki@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 19,
                    "unique_id": "IiaIl6kue9",
                    "username": "津田 舞",
                    "email": "uno.ryohei@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 35,
                    "unique_id": "SDmZKgF2dQ",
                    "username": "大垣 陽子",
                    "email": "nanami.sato@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 41,
                    "unique_id": "2Xpk82kQ4P",
                    "username": "小林 康弘",
                    "email": "bsasada@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 131,
            "name": "harum",
            "shop_id": 793,
            "budget": 3533,
            "actual": 11218,
            "start_time": "1974-04-05 16:53:57",
            "end_time": null,
            "manager": {
                "id": 33,
                "unique_id": "fwnizppIZm",
                "username": "鈴木 加奈",
                "email": "hirokawa.osamu@example.com",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 19,
                    "unique_id": "IiaIl6kue9",
                    "username": "津田 舞",
                    "email": "uno.ryohei@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 31,
                    "unique_id": "k79Qp2Jf2x",
                    "username": "喜嶋 美加子",
                    "email": "sayuri.matsumoto@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 43,
                    "unique_id": "hUcqtfEJfB",
                    "username": "渡辺 さゆり",
                    "email": "mai16@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 48,
                    "unique_id": "HKEAttW8ZK",
                    "username": "杉山 陽子",
                    "email": "ogaki.momoko@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 132,
            "name": "perspiciatis",
            "shop_id": 605,
            "budget": 10831,
            "actual": 33370,
            "start_time": "2009-04-06 01:39:59",
            "end_time": null,
            "manager": {
                "id": 33,
                "unique_id": "fwnizppIZm",
                "username": "鈴木 加奈",
                "email": "hirokawa.osamu@example.com",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 17,
                    "unique_id": "SdE9cxuyyn",
                    "username": "江古田 里佳",
                    "email": "unishinosono@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 35,
                    "unique_id": "SDmZKgF2dQ",
                    "username": "大垣 陽子",
                    "email": "nanami.sato@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 46,
                    "unique_id": "Gub6Ztf39U",
                    "username": "高橋 里佳",
                    "email": "chiyo.ogaki@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 50,
                    "unique_id": "JQQIaWDxTL",
                    "username": "藤本 聡太郎",
                    "email": "kumiko.tanaka@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 183,
            "name": "sit",
            "shop_id": 564,
            "budget": 24307,
            "actual": 17514,
            "start_time": "2012-01-04 16:01:18",
            "end_time": null,
            "manager": {
                "id": 46,
                "unique_id": "Gub6Ztf39U",
                "username": "高橋 里佳",
                "email": "chiyo.ogaki@example.com",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 4,
                    "unique_id": "8f0UwvSDb3",
                    "username": "若松 充",
                    "email": "zmatsumoto@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 6,
                    "unique_id": "VBjHZmwfyi",
                    "username": "木村 直人",
                    "email": "miki.aota@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 18,
                    "unique_id": "DnNREHLJPp",
                    "username": "村山 さゆり",
                    "email": "sato.kaori@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 37,
                    "unique_id": "fyl8PPQ81f",
                    "username": "藤本 舞",
                    "email": "ksugiyama@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 184,
            "name": "est",
            "shop_id": 803,
            "budget": 14421,
            "actual": 42780,
            "start_time": "1977-02-05 06:36:43",
            "end_time": null,
            "manager": {
                "id": 46,
                "unique_id": "Gub6Ztf39U",
                "username": "高橋 里佳",
                "email": "chiyo.ogaki@example.com",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
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
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 4,
                    "unique_id": "8f0UwvSDb3",
                    "username": "若松 充",
                    "email": "zmatsumoto@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 18,
                    "unique_id": "DnNREHLJPp",
                    "username": "村山 さゆり",
                    "email": "sato.kaori@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 49,
                    "unique_id": "Lk0dkzXipJ",
                    "username": "喜嶋 拓真",
                    "email": "osamu.ekoda@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 50,
                    "unique_id": "JQQIaWDxTL",
                    "username": "藤本 聡太郎",
                    "email": "kumiko.tanaka@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:47.000000",
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
            "session": "RlBXTma3w3Fzo1Tc",
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
        "id": 123,
        "name": "quas",
        "shop_id": 629,
        "budget": 3070,
        "actual": 49852,
        "start_time": "2004-10-30 17:55:27",
        "end_time": null,
        "manager": {
            "id": 31,
            "unique_id": "k79Qp2Jf2x",
            "username": "喜嶋 美加子",
            "email": "sayuri.matsumoto@example.org",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
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
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 40,
                "unique_id": "aUPFFuVBsC",
                "username": "中津川 千代",
                "email": "inakajima@example.com",
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 41,
                "unique_id": "2Xpk82kQ4P",
                "username": "小林 康弘",
                "email": "bsasada@example.com",
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 42,
                "unique_id": "iem5Mz6wCp",
                "username": "宇野 香織",
                "email": "ogaki.tsubasa@example.net",
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-16 00:49:42.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:42.000000",
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

#groups.users グループのユーザー管理
<!-- START_25cacea309e94199433ca72c489534bc -->
## groups.users.index あるグループのユーザー一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/groups/{group}/users" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users");

    let params = {
            "group": "OJHJ9Q8n9vrpM8hS",
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
curl -X POST "http://localhost/api/groups/{group}/users"     -d "user_id"="19" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users");

    let params = {
            "group": "6HSzBi3rGJTSU0BB",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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
    "data": []
}
```

### HTTP Request
`POST api/groups/{group}/users`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | integer |  required  | 追加するユーザーのID
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
            "group": "jIPhQEfSKYDm3cVP",
            "user": "yewlxkZkmPjCXfJm",
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
        "id": 12,
        "unique_id": "HV8NZnBenT",
        "username": "山岸 幹",
        "email": "tanabe.taro@example.net",
        "created_at": {
            "date": "2019-02-16 00:49:31.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:31.000000",
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
            "group": "3Oj5FYtKos1QVUpU",
            "user": "PbTnKvJe3yRvHhj9",
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

#groups グループ
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
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "tempore",
            "users": [
                {
                    "id": 5,
                    "unique_id": "UcjafRbtxw",
                    "username": "宇野 明美",
                    "email": "hideki.nakamura@example.net",
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 35,
                    "unique_id": "SDmZKgF2dQ",
                    "username": "大垣 陽子",
                    "email": "nanami.sato@example.net",
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
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
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "amet",
            "users": [
                {
                    "id": 5,
                    "unique_id": "UcjafRbtxw",
                    "username": "宇野 明美",
                    "email": "hideki.nakamura@example.net",
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
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
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "et",
            "users": [
                {
                    "id": 4,
                    "unique_id": "8f0UwvSDb3",
                    "username": "若松 充",
                    "email": "zmatsumoto@example.org",
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 12,
                    "unique_id": "HV8NZnBenT",
                    "username": "山岸 幹",
                    "email": "tanabe.taro@example.net",
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
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
curl -X POST "http://localhost/api/groups"     -d "name"="9cCDbscuHIQueZ0E" 
```

```javascript
const url = new URL("http://localhost/api/groups");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "9cCDbscuHIQueZ0E",
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
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "tempore",
        "users": [],
        "created_at": {
            "date": "2019-02-16 00:49:58.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:58.000000",
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
            "group": "WTvVjOSZOjmSKW7Y",
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
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "tempore",
        "users": [],
        "created_at": {
            "date": "2019-02-16 00:49:58.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:58.000000",
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
curl -X PUT "http://localhost/api/groups/{group}"     -d "name"="xhyj9V6HkO7nhexE" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "RJ8J2N30XU82AyQ1",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "xhyj9V6HkO7nhexE",
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
        "id": 152,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "newGroupNavQsxQl",
        "users": [],
        "created_at": {
            "date": "2019-02-16 00:49:58.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:58.000000",
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
            "group": "0YclKayRqz8wE5oW",
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
            "group": "N4bvHXE0lsxXlHnL",
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
            "id": 4,
            "unique_id": "8f0UwvSDb3",
            "username": "若松 充",
            "email": "zmatsumoto@example.org",
            "permitted": 1,
            "attribute_id": 4,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 10,
            "unique_id": "skWDGt47yB",
            "username": "青田 結衣",
            "email": "momoko40@example.org",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 12,
            "unique_id": "HV8NZnBenT",
            "username": "山岸 幹",
            "email": "tanabe.taro@example.net",
            "permitted": 1,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 13,
            "unique_id": "mhEEPmslEl",
            "username": "工藤 さゆり",
            "email": "wakamatsu.tomoya@example.org",
            "permitted": 1,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 37,
            "unique_id": "fyl8PPQ81f",
            "username": "藤本 舞",
            "email": "ksugiyama@example.net",
            "permitted": 1,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 38,
            "unique_id": "2zML2qv2yQ",
            "username": "吉田 直人",
            "email": "yasuhiro65@example.net",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 42,
            "unique_id": "iem5Mz6wCp",
            "username": "宇野 香織",
            "email": "ogaki.tsubasa@example.net",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 47,
            "unique_id": "Wq3fnYKbFg",
            "username": "村山 くみ子",
            "email": "manabu44@example.com",
            "permitted": 1,
            "attribute_id": 4,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
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

#profile プロフィール
<!-- START_083f8e6e87f50a46d0cc30956e5b0812 -->
## profiles.update 自分の情報を更新

> Example request:

```bash
curl -X PUT "http://localhost/api/profile/update"     -d "unique_id"="04i6X4NPjsVltkdh" \
    -d "username"="sTiPCypqMtThZHTE" \
    -d "password"="JsgUF6c8lOFuT5qa" \
    -d "unique_id_search_flag"="1" \
    -d "username_search_flag"="false" 
```

```javascript
const url = new URL("http://localhost/api/profile/update");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "unique_id": "04i6X4NPjsVltkdh",
    "username": "sTiPCypqMtThZHTE",
    "password": "JsgUF6c8lOFuT5qa",
    "unique_id_search_flag": "1",
    "username_search_flag": "",
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
            "date": "2019-02-16 00:49:31.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:58.000000",
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

#search 検索
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
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 3,
            "unique_id": "n6hzaKYdP3",
            "username": "三宅 直樹",
            "email": "mai.nakatsugawa@example.org",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 6,
            "unique_id": "VBjHZmwfyi",
            "username": "木村 直人",
            "email": "miki.aota@example.org",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 7,
            "unique_id": "plCDVUWVU1",
            "username": "松本 智也",
            "email": "kyosuke.hamada@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 8,
            "unique_id": "L10L0BZVtk",
            "username": "浜田 和也",
            "email": "tomoya22@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 9,
            "unique_id": "hkFudbdvCc",
            "username": "吉本 春香",
            "email": "yamada.asuka@example.net",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 11,
            "unique_id": "q8pZqELTRR",
            "username": "江古田 健一",
            "email": "watanabe.maaya@example.org",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 14,
            "unique_id": "uugFTDCic1",
            "username": "杉山 淳",
            "email": "hanako.matsumoto@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 15,
            "unique_id": "Igv93VdSG6",
            "username": "佐藤 桃子",
            "email": "tanabe.kaori@example.org",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 16,
            "unique_id": "E8e4Jbhfr6",
            "username": "佐々木 加奈",
            "email": "maaya.yoshimoto@example.net",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 17,
            "unique_id": "SdE9cxuyyn",
            "username": "江古田 里佳",
            "email": "unishinosono@example.net",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 18,
            "unique_id": "DnNREHLJPp",
            "username": "村山 さゆり",
            "email": "sato.kaori@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 19,
            "unique_id": "IiaIl6kue9",
            "username": "津田 舞",
            "email": "uno.ryohei@example.org",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 20,
            "unique_id": "fwIdSgUwop",
            "username": "松本 明美",
            "email": "yamada.shuhei@example.net",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 22,
            "unique_id": "SEUwsrmGcM",
            "username": "藤本 陽子",
            "email": "ryosuke.fujimoto@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 23,
            "unique_id": "iaQpWuMwHr",
            "username": "廣川 舞",
            "email": "takuma.aota@example.net",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 25,
            "unique_id": "xTxRBB5FsX",
            "username": "中島 裕美子",
            "email": "hideki.yoshida@example.org",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 26,
            "unique_id": "9oYDP0tVRH",
            "username": "佐々木 学",
            "email": "tsubasa11@example.net",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 27,
            "unique_id": "1cjjCHmCq1",
            "username": "小林 洋介",
            "email": "jidaka@example.net",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 28,
            "unique_id": "dgvRCKATYp",
            "username": "若松 亮介",
            "email": "tsuda.yuki@example.org",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 29,
            "unique_id": "UR3uvVRj8p",
            "username": "鈴木 拓真",
            "email": "atsushi67@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 30,
            "unique_id": "5CWVm67JKp",
            "username": "斉藤 直人",
            "email": "yamaguchi.ryohei@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 31,
            "unique_id": "k79Qp2Jf2x",
            "username": "喜嶋 美加子",
            "email": "sayuri.matsumoto@example.org",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 32,
            "unique_id": "xhZ7SxmI3F",
            "username": "山岸 桃子",
            "email": "sugiyama.tomoya@example.org",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 33,
            "unique_id": "fwnizppIZm",
            "username": "鈴木 加奈",
            "email": "hirokawa.osamu@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 34,
            "unique_id": "LMWvCj9Rcd",
            "username": "井高 康弘",
            "email": "kenichi.ishida@example.net",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 36,
            "unique_id": "SY6mSMwpXu",
            "username": "佐藤 七夏",
            "email": "kenichi.hamada@example.org",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 40,
            "unique_id": "aUPFFuVBsC",
            "username": "中津川 千代",
            "email": "inakajima@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 41,
            "unique_id": "2Xpk82kQ4P",
            "username": "小林 康弘",
            "email": "bsasada@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 43,
            "unique_id": "hUcqtfEJfB",
            "username": "渡辺 さゆり",
            "email": "mai16@example.org",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 44,
            "unique_id": "LTrH6tleyI",
            "username": "鈴木 翼",
            "email": "yumiko80@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 46,
            "unique_id": "Gub6Ztf39U",
            "username": "高橋 里佳",
            "email": "chiyo.ogaki@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 48,
            "unique_id": "HKEAttW8ZK",
            "username": "杉山 陽子",
            "email": "ogaki.momoko@example.com",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 49,
            "unique_id": "Lk0dkzXipJ",
            "username": "喜嶋 拓真",
            "email": "osamu.ekoda@example.net",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 50,
            "unique_id": "JQQIaWDxTL",
            "username": "藤本 聡太郎",
            "email": "kumiko.tanaka@example.org",
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 53,
            "unique_id": "1i6JfXoCH3",
            "username": "testuser3",
            "email": "nofriend@nofriend.com",
            "created_at": {
                "date": "2019-02-16 00:49:57.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:57.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 55,
            "unique_id": "gU4eiXQzsa",
            "username": "aaaa",
            "email": "fBe2G@new.com",
            "created_at": {
                "date": "2019-02-16 00:49:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 56,
            "unique_id": "ke0S3lUsUn",
            "username": "aaaa",
            "email": "YGu3cb@new.com",
            "created_at": {
                "date": "2019-02-16 00:49:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 57,
            "unique_id": "BbZtcVmyyq",
            "username": "aaaa",
            "email": "eLQbQvN@new.com",
            "created_at": {
                "date": "2019-02-16 00:49:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 58,
            "unique_id": "RnCapoxIHr",
            "username": "aaaa",
            "email": "kTS7vaQv@new.com",
            "created_at": {
                "date": "2019-02-16 00:49:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:58.000000",
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
curl -X POST "http://localhost/api/search/forward_by_username"     -d "username"="YrRPkThu5jEzzvfo" 
```

```javascript
const url = new URL("http://localhost/api/search/forward_by_username");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "username": "YrRPkThu5jEzzvfo",
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
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:49.000000",
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
curl -X POST "http://localhost/api/search/perfect_by_unique_id"     -d "unique_id"="PjKwEKp3DisGdAIW" 
```

```javascript
const url = new URL("http://localhost/api/search/perfect_by_unique_id");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "unique_id": "PjKwEKp3DisGdAIW",
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
            "date": "2019-02-16 00:49:31.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:49.000000",
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
curl -X POST "http://localhost/api/search/forward_by_unique_id"     -d "unique_id"="zj3pjTJum5uPt9s3" 
```

```javascript
const url = new URL("http://localhost/api/search/forward_by_unique_id");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "unique_id": "zj3pjTJum5uPt9s3",
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
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:49.000000",
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

#sessions.users セッションのユーザー管理
<!-- START_b2c8f3f41fac647952bc19177cbb6dd9 -->
## sessions.users.index あるセッションのユーザー一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions/{session}/users" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "wjO1eJiECBnTR9AY",
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
            "id": 4,
            "unique_id": "8f0UwvSDb3",
            "username": "若松 充",
            "email": "zmatsumoto@example.org",
            "join_status": "allow",
            "paid": 1,
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 10,
            "unique_id": "skWDGt47yB",
            "username": "青田 結衣",
            "email": "momoko40@example.org",
            "join_status": "deny",
            "paid": null,
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 13,
            "unique_id": "mhEEPmslEl",
            "username": "工藤 さゆり",
            "email": "wakamatsu.tomoya@example.org",
            "join_status": "allow",
            "paid": 0,
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 47,
            "unique_id": "Wq3fnYKbFg",
            "username": "村山 くみ子",
            "email": "manabu44@example.com",
            "join_status": "deny",
            "paid": null,
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
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
curl -X POST "http://localhost/api/sessions/{session}/users"     -d "user_id"="lsbMeZJdsFkm5zqx" \
    -d "join_status"="hvPppMTMbmayjX4m" \
    -d "paid"="2" \
    -d "plus_minus"="2" \
    -d "ratio"="yIsukJN1yuMH9lHr" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "QzwhNlRfySeAXvK6",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "lsbMeZJdsFkm5zqx",
    "join_status": "hvPppMTMbmayjX4m",
    "paid": "2",
    "plus_minus": "2",
    "ratio": "yIsukJN1yuMH9lHr",
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
            "id": 47,
            "unique_id": "Wq3fnYKbFg",
            "username": "村山 くみ子",
            "email": "manabu44@example.com",
            "join_status": "allow",
            "paid": 0,
            "plus_minus": 0,
            "ratio": null,
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
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
            "session": "xzbx5KpdiCRyZfhb",
            "user": "E9vZvESyGoiLUunI",
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
        "id": 47,
        "unique_id": "Wq3fnYKbFg",
        "username": "村山 くみ子",
        "email": "manabu44@example.com",
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 0,
        "ratio": null,
        "created_at": {
            "date": "2019-02-16 00:49:31.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:31.000000",
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
curl -X PUT "http://localhost/api/sessions/{session}/users/{user}"     -d "user_id"="HAIKf082Gq2A5OAr" \
    -d "join_status"="9AaIVR9uj0PjJLmr" \
    -d "paid"="2" \
    -d "plus_minus"="11" \
    -d "ratio"="Mj3s9qKwqKFkHy3p" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "FMZ6KRUwAlqT41KR",
            "user": "AbUIT78tZZZNDDdZ",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "HAIKf082Gq2A5OAr",
    "join_status": "9AaIVR9uj0PjJLmr",
    "paid": "2",
    "plus_minus": "11",
    "ratio": "Mj3s9qKwqKFkHy3p",
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
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 10000,
        "ratio": null,
        "created_at": {
            "date": "2019-02-15 22:40:01.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:01:48.000000",
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
            "session": "MBMwXKUFqrDmuBo7",
            "user": "uDDQESwGxyDYlUf6",
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

#session イベントセッション
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
            "name": "molestias",
            "shop_id": 189,
            "budget": 3079,
            "actual": 5783,
            "start_time": "2010-07-18 10:25:15",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 4,
                    "unique_id": "8f0UwvSDb3",
                    "username": "若松 充",
                    "email": "zmatsumoto@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 10,
                    "unique_id": "skWDGt47yB",
                    "username": "青田 結衣",
                    "email": "momoko40@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 13,
                    "unique_id": "mhEEPmslEl",
                    "username": "工藤 さゆり",
                    "email": "wakamatsu.tomoya@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 47,
                    "unique_id": "Wq3fnYKbFg",
                    "username": "村山 くみ子",
                    "email": "manabu44@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 2,
            "name": "fugiat",
            "shop_id": 358,
            "budget": 17503,
            "actual": 34504,
            "start_time": "1991-09-01 08:44:09",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 12,
                    "unique_id": "HV8NZnBenT",
                    "username": "山岸 幹",
                    "email": "tanabe.taro@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 13,
                    "unique_id": "mhEEPmslEl",
                    "username": "工藤 さゆり",
                    "email": "wakamatsu.tomoya@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 35,
                    "unique_id": "SDmZKgF2dQ",
                    "username": "大垣 陽子",
                    "email": "nanami.sato@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 37,
                    "unique_id": "fyl8PPQ81f",
                    "username": "藤本 舞",
                    "email": "ksugiyama@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 42,
                    "unique_id": "iem5Mz6wCp",
                    "username": "宇野 香織",
                    "email": "ogaki.tsubasa@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 3,
            "name": "iste",
            "shop_id": 985,
            "budget": 25092,
            "actual": 21624,
            "start_time": "2016-10-07 00:36:14",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 10,
                    "unique_id": "skWDGt47yB",
                    "username": "青田 結衣",
                    "email": "momoko40@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 12,
                    "unique_id": "HV8NZnBenT",
                    "username": "山岸 幹",
                    "email": "tanabe.taro@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 35,
                    "unique_id": "SDmZKgF2dQ",
                    "username": "大垣 陽子",
                    "email": "nanami.sato@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 37,
                    "unique_id": "fyl8PPQ81f",
                    "username": "藤本 舞",
                    "email": "ksugiyama@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "unique_id": "2zML2qv2yQ",
                    "username": "吉田 直人",
                    "email": "yasuhiro65@example.net",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 4,
            "name": "dolorem",
            "shop_id": 486,
            "budget": 11400,
            "actual": 43393,
            "start_time": "1998-10-16 22:44:49",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 13,
                    "unique_id": "mhEEPmslEl",
                    "username": "工藤 さゆり",
                    "email": "wakamatsu.tomoya@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 37,
                    "unique_id": "fyl8PPQ81f",
                    "username": "藤本 舞",
                    "email": "ksugiyama@example.net",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "unique_id": "2zML2qv2yQ",
                    "username": "吉田 直人",
                    "email": "yasuhiro65@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 47,
                    "unique_id": "Wq3fnYKbFg",
                    "username": "村山 くみ子",
                    "email": "manabu44@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 00:49:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:31.000000",
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
curl -X POST "http://localhost/api/sessions"     -d "name"="54ZQOgnXhqikhwBd" \
    -d "shop_id"="17" \
    -d "budget"="13" \
    -d "actual"="18" \
    -d "start_time"="thxJQowpgGfjuWnS" \
    -d "end_time"="sF0kgqVxVXVNQuzW" 
```

```javascript
const url = new URL("http://localhost/api/sessions");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "54ZQOgnXhqikhwBd",
    "shop_id": "17",
    "budget": "13",
    "actual": "18",
    "start_time": "thxJQowpgGfjuWnS",
    "end_time": "sF0kgqVxVXVNQuzW",
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
        "name": "newSessionDGEND",
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
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [],
        "created_at": {
            "date": "2019-02-16 00:49:59.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:59.000000",
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
            "session": "YloFsYfRwXH4llq7",
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
        "name": "newSessionDGEND",
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
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [],
        "created_at": {
            "date": "2019-02-16 00:49:59.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:59.000000",
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
curl -X PUT "http://localhost/api/sessions/{session}"     -d "name"="jZg2eK4eWZd5dvKP" \
    -d "shop_id"="3" \
    -d "budget"="13" \
    -d "actual"="6" \
    -d "start_time"="7BZ81ovuTJwEzva0" \
    -d "end_time"="Rb8c1NUpZRgTpl5j" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "FXNPspQ58ZwRKyZq",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "jZg2eK4eWZd5dvKP",
    "shop_id": "3",
    "budget": "13",
    "actual": "6",
    "start_time": "7BZ81ovuTJwEzva0",
    "end_time": "Rb8c1NUpZRgTpl5j",
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
        "id": 3,
        "name": "newUpdateSessionwsI9R",
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
                "date": "2019-02-16 00:49:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 00:49:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [
            {
                "id": 10,
                "unique_id": "skWDGt47yB",
                "username": "青田 結衣",
                "email": "momoko40@example.org",
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 12,
                "unique_id": "HV8NZnBenT",
                "username": "山岸 幹",
                "email": "tanabe.taro@example.net",
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 35,
                "unique_id": "SDmZKgF2dQ",
                "username": "大垣 陽子",
                "email": "nanami.sato@example.net",
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 37,
                "unique_id": "fyl8PPQ81f",
                "username": "藤本 舞",
                "email": "ksugiyama@example.net",
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 38,
                "unique_id": "2zML2qv2yQ",
                "username": "吉田 直人",
                "email": "yasuhiro65@example.net",
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 00:49:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-16 00:49:31.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 00:49:59.000000",
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
            "session": "07smA1kcqAgHs8kz",
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


