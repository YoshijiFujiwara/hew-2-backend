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

<!-- START_d35a0aeff494b8c1436f531cc03805dc -->
## api/admin/users/{user}/groups/{group}
> Example request:

```bash
curl -X DELETE "http://localhost/api/admin/users/{user}/groups/{group}" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}/groups/{group}");

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
`DELETE api/admin/users/{user}/groups/{group}`


<!-- END_d35a0aeff494b8c1436f531cc03805dc -->

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

<!-- START_63c2d122c716a2fa2607ad1482293787 -->
## api/admin/users/{user}/sessions/{session}
> Example request:

```bash
curl -X DELETE "http://localhost/api/admin/users/{user}/sessions/{session}" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}/sessions/{session}");

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
`DELETE api/admin/users/{user}/sessions/{session}`


<!-- END_63c2d122c716a2fa2607ad1482293787 -->

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

<!-- START_40bbc37a97be9b755ee47402ff36b86b -->
## api/admin/users/{user}/attributes/{attribute}
> Example request:

```bash
curl -X DELETE "http://localhost/api/admin/users/{user}/attributes/{attribute}" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}/attributes/{attribute}");

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
`DELETE api/admin/users/{user}/attributes/{attribute}`


<!-- END_40bbc37a97be9b755ee47402ff36b86b -->

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

<!-- START_18c344746cb86090449ed71006e2474c -->
## api/admin/users/{user}/default_settings/{default_setting}
> Example request:

```bash
curl -X DELETE "http://localhost/api/admin/users/{user}/default_settings/{default_setting}" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}/default_settings/{default_setting}");

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
`DELETE api/admin/users/{user}/default_settings/{default_setting}`


<!-- END_18c344746cb86090449ed71006e2474c -->

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
            "id": 4,
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "cum",
            "plus_minus": -282,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 5,
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "minus",
            "plus_minus": -1642,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 6,
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "et",
            "plus_minus": 163,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
    -d '{"name":"zpVpS92vUXeRxagF","plus_minus":19}'

```

```javascript
const url = new URL("http://localhost/api/attributes");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "zpVpS92vUXeRxagF",
    "plus_minus": 19
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
        "id": 155,
        "manager": {
            "id": 7,
            "unique_id": "6PzYUBzkvQ",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "attributenameSeIHw",
        "plus_minus": null,
        "created_at": {
            "date": "2019-03-07 18:47:40.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:40.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
            "attribute": "qJucMOWFJVCxZcIi",
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
            "id": 7,
            "unique_id": "6PzYUBzkvQ",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "minus",
        "plus_minus": -1642,
        "created_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
    -d '{"name":"u7bMOlXwXGeX4FB5","plus_minus":14}'

```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "e5w0kUrphqwWrTTP",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "u7bMOlXwXGeX4FB5",
    "plus_minus": 14
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
        "id": 154,
        "manager": {
            "id": 7,
            "unique_id": "6PzYUBzkvQ",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "updateTn6nE",
        "plus_minus": null,
        "created_at": {
            "date": "2019-03-07 18:47:39.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:40.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
            "attribute": "83srddrSyyryAEes",
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
    -d '{"email":"IYP0PrveuvrVfxhd","username":"Mtj54Mum01ELf2gm","password":"gk2E4M1XMXnSUuQh"}'

```

```javascript
const url = new URL("http://localhost/api/auth/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "IYP0PrveuvrVfxhd",
    "username": "Mtj54Mum01ELf2gm",
    "password": "gk2E4M1XMXnSUuQh"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVnaXN0ZXIiLCJpYXQiOjE1NTE5NTIwNjAsImV4cCI6MTU1MTk4ODA2MCwibmJmIjoxNTUxOTUyMDYwLCJqdGkiOiJodWswREhZSEVaVEp0M3ZmIiwic3ViIjo1NywicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.Bc8NpCRzOSbfPYcaNstWvqXN7x_8jRzUkhwmqiCHtCQ",
    "token_type": "bearer",
    "expires_in": 36000
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
    -d '{"email":"26BTwNVEqbW410iv","password":"hwLKN6lQa6FhsGCr"}'

```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "26BTwNVEqbW410iv",
    "password": "hwLKN6lQa6FhsGCr"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTE5NTIwNjgsImV4cCI6MTU1MTk4ODA2OCwibmJmIjoxNTUxOTUyMDY4LCJqdGkiOiJUUHhGZzIyR25EZW56SUNZIiwic3ViIjo4LCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.mIA194Q9wM_HcY82fa6rhgy89jw8mk_aF7L6dl9wMOQ",
    "token_type": "bearer",
    "expires_in": 36000
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVmcmVzaCIsImlhdCI6MTU1MTk1MjA2MSwiZXhwIjoxNTUxOTg4MDYxLCJuYmYiOjE1NTE5NTIwNjEsImp0aSI6IlQ3TEJEYWNRZFNjd0kyaUgiLCJzdWIiOjcsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.bWjS-Xj8cHOH9NKQZO0gRJi0RBaCoZFDtURjGlLT2WQ",
    "token_type": "bearer",
    "expires_in": 36000
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
        "id": 7,
        "unique_id": "6PzYUBzkvQ",
        "username": "テスト太郎",
        "email": "testuser@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:28.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
    -d '{"email":"KjgCScj8qdnxt9pf","password":"rF8cWma9DTOGtkXc"}'

```

```javascript
const url = new URL("http://localhost/api/admin/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "KjgCScj8qdnxt9pf",
    "password": "rF8cWma9DTOGtkXc"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTE5NTIwNjgsImV4cCI6MTU1MTk4ODA2OCwibmJmIjoxNTUxOTUyMDY4LCJqdGkiOiJUUHhGZzIyR25EZW56SUNZIiwic3ViIjo4LCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.mIA194Q9wM_HcY82fa6rhgy89jw8mk_aF7L6dl9wMOQ",
    "token_type": "bearer",
    "expires_in": 36000
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
            "id": 2,
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "J32OeCA",
            "current_location_flag": 1,
            "longitude": null,
            "latitude": null,
            "timer": "01:00:00",
            "group": {
                "id": 2,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "et",
                "users": [
                    {
                        "id": 11,
                        "unique_id": "D7YwsKvpHf",
                        "name": null,
                        "username": "伊藤 舞",
                        "email": "naoko73@example.net",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-03-07 18:47:15.000000",
                            "timezone_type": 3,
                            "timezone": "Asia\/Tokyo"
                        },
                        "updated_at": {
                            "date": "2019-03-07 18:47:15.000000",
                            "timezone_type": 3,
                            "timezone": "Asia\/Tokyo"
                        },
                        "deleted_at": null
                    },
                    {
                        "id": 26,
                        "unique_id": "fJxaYxDBRG",
                        "name": null,
                        "username": "木村 桃子",
                        "email": "atakahashi@example.net",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-03-07 18:47:15.000000",
                            "timezone_type": 3,
                            "timezone": "Asia\/Tokyo"
                        },
                        "updated_at": {
                            "date": "2019-03-07 18:47:15.000000",
                            "timezone_type": 3,
                            "timezone": "Asia\/Tokyo"
                        },
                        "deleted_at": null
                    },
                    {
                        "id": 38,
                        "unique_id": "4zBlCSaLzG",
                        "name": null,
                        "username": "石田 晃",
                        "email": "htanaka@example.org",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-03-07 18:47:15.000000",
                            "timezone_type": 3,
                            "timezone": "Asia\/Tokyo"
                        },
                        "updated_at": {
                            "date": "2019-03-07 18:47:15.000000",
                            "timezone_type": 3,
                            "timezone": "Asia\/Tokyo"
                        },
                        "deleted_at": null
                    }
                ],
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
    -d '{"name":"WiNH6Moczw4LiyBD","current_location_flag":true,"latitude":"Bat2bpYLrxnjrXTv","longitude":"Cpy1btzKpMxagRYd","timer":18,"group_id":6}'

```

```javascript
const url = new URL("http://localhost/api/default_settings");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "WiNH6Moczw4LiyBD",
    "current_location_flag": true,
    "latitude": "Bat2bpYLrxnjrXTv",
    "longitude": "Cpy1btzKpMxagRYd",
    "timer": 18,
    "group_id": 6
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
        "id": 52,
        "manager": {
            "id": 7,
            "unique_id": "6PzYUBzkvQ",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "cm9DZe",
        "current_location_flag": 1,
        "longitude": null,
        "latitude": null,
        "timer": "01:00:00",
        "group": {
            "id": 2,
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "et",
            "users": [
                {
                    "id": 11,
                    "unique_id": "D7YwsKvpHf",
                    "name": null,
                    "username": "伊藤 舞",
                    "email": "naoko73@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-03-07 18:47:41.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:41.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
    current_location_flag | boolean |  optional  | 現在地からなら、1を、そうでないなら0を入れる(デフォルトでは１が入る)
    latitude | string |  optional  | 緯度（'35.71727401'）みたいな数字
    longitude | string |  optional  | 経度（'140.00898606'）みたいな数字
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
            "default_setting": "ul8I7p6gufTVL7dF",
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
            "id": 7,
            "unique_id": "6PzYUBzkvQ",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "J32OeCA",
        "current_location_flag": 1,
        "longitude": null,
        "latitude": null,
        "timer": "01:00:00",
        "group": {
            "id": 2,
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "et",
            "users": [
                {
                    "id": 11,
                    "unique_id": "D7YwsKvpHf",
                    "name": null,
                    "username": "伊藤 舞",
                    "email": "naoko73@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
    -d '{"name":"NF8N7HhsE2ioJ3jd","current_location_flag":false,"latitude":"Lw0giZQ1n3UxmpmJ","longitude":"IXfuTHnWIdp187Pw","timer":3,"group_id":7}'

```

```javascript
const url = new URL("http://localhost/api/default_settings/{default_setting}");

    let params = {
            "default_setting": "XwFjvBE03XbfBdnm",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "NF8N7HhsE2ioJ3jd",
    "current_location_flag": false,
    "latitude": "Lw0giZQ1n3UxmpmJ",
    "longitude": "IXfuTHnWIdp187Pw",
    "timer": 3,
    "group_id": 7
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
            "id": 7,
            "unique_id": "6PzYUBzkvQ",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "newSettingsUwP2Y37b",
        "current_location_flag": 1,
        "longitude": null,
        "latitude": null,
        "timer": "01:00:00",
        "group": {
            "id": 2,
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "et",
            "users": [
                {
                    "id": 11,
                    "unique_id": "D7YwsKvpHf",
                    "name": null,
                    "username": "伊藤 舞",
                    "email": "naoko73@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:41.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
    current_location_flag | boolean |  optional  | 現在地からなら、1を、そうでないなら0を入れる
    latitude | string |  optional  | 緯度（'35.71727401'）みたいな数字
    longitude | string |  optional  | 経度（'140.00898606'）みたいな数字
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
            "default_setting": "6L949jKtbrOE7T00",
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
            "id": 11,
            "unique_id": "D7YwsKvpHf",
            "name": null,
            "username": "伊藤 舞",
            "email": "naoko73@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -282,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "f3LUyanLpv",
            "name": null,
            "username": "杉山 春香",
            "email": "soutaro64@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "59vAm11iZ2",
            "name": null,
            "username": "中島 香織",
            "email": "miki05@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -282,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 20,
            "unique_id": "rdSN8C0xsZ",
            "name": null,
            "username": "伊藤 和也",
            "email": "yumiko31@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "et",
                "plus_minus": 163,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 21,
            "unique_id": "zpjvx2Vy05",
            "name": null,
            "username": "中島 健一",
            "email": "baota@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "fJxaYxDBRG",
            "name": null,
            "username": "木村 桃子",
            "email": "atakahashi@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 30,
            "unique_id": "GAcEiG7vXH",
            "name": null,
            "username": "野村 和也",
            "email": "shuhei41@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -282,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "RciOrUJHsp",
            "name": null,
            "username": "井上 健一",
            "email": "ktanabe@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -282,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "unique_id": "Su2Om2VxHO",
            "name": null,
            "username": "坂本 修平",
            "email": "miyake.kyosuke@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 37,
            "unique_id": "nepn1JUWEn",
            "name": null,
            "username": "若松 陽子",
            "email": "ryosuke.tanaka@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -282,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "4zBlCSaLzG",
            "name": null,
            "username": "石田 晃",
            "email": "htanaka@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "0R7RuYAuND",
            "name": null,
            "username": "中島 明美",
            "email": "kanou.tsubasa@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -282,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 56,
            "unique_id": "s2ymZ1l9WE",
            "name": null,
            "username": "山本 涼平",
            "email": "miyazawa.sayuri@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
## friends.store ◆友達申請する

> Example request:

```bash
curl -X POST "http://localhost/api/friends" \
    -H "Content-Type: application/json" \
    -d '{"email":"Q8YJzS87816FujPC"}'

```

```javascript
const url = new URL("http://localhost/api/friends");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "Q8YJzS87816FujPC"
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
    "id": 7,
    "unique_id": "6PzYUBzkvQ",
    "name": null,
    "username": "テスト太郎",
    "email": "testuser@example.com",
    "unique_id_search_flag": 1,
    "username_search_flag": 1,
    "permitted": null,
    "attribute": null,
    "created_at": {
        "date": "2019-03-07 18:47:15.000000",
        "timezone_type": 3,
        "timezone": "Asia\/Tokyo"
    },
    "updated_at": {
        "date": "2019-03-07 18:47:28.000000",
        "timezone_type": 3,
        "timezone": "Asia\/Tokyo"
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
            "id": 11,
            "unique_id": "D7YwsKvpHf",
            "name": null,
            "username": "伊藤 舞",
            "email": "naoko73@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 18,
                "manager": {
                    "id": 11,
                    "unique_id": "D7YwsKvpHf",
                    "name": null,
                    "username": "伊藤 舞",
                    "email": "naoko73@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "nam",
                "plus_minus": -1803,
                "created_at": {
                    "date": "2019-03-07 18:47:16.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:16.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 18,
            "unique_id": "ij4PAPxlCc",
            "name": null,
            "username": "木村 亮介",
            "email": "kiriyama.manabu@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 38,
                "manager": {
                    "id": 18,
                    "unique_id": "ij4PAPxlCc",
                    "name": null,
                    "username": "木村 亮介",
                    "email": "kiriyama.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "consectetur",
                "plus_minus": -1125,
                "created_at": {
                    "date": "2019-03-07 18:47:18.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:18.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 42,
            "unique_id": "d1v71EyxTE",
            "name": null,
            "username": "高橋 晃",
            "email": "euno@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 109,
                "manager": {
                    "id": 42,
                    "unique_id": "d1v71EyxTE",
                    "name": null,
                    "username": "高橋 晃",
                    "email": "euno@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "officiis",
                "plus_minus": -2765,
                "created_at": {
                    "date": "2019-03-07 18:47:24.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:24.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "unique_id": "dbeShDIN5l",
            "name": null,
            "username": "若松 七夏",
            "email": "yoko86@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 113,
                "manager": {
                    "id": 43,
                    "unique_id": "dbeShDIN5l",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yoko86@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "iusto",
                "plus_minus": 2527,
                "created_at": {
                    "date": "2019-03-07 18:47:24.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:24.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
            "id": 28,
            "unique_id": "rKXQvTV4tz",
            "name": null,
            "username": "中津川 智也",
            "email": "kanou.shuhei@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 55,
            "unique_id": "hdcqEXWOUQ",
            "name": null,
            "username": "野村 拓真",
            "email": "aaoyama@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "et",
                "plus_minus": 163,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
            "id": 9,
            "unique_id": "wN1oN8U5R4",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser49@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "et",
                "plus_minus": 163,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 10,
            "unique_id": "ay5xy8wG4k",
            "name": null,
            "username": "テストユーザー３",
            "email": "testuser50@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "et",
                "plus_minus": 163,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 19,
            "unique_id": "zxO7ZGQE1c",
            "name": null,
            "username": "宇野 里佳",
            "email": "naoko.yoshimoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 35,
            "unique_id": "BI5tAcUz6w",
            "name": null,
            "username": "近藤 涼平",
            "email": "minoru.fujimoto@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 51,
            "unique_id": "r69JFGY9mq",
            "name": null,
            "username": "宮沢 千代",
            "email": "asasada@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "et",
                "plus_minus": 163,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 59,
            "unique_id": "0SGiWp7Pup",
            "name": null,
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 18:47:41.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:41.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
            "id": 9,
            "unique_id": "wN1oN8U5R4",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser49@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 10,
                "manager": {
                    "id": 9,
                    "unique_id": "wN1oN8U5R4",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser49@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "qui",
                "plus_minus": 346,
                "created_at": {
                    "date": "2019-03-07 18:47:16.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:16.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 20,
            "unique_id": "rdSN8C0xsZ",
            "name": null,
            "username": "伊藤 和也",
            "email": "yumiko31@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 43,
                "manager": {
                    "id": 20,
                    "unique_id": "rdSN8C0xsZ",
                    "name": null,
                    "username": "伊藤 和也",
                    "email": "yumiko31@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "exercitationem",
                "plus_minus": -2568,
                "created_at": {
                    "date": "2019-03-07 18:47:18.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:18.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "unique_id": "prdFZKpAPy",
            "name": null,
            "username": "宇野 真綾",
            "email": "kudo.shota@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 54,
                "manager": {
                    "id": 23,
                    "unique_id": "prdFZKpAPy",
                    "name": null,
                    "username": "宇野 真綾",
                    "email": "kudo.shota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "quo",
                "plus_minus": 2707,
                "created_at": {
                    "date": "2019-03-07 18:47:19.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:19.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 25,
            "unique_id": "IZTymxTmB0",
            "name": null,
            "username": "松本 春香",
            "email": "minoru.kanou@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 60,
                "manager": {
                    "id": 25,
                    "unique_id": "IZTymxTmB0",
                    "name": null,
                    "username": "松本 春香",
                    "email": "minoru.kanou@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "dicta",
                "plus_minus": -1940,
                "created_at": {
                    "date": "2019-03-07 18:47:20.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:20.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 27,
            "unique_id": "44XBioqSIA",
            "name": null,
            "username": "大垣 春香",
            "email": "nakatsugawa.shota@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 64,
                "manager": {
                    "id": 27,
                    "unique_id": "44XBioqSIA",
                    "name": null,
                    "username": "大垣 春香",
                    "email": "nakatsugawa.shota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "soluta",
                "plus_minus": -2591,
                "created_at": {
                    "date": "2019-03-07 18:47:20.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:20.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "unique_id": "Su2Om2VxHO",
            "name": null,
            "username": "坂本 修平",
            "email": "miyake.kyosuke@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 84,
                "manager": {
                    "id": 33,
                    "unique_id": "Su2Om2VxHO",
                    "name": null,
                    "username": "坂本 修平",
                    "email": "miyake.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "esse",
                "plus_minus": -2633,
                "created_at": {
                    "date": "2019-03-07 18:47:22.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:22.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 40,
            "unique_id": "xVTdlKbeWY",
            "name": null,
            "username": "宮沢 京助",
            "email": "matsumoto.miki@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 103,
                "manager": {
                    "id": 40,
                    "unique_id": "xVTdlKbeWY",
                    "name": null,
                    "username": "宮沢 京助",
                    "email": "matsumoto.miki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "voluptas",
                "plus_minus": -2563,
                "created_at": {
                    "date": "2019-03-07 18:47:23.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:23.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "0R7RuYAuND",
            "name": null,
            "username": "中島 明美",
            "email": "kanou.tsubasa@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 106,
                "manager": {
                    "id": 41,
                    "unique_id": "0R7RuYAuND",
                    "name": null,
                    "username": "中島 明美",
                    "email": "kanou.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "aliquid",
                "plus_minus": -1832,
                "created_at": {
                    "date": "2019-03-07 18:47:24.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:24.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "r8df4SN0km",
            "name": null,
            "username": "渡辺 舞",
            "email": "kenichi.saito@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 124,
                "manager": {
                    "id": 47,
                    "unique_id": "r8df4SN0km",
                    "name": null,
                    "username": "渡辺 舞",
                    "email": "kenichi.saito@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "ipsa",
                "plus_minus": 1398,
                "created_at": {
                    "date": "2019-03-07 18:47:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
            "id": 8,
            "unique_id": "dNhr79AyYx",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser48@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 7,
                "manager": {
                    "id": 8,
                    "unique_id": "dNhr79AyYx",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser48@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -320,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "f3LUyanLpv",
            "name": null,
            "username": "杉山 春香",
            "email": "soutaro64@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 24,
                "manager": {
                    "id": 13,
                    "unique_id": "f3LUyanLpv",
                    "name": null,
                    "username": "杉山 春香",
                    "email": "soutaro64@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "consequatur",
                "plus_minus": 2643,
                "created_at": {
                    "date": "2019-03-07 18:47:17.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:17.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "fJxaYxDBRG",
            "name": null,
            "username": "木村 桃子",
            "email": "atakahashi@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 62,
                "manager": {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "sunt",
                "plus_minus": -1236,
                "created_at": {
                    "date": "2019-03-07 18:47:20.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:20.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 30,
            "unique_id": "GAcEiG7vXH",
            "name": null,
            "username": "野村 和也",
            "email": "shuhei41@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 75,
                "manager": {
                    "id": 30,
                    "unique_id": "GAcEiG7vXH",
                    "name": null,
                    "username": "野村 和也",
                    "email": "shuhei41@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "est",
                "plus_minus": -1150,
                "created_at": {
                    "date": "2019-03-07 18:47:21.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:21.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "RciOrUJHsp",
            "name": null,
            "username": "井上 健一",
            "email": "ktanabe@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 76,
                "manager": {
                    "id": 31,
                    "unique_id": "RciOrUJHsp",
                    "name": null,
                    "username": "井上 健一",
                    "email": "ktanabe@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "est",
                "plus_minus": -1963,
                "created_at": {
                    "date": "2019-03-07 18:47:21.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:21.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "unique_id": "PIQ3Zrkj17",
            "name": null,
            "username": "加納 くみ子",
            "email": "maaya.fujimoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 85,
                "manager": {
                    "id": 34,
                    "unique_id": "PIQ3Zrkj17",
                    "name": null,
                    "username": "加納 くみ子",
                    "email": "maaya.fujimoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "maxime",
                "plus_minus": -360,
                "created_at": {
                    "date": "2019-03-07 18:47:22.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:22.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 49,
            "unique_id": "YQPg2GgZlk",
            "name": null,
            "username": "中村 太一",
            "email": "uekoda@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 131,
                "manager": {
                    "id": 49,
                    "unique_id": "YQPg2GgZlk",
                    "name": null,
                    "username": "中村 太一",
                    "email": "uekoda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "ea",
                "plus_minus": 2068,
                "created_at": {
                    "date": "2019-03-07 18:47:26.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:26.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
    -d '{"user_id":9}'

```

```javascript
const url = new URL("http://localhost/api/friends/permit");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 9
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
    -d '{"user_id":18}'

```

```javascript
const url = new URL("http://localhost/api/friends/reject");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 18
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

<!-- START_503d277be7521776643e8b87b045dce6 -->
## friends.update_attribute フレンドにつける属性IDを更新する

> Example request:

```bash
curl -X PUT "http://localhost/api/friends/{friend}/attribute" \
    -H "Content-Type: application/json" \
    -d '{"attribute_id":10}'

```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/attribute");

    let params = {
            "friend": "Lq2eYz9cmjDUizTa",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "attribute_id": 10
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
            "friend": "9SDAXLaaI6tzJgb1",
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
            "friend": "8odmkkevK8K6kRBO",
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
            "friend": "JtOc2MxOyezwGUik",
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
            "friend": "w7Zio6V9ONjP8kLJ",
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
        "id": 30,
        "unique_id": "GAcEiG7vXH",
        "name": null,
        "username": "野村 和也",
        "email": "shuhei41@example.net",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "permitted": 1,
        "attribute": {
            "id": 4,
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "cum",
            "plus_minus": -282,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
            "friend": "gmGloabQJUN9zrVd",
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
    -d '{"device_token":"69I2st52ur2w3S9c"}'

```

```javascript
const url = new URL("http://localhost/api/device_token");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "device_token": "69I2st52ur2w3S9c"
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
            "id": 7,
            "unique_id": "6PzYUBzkvQ",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "device_token": "newTokenLz83s1dgeQEc1ND79i7Y",
        "created_at": {
            "date": "2019-03-07 18:47:39.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:39.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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

<!-- START_ff08a956c1fb0024f4c4953a613a7c3b -->
## api/admin/groups/{group}/users/{user}
> Example request:

```bash
curl -X DELETE "http://localhost/api/admin/groups/{group}/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/admin/groups/{group}/users/{user}");

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
`DELETE api/admin/groups/{group}/users/{user}`


<!-- END_ff08a956c1fb0024f4c4953a613a7c3b -->

<!-- START_3564d41b0c7f89d1f0e0599c07b168b7 -->
## api/admin/sessions/{session}/users/{user}
> Example request:

```bash
curl -X DELETE "http://localhost/api/admin/sessions/{session}/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/admin/sessions/{session}/users/{user}");

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
`DELETE api/admin/sessions/{session}/users/{user}`


<!-- END_3564d41b0c7f89d1f0e0599c07b168b7 -->

<!-- START_8272942d35ff267675ddcf6f6444c339 -->
## api/admin/users/{user}/friends
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/users/{user}/friends" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}/friends");

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
`GET api/admin/users/{user}/friends`


<!-- END_8272942d35ff267675ddcf6f6444c339 -->

<!-- START_74e5d66ba03a5936b7aebee2eb606e93 -->
## api/admin/users/{user}/friends/{friend}
> Example request:

```bash
curl -X DELETE "http://localhost/api/admin/users/{user}/friends/{friend}" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}/friends/{friend}");

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
`DELETE api/admin/users/{user}/friends/{friend}`


<!-- END_74e5d66ba03a5936b7aebee2eb606e93 -->

<!-- START_65583d9d3be3a4679e04a89acd9ea203 -->
## ゲスト参加しているセッション一覧

> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/users/{user}/guests/sessions" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}/guests/sessions");

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
`GET api/admin/users/{user}/guests/sessions`


<!-- END_65583d9d3be3a4679e04a89acd9ea203 -->

<!-- START_07943ca56f32aa49b5750371aa18e213 -->
## api/admin/users/{user}/guests/sessions/{session}
> Example request:

```bash
curl -X DELETE "http://localhost/api/admin/users/{user}/guests/sessions/{session}" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}/guests/sessions/{session}");

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
`DELETE api/admin/users/{user}/guests/sessions/{session}`


<!-- END_07943ca56f32aa49b5750371aa18e213 -->

<!-- START_2e8f597e649c9cbabbcdc503a00609d1 -->
## api/admin/users/{user}/guests/groups
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/users/{user}/guests/groups" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}/guests/groups");

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
`GET api/admin/users/{user}/guests/groups`


<!-- END_2e8f597e649c9cbabbcdc503a00609d1 -->

<!-- START_e7777eda2379a52db92f841c1c489e5d -->
## api/admin/users/{user}/guests/groups/{group}
> Example request:

```bash
curl -X DELETE "http://localhost/api/admin/users/{user}/guests/groups/{group}" 
```

```javascript
const url = new URL("http://localhost/api/admin/users/{user}/guests/groups/{group}");

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
`DELETE api/admin/users/{user}/guests/groups/{group}`


<!-- END_e7777eda2379a52db92f841c1c489e5d -->

<!-- START_f06dffaae34a5b532a282acf9d9ae213 -->
## api/admin/test/notification
> Example request:

```bash
curl -X POST "http://localhost/api/admin/test/notification" 
```

```javascript
const url = new URL("http://localhost/api/admin/test/notification");

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
`POST api/admin/test/notification`


<!-- END_f06dffaae34a5b532a282acf9d9ae213 -->

<!-- START_ca01f590b92a67149772c61f5b01556b -->
## api/admin/test/realtime
> Example request:

```bash
curl -X GET -G "http://localhost/api/admin/test/realtime" 
```

```javascript
const url = new URL("http://localhost/api/admin/test/realtime");

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
`GET api/admin/test/realtime`


<!-- END_ca01f590b92a67149772c61f5b01556b -->

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
            "group": "wVnOnvcOpv2N1Y2d",
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
            "id": 11,
            "unique_id": "D7YwsKvpHf",
            "name": null,
            "username": "伊藤 舞",
            "email": "naoko73@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "fJxaYxDBRG",
            "name": null,
            "username": "木村 桃子",
            "email": "atakahashi@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "4zBlCSaLzG",
            "name": null,
            "username": "石田 晃",
            "email": "htanaka@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
    -d '{"user_id":10}'

```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users");

    let params = {
            "group": "LjDPQdbYNxhCGL4D",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 10
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
            "group": "enOIsvqoZmX8DSKw",
            "user": "IdEOsiG5mrl0PEQC",
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
        "id": 21,
        "unique_id": "zpjvx2Vy05",
        "name": null,
        "username": "中島 健一",
        "email": "baota@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
            "group": "YP1MUoTnQsodZ2mf",
            "user": "LqVPPTyaOzNZc61M",
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
            "id": 2,
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "et",
            "users": [
                {
                    "id": 11,
                    "unique_id": "D7YwsKvpHf",
                    "name": null,
                    "username": "伊藤 舞",
                    "email": "naoko73@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
    -d '{"name":"zQPRq3fxdGyYqOM0"}'

```

```javascript
const url = new URL("http://localhost/api/groups");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "zQPRq3fxdGyYqOM0"
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
        "id": 53,
        "manager": {
            "id": 7,
            "unique_id": "6PzYUBzkvQ",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "et",
        "users": [],
        "created_at": {
            "date": "2019-03-07 18:47:45.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:45.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
            "group": "54EEVygq1bMWydt8",
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
        "id": 53,
        "manager": {
            "id": 7,
            "unique_id": "6PzYUBzkvQ",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "et",
        "users": [],
        "created_at": {
            "date": "2019-03-07 18:47:45.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:45.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
    -d '{"name":"IjOUQBz5EuF50tWu"}'

```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "BYKiTaQKt9RYNCKW",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "IjOUQBz5EuF50tWu"
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
            "id": 7,
            "unique_id": "6PzYUBzkvQ",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "newGroupTPKbLs2U",
        "users": [
            {
                "id": 11,
                "unique_id": "D7YwsKvpHf",
                "name": null,
                "username": "伊藤 舞",
                "email": "naoko73@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 26,
                "unique_id": "fJxaYxDBRG",
                "name": null,
                "username": "木村 桃子",
                "email": "atakahashi@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 38,
                "unique_id": "4zBlCSaLzG",
                "name": null,
                "username": "石田 晃",
                "email": "htanaka@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:45.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
            "group": "aGLr60yGfB56kxgk",
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
            "group": "uYIXf1oXwONslUlx",
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
            "id": 11,
            "unique_id": "D7YwsKvpHf",
            "name": null,
            "username": "伊藤 舞",
            "email": "naoko73@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -282,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "f3LUyanLpv",
            "name": null,
            "username": "杉山 春香",
            "email": "soutaro64@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "59vAm11iZ2",
            "name": null,
            "username": "中島 香織",
            "email": "miki05@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -282,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 20,
            "unique_id": "rdSN8C0xsZ",
            "name": null,
            "username": "伊藤 和也",
            "email": "yumiko31@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "et",
                "plus_minus": 163,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 21,
            "unique_id": "zpjvx2Vy05",
            "name": null,
            "username": "中島 健一",
            "email": "baota@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "fJxaYxDBRG",
            "name": null,
            "username": "木村 桃子",
            "email": "atakahashi@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "RciOrUJHsp",
            "name": null,
            "username": "井上 健一",
            "email": "ktanabe@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -282,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "unique_id": "Su2Om2VxHO",
            "name": null,
            "username": "坂本 修平",
            "email": "miyake.kyosuke@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 37,
            "unique_id": "nepn1JUWEn",
            "name": null,
            "username": "若松 陽子",
            "email": "ryosuke.tanaka@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -282,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "4zBlCSaLzG",
            "name": null,
            "username": "石田 晃",
            "email": "htanaka@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "0R7RuYAuND",
            "name": null,
            "username": "中島 明美",
            "email": "kanou.tsubasa@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -282,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 56,
            "unique_id": "s2ymZ1l9WE",
            "name": null,
            "username": "山本 涼平",
            "email": "miyazawa.sayuri@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 60,
            "unique_id": "3UadWProq2",
            "name": null,
            "username": "aaaa",
            "email": "5KKOR@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 18:47:43.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:43.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "unique_id": "dbeShDIN5l",
            "name": null,
            "username": "若松 七夏",
            "email": "yoko86@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
            "id": 8,
            "name": "dolores",
            "shop_id": "J001006387",
            "budget": 10011,
            "actual": 14579,
            "start_time": "2019-03-02 18:47:16",
            "end_time": null,
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 9,
                "unique_id": "wN1oN8U5R4",
                "name": null,
                "username": "テストユーザー２",
                "email": "testuser49@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "dNhr79AyYx",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser48@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "zxO7ZGQE1c",
                    "name": null,
                    "username": "宇野 里佳",
                    "email": "naoko.yoshimoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "rKXQvTV4tz",
                    "name": null,
                    "username": "中津川 智也",
                    "email": "kanou.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "dbeShDIN5l",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yoko86@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "beM6Rat9Uu",
                    "name": null,
                    "username": "佐藤 健一",
                    "email": "yasuhiro.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:16.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:16.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 9,
            "name": "atque",
            "shop_id": "J000753015",
            "budget": 15705,
            "actual": 30380,
            "start_time": "2019-03-12 18:47:16",
            "end_time": "2019-03-17 18:47:16",
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 9,
                "unique_id": "wN1oN8U5R4",
                "name": null,
                "username": "テストユーザー２",
                "email": "testuser49@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "dNhr79AyYx",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser48@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "zxO7ZGQE1c",
                    "name": null,
                    "username": "宇野 里佳",
                    "email": "naoko.yoshimoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "NdG6yal8Vp",
                    "name": null,
                    "username": "渡辺 康弘",
                    "email": "kijima.momoko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "dbeShDIN5l",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yoko86@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "beM6Rat9Uu",
                    "name": null,
                    "username": "佐藤 健一",
                    "email": "yasuhiro.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:16.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:16.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "name": "sequi",
            "shop_id": "J000753015",
            "budget": 26155,
            "actual": 1803,
            "start_time": "2019-03-02 18:47:19",
            "end_time": null,
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 20,
                "unique_id": "rdSN8C0xsZ",
                "name": null,
                "username": "伊藤 和也",
                "email": "yumiko31@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "prdFZKpAPy",
                    "name": null,
                    "username": "宇野 真綾",
                    "email": "kudo.shota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "dbeShDIN5l",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yoko86@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "r8df4SN0km",
                    "name": null,
                    "username": "渡辺 舞",
                    "email": "kenichi.saito@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 53,
                    "unique_id": "ghClkzDKc3",
                    "name": null,
                    "username": "加納 香織",
                    "email": "yuki18@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 42,
            "name": "distinctio",
            "shop_id": "J001125885",
            "budget": 2390,
            "actual": 2021,
            "start_time": "2019-03-02 18:47:19",
            "end_time": "2019-03-17 18:47:19",
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 20,
                "unique_id": "rdSN8C0xsZ",
                "name": null,
                "username": "伊藤 和也",
                "email": "yumiko31@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "prdFZKpAPy",
                    "name": null,
                    "username": "宇野 真綾",
                    "email": "kudo.shota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "rKXQvTV4tz",
                    "name": null,
                    "username": "中津川 智也",
                    "email": "kanou.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "Su2Om2VxHO",
                    "name": null,
                    "username": "坂本 修平",
                    "email": "miyake.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "dbeShDIN5l",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yoko86@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "name": "doloremque",
            "shop_id": "J001006387",
            "budget": 8606,
            "actual": 14919,
            "start_time": "2019-03-02 18:47:19",
            "end_time": null,
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 20,
                "unique_id": "rdSN8C0xsZ",
                "name": null,
                "username": "伊藤 和也",
                "email": "yumiko31@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "rKXQvTV4tz",
                    "name": null,
                    "username": "中津川 智也",
                    "email": "kanou.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "Su2Om2VxHO",
                    "name": null,
                    "username": "坂本 修平",
                    "email": "miyake.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "NdG6yal8Vp",
                    "name": null,
                    "username": "渡辺 康弘",
                    "email": "kijima.momoko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "dbeShDIN5l",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yoko86@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 51,
            "name": "et",
            "shop_id": "J001178400",
            "budget": 17403,
            "actual": 22163,
            "start_time": "2019-03-02 18:47:19",
            "end_time": "2019-03-17 18:47:19",
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 23,
                "unique_id": "prdFZKpAPy",
                "name": null,
                "username": "宇野 真綾",
                "email": "kudo.shota@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RvlzP3MKwH",
                    "name": null,
                    "username": "西之園 裕樹",
                    "email": "nanami70@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "PIQ3Zrkj17",
                    "name": null,
                    "username": "加納 くみ子",
                    "email": "maaya.fujimoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "BI5tAcUz6w",
                    "name": null,
                    "username": "近藤 涼平",
                    "email": "minoru.fujimoto@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "NdG6yal8Vp",
                    "name": null,
                    "username": "渡辺 康弘",
                    "email": "kijima.momoko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "dbeShDIN5l",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yoko86@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 52,
            "name": "sit",
            "shop_id": "J000109445",
            "budget": 13024,
            "actual": 3283,
            "start_time": null,
            "end_time": null,
            "my_budget_estimate": 10850,
            "my_budget_actual": 2733.333333333333,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 23,
                "unique_id": "prdFZKpAPy",
                "name": null,
                "username": "宇野 真綾",
                "email": "kudo.shota@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "f3LUyanLpv",
                    "name": null,
                    "username": "杉山 春香",
                    "email": "soutaro64@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "BI5tAcUz6w",
                    "name": null,
                    "username": "近藤 涼平",
                    "email": "minoru.fujimoto@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "a93vkaFNZI",
                    "name": null,
                    "username": "佐々木 翔太",
                    "email": "cmiyake@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 51,
                    "unique_id": "r69JFGY9mq",
                    "name": null,
                    "username": "宮沢 千代",
                    "email": "asasada@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 56,
            "name": "maxime",
            "shop_id": "J001182216",
            "budget": 13551,
            "actual": 33154,
            "start_time": null,
            "end_time": null,
            "my_budget_estimate": 10150,
            "my_budget_actual": 24850,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 25,
                "unique_id": "IZTymxTmB0",
                "name": null,
                "username": "松本 春香",
                "email": "minoru.kanou@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ay5xy8wG4k",
                    "name": null,
                    "username": "テストユーザー３",
                    "email": "testuser50@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "ij4PAPxlCc",
                    "name": null,
                    "username": "木村 亮介",
                    "email": "kiriyama.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "0R7RuYAuND",
                    "name": null,
                    "username": "中島 明美",
                    "email": "kanou.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 57,
            "name": "officia",
            "shop_id": "J000449898",
            "budget": 19392,
            "actual": 48533,
            "start_time": "2019-03-02 18:47:20",
            "end_time": "2019-03-17 18:47:20",
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 25,
                "unique_id": "IZTymxTmB0",
                "name": null,
                "username": "松本 春香",
                "email": "minoru.kanou@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ay5xy8wG4k",
                    "name": null,
                    "username": "テストユーザー３",
                    "email": "testuser50@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "j2ILWjGRjK",
                    "name": null,
                    "username": "山口 千代",
                    "email": "kkudo@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "TM9DzhMzDO",
                    "name": null,
                    "username": "中津川 香織",
                    "email": "youichi.murayama@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 62,
            "name": "cupiditate",
            "shop_id": "J001177654",
            "budget": 6308,
            "actual": 15628,
            "start_time": "2019-03-12 18:47:20",
            "end_time": "2019-03-17 18:47:20",
            "my_budget_estimate": 5040,
            "my_budget_actual": 12500,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 27,
                "unique_id": "44XBioqSIA",
                "name": null,
                "username": "大垣 春香",
                "email": "nakatsugawa.shota@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "w3vjomykDX",
                    "name": null,
                    "username": "渚 桃子",
                    "email": "kobayashi.mikako@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "rKXQvTV4tz",
                    "name": null,
                    "username": "中津川 智也",
                    "email": "kanou.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "YQPg2GgZlk",
                    "name": null,
                    "username": "中村 太一",
                    "email": "uekoda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 55,
                    "unique_id": "hdcqEXWOUQ",
                    "name": null,
                    "username": "野村 拓真",
                    "email": "aaoyama@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 63,
            "name": "aliquid",
            "shop_id": "J001177654",
            "budget": 1303,
            "actual": 33559,
            "start_time": "2019-03-02 18:47:20",
            "end_time": null,
            "my_budget_estimate": 1040,
            "my_budget_actual": 26839.999999999996,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 27,
                "unique_id": "44XBioqSIA",
                "name": null,
                "username": "大垣 春香",
                "email": "nakatsugawa.shota@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "w3vjomykDX",
                    "name": null,
                    "username": "渚 桃子",
                    "email": "kobayashi.mikako@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "ij4PAPxlCc",
                    "name": null,
                    "username": "木村 亮介",
                    "email": "kiriyama.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 39,
                    "unique_id": "Ny4ImnfXol",
                    "name": null,
                    "username": "宇野 あすか",
                    "email": "nomura.yoko@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "r8df4SN0km",
                    "name": null,
                    "username": "渡辺 舞",
                    "email": "kenichi.saito@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "a93vkaFNZI",
                    "name": null,
                    "username": "佐々木 翔太",
                    "email": "cmiyake@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 64,
            "name": "quibusdam",
            "shop_id": "J001006387",
            "budget": 21431,
            "actual": 49116,
            "start_time": "2019-03-02 18:47:20",
            "end_time": "2019-03-17 18:47:20",
            "my_budget_estimate": 17140,
            "my_budget_actual": 39280,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 27,
                "unique_id": "44XBioqSIA",
                "name": null,
                "username": "大垣 春香",
                "email": "nakatsugawa.shota@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 39,
                    "unique_id": "Ny4ImnfXol",
                    "name": null,
                    "username": "宇野 あすか",
                    "email": "nomura.yoko@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "a93vkaFNZI",
                    "name": null,
                    "username": "佐々木 翔太",
                    "email": "cmiyake@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "YQPg2GgZlk",
                    "name": null,
                    "username": "中村 太一",
                    "email": "uekoda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 55,
                    "unique_id": "hdcqEXWOUQ",
                    "name": null,
                    "username": "野村 拓真",
                    "email": "aaoyama@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 81,
            "name": "reiciendis",
            "shop_id": "J001177654",
            "budget": 1228,
            "actual": 31978,
            "start_time": null,
            "end_time": null,
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 33,
                "unique_id": "Su2Om2VxHO",
                "name": null,
                "username": "坂本 修平",
                "email": "miyake.kyosuke@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "f3LUyanLpv",
                    "name": null,
                    "username": "杉山 春香",
                    "email": "soutaro64@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "kfADIsBFSI",
                    "name": null,
                    "username": "喜嶋 太郎",
                    "email": "mitsuru.kimura@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "YQPg2GgZlk",
                    "name": null,
                    "username": "中村 太一",
                    "email": "uekoda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 54,
                    "unique_id": "orc62FAjQj",
                    "name": null,
                    "username": "井高 結衣",
                    "email": "eyamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 82,
            "name": "sunt",
            "shop_id": "J001182216",
            "budget": 25910,
            "actual": 37154,
            "start_time": "2019-03-02 18:47:22",
            "end_time": "2019-03-17 18:47:22",
            "my_budget_estimate": 17266.666666666664,
            "my_budget_actual": 24766.666666666664,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 33,
                "unique_id": "Su2Om2VxHO",
                "name": null,
                "username": "坂本 修平",
                "email": "miyake.kyosuke@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "f3LUyanLpv",
                    "name": null,
                    "username": "杉山 春香",
                    "email": "soutaro64@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 15,
                    "unique_id": "9cNW3SRvHy",
                    "name": null,
                    "username": "石田 晃",
                    "email": "kenichi.yamagishi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "PpRAZW8Brv",
                    "name": null,
                    "username": "木村 里佳",
                    "email": "gtanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "nepn1JUWEn",
                    "name": null,
                    "username": "若松 陽子",
                    "email": "ryosuke.tanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 102,
            "name": "voluptatem",
            "shop_id": "J000742418",
            "budget": 5491,
            "actual": 18689,
            "start_time": "2019-02-25 18:47:23",
            "end_time": "2019-03-02 18:47:23",
            "my_budget_estimate": 2700,
            "my_budget_actual": 9300,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 40,
                "unique_id": "xVTdlKbeWY",
                "name": null,
                "username": "宮沢 京助",
                "email": "matsumoto.miki@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 15,
                    "unique_id": "9cNW3SRvHy",
                    "name": null,
                    "username": "石田 晃",
                    "email": "kenichi.yamagishi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "44XBioqSIA",
                    "name": null,
                    "username": "大垣 春香",
                    "email": "nakatsugawa.shota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "HDlLkNcsJt",
                    "name": null,
                    "username": "佐藤 あすか",
                    "email": "nsugiyama@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "r8df4SN0km",
                    "name": null,
                    "username": "渡辺 舞",
                    "email": "kenichi.saito@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:23.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:23.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 104,
            "name": "voluptatem",
            "shop_id": "J000753015",
            "budget": 11876,
            "actual": 35346,
            "start_time": null,
            "end_time": null,
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 41,
                "unique_id": "0R7RuYAuND",
                "name": null,
                "username": "中島 明美",
                "email": "kanou.tsubasa@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 15,
                    "unique_id": "9cNW3SRvHy",
                    "name": null,
                    "username": "石田 晃",
                    "email": "kenichi.yamagishi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "prdFZKpAPy",
                    "name": null,
                    "username": "宇野 真綾",
                    "email": "kudo.shota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "NdG6yal8Vp",
                    "name": null,
                    "username": "渡辺 康弘",
                    "email": "kijima.momoko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "Bq3kJQIjdQ",
                    "name": null,
                    "username": "津田 明美",
                    "email": "yumiko78@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 52,
                    "unique_id": "c7uwrMvvZE",
                    "name": null,
                    "username": "近藤 英樹",
                    "email": "isato@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:24.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:24.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 106,
            "name": "aut",
            "shop_id": "J000449898",
            "budget": 8600,
            "actual": 30462,
            "start_time": null,
            "end_time": null,
            "my_budget_estimate": 7166.666666666667,
            "my_budget_actual": 25383.333333333336,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 41,
                "unique_id": "0R7RuYAuND",
                "name": null,
                "username": "中島 明美",
                "email": "kanou.tsubasa@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 15,
                    "unique_id": "9cNW3SRvHy",
                    "name": null,
                    "username": "石田 晃",
                    "email": "kenichi.yamagishi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "PpRAZW8Brv",
                    "name": null,
                    "username": "木村 里佳",
                    "email": "gtanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "NdG6yal8Vp",
                    "name": null,
                    "username": "渡辺 康弘",
                    "email": "kijima.momoko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "Bq3kJQIjdQ",
                    "name": null,
                    "username": "津田 明美",
                    "email": "yumiko78@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "kfADIsBFSI",
                    "name": null,
                    "username": "喜嶋 太郎",
                    "email": "mitsuru.kimura@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:24.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:24.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 122,
            "name": "est",
            "shop_id": "J000109445",
            "budget": 13614,
            "actual": 25162,
            "start_time": "2019-03-02 18:47:25",
            "end_time": "2019-03-17 18:47:25",
            "my_budget_estimate": 9066.666666666668,
            "my_budget_actual": 16766.666666666664,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 47,
                "unique_id": "r8df4SN0km",
                "name": null,
                "username": "渡辺 舞",
                "email": "kenichi.saito@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "dNhr79AyYx",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser48@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "TM9DzhMzDO",
                    "name": null,
                    "username": "中津川 香織",
                    "email": "youichi.murayama@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "HDlLkNcsJt",
                    "name": null,
                    "username": "佐藤 あすか",
                    "email": "nsugiyama@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "NdG6yal8Vp",
                    "name": null,
                    "username": "渡辺 康弘",
                    "email": "kijima.momoko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 40,
                    "unique_id": "xVTdlKbeWY",
                    "name": null,
                    "username": "宮沢 京助",
                    "email": "matsumoto.miki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 54,
                    "unique_id": "orc62FAjQj",
                    "name": null,
                    "username": "井高 結衣",
                    "email": "eyamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
            "id": 42,
            "name": "distinctio",
            "shop_id": "J001125885",
            "budget": 2390,
            "actual": 2021,
            "start_time": "2019-03-02 18:47:19",
            "end_time": "2019-03-17 18:47:19",
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 20,
                "unique_id": "rdSN8C0xsZ",
                "name": null,
                "username": "伊藤 和也",
                "email": "yumiko31@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "prdFZKpAPy",
                    "name": null,
                    "username": "宇野 真綾",
                    "email": "kudo.shota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "rKXQvTV4tz",
                    "name": null,
                    "username": "中津川 智也",
                    "email": "kanou.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "Su2Om2VxHO",
                    "name": null,
                    "username": "坂本 修平",
                    "email": "miyake.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "dbeShDIN5l",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yoko86@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "name": "doloremque",
            "shop_id": "J001006387",
            "budget": 8606,
            "actual": 14919,
            "start_time": "2019-03-02 18:47:19",
            "end_time": null,
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 20,
                "unique_id": "rdSN8C0xsZ",
                "name": null,
                "username": "伊藤 和也",
                "email": "yumiko31@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "rKXQvTV4tz",
                    "name": null,
                    "username": "中津川 智也",
                    "email": "kanou.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "Su2Om2VxHO",
                    "name": null,
                    "username": "坂本 修平",
                    "email": "miyake.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "NdG6yal8Vp",
                    "name": null,
                    "username": "渡辺 康弘",
                    "email": "kijima.momoko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "dbeShDIN5l",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yoko86@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 51,
            "name": "et",
            "shop_id": "J001178400",
            "budget": 17403,
            "actual": 22163,
            "start_time": "2019-03-02 18:47:19",
            "end_time": "2019-03-17 18:47:19",
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 23,
                "unique_id": "prdFZKpAPy",
                "name": null,
                "username": "宇野 真綾",
                "email": "kudo.shota@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RvlzP3MKwH",
                    "name": null,
                    "username": "西之園 裕樹",
                    "email": "nanami70@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "PIQ3Zrkj17",
                    "name": null,
                    "username": "加納 くみ子",
                    "email": "maaya.fujimoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "BI5tAcUz6w",
                    "name": null,
                    "username": "近藤 涼平",
                    "email": "minoru.fujimoto@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "NdG6yal8Vp",
                    "name": null,
                    "username": "渡辺 康弘",
                    "email": "kijima.momoko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "dbeShDIN5l",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yoko86@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 81,
            "name": "reiciendis",
            "shop_id": "J001177654",
            "budget": 1228,
            "actual": 31978,
            "start_time": null,
            "end_time": null,
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 33,
                "unique_id": "Su2Om2VxHO",
                "name": null,
                "username": "坂本 修平",
                "email": "miyake.kyosuke@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "f3LUyanLpv",
                    "name": null,
                    "username": "杉山 春香",
                    "email": "soutaro64@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "kfADIsBFSI",
                    "name": null,
                    "username": "喜嶋 太郎",
                    "email": "mitsuru.kimura@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "YQPg2GgZlk",
                    "name": null,
                    "username": "中村 太一",
                    "email": "uekoda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 54,
                    "unique_id": "orc62FAjQj",
                    "name": null,
                    "username": "井高 結衣",
                    "email": "eyamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
            "id": 52,
            "name": "sit",
            "shop_id": "J000109445",
            "budget": 13024,
            "actual": 3283,
            "start_time": null,
            "end_time": null,
            "my_budget_estimate": 10850,
            "my_budget_actual": 2733.333333333333,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 23,
                "unique_id": "prdFZKpAPy",
                "name": null,
                "username": "宇野 真綾",
                "email": "kudo.shota@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "f3LUyanLpv",
                    "name": null,
                    "username": "杉山 春香",
                    "email": "soutaro64@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "BI5tAcUz6w",
                    "name": null,
                    "username": "近藤 涼平",
                    "email": "minoru.fujimoto@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "a93vkaFNZI",
                    "name": null,
                    "username": "佐々木 翔太",
                    "email": "cmiyake@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 51,
                    "unique_id": "r69JFGY9mq",
                    "name": null,
                    "username": "宮沢 千代",
                    "email": "asasada@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 56,
            "name": "maxime",
            "shop_id": "J001182216",
            "budget": 13551,
            "actual": 33154,
            "start_time": null,
            "end_time": null,
            "my_budget_estimate": 10150,
            "my_budget_actual": 24850,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 25,
                "unique_id": "IZTymxTmB0",
                "name": null,
                "username": "松本 春香",
                "email": "minoru.kanou@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ay5xy8wG4k",
                    "name": null,
                    "username": "テストユーザー３",
                    "email": "testuser50@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "ij4PAPxlCc",
                    "name": null,
                    "username": "木村 亮介",
                    "email": "kiriyama.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "0R7RuYAuND",
                    "name": null,
                    "username": "中島 明美",
                    "email": "kanou.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 62,
            "name": "cupiditate",
            "shop_id": "J001177654",
            "budget": 6308,
            "actual": 15628,
            "start_time": "2019-03-12 18:47:20",
            "end_time": "2019-03-17 18:47:20",
            "my_budget_estimate": 5040,
            "my_budget_actual": 12500,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 27,
                "unique_id": "44XBioqSIA",
                "name": null,
                "username": "大垣 春香",
                "email": "nakatsugawa.shota@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "w3vjomykDX",
                    "name": null,
                    "username": "渚 桃子",
                    "email": "kobayashi.mikako@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "rKXQvTV4tz",
                    "name": null,
                    "username": "中津川 智也",
                    "email": "kanou.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "YQPg2GgZlk",
                    "name": null,
                    "username": "中村 太一",
                    "email": "uekoda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 55,
                    "unique_id": "hdcqEXWOUQ",
                    "name": null,
                    "username": "野村 拓真",
                    "email": "aaoyama@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 63,
            "name": "aliquid",
            "shop_id": "J001177654",
            "budget": 1303,
            "actual": 33559,
            "start_time": "2019-03-02 18:47:20",
            "end_time": null,
            "my_budget_estimate": 1040,
            "my_budget_actual": 26839.999999999996,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 27,
                "unique_id": "44XBioqSIA",
                "name": null,
                "username": "大垣 春香",
                "email": "nakatsugawa.shota@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "w3vjomykDX",
                    "name": null,
                    "username": "渚 桃子",
                    "email": "kobayashi.mikako@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "ij4PAPxlCc",
                    "name": null,
                    "username": "木村 亮介",
                    "email": "kiriyama.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 39,
                    "unique_id": "Ny4ImnfXol",
                    "name": null,
                    "username": "宇野 あすか",
                    "email": "nomura.yoko@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "r8df4SN0km",
                    "name": null,
                    "username": "渡辺 舞",
                    "email": "kenichi.saito@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "a93vkaFNZI",
                    "name": null,
                    "username": "佐々木 翔太",
                    "email": "cmiyake@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 64,
            "name": "quibusdam",
            "shop_id": "J001006387",
            "budget": 21431,
            "actual": 49116,
            "start_time": "2019-03-02 18:47:20",
            "end_time": "2019-03-17 18:47:20",
            "my_budget_estimate": 17140,
            "my_budget_actual": 39280,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 27,
                "unique_id": "44XBioqSIA",
                "name": null,
                "username": "大垣 春香",
                "email": "nakatsugawa.shota@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 39,
                    "unique_id": "Ny4ImnfXol",
                    "name": null,
                    "username": "宇野 あすか",
                    "email": "nomura.yoko@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "a93vkaFNZI",
                    "name": null,
                    "username": "佐々木 翔太",
                    "email": "cmiyake@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "YQPg2GgZlk",
                    "name": null,
                    "username": "中村 太一",
                    "email": "uekoda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 55,
                    "unique_id": "hdcqEXWOUQ",
                    "name": null,
                    "username": "野村 拓真",
                    "email": "aaoyama@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 82,
            "name": "sunt",
            "shop_id": "J001182216",
            "budget": 25910,
            "actual": 37154,
            "start_time": "2019-03-02 18:47:22",
            "end_time": "2019-03-17 18:47:22",
            "my_budget_estimate": 17266.666666666664,
            "my_budget_actual": 24766.666666666664,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 33,
                "unique_id": "Su2Om2VxHO",
                "name": null,
                "username": "坂本 修平",
                "email": "miyake.kyosuke@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "f3LUyanLpv",
                    "name": null,
                    "username": "杉山 春香",
                    "email": "soutaro64@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 15,
                    "unique_id": "9cNW3SRvHy",
                    "name": null,
                    "username": "石田 晃",
                    "email": "kenichi.yamagishi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "PpRAZW8Brv",
                    "name": null,
                    "username": "木村 里佳",
                    "email": "gtanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "nepn1JUWEn",
                    "name": null,
                    "username": "若松 陽子",
                    "email": "ryosuke.tanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 102,
            "name": "voluptatem",
            "shop_id": "J000742418",
            "budget": 5491,
            "actual": 18689,
            "start_time": "2019-02-25 18:47:23",
            "end_time": "2019-03-02 18:47:23",
            "my_budget_estimate": 2700,
            "my_budget_actual": 9300,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 40,
                "unique_id": "xVTdlKbeWY",
                "name": null,
                "username": "宮沢 京助",
                "email": "matsumoto.miki@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 15,
                    "unique_id": "9cNW3SRvHy",
                    "name": null,
                    "username": "石田 晃",
                    "email": "kenichi.yamagishi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "44XBioqSIA",
                    "name": null,
                    "username": "大垣 春香",
                    "email": "nakatsugawa.shota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "HDlLkNcsJt",
                    "name": null,
                    "username": "佐藤 あすか",
                    "email": "nsugiyama@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "r8df4SN0km",
                    "name": null,
                    "username": "渡辺 舞",
                    "email": "kenichi.saito@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:23.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:23.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 106,
            "name": "aut",
            "shop_id": "J000449898",
            "budget": 8600,
            "actual": 30462,
            "start_time": null,
            "end_time": null,
            "my_budget_estimate": 7166.666666666667,
            "my_budget_actual": 25383.333333333336,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 41,
                "unique_id": "0R7RuYAuND",
                "name": null,
                "username": "中島 明美",
                "email": "kanou.tsubasa@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 15,
                    "unique_id": "9cNW3SRvHy",
                    "name": null,
                    "username": "石田 晃",
                    "email": "kenichi.yamagishi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "PpRAZW8Brv",
                    "name": null,
                    "username": "木村 里佳",
                    "email": "gtanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "NdG6yal8Vp",
                    "name": null,
                    "username": "渡辺 康弘",
                    "email": "kijima.momoko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "Bq3kJQIjdQ",
                    "name": null,
                    "username": "津田 明美",
                    "email": "yumiko78@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "kfADIsBFSI",
                    "name": null,
                    "username": "喜嶋 太郎",
                    "email": "mitsuru.kimura@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:24.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:24.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 122,
            "name": "est",
            "shop_id": "J000109445",
            "budget": 13614,
            "actual": 25162,
            "start_time": "2019-03-02 18:47:25",
            "end_time": "2019-03-17 18:47:25",
            "my_budget_estimate": 9066.666666666668,
            "my_budget_actual": 16766.666666666664,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 47,
                "unique_id": "r8df4SN0km",
                "name": null,
                "username": "渡辺 舞",
                "email": "kenichi.saito@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "dNhr79AyYx",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser48@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "TM9DzhMzDO",
                    "name": null,
                    "username": "中津川 香織",
                    "email": "youichi.murayama@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "HDlLkNcsJt",
                    "name": null,
                    "username": "佐藤 あすか",
                    "email": "nsugiyama@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "NdG6yal8Vp",
                    "name": null,
                    "username": "渡辺 康弘",
                    "email": "kijima.momoko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 40,
                    "unique_id": "xVTdlKbeWY",
                    "name": null,
                    "username": "宮沢 京助",
                    "email": "matsumoto.miki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 54,
                    "unique_id": "orc62FAjQj",
                    "name": null,
                    "username": "井高 結衣",
                    "email": "eyamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
            "id": 8,
            "name": "dolores",
            "shop_id": "J001006387",
            "budget": 10011,
            "actual": 14579,
            "start_time": "2019-03-02 18:47:16",
            "end_time": null,
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 9,
                "unique_id": "wN1oN8U5R4",
                "name": null,
                "username": "テストユーザー２",
                "email": "testuser49@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "dNhr79AyYx",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser48@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "zxO7ZGQE1c",
                    "name": null,
                    "username": "宇野 里佳",
                    "email": "naoko.yoshimoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "rKXQvTV4tz",
                    "name": null,
                    "username": "中津川 智也",
                    "email": "kanou.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "dbeShDIN5l",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yoko86@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "beM6Rat9Uu",
                    "name": null,
                    "username": "佐藤 健一",
                    "email": "yasuhiro.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:16.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:16.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 9,
            "name": "atque",
            "shop_id": "J000753015",
            "budget": 15705,
            "actual": 30380,
            "start_time": "2019-03-12 18:47:16",
            "end_time": "2019-03-17 18:47:16",
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 9,
                "unique_id": "wN1oN8U5R4",
                "name": null,
                "username": "テストユーザー２",
                "email": "testuser49@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "dNhr79AyYx",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser48@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "zxO7ZGQE1c",
                    "name": null,
                    "username": "宇野 里佳",
                    "email": "naoko.yoshimoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "NdG6yal8Vp",
                    "name": null,
                    "username": "渡辺 康弘",
                    "email": "kijima.momoko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "dbeShDIN5l",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yoko86@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "beM6Rat9Uu",
                    "name": null,
                    "username": "佐藤 健一",
                    "email": "yasuhiro.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:16.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:16.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "name": "sequi",
            "shop_id": "J000753015",
            "budget": 26155,
            "actual": 1803,
            "start_time": "2019-03-02 18:47:19",
            "end_time": null,
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 20,
                "unique_id": "rdSN8C0xsZ",
                "name": null,
                "username": "伊藤 和也",
                "email": "yumiko31@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "prdFZKpAPy",
                    "name": null,
                    "username": "宇野 真綾",
                    "email": "kudo.shota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "dbeShDIN5l",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yoko86@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "r8df4SN0km",
                    "name": null,
                    "username": "渡辺 舞",
                    "email": "kenichi.saito@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 53,
                    "unique_id": "ghClkzDKc3",
                    "name": null,
                    "username": "加納 香織",
                    "email": "yuki18@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:19.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 57,
            "name": "officia",
            "shop_id": "J000449898",
            "budget": 19392,
            "actual": 48533,
            "start_time": "2019-03-02 18:47:20",
            "end_time": "2019-03-17 18:47:20",
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 25,
                "unique_id": "IZTymxTmB0",
                "name": null,
                "username": "松本 春香",
                "email": "minoru.kanou@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ay5xy8wG4k",
                    "name": null,
                    "username": "テストユーザー３",
                    "email": "testuser50@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "j2ILWjGRjK",
                    "name": null,
                    "username": "山口 千代",
                    "email": "kkudo@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "TM9DzhMzDO",
                    "name": null,
                    "username": "中津川 香織",
                    "email": "youichi.murayama@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:20.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 104,
            "name": "voluptatem",
            "shop_id": "J000753015",
            "budget": 11876,
            "actual": 35346,
            "start_time": null,
            "end_time": null,
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 41,
                "unique_id": "0R7RuYAuND",
                "name": null,
                "username": "中島 明美",
                "email": "kanou.tsubasa@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 15,
                    "unique_id": "9cNW3SRvHy",
                    "name": null,
                    "username": "石田 晃",
                    "email": "kenichi.yamagishi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "prdFZKpAPy",
                    "name": null,
                    "username": "宇野 真綾",
                    "email": "kudo.shota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "NdG6yal8Vp",
                    "name": null,
                    "username": "渡辺 康弘",
                    "email": "kijima.momoko@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "Bq3kJQIjdQ",
                    "name": null,
                    "username": "津田 明美",
                    "email": "yumiko78@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 52,
                    "unique_id": "c7uwrMvvZE",
                    "name": null,
                    "username": "近藤 英樹",
                    "email": "isato@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:24.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:24.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
            "session": "r6qZX3oDH7BA5YuS",
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
        "name": "officia",
        "shop_id": "J000449898",
        "budget": 19392,
        "actual": 48533,
        "start_time": "2019-03-02 18:47:20",
        "end_time": "2019-03-17 18:47:20",
        "my_budget_estimate": 0,
        "my_budget_actual": 0,
        "unit_rounding_budget": "100",
        "unit_rounding_actual": "100",
        "manager": {
            "id": 25,
            "unique_id": "IZTymxTmB0",
            "name": null,
            "username": "松本 春香",
            "email": "minoru.kanou@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 10,
                "unique_id": "ay5xy8wG4k",
                "name": null,
                "username": "テストユーザー３",
                "email": "testuser50@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 12,
                "unique_id": "j2ILWjGRjK",
                "name": null,
                "username": "山口 千代",
                "email": "kkudo@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 16,
                "unique_id": "TM9DzhMzDO",
                "name": null,
                "username": "中津川 香織",
                "email": "youichi.murayama@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 26,
                "unique_id": "fJxaYxDBRG",
                "name": null,
                "username": "木村 桃子",
                "email": "atakahashi@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-03-07 18:47:20.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:20.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
    -d '{"join_status":"v8wV7CbZQUCAXoF6"}'

```

```javascript
const url = new URL("http://localhost/api/guest/sessions/{session}");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "join_status": "v8wV7CbZQUCAXoF6"
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
        "id": 7,
        "unique_id": "6PzYUBzkvQ",
        "name": null,
        "username": "テスト太郎",
        "email": "testuser@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "wait",
        "paid": 0,
        "plus_minus": null,
        "attribute_name": null,
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:28.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
    -d '{"unique_id":"GliJZ99QdO3cOCXC","email":"tGq8d9tz8uMqGsTv","username":"51UYaMPeWcfA3cb7","password":"XyNWbKOa39HRUCNf","unique_id_search_flag":true,"username_search_flag":true}'

```

```javascript
const url = new URL("http://localhost/api/profile/update");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "GliJZ99QdO3cOCXC",
    "email": "tGq8d9tz8uMqGsTv",
    "username": "51UYaMPeWcfA3cb7",
    "password": "XyNWbKOa39HRUCNf",
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
        "id": 8,
        "unique_id": "DDDDDDDD",
        "name": null,
        "username": "AAAAAAAAAAA",
        "email": "new@new.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:48.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
    email | string |  required  | 
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
            "id": 1,
            "unique_id": "TESTTEST",
            "name": null,
            "username": "幹事　浜田",
            "email": "hamada@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 2,
            "unique_id": "d0rPHbnDzT",
            "name": null,
            "username": "山本 京助",
            "email": "yamamoto@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "unique_id": "1cJCIy5jYw",
            "name": null,
            "username": "原田 和也",
            "email": "harada@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "unique_id": "uvriBzNcBI",
            "name": null,
            "username": "若松 桃子",
            "email": "wakamatsu@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 5,
            "unique_id": "o9TRRtR6w1",
            "name": null,
            "username": "坂本 太一",
            "email": "sakamoto@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 6,
            "unique_id": "yMmaRWyX4c",
            "name": null,
            "username": "伊藤 直子",
            "email": "itho@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 8,
            "unique_id": "DDDDDDDD",
            "name": null,
            "username": "AAAAAAAAAAA",
            "email": "new@new.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:48.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 12,
            "unique_id": "j2ILWjGRjK",
            "name": null,
            "username": "山口 千代",
            "email": "kkudo@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 15,
            "unique_id": "9cNW3SRvHy",
            "name": null,
            "username": "石田 晃",
            "email": "kenichi.yamagishi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 16,
            "unique_id": "TM9DzhMzDO",
            "name": null,
            "username": "中津川 香織",
            "email": "youichi.murayama@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 17,
            "unique_id": "w3vjomykDX",
            "name": null,
            "username": "渚 桃子",
            "email": "kobayashi.mikako@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 18,
            "unique_id": "ij4PAPxlCc",
            "name": null,
            "username": "木村 亮介",
            "email": "kiriyama.manabu@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 22,
            "unique_id": "RvlzP3MKwH",
            "name": null,
            "username": "西之園 裕樹",
            "email": "nanami70@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "unique_id": "prdFZKpAPy",
            "name": null,
            "username": "宇野 真綾",
            "email": "kudo.shota@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 24,
            "unique_id": "McpKX46icz",
            "name": null,
            "username": "吉田 裕太",
            "email": "fkato@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 25,
            "unique_id": "IZTymxTmB0",
            "name": null,
            "username": "松本 春香",
            "email": "minoru.kanou@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 27,
            "unique_id": "44XBioqSIA",
            "name": null,
            "username": "大垣 春香",
            "email": "nakatsugawa.shota@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 29,
            "unique_id": "PpRAZW8Brv",
            "name": null,
            "username": "木村 里佳",
            "email": "gtanabe@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 30,
            "unique_id": "GAcEiG7vXH",
            "name": null,
            "username": "野村 和也",
            "email": "shuhei41@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 32,
            "unique_id": "HDlLkNcsJt",
            "name": null,
            "username": "佐藤 あすか",
            "email": "nsugiyama@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "unique_id": "PIQ3Zrkj17",
            "name": null,
            "username": "加納 くみ子",
            "email": "maaya.fujimoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 36,
            "unique_id": "NdG6yal8Vp",
            "name": null,
            "username": "渡辺 康弘",
            "email": "kijima.momoko@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 39,
            "unique_id": "Ny4ImnfXol",
            "name": null,
            "username": "宇野 あすか",
            "email": "nomura.yoko@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 40,
            "unique_id": "xVTdlKbeWY",
            "name": null,
            "username": "宮沢 京助",
            "email": "matsumoto.miki@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 42,
            "unique_id": "d1v71EyxTE",
            "name": null,
            "username": "高橋 晃",
            "email": "euno@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 44,
            "unique_id": "Bq3kJQIjdQ",
            "name": null,
            "username": "津田 明美",
            "email": "yumiko78@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "unique_id": "kfADIsBFSI",
            "name": null,
            "username": "喜嶋 太郎",
            "email": "mitsuru.kimura@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 46,
            "unique_id": "beM6Rat9Uu",
            "name": null,
            "username": "佐藤 健一",
            "email": "yasuhiro.yamaguchi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "r8df4SN0km",
            "name": null,
            "username": "渡辺 舞",
            "email": "kenichi.saito@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "a93vkaFNZI",
            "name": null,
            "username": "佐々木 翔太",
            "email": "cmiyake@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 49,
            "unique_id": "YQPg2GgZlk",
            "name": null,
            "username": "中村 太一",
            "email": "uekoda@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "uzV8vsZ2a4",
            "name": null,
            "username": "宮沢 裕樹",
            "email": "soutaro.yamagishi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 51,
            "unique_id": "r69JFGY9mq",
            "name": null,
            "username": "宮沢 千代",
            "email": "asasada@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 52,
            "unique_id": "c7uwrMvvZE",
            "name": null,
            "username": "近藤 英樹",
            "email": "isato@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 53,
            "unique_id": "ghClkzDKc3",
            "name": null,
            "username": "加納 香織",
            "email": "yuki18@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "unique_id": "orc62FAjQj",
            "name": null,
            "username": "井高 結衣",
            "email": "eyamaguchi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 61,
            "unique_id": "mKqGedyOd4",
            "name": null,
            "username": "aaaa",
            "email": "tu4bea@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-03-07 18:47:43.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:43.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 62,
            "unique_id": "Z5bv2nkctz",
            "name": null,
            "username": "aaaa",
            "email": "tNHnEuy@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-03-07 18:47:43.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:43.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 63,
            "unique_id": "ViPtiKuxSV",
            "name": null,
            "username": "aaaa",
            "email": "9J6pzy18@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-03-07 18:47:44.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:44.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
    -d '{"username":"G8bqOa4CEOn5h0hI"}'

```

```javascript
const url = new URL("http://localhost/api/search/forward_by_username");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "username": "G8bqOa4CEOn5h0hI"
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
            "id": 7,
            "unique_id": "6PzYUBzkvQ",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 9,
            "unique_id": "wN1oN8U5R4",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser49@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 10,
            "unique_id": "ay5xy8wG4k",
            "name": null,
            "username": "テストユーザー３",
            "email": "testuser50@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
    -d '{"unique_id":"pldow0j5NopIQZcf"}'

```

```javascript
const url = new URL("http://localhost/api/search/perfect_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "pldow0j5NopIQZcf"
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
        "username": "幹事　浜田",
        "email": "hamada@hew.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-03-07 18:47:12.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:12.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
    -d '{"unique_id":"kBlnISMZbaP0T0en"}'

```

```javascript
const url = new URL("http://localhost/api/search/forward_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "kBlnISMZbaP0T0en"
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
            "username": "幹事　浜田",
            "email": "hamada@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 16,
            "unique_id": "TM9DzhMzDO",
            "name": null,
            "username": "中津川 香織",
            "email": "youichi.murayama@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
            "session": "1K2Xld96s3TrKF2X",
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
            "unique_id": "rdSN8C0xsZ",
            "name": null,
            "username": "伊藤 和也",
            "email": "yumiko31@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "deny",
            "paid": 0,
            "plus_minus": null,
            "attribute_name": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "fJxaYxDBRG",
            "name": null,
            "username": "木村 桃子",
            "email": "atakahashi@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 1,
            "plus_minus": null,
            "attribute_name": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "unique_id": "Su2Om2VxHO",
            "name": null,
            "username": "坂本 修平",
            "email": "miyake.kyosuke@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "deny",
            "paid": 0,
            "plus_minus": null,
            "attribute_name": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "4zBlCSaLzG",
            "name": null,
            "username": "石田 晃",
            "email": "htanaka@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 0,
            "plus_minus": null,
            "attribute_name": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "0R7RuYAuND",
            "name": null,
            "username": "中島 明美",
            "email": "kanou.tsubasa@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 1,
            "plus_minus": null,
            "attribute_name": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
## sessions.users.store ◆セッションにユーザーを追加する

> Example request:

```bash
curl -X POST "http://localhost/api/sessions/{session}/users" \
    -H "Content-Type: application/json" \
    -d '{"user_id":"nAyg4vjJY3jumet4","join_status":"x915190GBGd4ndC9","paid":7,"budget":16,"budget_actual":4}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "FVpdSYMuiLYwrIWb",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": "nAyg4vjJY3jumet4",
    "join_status": "x915190GBGd4ndC9",
    "paid": 7,
    "budget": 16,
    "budget_actual": 4
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
            "id": 14,
            "unique_id": "59vAm11iZ2",
            "name": null,
            "username": "中島 香織",
            "email": "miki05@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 0,
            "plus_minus": -282,
            "attribute_name": "cum",
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
            "session": "Rylp0r6f8h76VySK",
            "user": "D0QAuUWdlOR0W8gd",
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
        "id": 14,
        "unique_id": "59vAm11iZ2",
        "name": null,
        "username": "中島 香織",
        "email": "miki05@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": -282,
        "attribute_name": "cum",
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
    -d '{"join_status":1,"paid":6,"plus_minus":16,"attribute_name":"8bFmmReecNpY6hwM","budget":15,"budget_actual":20}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "8RM0vS86LQFBgBOZ",
            "user": "r86nnE5HQpxBFlCW",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "join_status": 1,
    "paid": 6,
    "plus_minus": 16,
    "attribute_name": "8bFmmReecNpY6hwM",
    "budget": 15,
    "budget_actual": 20
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
        "id": 11,
        "unique_id": "D7YwsKvpHf",
        "name": null,
        "username": "伊藤 舞",
        "email": "naoko73@example.net",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 10000,
        "attribute_name": "cum",
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
    join_status | integer |  optional  | 参加状況のステータス
    paid | integer |  optional  | 支払いしたか
    plus_minus | integer |  optional  | 加減算。セッションに追加時は、フレンドとしてのplus_minusが自動適用される。
    attribute_name | string |  optional  | このuserのこのセッションにおける属性名。セッションに追加時は、フレンドとしての属性名が自動適用される
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
            "session": "Yg10XUhcIWkV2Q5F",
            "user": "zuqiyRAkbp8Zyv9B",
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

<!-- START_5481581c8f98564bda4498aea23c2b47 -->
## sessions.users.switch_paid 指定したセッションのuserの支払い状況を反転する

> Example request:

```bash
curl -X PUT "http://localhost/api/sessions/{session}/users/{user}/switch_paid" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}/switch_paid");

    let params = {
            "session": "NprrzWo6Wx6Ov2s4",
            "user": "zCREboevwlsG5sDR",
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
    "data": {
        "id": 14,
        "unique_id": "59vAm11iZ2",
        "name": null,
        "username": "中島 香織",
        "email": "miki05@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "deny",
        "paid": 0,
        "plus_minus": null,
        "attribute_name": null,
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "deleted_at": null
    }
}
```

### HTTP Request
`PUT api/sessions/{session}/users/{user}/switch_paid`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    session |  required  | セッションid
    user |  required  | セッションに属するユーザーのid

<!-- END_5481581c8f98564bda4498aea23c2b47 -->

<!-- START_94e7b9c051638e39e25052d31bb1e8d4 -->
## sessions.users.store_group ◆セッションにあるグループのメンバーを追加する。（重複はしないように追加される。また、join_statusは、　waitなどのDBの初期値で決め打ちされる）。追加した後のsessionのuser一覧を返す

> Example request:

```bash
curl -X POST "http://localhost/api/sessions/{session}/groups/{group}" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/groups/{group}");

    let params = {
            "session": "fwuP7Ssuv6DuJLDh",
            "group": "pLupIjZ3dpKtXEs8",
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
            "id": 38,
            "unique_id": "4zBlCSaLzG",
            "name": null,
            "username": "石田 晃",
            "email": "htanaka@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "wait",
            "paid": 0,
            "plus_minus": -1642,
            "attribute_name": "minus",
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
            "id": 2,
            "name": "odit",
            "shop_id": "J000753015",
            "budget": 12722,
            "actual": 3556,
            "start_time": null,
            "end_time": null,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 11,
                    "unique_id": "D7YwsKvpHf",
                    "name": null,
                    "username": "伊藤 舞",
                    "email": "naoko73@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "59vAm11iZ2",
                    "name": null,
                    "username": "中島 香織",
                    "email": "miki05@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "zpjvx2Vy05",
                    "name": null,
                    "username": "中島 健一",
                    "email": "baota@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RciOrUJHsp",
                    "name": null,
                    "username": "井上 健一",
                    "email": "ktanabe@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "nepn1JUWEn",
                    "name": null,
                    "username": "若松 陽子",
                    "email": "ryosuke.tanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "0R7RuYAuND",
                    "name": null,
                    "username": "中島 明美",
                    "email": "kanou.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "quia",
            "shop_id": "J001182216",
            "budget": 12813,
            "actual": 30744,
            "start_time": "2019-03-12 18:47:15",
            "end_time": "2019-03-17 18:47:15",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 13,
                    "unique_id": "f3LUyanLpv",
                    "name": null,
                    "username": "杉山 春香",
                    "email": "soutaro64@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "zpjvx2Vy05",
                    "name": null,
                    "username": "中島 健一",
                    "email": "baota@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RciOrUJHsp",
                    "name": null,
                    "username": "井上 健一",
                    "email": "ktanabe@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "Su2Om2VxHO",
                    "name": null,
                    "username": "坂本 修平",
                    "email": "miyake.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "nepn1JUWEn",
                    "name": null,
                    "username": "若松 陽子",
                    "email": "ryosuke.tanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "cupiditate",
            "shop_id": "J000742418",
            "budget": 1803,
            "actual": 44289,
            "start_time": "2019-03-02 18:47:15",
            "end_time": null,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 20,
                    "unique_id": "rdSN8C0xsZ",
                    "name": null,
                    "username": "伊藤 和也",
                    "email": "yumiko31@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "Su2Om2VxHO",
                    "name": null,
                    "username": "坂本 修平",
                    "email": "miyake.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "0R7RuYAuND",
                    "name": null,
                    "username": "中島 明美",
                    "email": "kanou.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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
    -d '{"name":"0rdlpWwli4xf2CYV","shop_id":"W76sW8IUMyPJlKZq","budget":1,"actual":20,"unit_rounding_budget":8,"unit_rounding_actual":9,"start_time":"uc6xakmRGDUABHeT","end_time":"5mnO61t1yLjPXaeW"}'

```

```javascript
const url = new URL("http://localhost/api/sessions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "0rdlpWwli4xf2CYV",
    "shop_id": "W76sW8IUMyPJlKZq",
    "budget": 1,
    "actual": 20,
    "unit_rounding_budget": 8,
    "unit_rounding_actual": 9,
    "start_time": "uc6xakmRGDUABHeT",
    "end_time": "5mnO61t1yLjPXaeW"
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
        "id": 152,
        "name": "newSessionBmXO9",
        "shop_id": "34",
        "budget": 3000,
        "actual": 3000,
        "start_time": null,
        "end_time": null,
        "unit_rounding_budget": "100",
        "unit_rounding_actual": "100",
        "manager": {
            "id": 7,
            "unique_id": "6PzYUBzkvQ",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "users": [],
        "created_at": {
            "date": "2019-03-07 18:47:48.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:48.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
    unit_rounding_budget | integer |  optional  | 丸め単位（1, 10, 100, 1000, 10000）
    unit_rounding_actual | integer |  optional  | 丸め単位（1, 10, 100, 1000, 10000）
    start_time | datetime |  optional  | セッションの開始時刻
    end_time | datetime |  optional  | セッションの終了時刻

<!-- END_b0309e45a2af0a1e9b599219dbce6d98 -->

<!-- START_c4513c1735d4c69a4924bda25a3862d9 -->
## sessions.index_with_only_allow_users 管理しているセッション一覧(allow ユーザーのみを取得した、セッション情報を返す)

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions/with_only_allow_users" 
```

```javascript
const url = new URL("http://localhost/api/sessions/with_only_allow_users");

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
            "name": "odit",
            "shop_id": "J000753015",
            "budget": 12722,
            "actual": 3556,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 41,
                    "unique_id": "0R7RuYAuND",
                    "name": null,
                    "username": "中島 明美",
                    "email": "kanou.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "quia",
            "shop_id": "J001182216",
            "budget": 12813,
            "actual": 30744,
            "start_time": "2019-03-12 18:47:15",
            "end_time": "2019-03-17 18:47:15",
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 13,
                    "unique_id": "f3LUyanLpv",
                    "name": null,
                    "username": "杉山 春香",
                    "email": "soutaro64@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "zpjvx2Vy05",
                    "name": null,
                    "username": "中島 健一",
                    "email": "baota@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RciOrUJHsp",
                    "name": null,
                    "username": "井上 健一",
                    "email": "ktanabe@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "Su2Om2VxHO",
                    "name": null,
                    "username": "坂本 修平",
                    "email": "miyake.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "nepn1JUWEn",
                    "name": null,
                    "username": "若松 陽子",
                    "email": "ryosuke.tanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "cupiditate",
            "shop_id": "J000742418",
            "budget": 1803,
            "actual": 44289,
            "start_time": "2019-03-02 18:47:15",
            "end_time": null,
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "0R7RuYAuND",
                    "name": null,
                    "username": "中島 明美",
                    "email": "kanou.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/sessions/with_only_allow_users`


<!-- END_c4513c1735d4c69a4924bda25a3862d9 -->

<!-- START_25261926f01cce7bf9e4d51bfd936fdd -->
## sessions.not_start 始まっていないセッション一覧(【条件式】今 &lt; start_time &amp;&amp; deleted_at == null)

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions/not_start" 
```

```javascript
const url = new URL("http://localhost/api/sessions/not_start");

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
            "name": "odit",
            "shop_id": "J000753015",
            "budget": 12722,
            "actual": 3556,
            "start_time": null,
            "end_time": null,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 11,
                    "unique_id": "D7YwsKvpHf",
                    "name": null,
                    "username": "伊藤 舞",
                    "email": "naoko73@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "59vAm11iZ2",
                    "name": null,
                    "username": "中島 香織",
                    "email": "miki05@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "zpjvx2Vy05",
                    "name": null,
                    "username": "中島 健一",
                    "email": "baota@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RciOrUJHsp",
                    "name": null,
                    "username": "井上 健一",
                    "email": "ktanabe@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "nepn1JUWEn",
                    "name": null,
                    "username": "若松 陽子",
                    "email": "ryosuke.tanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "0R7RuYAuND",
                    "name": null,
                    "username": "中島 明美",
                    "email": "kanou.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "quia",
            "shop_id": "J001182216",
            "budget": 12813,
            "actual": 30744,
            "start_time": "2019-03-12 18:47:15",
            "end_time": "2019-03-17 18:47:15",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 13,
                    "unique_id": "f3LUyanLpv",
                    "name": null,
                    "username": "杉山 春香",
                    "email": "soutaro64@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "zpjvx2Vy05",
                    "name": null,
                    "username": "中島 健一",
                    "email": "baota@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RciOrUJHsp",
                    "name": null,
                    "username": "井上 健一",
                    "email": "ktanabe@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "Su2Om2VxHO",
                    "name": null,
                    "username": "坂本 修平",
                    "email": "miyake.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "nepn1JUWEn",
                    "name": null,
                    "username": "若松 陽子",
                    "email": "ryosuke.tanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/sessions/not_start`


<!-- END_25261926f01cce7bf9e4d51bfd936fdd -->

<!-- START_8b8bb947db34a256dec6fd3f44245542 -->
## sessions.on_going 進行中のセッション一覧(【条件式】start_time &lt; 今 &lt; end_time &amp;&amp; deleted_at == null)

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions/on_going" 
```

```javascript
const url = new URL("http://localhost/api/sessions/on_going");

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
            "name": "cupiditate",
            "shop_id": "J000742418",
            "budget": 1803,
            "actual": 44289,
            "start_time": "2019-03-02 18:47:15",
            "end_time": null,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 20,
                    "unique_id": "rdSN8C0xsZ",
                    "name": null,
                    "username": "伊藤 和也",
                    "email": "yumiko31@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "Su2Om2VxHO",
                    "name": null,
                    "username": "坂本 修平",
                    "email": "miyake.kyosuke@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "0R7RuYAuND",
                    "name": null,
                    "username": "中島 明美",
                    "email": "kanou.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/sessions/on_going`


<!-- END_8b8bb947db34a256dec6fd3f44245542 -->

<!-- START_794fba13af94e3e45e9019e11012ae9b -->
## sessions.not_payment_complete セッションのendtimeを迎えたもののうち、支払い待ちユーザーがいるセッション一覧。join_status がallowのもののみ判定。(【条件式】end_time &lt; 今 &amp;&amp; deleted_at == null &amp;&amp; 支払いがまだのユーザーがいる)

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions/not_payment_complete" 
```

```javascript
const url = new URL("http://localhost/api/sessions/not_payment_complete");

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
`GET api/sessions/not_payment_complete`


<!-- END_794fba13af94e3e45e9019e11012ae9b -->

<!-- START_df6deb2dcb51653ec88ced2b0ee527f8 -->
## sessions.history セッション履歴（deleted_atに時間が入っているもの。ようするに、幹事が削除したセッション一覧）(【条件式】deleted_at != null)

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions/history" 
```

```javascript
const url = new URL("http://localhost/api/sessions/history");

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
`GET api/sessions/history`


<!-- END_df6deb2dcb51653ec88ced2b0ee527f8 -->

<!-- START_cc3dbaa90367d63770ab0e9ff6720053 -->
## sessions.complete end_timeを過ぎて、かつ、支払いも完了しているが、セッション削除はしていない。join_status がallowのもののみ判定。(【条件式】end_time &lt; 今 &amp;&amp; deleted_at == null &amp;&amp; 全ユーザーの支払いが完了している)

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions/complete" 
```

```javascript
const url = new URL("http://localhost/api/sessions/complete");

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
`GET api/sessions/complete`


<!-- END_cc3dbaa90367d63770ab0e9ff6720053 -->

<!-- START_de7ab2ee5e93bb1ef0dadb0e40c75c35 -->
## sessions.show 一つのセッションの詳細

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions/{session}" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "9IYQfBEqeAmk3NMY",
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
        "name": "cupiditate",
        "shop_id": "J000742418",
        "budget": 1803,
        "actual": 44289,
        "start_time": "2019-03-02 18:47:15",
        "end_time": null,
        "unit_rounding_budget": "100",
        "unit_rounding_actual": "100",
        "manager": {
            "id": 7,
            "unique_id": "6PzYUBzkvQ",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 20,
                "unique_id": "rdSN8C0xsZ",
                "name": null,
                "username": "伊藤 和也",
                "email": "yumiko31@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 26,
                "unique_id": "fJxaYxDBRG",
                "name": null,
                "username": "木村 桃子",
                "email": "atakahashi@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 33,
                "unique_id": "Su2Om2VxHO",
                "name": null,
                "username": "坂本 修平",
                "email": "miyake.kyosuke@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 38,
                "unique_id": "4zBlCSaLzG",
                "name": null,
                "username": "石田 晃",
                "email": "htanaka@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 41,
                "unique_id": "0R7RuYAuND",
                "name": null,
                "username": "中島 明美",
                "email": "kanou.tsubasa@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
    -d '{"name":"iF3r0ijeV16lmOmT","shop_id":19,"budget":2,"actual":10,"unit_rounding_budget":2,"unit_rounding_actual":18,"start_time":"MxHak2cdRURbz9ip","end_time":"I6aQh8QQe33jff8W"}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "VTPHtFNzLafCcH2P",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "iF3r0ijeV16lmOmT",
    "shop_id": 19,
    "budget": 2,
    "actual": 10,
    "unit_rounding_budget": 2,
    "unit_rounding_actual": 18,
    "start_time": "MxHak2cdRURbz9ip",
    "end_time": "I6aQh8QQe33jff8W"
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
        "name": "newUpdateSessioniprhc",
        "shop_id": "34",
        "budget": 5000,
        "actual": 3000,
        "start_time": null,
        "end_time": null,
        "unit_rounding_budget": "100",
        "unit_rounding_actual": "100",
        "manager": {
            "id": 7,
            "unique_id": "6PzYUBzkvQ",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 20,
                "unique_id": "rdSN8C0xsZ",
                "name": null,
                "username": "伊藤 和也",
                "email": "yumiko31@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 26,
                "unique_id": "fJxaYxDBRG",
                "name": null,
                "username": "木村 桃子",
                "email": "atakahashi@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 33,
                "unique_id": "Su2Om2VxHO",
                "name": null,
                "username": "坂本 修平",
                "email": "miyake.kyosuke@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 38,
                "unique_id": "4zBlCSaLzG",
                "name": null,
                "username": "石田 晃",
                "email": "htanaka@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 41,
                "unique_id": "0R7RuYAuND",
                "name": null,
                "username": "中島 明美",
                "email": "kanou.tsubasa@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-03-07 18:47:15.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:48.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
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
    unit_rounding_budget | integer |  optional  | 丸め単位（1, 10, 100, 1000, 10000）
    unit_rounding_actual | integer |  optional  | 丸め単位（1, 10, 100, 1000, 10000）
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
            "session": "tEcmfz1kgi7TOcvF",
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

<!-- START_cbcf80015ca7547eaa37b766acb1f2e7 -->
## sessions.show_with_only_allow_users allow ユーザーのみを取得した、セッション情報を返す

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions/{session}/with_only_allow_users" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/with_only_allow_users");

    let params = {
            "session": "2Ooxi56JOYudht6u",
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
        "name": "newSessionBmXO9",
        "shop_id": "34",
        "budget": 3000,
        "actual": 3000,
        "start_time": null,
        "end_time": null,
        "manager": {
            "id": 7,
            "unique_id": "6PzYUBzkvQ",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "users": [],
        "created_at": {
            "date": "2019-03-07 18:47:48.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 18:47:48.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "deleted_at": null
    }
}
```

### HTTP Request
`GET api/sessions/{session}/with_only_allow_users`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    session |  required  | セッションid

<!-- END_cbcf80015ca7547eaa37b766acb1f2e7 -->

<!-- START_b6e55d81cacc9b08411534efea8aa121 -->
## sessions.can_add_users  対象のセッションに追加できるユーザー一覧を返す（自分のフレンド−そのセッションのメンバー）

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions/{session}/users/can_add" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/can_add");

    let params = {
            "session": "Vc2r8VvQYm7ycLDU",
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
            "id": 11,
            "unique_id": "D7YwsKvpHf",
            "name": null,
            "username": "伊藤 舞",
            "email": "naoko73@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -282,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "59vAm11iZ2",
            "name": null,
            "username": "中島 香織",
            "email": "miki05@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -282,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 20,
            "unique_id": "rdSN8C0xsZ",
            "name": null,
            "username": "伊藤 和也",
            "email": "yumiko31@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "et",
                "plus_minus": 163,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "4zBlCSaLzG",
            "name": null,
            "username": "石田 晃",
            "email": "htanaka@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "0R7RuYAuND",
            "name": null,
            "username": "中島 明美",
            "email": "kanou.tsubasa@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -282,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 56,
            "unique_id": "s2ymZ1l9WE",
            "name": null,
            "username": "山本 涼平",
            "email": "miyazawa.sayuri@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 5,
                "manager": {
                    "id": 7,
                    "unique_id": "6PzYUBzkvQ",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": -1642,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 60,
            "unique_id": "3UadWProq2",
            "name": null,
            "username": "aaaa",
            "email": "5KKOR@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 18:47:43.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:43.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "unique_id": "dbeShDIN5l",
            "name": null,
            "username": "若松 七夏",
            "email": "yoko86@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
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

<!-- START_8b9287b78cd75e232f4bfb433ff2beda -->
## sessions.can_add_groups  対象のセッションに追加できるグループ一覧を返す（全員がすでにセッションに含まれている場合のみ除く）

> Example request:

```bash
curl -X GET -G "http://localhost/api/sessions/{session}/groups/can_add" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/groups/can_add");

    let params = {
            "session": "oGnH0aEYzgquLjt8",
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
            "id": 2,
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "newGroupTPKbLs2U",
            "users": [
                {
                    "id": 11,
                    "unique_id": "D7YwsKvpHf",
                    "name": null,
                    "username": "伊藤 舞",
                    "email": "naoko73@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "fJxaYxDBRG",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "atakahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "4zBlCSaLzG",
                    "name": null,
                    "username": "石田 晃",
                    "email": "htanaka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:15.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:45.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 56,
            "manager": {
                "id": 7,
                "unique_id": "6PzYUBzkvQ",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 18:47:15.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 18:47:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "newGroupFABfU",
            "users": [
                {
                    "id": 56,
                    "unique_id": "s2ymZ1l9WE",
                    "name": null,
                    "username": "山本 涼平",
                    "email": "miyazawa.sayuri@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 18:47:15.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 18:47:46.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 18:47:46.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/sessions/{session}/groups/can_add`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    session |  required  | グループid

<!-- END_8b9287b78cd75e232f4bfb433ff2beda -->


