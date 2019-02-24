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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "qui",
            "plus_minus": -1949,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "hic",
            "plus_minus": 1656,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "est",
            "plus_minus": 944,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "facere",
            "plus_minus": 2842,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "ut",
            "plus_minus": 2123,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
    -d '{"name":"ATQfUvnahRGLgv3F","plus_minus":9}'

```

```javascript
const url = new URL("http://localhost/api/attributes");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "ATQfUvnahRGLgv3F",
    "plus_minus": 9
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
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "attributenameDZnPh",
        "plus_minus": null,
        "created_at": {
            "date": "2019-02-24 10:29:40.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:40.000000",
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
            "attribute": "8qsu6wYyiSK5vWIZ",
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
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "est",
        "plus_minus": 944,
        "created_at": {
            "date": "2019-02-24 10:29:07.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:07.000000",
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
    -d '{"name":"2mMu6iS9VUAYARus","plus_minus":5}'

```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "boOBNeheChMUnATn",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "2mMu6iS9VUAYARus",
    "plus_minus": 5
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
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "updateftYPX",
        "plus_minus": null,
        "created_at": {
            "date": "2019-02-24 10:29:07.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:40.000000",
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
            "attribute": "rPcKqIYfmssmIOtt",
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
    -d '{"email":"9evNFA6KP6ESj9qb","username":"mLuwwwjKaBm8EkS4","password":"mbyrXWg7eju9nH7E"}'

```

```javascript
const url = new URL("http://localhost/api/auth/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "9evNFA6KP6ESj9qb",
    "username": "mLuwwwjKaBm8EkS4",
    "password": "mbyrXWg7eju9nH7E"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVnaXN0ZXIiLCJpYXQiOjE1NTEwMDQxODAsImV4cCI6MTU1MTAwNzc4MCwibmJmIjoxNTUxMDA0MTgwLCJqdGkiOiJuM0kzSllMd2dkbW1JY1lRIiwic3ViIjo1MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.s8TDw6eyWkoRdjASWi7qdFnn4k4HS50iDPB5CBAH-iM",
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
    -d '{"email":"jH3i53lPV4OkM1t1","password":"1Ks35MjwZQWG42Kr"}'

```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "jH3i53lPV4OkM1t1",
    "password": "1Ks35MjwZQWG42Kr"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTEwMDQxODIsImV4cCI6MTU1MTAwNzc4MiwibmJmIjoxNTUxMDA0MTgyLCJqdGkiOiJSNVI3eVFsQll4R2F1SFJQIiwic3ViIjoyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.alLx0X4SBHMeK2pL4u4hoSmAXqGgtv4yirEI1jfxUzs",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVmcmVzaCIsImlhdCI6MTU1MTAwNDE4MCwiZXhwIjoxNTUxMDA3NzgwLCJuYmYiOjE1NTEwMDQxODAsImp0aSI6InBzWGZ0SmV2bWRhNTMzQ2giLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.M-txRttV85NPSx8hhOhI2VJAhoWsK8NYkgRjKK-8Qec",
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
            "date": "2019-02-24 10:29:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:33.000000",
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
    -d '{"email":"oiOkdFtGLyc8XMVt","password":"jvYaLCDXTDkZJ0L6"}'

```

```javascript
const url = new URL("http://localhost/api/admin/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "oiOkdFtGLyc8XMVt",
    "password": "jvYaLCDXTDkZJ0L6"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTEwMDQxODIsImV4cCI6MTU1MTAwNzc4MiwibmJmIjoxNTUxMDA0MTgyLCJqdGkiOiJSNVI3eVFsQll4R2F1SFJQIiwic3ViIjoyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.alLx0X4SBHMeK2pL4u4hoSmAXqGgtv4yirEI1jfxUzs",
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "uNBDZ74",
            "current_location_flag": 1,
            "longitude": null,
            "latitude": null,
            "timer": "01:00:00",
            "group": {
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quam",
                "users": [
                    {
                        "id": 9,
                        "unique_id": "AmqoESw7dU",
                        "name": null,
                        "username": "若松 里佳",
                        "email": "sato.nanami@example.org",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-02-24 10:29:06.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                            "date": "2019-02-24 10:29:06.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "deleted_at": null
                    },
                    {
                        "id": 23,
                        "unique_id": "2MLGmpSv2e",
                        "name": null,
                        "username": "斉藤 晃",
                        "email": "yaota@example.net",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-02-24 10:29:06.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                            "date": "2019-02-24 10:29:06.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "deleted_at": null
                    },
                    {
                        "id": 28,
                        "unique_id": "4Fd8EYvLLi",
                        "name": null,
                        "username": "杉山 涼平",
                        "email": "tsubasa73@example.org",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-02-24 10:29:07.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                            "date": "2019-02-24 10:29:07.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "deleted_at": null
                    },
                    {
                        "id": 48,
                        "unique_id": "bUtDElY69F",
                        "name": null,
                        "username": "テストユーザー２",
                        "email": "testuser48@example.com",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-02-24 10:29:07.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                            "date": "2019-02-24 10:29:33.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "deleted_at": null
                    }
                ],
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
    -d '{"name":"Dbne51RI20UkA00x","current_location_flag":false,"latitude":"MUqawxvWYfa7GVY8","longitude":"pmLerE6ilED7Hhj1","timer":13,"group_id":20}'

```

```javascript
const url = new URL("http://localhost/api/default_settings");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "Dbne51RI20UkA00x",
    "current_location_flag": false,
    "latitude": "MUqawxvWYfa7GVY8",
    "longitude": "pmLerE6ilED7Hhj1",
    "timer": 13,
    "group_id": 20
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
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "azIyTf",
        "current_location_flag": null,
        "longitude": null,
        "latitude": null,
        "timer": "01:00:00",
        "group": {
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "quam",
            "users": [
                {
                    "id": 9,
                    "unique_id": "AmqoESw7dU",
                    "name": null,
                    "username": "若松 里佳",
                    "email": "sato.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "2MLGmpSv2e",
                    "name": null,
                    "username": "斉藤 晃",
                    "email": "yaota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "4Fd8EYvLLi",
                    "name": null,
                    "username": "杉山 涼平",
                    "email": "tsubasa73@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "bUtDElY69F",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser48@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-02-24 10:29:40.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:40.000000",
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
            "default_setting": "inNFtg8wNQk7apHE",
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
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "uNBDZ74",
        "current_location_flag": 1,
        "longitude": null,
        "latitude": null,
        "timer": "01:00:00",
        "group": {
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "quam",
            "users": [
                {
                    "id": 9,
                    "unique_id": "AmqoESw7dU",
                    "name": null,
                    "username": "若松 里佳",
                    "email": "sato.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "2MLGmpSv2e",
                    "name": null,
                    "username": "斉藤 晃",
                    "email": "yaota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "4Fd8EYvLLi",
                    "name": null,
                    "username": "杉山 涼平",
                    "email": "tsubasa73@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "bUtDElY69F",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser48@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-02-24 10:29:07.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:07.000000",
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
    -d '{"name":"f5Rr0Fs7JZ7zyR5S","current_location_flag":false,"latitude":"WdW5BNx3LaqYCubR","longitude":"HUehMcnZtKuwDRbX","timer":12,"group_id":20}'

```

```javascript
const url = new URL("http://localhost/api/default_settings/{default_setting}");

    let params = {
            "default_setting": "kRPkPivI8stSuWOc",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "f5Rr0Fs7JZ7zyR5S",
    "current_location_flag": false,
    "latitude": "WdW5BNx3LaqYCubR",
    "longitude": "HUehMcnZtKuwDRbX",
    "timer": 12,
    "group_id": 20
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
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "newSettingsP02wxVw5",
        "current_location_flag": 1,
        "longitude": null,
        "latitude": null,
        "timer": "01:00:00",
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "veniam",
            "users": [
                {
                    "id": 15,
                    "unique_id": "e2DzH40Kid",
                    "name": null,
                    "username": "浜田 修平",
                    "email": "koizumi.kaori@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RkRbWEAIHi",
                    "name": null,
                    "username": "笹田 和也",
                    "email": "mai54@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "bUtDElY69F",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser48@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-02-24 10:29:07.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:40.000000",
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
            "default_setting": "gkQeDHJ8tWuSZaJ5",
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
            "id": 9,
            "unique_id": "AmqoESw7dU",
            "name": null,
            "username": "若松 里佳",
            "email": "sato.nanami@example.org",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ut",
                "plus_minus": 2123,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 12,
            "unique_id": "12TXKLCsgQ",
            "name": null,
            "username": "石田 聡太郎",
            "email": "ito.yui@example.com",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "est",
                "plus_minus": 944,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "V3tiSHkTnb",
            "name": null,
            "username": "中津川 幹",
            "email": "ishida.jun@example.org",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "hic",
                "plus_minus": 1656,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 15,
            "unique_id": "e2DzH40Kid",
            "name": null,
            "username": "浜田 修平",
            "email": "koizumi.kaori@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "updateftYPX",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 17,
            "unique_id": "c7S5fXkA0t",
            "name": null,
            "username": "佐藤 舞",
            "email": "sasada.yuki@example.org",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "hic",
                "plus_minus": 1656,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "unique_id": "2MLGmpSv2e",
            "name": null,
            "username": "斉藤 晃",
            "email": "yaota@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "updateftYPX",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 27,
            "unique_id": "6GnVyc6dxB",
            "name": null,
            "username": "桐山 結衣",
            "email": "rei.kudo@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "updateftYPX",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "4Fd8EYvLLi",
            "name": null,
            "username": "杉山 涼平",
            "email": "tsubasa73@example.org",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "hic",
                "plus_minus": 1656,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "RkRbWEAIHi",
            "name": null,
            "username": "笹田 和也",
            "email": "mai54@example.com",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "est",
                "plus_minus": 944,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "unique_id": "Y2jyGNzT4z",
            "name": null,
            "username": "野村 明美",
            "email": "kobayashi.manabu@example.org",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ut",
                "plus_minus": 2123,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 42,
            "unique_id": "vZZmsqsozb",
            "name": null,
            "username": "小泉 陽一",
            "email": "rekoda@example.com",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "hic",
                "plus_minus": 1656,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 44,
            "unique_id": "jmc4zYplN0",
            "name": null,
            "username": "中村 直樹",
            "email": "takahashi.shuhei@example.org",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ut",
                "plus_minus": 2123,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "bUtDElY69F",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser48@example.com",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "est",
                "plus_minus": 944,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
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
## friends.store ◆友達申請する

> Example request:

```bash
curl -X POST "http://localhost/api/friends" \
    -H "Content-Type: application/json" \
    -d '{"email":"UnyabkNhzrMXQtZb"}'

```

```javascript
const url = new URL("http://localhost/api/friends");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "UnyabkNhzrMXQtZb"
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
        "date": "2019-02-24 10:29:06.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "updated_at": {
        "date": "2019-02-24 10:29:33.000000",
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
            "id": 19,
            "unique_id": "YCiRvOyjum",
            "name": null,
            "username": "青田 太一",
            "email": "kiriyama.jun@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 91,
                "manager": {
                    "id": 19,
                    "unique_id": "YCiRvOyjum",
                    "name": null,
                    "username": "青田 太一",
                    "email": "kiriyama.jun@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "itaque",
                "plus_minus": 2905,
                "created_at": {
                    "date": "2019-02-24 10:29:16.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:16.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 30,
            "unique_id": "8BqPuKyoPo",
            "name": null,
            "username": "桐山 花子",
            "email": "nakatsugawa.asuka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 148,
                "manager": {
                    "id": 30,
                    "unique_id": "8BqPuKyoPo",
                    "name": null,
                    "username": "桐山 花子",
                    "email": "nakatsugawa.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "dolorum",
                "plus_minus": -1662,
                "created_at": {
                    "date": "2019-02-24 10:29:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 32,
            "unique_id": "rlecBBHHtW",
            "name": null,
            "username": "村山 千代",
            "email": "yosuke26@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 156,
                "manager": {
                    "id": 32,
                    "unique_id": "rlecBBHHtW",
                    "name": null,
                    "username": "村山 千代",
                    "email": "yosuke26@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "minus",
                "plus_minus": 1115,
                "created_at": {
                    "date": "2019-02-24 10:29:23.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:23.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
            "id": 20,
            "unique_id": "xi8O9bSrjB",
            "name": null,
            "username": "笹田 里佳",
            "email": "mitsuru.yamaguchi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ut",
                "plus_minus": 2123,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 30,
            "unique_id": "8BqPuKyoPo",
            "name": null,
            "username": "桐山 花子",
            "email": "nakatsugawa.asuka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ut",
                "plus_minus": 2123,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 39,
            "unique_id": "ZGox2tV9Tg",
            "name": null,
            "username": "西之園 翔太",
            "email": "dsaito@example.com",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "hic",
                "plus_minus": 1656,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
            "id": 5,
            "unique_id": "gpqmpbno3v",
            "name": null,
            "username": "西之園 翼",
            "email": "hkijima@example.org",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ut",
                "plus_minus": 2123,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 6,
            "unique_id": "45QTCAoWlx",
            "name": null,
            "username": "吉本 太郎",
            "email": "naoto11@example.net",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "hic",
                "plus_minus": 1656,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 10,
            "unique_id": "ZZKTBSaMhA",
            "name": null,
            "username": "杉山 加奈",
            "email": "mikako.miyake@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 19,
            "unique_id": "YCiRvOyjum",
            "name": null,
            "username": "青田 太一",
            "email": "kiriyama.jun@example.com",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "hic",
                "plus_minus": 1656,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 22,
            "unique_id": "zGVcHiNrvf",
            "name": null,
            "username": "中島 真綾",
            "email": "yamamoto.yoko@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 40,
            "unique_id": "huqBPHr1Gv",
            "name": null,
            "username": "松本 修平",
            "email": "youichi95@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "updateftYPX",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "CpEH30pqWF",
            "name": null,
            "username": "田辺 幹",
            "email": "yuta36@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "unique_id": "OYmvEau2Ui",
            "name": null,
            "username": "佐藤 直人",
            "email": "sasada.ryohei@example.net",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "est",
                "plus_minus": 944,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "unique_id": "i1vzpFelGx",
            "name": null,
            "username": "松本 明美",
            "email": "fsugiyama@example.net",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ut",
                "plus_minus": 2123,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 53,
            "unique_id": "q0z478VHmJ",
            "name": null,
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-02-24 10:29:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:40.000000",
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
            "id": 4,
            "unique_id": "OmUq2fXNmK",
            "name": null,
            "username": "佐々木 花子",
            "email": "yamagishi.akira@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 18,
                "manager": {
                    "id": 4,
                    "unique_id": "OmUq2fXNmK",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "yamagishi.akira@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "praesentium",
                "plus_minus": -2274,
                "created_at": {
                    "date": "2019-02-24 10:29:08.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:08.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 15,
            "unique_id": "e2DzH40Kid",
            "name": null,
            "username": "浜田 修平",
            "email": "koizumi.kaori@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 74,
                "manager": {
                    "id": 15,
                    "unique_id": "e2DzH40Kid",
                    "name": null,
                    "username": "浜田 修平",
                    "email": "koizumi.kaori@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "repellat",
                "plus_minus": -2584,
                "created_at": {
                    "date": "2019-02-24 10:29:14.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:14.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 20,
            "unique_id": "xi8O9bSrjB",
            "name": null,
            "username": "笹田 里佳",
            "email": "mitsuru.yamaguchi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 100,
                "manager": {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "qui",
                "plus_minus": -1374,
                "created_at": {
                    "date": "2019-02-24 10:29:17.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:17.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "unique_id": "2MLGmpSv2e",
            "name": null,
            "username": "斉藤 晃",
            "email": "yaota@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 111,
                "manager": {
                    "id": 23,
                    "unique_id": "2MLGmpSv2e",
                    "name": null,
                    "username": "斉藤 晃",
                    "email": "yaota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "deleniti",
                "plus_minus": 450,
                "created_at": {
                    "date": "2019-02-24 10:29:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 25,
            "unique_id": "mSfUyZMxRn",
            "name": null,
            "username": "山口 舞",
            "email": "taichi.tanabe@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 122,
                "manager": {
                    "id": 25,
                    "unique_id": "mSfUyZMxRn",
                    "name": null,
                    "username": "山口 舞",
                    "email": "taichi.tanabe@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "maiores",
                "plus_minus": -800,
                "created_at": {
                    "date": "2019-02-24 10:29:19.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:19.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 27,
            "unique_id": "6GnVyc6dxB",
            "name": null,
            "username": "桐山 結衣",
            "email": "rei.kudo@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 132,
                "manager": {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nulla",
                "plus_minus": -2601,
                "created_at": {
                    "date": "2019-02-24 10:29:20.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:20.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "4Fd8EYvLLi",
            "name": null,
            "username": "杉山 涼平",
            "email": "tsubasa73@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 136,
                "manager": {
                    "id": 28,
                    "unique_id": "4Fd8EYvLLi",
                    "name": null,
                    "username": "杉山 涼平",
                    "email": "tsubasa73@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "itaque",
                "plus_minus": 1063,
                "created_at": {
                    "date": "2019-02-24 10:29:21.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:21.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "unique_id": "BJge1E8ApF",
            "name": null,
            "username": "藤本 翼",
            "email": "kyosuke00@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 164,
                "manager": {
                    "id": 33,
                    "unique_id": "BJge1E8ApF",
                    "name": null,
                    "username": "藤本 翼",
                    "email": "kyosuke00@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "voluptatum",
                "plus_minus": -125,
                "created_at": {
                    "date": "2019-02-24 10:29:24.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:24.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "uDPxDZEeoU",
            "name": null,
            "username": "田中 里佳",
            "email": "taro47@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 186,
                "manager": {
                    "id": 38,
                    "unique_id": "uDPxDZEeoU",
                    "name": null,
                    "username": "田中 里佳",
                    "email": "taro47@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ipsa",
                "plus_minus": 679,
                "created_at": {
                    "date": "2019-02-24 10:29:26.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:26.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 42,
            "unique_id": "vZZmsqsozb",
            "name": null,
            "username": "小泉 陽一",
            "email": "rekoda@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 206,
                "manager": {
                    "id": 42,
                    "unique_id": "vZZmsqsozb",
                    "name": null,
                    "username": "小泉 陽一",
                    "email": "rekoda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "non",
                "plus_minus": 873,
                "created_at": {
                    "date": "2019-02-24 10:29:29.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:29.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "unique_id": "OYmvEau2Ui",
            "name": null,
            "username": "佐藤 直人",
            "email": "sasada.ryohei@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 213,
                "manager": {
                    "id": 43,
                    "unique_id": "OYmvEau2Ui",
                    "name": null,
                    "username": "佐藤 直人",
                    "email": "sasada.ryohei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "et",
                "plus_minus": -1382,
                "created_at": {
                    "date": "2019-02-24 10:29:29.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:29.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 44,
            "unique_id": "jmc4zYplN0",
            "name": null,
            "username": "中村 直樹",
            "email": "takahashi.shuhei@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 219,
                "manager": {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "cupiditate",
                "plus_minus": 334,
                "created_at": {
                    "date": "2019-02-24 10:29:30.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:30.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "unique_id": "i1vzpFelGx",
            "name": null,
            "username": "松本 明美",
            "email": "fsugiyama@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 225,
                "manager": {
                    "id": 45,
                    "unique_id": "i1vzpFelGx",
                    "name": null,
                    "username": "松本 明美",
                    "email": "fsugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "dolor",
                "plus_minus": -130,
                "created_at": {
                    "date": "2019-02-24 10:29:30.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:30.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "bUtDElY69F",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser48@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 237,
                "manager": {
                    "id": 48,
                    "unique_id": "bUtDElY69F",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser48@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "officiis",
                "plus_minus": 1590,
                "created_at": {
                    "date": "2019-02-24 10:29:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
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
            "id": 9,
            "unique_id": "AmqoESw7dU",
            "name": null,
            "username": "若松 里佳",
            "email": "sato.nanami@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 41,
                "manager": {
                    "id": 9,
                    "unique_id": "AmqoESw7dU",
                    "name": null,
                    "username": "若松 里佳",
                    "email": "sato.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "voluptatem",
                "plus_minus": -1464,
                "created_at": {
                    "date": "2019-02-24 10:29:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 10,
            "unique_id": "ZZKTBSaMhA",
            "name": null,
            "username": "杉山 加奈",
            "email": "mikako.miyake@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 49,
                "manager": {
                    "id": 10,
                    "unique_id": "ZZKTBSaMhA",
                    "name": null,
                    "username": "杉山 加奈",
                    "email": "mikako.miyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "non",
                "plus_minus": -1233,
                "created_at": {
                    "date": "2019-02-24 10:29:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "unique_id": "Y2jyGNzT4z",
            "name": null,
            "username": "野村 明美",
            "email": "kobayashi.manabu@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 167,
                "manager": {
                    "id": 34,
                    "unique_id": "Y2jyGNzT4z",
                    "name": null,
                    "username": "野村 明美",
                    "email": "kobayashi.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "dignissimos",
                "plus_minus": -1006,
                "created_at": {
                    "date": "2019-02-24 10:29:24.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:24.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "AQPNjqpAJ4",
            "name": null,
            "username": "吉本 治",
            "email": "kumiko69@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 233,
                "manager": {
                    "id": 47,
                    "unique_id": "AQPNjqpAJ4",
                    "name": null,
                    "username": "吉本 治",
                    "email": "kumiko69@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "velit",
                "plus_minus": -2012,
                "created_at": {
                    "date": "2019-02-24 10:29:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:31.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 49,
            "unique_id": "aZbZUAq1eZ",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser49@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 243,
                "manager": {
                    "id": 49,
                    "unique_id": "aZbZUAq1eZ",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser49@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "tempore",
                "plus_minus": 479,
                "created_at": {
                    "date": "2019-02-24 10:29:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
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
    -d '{"user_id":12}'

```

```javascript
const url = new URL("http://localhost/api/friends/permit");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 12
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
    -d '{"user_id":10}'

```

```javascript
const url = new URL("http://localhost/api/friends/reject");

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
    -d '{"attribute_id":10}'

```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/attribute");

    let params = {
            "friend": "V1AKlIU0C9eJP5Oq",
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
    -d '{"attribute_id":17}'

```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/attribute");

    let params = {
            "friend": "aayA809PFsvD8lfZ",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "attribute_id": 17
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
            "friend": "MdB9FTgknb0ZgThN",
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
            "friend": "jdql4DR3koydypuz",
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
            "friend": "1IwVxBFEh5ea1afo",
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
            "friend": "EEtHMtEsVxRCt8KF",
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
        "id": 27,
        "unique_id": "6GnVyc6dxB",
        "name": null,
        "username": "桐山 結衣",
        "email": "rei.kudo@example.net",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "permitted": 1,
        "attribute": {
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "updateftYPX",
            "plus_minus": null,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-02-24 10:29:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:06.000000",
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
            "friend": "J8VBkgnEP3hsRIhf",
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
    -d '{"device_token":"RwbjI5e6gBkBNL0V"}'

```

```javascript
const url = new URL("http://localhost/api/device_token");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "device_token": "RwbjI5e6gBkBNL0V"
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
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "device_token": "newTokenFymLoNlZi0j1MZnwm8TM",
        "created_at": {
            "date": "2019-02-24 10:29:40.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:40.000000",
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
            "group": "IeYyvMOOECMnVvcD",
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
            "id": 27,
            "unique_id": "6GnVyc6dxB",
            "name": null,
            "username": "桐山 結衣",
            "email": "rei.kudo@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "RkRbWEAIHi",
            "name": null,
            "username": "笹田 和也",
            "email": "mai54@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 44,
            "unique_id": "jmc4zYplN0",
            "name": null,
            "username": "中村 直樹",
            "email": "takahashi.shuhei@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "bUtDElY69F",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser48@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
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
    -d '{"user_id":3}'

```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users");

    let params = {
            "group": "PrGrNVOx4u9hl30e",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 3
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
            "group": "8O3jclp93ON2JPf1",
            "user": "oZUbaqP3HvYtw2p4",
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
        "id": 15,
        "unique_id": "e2DzH40Kid",
        "name": null,
        "username": "浜田 修平",
        "email": "koizumi.kaori@example.org",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-02-24 10:29:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:06.000000",
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
            "group": "OkakE8DoXxLNKipk",
            "user": "Ofa4SZGiOdctQg4P",
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "veniam",
            "users": [
                {
                    "id": 15,
                    "unique_id": "e2DzH40Kid",
                    "name": null,
                    "username": "浜田 修平",
                    "email": "koizumi.kaori@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RkRbWEAIHi",
                    "name": null,
                    "username": "笹田 和也",
                    "email": "mai54@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "bUtDElY69F",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser48@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "quam",
            "users": [
                {
                    "id": 9,
                    "unique_id": "AmqoESw7dU",
                    "name": null,
                    "username": "若松 里佳",
                    "email": "sato.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "2MLGmpSv2e",
                    "name": null,
                    "username": "斉藤 晃",
                    "email": "yaota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "bUtDElY69F",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser48@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "necessitatibus",
            "users": [
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RkRbWEAIHi",
                    "name": null,
                    "username": "笹田 和也",
                    "email": "mai54@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "bUtDElY69F",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser48@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "voluptatem",
            "users": [
                {
                    "id": 23,
                    "unique_id": "2MLGmpSv2e",
                    "name": null,
                    "username": "斉藤 晃",
                    "email": "yaota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RkRbWEAIHi",
                    "name": null,
                    "username": "笹田 和也",
                    "email": "mai54@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "Y2jyGNzT4z",
                    "name": null,
                    "username": "野村 明美",
                    "email": "kobayashi.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "perspiciatis",
            "users": [
                {
                    "id": 12,
                    "unique_id": "12TXKLCsgQ",
                    "name": null,
                    "username": "石田 聡太郎",
                    "email": "ito.yui@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 15,
                    "unique_id": "e2DzH40Kid",
                    "name": null,
                    "username": "浜田 修平",
                    "email": "koizumi.kaori@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
    -d '{"name":"FkQIg8UXH5AsvbOQ"}'

```

```javascript
const url = new URL("http://localhost/api/groups");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "FkQIg8UXH5AsvbOQ"
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
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "quam",
        "users": [],
        "created_at": {
            "date": "2019-02-24 10:29:41.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:41.000000",
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
            "group": "aL0xmklBiJXmDKkt",
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
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "quam",
        "users": [],
        "created_at": {
            "date": "2019-02-24 10:29:41.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:41.000000",
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
    -d '{"name":"9xEoLwroZWQ2wUam"}'

```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "99FmR4JFRYmeimNU",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "9xEoLwroZWQ2wUam"
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
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "newGroup5jP8YDxq",
        "users": [
            {
                "id": 23,
                "unique_id": "2MLGmpSv2e",
                "name": null,
                "username": "斉藤 晃",
                "email": "yaota@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 27,
                "unique_id": "6GnVyc6dxB",
                "name": null,
                "username": "桐山 結衣",
                "email": "rei.kudo@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 31,
                "unique_id": "RkRbWEAIHi",
                "name": null,
                "username": "笹田 和也",
                "email": "mai54@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 34,
                "unique_id": "Y2jyGNzT4z",
                "name": null,
                "username": "野村 明美",
                "email": "kobayashi.manabu@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-24 10:29:07.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:41.000000",
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
            "group": "IfBaEYu8B9AyaEle",
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
            "group": "M3z4o8u88OkvDCQ5",
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
            "unique_id": "AmqoESw7dU",
            "name": null,
            "username": "若松 里佳",
            "email": "sato.nanami@example.org",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ut",
                "plus_minus": 2123,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 12,
            "unique_id": "12TXKLCsgQ",
            "name": null,
            "username": "石田 聡太郎",
            "email": "ito.yui@example.com",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "est",
                "plus_minus": 944,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "V3tiSHkTnb",
            "name": null,
            "username": "中津川 幹",
            "email": "ishida.jun@example.org",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "hic",
                "plus_minus": 1656,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 15,
            "unique_id": "e2DzH40Kid",
            "name": null,
            "username": "浜田 修平",
            "email": "koizumi.kaori@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "updateftYPX",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 17,
            "unique_id": "c7S5fXkA0t",
            "name": null,
            "username": "佐藤 舞",
            "email": "sasada.yuki@example.org",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "hic",
                "plus_minus": 1656,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "unique_id": "2MLGmpSv2e",
            "name": null,
            "username": "斉藤 晃",
            "email": "yaota@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "updateftYPX",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 27,
            "unique_id": "6GnVyc6dxB",
            "name": null,
            "username": "桐山 結衣",
            "email": "rei.kudo@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "updateftYPX",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "RkRbWEAIHi",
            "name": null,
            "username": "笹田 和也",
            "email": "mai54@example.com",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "est",
                "plus_minus": 944,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "unique_id": "Y2jyGNzT4z",
            "name": null,
            "username": "野村 明美",
            "email": "kobayashi.manabu@example.org",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ut",
                "plus_minus": 2123,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 44,
            "unique_id": "jmc4zYplN0",
            "name": null,
            "username": "中村 直樹",
            "email": "takahashi.shuhei@example.org",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ut",
                "plus_minus": 2123,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "bUtDElY69F",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser48@example.com",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "est",
                "plus_minus": 944,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "unique_id": "n6UcHpTTpE",
            "name": null,
            "username": "aaaa",
            "email": "j81ug@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-24 10:29:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 32,
            "unique_id": "rlecBBHHtW",
            "name": null,
            "username": "村山 千代",
            "email": "yosuke26@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
            "id": 13,
            "name": "aut",
            "shop_id": "J001177654",
            "budget": 28876,
            "actual": 25326,
            "start_time": "2019-03-01 10:29:08",
            "end_time": "2019-03-06 10:29:08",
            "manager": {
                "id": 4,
                "unique_id": "OmUq2fXNmK",
                "name": null,
                "username": "佐々木 花子",
                "email": "yamagishi.akira@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "CbO9rDMCMe",
                    "name": null,
                    "username": "渚 結衣",
                    "email": "akemi72@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "YCiRvOyjum",
                    "name": null,
                    "username": "青田 太一",
                    "email": "kiriyama.jun@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "7ujAdOpVQn",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "widaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "rlecBBHHtW",
                    "name": null,
                    "username": "村山 千代",
                    "email": "yosuke26@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "OYmvEau2Ui",
                    "name": null,
                    "username": "佐藤 直人",
                    "email": "sasada.ryohei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ybcRV8GDtk",
                    "name": null,
                    "username": "山本 拓真",
                    "email": "kumiko29@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "name": "quidem",
            "shop_id": "J000742418",
            "budget": 25856,
            "actual": 45528,
            "start_time": "2019-02-14 10:29:08",
            "end_time": "2019-02-19 10:29:08",
            "manager": {
                "id": 4,
                "unique_id": "OmUq2fXNmK",
                "name": null,
                "username": "佐々木 花子",
                "email": "yamagishi.akira@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 5,
                    "unique_id": "gpqmpbno3v",
                    "name": null,
                    "username": "西之園 翼",
                    "email": "hkijima@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ZZKTBSaMhA",
                    "name": null,
                    "username": "杉山 加奈",
                    "email": "mikako.miyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "rlecBBHHtW",
                    "name": null,
                    "username": "村山 千代",
                    "email": "yosuke26@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "NPbDw6wa3i",
                    "name": null,
                    "username": "坂本 裕美子",
                    "email": "kaori11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "OYmvEau2Ui",
                    "name": null,
                    "username": "佐藤 直人",
                    "email": "sasada.ryohei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ybcRV8GDtk",
                    "name": null,
                    "username": "山本 拓真",
                    "email": "kumiko29@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 58,
            "name": "eaque",
            "shop_id": "J000753015",
            "budget": 5909,
            "actual": 9630,
            "start_time": "2019-02-19 10:29:14",
            "end_time": null,
            "manager": {
                "id": 15,
                "unique_id": "e2DzH40Kid",
                "name": null,
                "username": "浜田 修平",
                "email": "koizumi.kaori@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "V3tiSHkTnb",
                    "name": null,
                    "username": "中津川 幹",
                    "email": "ishida.jun@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "c7S5fXkA0t",
                    "name": null,
                    "username": "佐藤 舞",
                    "email": "sasada.yuki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "BJge1E8ApF",
                    "name": null,
                    "username": "藤本 翼",
                    "email": "kyosuke00@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "CpEH30pqWF",
                    "name": null,
                    "username": "田辺 幹",
                    "email": "yuta36@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 50,
                    "unique_id": "wd55jjhkKe",
                    "name": null,
                    "username": "テストユーザー３",
                    "email": "testuser50@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:14.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:14.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 78,
            "name": "beatae",
            "shop_id": "J000109445",
            "budget": 21387,
            "actual": 32504,
            "start_time": "2019-02-14 10:29:17",
            "end_time": "2019-02-19 10:29:17",
            "manager": {
                "id": 20,
                "unique_id": "xi8O9bSrjB",
                "name": null,
                "username": "笹田 里佳",
                "email": "mitsuru.yamaguchi@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 4,
                    "unique_id": "OmUq2fXNmK",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "yamagishi.akira@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 9,
                    "unique_id": "AmqoESw7dU",
                    "name": null,
                    "username": "若松 里佳",
                    "email": "sato.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "c7S5fXkA0t",
                    "name": null,
                    "username": "佐藤 舞",
                    "email": "sasada.yuki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "2MLGmpSv2e",
                    "name": null,
                    "username": "斉藤 晃",
                    "email": "yaota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "7ujAdOpVQn",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "widaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RkRbWEAIHi",
                    "name": null,
                    "username": "笹田 和也",
                    "email": "mai54@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "vZZmsqsozb",
                    "name": null,
                    "username": "小泉 陽一",
                    "email": "rekoda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:17.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:17.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 89,
            "name": "voluptatibus",
            "shop_id": "J001006387",
            "budget": 10541,
            "actual": 33803,
            "start_time": "2019-02-14 10:29:19",
            "end_time": "2019-02-19 10:29:19",
            "manager": {
                "id": 23,
                "unique_id": "2MLGmpSv2e",
                "name": null,
                "username": "斉藤 晃",
                "email": "yaota@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 4,
                    "unique_id": "OmUq2fXNmK",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "yamagishi.akira@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "PokKhgQOsP",
                    "name": null,
                    "username": "石田 英樹",
                    "email": "murayama.naoki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "CbO9rDMCMe",
                    "name": null,
                    "username": "渚 結衣",
                    "email": "akemi72@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "NPbDw6wa3i",
                    "name": null,
                    "username": "坂本 裕美子",
                    "email": "kaori11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "rpIcYzqe3R",
                    "name": null,
                    "username": "若松 あすか",
                    "email": "yoko21@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 97,
            "name": "odit",
            "shop_id": "J000109445",
            "budget": 7447,
            "actual": 15166,
            "start_time": "2019-02-19 10:29:20",
            "end_time": null,
            "manager": {
                "id": 25,
                "unique_id": "mSfUyZMxRn",
                "name": null,
                "username": "山口 舞",
                "email": "taichi.tanabe@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 9,
                    "unique_id": "AmqoESw7dU",
                    "name": null,
                    "username": "若松 里佳",
                    "email": "sato.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "12TXKLCsgQ",
                    "name": null,
                    "username": "石田 聡太郎",
                    "email": "ito.yui@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "sFjROppqw2",
                    "name": null,
                    "username": "青田 浩",
                    "email": "miki.idaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "knW7QRPuf5",
                    "name": null,
                    "username": "中島 美加子",
                    "email": "youichi.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ybcRV8GDtk",
                    "name": null,
                    "username": "山本 拓真",
                    "email": "kumiko29@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 98,
            "name": "dicta",
            "shop_id": "J001006387",
            "budget": 22263,
            "actual": 15099,
            "start_time": "2019-03-01 10:29:20",
            "end_time": "2019-03-06 10:29:20",
            "manager": {
                "id": 25,
                "unique_id": "mSfUyZMxRn",
                "name": null,
                "username": "山口 舞",
                "email": "taichi.tanabe@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "TKingM2NvD",
                    "name": null,
                    "username": "若松 明美",
                    "email": "bsuzuki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "12TXKLCsgQ",
                    "name": null,
                    "username": "石田 聡太郎",
                    "email": "ito.yui@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "sFjROppqw2",
                    "name": null,
                    "username": "青田 浩",
                    "email": "miki.idaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "knW7QRPuf5",
                    "name": null,
                    "username": "中島 美加子",
                    "email": "youichi.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "rlecBBHHtW",
                    "name": null,
                    "username": "村山 千代",
                    "email": "yosuke26@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 100,
            "name": "nam",
            "shop_id": "J000766202",
            "budget": 22172,
            "actual": 2059,
            "start_time": "2019-02-19 10:29:20",
            "end_time": null,
            "manager": {
                "id": 25,
                "unique_id": "mSfUyZMxRn",
                "name": null,
                "username": "山口 舞",
                "email": "taichi.tanabe@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "TKingM2NvD",
                    "name": null,
                    "username": "若松 明美",
                    "email": "bsuzuki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 11,
                    "unique_id": "ysuGS2JC3I",
                    "name": null,
                    "username": "三宅 裕樹",
                    "email": "kijima.hiroshi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "12TXKLCsgQ",
                    "name": null,
                    "username": "石田 聡太郎",
                    "email": "ito.yui@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "knW7QRPuf5",
                    "name": null,
                    "username": "中島 美加子",
                    "email": "youichi.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ybcRV8GDtk",
                    "name": null,
                    "username": "山本 拓真",
                    "email": "kumiko29@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 105,
            "name": "labore",
            "shop_id": "J000742418",
            "budget": 3036,
            "actual": 12523,
            "start_time": "2019-02-19 10:29:21",
            "end_time": "2019-03-06 10:29:21",
            "manager": {
                "id": 27,
                "unique_id": "6GnVyc6dxB",
                "name": null,
                "username": "桐山 結衣",
                "email": "rei.kudo@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "6is4ZAh4rh",
                    "name": null,
                    "username": "木村 修平",
                    "email": "yui92@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "knW7QRPuf5",
                    "name": null,
                    "username": "中島 美加子",
                    "email": "youichi.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "7ujAdOpVQn",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "widaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "KilAcj9VnG",
                    "name": null,
                    "username": "野村 淳",
                    "email": "taro.yamaguchi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "NPbDw6wa3i",
                    "name": null,
                    "username": "坂本 裕美子",
                    "email": "kaori11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 39,
                    "unique_id": "ZGox2tV9Tg",
                    "name": null,
                    "username": "西之園 翔太",
                    "email": "dsaito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 106,
            "name": "qui",
            "shop_id": "J000109445",
            "budget": 16910,
            "actual": 12131,
            "start_time": "2019-02-19 10:29:21",
            "end_time": null,
            "manager": {
                "id": 27,
                "unique_id": "6GnVyc6dxB",
                "name": null,
                "username": "桐山 結衣",
                "email": "rei.kudo@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "CbO9rDMCMe",
                    "name": null,
                    "username": "渚 結衣",
                    "email": "akemi72@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "8ohmdIFMhP",
                    "name": null,
                    "username": "木村 直子",
                    "email": "naoko33@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "4Fd8EYvLLi",
                    "name": null,
                    "username": "杉山 涼平",
                    "email": "tsubasa73@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "NPbDw6wa3i",
                    "name": null,
                    "username": "坂本 裕美子",
                    "email": "kaori11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "uDPxDZEeoU",
                    "name": null,
                    "username": "田中 里佳",
                    "email": "taro47@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "vZZmsqsozb",
                    "name": null,
                    "username": "小泉 陽一",
                    "email": "rekoda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 108,
            "name": "ut",
            "shop_id": "J000742418",
            "budget": 16187,
            "actual": 4875,
            "start_time": "2019-02-19 10:29:21",
            "end_time": "2019-03-06 10:29:21",
            "manager": {
                "id": 27,
                "unique_id": "6GnVyc6dxB",
                "name": null,
                "username": "桐山 結衣",
                "email": "rei.kudo@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "CbO9rDMCMe",
                    "name": null,
                    "username": "渚 結衣",
                    "email": "akemi72@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "zGVcHiNrvf",
                    "name": null,
                    "username": "中島 真綾",
                    "email": "yamamoto.yoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "7ujAdOpVQn",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "widaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "NPbDw6wa3i",
                    "name": null,
                    "username": "坂本 裕美子",
                    "email": "kaori11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "uDPxDZEeoU",
                    "name": null,
                    "username": "田中 里佳",
                    "email": "taro47@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 110,
            "name": "sequi",
            "shop_id": "J000109445",
            "budget": 22289,
            "actual": 4987,
            "start_time": "2019-02-19 10:29:21",
            "end_time": "2019-03-06 10:29:21",
            "manager": {
                "id": 28,
                "unique_id": "4Fd8EYvLLi",
                "name": null,
                "username": "杉山 涼平",
                "email": "tsubasa73@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 5,
                    "unique_id": "gpqmpbno3v",
                    "name": null,
                    "username": "西之園 翼",
                    "email": "hkijima@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "2MLGmpSv2e",
                    "name": null,
                    "username": "斉藤 晃",
                    "email": "yaota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "mSfUyZMxRn",
                    "name": null,
                    "username": "山口 舞",
                    "email": "taichi.tanabe@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "vZZmsqsozb",
                    "name": null,
                    "username": "小泉 陽一",
                    "email": "rekoda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "AQPNjqpAJ4",
                    "name": null,
                    "username": "吉本 治",
                    "email": "kumiko69@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 131,
            "name": "natus",
            "shop_id": "J000109445",
            "budget": 13758,
            "actual": 23599,
            "start_time": "2019-02-19 10:29:24",
            "end_time": null,
            "manager": {
                "id": 33,
                "unique_id": "BJge1E8ApF",
                "name": null,
                "username": "藤本 翼",
                "email": "kyosuke00@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "TKingM2NvD",
                    "name": null,
                    "username": "若松 明美",
                    "email": "bsuzuki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 15,
                    "unique_id": "e2DzH40Kid",
                    "name": null,
                    "username": "浜田 修平",
                    "email": "koizumi.kaori@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "2MLGmpSv2e",
                    "name": null,
                    "username": "斉藤 晃",
                    "email": "yaota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RkRbWEAIHi",
                    "name": null,
                    "username": "笹田 和也",
                    "email": "mai54@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "NPbDw6wa3i",
                    "name": null,
                    "username": "坂本 裕美子",
                    "email": "kaori11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "uDPxDZEeoU",
                    "name": null,
                    "username": "田中 里佳",
                    "email": "taro47@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "i1vzpFelGx",
                    "name": null,
                    "username": "松本 明美",
                    "email": "fsugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "AQPNjqpAJ4",
                    "name": null,
                    "username": "吉本 治",
                    "email": "kumiko69@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:24.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:24.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 150,
            "name": "pariatur",
            "shop_id": "J001182216",
            "budget": 16144,
            "actual": 16966,
            "start_time": "2019-02-14 10:29:27",
            "end_time": "2019-02-19 10:29:27",
            "manager": {
                "id": 38,
                "unique_id": "uDPxDZEeoU",
                "name": null,
                "username": "田中 里佳",
                "email": "taro47@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ZZKTBSaMhA",
                    "name": null,
                    "username": "杉山 加奈",
                    "email": "mikako.miyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "V3tiSHkTnb",
                    "name": null,
                    "username": "中津川 幹",
                    "email": "ishida.jun@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "BJge1E8ApF",
                    "name": null,
                    "username": "藤本 翼",
                    "email": "kyosuke00@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "vZZmsqsozb",
                    "name": null,
                    "username": "小泉 陽一",
                    "email": "rekoda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "OYmvEau2Ui",
                    "name": null,
                    "username": "佐藤 直人",
                    "email": "sasada.ryohei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:27.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:27.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 151,
            "name": "quia",
            "shop_id": "J000753015",
            "budget": 11760,
            "actual": 27744,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 38,
                "unique_id": "uDPxDZEeoU",
                "name": null,
                "username": "田中 里佳",
                "email": "taro47@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 5,
                    "unique_id": "gpqmpbno3v",
                    "name": null,
                    "username": "西之園 翼",
                    "email": "hkijima@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "KilAcj9VnG",
                    "name": null,
                    "username": "野村 淳",
                    "email": "taro.yamaguchi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "BJge1E8ApF",
                    "name": null,
                    "username": "藤本 翼",
                    "email": "kyosuke00@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "OYmvEau2Ui",
                    "name": null,
                    "username": "佐藤 直人",
                    "email": "sasada.ryohei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "i1vzpFelGx",
                    "name": null,
                    "username": "松本 明美",
                    "email": "fsugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:27.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:27.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 152,
            "name": "laborum",
            "shop_id": "J001006387",
            "budget": 29060,
            "actual": 22299,
            "start_time": "2019-02-19 10:29:27",
            "end_time": null,
            "manager": {
                "id": 38,
                "unique_id": "uDPxDZEeoU",
                "name": null,
                "username": "田中 里佳",
                "email": "taro47@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 5,
                    "unique_id": "gpqmpbno3v",
                    "name": null,
                    "username": "西之園 翼",
                    "email": "hkijima@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "zGVcHiNrvf",
                    "name": null,
                    "username": "中島 真綾",
                    "email": "yamamoto.yoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "KilAcj9VnG",
                    "name": null,
                    "username": "野村 淳",
                    "email": "taro.yamaguchi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "Y2jyGNzT4z",
                    "name": null,
                    "username": "野村 明美",
                    "email": "kobayashi.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "vZZmsqsozb",
                    "name": null,
                    "username": "小泉 陽一",
                    "email": "rekoda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "OYmvEau2Ui",
                    "name": null,
                    "username": "佐藤 直人",
                    "email": "sasada.ryohei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:27.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:27.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 167,
            "name": "aut",
            "shop_id": "J000753015",
            "budget": 19899,
            "actual": 24273,
            "start_time": "2019-02-19 10:29:29",
            "end_time": "2019-03-06 10:29:29",
            "manager": {
                "id": 42,
                "unique_id": "vZZmsqsozb",
                "name": null,
                "username": "小泉 陽一",
                "email": "rekoda@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "6is4ZAh4rh",
                    "name": null,
                    "username": "木村 修平",
                    "email": "yui92@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 11,
                    "unique_id": "ysuGS2JC3I",
                    "name": null,
                    "username": "三宅 裕樹",
                    "email": "kijima.hiroshi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "mSfUyZMxRn",
                    "name": null,
                    "username": "山口 舞",
                    "email": "taichi.tanabe@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "8ohmdIFMhP",
                    "name": null,
                    "username": "木村 直子",
                    "email": "naoko33@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RkRbWEAIHi",
                    "name": null,
                    "username": "笹田 和也",
                    "email": "mai54@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:29.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:29.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 170,
            "name": "eos",
            "shop_id": "J001006387",
            "budget": 17083,
            "actual": 11282,
            "start_time": "2019-02-19 10:29:29",
            "end_time": null,
            "manager": {
                "id": 43,
                "unique_id": "OYmvEau2Ui",
                "name": null,
                "username": "佐藤 直人",
                "email": "sasada.ryohei@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "6is4ZAh4rh",
                    "name": null,
                    "username": "木村 修平",
                    "email": "yui92@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "TKingM2NvD",
                    "name": null,
                    "username": "若松 明美",
                    "email": "bsuzuki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 11,
                    "unique_id": "ysuGS2JC3I",
                    "name": null,
                    "username": "三宅 裕樹",
                    "email": "kijima.hiroshi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "zGVcHiNrvf",
                    "name": null,
                    "username": "中島 真綾",
                    "email": "yamamoto.yoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "KilAcj9VnG",
                    "name": null,
                    "username": "野村 淳",
                    "email": "taro.yamaguchi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ybcRV8GDtk",
                    "name": null,
                    "username": "山本 拓真",
                    "email": "kumiko29@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:29.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:29.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 173,
            "name": "perspiciatis",
            "shop_id": "J001177654",
            "budget": 27868,
            "actual": 44789,
            "start_time": "2019-02-14 10:29:30",
            "end_time": "2019-02-19 10:29:30",
            "manager": {
                "id": 44,
                "unique_id": "jmc4zYplN0",
                "name": null,
                "username": "中村 直樹",
                "email": "takahashi.shuhei@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "6is4ZAh4rh",
                    "name": null,
                    "username": "木村 修平",
                    "email": "yui92@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "gCRMqZFAbT",
                    "name": null,
                    "username": "村山 亮介",
                    "email": "miki43@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "12TXKLCsgQ",
                    "name": null,
                    "username": "石田 聡太郎",
                    "email": "ito.yui@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "sFjROppqw2",
                    "name": null,
                    "username": "青田 浩",
                    "email": "miki.idaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "knW7QRPuf5",
                    "name": null,
                    "username": "中島 美加子",
                    "email": "youichi.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "mSfUyZMxRn",
                    "name": null,
                    "username": "山口 舞",
                    "email": "taichi.tanabe@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "Y2jyGNzT4z",
                    "name": null,
                    "username": "野村 明美",
                    "email": "kobayashi.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 174,
            "name": "voluptatem",
            "shop_id": "J000753015",
            "budget": 17888,
            "actual": 28290,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 44,
                "unique_id": "jmc4zYplN0",
                "name": null,
                "username": "中村 直樹",
                "email": "takahashi.shuhei@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 2,
                    "unique_id": "GJ0tEYBZYb",
                    "name": null,
                    "username": "中津川 春香",
                    "email": "asuka.aoyama@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "knW7QRPuf5",
                    "name": null,
                    "username": "中島 美加子",
                    "email": "youichi.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "4Fd8EYvLLi",
                    "name": null,
                    "username": "杉山 涼平",
                    "email": "tsubasa73@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "Y2jyGNzT4z",
                    "name": null,
                    "username": "野村 明美",
                    "email": "kobayashi.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "i1vzpFelGx",
                    "name": null,
                    "username": "松本 明美",
                    "email": "fsugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "aZbZUAq1eZ",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser49@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 180,
            "name": "vel",
            "shop_id": "J001006387",
            "budget": 11302,
            "actual": 43280,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 45,
                "unique_id": "i1vzpFelGx",
                "name": null,
                "username": "松本 明美",
                "email": "fsugiyama@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "6is4ZAh4rh",
                    "name": null,
                    "username": "木村 修平",
                    "email": "yui92@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ZZKTBSaMhA",
                    "name": null,
                    "username": "杉山 加奈",
                    "email": "mikako.miyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "4Fd8EYvLLi",
                    "name": null,
                    "username": "杉山 涼平",
                    "email": "tsubasa73@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "Y2jyGNzT4z",
                    "name": null,
                    "username": "野村 明美",
                    "email": "kobayashi.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "aZbZUAq1eZ",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser49@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 189,
            "name": "qui",
            "shop_id": "J001177654",
            "budget": 7099,
            "actual": 23437,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 48,
                "unique_id": "bUtDElY69F",
                "name": null,
                "username": "テストユーザー２",
                "email": "testuser48@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "7ujAdOpVQn",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "widaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "mSfUyZMxRn",
                    "name": null,
                    "username": "山口 舞",
                    "email": "taichi.tanabe@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "KilAcj9VnG",
                    "name": null,
                    "username": "野村 淳",
                    "email": "taro.yamaguchi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RkRbWEAIHi",
                    "name": null,
                    "username": "笹田 和也",
                    "email": "mai54@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "i1vzpFelGx",
                    "name": null,
                    "username": "松本 明美",
                    "email": "fsugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ybcRV8GDtk",
                    "name": null,
                    "username": "山本 拓真",
                    "email": "kumiko29@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 50,
                    "unique_id": "wd55jjhkKe",
                    "name": null,
                    "username": "テストユーザー３",
                    "email": "testuser50@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 190,
            "name": "ut",
            "shop_id": "J001178400",
            "budget": 4913,
            "actual": 20912,
            "start_time": "2019-02-19 10:29:32",
            "end_time": null,
            "manager": {
                "id": 48,
                "unique_id": "bUtDElY69F",
                "name": null,
                "username": "テストユーザー２",
                "email": "testuser48@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "PokKhgQOsP",
                    "name": null,
                    "username": "石田 英樹",
                    "email": "murayama.naoki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "YCiRvOyjum",
                    "name": null,
                    "username": "青田 太一",
                    "email": "kiriyama.jun@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "4Fd8EYvLLi",
                    "name": null,
                    "username": "杉山 涼平",
                    "email": "tsubasa73@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "8BqPuKyoPo",
                    "name": null,
                    "username": "桐山 花子",
                    "email": "nakatsugawa.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "CpEH30pqWF",
                    "name": null,
                    "username": "田辺 幹",
                    "email": "yuta36@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ybcRV8GDtk",
                    "name": null,
                    "username": "山本 拓真",
                    "email": "kumiko29@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:32.000000",
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
            "id": 13,
            "name": "aut",
            "shop_id": "J001177654",
            "budget": 28876,
            "actual": 25326,
            "start_time": "2019-03-01 10:29:08",
            "end_time": "2019-03-06 10:29:08",
            "manager": {
                "id": 4,
                "unique_id": "OmUq2fXNmK",
                "name": null,
                "username": "佐々木 花子",
                "email": "yamagishi.akira@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "CbO9rDMCMe",
                    "name": null,
                    "username": "渚 結衣",
                    "email": "akemi72@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "YCiRvOyjum",
                    "name": null,
                    "username": "青田 太一",
                    "email": "kiriyama.jun@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "7ujAdOpVQn",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "widaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "rlecBBHHtW",
                    "name": null,
                    "username": "村山 千代",
                    "email": "yosuke26@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "OYmvEau2Ui",
                    "name": null,
                    "username": "佐藤 直人",
                    "email": "sasada.ryohei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ybcRV8GDtk",
                    "name": null,
                    "username": "山本 拓真",
                    "email": "kumiko29@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 100,
            "name": "nam",
            "shop_id": "J000766202",
            "budget": 22172,
            "actual": 2059,
            "start_time": "2019-02-19 10:29:20",
            "end_time": null,
            "manager": {
                "id": 25,
                "unique_id": "mSfUyZMxRn",
                "name": null,
                "username": "山口 舞",
                "email": "taichi.tanabe@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "TKingM2NvD",
                    "name": null,
                    "username": "若松 明美",
                    "email": "bsuzuki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 11,
                    "unique_id": "ysuGS2JC3I",
                    "name": null,
                    "username": "三宅 裕樹",
                    "email": "kijima.hiroshi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "12TXKLCsgQ",
                    "name": null,
                    "username": "石田 聡太郎",
                    "email": "ito.yui@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "knW7QRPuf5",
                    "name": null,
                    "username": "中島 美加子",
                    "email": "youichi.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ybcRV8GDtk",
                    "name": null,
                    "username": "山本 拓真",
                    "email": "kumiko29@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 105,
            "name": "labore",
            "shop_id": "J000742418",
            "budget": 3036,
            "actual": 12523,
            "start_time": "2019-02-19 10:29:21",
            "end_time": "2019-03-06 10:29:21",
            "manager": {
                "id": 27,
                "unique_id": "6GnVyc6dxB",
                "name": null,
                "username": "桐山 結衣",
                "email": "rei.kudo@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "6is4ZAh4rh",
                    "name": null,
                    "username": "木村 修平",
                    "email": "yui92@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "knW7QRPuf5",
                    "name": null,
                    "username": "中島 美加子",
                    "email": "youichi.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "7ujAdOpVQn",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "widaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "KilAcj9VnG",
                    "name": null,
                    "username": "野村 淳",
                    "email": "taro.yamaguchi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "NPbDw6wa3i",
                    "name": null,
                    "username": "坂本 裕美子",
                    "email": "kaori11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 39,
                    "unique_id": "ZGox2tV9Tg",
                    "name": null,
                    "username": "西之園 翔太",
                    "email": "dsaito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 170,
            "name": "eos",
            "shop_id": "J001006387",
            "budget": 17083,
            "actual": 11282,
            "start_time": "2019-02-19 10:29:29",
            "end_time": null,
            "manager": {
                "id": 43,
                "unique_id": "OYmvEau2Ui",
                "name": null,
                "username": "佐藤 直人",
                "email": "sasada.ryohei@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "6is4ZAh4rh",
                    "name": null,
                    "username": "木村 修平",
                    "email": "yui92@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "TKingM2NvD",
                    "name": null,
                    "username": "若松 明美",
                    "email": "bsuzuki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 11,
                    "unique_id": "ysuGS2JC3I",
                    "name": null,
                    "username": "三宅 裕樹",
                    "email": "kijima.hiroshi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "zGVcHiNrvf",
                    "name": null,
                    "username": "中島 真綾",
                    "email": "yamamoto.yoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "KilAcj9VnG",
                    "name": null,
                    "username": "野村 淳",
                    "email": "taro.yamaguchi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ybcRV8GDtk",
                    "name": null,
                    "username": "山本 拓真",
                    "email": "kumiko29@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:29.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:29.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 190,
            "name": "ut",
            "shop_id": "J001178400",
            "budget": 4913,
            "actual": 20912,
            "start_time": "2019-02-19 10:29:32",
            "end_time": null,
            "manager": {
                "id": 48,
                "unique_id": "bUtDElY69F",
                "name": null,
                "username": "テストユーザー２",
                "email": "testuser48@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "PokKhgQOsP",
                    "name": null,
                    "username": "石田 英樹",
                    "email": "murayama.naoki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "YCiRvOyjum",
                    "name": null,
                    "username": "青田 太一",
                    "email": "kiriyama.jun@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "4Fd8EYvLLi",
                    "name": null,
                    "username": "杉山 涼平",
                    "email": "tsubasa73@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "8BqPuKyoPo",
                    "name": null,
                    "username": "桐山 花子",
                    "email": "nakatsugawa.asuka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "CpEH30pqWF",
                    "name": null,
                    "username": "田辺 幹",
                    "email": "yuta36@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ybcRV8GDtk",
                    "name": null,
                    "username": "山本 拓真",
                    "email": "kumiko29@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:32.000000",
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
            "id": 14,
            "name": "quidem",
            "shop_id": "J000742418",
            "budget": 25856,
            "actual": 45528,
            "start_time": "2019-02-14 10:29:08",
            "end_time": "2019-02-19 10:29:08",
            "manager": {
                "id": 4,
                "unique_id": "OmUq2fXNmK",
                "name": null,
                "username": "佐々木 花子",
                "email": "yamagishi.akira@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 5,
                    "unique_id": "gpqmpbno3v",
                    "name": null,
                    "username": "西之園 翼",
                    "email": "hkijima@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ZZKTBSaMhA",
                    "name": null,
                    "username": "杉山 加奈",
                    "email": "mikako.miyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "rlecBBHHtW",
                    "name": null,
                    "username": "村山 千代",
                    "email": "yosuke26@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "NPbDw6wa3i",
                    "name": null,
                    "username": "坂本 裕美子",
                    "email": "kaori11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "OYmvEau2Ui",
                    "name": null,
                    "username": "佐藤 直人",
                    "email": "sasada.ryohei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ybcRV8GDtk",
                    "name": null,
                    "username": "山本 拓真",
                    "email": "kumiko29@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 78,
            "name": "beatae",
            "shop_id": "J000109445",
            "budget": 21387,
            "actual": 32504,
            "start_time": "2019-02-14 10:29:17",
            "end_time": "2019-02-19 10:29:17",
            "manager": {
                "id": 20,
                "unique_id": "xi8O9bSrjB",
                "name": null,
                "username": "笹田 里佳",
                "email": "mitsuru.yamaguchi@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 4,
                    "unique_id": "OmUq2fXNmK",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "yamagishi.akira@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 9,
                    "unique_id": "AmqoESw7dU",
                    "name": null,
                    "username": "若松 里佳",
                    "email": "sato.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "c7S5fXkA0t",
                    "name": null,
                    "username": "佐藤 舞",
                    "email": "sasada.yuki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "2MLGmpSv2e",
                    "name": null,
                    "username": "斉藤 晃",
                    "email": "yaota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "7ujAdOpVQn",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "widaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RkRbWEAIHi",
                    "name": null,
                    "username": "笹田 和也",
                    "email": "mai54@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "vZZmsqsozb",
                    "name": null,
                    "username": "小泉 陽一",
                    "email": "rekoda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:17.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:17.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 98,
            "name": "dicta",
            "shop_id": "J001006387",
            "budget": 22263,
            "actual": 15099,
            "start_time": "2019-03-01 10:29:20",
            "end_time": "2019-03-06 10:29:20",
            "manager": {
                "id": 25,
                "unique_id": "mSfUyZMxRn",
                "name": null,
                "username": "山口 舞",
                "email": "taichi.tanabe@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "TKingM2NvD",
                    "name": null,
                    "username": "若松 明美",
                    "email": "bsuzuki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "12TXKLCsgQ",
                    "name": null,
                    "username": "石田 聡太郎",
                    "email": "ito.yui@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "sFjROppqw2",
                    "name": null,
                    "username": "青田 浩",
                    "email": "miki.idaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "knW7QRPuf5",
                    "name": null,
                    "username": "中島 美加子",
                    "email": "youichi.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "rlecBBHHtW",
                    "name": null,
                    "username": "村山 千代",
                    "email": "yosuke26@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 106,
            "name": "qui",
            "shop_id": "J000109445",
            "budget": 16910,
            "actual": 12131,
            "start_time": "2019-02-19 10:29:21",
            "end_time": null,
            "manager": {
                "id": 27,
                "unique_id": "6GnVyc6dxB",
                "name": null,
                "username": "桐山 結衣",
                "email": "rei.kudo@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "CbO9rDMCMe",
                    "name": null,
                    "username": "渚 結衣",
                    "email": "akemi72@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "8ohmdIFMhP",
                    "name": null,
                    "username": "木村 直子",
                    "email": "naoko33@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "4Fd8EYvLLi",
                    "name": null,
                    "username": "杉山 涼平",
                    "email": "tsubasa73@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "NPbDw6wa3i",
                    "name": null,
                    "username": "坂本 裕美子",
                    "email": "kaori11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "uDPxDZEeoU",
                    "name": null,
                    "username": "田中 里佳",
                    "email": "taro47@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "vZZmsqsozb",
                    "name": null,
                    "username": "小泉 陽一",
                    "email": "rekoda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 108,
            "name": "ut",
            "shop_id": "J000742418",
            "budget": 16187,
            "actual": 4875,
            "start_time": "2019-02-19 10:29:21",
            "end_time": "2019-03-06 10:29:21",
            "manager": {
                "id": 27,
                "unique_id": "6GnVyc6dxB",
                "name": null,
                "username": "桐山 結衣",
                "email": "rei.kudo@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "CbO9rDMCMe",
                    "name": null,
                    "username": "渚 結衣",
                    "email": "akemi72@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "zGVcHiNrvf",
                    "name": null,
                    "username": "中島 真綾",
                    "email": "yamamoto.yoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "7ujAdOpVQn",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "widaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "NPbDw6wa3i",
                    "name": null,
                    "username": "坂本 裕美子",
                    "email": "kaori11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "uDPxDZEeoU",
                    "name": null,
                    "username": "田中 里佳",
                    "email": "taro47@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 110,
            "name": "sequi",
            "shop_id": "J000109445",
            "budget": 22289,
            "actual": 4987,
            "start_time": "2019-02-19 10:29:21",
            "end_time": "2019-03-06 10:29:21",
            "manager": {
                "id": 28,
                "unique_id": "4Fd8EYvLLi",
                "name": null,
                "username": "杉山 涼平",
                "email": "tsubasa73@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 5,
                    "unique_id": "gpqmpbno3v",
                    "name": null,
                    "username": "西之園 翼",
                    "email": "hkijima@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "2MLGmpSv2e",
                    "name": null,
                    "username": "斉藤 晃",
                    "email": "yaota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "mSfUyZMxRn",
                    "name": null,
                    "username": "山口 舞",
                    "email": "taichi.tanabe@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "vZZmsqsozb",
                    "name": null,
                    "username": "小泉 陽一",
                    "email": "rekoda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "AQPNjqpAJ4",
                    "name": null,
                    "username": "吉本 治",
                    "email": "kumiko69@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 152,
            "name": "laborum",
            "shop_id": "J001006387",
            "budget": 29060,
            "actual": 22299,
            "start_time": "2019-02-19 10:29:27",
            "end_time": null,
            "manager": {
                "id": 38,
                "unique_id": "uDPxDZEeoU",
                "name": null,
                "username": "田中 里佳",
                "email": "taro47@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 5,
                    "unique_id": "gpqmpbno3v",
                    "name": null,
                    "username": "西之園 翼",
                    "email": "hkijima@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "zGVcHiNrvf",
                    "name": null,
                    "username": "中島 真綾",
                    "email": "yamamoto.yoko@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "KilAcj9VnG",
                    "name": null,
                    "username": "野村 淳",
                    "email": "taro.yamaguchi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "Y2jyGNzT4z",
                    "name": null,
                    "username": "野村 明美",
                    "email": "kobayashi.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "vZZmsqsozb",
                    "name": null,
                    "username": "小泉 陽一",
                    "email": "rekoda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "OYmvEau2Ui",
                    "name": null,
                    "username": "佐藤 直人",
                    "email": "sasada.ryohei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:27.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:27.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 173,
            "name": "perspiciatis",
            "shop_id": "J001177654",
            "budget": 27868,
            "actual": 44789,
            "start_time": "2019-02-14 10:29:30",
            "end_time": "2019-02-19 10:29:30",
            "manager": {
                "id": 44,
                "unique_id": "jmc4zYplN0",
                "name": null,
                "username": "中村 直樹",
                "email": "takahashi.shuhei@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "6is4ZAh4rh",
                    "name": null,
                    "username": "木村 修平",
                    "email": "yui92@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "gCRMqZFAbT",
                    "name": null,
                    "username": "村山 亮介",
                    "email": "miki43@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "12TXKLCsgQ",
                    "name": null,
                    "username": "石田 聡太郎",
                    "email": "ito.yui@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "sFjROppqw2",
                    "name": null,
                    "username": "青田 浩",
                    "email": "miki.idaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "knW7QRPuf5",
                    "name": null,
                    "username": "中島 美加子",
                    "email": "youichi.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "mSfUyZMxRn",
                    "name": null,
                    "username": "山口 舞",
                    "email": "taichi.tanabe@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "Y2jyGNzT4z",
                    "name": null,
                    "username": "野村 明美",
                    "email": "kobayashi.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 174,
            "name": "voluptatem",
            "shop_id": "J000753015",
            "budget": 17888,
            "actual": 28290,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 44,
                "unique_id": "jmc4zYplN0",
                "name": null,
                "username": "中村 直樹",
                "email": "takahashi.shuhei@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 2,
                    "unique_id": "GJ0tEYBZYb",
                    "name": null,
                    "username": "中津川 春香",
                    "email": "asuka.aoyama@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "knW7QRPuf5",
                    "name": null,
                    "username": "中島 美加子",
                    "email": "youichi.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "4Fd8EYvLLi",
                    "name": null,
                    "username": "杉山 涼平",
                    "email": "tsubasa73@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "Y2jyGNzT4z",
                    "name": null,
                    "username": "野村 明美",
                    "email": "kobayashi.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "i1vzpFelGx",
                    "name": null,
                    "username": "松本 明美",
                    "email": "fsugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "aZbZUAq1eZ",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser49@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:30.000000",
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
            "id": 58,
            "name": "eaque",
            "shop_id": "J000753015",
            "budget": 5909,
            "actual": 9630,
            "start_time": "2019-02-19 10:29:14",
            "end_time": null,
            "manager": {
                "id": 15,
                "unique_id": "e2DzH40Kid",
                "name": null,
                "username": "浜田 修平",
                "email": "koizumi.kaori@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "V3tiSHkTnb",
                    "name": null,
                    "username": "中津川 幹",
                    "email": "ishida.jun@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "c7S5fXkA0t",
                    "name": null,
                    "username": "佐藤 舞",
                    "email": "sasada.yuki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "BJge1E8ApF",
                    "name": null,
                    "username": "藤本 翼",
                    "email": "kyosuke00@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "CpEH30pqWF",
                    "name": null,
                    "username": "田辺 幹",
                    "email": "yuta36@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 50,
                    "unique_id": "wd55jjhkKe",
                    "name": null,
                    "username": "テストユーザー３",
                    "email": "testuser50@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:14.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:14.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 89,
            "name": "voluptatibus",
            "shop_id": "J001006387",
            "budget": 10541,
            "actual": 33803,
            "start_time": "2019-02-14 10:29:19",
            "end_time": "2019-02-19 10:29:19",
            "manager": {
                "id": 23,
                "unique_id": "2MLGmpSv2e",
                "name": null,
                "username": "斉藤 晃",
                "email": "yaota@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 4,
                    "unique_id": "OmUq2fXNmK",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "yamagishi.akira@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "PokKhgQOsP",
                    "name": null,
                    "username": "石田 英樹",
                    "email": "murayama.naoki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "CbO9rDMCMe",
                    "name": null,
                    "username": "渚 結衣",
                    "email": "akemi72@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "NPbDw6wa3i",
                    "name": null,
                    "username": "坂本 裕美子",
                    "email": "kaori11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "rpIcYzqe3R",
                    "name": null,
                    "username": "若松 あすか",
                    "email": "yoko21@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 97,
            "name": "odit",
            "shop_id": "J000109445",
            "budget": 7447,
            "actual": 15166,
            "start_time": "2019-02-19 10:29:20",
            "end_time": null,
            "manager": {
                "id": 25,
                "unique_id": "mSfUyZMxRn",
                "name": null,
                "username": "山口 舞",
                "email": "taichi.tanabe@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 9,
                    "unique_id": "AmqoESw7dU",
                    "name": null,
                    "username": "若松 里佳",
                    "email": "sato.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "12TXKLCsgQ",
                    "name": null,
                    "username": "石田 聡太郎",
                    "email": "ito.yui@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "sFjROppqw2",
                    "name": null,
                    "username": "青田 浩",
                    "email": "miki.idaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "knW7QRPuf5",
                    "name": null,
                    "username": "中島 美加子",
                    "email": "youichi.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ybcRV8GDtk",
                    "name": null,
                    "username": "山本 拓真",
                    "email": "kumiko29@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 131,
            "name": "natus",
            "shop_id": "J000109445",
            "budget": 13758,
            "actual": 23599,
            "start_time": "2019-02-19 10:29:24",
            "end_time": null,
            "manager": {
                "id": 33,
                "unique_id": "BJge1E8ApF",
                "name": null,
                "username": "藤本 翼",
                "email": "kyosuke00@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "TKingM2NvD",
                    "name": null,
                    "username": "若松 明美",
                    "email": "bsuzuki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 15,
                    "unique_id": "e2DzH40Kid",
                    "name": null,
                    "username": "浜田 修平",
                    "email": "koizumi.kaori@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "2MLGmpSv2e",
                    "name": null,
                    "username": "斉藤 晃",
                    "email": "yaota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RkRbWEAIHi",
                    "name": null,
                    "username": "笹田 和也",
                    "email": "mai54@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "NPbDw6wa3i",
                    "name": null,
                    "username": "坂本 裕美子",
                    "email": "kaori11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "uDPxDZEeoU",
                    "name": null,
                    "username": "田中 里佳",
                    "email": "taro47@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "i1vzpFelGx",
                    "name": null,
                    "username": "松本 明美",
                    "email": "fsugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "AQPNjqpAJ4",
                    "name": null,
                    "username": "吉本 治",
                    "email": "kumiko69@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:24.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:24.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 150,
            "name": "pariatur",
            "shop_id": "J001182216",
            "budget": 16144,
            "actual": 16966,
            "start_time": "2019-02-14 10:29:27",
            "end_time": "2019-02-19 10:29:27",
            "manager": {
                "id": 38,
                "unique_id": "uDPxDZEeoU",
                "name": null,
                "username": "田中 里佳",
                "email": "taro47@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ZZKTBSaMhA",
                    "name": null,
                    "username": "杉山 加奈",
                    "email": "mikako.miyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "V3tiSHkTnb",
                    "name": null,
                    "username": "中津川 幹",
                    "email": "ishida.jun@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "BJge1E8ApF",
                    "name": null,
                    "username": "藤本 翼",
                    "email": "kyosuke00@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "vZZmsqsozb",
                    "name": null,
                    "username": "小泉 陽一",
                    "email": "rekoda@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "OYmvEau2Ui",
                    "name": null,
                    "username": "佐藤 直人",
                    "email": "sasada.ryohei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:27.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:27.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 151,
            "name": "quia",
            "shop_id": "J000753015",
            "budget": 11760,
            "actual": 27744,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 38,
                "unique_id": "uDPxDZEeoU",
                "name": null,
                "username": "田中 里佳",
                "email": "taro47@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 5,
                    "unique_id": "gpqmpbno3v",
                    "name": null,
                    "username": "西之園 翼",
                    "email": "hkijima@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "45QTCAoWlx",
                    "name": null,
                    "username": "吉本 太郎",
                    "email": "naoto11@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "KilAcj9VnG",
                    "name": null,
                    "username": "野村 淳",
                    "email": "taro.yamaguchi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "BJge1E8ApF",
                    "name": null,
                    "username": "藤本 翼",
                    "email": "kyosuke00@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "OYmvEau2Ui",
                    "name": null,
                    "username": "佐藤 直人",
                    "email": "sasada.ryohei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "i1vzpFelGx",
                    "name": null,
                    "username": "松本 明美",
                    "email": "fsugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:27.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:27.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 167,
            "name": "aut",
            "shop_id": "J000753015",
            "budget": 19899,
            "actual": 24273,
            "start_time": "2019-02-19 10:29:29",
            "end_time": "2019-03-06 10:29:29",
            "manager": {
                "id": 42,
                "unique_id": "vZZmsqsozb",
                "name": null,
                "username": "小泉 陽一",
                "email": "rekoda@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "6is4ZAh4rh",
                    "name": null,
                    "username": "木村 修平",
                    "email": "yui92@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 11,
                    "unique_id": "ysuGS2JC3I",
                    "name": null,
                    "username": "三宅 裕樹",
                    "email": "kijima.hiroshi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "mSfUyZMxRn",
                    "name": null,
                    "username": "山口 舞",
                    "email": "taichi.tanabe@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "8ohmdIFMhP",
                    "name": null,
                    "username": "木村 直子",
                    "email": "naoko33@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RkRbWEAIHi",
                    "name": null,
                    "username": "笹田 和也",
                    "email": "mai54@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:29.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:29.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 180,
            "name": "vel",
            "shop_id": "J001006387",
            "budget": 11302,
            "actual": 43280,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 45,
                "unique_id": "i1vzpFelGx",
                "name": null,
                "username": "松本 明美",
                "email": "fsugiyama@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "6is4ZAh4rh",
                    "name": null,
                    "username": "木村 修平",
                    "email": "yui92@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ZZKTBSaMhA",
                    "name": null,
                    "username": "杉山 加奈",
                    "email": "mikako.miyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "4Fd8EYvLLi",
                    "name": null,
                    "username": "杉山 涼平",
                    "email": "tsubasa73@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "Y2jyGNzT4z",
                    "name": null,
                    "username": "野村 明美",
                    "email": "kobayashi.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "aZbZUAq1eZ",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser49@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 189,
            "name": "qui",
            "shop_id": "J001177654",
            "budget": 7099,
            "actual": 23437,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 48,
                "unique_id": "bUtDElY69F",
                "name": null,
                "username": "テストユーザー２",
                "email": "testuser48@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
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
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "xi8O9bSrjB",
                    "name": null,
                    "username": "笹田 里佳",
                    "email": "mitsuru.yamaguchi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "7ujAdOpVQn",
                    "name": null,
                    "username": "中島 結衣",
                    "email": "widaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "mSfUyZMxRn",
                    "name": null,
                    "username": "山口 舞",
                    "email": "taichi.tanabe@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "KilAcj9VnG",
                    "name": null,
                    "username": "野村 淳",
                    "email": "taro.yamaguchi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RkRbWEAIHi",
                    "name": null,
                    "username": "笹田 和也",
                    "email": "mai54@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "i1vzpFelGx",
                    "name": null,
                    "username": "松本 明美",
                    "email": "fsugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ybcRV8GDtk",
                    "name": null,
                    "username": "山本 拓真",
                    "email": "kumiko29@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 50,
                    "unique_id": "wd55jjhkKe",
                    "name": null,
                    "username": "テストユーザー３",
                    "email": "testuser50@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:32.000000",
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
            "session": "esojnh1JSHGn4CCG",
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
        "id": 150,
        "name": "pariatur",
        "shop_id": "J001182216",
        "budget": 16144,
        "actual": 16966,
        "start_time": "2019-02-14 10:29:27",
        "end_time": "2019-02-19 10:29:27",
        "manager": {
            "id": 38,
            "unique_id": "uDPxDZEeoU",
            "name": null,
            "username": "田中 里佳",
            "email": "taro47@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 6,
                "unique_id": "45QTCAoWlx",
                "name": null,
                "username": "吉本 太郎",
                "email": "naoto11@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 10,
                "unique_id": "ZZKTBSaMhA",
                "name": null,
                "username": "杉山 加奈",
                "email": "mikako.miyake@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 14,
                "unique_id": "V3tiSHkTnb",
                "name": null,
                "username": "中津川 幹",
                "email": "ishida.jun@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 20,
                "unique_id": "xi8O9bSrjB",
                "name": null,
                "username": "笹田 里佳",
                "email": "mitsuru.yamaguchi@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 33,
                "unique_id": "BJge1E8ApF",
                "name": null,
                "username": "藤本 翼",
                "email": "kyosuke00@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 42,
                "unique_id": "vZZmsqsozb",
                "name": null,
                "username": "小泉 陽一",
                "email": "rekoda@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 43,
                "unique_id": "OYmvEau2Ui",
                "name": null,
                "username": "佐藤 直人",
                "email": "sasada.ryohei@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 44,
                "unique_id": "jmc4zYplN0",
                "name": null,
                "username": "中村 直樹",
                "email": "takahashi.shuhei@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-24 10:29:27.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:27.000000",
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
    -d '{"join_status":"Kimmi41a1f3TduyW"}'

```

```javascript
const url = new URL("http://localhost/api/guest/sessions/{session}");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "join_status": "Kimmi41a1f3TduyW"
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
        "paid": 0,
        "plus_minus": null,
        "attribute_name": null,
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-02-24 10:29:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:33.000000",
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
    -d '{"unique_id":"ashuroIIbhgUtMwP","username":"sT81JjhCJMnD3Zbj","password":"gC9djX0f0afkQbql","unique_id_search_flag":true,"username_search_flag":true}'

```

```javascript
const url = new URL("http://localhost/api/profile/update");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "ashuroIIbhgUtMwP",
    "username": "sT81JjhCJMnD3Zbj",
    "password": "gC9djX0f0afkQbql",
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
            "date": "2019-02-24 10:29:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:42.000000",
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
            "id": 2,
            "unique_id": "DDDDDDDD",
            "name": null,
            "username": "AAAAAAAAAAA",
            "email": "new@new.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "unique_id": "6is4ZAh4rh",
            "name": null,
            "username": "木村 修平",
            "email": "yui92@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "unique_id": "OmUq2fXNmK",
            "name": null,
            "username": "佐々木 花子",
            "email": "yamagishi.akira@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 6,
            "unique_id": "45QTCAoWlx",
            "name": null,
            "username": "吉本 太郎",
            "email": "naoto11@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 7,
            "unique_id": "TKingM2NvD",
            "name": null,
            "username": "若松 明美",
            "email": "bsuzuki@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 8,
            "unique_id": "gCRMqZFAbT",
            "name": null,
            "username": "村山 亮介",
            "email": "miki43@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 11,
            "unique_id": "ysuGS2JC3I",
            "name": null,
            "username": "三宅 裕樹",
            "email": "kijima.hiroshi@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "sFjROppqw2",
            "name": null,
            "username": "青田 浩",
            "email": "miki.idaka@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 16,
            "unique_id": "PokKhgQOsP",
            "name": null,
            "username": "石田 英樹",
            "email": "murayama.naoki@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 18,
            "unique_id": "CbO9rDMCMe",
            "name": null,
            "username": "渚 結衣",
            "email": "akemi72@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 21,
            "unique_id": "knW7QRPuf5",
            "name": null,
            "username": "中島 美加子",
            "email": "youichi.hirokawa@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 24,
            "unique_id": "7ujAdOpVQn",
            "name": null,
            "username": "中島 結衣",
            "email": "widaka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 25,
            "unique_id": "mSfUyZMxRn",
            "name": null,
            "username": "山口 舞",
            "email": "taichi.tanabe@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "8ohmdIFMhP",
            "name": null,
            "username": "木村 直子",
            "email": "naoko33@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "4Fd8EYvLLi",
            "name": null,
            "username": "杉山 涼平",
            "email": "tsubasa73@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 29,
            "unique_id": "KilAcj9VnG",
            "name": null,
            "username": "野村 淳",
            "email": "taro.yamaguchi@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "unique_id": "BJge1E8ApF",
            "name": null,
            "username": "藤本 翼",
            "email": "kyosuke00@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 35,
            "unique_id": "NPbDw6wa3i",
            "name": null,
            "username": "坂本 裕美子",
            "email": "kaori11@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 36,
            "unique_id": "y8jZCrH5W8",
            "name": null,
            "username": "井高 知実",
            "email": "yosuke.kanou@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 37,
            "unique_id": "rpIcYzqe3R",
            "name": null,
            "username": "若松 あすか",
            "email": "yoko21@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "uDPxDZEeoU",
            "name": null,
            "username": "田中 里佳",
            "email": "taro47@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 42,
            "unique_id": "vZZmsqsozb",
            "name": null,
            "username": "小泉 陽一",
            "email": "rekoda@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 46,
            "unique_id": "ybcRV8GDtk",
            "name": null,
            "username": "山本 拓真",
            "email": "kumiko29@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "AQPNjqpAJ4",
            "name": null,
            "username": "吉本 治",
            "email": "kumiko69@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 49,
            "unique_id": "aZbZUAq1eZ",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser49@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "wd55jjhkKe",
            "name": null,
            "username": "テストユーザー３",
            "email": "testuser50@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 55,
            "unique_id": "KpeBpnwpdi",
            "name": null,
            "username": "aaaa",
            "email": "nerPlw@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-02-24 10:29:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 56,
            "unique_id": "9oGWC3lVF6",
            "name": null,
            "username": "aaaa",
            "email": "k5qizGf@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-02-24 10:29:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 57,
            "unique_id": "JLKxDSG5Xa",
            "name": null,
            "username": "aaaa",
            "email": "yiErJrM0@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-02-24 10:29:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:41.000000",
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
    -d '{"username":"KIUdv3kAb1LrdV8i"}'

```

```javascript
const url = new URL("http://localhost/api/search/forward_by_username");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "username": "KIUdv3kAb1LrdV8i"
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
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "bUtDElY69F",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser48@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 49,
            "unique_id": "aZbZUAq1eZ",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser49@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "wd55jjhkKe",
            "name": null,
            "username": "テストユーザー３",
            "email": "testuser50@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
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
    -d '{"unique_id":"UqQiOC22AhfhFh0O"}'

```

```javascript
const url = new URL("http://localhost/api/search/perfect_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "UqQiOC22AhfhFh0O"
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
            "date": "2019-02-24 10:29:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:33.000000",
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
    -d '{"unique_id":"nO4bdIwRiPcy5sXv"}'

```

```javascript
const url = new URL("http://localhost/api/search/forward_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "nO4bdIwRiPcy5sXv"
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
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 7,
            "unique_id": "TKingM2NvD",
            "name": null,
            "username": "若松 明美",
            "email": "bsuzuki@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
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
            "session": "1SjAQnanvnS0bhZh",
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
## sessions.users.store ◆セッションにユーザーを追加する

> Example request:

```bash
curl -X POST "http://localhost/api/sessions/{session}/users" \
    -H "Content-Type: application/json" \
    -d '{"user_id":"IEstlfboMPlI6JAr","join_status":"qaqxd5F6nuLvcoDF","paid":4,"budget":9,"budget_actual":14}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "CmWiobxzYVxDvfz6",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": "IEstlfboMPlI6JAr",
    "join_status": "qaqxd5F6nuLvcoDF",
    "paid": 4,
    "budget": 9,
    "budget_actual": 14
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
            "id": 48,
            "unique_id": "bUtDElY69F",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser48@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 0,
            "plus_minus": 944,
            "attribute_name": "est",
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
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
            "session": "KDUFAyKTeimbXnKW",
            "user": "5tBExj9xf0m5SjoT",
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
        "id": 48,
        "unique_id": "bUtDElY69F",
        "name": null,
        "username": "テストユーザー２",
        "email": "testuser48@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 944,
        "attribute_name": "est",
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-02-24 10:29:07.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:33.000000",
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
    -d '{"join_status":9,"paid":18,"plus_minus":5,"attribute_name":"Ka0rzrs9LnOGEPQG","budget":15,"budget_actual":5}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "MFoc5vDKgi088YUJ",
            "user": "wqKbt9VTJE6NI2Hz",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "join_status": 9,
    "paid": 18,
    "plus_minus": 5,
    "attribute_name": "Ka0rzrs9LnOGEPQG",
    "budget": 15,
    "budget_actual": 5
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
        "id": 34,
        "unique_id": "Y2jyGNzT4z",
        "name": null,
        "username": "野村 明美",
        "email": "kobayashi.manabu@example.org",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 10000,
        "attribute_name": "ut",
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-02-24 10:29:07.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:07.000000",
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
            "session": "isjs5NXezRAofn2q",
            "user": "I2MjT9ACGq3BQ3pt",
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
            "session": "Z8mMNZk59xdH5s3K",
            "user": "GzaesQJuHmhLZE49",
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
        "id": 12,
        "unique_id": "12TXKLCsgQ",
        "name": null,
        "username": "石田 聡太郎",
        "email": "ito.yui@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "deny",
        "paid": 0,
        "plus_minus": null,
        "attribute_name": null,
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-02-24 10:29:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
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
            "session": "IjvaGbBWCRXL60z5",
            "group": "odOb0xLtYX4CfdUS",
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
            "name": "facilis",
            "shop_id": "J000766202",
            "budget": 11274,
            "actual": 11521,
            "start_time": "2019-02-19 10:29:07",
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 9,
                    "unique_id": "AmqoESw7dU",
                    "name": null,
                    "username": "若松 里佳",
                    "email": "sato.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "c7S5fXkA0t",
                    "name": null,
                    "username": "佐藤 舞",
                    "email": "sasada.yuki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "2MLGmpSv2e",
                    "name": null,
                    "username": "斉藤 晃",
                    "email": "yaota@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "Y2jyGNzT4z",
                    "name": null,
                    "username": "野村 明美",
                    "email": "kobayashi.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "expedita",
            "shop_id": "J000766202",
            "budget": 14415,
            "actual": 31238,
            "start_time": "2019-02-19 10:29:07",
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 14,
                    "unique_id": "V3tiSHkTnb",
                    "name": null,
                    "username": "中津川 幹",
                    "email": "ishida.jun@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "c7S5fXkA0t",
                    "name": null,
                    "username": "佐藤 舞",
                    "email": "sasada.yuki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "Y2jyGNzT4z",
                    "name": null,
                    "username": "野村 明美",
                    "email": "kobayashi.manabu@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "bUtDElY69F",
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
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "quasi",
            "shop_id": "J001177654",
            "budget": 15178,
            "actual": 4306,
            "start_time": "2019-02-19 10:29:07",
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 12,
                    "unique_id": "12TXKLCsgQ",
                    "name": null,
                    "username": "石田 聡太郎",
                    "email": "ito.yui@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 15,
                    "unique_id": "e2DzH40Kid",
                    "name": null,
                    "username": "浜田 修平",
                    "email": "koizumi.kaori@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "c7S5fXkA0t",
                    "name": null,
                    "username": "佐藤 舞",
                    "email": "sasada.yuki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "RkRbWEAIHi",
                    "name": null,
                    "username": "笹田 和也",
                    "email": "mai54@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "debitis",
            "shop_id": "J000742418",
            "budget": 28203,
            "actual": 23770,
            "start_time": "2019-02-19 10:29:07",
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
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 9,
                    "unique_id": "AmqoESw7dU",
                    "name": null,
                    "username": "若松 里佳",
                    "email": "sato.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "12TXKLCsgQ",
                    "name": null,
                    "username": "石田 聡太郎",
                    "email": "ito.yui@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "6GnVyc6dxB",
                    "name": null,
                    "username": "桐山 結衣",
                    "email": "rei.kudo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "jmc4zYplN0",
                    "name": null,
                    "username": "中村 直樹",
                    "email": "takahashi.shuhei@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "bUtDElY69F",
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
                        "date": "2019-02-24 10:29:07.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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
    -d '{"name":"sTMlxaaiO0AWIIr8","shop_id":"ZvRzywj3q3YjshB4","budget":10,"actual":18,"start_time":"KncCV0KhjGMS5TYT","end_time":"ZAlp0pHB6rE0xhkk"}'

```

```javascript
const url = new URL("http://localhost/api/sessions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "sTMlxaaiO0AWIIr8",
    "shop_id": "ZvRzywj3q3YjshB4",
    "budget": 10,
    "actual": 18,
    "start_time": "KncCV0KhjGMS5TYT",
    "end_time": "ZAlp0pHB6rE0xhkk"
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
        "name": "newSessionitNqw",
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
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [],
        "created_at": {
            "date": "2019-02-24 10:29:42.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:42.000000",
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
            "session": "9btrzf1IILdB3vtE",
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
        "name": "newSessionitNqw",
        "shop_id": "34",
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
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [],
        "created_at": {
            "date": "2019-02-24 10:29:42.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:42.000000",
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
    -d '{"name":"gQYCA8ixkwaOiwXS","shop_id":11,"budget":11,"actual":2,"start_time":"jb1F3jYBrd0wEmw4","end_time":"dVUt8uyQV0X9EVa9"}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "ZMvJZqyMbsZDWeZW",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "gQYCA8ixkwaOiwXS",
    "shop_id": 11,
    "budget": 11,
    "actual": 2,
    "start_time": "jb1F3jYBrd0wEmw4",
    "end_time": "dVUt8uyQV0X9EVa9"
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
        "name": "newUpdateSessionpvoYg",
        "shop_id": "34",
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
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 9,
                "unique_id": "AmqoESw7dU",
                "name": null,
                "username": "若松 里佳",
                "email": "sato.nanami@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 12,
                "unique_id": "12TXKLCsgQ",
                "name": null,
                "username": "石田 聡太郎",
                "email": "ito.yui@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 27,
                "unique_id": "6GnVyc6dxB",
                "name": null,
                "username": "桐山 結衣",
                "email": "rei.kudo@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 44,
                "unique_id": "jmc4zYplN0",
                "name": null,
                "username": "中村 直樹",
                "email": "takahashi.shuhei@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 48,
                "unique_id": "bUtDElY69F",
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
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:33.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-24 10:29:07.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 10:29:42.000000",
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
            "session": "OERYcg99RK5Sv1Vq",
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
            "session": "CrVpyixXSRaU8JLE",
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
            "id": 12,
            "unique_id": "12TXKLCsgQ",
            "name": null,
            "username": "石田 聡太郎",
            "email": "ito.yui@example.com",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "est",
                "plus_minus": 944,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "V3tiSHkTnb",
            "name": null,
            "username": "中津川 幹",
            "email": "ishida.jun@example.org",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "hic",
                "plus_minus": 1656,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 15,
            "unique_id": "e2DzH40Kid",
            "name": null,
            "username": "浜田 修平",
            "email": "koizumi.kaori@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "updateftYPX",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 27,
            "unique_id": "6GnVyc6dxB",
            "name": null,
            "username": "桐山 結衣",
            "email": "rei.kudo@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "updateftYPX",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "RkRbWEAIHi",
            "name": null,
            "username": "笹田 和也",
            "email": "mai54@example.com",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "est",
                "plus_minus": 944,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 44,
            "unique_id": "jmc4zYplN0",
            "name": null,
            "username": "中村 直樹",
            "email": "takahashi.shuhei@example.org",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ut",
                "plus_minus": 2123,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "bUtDElY69F",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser48@example.com",
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
                        "date": "2019-02-24 10:29:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 10:29:33.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "est",
                "plus_minus": 944,
                "created_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 10:29:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "unique_id": "n6UcHpTTpE",
            "name": null,
            "username": "aaaa",
            "email": "j81ug@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-24 10:29:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 32,
            "unique_id": "rlecBBHHtW",
            "name": null,
            "username": "村山 千代",
            "email": "yosuke26@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-24 10:29:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 10:29:07.000000",
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


