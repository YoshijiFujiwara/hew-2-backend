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

#admin 管理者ページ
<!-- START_16e8f19f8b875dc584cd9ff3a21657f2 -->
## api/admin/groups
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/groups" 
```

```javascript
const url = new URL("http://localhost/api/admin/groups");

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

> Example response:

```json
null
```

### HTTP Request
`GET api/admin/groups`


<!-- END_16e8f19f8b875dc584cd9ff3a21657f2 -->

<!-- START_2bf3169a40c33f16d969dd6d64a5a09f -->
## api/admin/groups/{group}
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/groups/{group}" 
```

```javascript
const url = new URL("http://localhost/api/admin/groups/{group}");

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

> Example response:

```json
null
```

### HTTP Request
`GET api/admin/groups/{group}`


<!-- END_2bf3169a40c33f16d969dd6d64a5a09f -->

<!-- START_e4d4d7fb4ae896fde38ceed5b1927fc4 -->
## api/admin/groups/{group}
> Example request:

```bash
curl -X DELETE "http://localhost/api/admin/groups/{group}" 
```

```javascript
const url = new URL("http://localhost/api/admin/groups/{group}");

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


### HTTP Request
`DELETE api/admin/groups/{group}`


<!-- END_e4d4d7fb4ae896fde38ceed5b1927fc4 -->

<!-- START_da33775b36055453531edd783ecc8d25 -->
## api/admin/sessions
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/sessions" 
```

```javascript
const url = new URL("http://localhost/api/admin/sessions");

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

> Example response:

```json
null
```

### HTTP Request
`GET api/admin/sessions`


<!-- END_da33775b36055453531edd783ecc8d25 -->

<!-- START_a7775cea8212d21ad7719f96ec9caa56 -->
## api/admin/sessions/{session}
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/sessions/{session}" 
```

```javascript
const url = new URL("http://localhost/api/admin/sessions/{session}");

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

> Example response:

```json
null
```

### HTTP Request
`GET api/admin/sessions/{session}`


<!-- END_a7775cea8212d21ad7719f96ec9caa56 -->

<!-- START_5f5bb270627aea8826378210b369088e -->
## api/admin/sessions/{session}
> Example request:

```bash
curl -X DELETE "http://localhost/api/admin/sessions/{session}" 
```

```javascript
const url = new URL("http://localhost/api/admin/sessions/{session}");

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


### HTTP Request
`DELETE api/admin/sessions/{session}`


<!-- END_5f5bb270627aea8826378210b369088e -->

<!-- START_1fdf5c126c9b5b722e5044c3f680bf8e -->
## api/admin/users
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/users" 
```

```javascript
const url = new URL("http://localhost/api/admin/users");

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

> Example response:

```json
null
```

### HTTP Request
`GET api/admin/users`


<!-- END_1fdf5c126c9b5b722e5044c3f680bf8e -->

<!-- START_538c6352521b306dbf554e89cd64ac98 -->
## api/admin/users/{user}
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}");

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

> Example response:

```json
null
```

### HTTP Request
`GET api/admin/users/{user}`


<!-- END_538c6352521b306dbf554e89cd64ac98 -->

<!-- START_7d625b15e5b59cfac2c9129fa450c5f5 -->
## api/admin/users/{user}
> Example request:

```bash
curl -X DELETE "http://localhost/api/admin/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}");

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


### HTTP Request
`DELETE api/admin/users/{user}`


<!-- END_7d625b15e5b59cfac2c9129fa450c5f5 -->

<!-- START_0c83e767b9d8eab5c7d6a48c01a776a5 -->
## api/admin/attributes
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/attributes" 
```

```javascript
const url = new URL("http://localhost/api/admin/attributes");

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

> Example response:

```json
null
```

### HTTP Request
`GET api/admin/attributes`


<!-- END_0c83e767b9d8eab5c7d6a48c01a776a5 -->

<!-- START_85d269ea82abda45d2cfd9ca1e894738 -->
## api/admin/attributes/{attribute}
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/attributes/{attribute}" 
```

```javascript
const url = new URL("http://localhost/api/admin/attributes/{attribute}");

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

> Example response:

```json
null
```

### HTTP Request
`GET api/admin/attributes/{attribute}`


<!-- END_85d269ea82abda45d2cfd9ca1e894738 -->

<!-- START_f6008fa2212e92a4515292156a75c7dc -->
## api/admin/attributes/{attribute}
> Example request:

```bash
curl -X DELETE "http://localhost/api/admin/attributes/{attribute}" 
```

```javascript
const url = new URL("http://localhost/api/admin/attributes/{attribute}");

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


### HTTP Request
`DELETE api/admin/attributes/{attribute}`


<!-- END_f6008fa2212e92a4515292156a75c7dc -->

<!-- START_a0c5536b5e69dacdeaa7c874145adb5e -->
## api/admin/default_settings
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/default_settings" 
```

```javascript
const url = new URL("http://localhost/api/admin/default_settings");

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

> Example response:

```json
null
```

### HTTP Request
`GET api/admin/default_settings`


<!-- END_a0c5536b5e69dacdeaa7c874145adb5e -->

<!-- START_458b8842ee8a177acf3914671c94be0c -->
## api/admin/default_settings/{default_setting}
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/default_settings/{default_setting}" 
```

```javascript
const url = new URL("http://localhost/api/admin/default_settings/{default_setting}");

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

> Example response:

```json
null
```

### HTTP Request
`GET api/admin/default_settings/{default_setting}`


<!-- END_458b8842ee8a177acf3914671c94be0c -->

<!-- START_1d6dfd3bf461878d481b7448dfdf224c -->
## api/admin/default_settings/{default_setting}
> Example request:

```bash
curl -X DELETE "http://localhost/api/admin/default_settings/{default_setting}" 
```

```javascript
const url = new URL("http://localhost/api/admin/default_settings/{default_setting}");

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


### HTTP Request
`DELETE api/admin/default_settings/{default_setting}`


<!-- END_1d6dfd3bf461878d481b7448dfdf224c -->

<!-- START_c7dd4ed0af4ae5e260139308d1a8a35d -->
## api/admin/users/{user}/groups
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/users/{user}/groups" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}/groups");

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

> Example response:

```json
null
```

### HTTP Request
`GET api/admin/users/{user}/groups`


<!-- END_c7dd4ed0af4ae5e260139308d1a8a35d -->

<!-- START_7ecae2d30ec557c8ee796b3e933f2eb4 -->
## api/admin/users/{user}/sessions
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/users/{user}/sessions" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}/sessions");

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

> Example response:

```json
null
```

### HTTP Request
`GET api/admin/users/{user}/sessions`


<!-- END_7ecae2d30ec557c8ee796b3e933f2eb4 -->

<!-- START_54c838b78267436591a9f5013377e334 -->
## api/admin/users/{user}/attributes
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/users/{user}/attributes" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}/attributes");

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

> Example response:

```json
null
```

### HTTP Request
`GET api/admin/users/{user}/attributes`


<!-- END_54c838b78267436591a9f5013377e334 -->

<!-- START_ab61985c959558b512cd06fff84c80ed -->
## api/admin/users/{user}/default_settings
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/users/{user}/default_settings" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}/default_settings");

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

> Example response:

```json
null
```

### HTTP Request
`GET api/admin/users/{user}/default_settings`


<!-- END_ab61985c959558b512cd06fff84c80ed -->

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
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "dolores",
            "plus_minus": -1138,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 2,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "quo",
            "plus_minus": -1361,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "ab",
            "plus_minus": -2172,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "et",
            "plus_minus": 2204,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 5,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "consequatur",
            "plus_minus": -1823,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
    -d '{"name":"NoBFQEyZuV5tjpQb","plus_minus":11}'

```

```javascript
const url = new URL("http://localhost/api/attributes");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "NoBFQEyZuV5tjpQb",
    "plus_minus": 11
}

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
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "attributenameVqk83",
        "plus_minus": null,
        "created_at": {
            "date": "2019-02-22 01:55:17.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:55:17.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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
            "attribute": "rEBMx4LdhOT6CLo8",
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
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "ab",
        "plus_minus": -2172,
        "created_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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
curl -X PUT "http://localhost/api/attributes/{attribute}" \
    -H "Content-Type: application/json" \
    -d '{"name":"72a0gfyRzuJUrOtC","plus_minus":4}'

```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "mxcPTK6EMQJywQ64",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "72a0gfyRzuJUrOtC",
    "plus_minus": 4
}

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
            "unique_id": "TESTTEST",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "updateTItqV",
        "plus_minus": null,
        "created_at": {
            "date": "2019-02-22 01:55:17.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:55:17.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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
            "attribute": "PG9uMh7rcJPpdLQx",
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
curl -X POST "http://localhost/api/auth/register" \
    -H "Content-Type: application/json" \
    -d '{"email":"bJ7WMoQwS79wH3nv","username":"iVJ2on2MfNrA3BNF","password":"KHM6GxXBM8jxEoOi"}'

```

```javascript
const url = new URL("http://localhost/api/auth/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "bJ7WMoQwS79wH3nv",
    "username": "iVJ2on2MfNrA3BNF",
    "password": "KHM6GxXBM8jxEoOi"
}

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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVnaXN0ZXIiLCJpYXQiOjE1NTA4MDA1MTcsImV4cCI6MTU1MDgwNDExNywibmJmIjoxNTUwODAwNTE3LCJqdGkiOiJZME5aZWF2YndTcGg4Wm16Iiwic3ViIjo1MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.iRsnn-ljFTOBwse6C5XV1ny8RWwPmqc8YnGtZRZPNWw",
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
curl -X POST "http://localhost/api/auth/login" \
    -H "Content-Type: application/json" \
    -d '{"email":"uotEfIyhsAulgdea","password":"toHcgoCucz1vtsmv"}'

```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "uotEfIyhsAulgdea",
    "password": "toHcgoCucz1vtsmv"
}

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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTA4MDA1MTksImV4cCI6MTU1MDgwNDExOSwibmJmIjoxNTUwODAwNTE5LCJqdGkiOiJWR1RTalpUSHM2MkJ0cFNUIiwic3ViIjoyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.quFBQ5kkvyy5dNhKjY0TNwheWjo1LyHnjE-lhLW0fwk",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVmcmVzaCIsImlhdCI6MTU1MDgwMDUxOCwiZXhwIjoxNTUwODA0MTE4LCJuYmYiOjE1NTA4MDA1MTgsImp0aSI6Ik02NlFENTloTWYyaU9Ib2siLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.6vPKJWBLMF3eOrHcI5Nal4exUd_KqWwfApVvEpTuZG4",
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
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:47:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
    }
}
```

### HTTP Request
`POST api/auth/me`


<!-- END_a47210337df3b4ba0df697c115ba0c1e -->

<!-- START_5aa69278b83da3d25a1e9ed6ccd8175e -->
## api/admin/auth/register
> Example request:

```bash
curl -X POST "http://localhost/api/admin/auth/register" 
```

```javascript
const url = new URL("http://localhost/api/admin/auth/register");

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


### HTTP Request
`POST api/admin/auth/register`


<!-- END_5aa69278b83da3d25a1e9ed6ccd8175e -->

<!-- START_4f8dde6d111a96e088812e776f1e8bcc -->
## email, password でログインし、JWTを得る

> Example request:

```bash
curl -X POST "http://localhost/api/admin/auth/login" \
    -H "Content-Type: application/json" \
    -d '{"email":"qJg73nK39fiGoAVW","password":"0T6vmkwnSwvQmnVg"}'

```

```javascript
const url = new URL("http://localhost/api/admin/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "qJg73nK39fiGoAVW",
    "password": "0T6vmkwnSwvQmnVg"
}

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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTA4MDA1MTksImV4cCI6MTU1MDgwNDExOSwibmJmIjoxNTUwODAwNTE5LCJqdGkiOiJWR1RTalpUSHM2MkJ0cFNUIiwic3ViIjoyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.quFBQ5kkvyy5dNhKjY0TNwheWjo1LyHnjE-lhLW0fwk",
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
`POST api/admin/auth/login`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  required  | メールアドレス
    password | string |  required  | パスワード

<!-- END_4f8dde6d111a96e088812e776f1e8bcc -->

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
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "group": {
                "id": 1,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "voluptas",
                "users": [
                    {
                        "id": 4,
                        "unique_id": "VJkJx3apnV",
                        "name": null,
                        "username": "村山 治",
                        "email": "kato.naoko@example.net",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-02-22 01:46:48.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                            "date": "2019-02-22 01:46:48.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "deleted_at": null
                    },
                    {
                        "id": 28,
                        "unique_id": "89P69AgNHR",
                        "name": null,
                        "username": "宇野 直樹",
                        "email": "kimura.asuka@example.com",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-02-22 01:46:48.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                            "date": "2019-02-22 01:46:48.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "deleted_at": null
                    },
                    {
                        "id": 48,
                        "unique_id": "fRJWtjbfbk",
                        "name": null,
                        "username": "原田 修平",
                        "email": "kudo.yasuhiro@example.net",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-02-22 01:46:48.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                            "date": "2019-02-22 01:46:48.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "deleted_at": null
                    }
                ],
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "oSUIonM",
            "timer": "01:00:00",
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
curl -X POST "http://localhost/api/default_settings" \
    -H "Content-Type: application/json" \
    -d '{"name":"ftUsvpfPW9XyeYkh","timer":17,"group_id":19}'

```

```javascript
const url = new URL("http://localhost/api/default_settings");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "ftUsvpfPW9XyeYkh",
    "timer": 17,
    "group_id": 19
}

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
        "id": 52,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "group": {
            "id": 1,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "voluptas",
            "users": [
                {
                    "id": 4,
                    "unique_id": "VJkJx3apnV",
                    "name": null,
                    "username": "村山 治",
                    "email": "kato.naoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "89P69AgNHR",
                    "name": null,
                    "username": "宇野 直樹",
                    "email": "kimura.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "fRJWtjbfbk",
                    "name": null,
                    "username": "原田 修平",
                    "email": "kudo.yasuhiro@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "oSUIonM",
        "timer": "01:00:00",
        "created_at": {
            "date": "2019-02-22 01:55:18.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:55:18.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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
            "default_setting": "KPkc44qPfI99S4iz",
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
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "group": {
            "id": 4,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "et",
            "users": [
                {
                    "id": 26,
                    "unique_id": "dafzXTcBz0",
                    "name": null,
                    "username": "中津川 英樹",
                    "email": "tomoya.idaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "s41RMemNal",
                    "name": null,
                    "username": "加藤 春香",
                    "email": "haruka08@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "fRJWtjbfbk",
                    "name": null,
                    "username": "原田 修平",
                    "email": "kudo.yasuhiro@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "p0Dmxu",
        "timer": "01:00:00",
        "created_at": {
            "date": "2019-02-22 01:55:18.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:55:18.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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
curl -X PUT "http://localhost/api/default_settings/{default_setting}" \
    -H "Content-Type: application/json" \
    -d '{"name":"wgSRwj7J6VtKDa9W","timer":8,"group_id":12}'

```

```javascript
const url = new URL("http://localhost/api/default_settings/{default_setting}");

    let params = {
            "default_setting": "b9ZgJRPx5ti25QGx",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "wgSRwj7J6VtKDa9W",
    "timer": 8,
    "group_id": 12
}

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
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "group": {
            "id": 5,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "quos",
            "users": [
                {
                    "id": 10,
                    "unique_id": "Q3QDvVrd5v",
                    "name": null,
                    "username": "佐々木 太郎",
                    "email": "yasuhiro11@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "gglyfUdqZb",
                    "name": null,
                    "username": "青山 聡太郎",
                    "email": "kobayashi.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "dafzXTcBz0",
                    "name": null,
                    "username": "中津川 英樹",
                    "email": "tomoya.idaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "newSettings1JyLKxbz",
        "timer": "01:00:00",
        "created_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:55:18.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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
            "default_setting": "3Vd6y4ktutDUIYlN",
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
            "unique_id": "VJkJx3apnV",
            "name": null,
            "username": "村山 治",
            "email": "kato.naoko@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 9,
            "unique_id": "r78yDXEyy7",
            "name": null,
            "username": "浜田 真綾",
            "email": "kyosuke43@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consequatur",
                "plus_minus": -1823,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 10,
            "unique_id": "Q3QDvVrd5v",
            "name": null,
            "username": "佐々木 太郎",
            "email": "yasuhiro11@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 2,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quo",
                "plus_minus": -1361,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "rWLoAfVLqq",
            "name": null,
            "username": "石田 晃",
            "email": "yuki92@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 25,
            "unique_id": "gglyfUdqZb",
            "name": null,
            "username": "青山 聡太郎",
            "email": "kobayashi.kyosuke@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consequatur",
                "plus_minus": -1823,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "dafzXTcBz0",
            "name": null,
            "username": "中津川 英樹",
            "email": "tomoya.idaka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "89P69AgNHR",
            "name": null,
            "username": "宇野 直樹",
            "email": "kimura.asuka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "DSvcdRmnik",
            "name": null,
            "username": "中島 明美",
            "email": "takuma.nagisa@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 2,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quo",
                "plus_minus": -1361,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "unique_id": "MLFs500PMq",
            "name": null,
            "username": "桐山 香織",
            "email": "rika51@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consequatur",
                "plus_minus": -1823,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "s41RMemNal",
            "name": null,
            "username": "加藤 春香",
            "email": "haruka08@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "fRJWtjbfbk",
            "name": null,
            "username": "原田 修平",
            "email": "kudo.yasuhiro@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
    -d '{"email":"HRN7A1Ev4MhWPN5e"}'

```

```javascript
const url = new URL("http://localhost/api/friends");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "HRN7A1Ev4MhWPN5e"
}

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
    "name": null,
    "username": "テスト太郎",
    "email": "testuser@example.com",
    "unique_id_search_flag": 1,
    "username_search_flag": 1,
    "permitted": null,
    "attribute": null,
    "created_at": {
        "date": "2019-02-22 01:46:48.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "updated_at": {
        "date": "2019-02-22 01:47:06.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "deleted_at": null
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
            "id": 4,
            "unique_id": "VJkJx3apnV",
            "name": null,
            "username": "村山 治",
            "email": "kato.naoko@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 19,
                "manager": {
                    "id": 4,
                    "unique_id": "VJkJx3apnV",
                    "name": null,
                    "username": "村山 治",
                    "email": "kato.naoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "et",
                "plus_minus": -1125,
                "created_at": {
                    "date": "2019-02-22 01:46:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 9,
            "unique_id": "r78yDXEyy7",
            "name": null,
            "username": "浜田 真綾",
            "email": "kyosuke43@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 42,
                "manager": {
                    "id": 9,
                    "unique_id": "r78yDXEyy7",
                    "name": null,
                    "username": "浜田 真綾",
                    "email": "kyosuke43@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "deleniti",
                "plus_minus": -971,
                "created_at": {
                    "date": "2019-02-22 01:46:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 11,
            "unique_id": "X03m0Pxexr",
            "name": null,
            "username": "山本 学",
            "email": "taichi89@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 54,
                "manager": {
                    "id": 11,
                    "unique_id": "X03m0Pxexr",
                    "name": null,
                    "username": "山本 学",
                    "email": "taichi89@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quod",
                "plus_minus": -758,
                "created_at": {
                    "date": "2019-02-22 01:46:52.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:52.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "lrTzX3EEup",
            "name": null,
            "username": "浜田 春香",
            "email": "yasuhiro87@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 70,
                "manager": {
                    "id": 14,
                    "unique_id": "lrTzX3EEup",
                    "name": null,
                    "username": "浜田 春香",
                    "email": "yasuhiro87@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quo",
                "plus_minus": 2500,
                "created_at": {
                    "date": "2019-02-22 01:46:53.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:53.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 22,
            "unique_id": "51ZncwjVjU",
            "name": null,
            "username": "井高 里佳",
            "email": "ryosuke.tsuda@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 107,
                "manager": {
                    "id": 22,
                    "unique_id": "51ZncwjVjU",
                    "name": null,
                    "username": "井高 里佳",
                    "email": "ryosuke.tsuda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ipsam",
                "plus_minus": -605,
                "created_at": {
                    "date": "2019-02-22 01:46:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "S8oE6lPRjI",
            "name": null,
            "username": "宇野 真綾",
            "email": "taichi.ogaki@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 189,
                "manager": {
                    "id": 38,
                    "unique_id": "S8oE6lPRjI",
                    "name": null,
                    "username": "宇野 真綾",
                    "email": "taichi.ogaki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "aliquam",
                "plus_minus": -656,
                "created_at": {
                    "date": "2019-02-22 01:47:01.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:01.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "unique_id": "uSg422LF0O",
            "name": null,
            "username": "鈴木 明美",
            "email": "yasuhiro.matsumoto@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 212,
                "manager": {
                    "id": 43,
                    "unique_id": "uSg422LF0O",
                    "name": null,
                    "username": "鈴木 明美",
                    "email": "yasuhiro.matsumoto@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "voluptatem",
                "plus_minus": -1379,
                "created_at": {
                    "date": "2019-02-22 01:47:03.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:03.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "7GeGYUEcY0",
            "name": null,
            "username": "廣川 陽子",
            "email": "bkato@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 250,
                "manager": {
                    "id": 50,
                    "unique_id": "7GeGYUEcY0",
                    "name": null,
                    "username": "廣川 陽子",
                    "email": "bkato@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quod",
                "plus_minus": 2937,
                "created_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
            "id": 11,
            "unique_id": "X03m0Pxexr",
            "name": null,
            "username": "山本 学",
            "email": "taichi89@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 2,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quo",
                "plus_minus": -1361,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 20,
            "unique_id": "HiMw8u4b0B",
            "name": null,
            "username": "山田 千代",
            "email": "yumiko05@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 24,
            "unique_id": "0ALfgWNZ9x",
            "name": null,
            "username": "佐藤 翔太",
            "email": "ytsuda@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 2,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quo",
                "plus_minus": -1361,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 29,
            "unique_id": "gRTMGMhttj",
            "name": null,
            "username": "吉田 美加子",
            "email": "gogaki@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": null,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 30,
            "unique_id": "OpGAjhikva",
            "name": null,
            "username": "渡辺 晃",
            "email": "taichi.sakamoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "et",
                "plus_minus": 2204,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 35,
            "unique_id": "a5nEN6LQiu",
            "name": null,
            "username": "渚 美加子",
            "email": "naoko.yoshida@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": null,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "dcIueOcAMm",
            "name": null,
            "username": "笹田 裕樹",
            "email": "ryosuke.idaka@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
            "unique_id": "ezZcHsN5uf",
            "name": null,
            "username": "中村 翼",
            "email": "mnakajima@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consequatur",
                "plus_minus": -1823,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 5,
            "unique_id": "b1Ey8xk6pE",
            "name": null,
            "username": "吉田 零",
            "email": "kmurayama@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 2,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quo",
                "plus_minus": -1361,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 21,
            "unique_id": "oWYOrTRdij",
            "name": null,
            "username": "鈴木 直樹",
            "email": "momoko.nakajima@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 22,
            "unique_id": "51ZncwjVjU",
            "name": null,
            "username": "井高 里佳",
            "email": "ryosuke.tsuda@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 27,
            "unique_id": "j7kGQDotLe",
            "name": null,
            "username": "若松 あすか",
            "email": "manabu26@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 2,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quo",
                "plus_minus": -1361,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 46,
            "unique_id": "1LaeT9cZ6d",
            "name": null,
            "username": "松本 美加子",
            "email": "qishida@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consequatur",
                "plus_minus": -1823,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "7GeGYUEcY0",
            "name": null,
            "username": "廣川 陽子",
            "email": "bkato@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 2,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quo",
                "plus_minus": -1361,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 53,
            "unique_id": "UpkFZXMNh2",
            "name": null,
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-02-22 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
            "id": 6,
            "unique_id": "gS7Buze4RZ",
            "name": null,
            "username": "小林 充",
            "email": "awakamatsu@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 28,
                "manager": {
                    "id": 6,
                    "unique_id": "gS7Buze4RZ",
                    "name": null,
                    "username": "小林 充",
                    "email": "awakamatsu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quibusdam",
                "plus_minus": -2914,
                "created_at": {
                    "date": "2019-02-22 01:46:50.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:50.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 8,
            "unique_id": "C1QHAeMZDY",
            "name": null,
            "username": "杉山 聡太郎",
            "email": "kobayashi.hanako@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 39,
                "manager": {
                    "id": 8,
                    "unique_id": "C1QHAeMZDY",
                    "name": null,
                    "username": "杉山 聡太郎",
                    "email": "kobayashi.hanako@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consequuntur",
                "plus_minus": 1402,
                "created_at": {
                    "date": "2019-02-22 01:46:50.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:50.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 16,
            "unique_id": "pmIRzCbdOz",
            "name": null,
            "username": "浜田 翔太",
            "email": "yui.nakamura@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 79,
                "manager": {
                    "id": 16,
                    "unique_id": "pmIRzCbdOz",
                    "name": null,
                    "username": "浜田 翔太",
                    "email": "yui.nakamura@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "non",
                "plus_minus": 2778,
                "created_at": {
                    "date": "2019-02-22 01:46:53.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:53.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 17,
            "unique_id": "4j5gsSXKju",
            "name": null,
            "username": "加藤 直人",
            "email": "yoko.yamamoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 82,
                "manager": {
                    "id": 17,
                    "unique_id": "4j5gsSXKju",
                    "name": null,
                    "username": "加藤 直人",
                    "email": "yoko.yamamoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "sint",
                "plus_minus": -1578,
                "created_at": {
                    "date": "2019-02-22 01:46:54.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:54.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "89P69AgNHR",
            "name": null,
            "username": "宇野 直樹",
            "email": "kimura.asuka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 136,
                "manager": {
                    "id": 28,
                    "unique_id": "89P69AgNHR",
                    "name": null,
                    "username": "宇野 直樹",
                    "email": "kimura.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "pariatur",
                "plus_minus": -2967,
                "created_at": {
                    "date": "2019-02-22 01:46:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 40,
            "unique_id": "5VOaZUpNwY",
            "name": null,
            "username": "宇野 零",
            "email": "yamamoto.soutaro@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 200,
                "manager": {
                    "id": 40,
                    "unique_id": "5VOaZUpNwY",
                    "name": null,
                    "username": "宇野 零",
                    "email": "yamamoto.soutaro@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quidem",
                "plus_minus": -2391,
                "created_at": {
                    "date": "2019-02-22 01:47:02.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:02.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "dcIueOcAMm",
            "name": null,
            "username": "笹田 裕樹",
            "email": "ryosuke.idaka@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 204,
                "manager": {
                    "id": 41,
                    "unique_id": "dcIueOcAMm",
                    "name": null,
                    "username": "笹田 裕樹",
                    "email": "ryosuke.idaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "blanditiis",
                "plus_minus": -2218,
                "created_at": {
                    "date": "2019-02-22 01:47:02.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:02.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 42,
            "unique_id": "RwSiWcbK9T",
            "name": null,
            "username": "喜嶋 淳",
            "email": "yoko.sato@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 206,
                "manager": {
                    "id": 42,
                    "unique_id": "RwSiWcbK9T",
                    "name": null,
                    "username": "喜嶋 淳",
                    "email": "yoko.sato@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consequatur",
                "plus_minus": -877,
                "created_at": {
                    "date": "2019-02-22 01:47:03.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:03.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "unique_id": "mqHczJGA3z",
            "name": null,
            "username": "加納 晃",
            "email": "taichi20@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 221,
                "manager": {
                    "id": 45,
                    "unique_id": "mqHczJGA3z",
                    "name": null,
                    "username": "加納 晃",
                    "email": "taichi20@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "dolorem",
                "plus_minus": 2447,
                "created_at": {
                    "date": "2019-02-22 01:47:04.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:04.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "s41RMemNal",
            "name": null,
            "username": "加藤 春香",
            "email": "haruka08@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 234,
                "manager": {
                    "id": 47,
                    "unique_id": "s41RMemNal",
                    "name": null,
                    "username": "加藤 春香",
                    "email": "haruka08@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": 2765,
                "created_at": {
                    "date": "2019-02-22 01:47:05.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:05.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
            "id": 5,
            "unique_id": "b1Ey8xk6pE",
            "name": null,
            "username": "吉田 零",
            "email": "kmurayama@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 24,
                "manager": {
                    "id": 5,
                    "unique_id": "b1Ey8xk6pE",
                    "name": null,
                    "username": "吉田 零",
                    "email": "kmurayama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "et",
                "plus_minus": 1502,
                "created_at": {
                    "date": "2019-02-22 01:46:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 15,
            "unique_id": "2IHEPejvwn",
            "name": null,
            "username": "松本 舞",
            "email": "soutaro87@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 74,
                "manager": {
                    "id": 15,
                    "unique_id": "2IHEPejvwn",
                    "name": null,
                    "username": "松本 舞",
                    "email": "soutaro87@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "rerum",
                "plus_minus": -2538,
                "created_at": {
                    "date": "2019-02-22 01:46:53.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:53.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 21,
            "unique_id": "oWYOrTRdij",
            "name": null,
            "username": "鈴木 直樹",
            "email": "momoko.nakajima@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 102,
                "manager": {
                    "id": 21,
                    "unique_id": "oWYOrTRdij",
                    "name": null,
                    "username": "鈴木 直樹",
                    "email": "momoko.nakajima@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "corrupti",
                "plus_minus": -1140,
                "created_at": {
                    "date": "2019-02-22 01:46:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 35,
            "unique_id": "a5nEN6LQiu",
            "name": null,
            "username": "渚 美加子",
            "email": "naoko.yoshida@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 175,
                "manager": {
                    "id": 35,
                    "unique_id": "a5nEN6LQiu",
                    "name": null,
                    "username": "渚 美加子",
                    "email": "naoko.yoshida@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "laborum",
                "plus_minus": 336,
                "created_at": {
                    "date": "2019-02-22 01:47:00.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:00.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 46,
            "unique_id": "1LaeT9cZ6d",
            "name": null,
            "username": "松本 美加子",
            "email": "qishida@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 228,
                "manager": {
                    "id": 46,
                    "unique_id": "1LaeT9cZ6d",
                    "name": null,
                    "username": "松本 美加子",
                    "email": "qishida@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "hic",
                "plus_minus": -2897,
                "created_at": {
                    "date": "2019-02-22 01:47:04.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:04.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
curl -X POST "http://localhost/api/friends/permit" \
    -H "Content-Type: application/json" \
    -d '{"user_id":7}'

```

```javascript
const url = new URL("http://localhost/api/friends/permit");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 7
}

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
curl -X POST "http://localhost/api/friends/reject" \
    -H "Content-Type: application/json" \
    -d '{"user_id":14}'

```

```javascript
const url = new URL("http://localhost/api/friends/reject");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 14
}

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

<!-- START_d2bbcd8a971e1a99f6ed4c107329fea0 -->
## friends.update_attribute フレンドにつける属性IDを更新する

> Example request:

```bash
curl -X GET -G "http://localhost/api/friends/{friend}/attribute" \
    -H "Content-Type: application/json" \
    -d '{"attribute_id":20}'

```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/attribute");

    let params = {
            "friend": "fKLFDZfwVJJ8IbhY",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "attribute_id": 20
}

fetch(url, {
    method: "GET",
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
        "unique_id": "MdHD12Iu7P",
        "name": null,
        "username": "村山 千代",
        "email": "kumiko.miyake@example.net",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "permitted": 1,
        "attribute_id": 1,
        "created_at": {
            "date": "2019-02-17 15:51:55.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-17 15:51:55.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
    }
}
```

### HTTP Request
`GET api/friends/{friend}/attribute`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    attribute_id | integer |  required  | 更新する属性ID
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    friend |  required  | フレンドID

<!-- END_d2bbcd8a971e1a99f6ed4c107329fea0 -->

<!-- START_503d277be7521776643e8b87b045dce6 -->
## friends.update_attribute フレンドにつける属性IDを更新する

> Example request:

```bash
curl -X PUT "http://localhost/api/friends/{friend}/attribute" \
    -H "Content-Type: application/json" \
    -d '{"attribute_id":8}'

```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/attribute");

    let params = {
            "friend": "4XfwV7BtNRwKETav",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "attribute_id": 8
}

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
        "unique_id": "MdHD12Iu7P",
        "name": null,
        "username": "村山 千代",
        "email": "kumiko.miyake@example.net",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "permitted": 1,
        "attribute_id": 1,
        "created_at": {
            "date": "2019-02-17 15:51:55.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-17 15:51:55.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
    }
}
```

### HTTP Request
`PUT api/friends/{friend}/attribute`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    attribute_id | integer |  required  | 更新する属性ID
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    friend |  required  | フレンドID

<!-- END_503d277be7521776643e8b87b045dce6 -->

<!-- START_3a81e8c3e2baa86208b7cfed26dcd78e -->
## friends.cancel_invitation 友達申請したけど、やっぱり取り消そう

> Example request:

```bash
curl -X PUT "http://localhost/api/friends/{friend}/cancel_invitation" 
```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/cancel_invitation");

    let params = {
            "friend": "u9v8Xyxb8eFNGFvc",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    friend |  required  | フレンドID

<!-- END_3a81e8c3e2baa86208b7cfed26dcd78e -->

<!-- START_0fcc5bf895e6f9b1ed641eaf00566908 -->
## friends.block ブロックする。すでに友達の場合は、削除もする

> Example request:

```bash
curl -X PUT "http://localhost/api/friends/{friend}/block" 
```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/block");

    let params = {
            "friend": "JmkJ914vlKQQx6oX",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    friend |  required  | フレンドID

<!-- END_0fcc5bf895e6f9b1ed641eaf00566908 -->

<!-- START_eaa9ff21b52cb918fcac65554c9b0bda -->
## friends.unBlock ブロックしてたけど、かわいそうだから解除してやろう

> Example request:

```bash
curl -X PUT "http://localhost/api/friends/{friend}/un_block" 
```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/un_block");

    let params = {
            "friend": "PErICb5VkbVlBvJ7",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    friend |  required  | フレンドID

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
            "friend": "2241tbmYkLnxQu8G",
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
        "unique_id": "s41RMemNal",
        "name": null,
        "username": "加藤 春香",
        "email": "haruka08@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "permitted": 1,
        "attribute": {
            "id": 3,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "ab",
            "plus_minus": -2172,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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
            "friend": "NZOXQ55bVosJU76r",
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
<!-- START_0d49eba0197732a81fbc957b920dd173 -->
## push_notification.store_device_token android端末のデバイスIDを保存する

> Example request:

```bash
curl -X POST "http://localhost/api/device_token" \
    -H "Content-Type: application/json" \
    -d '{"device_token":"XGRPt94EmXjRzFeL"}'

```

```javascript
const url = new URL("http://localhost/api/device_token");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "device_token": "XGRPt94EmXjRzFeL"
}

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
        "id": 2,
        "user": {
            "id": 1,
            "unique_id": "TESTTEST",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "device_token": "newTokenkCmRx8FVLEVgKUv766wR",
        "created_at": {
            "date": "2019-02-22 01:55:17.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:55:17.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
    }
}
```
> Example response (208):

```json
{
    "message": "このデバイストークンは登録済みです"
}
```

### HTTP Request
`POST api/device_token`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    device_token | string |  required  | 端末トークン（ID)

<!-- END_0d49eba0197732a81fbc957b920dd173 -->

<!-- START_b4e106d84078f8bf2fa9685789b52b14 -->
## api/admin/test
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/test" 
```

```javascript
const url = new URL("http://localhost/api/admin/test");

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

> Example response:

```json
null
```

### HTTP Request
`GET api/admin/test`


<!-- END_b4e106d84078f8bf2fa9685789b52b14 -->

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
            "group": "5XR1Otm66VTDgRb2",
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
            "id": 9,
            "unique_id": "r78yDXEyy7",
            "name": null,
            "username": "浜田 真綾",
            "email": "kyosuke43@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 10,
            "unique_id": "Q3QDvVrd5v",
            "name": null,
            "username": "佐々木 太郎",
            "email": "yasuhiro11@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
    -d '{"user_id":17}'

```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users");

    let params = {
            "group": "d53j65fVXaRDnVc7",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 17
}

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
            "group": "UwTf3E2KlCr7xd5H",
            "user": "8vVyy4ti3xeQLkiJ",
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
        "id": 9,
        "unique_id": "r78yDXEyy7",
        "name": null,
        "username": "浜田 真綾",
        "email": "kyosuke43@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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
            "group": "Rti4ryflDEYVLI2e",
            "user": "r9Poju2Fv3mgP4Pm",
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
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "voluptas",
            "users": [
                {
                    "id": 4,
                    "unique_id": "VJkJx3apnV",
                    "name": null,
                    "username": "村山 治",
                    "email": "kato.naoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "89P69AgNHR",
                    "name": null,
                    "username": "宇野 直樹",
                    "email": "kimura.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "fRJWtjbfbk",
                    "name": null,
                    "username": "原田 修平",
                    "email": "kudo.yasuhiro@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 2,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "itaque",
            "users": [
                {
                    "id": 13,
                    "unique_id": "rWLoAfVLqq",
                    "name": null,
                    "username": "石田 晃",
                    "email": "yuki92@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "DSvcdRmnik",
                    "name": null,
                    "username": "中島 明美",
                    "email": "takuma.nagisa@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "MLFs500PMq",
                    "name": null,
                    "username": "桐山 香織",
                    "email": "rika51@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "ut",
            "users": [
                {
                    "id": 9,
                    "unique_id": "r78yDXEyy7",
                    "name": null,
                    "username": "浜田 真綾",
                    "email": "kyosuke43@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "Q3QDvVrd5v",
                    "name": null,
                    "username": "佐々木 太郎",
                    "email": "yasuhiro11@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "et",
            "users": [
                {
                    "id": 26,
                    "unique_id": "dafzXTcBz0",
                    "name": null,
                    "username": "中津川 英樹",
                    "email": "tomoya.idaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "s41RMemNal",
                    "name": null,
                    "username": "加藤 春香",
                    "email": "haruka08@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "fRJWtjbfbk",
                    "name": null,
                    "username": "原田 修平",
                    "email": "kudo.yasuhiro@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 5,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "quos",
            "users": [
                {
                    "id": 10,
                    "unique_id": "Q3QDvVrd5v",
                    "name": null,
                    "username": "佐々木 太郎",
                    "email": "yasuhiro11@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "dafzXTcBz0",
                    "name": null,
                    "username": "中津川 英樹",
                    "email": "tomoya.idaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
    -d '{"name":"bSC36xKHfKfs9vWt"}'

```

```javascript
const url = new URL("http://localhost/api/groups");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "bSC36xKHfKfs9vWt"
}

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
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "et",
        "users": [],
        "created_at": {
            "date": "2019-02-22 01:55:19.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:55:19.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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
            "group": "qwgnVUhGEELSeV6n",
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
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "et",
        "users": [
            {
                "id": 26,
                "unique_id": "dafzXTcBz0",
                "name": null,
                "username": "中津川 英樹",
                "email": "tomoya.idaka@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 47,
                "unique_id": "s41RMemNal",
                "name": null,
                "username": "加藤 春香",
                "email": "haruka08@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 48,
                "unique_id": "fRJWtjbfbk",
                "name": null,
                "username": "原田 修平",
                "email": "kudo.yasuhiro@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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
    -d '{"name":"y3TcHbsb1wuMX1sJ"}'

```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "xs4GJqU4kvIi4EhT",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "y3TcHbsb1wuMX1sJ"
}

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
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "newGroup7b9XcgSI",
        "users": [
            {
                "id": 13,
                "unique_id": "rWLoAfVLqq",
                "name": null,
                "username": "石田 晃",
                "email": "yuki92@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 31,
                "unique_id": "DSvcdRmnik",
                "name": null,
                "username": "中島 明美",
                "email": "takuma.nagisa@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 34,
                "unique_id": "MLFs500PMq",
                "name": null,
                "username": "桐山 香織",
                "email": "rika51@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:55:19.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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
            "group": "qnwxE7catdT2Ep5C",
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
            "group": "1IfjhvaIEgzMxbuN",
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
            "id": 9,
            "unique_id": "r78yDXEyy7",
            "name": null,
            "username": "浜田 真綾",
            "email": "kyosuke43@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consequatur",
                "plus_minus": -1823,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 10,
            "unique_id": "Q3QDvVrd5v",
            "name": null,
            "username": "佐々木 太郎",
            "email": "yasuhiro11@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 2,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quo",
                "plus_minus": -1361,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "rWLoAfVLqq",
            "name": null,
            "username": "石田 晃",
            "email": "yuki92@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "dafzXTcBz0",
            "name": null,
            "username": "中津川 英樹",
            "email": "tomoya.idaka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "DSvcdRmnik",
            "name": null,
            "username": "中島 明美",
            "email": "takuma.nagisa@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 2,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quo",
                "plus_minus": -1361,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "unique_id": "MLFs500PMq",
            "name": null,
            "username": "桐山 香織",
            "email": "rika51@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consequatur",
                "plus_minus": -1823,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "s41RMemNal",
            "name": null,
            "username": "加藤 春香",
            "email": "haruka08@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "unique_id": "hopmpMiS0T",
            "name": null,
            "username": "aaaa",
            "email": "lNiYy@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-22 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "S8oE6lPRjI",
            "name": null,
            "username": "宇野 真綾",
            "email": "taichi.ogaki@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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

#guest ゲスト
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
            "id": 21,
            "name": "laudantium",
            "shop_id": "J001178400",
            "budget": 9404,
            "actual": 16981,
            "start_time": "1997-02-28 21:04:10",
            "end_time": null,
            "manager": {
                "id": 6,
                "unique_id": "gS7Buze4RZ",
                "name": null,
                "username": "小林 充",
                "email": "awakamatsu@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "UkjF2T3hFK",
                    "name": null,
                    "username": "伊藤 結衣",
                    "email": "maaya.ito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "lrTzX3EEup",
                    "name": null,
                    "username": "浜田 春香",
                    "email": "yasuhiro87@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "OpGAjhikva",
                    "name": null,
                    "username": "渡辺 晃",
                    "email": "taichi.sakamoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "849fVI5Y6Q",
                    "name": null,
                    "username": "佐々木 篤司",
                    "email": "jun52@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:50.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:50.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "name": "harum",
            "shop_id": "J001178400",
            "budget": 13820,
            "actual": 4497,
            "start_time": "1971-01-22 11:36:42",
            "end_time": null,
            "manager": {
                "id": 6,
                "unique_id": "gS7Buze4RZ",
                "name": null,
                "username": "小林 充",
                "email": "awakamatsu@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "yXlIODtAYs",
                    "name": null,
                    "username": "佐藤 充",
                    "email": "miyake.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "gRTMGMhttj",
                    "name": null,
                    "username": "吉田 美加子",
                    "email": "gogaki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "dcIueOcAMm",
                    "name": null,
                    "username": "笹田 裕樹",
                    "email": "ryosuke.idaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "s41RMemNal",
                    "name": null,
                    "username": "加藤 春香",
                    "email": "haruka08@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:50.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:50.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 30,
            "name": "est",
            "shop_id": "J000753015",
            "budget": 7413,
            "actual": 14753,
            "start_time": "2013-06-01 09:15:36",
            "end_time": null,
            "manager": {
                "id": 8,
                "unique_id": "C1QHAeMZDY",
                "name": null,
                "username": "杉山 聡太郎",
                "email": "kobayashi.hanako@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "rWLoAfVLqq",
                    "name": null,
                    "username": "石田 晃",
                    "email": "yuki92@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "gglyfUdqZb",
                    "name": null,
                    "username": "青山 聡太郎",
                    "email": "kobayashi.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jdMoRflUxh",
                    "name": null,
                    "username": "山岸 学",
                    "email": "kimura.kumiko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 61,
            "name": "dolorem",
            "shop_id": "J001177654",
            "budget": 8308,
            "actual": 4036,
            "start_time": "1983-10-01 06:34:46",
            "end_time": null,
            "manager": {
                "id": 16,
                "unique_id": "pmIRzCbdOz",
                "name": null,
                "username": "浜田 翔太",
                "email": "yui.nakamura@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "51ZncwjVjU",
                    "name": null,
                    "username": "井高 里佳",
                    "email": "ryosuke.tsuda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "0ALfgWNZ9x",
                    "name": null,
                    "username": "佐藤 翔太",
                    "email": "ytsuda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "j7kGQDotLe",
                    "name": null,
                    "username": "若松 あすか",
                    "email": "manabu26@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "dcIueOcAMm",
                    "name": null,
                    "username": "笹田 裕樹",
                    "email": "ryosuke.idaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:53.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:53.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 62,
            "name": "hic",
            "shop_id": "J001178400",
            "budget": 15924,
            "actual": 7095,
            "start_time": "1989-05-26 14:46:29",
            "end_time": null,
            "manager": {
                "id": 16,
                "unique_id": "pmIRzCbdOz",
                "name": null,
                "username": "浜田 翔太",
                "email": "yui.nakamura@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 4,
                    "unique_id": "VJkJx3apnV",
                    "name": null,
                    "username": "村山 治",
                    "email": "kato.naoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "51ZncwjVjU",
                    "name": null,
                    "username": "井高 里佳",
                    "email": "ryosuke.tsuda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "0ALfgWNZ9x",
                    "name": null,
                    "username": "佐藤 翔太",
                    "email": "ytsuda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "j7kGQDotLe",
                    "name": null,
                    "username": "若松 あすか",
                    "email": "manabu26@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:53.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:53.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 63,
            "name": "magni",
            "shop_id": "J000742418",
            "budget": 29289,
            "actual": 24252,
            "start_time": "1971-04-09 02:30:23",
            "end_time": null,
            "manager": {
                "id": 16,
                "unique_id": "pmIRzCbdOz",
                "name": null,
                "username": "浜田 翔太",
                "email": "yui.nakamura@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 4,
                    "unique_id": "VJkJx3apnV",
                    "name": null,
                    "username": "村山 治",
                    "email": "kato.naoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "4j5gsSXKju",
                    "name": null,
                    "username": "加藤 直人",
                    "email": "yoko.yamamoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "HiMw8u4b0B",
                    "name": null,
                    "username": "山田 千代",
                    "email": "yumiko05@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "0ALfgWNZ9x",
                    "name": null,
                    "username": "佐藤 翔太",
                    "email": "ytsuda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:53.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:53.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 65,
            "name": "perferendis",
            "shop_id": "J000766202",
            "budget": 24510,
            "actual": 1112,
            "start_time": "1997-09-29 03:01:07",
            "end_time": null,
            "manager": {
                "id": 17,
                "unique_id": "4j5gsSXKju",
                "name": null,
                "username": "加藤 直人",
                "email": "yoko.yamamoto@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "gS7Buze4RZ",
                    "name": null,
                    "username": "小林 充",
                    "email": "awakamatsu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "laRfQVHUwt",
                    "name": null,
                    "username": "宮沢 英樹",
                    "email": "murayama.momoko@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 67,
            "name": "in",
            "shop_id": "J001178400",
            "budget": 4784,
            "actual": 15678,
            "start_time": "1984-08-09 09:31:04",
            "end_time": null,
            "manager": {
                "id": 17,
                "unique_id": "4j5gsSXKju",
                "name": null,
                "username": "加藤 直人",
                "email": "yoko.yamamoto@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "rWLoAfVLqq",
                    "name": null,
                    "username": "石田 晃",
                    "email": "yuki92@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "gglyfUdqZb",
                    "name": null,
                    "username": "青山 聡太郎",
                    "email": "kobayashi.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 110,
            "name": "est",
            "shop_id": "J001125885",
            "budget": 1285,
            "actual": 44424,
            "start_time": "1972-07-09 15:22:00",
            "end_time": null,
            "manager": {
                "id": 28,
                "unique_id": "89P69AgNHR",
                "name": null,
                "username": "宇野 直樹",
                "email": "kimura.asuka@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 9,
                    "unique_id": "r78yDXEyy7",
                    "name": null,
                    "username": "浜田 真綾",
                    "email": "kyosuke43@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "OpGAjhikva",
                    "name": null,
                    "username": "渡辺 晃",
                    "email": "taichi.sakamoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "849fVI5Y6Q",
                    "name": null,
                    "username": "佐々木 篤司",
                    "email": "jun52@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 112,
            "name": "cupiditate",
            "shop_id": "J001125885",
            "budget": 12195,
            "actual": 40019,
            "start_time": "1991-01-05 21:52:53",
            "end_time": null,
            "manager": {
                "id": 28,
                "unique_id": "89P69AgNHR",
                "name": null,
                "username": "宇野 直樹",
                "email": "kimura.asuka@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "OpGAjhikva",
                    "name": null,
                    "username": "渡辺 晃",
                    "email": "taichi.sakamoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "849fVI5Y6Q",
                    "name": null,
                    "username": "佐々木 篤司",
                    "email": "jun52@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "CylxYJEMNV",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "ryosuke86@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 158,
            "name": "ut",
            "shop_id": "J000766202",
            "budget": 3166,
            "actual": 34813,
            "start_time": "2014-11-11 14:30:08",
            "end_time": null,
            "manager": {
                "id": 40,
                "unique_id": "5VOaZUpNwY",
                "name": null,
                "username": "宇野 零",
                "email": "yamamoto.soutaro@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "yXlIODtAYs",
                    "name": null,
                    "username": "佐藤 充",
                    "email": "miyake.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "laRfQVHUwt",
                    "name": null,
                    "username": "宮沢 英樹",
                    "email": "murayama.momoko@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "4j5gsSXKju",
                    "name": null,
                    "username": "加藤 直人",
                    "email": "yoko.yamamoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "89P69AgNHR",
                    "name": null,
                    "username": "宇野 直樹",
                    "email": "kimura.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "afFt2F5PZg",
                    "name": null,
                    "username": "山田 稔",
                    "email": "nanami13@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:02.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:02.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 159,
            "name": "est",
            "shop_id": "J000766202",
            "budget": 16079,
            "actual": 39489,
            "start_time": "1989-03-17 11:29:12",
            "end_time": null,
            "manager": {
                "id": 40,
                "unique_id": "5VOaZUpNwY",
                "name": null,
                "username": "宇野 零",
                "email": "yamamoto.soutaro@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "yXlIODtAYs",
                    "name": null,
                    "username": "佐藤 充",
                    "email": "miyake.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "C1QHAeMZDY",
                    "name": null,
                    "username": "杉山 聡太郎",
                    "email": "kobayashi.hanako@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "89P69AgNHR",
                    "name": null,
                    "username": "宇野 直樹",
                    "email": "kimura.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "afFt2F5PZg",
                    "name": null,
                    "username": "山田 稔",
                    "email": "nanami13@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 50,
                    "unique_id": "7GeGYUEcY0",
                    "name": null,
                    "username": "廣川 陽子",
                    "email": "bkato@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:02.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:02.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 160,
            "name": "tempora",
            "shop_id": "J000766202",
            "budget": 14590,
            "actual": 42818,
            "start_time": "1974-09-04 13:12:22",
            "end_time": null,
            "manager": {
                "id": 40,
                "unique_id": "5VOaZUpNwY",
                "name": null,
                "username": "宇野 零",
                "email": "yamamoto.soutaro@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "laRfQVHUwt",
                    "name": null,
                    "username": "宮沢 英樹",
                    "email": "murayama.momoko@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "89P69AgNHR",
                    "name": null,
                    "username": "宇野 直樹",
                    "email": "kimura.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "MLFs500PMq",
                    "name": null,
                    "username": "桐山 香織",
                    "email": "rika51@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "uSg422LF0O",
                    "name": null,
                    "username": "鈴木 明美",
                    "email": "yasuhiro.matsumoto@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 50,
                    "unique_id": "7GeGYUEcY0",
                    "name": null,
                    "username": "廣川 陽子",
                    "email": "bkato@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:02.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:02.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 162,
            "name": "accusantium",
            "shop_id": "J001125885",
            "budget": 20853,
            "actual": 22720,
            "start_time": "2007-09-02 18:10:42",
            "end_time": null,
            "manager": {
                "id": 41,
                "unique_id": "dcIueOcAMm",
                "name": null,
                "username": "笹田 裕樹",
                "email": "ryosuke.idaka@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "C1QHAeMZDY",
                    "name": null,
                    "username": "杉山 聡太郎",
                    "email": "kobayashi.hanako@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "0ALfgWNZ9x",
                    "name": null,
                    "username": "佐藤 翔太",
                    "email": "ytsuda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "849fVI5Y6Q",
                    "name": null,
                    "username": "佐々木 篤司",
                    "email": "jun52@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "CylxYJEMNV",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "ryosuke86@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 163,
            "name": "iure",
            "shop_id": "J001006387",
            "budget": 15727,
            "actual": 43157,
            "start_time": "1970-08-28 23:56:29",
            "end_time": null,
            "manager": {
                "id": 41,
                "unique_id": "dcIueOcAMm",
                "name": null,
                "username": "笹田 裕樹",
                "email": "ryosuke.idaka@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 5,
                    "unique_id": "b1Ey8xk6pE",
                    "name": null,
                    "username": "吉田 零",
                    "email": "kmurayama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "laRfQVHUwt",
                    "name": null,
                    "username": "宮沢 英樹",
                    "email": "murayama.momoko@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "89P69AgNHR",
                    "name": null,
                    "username": "宇野 直樹",
                    "email": "kimura.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "CylxYJEMNV",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "ryosuke86@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 165,
            "name": "aut",
            "shop_id": "J000753015",
            "budget": 22112,
            "actual": 36439,
            "start_time": "1971-03-22 01:26:56",
            "end_time": null,
            "manager": {
                "id": 42,
                "unique_id": "RwSiWcbK9T",
                "name": null,
                "username": "喜嶋 淳",
                "email": "yoko.sato@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 4,
                    "unique_id": "VJkJx3apnV",
                    "name": null,
                    "username": "村山 治",
                    "email": "kato.naoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jdMoRflUxh",
                    "name": null,
                    "username": "山岸 学",
                    "email": "kimura.kumiko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "fRJWtjbfbk",
                    "name": null,
                    "username": "原田 修平",
                    "email": "kudo.yasuhiro@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 167,
            "name": "quas",
            "shop_id": "J001125885",
            "budget": 11894,
            "actual": 18582,
            "start_time": "2004-12-31 02:42:42",
            "end_time": null,
            "manager": {
                "id": 42,
                "unique_id": "RwSiWcbK9T",
                "name": null,
                "username": "喜嶋 淳",
                "email": "yoko.sato@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "rWLoAfVLqq",
                    "name": null,
                    "username": "石田 晃",
                    "email": "yuki92@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "OpGAjhikva",
                    "name": null,
                    "username": "渡辺 晃",
                    "email": "taichi.sakamoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "fRJWtjbfbk",
                    "name": null,
                    "username": "原田 修平",
                    "email": "kudo.yasuhiro@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 177,
            "name": "odio",
            "shop_id": "J000109445",
            "budget": 29131,
            "actual": 35609,
            "start_time": "2016-04-28 05:53:13",
            "end_time": null,
            "manager": {
                "id": 45,
                "unique_id": "mqHczJGA3z",
                "name": null,
                "username": "加納 晃",
                "email": "taichi20@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "C1QHAeMZDY",
                    "name": null,
                    "username": "杉山 聡太郎",
                    "email": "kobayashi.hanako@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "s41RMemNal",
                    "name": null,
                    "username": "加藤 春香",
                    "email": "haruka08@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "IYYVZhJnyD",
                    "name": null,
                    "username": "中津川 千代",
                    "email": "bito@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 179,
            "name": "excepturi",
            "shop_id": "J001182216",
            "budget": 17581,
            "actual": 1435,
            "start_time": "1974-12-28 22:58:43",
            "end_time": null,
            "manager": {
                "id": 45,
                "unique_id": "mqHczJGA3z",
                "name": null,
                "username": "加納 晃",
                "email": "taichi20@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "RuJWyJt7SY",
                    "name": null,
                    "username": "三宅 聡太郎",
                    "email": "osamu64@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "afFt2F5PZg",
                    "name": null,
                    "username": "山田 稔",
                    "email": "nanami13@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "s41RMemNal",
                    "name": null,
                    "username": "加藤 春香",
                    "email": "haruka08@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 185,
            "name": "quod",
            "shop_id": "J001125885",
            "budget": 7809,
            "actual": 37622,
            "start_time": "1993-07-09 05:58:30",
            "end_time": null,
            "manager": {
                "id": 47,
                "unique_id": "s41RMemNal",
                "name": null,
                "username": "加藤 春香",
                "email": "haruka08@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "gglyfUdqZb",
                    "name": null,
                    "username": "青山 聡太郎",
                    "email": "kobayashi.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "89P69AgNHR",
                    "name": null,
                    "username": "宇野 直樹",
                    "email": "kimura.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "mqHczJGA3z",
                    "name": null,
                    "username": "加納 晃",
                    "email": "taichi20@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "1LaeT9cZ6d",
                    "name": null,
                    "username": "松本 美加子",
                    "email": "qishida@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/guest/sessions`


<!-- END_3a84a6accee6980b8f6727dfd0c9301a -->

<!-- START_4d34946661250f7ba23e037b45241bf1 -->
## guests.sessions.wait ゲストとして招待されていて、まだ返事していないセション一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/guest/sessions/wait" 
```

```javascript
const url = new URL("http://localhost/api/guest/sessions/wait");

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
            "id": 30,
            "name": "est",
            "shop_id": "J000753015",
            "budget": 7413,
            "actual": 14753,
            "start_time": "2013-06-01 09:15:36",
            "end_time": null,
            "manager": {
                "id": 8,
                "unique_id": "C1QHAeMZDY",
                "name": null,
                "username": "杉山 聡太郎",
                "email": "kobayashi.hanako@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "rWLoAfVLqq",
                    "name": null,
                    "username": "石田 晃",
                    "email": "yuki92@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "gglyfUdqZb",
                    "name": null,
                    "username": "青山 聡太郎",
                    "email": "kobayashi.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jdMoRflUxh",
                    "name": null,
                    "username": "山岸 学",
                    "email": "kimura.kumiko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 61,
            "name": "dolorem",
            "shop_id": "J001177654",
            "budget": 8308,
            "actual": 4036,
            "start_time": "1983-10-01 06:34:46",
            "end_time": null,
            "manager": {
                "id": 16,
                "unique_id": "pmIRzCbdOz",
                "name": null,
                "username": "浜田 翔太",
                "email": "yui.nakamura@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "51ZncwjVjU",
                    "name": null,
                    "username": "井高 里佳",
                    "email": "ryosuke.tsuda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "0ALfgWNZ9x",
                    "name": null,
                    "username": "佐藤 翔太",
                    "email": "ytsuda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "j7kGQDotLe",
                    "name": null,
                    "username": "若松 あすか",
                    "email": "manabu26@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "dcIueOcAMm",
                    "name": null,
                    "username": "笹田 裕樹",
                    "email": "ryosuke.idaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:53.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:53.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 67,
            "name": "in",
            "shop_id": "J001178400",
            "budget": 4784,
            "actual": 15678,
            "start_time": "1984-08-09 09:31:04",
            "end_time": null,
            "manager": {
                "id": 17,
                "unique_id": "4j5gsSXKju",
                "name": null,
                "username": "加藤 直人",
                "email": "yoko.yamamoto@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "rWLoAfVLqq",
                    "name": null,
                    "username": "石田 晃",
                    "email": "yuki92@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "gglyfUdqZb",
                    "name": null,
                    "username": "青山 聡太郎",
                    "email": "kobayashi.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 158,
            "name": "ut",
            "shop_id": "J000766202",
            "budget": 3166,
            "actual": 34813,
            "start_time": "2014-11-11 14:30:08",
            "end_time": null,
            "manager": {
                "id": 40,
                "unique_id": "5VOaZUpNwY",
                "name": null,
                "username": "宇野 零",
                "email": "yamamoto.soutaro@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "yXlIODtAYs",
                    "name": null,
                    "username": "佐藤 充",
                    "email": "miyake.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "laRfQVHUwt",
                    "name": null,
                    "username": "宮沢 英樹",
                    "email": "murayama.momoko@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "4j5gsSXKju",
                    "name": null,
                    "username": "加藤 直人",
                    "email": "yoko.yamamoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "89P69AgNHR",
                    "name": null,
                    "username": "宇野 直樹",
                    "email": "kimura.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "afFt2F5PZg",
                    "name": null,
                    "username": "山田 稔",
                    "email": "nanami13@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:02.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:02.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 160,
            "name": "tempora",
            "shop_id": "J000766202",
            "budget": 14590,
            "actual": 42818,
            "start_time": "1974-09-04 13:12:22",
            "end_time": null,
            "manager": {
                "id": 40,
                "unique_id": "5VOaZUpNwY",
                "name": null,
                "username": "宇野 零",
                "email": "yamamoto.soutaro@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "laRfQVHUwt",
                    "name": null,
                    "username": "宮沢 英樹",
                    "email": "murayama.momoko@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "89P69AgNHR",
                    "name": null,
                    "username": "宇野 直樹",
                    "email": "kimura.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "MLFs500PMq",
                    "name": null,
                    "username": "桐山 香織",
                    "email": "rika51@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "uSg422LF0O",
                    "name": null,
                    "username": "鈴木 明美",
                    "email": "yasuhiro.matsumoto@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 50,
                    "unique_id": "7GeGYUEcY0",
                    "name": null,
                    "username": "廣川 陽子",
                    "email": "bkato@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:02.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:02.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 163,
            "name": "iure",
            "shop_id": "J001006387",
            "budget": 15727,
            "actual": 43157,
            "start_time": "1970-08-28 23:56:29",
            "end_time": null,
            "manager": {
                "id": 41,
                "unique_id": "dcIueOcAMm",
                "name": null,
                "username": "笹田 裕樹",
                "email": "ryosuke.idaka@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 5,
                    "unique_id": "b1Ey8xk6pE",
                    "name": null,
                    "username": "吉田 零",
                    "email": "kmurayama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "laRfQVHUwt",
                    "name": null,
                    "username": "宮沢 英樹",
                    "email": "murayama.momoko@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "89P69AgNHR",
                    "name": null,
                    "username": "宇野 直樹",
                    "email": "kimura.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "CylxYJEMNV",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "ryosuke86@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 165,
            "name": "aut",
            "shop_id": "J000753015",
            "budget": 22112,
            "actual": 36439,
            "start_time": "1971-03-22 01:26:56",
            "end_time": null,
            "manager": {
                "id": 42,
                "unique_id": "RwSiWcbK9T",
                "name": null,
                "username": "喜嶋 淳",
                "email": "yoko.sato@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 4,
                    "unique_id": "VJkJx3apnV",
                    "name": null,
                    "username": "村山 治",
                    "email": "kato.naoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jdMoRflUxh",
                    "name": null,
                    "username": "山岸 学",
                    "email": "kimura.kumiko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "fRJWtjbfbk",
                    "name": null,
                    "username": "原田 修平",
                    "email": "kudo.yasuhiro@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 179,
            "name": "excepturi",
            "shop_id": "J001182216",
            "budget": 17581,
            "actual": 1435,
            "start_time": "1974-12-28 22:58:43",
            "end_time": null,
            "manager": {
                "id": 45,
                "unique_id": "mqHczJGA3z",
                "name": null,
                "username": "加納 晃",
                "email": "taichi20@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "RuJWyJt7SY",
                    "name": null,
                    "username": "三宅 聡太郎",
                    "email": "osamu64@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "afFt2F5PZg",
                    "name": null,
                    "username": "山田 稔",
                    "email": "nanami13@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "s41RMemNal",
                    "name": null,
                    "username": "加藤 春香",
                    "email": "haruka08@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/guest/sessions/wait`


<!-- END_4d34946661250f7ba23e037b45241bf1 -->

<!-- START_93ceb998433bbe98c11d7e95d835a4bd -->
## guests.sessions.allow ゲストとして招待されていて、参加了承したセション一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/guest/sessions/allow" 
```

```javascript
const url = new URL("http://localhost/api/guest/sessions/allow");

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
            "id": 62,
            "name": "hic",
            "shop_id": "J001178400",
            "budget": 15924,
            "actual": 7095,
            "start_time": "1989-05-26 14:46:29",
            "end_time": null,
            "manager": {
                "id": 16,
                "unique_id": "pmIRzCbdOz",
                "name": null,
                "username": "浜田 翔太",
                "email": "yui.nakamura@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 4,
                    "unique_id": "VJkJx3apnV",
                    "name": null,
                    "username": "村山 治",
                    "email": "kato.naoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "51ZncwjVjU",
                    "name": null,
                    "username": "井高 里佳",
                    "email": "ryosuke.tsuda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "0ALfgWNZ9x",
                    "name": null,
                    "username": "佐藤 翔太",
                    "email": "ytsuda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "j7kGQDotLe",
                    "name": null,
                    "username": "若松 あすか",
                    "email": "manabu26@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:53.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:53.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 110,
            "name": "est",
            "shop_id": "J001125885",
            "budget": 1285,
            "actual": 44424,
            "start_time": "1972-07-09 15:22:00",
            "end_time": null,
            "manager": {
                "id": 28,
                "unique_id": "89P69AgNHR",
                "name": null,
                "username": "宇野 直樹",
                "email": "kimura.asuka@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 9,
                    "unique_id": "r78yDXEyy7",
                    "name": null,
                    "username": "浜田 真綾",
                    "email": "kyosuke43@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "OpGAjhikva",
                    "name": null,
                    "username": "渡辺 晃",
                    "email": "taichi.sakamoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "849fVI5Y6Q",
                    "name": null,
                    "username": "佐々木 篤司",
                    "email": "jun52@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 159,
            "name": "est",
            "shop_id": "J000766202",
            "budget": 16079,
            "actual": 39489,
            "start_time": "1989-03-17 11:29:12",
            "end_time": null,
            "manager": {
                "id": 40,
                "unique_id": "5VOaZUpNwY",
                "name": null,
                "username": "宇野 零",
                "email": "yamamoto.soutaro@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "yXlIODtAYs",
                    "name": null,
                    "username": "佐藤 充",
                    "email": "miyake.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "C1QHAeMZDY",
                    "name": null,
                    "username": "杉山 聡太郎",
                    "email": "kobayashi.hanako@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "89P69AgNHR",
                    "name": null,
                    "username": "宇野 直樹",
                    "email": "kimura.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "afFt2F5PZg",
                    "name": null,
                    "username": "山田 稔",
                    "email": "nanami13@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 50,
                    "unique_id": "7GeGYUEcY0",
                    "name": null,
                    "username": "廣川 陽子",
                    "email": "bkato@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:02.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:02.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 162,
            "name": "accusantium",
            "shop_id": "J001125885",
            "budget": 20853,
            "actual": 22720,
            "start_time": "2007-09-02 18:10:42",
            "end_time": null,
            "manager": {
                "id": 41,
                "unique_id": "dcIueOcAMm",
                "name": null,
                "username": "笹田 裕樹",
                "email": "ryosuke.idaka@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "C1QHAeMZDY",
                    "name": null,
                    "username": "杉山 聡太郎",
                    "email": "kobayashi.hanako@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "0ALfgWNZ9x",
                    "name": null,
                    "username": "佐藤 翔太",
                    "email": "ytsuda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "849fVI5Y6Q",
                    "name": null,
                    "username": "佐々木 篤司",
                    "email": "jun52@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "CylxYJEMNV",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "ryosuke86@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 177,
            "name": "odio",
            "shop_id": "J000109445",
            "budget": 29131,
            "actual": 35609,
            "start_time": "2016-04-28 05:53:13",
            "end_time": null,
            "manager": {
                "id": 45,
                "unique_id": "mqHczJGA3z",
                "name": null,
                "username": "加納 晃",
                "email": "taichi20@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "C1QHAeMZDY",
                    "name": null,
                    "username": "杉山 聡太郎",
                    "email": "kobayashi.hanako@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "s41RMemNal",
                    "name": null,
                    "username": "加藤 春香",
                    "email": "haruka08@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "IYYVZhJnyD",
                    "name": null,
                    "username": "中津川 千代",
                    "email": "bito@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/guest/sessions/allow`


<!-- END_93ceb998433bbe98c11d7e95d835a4bd -->

<!-- START_0dd0efc82fec3ea3c92aac24fba81349 -->
## guests.sessions.deny ゲストとして招待されていて、参加拒否した一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/guest/sessions/deny" 
```

```javascript
const url = new URL("http://localhost/api/guest/sessions/deny");

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
            "name": "laudantium",
            "shop_id": "J001178400",
            "budget": 9404,
            "actual": 16981,
            "start_time": "1997-02-28 21:04:10",
            "end_time": null,
            "manager": {
                "id": 6,
                "unique_id": "gS7Buze4RZ",
                "name": null,
                "username": "小林 充",
                "email": "awakamatsu@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "UkjF2T3hFK",
                    "name": null,
                    "username": "伊藤 結衣",
                    "email": "maaya.ito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "lrTzX3EEup",
                    "name": null,
                    "username": "浜田 春香",
                    "email": "yasuhiro87@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "OpGAjhikva",
                    "name": null,
                    "username": "渡辺 晃",
                    "email": "taichi.sakamoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "849fVI5Y6Q",
                    "name": null,
                    "username": "佐々木 篤司",
                    "email": "jun52@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:50.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:50.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "name": "harum",
            "shop_id": "J001178400",
            "budget": 13820,
            "actual": 4497,
            "start_time": "1971-01-22 11:36:42",
            "end_time": null,
            "manager": {
                "id": 6,
                "unique_id": "gS7Buze4RZ",
                "name": null,
                "username": "小林 充",
                "email": "awakamatsu@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "yXlIODtAYs",
                    "name": null,
                    "username": "佐藤 充",
                    "email": "miyake.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "gRTMGMhttj",
                    "name": null,
                    "username": "吉田 美加子",
                    "email": "gogaki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "dcIueOcAMm",
                    "name": null,
                    "username": "笹田 裕樹",
                    "email": "ryosuke.idaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "s41RMemNal",
                    "name": null,
                    "username": "加藤 春香",
                    "email": "haruka08@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:50.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:50.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 63,
            "name": "magni",
            "shop_id": "J000742418",
            "budget": 29289,
            "actual": 24252,
            "start_time": "1971-04-09 02:30:23",
            "end_time": null,
            "manager": {
                "id": 16,
                "unique_id": "pmIRzCbdOz",
                "name": null,
                "username": "浜田 翔太",
                "email": "yui.nakamura@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 4,
                    "unique_id": "VJkJx3apnV",
                    "name": null,
                    "username": "村山 治",
                    "email": "kato.naoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "4j5gsSXKju",
                    "name": null,
                    "username": "加藤 直人",
                    "email": "yoko.yamamoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "HiMw8u4b0B",
                    "name": null,
                    "username": "山田 千代",
                    "email": "yumiko05@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "0ALfgWNZ9x",
                    "name": null,
                    "username": "佐藤 翔太",
                    "email": "ytsuda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:53.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:53.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 65,
            "name": "perferendis",
            "shop_id": "J000766202",
            "budget": 24510,
            "actual": 1112,
            "start_time": "1997-09-29 03:01:07",
            "end_time": null,
            "manager": {
                "id": 17,
                "unique_id": "4j5gsSXKju",
                "name": null,
                "username": "加藤 直人",
                "email": "yoko.yamamoto@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "gS7Buze4RZ",
                    "name": null,
                    "username": "小林 充",
                    "email": "awakamatsu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "laRfQVHUwt",
                    "name": null,
                    "username": "宮沢 英樹",
                    "email": "murayama.momoko@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 112,
            "name": "cupiditate",
            "shop_id": "J001125885",
            "budget": 12195,
            "actual": 40019,
            "start_time": "1991-01-05 21:52:53",
            "end_time": null,
            "manager": {
                "id": 28,
                "unique_id": "89P69AgNHR",
                "name": null,
                "username": "宇野 直樹",
                "email": "kimura.asuka@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "OpGAjhikva",
                    "name": null,
                    "username": "渡辺 晃",
                    "email": "taichi.sakamoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "849fVI5Y6Q",
                    "name": null,
                    "username": "佐々木 篤司",
                    "email": "jun52@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "CylxYJEMNV",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "ryosuke86@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 167,
            "name": "quas",
            "shop_id": "J001125885",
            "budget": 11894,
            "actual": 18582,
            "start_time": "2004-12-31 02:42:42",
            "end_time": null,
            "manager": {
                "id": 42,
                "unique_id": "RwSiWcbK9T",
                "name": null,
                "username": "喜嶋 淳",
                "email": "yoko.sato@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "rWLoAfVLqq",
                    "name": null,
                    "username": "石田 晃",
                    "email": "yuki92@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "OpGAjhikva",
                    "name": null,
                    "username": "渡辺 晃",
                    "email": "taichi.sakamoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "fRJWtjbfbk",
                    "name": null,
                    "username": "原田 修平",
                    "email": "kudo.yasuhiro@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 185,
            "name": "quod",
            "shop_id": "J001125885",
            "budget": 7809,
            "actual": 37622,
            "start_time": "1993-07-09 05:58:30",
            "end_time": null,
            "manager": {
                "id": 47,
                "unique_id": "s41RMemNal",
                "name": null,
                "username": "加藤 春香",
                "email": "haruka08@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "gglyfUdqZb",
                    "name": null,
                    "username": "青山 聡太郎",
                    "email": "kobayashi.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "89P69AgNHR",
                    "name": null,
                    "username": "宇野 直樹",
                    "email": "kimura.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "mqHczJGA3z",
                    "name": null,
                    "username": "加納 晃",
                    "email": "taichi20@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "1LaeT9cZ6d",
                    "name": null,
                    "username": "松本 美加子",
                    "email": "qishida@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:47:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:05.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/guest/sessions/deny`


<!-- END_0dd0efc82fec3ea3c92aac24fba81349 -->

<!-- START_f002f7656ea051619cc8b112ba27bdbd -->
## guests.sessions.show ゲストとして参加しているセッションの一つの詳細

> Example request:

```bash
curl -X GET -G "http://localhost/api/guest/sessions/{session}" 
```

```javascript
const url = new URL("http://localhost/api/guest/sessions/{session}");

    let params = {
            "session": "ZmsMUBu3xBA8zGZX",
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
        "id": 159,
        "name": "est",
        "shop_id": "J000766202",
        "budget": 16079,
        "actual": 39489,
        "start_time": "1989-03-17 11:29:12",
        "end_time": null,
        "manager": {
            "id": 40,
            "unique_id": "5VOaZUpNwY",
            "name": null,
            "username": "宇野 零",
            "email": "yamamoto.soutaro@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 7,
                "unique_id": "yXlIODtAYs",
                "name": null,
                "username": "佐藤 充",
                "email": "miyake.miki@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 8,
                "unique_id": "C1QHAeMZDY",
                "name": null,
                "username": "杉山 聡太郎",
                "email": "kobayashi.hanako@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 28,
                "unique_id": "89P69AgNHR",
                "name": null,
                "username": "宇野 直樹",
                "email": "kimura.asuka@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 33,
                "unique_id": "afFt2F5PZg",
                "name": null,
                "username": "山田 稔",
                "email": "nanami13@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 50,
                "unique_id": "7GeGYUEcY0",
                "name": null,
                "username": "廣川 陽子",
                "email": "bkato@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-22 01:47:02.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:47:02.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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

<!-- START_5d2efa72cc796b608e9bbd2980a772f5 -->
## guests.sessions.update セッション参加状況を更新する（join_statusのみ。allow, wait, denyの文字のみ。）

> Example request:

```bash
curl -X PUT "http://localhost/api/guest/sessions/{session}" \
    -H "Content-Type: application/json" \
    -d '{"join_status":"XXIqjsWHRexFXSDi"}'

```

```javascript
const url = new URL("http://localhost/api/guest/sessions/{session}");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "join_status": "XXIqjsWHRexFXSDi"
}

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
        "unique_id": "TESTTEST",
        "name": null,
        "username": "テスト太郎",
        "email": "testuser@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "wait",
        "paid": null,
        "plus_minus": null,
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:47:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
    }
}
```

### HTTP Request
`PUT api/guest/sessions/{session}`

`PATCH api/guest/sessions/{session}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    join_status | string |  required  | 参加状況のステータス['allow', 'wait', 'deny']

<!-- END_5d2efa72cc796b608e9bbd2980a772f5 -->

#profile プロフィール
<!-- START_083f8e6e87f50a46d0cc30956e5b0812 -->
## profiles.update 自分の情報を更新

> Example request:

```bash
curl -X PUT "http://localhost/api/profile/update" \
    -H "Content-Type: application/json" \
    -d '{"unique_id":"Q9zezBWGapWa8WuL","username":"bVaHxWn2oE3vEsf5","password":"8DGTq4DhnSS5k00E","unique_id_search_flag":true,"username_search_flag":true}'

```

```javascript
const url = new URL("http://localhost/api/profile/update");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "Q9zezBWGapWa8WuL",
    "username": "bVaHxWn2oE3vEsf5",
    "password": "8DGTq4DhnSS5k00E",
    "unique_id_search_flag": true,
    "username_search_flag": true
}

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
        "name": null,
        "username": "AAAAAAAAAAA",
        "email": "new@new.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:55:19.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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
            "id": 3,
            "unique_id": "UkjF2T3hFK",
            "name": null,
            "username": "伊藤 結衣",
            "email": "maaya.ito@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 6,
            "unique_id": "gS7Buze4RZ",
            "name": null,
            "username": "小林 充",
            "email": "awakamatsu@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 7,
            "unique_id": "yXlIODtAYs",
            "name": null,
            "username": "佐藤 充",
            "email": "miyake.miki@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 8,
            "unique_id": "C1QHAeMZDY",
            "name": null,
            "username": "杉山 聡太郎",
            "email": "kobayashi.hanako@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 12,
            "unique_id": "laRfQVHUwt",
            "name": null,
            "username": "宮沢 英樹",
            "email": "murayama.momoko@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "lrTzX3EEup",
            "name": null,
            "username": "浜田 春香",
            "email": "yasuhiro87@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 15,
            "unique_id": "2IHEPejvwn",
            "name": null,
            "username": "松本 舞",
            "email": "soutaro87@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 16,
            "unique_id": "pmIRzCbdOz",
            "name": null,
            "username": "浜田 翔太",
            "email": "yui.nakamura@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 17,
            "unique_id": "4j5gsSXKju",
            "name": null,
            "username": "加藤 直人",
            "email": "yoko.yamamoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 18,
            "unique_id": "mg0Tw6aOdP",
            "name": null,
            "username": "青田 直子",
            "email": "sasaki.kenichi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 19,
            "unique_id": "z9fqUIVxdl",
            "name": null,
            "username": "村山 真綾",
            "email": "nidaka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 22,
            "unique_id": "51ZncwjVjU",
            "name": null,
            "username": "井高 里佳",
            "email": "ryosuke.tsuda@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "unique_id": "RuJWyJt7SY",
            "name": null,
            "username": "三宅 聡太郎",
            "email": "osamu64@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 25,
            "unique_id": "gglyfUdqZb",
            "name": null,
            "username": "青山 聡太郎",
            "email": "kobayashi.kyosuke@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 32,
            "unique_id": "849fVI5Y6Q",
            "name": null,
            "username": "佐々木 篤司",
            "email": "jun52@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "unique_id": "afFt2F5PZg",
            "name": null,
            "username": "山田 稔",
            "email": "nanami13@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 36,
            "unique_id": "QyBXtHP8DD",
            "name": null,
            "username": "野村 美加子",
            "email": "yui53@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 37,
            "unique_id": "CylxYJEMNV",
            "name": null,
            "username": "中島 結衣",
            "email": "ryosuke86@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 39,
            "unique_id": "lmM9WbronE",
            "name": null,
            "username": "中島 舞",
            "email": "xidaka@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 40,
            "unique_id": "5VOaZUpNwY",
            "name": null,
            "username": "宇野 零",
            "email": "yamamoto.soutaro@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 42,
            "unique_id": "RwSiWcbK9T",
            "name": null,
            "username": "喜嶋 淳",
            "email": "yoko.sato@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "unique_id": "uSg422LF0O",
            "name": null,
            "username": "鈴木 明美",
            "email": "yasuhiro.matsumoto@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 44,
            "unique_id": "jdMoRflUxh",
            "name": null,
            "username": "山岸 学",
            "email": "kimura.kumiko@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "unique_id": "mqHczJGA3z",
            "name": null,
            "username": "加納 晃",
            "email": "taichi20@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 49,
            "unique_id": "IYYVZhJnyD",
            "name": null,
            "username": "中津川 千代",
            "email": "bito@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 55,
            "unique_id": "807GpPeXUG",
            "name": null,
            "username": "aaaa",
            "email": "mk2lxF@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-02-22 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 56,
            "unique_id": "Udf5eQqwkV",
            "name": null,
            "username": "aaaa",
            "email": "KRAmAMi@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-02-22 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 57,
            "unique_id": "CkEbcbETtu",
            "name": null,
            "username": "aaaa",
            "email": "sPTLqtV4@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-02-22 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
curl -X POST "http://localhost/api/search/forward_by_username" \
    -H "Content-Type: application/json" \
    -d '{"username":"rSCo6PToBDgg7FG2"}'

```

```javascript
const url = new URL("http://localhost/api/search/forward_by_username");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "username": "rSCo6PToBDgg7FG2"
}

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
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
curl -X POST "http://localhost/api/search/perfect_by_unique_id" \
    -H "Content-Type: application/json" \
    -d '{"unique_id":"CuGytv4f4ep9yTQF"}'

```

```javascript
const url = new URL("http://localhost/api/search/perfect_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "CuGytv4f4ep9yTQF"
}

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
        "name": null,
        "username": "テスト太郎",
        "email": "testuser@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:47:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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
curl -X POST "http://localhost/api/search/forward_by_unique_id" \
    -H "Content-Type: application/json" \
    -d '{"unique_id":"5HR34BuoMi8JGgpk"}'

```

```javascript
const url = new URL("http://localhost/api/search/forward_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "5HR34BuoMi8JGgpk"
}

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
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
            "session": "86EoI1UjcPX60KW0",
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
            "id": 13,
            "unique_id": "rWLoAfVLqq",
            "name": null,
            "username": "石田 晃",
            "email": "yuki92@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 0,
            "plus_minus": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "89P69AgNHR",
            "name": null,
            "username": "宇野 直樹",
            "email": "kimura.asuka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "deny",
            "paid": null,
            "plus_minus": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "s41RMemNal",
            "name": null,
            "username": "加藤 春香",
            "email": "haruka08@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "deny",
            "paid": null,
            "plus_minus": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "fRJWtjbfbk",
            "name": null,
            "username": "原田 修平",
            "email": "kudo.yasuhiro@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "deny",
            "paid": null,
            "plus_minus": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
curl -X POST "http://localhost/api/sessions/{session}/users" \
    -H "Content-Type: application/json" \
    -d '{"user_id":"0DeYDYNHVHZTiVlf","join_status":"YkFXyjuXF2IiZ5qn","paid":16,"plus_minus":13,"budget":5,"budget_actual":5}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "5QR0VU6eOCfWxvxs",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": "0DeYDYNHVHZTiVlf",
    "join_status": "YkFXyjuXF2IiZ5qn",
    "paid": 16,
    "plus_minus": 13,
    "budget": 5,
    "budget_actual": 5
}

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
            "id": 28,
            "unique_id": "89P69AgNHR",
            "name": null,
            "username": "宇野 直樹",
            "email": "kimura.asuka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 0,
            "plus_minus": 0,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
    join_status | string |  optional  | 参加状況のステータス['allow', 'wait', 'deny'] デフォルトでは wait
    paid | integer |  optional  | 支払いしたか
    plus_minus | integer |  optional  | 加減算
    budget | integer |  optional  | 支払い予定額
    budget_actual | integer |  optional  | 支払い確定金額
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
            "session": "DKUIZgfpPMgzL7p5",
            "user": "2oOxzo4hmVI9WFWH",
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
        "id": 28,
        "unique_id": "89P69AgNHR",
        "name": null,
        "username": "宇野 直樹",
        "email": "kimura.asuka@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 0,
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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
curl -X PUT "http://localhost/api/sessions/{session}/users/{user}" \
    -H "Content-Type: application/json" \
    -d '{"user_id":"8S6IDNDOBQchlIiW","join_status":8,"paid":12,"plus_minus":5,"budget":1,"budget_actual":11}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "ZbtJgjeh4LSjWd5L",
            "user": "2awzE0GKimQ91sRj",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": "8S6IDNDOBQchlIiW",
    "join_status": 8,
    "paid": 12,
    "plus_minus": 5,
    "budget": 1,
    "budget_actual": 11
}

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
        "id": 10,
        "unique_id": "Q3QDvVrd5v",
        "name": null,
        "username": "佐々木 太郎",
        "email": "yasuhiro11@example.org",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 10000,
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
    }
}
```

### HTTP Request
`PUT api/sessions/{session}/users/{user}`

`PATCH api/sessions/{session}/users/{user}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | string |  optional  | 追加するユーザーのID
    join_status | integer |  optional  | 参加状況のステータス
    paid | integer |  optional  | 支払いしたか
    plus_minus | integer |  optional  | 加減算
    budget | integer |  optional  | 支払い予定額
    budget_actual | integer |  optional  | 支払い確定金額
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
            "session": "BOxLrtlSFSrudlkj",
            "user": "p7YzNrbZ2AhXT3tm",
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

<!-- START_94e7b9c051638e39e25052d31bb1e8d4 -->
## sessions.users.store_group セッションにあるグループのメンバーを追加する。（重複はしないように追加される。また、join_statusは、　waitなどのDBの初期値で決め打ちされる）。追加した後のsessionのuser一覧を返す

> Example request:

```bash
curl -X POST "http://localhost/api/sessions/{session}/groups/{group}" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/groups/{group}");

    let params = {
            "session": "t7ClvFPU85dq5soL",
            "group": "Y0TNETDJ5kdnmPy3",
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
    "data": [
        {
            "id": 26,
            "unique_id": "dafzXTcBz0",
            "name": null,
            "username": "中津川 英樹",
            "email": "tomoya.idaka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "wait",
            "paid": null,
            "plus_minus": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "s41RMemNal",
            "name": null,
            "username": "加藤 春香",
            "email": "haruka08@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "wait",
            "paid": null,
            "plus_minus": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "fRJWtjbfbk",
            "name": null,
            "username": "原田 修平",
            "email": "kudo.yasuhiro@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "wait",
            "paid": null,
            "plus_minus": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`POST api/sessions/{session}/groups/{group}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    session |  required  | セッションid
    group |  required  | 追加するグループ

<!-- END_94e7b9c051638e39e25052d31bb1e8d4 -->

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
            "name": "possimus",
            "shop_id": "J001125885",
            "budget": 19956,
            "actual": 12862,
            "start_time": "2015-11-22 08:27:42",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 13,
                    "unique_id": "rWLoAfVLqq",
                    "name": null,
                    "username": "石田 晃",
                    "email": "yuki92@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "89P69AgNHR",
                    "name": null,
                    "username": "宇野 直樹",
                    "email": "kimura.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "s41RMemNal",
                    "name": null,
                    "username": "加藤 春香",
                    "email": "haruka08@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "fRJWtjbfbk",
                    "name": null,
                    "username": "原田 修平",
                    "email": "kudo.yasuhiro@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "modi",
            "shop_id": "J001182216",
            "budget": 9630,
            "actual": 14595,
            "start_time": "1981-09-29 12:45:54",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 4,
                    "unique_id": "VJkJx3apnV",
                    "name": null,
                    "username": "村山 治",
                    "email": "kato.naoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 9,
                    "unique_id": "r78yDXEyy7",
                    "name": null,
                    "username": "浜田 真綾",
                    "email": "kyosuke43@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "MLFs500PMq",
                    "name": null,
                    "username": "桐山 香織",
                    "email": "rika51@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "fRJWtjbfbk",
                    "name": null,
                    "username": "原田 修平",
                    "email": "kudo.yasuhiro@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "assumenda",
            "shop_id": "J001182216",
            "budget": 17591,
            "actual": 48870,
            "start_time": "2007-02-10 20:48:37",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 9,
                    "unique_id": "r78yDXEyy7",
                    "name": null,
                    "username": "浜田 真綾",
                    "email": "kyosuke43@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "Q3QDvVrd5v",
                    "name": null,
                    "username": "佐々木 太郎",
                    "email": "yasuhiro11@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "dafzXTcBz0",
                    "name": null,
                    "username": "中津川 英樹",
                    "email": "tomoya.idaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "s41RMemNal",
                    "name": null,
                    "username": "加藤 春香",
                    "email": "haruka08@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "aut",
            "shop_id": "J001177654",
            "budget": 5891,
            "actual": 23988,
            "start_time": "1991-08-02 06:11:20",
            "end_time": null,
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:47:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 10,
                    "unique_id": "Q3QDvVrd5v",
                    "name": null,
                    "username": "佐々木 太郎",
                    "email": "yasuhiro11@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "dafzXTcBz0",
                    "name": null,
                    "username": "中津川 英樹",
                    "email": "tomoya.idaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "89P69AgNHR",
                    "name": null,
                    "username": "宇野 直樹",
                    "email": "kimura.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "DSvcdRmnik",
                    "name": null,
                    "username": "中島 明美",
                    "email": "takuma.nagisa@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "s41RMemNal",
                    "name": null,
                    "username": "加藤 春香",
                    "email": "haruka08@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
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
    -d '{"name":"V6i0jhK7nefVU07q","shop_id":"HmtVtiOocnpNvhC5","budget":11,"actual":19,"start_time":"Q2XVKiHZDCbMyYHd","end_time":"v6db13hxHqdEox0E"}'

```

```javascript
const url = new URL("http://localhost/api/sessions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "V6i0jhK7nefVU07q",
    "shop_id": "HmtVtiOocnpNvhC5",
    "budget": 11,
    "actual": 19,
    "start_time": "Q2XVKiHZDCbMyYHd",
    "end_time": "v6db13hxHqdEox0E"
}

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
        "name": "newSession94tjO",
        "shop_id": 34,
        "budget": 3000,
        "actual": 3000,
        "start_time": null,
        "end_time": null,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [],
        "created_at": {
            "date": "2019-02-22 01:55:19.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:55:19.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
    }
}
```

### HTTP Request
`POST api/sessions`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 新規セッションの名前
    shop_id | string |  optional  | ショップのID(ぐるなび？)
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
            "session": "VHL0eJk3NxjSW467",
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
        "name": "assumenda",
        "shop_id": "J001182216",
        "budget": 17591,
        "actual": 48870,
        "start_time": "2007-02-10 20:48:37",
        "end_time": null,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 9,
                "unique_id": "r78yDXEyy7",
                "name": null,
                "username": "浜田 真綾",
                "email": "kyosuke43@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 10,
                "unique_id": "Q3QDvVrd5v",
                "name": null,
                "username": "佐々木 太郎",
                "email": "yasuhiro11@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 26,
                "unique_id": "dafzXTcBz0",
                "name": null,
                "username": "中津川 英樹",
                "email": "tomoya.idaka@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 47,
                "unique_id": "s41RMemNal",
                "name": null,
                "username": "加藤 春香",
                "email": "haruka08@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:46:48.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
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
curl -X PUT "http://localhost/api/sessions/{session}" \
    -H "Content-Type: application/json" \
    -d '{"name":"tokOeLhmvj2TApVR","shop_id":10,"budget":3,"actual":4,"start_time":"kWUBRLSC3Tggoqsn","end_time":"Zo6VKWWF46WIAYf6"}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "uc9YGWrBh43lYquR",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "tokOeLhmvj2TApVR",
    "shop_id": 10,
    "budget": 3,
    "actual": 4,
    "start_time": "kWUBRLSC3Tggoqsn",
    "end_time": "Zo6VKWWF46WIAYf6"
}

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
        "id": 201,
        "name": "newUpdateSession9FGCc",
        "shop_id": 34,
        "budget": 5000,
        "actual": 3000,
        "start_time": null,
        "end_time": null,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:47:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [],
        "created_at": {
            "date": "2019-02-22 01:55:19.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-22 01:55:19.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
    }
}
```

### HTTP Request
`PUT api/sessions/{session}`

`PATCH api/sessions/{session}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  optional  | 新規セッションの名前
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
            "session": "n7KGcjMGjD2SfGUr",
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

<!-- START_b6e55d81cacc9b08411534efea8aa121 -->
## sessions.can_add_users  対象のセッションに追加できるユーザー一覧を返す（自分のフレンド−そのセッションのメンバー）

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions/{session}/users/can_add" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/can_add");

    let params = {
            "session": "axiBXt3wfCPiuFnT",
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
            "unique_id": "VJkJx3apnV",
            "name": null,
            "username": "村山 治",
            "email": "kato.naoko@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 9,
            "unique_id": "r78yDXEyy7",
            "name": null,
            "username": "浜田 真綾",
            "email": "kyosuke43@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consequatur",
                "plus_minus": -1823,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 10,
            "unique_id": "Q3QDvVrd5v",
            "name": null,
            "username": "佐々木 太郎",
            "email": "yasuhiro11@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 2,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quo",
                "plus_minus": -1361,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "rWLoAfVLqq",
            "name": null,
            "username": "石田 晃",
            "email": "yuki92@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "dafzXTcBz0",
            "name": null,
            "username": "中津川 英樹",
            "email": "tomoya.idaka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "89P69AgNHR",
            "name": null,
            "username": "宇野 直樹",
            "email": "kimura.asuka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "DSvcdRmnik",
            "name": null,
            "username": "中島 明美",
            "email": "takuma.nagisa@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 2,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quo",
                "plus_minus": -1361,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "unique_id": "MLFs500PMq",
            "name": null,
            "username": "桐山 香織",
            "email": "rika51@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consequatur",
                "plus_minus": -1823,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "s41RMemNal",
            "name": null,
            "username": "加藤 春香",
            "email": "haruka08@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "fRJWtjbfbk",
            "name": null,
            "username": "原田 修平",
            "email": "kudo.yasuhiro@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 3,
                "manager": {
                    "id": 1,
                    "unique_id": "TESTTEST",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-22 01:46:48.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-22 01:47:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "plus_minus": -2172,
                "created_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-22 01:46:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "unique_id": "hopmpMiS0T",
            "name": null,
            "username": "aaaa",
            "email": "lNiYy@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-22 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:55:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "S8oE6lPRjI",
            "name": null,
            "username": "宇野 真綾",
            "email": "taichi.ogaki@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-22 01:46:48.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/sessions/{session}/users/can_add`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    session |  required  | グループid

<!-- END_b6e55d81cacc9b08411534efea8aa121 -->


