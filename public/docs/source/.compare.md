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
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "omnis",
            "plus_minus": -1156,
            "ratio": 1,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "numquam",
            "plus_minus": -802,
            "ratio": 0,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "facere",
            "plus_minus": 2269,
            "ratio": 1,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "autem",
            "plus_minus": 129,
            "ratio": 2,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "quos",
            "plus_minus": 2627,
            "ratio": 1,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
curl -X POST "http://localhost/api/attributes"     -d "name"="EOj0oFScfayOopNy" \
    -d "plus_minus"="2" \
    -d "ratio"="0" 
```

```javascript
const url = new URL("http://localhost/api/attributes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "EOj0oFScfayOopNy",
    "plus_minus": "2",
    "ratio": "0",
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
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "attributenamezsy0F",
        "plus_minus": null,
        "ratio": null,
        "created_at": {
            "date": "2019-02-16 08:54:36.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:36.000000",
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
            "attribute": "9sJGmciAdfiUgBkI",
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
        "id": 4,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "autem",
        "plus_minus": 129,
        "ratio": 2,
        "created_at": {
            "date": "2019-02-16 08:54:12.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:12.000000",
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
curl -X PUT "http://localhost/api/attributes/{attribute}"     -d "name"="LmP9PJLEsIXORKIg" \
    -d "plus_minus"="4" \
    -d "ratio"="750995.7036" 
```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "n3tsxxXT6Z6IFJge",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "LmP9PJLEsIXORKIg",
    "plus_minus": "4",
    "ratio": "750995.7036",
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
        "id": 251,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "updatelOjxe",
        "plus_minus": null,
        "ratio": null,
        "created_at": {
            "date": "2019-02-16 08:54:36.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:36.000000",
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
            "attribute": "9QjWy3uFwIR0Eyq0",
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
curl -X POST "http://localhost/api/auth/register"     -d "email"="8kzsoV2oXCL3lIZb" \
    -d "username"="wsxRbMS3REj76sKC" \
    -d "password"="aFuFZEgZqhMw4kZf" 
```

```javascript
const url = new URL("http://localhost/api/auth/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "8kzsoV2oXCL3lIZb",
    "username": "wsxRbMS3REj76sKC",
    "password": "aFuFZEgZqhMw4kZf",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVnaXN0ZXIiLCJpYXQiOjE1NTAzMDcyNzYsImV4cCI6MTU1MDMxMDg3NiwibmJmIjoxNTUwMzA3Mjc2LCJqdGkiOiJ2OVZnTXA0N0s0U09zYWsxIiwic3ViIjo1MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.CCHWHTVd7sXlsTgjm_TUzULo0IzykPNvDa2ZKqNBEpI",
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
curl -X POST "http://localhost/api/auth/login"     -d "email"="h24qk23KiUhmtcOg" \
    -d "password"="9NiK6kwHZGNHeifD" 
```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "h24qk23KiUhmtcOg",
    "password": "9NiK6kwHZGNHeifD",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTAzMDcyNzcsImV4cCI6MTU1MDMxMDg3NywibmJmIjoxNTUwMzA3Mjc3LCJqdGkiOiJIaGo5aU1wR2k2ZE1MemdTIiwic3ViIjoyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.-0H5EbUOqP4lbSy4z7NU2q_nL05lccn14FG1PaudNeA",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVmcmVzaCIsImlhdCI6MTU1MDMwNzI3NiwiZXhwIjoxNTUwMzEwODc2LCJuYmYiOjE1NTAzMDcyNzYsImp0aSI6IlBpbUFadG5ZQTVUS1dSM0wiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.hNqSvBOerzQwul6rHAfF8DPdgXf_Mav4p0KQ0RMiKBg",
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
            "date": "2019-02-16 08:54:11.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:31.000000",
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
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "MAYjv63",
            "timer": "01:00:00",
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
curl -X POST "http://localhost/api/default_settings"     -d "name"="82wD5l553Ii3OeFI" \
    -d "timer"="4" \
    -d "group_id"="11" 
```

```javascript
const url = new URL("http://localhost/api/default_settings");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "82wD5l553Ii3OeFI",
    "timer": "4",
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
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "vAV4Cm",
        "timer": "01:00:00",
        "created_at": {
            "date": "2019-02-16 08:54:36.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:36.000000",
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
            "default_setting": "UiURgFBB9ZwRm0Cp",
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
        "id": 1,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "MAYjv63",
        "timer": "01:00:00",
        "created_at": {
            "date": "2019-02-16 08:54:12.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:12.000000",
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
curl -X PUT "http://localhost/api/default_settings/{default_setting}"     -d "name"="IaqmpkelhthSee9M" \
    -d "timer"="18" \
    -d "group_id"="12" 
```

```javascript
const url = new URL("http://localhost/api/default_settings/{default_setting}");

    let params = {
            "default_setting": "J6jhrFRKZgsiLd99",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "IaqmpkelhthSee9M",
    "timer": "18",
    "group_id": "12",
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
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "newSettingsDYabSKot",
        "timer": "01:00:00",
        "created_at": {
            "date": "2019-02-16 08:54:12.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:36.000000",
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
            "default_setting": "l2hwdjzzUHu7w3P1",
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
            "id": 8,
            "unique_id": "RNVZRRFXZO",
            "username": "工藤 舞",
            "email": "haruka84@example.org",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 10,
            "unique_id": "emXbSyVTUQ",
            "username": "笹田 涼平",
            "email": "watanabe.hanako@example.net",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 16,
            "unique_id": "11wYuJICZo",
            "username": "加納 陽一",
            "email": "atsushi.saito@example.org",
            "permitted": 1,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 31,
            "unique_id": "oD6AkgmWYL",
            "username": "近藤 亮介",
            "email": "lmatsumoto@example.com",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 37,
            "unique_id": "SuBV7ojy1A",
            "username": "中村 里佳",
            "email": "aota.minoru@example.net",
            "permitted": 1,
            "attribute_id": 3,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 39,
            "unique_id": "I6HhWBgQII",
            "username": "原田 加奈",
            "email": "iyamada@example.net",
            "permitted": 1,
            "attribute_id": 2,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 47,
            "unique_id": "cSEGlSfA3V",
            "username": "小泉 裕樹",
            "email": "osamu.miyazawa@example.net",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 50,
            "unique_id": "ZGoiqXMGWk",
            "username": "木村 修平",
            "email": "hideki37@example.net",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
curl -X POST "http://localhost/api/friends"     -d "email"="PwAuRJx50WpAMTIQ" 
```

```javascript
const url = new URL("http://localhost/api/friends");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "PwAuRJx50WpAMTIQ",
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
        "date": "2019-02-16 08:54:11.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "updated_at": {
        "date": "2019-02-16 08:54:31.000000",
        "timezone_type": 3,
        "timezone": "UTC"
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

<!-- START_2f0a7cf4d2fc13f70f2316d095934b4c -->
## friends.blockingUsers 申請してきたけど、ブロックしたユーザー一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/friends/blocking" 
```

```javascript
const url = new URL("http://localhost/api/friends/blocking");

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
            "unique_id": "P6nk9eYFNa",
            "username": "杉山 さゆり",
            "email": "ishida.yasuhiro@example.org",
            "permitted": 0,
            "attribute_id": 24,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 7,
            "unique_id": "4tDrYkc54d",
            "username": "佐藤 充",
            "email": "kyamagishi@example.net",
            "permitted": 0,
            "attribute_id": 32,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 9,
            "unique_id": "H5kmS8luUA",
            "username": "三宅 あすか",
            "email": "yharada@example.net",
            "permitted": 0,
            "attribute_id": 41,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 14,
            "unique_id": "Ja0b2rXucM",
            "username": "田辺 知実",
            "email": "ftanabe@example.com",
            "permitted": 0,
            "attribute_id": 70,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 38,
            "unique_id": "7iiXsCHXHX",
            "username": "宇野 健一",
            "email": "iekoda@example.org",
            "permitted": 0,
            "attribute_id": 190,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 42,
            "unique_id": "otTkvr4SrY",
            "username": "小泉 涼平",
            "email": "momoko.kiriyama@example.org",
            "permitted": 0,
            "attribute_id": 209,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 45,
            "unique_id": "bjlwRQxcIn",
            "username": "加藤 聡太郎",
            "email": "nanami47@example.net",
            "permitted": 0,
            "attribute_id": 224,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 46,
            "unique_id": "cfcMfTyUhK",
            "username": "渚 直子",
            "email": "kumiko.yoshimoto@example.org",
            "permitted": 0,
            "attribute_id": 226,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/friends/blocking`


<!-- END_2f0a7cf4d2fc13f70f2316d095934b4c -->

<!-- START_fcc7d1252ab5638d1a100cc90d4b32b3 -->
## friends.block_me_users 申請した中でブロックされているユーザー一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/friends/block_me" 
```

```javascript
const url = new URL("http://localhost/api/friends/block_me");

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
            "id": 3,
            "unique_id": "ifgsESVTLX",
            "username": "青山 太一",
            "email": "sasada.osamu@example.org",
            "permitted": 0,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 7,
            "unique_id": "4tDrYkc54d",
            "username": "佐藤 充",
            "email": "kyamagishi@example.net",
            "permitted": 0,
            "attribute_id": 2,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 19,
            "unique_id": "Q8rboUilTo",
            "username": "鈴木 裕美子",
            "email": "aaota@example.net",
            "permitted": 0,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 21,
            "unique_id": "i9buJJSFQR",
            "username": "青田 裕樹",
            "email": "manabu86@example.org",
            "permitted": 0,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 22,
            "unique_id": "cHtCeDLd8l",
            "username": "加納 加奈",
            "email": "rei.tanabe@example.org",
            "permitted": 0,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 23,
            "unique_id": "YPg9busRba",
            "username": "斉藤 美加子",
            "email": "taro06@example.net",
            "permitted": 0,
            "attribute_id": 3,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 30,
            "unique_id": "TmMbUgHIBz",
            "username": "中村 舞",
            "email": "nanami.fujimoto@example.org",
            "permitted": 0,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 32,
            "unique_id": "5i93FsczsM",
            "username": "木村 あすか",
            "email": "sugiyama.kyosuke@example.org",
            "permitted": 0,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 38,
            "unique_id": "7iiXsCHXHX",
            "username": "宇野 健一",
            "email": "iekoda@example.org",
            "permitted": 0,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/friends/block_me`


<!-- END_fcc7d1252ab5638d1a100cc90d4b32b3 -->

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
            "id": 2,
            "unique_id": "rqiqFEvbXA",
            "username": "津田 明美",
            "email": "takuma.sugiyama@example.com",
            "permitted": null,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 6,
            "unique_id": "lXkAmuQ8SQ",
            "username": "加藤 聡太郎",
            "email": "sakamoto.naoto@example.org",
            "permitted": null,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 13,
            "unique_id": "zoYGI0fjkx",
            "username": "松本 洋介",
            "email": "shota.kijima@example.com",
            "permitted": null,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 26,
            "unique_id": "k6TZir8tub",
            "username": "青山 智也",
            "email": "kudo.yumiko@example.org",
            "permitted": null,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 35,
            "unique_id": "4gSJTRTzjb",
            "username": "宇野 零",
            "email": "iidaka@example.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 42,
            "unique_id": "otTkvr4SrY",
            "username": "小泉 涼平",
            "email": "momoko.kiriyama@example.org",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 45,
            "unique_id": "bjlwRQxcIn",
            "username": "加藤 聡太郎",
            "email": "nanami47@example.net",
            "permitted": null,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 48,
            "unique_id": "yC2u6Eanhq",
            "username": "石田 里佳",
            "email": "bsakamoto@example.org",
            "permitted": null,
            "attribute_id": 2,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 53,
            "unique_id": "asL2f2lruj",
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "permitted": null,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 08:54:36.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:36.000000",
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

<!-- START_a0cb6353a775223b74066e4e2c5ac5a8 -->
## friends.permittingUsers 自分に申請してきたユーザーで、自分がそれを了承したユーザー（自分をフレンドとしているユーザー一覧）

> Example request:

```bash
curl -X GET -G "http://localhost/api/friends/permitting" 
```

```javascript
const url = new URL("http://localhost/api/friends/permitting");

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
            "id": 10,
            "unique_id": "emXbSyVTUQ",
            "username": "笹田 涼平",
            "email": "watanabe.hanako@example.net",
            "permitted": 1,
            "attribute_id": 49,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 13,
            "unique_id": "zoYGI0fjkx",
            "username": "松本 洋介",
            "email": "shota.kijima@example.com",
            "permitted": 1,
            "attribute_id": 64,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 16,
            "unique_id": "11wYuJICZo",
            "username": "加納 陽一",
            "email": "atsushi.saito@example.org",
            "permitted": 1,
            "attribute_id": 78,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 19,
            "unique_id": "Q8rboUilTo",
            "username": "鈴木 裕美子",
            "email": "aaota@example.net",
            "permitted": 1,
            "attribute_id": 91,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 20,
            "unique_id": "263St8QJbN",
            "username": "江古田 くみ子",
            "email": "qishida@example.org",
            "permitted": 1,
            "attribute_id": 97,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 36,
            "unique_id": "47PvDzVhge",
            "username": "小泉 明美",
            "email": "yasuhiro85@example.org",
            "permitted": 1,
            "attribute_id": 178,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 43,
            "unique_id": "uPL6OlZXks",
            "username": "杉山 加奈",
            "email": "yuki.fujimoto@example.org",
            "permitted": 1,
            "attribute_id": 211,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/friends/permitting`


<!-- END_a0cb6353a775223b74066e4e2c5ac5a8 -->

<!-- START_76eb010618732a67401c369843a126a8 -->
## friends.friendRequestUsers 自分に申請してきてるけど、まだ返事していない相手一覧

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
            "id": 3,
            "unique_id": "ifgsESVTLX",
            "username": "青山 太一",
            "email": "sasada.osamu@example.org",
            "permitted": null,
            "attribute_id": 14,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 8,
            "unique_id": "RNVZRRFXZO",
            "username": "工藤 舞",
            "email": "haruka84@example.org",
            "permitted": null,
            "attribute_id": 37,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 17,
            "unique_id": "42wMtcgpzQ",
            "username": "若松 陽子",
            "email": "vuno@example.com",
            "permitted": null,
            "attribute_id": 85,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 18,
            "unique_id": "wAeTXRnCVG",
            "username": "廣川 春香",
            "email": "kondo.yui@example.org",
            "permitted": null,
            "attribute_id": 88,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 41,
            "unique_id": "SRb7MvP5fh",
            "username": "小泉 英樹",
            "email": "ssaito@example.com",
            "permitted": null,
            "attribute_id": 203,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 48,
            "unique_id": "yC2u6Eanhq",
            "username": "石田 里佳",
            "email": "bsakamoto@example.org",
            "permitted": null,
            "attribute_id": 237,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
curl -X POST "http://localhost/api/friends/permit"     -d "user_id"="17" 
```

```javascript
const url = new URL("http://localhost/api/friends/permit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "17",
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
curl -X POST "http://localhost/api/friends/reject"     -d "user_id"="3" 
```

```javascript
const url = new URL("http://localhost/api/friends/reject");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "3",
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

<!-- START_3a81e8c3e2baa86208b7cfed26dcd78e -->
## friends.cancel_invitation 友達申請したけど、やっぱり取り消そう

> Example request:

```bash
curl -X PUT "http://localhost/api/friends/{friend}/cancel_invitation" 
```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/cancel_invitation");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
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
`PUT api/friends/{friend}/cancel_invitation`


<!-- END_3a81e8c3e2baa86208b7cfed26dcd78e -->

<!-- START_0fcc5bf895e6f9b1ed641eaf00566908 -->
## friends.block ブロックする。すでに友達の場合は、削除もする

> Example request:

```bash
curl -X PUT "http://localhost/api/friends/{friend}/block" 
```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/block");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "ユーザーをブロックしました"
}
```

### HTTP Request
`PUT api/friends/{friend}/block`


<!-- END_0fcc5bf895e6f9b1ed641eaf00566908 -->

<!-- START_eaa9ff21b52cb918fcac65554c9b0bda -->
## friends.unBlock ブロックしてたけど、かわいそうだから解除してやろう

> Example request:

```bash
curl -X PUT "http://localhost/api/friends/{friend}/un_block" 
```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/un_block");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "ユーザーをブロックしました"
}
```

### HTTP Request
`PUT api/friends/{friend}/un_block`


<!-- END_eaa9ff21b52cb918fcac65554c9b0bda -->

<!-- START_21d33fd99fad4620b704e1c5c2326a37 -->
## friends.show 特定の友達の詳細情報

> Example request:

```bash
curl -X GET -G "http://localhost/api/friends/{friend}" 
```

```javascript
const url = new URL("http://localhost/api/friends/{friend}");

    let params = {
            "friend": "J0oZ7p1CIS8AfMxt",
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
        "unique_id": "SuBV7ojy1A",
        "username": "中村 里佳",
        "email": "aota.minoru@example.net",
        "permitted": 1,
        "attribute_id": 3,
        "created_at": {
            "date": "2019-02-16 08:54:12.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:12.000000",
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
            "friend": "DC2x7Ge3dNceOoh6",
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
            "id": 38,
            "name": "praesentium",
            "shop_id": 600,
            "budget": 3839,
            "actual": 44982,
            "start_time": "2001-07-04 15:04:25",
            "end_time": null,
            "manager": {
                "id": 10,
                "unique_id": "emXbSyVTUQ",
                "username": "笹田 涼平",
                "email": "watanabe.hanako@example.net",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
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
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 5,
                    "unique_id": "P6nk9eYFNa",
                    "username": "杉山 さゆり",
                    "email": "ishida.yasuhiro@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 23,
                    "unique_id": "YPg9busRba",
                    "username": "斉藤 美加子",
                    "email": "taro06@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "unique_id": "7iiXsCHXHX",
                    "username": "宇野 健一",
                    "email": "iekoda@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 52,
            "name": "hic",
            "shop_id": 749,
            "budget": 23741,
            "actual": 12901,
            "start_time": "1973-02-03 19:20:02",
            "end_time": null,
            "manager": {
                "id": 13,
                "unique_id": "zoYGI0fjkx",
                "username": "松本 洋介",
                "email": "shota.kijima@example.com",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
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
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 18,
                    "unique_id": "wAeTXRnCVG",
                    "username": "廣川 春香",
                    "email": "kondo.yui@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 29,
                    "unique_id": "SVk5ozcbLB",
                    "username": "喜嶋 千代",
                    "email": "kenichi.saito@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 35,
                    "unique_id": "4gSJTRTzjb",
                    "username": "宇野 零",
                    "email": "iidaka@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:16.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:16.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 63,
            "name": "distinctio",
            "shop_id": 919,
            "budget": 21921,
            "actual": 32039,
            "start_time": "1970-02-10 18:07:16",
            "end_time": null,
            "manager": {
                "id": 16,
                "unique_id": "11wYuJICZo",
                "username": "加納 陽一",
                "email": "atsushi.saito@example.org",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
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
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 7,
                    "unique_id": "4tDrYkc54d",
                    "username": "佐藤 充",
                    "email": "kyamagishi@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 13,
                    "unique_id": "zoYGI0fjkx",
                    "username": "松本 洋介",
                    "email": "shota.kijima@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "unique_id": "7iiXsCHXHX",
                    "username": "宇野 健一",
                    "email": "iekoda@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 45,
                    "unique_id": "bjlwRQxcIn",
                    "username": "加藤 聡太郎",
                    "email": "nanami47@example.net",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:17.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:17.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 73,
            "name": "est",
            "shop_id": 323,
            "budget": 24410,
            "actual": 25880,
            "start_time": "1978-05-25 07:44:09",
            "end_time": null,
            "manager": {
                "id": 19,
                "unique_id": "Q8rboUilTo",
                "username": "鈴木 裕美子",
                "email": "aaota@example.net",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
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
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 8,
                    "unique_id": "RNVZRRFXZO",
                    "username": "工藤 舞",
                    "email": "haruka84@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 13,
                    "unique_id": "zoYGI0fjkx",
                    "username": "松本 洋介",
                    "email": "shota.kijima@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 14,
                    "unique_id": "Ja0b2rXucM",
                    "username": "田辺 知実",
                    "email": "ftanabe@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 20,
                    "unique_id": "263St8QJbN",
                    "username": "江古田 くみ子",
                    "email": "qishida@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "i9buJJSFQR",
                    "username": "青田 裕樹",
                    "email": "manabu86@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 75,
            "name": "inventore",
            "shop_id": 587,
            "budget": 19420,
            "actual": 5501,
            "start_time": "1979-11-13 18:42:52",
            "end_time": null,
            "manager": {
                "id": 19,
                "unique_id": "Q8rboUilTo",
                "username": "鈴木 裕美子",
                "email": "aaota@example.net",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
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
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 8,
                    "unique_id": "RNVZRRFXZO",
                    "username": "工藤 舞",
                    "email": "haruka84@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 10,
                    "unique_id": "emXbSyVTUQ",
                    "username": "笹田 涼平",
                    "email": "watanabe.hanako@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 16,
                    "unique_id": "11wYuJICZo",
                    "username": "加納 陽一",
                    "email": "atsushi.saito@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 36,
                    "unique_id": "47PvDzVhge",
                    "username": "小泉 明美",
                    "email": "yasuhiro85@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 42,
                    "unique_id": "otTkvr4SrY",
                    "username": "小泉 涼平",
                    "email": "momoko.kiriyama@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 76,
            "name": "ex",
            "shop_id": 715,
            "budget": 14662,
            "actual": 21689,
            "start_time": "2001-11-04 16:01:02",
            "end_time": null,
            "manager": {
                "id": 19,
                "unique_id": "Q8rboUilTo",
                "username": "鈴木 裕美子",
                "email": "aaota@example.net",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
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
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 13,
                    "unique_id": "zoYGI0fjkx",
                    "username": "松本 洋介",
                    "email": "shota.kijima@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 17,
                    "unique_id": "42wMtcgpzQ",
                    "username": "若松 陽子",
                    "email": "vuno@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "i9buJJSFQR",
                    "username": "青田 裕樹",
                    "email": "manabu86@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 27,
                    "unique_id": "aWJ5lecRo7",
                    "username": "浜田 浩",
                    "email": "akemi93@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 36,
                    "unique_id": "47PvDzVhge",
                    "username": "小泉 明美",
                    "email": "yasuhiro85@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 77,
            "name": "quas",
            "shop_id": 737,
            "budget": 5636,
            "actual": 35649,
            "start_time": "2016-05-23 12:00:34",
            "end_time": null,
            "manager": {
                "id": 20,
                "unique_id": "263St8QJbN",
                "username": "江古田 くみ子",
                "email": "qishida@example.org",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
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
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 3,
                    "unique_id": "ifgsESVTLX",
                    "username": "青山 太一",
                    "email": "sasada.osamu@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 15,
                    "unique_id": "jDZ6AleOE2",
                    "username": "佐々木 桃子",
                    "email": "hsakamoto@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 41,
                    "unique_id": "SRb7MvP5fh",
                    "username": "小泉 英樹",
                    "email": "ssaito@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 42,
                    "unique_id": "otTkvr4SrY",
                    "username": "小泉 涼平",
                    "email": "momoko.kiriyama@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 78,
            "name": "asperiores",
            "shop_id": 255,
            "budget": 24070,
            "actual": 23094,
            "start_time": "1983-09-18 19:15:47",
            "end_time": null,
            "manager": {
                "id": 20,
                "unique_id": "263St8QJbN",
                "username": "江古田 くみ子",
                "email": "qishida@example.org",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
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
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 18,
                    "unique_id": "wAeTXRnCVG",
                    "username": "廣川 春香",
                    "email": "kondo.yui@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 22,
                    "unique_id": "cHtCeDLd8l",
                    "username": "加納 加奈",
                    "email": "rei.tanabe@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 41,
                    "unique_id": "SRb7MvP5fh",
                    "username": "小泉 英樹",
                    "email": "ssaito@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 45,
                    "unique_id": "bjlwRQxcIn",
                    "username": "加藤 聡太郎",
                    "email": "nanami47@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 79,
            "name": "velit",
            "shop_id": 457,
            "budget": 21898,
            "actual": 13332,
            "start_time": "1978-10-09 19:01:22",
            "end_time": null,
            "manager": {
                "id": 20,
                "unique_id": "263St8QJbN",
                "username": "江古田 くみ子",
                "email": "qishida@example.org",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
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
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 3,
                    "unique_id": "ifgsESVTLX",
                    "username": "青山 太一",
                    "email": "sasada.osamu@example.org",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 38,
                    "unique_id": "7iiXsCHXHX",
                    "username": "宇野 健一",
                    "email": "iekoda@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 41,
                    "unique_id": "SRb7MvP5fh",
                    "username": "小泉 英樹",
                    "email": "ssaito@example.com",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 42,
                    "unique_id": "otTkvr4SrY",
                    "username": "小泉 涼平",
                    "email": "momoko.kiriyama@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 141,
            "name": "voluptate",
            "shop_id": 394,
            "budget": 14218,
            "actual": 6832,
            "start_time": "1979-03-10 15:09:18",
            "end_time": null,
            "manager": {
                "id": 36,
                "unique_id": "47PvDzVhge",
                "username": "小泉 明美",
                "email": "yasuhiro85@example.org",
                "created_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:12.000000",
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
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 7,
                    "unique_id": "4tDrYkc54d",
                    "username": "佐藤 充",
                    "email": "kyamagishi@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 17,
                    "unique_id": "42wMtcgpzQ",
                    "username": "若松 陽子",
                    "email": "vuno@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "i9buJJSFQR",
                    "username": "青田 裕樹",
                    "email": "manabu86@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 25,
                    "unique_id": "WRmHjbcNim",
                    "username": "佐藤 京助",
                    "email": "taichi24@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 142,
            "name": "illo",
            "shop_id": 219,
            "budget": 8318,
            "actual": 13724,
            "start_time": "1983-11-08 05:36:52",
            "end_time": null,
            "manager": {
                "id": 36,
                "unique_id": "47PvDzVhge",
                "username": "小泉 明美",
                "email": "yasuhiro85@example.org",
                "created_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:12.000000",
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
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 7,
                    "unique_id": "4tDrYkc54d",
                    "username": "佐藤 充",
                    "email": "kyamagishi@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 17,
                    "unique_id": "42wMtcgpzQ",
                    "username": "若松 陽子",
                    "email": "vuno@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "i9buJJSFQR",
                    "username": "青田 裕樹",
                    "email": "manabu86@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 40,
                    "unique_id": "vW3ea7rasf",
                    "username": "山田 涼平",
                    "email": "hhamada@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 144,
            "name": "quam",
            "shop_id": 877,
            "budget": 29604,
            "actual": 8649,
            "start_time": "1994-11-23 19:11:32",
            "end_time": null,
            "manager": {
                "id": 36,
                "unique_id": "47PvDzVhge",
                "username": "小泉 明美",
                "email": "yasuhiro85@example.org",
                "created_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:12.000000",
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
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 7,
                    "unique_id": "4tDrYkc54d",
                    "username": "佐藤 充",
                    "email": "kyamagishi@example.net",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 11,
                    "unique_id": "KaKPwtdgSG",
                    "username": "青田 陽子",
                    "email": "yuki33@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 21,
                    "unique_id": "i9buJJSFQR",
                    "username": "青田 裕樹",
                    "email": "manabu86@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 40,
                    "unique_id": "vW3ea7rasf",
                    "username": "山田 涼平",
                    "email": "hhamada@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 170,
            "name": "corrupti",
            "shop_id": 459,
            "budget": 27157,
            "actual": 4682,
            "start_time": "2005-02-25 20:45:31",
            "end_time": null,
            "manager": {
                "id": 43,
                "unique_id": "uPL6OlZXks",
                "username": "杉山 加奈",
                "email": "yuki.fujimoto@example.org",
                "created_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:12.000000",
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
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 16,
                    "unique_id": "11wYuJICZo",
                    "username": "加納 陽一",
                    "email": "atsushi.saito@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 39,
                    "unique_id": "I6HhWBgQII",
                    "username": "原田 加奈",
                    "email": "iyamada@example.net",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 40,
                    "unique_id": "vW3ea7rasf",
                    "username": "山田 涼平",
                    "email": "hhamada@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 49,
                    "unique_id": "ivbvdApz2u",
                    "username": "斉藤 さゆり",
                    "email": "momoko65@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 171,
            "name": "iure",
            "shop_id": 563,
            "budget": 7367,
            "actual": 23824,
            "start_time": "2010-07-30 13:54:04",
            "end_time": null,
            "manager": {
                "id": 43,
                "unique_id": "uPL6OlZXks",
                "username": "杉山 加奈",
                "email": "yuki.fujimoto@example.org",
                "created_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:12.000000",
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
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:31.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 5,
                    "unique_id": "P6nk9eYFNa",
                    "username": "杉山 さゆり",
                    "email": "ishida.yasuhiro@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 15,
                    "unique_id": "jDZ6AleOE2",
                    "username": "佐々木 桃子",
                    "email": "hsakamoto@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 45,
                    "unique_id": "bjlwRQxcIn",
                    "username": "加藤 聡太郎",
                    "email": "nanami47@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 49,
                    "unique_id": "ivbvdApz2u",
                    "username": "斉藤 さゆり",
                    "email": "momoko65@example.com",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:28.000000",
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
            "session": "c2SY5P0FUFGZzzW5",
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
        "id": 63,
        "name": "distinctio",
        "shop_id": 919,
        "budget": 21921,
        "actual": 32039,
        "start_time": "1970-02-10 18:07:16",
        "end_time": null,
        "manager": {
            "id": 16,
            "unique_id": "11wYuJICZo",
            "username": "加納 陽一",
            "email": "atsushi.saito@example.org",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
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
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 7,
                "unique_id": "4tDrYkc54d",
                "username": "佐藤 充",
                "email": "kyamagishi@example.net",
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 13,
                "unique_id": "zoYGI0fjkx",
                "username": "松本 洋介",
                "email": "shota.kijima@example.com",
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 38,
                "unique_id": "7iiXsCHXHX",
                "username": "宇野 健一",
                "email": "iekoda@example.org",
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 45,
                "unique_id": "bjlwRQxcIn",
                "username": "加藤 聡太郎",
                "email": "nanami47@example.net",
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-16 08:54:17.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:17.000000",
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
            "group": "I8drn5sDhAnLCbE5",
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
curl -X POST "http://localhost/api/groups/{group}/users"     -d "user_id"="17" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users");

    let params = {
            "group": "8NY2xLRKgvR3aoOQ",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "17",
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
            "group": "YsHfFOcnCgmQXrGq",
            "user": "XMn5qyZ3Gm6Q5RSa",
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
        "unique_id": "7iiXsCHXHX",
        "username": "宇野 健一",
        "email": "iekoda@example.org",
        "created_at": {
            "date": "2019-02-16 08:54:12.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:12.000000",
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
            "group": "cA89oRu0jTIoBBX8",
            "user": "tyBaiIXRY9EIGt35",
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
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "ex",
            "users": [
                {
                    "id": 8,
                    "unique_id": "RNVZRRFXZO",
                    "username": "工藤 舞",
                    "email": "haruka84@example.org",
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 10,
                    "unique_id": "emXbSyVTUQ",
                    "username": "笹田 涼平",
                    "email": "watanabe.hanako@example.net",
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "sed",
            "users": [
                {
                    "id": 16,
                    "unique_id": "11wYuJICZo",
                    "username": "加納 陽一",
                    "email": "atsushi.saito@example.org",
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 37,
                    "unique_id": "SuBV7ojy1A",
                    "username": "中村 里佳",
                    "email": "aota.minoru@example.net",
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "name": "est",
            "users": [
                {
                    "id": 8,
                    "unique_id": "RNVZRRFXZO",
                    "username": "工藤 舞",
                    "email": "haruka84@example.org",
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 10,
                    "unique_id": "emXbSyVTUQ",
                    "username": "笹田 涼平",
                    "email": "watanabe.hanako@example.net",
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
curl -X POST "http://localhost/api/groups"     -d "name"="VyXTZYQhBm2R3YOO" 
```

```javascript
const url = new URL("http://localhost/api/groups");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "VyXTZYQhBm2R3YOO",
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
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "sed",
        "users": [],
        "created_at": {
            "date": "2019-02-16 08:54:37.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:37.000000",
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
            "group": "6lRwuvnFq0OoCCUF",
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
        "id": 2,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "sed",
        "users": [
            {
                "id": 16,
                "unique_id": "11wYuJICZo",
                "username": "加納 陽一",
                "email": "atsushi.saito@example.org",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 37,
                "unique_id": "SuBV7ojy1A",
                "username": "中村 里佳",
                "email": "aota.minoru@example.net",
                "created_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-16 08:54:12.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:12.000000",
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
curl -X PUT "http://localhost/api/groups/{group}"     -d "name"="GphJJO7V00cE1fFv" 
```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "d1Ev7W3X6SuSg3ux",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "GphJJO7V00cE1fFv",
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
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "name": "newGroupRGe0PQcc",
        "users": [
            {
                "id": 8,
                "unique_id": "RNVZRRFXZO",
                "username": "工藤 舞",
                "email": "haruka84@example.org",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 10,
                "unique_id": "emXbSyVTUQ",
                "username": "笹田 涼平",
                "email": "watanabe.hanako@example.net",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-16 08:54:12.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:37.000000",
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
            "group": "fuOE9fT2mHlftxTS",
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
            "group": "wQANbZE618azLWuN",
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
            "unique_id": "RNVZRRFXZO",
            "username": "工藤 舞",
            "email": "haruka84@example.org",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 10,
            "unique_id": "emXbSyVTUQ",
            "username": "笹田 涼平",
            "email": "watanabe.hanako@example.net",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 16,
            "unique_id": "11wYuJICZo",
            "username": "加納 陽一",
            "email": "atsushi.saito@example.org",
            "permitted": 1,
            "attribute_id": 5,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 31,
            "unique_id": "oD6AkgmWYL",
            "username": "近藤 亮介",
            "email": "lmatsumoto@example.com",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 37,
            "unique_id": "SuBV7ojy1A",
            "username": "中村 里佳",
            "email": "aota.minoru@example.net",
            "permitted": 1,
            "attribute_id": 3,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 38,
            "unique_id": "7iiXsCHXHX",
            "username": "宇野 健一",
            "email": "iekoda@example.org",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 47,
            "unique_id": "cSEGlSfA3V",
            "username": "小泉 裕樹",
            "email": "osamu.miyazawa@example.net",
            "permitted": 1,
            "attribute_id": null,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 50,
            "unique_id": "ZGoiqXMGWk",
            "username": "木村 修平",
            "email": "hideki37@example.net",
            "permitted": 1,
            "attribute_id": 1,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
curl -X PUT "http://localhost/api/profile/update"     -d "unique_id"="tnSMy0qvFUtKdHEf" \
    -d "username"="LWlzOXPftowPVQJN" \
    -d "password"="Z53V5a00wvYT7jeX" \
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
    "unique_id": "tnSMy0qvFUtKdHEf",
    "username": "LWlzOXPftowPVQJN",
    "password": "Z53V5a00wvYT7jeX",
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
            "date": "2019-02-16 08:54:11.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:37.000000",
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
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:37.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 4,
            "unique_id": "lXmZkJS75a",
            "username": "笹田 美加子",
            "email": "ridaka@example.net",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 5,
            "unique_id": "P6nk9eYFNa",
            "username": "杉山 さゆり",
            "email": "ishida.yasuhiro@example.org",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 9,
            "unique_id": "H5kmS8luUA",
            "username": "三宅 あすか",
            "email": "yharada@example.net",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 11,
            "unique_id": "KaKPwtdgSG",
            "username": "青田 陽子",
            "email": "yuki33@example.net",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 12,
            "unique_id": "uM1LQDME8y",
            "username": "西之園 幹",
            "email": "rei83@example.net",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 14,
            "unique_id": "Ja0b2rXucM",
            "username": "田辺 知実",
            "email": "ftanabe@example.com",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 15,
            "unique_id": "jDZ6AleOE2",
            "username": "佐々木 桃子",
            "email": "hsakamoto@example.org",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 17,
            "unique_id": "42wMtcgpzQ",
            "username": "若松 陽子",
            "email": "vuno@example.com",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 18,
            "unique_id": "wAeTXRnCVG",
            "username": "廣川 春香",
            "email": "kondo.yui@example.org",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 20,
            "unique_id": "263St8QJbN",
            "username": "江古田 くみ子",
            "email": "qishida@example.org",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 24,
            "unique_id": "SdrpxpUyza",
            "username": "宮沢 晃",
            "email": "jito@example.org",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 25,
            "unique_id": "WRmHjbcNim",
            "username": "佐藤 京助",
            "email": "taichi24@example.com",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 27,
            "unique_id": "aWJ5lecRo7",
            "username": "浜田 浩",
            "email": "akemi93@example.net",
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 28,
            "unique_id": "GG9d3bhXaQ",
            "username": "中村 裕太",
            "email": "suzuki.satomi@example.net",
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 29,
            "unique_id": "SVk5ozcbLB",
            "username": "喜嶋 千代",
            "email": "kenichi.saito@example.org",
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 33,
            "unique_id": "SEPYs27i5k",
            "username": "吉田 学",
            "email": "kyosuke.tanaka@example.net",
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 34,
            "unique_id": "SeSy6Xmj37",
            "username": "廣川 直子",
            "email": "naoto98@example.org",
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 36,
            "unique_id": "47PvDzVhge",
            "username": "小泉 明美",
            "email": "yasuhiro85@example.org",
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 39,
            "unique_id": "I6HhWBgQII",
            "username": "原田 加奈",
            "email": "iyamada@example.net",
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 40,
            "unique_id": "vW3ea7rasf",
            "username": "山田 涼平",
            "email": "hhamada@example.com",
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 41,
            "unique_id": "SRb7MvP5fh",
            "username": "小泉 英樹",
            "email": "ssaito@example.com",
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 43,
            "unique_id": "uPL6OlZXks",
            "username": "杉山 加奈",
            "email": "yuki.fujimoto@example.org",
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 44,
            "unique_id": "58Ns10BRu3",
            "username": "杉山 里佳",
            "email": "bsuzuki@example.net",
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 46,
            "unique_id": "cfcMfTyUhK",
            "username": "渚 直子",
            "email": "kumiko.yoshimoto@example.org",
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 49,
            "unique_id": "ivbvdApz2u",
            "username": "斉藤 さゆり",
            "email": "momoko65@example.com",
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 54,
            "unique_id": "LjloJviZyf",
            "username": "aaaa",
            "email": "7Yn8T@new.com",
            "created_at": {
                "date": "2019-02-16 08:54:37.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:37.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 55,
            "unique_id": "aVCM5OaHGX",
            "username": "aaaa",
            "email": "G3pZlu@new.com",
            "created_at": {
                "date": "2019-02-16 08:54:37.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:37.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 56,
            "unique_id": "BJUdxFGOe3",
            "username": "aaaa",
            "email": "P1UVZNP@new.com",
            "created_at": {
                "date": "2019-02-16 08:54:37.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:37.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 57,
            "unique_id": "WxtQzeyQ7k",
            "username": "aaaa",
            "email": "T4A8YORc@new.com",
            "created_at": {
                "date": "2019-02-16 08:54:37.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:37.000000",
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
curl -X POST "http://localhost/api/search/forward_by_username"     -d "username"="fGX1I8v3IoUUmv8g" 
```

```javascript
const url = new URL("http://localhost/api/search/forward_by_username");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "username": "fGX1I8v3IoUUmv8g",
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
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:31.000000",
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
curl -X POST "http://localhost/api/search/perfect_by_unique_id"     -d "unique_id"="2Ac5498qYilo8j0I" 
```

```javascript
const url = new URL("http://localhost/api/search/perfect_by_unique_id");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "unique_id": "2Ac5498qYilo8j0I",
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
            "date": "2019-02-16 08:54:11.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:31.000000",
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
curl -X POST "http://localhost/api/search/forward_by_unique_id"     -d "unique_id"="sAwYiQsbzTbJsym8" 
```

```javascript
const url = new URL("http://localhost/api/search/forward_by_unique_id");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "unique_id": "sAwYiQsbzTbJsym8",
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
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 30,
            "unique_id": "TmMbUgHIBz",
            "username": "中村 舞",
            "email": "nanami.fujimoto@example.org",
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
            "session": "39OtWhyzzC18Je1Z",
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
            "id": 10,
            "unique_id": "emXbSyVTUQ",
            "username": "笹田 涼平",
            "email": "watanabe.hanako@example.net",
            "join_status": "deny",
            "paid": null,
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 31,
            "unique_id": "oD6AkgmWYL",
            "username": "近藤 亮介",
            "email": "lmatsumoto@example.com",
            "join_status": "allow",
            "paid": 1,
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 37,
            "unique_id": "SuBV7ojy1A",
            "username": "中村 里佳",
            "email": "aota.minoru@example.net",
            "join_status": "deny",
            "paid": null,
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 50,
            "unique_id": "ZGoiqXMGWk",
            "username": "木村 修平",
            "email": "hideki37@example.net",
            "join_status": "allow",
            "paid": 1,
            "plus_minus": null,
            "ratio": null,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
curl -X POST "http://localhost/api/sessions/{session}/users"     -d "user_id"="jsCbRGseEHJnRMYn" \
    -d "join_status"="4mL3RMoPG43xLQve" \
    -d "paid"="18" \
    -d "plus_minus"="18" \
    -d "ratio"="NpBTy0caS4rT6YKi" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "Nn9Mh1HFGAdE15f5",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "jsCbRGseEHJnRMYn",
    "join_status": "4mL3RMoPG43xLQve",
    "paid": "18",
    "plus_minus": "18",
    "ratio": "NpBTy0caS4rT6YKi",
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
            "id": 38,
            "unique_id": "7iiXsCHXHX",
            "username": "宇野 健一",
            "email": "iekoda@example.org",
            "join_status": "allow",
            "paid": 0,
            "plus_minus": 0,
            "ratio": null,
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
            "session": "gt0kdx4ZCOIwM4lT",
            "user": "jJgssdG9KSVszgth",
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
        "unique_id": "7iiXsCHXHX",
        "username": "宇野 健一",
        "email": "iekoda@example.org",
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 0,
        "ratio": null,
        "created_at": {
            "date": "2019-02-16 08:54:12.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:12.000000",
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
curl -X PUT "http://localhost/api/sessions/{session}/users/{user}"     -d "user_id"="9MjlWTRlOUMWBxeN" \
    -d "join_status"="Sgwe1jcRRWEND2jR" \
    -d "paid"="19" \
    -d "plus_minus"="12" \
    -d "ratio"="au8PwnfWb4mtbXGG" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "EtRriU08L7d0AIwH",
            "user": "345KVt6Ew3qHvao0",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "9MjlWTRlOUMWBxeN",
    "join_status": "Sgwe1jcRRWEND2jR",
    "paid": "19",
    "plus_minus": "12",
    "ratio": "au8PwnfWb4mtbXGG",
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
        "id": 37,
        "unique_id": "SuBV7ojy1A",
        "username": "中村 里佳",
        "email": "aota.minoru@example.net",
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 10000,
        "ratio": null,
        "created_at": {
            "date": "2019-02-16 08:54:12.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:12.000000",
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
            "session": "gTZ4nGXicRLS5p2j",
            "user": "aXAluoPp7flQ7Ar0",
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
            "name": "numquam",
            "shop_id": 549,
            "budget": 9629,
            "actual": 19998,
            "start_time": "1977-01-04 09:32:20",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 8,
                    "unique_id": "RNVZRRFXZO",
                    "username": "工藤 舞",
                    "email": "haruka84@example.org",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 16,
                    "unique_id": "11wYuJICZo",
                    "username": "加納 陽一",
                    "email": "atsushi.saito@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 31,
                    "unique_id": "oD6AkgmWYL",
                    "username": "近藤 亮介",
                    "email": "lmatsumoto@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 2,
            "name": "qui",
            "shop_id": 719,
            "budget": 19811,
            "actual": 1175,
            "start_time": "1988-04-20 08:47:02",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 16,
                    "unique_id": "11wYuJICZo",
                    "username": "加納 陽一",
                    "email": "atsushi.saito@example.org",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 47,
                    "unique_id": "cSEGlSfA3V",
                    "username": "小泉 裕樹",
                    "email": "osamu.miyazawa@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 50,
                    "unique_id": "ZGoiqXMGWk",
                    "username": "木村 修平",
                    "email": "hideki37@example.net",
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 3,
            "name": "qui",
            "shop_id": 889,
            "budget": 17707,
            "actual": 4869,
            "start_time": "1983-02-20 21:06:27",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 10,
                    "unique_id": "emXbSyVTUQ",
                    "username": "笹田 涼平",
                    "email": "watanabe.hanako@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 31,
                    "unique_id": "oD6AkgmWYL",
                    "username": "近藤 亮介",
                    "email": "lmatsumoto@example.com",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 37,
                    "unique_id": "SuBV7ojy1A",
                    "username": "中村 里佳",
                    "email": "aota.minoru@example.net",
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 50,
                    "unique_id": "ZGoiqXMGWk",
                    "username": "木村 修平",
                    "email": "hideki37@example.net",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 4,
            "name": "molestiae",
            "shop_id": 144,
            "budget": 5241,
            "actual": 46921,
            "start_time": "2013-04-27 22:57:39",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            "users": [
                {
                    "id": 8,
                    "unique_id": "RNVZRRFXZO",
                    "username": "工藤 舞",
                    "email": "haruka84@example.org",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 31,
                    "unique_id": "oD6AkgmWYL",
                    "username": "近藤 亮介",
                    "email": "lmatsumoto@example.com",
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                },
                {
                    "id": 37,
                    "unique_id": "SuBV7ojy1A",
                    "username": "中村 里佳",
                    "email": "aota.minoru@example.net",
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "ratio": null,
                    "created_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-16 08:54:12.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    }
                }
            ],
            "created_at": {
                "date": "2019-02-16 08:54:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:12.000000",
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
curl -X POST "http://localhost/api/sessions"     -d "name"="sAnqHlbTBkVI6wyw" \
    -d "shop_id"="17" \
    -d "budget"="20" \
    -d "actual"="15" \
    -d "start_time"="b380EKtQQdEIglG9" \
    -d "end_time"="8e2KIi9krUtukIKc" 
```

```javascript
const url = new URL("http://localhost/api/sessions");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "sAnqHlbTBkVI6wyw",
    "shop_id": "17",
    "budget": "20",
    "actual": "15",
    "start_time": "b380EKtQQdEIglG9",
    "end_time": "8e2KIi9krUtukIKc",
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
        "name": "newSessiongFKKX",
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
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [],
        "created_at": {
            "date": "2019-02-16 08:54:38.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:38.000000",
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
            "session": "bednrQrkdW7HprSJ",
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
        "id": 4,
        "name": "molestiae",
        "shop_id": 144,
        "budget": 5241,
        "actual": 46921,
        "start_time": "2013-04-27 22:57:39",
        "end_time": null,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "created_at": {
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [
            {
                "id": 8,
                "unique_id": "RNVZRRFXZO",
                "username": "工藤 舞",
                "email": "haruka84@example.org",
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 31,
                "unique_id": "oD6AkgmWYL",
                "username": "近藤 亮介",
                "email": "lmatsumoto@example.com",
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 37,
                "unique_id": "SuBV7ojy1A",
                "username": "中村 里佳",
                "email": "aota.minoru@example.net",
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-16 08:54:12.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:12.000000",
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
curl -X PUT "http://localhost/api/sessions/{session}"     -d "name"="MgGE8PF7MobXVpIO" \
    -d "shop_id"="9" \
    -d "budget"="4" \
    -d "actual"="17" \
    -d "start_time"="Psg30M1teIX4XRqh" \
    -d "end_time"="p61hSYeOOh4siG6f" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "vJM6HIlMYe23gBQa",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "MgGE8PF7MobXVpIO",
    "shop_id": "9",
    "budget": "4",
    "actual": "17",
    "start_time": "Psg30M1teIX4XRqh",
    "end_time": "p61hSYeOOh4siG6f",
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
        "name": "newUpdateSessionHFKNr",
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
                "date": "2019-02-16 08:54:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-16 08:54:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        "users": [
            {
                "id": 10,
                "unique_id": "emXbSyVTUQ",
                "username": "笹田 涼平",
                "email": "watanabe.hanako@example.net",
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 31,
                "unique_id": "oD6AkgmWYL",
                "username": "近藤 亮介",
                "email": "lmatsumoto@example.com",
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 37,
                "unique_id": "SuBV7ojy1A",
                "username": "中村 里佳",
                "email": "aota.minoru@example.net",
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            },
            {
                "id": 50,
                "unique_id": "ZGoiqXMGWk",
                "username": "木村 修平",
                "email": "hideki37@example.net",
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "ratio": null,
                "created_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-16 08:54:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                }
            }
        ],
        "created_at": {
            "date": "2019-02-16 08:54:12.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-16 08:54:38.000000",
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
            "session": "whW0w0f6DixYHEj1",
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


